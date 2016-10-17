<?php echo $this->Html->script('quiz/quiz-1.js');?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>

$(function() {
  $( "#input_21" ).datepicker({
    dateFormat: "dd-mm-yy",
    changeMonth: true,
    changeYear: true,
    showOn: "button",
    maxDate: "0D",
	buttonImage: WEBROOT+"webroot/img/dashboard/calendar.svg",
    buttonImageOnly: true,
    buttonText: "Select date",
    yearRange: "1900:2020"
  });
  $('#input_21').click(function(){
  	$('.ui-datepicker-trigger').click();
  })
  $('#input_21').on('change',function(){
	  var vacios=/^\s*$/;//campos vacios
	  if(vacios.test($('#input_21').val())){
			$('#btn_2_content').css('display','none');
		}else{
			$('#btn_2_content').css('display','inline-block');
		}
  });
});

</script>
<style>
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
  .ui-datepicker-trigger{
    width: 35px;
  	margin-right: 1em;
 }	
.ui-datepicker .ui-datepicker-header
{
font-size: 12px;
background: #51284f;
}
/*Para los días de la semana: Sa Mo ... */
.ui-datepicker th
{
color: #51284f;
}	

/*Para items con los días del mes por defecto */
.ui-datepicker .ui-state-default
{
background: #aca2ac;
}

.ui-datepicker .ui-state-active
{
background: #ffa95c;
color: #FFFFFF;
}
 
</style>
<section class="" id="quiz-container">
		<div id="quiz-wellcome">
			<h2 style="margin-bottom:45px;">
				Welcome, and congratulations on your decision to take this assessment. 
			</h2>
			<h4>
				Building a fulfilling career is an important part of living a successful and inspired life, and this is your first step towards it.
			</h4>	
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
				<div class="mentr-quiz-respond">
					<input class="mentr-input-text" type="text" value="" id="input_1">
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
						What would you like to do next career-wise?
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<div class="mentr-quiz-feel">
						<div class="mentr-quiz-feel-option">
							<div class="img-fell-content">
								<div style="display: table-cell; vertical-align: middle;">
									<img id="C1M" src="<?php echo $this->webroot.'img/1.png';?>">
									<img id="C1N" src="<?php echo $this->webroot.'img/N1.png';?>">
								</div>
							</div>
							<div class="mentr-quiz-feel-respond">
								<span id="selected_2_1" class="">
									<button class="mentr-ok-btn" type="button" id="btn_2_1">A</button>	
								</span>
								<small class="mentr-desc-btn">
									<label>I have no idea</label>
								</small>
							</div>	
						</div>
						<div class="mentr-quiz-feel-option">
							<div class="img-fell-content">
								<div style="display: table-cell; vertical-align: middle;">
									<img id="C2M" src="<?php echo $this->webroot.'img/2.png';?>">
									<img id="C2N" src="<?php echo $this->webroot.'img/N2.png';?>">
								</div>
							</div>
							<div class="mentr-quiz-feel-respond">
								<span id="selected_2_2" class="">
									<button class="mentr-ok-btn" type="button" id="btn_2_2">B</button>	
								</span>
								<small class="mentr-desc-btn">
									<label>
										I have too many <br> ideas
									</label>
								</small>
							</div>
						</div>
						<div class="mentr-quiz-feel-option">
							<div class="img-fell-content">
								<div style="display: table-cell; vertical-align: middle;">
									<img id="C3M" src="<?php echo $this->webroot.'img/3.png';?>">
									<img id="C3N" src="<?php echo $this->webroot.'img/N3.png';?>">
								</div>
							</div>
							<div class="mentr-quiz-feel-respond">
								<span id="selected_2_3" class="">
									<button class="mentr-ok-btn" type="button" id="btn_2_3">C</button>	
								</span>
								<small class="mentr-desc-btn">
									<label>
										I have a reasonably <br>clear idea
									</label>
								</small>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					<!--<input class="mentr-input-text" type="text" value="">
					<button class="mentr-ok-btn" type="button">OK</button>	
					<small class="mentr-desc-btn">
						<label>Press ENTER</label>
					</small>-->
					<div style="clear:both;"></div>
				</div>	
			</div>
			<div class="question" id="question3">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_3"><big>3</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I’m usually afraid of failure
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_1">
								<span id="btnContent">1</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_3_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_2">
							<span id="btnContent">2</span>
						</button>	
					</span>
					<span id="selected_3_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_3">
							<span id="btnContent">3</span>
						</button>	
					</span>
					<span id="selected_3_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_4">
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_3_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_5">
							<span id="btnContent">5</span>
						</button>	
					</span>
					<span id="selected_3_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_6">
							<span id="btnContent">6</span>
						</button>	
					</span>
					<span id="selected_3_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_7">
							<span id="btnContent">7</span>
						</button>	
					</span>
					<span id="selected_3_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_8">
							<span id="btnContent">8</span>
						</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_9">
								<span id="btnContent">9</span>
							</button> 
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
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
						I usually feel that I need confirmation and support for my decisions from a professional person or somebody else I trust
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_1" >
								<span id="btnContent">1</span>
							</button>	
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_4_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_2" >
							<span id="btnContent">2</span>
						</button>	
					</span>
					<span id="selected_4_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_3" >
							<span id="btnContent">3</span>
						</button>	
					</span>
					<span id="selected_4_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_4" >
							<span id="btnContent">4</span>
						</button>	
					</span>
					<span id="selected_4_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_5" >
							<span id="btnContent">5</span>
						</button>
					</span>
					<span id="selected_4_6" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_4_6" >
							<span id="btnContent">6</span>
						</button>	
					</span>
					<span id="selected_4_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_7" >
							<span id="btnContent">7</span>
						</button>	
					</span>
					<span id="selected_4_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_8" >
							<span id="btnContent">8</span>
						</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_9" >
								<span id="btnContent">9</span>
							</button>     
						</span> 
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question5">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_5"><big>5</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I believe that following my passion is a good strategy for choosing my career
					</label>
				</div>
				<div class="mentr-quiz-respond">	
					<span id="selected_5_1" class="">					
						<button class="mentr-ok-btn" type="button" id="btn_5_1" >
							<span id="btnContent">Y</span>
						</button>
					</span>
					<br>
					<span id="selected_5_0" class="">
						<button class="mentr-ok-btn" type="button" id="btn_5_0" >
							<span id="btnContent">N</span>
						</button>
					</span>
				</div>	
			</div>
			<div class="question" id="question6">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_6"><big>6</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I believe that choosing a career is a one-time decision and a life-long commitment
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_1" class="">	
							<button class="mentr-ok-btn" type="button" id="btn_6_1">
								<span id="btnContent">1</span>
							</button>	
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_6_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_2">
							<span id="btnContent">2</span>
						</button>	
					</span>
					<span id="selected_6_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_3">
							<span id="btnContent">3</span>
						</button>
					</span>
					<span id="selected_6_4" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_6_4">
							<span id="btnContent">4</span>
						</button>	
					</span>
					<span id="selected_6_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_5">
							<span id="btnContent">5</span>
						</button>
					</span>
					<span id="selected_6_6" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_6_6">
							<span id="btnContent">6</span>
						</button>	
					</span>
					<span id="selected_6_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_7">
							<span id="btnContent">7</span>
						</button>	
					</span>
					<span id="selected_6_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_8">
							<span id="btnContent">8</span>
						</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_9">
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
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
						I believe there is only one career that will suit me
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_1">
								<span id="btnContent">1</span>
							</button>	
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
						<span id="selected_7_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_2">
								<span id="btnContent">2</span>
							</button>
						</span>	
						<span id="selected_7_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_3">
								<span id="btnContent">3</span>
							</button>
						</span>	
						<span id="selected_7_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_4">
								<span id="btnContent">4</span>
							</button>
						</span>	
						<span id="selected_7_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_5">
								<span id="btnContent">5</span>
							</button>
						</span>	
						<span id="selected_7_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_6">
								<span id="btnContent">6</span>
							</button>
						</span>	
						<span id="selected_7_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_7">
								<span id="btnContent">7</span>
							</button>
						</span>	
						<span id="selected_7_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_8">
								<span id="btnContent">8</span>
							</button>
						</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_9">
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
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
						I believe going with my gut will help me make a good career decision
					</label>
				</div>
				<div class="mentr-quiz-respond">	
					<span id="selected_8_1" class="">					
						<button class="mentr-ok-btn" type="button" id="btn_8_1">Y</button>	
					</span>
					<br>
					<span id="selected_8_0" class="">
						<button class="mentr-ok-btn" type="button" id="btn_8_0">N</button>
					</span>
				</div>	
			</div>
			<div class="question" id="question9">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_9"><big>9</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I have a clear vision about what I aspire to become, achieve and create
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_1" >
								<span id="btnContent">1</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_9_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_9_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_9_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_9_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_9_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_9_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_9_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
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
						I believe that I do not have to choose a career now because in time I will find the right career for me
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_1" >
								<span id="btnContent">1</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_10_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_10_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_10_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_10_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_10_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_10_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_10_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question_break">
				<div>
					<h3 class="mentr-quiz-question" style="font-weight: 300;font-size: 35px;font-style: italic; line-height: 54px;">
						<small>
							<span id="index_A"></span>
							<span class=""></span>
						</small> 
						"To find out what one is fitted to do and to secure and opportunity to do it, is the key to happiness"
						<br>
						<small style="font-weight: 300; font-style: italic;">
							JOHN DEWEY
						</small>
					</h3>
				</div>
				<div class="mentr-quiz-respond">						
					<button class="mentr-ok-btn-large" type="button" onclick="quiz.scrollIn('A')" id="btn_a">Got it</button>
					<small class="mentr-desc-btn">
						<label>
							Press ENTER
						</label>
					</small>							
				</div>	
			</div>
			<div class="question" id="question11">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_11"><big>11</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know what occupations interest me
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_1">
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_11_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_2">
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_11_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_3">
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_11_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_4">
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_11_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_5">
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_11_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_6">
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_11_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_7">
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_11_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_8">
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_19" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_9">
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question12">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_12"><big>12</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know what occupations will be in demand in the next decade
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_1">
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_12_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_2">
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_12_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_3">
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_12_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_4">
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_12_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_5">
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_12_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_6">
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_12_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_7">
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_12_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_8">
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_9">
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question13">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_13"><big>13</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I have enough information about the variety of occupations and training programs that exist
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_13_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_13_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_13_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_13_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_13_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_13_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_13_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question14">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_14"><big>14</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know what job satisfaction looks like for me (for example: degree of autonomy, job security, sufficient pay)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_14_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_14_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_14_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_14_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_14_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_14_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_14_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question15">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_15"><big>15</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I have enough information about my competencies (for example: verbal skills, numerical ability)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_15_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_15_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_15_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_15_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_15_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_15_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_15_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question16">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_16"><big>16</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know what steps to take when making a career decision
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_16_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_16_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_16_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_16_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_16_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_16_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_16_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question17">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_17"><big>17</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know the factors that matter most when choosing a career
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_17_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_17_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_17_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_17_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_17_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_17_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_17_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question18">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_18"><big>18</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I know how to combine the information I have about myself with the information I have about different careers
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_18_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_18_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_18_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_18_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_18_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_18_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_18_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question19">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_19"><big>19</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I find it difficult to make a career decision because my preferences cannot be combined in one career, and I do not want to give any of them up (for example: I'd like to work as a freelancer, but I also want a steady income)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_19_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_19_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_19_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_19_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_19_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_19_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_19_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			<div class="question" id="question20">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_20"><big>20</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I find it difficult to make a career decision because people who are important to me (such as parents or friends) do not agree with the career options I am considering and/or the career characteristics I desire
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_1" >
								<span id="btnContent">1</span>
							</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Does not describe me</span>
					</div>
					<span id="selected_20_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_2" >
							<span id="btnContent">2</span>
						</button>
					</span>	
					<span id="selected_20_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_3" >
							<span id="btnContent">3</span>
						</button>
					</span>	
					<span id="selected_20_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_4" >
							<span id="btnContent">4</span>
						</button>
					</span>	
					<span id="selected_20_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_5" >
							<span id="btnContent">5</span>
						</button>
					</span>	
					<span id="selected_20_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_6" >
							<span id="btnContent">6</span>
						</button>
					</span>	
					<span id="selected_20_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_7" >
							<span id="btnContent">7</span>
						</button>
					</span>	
					<span id="selected_20_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_8" >
							<span id="btnContent">8</span>
						</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_9" >
								<span id="btnContent">9</span>
							</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
					</div>
				</div>	
			</div>
			
			

			<div class="question" id="question21">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_21"><big>21</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						When is your birthday?
						  <script type="text/javascript">  $('#sandbox-container .input-group.date').datepicker({});</script>
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<input class="mentr-input-text" value="" id="input_21" readonly="true">
					<div id="btn_2_content">
						<span id="selected_21" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21">OK</button>	
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>
			
			<div class="question" id="question22">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_22"><big>22</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						What is your highest level of completed education? If currently enrolled, highest degree received.
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div>
						<span id="selected_22_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_1">
								<span id="btnContent">A</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								No schooling completed, or less than 1 year
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_2">
								<span id="btnContent">B</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Nursery, kindergarten, and elementary (grades 1-8)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_3">
								<span id="btnContent">C</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								High school (grades 9-12, no degree)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_4">
								<span id="btnContent">D</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								High school graduate (or equivalent)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_5">
								<span id="btnContent">E</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Some college (1-4 years, no degree)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_6">
								<span id="btnContent">F</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Associate’s degree (including occupational or academic degrees)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_7">
								<span id="btnContent">G</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Bachelor’s degree (BA, BS, AB, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_8">
								<span id="btnContent">H</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Master’s degree (MA, MS, MENG, MSW, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_9">
								<span id="btnContent">I</span>
							</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Professional school degree (MD, DDC, JD, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_10"class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_10">
								<span id="btnContent">J</span>
							</button>
							</span>
						<small class="mentr-desc-btn">
							<label>
								Doctorate degree (PhD, EdD, etc)
							</label>
						</small>
					</div>
				</div>	
			</div>
			<div class="question" id="question23">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_23"><big>23</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						I identify my gender as…
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<span id="selected_23_1" class="">
						<button class="mentr-ok-btn" type="button" id="btn_23_1">
							<span id="btnContent">A</span>
						</button>
					</span>
					<small class="mentr-desc-btn">
						<label>
							Man
						</label>
					</small>	
					<span id="selected_23_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_23_2">
							<span id="btnContent">B</span>
						</button>
					</span>	
					<small class="mentr-desc-btn">
						<label>
							Woman
						</label>
					</small>
					<span id="selected_23_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_23_3">
							<span id="btnContent">C</span>
						</button>
					</span>
					<small class="mentr-desc-btn">
						<label>
							It’s complicated
						</label>
					</small>
				</div>	
			</div>
			<div class="question" id="question24">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_24"><big>24</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						We will send you a summary of this assessment by email.	 <br>Please input your email address
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<input class="mentr-input-text" type="email" value="" id="input_24">
					<div id="btn_3_content">
						<span id="selected_24" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24">OK</button>	
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>
				</div>	
			</div>				
		</div>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
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
			<span class="procentaje" >0%</span>
		</div>
		<div class="mentr-quiz-buttons-nav" style="text-align: right; display: inline-block; float: right;" >
			<div id="mentr-quiz-nav-btn-content">
				<button class="btn-nav" id='btnUp'>
					<?php echo $this->Html->image('dashboard/arrow1.png',array('id'=>'btnUp'));?>
					
				</button>
				<button class="btn-nav" id='btnDown'>
					<?php echo $this->Html->image('dashboard/arrow2.png',array('id'=>'btnDown'));?>
				</button>
			</div>		
		</div>
		<div style="clear: both;"></div>
	</div>		
</nav>
<footer>
	
</footer>
