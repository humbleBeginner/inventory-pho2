<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * Default Kohana controller. This controller should NOT be used in production.
 * It is for demonstration purposes only!
 *
 * @package    Core
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */

use Carbon\Carbon;

class Welcome_Controller extends Template_Controller {

	// Disable this controller when Kohana is set to production mode.
	// See http://docs.kohanaphp.com/installation/deployment for more details.
	const ALLOW_PRODUCTION = FALSE;

	// Set the name of the template to use
	public $template = 'kohana/template';

	public function __construct(){
		parent::__construct();
        $this->session = Session::instance();
		$this->cache = Cache::instance();
        $authentic = new Auth;
		if (!$authentic->logged_in()){
		     $this->session->set("requested_url","/".url::current()); // this will redirect from the login page back to this page/
		     url::redirect('/auth');
	    }else{
		    $this->user = $authentic->get_user(); //now you have access to user information stored in the database
		}
		

	}

	public function index()
	{
		var_dump(Auth::instance()->logout(TRUE));
		// In Kohana, all views are loaded and treated as objects.
		$this->template->content = new View('welcome_content');

		$welcome = $this->cache->get('welcome');
		if( ! $welcome ){
			$this->cache->set('welcome',$this->template->content,['pages']);
		}else{
			$this->template->content = $welcome;
		}
		

		// You can assign anything variable to a view by using standard OOP
		// methods. In my welcome view, the $title variable will be assigned
		// the value I give it here.
		$this->template->title = 'Welcome to Kohana!';
		$this->template->now = Carbon::now()->toFormattedDateString();
		// An array of links to display. Assiging variables to views is completely
		// asyncronous. Variables can be set in any order, and can be any type
		// of data, including objects.
		$this->template->content->links = array
		(
			'Home Page'     => 'http://kohanaphp.com/',
			'Documentation' => 'http://docs.kohanaphp.com/',
			'Forum'         => 'http://forum.kohanaphp.com/',
			'License'       => 'Kohana License.html',
			'Donate'        => 'http://kohanaphp.com/donate',
		);
	}

	public function __call($method, $arguments)
	{
		// Disable auto-rendering
		$this->auto_render = FALSE;

		// By defining a __call method, all pages routed to this controller
		// that result in 404 errors will be handled by this method, instead of
		// being displayed as "Page Not Found" errors.
		echo 'This text is generated by __call. If you expected the index page, you need to use: welcome/index/'.substr(Router::$current_uri, 8);
	}

} // End Welcome Controller