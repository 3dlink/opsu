<html>
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
if(pathname[3] == 'profile'){
	$('.LiDashboard').css('display', 'none');
	$('#labelMovil2').html('My Profile');
}
if(pathname[3] == 'notifications'){
	$('.LiVision').css('display', 'none');
	$('#labelMovil2').html('Notifications');
}


	$('#menu-content-mobile').click(function(){
		if( $('.showMenu img').hasClass('sMimage1') ){
			$('.showMenu img').removeClass('sMimage1');
			$('.showMenu img').addClass('sMimage2');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/up-menu.png';?>");
			$('.downMenu').css('display', 'block');
			$('.lineHo').css('display', 'none');
		}
		else{
			$('.lineHo').css('display', 'block');
			$('.showMenu img').removeClass('sMimage2');
			$('.showMenu img').addClass('sMimage1');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/down-menu.png';?>");
			$('.downMenu').css('display', 'none');
		}
	})

})

</script>

</head>


<?php
	if($this->Session->read('UserAuth.User.image') != ""){ 
		echo "<script>$(document).ready(function(){
				$('#user_menu').css('backgroundImage', 'url(../webroot/files/".$this->Session->read('UserAuth.User.image').")');
				})
			 </script>";
	}
?>

<style type="text/css">

	header{
		width: 1280px;
	}

</style>

<body>

	<header>	
		<div class="" id="logo">
			<div>
				<div>
					<img src="<?php echo $this->webroot.'img/logo3.png';?>">					
				</div>	
			</div>			
		</div>
		<div class="" id="menu_user" style="background-repeat: no-repeat; background-size: cover;">
			<div id="menu_user-content">
				<div id="titulo_modulo" style="font-size:24px;">
					<?php 
						echo $user['User']['first_name'].' '.$user['User']['last_name'];
					?>
				</div>
			</div>
		</div>
	</header>
	<div class="" id="dash_content">	
		<div id="menu-content-mobile" style="  background-color: rgb(247, 247, 247); padding: 0; width: 100%; display:none;">
			<ul style="margin: 0 0 10px 5px !important;">
				<li style="padding-left:5px;">
					<div id="labelMovil" style="background-color:#F7F7F7; font-size: 20px; font-weight: 500; padding: 15px; padding-left: 5px; padding-right: 15px;" class="visible-xs"><span style="font-weight: bold; padding-left: 10px;" id="labelMovil2"></span> <span class="showMenu" style="float:right;"> <img class="sMimage1" style="width: 25px; height: 15px; margin-top: 10px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"> </span>
					</div>
					<div class="lineHo" style="border-bottom: 1px solid #d0d0d0; width: 305px; margin-left: 20px;"></div>
					<ul class="downMenu" style="display: none; padding-left: 10px; background-color: #E6E6E6; margin-left:-5px;">
						<li class="">							
							<a class="MD3" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/dashboard';?>">
								Dashboard
							</a>
						</li>
						<li class="LiDashboard">							
							<a class="MD1" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/profile/'.$this->UserAuth->getUserId();?>">
								My Profile
							</a>
						</li>
						<li class="LiVision">
							<a class="MD2" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career_program/notifications/'.$this->UserAuth->getUserId();?>">
								Notifications
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="" id="menu-content" style="height:575px; padding: 0;">
			<ul>
				<li>
					<div id="labelMovil" class="visible-xs" >Resources <span class="glyphicon glyphicon-menu-down" style="float:right;"></span></div>
					<ul>
						<li class="">							
							<a class="MD0" href="<?php echo $this->webroot.'career_program/dashboard';?>">
								Dashboard
							</a>
						</li>
						<li class="">							
							<a class="MD1" href="<?php echo $this->webroot.'career_program/profile/'.$this->UserAuth->getUserId();?>">
								My Profile
							</a>
						</li>
						<li class="">
							<a class="MD2" href="<?php echo $this->webroot.'career_program/notifications/'.$this->UserAuth->getUserId();?>">
								Notifications
							</a>
						</li>
					</ul>
				</li>
				
			</ul>
		</div>
		<div class="" id="info_content" style=" padding-left: 0px;  min-height: inherit;">

		<!-- <div class="" id="dash_content"> -->
			<div>
				<?php echo $this->Session->flash(); ?>				
				<?php echo $this->fetch('content'); ?>
			</div>			
		</div>
		<div style="clear: both;"></div>
	</div>


<?php echo $this->element('footer_uno')?>

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

$('#logo').click(function(){
	if( "<?php echo $this->UserAuth->getUserId();?>" != ""){
		// window.location = "<?php echo $this->webroot; ?>"+'career_program/dashboard';
	}
	else{
		// window.location = "<?php echo $this->webroot; ?>";
	}
})

</script>
</html>