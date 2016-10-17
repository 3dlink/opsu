<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
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
<style type="text/css">
@media (max-width: 1000px){
	#tenqiu {
	  width: 100%;
	  padding-right: 35px;
	  padding-left: 35px;
	  padding-bottom: 40px;
	}
}

@media (max-width: 750px){
.Footer {
  min-height: 470px !important;
  margin-left: -10px;
  width: initial;
}
.Footer > div {
  width: 100% !important;
}
.withBorder {
  border-bottom: 1px solid #B1B1B1;
  padding-bottom: 40px;
}
}

</style>
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
		<div id="thx_content">
			<div id="tenqiu">

				<h2>THANK YOU!</h2>

				<p>You took an excellent decision! Based on the testimonials of other mentors, mentoring can be one of the most rewarding things you´ll ever do.<br><br>
 We´ve sent you a welcome email with tips that we´ve prepared for you in order to get the most out of this activity. Once a mentee will request your advice, we will contact you by email for your acceptance. Please include <b>notifications@joinmentor.co</b> to your address book to make sure the requests don´t get lost in other folders. </p>

			</div>
		</div>
	</div>

<?php echo $this->element('footer_uno')?>
</body>
</html>
