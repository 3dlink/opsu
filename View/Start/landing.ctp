<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MENTOR. | Career Decision-Making Program Registration</title>

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
<style>
@media ( max-width : 750px) {	
.Footer {
	    width: 103% !important;
		padding: 35px 92px 45px 20px !important;
	}
}

@media ( max-width : 950px) {	
.Footer {
	    width: 103% !important;
		padding: 35px 92px 45px 40px !important;
	}
}
</style>
</head>



<script>
	if (screen.width<=320){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
	}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
	}
</script>

<body>

<div id="super_div">
	<div id="fondo">
		<div id="degradado">
			<header>
				<div>
					<div id="logo" style="cursor:pointer;">
						<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
					</div>
					<p>
						Brought tou you by MENTOR. <br> The Learning Platform for an
						Inspired Succesful Living
					</p>
				</div>
			</header>

			<section id="pantalla1">
				<div id="titulo">
					The Career Decision-Making Program
					<div id="arrow"></div>
				</div>
				<div id="subtitulo">for Students & Young Adults</div>
				<div id="formulario">
					<div class="titulo_formulario">
						Make sound, <br>informed decisions about<br> your career direction
						<div id="triangulo"></div>
					</div>

					<div class="subtitulo_formulario">Register for this complete
						program that will guide you towards achieving an inspiring
						successful career.</div>

					<div id="form" style="height: 45%;">

						<input id="name" class="input_form" placeholder="Name"> <input
							id="surname" class="input_form" placeholder="Surname"> <input
							id="email" class="input_form" type="email" placeholder="Email"> <input
							id="password" class="input_form" type="password"
							placeholder="Password">

						<div class="selects">
							<input id="education" class="inI selt educaV input_form"
								style="float: initial;" readonly data-educa="0"
								placeholder="Education">
							<div class="btn-group doa" style="">
								<span
									class="spanEduca down flagRow dropdown-toggle btn_dropdown"
									data-toggle="dropdown" tabindex="-1"> <img style="width: 20px;"
									src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable">
				        	<?php
													
foreach ( $education as $key => $value ) {
														echo '<li><a id="' . $value ['Education'] ['id'] . '" class="educa se" href="#">' . $value ['Education'] ['description'] . '</a></li>';
													}
													?>
					      </ul>
							</div>
						</div>

						<div class="selects">
							<input id="state" class="inI selt states input_form"
								style="float: initial;" readonly data-educa="0"
								placeholder="State">
							<div class="btn-group doa" style="">
								<span
									class="spanEduca down flagRow dropdown-toggle btn_dropdown"
									data-toggle="dropdown" tabindex="-1"> <img style="width: 20px;"
									src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable">
				        	<?php
													
foreach ( $states as $key => $value ) {
														echo '<li><a id="' . $value ['State'] ['id'] . '" class="state se" href="#">' . $value ['State'] ['name'] . '</a></li>';
													}
													?>
					      </ul>
							</div>
						</div>

						<button id="btn_form" type="button" class="btn_form">Start FREE
							Trial</button>

						<span id="mini_letras">Less than 5 minutes. No cost. Just awesome</span>

					</div>
				</div>
				<div class="video"></div>
			</section>
				<div id="comentario1" class="comentario">
					<div style="width:1280px;margin:0 auto;">
						<div class="user_avatar"></div>
						<div class="comentario_content" style="width: 45%;">
							<h2>"The course has been great - before taking it, I was confused, no direction or actually too many directions. I would rate the course 5 out of 5"</h2>
							<h4>Sylvia Nelson</h4>
						</div>
					</div>
				</div>
		</div>
	</div>

	<section id="pantalla_movil">
		<div id="formulario_2">
			<div class="titulo_formulario">
				Make sound, informed decisions about your career direction
				<div id="triangulo"></div>
			</div>

			<div class="subtitulo_formulario">Register for this complete program
				that will guide you towards achieving an inspiring successful
				career.</div>

			<div id="form" style="height: 45%;">

				<input id="movil_name" class="input_form" placeholder="Name"> <input
					id="movil_surname" class="input_form" placeholder="Surname"> <input
					id="movil_email" class="input_form" type="email"
					placeholder="Email"> <input id="movil_password" class="input_form"
					type="password" placeholder="Password">

				<div class="selects">
					<input id="movil_education" class="inI selt educaV input_form"
						style="float: initial;" readonly data-educa="0"
						placeholder="Education">
					<div class="btn-group doa" style="">
						<span class="spanEduca down flagRow dropdown-toggle btn_dropdown"
							data-toggle="dropdown" tabindex="-1"> <img style="width: 20px;"
							src="<?php echo $this->webroot.'img/down-menu.png';?>">
						</span>
						<ul class="dropdown-menu menu_desplegable">
				        	<?php
													
foreach ( $education as $key => $value ) {
														echo '<li><a id="' . $value ['Education'] ['id'] . '" class="educa se" href="#">' . $value ['Education'] ['description'] . '</a></li>';
													}
													?>
					      </ul>
					</div>
				</div>

				<div class="selects">
					<input id="movil_state" class="inI selt states input_form"
						style="float: initial;" readonly data-educa="0"
						placeholder="State">
					<div class="btn-group doa" style="">
						<span class="spanEduca down flagRow dropdown-toggle btn_dropdown"
							data-toggle="dropdown" tabindex="-1"> <img style="width: 20px;"
							src="<?php echo $this->webroot.'img/down-menu.png';?>">
						</span>
						<ul class="dropdown-menu menu_desplegable">
				        	<?php
													
foreach ( $states as $key => $value ) {
														echo '<li><a id="' . $value ['State'] ['id'] . '" class="state se" href="#">' . $value ['State'] ['name'] . '</a></li>';
													}
													?>
					      </ul>
					</div>
				</div>

				<!-- <div> -->
				<button id="movil_btn_form" type="button" class="btn_form">Start
					FREE Trial</button>

				<div id="mini_letras">Less than 5 minutes. No cost. Just awesome</div>
			</div>
			<!-- </div> -->
		</div>
	</section>
	<section id="comentario1_movil">
		<div class="comentario">
			<div style="padding:0 30px;">
				<div class="user_avatar"></div>
				<div class="comentario_content">
					<p class="p_comment">"Si no fuera por Mentor hoy no estaría en el Barça" <span class="span_comment">Andrés Iniesta</span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="pantalla2">
		<div id="descripcion">Career Decision-Making is a complex problem with
			multiple correct answers. It’s an ongoing process whose outcome can
			be maximised if you know good enought yourself and the possible
			occupations, have a clear career vision and build the correct skills.
			Mentor’s complete program will help you:</div>

		<div id="puntos_container">
			<div id="punto_1" class="puntos">
				<div class="numero">1</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Create Your Career Vision</h2>
					<h4 class="subtitulo_punto">Through guided exercises that are
						commonly used in professional career advising counselling.</h4>
				</div>
			</div>
			<div id="punto_2_" class="puntos">
				<div class="numero">2</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Know Yourself</h2>
					<h4 class="subtitulo_punto">Understand your interests, skills,
						relevant personali- ty traits, personal and work values.</h4>
				</div>
			</div>
			<div id="punto_3_" class="puntos">
				<div class="numero" style="margin-top: 20px;">3</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Improve Your Decision-Making</h2>
					<h4 class="subtitulo_punto">Learn how to avoid common mind biases
						and uncover blindspots about yourself by finding out how your
						peers rate a series of your traits.</h4>
				</div>
			</div>
			<div id="punto_vacio" class="puntos">
				<div style="margin-left: 75px;"></div>
			</div>
			<div id="punto_2" class="puntos">
				<div class="numero">2</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Know Yourself</h2>
					<h4 class="subtitulo_punto">Understand your interests, skills,
						relevant personali- ty traits, personal and work values.</h4>
				</div>
			</div>
			<div id="punto_4" class="puntos">
				<div class="numero" style="margin-top: 20px;">4</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">
						Find Your Compatibility With <br>500+ Careers
					</h2>
					<h4 class="subtitulo_punto">Exploring existing careers, analyze
						their future out- looks and check how good of a good fit are for
						your profile.</h4>
				</div>
			</div>
			<div id="punto_5_" class="puntos">
				<div class="numero" style="margin-top: 20px;">5</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Receive Advice From Experienced
						Professionals</h2>
					<h4 class="subtitulo_punto">Connect with professionals with 10+
						years of expe- rience in the careers you shortlist for yourself.</h4>
				</div>
			</div>
			<div id="punto_3" class="puntos">
				<div class="numero">3</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Improve Your Decision-Making</h2>
					<h4 class="subtitulo_punto">Learn how to avoid common mind biases
						and uncov- er blindspots about yourself by finding out how your
						peers rate a series of your traits.</h4>
				</div>
			</div>

			<div id="punto_5" class="puntos">
				<div class="numero" style="margin-top: 20px;">5</div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Receive Advice From Experienced
						Professionals</h2>
					<h4 class="subtitulo_punto">Connect with professionals with 10+
						years of expe- rience in the careers you shortlist for yourself.</h4>
				</div>
			</div>
		</div>
	</section>

	

		<div id="comentario_2" class="comentario" style="margin-top: 10px;">
			<div class="comentario_centrado">
				<div class="user_avatar" style="margin-left: 0;"></div>
				<div class="comentario_content"
					style="width: 488px; margin-top: 10px;">
					<h2>“The most complete program I’ve came accross. It helped me get
						out of my indecision really quick”</h2>
					<h4>Angela Merkel</h4>
				</div>
			</div>
		</div>



<section class="pantalla2" style="  padding-top: 0;">
		<div id="items_container">

			<div id="punto_1_2" class="puntos_2">
				<div class="graph"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">State Of The Art Career Matching Algorithm</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_4_2" class="puntos_2">
				<div class="List"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Professional Career Assessments</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_2_2" class="puntos_2">
				<div class="openbook"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Excellent Career Guidance Information</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_5_2" class="puntos_2">
				<div class="Friends"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">
						Personalised Career Insights <br>From Experienced Professionals
					</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
		</div>
	</section>

		<div id="boton">
			<div class="boton_content">
				<h1>The Career Decision-Making Program is the perfect guidance for
					your decision process</h1>
				<button type="button" class="btn_abajo btn_form">Start FREE Trial</button>
				<div id="mini_letras_2" style="font-size: 16px; font-weight: 300;">Complete
					it at your own rithm.</div>
			</div>
		</div>

	<section id="comentario2_movil">
		<div class="comentario">
			<div style="padding:0 30px;">
				<div class="user_avatar"></div>
				<div class="comentario_content" style="padding-top: 20px;">
					<p class="p_comment">“The most complete program I’ve came accross. It helped me get	out of my indecision really quick” <span class="span_comment">Angela Merkel</span></p>
				</div>
			</div>
		</div>
	</section>

	<section id="penultima_seccion_movil">
		<div id="items_container_2">

			<div id="punto_1_2" class="puntos puntos_2">
				<div class="graph"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">State Of The Art Career Matching Algorithm</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_4_2" class="puntos puntos_2">
				<div class="List"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Professional Career Assessments</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_2_2" class="puntos puntos_2">
				<div class="openbook"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Excellent Career Guidance Information</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
			<div id="punto_5_2" class="puntos puntos_2">
				<div class="Friends"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">
						Personalised Career Insights <br>From Experienced Professionals
					</h2>
					<h4 class="subtitulo_punto">Lorem ipsum dolor sit amet,
						consectetuer adipiscing elit. Ut quis mauris eget ipsum varius
						dictum. In lacus nisi, facilisis eu, pretium sed, dapibus et,
						tellus.</h4>
				</div>
			</div>
		</div>
	</section>

	<section id="ultima_seccion_movil">
		<div class="boton_content">
			<h1>The Career Decision-Making Program is the perfect guidance for
				your decision process</h1>
			<button type="button" class="btn_form btn_abajo">Start FREE Trial</button>
			<div id="mini_letras_2" style="font-size: 16px; font-weight: 300;">Complete
				it at your own rithm.</div>
		</div>
	</section>

<?php echo $this->element('footer_uno')?>

<!--

	<footer class="Footer"
		style="float: left; min-height: 252px; background-color: #333333; padding-top: 35px; padding-right: 50px; padding-left: 50px;   padding-bottom: 45px;">
		<div style="border-bottom: 1px solid #B1B1B1; padding-bottom: 20px;">
			<img style="width: 140px; height: 25px;"
				src="<?php echo $this->webroot.'img/logo3.png';?>">
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div>
				<a href="<?php echo $this->webroot;?>aboutus">About Mentor.</a>
			</div>
			<div>Affiliates</div>
			<div>Become an specific career adviser</div>
			<div>
				<a href="<?php echo $this->webroot;?>contactus">Feedback, Ideas &
					Help</a>
			</div>
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
			<div style="font-size : 16px;">
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="<?php echo $this->webroot;?>start/legalPage">here</a>.
			</div>
		</div>
	</footer>


-->

	<script>

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

	$('#btn_form').click(function(){

		var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		
		email = $('#email').val();
		if($('#name').val() != "" && $('#surname').val() != "" && email != "" && $('#password').val() != "" && $('#education').val() != "" && $('#state').val() != ""){

			if(!pattern.test(email)){
				alert('Not a valid e-mail address');
				return false;
			}else{

				var usuario = new Object();
				usuario['first_name'] = $('#name').val();
				usuario['last_name'] = $('#surname').val();
				usuario['email'] = email;
				usuario['password'] = $('#password').val();
				usuario['education'] = $('#education').val();
				usuario['state'] = $('#state').val();
				$.post(WEBROOT+'start/addUser',{usuario:usuario},function(data){
					if(data == 1){

						var login = {
							email : email,
							password : usuario['password']
						}

							$.ajax({
							url:WEBROOT+'/login',
							type: 'post',
							data: {data:login},
							dataType: 'json',
							success: function(data){
								if(data == 1){
									window.location.replace(WEBROOT+'career_program/dashboard');
								}
							},
							error: function(a,e,i){}
						});
					}else{
						if(data == -1){
							alert('Campaign');
						}else{
							alert('User already registered');
						}
					}
				},'json');

			}

		}else{
			alert('Please complete all fields');
		}

	});

	$('#movil_btn_form').click(function(){

		var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		
		email = $('#movil_email').val();
		if($('#movil_name').val() != "" && $('#movil_surname').val() != "" && email != "" && $('#movil_password').val() != "" && $('#movil_education').val() != "" && $('#movil_state').val() != ""){

			if(!pattern.test(email)){
				alert('Not a valid e-mail address');
				return false;
			}else{

				var usuario = new Object();
				usuario['first_name'] = $('#movil_name').val();
				usuario['last_name'] = $('#movil_surname').val();
				usuario['email'] = email;
				usuario['password'] = $('#movil_password').val();
				usuario['education'] = $('#movil_education').val();
				usuario['state'] = $('#movil_state').val();

				$.post(WEBROOT+'start/addUser',{usuario:usuario},function(data){
					if(data == 1){

						var login = {
							email : email,
							password : usuario['password']
						}

							$.ajax({
							url:WEBROOT+'/login',
							type: 'post',
							data: {data:login},
							dataType: 'json',
							success: function(data){
								if(data == 1){
									window.location.replace(WEBROOT+'career_program/dashboard');
								}
							},
							error: function(a,e,i){}
						});
					}else{
						if(data == -1){
							alert('Campaign');
						}else{
							alert('User already registered');
						}
					}
				},'json');

			}

		}else{
			alert('Please complete all fields');
		}

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

</div>
</body>
</html>
