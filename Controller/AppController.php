<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	var $helpers = array('Form', 'Html', 'Session', 'Js', 'Usermgmt.UserAuth', 'Mixpanel');
	public $components = array('Session','RequestHandler', 'Usermgmt.UserAuth', 'Mixpanel');

function beforeFilter() {
		$this->userAuth();
    // if a user is logged in
    // $this->Mixpanel->identify(81);
    // $this->Mixpanel->name_tag($user_name);
    // $this->Mixpanel->register($superProperties);

    // /* To make use of the people API */
    // $this->Mixpanel->people($this->Auth->user('id'), array(
    //     '$username' => $this->Auth->user('username'),
    //     '$email' => $this->Auth->user('email'),
    //     '$created' => $this->Auth->user('created'),
    //     '$last_login' => $this->Auth->user('connected'),
    //     'my_custom_var' => $my_custom_var,
    // ));
}


	private function userAuth(){
		$this->UserAuth->beforeFilter($this);
	}
}
