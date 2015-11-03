<?php defined('SYSPATH') OR die('No direct access allowed.');

class Transactions_Controller extends Dashboard_Controller {

    const ALLOW_PRODUCTION = FALSE;
 
    public function index() {
        $index = new View('transactions/index');
        $index->transactions = $this->transaction_model->find_all();
        $this->template->content = $index;
    }

    public function save(){
        if(request::is_ajax() && request::method() === 'post'){
            $this->auto_render = FALSE;
            $post = security::xss_clean($this->input->post());

            $this->transaction_model->insert( $post );
        }
    }
}