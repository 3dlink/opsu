<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MENTOR. | Smart Career Guidance For Young Adults</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->css('../library/bootstrap/css/bootstrap.css');?>
	<?php echo $this->Html->css('start_index.css');?>
	<?php echo $this->Html->css('coming.css');?>
	<?php echo $this->Html->script('jquery-1.11.2.js');?>
	<?php echo $this->Html->script('../library/jquery.scrollTo.js');?>
	<?php echo $this->Html->script('lib/bootstrap.min'); ?> 
	<?php echo $this->Html->script('googleAnalytics.js'); ?>
</head>

<script>
	var ident = "";
	var activate = "";
	if (screen.width<=320){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.6 maximum-scale=1, user-scalable=yes">');
	}else{
		if (screen.width<=800){
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=1, user-scalable=no">');
		}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">');
		}
	}
</script>
<body>


<!-- Modal Login-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="  margin-top: 25vh;">
    <div class="modal-content modal-content-login" style="  height: 340px; width: 540px;">
     <!--  <div class="modal-header">
         
      </div> -->
      <div class="modal-body">
      	<button type="button" style="padding-left: 2px; line-height: 0.4; opacity: 1;  border: 2px solid black; border-radius: 20px; height: 30px; width: 30px; " class="close" data-dismiss="modal" aria-label="Close">
      		<span style=" font-size: 30px; font-weight: 300;" aria-hidden="true">&times;</span>
      	</button>
        <h4 style="text-align: center; font-size: 24px;" class="modal-title" id="myModalLabel">Log in</h4>
      	<div id="readyActive" style="display:none; margin-top: 30px; width:360px; padding-left:90px; font-size:20px;">
		      Your account is already active.<br> Please log in
		</div>
      	<div class="form-group has-success has-feedback" style="margin-bottom:0px; width: 420px; margin-top: 30px;   margin-left: 45px;">
      	  <input style="  border-color: #ccc; font-size: 24px; height:40px;" placeholder="Email" type="email" class="validate enterToSend form-control" id="emailLogin" aria-describedby="inputSuccess2Status">
		  <span id="" style="color: #99cc00; display:none;" class="emailValid glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		  <span id="" style="color: #ff4444 ; display:none;" class="emailInvalid glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
      	</div>

      	<div style=" height: 30px; padding-top: 4px; font-size:16px; color:#ff4444; text-align: right; margin-right: 60px;">
      		<span id="" style="display:none;" class="emailIncorrect">The email is incorrect</span>
      	</div>

      	<div class="form-group has-success has-feedback" style="  margin-bottom: 5px; width: 420px; margin-left: 45px;">
      		<input style="border-color: #ccc;   font-size: 24px;  height:40px;" type="password" class="form-control enterToSend" id="passLogin" placeholder="Password">
      		<span id="" style="color: #ff4444 ; display:none;" class=" passInvalid glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
      	</div>

      	<div style=" font-size:16px; color:#ff4444; text-align: right; margin-right: 60px;">
      		<span id="" class="loginIncorrect" style="  visibility: hidden;">The email/password is incorrect</span>
      	</div>

      	<div style="margin-top: 10px;   text-align: center; ">
      		<button id="login" type="button" style="font-weight: 300; font-size: 20px; margin-top:0px; width: 100px; height: 50px;" class="quiz-result-btn">
				<span id="titleButtonSubmit">Log in</span>
				<img style="display:none;" class="gifLoader" src="<?php echo $this->webroot.'img/loader.gif'; ?>">
			</button>
			<div style="cursor:pointer; font-size:16px; color:#999999;" data-toggle="modal" data-target="#myModal2">
				Forgot my password
			</div>
      	</div>
      </div>
    </div>
  </div>
</div>

<!-- Modal forgot password-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="  margin-top: 25vh;">
    <div class="modal-content" style="  height: 340px; width: 540px;">
     <!--  <div class="modal-header">
      </div> -->
      <div class="modal-body">
      		<button type="button" style="padding-left: 2px; line-height: 0.4; opacity: 1;  border: 2px solid black; border-radius: 20px; height: 30px; width: 30px; " class="close" data-dismiss="modal" aria-label="Close">
      			<span style=" font-size: 30px; font-weight: 300;" aria-hidden="true">&times;</span>
	      	</button>
	        <h4 style="text-align: center; font-size: 24px;" class="modal-title" id="myModalLabel">Reset your password</h4>
	      	<div class="firstModalForgot" >
		      	<div style="margin-top: 30px; width:350px; margin-left:90px; font-size:20px;">
		      		Enter your email address below. We’ll look
					for your account and send you a password
					reset email.
		      	</div>
		      	<div style="margin-top: 30px; width: 420px;   margin-bottom: 5px;  margin-left: 45px;"  class="form-group has-success has-feedback" >
		      		<input id="emailForgot" style="font-size: 24px; height:40px;" type="email" class="validate enterToReset form-control" placeholder="Email">
		      		<span id="" style="color: #99cc00; display:none;" class="emailValid glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		  			<span id="" style="color: #ff4444 ; display:none;" class="emailInvalid glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
		      	</div>

		      	<div style=" height: 30px; padding-top: 4px; font-size:16px; color:#ff4444; text-align: right; margin-right: 60px;">
      				<span id="" class="emailIncorrect" style="display:none; ">The email is incorrect</span>
      			</div>

		      	<div style="margin-top: 0px;   text-align: center; ">
		      		<button id="sendEmail" type="button" style="  font-weight: 300; font-size: 20px; margin-top:0px; width: 200px; height: 50px;" class="quiz-result-btn">
						Send password reset
					</button>
		      	</div>
      		</div>

      		<div class="secondModalForgot" style="display:none;">
		      	<div style="background:#abd430; margin-top: 18px; width:460px; height: 70px; margin-left:25px;   border-radius: 6px; font-size:20px;">
		     		<div style="width:60px;  float: left;">
		     			<span style=" margin-left: 30px; margin-top: 15px; color: white; height: 35px; width: 35px; border: 2px solid white; border-radius: 20px; text-align: center; padding-top: 5px; " class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		     		</div>
		     		<div style="font-weight:300;margin-left: 20px; padding-top:5px;  float: left;">
		     			We've just sent a password reset email to: <br /> <span id="emailForSend" style="font-weight:bold;"></span>
		     		</div>
					<div style="clear:both"></div> 
		     		<div style="  margin: 0 auto; margin-top:20px; width:385px; ">
		     			When you receive the email, click the link inside to reset your password. <br /> <br /> If you don´t see the email after a few minutes, check your spam folder or contact us at hello@joinmentor.co.
		     		</div>
		      	</div>
      		</div>
      </div>
    </div>
  </div>
</div>
<button style="display:none;" id="resetP" data-toggle="modal" data-target="#myModal3"> </button>

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="  margin-top: 25vh;">
    <div class="modal-content" style="  height: 340px; width: 540px;">
     <!--  <div class="modal-header">
         
      </div> -->
      <div class="modal-body">
        <h4 style="text-align: center; font-size: 24px;" class="modal-title" id="myModalLabel">Reset Password</h4>
      	
      	<div class="form-group has-success has-feedback" style="margin-bottom:0px; width: 420px; margin-top: 30px;   margin-left: 45px;">
      	  <input style="  border-color: #ccc; font-size: 24px; height:40px;" placeholder="New password" type="password" class="compare form-control" id="NewPass" aria-describedby="inputSuccess2Status">
		  <span id="" style="color: #99cc00; display:none;" class="emailValid glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
		  <span id="" style="color: #ff4444 ; display:none;" class="emailInvalid glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
      	</div>

      	<div style=" height: 30px; padding-top: 4px; font-size:16px; color:#ff4444; text-align: right; margin-right: 60px;">
      		<span id="" style="display:none;" class="emailIncorrect">The email is incorrect</span>
      	</div>

      	<div class="form-group has-success has-feedback" style="width: 420px; margin-left: 45px;">
      		<input style="border-color: #ccc;   font-size: 24px;  height:40px;" type="password" class="compare form-control" id="ConfirmPass" placeholder="Confirm Password">
      	</div>

      	<div style=" font-size:16px; color:#ff4444; text-align: right; margin-right: 60px;">
      		<span id="" class="passDiferents" style="display:none; ">The passwords do not agree</span>
      	</div>

      	<div style="margin-top: 30px; text-align: center;">
      		<button id="changePass" type="button" style="font-weight: 300; font-size: 20px; margin-top:0px; width: 100px; height: 50px;" class="quiz-result-btn">
				Save
			</button>
      	</div>
      </div>
    </div>
  </div>
</div>




	<div id="fondo" style="min-height:1000px;">
		<div id="degradado" >
			<header id="header1">	
				<div>
					<div id="logo">
						<img src="<?php echo $this->webroot.'img/MENTOR-Careers.png';?>">			
					</div>
					<div class="" style="padding-top:45px; float: right;">
						
						<div class="navIndex threeScreen" style="font-weight:300;">Learn more

						</div>
						<div class="navIndex contactus" style="font-weight:300;">Contact</div>
						<div id="loginButton" data-toggle="modal" data-target="#myModal" class="navIndex" style="font-weight: 300; ">Log in</div>
						
						<div data-toggle="" data-target="" class="navIndex lgi fourScreen" style="  margin-right: 85px; width: 180px; text-align: center; height: 40px; padding-top: 3px; font-weight: 300; background: rgb(220, 93, 62); margin-top: -4px; border-radius: 7px;">Get early access</div>

						
					</div>
						
				</div>
			</header>

			<header id="header2" style="width:100%; display:none;">	
				<div>
					<div id="logo">
						<img src="<?php echo $this->webroot.'img/MENTOR-Careers.png';?>">			
					</div>
					<div id="meB" style="  width: 100%; background-color: rgba(0,0,0, 0.5); height: 60px; position: fixed; z-index: 1;">
						
						<div id="menu_user_mobile_icon"></div>
						<div id="popover798251" class="popover bottom menu_user_mobile">
						 	<div class="arrow" style="left: 12px; width:18px;"></div>
						 	<div class="popover-content" style="color:white; padding: 0px;float:left;padding: 0 10px;">
						 		<div class="items_menu_user navIndex threeScreen" style="font-weight:300;">Learn more</div>
						 		<div class="items_menu_user navIndex contactus" style="font-weight:300;">Contact</div>
						 		<div id="loginButton" data-toggle="modal" data-target="#myModal" class="navIndex items_menu_user" style="font-weight: 300;">Log in</div>
						 		<div data-toggle="" data-target="" class="navIndex lgi fourScreen items_menu_user" style="background: rgb(220, 93, 62);border-radius: 7px; color:white;">Get early access</div>
						 	</div>
						</div>

					</div>

					<div id="menu_web_coming" style="padding-top:15px; position: fixed; padding-left:45px;   z-index: 1;">
						<div class="navIndex" id="solution">Learn more
						</div>
						<div class="navIndex contactus">Contact
						</div>
						<div id="loginButton" data-toggle="modal" data-target="#myModal" class="navIndex" style="font-weight: 300;">Log in</div>
						
						<div data-toggle="" data-target="" class="navIndex but" style="  margin-right: 0px; width: 150px; text-align: center; height: 40px; padding-top: 3px; font-weight: 100; font-size:16px; background: rgb(220, 93, 62); margin-top: -4px; border-radius: 7px;">Get early access</div>
					</div>
						
				</div>
			</header>

			<section id="pantalla1">
				<div class="titleIndex title1" style="  line-height: 1.3; padding-top: 120px; font-weight : 400;">
					Smart guidance for achieving
					<br>
					<p style="display : inline; font-weight : bold;"><span id="divE">a successful</span></p> career
				<br />
				<button type="button" style="  margin-top: 60px; width: 270px; height: 75px;" class="firstButton fourScreen quiz-result-btn">
					GET EARLY ACCESS
				</button>
				
				</div>
				<!-- <div style="width : 100% ; text-align : center;">
				<p style="color : white ; font-size : 24px;">Learn more</p>
				<img style="" src="<?php echo $this->webroot.'img/index/next-circle.png';?>">
				</div> -->
				

				
			</section>
		</div>
		<div class="threeScreen" id="firstCpanta" style="color: white; cursor:pointer; font-size: 24px; margin: 0 auto; text-align: center; bottom: 35px; position: absolute; width: 100%; padding-left:20px;"> 
					Learn more
					<span style="color:#ff6633; margin-left:20px; font-size:18px;" class="glyphicon glyphicon-chevron-down"></span>  
				</div>	
	</div>

	<section id="pantalla3" style="position:relative;">
		<div class="titleIndex" style="  font-weight: 400; color:black; text-shadow: 2px 2px 0px #b9b9b9;">
			The Career Decision-Making Program
		</div>

		<div class="content3Text" style="margin-left:24px; margin-right:20px; text-align:center; font-size:20px; font-weight: 300; padding-top:0px;"> 
			Make sound, informed decisions about your career direction
		</div>
<!-- 
		<div class="content3Text" style="margin-left:20px; margin-right:20px; text-align:center; font-size:120%; font-weight: 300; padding-top:25px;"> 
			Making decisions about your career is a complex problem with multiple correct answers. It´s an ongoing process<br />
			whose outcome can be maximized if you know good enought about yourself and potential occupations, have a<br />
			clear career vision and build the correct skills. MENTOR's complete program will help you:
		</div> -->


		<div class="firtsContent3" style="width: 1060px; margin:0 auto; padding-top:40px;">
	<section class="pantalla2" style="  padding-top: 0;  margin: 0 auto;  width: 100%;">
				<div id="items_container">

					<div id="punto_1_2" class="puntos_2" style=" float: left;width: 47%;padding: 0px 10px 0 10px;">
						<div class="graph"></div>
						<div style="margin-left: 80px;">
							<h2 class="titulo_punto">Know Yourself</h2>
							<h4 class="subtitulo_punto">Understand your interests, skills, personal and work values, and relevant personality traits.</h4>
						</div>
					</div>
					
					<div id="punto_4_2" class="puntos_2" style="float: left; width: 47%; padding: 0px 10px 0 40px;">
						<div class="List"></div>
						<div style="margin-left: 80px;">
							<h2 class="titulo_punto">Find Compatible Careers from 500+</h2>
							<h4 class="subtitulo_punto">Explore existing careers, analyze their future outlook and learn how well they match your profile.</h4>
						</div>
					</div>


					<div id="punto_1_2" class="puntos_2" style=" float: left;width: 47%;padding: 0px 10px 0 10px; padding-top: 30px; ">
						<div class="openbook"></div>
						<div style="margin-left: 80px;">
							<h2 class="titulo_punto">Improve Your Decision-Making </h2>
							<h4 class="subtitulo_punto">Learn how to avoid common cognitive biases and use the people around you to help throw light on your blind spots</h4>
						</div>
					</div>
					
					<div id="punto_4_2" class="puntos_2" style="float: left; width: 47%; padding: 0px 10px 0 40px; padding-top: 30px; ">
						<div class="exit"></div>
						<div style="margin-left: 80px;">
							<h2 class="titulo_punto">Create a Career Vision</h2>
							<h4 class="subtitulo_punto">Use guided exercises commonly employed by professional career advisers and counsellors.</h4>
						</div>
					</div>
					<div style="clear:both"></div> 

					<div id="punto_4_2" class="puntos_3" style="width: 47%; margin: 0 auto;   padding-top: 30px;">
						<div class="Friends"></div>
						<div style="margin-left: 80px;">
							<h2 class="titulo_punto">Advice from Experienced Professionals</h2>
							<h4 class="subtitulo_punto">Connect with professionals with 7+ years of experience in your field of interest.</h4>
						</div>
					</div>
					
					
				</div>
			</section>
		</div>
			<div class="fourScreen" style="cursor:pointer; font-size: 24px; margin: 0 auto; text-align: center; bottom: 35px; position: absolute; width: 90%;"> 
				Get early access 
				<span style="color:#ff6633; margin-left:20px; font-size:18px;" class="glyphicon glyphicon-chevron-down"></span>  
			</div>	
	</section>

			<section id="pantalla4" style="background:white; position:relative;">
				<div class="titleIndex" style="  font-weight: 400; color:black; text-shadow: 2px 2px 0px #b9b9b9;">
					Get FREE Early Access To The Program
				</div>	

				
				<div class="firtsContent4" style="margin-top:50px; width: 800px; margin:0 auto;padding: 60px 0px 0px 5px;">
					<div style="float:left;   width: 45%;" class="SidesFormComing">
					<!-- NAME -->
					<div class="formComming" style="">
						<input tabIndex="1" id="nameV" class="input_form" style="width:100%;" placeholder="Name">
					</div>	


					<!-- SURNAME -->
					<div class="formComming" style="">
						<input  tabIndex="2" id="surnameV" class="input_form" style="width:100%;" placeholder="Surname">
					</div>	
					
					<!-- STATE -->
					<div class="formComming one formEstado" style="" tabIndex="3">
						<div class="selects" style="position: relative;">
							<input id="movil_state" class="inI selt states input_form" style="float: initial;" readonly data-states="0" placeholder="State">
							<div class="btn-group doa"  style="position: absolute; right:0; top:10px;">
								<span class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" > <img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable"  style="  top: 30px; left: -325px;  width: 360px;  height: 300px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;">
					        		<?php					
										foreach ( $states as $key => $value ) {
											echo '<li><a id="' . $value ['State'] ['id'] . '" class="state se" href="#">' . $value ['State'] ['name'] . '</a></li>';
										}
									?>
						      </ul>
							</div>
						</div>
					</div>	

					<!-- EMAIL -->
					<div class="formComming" style="">
						<input id="emailV" class="input_form" style="width:100%;" placeholder="Email"  tabIndex="4">
					</div>	

					<!-- PASSWORD -->
					<div class="formComming" style="">
						<input id="passwordV" type="password" class="input_form" style="width:100%;" placeholder="Password"  tabIndex="5">
					</div>	

				</div>


				<div style="float:right; width: 45%;" class="SidesFormComing">

					<!-- EDUCATION -->
					<div class="formComming one" style="" tabIndex="6">
						<div class="selects" style="position: relative;">
							<input id="education" class="inI selt educaV input_form"
								style="float: initial; font-size:16px;" readonly data-educa="0"
								placeholder="Current or highest level of education">
							<div class="btn-group doa" style=" top: 10px; right: 0; position: absolute;">
								<span
									class="spanEduca down flagRow dropdown-toggle btn_dropdown"
									data-toggle="dropdown" > <img style="width: 20px;"
									src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable" style="width:360px;  top: 30px; left: -325px;">
						        	<?php					
										foreach ( $education as $key => $value ) {
											echo '<li><a id="' . $value ['Education'] ['id'] . '" class="educa se" href="#">' . $value ['Education'] ['description'] . '</a></li>';
										}
									?>
						      </ul>
							</div>
						</div>
					</div>	


					<!-- DEGREE TYPE Doctorate-->
					<div class="optionsBEducation formComming one EducationDoc" style="display:none; " tabIndex="7">
						<div class="selects" style="position: relative;">
							<input id="movil_state" class="inI selt DoctorateV input_form" style="float: initial;" readonly data-doctorate="0" placeholder="Degree Type">
							<div class="btn-group doa" style="position: absolute; right:0; top:10px;">
								<span class="spanDoctorate down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" > <img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable"  style="  top: 30px; left: -325px;  width: 360px;  height: 100px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;">
								<li><a id="Doc12" class="Doctorate se" href="#">J.D</a></li>
								<li><a id="Doc13" class="Doctorate se" href="#">Ed.D</a></li>
								<li><a id="Doc14" class="Doctorate se" href="#">Ph.D</a></li>
						      </ul>
							</div>
						</div>
					</div>	

						<!-- DEGREE TYPE Master-->
					<div class="optionsBEducation one formComming EducationMas" style="display:none; " tabIndex="7">
						<div class="selects" style="position: relative;">
							<input id="movil_state" class="inI selt MasterV input_form" style="float: initial;" readonly data-master="0" placeholder="Degree Type">
							<div class="btn-group doa" style="position: absolute; right:0; top:10px;">
								<span class="spanMaster down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" > <img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable"  style="  top: 30px; left: -325px;   width: 360px;  height: 100px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;">
								<li><a id="Doc15" class="Master se" href="#">Executive Master of Business Administration</a></li>
								<li><a id="Doc16" class="Master se" href="#">Master of Arts</a></li>
								<li><a id="Doc17" class="Master se" href="#">Master of Business Administration</a></li>
								<li><a id="Doc18" class="Master se" href="#">Master of Education</a></li>
								<li><a id="Doc19" class="Master se" href="#">Master of Fine Arts</a></li>
								<li><a id="Doc20" class="Master se" href="#">Master of Science</a></li>

						      </ul>
							</div>
						</div>
					</div>	
						<!-- DEGREE TYPE Bachelor-->
					<div class="optionsBEducation one formComming EducationBac" style="display:none; " tabIndex="7">
						<div class="selects" style="position: relative;">
							<input id="movil_state" class="inI selt BachelorV input_form" style="float: initial;" readonly data-bachelor="0" placeholder="Degree Type">
							<div class="btn-group doa" style="position: absolute; right:0; top:10px;">
								<span class="spanBachelor down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" > <img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable"  style="  top: 30px; left: -325px;  width: 360px; height: 80px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;">
								<li><a id="Doc21" class="Bachelor se" href="#">Bachelor of Arts</a></li>
								<li><a id="Doc22" class="Bachelor se" href="#">Bachelor of Science</a></li>
						      </ul>
							</div>
						</div>
					</div>	


					<!-- SCHOOL -->
					<div class="formComming" style="  " >
						<input id="schoolV" class="input_form" style="width:100%;" placeholder="School" tabIndex="8">
					</div>

				
					<!-- GRADUATION YEAR -->
					<div class="formComming one" style="" tabIndex="9">
						<div class="selects" style="position: relative;">
							<input id="movil_year" class="inI selt yearV input_form" style="float: initial;" readonly data-year="0" placeholder="Graduation year">
							<div class="btn-group doa"  style="position: absolute; right:0; top:10px;">
								<span class="spanYear down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" > <img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</span>
								<ul class="dropdown-menu menu_desplegable"  style="  top: 30px; left: -325px;  width: 360px;   height: 200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;">
					        		<?php					
										for($x = 2021; $x >= 1940; $x--){
											echo '<li><a id="Y' . $x . '" class="year se" href="#">' . $x . '</a></li>';
										}
									?>
						      </ul>
							</div>
						</div>
					</div>		

				</div>

					<div style="clear:both"></div> 

				


					<div class="LastGet" style="  margin: 0 auto; width: 38%;">
						<button id="btn_forms" type="button" class="btn_form" tabIndex="10">
							GET EARLY ACCESS
						</button>
					</div>


						<div class="contentTerms" style="width: 61%; margin: 0 auto;   margin-top:5px; font-size:24px;">
						<div class="checkTermsPrivacy" style="cursor:pointer; float:left;"><img id="immm" src="<?php echo $this->webroot;?>img/dashboard/check.png"></div>
						<div style="  padding-top: 10px; font-size:20px; float:left; margin-left:20px;" class="textTermsPrivacy">I agree to the 
							<a target="_blank" style="color: black; text-decoration:underline;" href="<?php echo $this->webroot;?>start/legalPage/Terms">Terms of Use</a> 
							and 
							<a target="_blank" style="color: black; text-decoration:underline;" href="<?php echo $this->webroot;?>start/legalPage/Privacy">Privacy Policy</a>
						<div>
					</div>

				</div>
				</div>
				<div style="clear:both"></div> 
				
				<div class="imgMsgGreen" style="width: 90%; margin: 0 auto; margin-top:45px;  display:none;  margin-bottom:65px;">
					<img style="width:100%; cursor:pointer;" src="<?php echo $this->webroot.'img/coming/confirmation.png';?>">
				</div>

				<div class="msgGreen" style="display:none; margin: 0 auto;  width: 730px; background:#add633;  border-radius: 5px; padding:10px 30px 10px 30px; height:70px; margin-top: 100px">
					<div style="float:left;">
						<img style="  margin-top: 5px;" src="<?php echo $this->webroot.'img/Check.png';?>">
					</div>
					<div  style=" float:left; font-size:20px;  margin-top: 5px; font-weight: 300; line-height: 25px;   padding-left: 30px;">
						<span style="font-weight: 500;">Thank you. We are looking forward to your feedback.</span><br />
						Please check your email for our invitation to the program
					</div>
				</div>



					<div style="clear:both"></div> 

			</section>


<!-- El height del fondo1 es piqueno -->
	



<?php echo $this->element('footer_uno')?>



<!-- Button trigger modal -->
<button style="display:none;" type="button" id="openModal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" style="  background-color: rgba(0,0,0,0.8);" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="margin: 0 auto; width:330px;">
    <div class="modal-content" style="  border: 1px solid rgba(0, 0, 0, 1); border-radius:15px;">
      <div class="modal-header" style="  border-bottom: 0px;">
        <button type="button" class="close" style="  border: 2px solid black; opacity: 1; border-radius: 30px; width: 25px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h4 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Oops!</h4>
        <div id="modalMsg" style="font-size:18px;  margin-bottom: 10px;"> </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->Mixpanel->embed(); ?>
</body>
</html>
<style type="text/css">

		.Footer {
			  margin-top: 60px !important;
		  /*padding: 35px 335px 45px 335px;*/
		}

		@media ( max-width : 750px) {
			#legal-content-imagenes {
	  			float: right !important;
	  		}
	  		.Footer{
    			height: 800px !important;
    			/*font-size: 20px;*/
  			}
  			#FiC{
  				height: 40px !important;
  				width: 200px !important;
  			}
  			.withBorder{
  				padding-top: 40px !important;
  				    padding-bottom: 50px !important;
  			}
  			.redesS{
  				width: 60px !important;
  			}
  			.secundario{
  				font-size: 22px !important;
  			}
	  	}
	  	
	</style>


<?php  
	if(isset($_GET['ident'])){ 
?>
		<script type="text/javascript">
			$('#resetP').click();
			ident = <?php echo $_GET['ident'];?>;
			activate = "<?php echo $_GET['activate']; ?>";
		</script>
<?php 
	}
?>

<script>
window.addEventListener('resize', function () { 
    "use strict";
    // window.location.reload(); 
});

	$('.formEstado').keydown(function(e){
		var c = String.fromCharCode(e.which);
		$('.state').each(function(k,v){
			if( c ==  $(this).html().charAt(0)){
				$(this).focus();
				return false;
			}
		})
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
	


$('.compare').focusout(function(){
		if( $('#NewPass').val() != "" && $('#ConfirmPass').val() != "" ){
			if($('#NewPass').val() != $('#ConfirmPass').val()){
				$('.passDiferents').css('display', 'block');
			}
			else{
				$('.passDiferents').css('display', 'none');
			}
		}
	})

	$('#changePass').click(function(){
		var pass = $('#NewPass').val();
		$.ajax({
			url: WEBROOT+'activatePassword',
			data: {ident: ident, activate: activate, password: pass},
			dataType: 'json',
			type: "post",
			success: function(data){
				$('#emailLogin').val(data['email']);
				$('#passLogin').val(data['password']);
				$('#login').click();
			},
			error: function(a,e,i){
				// console.log(e);
			}
		})

	})

	$(".enterToSend").keyup(function (e) {
    	if (e.keyCode == 13) {
        	$('#login').click();
    	}
	});

	$(".enterToReset").keyup(function (e) {
    	if (e.keyCode == 13) {
        	$('#sendEmail').click();
    	}
	});


	$('#sendEmail').click(function(){
		var email = $('#emailForgot').val();
		$.ajax({
			url:WEBROOT+'forgotPassword',
			data: {data:email},
			dataType: 'json',
			type: 'post',
			success: function(){
				$('.firstModalForgot').css('display', 'none');
				$('#emailForSend').html(email);
				$('.secondModalForgot').css('display', 'block');
			},
			error: function(a,e,i){
				$('.emailValid').css('display', 'none');
				$('.emailInvalid').css('display', 'block');
				$('.emailIncorrect').css('display', 'block');
			}
		})
	})

	$('#login').click(function(){
		$('#titleButtonSubmit').css('display', 'none');
		$('.gifLoader').css('display', 'inline');
		$('#login').attr('disabled', 'disabled');
		var email = $('#emailLogin').val();
		var pass = $('#passLogin').val();

		var data = {
			email : email,
			password : pass
		}

		$.ajax({
			url:WEBROOT+'login',
			type: 'post',
			data: {data:data},
			dataType: 'json',
			success: function(data){
				$('#login').removeAttr('disabled');
				if(data == 0){
					$('#login').attr('disabled', false);
					$('#titleButtonSubmit').css('display', 'inline');
					$('.gifLoader').css('display', 'none');
					
					$('.emailInvalid').css('display', 'block');
					$('.passInvalid').css('display', 'block');
					$('.loginIncorrect').css('visibility', 'visible');
					$('.emailValid').css('display', 'none');
				}else{
					if(data == 2){
						window.location.replace(WEBROOT+'dashboard');
					}else{
						window.location.replace(WEBROOT+'career_program/dashboard');
					}
				}
			},
			error: function(a,e,i){
				$('#login').removeAttr('disabled');
			}
		})
	})

	$('.validate').focusout(function(){
		var regularExpresion=/^[_a-zA-z0-9-]+(\.[_a-zA-z0-9-]+)*@[a-zA-z0-9-]+(\.[a-zA-z0-9-]+)*(\.[a-zA-z]{2,3})$/;
		
		if($(this).val().match(regularExpresion)){
			$('.emailValid').css('display', 'block');
			$('.emailInvalid').css('display', 'none');
			$('.emailIncorrect').css('display', 'none');
		}
		else{
			$('.emailValid').css('display', 'none');
			$('.emailInvalid').css('display', 'block');
			$('.emailIncorrect').css('display', 'block');
		}
	})

$(document).on('click', '.byerror', function(){
	$('.close').click();
	$('#loginButton').click();
});

$('#btn_forms').click(function(){




if( $('#surnameV').val() == "" || $('#nameV').val() == "" || $('.yearV').val() == "" || $('#education').data('educa') == 0 || $('#schoolV').val() == "" || $('#emailV').val() == "" || $('#passwordV').val() == "" || $('.states').data('state') == 0 ){
	$('#modalMsg').html('Please complete missing fields to continue');
	$('#openModal').click();
	return false;
}

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
	

	var data = {
		first_name: $('#nameV').val(), //string
		last_name: $('#surnameV').val(), //surname
		graduation_year: $('.yearV').val(), //numero
		education_id: $('#education').data('educa'), //id education del 3 al 11
		education_2: secodLevel, //id education del 12 al 22
		school: $('#schoolV').val(), //string
		email: $('#emailV').val(), //email
		password: $('#passwordV').val(), //pass
		state_id: $('.states').data('state')//id
	};

	var hoy = new Date();
	var dd = hoy.getDate();
	var mm = hoy.getMonth()+1; 
	var yyyy = hoy.getFullYear();

	if(dd<10) {
	    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 

	hoy = dd+'/'+mm+'/'+yyyy;
					
	$.post(WEBROOT+'start/addTester',{data:data},function(data){
		if(data != 0){
			$('.LastGet').css('display', 'none');
			$('.contentTerms').css('display', 'none');
			if($(window).width() <= 750){
				$('.imgMsgGreen').css('display', 'block');
			}
			else{
				$('.msgGreen').css('display', 'block');	
			}
			setTimeout(function(){
					$('.imgMsgGreen').css('display', 'none');
					$('.msgGreen').css('display', 'none');	
				},6000);
		}
		else{
			$('#modalMsg').html('Email address already in use. Please <a class="byerror" style="color:black; cursor:pointer;  text-decoration: underline;">Log in</a> instead. ');
			$('#openModal').click();
		}
	},'json');

})

$('.checkTermsPrivacy').click(function(){
	if( $('#immm').attr('src') ==  WEBROOT+'img/dashboard/check.png'){
		$('#immm').attr('src', WEBROOT+'img/dashboard/checkSelected.png');
	}
	else{
		 $('#immm').attr('src', WEBROOT+'img/dashboard/check.png');
	}
})

$('.one').click(function(){
	var eleme = $(this);
	setTimeout(function(){
		   eleme.find('.doa').addClass("open"); 
		   eleme.find('.doa > span > img').attr('src', WEBROOT+"img/up-menu.png");
		},10);
})


var porcentaje = 0;
	$(window).resize(function() { //para madu
	 	porcentaje = $(window).width();
	 	porcentaje2 = $(window).height();
	 	por5 = porcentaje + 100;
	 	por52 = porcentaje2 + 100;
	 	if(porcentaje <= porcentaje2){
	 		// $("#fondo").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 		$("#pantalla4").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 		$("#pantalla5").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 	}
	 	else{
	 		if($(window).height() < 700){
	 			// $("#fondo").css("background-size",$(window).width()+"px 800px");
	 		}
	 		else{
	 			if(porcentaje > 1300){
		 			porcentaje2 =  porcentaje2 + 200;
		 		}
		 		$("#pantalla2").css("background-size",porcentaje+"px "+porcentaje2+"px");
		 		$("#pantalla4").css("background-position-y:","20px");
		 		$("#pantalla4").css("background-size",porcentaje+"px "+porcentaje2+"px");
		 		$("#pantalla5").css("background-size", por5+"px "+por52+"px");
	 		}
	 	}
	});

	porcentaje = 0;
	$(document).ready(function(){ //para que funcione
		var url = window.location.href;  
		url = url.split('?');
		if(url[1] == "ready=true"){
			$('#loginButton').click();
			$('.modal-content-login').css('height', '420px');
			$('#readyActive').css('display', 'block');
		}

		var inputHeight = $('.inI').width() +10;
		var doaHeight = (inputHeight - 40) * -1;
		var doaHeight2 = (doaHeight / 10) *-1;
		if ($(window).width() >= 750 ){
			doaHeight = doaHeight - 20;
			$('.menu_desplegable').css('cssText', 'width:'+ inputHeight + "px !important; left: "+doaHeight+"px; !important; top: 30px !important;  height: 200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;");
		}
		else{
			$('.menu_desplegable').css('cssText', 'width:'+ inputHeight + "px !important; left: "+doaHeight2+"px; !important; top: 30px !important;  height: 200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto;");
		}
	
		

	$('body').click(function(){
		$('.down').each(function(k,v){
			if($(this).parent().hasClass('open')){
				$(this).find('img').attr('src', WEBROOT+"img/down-menu.png");
			}
		}) 
	});

	$('section').click(function(){

		if($('.menu_user_mobile').hasClass('display_block')){
			$('.menu_user_mobile').removeClass('display_block');
		}
	})

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

		$('.optionsBEducation').css('display', 'none');

		if(id == 7){
			$('.EducationBac').css('display', 'block');
		}

		if(id == 8){
			$('.EducationMas').css('display', 'block');
		}

		if(id == 10){
			$('.EducationDoc').css('display', 'block');
		}

		if($(this).html().length >= 27){
			$('.educaV').css('fontSize', '16px');
		}
		else{
			$('.educaV').css('fontSize', '20px');
		}
		$('.educaV').val($(this).html());
		$('.educaV').data('educa', id);
		$('body').click();
	});

	$('.Doctorate').click(function(){
		var id = $(this).attr('id');
		if($(this).html().length >= 27){
			$('.DoctorateV').css('fontSize', '16px');
		}
		else{
			$('.DoctorateV').css('fontSize', '20px');
		}
		$('.DoctorateV').val($(this).html());
		$('.DoctorateV').data('doctorate', id);
		$('body').click();
	});

	$('.Bachelor').click(function(){
		var id = $(this).attr('id');
		if($(this).html().length >= 27){
			$('.BachelorV').css('fontSize', '16px');
		}
		else{
			$('.BachelorV').css('fontSize', '20px');
		}
		$('.BachelorV').val($(this).html());
		$('.BachelorV').data('bachelor', id);
		console.log($('.BachelorV').data('bachelor'));
		$('body').click();
	});

	$('.Master').click(function(){
		var id = $(this).attr('id');
		if($(this).html().length >= 27){
			$('.MasterV').css('fontSize', '16px');
		}
		else{
			$('.MasterV').css('fontSize', '20px');
		}
		$('.MasterV').val($(this).html());
		$('.MasterV').data('master', id);
		$('body').click();
	});

	$('.year').click(function(){
		var id = $(this).attr('id');
		if($(this).html().length >= 27){
			$('.yearV').css('fontSize', '16px');
		}
		else{
			$('.yearV').css('fontSize', '20px');
		}
		$('.yearV').val($(this).html());
		$('.yearV').data('year', id);
		$('body').click();
	});

	$('.state').click(function(){
		var id = $(this).attr('id');
		if($(this).html().length >= 27){
			$('.states').css('fontSize', '16px');
		}
		else{
			$('.states').css('fontSize', '20px');
		}

		$('.states').val($(this).html());
		$('.states').data('state', id);
		$('body').click();
	});

	$('.se').click(function(e){
		return false;
	});

	$('#iconMen').click(function(){
			if($('#menMobi').css('display') == 'block'){
				$('#menMobi').css('display', 'none');
			}
			else{
				$('#menMobi').css('display', 'block');
			}
			$("#pantalla1").click(function(){
				$('#menMobi').css('display', 'none');
			});
			$("#pantalla2").click(function(){
				$('#menMobi').css('display', 'none');
			});
			$("#pantalla3").click(function(){
				$('#menMobi').css('display', 'none');
			});
			$("#pantalla4").click(function(){
				$('#menMobi').css('display', 'none');
			});
			$("#pantalla5").click(function(){
				$('#menMobi').css('display', 'none');
			});
	})
		

	var pn2 = $(window).height()-115;
	$('#pantalla1').css('cssText',  'position:relative;');
	he = $(window).height();
 	// $("#fondo").css("height", he+"px");
 	$("#pantalla1").css("height", (he - 220)+"px");
 	$("#pantalla2").css("height", he+"px");
 	$("#pantalla3").css("height", he+"px");
 	$("#pantalla4").css("height", he+"px");
 	$("#pantalla5").css("height", he+"px");

	if($(window).width() > 900){
	 	
	 	porcentaje31 = $(window).height();
	 	porcentaje1 = $(window).width();
	 	por5 = porcentaje1 + 50;
	 	por52 = porcentaje31 +200;

	 	if(porcentaje1 > 1300){
	 		porcentaje31 =  porcentaje31 + 300;
	 	}
	 	// $("#fondo").css("background-size",porcentaje1+"px "+porcentaje31+"px");
	 	$("#pantalla5").css("background-size", por5+"px "+por52+"px");
	 }

	 if($(window).height() < 700){
	 	porcentaje31 = $(window).height();
	 	porcentajeb = 800;

	 	// $("#fondo").css("background-size",$(window).width()+"px "+porcentajeb+"px");

	 }
	 else{
	 if($(window).width() < 900){

	 	porcentaje = 10 - ((($(window).width() - 900)*10)/55);
	 	porcentaje2 = porcentaje + 100;

	 	porcentajea = $(window).width() -120;
	 	porcentajeb = 800;
	 	porcentajeByPantalla1 = $(window).height() - 120;
	 	// alert(porcentajea);
	 	// $("#fondo").css("cssText","height: "+$(window).height()+"px !important; background-size: "+porcentajea+"% 150% !important;");

	 	// $("#fondo").css("background-size",porcentajeb+"px "+porcentajeb+"px !important;");

	 	$("#pantalla4").css("background-size",porcentajeb+"px "+porcentajeb+"px");

	 	$('#pantalla1').css('cssText',  'position:relative; height:'+porcentajeByPantalla1+'px !important; position:relative;');
	 	$("#pantalla2").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	if(porcentajeb <= 1130){
	 		$("#pantalla3").css("cssText", "position:relative;");
	 	}
	 	else{
	 		$("#pantalla3").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	}

	 	if(porcentaje <= 110){
	 		porcentaje = 100;
	 		$("#pantalla5").css("cssText", "height: "+$(window).height()+"px !important; position:relative; background-position-x:-100px; background-size:"+porcentaje2+"% "+porcentaje+"% !important;");
	 	}
	 	else{
		 	$("#pantalla5").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	}
	 	$("#conten2").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	$("#conten4").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
 
	 }
	}
	});
// $education
// $states



$('.landingRedirect').click(function(){
	window.location.replace(WEBROOT+'career-decision-making-program-registration');
})


$('.contactus').click(function(){
	window.location.replace(WEBROOT+'contact-us');
})


var divClick = false;
	$('body').click(function(){
		$('.navIndex').css('fontWeight', '300');
		$('.popover').each(function(k,v){
			if(	$(this).css('display') == 'block' && !divClick){
				$(this).css('display', 'none');
			}
		})

		divClick = false;
	})

	$('.navIndex').click(function(){
		$('.navIndex').css('fontWeight', '300');
		$('.popover').each(function(k,v){
			$(this).css('display', 'none');
		});

		divClick = true;
		$(this).css('fontWeight', 'bold');
		$(this).find('.popover').css('display', 'block');
	});

	$('.navIndex').hover(function(){
		$('.navIndex').css('fontWeight', '300');
		$('.popover').each(function(k,v){
			$(this).css('display', 'none');
		});

		divClick = false;
		$(this).css('fontWeight', 'bold');
		$(this).find('.popover').css('display', 'block');
	});

	$('.navIndex').mouseout(function(){
		$('.navIndex').css('fontWeight', '300');
	});

	$('.optionNavMobile').hover(function(){
		$('.optionNavMobile').css('backgroundColor', 'white')

		$(this).css('backgroundColor', '#dcd4dc')
	})

	$('.optionNav').hover(function(){
		$('.optionNav').css('color', 'white');
		$('.optionNav').css('backgroundColor', 'rgba(107,60,89,0.5)')

		$(this).css('color', 'white');
		$(this).css('backgroundColor', 'rgba(107,60,89,1)')
	});

	$('.cdda').click(function(){
		window.location.replace(WEBROOT+'career/assessment-career-decision-impediments');
	})	

	$('.goF').click(function(){
		$('body').scrollTo('#pantalla2',900);
	})

	$('.secondScreen').click(function(){
		$('body').scrollTo('#pantalla2',900);
	})

	$('.threeScreen').click(function(){
		$('body').scrollTo('#pantalla3',900);
	})

	$('.fourScreen').click(function(){
		$('body').scrollTo('#pantalla4',900);
	})

	$('.fiveScreen').click(function(){
		$('body').scrollTo('#pantalla5',900);
	})

	$('.career_information').click(function(){
		window.location.replace(WEBROOT+'career/big-picture');
	})
	
	$(document).ready(function(){
		$(window).scroll(function() {
  			var $h1 = $("#pantalla3");
  			var $h2 = $("#pantalla4");

  			var window_offset2 = $h2.offset().top - $(window).scrollTop();
  			var window_offset = $h1.offset().top - $(window).scrollTop();

  			if(window_offset <= 0 && window_offset > -1130 || window_offset2 <= 0 && window_offset2 > -1130){
  				// $('#meB').css('backgroundColor','rgba(0,0,0, 0.5)');
  			}
  			else{
  				// $('#meB').css('backgroundColor','rgba(255,255,255, 0.5)');
  			}
		});
	})
</script>


<script type="text/javascript">
var i=0;
var p=["a successful","an inspired","a fulfilling"];
var num_c = 0;
var velocidad = 50;
var velocidadBor = 10;

function escribir(){
	document.getElementById("divE").innerHTML=p[i].substr(0,num_c)+"|";
	num_c++;
	if (num_c<=p[i].length){
		setTimeout("escribir()", velocidad);
	}else{
		setTimeout("borrar()",2000);
	}
}
function efectomaquina() {
	num_c=0;
	escribir();
}

function borrar() {
	document.getElementById("divE").innerHTML=p[i].substr(0,num_c)+"|";
	num_c--;
	if (num_c>=0){
		setTimeout("borrar()", velocidadBor);
	}
	else{
		i=(i+1) % 3;
		setTimeout("efectomaquina()",velocidad);
	}
	
}
setTimeout("efectomaquina()",velocidad);

$('#menu_user_mobile_icon').click(function(){
	if($('#popover798251').hasClass('display_block'))
		$('#popover798251').removeClass('display_block');
	else
		$('#popover798251').addClass('display_block');
});

</script>