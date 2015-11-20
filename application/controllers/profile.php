<?php defined('SYSPATH') OR die('No direct access allowed.');

class Profile_Controller extends Dashboard_Controller {

    const ALLOW_PRODUCTION = FALSE;

    public function index(){
		$index = new View('profile/index');
       $index->offices = $this->office_model->with('district')->find_all();
       $this->template->content = $index;

    }

    public function user_info(){
        if(request::is_ajax() && request::method() == 'post'){
            $this->auto_render = FALSE;
		
            $post = security::xss_clean( $this->input->post() );
				
			$birth = date("F j, Y",strtotime($post["birthday"]));	
			
			$data = array(
			"fullname" => ucwords($post["name"]),
			"gender" => $post["gender"],
			"birthday" => $birth,
			"mstatus" => $post["mstatus"]
			);
		
			$json = json_encode($data,TRUE);
			$data_user_info = array("user_information" => $json);
		log_helper::add("2",$this->user_log,$this->user_id,"Profile Basic Information was Successfully Updated");
            $this->setting_model->update_user( $this->auth->get_user()->id, $data_user_info );
        }
    }
	
	    public function contact_info(){
        if(request::is_ajax() && request::method() == 'post'){
            $this->auto_render = FALSE;
			   //$settings = json_decode($this->setting_model->find(1)->configs);
        //$this->template->settings = $settings;
           
            $post = security::xss_clean( $this->input->post() );
	
			$data = array(
			"mobile" => $post["mobile"],
			"email" => $post["email"],
			"twitter" => $post["twitter"],
			"skype" => $post["skype"]
			);
			
			
			
			$json = json_encode($data,TRUE);
			$data_contact_info = array("contact_information" => $json);
			log_helper::add("2",$this->user_log,$this->user_id,"Profile Contact Information was Successfully Updated");
            $this->setting_model->update_user($this->auth->get_user()->id, $data_contact_info );
        }
    }

    public function delete($id){
        if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;

            echo $this->office_model->delete($id);
        }
    }
	
	public function profile_pic(){
		if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;
			
		$client_id =	$this->auth->get_user()->id;
		//print_r($_FILES['profile-image']);exit;
		if (!empty($_FILES['profile-image']['name'])) {
			$tempFile = $_FILES["profile-image"]["tmp_name"];
			$filename = $_FILES["profile-image"]["name"];
			$targetPath = 'assets/uploads/';
			$temp = explode(".",$filename);
			$extension = end($temp);
					 if(!is_dir($targetPath)){
					mkdir($targetPath, 0700);
						$salt = 'user-'.$client_id.'-'.uniqid().'-';
						$targetFile =  $targetPath.$salt.$filename;
						$file_data_name = array("name" =>$filename,"location" => $targetPath, "extension" => $extension);
						$this->start_upload($targetFile,$tempFile);
						$json = json_encode($file_data_name,TRUE);	
					}else{
						$salt = 'user-'.$client_id.'-'.uniqid().'-';
						$targetFile =  $targetPath.$salt.$filename;  
						$file_data_name = array("name" =>$filename,"location" => $targetFile, "extension" => $extension);
						$this->start_upload($targetFile,$tempFile);
						$json = json_encode($file_data_name,TRUE);
					}
					}else{
					$json = $this->auth->get_user()->user_avatar;
					}	
					
			$data_profile_pic = array("user_avatar" => $json);
			log_helper::add("2",$this->user_log,$this->user_id,"Profile Picture was Successfully Updated");
			$this->setting_model->update_user($this->auth->get_user()->id,$data_profile_pic );
		}
	}
			
	public function start_upload($targetFile,$tempFile){
  
		move_uploaded_file($tempFile,$targetFile); 
	}
			
			
}