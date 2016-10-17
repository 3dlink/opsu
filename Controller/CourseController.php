<?php 
	require_once "src/Mixpanel/Mixpanel.php";

	class CourseController extends AppController {

		public $uses= array('Coursebyuser','Dashboard','Personality' ,'Article','Tag','ArticlesTags','Feedbacka' ,'Feedbackainv', 'Usermgmt.User','Jobsinfo','Skillsa','Usermgmt.User','State','JobsinfoState', 'Course');
		public $components = array('Paginator');

		function index($pag = null, $va = null){
			$mp = Mixpanel::getInstance("682ca41dc28abfc8e3effd413b7daaed"); // instantiate the Mixpanel class
			$mp->identify($this->UserAuth->getUserId());
			$mp->track("courses section");
			sleep(2);

			$all = "";
			$wishlist = "";
			$recommended = "";


			if(isset($_GET['data'])){
				$return = $this->search($_GET['data']);
			}
			else {

				if($pag == "recommended"){
				$return = $this->recomend();
				$recommended = "active";
				$tlf = "Improve Your Skills";
			}

			if($pag == "wishlist" ){
				$return = $this->wishlist();
				// $return = "wishlist";
				$wishlist = "active";
				$tlf = "My Wishlist";
			}

			if($pag == "all" || $pag == null){
				$return = $this->all();
				$all = "active";
				$tlf = "Courses";
			}

				
			}


						$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
			$user = $this->User->findById($this->UserAuth->getUserId());
			$mod2 = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
			$mod2 = ($mod2 * 100) / 200;

			$this->set('puntos', $mod2);
			$this->set('course', $return);
			$this->set(compact("recommended", "wishlist", "all"));
			$this->set('title','Improve Your Skills');
			$this->set('title_for_layout', 'Take Action - '.$tlf);
			$this->layout="newdash";
			$this->set('MDselected','MD6');
		}

		public function wishlist($id = null){
			$this->Paginator->settings = array(
				'conditions' => array('Coursebyuser.like = 1',
				'Coursebyuser.user_id' => $this->UserAuth->getUserId()),
		        'limit' => 6,
		    );
			$wishlist = $this->Paginator->paginate('Coursebyuser');
			return $wishlist;
		}

		public function recomend(){
			$user = $this->UserAuth->getUserId();
			$courseSkill = $this->Skillsa->find('first', array('conditions' => array('user_id' => $user)));
			$coursePersonality = $this->Personality->find('first', array('conditions' => array('user_id' => $user)));

			if(!empty($courseSkill)){
				$forYou['Problem solving'] = $courseSkill['Skillsa']['problem_solving'] / 10;
				$forYou['Creative thinking'] = $courseSkill['Skillsa']['creative_thinking'] / 10 ;
				$forYou['Time management'] = $courseSkill['Skillsa']['time_management'] / 10 ;			
			}

			if(!empty($coursePersonality)){
				$forYou['Resilience'] =  $coursePersonality['Personality']['resilience'] / 10;
				$forYou['Persuasiveness'] = $coursePersonality['Personality']['persuasiveness'] / 10 ;
				$forYou['Positive attitude'] = $coursePersonality['Personality']['positive_attitude'] / 10 ;
				$forYou['Leadership'] = $coursePersonality['Personality']['leadership'] / 10 ;
				$forYou['Stress management'] = $coursePersonality['Personality']['stress_management'] / 10 ;
			}

			$allCourse = array();

			if(!empty($courseSkill) || !empty($coursePersonality)){
				$reco = array();
				foreach ($forYou as $key => $value) {
					if($value < 7.5){
						array_push($reco, $key);
					}
				}

				$cours = $this->Course->find('all', array('fields' => 'id', 'conditions' => array('course_skill' => $reco)));
				foreach ($cours as $key => $value) {
					$cours[$key] = $value['Course']['id'];
				}

			    $this->Paginator->settings = array(
			        'limit' => 6,
			        'conditions' =>  array('Coursebyuser.user_id' => $user, 'Coursebyuser.course_id' => $cours),

			    );
			    $allCourse = $this->Paginator->paginate('Coursebyuser');
			}
			
		    return $allCourse;
		}

		public function like($id = null, $like = null){
			$user = $this->UserAuth->getUserId();
			$this->autoRender = false;
			$co = $this->Coursebyuser->find('first', array('conditions' => array('Coursebyuser.user_id' => $user, 'Coursebyuser.course_id' => $id)));
			$co['Coursebyuser']['like'] = $like;
			$this->Coursebyuser->save($co);
		}

		public function all(){
			$user = $this->UserAuth->getUserId();
		    $this->Paginator->settings = array(
		    	'conditions' =>  array('Coursebyuser.user_id' => $user),
		        'limit' => 6
		    );
		    $allCourse = $this->Paginator->paginate('Coursebyuser');
		    return $allCourse;
		}

		public function search($val = null){
						$user = $this->UserAuth->getUserId();

			$this->Paginator->settings = array(
				'conditions' => array('Coursebyuser.user_id' => $user,'Coursebyuser.course_title LIKE' => '%'.$val.'%'),
		        'limit' => 6,
		    );
			$sea = $this->Paginator->paginate('Coursebyuser');
			return $sea;

		}

	}