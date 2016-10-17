<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<link
	href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
	rel='stylesheet' type='text/css'>
	<?php
	echo $this->Html->css ( '../library/bootstrap/css/bootstrap.css' );
	echo $this->Html->css ( 'landing.css' );
	echo $this->Html->script ( 'jquery-1.11.2.js' );
	echo $this->Html->script ( '../library/jquery.scrollTo.js' );
	echo $this->Html->script ( 'lib/bootstrap.min' );
	echo $this->Html->script ( '../library/jquery.scrollTo.js' );
	?>
		<?php 	echo $this->Html->script('googleAnalytics.js'); ?>


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
<style>
@media ( max-width : 750px) {
	.descripcion2 {
		float: none !important;
		margin-top: 0 !important;
		margin-right: 0 !important;
		width: 100% !important;
		font-size: 3vw !important;
	}
	#pantalla2 {
		padding-top: 12px !important;
	}
	.boton_content h1 {
		font-size: 3.9vw;
	}
	.btn_abajo {
		margin-top: 20px;
	}
	.video {
		display: none;
	}
	.video2 {
		display: block !important;
	}
	.btn_form {
		width: 270px;
		height: 60px;
		font-size: 18px;
	}
	#fondo {
		background-position-y: 0px !important;
	}
	#mini_letras {
		padding-left: 24px;
		font-size: 14px;
		text-align: center;
	}
	.check_1 {
		padding-right: 35px;
	}
	#form {
		padding-top: 16px !important;
	}
}

#fondo {
	background: url('../webroot/img/lading page advisers.png') no-repeat
		center top !important;
	height: 641px !important;
	background-size: 100% 128% !important;
	background-position-y: -28px !important;
	background-position-y: 0px !important;
}

@media ( max-width : 520px) {
	.descripcion2 {
		font-size: 4vw !important;
	}
	
	.boton_content h1 {
		font-size: 4vw;
	}
	#fondo {
		height: 875px !important;
	}
	#pantalla_movil {
		height: 580px !important;
	}
	.check_1 {
		padding-right: 35px;
	}
	#form {
		padding-top: 16px !important;
	}
	#mini_letras {
		padding-left: 0;
		text-align: center;
	}
}

@media ( max-width : 370px) {

	.boton_content h1 {
		font-size: 5vw;
	}
	.descripcion2 {
		font-size: 4vw !important;
	}
	#pantalla_movil {
		height: 487px !important;
	}
	#movil_btn_form {
		width: 100%;
	}
	.btn_abajo {
		width: 100%;
	}
	#form {
		padding-top: 16px !important;
		font-size: 17px !important;
	}
	.check_1 {
		padding-right: 35px;
	}
	
	#mini_letras {
		padding-left: 0;
		text-align: center;
	}
}
</style>
<body>
	<div id="fondo">
		<div id="degradado">
			<header>
				<div>
					<div id="logo" style="cursor:pointer;">
						<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
					</div>
					<p>
						Brought tou you by Mentr.it <br> The Educational Platform for an
						Inspired Succesful Living
					</p>
				</div>
			</header>

			<section id="pantalla1">
				<div id="titulo">
					Guide young people in their<br> pursuit for a fullfilling career
					<div id="arrow"></div>
				</div>

				<div id="subtitulo"></div>
				<br>
				<div id="formulario" style="height: 501px; margin-top: -60px;">
					<div class="titulo_formulario">

						Take time to pass on advice to the next generation
						<div id="triangulo"></div>
					</div>


					<div id="form" style="height: 45%;">

						<div id="check_1" class="check_1"
							style="padding-left: 44px; padding-bottom: 26px;">

							<img class="value1"
								src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
							<img class="value1"
								src="<?php echo $this->webroot;?>img/dashboard/check2.png"
								style="width: 20px; display: none;">
							<p style="display: inline; padding-left: 14px;">live and work in
								the US</p>
						</div>
						<div id="check_2"
							style="padding-left: 44px; padding-bottom: 19px;">
							<img class="value1"
								src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
							<img class="value1"
								src="<?php echo $this->webroot;?>img/dashboard/check2.png"
								style="width: 20px; display: none;">
							<p style="display: inline; padding-left: 14px;">I have 7+ years
								experience</p>
							<p style="padding-left: 47px;">in a certain industry</p>
						</div>

						<button id="btn_form" type="button" class="btn_form">
							Apply to<br> Become an Adviser
						</button>

						<span id="mini_letras"
							style="padding-left: 60px; text-align: center;">Choose how much
							time you devote <br>from as little as 1h per month
						</span>

					</div>
				</div>
				<div class="video"
					style="background-image: url(''); font-size: 20px; font-weight: 300;">
					We´ve all been lost while having to take career decisions. Remember
					when <br>you were young and had to make those BIG decisions on what
					college, <br> major or career to pursue? <br> <br>At MENTOR. we
					help young people to take better career decisions. Our <br> Career
					Decision Making Program guide contains a series of exercises and <br>
					self assessment that help them understand themselves better, define
					a <br> career vision, take better decisions and explore
					occupations.

				</div>
				<div class="video2" style="display: none;"
					style="background-image: url(''); font-size: 14px; font-weight: 300;">
					We´ve all been lost while having to take career decisions. Remem-<br>ber
					when you were young and had to make those BIG decisions on what
					college, major or career to pursue? <br> <br>At MENTOR. we help
					young people to take better career decisions. Our <br> Career
					Decision Making Program guide contains a series of exercises and <br>
					self assessment that help them understand themselves better, define
					a <br> career vision, take better decisions and explore
					occupations. <br> <br> Flollowing this process they have the
					possibility to get the in con- <br> tact with experienced
					professionals like you , who can advise them regarding specific
					occupations that they been through. <br> <br> If your story
					includes 7+ years exprience in a certain career in- <br> dustry we
					invite you to become an adviser and help us help the young
					generation into archieving successful lives

				</div>
				<div id="comentario1" class="comentario" style="margin-top: -165px;">
					<div class="user_avatar"></div>
					<div class="comentario_content">
						<h2>"Si no fuera por Mentor hoy no estaría en el Barça"</h2>
						<h4>Andrés Iniesta</h4>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section id="pantalla_movil" style="height: 456px;">
		<div id="formulario_2">
			<div class="titulo_formulario">
				Take time to pass on advice to the next generation
				<div id="triangulo"></div>
			</div>



			<div id="form" style="height: 45%;">


				<div id="check_1" class="check_1"
					style="padding-left: 44px; padding-bottom: 36px;">
					<img class="value1"
						src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
					live and work in the US
				</div>
				<div id="check_2" style="padding-left: 44px; padding-bottom: 45px;">
					<img class="value1"
						src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
					I have 7+ years experience in a certain industry
				</div>

				<!-- <div> -->
				<button id="movil_btn_form" type="button" class="btn_form">Apply to
					Become an Adviser</button>

				<div id="mini_letras">Choose how much time you devote from as little
					as 1h per month</div>
			</div>
			<!-- </div> -->
		</div>
	</section>
	<section id="comentario1_movil">
		<div class="comentario">
			<div class="user_avatar"></div>
			<div class="comentario_content">
				<h2>"Si no fuera por Mentor hoy no estaría en el Barça"</h2>
				<h4>Andrés Iniesta</h4>
			</div>
		</div>
	</section>

	<section id="pantalla2">



		<div id="descripcion" class="descripcion2">
			<h3>What You’ll do</h3>
			We acknoledge that each advisory relationship is different but we do
			ask you to:
			<ul>
				<li>Read and respond to one email a week from your advisees</li>
				<li>Develop a supportive advising relationship that will last for
					1-2 years with the advisee you choose to advise</li>
			</ul>
		</div>
		<div id="descripcion" class="descripcion2">
			<h3>Who Are The Advisees</h3>
			The members of MENTOR. are typically young people between 17 and 26
			years old, living in the US. They come from all types of backgorunds
			and each has unique difficulties and situations. We strive to make
			the best connections between the adviser and advisee based on their
			work values, location, interests and occupations.

		</div>
		<div id="descripcion" class="descripcion2"
			style="float: right; width: 350px; font-size: 14px; margin-top: -341px; margin-right: 27px;">
			<h3><a href="<?php echo $this->webroot;?>about-us">About Mentor.</a></h3>
			At MENTOR. we believe that people should be able to pursue fulfilling
			careers no matter what their background might be. Part of our
			solution is to help young people to take better career decisions. <br>
			<br> Our Career Decision Making Program guide contains a series of
			exercises and self assessments that help them understand themselves
			better, define a career vision, take better decisions and explore
			occupations.<br> <br> We acknoledge that career decision is a complex
			matter with many unknowns that are in continual dynamism.

		</div>





		<br> <br> <br>


		<div id="boton" style="height: 400px;">
			<div class="boton_content" style="padding: 57px 0 35px 0;">
				<h1 style="font-size: 24px;">
					You done well. Give back some of what you learned<br> so the young
					generation achieve it as well.
				</h1>
				<div id="form"
					style="padding-top: 43px; color: #51284f; font-weight: 300; font-size: 20px;">
					<div id="check_1" class="check_1"
						style="width: 50%; display: inline;">
						<img class="value1"
							src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png"
							style="">

						<p style="display: inline; font-size: 16px; padding-left: 11px;">live
							and work in the US</p>
					</div>
					<div id="check_2"
						style="width: 50%; display: inline; padding-left: 46px;">
						<img class="value1"
							src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png"
							style="">
						<p style="display: inline; font-size: 16px; padding-left: 11px;">I
							have 7+ years experience in a certain industry</p>
					</div>
				</div>
				<button type="button" class="btn_abajo btn_form"
					style="width: 320px; height: 60px; font-size: 20px;">Apply to
					Become an Adviser</button>
				<br>
				<div id="mini_letras_2">
					Choose how much time you devote<br> from as little as 1h per month
				</div>
			</div>
		</div>



	</section>





	<section id="ultima_seccion_movil" style="height: 400px;">
		<div class="boton_content">
			<h1>
				You done well. Give back some of what you <br>learned so the young
				generation<br> achieve it as well.
			</h1>
			<div id="form"
				style="padding-top: 43px; color: #51284f; font-weight: 300; font-size: 18px;">
				<div id="check_1" class="check_1"
					style="padding-left: 10px; padding-bottom: 18px;">
					<img class="value1"
						src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
					<p style="display: inline;">live and work in the US</p>
				</div>
				<div id="check_2" style="padding-left: 6px;">
					<img class="value1"
						src="<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png">
					I have 7+ years experience <br>in a certain industry
				</div>
			</div>
			<button type="button" class="btn_form btn_abajo" style="">Apply to
				Become an Adviser</button>
			<div id="mini_letras_2">
				Choose how much time you devote<br> from as little as 1h per month
			</div>

		</div>
	</section>


<?php echo $this->element('footer_uno')?>


<!--
	<footer class="Footer"
		style="float: left;  background-color: #333333; padding-top: 35px; padding-bottom: 45px; padding-right: 50px; padding-left: 50px;">
		<div style="border-bottom: 1px solid #B1B1B1; padding-bottom: 20px;">
			<img style="width: 140px; height: 25px;"
				src="<?php echo $this->webroot.'img/logo3.png';?>">
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div><a href="<?php echo $this->webroot;?>aboutus">About Mentor.</a></div>
			<div>Affiliates</div>
			<div>Become an specific career adviser</div>
			<div><a href="<?php echo $this->webroot;?>contactus">Feedback, Ideas & Help</a></div>
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright &copy; 2015 Joinmentor.com</div>
			<div>
				<a href="<?php echo $this->webroot;?>start/legalPage">Privacy Policy</a>
			</div>
			<div>
				<a href="<?php echo $this->webroot;?>start/legalPage">Terms of Use</a>
			</div>
		</div>
		<div
			style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
			<div>
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="<?php echo $this->webroot;?>start/legalPage">here</a>.
			</div>
		</div>
	</footer>

-->



	<script>

	$('#btn_form').click(function() {
		window.location.href=WEBROOT+'assessments/adviser';
	});

		var porcentaje = 0;
		$(window).resize(function() { //para madu
		  if(($(window).width() < 1300)  &&  ($(window).width() > 750)){
		  	porcentaje = 200 - ((($(window).width() - 750)*10)/55);
		  	$("#fondo").css("background-size",porcentaje+"% "+porcentaje+"%");
		  }
		});
	
		porcentaje = 0;
		$(document).ready(function(){ //para que funcione
			if(($(window).width() < 1300)  &&  ($(window).width() > 750)){
		  	porcentaje = 200 - ((($(window).width() - 750)*10)/55);
		  	$("#fondo").css("background-size",porcentaje+"% "+porcentaje+"%");
		  }
		});
	

	$('body').click(function(){
		$('.down').each(function(k,v){
			if($(this).parent().hasClass('open')){
				$(this).find('img').attr('src', WEBROOT+"img/down-menu.png");
			}
		}) 
	});

	$('.down').click(function(){
		if($(this).find('img').attr('src') == WEBROOT+"img/down-menu.png"){
			$(this).find('img').attr('src', WEBROOT+"img/up-menu.png");
		}
		else{
			$(this).find('img').attr('src', WEBROOT+"img/down-menu.png");
		}
	});

	$('.educa').click(function(){
		var id = $(this).attr('id');
		$('.educaV').val($(this).html());
		$('.educaV').data('educa', id);
		$('body').click();
	});

	$('.state').click(function(){
		var id = $(this).attr('id');
		$('.states').val($(this).html());
		$('.states').data('state', id);
		$('body').click();
	});

	$('.se').click(function(e){
		return false;
	});

	$('.btn_abajo').click(function(){
		if($(window).width() > 750){
			$('body').scrollTo(200,900);
		}else{
			$('body').scrollTo(450,900);
		}
	});


$('.value1').click(function(){
		
		var clase = $(this).attr('class');
		if($(this).attr('src') == "<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png"){
			$(this).attr('src', "<?php echo $this->webroot;?>img/dashboard/check2.png");
			$('.'+clase+'s').val('1');
		}
		else{
			$(this).attr('src', "<?php echo $this->webroot;?>img/dashboard/Rectangulo2020.png");
			$('.'+clase+'s').val('0');
		}
	})



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
