<?php
//require 'mixpanel-php/lib/Mixpanel.php';
App::uses('AppController', 'Controller');
/**
 * assessments Controller
 *
 * @property Cdda $Cdda
 * @property PaginatorComponent $Paginator
 */

	require_once "src/Mixpanel/Mixpanel.php";

class AssessmentsController extends AppController {


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Cdda','Usermgmt.User','Via','Challenge','PyramidUser','Incomplete', 'Personality' ,'Archetype','Jobsinfo','Skillsa','Feedbacka','Feedbackainv','Carreersfit','PersonalValues','Workvaluesa', 'TopPersonalValues','State','Adviser','Pyramid','Puntaje','Jobsinfo_awrrsi','Careersfitwork','Challengequestion','Course');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'quiz2';
		//$this->Cdda->recursive = 0;
		$this->set('title_for_layout', 'My Career Decision-Making Impediments | MENTOR.');
	}



/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cdda->exists($id)) {
			throw new NotFoundException(__('Invalid cdda'));
		}
		$options = array('conditions' => array('Cdda.' . $this->Cdda->primaryKey => $id));
		$this->set('cdda', $this->Cdda->find('first', $options));
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Cdda->create();
			if ($this->Cdda->save($this->request->data)) {
				$this->Session->setFlash(__('The cdda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cdda could not be saved. Please, try again.'));
			}
		}
	}

	public function addCdda() {
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){
			$dataQuest=$_POST['dataQuest'];

			$cdda = array(
				'A_v1_q2' => $dataQuest['quiz']['2'],
				'A_v1_q3' => $dataQuest['quiz']['3'],
				'A_v1_q4' => $dataQuest['quiz']['4'],
				'A_v1_q5' => $dataQuest['quiz']['5'],
				'A_v1_q6' => $dataQuest['quiz']['6'],
				'A_v1_q7' => $dataQuest['quiz']['7'],
				'A_v1_q8' => $dataQuest['quiz']['8'],
				'A_v1_q9' => $dataQuest['quiz']['9'],
				'A_v1_q10' => $dataQuest['quiz']['10'],
				'A_v1_q11' => $dataQuest['quiz']['11'],
				'A_v1_q12' => $dataQuest['quiz']['12'],
				'A_v1_q13' => $dataQuest['quiz']['13'],
				'A_v1_q14' => $dataQuest['quiz']['14'],
				'A_v1_q15' => $dataQuest['quiz']['15'],
				'A_v1_q16' => $dataQuest['quiz']['16'],
				'A_v1_q17' => $dataQuest['quiz']['17'],
				'A_v1_q18' => $dataQuest['quiz']['18'],
				'A_v1_q19' => $dataQuest['quiz']['19'],
				'A_v1_q20' => $dataQuest['quiz']['20'],
				'systematic' => $dataQuest['result']['F120'],
				'spontaneous' => $dataQuest['result']['F121'],
				'dms_internal' => $dataQuest['result']['F122'],
				'dms_external' => $dataQuest['result']['F123'],
				'motivation' => $dataQuest['result']['F124'],
				'indecisiveness' => $dataQuest['result']['F125'],
				'biliefs' => $dataQuest['result']['F126'],
				'process' => $dataQuest['result']['F127'],
				'self' => $dataQuest['result']['F128'],
				'occupations' => $dataQuest['result']['F129'],
				'conflict_internal' => $dataQuest['result']['F130'],
				'conflict_external' => $dataQuest['result']['F131'],
				'vision' => $dataQuest['result']['F132']
			);

			$lead = array(
				'email' => $dataQuest['user']['24'],
				'user_group_id' => 2,
				'first_name' => $dataQuest['user']['1'],
				'birthday' => $dataQuest['user']['21'],
				'education_id' => $dataQuest['quiz']['22'],
				'gender_id' => $dataQuest['quiz']['23'],
				'cdda_id' => ''
			);


			/* GUARDO EL QUIZ */
			if($this->Cdda->save($cdda)){


				$existe = $this->User->findByEmail($lead['email']);
				if(!empty($existe)){	//usuario viejo
					$this->loadModel('CampaignMonitor.CMSubscriber');

					$this->User->id = $existe['User']['id'];
					$lead['cdda_id'] = $this->Cdda->getLastInsertId();

					if($this->User->save($lead)){

						if($cdda['A_v1_q2'] == 1){
							$cdda['A_v1_q2'] = 'a';
						}elseif($cdda['A_v1_q2'] == 2){
							$cdda['A_v1_q2'] = 'b';
						}else{
							$cdda['A_v1_q2'] ='c';
						}

						if($cdda['A_v1_q5'] == 0)
							$cdda['A_v1_q5'] = 'no';
						else
							$cdda['A_v1_q5'] = 'yes';

						if($cdda['A_v1_q8'] == 0)
							$cdda['A_v1_q8'] = 'no';
						else
							$cdda['A_v1_q8'] = 'yes';

						if($lead['gender_id'] == 1)
							$lead['gender_id'] = 'man';
						else
							$lead['gender_id'] = 'woman';


						if($lead['education_id'] <= 3){
							$lead['education_id'] = 'Less than a High school diploma';
						}elseif($lead['education_id'] == 4){
							$lead['education_id'] = 'High school diploma / GED';
						}elseif($lead['education_id'] == 5){
							$lead['education_id'] = 'some college';
						}elseif($lead['education_id'] == 6){
							$lead['education_id'] = 'associate';
						}elseif($lead['education_id'] == 7){
							$lead['education_id'] = 'bachelor';
						}elseif($lead['education_id'] == 8){
							$lead['education_id'] = 'master';
						}elseif($lead['education_id'] == 9){
							$lead['education_id'] = 'Post-master’s certificate';
						}elseif($lead['education_id'] == 10){
							$lead['education_id'] = 'doctorate';
						}



				    if($this->CMSubscriber->save(array(	
				    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
							'EmailAddress' => $lead['email'], 
							'Name' => $lead['first_name'], 
							'CustomFields' => array(
								        array(
								            'Key' => 'name',
								            'Value' => $lead['first_name']
								        ),
								        array(
								            'Key' => 'birthday',
								            'Value' => $lead['birthday']
								        ),
								        array(
								            'Key' => 'education',
								            'Value' => $lead['education_id']
								        ),
								        array(
								            'Key' => 'gender',
								            'Value' => $lead['gender_id']
								        ),
								        array(
								            'Key' => 'userid',
								            'Value' => $existe['User']['id']
								        ),
								        array(
								            'Key' => 'type',
								            'Value' => 'member'
								        ),
								        array(
								            'Key' => 'systematic',
								            'Value' => $cdda['systematic']
								        ),
								        array(
								            'Key' => 'spontaneous',
								            'Value' => $cdda['spontaneous']
								        ),
								        array(
								            'Key' => 'dms_internal',
								            'Value' => $cdda['dms_internal']
								        ),
								        array(
								            'Key' => 'dms_external',
								            'Value' => $cdda['dms_external']
								        ),
								        array(
								            'Key' => 'motivation',
								            'Value' => $cdda['motivation']
								        ),
								        array(
								            'Key' => 'indecisiveness',
								            'Value' => $cdda['indecisiveness']
								        ),
								        array(
								            'Key' => 'beliefs',
								            'Value' => $cdda['biliefs']
								        ),
								        array(
								            'Key' => 'process',
								            'Value' => $cdda['process']
								        ),
								        array(
								            'Key' => 'self',
								            'Value' => $cdda['self']
								        ),
								        array(
								            'Key' => 'occupations',
								            'Value' => $cdda['occupations']
								        ),
								        array(
								            'Key' => 'conflict_internal',
								            'Value' => $cdda['conflict_internal']
								        ),
								        array(
								            'Key' => 'conflict_external',
								            'Value' => $cdda['conflict_external']
								        ),
								        array(
								            'Key' => 'vision',
								            'Value' => $cdda['vision']
								        ),
								        array(
								            'Key' => 'A.v1.q2',
								            'Value' => $cdda['A_v1_q2']
								        ),
								        array(
								            'Key' => 'A.v1.q3',
								            'Value' => $cdda['A_v1_q3']
								        ),
								        array(
								            'Key' => 'A.v1.q4',
								            'Value' => $cdda['A_v1_q4']
								        ),
								        array(
								            'Key' => 'A.v1.q5',
								            'Value' => $cdda['A_v1_q5']
								        ),
								        array(
								            'Key' => 'A.v1.q6',
								            'Value' => $cdda['A_v1_q6']
								        ),
								        array(
								            'Key' => 'A.v1.q7',
								            'Value' => $cdda['A_v1_q7']
								        ),
								        array(
								            'Key' => 'A.v1.q8',
								            'Value' => $cdda['A_v1_q8']
								        ),
								        array(
								            'Key' => 'A.v1.q9',
								            'Value' => $cdda['A_v1_q9']
								        ),
								        array(
								            'Key' => 'A.v1.q10',
								            'Value' => $cdda['A_v1_q10']
								        ),
								        array(
								            'Key' => 'A.v1.q11',
								            'Value' => $cdda['A_v1_q11']
								        ),
								        array(
								            'Key' => 'A.v1.q12',
								            'Value' => $cdda['A_v1_q12']
								        ),
								        array(
								            'Key' => 'A.v1.q13',
								            'Value' => $cdda['A_v1_q13']
								        ),
								        array(
								            'Key' => 'A.v1.q14',
								            'Value' => $cdda['A_v1_q14']
								        ),
								        array(
								            'Key' => 'A.v1.q15',
								            'Value' => $cdda['A_v1_q15']
								        ),
								        array(
								            'Key' => 'A.v1.q16',
								            'Value' => $cdda['A_v1_q16']
								        ),
								        array(
								            'Key' => 'A.v1.q17',
								            'Value' => $cdda['A_v1_q17']
								        ),
								        array(
								            'Key' => 'A.v1.q18',
								            'Value' => $cdda['A_v1_q18']
								        ),
								        array(
								            'Key' => 'A.v1.q19',
								            'Value' => $cdda['A_v1_q19']
								        ),
								        array(
								            'Key' => 'A.v1.q20',
								            'Value' => $cdda['A_v1_q20']
								        )
								    )
						))){

							$this->Session->write("dataQuest",$dataQuest);

							return json_encode ( true );
						}else{
							return json_encode ( false );
						}
						
					}else{
						return json_encode ( false );
					}

				}else{	//usuario nuevo


					/* GUARDO EL USUARIO */
					$lead['cdda_id'] = $this->Cdda->getLastInsertId();
					$aux = split('-', $lead['birthday']);
					$lead['birthday'] = $aux[2].'-'.$aux[1].'-'.$aux[0];
					if($this->User->save($lead)){

						/* GUARDO EN EL CAMPAIGN MONITOR */
						$this->loadModel('CampaignMonitor.CMSubscriber');

						if($cdda['A_v1_q2'] == 1){
							$cdda['A_v1_q2'] = 'a';
						}elseif($cdda['A_v1_q2'] == 2){
							$cdda['A_v1_q2'] = 'b';
						}else{
							$cdda['A_v1_q2'] ='c';
						}

						if($cdda['A_v1_q5'] == 0)
							$cdda['A_v1_q5'] = 'no';
						else
							$cdda['A_v1_q5'] = 'yes';

						if($cdda['A_v1_q8'] == 0)
							$cdda['A_v1_q8'] = 'no';
						else
							$cdda['A_v1_q8'] = 'yes';

						if($lead['gender_id'] == 1)
							$lead['gender_id'] = 'man';
						else
							$lead['gender_id'] = 'woman';


						if($lead['education_id'] <= 3){
							$lead['education_id'] = '<12';
						}elseif($lead['education_id'] == 4){
							$lead['education_id'] = 'high school';
						}elseif($lead['education_id'] == 5){
							$lead['education_id'] = 'some college';
						}elseif($lead['education_id'] == 6){
							$lead['education_id'] = 'associate';
						}elseif($lead['education_id'] == 7){
							$lead['education_id'] = 'bachelor';
						}elseif($lead['education_id'] == 8){
							$lead['education_id'] = 'master';
						}elseif($lead['education_id'] == 9){
							$lead['education_id'] = 'professional school';
						}elseif($lead['education_id'] == 10){
							$lead['education_id'] = 'doctorate';
						}



				    if($this->CMSubscriber->save(array(	
				    	'ListID' => 'bb0a2adeebf725ae78e89cfa5c7e34e6', //lista de leads
							'EmailAddress' => $lead['email'], 
							'Name' => $lead['first_name'], 
							'CustomFields' => array(
								        array(
								            'Key' => 'name',
								            'Value' => $lead['first_name']
								        ),
								        array(
								            'Key' => 'birthday',
								            'Value' => $lead['birthday']
								        ),
								        array(
								            'Key' => 'education',
								            'Value' => $lead['education_id']
								        ),
								        array(
								            'Key' => 'gender',
								            'Value' => $lead['gender_id']
								        ),
								        array(
								            'Key' => 'userid',
								            'Value' => $this->User->getLastInsertId()
								        ),
								        array(
								            'Key' => 'type',
								            'Value' => 'lead'
								        ),
								        array(
								            'Key' => 'systematic',
								            'Value' => $cdda['systematic']
								        ),
								        array(
								            'Key' => 'spontaneous',
								            'Value' => $cdda['spontaneous']
								        ),
								        array(
								            'Key' => 'dms_internal',
								            'Value' => $cdda['dms_internal']
								        ),
								        array(
								            'Key' => 'dms_external',
								            'Value' => $cdda['dms_external']
								        ),
								        array(
								            'Key' => 'motivation',
								            'Value' => $cdda['motivation']
								        ),
								        array(
								            'Key' => 'indecisiveness',
								            'Value' => $cdda['indecisiveness']
								        ),
								        array(
								            'Key' => 'beliefs',
								            'Value' => $cdda['biliefs']
								        ),
								        array(
								            'Key' => 'process',
								            'Value' => $cdda['process']
								        ),
								        array(
								            'Key' => 'self',
								            'Value' => $cdda['self']
								        ),
								        array(
								            'Key' => 'occupations',
								            'Value' => $cdda['occupations']
								        ),
								        array(
								            'Key' => 'conflict_internal',
								            'Value' => $cdda['conflict_internal']
								        ),
								        array(
								            'Key' => 'conflict_external',
								            'Value' => $cdda['conflict_external']
								        ),
								        array(
								            'Key' => 'vision',
								            'Value' => $cdda['vision']
								        ),
								        array(
								            'Key' => 'A.v1.q2',
								            'Value' => $cdda['A_v1_q2']
								        ),
								        array(
								            'Key' => 'A.v1.q3',
								            'Value' => $cdda['A_v1_q3']
								        ),
								        array(
								            'Key' => 'A.v1.q4',
								            'Value' => $cdda['A_v1_q4']
								        ),
								        array(
								            'Key' => 'A.v1.q5',
								            'Value' => $cdda['A_v1_q5']
								        ),
								        array(
								            'Key' => 'A.v1.q6',
								            'Value' => $cdda['A_v1_q6']
								        ),
								        array(
								            'Key' => 'A.v1.q7',
								            'Value' => $cdda['A_v1_q7']
								        ),
								        array(
								            'Key' => 'A.v1.q8',
								            'Value' => $cdda['A_v1_q8']
								        ),
								        array(
								            'Key' => 'A.v1.q9',
								            'Value' => $cdda['A_v1_q9']
								        ),
								        array(
								            'Key' => 'A.v1.q10',
								            'Value' => $cdda['A_v1_q10']
								        ),
								        array(
								            'Key' => 'A.v1.q11',
								            'Value' => $cdda['A_v1_q11']
								        ),
								        array(
								            'Key' => 'A.v1.q12',
								            'Value' => $cdda['A_v1_q12']
								        ),
								        array(
								            'Key' => 'A.v1.q13',
								            'Value' => $cdda['A_v1_q13']
								        ),
								        array(
								            'Key' => 'A.v1.q14',
								            'Value' => $cdda['A_v1_q14']
								        ),
								        array(
								            'Key' => 'A.v1.q15',
								            'Value' => $cdda['A_v1_q15']
								        ),
								        array(
								            'Key' => 'A.v1.q16',
								            'Value' => $cdda['A_v1_q16']
								        ),
								        array(
								            'Key' => 'A.v1.q17',
								            'Value' => $cdda['A_v1_q17']
								        ),
								        array(
								            'Key' => 'A.v1.q18',
								            'Value' => $cdda['A_v1_q18']
								        ),
								        array(
								            'Key' => 'A.v1.q19',
								            'Value' => $cdda['A_v1_q19']
								        ),
								        array(
								            'Key' => 'A.v1.q20',
								            'Value' => $cdda['A_v1_q20']
								        )
								    )
						))){

							$this->Session->write("dataQuest",$dataQuest);

							return json_encode ( true );
						}else{
							return json_encode ( false );
						}
						
					}else{
						return json_encode ( false );
					}
				}//usuario nuevo

			}else{
					return json_encode ( false );
			}

			/*
				quiz: {2: "3", 3: "6", 4: "6", 5: "0", 6: "5", 7: "5", 8: "0", 9: "5", 10: "5", 11: "5", 12: "5", 13: "5",…}
				result: {F120: 5, F121: 0, F122: 0, F123: 1, F124: 5, F125: 2, F126: 0, F127: 15, F128: 10, F129: 15, F130: 0,…}
				user: {1: "Diego", 21: "2015-02-11", 24: "kuhad@akjshd.com"}
			*/

		}else{
			$this->redirect($this->webroot.'assessments/index');
		}

		return json_encode ( true );
	}

	public function addVia($id = 2) {
		$id = $this->UserAuth->getUserId();
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];
			$riasec = array('c' => $dataQuest['result']['conventional'], 'e' => $dataQuest['result']['enterprising'],'s'=>$dataQuest['result']['social'],'a'=> $dataQuest['result']['artistic'],'i'=>$dataQuest['result']['investigative'],'r' =>$dataQuest['result']['realistic']);
			$this->Session->write("archetype",$this->__archetype($riasec));
			$via = array(
				'user_id' => $id,
				'artistic' => $dataQuest['result']['artistic'],
				'conventional' => $dataQuest['result']['conventional'],
				'enterprising' => $dataQuest['result']['enterprising'],
				'investigative' => $dataQuest['result']['investigative'],
				'realistic' => $dataQuest['result']['realistic'],
				'social' => $dataQuest['result']['social'],
				'archetype_id' => $this->__archetype($riasec)
			);

			$reescribir = $this->Via->findByUserId($this->UserAuth->getUserId());

			if(!empty($reescribir)){	//si hay datos guardados anteriormente se deben borrar
				$this->Via->deleteAll(array('Via.user_id' => $this->UserAuth->getUserId()), false);
			}

			/* GUARDO EL QUIZ */
			if($this->Via->save($via)){
				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 2)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}

				$this->User->save(array('id'=>$id,'via_id'=>$this->Via->getLastInsertId()));
				$this->Session->write("dataQuestVIA",$dataQuest);


				/*guardo las carreras del usuario*/

				$this->Jobsinfo->recursive = -1;
				$jobs = $this->Jobsinfo->find('all');

				$p = array();
				$r = array();
				$code = array(); 
				$prc = array();


				$expected_range = array($dataQuest['result']['realistic'],$dataQuest['result']['investigative'],$dataQuest['result']['artistic'],$dataQuest['result']['social'],$dataQuest['result']['enterprising'],$dataQuest['result']['conventional']);
				//$expected_range = array(33,24,14,17,20,32);
				//$actual_range = array(7,3,1,1.33,2,5);

				foreach ($jobs as $job) {
				//for ($i=0; $i < 5; $i++) { 
					$actual_range = array($job['Jobsinfo']['r'],$job['Jobsinfo']['i'],$job['Jobsinfo']['a'],$job['Jobsinfo']['s'],$job['Jobsinfo']['e'],$job['Jobsinfo']['c']);
					$prc_aux = array();

					$t = $this->gett($actual_range, $expected_range);
					$prc_aux[0] = $this->getp($t);
					$prc_aux[1] = $this->getr($actual_range, $expected_range);
					$prc_aux[2] = $job['Jobsinfo']['id'];
					array_push($prc,$prc_aux);
				}


					asort($prc);  //ordenamos por p
					// $this->log($prc);
					$prc = $this->filterP($prc);  //filtramos por p<0.1
					$prc = $this->filterR($prc);  //filtramos por r>0.1
					//cambiamos el orden del arreglo para ordenarlo por r
					// $this->log($prc);
					$rpc = array();

					foreach ($prc as $key => $prcs) {
						$prc_aux = array();
						$prc_aux[0] = $prc[$key][1];
						$prc_aux[1] = $prc[$key][0];
						$prc_aux[2] = $prc[$key][2];
						array_push($rpc,$prc_aux);
					}


					rsort($rpc);	//ordenamos por r descendientemente

					//guardamos las carreras del usuario
					$fits = array();
					for ($i=0; $i < count($rpc); $i++) { 
						$fits[$i] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_id' => $rpc[$i][2], 'p' => $rpc[$i][1], 'r' => $rpc[$i][0]);
					}


					$reescribir = $this->Carreersfit->findByUserId($this->UserAuth->getUserId());

					if(!empty($reescribir)){	//si hay datos guardados anteriormente se deben borrar
						$this->Carreersfit->deleteAll(array('Carreersfit.user_id' => $this->UserAuth->getUserId()), false);
					}

					/* aqui mezclo el p y el r */

					$user = $this->User->findById($this->UserAuth->getUserId());
					if($user['Puntaje']['work'] >= '70'){
						$this->Careersfitwork->recursive=-1;
						$workvalues = $this->Careersfitwork->find('all', array('conditions' => array('Careersfitwork.user_id' => $this->UserAuth->getUserId())));
						
						if(count($fits) <= count($workvalues)){

							$k = 0;
							$total = array();
							foreach ($fits as $fit) {
								foreach ($workvalues as $workvalue) {
									if($fit['jobsinfo_id'] == $workvalue['Careersfitwork']['jobsinfo_awrrsi_id']){
										$rtotal = (($fit['r']*0.4)+($workvalue['Careersfitwork']['r']*0.6));
										$ptotal = (($fit['p']+$workvalue['Careersfitwork']['p'])/2);
										$total[$k] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_id' => $fit['jobsinfo_id'], 'p' => $ptotal, 'r' => $rtotal);
										$k++;
									}
								}
							}

						}else{
							$k = 0;
							$total = array();
							foreach ($workvalues as $workvalue) {
								foreach ($fits as $fit) {
									if($workvalue['Careersfitwork']['jobsinfo_awrrsi_id'] == $fit['jobsinfo_id']){
										$rtotal = (($fit['r']*0.4)+($workvalue['Careersfitwork']['r']*0.6));
										$ptotal = (($fit['p']+$workvalue['Careersfitwork']['p'])/2);
										$total[$k] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_id' => $fit['jobsinfo_id'], 'p' => $ptotal, 'r' => $rtotal);
										$k++;
									}
								}
							}
						}
					}

					if(empty($total)){
						$total = $fits;
					}
					$this->log($total);
					if($this->Carreersfit->saveAll($total)){

						$user = $this->User->findById($this->UserAuth->getUserId());
						$this->Puntaje->id = $user['Puntaje']['id'];
						$this->Puntaje->saveField('vocational', 70);

						return json_encode ( true );
					}else{
						return json_encode ( false );
					}
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/vocationalInterests');
		}

		return json_encode ( false );
	}

	public function addPyramid($id = 2) {
		$id = $this->UserAuth->getUserId();
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];

			$pyramid = array(
				'user_id' => $id,
				'assessment_id' => 8,
				'questions' => $dataQuest
			);

			$existe = $this->Pyramid->findByUserId($pyramid['user_id']);

			if(!empty($existe)){
				$this->Pyramid->deleteAll(array('Pyramid.user_id' => $pyramid['user_id']), false);	
			}

			/* GUARDO EL QUIZ */
			if($this->Pyramid->save($pyramid)){
				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 8)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}
				$this->Session->write("dataQuestPyramid",$dataQuest);
				return json_encode ( true );
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/skillsA');
		}

		return json_encode ( false );
	}

	public function addPersonality($id = 2) {
		$id = $this->UserAuth->getUserId();	
		$this->autoRender = false;
		$this->Personality->deleteAll(array('Personality.user_id' => $this->UserAuth->getUserId()), false);

		$dataQuest=$_POST['dataQuest'];
		$ov = ($dataQuest['result']['stress_management'] + $dataQuest['result']['resilience'] + $dataQuest['result']['persuasiveness'] + $dataQuest['result']['organizational_skills'] + $dataQuest['result']['hardworking'] + $dataQuest['result']['positive_attitude'] + $dataQuest['result']['collaborative'] + $dataQuest['result']['leadership']) / 8;

			$Personality = array(
				'user_id' => $id,
				'assessment_id' => 7,
				'stress_management' => $dataQuest['result']['stress_management'],
				'resilience' => $dataQuest['result']['resilience'],
				'persuasiveness' => $dataQuest['result']['persuasiveness'],
				'organizational_skills' => $dataQuest['result']['organizational_skills'],
				'hardworking' => $dataQuest['result']['hardworking'],
				'positive_attitude' => $dataQuest['result']['positive_attitude'],
				'collaborative' => $dataQuest['result']['collaborative'],
				'leadership' => $dataQuest['result']['leadership'],
				'overall' => $ov,
			);

			if($this->Personality->save($Personality)){
				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 9)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}
				$user = $this->User->findById($this->UserAuth->getUserId());
				$this->Puntaje->id = $user['Puntaje']['id'];
				$this->Puntaje->saveField('abilities', 20);

				return json_encode ( true );
			}else{
				return json_encode ( false );
			}

		// return json_encode ( true );
	}

	public function addSkills($id = 2) {
		$id = $this->UserAuth->getUserId();
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];

			$skills = array(
				'user_id' => $id,
				'problem_solving' => $dataQuest['result']['problem_solving'],
				'adaptability' => $dataQuest['result']['adaptability'],
				'critical_thinking' => $dataQuest['result']['critical_thinking'],
				'communication' => $dataQuest['result']['communication'],
				'creative_thinking' => $dataQuest['result']['creative_thinking'],
				'time_management' => $dataQuest['result']['time_management'],
				'numerical_reasoning' => $dataQuest['result']['numerical_reasoning'],
				'commercial_awareness' => $dataQuest['result']['commercial_awareness'],
				'overall' => $dataQuest['result']['overall']
			);

			/* GUARDO EL QUIZ */
			if($this->Skillsa->save($skills)){

				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 3)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}

				$user = $this->User->findById($this->UserAuth->getUserId());
				$this->Puntaje->id = $user['Puntaje']['id'];
				$this->Puntaje->saveField('skills', 40);

				return json_encode ( true );
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/skillsA');
		}

		return json_encode ( false );
	}


	public function addWorkValues($id = 2) {
		$id = $this->UserAuth->getUserId();
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];

			$a = 0;
			$i = 0;
			$r1 = 0;
			$r2 = 0;
			$w = 0;
			$s = 0;

			$a = ($dataQuest['result']['wv_completeness'] * 7)/100;
			$i = ($dataQuest['result']['wv_autonomy'] * 7)/100;
			$r = ($dataQuest['result']['wv_status'] * 7)/100;
			$r2 = (($dataQuest['result']['wv_relatedness'] * 7)/100 + ($dataQuest['result']['wv_impact'] * 7)/100)/2;
			$w = (($dataQuest['result']['wv_pay'] * 7)/100 + ($dataQuest['result']['wv_job_security'] * 7)/100 + ($dataQuest['result']['wv_variety'] * 7)/100 + ($dataQuest['result']['wv_balance'] * 7)/100)/4;
			$s = 3.5;

			$works = array(
				'user_id' => $id,
				'wv_completeness' => $dataQuest['result']['wv_completeness'],
				'wv_autonomy' => $dataQuest['result']['wv_autonomy'],
				'wv_status' => $dataQuest['result']['wv_status'],
				'wv_relatedness' => $dataQuest['result']['wv_relatedness'],
				'wv_impact' => $dataQuest['result']['wv_impact'],
				'wv_pay' => $dataQuest['result']['wv_pay'],
				'wv_job_security' => $dataQuest['result']['wv_job_security'],
				'wv_variety' => $dataQuest['result']['wv_variety'],
				'wv_balance' => $dataQuest['result']['wv_balance'],
				'a' => $a,
				'w' => $w,
				'r' => $r1,
				'r2' => $r2,
				's' => $s,
				'i' => $i
			);


			$reescribir = $this->Workvaluesa->findByUserId($this->UserAuth->getUserId());

			if(!empty($reescribir)){	//si hay datos guardados anteriormente se deben borrar
				$this->Workvaluesa->deleteAll(array('Workvaluesa.user_id' => $this->UserAuth->getUserId()), false);
			}

			/* GUARDO EL QUIZ */
			if($this->Workvaluesa->save($works)){


				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 6)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}



				$this->Jobsinfo_awrrsi->recursive = -1;
				$jobs = $this->Jobsinfo_awrrsi->find('all');
				$p = array();
				$r = array();
				$code = array(); 
				$prc = array();


				$expected_range = array($a,$w,$r1,$r2,$s,$i);
				// debug($expected_range);die;
				// $expected_range = array(5,6,7,2,3,2);
				//$actual_range = array(7,3,1,1.33,2,5);

				foreach ($jobs as $job) {
					$actual_range = array($job['Jobsinfo_awrrsi']['a'],$job['Jobsinfo_awrrsi']['w'],$job['Jobsinfo_awrrsi']['r'],$job['Jobsinfo_awrrsi']['r2'],$job['Jobsinfo_awrrsi']['s'],$job['Jobsinfo_awrrsi']['i']);
					// $actual_range = array(2.67,3,2.33,4.67,6,5);
					$prc_aux = array();
					$t = $this->gett($actual_range, $expected_range);
					$prc_aux[0] = $this->getp($t);
					$prc_aux[1] = $this->getr($actual_range, $expected_range);
					$prc_aux[2] = $job['Jobsinfo_awrrsi']['id'];
					// $prc_aux[2] = '53-7121.00';
					array_push($prc,$prc_aux);
				}
					asort($prc);  //ordenamos por p

					

					$prc = $this->filterP($prc);  //filtramos por p<0.1

					//cambiamos el orden del arreglo para ordenarlo por r
					$rpc = array();

					foreach ($prc as $key => $prcs) {
						$prc_aux = array();
						$prc_aux[0] = $prc[$key][1];
						$prc_aux[1] = $prc[$key][0];
						$prc_aux[2] = $prc[$key][2];
						array_push($rpc,$prc_aux);
					}


					rsort($rpc);	//ordenamos por r descendientemente

					//guardamos las carreras del usuario
					$fits_work = array();
					for ($i=0; $i < count($rpc); $i++) { 
						$fits_work[$i] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_awrrsi_id' => $rpc[$i][2], 'p' => $rpc[$i][1], 'r' => $rpc[$i][0]);
					}


					$reescribir = $this->Careersfitwork->findByUserId($this->UserAuth->getUserId());

					if(!empty($reescribir)){	//si hay datos guardados anteriormente se deben borrar
						$this->Careersfitwork->deleteAll(array('Careersfitwork.user_id' => $this->UserAuth->getUserId()), false);
					}

					if($this->Careersfitwork->saveAll($fits_work)){

						$user = $this->User->findById($this->UserAuth->getUserId());
						$this->Puntaje->id = $user['Puntaje']['id'];
						$this->Puntaje->saveField('work', 70);

						/* aqui mezclo el p y el r */
						if($user['Puntaje']['vocational'] >= '70'){
						$this->Carreersfit->recursive=-1;
						$vias = $this->Carreersfit->find('all', array('conditions' => array('Carreersfit.user_id' => $this->UserAuth->getUserId())));
						
						if(count($fits_work) <= count($vias)){

							$k = 0;
							$total = array();
							foreach ($fits_work as $fit) {
								foreach ($vias as $via) {
									if($fit['jobsinfo_awrrsi_id'] == $via['Carreersfit']['jobsinfo_id']){
										$rtotal = (($fit['r']*0.6)+($via['Carreersfit']['r']*0.4));
										$ptotal = (($fit['p']+$via['Carreersfit']['p'])/2);
										$total[$k] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_id' => $fit['jobsinfo_awrrsi_id'], 'p' => $ptotal, 'r' => $rtotal);
										$k++;
									}
								}
							}

							}else{
								$k = 0;
								$total = array();
								foreach ($vias as $via) {
									foreach ($fits_work as $fit) {
										if($via['Carreersfit']['jobsinfo_id'] == $fit['jobsinfo_awrrsi_id']){
											$rtotal = (($fit['r']*0.6)+($via['Carreersfit']['r']*0.4));
											$ptotal = (($fit['p']+$via['Carreersfit']['p'])/2);
											$total[$k] = array('user_id' => $this->UserAuth->getUserId(), 'jobsinfo_id' => $fit['jobsinfo_awrrsi_id'], 'p' => $ptotal, 'r' => $rtotal);
											$k++;
										}
									}
								}
							}

							$this->Carreersfit->deleteAll(array('Carreersfit.user_id' => $this->UserAuth->getUserId()), false);
							if($this->Carreersfit->saveAll($total)){
								return json_encode ( true );
							}else{
								return json_encode ( false );
							}

						}

						return json_encode ( true );
					}else{
						return json_encode ( false );
					}


				return json_encode ( true );
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/WorkValues');
		}

		return json_encode ( false );
	}

	public function addFa() {
		$id = $this->UserAuth->getUserId();
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];

			$feedback = array(
				'user_id' => $id,
				'assessment_id' => 4,
				'G_v1_q1' => $dataQuest['quiz']['1'],
				'G_v1_q2' => $dataQuest['quiz']['2'],
				'G_v1_q3' => $dataQuest['quiz']['3'],
				'G_v1_q4' => $dataQuest['quiz']['4'],
				'G_v1_q5' => $dataQuest['quiz']['5'],
				'G_v1_q6' => $dataQuest['quiz']['6'],
				'G_v1_q7' => $dataQuest['quiz']['7'],
				'G_v1_q8' => $dataQuest['quiz']['8'],
				'G_v1_q9' => $dataQuest['quiz']['9'],
				'G_v1_q10' => $dataQuest['quiz']['10'],
				'G_v1_q11' => $dataQuest['quiz']['11'],
				'G_v1_q12' => $dataQuest['quiz']['12'],
				'G_v1_q13' => $dataQuest['quiz']['13'],
				'G_v1_q14' => $dataQuest['quiz']['14'],
				'G_v1_q15' => $dataQuest['quiz']['15'],
				'G_v1_q16' => $dataQuest['quiz']['16'],
				'G_v1_q17' => $dataQuest['quiz']['17'],
				'G_v1_q18' => $dataQuest['quiz']['18'],
				'G_v1_q19' => $dataQuest['quiz']['19'],
				'G_v1_q20' => $dataQuest['quiz']['20'],
				'G_v1_q21' => $dataQuest['quiz']['21'],
				'G_v1_q22' => $dataQuest['quiz']['22'],
				'time_management_360' => $dataQuest['result']['time_management_360'],
				'adaptability_360' => $dataQuest['result']['adaptability_360'],
				'communication_360' => $dataQuest['result']['communication_360'],
				'problem_solving_360' => $dataQuest['result']['problem_solving_360'],
				'teamwork_360' => $dataQuest['result']['teamwork_360'],
				'ledership_360' => $dataQuest['result']['ledership_360'],
				'tech_savvy_360' => $dataQuest['result']['tech_savvy_360'],
				'persuasive_360' => $dataQuest['result']['persuasive_360'],
				'active_listening' => $dataQuest['result']['active_listening'],
				'oral_communication' => $dataQuest['result']['oral_communication'],
				'written_communication' => $dataQuest['result']['written_communication']
			);

			/* GUARDO EL QUIZ */
			// $this->log($this->Feedbacka->save($feedback));

			$reescribir = $this->Feedbacka->findByUserId($this->UserAuth->getUserId());

			if(!empty($reescribir)){	//si hay datos guardados anteriormente se deben borrar
				$this->Feedbacka->deleteAll(array('Feedbacka.user_id' => $this->UserAuth->getUserId()), false);
			}
			
			if($this->Feedbacka->save($feedback)){
				$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 4)));
				if(!empty($incompleto)){
					$this->Incomplete->deleteAll(array('Incomplete.id' => $incompleto['Incomplete']['id']),false);
				}
				//$this->User->save(array('id'=>$id,'via_id'=>$this->Via->getLastInsertId()));
				$this->Session->write("dataQuestFA", $dataQuest);

				// $this->log($this->Session->read("dataQuestFA"));
				return json_encode ( true );
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/feedbackA');
		}

		return json_encode ( false );
	}


	public function addFaInvite($id = null) {
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest=$_POST['dataQuest'];

			$feedbackinv = array(
				'user_id' => $id,
				'assessment_id' => 5,
				'H_v1_q2' => $dataQuest['quiz']['2'],
				'H_v1_q3' => $dataQuest['quiz']['3'],
				'H_v1_q4' => $dataQuest['quiz']['4'],
				'H_v1_q5' => $dataQuest['quiz']['5'],
				'H_v1_q6' => $dataQuest['quiz']['6'],
				'H_v1_q7' => $dataQuest['quiz']['7'],
				'H_v1_q8' => $dataQuest['quiz']['8'],
				'H_v1_q9' => $dataQuest['quiz']['9'],
				'H_v1_q10' => $dataQuest['quiz']['10'],
				'H_v1_q11' => $dataQuest['quiz']['11'],
				'H_v1_q12' => $dataQuest['quiz']['12'],
				'H_v1_q13' => $dataQuest['quiz']['13'],
				'H_v1_q14' => $dataQuest['quiz']['14'],
				'H_v1_q15' => $dataQuest['quiz']['15'],
				'H_v1_q16' => $dataQuest['quiz']['16'],
				'H_v1_q17' => $dataQuest['quiz']['17'],
				'H_v1_q18' => $dataQuest['quiz']['18'],
				'H_v1_q19' => $dataQuest['quiz']['19'],
				'H_v1_q20' => $dataQuest['quiz']['20'],
				'H_v1_q21' => $dataQuest['quiz']['21'],
				'H_v1_q22' => $dataQuest['quiz']['22'],
				'H_v1_q23' => $dataQuest['quiz']['23'],
				'H_v1_q24' => $dataQuest['quiz']['24'],
				'H_v1_q25' => $dataQuest['quiz']['25'],
				'H_v1_q26' => $dataQuest['quiz']['26'],
				'time_management_360_invite' => $dataQuest['result']['time_management_360_invite'],
				'adaptability_360_invite' => $dataQuest['result']['adaptability_360_invite'],
				'communication_360_invite' => $dataQuest['result']['communication_360_invite'],
				'problem_solving_360_invite' => $dataQuest['result']['problem_solving_360_invite'],
				'teamwork_360_invite' => $dataQuest['result']['teamwork_360_invite'],
				'ledership_360_invite' => $dataQuest['result']['ledership_360_invite'],
				'tech_savvy_360_invite' => $dataQuest['result']['tech_savvy_360_invite'],
				'persuasive_360_invite' => $dataQuest['result']['persuasive_360_invite'],
				'active_listening_invite' => $dataQuest['result']['active_listening_invite'],
				'oral_communication_invite' => $dataQuest['result']['oral_communication_invite'],
				'written_communication_invite' => $dataQuest['result']['written_communication_invite']
			);

			/* GUARDO EL QUIZ */
			if($this->Feedbackainv->save($feedbackinv)){

				//$this->User->save(array('id'=>$id,'via_id'=>$this->Via->getLastInsertId()));
				$this->Session->write("dataQuestFAinv",$dataQuest);

				return json_encode ( true );
			}else{
				return json_encode ( false );
			}
		}else{
			$this->redirect($this->webroot.'assessments/feedbackFriend/'.$id);
		}

		return json_encode ( false );
	}



	public function addAdviser(){
		
		$this->autoRender = false;
		if(isset($_POST['dataQuest'])){

			$dataQuest = $_POST['dataQuest'];

			$this->State->recursive = -1;
			$state_id = $this->State->findByName($dataQuest['result']['mentor_state']);
			$state_id = $state_id['State']['id'];

			if($dataQuest['result']['mentor_title'] == 'Mr.'){
				$gender_id = 1;
			}else{
				$gender_id = 2;
			}

			$mentor = array(
				'user_group_id' => 4,
				'state_id' => $state_id,
				'email' => $dataQuest['result']['mentor_email'],
				'first_name' => $dataQuest['result']['mentor_name'],
				'last_name' => $dataQuest['result']['mentor_surname'],
				'gender_id' => $gender_id,
				'image' => $dataQuest['result']['mentor_image']
			);

			$existe = $this->User->findByEmail($mentor['email']);

			if(!empty($existe)){
				$this->User->deleteAll(array('User.email' => $mentor['email']), false	);
			}

			if($this->User->save($mentor)){
				$adviser = array(
					'user_id' => $this->User->getLastInsertId(),
					'assessment_id' => 7,
					'correct_profile' => 'Waiting',
					'aplication_date' => date('Y-m-d'),
					'mentor_title' => $dataQuest['result']['mentor_title'],
					'mentor_name' => $dataQuest['result']['mentor_name'],
					'mentor_surname' => $dataQuest['result']['mentor_surname'],
					'mentor_email' => $dataQuest['result']['mentor_email'],
					'mentor_job_title' => $dataQuest['result']['mentor_job_title'],
					'mentor_job_explanation' => $dataQuest['result']['mentor_job_explanation'],
					'mentor_central_career' => $dataQuest['result']['mentor_central_career'],
					'mentor_advice_level' => $dataQuest['result']['mentor_advice_level'],
					'mentor_advice' => $dataQuest['result']['mentor_advice'],
					'mentor_challenges' => $dataQuest['result']['mentor_challenges'],
					'mentor_privacy' => $dataQuest['result']['mentor_privacy']
				);

				$existe = $this->Adviser->findByMentorEmail($adviser['mentor_email']);

				if(!empty($existe)){
					$this->Adviser->deleteAll(array('Adviser.mentor_email' => $adviser['mentor_email']), false);	
				}

				if($this->Adviser->save($adviser)){
					$this->Session->write("adviser",$adviser);

					if(empty($existe)){
						$this->loadModel('CampaignMonitor.CMSubscriber');


						if($this->CMSubscriber->save(array(	
				    	'ListID' => 'aba802f8a802fd41f7d062972d17f6e9', //lista de members
							'EmailAddress' => $adviser['mentor_email'], 
							'Name' => $adviser['mentor_name'], 
							'CustomFields' => array(
					        array(
					            'Key' => 'correct_profile',
					            'Value' => $adviser['correct_profile']
					        ),
					        array(
					            'Key' => 'application_date',
					            'Value' => $adviser['aplication_date']
					        ),
					        array(
					            'Key' => 'title',
					            'Value' => $adviser['mentor_title']
					        ),
					        array(
					            'Key' => 'mentor_name',
					            'Value' => $adviser['mentor_name']
					        ),
					        array(
					            'Key' => 'mentor_surname',
					            'Value' => $adviser['mentor_surname']
					        ),
					        array(
					            'Key' => 'mentor_job_title',
					            'Value' => $adviser['mentor_job_title']
					        ),
					        array(
					            'Key' => 'mentor_state',
					            'Value' => $dataQuest['result']['mentor_state']
					        ),
					        array(
					            'Key' => 'mentor_email',
					            'Value' => $adviser['mentor_email']
					        ),
					        array(
					            'Key' => 'mentor_privacy',
					            'Value' => $adviser['mentor_privacy']
					        )
					    )
						))){
							return true;
						}else{
							return false;
						}
					}

					return json_encode ( true );
				}else{
					return json_encode ( false );
				}

			}else{
				return json_encode ( false );
			}

			
		}else{
			$this->redirect($this->webroot.'assessments/adviser');
		}

		return json_encode ( false );
	}


	public function send_invitations_test($id = 2){
		$id = $this->UserAuth->getUserId();
		return json_encode ( 1 );
	}

	public function send_invitations($id = 2){

		$this->__Mixpaneltrack("send invitations button in 360");

		$id = $this->UserAuth->getUserId();

		$this->autoRender = false;

		$member = $this->User->findById($id);
		if(isset($_POST['finisData'])){

			$invitations=$_POST['finisData'];

					$this->loadModel('CampaignMonitor.CMSubscriber');
					$todos = array();

			/*
			Name	[fullname,fallback=]
			Email address	[email]	 Visible    Required  	
			friend_name — text  (edit)	[friend_name,fallback=]	 Visible	
			friend_email — text  (edit)	[friend_email,fallback=]	 Visible	
			friend_relationship — text  (edit)	[friend_relationship,fallback=]	 Visible	
			member_name — text  (edit)	[member_name,fallback=]	 Visible	
			token — text  (edit)*/

				foreach ($invitations as $invitation) {
					array_push($todos, array( 
			    	'ListID' => '9366309a83b78a3cf4fc182fd8666055', //lista de members
						'EmailAddress' => $invitation['email'], 
						'Name' => $invitation['name'], 
						'CustomFields' => array(
			        array(
			            'Key' => 'friend_name',
			            'Value' => $invitation['name']
			        ),
			        array(
			            'Key' => 'friend_email',
			            'Value' => $invitation['email']
			        ),
			        array(
			            'Key' => 'friend_relationship',
			            'Value' => $invitation['relationship']
			        ),
			        array(
			            'Key' => 'member_name',
			            'Value' => $member['User']['first_name']
			        ),
			        array(
			            'Key' => 'token',
			            'Value' => $member['User']['id']
			        )
						)
					));
				}

					$this->CMSubscriber->saveAll($todos);

					$enviados = $this->Feedbacka->findByUserId($id);
					$id_enviados = $enviados['Feedbacka']['id'];
					$enviados = $enviados['Feedbacka']['sent'];

					$enviados += count($invitations);
					$data = array('id' => $id_enviados, 'sent' => $enviados);

					$this->Feedbacka->save($data);

					$user = $this->User->findById($this->UserAuth->getUserId());
					$this->Puntaje->id = $user['Puntaje']['id'];
					$this->Puntaje->saveField('feedback', 60);
					
					return json_encode ( 1 );

		}else{
			$this->redirect('assessments/feedbackFriend/'.$id);
		}

	}


	function __archetype($riasec){
		//declaramos el maximo valor como 0	
		$max = 0;
		//declaramos el archetype vacio
		$archetype = "";
		//iniciamos un ciclo que funcionara dos veces
		for($x = 0 ; $x <= 1 ; $x++){
		//recorremos el array riasec	
		foreach ($riasec as $key => $value) {
			//comparamos el valor de pa posicion con el maximo valor
			if ($value >= $max){
				//guardamos la posicion mayor
				$maxkey = $key;
				//guardamos el valor mayor
				$max = $value;
			}
		}
		//eliminamos la posicion mayor del array
		unset($riasec[$maxkey]);
		//asignamos $max = 0
		$max = 0;
		//concatenamos la letra al archetype
		$archetype = $archetype . $maxkey;
		}
		//retorna el archtype
		return  strtoupper($archetype);
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  
	public function edit($id = null) {
		if (!$this->Cdda->exists($id)) {
			throw new NotFoundException(__('Invalid cdda'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cdda->save($this->request->data)) {
				$this->Session->setFlash(__('The cdda has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cdda could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cdda.' . $this->Cdda->primaryKey => $id));
			$this->request->data = $this->Cdda->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cdda->id = $id;
		if (!$this->Cdda->exists()) {
			throw new NotFoundException(__('Invalid cdda'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cdda->delete()) {
			$this->Session->setFlash(__('The cdda has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cdda could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	public function result(){
		$this->layout = 'quiz';
		$this->set('title_for_layout', 'My Career Decision-Making Impediments Results | MENTOR.');
		$this->set('dataQuest', $this->Session->read('dataQuest'));
	}


	public function VocationalInterests(){
		if($this->UserAuth->isLogged()){
			$this->__Mixpaneltrack("interests from quests m1");
			$exi = $this->Via->find('all', array('conditions' => array('Via.user_id' => $this->UserAuth->getUserId())));
			if(!empty($exi)){
				$this->redirect('/career_program/results_interests');
			}
				$this->set('modulo', 'Know Myself');
				$this->layout="quiz_users";
				$this->set('title_for_layout', 'My Vocational Interests Assessment');
			}else{
			$this->redirect('/');
		}
	}

	public function redirect_cha(){
		$this->redirect('/career_program/p3_bottlenecks_results');
	}

	public function redirect_py(){
		$this->redirect('/career_program/p3_bottlenecks');
	}

	public function redirect_py_ass(){
		$this->redirect('/career_program/p3_assessment_results');
	}

	public function pyramidAssessment(){
		$this->log($this->UserAuth->isLogged());

	    /*		if($this->UserAuth->isLogged()){

				$existe_cha = $this->Challenge->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));
				
				if(!empty($existe_cha)){
					$this->redirect_cha();
				}

				$existe_pyramid = $this->PyramidUser->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));

				if(!empty($existe_pyramid)){
					$this->redirect_py();
				}

				$existe = $this->Pyramid->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));

				if(!empty($existe)){
					$this->redirect_py_ass();
					
				}*/

				$this->set('modulo', 'My Career Vision');
				$this->set('title_for_layout', 'Pyramid of Preferences Assessment');
				$this->layout="quiz_users";
		/*	}else{
				$this->log('en el else');
				$this->redirect('/');
		}*/
	}

	public function SkillsA(){
		if($this->UserAuth->isLogged()){
			$this->__Mixpaneltrack("skills from quests m1");
			$exi = $this->Skillsa->find('all', array('conditions' => array('Skillsa.user_id' => $this->UserAuth->getUserId())));
			if(!empty($exi)){
				$this->redirect('/career_program/results_skills');
			}
			$this->set('title_for_layout', 'My Skills Assessment');
			$this->set('modulo', 'Identify your strongest skills');
			$this->layout="quiz_users";
		}else{
			$this->redirect('/');
		}
	}

	public function WorkValues(){
		if($this->UserAuth->isLogged()){
			$this->__Mixpaneltrack("job satisfaction from quests m1");
			$exi = $this->Workvaluesa->find('all', array('conditions' => array('Workvaluesa.user_id' => $this->UserAuth->getUserId())));
			if(!empty($exi)){
				$this->redirect('/career_program/results_wv');
			}
			$this->set('modulo', 'Know Myself');
			$this->set('title_for_layout', 'My Work Values Assessment');
			$this->layout="quiz_users";
		}else{
			$this->redirect('/');
		}
	}

	public function FeedbackA(){
		if($this->UserAuth->isLogged()){
			$exi = $this->Feedbacka->find('all', array('conditions' => array('Feedbacka.user_id' => $this->UserAuth->getUserId())));
			$exiInv = $this->Feedbackainv->find('all', array('conditions' => array('Feedbackainv.user_id' => $this->UserAuth->getUserId())));
			if(empty($exi)){
				$this->set('modulo', 'Improve My Decision-Making');
				$this->layout="quiz_users";
				$this->set('title_for_layout', 'My 360º Feedback Assessment');
			}else{
				if(count($exiInv) < 3){
					$this->redirect('/career_program/360_awaiting');
				}else{			
					$this->redirect('/career_program/360_results');
				}	
			}
		}else{
			$this->redirect('/');
		}
	}

	public function Personality(){
		if($this->UserAuth->isLogged()){
			$this->__Mixpaneltrack("employability from quests m1");
			$this->set('modulo', 'Know Myself');
			$this->set('title_for_layout', 'My Employability Assessment');
			$this->layout="quiz_users";
		}else{
			$this->redirect('/');
		}
	}

	public function FeedbackFriend($id = null){
		if (!$this->User->exists($id)) {
			$this->redirect('../');
			
		}else{
			
			$user = $this->User->findById($id);
			$this->set('member', $user);
			$this->layout="quiz_friend";
			
		}
	}

	public function addvalue(){
		$this->autoRender = false; 
		$newsId = array();
		foreach ($_POST['data'] as $key => $value) {
			$newV['name'] = $value;
			$this->PersonalValues->create();
			$this->PersonalValues->save($newV);
			array_push($newsId, $this->PersonalValues->getLastInsertId());
		}

		return json_encode($newsId);
	}

	public function resultFeedback() {
		$id = $this->Session->read('UserAuth.User.id');
		$count = array('time_management_360_invite' => 0,
						'adaptability_360_invite' => 0,
						'communication_360_invite' => 0,
						'problem_solving_360_invite' => 0,
						'teamwork_360_invite' => 0,
						'ledership_360_invite' => 0,
						'tech_savvy_360_invite' => 0,
						'persuasive_360_invite' => 0,
						// 'active_listening_invite' => 0,
						// 'oral_communication_invite' => 0,
						// 'written_communication_invite' => 0,
						);

		$compare = $this->Feedbackainv->find('all', array('conditions' => array('Feedbackainv.user_id' => $id)));
		$feedB = count($compare);
		foreach ($compare as $key => $value) {
			$count['time_management_360_invite'] += $value['Feedbackainv']['time_management_360_invite'];
			$count['adaptability_360_invite'] += $value['Feedbackainv']['adaptability_360_invite'];
			$count['communication_360_invite'] += $value['Feedbackainv']['communication_360_invite'];
			$count['problem_solving_360_invite'] += $value['Feedbackainv']['problem_solving_360_invite'];
			$count['teamwork_360_invite'] += $value['Feedbackainv']['teamwork_360_invite'];
			$count['ledership_360_invite'] += $value['Feedbackainv']['ledership_360_invite'];
			$count['tech_savvy_360_invite'] += $value['Feedbackainv']['tech_savvy_360_invite'];
			$count['persuasive_360_invite'] += $value['Feedbackainv']['persuasive_360_invite'];
		}
		
		foreach ($count as $key => $value) {
			$count[$key] = $value / $feedB;
		}


		$this->layout="dash_modulos";
		$this->set("dataQuestFA",$this->Feedbacka->findByUserId($id));
		$this->set('frindsResult', $count);
		$this->set('modulo', 'Improve My Decision-Making');
	}


	public function adviser() {
		$this->layout = 'adviser';
		$this->State->recursive = -1;
		$State = $this->State->find('all');
		$this->set('states',$this->State->find('all'));	
	}

	public function thx() {
		$this->layout = false;
	}

	public function resultPersonality() {
		$this->layout="dash_modulos";
		$id = $this->Session->read('UserAuth.User.id');
		$this->set('dataComplete', $this->Personality->findByUserId($id));
		$this->set('cursos', $this->Course->find('all'));
		$this->set('title_for_layout', 'Results Employability Assessment');
		$this->set('modulo', 'Know Myself');
	}

	public function resultSka(){
		$id = $this->Session->read('UserAuth.User.id');
		$this->layout="dash_modulos";
		$skills = $this->Skillsa->findByUserId($id);
		$this->set('cursos', $this->Course->find('all'));
		$this->set('dataComplete', $skills);
		$this->set('title_for_layout', 'Results Skills Assessment');
		$this->set('modulo', 'Know Myself');
	}
	

	public function ResultVia(){
		$id = $this->Session->read('UserAuth.User.id');
		$via = $this->Via->findByUserId($id);
		$this->layout="dash_modulos";
		$this->set('modulo', 'Know Myself');
		$this->set('dataQuestVIA', $via);
		$this->set('title_for_layout', 'Results Vocational Interests Assessment');
		$archetype = $this->Archetype->findById($via['Via']['archetype_id']);
		$this->set('archetype', $archetype);
	}
	

	public function resultWork(){
		$id = $this->Session->read('UserAuth.User.id');
		$work = $this->Workvaluesa->findByUserId($id);
		$this->set('title_for_layout', 'Results Work Values Assessment');
		$this->set('workvalues', $work);	
		$this->layout="dash_modulos";
		$this->set('modulo', 'Know Myself');
	}

	public function filterP($prc){
		foreach ($prc as $key => $prcs) {
				if($prc[$key][0] <= 0.1){
					// unset($prc[$key]);
				}
			}
		return $prc;
	}

	public function filterR($prc){
		foreach ($prc as $key => $prcs) {
				if($prc[$key][1] < 0.1){
					// unset($prc[$key]);
				}
			}
		return $prc;
	}

	public function gett($actual_range, $expected_range){
		$r = $this->getr($actual_range, $expected_range);
		// $this->log($r);
		$t = $r / sqrt((1-($r*$r)) / 4);
		return $t;
	}

	public function getp($t, $df = 5){
	    $abst = abs($t);
	    $tsq = $t*$t;

	    $z = $this->TtoZ($abst, $df);
	    $p = $this->Norm_p($z);

	  	return $p;
	}


	public function TtoZ($t=1, $df=5){
	  $A9 = $df - 0.5;
	  $B9 = 48*$A9*$A9;
	  $T9 = $t*$t/$df;

	    if ($T9 >= 0.04){
	      $Z8 = $A9*log(1+$T9);
	    }else{
	      $Z8 = $A9*(((1 - $T9*0.75)*$T9/3 - 0.5)*$T9 + 1)*$T9;
	    }

	    $P7 = ((0.4*$Z8 + 3.3)*$Z8 + 24)*$Z8 + 85.5;

	    $B7 = 0.8*pow($Z8, 2) + 100 + $B9;

	    $z = (1 + (-$P7/$B7 + $Z8 + 3)/$B9)*sqrt($Z8);

	    return $z;
	}


	public function Norm_p($z){
	  $absz = abs($z);
	  $a1 = 0.0000053830;
	  $a2 = 0.0000488906;
	  $a3 = 0.0000380036;
	  $a4 = 0.0032776263;
	  $a5 = 0.0211410061;
	  $a6 = 0.0498673470;
	  $p = ((((($a1*$absz+$a2)*$absz+$a3)*$absz+$a4)*$absz+$a5)*$absz+$a6)*$absz+1;
	  $p = pow($p, -16);
	  return $p;
	}


	public function getr($actual_range, $expected_range){
		$xmedia = $this->media($expected_range);
		$ymedia = $this->media($actual_range);
		$h10 = 0;
		$j10 = 0;
		$l10 = 0;
		for ($i=0; $i < 6; $i++) { 
			$valorx = $expected_range[$i] - $xmedia;
			$valory = $actual_range[$i] - $ymedia;
			$valorx2 = $valorx*$valorx;
			$valory2 = $valory*$valory;
			$valorxy = $valorx*$valory;
			$h10 += $valorx2;
			$j10 += $valory2;
			$l10 += $valorxy;
		}

		$denominador = ($h10*$j10)/36;
		//$this->log($denominador);

		$r = $l10 / (6*sqrt($denominador));
		
		return $r;
	}

	public function media($expected_range){
		$sum = 0;
		for ($i=0; $i < 6; $i++) { 
			$sum += $expected_range[$i];
		}
		return $sum / 6;
	}

	public function chi($actual_range, $expected_range){
		$chi = 0;
		$p = 0;

		for($i = 0; $i<6; $i++){
				$numerador = $actual_range[$i] - $expected_range[$i];
				$numerador = $numerador * $numerador;
				$division = $numerador / $expected_range[$i];
				$chi = $chi + $division;
		}
		$p = $this->getPvalue($chi,4);

		return (double)$p;
	}

	function truncateFloat($number, $digitos){
	    $raiz = 10;
	    $multiplicador = pow ($raiz,$digitos);
	    $resultado = ((int)($number * $multiplicador)) / $multiplicador;
	    return number_format($resultado, $digitos);
	}

	function getPvalue($x, $n) {


		if ( ($n==1) && ($x > 1000) ) {
		return 0;
		}

		if ( ($x>1000) || ($n>1000) ) {
			$q = $this->getPvalue(($x-$n)*($x-$n)/(2*$n),1) / 2;

			if($x > $n) {
				return $q;
			} else {
				return 1 - $q;
			}
		}

		$p = exp(-0.5 * $x);

		if(($n % 2) == 1) {
			$p = $p * sqrt(2*$x/pi());
		}

		$k = $n;

		while($k >= 2) {
			$p = $p * ($x/$k);
			$k = $k - 2;
		}

		$t = $p;
		$a = $n;

		while($t > 0.0000000001 * $p) {
			$a = $a + 2;
			$t = $t * ($x / $a);
			$p = $p + $t;
		}

		$retval = 1-$p;

		return $retval;

	}
	public function friend_thanks($id = null) {
		$this->layout="quiz_friend";
		$user = $this->User->findById($id);
		$this->set('member', $user);

		// $this->set('member', array('User' => array('first_name' => '{name}')));
		//$this->Cdda->recursive = 0;
		//$this->set('assessments', $this->Paginator->paginate());
	}

	public function resultValues(){
		$this->layout="dash_modulos";
		$this->set('title_for_layout', 'Results My Personal Values Quest');
		$this->set('modulo', 'My Career Vision');
		$fields = array();
		if(isset($_GET['data1'])){
			$da = array();
			foreach ($_GET['data1'] as $key => $value) {
				$po = $key + 1;
				$da['p'.$po] = $value;
			}
			$da['user_id'] = $this->UserAuth->getUserId();
			$us = $this->TopPersonalValues->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId())));
			if(empty($us)){
				$this->TopPersonalValues->save($da);
			}
			else{
				$da['id'] = $us['TopPersonalValues']['id'];
				$this->TopPersonalValues->save($da);
			}

			$user = $this->User->findById($this->UserAuth->getUserId());
			$this->Puntaje->id = $user['Puntaje']['id'];
			$this->Puntaje->saveField('personal', 20);

		}
		$f['first'] = array();
		$f['second'] = array();
		$f['third'] = array();
		$result = $this->TopPersonalValues->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId())));
		// debug($result);
		unset($result['TopPersonalValues']['id']);
		unset($result['TopPersonalValues']['user_id']);
		foreach ($result['TopPersonalValues'] as $key => $value) {
			$text = preg_split("/:::/", $value);
			if(count($text) == 1){
				$v = $this->PersonalValues->find('first', array('conditions' => array('id' => $text[0])));
				array_push($fields, $v);
			}
			else{
				$podium = $this->PersonalValues->find('first', array('conditions' => array('id' => $text[0])));
				if($text[1] == 1){
					array_push($f['first'], $podium);
				}
				if($text[1] == 2){
					array_push($f['second'], $podium);
				}
				if($text[1] == 3){
					array_push($f['third'], $podium);
				}
			}
		}
		array_push($fields, $f);
		$this->set('fields', $fields);
	}

	public function backvalues($pant){

		// if($pant == 1)		

	}

	public function personalValues(){
		$incompleto = $this->Incomplete->find('first', array('fields' => 'q_a', 'conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 9)));
		
		if(!empty($incompleto)){

			$level = split("%", $incompleto['Incomplete']['q_a']);

			if(isset($_POST['back'])){
				$this->autoRender = false;
				$this->layout = false;
				$fields = $this->PersonalValues->find('all', array('conditions' => array('visible' => 'all')));
				if( $_POST['back'] - 1 == 2){
					$url = "";
					$arr = split(":::", $level[0]);
					$aux = array_pop($arr);
					foreach ($arr as $key => $value) {
						$i = split(";", $value);
						if($key == 0){
							$url = $url."data1%5B".$key."%5D=".$i[1];
						}
						else{
							$url = $url."&data1%5B".$key."%5D=".$i[1];
						}
					}
					return json_encode($url);
				}

				if( $_POST['back'] - 1 == 1){
					$url = "";
					$arr = split(":::", $level[0]);
					$aux = array_pop($arr);
					foreach ($fields as $key => $value) {
						if($key == 0){
							$url = $url."data1%5B".$key."%5D=".$value['PersonalValues']['id'];
						}
						else{
							$url = $url."&data1%5B".$key."%5D=".$value['PersonalValues']['id'];
						}
					}
					return json_encode($url);
				}
			}

			if( count($level) == 2 ){
				$url = "?";
				$arr = split(":::", $level[0]);
				$aux = array_pop($arr);
				foreach ($arr as $key => $value) {
					$i = split(";", $value);
					if($key == 0){
						$url = $url."data1%5B".$key."%5D=".$i[1];
					}
					else{
						$url = $url."&data1%5B".$key."%5D=".$i[1];
					}
				}
				if(empty($_GET)){
					$this->redirect('/career_program/values'.$url);
				}
			}
			if( count($level) == 3){
				$url = "?";
				$arr = split("/", $level[1]);
				$aux = array_pop($arr);
				$arr = split(":::", $arr[0]);
				$aux = array_pop($arr);				
				foreach ($arr as $key => $value) {
					$i = split(";", $value);
					if($key == 0){
						$url = $url."data1%5B".$key."%5D=".$i[1];
					}
					else{
						$url = $url."&data1%5B".$key."%5D=".$i[1];
					}
				}
				if(empty($_GET)){
					$this->redirect('/career_program/values'.$url);
				}
			}
			if( count($level) == 4){
				$url = "?";
				$arr = split("/", $level[2]);
				$aux = array_pop($arr);
				$arr = split(":::", $arr[0]);
				$aux = array_pop($arr);				
				foreach ($arr as $key => $value) {
					$i = split(";", $value);
					if($key == 0){
						$url = $url."data1%5B".$key."%5D=".$i[1];
					}
					else{
						$url = $url."&data1%5B".$key."%5D=".$i[1];
					}
				}
				if(empty($_GET)){
					$this->redirect('/career_program/values'.$url);
				}
			}
		}
		$exi = $this->TopPersonalValues->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId())));
		if(!empty($exi)){
			// $this->redirect('/career_program/results_values');
		}

		$this->set('incomp', $incompleto);

		$this->layout="dash_modulos";
		$this->set('modulo', 'My Career Vision');
		$fields = array();
		if(isset($_GET['data1'])){
 			$fields = $this->PersonalValues->find('all', array('conditions' => array('id' => $_GET['data1'])));
		}
		else{
			$fields = $this->PersonalValues->find('all', array('conditions' => array('visible' => 'all')));
		}
		$this->set('fields', $fields);
	}

	public function valuesincomplete($n = null){
		$this->autoRender = false;
		$q_a = "";
		$a = "";
		$data = $_POST['data'];
		$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => 9)));
		if( $n == 1){
			foreach ($data as $key => $value) {
				$pos = $key + 1;
				$a = $a.$pos.';'.$value.':::';
			}
			$incompleto['Incomplete']['assessment_id'] = 9;
			$incompleto['Incomplete']['user_id'] = $this->UserAuth->getUserId();
			$incompleto['Incomplete']['q_a'] = $a."%";
			$this->Incomplete->save($incompleto);
		}
		if( $n == 2 ){
			$c = 1;
			for ($x=0; $x <= count($data) ; $x++) { 
				if($x != 0){
					$a = $a."/";
				}
				if(isset($data[$x])){
					foreach ($data[$x] as $k => $v) {
						$a = $a.$c.';'.$v.':::';
						$c = $c +1;
					}
				}
			}
			$q = split("%", $incompleto['Incomplete']['q_a']);
			$incompleto['Incomplete']['assessment_id'] = 9;
			$incompleto['Incomplete']['user_id'] = $this->UserAuth->getUserId();
			$incompleto['Incomplete']['q_a'] = $q[0]."%".$a."%";
			$this->Incomplete->save($incompleto);
		}
		if( $n == 3 ){
			$c = 1;
			for ($x=0; $x <= count($data) ; $x++) { 
				if($x != 0){
					$a = $a."/";
				}
				if(isset($data[$x])){
					foreach ($data[$x] as $k => $v) {
						$a = $a.$c.';'.$v.':::';
						$c = $c +1;
					}
				}
			}
			$q = split("%", $incompleto['Incomplete']['q_a']);
			$incompleto['Incomplete']['assessment_id'] = 9;
			$incompleto['Incomplete']['user_id'] = $this->UserAuth->getUserId();
			$incompleto['Incomplete']['q_a'] = $q[0]."%".$q[1]."%".$a."%";
			$this->Incomplete->save($incompleto);
		}
	}

	public function editValues(){
		$this->set('title_for_layout', 'Edit My Personal Values Quest Results');
		$this->layout="dash_modulos";
		$this->set('modulo', 'My Career Vision');
		$fields = array();
		$f['first'] = array();
		$f['second'] = array();
		$f['third'] = array();
		$result = $this->TopPersonalValues->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId())));
		// debug($result);
		unset($result['TopPersonalValues']['id']);
		unset($result['TopPersonalValues']['user_id']);
		foreach ($result['TopPersonalValues'] as $key => $value) {
			$text = preg_split("/:::/", $value);
			if(count($text) == 1){
				$v = $this->PersonalValues->find('first', array('conditions' => array('id' => $text[0])));
				array_push($fields, $v);
			}
			else{
				$podium = $this->PersonalValues->find('first', array('conditions' => array('id' => $text[0])));
				if($text[1] == 1){
					array_push($f['first'], $podium);
				}
				if($text[1] == 2){
					array_push($f['second'], $podium);
				}
				if($text[1] == 3){
					array_push($f['third'], $podium);
				}
			}
		}
		array_push($fields, $f);
		$this->set('fields', $fields);
	}

	public function medio_assessment($id = null, $question = null, $answer = null){
		$this->autoRender = false; 
		$q_a = $question.';'.$answer.':::';
		$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => $id)));
		if(empty($incompleto)){
			$this->Incomplete->save(array('assessment_id' => $id, 'user_id' => $this->UserAuth->getUserId(), 'q_a' => $q_a));
		}else{
			$this->Incomplete->id = $incompleto['Incomplete']['id'];
			$q_a_nuevo = "";
			$arr = split(":::", $incompleto['Incomplete']['q_a']);
			$aux = array_pop($arr);
			$ya = 0;
			$arreglo = array();
			foreach ($arr as $key => $value) {
				$q_a = split(";", $value);
				if($question == $q_a[0]){
					array_push($arreglo,array('q'=>$q_a[0], 'a'=>$answer));
					$ya = 1;
				}else{
					array_push($arreglo,array('q'=>$q_a[0], 'a'=>$q_a[1]));
				}
			}

			if($ya == 0){
				array_push($arreglo,array('q'=>$question, 'a'=>$answer));
			}

			foreach ($arreglo as $key => $value) {
				$q_a_nuevo = $q_a_nuevo.$value['q'].';'.$value['a'].':::';
			}

			$this->Incomplete->saveField('q_a', $q_a_nuevo);
		}
		return true;
	}


	public function completado($id = null){
		$this->autoRender = false; 
		$incompleto = $this->Incomplete->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId(),'assessment_id' => $id)));
		$arr = split(":::", $incompleto['Incomplete']['q_a']);
		$aux = array_pop($arr);
		$arreglo = array();
		$arreglo2 = array();

		$index2 = 1;
		$index = 0;
		foreach ($arr as $key => $value) {
			$q_a = split(";", $value);
			array_push($arreglo,array('q'=>$q_a[0], 'a'=>$q_a[1]));
		}
		$aux = $arreglo;
		rsort($aux);
		$max = $aux[0]['q'];
		for ($i=0; $i < $max; $i++) { 
			array_push($arreglo2,0);
		}
		sort($arreglo);
		for ($i=0; $i < $max; $i++) { 
			if($arreglo[$index]['q'] == ($i+1)){
				$arreglo2[$i] = $arreglo[$index]['a'];
				$index++;
			}else{
				$arreglo2[$i] = '0';
			}
		}

		array_push($arreglo2,'0');
		
		return json_encode($arreglo2);
	}


	function __Mixpaneltrack($track = null){
		$mp = Mixpanel::getInstance("682ca41dc28abfc8e3effd413b7daaed"); // instantiate the Mixpanel class
		$mp->identify($this->UserAuth->getUserId());
		$mp->track($track);
		sleep(2);
	}
}