<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MENTOR. | Smart Career Guidance For A Successful Living</title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php echo $this->Html->css('../library/bootstrap/css/bootstrap.css');?>
	<?php echo $this->Html->css('optionb.css');?>


	<?php echo $this->Html->script('jquery-1.11.2.js');?>
	<?php echo $this->Html->script('../library/jquery.scrollTo.js');?>
		<?php	echo $this->Html->script('lib/bootstrap.min'); ?> 
		
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
<style>

	#myModal, #myModal2, #myModal3 {
		background-color: rgba(0,0,0,0.7);
	}

</style>
<script>
	var ident = "";
	var activate = "";
	if (screen.width<=250){
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.3 maximum-scale=1, user-scalable=yes">');
	}else{
		if (screen.width<=800){
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=0.65, maximum-scale=1, user-scalable=yes">');
		}else{
			$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">');
		}
	}
</script>
<body>


<!-- Modal Login-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="  margin-top: 25vh;">
    <div class="modal-content" style="  height: 340px; width: 540px;">
     <!--  <div class="modal-header">
         
      </div> -->
      <div class="modal-body">
      	<button type="button" style="padding-left: 2px; line-height: 0.4; opacity: 1;  border: 2px solid black; border-radius: 20px; height: 30px; width: 30px; " class="close" data-dismiss="modal" aria-label="Close">
      		<span style=" font-size: 30px; font-weight: 300;" aria-hidden="true">&times;</span>
      	</button>
        <h4 style="text-align: center; font-size: 24px;" class="modal-title" id="myModalLabel">Log in</h4>
      	
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
				Log in
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
		      		<button id="sendEmail" type="button" style="  font-weight: 300; font-size: 20px; margin-top:0px; width: 230px; height: 50px;" class="quiz-result-btn">
						Send password reset
					</button>
		      	</div>
      		</div>

      		<div class="secondModalForgot" style="display:none;">
		      	<div style="background:#abd430; margin-top: 30px; width:460px; height: 70px; margin-left:25px;   border-radius: 10px; font-size:20px;">
		     		<div style="width:80px;  float: left;">
		     			<span style=" margin-left: 30px; margin-top: 15px; color: white; height: 35px; width: 35px; border: 2px solid white; border-radius: 20px; text-align: center; padding-top: 5px; " class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		     		</div>

		     		<div style="font-weight:300;margin-left: 20px; padding-top:5px;  float: left;">
		     			We just send a password reset email to: <br /> <span id="emailForSend" style="font-weight:bold;"></span>
		     		</div>
					<div style="clear:both"></div> 
		     		<div style="  margin: 0 auto; margin-top:20px; width:385px; ">
		     			When you recive the email, click on the link inside to reset your password. <br /> <br /> If you don't see the email after a few minutes, check your spam folder
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




	<div id="fondo">
		<div id="degradado" >
			<header id="header1">	
				<div>
					<div id="logo">
						<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">			
					</div>
					<div style="padding-top:45px; float: right;">
						<div class="navIndex" id="solution">Solutions
							 <div class="popover fade bottom in" role="tooltip" id="popover798251" style="display: none;  padding: 0;  background-color: transparent; max-width: initial; top: 75px;  border-radius: 0px;  left: inherit;">
							 	<div class="arrow" style="left: 10%;"></div>
							 	<div class="popover-content" style="color:white;   padding: 0px;">
							 		<div class="optionNav firstScreen" style="background-color: rgba(107,60,89,0.5); padding:4px;">Career Decision impediments Assessment</div>
							 		<hr style="  margin: 0px auto; width: 90%; border-top: 1px solid #976b7d;">
							 		<div class="optionNav fourScreen" style="background-color: rgba(107,60,89,0.5); padding:4px;">Career Decision-Making Program</div>
							 	</div>
							 </div>
						</div>
						<div class="navIndex threeScreen">
							Guidance
						</div>
						<div class="navIndex fiveScreen">
							Mentoring
						</div>
						<div data-toggle="modal" data-target="#myModal" class="navIndex" style="  margin-right: 85px; width: 80px; text-align: center; height: 40px; padding-top: 3px; font-weight: 100; background: rgb(220, 93, 62); margin-top: -4px; border-radius: 7px;">
							Log in
						</div>
					</div>
				</div>
			</header>

			<header id="header2" style="width:100%; display:none;">	
				<div>
					<div id="logo">
						<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">			
					</div>
					<div id="meB" style="  width: 100%; background-color: black; height: 60px; position: fixed; opacity: 0.2;   z-index: 1;"></div>
					<div style="padding-top:15px;   position: fixed; padding-left:45px;   z-index: 1;">
						<div class="navIndex" id="solution">Solutions
							 <div class="popover mobileI fade bottom in" role="tooltip" id="popover798251" style="display: none;  padding: 0; max-width: initial; top: 50px;  border-radius: 0px;  left: inherit;">
							 	<div class="arrow" style="left: 10%;"></div>
							 	<div class="popover-content" style="color:white;   padding: 0px;">
							 		<div class="optionNavMobile firstScreen" style="background-color: white; padding:4px;">Career Decision impediments Assessment</div>
							 		<hr style="  margin: 0px auto; width: 90%; border-top: 1px solid #976b7d;">
							 		<div class="optionNavMobile fourScreen" style="background-color: white; padding:4px;">Career Decision-Making Program</div>
							 	</div>
							 </div>

						</div>
						<div class="navIndex threeScreen">Guidance
						</div>
						<div class="navIndex fiveScreen">Mentoring</div>
						<div data-toggle="modal" data-target="#myModal" class="navIndex" style="  margin-right: 0px; width: 80px; text-align: center; height: 40px; padding-top: 3px; font-weight: 100; background: rgb(220, 93, 62); margin-top: -4px; border-radius: 7px;">Log in</div>

						
					</div>
						
				</div>
			</header>

			<header id="header3" style="width:100%; display:none;">	
				<div>
					<div id="logo">
						<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">			
					</div>
					<div id="meB" style="  width: 100%; background-color: black; height: 60px; position: fixed; opacity: 0.2;   z-index: 1;"></div>
					<div id="iconMen" style="padding-top:15px;   position: fixed; padding-left:45px;   z-index: 1;">
						  <span style="color:white; font-size:125%;" class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
					</div>				
					<div id="menMobi" style="display:none; margin-top: 60px; position: fixed; padding-left: 45px; z-index: 1; background-color: white; opacity: 0.5; width: 50%;">
						<div class="navIndex" style="color:black;  " id="solution">Solutions
							 <div class="popover mobileI fade bottom in" role="tooltip" id="popover798251" style="   width: 100%; font-size: 16px; display: none;  padding: 0; max-width: initial; top: -10px;  border-radius: 0px;    left: 100%;">
							 	<div class="popover-content" style="color:white;   padding: 0px;">
							 		<div class="optionNavMobile firstScreen" style="background-color: white; padding:4px; color:black;color:black;">Career Decision impediments Assessment</div>
							 		<hr style="  margin: 0px auto; width: 90%; border-top: 1px solid #976b7d;">
							 		<div class="optionNavMobile fourScreen" style="background-color: white; padding:4px; color:black;">Career Decision-Making Program</div>
							 	</div>
							 </div>

						</div>
						<div style="color:black;  " class="navIndex threeScreen">Guidance
						</div>
						<div style="color:black;  " class="navIndex fiveScreen">Mentoring</div>
						<div data-toggle="modal" data-target="#myModal" class="navIndex" style="color:black;  ">Log in</div>

						
					</div>

				</div>
			</header>

			<section id="pantalla1" style="position:relative;">
				<div class="titleIndex title1" style="  line-height: 1.3; padding-top: 120px;">Your journey towards a successful <br /> and inspired career starts here
				<br />
				<button type="button" style="  margin-top: 60px; width: 270px; height: 75px;" class="firstScreen quiz-result-btn">
					SET FORTH
				</button>
				</div>

				<div style="margin: 0 auto; background-color: rgba(256,256,256,0.5); float: left; width: 100%; position: absolute; bottom: 0px;">
					<div class="divBig" style="  width: 60%; margin: 0 auto;">
						<div style="float:left; width: 105px; height: 105px; margin-left: 20px;">
						<img style="margin-top: 10px; width: 80%; height: 80%; border-radius: 100px; border: 3px solid white;"  src="<?php echo $this->webroot.'img/index/women_drink.png';?>">
						</div>
						<div class="textComent1" style="font-size:24px;   padding-top: 35px; padding-left: 20px; float: left; font-style: oblique;">
							“The most complete career decision program out there”
						</div>
					</div>
				</div>

			</section>
		</div>
	</div>
	<div style="clear:both"></div>

	<section id="pantalla2" style="  position: relative;">
	 	<div id="conten2">

		 	<div class="titleIndex">Discover Your Career Decision Impediments</div>
			<div id="arrow" style="  width: 89%; margin-top: -2%; height: 95%; position: absolute;">
				<img style="height: 100px; position: absolute; right: 100px;" src="<?php echo $this->webroot.'img/index/arrow_index.png';?>">			
			</div> 

			 <div id="firstContent2" style="float:left;  margin-top: 4%;   margin-left: 15%;  width:25%; height: 280px; text-align:justify; font-size:18px; color:white; font-weight: 100;">
				<div id="train" style="float: left; width: 105px; height: 105px;">
					<img style="width: 100%; height: 100%; border-radius: 100px; border: 3px solid #cbbfcb;"  src="<?php echo $this->webroot.'img/train.jpg';?>">			
				</div>
				<div style="margin-left: 125px;   width: 100%;  font-weight: 300;   line-height: 30px;">
					A successful and inspired career is an important step towards leading a fulfilling life, but making good career decisions is no walk in the park. With so many choices and options to weigh up, it’s no wonder so many people find it hard to know what to do.<br/><br/>
					Our free assessment helps <b>identify your career decision-making impediments</b> and offers advice on how to overcome them.
				</div>
			</div>
			<div id="secondContent2" style="padding:35px 30px 15px 25px; float:right; width: 25%; border:3px solid #A79BAA; background-color: rgba(147, 108, 131,0.5); margin-right:18%; margin-top: 2%;"> 
				<div id="firstSecondContent2" style="font-size:150%; font-weight: 300; color:white;line-height: 30px; text-align:justify;">
					Find out the biggest challenges you face in less than 5 minutes
				</div>
				
				<div style="  text-align: center;">
					<button type="button" style=" font-size: 150%; margin-top: 35px; width: 90%; height: 90px;" class="cdda quiz-result-btn">
						Start the FREE assessment now
					</button>
				</div>
				
				<div style="text-align:center; font-size:100%; color:white; font-weight: 300;">
					Less than 5 minutes. No cost. Just awesome.
				</div>
			</div>
			<div id="secondContentAux2" style="display:none; padding:35px 30px 15px 25px; float:right; width: 65%; border:3px solid #A79BAA; background-color: rgba(147, 108, 131,0.5); margin-right:18%; margin-top: 2%;"> 
				<div id="firstSecondContent2" style="font-size:130%; font-weight: 300; color:white;line-height: 30px; text-align:justify;">
					Find out the biggest challenges you face in less than 5 minutes
				</div>
				
				<div style="  text-align: center;">
					<button type="button" style=" font-size: 150%; margin-top: 35px; width: 90%; height: 40%;" class="cdda quiz-result-btn">
						Start the FREE assessment now
					</button>
				</div>
				
				<div style="text-align:center; font-size:100%; color:white; font-weight: 300;">
					Less than 5 minutes. No cost. Just awesome.
				</div>
			</div>
			<div id="firstContentAux2" style="background-color:rgba(81,40,79,0.5); display:none; float:left;  margin-top: 7%; width:100%; text-align:justify; font-size:80%; color:white; font-weight: 100;">
				<div style="padding:20px; font-weight: 300;   line-height: 30px;">
					Making wise career choices can ease the path towards a fulfilling life. However, it’s a complex process. There are many aspects that are to be considered and so many alternatives. Most people face difficulties in making their career decisions.<br/>
					This free assessment will help you <b>identify your career decision making impediments</b> and offers you advice on how to manage them.
				</div>	
			</div>

			<div style="margin: 0 auto; background-color: rgba(256,256,256,0.5); float: left; width: 100%; position: absolute; bottom: 0px;">
				<div class="secondBig" style="  width: 60%; margin: 0 auto;">
					
					<div style="float:left; width: 105px; height: 105px; margin-left: 20px;">
						<img style="margin-top: 10px; width: 80%; height: 80%;"  src="<?php echo $this->webroot.'img/index/like.png';?>">
					</div>
					
					<div class="textComent1" style="font-size:24px;  padding-top: 35px; padding-left: 20px; float: left; font-style: oblique;">
						Based on scientific research on career decision-making
					</div>
				</div>
				<div class="nextScreen threeScreen" style="padding-top: 30px; border-left: 1px solid #998295; float: right; text-align: center; width: 120px; padding-bottom: 15px;">
					<img src="<?php echo $this->webroot.'img/index/next-circle.png';?>">
				</div>
			</div>

		</div>
	</section>
	<div style="clear:both"></div>

	<section id="pantalla3" style="position:relative;">
		<div class="titleIndex" style="color:black;">Career Guidance</div>

		<div class="content3Text" style="margin-left:20px; margin-right:20px; text-align:center; font-size:150%; font-weight: 300; padding-top:25px;"> Get all the help you need along the way with our wide range of career guidance resources. </br>Learn how to make effective decisions and overcome the obstacles that stand in the way of career success. </div>
		<div class="firtsContent3" style="width: 1060px; margin:0 auto; padding-top:60px;">
			<div class="iconsI" style="float:left;">
				<img onclick="window.location.href = WEBROOT+'career/big-picture'"  style="cursor:pointer;" src="<?php echo $this->webroot.'img/index/big_picture_index.png';?>">
				<img onclick="window.location.href = WEBROOT+'career/self-knowledge'" class="secondImg3" style="cursor:pointer; padding-left: 80px;" src="<?php echo $this->webroot.'img/index/know_yourself_index.png';?>">	
			</div>	

			<div class="iconsI secondGroup3" style="float:left;">
				<img onclick="window.location.href = WEBROOT+'career/how-to-choose'" style="cursor:pointer;  padding-left: 80px;"  src="<?php echo $this->webroot.'img/index/how_to_choose_index.png';?>">			
				<img onclick="window.location.href = WEBROOT+'career/job-hunting'" class="secondImg3" style="cursor:pointer;  padding-left: 80px;"  src="<?php echo $this->webroot.'img/index/job_hunting_index.png';?>">			
			</div>

		</div>


		<div style="margin: 0 auto; float: left; width: 100%; position: absolute; bottom: 0px;">
			<div class="secondBig" style="  width: 60%; margin: 0 auto;">
				<div style="float:left; width: 105px; height: 105px; margin-left: 20px;">
				</div>
				<div class="textComent1" style="font-size:24px;   padding-top: 35px; padding-left: 20px; float: left; font-style: oblique;">
				</div>
			</div>
			<div class="nextScreen fourScreen" style="padding-top: 30px; border-left: 1px solid #998295; float: right; text-align: center; width: 120px; padding-bottom: 15px;">
				<img src="<?php echo $this->webroot.'img/index/next-circle.png';?>">
			</div>
		</div>
	</section>
	
	<div style="clear:both"></div> 

	<section id="pantalla4" style="position: relative;">
	 	
		<div id="conten4">
		<div class="titleIndex">The Career Decision-Making Program</div>
		<div class="titleIndex" style="  padding-top: 0px !important;font-weight: 300; font-size:24px; "> for Students & Young Adults</div> 

 		<div class="realFrist4" style="width: 70%; height: 310px; margin-top: 100px; margin-left: 85px;">
				<div id="firstContent4" style="  font-size: 180%; font-weight: 300; color: white; text-align: justify; width: 100%; ">
					Sign up and enhance your career potential today! Learn key decision-making skills, explore career options according to your personal preferences and abilities, and create a vision for your future using professional career guidance techniques. 
				</div>
				<div style="  text-align: center;">
					<button id="" type="button" style="  margin-top: 60px; width: 270px; height: 75px;" class="landingRedirect quiz-result-btn">
						LEARN MORE
					</button>
				</div>
			</div> 
		</div>


		<div style="margin: 0 auto; background-color: rgba(256,256,256,0.5); float: left; width: 100%; position: absolute; bottom: 0px;">
			<div class="thirdBig" style="  width: 80%; margin: 0 auto;">
				<div style="float:left; width: 105px; height: 105px; margin-left: 20px;">
						<img style="margin-top: 10px; width: 80%; height: 80%; border-radius: 100px; border: 3px solid white;"  src="<?php echo $this->webroot.'img/train.jpg';?>">
						</div>
				<div class="textComent1" style="font-size:24px;   padding-top: 35px; padding-left: 20px; float: left; font-style: oblique;">
					“Mentor’s program helped me discover the right choices to make for my career”
				</div>
			</div>
			<div class="nextScreen fiveScreen" style="padding-top: 30px; border-left: 1px solid #998295; float: right; text-align: center; width: 120px; padding-bottom: 15px;">
				<img src="<?php echo $this->webroot.'img/index/next-circle.png';?>">
			</div>
		</div>

	</section>
	<div style="clear:both"></div>

	<section id="pantalla5">
		<div class="titleIndex">Find a Great Mentor</div>
		<div class="content5" style="  width: 750px;   margin-right: 80px; height: 400px; float: right;">
			<div class="secondContent5" style="font-size:28px; font-weight: 300;   margin-top: 40px; color:white; text-align:justify;">
				Starting out is tough. Whether you’re a college grad or founding your own business, things can get overwhelming pretty quickly. Thankfully you’re not the first to walk this path. MENTOR.’s Career Decision-Making Program connects you with professionals from your career of choice. Share their experiences, insights and support, and set yourself up for success. 
			</div>
			<div style="  text-align: center;">
				<button id="" type="button" style="  margin-top: 60px; width: 270px; height: 75px;" class="quiz-result-btn landingRedirect">
					LEARN MORE
				</button>
			</div>
		</div>
	</section>	
	<div style="clear:both"></div> 



<?php echo $this->element('footer_uno')?>


</body>
</html>

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
				console.log(e);
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
			url:WEBROOT+'/forgotPassword',
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
					$('.emailInvalid').css('display', 'block');
					$('.passInvalid').css('display', 'block');
					$('.loginIncorrect').css('visibility', 'visible');
					$('.emailValid').css('display', 'none');
				}else{
					if(data == 2){
						window.location.replace(WEBROOT+'dashboard');
					}else{
						window.location.replace(WEBROOT+'career_program/dashboard');
						// mixpanel.identify(data);
						// mixpanel.track("login");
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


	var porcentaje = 0;
	$(window).resize(function() { //para madu
	 	porcentaje = $(window).width();
	 	porcentaje2 = $(window).height();
	 	por5 = porcentaje + 100;
	 	por52 = porcentaje2 + 100;
	 	if(porcentaje <= porcentaje2){
	 		$("#fondo").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 		$("#pantalla4").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 		$("#pantalla5").css("background-size",porcentaje2+"px "+porcentaje2+"px");
	 	}
	 	else{
	 		if(porcentaje > 1300){
	 			porcentaje2 =  porcentaje2 + 200;
	 		}
	 		$("#fondo").css("background-size",porcentaje+"px "+porcentaje2+"px");
	 		$("#pantalla2").css("background-size",porcentaje+"px "+porcentaje2+"px");
	 		$("#pantalla4").css("background-position-y:","20px");
	 		$("#pantalla4").css("background-size",porcentaje+"px "+porcentaje2+"px");
	 		$("#pantalla5").css("background-size", por5+"px "+por52+"px");
	 	}
	});

	porcentaje = 0;
	$(document).ready(function(){ //para que funcione

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
	 	$("#fondo").css("height", he+"px");
	 	$("#pantalla1").css("height", (he - 118)+"px");
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
	 		porcentaje31 =  porcentaje31 + 200;
	 	}
	 	$("#fondo").css("background-size",porcentaje1+"px "+porcentaje31+"px");
	 	$("#pantalla5").css("background-size", por5+"px "+por52+"px");
	 }

	 if($(window).width() < 900){
	 	porcentaje = 10 - ((($(window).width() - 900)*10)/55);
	 	porcentaje2 = porcentaje + 100;

	 	porcentajea = $(window).width();
	 	porcentajeb = $(window).height();

	 	$("#fondo").css("background-size",porcentajeb+"px "+porcentajeb+"px");

	 	$("#pantalla4").css("background-size",porcentajeb+"px "+porcentajeb+"px");

	 	$('#pantalla1').css('cssText',  'position:relative; height:'+pn2+'px !important; position:relative;');
	 	$("#pantalla2").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	$("#pantalla3").css("cssText", "height: "+$(window).height()+"px !important; position:relative;");
	 	

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
	});





	$('.landingRedirect').click(function(){
		window.location.replace(WEBROOT+'career-decision-making-program-registration');
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
		$('.navIndex').css('fontWeight', '100');
		$('.popover').each(function(k,v){
			$(this).css('display', 'none');
		});

		divClick = true;
		$(this).css('fontWeight', '400');
		$(this).find('.popover').css('display', 'block');
	});

	$('.navIndex').hover(function(){
		console.log('.navIndex');
		$('.navIndex').css('fontWeight', '300');
		$('.popover').each(function(k,v){
			$(this).css('display', 'none');
		});

		divClick = false;
		$(this).css('fontWeight', '400');
		$(this).find('.popover').css('display', 'block');
	});

	$('.optionNavMobile').hover(function(){
		$('.optionNavMobile').css('backgroundColor', 'white')
		$('.optionNavMobile').css('color', 'black');

		$(this).css('color', 'white');
		$(this).css('backgroundColor', 'rgb(84, 47, 69)')
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

	$('.firstScreen').click(function(){
		$('body').scrollTo('#pantalla2',900);
	})

	$('.secondScreen').click(function(){
		$('body').scrollTo('#pantalla2',900);
	})

	$('.threeScreen').click(function(){
		$('body').scrollTo('#pantalla3',900);
	})

	$('.career_information').click(function(){
		window.location.replace(WEBROOT+'career/big-picture');
	})

	$('.fourScreen').click(function(){
		$('body').scrollTo('#pantalla4',900);
	})

	$('.fiveScreen').click(function(){
		$('body').scrollTo('#pantalla5',900);
	})
	
	$(document).ready(function(){
		$(window).scroll(function() {
  			var $h1 = $("#pantalla3");
  			var window_offset = $h1.offset().top - $(window).scrollTop();
  			if(window_offset <= 0 && window_offset > -1130){
  				$('#meB').css('backgroundColor','black');
  			}
  			else{
  				$('#meB').css('backgroundColor','white');
  			}
		});
	})
</script>
