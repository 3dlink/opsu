<html lang="en"><script async="" src="//www.google-analytics.com/analytics.js"></script><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head>
<script type="text/javascript">WEBROOT="<?php echo $this->webroot;?>";</script>


<meta charset="UTF-8">
<title>MENTOR. | Career Decision-Making Program Registration</title>

<!-- <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'> -->
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
<!-- <link rel="stylesheet" type="text/css" href="/css/../library/bootstrap/css/bootstrap.css"> -->
<?php 
		echo $this->Html->css('../library/bootstrap/css/bootstrap.css');
		echo $this->Html->css('landingDream.css');
		echo $this->Html->css('design2.css');

		echo $this->Html->script('jquery-1.11.2.js');
	 	echo $this->Html->script('../library/jquery.scrollTo.js');
	 	echo $this->Html->script('lib/bootstrap.min.js');
	 	echo $this->Html->script('googleAnalytics.js');


?>
<!-- <script type="text/javascript" src="/js/jquery-1.11.2.js"></script><style type="text/css"></style><script type="text/javascript" src="/js/../library/jquery.scrollTo.js"></script><script type="text/javascript" src="/js/lib/bootstrap.min.js"></script>		<script type="text/javascript" src="/js/googleAnalytics.js"></script> -->

<script>
	var ident = "";
	var activate = "";
	if (screen.width<=320){
	}else{
		if (screen.width<=800){
		}else{
		}
	}
</script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<script>
	if (screen.width<=320){
		// $('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
	}else{
			// $('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
	}
</script>

<body>


<div id="super_div">

	<div id="fondoa" class="fondo1" style="height: 820px; display: none;"></div>
	<div id="fondob" class="fondo1" style="height: 820px; opacity: 1;"></div>
	<div id="fondo" style="display: block;">
		<div id="degradado">
			<header>
				<div>
					<div id="logo" style="cursor:pointer;">
						<img src="<?php echo $this->webroot.'img/dream/LogoMetr4.png';?>">
					</div>
				</div>
			</header>

			<section id="pantalla1">
				<div id="titulo">
					Smart Guide To Your Dream Career
					<div id="arrow"></div>
				</div>
				<div id="subtitulo">for Students &amp; Young Adults</div>
				<div id="formulario">
					<div class="titulo_formulario">
						<span class="formo750">Find the career you´ll love, with the pay you deserve</span>
						<span class="formu750">Find the career you´ll love, with the pay you deserve</span>
						<div id="triangulo"></div>
					</div>

					<!-- <div class="subtitulo_formulario">Register for this complete
						program, that will guide you towards achieving an inspiring
						successful career.</div> -->

					<div id="form" style="height: 45%;">
						<?php 
							if(isset($_GET['source'])){
						?>
							<input type="hidden" id="source" value="<?php echo $_GET['source'];?>">
						<?php
							}else{
						?>
							<input type="hidden" id="source" value="">
						<?php } ?>
						<input id="name" class="input_form" placeholder="Name"> 
						<input id="surname" class="input_form" placeholder="Surname"> 
						
						<div class="selects one formComming">
							<input id="state" class="inI selt states input_form" style="float: initial;" readonly="" data-educa="0" placeholder="State">
							<div class="btn-group doa" style="">
								<span class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
								</span>
								<ul class="dropdown-menu menu_desplegable" id="ulStates">
					        		<li><a id="1" class="state se" href="#">Outside US</a></li><li><a id="2" class="state se" href="#">Alabama</a></li><li><a id="3" class="state se" href="#">Alaska</a></li><li><a id="4" class="state se" href="#">Arizona</a></li><li><a id="5" class="state se" href="#">Arkansas</a></li><li><a id="6" class="state se" href="#">California</a></li><li><a id="7" class="state se" href="#">Colorado</a></li><li><a id="8" class="state se" href="#">Connecticut</a></li><li><a id="9" class="state se" href="#">Delaware</a></li><li><a id="10" class="state se" href="#">District of Columbia</a></li><li><a id="11" class="state se" href="#">Florida</a></li><li><a id="12" class="state se" href="#">Georgia</a></li><li><a id="13" class="state se" href="#">Hawaii</a></li><li><a id="14" class="state se" href="#">Idaho</a></li><li><a id="15" class="state se" href="#">Illinois</a></li><li><a id="16" class="state se" href="#">Indiana</a></li><li><a id="17" class="state se" href="#">Iowa</a></li><li><a id="18" class="state se" href="#">Kansas</a></li><li><a id="19" class="state se" href="#">Kentucky</a></li><li><a id="20" class="state se" href="#">Louisiana</a></li><li><a id="21" class="state se" href="#">Maine</a></li><li><a id="22" class="state se" href="#">Maryland</a></li><li><a id="23" class="state se" href="#">Massachusetts</a></li><li><a id="24" class="state se" href="#">Michigan</a></li><li><a id="25" class="state se" href="#">Minnesota</a></li><li><a id="26" class="state se" href="#">Mississippi</a></li><li><a id="27" class="state se" href="#">Missouri</a></li><li><a id="28" class="state se" href="#">Montana</a></li><li><a id="29" class="state se" href="#">Nebraska</a></li><li><a id="30" class="state se" href="#">Nevada</a></li><li><a id="31" class="state se" href="#">New Hampshire</a></li><li><a id="32" class="state se" href="#">New Jersey</a></li><li><a id="33" class="state se" href="#">New Mexico</a></li><li><a id="34" class="state se" href="#">New York</a></li><li><a id="35" class="state se" href="#">North Carolina</a></li><li><a id="36" class="state se" href="#">North Dakota</a></li><li><a id="37" class="state se" href="#">Ohio</a></li><li><a id="38" class="state se" href="#">Oklahoma</a></li><li><a id="39" class="state se" href="#">Oregon</a></li><li><a id="40" class="state se" href="#">Pennsylvania</a></li><li><a id="41" class="state se" href="#">Rhode Island</a></li><li><a id="42" class="state se" href="#">South Carolina</a></li><li><a id="43" class="state se" href="#">South Dakota</a></li><li><a id="44" class="state se" href="#">Tennessee</a></li><li><a id="45" class="state se" href="#">Texas</a></li><li><a id="46" class="state se" href="#">Utah</a></li><li><a id="47" class="state se" href="#">Vermont</a></li><li><a id="48" class="state se" href="#">Virginia</a></li><li><a id="49" class="state se" href="#">Washington</a></li><li><a id="50" class="state se" href="#">West Virginia</a></li><li><a id="51" class="state se" href="#">Wisconsin</a></li><li><a id="52" class="state se" href="#">Wyoming</a></li><li><a id="53" class="state se" href="#">Guam</a></li><li><a id="54" class="state se" href="#">Puerto Rico</a></li><li><a id="55" class="state se" href="#">Virgin Islands</a></li>					      
					        	</ul>
							</div>
						</div>

						<input id="email" class="input_form" type="email" placeholder="Email"> 
						<input id="password" class="input_form" type="password" placeholder="Password">

						<div class="selects one formComming">
							<input id="education" class="inI selt educaV input_form" style="float: initial;" readonly="" data-educa="0" placeholder="Education">
							<div class="btn-group doa" style="">
								<span class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
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


						<!-- DEGREE TYPE Doctorate-->
						<div class="optionsBEducation formComming one EducationDoc selects" style="display:none; " tabindex="7">
							<input id="" class="inI selt DoctorateV input_form" style="float: initial;" readonly="" data-doctorate="0" placeholder="Degree Type">
							<div class="btn-group doa" style="">
								<span class="spanDoctorate down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 

									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
								</span>
								<ul class="dropdown-menu menu_desplegable">
				        			<li><a id="Doc12" class="Doctorate se" href="#">J.D</a></li>
									<li><a id="Doc13" class="Doctorate se" href="#">Ed.D</a></li>
									<li><a id="Doc14" class="Doctorate se" href="#">Ph.D</a></li>
				        		</ul>
							</div>
						</div>


						<!-- DEGREE TYPE Master-->
						<div class="optionsBEducation one formComming EducationMas selects" style="display:none; " tabindex="7">
							<input id="" class="inI selt MasterV input_form" style="float: initial;" readonly="" data-master="0" placeholder="Degree Type">
							<div class="btn-group doa" style="">
								<span class="spanMaster down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
								</span>
								<ul class="dropdown-menu menu_desplegable">
				        			<li><a id="Doc15" class="Master se" href="#">Executive Master of Business Administration</a></li>
									<li><a id="Doc16" class="Master se" href="#">Master of Arts</a></li>
									<li><a id="Doc17" class="Master se" href="#">Master of Business Administration</a></li>
									<li><a id="Doc18" class="Master se" href="#">Master of Education</a></li>
									<li><a id="Doc19" class="Master se" href="#">Master of Fine Arts</a></li>
									<li><a id="Doc20" class="Master se" href="#">Master of Science</a></li>
				        		</ul>
							</div>
						</div>

						<!-- DEGREE TYPE Bachelor-->
						<div class="optionsBEducation one formComming EducationBac selects" style="display:none; " tabindex="7">
							<input id="" class="inI selt BachelorV input_form" style="float: initial;" readonly="" data-bachelor="0" placeholder="Degree Type">
							<div class="btn-group doa" style="">
								<span class="spanBachelor down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
								</span>
								<ul class="dropdown-menu menu_desplegable">
				        			<li><a id="Doc21" class="Bachelor se" href="#">Bachelor of Arts</a></li>
									<li><a id="Doc22" class="Bachelor se" href="#">Bachelor of Science</a></li>
				        		</ul>
							</div>
						</div>
						<input id="school" class="input_form" placeholder="School"> 

						<div class="selects one formComming">
							<input id="graduation_year" class="inI selt years input_form" style="float: initial;" readonly="" data-year="0" placeholder="Graduation Year">
							<div class="btn-group doa" style="">
								<span class="spanYear down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1"> 
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png'; ?>">
								</span>
																<ul class="dropdown-menu menu_desplegable">
									<?php for ($index=2021; $index >= 1940; $index--): ?>
				        			<li><a id="Y<?php echo $index; ?>" class="year se" href="#"><?php echo $index; ?></a></li>
				        			<?php endfor; ?>
				        		</ul>
							</div>
						</div>
						
						<center id="bott1">
							<button id="btn_form" type="button" class="btn_form">Start FREE Trial</button>

							<div class="clearfix" id="iagree">
								<table><tbody><tr><td>
									<div class="checkTermsPrivacy" style="cursor:pointer; float:left;">
										<img id="immm" src="<?php echo $this->webroot.'img/dream/check.png'; ?>"></div>	
								</td><td>
									<div class="textTermsPrivacy">I agree to the 
										<a target="_blank" style="color: black; text-decoration:underline;" href="http://www.joinmentor.co/terms-of-use">Terms of Use</a> 
										and 
										<a target="_blank" style="color: black; text-decoration:underline;" href="http://www.joinmentor.co/privacy-policy">Privacy Policy</a>
									</div>	
								</td></tr></tbody></table>
							</div>
						</center>
						<center id="bott2">
							<table><tbody><tr><td class="ftd">
								<img src="<?php echo $this->webroot.'img/dream/check_green.png'; ?>">
							</td><td class="std">
								<div id="green_panel">
									<div id="success_title">Success!</div>
									<div>Please check your inbox or promotions folder for the confirmation email.</div>
								</div>	
							</td></tr></tbody></table>
							
						</center>
						
						<!-- <span id="mini_letras">Less than 5 minutes. No cost. Just awesome</span> -->

					</div>
				</div>
				<!-- <div class="video"></div> -->
				
				<div class="fpoints">
					<table>
						<tbody><tr class="active"><td><div class="check_gray"></div></td><td>
							<p class="cap">Know Yourself</p> 
							<p class="expl">Understand your interests, skills, personal and work values, and relevant personality traits</p>
							</td>
						</tr>
						<tr class=""><td><div class="check_gray"></div></td><td>
							<p class="cap">Find Compatible Careers from 500+</p>
							<p class="expl">Explore existing careers, analyze their future outlook and learn how well they match your profile</p>
							</td>
						</tr>
						<tr class=""><td><div class="check_gray"></div></td><td>
							<p class="cap">Create Your Unique Career Vision</p>
							<p class="expl">Use guided exercises commonly employed by professional career advisers and counsellors</p>
							</td>
						</tr>
						<tr class=""><td><div class="check_gray"></div></td><td>
							<p class="cap">Advice from Experienced Professionals</p>
							<p class="expl">Connect with professionals with 7+ years of experience in your field of interest</p>
							</td>
						</tr>
					</tbody></table>
					<center class="buline">
						<div class="bullet active" onclick="goto(1)"></div>
						<div class="bullet" onclick="goto(2)"></div>
						<div class="bullet" onclick="goto(3)"></div>
						<div class="bullet" onclick="goto(4)"></div>
					</center>
				</div>

			</section>
				<div id="comentario1" class="comentario">
					<div style="width:1280px;margin:0 auto;margin-top: -10px;">
						<table style="">
							<tbody><tr>
								<td><div class="user_avatar"></div></td>
								<td>
									<div class="comentario_content">
										<h2>"The course has been great - before taking it, I was puzzled, no direction or  too many directions. I would rate the course 5 out of 5"</h2>
										<h4>Sylvia Nelson</h4>
									</div>
								</td>
							</tr>
						</tbody></table>
						
						
					</div>
				</div>
		</div>
	</div>


	<section id="pantalla_movil">
	</section>

	<section id="comentario1_movil">
		<div class="comentario">
			<div style="padding:0 30px;">
				<table style="">
					<tbody><tr>
						<td><div class="user_avatar"></div></td>
						<td>
							<div class="comentario_content">
								<p class="p_comment">"The course has been great - before taking it, I was puzzled, no direction or  too many directions. I would rate the course 5 out of 5"</p>
								<p class="span_comment">Sylvia Nelson</p>
							</div>
						</td>
					</tr>
				</tbody></table>

				
				
			</div>
		</div>
	</section>

	<section class="pantalla2">
		<div id="descripcion">Making decisions about your career is a complex problem with multiple correct answers. It’s an ongoing process whose outcome can be maximized if you know enough about yourself and potential occupations, have a clear career vision and build the correct skills. MENTOR.’s comprehensive program will provide you with:</div>

		
	</section>



<section class="pantalla2" style="  padding-top: 0;" id="pantalla2s">
		<div id="items_container">

			<div id="punto_1_2" class="puntos_2">
				<div class="graph"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">State Of The Art Career Matching Algorithm</h2>
					<h4 class="subtitulo_punto">Discover how well your profile matches with 500+ careers</h4>
				</div>
			</div>
			<div id="punto_4_2" class="puntos_2">
				<div class="List"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Professional Career Assessments</h2>
					<h4 class="subtitulo_punto">Understand your interests, skills, personal and work values, and relevant personality traits</h4>
				</div>
			</div>
			<div id="punto_2_2" class="puntos_2">
				<div class="openbook"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Excellent Career Guidance</h2>
					<h4 class="subtitulo_punto">Access a wide range of career guidance resources. Learn how to make effective decisions and overcome the obstacles that stand in the way of career success. </h4>
				</div>
			</div>
			<div id="punto_5_2" class="puntos_2">
				<div class="Friends"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">
						Career Insights From Experienced Professionals
					</h2>
					<h4 class="subtitulo_punto">Connect with professionals from your career of choice. Learn from their experiences, insights and support, and set yourself up for success.  </h4>
				</div>
			</div>
		</div>
	</section>

		<div id="boton">
			<div class="boton_content">
				<h1>The Career Decision-Making Program is the perfect guidance for
					your decision process</h1>
				<button type="button" class="btn_abajo btn_form">Start FREE Trial</button>
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
					<h4 class="subtitulo_punto">Discover how well your profile matches with 500+ careers</h4>
				</div>
			</div>
			<div id="punto_4_2" class="puntos puntos_2">
				<div class="List"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Professional Career Assessments</h2>
					<h4 class="subtitulo_punto">Understand your interests, skills, personal and work values, and relevant personality traits</h4>
				</div>
			</div>
			<div id="punto_2_2" class="puntos puntos_2">
				<div class="openbook"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">Excellent Career Guidance</h2>
					<h4 class="subtitulo_punto">Access a wide range of career guidance resources. Learn how to make effective decisions and overcome the obstacles that stand in the way of career success.</h4>
				</div>
			</div>
			<div id="punto_5_2" class="puntos puntos_2">
				<div class="Friends"></div>
				<div style="margin-left: 75px;">
					<h2 class="titulo_punto">
						Career Insights From Experienced Professionals
					</h2>
					<h4 class="subtitulo_punto">Connect with professionals from your career of choice. Learn from their experiences, insights and support, and set yourself up for success.</h4>
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

<style>

.Footer{
  float: left;
  background-color: #333333;
  padding-top: 35px;
  padding-right: 50px;
  padding-left: 50px;
  padding-bottom: 45px;
  width: 100%;
}

.Footer > div{
	  *padding: 0px 30px 0px 30px;
}

.footer_chao{
    display: block;
 }
  .footer_hola{
    display: none;
 }
	
.Footer {
	padding: 35px 30px 45px 30px;
}

@media ( max-width : 1250px) {
	.Footer > div{
		padding: 0px;
		width: 100% !important;
	}
	#content-menu-div-principal, #legal-content{
		width: 100% !important;
	}
	#legal-content-imagenes {
  		float: left !important;
  	}
}

@media ( max-width : 750px) {
	.clearing{
		display: block !important;
	}

	.Footer > div{
		width: 100% !important;
	}

	.Footer{
		margin-left: 0px !important;
		width: 100%;
		padding: 35px 30px 45px 30px !important;
	}

	.Footer br{
		display: none;
	}

	.withBorder{
		width: 100% !important;
	}
	.secundario{
		float: none !important;
		padding-top: 30px !important;
		width: 100% !important;
	}

}

@media ( max-width : 950px) {	
	.Footer {
		padding: 35px 92px 45px 50px;
	}
}

</style>

<footer class="Footer" id="tFooter">
	<div style="width:1170px; margin: 0 auto;">
		<div style="border-bottom: 2px solid #e4bec3; padding-bottom: 20px;">
			<img id="FiC" style="width: 140px; height: 25px;" src="<?php echo $this->webroot.'img/dream/logo3.png'; ?>">
		</div>
		<div class="withBorder" style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div class="footer_hola">Mentor.</div>
			<div class="footer_chao"><a href="/about-us">About MENTOR.</a></div>
			<div class="footer_chao">Become a mentor</div>
			<div><a href="/contact-us">Feedback, Ideas &amp; Help</a></div>
		</div>
		<div class="withBorder" style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright © 2015 Joinmentor.co</div>
			<div>
				<a target="_blank" href="/privacy-policy">Privacy Policy</a>
			</div>
			<div>
				<a target="_blank" href="/terms-of-use">Terms of Use</a>
			</div>
		</div>
					<div class="clearing" style="display:none; clear:both"></div> 

		<div class="secundario" style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
        Follow us 
        	<a href="https://www.facebook.com/pages/Mentor-Careers/867059603387925" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Face.png'; ?>"></a>
        	<a href="https://plus.google.com/+Joinmentorcareers/posts" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Goo.png' ?>"></a>
        	<a href="https://www.linkedin.com/company/10023298" target="_blank"><img class="redesS" style="margin-left: 10px;" src="<?php echo $this->webroot.'img/dream/Link.png'; ?>"></a>
        </div>
		<div class="secundario" style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">

			<div>
				MENTOR. does not provide medical advice,<br> psychiatric diagnosis
				or treatment.<br> Read more <a href="/disclaimer">here</a>.
			</div>
		</div>
	</div>
</footer>


<!-- Button trigger modal -->
<button style="display:none;" type="button" id="openModal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" style="  background-color: rgba(0,0,0,0.8);" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="margin: 0 auto; width:330px;">
    <div class="modal-content" style="  border: 1px solid rgba(0, 0, 0, 1); border-radius:15px;">
      <div class="modal-header" style="  border-bottom: 0px;">
        <button type="button" class="close" style="  border: 2px solid black; opacity: 1; border-radius: 30px; width: 25px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body">
      	<h4 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Oops!</h4>
        <div id="modalMsg" style="font-size:18px;  margin-bottom: 10px;"> </div>
      </div>
    </div>
  </div>
</div>

<!--

	<footer class="Footer"
		style="float: left; min-height: 252px; background-color: #333333; padding-top: 35px; padding-right: 50px; padding-left: 50px;   padding-bottom: 45px;">
		<div style="border-bottom: 1px solid #B1B1B1; padding-bottom: 20px;">
			<img style="width: 140px; height: 25px;"
				src="/img/logo3.png">
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div>
				<a href="/aboutus">About Mentor.</a>
			</div>
			<div>Affiliates</div>
			<div>Become an specific career adviser</div>
			<div>
				<a href="/contactus">Feedback, Ideas &
					Help</a>
			</div>
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright &copy; 2015 Joinmentor.com</div>
			<div>
				<a href="/start/legalPage">Privacy Policy</a>
			</div>
			<div>
				<a href="/start/legalPage">Terms of Use</a>
			</div>
		</div>
		<div
			style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
			<div style="font-size : 16px;">
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="/start/legalPage">here</a>.
			</div>
		</div>
	</footer>


-->

	<script>

$('.one').click(function(){
	var eleme = $(this);
	setTimeout(function(){
		   eleme.find('.doa').addClass("open"); 
		   eleme.find('.doa > span > img').attr('src', WEBROOT+"img/up-menu.png");
		},10);
})

		var porcentaje = 0;
		$(window).resize(function() { //para madu
		  if(($(window).width() < 1300)  &&  ($(window).width() > 750)){
		  	porcentaje = 200 - ((($(window).width() - 750)*10)/55);
		  	$("#fondo").css("background-size",porcentaje+"% "+porcentaje+"%");
		  }
		});
	


	$('.formComming').keydown(function(e){
		if (e.keyCode == '40' || e.keyCode == '38') {
			if (! $('.doa').hasClass('open') ){
				var eleme = $(this);
				setTimeout(function(){
				   eleme.find('.doa').addClass("open"); 
				   eleme.find('.doa > span > img').attr('src', WEBROOT+"img/up-menu.png");
				},10);
			}
		}
	})



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
				$(this).find('img').attr('src', WEBROOT+"img/dream/down-menu.png");
			}
		}) 
	});

	$('.down').click(function(){

		if($('body').width() <= 750){
			var w = $('#state').width() + 10;
			$('.dropdown-menu').width( w );
			$('.dropdown-menu').css('marginLeft', w*-1);
		}

		if($(this).find('img').attr('src') == WEBROOT+"img/dream/down-menu.png"){
			$(this).find('img').attr('src', WEBROOT+"img/dream/up-menu.png");
		}
		else{
			$(this).find('img').attr('src', WEBROOT+"img/dream/down-menu.png");
		}
	})

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
	$('.year').click(function(){
		var id = $(this).attr('id');
		$('.years').val($(this).html());
		$('.years').data('year', id);
		$('body').click();
	});
	$('.Bachelor').click(function(){
		var id = $(this).attr('id');
		$('.BachelorV').val($(this).html());
		$('.BachelorV').data('bachelor', id);
		$('body').click();
	});
	$('.Master').click(function(){
		var id = $(this).attr('id');
		$('.MasterV').val($(this).html());
		$('.MasterV').data('master', id);
		$('body').click();
	});
	$('.Doctorate').click(function(){
		var id = $(this).attr('id');
		$('.DoctorateV').val($(this).html());
		$('.DoctorateV').data('doctorate', id);
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

		if( $('#immm').attr('src') ==  WEBROOT+'img/dream/check.png'){
			$('#modalMsg').html('Please accept the Terms of Use to proceed');
			$('#openModal').click();
			return false;
		}

		var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

		email = $('#email').val();
		if($('#name').val() != "" && $('#surname').val() != "" && email != "" && $('#password').val() != "" && $('#education').val() != "" && $('#state').val() != ""){

			if(!pattern.test(email)){
				$('#modalMsg').html('Not a valid e-mail address');
				$('#openModal').click();
				return false;
			}else{

				var secodLevel = 0;
			var secondlevelname = "";
			if($('#education').val() == "Bachelor's degree"){
				if( $('.BachelorV').val() == "" ){
					$('#modalMsg').html('Please complete missing fields to continue');
					$('#openModal').click();
					return false;
				}
				else{
					secodLevel = $('.BachelorV').data('bachelor');
					secondlevelname = $('.BachelorV').val();
				}
			}
			
			if($('#education').val() == "Master's degree"){
				if( $('.MasterV').val() == "" ){
					$('#modalMsg').html('Please complete missing fields to continue');
					$('#openModal').click();
					return false;
				}
				else{
					secodLevel = $('.MasterV').data('master');
					secondlevelname = $('.MasterV').val();
				}
			}
			
			if($('#education').val() == "Doctorate"){
				if( $('.DoctorateV').val() == "" ){
					$('#modalMsg').html('Please complete missing fields to continue');
					$('#openModal').click();
					return false;
				}
				else{
					secodLevel = $('.DoctorateV').data('doctorate');			
					secondlevelname = $('.DoctorateV').val();
				}
			}

			if( $('#immm').attr('src') ==  WEBROOT+'img/dashboard/check.png'){
				$('#modalMsg').html('Please accept the Terms of Use to proceed');
				$('#openModal').click();
				return false;
			}

			if(secodLevel != 0){
				secodLevel = secodLevel.replace('Doc','');
			}
			    var date = new Date();
			    var day = date.getDate();
			    var monthIndex = date.getMonth();
			    var year = date.getFullYear();

			    var hora = date.getHours();
				var minuto = date.getMinutes();
				var segundo = date.getSeconds();

			    var date = monthIndex + "/" + day + "/" + year +" "+hora+":"+minuto+":"+segundo;


				var usuario = {
					first_name: $('#name').val(), //string
					last_name: $('#surname').val(), //surname
					graduation_year: $('#graduation_year').val(), //numero
					education_id: $('#education').data('educa'), //id education del 3 al 11
					education_2: secodLevel, //id education del 12 al 22
					school: $('#school').val(), //string
					email: email, //email
					date: date,
					password: $('#password').val(), //pass
					source: $('#source').val(), //pass
					state_id: $('.states').data('state')//id
				};

				console.log(usuario);
				return false;

				$.post(WEBROOT+'start/addTester',{data:usuario},function(data){
					if(data != 0){
							$('#bott1').hide();
							$('#bott2').show();

						// var login = {
						// 	email : email,
						// 	password : usuario['password']
						// }

						// $.ajax({
						// 	url:WEBROOT+'/login',
						// 	type: 'post',
						// 	data: {data:login},
						// 	dataType: 'json',
						// 	success: function(data){
						// 		if(data == 1){
						// 			window.location.replace(WEBROOT+'career_program/dashboard');
						// 		}
						// 	},
						// 	error: function(a,e,i){}
						// });
					}else{
						$('#modalMsg').html('Email address already in use. Please <a class="byerror" style="color:black; cursor:pointer;  text-decoration: underline;">Log in</a> instead. ');
						$('#openModal').click();
					}
				},'json');

			}

		}else{
			$('#modalMsg').html('Please complete missing fields to continue');
			$('#openModal').click();
			return false;
		}

	});

	$('#movil_btn_form').click(function(){

		var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
		
		email = $('#movil_email').val();
		if($('#movil_name').val() != "" && $('#movil_surname').val() != "" && email != "" && $('#movil_password').val() != "" && $('#movil_education').val() != "" && $('#movil_state').val() != ""){

			if(!pattern.test(email)){
				$('#modalMsg').html('Not a valid e-mail address');
				$('#openModal').click();
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


$(document).on('click', '.byerror', function(){
	window.location.replace(WEBROOT);
});

	$('#logo').click(function(){
		if( "<?php echo $this->UserAuth->getUserId();?>" != ""){
			window.location = "<?php echo $this->webroot; ?>"+'career_program/dashboard';
		}
		else{
			window.location = "<?php echo $this->webroot; ?>";
		}
	})


	function preloader() {
		if (document.images) {
			var WEBROOT="<?php echo $this->webroot;?>";

			var img1 = new Image();
			var img2 = new Image();
			var img3 = new Image();
			var img4 = new Image();

			img1.src = WEBROOT+"img/dream/fondo1.jpg";
			img2.src = WEBROOT+"img/dream/fondo2.jpg";
			img3.src = WEBROOT+"img/dream/fondo3.jpg";
			img4.src = WEBROOT+"img/dream/fondo4.jpg";
		}
	}
	function addLoadEvent(func) {
		var oldonload = window.onload;
		if (typeof window.onload != 'function') {
			window.onload = func;
		} else {
			window.onload = function() {
				if (oldonload) {
					oldonload();
				}
				func();
			}
		}
	}
	addLoadEvent(preloader);

</script>
<?php 
		echo $this->Html->script('onload.js');


?>
</div>

</body></html>