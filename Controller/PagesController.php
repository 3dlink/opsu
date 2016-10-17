<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
	public $uses = array();

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
	public function display() {
		$this->layout = false;

		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}

		//$this->redirect('/login');
	}
	
	public function aboutus(){
		$this->layout = false;
	}

	
	public function contactus(){
		$this->layout = false;
	}
	
	public function sendMailproblem(){


		$this->autoRender = false;


	  $content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);

		$Email = new CakeEmail();
		$Email->to('hello@joinmentor.co')
		->subject($_REQUEST['problem'])
		->from($_REQUEST['email'])
		->template('default')
		->emailFormat('html')
		->send($content);
			
		return json_encode(1);




		// $this->autoRender = false;
		// $from = $_REQUEST['email'];
		// // $to = 'hello@joinmentor.co';
		// $to = "cesarherguetal@gmail.com";
		// $subject=  $_REQUEST['problem'];
		// //$content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);
		// //$this->__enviar_correo($from, $to, $subject, $content);
		// $mensaje=
		// ' Nombre:'.$_REQUEST['name']."\n"
		// ."Correo:\n".$from."\n"
		// ."Problema:\n".$_REQUEST['details']."\n";
		// mail($to,$subject,$mensaje,$from);
		// return json_encode(1);
	
	}
	
	public function sendMailproblem2(){

		$this->autoRender = false;


	  $content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);

		$Email = new CakeEmail();
		$Email->to('hello@joinmentor.co')
		->subject(substr($_REQUEST['details'] , 1, 70))
		->from($_REQUEST['email'])
		->template('default')
		->emailFormat('html')
		->send($content);

		return json_encode(1);
	
	}
	
	public function sendMailproblem3(){

		$this->autoRender = false;


	  $content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);

		$Email = new CakeEmail();
		$Email->to('hello@joinmentor.co')
		->subject(substr($_REQUEST['details'] , 1, 70))
		->from($_REQUEST['email'])
		->template('default')
		->emailFormat('html')
		->send($content);
			
		return json_encode(1);

		
		// $this->autoRender = false;
		// $from = $_REQUEST['email'];
		// // $to = 'hello@joinmentor.co';
		// $to = "cesarherguetal@gmail.com";
		// $subject=  substr($_REQUEST['details'] , 1, 70);
		// //$content = $this->__armar_contenido($_REQUEST['name'],$_REQUEST['email'],$_REQUEST['details']);
		// //$this->__enviar_correo($from, $to, $subject, $content);
		// $mensaje=
		// ' Nombre:'.$_REQUEST['name']."\n"
		// ."Correo:\n".$from."\n"
		// ."Problema:\n".$_REQUEST['details']."\n";
		// mail($to,$subject,$mensaje,$from);
		// return json_encode(1);
	
	}
	
	
	function __enviar_correo($from, $to, $subject, $contenido){
		
		
		$Email = new CakeEmail();
		$Email->to($to)
		->subject($subject)
		->from($from)
		->template('default')
		->emailFormat('html');
		try{
			$result = $Email->send($contenido);
		} catch (Exception $ex) {
			$result="Could not send registration email to userid-".$ex;
		}
		$this->log($result);
	}
	
	function __armar_contenido($name, $email, $observation){
	
		$nombre = $name;
	
		$observaciones = $observation;
	
		$content = "<table width='100%'>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<h3>El siguiente usuario est&aacute; solicitando informaci&oacute;n de contacto:</h3>
		</td>
		</tr>
		<tr>
		<td style='text-align: left; color: black; width: 60%;'>
		<b>Datos de contacto:</b><br>
		Nombre : $nombre<br>
	
		Correo: $email<br>
		Problema: $observaciones <br>
		</td>
		</tr>
		<tr>
		<td colspan='2'>
		</td>
		</tr>
		<tr style='height: 20px;'></tr>
		<tr style='height: 50px;'></tr>
		</table>";
	
		return $content;
	
	}
}
