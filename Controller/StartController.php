<?php 
	require_once "src/Mixpanel/Mixpanel.php";

	class StartController extends AppController {

	public $uses= array('Coursebyuser', 'Education','State','Usermgmt.User','Cdda','Article','Puntaje','Jobsinfo','Carreersfit','Course');
	public $components = array('Paginator');

		public function index() {
			$this->layout=false;
		}

		public function alternative() {
			$this->layout=false;
		}

		public function optionb() {
			$this->layout=false;
		}
		public function dream() {
			$this->layout=false;
			$this->set('education',$this->Education->find('all', array('conditions' => array('id >=' => 3, 'id <=' => 11))));
		}

		public  function landing(){
			$this->layout=false;
			$this->set('education',$this->Education->find('all'));	
			$this->State->recursive = -1;
			$State = $this->State->find('all');
			$this->set('states',$this->State->find('all'));	
		}

		public  function landingHelp(){
			$this->layout=false;
			$this->set('education',$this->Education->find('all'));	
			$this->State->recursive = -1;
			$State = $this->State->find('all');
			$this->set('states',$this->State->find('all'));	
		}

		public function legalPage(){
			$this->layout=false;
		}

		public function careerGuidance($pag = null, $ti = null){

			$this->layout=false;

			$self_knowledge = "";
			$how_to_choose = "";
			$job_hunting = "";
			$big_picture = "";


			if($pag == "big_picture"){
				$c = 'big-picture';
			}
			if($pag == "self_knowledge"){
				$c = "self-knowledge";
			}
			if($pag == "how_to_choose"){
				$c = "how-to-choose";
			}
			if($pag == "job_hunting"){
				$c = "job-hunting";
			}
			if($ti == null){
				if($pag == "big_picture" || $pag == null){
					$return = $this->big_picture();
					$big_picture = "active";
					$page = "Big picture";
					$tfl = "Career Strategy Tips For Young Adults | MENTOR.";
				}
				if($pag == "self_knowledge"){
					$return = $this->self_knowledge();
					$self_knowledge = "active";
					$page = "Self knowledge";
					$tfl = "Smart Guidance For Knowing What Career To Choose | MENTOR.";
				}
				
				if($pag == "how_to_choose"){
					$return = $this->how_to_choose();
					$how_to_choose = "active";
					$page = "How to choose";
					$tfl = "Smart Guidance For Choosing Your Career | MENTOR.";
				}
				
				if($pag == "job_hunting"){
					$return = $this->job_hunting();
					$job_hunting = "active";
					$page = "Job hunting";
					$tfl = "Smart Guidance For Finding A Job You´ll Love | MENTOR.";
				}
			}
			else{
				$this->resourcesView($ti, $c);
			}
			
			if(isset($_GET['data'])){
				$return = $this->search($_GET['data']);
			}
			
			$this->set('page', $page);
			$this->set('title_for_layout', $tfl);
			$this->set('articles',$return);

			$this->set(compact("self_knowledge", "how_to_choose", "job_hunting" , "big_picture"));
			
		}

		public function search($val = null){

			$this->layout=false;
			$self_knowledge = "";
			$how_to_choose = "";
			$job_hunting = "";
			$big_picture = "";

			$this->Paginator->settings = array(
				'conditions' => array('Article.title LIKE' => '%'.$val.'%', 'Article.active' => 1),
		        'limit' => 8,
		    );
			$sea = $this->Paginator->paginate('Article');
			$page = "Job hunting";
			$this->set('title_for_layout', 'Search');
			$this->set('page', $page);
			$this->set('articles',$sea);
			$this->set(compact("self_knowledge", "how_to_choose", "job_hunting" , "big_picture"));


			$this->render('career_guidance');

		}


		public function resourcesView($pag = null , $title = null){
			
			$self_knowledge = "";
			$how_to_choose = "";
			$job_hunting = "";
			$big_picture = "";
			
			if($pag == "big_picture" || $pag == null){
				$return = $this->big_picture();
				$big_picture = "active";
			}
			if($pag == "self_knowledge"){
				$return = $this->self_knowledge();
				$self_knowledge = "active";
			}
			
			if($pag == "how_to_choose"){
				$return = $this->how_to_choose();
				$how_to_choose = "active";
			}
			
			if($pag == "job_hunting"){
				$return = $this->job_hunting();
				$job_hunting = "active";
			}

			$title = str_replace("-", " ", $title );

			$data = $this->Article->find('first' , array('conditions' => array('Article.url LIKE'=>$title)));
			$this->set('article',$data);
			$this->set(compact("self_knowledge", "how_to_choose", "job_hunting" , "big_picture"));
			$this->set('pg','');
			$this->layout=false;
		}


		public function big_picture($id = null){
			$this->Paginator->settings = array(
					'conditions' => array('Article.category_id'=>1, 'Article.active' => 1),
					'limit' => 8
			);
			$big_picture = $this->Paginator->paginate('Article');
			return $big_picture;
		}
		
		public function self_knowledge($id = null){
			$this->Paginator->settings = array(
					'conditions' => array('Article.category_id'=>2, 'Article.active' => 1),
					'limit' => 8
			);
			$self_knowledge = $this->Paginator->paginate('Article');
			return $self_knowledge;
		}
		
		public function how_to_choose($id = null){
			$this->Paginator->settings = array(
					'conditions' => array('Article.category_id'=>3, 'Article.active' => 1),
					'limit' => 8
			);
			$how_to_choose = $this->Paginator->paginate('Article');
			return $how_to_choose;
		}
		
		public function job_hunting($id = null){
			$this->Paginator->settings = array(
					'conditions' => array('Article.category_id'=>4, 'Article.active' => 1),
					'limit' => 8
			);
			$job_hunting = $this->Paginator->paginate('Article');
			return $job_hunting;
		}

		public function createcourses($id){
			$this->autoRender = false;
			$allcourse = $this->Course->find('all', array('fields' => array('id','course_title')));
			foreach ($allcourse as $key => $value) {
				$myC = Array();
				$myC['user_id'] = $id;
				$myC['course_id'] = $value['Course']['id'];
				$myC['course_title'] = $value['Course']['course_title'];
				$this->Coursebyuser->create();
				$this->Coursebyuser->save($myC);
			}
		}


		public function addUser(){
		$this->autoRender = false;
			if(isset($_POST['usuario'])){
				$usuario=$_POST['usuario'];

				$this->State->recursive = -1;
				$estado = $usuario['state'];
				$educacion = $usuario['education'];
				$state = $this->State->findByName($usuario['state']);
				$education = $this->Education->findByDescription($usuario['education']);

				$usuario['email_verified']=1;
				$usuario['active']=1;
				$salt=$this->UserAuth->makeSalt();
				$usuario['salt'] = $salt;
				$usuario['password'] = $this->UserAuth->makePassword($usuario['password'], $salt);
				$usuario['state_id'] = $state['State']['id'];
				$usuario['education_id'] = $education['Education']['id'];
				$usuario['user_group_id'] = 3;
				$this->Puntaje->save(array('personal'=>0,'pyramid'=>0,'obituary'=>0,'meditation'=>0,'career'=>0,'work'=>0,'abilities'=>0,'vocational'=>0,'skills'=>0,'cdmf'=>0,'ajh'=>0,'feedback'=>0));
				$puntaje_id = $this->Puntaje->getLastInsertId();
				$usuario['puntaje_id'] = $puntaje_id;
				//aqui se crean los cursos para cada usuario fijarse en las 3 lineas de arriba



				$existe = $this->User->findByEmail($usuario['email']);

				if(empty($existe)){
					$this->User->save($usuario);

					$usuario_id = $this->User->getLastInsertId();
					$this->createcourses($usuario_id);
					$usuario = $this->User->findById($usuario_id);

					
					$this->loadModel('CampaignMonitor.CMSubscriber');

			    if($this->CMSubscriber->save(array(	
			    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
						'EmailAddress' => $usuario['User']['email'], 
						'Name' => $usuario['User']['first_name'], 
						'CustomFields' => array(
							        array(
							            'Key' => 'name',
							            'Value' => $usuario['User']['first_name']
							        ),
							        array(
							            'Key' => 'education',
							            'Value' => $educacion
							        ),
							        array(
							            'Key' => 'userid',
							            'Value' => $usuario['User']['id']
							        ),
							        array(
							            'Key' => 'type',
							            'Value' => 'member'
							        ),
							        array(
							            'Key' => 'surname',
							            'Value' => $usuario['User']['last_name']
							        ),
							        array(
							            'Key' => 'state',
							            'Value' => $estado
							        )
							    )
					))){

						//le creo las carreras vacias
						$this->Jobsinfo->recursive = -1;
						$carreras = $this->Jobsinfo->find('all');

						$fits = array();
						foreach ($carreras as $carrera) {
							$car = array('user_id' => $usuario_id, 'jobsinfo_id' => $carrera['Jobsinfo']['id'], 'p' => 0, 'r' => 0);
							array_push($fits, $car);
						}
						$this->Carreersfit->saveAll($fits);

					}else{
						$return = -1; //campaign
					}


					$return = 1;	//bien
				}else{
					if($existe['User']['user_group_id'] == 2){
						$this->User->id = $existe['User']['id'];
						$this->User->save($usuario);	
						$cdda = $this->Cdda->findById($existe['User']['cdda_id']);
						$user = $this->User->findById($existe['User']['id']);
						if($this->agregarMemberCampaign($cdda,$user)){
							$return = 1;		//bien						
						}else{
							$return = -1; //campaign
						}
					}else{
						$return = 0;	//no es lead
					}
				}
					return $return;
			}
		}

		public function agregarMemberCampaign($cdda,$lead){
					$this->loadModel('CampaignMonitor.CMSubscriber');

					if($cdda['Cdda']['A_v1_q2'] == 1){
						$cdda['Cdda']['A_v1_q2'] = 'a';
					}elseif($cdda['Cdda']['A_v1_q2'] == 2){
						$cdda['Cdda']['A_v1_q2'] = 'b';
					}else{
						$cdda['Cdda']['A_v1_q2'] ='c';
					}

					if($cdda['Cdda']['A_v1_q5'] == 0)
						$cdda['Cdda']['A_v1_q5'] = 'no';
					else
						$cdda['Cdda']['A_v1_q5'] = 'yes';

					if($cdda['Cdda']['A_v1_q8'] == 0)
						$cdda['Cdda']['A_v1_q8'] = 'no';
					else
						$cdda['Cdda']['A_v1_q8'] = 'yes';

					if($lead['User']['gender_id'] == 1)
						$lead['User']['gender_id'] = 'man';
					else
						$lead['User']['gender_id'] = 'woman';


					if($lead['User']['education_id'] <= 3){
						$lead['User']['education_id'] = '<12';
					}elseif($lead['User']['education_id'] == 4){
						$lead['User']['education_id'] = 'high school';
					}elseif($lead['User']['education_id'] == 5){
						$lead['User']['education_id'] = 'some college';
					}elseif($lead['User']['education_id'] == 6){
						$lead['User']['education_id'] = 'associate';
					}elseif($lead['User']['education_id'] == 7){
						$lead['User']['education_id'] = 'bachelor';
					}elseif($lead['User']['education_id'] == 8){
						$lead['User']['education_id'] = 'master';
					}elseif($lead['User']['education_id'] == 9){
						$lead['User']['education_id'] = 'professional school';
					}elseif($lead['User']['education_id'] == 10){
						$lead['User']['education_id'] = 'doctorate';
					}

					$this->State->recursive = -1;
					$state = $this->State->findById($lead['User']['state_id']);

			    if($this->CMSubscriber->save(array(	
			    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
						'EmailAddress' => $lead['User']['email'], 
						'Name' => $lead['User']['first_name'], 
						'CustomFields' => array(
							        array(
							            'Key' => 'name',
							            'Value' => $lead['User']['first_name']
							        ),
							        array(
							            'Key' => 'birthday',
							            'Value' => $lead['User']['birthday']
							        ),
							        array(
							            'Key' => 'education',
							            'Value' => $lead['User']['education_id']
							        ),
							        array(
							            'Key' => 'gender',
							            'Value' => $lead['User']['gender_id']
							        ),
							        array(
							            'Key' => 'userid',
							            'Value' => $lead['User']['id']
							        ),
							        array(
							            'Key' => 'type',
							            'Value' => 'member'
							        ),
							        array(
							            'Key' => 'systematic',
							            'Value' => $cdda['Cdda']['systematic']
							        ),
							        array(
							            'Key' => 'spontaneous',
							            'Value' => $cdda['Cdda']['spontaneous']
							        ),
							        array(
							            'Key' => 'dms_internal',
							            'Value' => $cdda['Cdda']['dms_internal']
							        ),
							        array(
							            'Key' => 'dms_external',
							            'Value' => $cdda['Cdda']['dms_external']
							        ),
							        array(
							            'Key' => 'motivation',
							            'Value' => $cdda['Cdda']['motivation']
							        ),
							        array(
							            'Key' => 'indecisiveness',
							            'Value' => $cdda['Cdda']['indecisiveness']
							        ),
							        array(
							            'Key' => 'beliefs',
							            'Value' => $cdda['Cdda']['biliefs']
							        ),
							        array(
							            'Key' => 'process',
							            'Value' => $cdda['Cdda']['process']
							        ),
							        array(
							            'Key' => 'self',
							            'Value' => $cdda['Cdda']['self']
							        ),
							        array(
							            'Key' => 'occupations',
							            'Value' => $cdda['Cdda']['occupations']
							        ),
							        array(
							            'Key' => 'conflict_internal',
							            'Value' => $cdda['Cdda']['conflict_internal']
							        ),
							        array(
							            'Key' => 'conflict_external',
							            'Value' => $cdda['Cdda']['conflict_external']
							        ),
							        array(
							            'Key' => 'vision',
							            'Value' => $cdda['Cdda']['vision']
							        ),
							        array(
							            'Key' => 'A.v1.q2',
							            'Value' => $cdda['Cdda']['A_v1_q2']
							        ),
							        array(
							            'Key' => 'A.v1.q3',
							            'Value' => $cdda['Cdda']['A_v1_q3']
							        ),
							        array(
							            'Key' => 'A.v1.q4',
							            'Value' => $cdda['Cdda']['A_v1_q4']
							        ),
							        array(
							            'Key' => 'A.v1.q5',
							            'Value' => $cdda['Cdda']['A_v1_q5']
							        ),
							        array(
							            'Key' => 'A.v1.q6',
							            'Value' => $cdda['Cdda']['A_v1_q6']
							        ),
							        array(
							            'Key' => 'A.v1.q7',
							            'Value' => $cdda['Cdda']['A_v1_q7']
							        ),
							        array(
							            'Key' => 'A.v1.q8',
							            'Value' => $cdda['Cdda']['A_v1_q8']
							        ),
							        array(
							            'Key' => 'A.v1.q9',
							            'Value' => $cdda['Cdda']['A_v1_q9']
							        ),
							        array(
							            'Key' => 'A.v1.q10',
							            'Value' => $cdda['Cdda']['A_v1_q10']
							        ),
							        array(
							            'Key' => 'A.v1.q11',
							            'Value' => $cdda['Cdda']['A_v1_q11']
							        ),
							        array(
							            'Key' => 'A.v1.q12',
							            'Value' => $cdda['Cdda']['A_v1_q12']
							        ),
							        array(
							            'Key' => 'A.v1.q13',
							            'Value' => $cdda['Cdda']['A_v1_q13']
							        ),
							        array(
							            'Key' => 'A.v1.q14',
							            'Value' => $cdda['Cdda']['A_v1_q14']
							        ),
							        array(
							            'Key' => 'A.v1.q15',
							            'Value' => $cdda['Cdda']['A_v1_q15']
							        ),
							        array(
							            'Key' => 'A.v1.q16',
							            'Value' => $cdda['Cdda']['A_v1_q16']
							        ),
							        array(
							            'Key' => 'A.v1.q17',
							            'Value' => $cdda['Cdda']['A_v1_q17']
							        ),
							        array(
							            'Key' => 'A.v1.q18',
							            'Value' => $cdda['Cdda']['A_v1_q18']
							        ),
							        array(
							            'Key' => 'A.v1.q19',
							            'Value' => $cdda['Cdda']['A_v1_q19']
							        ),
							        array(
							            'Key' => 'A.v1.q20',
							            'Value' => $cdda['Cdda']['A_v1_q20']
							        ),
							        array(
							            'Key' => 'surname',
							            'Value' => $lead['User']['last_name']
							        ),
							        array(
							            'Key' => 'state',
							            'Value' => $state['State']['name']
							        )
							    )
					))){

						$this->CMSubscriber->ListID = "bb0a2adeebf725ae78e89cfa5c7e34e6";
						$result = $this->CMSubscriber->delete($lead['User']['email']);
						return true;
					}else{
						return false;
					}
		}
		



	public function addTester(){
		
		$this->autoRender = false;
		if(isset($_POST['data'])){
				$tester=$_POST['data'];
				$tester['email_verified']=0;
				$tester['active']=1;
				$salt=$this->UserAuth->makeSalt();
				$tester['salt'] = $salt;
				$tester['password'] = $this->UserAuth->makePassword($tester['password'], $salt);
				$tester['user_group_id'] = 3;
				$this->Puntaje->save(array('personal'=>0,'pyramid'=>0,'obituary'=>0,'meditation'=>0,'career'=>0,'work'=>0,'abilities'=>0,'vocational'=>0,'skills'=>0,'cdmf'=>0,'ajh'=>0,'feedback'=>0));
				$tester['puntaje_id'] = $this->Puntaje->getLastInsertId();

				$existe = $this->User->findByEmail($tester['email']);

				if(empty($existe)){
					if($this->User->save($tester)){
						$tester['id'] = $this->User->getLastInsertId();
						$this->State->recursive = -1;
						$state = $this->State->findById($tester['state_id']);
						$this->createcourses($tester['id']);

						$education = $this->Education->findById($tester['education_id']);
						$education = $education['Education']['name'];
						$education2 = "";
						if($tester['education_2'] != '0'){
							$education2 = $this->Education->findById($tester['education_2']);
							$education2 = $education2['Education']['description'];
						}
						$mp = Mixpanel::getInstance("682ca41dc28abfc8e3effd413b7daaed"); // instantiate the Mixpanel class

						$mp->people->set($tester['id'] ,array(
							'$source'			=> $tester['source'],
						    '$first_name'       => $tester['first_name'],
						    '$last_name'        => $tester['last_name'],
						    '$email'            => $tester['email'],
						    '$created'			=> $tester['date'],
						    '$state'			=> $state['State']['name'],
						    '$education'		=> $education,
						    '$degree_type' 		=> $education2,
						    '$school'			=> $tester['school'],
							'$graduation_year'	=> $tester['graduation_year'],

						));
						$mp->track("Sign up"); 

						$this->loadModel('CampaignMonitor.CMSubscriber');
						$activate_key = $this->User->getActivationKey($tester['password']);

						if($this->CMSubscriber->save(array(	
				    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
							'EmailAddress' => $tester['email'], 
							'Name' => $tester['first_name'], 
							'CustomFields' => array(
								 		array(
								            'Key' => 'source',
								            'Value' => $tester['source']
								        ),
								        array(
								            'Key' => 'name',
								            'Value' => $tester['first_name']
								        ),
								        array(
								            'Key' => 'education',
								            'Value' => $education
								        ),
								        array(
								            'Key' => 'userid',
								            'Value' => $tester['id']
								        ),
								        array(
								            'Key' => 'type',
								            'Value' => 'beta'
								        ),
								        array(
								            'Key' => 'surname',
								            'Value' => $tester['last_name']
								        ),
								        array(
								            'Key' => 'state',
								            'Value' => $state['State']['name']
								        ),
								        array(
								            'Key' => 'degree_type',
								            'Value' => $education2
								        ),
								        array(
								            'Key' => 'graduation_year',
								            'Value' => $tester['graduation_year']
								        ),
								        array(
								            'Key' => 'school',
								            'Value' => $tester['school']
								        ),
								        array(
								            'Key' => 'token',
								            'Value' => $this->webroot."userVerification?ident=".$tester['id']."&activate=".$activate_key
								        )
								    )
						))){

							//le creo las carreras vacias
							$this->Jobsinfo->recursive = -1;
							$carreras = $this->Jobsinfo->find('all');

							$fits = array();
							foreach ($carreras as $carrera) {
								$car = array('user_id' => $tester['id'], 'jobsinfo_id' => $carrera['Jobsinfo']['id'], 'p' => 0, 'r' => 0);
								array_push($fits, $car);
							}
							$this->Carreersfit->saveAll($fits);

							return $tester['id'];
						}else{
							return 0;
						}

						return 1;
					}else{ //no guardo usuario
						return 0;
					}

				} //existe
		}else{
			$this->redirect($this->webroot);
		}

		return json_encode ( false );
	}


		
		public  function landing_page_advisers(){
			$this->layout=false;
			$this->set('education',$this->Education->find('all'));
			$this->State->recursive = -1;
			$State = $this->State->find('all');
			$this->set('states',$this->State->find('all'));
		}
		
		public function coming_soon(){
			$this->layout=false;
			$this->set('education',$this->Education->find('all', array('conditions' => array('id >=' => 3, 'id <=' => 11))));
			$this->State->recursive = -1;
			$State = $this->State->find('all');
			$this->set('states',$this->State->find('all'));
		}

		public function verifiqueemial(){
			$this->autoRender = false;
		}

		public function primeravez(){
			$this->autoRender = false;
			$this->User->id = $this->UserAuth->getUserId();
			$this->User->saveField('primera_vez',1);
		}

	}