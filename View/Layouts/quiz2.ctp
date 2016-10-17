<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->css('../library/bootstrap/css/bootstrap.css');?>
	<?php echo $this->Html->css('quiz-mentr-new.css');?>
	<?php echo $this->Html->script('jquery-1.11.2.js');?>
			<?php 	echo $this->Html->script('googleAnalytics.js'); ?>

<?php echo $this->Html->script('../library/jquery.scrollTo.js');?>
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
<body>
	<header>
		<div class="" id="quiz-header">
			<img id="imgForDesktop" src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			<img id="imgForMobile" src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			<p id="quiz-header-msg">
				Brought tou you by Mentr.it <br>
				The Educational Platform for an Inspired Succesful Living
			</p>
		</div>
	</header>
	<div id="">
		<?php echo $this->fetch('content'); ?>		
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
