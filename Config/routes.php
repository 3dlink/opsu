<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	//Router::connect('/', array('plugin' => 'usermgmt', 'controller' => 'users', 'action' => 'login'));

// Router::connect('/', array('controller' => 'start', 'action' => 'optionb'));
Router::connect('/', array('controller' => 'start', 'action' => 'coming_soon'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

	Router::connect('/a-smart-guide-to-find-your-dream-career', array('controller' => 'start', 'action' => 'dream'));
	
	Router::connect('/dashboards', array('controller' => 'dashboards', 'action' => 'course'));
	
	Router::connect('/career', array('controller' => 'start', 'action' => 'careerGuidance', 'big_picture'));

	Router::connect('/career/assessment-career-decision-impediments', array('controller' => 'assessments', 'action' => 'index'));

	Router::connect('/career/assessment-cdda-results', array('controller' => 'assessments', 'action' => 'result'));
	
	Router::connect('/career/big-picture', array('controller' => 'start', 'action' => 'careerGuidance'));

	Router::connect('/career/big-picture/*', array('controller' => 'start', 'action' => 'resourcesView', 'big_picture'));

	Router::connect('/career/self-knowledge', array('controller' => 'start', 'action' => 'careerGuidance', 'self_knowledge'));

	Router::connect('/career/self-knowledge/*', array('controller' => 'start', 'action' => 'resourcesView', 'self_knowledge'));
	
	Router::connect('/career/how-to-choose', array('controller' => 'start', 'action' => 'careerGuidance', 'how_to_choose'));

	Router::connect('/career/how-to-choose/*', array('controller' => 'start', 'action' => 'resourcesView', 'how_to_choose'));
	
	Router::connect('/career/job-hunting', array('controller' => 'start', 'action' => 'careerGuidance', 'job_hunting'));

	Router::connect('/career/job-hunting/*', array('controller' => 'start', 'action' => 'resourcesView', 'job_hunting'));

	Router::connect('/career/search/*', array('controller' => 'start', 'action' => 'search'));

	Router::connect('/terms-of-use', array('controller' => 'start', 'action' => 'legalPage'));

	Router::connect('/privacy-policy', array('controller' => 'start', 'action' => 'legalPage', 'Privacy'));

	Router::connect('/disclaimer', array('controller' => 'start', 'action' => 'legalPage', 'Disclaimer'));
	
	Router::connect('/career-decision-making-program-registration', array('controller' => 'start', 'action' => 'landing'));

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	
	Router::connect('/about-us', array('controller' => 'pages', 'action' => 'display' , 'aboutus'));
	
	Router::connect('/contact-us', array('controller' => 'pages', 'action' => 'display' , 'contactus'));
	
	Router::connect('/career_program/dashboard', array('controller' => 'dashboards', 'action' => 'course'));

	Router::connect('/career_program/mentoring_blocked', array('controller' => 'dashboards', 'action' => 'mentoring_service_block'));

	Router::connect('/career_program/mentoring_update', array('controller' => 'dashboards', 'action' => 'mentoring_update'));

	Router::connect('/career_program/mentoring', array('controller' => 'dashboards', 'action' => 'mentoring_service'));

	Router::connect('/career_program/form', array('controller' => 'dashboards', 'action' => 'mentoring_form'));

	Router::connect('/career_program/mentoring_ok', array('controller' => 'dashboards', 'action' => 'mentoring_service_thanks'));

	Router::connect('/career_program/my_vision', array('controller' => 'dashboards', 'action' => 'vision'));

	Router::connect('/career_program/results', array('controller' => 'dashboards', 'action' => 'result'));

	Router::connect('/career_program/results/*', array('controller' => 'dashboards', 'action' => 'result'));

	Router::connect('/career_program/resources/how_to_choose/*', array('controller' => 'dashboards', 'action' => 'resources_as_member_main', 'how_to_choose'));
	
	Router::connect('/career_program/resources/big_picture/*', array('controller' => 'dashboards', 'action' => 'resources_as_member_main', 'big_picture'));

	Router::connect('/career_program/resources/self_knowledge/*', array('controller' => 'dashboards', 'action' => 'resources_as_member_main', 'self_knowledge'));

	Router::connect('/career_program/resources/job_hunting/*', array('controller' => 'dashboards', 'action' => 'resources_as_member_main', 'job_hunting'));

	Router::connect('/career_program/resources/*', array('controller' => 'dashboards', 'action' => 'resources_as_member'));

	Router::connect('/career_program/careers', array('controller' => 'career', 'action'=> 'index'));

	Router::connect('/career_program/careers/best_fits', array('controller' => 'career', 'action'=> 'index','best_fits'));

	Router::connect('/career_program/careers/favourites', array('controller' => 'career', 'action'=> 'index','favourites'));

	Router::connect('/career_program/careers/all', array('controller' => 'career', 'action'=> 'index', 'all'));

	Router::connect('/career_program/careers/*', array('controller' => 'career', 'action'=> 'view'));

	Router::connect('/career_program/edit_values', array('controller' => 'assessments', 'action' => 'editValues'));

	Router::connect('/career_program/courses/*', array('controller' => 'course', 'action' => 'index'));

	Router::connect('/career_program/p3_intro',array('controller' => 'dashboards', 'action' => 'pyramidIntro'));

	Router::connect('/career_program/p3_assessment', array('controller' => 'assessments', 'action' => 'pyramidAssessment'));

	Router::connect('/career_program/p3_assessment_results', array('controller' => 'dashboards', 'action' => 'pyramidAnalyze'));

	Router::connect('/career_program/p3_bottlenecks', array('controller' => 'dashboards', 'action' => 'pyramidBottleneck'));

	Router::connect('/career_program/p3_bottlenecks_results', array('controller' => 'dashboards', 'action' => 'pyramidBottleneckQuestions'));

	Router::connect('/career_program/obituary_intro', array('controller' =>'dashboards', 'action' => 'obituaryIntro'));

	Router::connect('/career_program/obituary', array('controller' => 'dashboards', 'action' =>'obituaryQuest'));

	Router::connect('/career_program/obituary_results', array('controller' => 'dashboards', 'action' => 'obituarySummary'));

	Router::connect('/career_program/edit_obituary', array('controller' => 'dashboards', 'action' => 'obituaryQuest', '1'));

	Router::connect('/career_program/meditation_intro', array('controller' => 'dashboards', 'action' => 'the_meditation_quest'));

	Router::connect('/career_program/meditation_origins', array('controller' => 'dashboards', 'action' => 'the_meditation_quest_origins'));

	Router::connect('/career_program/meditation_faq', array('controller' => 'dashboards', 'action' => 'the_meditation_quest_faqs'));
	
	Router::connect('/career_program/meditation_video', array('controller' => 'dashboards', 'action' => 'the_meditation_quest_video'));

	Router::connect('/career_program/vision_intro', array('controller' => 'dashboards', 'action' => 'careervisionIntro'));

	Router::connect('/career_program/vision', array('controller' => 'dashboards', 'action' => 'careervisionQuest'));

	Router::connect('/career_program/edit_vision', array('controller' => 'dashboards', 'action' => 'careervisionQuest', '1'));

	Router::connect('/career_program/vision_results', array('controller' => 'dashboards', 'action' => 'careervisionSummary'));

	Router::connect('/career_program/assessment_wv', array('controller' => 'assessments', 'action' => 'workValues'));

	Router::connect('/career_program/results_wv', array('controller' => 'assessments', 'action' => 'resultWork'));

	Router::connect('/career_program/assessment_empl', array('controller' => 'assessments', 'action' => 'personality'));

	Router::connect('/career_program/results_empl', array('controller' => 'assessments', 'action' => 'resultPersonality'));

	Router::connect('/career_program/assessment_interests', array('controller' => 'assessments', 'action' => 'VocationalInterests'));
	
	Router::connect('/career_program/results_interests', array('controller' => 'assessments', 'action' => 'resultVia'));

	Router::connect('/career_program/assessment_skills', array('controller' => 'assessments', 'action' => 'SkillsA'));

	Router::connect('/career_program/intro_module_3', array('controller' => 'dashboards', 'action' => 'introMod3'));

	Router::connect('/career_program/quests_module_3', array('controller' => 'dashboards', 'action' => 'quest_mod3'));

	Router::connect('/career_program/framework', array('controller' => 'dashboards', 'action' => 'cdmf'));

	Router::connect('/career_program/heuristics', array('controller' => 'dashboards', 'action' => 'ajh'));

	Router::connect('/career_program/360_intro', array('controller' => 'dashboards', 'action' => 'intro_page_feedback_360'));

	Router::connect('/career_program/assessment_360m', array('controller' => 'assessments', 'action' => 'feedbackA'));

	Router::connect('/career_program/360_invites', array('controller' => 'dashboards', 'action' => 'request_feedback'));

	Router::connect('/career_program/360_results', array('controller' => 'assessments', 'action' => 'resultFeedback'));

	Router::connect('/career_program/360_awaiting', array('controller' => 'dashboards', 'action' => 'awaiting_result'));

	Router::connect('/career_program/360_invites_ok', array('controller' => 'dashboards', 'action' => 'invitation_send_feedback_360'));

	Router::connect('/career_program/values_intro', array('controller' => 'dashboards', 'action' => 'personalIntro'));

	Router::connect('/career_program/intro_module_1', array('controller' => 'dashboards', 'action' => 'introMod1'));

	Router::connect('/career_program/quests_module_1', array('controller' => 'dashboards', 'action' => 'quest_mod1'));

	Router::connect('/career_program/intro_module_2', array('controller' => 'dashboards', 'action' => 'introMod2'));

	Router::connect('/career_program/quests_module_2', array('controller' => 'dashboards', 'action' => 'quest_mod2'));

	Router::connect('/career_program/values/*', array('controller' => 'assessments', 'action' => 'personalValues'));

	Router::connect('/career_program/results_values', array('controller' => 'assessments', 'action' => 'resultValues'));
	
	Router::connect('/career_program/results_values/*', array('controller' => 'assessments', 'action' => 'resultValues'));

	Router::connect('/career_program/results_skills', array('controller' => 'assessments', 'action' => 'resultSka'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';