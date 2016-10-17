<?php 
require_once "src/Braintree.php";
	require_once "src/Mixpanel/Mixpanel.php";

class DashboardsController extends AppController {
	public $uses= array('Dashboard','Via','Archetype','Article','Tag','Mentoring','Coursebyuser' , 'Personality', 'PyramidUser','TopPersonalValues', 'PersonalValues', 'ArticlesTags','Feedbacka','Feedbackainv','Carreersfit','Job', 'Usermgmt.User','Orbituary','Careervision','Education','State','Workvaluesa','Skillsa','Challenge','Pyramid','Puntaje','Challengequestion','Course','Comment');
	public $components = array('Paginator');
	public  function index(){
		$this->autoRender=false;
		$this->redirect('/career_program/dashboard');
	}

	public function firstTime() {
		$this->layout="newdash";		

		$this->set('MDselected','MD1');
	}
	
	public  function course(){

		if($this->UserAuth->isLogged()){
			$this->layout="newdash";	
			$recomendado=$this->__getResultCourse();
			$this->set('user',$this->User->findById($this->UserAuth->getUserId()));

			$this->Carreersfit->recursive = -1;
			$favoritos = $this->Carreersfit->find('all', array('conditions' => array('Carreersfit.user_id' => $this->UserAuth->getUserId(), 'Carreersfit.favorite' => 1)));
			$favoritos_courses = $this->Coursebyuser->find('all', array('conditions' => array('Coursebyuser.user_id' => $this->UserAuth->getUserId(), 'Coursebyuser.like' => 1)));

			$this->set('career_favoritos',count($favoritos));
			$this->set('course_favoritos',count($favoritos_courses));
			$this->set('recomendado',$recomendado);
			$this->set('MDselected','MD1');
			$this->set('title_for_layout','Career Decision-Making Program');
			

		}else{
			$this->redirect('/');
		}
		
	}

	public function intro_page_feedback_360(){
		$this->__Mixpaneltrack("360 from quests m3");

		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->set('user',$user['User']);
		$this->set('modulo', 'Improve My Decision-Making');
		$this->layout="dash_modulos";
		$this->set('title_for_layout', 'Intro 360° Feedback Quest');
	}

	
	public  function result($pag = null){
		$this->layout="newdash";
		$this->set('title_for_layout', 'Quests Results');

		$this->__Mixpaneltrack("results section");

		$id = $this->UserAuth->getUserId();
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
		$compare = $this->Feedbackainv->find('all', array('Feedbackainv.user_id' => $id));
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
			// $count['active_listening_invite'] += $value['Feedbackainv']['active_listening_invite'];
			// $count['oral_communication_invite'] += $value['Feedbackainv']['oral_communication_invite'];
			// $count['written_communication_invite'] += $value['Feedbackainv']['written_communication_invite'];
		}
		foreach ($count as $key => $value) {
			$count[$key] = $value / $feedB;
		}

		$work = $this->Workvaluesa->findByUserId($id);
		$dataquestFA = $this->Feedbacka->findByUserId($id);
		$skills = $this->Skillsa->findByUserId($id);

		$fields = array();

		$f['first'] = array();
		$f['second'] = array();
		$f['third'] = array();
		$result = $this->TopPersonalValues->find('first', array('conditions' => array('user_id' => $this->UserAuth->getUserId())));
		
		if(!empty($result)){
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
		}
		
		$ch = $this->Challenge->findByUserId($this->UserAuth->getUserId());
	
		$pyra = $this->PyramidUser->findByUserId($this->UserAuth->getUserId());
		$via = $this->Via->findByUserId($this->UserAuth->getUserId());
		$this->set('via', $via);
		$this->set('fields', $fields);
		$archetype = Array();
		if(!empty($via)){
			$archetype = $this->Archetype->find('first', array('conditions' => array('id' => $via['Via']['archetype_id'])));
		}
		$this->set('challengs',$ch);
		$this->set('archetype', $archetype);
		$this->set('pyra', $pyra);
		$this->set('skills', $skills);	
		$this->set('dataquestFA', $dataquestFA);	
		$this->set('workvalues', $work);	
		$this->set('personality', $this->Personality->find('all', array( 'conditions' => array('Personality.user_id' => $this->UserAuth->getUserId()))));		
		$this->set('frindsResult', $count);		
		$this->set('MDselected','MD3');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		if($pag != null)
			$this->set('pagina',$pag);
	}
	
	public  function vision(){
		$this->__Mixpaneltrack("my career vision section");

		$this->layout="newdash";
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('MDselected','MD2');
		$this->Careervision->recursive = 2;
		$vision = $this->Careervision->findByUserId($this->UserAuth->getUserId());
		$this->set('vision',$vision);
		$this->set('title_for_layout', 'My Career Vision');
	}

	public function quest_mod2(){
		$user = $this->User->findById($this->UserAuth->getUserId());

		if($user['Puntaje']['personal'] != 0){
			$this->set('top', 'y');
		}else{
			$this->set('top', 'n');
		}

		if($user['Puntaje']['pyramid'] != 0){
			$this->set('py', 'y');
		}else{
			$this->set('py', 'n');
		}

		if($user['Puntaje']['obituary'] != 0){
			$this->set('obi', 'y');
		}else{
			$this->set('obi', 'n');
		}

		if($user['Puntaje']['meditation'] != 0){
			$this->set('medi', 'y');
		}else{
			$this->set('medi', 'n');
		}

		if($user['Puntaje']['career'] != 0){
			$this->set('car', 'y');
		}else{
			$this->set('car', 'n');
		}

		$points = $user['Puntaje']['personal'] + $user['Puntaje']['pyramid'] + $user['Puntaje']['obituary'] + $user['Puntaje']['meditation'] + $user['Puntaje']['career'];
		$mod1 = floor(($points * 100) / 180);
		$this->set('title_for_layout', 'Quests Module 2');
		$this->set('user', $user['User']);

		$this->set('percent', $mod1);
		$this->set('points', $points);
		$this->set('modulo', 'My Career Vision');
		$this->layout="dash_modulos";
	}

	public function savePyramid(){
		$this->autoRender = false;
		foreach ($_POST['data'] as $key => $value) {
			$p = $key + 1;
			$sav['top'.$p] = $value;
		}
		$sav['user_id'] = $this->UserAuth->getUserId();
		$this->PyramidUser->save($sav);
	}

	public function pyramidIntro(){
		$this->__Mixpaneltrack("p3 from quests m2");

		$cha = '1';
		$py = '1';
		$ass = '1';

		$existe_cha = $this->Challenge->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));
		if(empty($existe_cha))
			$cha = '0';
		$existe_pyramid = $this->PyramidUser->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));
		if(empty($existe_pyramid))
			$py = '0';
		$existe = $this->Pyramid->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));
		if(empty($existe))
			$ass = '0';
		
		$user = $this->User->findById($this->UserAuth->getUserId());

		$this->set('existe_cha', $cha);
		$this->set('existe_pyramid', $py);
		$this->set('existe', $ass);
		$this->set('user', $user['User']);
		//old code
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Intro Pyramid of Preferences');
		$this->layout="dash_modulos";
	}

	public function pyramidAnalyze(){
		$py = $this->Pyramid->find('first', array('conditions'=>array('user_id'=>$this->UserAuth->getUserId())));
		$py = $this->Pyramid->find('first', array('conditions'=>array('user_id'=>263)));
		$py = $this->Pyramid->findByUserId(263);
		$py = $this->Pyramid->findByUserId($this->UserAuth->getUserId());
		$this->set('datos',$py);
		$this->set('modulo', 'My Career Vision');
		$this->layout="dash_modulos";
		$this->set('title_for_layout', 'Pyramid of Preferences Assessment Results');
	}


	public function pyramidBottleneck(){
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Pyramid of Preferences Bottlenecks');
		$this->layout="dash_modulos";
	}

	public function pyramidBottleneckQuestions(){
		$ch = $this->Challenge->findByUserId($this->UserAuth->getUserId());
		$this->set('challenges',$ch);
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Pyramid of Preferences Main Bottleneck');
		$this->layout="dash_modulos";
	}

	public function obituaryIntro(){
		$this->__Mixpaneltrack("obituary from quests m2");

		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Intro Obituary Quest');
		$this->layout="dash_modulos";
	}

	public function obituaryQuest($edit = 0){
		$this->Orbituary->recursive = 2;
		$obi = $this->Orbituary->findByUserId($this->UserAuth->getUserId());
		if(empty($obi) || $edit == 1 ){
			$this->__Mixpaneltrack("take up quest in obituary intro page");
			$this->set('obituary',$obi);
			$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
			$this->set('modulo', 'My Career Vision');

			if($edit == 1){
				$this->set('title_for_layout', 'Edit My Obituary');
			}	
			else{
				$this->set('title_for_layout', 'Write Your Obituary');
			}

			$this->layout="dash_modulos";
		}else{
			
			$this->redirect('/career_program/obituary_results');
		}
	}
	public function obituarySummary(){
		$this->Orbituary->recursive = 2;
		$this->set('user',$this->Orbituary->findByUserId($this->UserAuth->getUserId()));
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'My Obituary');
		$this->layout="dash_modulos";
	}

	public function careervisionIntro(){
		$this->__Mixpaneltrack("statement from quests m2");

		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->set('user', $user['User']);
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Intro My Career Vision Statement Quest');
		$this->layout="dash_modulos";
	}

	public function careervisionQuest($edit = 0){
		$this->Careervision->recursive = 2;
		$careervision = $this->Careervision->findByUserId($this->UserAuth->getUserId());
		if(empty($careervision) || $edit == 1 ){
			$this->__Mixpaneltrack("take up quest in statement intro page");
			$work = $this->Workvaluesa->findByUserId($this->UserAuth->getUserId());
			$this->set('workvalues', $work);	
			$this->set('careervision',$careervision);
			if($edit == 1){
				$this->set('title_for_layout', 'Edit My Career Vision Statement Quest');
			}
			else{
				$this->set('title_for_layout', 'Write Your Career Vision Statement');
			}
			$this->set('modulo', 'My Career Vision');
			$this->layout="dash_modulos";
		}else{
			$this->redirect('/career_program/vision_results');
		}
	}

	public function careervisionSummary(){
		$this->Careervision->recursive = 2;
		$this->set('user',$this->Careervision->findByUserId($this->UserAuth->getUserId()));
		$work = $this->Workvaluesa->findByUserId($this->UserAuth->getUserId());
		$this->set('workvalues', $work);	
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'My Career Vision Statement');
		$this->layout="dash_modulos";
	}

	public function quest_mod1(){
		$user = $this->User->findById($this->UserAuth->getUserId());

		if($user['Puntaje']['work'] != 0){
			$this->set('work', 'y');
		}else{
			$this->set('work', 'n');
		}

		if($user['Puntaje']['abilities'] != 0){
			$this->set('abi', 'y');
		}else{
			$this->set('abi', 'n');
		}

		if($user['Puntaje']['vocational'] != 0){
			$this->set('voc', 'y');
		}else{
			$this->set('voc', 'n');
		}

		if($user['Puntaje']['skills'] != 0){
			$this->set('sk', 'y');
		}else{
			$this->set('sk', 'n');
		}

		$points = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
		$mod2 = ($points * 100) / 200;
		$this->set('title_for_layout', 'Quests Module 1');
		$this->set('user', $user['User']);
		$this->set('percent', $mod2);
		$this->set('points', $points);
		$this->set('modulo', 'Know Myself');
		$this->layout="dash_modulos";
	}
	public function request_feedback(){
		$this->set('modulo', 'Improve My Decision-Making');
		$this->set('title_for_layout', 'Invite Others To Review You');
		$this->layout="dash_modulos";
	}

	public function introMod1(){
		$user = $this->User->findById($this->UserAuth->getUserId());
		$user['User']['mod1'] = 1;
		$this->User->save($user);
		$this->__Mixpaneltrack('know myself dashboard');
		
		$points = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
		$mod2 = ($points * 100) / 200;
		$this->set('title_for_layout', 'Intro Module 1');
		$this->set('percent', $mod2);
		$this->set('points', $points);
		$this->set('modulo', 'Know Myself');
		$this->layout="dash_modulos";
	}


	public function introMod2(){
		$user = $this->User->findById($this->UserAuth->getUserId());
		$user['User']['mod2'] = 1;
		$this->User->save($user);
		$this->__Mixpaneltrack("my career vision dashboard");

		$points = $user['Puntaje']['personal'] + $user['Puntaje']['pyramid'] + $user['Puntaje']['obituary'] + $user['Puntaje']['meditation'] + $user['Puntaje']['career'];
		$mod1 = floor(($points * 100) / 180);
		$this->set('title_for_layout', 'Intro Module 2');
		$this->set('percent', $mod1);
		$this->set('points', $points);
		$this->set('modulo', 'My Career Vision');
		$this->layout="dash_modulos";
				$this->set('user', $user['User']);

	}

	public function quest_mod3(){
		$id = $this->UserAuth->getUserId();
		$user = $this->User->findById($id);
		$user['User']['mod3'] = 1;
		$this->User->save($user);


		$feedB = $this->Feedbacka->find('all', array('conditions' => array('Feedbacka.user_id' => $id)));
		$feedBF = $this->Feedbackainv->find('count', array('conditions' => array('Feedbackainv.user_id' => $id)));
		
		$quizReady = 0;

		if(!empty($feedB)){
			$quizReady = 1;
		}

		// debug($quizReady);

		$this->Session->write('done', $quizReady);
		$this->Session->write('resultF', $feedBF);



		if($user['Puntaje']['cdmf'] != 0){
			$this->set('cdmf', 'y');
		}else{
			$this->set('cdmf', 'n');
		}

		if($user['Puntaje']['ajh'] != 0){
			$this->set('ajh', 'y');
		}else{
			$this->set('ajh', 'n');
		}

		if($user['Puntaje']['feedback'] != 0){
			$this->set('feed', 'y');
		}else{
			$this->set('feed', 'n');
		}

		$points = $user['Puntaje']['cdmf'] + $user['Puntaje']['ajh'] + $user['Puntaje']['feedback'];
		$mod3 = ($points * 100) / 200;
		$this->set('title_for_layout', 'Quests Module 3');
		$this->set('user', $user['User']);
		$this->set('percent', $mod3);
		$this->set('points', $points);
		$this->set('modulo', 'Improve My Decision-Making');
		$this->layout="dash_modulos";
	}
	public function introMod3(){
		$user = $this->User->findById($this->UserAuth->getUserId());

		$this->__Mixpaneltrack("improve decision-making dashboard");

		$points = $user['Puntaje']['cdmf'] + $user['Puntaje']['ajh'] + $user['Puntaje']['feedback'];
		$mod3 = ($points * 100) / 200;
		$this->set('title_for_layout', 'Intro Module 3');
		$this->set('percent', $mod3);
		$this->set('points', $points);
		$this->set('modulo', 'Improve My Decision-Making');
		$this->layout="dash_modulos";
	}
	public function cdmf(){
		$this->__Mixpaneltrack("cdmf from quests m3");
		$this->set('title_for_layout', 'Carrer Decision Making Framework');
		$this->set('modulo', 'Improve My Decision-Making');
		$this->layout="dash_modulos";
	}


	public function ajh(){
		$this->__Mixpaneltrack("avoid mistakes from quests m3");
		$this->set('modulo', 'Improve My Decision-Making');
		$this->set('title_for_layout', 'Avoid Heuristics in Your Judgement');
		$this->layout="dash_modulos";
	}

	private function __getResultCourse(){
		$tag = $this->Tag->findByName('recommended');
		$conditions = array('Article.active'=>1);
		$limit = 1;
		$result_articles = $this->__get_all_articles($conditions,$tag['Tag']['id'],$limit);
		//$result_articles = $this->Article->find('all', array('conditions'=>array('Article.active'=>1),'order' => array('Article.created DESC'), 'limit'=> 10));
		return $result_articles;
	}
	
	
	private function  __get_all_articles($filter, $tags, $limit){
		$article = $this->ArticlesTags->find('first',array('conditions'=>array('ArticlesTags.tag_id'=>$tags)));
	
		if(empty($article))
			$this->Session->setFlash(__('No results found for your search'));
		return $this->Article->findById($article['ArticlesTags']['article_id']);
	}
	
	public function awaiting_result(){
		$id = $this->UserAuth->getUserId();
		$this->layout="dash_modulos";
		$feedBF = $this->Feedbackainv->find('count', array('conditions' => array('Feedbackainv.user_id' => $id)));
		$sent = $this->Feedbacka->findByUserId($id);
		$sent = $sent['Feedbacka']['sent'];
		$this->Session->write('resultF', $feedBF);
		$this->Session->write('Sent', $sent);
		if($feedBF >= 3){

		}
		$this->set('modulo', 'Improve My Decision-Making');
	}

	
	public function invitation_send_feedback_360(){
		$this->set('modulo', 'Improve My Decision-Making');
		$this->set('title_for_layout', 'Wait For Your Review');
		$this->layout="dash_modulos";
	}
	
	
	
	public function resources_as_member($id = 0 , $page = null){
		$data = $this->Article->find('first' , array('conditions' => array('Article.id'=>$id)));
		$this->set('modulo', 'Resources');
		$this->set('MDselected','MD4');
		$this->set('title','Resources');
		$this->set('article',$data);
		$this->set('page',$page);
		$this->set('pg','');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->layout="newdash";
	}
				
	public  function resources_as_member_main($pag = null , $search = null){
		$this->__Mixpaneltrack("resources section");

		$page = "Search";
		$self_knowledge = "";
		$how_to_choose = "";
		$job_hunting = "";
		$big_picture = "";
		
		if($pag == "big_picture" || $pag == null){
			$return = $this->big_picture($search);
			$big_picture = "active";
			$page = "Big_picture";
		}
		if($pag == "self_knowledge"){
			$return = $this->self_knowledge($search);
			$self_knowledge = "active";
			$page = "Self_knowledge";
		}
		
		if($pag == "how_to_choose"){
			$return = $this->how_to_choose($search);
			$how_to_choose = "active";
			$page = "How_to_choose";
		}
		
		if($pag == "job_hunting"){
			$return = $this->job_hunting($search);
			$job_hunting = "active";
			$page = "Job_hunting";
		}

		if($search != null){
			$self_knowledge = "";
			$how_to_choose = "";
			$job_hunting = "";
			$big_picture = "";
		}
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('title_for_layout', 'Resources - '.$page);
		$this->set('modulo', 'Resources');
		$this->set('MDselected','MD4');
		$this->set('title','Resources');
		$this->set('page', $page);
		$this->set('articles',$return);
		$this->set(compact("self_knowledge", "how_to_choose", "job_hunting" , "big_picture"));
		$this->layout="newdash";
	}
	
	
	public function big_picture($search = null){
		
		if($search == null){
		$this->Paginator->settings = array(
				'conditions' => array('Article.active' => 1, 'Article.category_id'=>1),
				'limit' => 6
		);
		}
		else{
			$this->Paginator->settings = array(
					'conditions' => array('Article.active' => 1, 'Article.title LIKE' => '%'.$search.'%'),
					'limit' => 6
			);
			
		}
		$big_picture = $this->Paginator->paginate('Article');
		
		return $big_picture;
	}
	
	public function self_knowledge($search = null){
		$this->__Mixpaneltrack("self-knowledge in resources");

		if($search == null){
			$this->Paginator->settings = array(
					'conditions' => array('Article.active' => 1, 'Article.category_id'=>2),
					'limit' => 6
			);
			}
			else{
				$this->Paginator->settings = array(
						'conditions' => array('Article.active' => 1, 'Article.title LIKE' => '%'.$search.'%'),
						'limit' => 6
				);
				
		}
		$self_knowledge = $this->Paginator->paginate('Article');
		return $self_knowledge;
	}
	
	public function how_to_choose($search = null){
		$this->__Mixpaneltrack("how to choose in resources");
	
	if($search == null){
		$this->Paginator->settings = array(
				'conditions' => array('Article.active' => 1, 'Article.category_id'=>3),
				'limit' => 6
		);
		}
		else{
			$this->Paginator->settings = array(
					'conditions' => array('Article.active' => 1, 'Article.title LIKE' => '%'.$search.'%'),
					'limit' => 6
			);
			
		}
		$how_to_choose = $this->Paginator->paginate('Article');
		return $how_to_choose;
	}
	
	public function job_hunting($search = null, $id = null){
		$this->__Mixpaneltrack("job junting in resources");

		
	if($search == null){
		$this->Paginator->settings = array(
				'conditions' => array('Article.active' => 1, 'Article.category_id'=>4),
				'limit' => 6
		);
		}
		else{
			$this->Paginator->settings = array(
					'conditions' => array('Article.active' => 1, 'Article.title LIKE' => '%'.$search.'%'),
					'limit' => 6
			);
			
		}
		$job_hunting = $this->Paginator->paginate('Article');
		return $job_hunting;
	}
	
	
	public function addOrbituary(){
		$this->autoRender=false;

		if(isset($_POST['orbituary'])){
			$this->__Mixpaneltrack("save button obituary quest");
			$orbituary=$_POST['orbituary'];

			$obituary = array('user_id'=>$this->UserAuth->getUserId(),'age'=>$orbituary['age'],'died'=>$orbituary['died'],'place'=>$orbituary['place'],'cause'=>$orbituary['cause'],'obituary'=>$orbituary['obituary'],'image'=>$orbituary['image']);
			$this->Orbituary->deleteAll(array('Orbituary.user_id' => $this->UserAuth->getUserId()), false);
			if($this->Orbituary->save($obituary)){


				$user = $this->User->findById($this->UserAuth->getUserId());
				$this->Puntaje->id = $user['Puntaje']['id'];
				$this->Puntaje->saveField('obituary', 50);


				return true;
			}else{
				return false;
			}
		}
	}

	public function addCareerVision(){
		$this->autoRender=false;

		if(isset($_POST['careervision'])){
			$this->__Mixpaneltrack("save button statement quest");
			$careervision=$_POST['careervision'];

			$careervision = array('user_id'=>$this->UserAuth->getUserId(),'career_vision'=>$careervision['career_vision'],'image'=>$careervision['image']);
			//debug($obituary);die;
			$this->Careervision->deleteAll(array('Careervision.user_id' => $this->UserAuth->getUserId()), false);
			if($this->Careervision->save($careervision)){

				$user = $this->User->findById($this->UserAuth->getUserId());
				$this->Puntaje->id = $user['Puntaje']['id'];
				$this->Puntaje->saveField('career', 50);

				return true;
			}else{
				return false;
			}
		}
	}

	public function addChallenges(){
		$this->autoRender=false;

		if(isset($_POST['challenges'])){
			$challenges=$_POST['challenges'];

			$challenge = array('user_id'=>$this->UserAuth->getUserId(),'top_challenge'=>$challenges[0],'challenge_2'=>$challenges[1],'challenge_3'=>$challenges[2]);

			$this->Challenge->deleteAll(array('Challenge.user_id' => $this->UserAuth->getUserId()), false);
			if($this->Challenge->save($challenge)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function addChallengesQuestions(){
		$this->autoRender=false;

		if(isset($_POST['dataQuest'])){
			$challenges=$_POST['dataQuest'];

			$challenge = array('user_id'=>$this->UserAuth->getUserId(),'challenge'=>$challenges[0],'q1'=>$challenges[1],'q2'=>$challenges[2],'q3'=>$challenges[3],'q4'=>$challenges[4],'q5'=>$challenges[5],'q6'=>$challenges[6],'q7'=>$challenges[7],'q8'=>$challenges[8],'q9'=>$challenges[9],'q10'=>$challenges[10],'q11'=>$challenges[11],'q12'=>$challenges[12],'q13'=>$challenges[13],'q14'=>$challenges[14]);

			$this->Challengequestion->deleteAll(array('Challengequestion.user_id' => $this->UserAuth->getUserId()), false);
			if($this->Challengequestion->save($challenge)){

				$user = $this->User->findById($this->UserAuth->getUserId());
				$this->Puntaje->id = $user['Puntaje']['id'];
				$this->Puntaje->saveField('pyramid', 40);

				return true;
			}else{
				return false;
			}
		}
	}


	public function addComment(){
		$this->autoRender=false;
		if(isset($_POST['comment'])){
			$comment=$_POST['comment'];
			$comment['user_id']=$this->UserAuth->getUserId();
			if($this->Comment->save($comment)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function addMeditation(){
		$this->__Mixpaneltrack("got it button in meditation video page");
		$this->autoRender=false;
		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->Puntaje->id = $user['Puntaje']['id'];
		if($user['Puntaje']['meditation'] == '0'){
			$this->Puntaje->saveField('meditation', 20);
			return 1;
		}else{
			return 0;
		}
	}

	public function addCdmf(){
		$this->__Mixpaneltrack("got it button in CDMF");

		$this->autoRender=false;
		$user = $this->User->findById($this->UserAuth->getUserId());

		if($user['Puntaje']['cdmf'] == 0){
			$this->Puntaje->id = $user['Puntaje']['id'];
			$this->Puntaje->saveField('cdmf', 100);
			return 1;
		}else{
			return 0;
		}
	}

	public function addAjh(){
		$this->__Mixpaneltrack("got it button in avoid mistakes");

		$this->autoRender=false;
		$user = $this->User->findById($this->UserAuth->getUserId());

		if($user['Puntaje']['ajh'] == 0){
			$this->Puntaje->id = $user['Puntaje']['id'];
			$this->Puntaje->saveField('ajh', 40);
			return 1;
		}else{
			return 0;
		}
	}

	public function primeravez(){
		$this->autoRender=false;
		$user['User']['id'] = $this->UserAuth->getUserId();
		$user['User']['primera_vez'] = 1;
		$this->User->save($user);
		return true;
	}
	
	public function mentoringSave(){
		$this->autoRender = false;
		$this->Mentoring->save($_POST['Mentoring']);
		$this->User->save($_POST['User']);
		return json_encode(1);
	}

	public function mentoring_update(){
		if(empty($_POST)){
			$this->set('title','Career Mentoring');
			$this->set('MDselected','MD1');
			$this->set('states', $this->State->find('all', array('recursive' => -1)));
			$this->set('educations', $this->Education->find('all', array('conditions' => array('id >=' => 3, 'id <=' => 11), 'recursive' => -1)));
			$this->set('user', $this->User->findById($this->UserAuth->getUserId()));
			$this->set('mentoring', $this->Mentoring->find('first', array('conditions' => array('Mentoring.user_id' => $this->UserAuth->getUserId()))));
			$this->layout="newdash";
		}
		else{
			$this->autoRender = false;
			$this->Mentoring->save($_POST['Mentoring']);
			$this->User->save($_POST['User']);
			return json_encode(1);
		}
	}

	public function form_pay($option = null){
		$this->set('option', $option);
		$this->set('modulo', 'Your Billing Information');
		$this->layout="dash_modulos";
	}

	public function mentoring_form(){
		$this->set('title','Mentoring');
		$this->set('MDselected','MD1');
		$this->set('states', $this->State->find('all', array('recursive' => -1)));
		$this->set('educations', $this->Education->find('all', array('conditions' => array('id >=' => 3, 'id <=' => 11), 'recursive' => -1)));
		$this->set('user', $this->User->findById($this->UserAuth->getUserId()));
		$this->set('title_for_layout', 'Mentoring Application Form');
		$this->layout="newdash";
	}

	public function intro_premium(){
		$this->set('modulo', 'Upgrade to <b>MENTOR</b>. Premium');
		$this->layout="dash_modulos";
	}

	public function activatepromo(){
		$this->autoRender = false;

		$u = array();
		$u['id'] = $this->UserAuth->getUserId();
		$u['premium'] = 1;
		$this->User->save($u);
		$user = $this->User->findById($this->UserAuth->getUserId());

	    $this->loadModel('CampaignMonitor.CMSubscriber');
    	$this->CMSubscriber->save(array(	
			    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
						'EmailAddress' => $user['User']['email'], 
						'Name' => $user['User']['first_name'], 
						'CustomFields' => array(
							        array(
							            'Key' => 'type',
							            'Value' => 'Premium',
							        )
							    ),
						"Resubscribe" => true,
    					"RestartSubscriptionBasedAutoresponders" => true
					));
		return json_encode(1);

	}

	public function proccess_pay(){
		$this->autoRender = false;
		$user = $this->User->findById($this->UserAuth->getUserId());
		$dataSEND['code'] = 0;
		if ( $_POST['data']['cost'] == 1 ){
			$cost = 22.00;
		}
		else{
			$cost = 49.00;
		}


		// Braintree_Configuration::environment("sandbox");
		// Braintree_Configuration::merchantId('jvq9mwkp7jh6mrkg');
		// Braintree_Configuration::publicKey('swx8q9z599j7pwwz');
		// Braintree_Configuration::privateKey('e71f94c51bb59a37a5b85be222b29877');

		Braintree_Configuration::environment('production');
		Braintree_Configuration::merchantId('dy4n6t226k8cfgp5');
		Braintree_Configuration::publicKey('3mk32jjc2zg2z4wq');
		Braintree_Configuration::privateKey('999067f3ca1fd63e26e1fba77d944824');

		$collection = Braintree_Customer::search([
		    Braintree_CustomerSearch::email()->is($user['User']['email'])
		]);

    	if(empty($collection->_ids)){
    		$result = Braintree_Customer::create(array(
			    "firstName" => $user['User']['first_name'],
			    "lastName" => $user['User']['last_name'],
			    "email" => $user['User']['email'],
			    "creditCard" => array(
			    	'cardholderName' => $_POST['data']['name'],
			        "number" =>  $_POST['data']['numC'],
			        "expirationMonth" => $_POST['data']['dateM'],
			        "expirationYear" => $_POST['data']['dateY'],
			        "cvv" => $_POST['data']['cvv'],
			        'options' => [
			            'verifyCard' => true
			        ]
			    )
			));
			if ($result->success) {
				$results = Braintree_Transaction::sale([
			      'amount' => $cost,
			      'customerId' => $result->customer->id,
			      'options' => [
			        'storeInVaultOnSuccess' => true,
			      ]
			    ]);
			}
			else{
				return json_encode($dataSEND);
			}
    	}
    	else{
			$results = Braintree_Transaction::sale([
		      'amount' => $cost,
		      'customerId' => 75050529,
		      'options' => [
		        'storeInVaultOnSuccess' => true,
		      ]
		    ]);
    	}
		if ($results->success) {
			$u = array();
			$u['id'] = $this->UserAuth->getUserId();
			$u['premium'] = 1;
			$u['pay_code'] = $results->transaction->_attributes['id'];
			$u['plan'] = $_POST['data']['cost'];
			$this->User->save($u);
		    $this->loadModel('CampaignMonitor.CMSubscriber');
    		$this->CMSubscriber->save(array(	
			    	'ListID' => '2a7ce55c067329403e2d71e8d26ae796', //lista de members
						'EmailAddress' => $user['User']['email'], 
						'Name' => $user['User']['first_name'], 
						'CustomFields' => array(
							        array(
							            'Key' => 'type',
							            'Value' => 'Premium',
							        )
							    ),
						"Resubscribe" => true,
    					"RestartSubscriptionBasedAutoresponders" => true
					));
    		
    		$dataSEND['id'] = $results->transaction->_attributes['id'];
    		$dataSEND['code'] = 1;
			return json_encode($dataSEND);
		} 
		else {
			return json_encode($dataSEND);
		}
	}

	public function the_meditation_quest(){
		$this->__Mixpaneltrack("meditation from quests m2");

		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->set('user', $user['User']);
		$this->set('modulo', 'The Meditation Quest');
		$this->set('title_for_layout', 'Intro Meditation Quest');
		$this->layout="dash_modulos";
	}
	
	public function the_meditation_quest_faqs(){
		$this->set('modulo', 'The Meditation Quest');
		$this->set('title_for_layout', 'Frequently Asked Questions Regarding Meditation');
		$this->layout="dash_modulos";
	}
	
	public function the_meditation_quest_origins(){
		$this->set('modulo', 'The Meditation Quest');
		$this->set('title_for_layout', 'Origins of RAMANA Meditation');
		$this->layout="dash_modulos";
	}
	
	public function the_meditation_quest_video(){
		$this->__Mixpaneltrack("show me button in meditation intro page");
		$this->set('modulo', 'The Meditation Quest');
		$this->set('title_for_layout', 'Breathing Techniques - A Preparation For Meditation');
		$this->layout="dash_modulos";
	}
	
	public  function mentoring_service_thanks(){
		
		$this->layout="newdash";
		$this->set('title','Career Mentoring');
		$recomendado=$this->__getResultCourse();
		$this->set('recomendado',$recomendado);
		$this->set('MDselected','MD1');
		$this->set('title_for_layout', 'Thank You For Your Interest In The Mentoring Program');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
	}
	
	public  function mentoring_service_block(){
		
		$this->__Mixpaneltrack("mentoring en dashboard");

		$this->layout="newdash";
		$this->set('title','Career Mentoring');
		$recomendado=$this->__getResultCourse();
		$this->set('recomendado',$recomendado);
		$this->set('title_for_layout', 'Career Mentoring');
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('MDselected','MD1');
	}
	
	public  function mentoring_service(){
		
		$this->__Mixpaneltrack("mentoring en dashboard");

		$this->layout="newdash";
		$this->set('user',$this->User->findById($this->UserAuth->getUserId()));
		$this->set('title','Career Mentoring');
		$recomendado=$this->__getResultCourse();
		$this->set('recomendado',$recomendado);
		$this->set('title_for_layout', 'Career Mentoring');
		$this->set('MDselected','MD1');
	}
	
	public function personalIntro(){

		$this->__Mixpaneltrack("values from quests m2");

		if($this->TopPersonalValues->find('count' , array ('conditions' => array('TopPersonalValues.user_id' => $this->UserAuth->getUserId())))){
			$this->redirect('/career_program/results_values');
		}
		$this->set('modulo', 'My Career Vision');
		$this->set('title_for_layout', 'Intro My Personal Values Quest');
		$user = $this->User->findById($this->UserAuth->getUserId());
		$this->set('user', $user['User']);
		$this->layout="dash_modulos";
		
	}

	public function Mixpanelajax($track = null){
		$this->autoRender = false;
		$this->__Mixpaneltrack($track);
	}

	function __Mixpaneltrack($track = null){
		$mp = Mixpanel::getInstance("682ca41dc28abfc8e3effd413b7daaed"); // instantiate the Mixpanel class
		$mp->identify($this->UserAuth->getUserId());
		$mp->track($track);
		sleep(2);
	}
}