<?php
App::uses('AppController', 'Controller');
/**
 * Cddas Controller
 *
 * @property Cdda $Cdda
 * @property PaginatorComponent $Paginator
 */
class CddasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $uses = array('Cdda','Usermgmt.User');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->layout = 'quiz';
		//$this->Cdda->recursive = 0;
		//$this->set('cddas', $this->Paginator->paginate());
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

				/* GUARDO EL USUARIO */
				$lead['cdda_id'] = $this->Cdda->getLastInsertId();
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

			}else{
					return json_encode ( false );
			}

			/*
				quiz: {2: "3", 3: "6", 4: "6", 5: "0", 6: "5", 7: "5", 8: "0", 9: "5", 10: "5", 11: "5", 12: "5", 13: "5",…}
				result: {F120: 5, F121: 0, F122: 0, F123: 1, F124: 5, F125: 2, F126: 0, F127: 15, F128: 10, F129: 15, F130: 0,…}
				user: {1: "Diego", 21: "2015-02-11", 24: "kuhad@akjshd.com"}
			*/

		}else{
			$this->redirect($this->webroot.'cddas/index');
		}

		return json_encode ( true );
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
		$this->set('dataQuest', $this->Session->read('dataQuest'));
	}
	public function VocationalInterests(){
		$this->layout = 'quiz';
	}
	public function prueba(){
		$this->layout = 'quiz2';
	}
}
