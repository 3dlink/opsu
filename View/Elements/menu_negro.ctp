
	<?php echo $this->Html->script('jquery-1.11.2.js');?>
		<?php	echo $this->Html->script('lib/bootstrap.min'); ?> 

<style>
nav {
	text-align: center;
	font-size: 20px;
}

nav ul ul {
	display: none;
}

nav ul li:hover>ul {
	display: block;
}

nav ul a {
	text-decoration: none;
}

nav ul {
	position: relative;
}

nav ul:after {
	content: "";
	clear: both;
	display: block;
}

nav ul li {
	float: left;
}

nav ul li:hover {
	
}

nav ul li:hover a {
	color: #ffffff;
	font-weight : 500;
}

nav ul li a {
	display: block;
	font-weight: 300;
	text-decoration: none;
	margin-right: 40px;
	  height: 35px;
}

nav ul ul {
	background: #666666;
	border-radius: 0px;
	padding: 0;
	position: absolute;
	top: 40px;
	z-index: 1000;
	list-style-type: none;
	
	
	
}

nav ul ul li {
	float: none;
	text-decoration: none;
	position: relative;
	 width: 420px;
	
}

nav ul ul li a {
	color: #ffffff;
	text-decoration: none;
		margin-right: 0 !important;
		height:  40px;
		padding-top: 6px;
		text-align : left;
		padding-left : 10px;
}

nav ul ul li a:hover {
	background-color: #999999;
}

nav ul ul ul {
	
}

a {
	text-decoration: none !important;
}

a:hover {
	text-decoration: none !important;
}

a:active {
	text-decoration: none !important;
}


.square:before {
    content:"";
    position: absolute;
    right: 0;
    left : 30px;
    top: -10px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 0 10px 10px 10px;
    border-color: transparent transparent #999999 transparent;
    z-index:9999;
    
   
}
.square:after {
    content:"";
    position: absolute;
    right: 0;
    top: -10px;
    width: 0;
    height: 0;
    border-width: 0 17px 17px 17px;
    z-index:9998;
}
.square {
    position: absolute;
    width: 420px;
    z-index: 99999;
}


.gifLoader{
  width: 20%;
    margin-top: -3px;
}


#menu-div-principal{
	height: 60px; 
	background-color: #333333; 
	width: 100%; 
	padding-top: 13px; 
	padding-left: 60px;
}

@media ( max-width : 950px) {
	nav {
		display:none;
	}
	
	#menu-div-principal{
		  padding-left: 35px;
	}
}
</style>

<div style="  background-color: rgba(0,0,0,0.7);" class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
<div style="  background-color: rgba(0,0,0,0.7);" class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
		      	<div style="background:#abd430; margin-top: 18px; width:460px; height: 70px; margin-left:25px;   border-radius: 10px; font-size:20px;">
		     		<div style="width:80px;  float: left;">
		     			<span style=" margin-left: 30px; margin-top: 15px; color: white; height: 35px; width: 35px; border: 2px solid white; border-radius: 20px; text-align: center; padding-top: 5px; " class="glyphicon glyphicon-ok" aria-hidden="true"></span>
		     		</div>

		     		<div style="font-weight:300;margin-left: 20px; padding-top:5px;  float: left;">
		     			We just send a password reset email to: <br /> <span id="emailForSend" style="font-weight:bold;"></span>
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

<div style="" id="menu-div-principal">
	<div id="content-menu-div-principal" style="width:1170px;   float: none; margin:0 auto;"> 
		<div style="width: 175px; float: left ; cursor : pointer;" onclick="window.location.href='<?php echo $this->webroot/*.'start'.*/;?>'">
			<img style="margin-bottom: 10px;"
				src="<?php echo $this->webroot?>img/aboutus/Arrow_right.png" />
			<div style=" display: inline; font-size:20px;"><p style="display:inline; font-size: 20px; color: #dfdfdf;">Back to</p><p style="display:inline; color: #dfdfdf; font-size: 20px;"> Home</p></div>
		</div>
		<div style="float: right;">
			<nav style="float:left;">
				<ul>
					<!-- <li><a href="#">Solutions</a>
						<ul class="square">
							<li><a href="<?php echo $this->webroot;?>start#pantalla2">Career Decision Impediments Assessment</a></li>
							<li><a href="<?php echo $this->webroot;?>career-decision-making-program-registration">Career Decision-Making Program</a></li>
						</ul>
					</li> -->
					<li><a href="<?php echo $this->webroot;?>career/big-picture">Guidance</a></li>
					<!-- 
					<li><a href="<?php echo $this->webroot;?>start#pantalla5">Mentoring</a></li> -->
					<li><a href="" data-toggle="modal" data-target="#myModal">Log in</a></li>
					<li style="margin-right: 20px;"><a href="<?php echo $this->webroot/*.'career-decision-making-program-registration'*/;?>">Sign up</a></li>
				</ul>
			</nav>
		</div>
	</div>
</div>


<script>
	$('#login').click(function(){
		$('#login').attr('disabled', 'disabled');
		$('#login').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
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
				$('#login').html('Log in');
	          
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
		var regularExpresion=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
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

    $(".enterToSend").keyup(function (e) {
      if (e.keyCode == 13) {
          $('#login').click();
      }
  });
</script>

