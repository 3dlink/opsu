<html style="height: 100%;">
<head>	
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php
		echo $this->Html->meta('icon');

		//CSS
		echo $this->Html->css('../library/bootstrap/css/bootstrap');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('ace.min');
		echo $this->Html->css('ace-rtl');
		echo $this->Html->css('ace-skins');
		echo $this->Html->css('Mentr_admin');
		echo $this->Html->css('jquery.gritter');
		echo $this->Html->css('../js/chosen_v1.3.0/chosen');
		echo $this->Html->css('../js/chosen_v1.3.0/chosen.min');
		echo $this->Html->css('../js/chosen_v1.3.0/docsupport/prism');
		echo $this->Html->css('quiz-mentr.css');
		echo $this->Html->css('mentr-backend');
		echo $this->Html->css('mentr-backend_d');
		echo $this->Html->script('googleAnalytics.js');
		//echo $this->Html->css('main');
		echo $this->Html->css(array('main'));
		echo $this->Html->script('lib/jquery-2.0.3.min');
		echo $this->Html->script('lib/bootstrap.min');
		echo $this->Html->script('lib/ace-extra.min');
		echo $this->Html->script('lib/typeahead-bs2.min');
		echo $this->Html->script('lib/ace-elements.min');
		echo $this->Html->script('lib/ace.min');
		echo $this->Html->script('lib/jquery.nestable.min');
		echo $this->Html->script('lib/jquery.gritter.min');
		echo $this->Html->script('lib/jquery.session');
		echo $this->Html->script('lib/bootbox.min');
		echo $this->Html->script('lib/markdown/markdown.min');
		echo $this->Html->script('lib/markdown/bootstrap-markdown.min'); 
		echo $this->Html->script('lib/bootstrap-wysiwyg.min');
		echo $this->Html->script('lib/bootstrap-tag');
		echo $this->Html->script('lib/jquery.hotkeys.min');
		echo $this->Html->script('chosen_v1.3.0/chosen.jquery');
		//echo $this->Html->script('chosen_v1.3.0/chosen.jquery.min');
		echo $this->Html->script('chosen_v1.3.0/chosen.proto');
		echo $this->Html->script('chosen_v1.3.0/chosen.proto.min');
		echo $this->Html->script('chosen_v1.3.0/docsupport/prism');
		echo $this->Html->script('tinymce/tinymce.min');
		echo $this->Html->script('commons');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
		$today = date('Y-m-d H:i:s');



		$mod1 = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
		$mod1 = ($mod1 * 100) / 200;
		if($mod1 < 70){
			$ModBlock = "all";
		}
		else{
			$ModBlock = "best_fits";
		}

		$liActive = '';
		// control del active 
		if (($this->params['controller'] == 'Sellers') && ($this->params['action'] == 'index')){
			$liActive = 'bandeja';
			
		}
		else if (($this->params['action'] == 'addUser')) $liActive = 'Users';
		else if (($this->params['action'] == 'allUsers')) $liActive = 'Users';
		
		
		else if (($this->params['controller'] == 'Items') && ($this->params['action'] == 'add')) $liActive = 'Items';
		else if (($this->params['controller'] == 'Items') && ($this->params['action'] == 'index')) $liActive = 'Items';
		else if (($this->params['controller'] == 'Brands') && ($this->params['action'] == 'add')) $liActive = 'Brands';
		else if (($this->params['controller'] == 'Brands') && ($this->params['action'] == 'index')) $liActive = 'Brands';
		else if (($this->params['controller'] == 'Stores') && ($this->params['action'] == 'add')) $liActive = 'Stores';
		else if (($this->params['controller'] == 'Stores') && ($this->params['action'] == 'index')) $liActive = 'Stores';
		else if (($this->params['controller'] == 'Metas') && ($this->params['action'] == 'add')) $liActive = 'metas';
		else if (($this->params['controller'] == 'Rutas') && ($this->params['action'] == 'add')) $liActive = 'rutas';
		else if (($this->params['controller'] == 'redirections') && ($this->params['action'] == 'index')) $liActive = 'perfil';
		else if (($this->params['controller'] == 'tags') && ($this->params['action'] == 'index')) $liActive = 'etiquetas';
		else if (($this->params['controller'] == 'user_group_permissions') && ($this->params['action'] == 'index')) $liActive = 'permisos';
		else if (($this->params['controller'] == 'entities')) $liActive = 'entidades';
		else if (($this->params['controller'] == 'communicationCategories') || ($this->params['controller'] == 'communicationTypes') || ($this->params['controller'] == 'formats')) $liActive = 'comunicaciones';
		else if (($this->params['controller'] == 'user_groups')) $liActive = 'roles';
		else if (($this->params['controller'] == 'groups')) $liActive = 'grupos';
		else if (($this->params['controller'] == 'users') && ($this->params['action'] == 'dashboard')) $liActive = 'dashboard';
		else if (($this->params['controller'] == 'users')) $liActive = 'usuarios';
		else if (($this->params['controller'] == 'Csv') && ($this->params['action'] == 'index')) $liActive = 'csv';
	?>
<script type="text/javascript">

WEBROOT='<?php echo $this->webroot; ?>';
ARTICLES={
	TAG : '',
	LIMIT: '',
	CATEGORY: '',
	ID: ''
};


</script>

<script type="text/javascript">ID_USUARIO='<?php echo $this->UserAuth->getUserId()?>';</script>
<script type="text/javascript">
$(document).ready(function(){

var pathname = window.location.pathname; // Returns path only
pathname = pathname.split('/');
if(pathname[3] == 'dashboard' || pathname[2] == 'dashboard'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'mentoring_update' || pathname[2] == 'mentoring_update'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'mentoring_service_thanks' || pathname[2] == 'mentoring_service_thanks'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'mentoring' || pathname[2] == 'mentoring'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'mentoring_blocked' || pathname[2] == 'mentoring_blocked'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'resources_as_member' || pathname[2] == 'resources_as_member'){
	$('.LiResources').css('display', 'none');
	$('#labelMovil2').html('Resources');
}

if(pathname[3] == 'form' || pathname[2] == 'form'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}

if(pathname[3] == 'my_vision' || pathname[2] == 'my_vision'){ 
    $('.LiVision').css('display', 'none');
	$('#labelMovil2').html('My career vision');	
}

if(pathname[3] == 'resources' || pathname[2] == 'resources'){
	$('.LiResources').css('display', 'none');
	$('#labelMovil2').html('Resources');
}

if(pathname[3] == 'results' || pathname[2] == 'results'){
	$('.LiResults').css('display', 'none');
	$('#labelMovil2').html('Results');
}

if(pathname[3] == 'careers' || pathname[2] == 'careers'){
	$('.LiCareers').css('display', 'none');
	$('#labelMovil2').html('Careers');
}

if(pathname[3] == 'courses' || pathname[2] == 'courses'){
	$('.LiCourses').css('display', 'none');
	$('#labelMovil2').html('Courses');
}


	$('.showMenu').click(function(){
		if( $('.showMenu img').hasClass('sMimage1') ){
			$('.showMenu img').removeClass('sMimage1');
			$('.showMenu img').addClass('sMimage2');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/up-menu.png';?>");
			$('.downMenu').css('display', 'block');
		}
		else{
			$('.showMenu img').removeClass('sMimage2');
			$('.showMenu img').addClass('sMimage1');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/down-menu.png';?>");
			$('.downMenu').css('display', 'none');
		}
	})

})

</script>

</head>

<style>

.cero_scroll{
	overflow-y:hidden;
}

header{
	width: 1280px;
}

#mascara, #mascara2{
  position: absolute;
  background: rgba(0,0,0,0.75);
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 4;
  display: none;
}

#mentoring_mask{
	top:114px;
}

#career_mask{
	top:355px;
}

#welcome_mask{
	top:180px;
}

#percent_mask{
	text-align: left;
	padding-left: 20px;
	top:355px;
}

.mask_text{
	position: absolute;
	font-family: 'Lato', sans-serif;
	color: #5b5b5b;  
	font-weight: 300;  
	border: none;
  z-index: 4;
  text-align: left;
	width: 270px;
}

.mask_welcome{
	position: absolute;
	font-family: 'Lato', sans-serif;
	color: white;  
	font-weight: 300;  
	border: none;
  z-index: 4;
  text-align: center;
	width: 630px;
}

.mask_labels{
	position: absolute;
	font-family: 'Lato', sans-serif;
	color: #5b5b5b;  
	font-weight: 400;  
	font-size: 20px;
	width: 115px;
	height: 30px;
	box-shadow: 0 0 15px 10px white;
	border: none;
	background-color: white;
  z-index: 4;
  border-radius: 30px;
  text-align: center;
}

.percent{
	font-size: 30px;
	color: black;
	font-weight: 300;
	text-align: left;
  padding-left: 10px;
  top: 355px;
  line-height: 27px;

}

#exit{
	position: absolute;
	top:30px;
	right:30px;
	width: 32px;
	height: 32px;
	background-image: url("<?php echo $this->webroot;?>img/dashboard/mask_Close.png");
	cursor: pointer;
}

#arrow_career{
	position: absolute;
	top:400px;
	width: 155px;
	height: 80px;
	background-image: url("<?php echo $this->webroot;?>img/dashboard/mask_arrow_2.png");
}

#arrow_module{
/*	position: absolute;
	top:400px;*/
	margin: 0 auto;
	width: 155px;
	height: 80px;
	background-image: url("<?php echo $this->webroot;?>img/arrowCoachV2.png");
	background-repeat: no-repeat;
/*	width: 1280px;
    height: 80px;
 	text-align: center;*/
}

#arrow_mentoring{
	position: absolute;
	top:65px;
	width: 152px;
	height: 67px;
	background-image: url("<?php echo $this->webroot;?>img/dashboard/mask_arrow_3.png");
}
#arrow_percent{
	position: absolute;
	top:380px;
	width: 152px;
	height: 67px;
	background-image: url("<?php echo $this->webroot;?>img/dashboard/mask_arrow_1.png");
}

#mentoring_words_mask{
	top:28px;
}
#career_words_mask{
	top:424px;
}
#percent_words_mask{
	top:410px;
}
.mask_text h1{
	font-weight: 400;  
	font-size: 30px;
	color: #ffbb33;
	margin-bottom: 5px;
}
.mask_text p{
	font-size: 18px;
	color: white;
  line-height: 25px;
}
.mask_welcome h1{
	font-weight: 400;  
	font-size: 36px;
}
.mask_welcome p{
	font-size: 24px;
	color: white;
}

#percent_mask small{
	font-size: 18px;
}

.titleFirstTime{
	text-align: center; 
	font-size:36px; 
	color:#ffbb33; 
	width: 1280px; 
	margin: 0 auto; 
	padding-left: 50px; 
	padding-top: 17px;
	font-weight: 500;
}

.subtitleFirstTime{
	text-align: center; 
	font-size:24px; 
	color:  white; 
	width: 1280px; 
	margin: 0 auto; 
	padding-left: 50px; 
}

@media(max-width: 950px){
	.Footer {
		padding: 35px 92px 45px 40px !important;;
	}
}

@media ( max-width : 750px) {

	.Footer{
		width: 100% !important;
		padding: 35px 35px 45px 35px !important;
	}
	.Footer br{
		display: none;
	}

	/*#arrow_career{
		top:148px;
  	left: 58px;
		background-image: url("<?php echo $this->webroot;?>img/dashboard/mask_arrow_1_movil.png");
		width: 40px;
  	height: 165px;
	}

	#arrow_mentoring{
		top: 201px;
	  left: 196px;
	  background-image: url("/vision_mentr/img/dashboard/mask_arrow_2_movil.png");
	  width: 60px;
	  height: 69px;
	}

	#arrow_percent{
		top: 454px;
	  left: 103px;
	  background-image: url("/vision_mentr/img/dashboard/mask_arrow_2_movil.png");
	  width: 152px;
	  height: 69px;
	}*/

	.mask_text h1{
		font-size: 20px;
	}
	.mask_text p{
		font-size: 14px;
		line-height: 18px;
	}

	#mentoring_words_mask{
		top:224px;
		left:210px;
	}
	#career_words_mask{
		top:290px;
		left: 50px;
	}

	#percent_words_mask{
		top: 500px;
  	left: 190px;
	}

	#welcome_mask{
		top:30;
		left:0;
	}
	#career_mask{
		top:118;
		left:20;
		line-height: 20px;
	}
	#mentoring_mask{
		top: 165px;
  	left: 145px;
		line-height: 20px;
	}
	#percent_mask{
		top: 417px;
  	left: 48px;
		line-height: 20px;
	}
	.mask_labels {
  	height: 20px;
  	text-align: left;
	}

	.mask_welcome{
		width: 100%;
	}
	.mask_welcome h1{
		font-size: 22px;
	}
	.mask_welcome p{
		font-size: 16px;
	}
	#exit{
		top: 15;
		right: 15;
	}
	#mascara, #mascara2{
		position: fixed;
	}
	.titleFirstTime{
		width: 75%; 
	    padding-left: 5px;
	    padding-top: 5px;
	    font-size: 30px;
	}
	.subtitleFirstTime{
	    font-size: 18px;
	    width: 70%; 
	    padding-left: 5px;
	    padding-top: 5px;
	}
}

@media (max-width: 600px){
	.titleFirstTime{
		width: 75%; 
	    padding-left: 5px;
	    padding-top: 5px;
	    font-size: 20px;
	}
	.subtitleFirstTime{
	    font-size: 16px;
	    padding-left: 5px;
	    padding-top: 5px;
	}
}

</style>



<body>


<div id="mascara2" style="">
	<div id="exit"></div>
	<div class="titleFirstTime" style="">Welcome and congratulations for registering!</div>
	<div class="subtitleFirstTime" style="">Start your journey of finding the work you trully love by completing <br> 
		<span style="text-align: center;">the first quest in Module 1, Know Myself</span>
		<div id="arrow_module"></div>
	</div>


<!-- <div id="mascara">
<div id="exit"></div>
<div id="mentoring_mask" class="mask_labels">Mentoring</div>
<div id="mentoring_words_mask" class="mask_text">
	<h1>Mentoring Service</h1>
	<p>Apply once you completed <br>the required requests</p>
</div>
<div id="career_words_mask" class="mask_text">
	<h1>Mentoring careers</h1>
	<p>Explore recommended careers<br>based on MENTOR.'s algorithm</p>
</div>
<div id="percent_words_mask" class="mask_text">
	<h1>Course modules</h1>
	<p>Module progress is determined<br>by completing quests in the module</p>
</div>
<div id="welcome_mask" class="mask_welcome">
	<h1>Welcome and thank you for registering!</h1>
	<p>Start by completing a quest in any module</p>
</div>
<div id="arrow_mentoring"></div>
<div id="arrow_career"></div>
<div id="arrow_percent"></div>
<div id="career_mask" class="mask_labels">Careers</div>
<div id="percent_mask" class="mask_labels percent">0 <small>%</small></div>
</div> -->

</div>
	<header>	
			<div class="" id="logo" style="cursor:pointer;">
			<div>
				<div>
					<img src="<?php echo $this->webroot.'img/logo3.png';?>">					
				</div>	
			</div>			
		</div>
		<div class="" id="menu_user">
			<div id="menu_user-content">
				<div id="titulo_modulo">
					<?php 
						if(isset($title)){
							echo $title;
						}
						else{
							echo "Career Decision-Making Program";
						} 
					?>
				</div>
				<div id="user_menu_content">
					<?php if($this->Session->read('UserAuth.User.image') != ""){ ?>
					<div id="user_menu" style="background-repeat: no-repeat;  background-image : url('<?php echo $this->webroot."files/".$this->Session->read('UserAuth.User.image');?>') ; background-size: cover; ">
					</div>
					<?php } else{?>
					<div id="user_menu">
					</div>
					<?php }?>
					<span id="nombre_usuario" style="margin-right: 1em;">
							<?php //echo $this->Session->read('UserAuth.User.first_name').' '.$this->Session->read('UserAuth.User.last_name') ; ?>
							<?php 
							if(strlen($this->Session->read('UserAuth.User.first_name')) > 8){
								echo ucwords(substr($this->Session->read('UserAuth.User.first_name'), 0, 8 )."...");
							}
							else{
								
								echo ucwords($this->Session->read('UserAuth.User.first_name'));
							}
							?>
							<?php //echo $this->Session->read('UserAuth.User.username'); ?>
						</span>
					<span id="user_menu_option">
						<span class="">
							<a class="menu_mobile_edit" style="cursor:pointer;"><img src="<?php echo $this->webroot.'img/dashboard/pencil.png';?>"/></a>
						</span>
						<span class="">
							<a class="menu_mobile_settings" style="cursor:pointer;">
								<img src="<?php echo $this->webroot.'img/dashboard/settings.png';?>"/>
							</a>
						</span>
						<span class="">
							<a class="menu_mobile_log" style="cursor:pointer;">
								<img src="<?php echo $this->webroot.'img/dashboard/Power.png';?>"/>
							</a>
						</span>
					</span>
				</div>
				<div id="menu_user_mobile_icon"></div>
				<div class="popover fade bottom in menu_user_mobile" role="tooltip" id="popover798251">
				 	<div class="arrow" style="left: 122px; width:18px;"></div>
				 	<div class="popover-content" style="color:white; padding: 0px;float:left;padding: 0 10px;">
				 		<div id="menu_mobile_edit" class="items_menu_user"><img src="<?php echo $this->webroot.'img/dashboard/pencil.png';?>"/>Edit</div>
				 		<div id="menu_mobile_settings" class="items_menu_user" style="border-top: solid 1px #d6d6d6;border-bottom: solid 1px #d6d6d6;"><img src="<?php echo $this->webroot.'img/dashboard/settings.png';?>"/>Settings</div>
				 		<div id="menu_mobile_log" class="items_menu_user"><img src="<?php echo $this->webroot.'img/dashboard/Power.png';?>"/>Log out</div>
				 	</div>
				</div>


			</div>
		</div>
	</header>
	<div class="" id="dash_content">	
		<div id="menu-content-mobile" style="padding: 0; width: 100%; display:none;">
			<ul>
				<li>
					<div id="labelMovil" style="background-color:#F7F7F7; font-size: 20px; font-weight: 500; padding: 15px; padding-right: 15px;" class="visible-xs"><span style="padding-left: 5px;font-weight: bold;" id="labelMovil2"></span> <span class="showMenu" style="float:right;"> <img class="sMimage1" style="width: 25px; height: 15px; margin-top: 10px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"> </span>
					</div>
						
					<div class="divisor" style="color:d0d0d0; width: 90%;  margin-left: 20px; margin-top :-10px;"></div>
					<ul class="downMenu" style="display: none; padding-top: 10px;font-weight: bold;">
						<li class="LiDashboard">							
							<a class="MD1" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/dashboard'?>">
								Dashboard
							</a>
						</li>
						<?php if($user['User']['premium'] == 1){ ?>
						<li class="LiVision">
							<a class="MD2" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/my_vision'?>">
								My career vision
							</a>
						</li>
						<?php } ?>
						<li class="LiResults">
							<a class="MD3" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/results'?>">
								Results
							</a>
						</li>
						<li class="LiResources">
							<a class="MD4" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/resources/big_picture'?>">
								Resources
							</a>
						</li> 
						<li class="LiCareers"  >
							<a class="MD5" style="z-index=12; border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/careers/'.$ModBlock;?>">
								Careers
							</a>
						</li>
						<li class="LiCourses">
							<a class="MD6" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/courses/all'?>">
								Courses
							</a>
						</li>
						<!-- <li class="LiJobs">
							<a class="MD7" style="border-top: 1px solid #c8c0c8;">
								Jobs
							</a>
						</li> -->
					</ul>
				</li>
			</ul>
		</div>


		<div class="" id="menu-content" style="padding: 0;">
			<ul style="margin: 0 !important;">
				<li>
					<div id="labelMovil" class="visible-xs" >Resources <span class="glyphicon glyphicon-menu-down" style="float:right;"></span></div>
					<ul  style="margin: 0 !important;">
						<li class="">							
							<a id="dashboard_link" class="MD1" href="<?php echo $this->webroot.'career_program/dashboard'?>">
								Dashboard
							</a>
						</li>

						<?php if($user['User']['premium'] == 1){ ?>

						<li class="">
							<a id="cvision_link" class="MD2" href="<?php echo $this->webroot.'career_program/my_vision'?>">
								My career vision
							</a>
						</li>

						<?php } ?>

						<li class="">
							<a id="result_link" class="MD3" href="<?php echo $this->webroot.'career_program/results'?>">
								Results
							</a>
						</li>
						<li class="">
							<a id="resources_link" class="MD4" href="<?php echo $this->webroot.'career_program/resources/big_picture'?>">
								Resources
							</a>	
						</li> 
						<li class="">
							<a id="careers_link" class="MD5" href="<?php echo $this->webroot.'career_program/careers/'.$ModBlock;?>">
								Careers
							</a>	
						</li>
						<li class="">
							<a id="courses_link" class="MD6"  href="<?php echo $this->webroot.'career_program/courses/all'?>">
								Courses
							</a>	
						</li>
					<!-- 	<li class="">
							<a class="MD7">
								Jobs
							</a>
						</li> -->
					</ul>
				</li>
				
			</ul>
		</div>
		<div class="" style=" " id="info_content">

		<!-- <div class="" id="dash_content"> -->
			<div>
				<?php echo $this->Session->flash(); ?>				
				<?php echo $this->fetch('content'); ?>
			</div>			
		</div>
		<div style="clear: both;"></div>

<?php echo $this->element('footer_uno')?>

	</div>
	

</body>
<?php if(isset($MDselected)):?>
	<style>
		.<?php echo $MDselected;?>{
			background-color: rgb(185, 173, 184);
			font-weight: 400;
		}		
	</style>
<?php endif;?>
</html>

<?php 

if( $user['User']['primera_vez'] == 0){ 
	echo '<img src="https://shareasale.com/sale.cfm?amount=1.00&tracking='.$user['User']['id'].'&transtype=LEAD&merchantID=61059" width="1" height="1">';
 } ?>


<script>

// $(window).load(function(){
// 	if( $('body').width() >= 751 ){
// 		$('#mascara2').width( $('#dash_content').width() );
// 	}
// })

$('body').click(function(e){

	if( $('#mascara2').css('display') == 'block' ){
		 e.preventDefault();
		 $('#exit').click();
	}

})

$(window).resize(function(){
	if( $('body').width() >= 751 ){
		$('#mascara2').width( $('#body').width() );
	}
})
$(document).ready(function(){

	var primera_vez = "<?php echo $user['User']['primera_vez'];?>";
	if(primera_vez == 0){
		// alert(primera_vez);
		$.ajax({
			url: WEBROOT+'start/primeravez',
			type: 'post',
			success: function(){
				$('.modknowMark').css('display', 'inline-block');
				$('.modknowReal').css('display', 'none');

				$('#mascara2').css('display','block');
				$('#modKnow2').css('zIndex', '10');
				$('#modKnow2').css('boxShadow', '0px 0px 25px 10px #EAE7E7');
			},
			error: function(a,e,i){
				console.log(e);
			}
		})
	}


})


$('#exit').click(function(){
	$('.modknowMark').css('display', 'none');
	$('.modknowReal').css('display', 'inline-block');
	// $('#modKnow').css('boxShadow','0px 5px 5px 0px #9d9d9d');
	$('#mascara2').css('display','none');
	$('body').removeClass('cero_scroll');
});

// $(window).load(function(){
// 	var heB = $('body').height();
// 	var heC = $('#dash_content').height();
// 	var moreH = heB - (heC + 274) ;
// 	if(moreH > 0){
// 		$('#menu-content').height( $('#menu-content').height() - moreH );
// 	}
// })

$(window).load(function(){
	var hh = $('#info_content').height();
	if(hh < 450){
		var altr =  $(window).height() - $('#dash_content').height();
		altr = altr - 270;
		if(altr < 0){
			altr = 10;
		}
		hh = 396 + altr;
	}
	else{
		var pathname = window.location.pathname; // Returns path only
		pathname = pathname.split('/');
		if(pathname[3] != 'mentoring'){
			hh = hh +60;
		}
	}
	$('#menu-content').height(hh + "px");
})


// 892
// 550
// 68

// $('#resources_link').click(function(){
// 	mixpanel.identify(ID_USUARIO);
// 	mixpanel.track("resources section");
// });
// $('#result_link').click(function(){
// 	mixpanel.identify(ID_USUARIO);
// 	mixpanel.track("results section");
// });
// $('#cvision_link').click(function(){
// 	mixpanel.identify(ID_USUARIO);
// 	mixpanel.track("my career vision section");
// });
// $('#careers_link').click(function(){
// 	mixpanel.identify(ID_USUARIO);
// 	mixpanel.track("careers section");
// });
// $('#courses_link').click(function(){
// 	mixpanel.identify(ID_USUARIO);
// 	mixpanel.track("courses section");
// });

$('#menu_user_mobile_icon').click(function(){
	if($('#popover798251').hasClass('display_block'))
		$('#popover798251').removeClass('display_block');
	else
		$('#popover798251').addClass('display_block');
});


$('#menu_mobile_edit').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("edit user button");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'career_program/profile/'.$this->UserAuth->getUserId();?>";
	// },1000);
});

$('#menu_mobile_settings').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("edit notifications");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'career_program/notifications/'.$this->UserAuth->getUserId();?>";
	// },1000);
});
$('#menu_mobile_log').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("logout");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'logout';?>";
	// },1000);
});
$('.menu_mobile_edit').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("edit user button");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'career_program/profile/'.$this->UserAuth->getUserId();?>";
	// },1000);
});
$('.menu_mobile_settings').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("edit notifications");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'career_program/notifications/'.$this->UserAuth->getUserId();?>";
	// },1000);
});

$('.menu_mobile_log').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("logout");
	// setTimeout(function(){
		window.location = "<?php echo $this->webroot.'logout';?>";
	// },1000);
});


$('#logo').click(function(){
	if( "<?php echo $this->UserAuth->getUserId();?>" != ""){
		window.location = "<?php echo $this->webroot; ?>"+'career_program/dashboard';
	}
	else{
		window.location = "<?php echo $this->webroot; ?>";
	}
})
</script>