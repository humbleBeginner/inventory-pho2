<?php defined('SYSPATH') OR die('No direct access allowed.');

use Carbon\Carbon;

class Dashboard_Controller extends Template_Controller {

    const ALLOW_PRODUCTION = FALSE;

    public $template = 'templates/_main_template';

    public function __construct(){
        parent::__construct();

        $this->auth = new Auth;
        $this->cache = Cache::instance();
        $this->session = Session::instance();

        if (!$this->auth->logged_in()){
            $this->session->set("requested_url","/".url::current()); // this will redirect from the login page back to this page/
            url::redirect('/auth');
        }
        
        $settings = json_decode($this->setting_model->find(1)->configs);
        $this->template->settings = $settings;
    }

    public function index(){
        $post = [
            'username' => 'user1',
            'email' => 'user@1.com',
            'password' => 'user1'
        ];
        #echo Kohana::Debug($post);
        #die();
        $view = new View('dashboard/index');
        $this->template->content = $view;
    }

    public function logout(){
        $this->auth->logout();
        url::redirect('/auth');
    }
}