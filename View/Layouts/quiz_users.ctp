<!DOCTYPE html>
<html style="height: 100%;">
<head>
	
<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<!--<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
	<?php
		echo $this->Html->meta('icon');

		//CSS
		/**/
		echo $this->Html->css('../library/bootstrap/css/bootstrap');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('Mentr_admin');
		echo $this->Html->css('jquery.gritter');
		echo $this->Html->css('../js/chosen_v1.3.0/chosen');
		echo $this->Html->css('../js/chosen_v1.3.0/chosen.min');
		echo $this->Html->css('../js/chosen_v1.3.0/docsupport/prism');
		echo $this->Html->css('quiz-mentr.css');
		echo $this->Html->css('quiz-mentr-3.css');
		//echo $this->Html->css('main');
		echo $this->Html->css(array('main'));
		echo $this->Html->script('commons');
		echo $this->Html->script('getp');
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
		echo $this->Html->script('../library/jquery.scrollTo.js');
		echo $this->Html->script('googleAnalytics.js');
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
		echo $this->Html->css('mentr-backend');
		echo $this->Html->css('mentr-backend_d');
	?>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<script type="text/javascript">ID_USUARIO='<?php echo $this->UserAuth->getUserId()?>';</script>
<script type="text/javascript">MINIMO=0;</script>
<script type="text/javascript">MAXIMO=0;</script>

<script>
if(screen.width<=320){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
		//alert('peque#o');
		MINIMO = 50;
		MAXIMO = 450;
}else{
	if (screen.width<=750){ //portrait tabla
		MINIMO = 0;
		MAXIMO = 250;
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1, user-scalable=no">');
	}else{//landscape tabla
		MINIMO = 00;
		MAXIMO = 250;
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.95, maximum-scale=1, user-scalable=yes">');
	}
}
	
</script>

<script>
	/*var ident = "";
	var activate = "";
	if (screen.width<=320){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
	}else{
		if (screen.width<=800){
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=1, user-scalable=no">');
		}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
		}
	}*/
</script>


<style type="text/css">
header #menu_user #menu_user-content #user_menu_content #user_menu_option {
  padding-top: 5px !important;
}
@media (max-width: 580px){
	#titulo_modulo{
		display: none !important;
	}
}

</style>

</head>


<body>


	<header style="">	
		<div id="header">
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
						<?php echo $modulo;?>
					</div>
					<div id="user_menu_content">
						<?php if($this->Session->read('UserAuth.User.image') != ""){ ?>
					<div id="user_menu" style="background-repeat: no-repeat; background-image : url('<?php echo $this->webroot."files/".$this->Session->read('UserAuth.User.image');?>') ; background-size: cover; ">
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
								<a class="menu_mobile_edit" style="cursor:pointer;">
									<img src="<?php echo $this->webroot.'img/dashboard/pencil.png';?>"/>
								</a>
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
	
		<?php echo $this->Session->flash(); ?>	
		<?php echo $this->fetch('content'); ?>

	</div>

	<script type="text/javascript">
	
	
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

	
</body>
</html>
<style>
	/*#user_menu{
		background-image: url("../webroot/files/<?php echo $this->Session->read('UserAuth.User.image')?>");
	}*/
</style>