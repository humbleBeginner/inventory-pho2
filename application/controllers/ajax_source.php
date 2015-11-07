<?php defined('SYSPATH') OR die('No direct access allowed.');

class Ajax_Source_Controller extends Dashboard_Controller {

    const ALLOW_PRODUCTION = FALSE;

    public $auto_render = FALSE;

    public function index(){
        $suppliers = $this->supplier_model->getAll(TRUE);
        $categories = $this->category_model->getAll(TRUE);
        $items = $this->item_model->getAllOnStock();
        foreach ($items as $key => $value) {
            $arr[$key] = $value;
        }
        // $settings = $this->setting_model->find(1)->as_array();

        $items = $arr;
        $districts = $this->district_model->getAll(TRUE);
        $offices = $this->office_model->getAll(TRUE);

        $settings = $this->setting_model->find_all();
        foreach($settings as $key){
            $settingsArr[] = $key->as_array();
        }
        $settings = $settingsArr;
        echo json_encode(compact('suppliers', 'categories', 'items', 'districts','offices','settings')) ;
    }

}
