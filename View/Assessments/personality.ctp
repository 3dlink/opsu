<?php echo $this->Html->script('quiz/personality.js');?>
<style>

.mentr-quiz-question > div{
	margin-top: -32px;
	margin-left: 62px;
}

.select{
	  margin-top: inherit !important;
  margin-left: inherit !important;
  display: inherit !important;
  position: relative;
}
.btn-group{
	  position: absolute;
  top: 6px;
  right: -10px;
}
#quiz-wellcome_skills h4 {
  margin-top: -10px;
  }
header {
  color: #51284f;
  margin: 0 auto;
  position: fixed;
  width: 100%;
  background-color: #fff;
  z-index: 2;
  top: 0;
}

.mentr-quiz-question {
  font-size: 22px;
  font-weight: 400;
}

#header {
  height: 100px;
  margin-left: auto;
  margin-right: auto;
  max-width: 1280px;
}
header #menu_user {
  float: none;
  max-width: none;
}

header #menu_user #menu_user-content {
  padding-left: 30px;
}

.selected .mentr-ok-btn {
	background-image: none;
	background-color: rgb(153, 204, 0);
}

.selected {
	border: none !important;
}

.pregunta{
  font-weight: 400;
  font-size: 22px;  
}
.pregunta2{
  font-weight: 400;
  font-size: 22px;
  margin-left: 62px;
}
.descripcion_pregunta{
	font-size: 16px;
  font-weight: 300;
  margin: 20px 0 30px 62px;
}

big{
	font-size: 22px;
}

@-webkit-keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -45px;
  	left: 310px;
	}

	to {
		opacity: 0;
		top: -55px;
  	left: 330px;
	}

}

@keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -45px;
  	left: 310px;
	}

	to {
		opacity: 0;
		top: -55px;
  	left: 330px;
	}

}

#btn_gif_save {
  font-size: 35px;
  font-weight: 600;
  color: #FF6633;
  position: absolute;
  top: -45px;
  left: 310px;
  display: none;
  opacity: 0;
  -webkit-animation-name: fadeout_save;
  -webkit-animation-duration: 2s;
  animation: fadeout_save 4s 2s;
}


@media (max-width: 750px){

#input_6{
	font-size: 16px !important;
}

.mentr-quiz-question > div{
	margin-top: -26px;
	margin-left: 62px;
}


.mentr-quiz-question {
  font-size: 16px !important;
  font-weight: 400;
}

.desp_qs6{
  left: 0px !important;
}
header {
  font-size: 24px;
  width: 100%;
}

.mentr-quiz-content {
  padding-right: 0px !important;
}
.spanEduca {
   margin-top: 0px !important; 
  /*margin-left: 0px !important;*/
}


}

@media (max-width: 430px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
  width: 160px;
}
.mentr-quiz-progress>div {
  width: 30% !important;
}
}
</style>

<div id="quiz-wellcome_skills">
	<h2>
		This quest will help assess your level of employability. It analyses the eight traits that employer surveys and research papers have shown to be the most desirable employee characteristics.
	</h2>
	<h4 id="h4_cab_skills">
		<br>The duration of this test is approximately five minutes. 
	</h4>	
</div>		
<section id="quiz-container" style="background-color: white;  margin-top: -100px;">	
	<form action="">
		<div class="mentr-quiz-content" style="  padding-right: 175px;">					
				<div class="question1 visible" id="question1" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3 id="p1_q2"><b></b></h3>
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
							<div><span class="pregunta">I'm good at bouncing back from difficulties</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_1_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_1_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_1_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_1_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_1_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_1_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_1_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question2" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_2"><big>2</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">Difficult experiences have made me stronger and better</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_2_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_2_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_2_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_2">2</button>	
						</span>
						</div>	
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_2_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_2_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_2_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_2_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question3" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_3"><big>3</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">If you want someone to do you a big favor, remind him of everything you’ve done for him</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_3_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly disagree</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_3_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly agree</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">Pay a man more money and he’ll work harder</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_4_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly disagree</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_4_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly agree</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<!-- <h3><b>When doing work...</b></h3> -->
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">I am systematic in the way I learn or gather new information (highlighting, making charts or outlines, color coding, etc.)</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_5_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_5_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_5_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_5_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_5_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_5_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_5_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question6" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_6"><big>6</big></span>
								<img src="<?php echo $this->webroot;?>img/dashboard/arrowM.png" style="width: 24px;" alt=""></small> 
							In general, my workspace is
							<div class="select one"><input id="input_6" class="selt qs6 input_form" style="font-size: 24px; color: black; font-weight: 300; float: left; width: 135px; height: 40px; padding-left: 10px; border: none; box-shadow: 0px 1px 0px 0px #999999; float:initial;" readonly="" data-educa="0" value="Select">
								<div class="btn-group ">
									<div style="margin-right: 10px;" class="spanEduca down flagRow dropdown-toggle btn_dropdown" data-toggle="dropdown" tabindex="-1">
										<img style="width: 20px;" src="<?php echo $this->webroot;?>img/down-menu.png">
									</div>
									<ul class="dropdown-menu menu_desplegable desp_qs6" style="left: -140px;">
										<li><a id="1" class="q6 se" href="#">Extremely</a></li>
										<li><a id="2" class="q6 se" href="#">Fairly</a></li>
										<li><a id="3" class="q6 se" href="#">Somewhat</a></li>
										<li><a id="4" class="q6 se" href="#">A little</a></li>
										<li><a id="5" class="q6 se" href="#">Not at all</a></li>
						      		</ul>
								</div> 
								</div>
								
						 messy
						</label>
					</div>
					<div class="mentr-quiz-respond">
						<div id="btn_6_content">
							<span id="selected_6" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6">OK</button>
							</span>
							<small class="mentr-desc-btn presEnter">
								<label>Press ENTER</label>
							</small>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question7" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_7"><big>7</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">When I work, I forget everything else around me</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_7_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_7_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_7_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_7_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question8" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_8"><big>8</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">I always persevere, even when things do not go well</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_8_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_8_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_8_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_2">2</button>	
						</span>
						</div>	
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_8_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_8_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_8_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_8_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question9" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_9"><big>9</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">I don’t worry about things that I can't control</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_9_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_9_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_9_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_9_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question10" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_10"><big>10</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">I can think of many ways to get out of a jam</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_10_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_10_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_10_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_10_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">I get sufficient sleep and wake up each morning feeling refreshed and relaxed</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_11_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_11_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_11_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_11_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question12" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div><span class="pregunta">I feel that my life has meaning and purpose </span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_12_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_12_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_12_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_12_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<!-- Select simple radioButton of 1 to 5 -->

				<div class="question" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">Suppose you find yourself in an argument with some colleagues about who should do a very disagreeable, but routine task. Which of the following would likely be the most effective way to resolve the situation?</span></div>

						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_13" class="tabla_10">
							<tr>
								<td id="btn_13_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_13_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_13_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Have your supervisor decide, because this would avoid any personal bias</td>
							</tr>
							<tr>
								<td id="btn_13_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_13_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_13_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Arrange a rotating schedule so everyone shares the chore</td>
							</tr>
							<tr>
								<td id="btn_13_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_13_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_13_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Let the workers who show up earliest choose on a first-come, first-served basis</td>
							</tr>
							<tr>
								<td id="btn_13_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_13_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_13_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Randomly assign a person to permanently take on the task</td>
							</tr>
						</table>
					</div>
				</div>
					
				<div class="question" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">Your team wants to improve the quality and flow of the conversations among its members. Your team should:</span></div>
						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_14" class="tabla_10">
							<tr>
								<td id="btn_14_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_14_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_14_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Use comments that build upon and connect to what others have said</td>
							</tr>
							<tr>
								<td id="btn_14_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_14_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_14_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Set up a specific order for everyone to speak and then follow it</td>
							</tr>
							<tr>
								<td id="btn_14_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_14_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_14_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Let team members with more to say determine the direction and topic of conversation</td>
							</tr>
							<tr>
								<td id="btn_14_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_14_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_14_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Do all of the above</td>
							</tr>
						</table>
					</div>
				</div>
					
				<div class="question" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<!-- <h3><b>When doing work, do you typically consider yourself to be...</b></h3> -->
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">You have recently had a new employee who will do important work for the organization assigned to your team. Although inexperienced, he is excited and confident he will do a good job. What would you do?</span></div>
						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_15" class="tabla_10">
							<tr>
								<td id="btn_15_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_15_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_15_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would let him determine what needs to be done and how to do it</td>
							</tr>
							<tr>
								<td id="btn_15_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_15_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_15_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would tell him exactly what needs to be done and I would supervise his work closely and frequently</td>
							</tr>
							<tr>
								<td id="btn_15_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_15_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_15_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would tell him exactly what needs to be done, but I would check up on his ideas and suggestions</td>
							</tr>
							<tr>
								<td id="btn_15_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_15_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_15_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would support and encourage his enthusiasm and ask him how he would resolve this job</td>
							</tr>
						</table>
					</div>	
				</div>
				
				<div class="question" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<!-- <h3><b>When doing work, do you typically consider yourself to be...</b></h3> -->
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">One of your employees is not willing to accept a new task. She has very little experience in the area in which you want her to work but has produced good results with other tasks you have given her. What would you do?</span></div>
						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_16" class="tabla_10">
							<tr>
								<td id="btn_16_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_16_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_16_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would explain what needs to be done and how to do it, but would listen to why she’s not willing to accept the task</td>
							</tr>
							<tr>
								<td id="btn_16_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_16_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_16_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would give her the new task and leave her to determine the best way to do it</td>
							</tr>
							<tr>
								<td id="btn_16_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_16_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_16_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would encourage her to try to do the task and support her efforts by troubleshooting together</td>
							</tr>
							<tr>
								<td id="btn_16_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_16_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_16_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would tell her exactly what must be done to successfully complete the task and monitor her results frequently</td>
							</tr>
						</table>
					</div>	
				</div>
					
				<div class="question" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">A highly capable and efficient employee has asked for your help in a project she’s working on. She usually works efficiently, without any help. Recently, she has encountered difficulties in her work that she believes she cannot solve by herself. What would you do?</span></div>
						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_17" class="tabla_10">
							<tr>
								<td id="btn_17_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_17_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_17_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would analyze the problems and plan methods to solve them</td>
							</tr>
							<tr>
								<td id="btn_17_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_17_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_17_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would leave her to find a solution independently</td>
							</tr>
							<tr>
								<td id="btn_17_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_17_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_17_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would determine and implement an appropriate solution, but I would work with her in troubleshooting</td>
							</tr>
							<tr>
								<td id="btn_17_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_17_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_17_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would jointly discuss the difficulties and support her efforts to find appropriate solutions</td>
							</tr>
						</table>
					</div>	
				</div>
					
				<div class="question" id="question18" style="margin-bottom: 2em; padding-bottom: 0;margin-bottom: 200px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div><span class="pregunta">One of your subordinates has made a suggestion for a change in the operations of the department you manage. You think it is an excellent suggestion. In the past, he has been able to offer and successfully implement other useful suggestions with your support and encouragement. You have confidence in his ability. What would you do?</span></div>
						</label>
					</div>
					<div class="multiple_select">
						<table id="tabla_18" class="tabla_10">
							<tr>
								<td id="btn_18_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_18_1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_18_1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>He would manage the implementation and I would guide him into execution</td>
							</tr>
							<tr>
								<td id="btn_18_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_18_2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_18_2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>We would jointly discuss the suggestion and I would support his efforts in leading its execution</td>
							</tr>
							<tr>
								<td id="btn_18_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_18_3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_18_3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would organize the execution, but would consider his ideas</td>
							</tr>
							<tr>
								<td id="btn_18_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck_18_4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck_18_4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>I would give him the responsibility for implementing the suggestion, without any intervention from my side</td>
							</tr>
						</table>
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
		<div id="mentr-quiz-space-nav">
			
		</div>
	</form>

</section>

		<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell" style="position:relative;">
					<div id="btn_gif_save">+20</div>
					<button class="mentr-btn-submit" id="submintBtn" type="button" >
						SUBMIT
					</button>
					<span class="mentr-desc-btn presEnter">
							<label>Press ENTER</label>
					</span>
				</div>
			</div>				
		</div>
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
			<span class="procentaje" >0 of 18 completed</span>
		</div>
		<div class="mentr-quiz-buttons-nav" style="text-align: right; display: inline-block; float: right;" >
			<div id="mentr-quiz-nav-btn-content">
				<button class="btn-nav" id='btnUp'>
					<?php echo $this->Html->image('dashboard/arrow1.png',array('id'=>'btnUpIMG'));?>
					
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

<script type="text/javascript">


$('.one').click(function(){
var eleme = $(this);
setTimeout(function(){
  eleme.find('.btn-group').addClass("open"); 
  eleme.find('.btn-group > span > img').attr('src', WEBROOT+"img/up-menu.png");
},10);
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


	$('.q6').click(function(){
		var id = $(this).attr('id');
		$('#input_6').val($(this).html());
		$('#input_6').data('educa', id);
		$('body').click();
	});

	$('.se').click(function(e){
		return false;
	});

</script>
