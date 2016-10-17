<html style="height: 100%;">
<head>	
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>
		<?php echo 'Mentor' ?>:
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
		echo $this->Html->script('commons');
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
		echo $this->fetch('meta');
		echo $this->fetch('css');
		//echo $this->fetch('script');
		$today = date('Y-m-d H:i:s');

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
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>

<script type="text/javascript">
$(document).ready(function(){

var pathname = window.location.pathname; // Returns path only
pathname = pathname.split('/');

// alert(pathname[3]);
if(pathname[3] == 'course'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('Dashboard');
}
if(pathname[3] == 'resources_as_member'){
	$('.LiVision').css('display', 'none');
	$('#labelMovil2').html('My career vision');
}
if(pathname[3] == 'resources_as_member_main'){
	$('.LiVision').css('display', 'none');
	$('#labelMovil2').html('Big picture');
}
if(pathname[3] == 'result'){
	$('.LiResults').css('display', 'none');
	$('#labelMovil2').html('Results');
}
if(pathname[2] == 'career'){
	$('.LiResults').css('display', 'none');
	$('#labelMovil2').html('Careers');
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

<script>
	var ident = "";
	var activate = "";
	if (screen.width<=320){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
	}else{
		if (screen.width<=800){
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=1, user-scalable=no">');
		}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
		}
	}
</script>
</head>
<body>

	<header>	
		<div class="" id="logo">
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
							echo "Carrer Decision Making Course";
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
					</div><span id="nombre_usuario" style="margin-right: 1em;">
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
							<img src="<?php echo $this->webroot.'img/dashboard/lapiz.svg';?>"/>
						</span>
						<span class="">
							<img src="<?php echo $this->webroot.'img/dashboard/gear.svg';?>"/>
						</span>
						<span class="">
							<a href="<?php echo $this->webroot.'logout';?>">
								<img src="<?php echo $this->webroot.'img/dashboard/Power.png';?>"/>
							</a>
						</span>
					</span>
					
					
				</div>
			</div>
				<div id="menu_user_mobile_icon"></div>
				<div class="popover fade bottom in menu_user_mobile" role="tooltip" id="popover798251">
				 	<div class="arrow" style="left: 122px; width:18px;"></div>
				 	<div class="popover-content" style="color:white; padding: 0px;float:left;padding: 0 10px;">
				 		<div id="menu_mobile_edit" class="items_menu_user"><img src="<?php echo $this->webroot.'img/dashboard/lapiz.svg';?>"/>Edit</div>
				 		<div id="menu_mobile_settings" class="items_menu_user" style="border-top: solid 1px #d6d6d6;border-bottom: solid 1px #d6d6d6;"><img src="<?php echo $this->webroot.'img/dashboard/gear.svg';?>"/>Settings</div>
				 		<div id="menu_mobile_log" class="items_menu_user"><img src="<?php echo $this->webroot.'img/dashboard/Power.png';?>"/>Log out</div>
				 	</div>
				</div>
		</div>
	</header>
	<div class="" id="dash_content">	
		<div id="menu-content-mobile" style="padding: 0; width: 100%; display:none;">
			<ul style="margin: 0 0 10px 5px !important;">
				<li>
					<div id="labelMovil" style="background-color:#F7F7F7; font-size: 20px; font-weight: 500; padding: 15px; padding-left: 20px; padding-right: 15px;" class="visible-xs"><span style="" id="labelMovil2"></span> <span class="showMenu" style="float:right;"> <img class="sMimage1" style="width: 25px; height: 15px; margin-top: 10px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"> </span>
					</div>
					<ul class="downMenu" style="display: none">
						<li class="LiDashboard">							
							<hr style="">						
							<a class="MD1" href="<?php echo $this->webroot.'dashboards/course'?>">
								Self-knowledge
							</a>
							<hr style="">
						</li>
						<li class="LiVision">
							<a class="MD2" href="<?php echo $this->webroot.'dashboards/resources_as_member'?>">
								How to choose
							</a>
							<hr style="">
						</li>
						<li class="LiResults">
							<a class="MD3" href="<?php echo $this->webroot.'dashboards/result'?>">
								Job hunting
							</a>
							<hr style="">
						</li>
						
					</ul>
				</li>
			</ul>
		</div>


		<div class="" id="menu-content" style="padding: 0;">
			<ul>
				<li>
					<div id="labelMovil" class="visible-xs" >Resources <span class="glyphicon glyphicon-menu-down" style="float:right;"></span></div>
					<ul>
						<li class="">							
							<a class="MD1" href="<?php echo $this->webroot.'dashboards/course'?>">
								Dashboard
							</a>
						</li>
						<li class="">
							<a class="MD2" href="<?php echo $this->webroot.'dashboards/resources_as_member'?>">
								My career vision
							</a>
						</li>
						<li class="">
							<a class="MD3" href="<?php echo $this->webroot.'dashboards/result'?>">
								Results
							</a>
						</li>
						<li class="">
							<a class="MD4">
								Resources
							</a>	
						</li> 
						<li class="">
							<a class="MD5" href="<?php echo $this->webroot.'career'?>">
								Careers
							</a>	
						</li>
						<li class="">
							<a class="MD6">
								Courses
							</a>	
						</li>
						<li class="">
							<a class="MD7">
								Jobs
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
		<div class="" id="info_content">

		<!-- <div class="" id="dash_content"> -->
			<div>
				<?php echo $this->Session->flash(); ?>				
				<?php echo $this->fetch('content'); ?>
			</div>			
		</div>
		<div style="clear: both;"></div>
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

	<script type="text/javascript">
	
	
$('#menu_user_mobile_icon').click(function(){
	if($('#popover798251').hasClass('display_block'))
		$('#popover798251').removeClass('display_block');
	else
		$('#popover798251').addClass('display_block');
});

$('#menu_mobile_edit').click(function(){
	window.location = "<?php echo $this->webroot.'editUser/'.$this->UserAuth->getUserId();?>";
});
$('#menu_mobile_settings').click(function(){
	window.location = "<?php echo $this->webroot.'notifications/'.$this->UserAuth->getUserId();?>";
});
$('#menu_mobile_log').click(function(){
	window.location = "<?php echo $this->webroot.'logout';?>";
});
	
</script>

</html>