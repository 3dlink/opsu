<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MENTOR. | Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link
	href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic'
	rel='stylesheet' type='text/css'>
	<?php
	echo $this->Html->css ( '../library/bootstrap/css/bootstrap.css' );
	echo $this->Html->css ( 'mentr-backend' );
	echo $this->Html->css ( 'mentr-backend_d' );
	echo $this->Html->css ( 'career_guidance.css' );
	echo $this->Html->script ( 'jquery-1.11.2.js' );
	
	?>
			<?php 	echo $this->Html->script('googleAnalytics.js'); ?>

	<style>

h3{
	font-weight: bold; 
	font-size:20px;
}

#menu-div-principal{
	
}
	
	.Footer {
		padding: 35px 92px 45px 85px;
		height: 100% !important;
	}
	input{
		padding-left: 20px;
		font-size: 20px;
	}
header {
	/*padding: 20px 30px 0 85px;*/
	min-height: inherit !important;
	background-color: white;
	/*width: 100%;*/
	width: 1170px;
	color: black;
}

#legal-content {
	  /*width: 100%;*/
  padding: 13px 30px 40px 30px;
}
input{
	font-size: 20px !important;
}
textarea{
	font-size: 20px !important;
}
li {
	list-style-type: none;
}

#titulo_header {
	font-size: 40px;
	padding-left: 45px;
	color: inherit;
}

p {
	color: inherit;
}

.inputMore1, .inputMore2 {
	display: none;
}

.option {
	cursor: pointer;
}

.rowMentoring {
	min-height: 80px;
	border-top: 1px solid #E6E6E6;
	padding-top: 25px;
}

.titleRow {
	width: 35%;
	float: left;
	font-weight: bold;
}

.formRow {
	width: 65%;
	float: left;
}
.dropdown-menu>li>a {
	color: #9B9B9B;
}

.radioB {
	margin-right: 10px;
	float: left;
	border: 1px solid #9a9a9a;
	width: 20px;
	height: 20px;
	border-radius: 10px;
}

.radioBchecked {
	display: none;
	background: #ff6633;
	width: 73%;
	border-radius: 10px;
	margin: 0 auto;
	margin-top: 2px;
	height: 70%;
}

.optionValue {
	background-color: white;
	height: 40px;
	border: 2px solid #fbae95;
	border-radius: 5px;
	text-align: center;
	padding: 5px 40px 7px 40px;
	font-size: 20px;
	font-weight: 300;
	display: inline;
	cursor: pointer;
	margin-bottom: 20px;
	display: inline;
}

.selecThis {
	color: white;
	background-color: #ff6633;
}

.input-text input {
	width: 100%;
	height: 40px;
	font-size: 20px;
}

.input-text {
	margin-top: 20px;
}

.input-text-area {
	margin-top: 15px;
	font-size: 20px;
}

.groupname {
	margin-top: 25px;
}

.name {
	width: 255px;
	height: 40px;
	display: inline;
}

.email {
	width: 445px;
	height: 40px;
	display: inline;
	margin-left: 30px;
}

.input-text-area textarea {
	width: 100%;
	height: 120px;
}

.message-succes {
	border-radius: 6px;
	display: none;
	width: 100%;
	height: inherit;
	background-color: #add633;
	margin-bottom: 0px;
	margin-top: 40px;
}

#legal-content-top {
	width: 100%;
	margin-top: 40px;
	/*text-align: center;*/
}

#legal-content-top-mobile {
	width: 100%;
	margin-top: 25px;
	text-align: center;
	display: none;
}

.message-succes-texto {
	padding: 1px 20px;
}

.message-succes-texto h3{
	margin-top: 8px;
	
	
}




@media ( max-width : 950px) {	
.Footer {
		padding: 35px 92px 45px 40px !important;;
	}
	#content-menu-div-principal > div > div> p{
		font-weight: bold !important;
		font-size: 20px !important;
	}

}

.message-succes-imagen {
	float: left;margin: 20px 30px;
}

.message-p-mobile{
	display : none;
}

@media ( max-width : 750px) {
 p {
    font-size: 18px;
  }
	.Footer{
		width: 100% !important;
		padding: 35px 35px 45px 35px !important;
	}
	.Footer br{
		display: none;
	}

	#legal-content{
		/*background-color: #f0f0f0;*/
	}

	header {
		width: 100%;
		float: left;
		  padding-bottom: 25px;
	}

	.message-p-web{
	display : none;
	}

	.message-p-mobile{
	display : block;
	}
	#titulo_header {
		font-size: 30px;
	}
	.message-succes-texto {
		  margin-right: 0;
		    margin-left: 67px;
	}
	.message-succes {
		padding: 1px 1px 1px 1px;
	}
	.message-succes-imagen {
		margin-right: 25px;
	}
	#legal-content {
		padding: 0px 35px 40px 35px;
	}
	#legal-content-top {
		display: none;
	}
	#legal-content-top-mobile {
		display: block;
	}
	#separador_header {
		/*display: none;*/
	}
	.name {
		width: 170px;
	}
	.email {
		width: 370px;
	}
}

@media ( max-width : 720px) {
	
	#selecThis{
		margin-left: 20%;
	}
	
	.email {
		width: 100%;
		margin-top: 20px;
		margin-left: 0;
	}
	
	.name {
		width: 100%;
	}

}

@media ( max-width : 500px) {
	.name {
		width: 100%;
	}
	#legal-content-top-mobile  .optionValue {
		width: 100% !important;
		display: block !important;
		margin-left: 0 !important;
	}
	#legal-content  h1 {
		
	}
	.email {
		width: 100%;
		margin-top: 20px;
		margin-left: 0;
	}
}

</style>
<script>
$(document).ready(function(){
	$('.optionValue').click(function(){
		if(!$(this).hasClass('selecThis') ){
		    $('.optionValue').removeClass('selecThis');
			$(this).addClass('selecThis');
			
		}
		if($(this).data('active') == 1){
			$('#legal-content-form1').css('display' , 'block');
			$('#legal-content-form2').css('display' , 'none');
			$('#legal-content-form3').css('display' , 'none');
		}

		if($(this).data('active') == 2){
		    $('#legal-content-form1').css('display' , 'none');
			$('#legal-content-form2').css('display' , 'block');
			$('#legal-content-form3').css('display' , 'none');

		}

		if($(this).data('active') == 3){
		    $('#legal-content-form1').css('display' , 'none');
			$('#legal-content-form2').css('display' , 'none');
			$('#legal-content-form3').css('display' , 'block');

		}
		

		
	});

	$('#form1').click(function(){
	    var problem = $('#problem').val();
	    var details = $('#details').val();
	    var email = $('#email1').val();
	    var name = $('#name1').val();
	    $("#msj_1").css('display','block');

	    $(this).css('display','none');
	    $.ajax({
			url:WEBROOT+'Pages/sendMailproblem/',
			data : {problem : problem , details : details , name : name , email : email},
			dataType: 'json',
			success: function(data){
				if(data == 1){
						
					}
			},
			error: function(a,e,i){
				console.log(a);
			}
		});

	});

	$('#form2').click(function(){
	    //var problem = $('#problem').val();
	    var details = $('#details2').val();
	    var email = $('#email2').val();
	    var name = $('#name2').val();
	    $("#msj_2").css('display','block');

	    $(this).css('display','none');
	    $.ajax({
			url:WEBROOT+'Pages/sendMailproblem2/',
			data : {details : details , name : name , email : email},
			dataType: 'json',
			success: function(data){
				if(data == 1){
						
					}
			},
			error: function(a,e,i){
				console.log(a);
			}
		});

	});

	$('#form3').click(function(){
	    //var problem = $('#problem').val();
	    var details = $('#details3').val();
	    var email = $('#email3').val();
	    var name = $('#name3').val();
	    $("#msj_3").css('display','block');

	    $(this).css('display','none');
	    $.ajax({
			url:WEBROOT+'Pages/sendMailproblem3/',
			data : {details : details , name : name , email : email},
			dataType: 'json',
			success: function(data){
				if(data == 1){
						
					}
			},
			error: function(a,e,i){
				console.log(a);
			}
		});

	});


});


	</script>
</head>




<body>

	<?php echo $this->element('menu_negro')?>

	<header>
		<div>
			<div id="logo_legal" style="cursor:pointer;">
				<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			</div>
			<div id="titulo_header" style="margin-top:15px; font-size:24px; color: #333333;">Contact Us</div>
		</div>
		<div id="separador_header"></div>
	</header>



	<section id="legal-content">
		<div style="width: 100%;">
			<h1 style="font-weight: bold; font-size:20px;">How can we help?</h1>
		</div>
		<div id="legal-content-top" style="">

			<div style="width: 350px;" class="optionValue selecThis"
				data-active="1">Report a problem</div>
			<div style="width: 185px; margin-left: 10px; margin-right: 10px;"
				class="optionValue " data-active="2">General inquiry</div>
			<div style="width: 215px;" class="optionValue " data-active="3">Send feedback</div>


		</div>

		<div id="legal-content-top-mobile" style="">

			<div
				style="width: 350px; overflow: hidden; display: inherit; /* text-align: center; */ "
				class="optionValue selecThis" id="selecThis" data-active="1">Report a problem</div>
			<div style="width: 185px;  overflow: hidden; margin-left: 10px; margin-right: 10px;"
				class="optionValue " data-active="2">General inquiry</div>
			<div style="width: 215px;  overflow: hidden;" class="optionValue " data-active="3">Send feedback</div>


		</div>
		<div style="margin-top: 25px;" id="legal-content-form1">
			<h3>What type of problem have you encountered?</h3>
			<div class="input-text" style="width: 100%; ">
				<input type="text" id="problem"
					placeholder="e.g. I cannot see my quest results" size="150" />
			</div>

			<h3 style="margin-top:25px; margin-bottom: 25px;">Give us more details</h3>
			<p>In order for us to properly identify and fix this issue, please provide as much specific detail as you can. If you have encountered a bug, tell us what you did, what you expected to happen, and what actually happened.</p>
			<div class="input-text-area" style="width: 100%; margin-bottom: 5px; margin-top:25px;">
				<textarea id="details"></textarea>
			</div>

			<h3>Your contact details</h3>

			<div class="groupname" style="width: 100%;">
				<input type="text" placeholder="Your name" class="name" id="name1" />
				<input type="text" placeholder="Your email" class="email"
					id="email1" />
			</div>

		<div id="msj_1" class="message-succes" style="">

			<img src="<?php echo $this->webroot;?>img/Check.png" style=""
				class="message-succes-imagen" />
			<div style="" class="message-succes-texto">
				<h3 style="font-weight: bold;">Thank you. we’ll be
					in touch.</h3>
				<p class="message-p-mobile" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes <br>much less.</p>
				<p class="message-p-web" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes much less.</p>
					
			</div>
		</div>
			<button
				style="font-size: 18px; font-weight: 400; height: 45px; width: 160px;"
				type="button" class="save quiz-result-btn" id="form1">Email us</button>
		</div>
		<div id="legal-content-form2" style="margin-top: 25px; display: none;">
			<h3>What’s on your mind?</h3>
			<div class="input-text-area"
				style="width: 100%; margin-bottom: 5px; margin-top: 25px;">
				<textarea id="details2"></textarea>
			</div>

			<h3>Your contact details</h3>

			<div class="groupname" style="width: 100%;">
				<input type="text" placeholder="Your name" class="name" id="name2" />
				<input type="text" placeholder="Your email" class="email"
					id="email2" />
			</div>

		<div id="msj_2" class="message-succes" style="">

			<img src="<?php echo $this->webroot;?>img/Check.png" style=""
				class="message-succes-imagen" />
			<div style="" class="message-succes-texto">
				<h3 style="font-weight: bold;">Thank you. we’ll be
					in touch.</h3>
				<p class="message-p-mobile" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes <br>much less.</p>
				<p class="message-p-web" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes much less.</p>
					
			</div>
		</div>
			<button
				style="font-size: 18px; font-weight: 400; height: 45px; width: 160px;"
				type="button" class="save quiz-result-btn" id="form2">Email us</button>

		</div>
		
		<div id="legal-content-form3" style="margin-top: 25px; display: none;">
			<h3>We love feedback! What can we do
				better?</h3>
			<div class="input-text-area"
				style="width: 100%; margin-bottom: 5px;">
				<textarea id="details3"></textarea>
			</div>

			<h3>Your contact details</h3>

			<div class="groupname" style="width: 100%;">
				<input type="text" placeholder="Your name" class="name" id="name3" />
				<input type="text" placeholder="Your email" class="email"
					id="email3" />
			</div>
		<div id="msj_3" class="message-succes" style="">

			<img src="<?php echo $this->webroot;?>img/Check.png" style=""
				class="message-succes-imagen" />
			<div style="" class="message-succes-texto">
				<h3 style="font-weight: bold;">Thank you. we’ll be
					in touch.</h3>
				<p class="message-p-mobile" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes <br>much less.</p>
				<p class="message-p-web" style="font-size: 20px; margin-top: -5px; font-weight: 300;">We
					usually take a working day to reply, sometimes much less.</p>
					
			</div>
		</div>
			<button
				style="font-size: 18px; font-weight: 400; height: 45px; width: 160px;"
				type="button" class="save quiz-result-btn" id="form3">Email us</button>
		
		</div>
			



	</section>

<?php echo $this->element('footer_uno')?>

<script type="text/javascript">
$('#logo_legal').click(function(){
		if( "<?php echo $this->UserAuth->getUserId();?>" != ""){
			window.location = "<?php echo $this->webroot; ?>"+'career_program/dashboard';
		}
		else{
			window.location = "<?php echo $this->webroot; ?>";
		}
	})
</script>

<style type="text/css">

		.Footer > div{
			  width: 1110px !important;
		}

		@media ( max-width: 750px){
			.Footer > div{
				width: 100% !important;
			}
		}

</style>

<!--

	<footer class="Footer">
		<div style="border-bottom: 2px solid #e4bec3; padding-bottom: 20px;">
			<img style="width: 140px; height: 25px;"
				src="<?php echo $this->webroot.'img/logo3.png';?>">
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div class="footer_hola">Mentor.</div>
			<div class="footer_chao"><a href="<?php echo $this->webroot;?>aboutus">About MENTOR.</a></div>
			<div class="footer_chao">Become a Mentor</div>
			<div><a href="<?php echo $this->webroot;?>contactus">Feedback, Ideas & Help</a></div>
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright &copy; 2015 Joinmentor.com</div>
			<div>
				<a href="<?php echo $this->webroot;?>/start/legalPage">Privacy
					Policy</a>
			</div>
			<div>
				<a href="<?php echo $this->webroot;?>/start/legalPage">Terms of Use</a>
			</div>
		</div>
		<div
			style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
			<div>
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="<?php echo $this->webroot;?>/start/legalPage">here</a>.
			</div>
		</div>
	</footer>

-->

</body>
</html>
