<!DOCTYPE html>
<html style="height: 100%;">
<head>
	
<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'Mentor' ?>:
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
		echo $this->Html->css('quiz-mentr-new.css');
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
		<div class="" id="quiz-header" style="position:relative;">
			<img id="imgForDesktop" src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			<img id="imgForMobile" src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			<div id="titulo_friend">
				Feedback for <?php echo ucwords($member['User']['first_name']);?>
			</div>
		</div>
	</header>

	<div class="" id="dash_content">	
	
		<?php echo $this->Session->flash(); ?>	
		<?php echo $this->fetch('content'); ?>

	</div>
</body>
</html>