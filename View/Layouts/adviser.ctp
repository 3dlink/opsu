<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
			<?php 	echo $this->Html->script('googleAnalytics.js'); ?>

	<?php echo $this->Html->css('../library/bootstrap/css/bootstrap.css');?>
	<?php echo $this->Html->css('mentr-backend');
	echo $this->Html->css('quiz-adviser.css');
		?>
	<?php echo $this->Html->script('jquery-1.11.2.js');?>
<?php echo $this->Html->script('../library/jquery.scrollTo.js');
echo $this->Html->script('lib/bootstrap.min');
echo $this->Html->script('pekeUpload'); ?>
		
</head>
<script>
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
<body>
	<header>
		<div id="header">
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
						Apply to become a mentor
					</div>
				</div>
			</div>
		</div>
	</header>
	<div style="max-width: 1280px;display: block;margin: 0 auto;width:100%;margin-top: 100px;">
		<?php echo $this->fetch('content'); ?>		
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
