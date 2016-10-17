<?php echo $this->Html->script('quiz/adviser.js');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<style type="text/css">

.no_visible{  
	border-color: #7a5270 !important;
	cursor: inherit;
}

.selected .mentr-ok-btn {
	background-image: none;
	background-color: rgb(153, 204, 0);
}

header #menu_user {
  float: none;
  max-width: none;
}

header #menu_user #menu_user-content {
  padding-left: 30px;
}

.selected {
	border: none !important;
}

#mentr-quiz-nav {
  background: #543458;
  bottom: 0;
  height: 60px;
  position: fixed;
  left: 0;
  width: 100%;
  padding: 0.2em;
}
#mentr-quiz-nav {
  background: #543458;
  bottom: 0;
  height: 60px;
  position: fixed;
  right: 0;
  width: 1280px !important;
  margin: 0 auto;
  padding: 0.2em;
}
#mentr-quiz-nav .div-navContainer {
  max-width: 1225px;
  margin: 0 auto;
  width: 770px;
}
#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
  width: 425px;
  margin: 0;
  float: left;
  margin-left: 16px;
}
.procentaje {
  color: #dcb6bd;
  margin-left: 1em;
}
#mentr-quiz-nav #mentr-quiz-nav-btn-content .btn-nav {
  background-color: rgba(0,0,0,0);
  border-radius: 50%;
  border: 2px solid #e4bec3;
  color: #e4bec3;
  height: 45px;
  margin: 0.5em;
  width: 45px;
}
nav .div-navContainer {
  padding-left: 0 !important;
}

@media (max-width: 1200px){
	#mentr-quiz-nav {
	  width: 100% !important;
	}
}

@media (max-width: 750px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
	  width: 270px;
	  margin-left: 35px;
	}
	.mentr-quiz-progress>div {
	  display: inline-block !important;
	  width: 70% !important;
	}
	#mentr-quiz-nav .div-navContainer {
	  width: 100%;
	}
	.mentr-quiz-progress>div {
	  width: 50% !important;
	}
}
@media (max-width: 430px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
	  width: 160px;
	}
}
</style>

<section class="" id="quiz-container">
		<div id="quiz-wellcome">
			<div id="wellcome">
				<h2>
					Welcome and congratulations on your decision to become a mentor
				</h2>
				<h4>
					Guiding young people in their pursuit for a fullfilling career is a very rewarding activity and you’ve taking the first step towards it. Help us match you with relevant mentees by answering a few questions.
				</h4>	
			</div>
		</div>			
	<form action="">
		<div class="mentr-quiz-content" >
			<div class="question1 visible" id="question1">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_1"><big>1</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						How should we address you?
					</label>
				</div>
				<div class="mentr-quiz-respond one">
					<input id="input_1" class="selt titles input_form" style="float:initial;"  readonly data-educa="0" value="Title">
					<div class="btn-group doa" style="">
						<div class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1" >
							<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
						</div>
						<ul class="dropdown-menu menu_desplegable">
							<li><a id="1" class="title se" href="#">Mr.</a></li>
							<li><a id="2" class="title se" href="#">Ms.</a></li>
							<li><a id="3" class="title se" href="#">Mrs.</a></li>
			      </ul>
					</div> 
					<input class="inI input_normal" id="input_2" placeholder="Name">
					<input class="inI input_normal" id="input_3" placeholder="Surname">



					<div id="btn_1_content">
						<span id="selected_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>
			<div class="question" id="question2">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_2"><big>2</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						What's your job title?
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<input class="inI input_normal" id="input_4" placeholder="Job title">
					<div id="btn_2_content">
						<span id="selected_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>
			<div class="question" id="question3">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_3"><big>3</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						In one sentence, explain what you do at work.
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<textarea class="mentr-input-text_inv" value="" id="input_5"></textarea>		
					<div id="btn_3_content">
						<span id="selected_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>
			<div class="question" id="question4">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_4"><big>4</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Wich of the following is more central to your career?
					</label>
				</div>
				<div class="mentr-quiz-respond">

					<div class="multiples_botones">
						<div class="opcion_boton">Learning / Challenging myself</div>
						<div class="opcion_boton">Acomplishing goals</div>
						<div class="opcion_boton">Being creative</div>
						<div class="opcion_boton">Have opportunities for advancement</div>
						<div class="opcion_boton">Working with others</div>
						<div class="opcion_boton">Steady employment</div>
						<div class="opcion_boton">Affect the well-being of other people</div>
						<div class="opcion_boton">Good compensation</div>
						<div class="opcion_boton">Have autonomy</div>
						<div class="opcion_boton">Have a work / life balance</div>
						<div class="opcion_boton">Receive recognition for my work</div>
					</div>


					<div id="btn_4_content" style="float:left;">
						<span id="selected_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>
			<div class="question" id="question5">
				<div>
					<label class=" mentr-quiz-question one">
						<small>
							<span id="index_5"><big>5</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						What would you recommend the most to someone in
							<input id="input_6" class="selt qs5 input_form" style="float:initial;"  readonly data-educa="0" value="Select">
							<div class="btn-group doa" style="">
								<div class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1" >
									<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
								</div>
								<ul class="dropdown-menu menu_desplegable desp_qs5">
									<li><a id="1" class="q5 se" href="#">Middle School</a></li>
									<li><a id="2" class="q5 se" href="#">High School</a></li>
									<li><a id="3" class="q5 se" href="#">College</a></li>
					      </ul>
							</div> 
					looking to pursue your occupation?
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<textarea class="mentr-input-text_inv text_qs5" value="" id="input_7"></textarea>		
					<div id="btn_5_content">
						<span id="selected_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>


			<div class="question" id="question6">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_6"><big>6</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Tell us some of the challenges you’ve been through. We will do our best to introduce you with a mentee facing similar obstacles.
					</label>
				</div>
				<div class="mentr-quiz-respond">

					<div id="q6" class="multiples_botones">
						<div class="opcion_boton">Money</div>
						<div class="opcion_boton">Drugs / addiction</div>
						<div class="opcion_boton">Sexual orientation</div>
						<div class="opcion_boton">Phisical disabilty</div>
						<div class="opcion_boton">Gangs / violence</div>
						<div class="opcion_boton">Gender</div>
						<div class="opcion_boton">Relocation</div>
						<div class="opcion_boton">Family pressure</div>
						<div class="opcion_boton">Ethnicity</div>
						<div class="opcion_boton">Network</div>
						<div class="opcion_boton">Lack of experience</div>
						<div class="opcion_boton">Lack of direction</div>
						<div class="opcion_boton">Self-doubt</div>
						<div id="other" class="opcion_boton">Other</div>
					</div>

					<input class="other" id="input_8" placeholder="">

					<div id="btn_6_content" style="float:left;">
						<span id="selected_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>


			<div class="question" id="question7">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_7"><big>7</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Where do you live most of the time?
					</label>
				</div>
				<div class="mentr-quiz-respond one">
					<input id="input_9" class="selt states qs7 input_form" style="float:initial;"  readonly data-educa="0" value="State">
					<div class="btn-group doa" style="">
						<div class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1" >
							<img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>">
						</div>
						<ul class="dropdown-menu menu_desplegable desp_qs7">
							<?php foreach ($states as $state) { ?>
							<li><a id="<?php echo $state['State']['id']?>" class="state se" href="#"><?php echo $state['State']['name']?></a></li>
							<?php } ?>
			      </ul>
					</div> 

					<div id="btn_7_content">
						<span id="selected_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>


			<div class="question" id="question8">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_8"><big>8</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Indicate the email address you’ll use to mantain correspondence with your mentee
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<div class="email">
						<input class="inI input_normal" id="input_10" style="width:100%;float:left;margin-bottom:30px;" placeholder="email">
						<div class="q9">	
							We won’t share your email address with anyone without your previous approval. You will be able to accept or reject a mentee requesting for your advice before you share your email address with them.
						</div>
					</div>
					<div id="btn_8_content">
						<span id="selected_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>

			<div class="question" id="question9">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_9"><big>9</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Upload a photo or connect your LinkedIn account to use your profile picture
					</label>
				</div>
				<div class="mentr-quiz-respond">


						<div class="avatar">
							<div class="form_holder" id="image">
								<div style="position:relative; cursor:pointer; font-size:20px;font-weight:400;" class="second">
									<div id="MaskUpload" style="top:20px;display: none;position: absolute; height: 210px; width: 210px; padding-top: 70px; color: white; padding-left: 45px;">Upload photo</div>
									<div id="MaskUploadO" style="display: none;position: absolute; height: 190px; width: 190px; border-radius: 100px; background: black; opacity: 0.5; top: 10px; left: 10px;"></div>
									<div id="MaskUpload2" style="top:20px;display: none;position: absolute; height: 210px; width: 210px; padding-top: 70px; color: white; padding-left: 45px;">Change photo</div>
								</div>
								<div style="cursor:pointer;height:210px;" class="image-placeholder image-placeholder2 second">
									<?php if(!empty($obituary)){ ?>
									<?php if($obituary['Orbituary']['image'] == ""){?>
										<img src="<?php echo $this->webroot.'img/dashboard/unImagen.png';?>" style="width: 100%;" class="img-polaroid">
									<?php } else{ ?>
										<img src="<?php echo $this->webroot.'files/'.$obituary['Orbituary']['image'];?>" style="width: 100%;" class="img-polaroid">
										<?php } ?>
									<?php }else{ ?>
									<img src="<?php echo $this->webroot.'img/dashboard/unImagen.png';?>" style="width: 100%;" class="img-polaroid">
									<?php } ?>
								</div>
								<div style="display:none;">
									<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
								</div>
							</div>
							<div class="imageHiddenContent2"></div>
						</div>



					<div id="btn_9_content">
						<span id="selected_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>

			<div class="question" id="question10">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_10"><big>10</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						Decide your privacy level
					</label>
				</div>
				<div class="mentr-quiz-respond">


					<div id="q10">
						<div id="Include" class="check check_seleccionado"></div>
						<h2>
							Include my profile in the list of mentors on MENTOR.’s platform (RECOMMENDED)
						</h2>
						<p>
							Only registered members will be able to see your profile and request for your advice. Your profile won’t be visible outside <b>MENTOR.</b>’s platform. See <a href="">here</a> an example.
						</p>


						<div id="Hide" class="check"></div>
						<h2>
							Hide my profile
						</h2>
						<p>
							Mentees will not be able to see my profile and I will receive request only based on <b>MENTOR.</b>’s matching algorithm.
						</p>
					</div>


					<div id="btn_10_content">
						<span id="selected_10" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>

		</div>

		<div style="clear:both"></div>
		<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell">
					<input class="mentr-btn-submit" id="submintBtn" type="button" value="Submit" >	
					<span class="mentr-desc-btn">
							<label>Press ENTER</label>
					</span>
				</div>
			</div>				
		</div>
		<div id="mentr-quiz-space-nav">
			
		</div>
	</form>

</section>
<nav id="mentr-quiz-nav">
	<div class="div-navContainer">
		<div class="mentr-quiz-progress">
			<div style="display: inline;">
				<div id="mentr-progres-bar">
					<div id="mentr-progres-indicator">
						<div id="mentr-progres-ball"></div>
					</div>
									
				</div>
			</div>
			<span class="procentaje" >0 of 10 completed</span>
		</div>
		<div class="mentr-quiz-buttons-nav" style="text-align: right; display: inline-block; float: right;">
			<div id="mentr-quiz-nav-btn-content">
				<button class="btn-nav no_visible" id="btnUp">
					<img src="/vision_mentr/img/dashboard/arrow1_inactive.png" id="btnUpIMG" alt="">					
				</button>
				<button class="btn-nav" id="btnDown">
					<img src="/vision_mentr/img/dashboard/arrow2.png" id="btnDown" alt="">				</button>
			</div>		
		</div>
		<div style="clear: both;"></div>
	</div>		
</nav>

<script type="text/javascript">

	$('#other').click(function(){
		if($(this).hasClass('opcion_seleccionada')){
			$('.other').css('display','none');
		}else{
			$('.other').css('display','block');
		}
	});

	$('.opcion_boton').click(function(){
		if($(this).hasClass('opcion_seleccionada')){
			$(this).removeClass('opcion_seleccionada');
		}else{
			$(this).addClass('opcion_seleccionada');
		}
	});



	$('#btn_6').click(function(){
		$('#q6 .opcion_seleccionada').each(function(index) {
			console.log($(this).html());
		});
	});



	$('body').click(function(){
		$('.down').each(function(k,v){
			if($(this).parent().hasClass('open')){
				$(this).find('img').attr('src', WEBROOT+"img/down-menu.png");
			}
		}) 
	});
	$('body').click(function(){
		$('.input').each(function(k,v){
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

	$('.title').click(function(){
		var id = $(this).attr('id');
		$('.titles').val($(this).html());
		$('.titles').data('title', id);
		$('body').click();
	});


	$('.state').click(function(){
		var id = $(this).attr('id');
		$('.states').val($(this).html());
		$('.states').data('state', id);
		$('body').click();
	});


	$('.q5').click(function(){
		var id = $(this).attr('id');
		$('.qs5').val($(this).html());
		$('.qs5').data('q5', id);
		$('body').click();
	});

	$('.se').click(function(e){
		return false;
	});


$(function(){
	$("#image").hover(function(){
		if($('.imageHiddenContent2').children().length == 0){
			$(this).find("#MaskUpload").fadeIn();
		}
		else{
			$(this).find("#MaskUpload2").fadeIn();
			$(this).find("#MaskUploadO").fadeIn();
		}
		},
		function(){
			if($('.imageHiddenContent2').children().length == 0){
				$(this).find("#MaskUpload").fadeOut();
  		}
  		else{
  			$(this).find("#MaskUpload2").fadeOut();
  			$(this).find("#MaskUploadO").fadeOut();
  		}
		});        
	});

	$('.second').click(function(){
		$('.btn-upload').click();
	});

	$(document).ready(function(){
		$("#file2").pekeUpload({showPercent: false, theme:'bootstrap', btnText:'Browse', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>articles/upload"});

	});

	$('.one').click(function(){
	// console.log('click');
	var eleme = $(this);
	setTimeout(function(){
		console.log(eleme);
		   eleme.find('.doa').addClass("open"); 
		   eleme.find('.doa > div > img').attr('src', WEBROOT+"img/up-menu.png");
		},10);
	})


	$('#Include').click(function(){
		if(!$(this).hasClass('check_seleccionado')){
			$('#Hide').removeClass('check_seleccionado');
			$(this).addClass('check_seleccionado');
		}
	});
	$('#Hide').click(function(){
		if(!$(this).hasClass('check_seleccionado')){
			$('#Include').removeClass('check_seleccionado');
			$(this).addClass('check_seleccionado');
		}
	});

	$('#btn_10').click(function(){
		$('.check_seleccionado').each(function(index) {
			// console.log($(this).attr('id'));
		});
	});


</script>
