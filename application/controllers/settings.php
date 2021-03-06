<?php defined('SYSPATH') OR die('No direct access allowed.');

use Carbon\Carbon;

class Settings_Controller extends Dashboard_Controller {

    const ALLOW_PRODUCTION = FALSE;

    // public function index(){
        // $index = new View('categories/index');
        // $index->categories = $this->category_model->find_all();
        // $this->template->content = $index;
    // }

    public function save(){
        if(request::is_ajax() && request::method() == 'post'){
            $this->auto_render = FALSE;
           $client_id =	$this->auth->get_user()->id;
		  $settings = json_decode($this->setting_model->find(1)->configs);
			$site_address = $this->input->post('site-address',null,true);
			$site_name = $this->input->post('site-name',null,true);
			$site_currency = $this->input->post('site-currency',null,true);
			$item_expiration = $this->input->post('item-expiration',null,true);
			$notiftype = $this->input->post('notiftype',null,true);
			$notifdate = $this->input->post('notifdate',null,true);
		
		if (!empty($_FILES['site-favicon']['name'])) {
			$tempFile = $_FILES["site-favicon"]["tmp_name"];
			$filename = $_FILES["site-favicon"]["name"];
			$targetPath = 'assets/uploads/favicon/';
			$temp = explode(".",$filename);
			$extension = end($temp);
					 if(!is_dir($targetPath)){
					mkdir($targetPath, 0700);
						$salt = 'favicon-'.$client_id.'-'.uniqid().'-';
						$targetFile =  $targetPath.$salt.$filename;
						$file_data_name = array("name" =>$filename,"location" => $targetPath, "extension" => $extension);
						$this->start_upload($targetFile,$tempFile);
						$json = json_encode($file_data_name,TRUE);	
					}else{
						$salt = 'favicon-'.$client_id.'-'.uniqid().'-';
						$targetFile =  $targetPath.$salt.$filename;  
						$file_data_name = array("name" =>$filename,"location" => $targetFile, "extension" => $extension);
						$this->start_upload($targetFile,$tempFile);
						$json = json_encode($file_data_name,TRUE);
					}
					}else{
					$json = $settings->favicon;
					}	
			
			$site_currency_information = explode("|",$site_currency);
			$site_currency_symbol = "&".$site_currency_information[0].";";
			
			$data = array(
			"name" => $site_name,
			"address" => $site_address,
			"currency" => $site_currency_symbol,
			"favicon" => $json,
			"item_expiration" => $item_expiration,
			"notiftype" => $notiftype,
			"notifdate" => $notifdate
			);
			
			$data_json = json_encode($data,TRUE);
			$data_setting = array("configs" => $data_json);
			log_helper::add("3",$this->current_role,$this->user_id,"Updated the System Settings");
          $this->setting_model->update( "1", $data_setting );
        }
    }
	
		public function start_upload($targetFile,$tempFile){
  
		move_uploaded_file($tempFile,$targetFile); 
	}
	
	public function getOne(){
	     if(request::is_ajax() AND request::method() == 'get'){
            $this->auto_render = FALSE;
            $setting = $this->setting_model->getOne();
            echo json_encode($setting);
        }
		}
}