<?php 
require 'src/indeed.php';
require_once "src/Mixpanel/Mixpanel.php";
class CareerController extends AppController {
	public $uses= array('Dashboard','Article','Tag','ArticlesTags','Feedbacka' ,'Feedbackainv', 'Usermgmt.User','Carreersfit','Jobsinfo','Skillsa','Usermgmt.User','State','JobsinfoState');
		// var $paginate = array( 'limit' => 20, 'order' => array( 'User.modified' => 'DESC' ));	
	//var $paginate = array( 'limit' => 9);	
	public $components = array('Paginator');

	public function index($pag = null){
		
		$mp = Mixpanel::getInstance("682ca41dc28abfc8e3effd413b7daaed"); // instantiate the Mixpanel class
		$mp->identify($this->UserAuth->getUserId());
		$mp->track("careers section");
		sleep(2);

		$all = "";
		$fits = "";
		$favourites = "";

		if(isset($_GET['data'])){
				$return = $this->search($_GET['data']);
				$tfl = $_GET['data'];
			}
		else{
			if($pag == "all"){
				$return = $this->all();
				$all = "active";
				$tfl = "All Careers";
			}

			if($pag == "best_fits" || $pag == null){
				$return = $this->fits();
				$fits = "active";
				$tfl = "Best Career Fits";
			}

			if($pag == "favourites"){
				$return = $this->favorites();
				$favourites = "active";
				$tfl = "Favourites";
			}
		}


		$user = $this->User->findById($this->UserAuth->getUserId());
		$mod1 = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
		$mod1 = ($mod1 * 100) / 200;

		$this->set('puntos', $mod1);
		$this->set('careers', $return);
		$this->set(compact("all", "fits", "favourites"));
		$this->set('MDselected','MD5');
		$this->set('title','Career Exploration');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('title_for_layout','Career Exploration - '.$tfl);

		$this->layout="newdash";
	}

	public function fits($id = null){
		$careersfits = $this->Carreersfit->find('all', array( 'conditions' => array('Carreersfit.user_id'=>$this->UserAuth->getUserId(), 'Carreersfit.r >= 0.5'),'limit' => 6, 'order' => 'Carreersfit.r DESC'));
		return $careersfits;
	}

	public function all($id = null){
		$this->Paginator->settings = array(
	        'conditions' => array('Carreersfit.user_id'=>$this->UserAuth->getUserId()),
	        'limit' => 12,
	        'order' => 'Carreersfit.r DESC',
	    );
		$allcareers = $this->Paginator->paginate('Carreersfit');
		return $allcareers;
	}

	public function favorites($id = null){
		//favorite careers
	    $this->Paginator->settings = array(
	        'conditions' => array('Carreersfit.user_id'=>$this->UserAuth->getUserId(),'Carreersfit.favorite'=>1),
	        'limit' => 12
	    );
	    $careers_favorites = $this->Paginator->paginate('Carreersfit');
	    return $careers_favorites;
	}




	public function view($id = null){
		$this->set('MDselected','MD5');
		$this->set('title','Career Exploration');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->layout="newdash";

		$career = $this->Carreersfit->find('first', array('conditions' => array('Carreersfit.user_id'=>$this->UserAuth->getUserId(),'Carreersfit.jobsinfo_id' => $id)));
		if(empty($career)){
			$this->redirect('/career');
		}else{
			$user = $this->User->findById($this->UserAuth->getUserId());
			$state_id = $user['User']['state_id'];
			if($state_id == 1){
				$state_id = 6;
			}
			$st = $this->State->find('first', array('recursive' => -1, 'conditions' => array('State.id' => $state_id)));
			$nC = $st['State']['name'];
			if($st['State']['id'] == 0){
				$state_id = 6;
				$nC = "California";
			}

			$career['State'] = $this->JobsinfoState->find('first', array('conditions' => array('JobsinfoState.state_id' => $state_id, 'JobsinfoState.jobsinfo_id' => $id)));
			
			if(!empty($career['State'])){
				$career['State'] = $career['State']['JobsinfoState'];
			}
			
			$this->set('user_skills',$this->Skillsa->find('first',array('conditions' => array('Skillsa.user_id'=>$this->UserAuth->getUserId()))));
			$this->set('st',$st);
			$this->set('career',$career);
			$this->set('title_for_layout','Career Exploration - '.$career['Jobsinfo']['career_name']);


			$client = new Indeed("4327991002920403");



			$params = array(
		    "q" => $career['Jobsinfo']['career_name'],
		    "l" => $nC,
		    "userip" => "0.0.0.0",
		    "useragent" => "navegador"
			);

			$results = $client->search($params);
			$this->set('indeed',$results['results']);

		}
	
}

	public function changeFavorite($id = null){
		$this->autoRender=false;
		if($id != null){
			$car = $this->Carreersfit->find('first', array('conditions' => array('Carreersfit.jobsinfo_id' => $id, 'Carreersfit.user_id' => $this->UserAuth->getUserId())));
			if($car['Carreersfit']['favorite'] == 1){
				$car['Carreersfit']['favorite'] = 0;
			}else{
				$car['Carreersfit']['favorite'] = 1;
			}
			if($this->Carreersfit->save($car)){
				return true;
			}else{
				return false;
			}

		}else{
			return false;
		}
	}

	// public function removeFavorite($id = null){
	// 	$this->autoRender=false;

	// 	if($id != null){
	// 		$car = $this->Carreersfit->find('first', array('conditions' => array('Carreersfit.jobsinfo_id' => $id, 'Carreersfit.user_id' => $this->UserAuth->getUserId())));
	// 		$car['Carreersfit']['favorite'] = 0;

	// 		if($this->Carreersfit->save($car)){
	// 			return true;
	// 		}else{
	// 			return false;
	// 		}

	// 	}else{
	// 		return false;
	// 	}
	// }

	public function search($val = null){
		$user = $this->UserAuth->getUserId();
		$allC = $this->Jobsinfo->find('list', array('fields' => array('id'),'conditions' => array('Jobsinfo.career_name LIKE' => '%'.$val.'%')));
		// debug($allC);
		$this->Paginator->settings = array(
			'conditions' => array('Carreersfit.user_id' => $user,'Carreersfit.jobsinfo_id' => $allC),
	        'limit' => 12,
	    );
		$sea = $this->Paginator->paginate('Carreersfit');
		return $sea;
	}



		public function like($id = null, $like = null){
			$user = $this->UserAuth->getUserId();
			$this->autoRender = false;
			$co = $this->Carreersfit->find('first', array('conditions' => array('Carreersfit.user_id' => $user, 'Carreersfit.id' => $id)));
			$co['Carreersfit']['favorite'] = $like;
			$this->Carreersfit->save($co);
		}
}