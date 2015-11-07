<?php defined('SYSPATH') OR die('No direct access allowed.');

class Offices_Controller extends Dashboard_Controller {

    const ALLOW_PRODUCTION = FALSE;

    public function index(){
		$index = new View('offices/index');
        $index->offices = $this->office_model->with('district')->find_all();
        $this->template->content = $index;
    }

    public function save(){
        if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;
            $post = security::xss_clean( $this->input->post() );

            $this->office_model->insert( $post );
        }
    }

    public function update($id){
        if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;
            $post = security::xss_clean($this->input->post());

            $office = $this->office_model->find($id);
            
            $office->district_id = $post['district_id'];
            $office->name = $post['name'];

            echo $office->save();
        }
    }

    public function delete($id){
        if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;

            echo $this->office_model->delete($id);
        }
    }
}