<?php echo $this->Html->script('quiz/quiz-3.js');?>
<style>

.mentr-quiz-content{
	padding-left: 255px;
	padding-right: 25px;
}

@media (max-width: 750px){
	.mentr-quiz-content{
		padding-right: 0px !important;
	}
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

.no_visible{  
	border-color: #7a5270 !important;
	cursor: inherit;
}

#header {
  height: 100px;
  margin-left: auto;
  margin-right: auto;
  max-width: 1280px;
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
  /*animation: fadeout_save 4s 2s;*/
}

#h4_cab_skills{
	margin-top: 35px;
}


</style>
<div id="quiz-wellcome_skills">
	<h2>
		This quest will assess the strength of your existing transferable skills. These are skills that can be taken from one job to another and are key competencies all young professionals should have.
	</h2>
	<h4 id="h4_cab_skills">
		The duration of this test is approximately 12 minutes. You may use a calculator for the numerical reasoning questions
	</h4>	
</div>		
<section id="quiz-container" style="background-color: white;  margin-top: -100px;">	
	<form action="">
		<div class="mentr-quiz-content">					
				<div class="question1 visible" id="question1" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3 id="p1_q2"><b>When faced with a problem...</b></h3>
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
							<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I take care to define it carefully before trying to solve it </span></div>
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
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Once I’ve found a solution that I believe will work, I see no point in coming up with more</span></div>
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
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">When evaluating solutions, I take time to think about how I should choose between options</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_3_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Once I choose a solution, I develop an implementation plan with the sequence of events necessary for completion</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_4_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When doing work...</b></h3>
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I prioritize tasks so that I do the most important and urgent ones first</span></div>
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
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I set deadlines for myself</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_6_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_6_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question7" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_7"><big>7</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I try to complete one task before going on to the next</span></div>
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
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I don't allow constant interruptions to my work</span></div>
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
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I use a daily planner (book or electronic) to keep track of the things I need to do</span></div>
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
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Which of these words are related to both SUBMARINE and CAMERA? (Click all that apply)</span></div>
						</label>
					</div>


					<div class="multiple_select">
						<table class="tabla_10" style="margin-left: 10px;">
							<tr>
								<td id="item_multiple1" class="item_multiple_style">
									<img id="UnCheck1" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check1" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Watertight</td>
							</tr>
							<tr>
								<td id="item_multiple2" class="item_multiple_style">
									<img id="UnCheck2" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check2" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Film</td>
							</tr>
							<tr>
								<td id="item_multiple3" class="item_multiple_style">
									<img id="UnCheck3" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check3" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Lens</td>
							</tr>
							<tr>
								<td id="item_multiple4" class="item_multiple_style">
									<img id="UnCheck4" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check4" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Battery</td>
							</tr>
							<tr>
								<td id="item_multiple5" class="item_multiple_style">
									<img id="UnCheck5" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check5" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Door</td>
							</tr>
							<tr>
								<td id="item_multiple6" class="item_multiple_style">
									<img id="UnCheck6" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check6" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Egg</td>
							</tr>
							<tr>
								<td id="item_multiple7" class="item_multiple_style">
									<img id="UnCheck7" src="<?php echo $this->webroot;?>img/dashboard/circle-uncheck.png" style="display: block;">
									<img id="Check7" src="<?php echo $this->webroot;?>img/dashboard/circle-check.png" style="display: none;">
								</td>
								<td>Octopus</td>
							</tr>
						</table>
						<span id="selected_10_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_1">Ok</button>
						</span><br>
					</div>
				</div>
					
				<div class="question" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When working within a team, do you typically consider yourself to be... </b></h3>
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who can always see both sides of an argument?</span></div>
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
							<h3><b>When doing work, do you typically consider yourself to be...</b></h3>
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who likes to find short-cuts?</span></div>
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
					
				<div class="question" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When doing work, do you typically consider yourself to be...</b></h3>
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who holds back their ideas until they are asked?</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_13_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_13_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_13_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_13_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When doing work, do you typically consider yourself to be...</b></h3>
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who enjoys working with people from different disciplines and skills?</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_14_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_14_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_14_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_14_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When doing work, do you typically consider yourself to be...</b></h3>
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who likes to work on one thing at a time?</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_15_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_15_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_15_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_15_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
				
				<div class="question" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When doing work, do you typically consider yourself to be...</b></h3>
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">A person who can always dig their way out of a hole?</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_16_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_16_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_16_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_16_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Before I communicate, I think about what the person needs to know, and how best to convey it </span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_17_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_17_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_17_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_17_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question18" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I'm sometimes surprised to find that people haven't understood what I've said </span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_18_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_18_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_18_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_18_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question19" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_19"><big>19</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">When writing an email I give all the background information and detail I can to make sure my message is understood</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_19_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_19_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_19_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_19_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question20" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_20"><big>20</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">When someone is talking to me, I think about what I'm going to say next to make sure I get my point across correctly</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_20_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_20_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_20_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_20_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question21" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_21"><big>21</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">When communicating with others, I pay attention to non-verbal signals - body language, facial expressions and gestures</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_21_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_21_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_21_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_21_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_21_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_21_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_21_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question22" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_22"><big>22</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I often read the business press (e.g. Economist, The Times, Bloomberg Business)</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_22_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_22_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_22_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_22_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_22_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_22_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_22_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question23" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_23"><big>23</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I know the difference between cash flow and profit</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">	
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_23_1" style="display:inline-block;">					
								<button style="" class="mentr-ok-btn" type="button" id="btn_23_1" >
									<span id="btnContent">Y</span>
								</button>
							</span>
						</div>
						<span class="letra_span2">YES</span>
					<br>
						<div class="mentr-quiz-btn-desc-op" style="margin-top: 10px;">
							<span id="selected_23_2" style="display:inline-block;">
								<button style="" class="mentr-ok-btn" type="button" id="btn_23_2" >
									<span id="btnContent">N</span>
								</button>
							</span>
						</div>
						<span class="letra_span2">NO</span>
				</div>	
				</div>
					
				<div class="question" id="question24" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_24"><big>24</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">I tend to support liberal political candidates</span></div>
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_24_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_24_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Doesn't describe me</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_24_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_24_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_24_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_24_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_24_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Describes me well</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question25" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_25"><big>25</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the first statement as true. How true or false is the sentence that follows it?</span></div>
								<div class="descripcion_pregunta">Kevin, an analyst at a known advertising agency wrote a summary file on the performance of the company in one of their recent client projects. Just a few hours after submitting it, Paul, a senior manager in Kevin's department, banned it from being printed for the board of directors meeting, which was scheduled for the next day.</div>
								<label class="pregunta2">A copy of the file was sent to the senior manager shortly after it was published</label>
						</label>
					</div>

					<div class="multiple_select">
						<table id="tabla_25" class="tabla_10">
							<tr>
								<td id="btn_25_1" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck1" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>True</td>
							</tr>
							<tr>
								<td id="btn_25_2" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck2" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Probably true</td>
							</tr>
							<tr>
								<td id="btn_25_3" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck3" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck3" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Insufficent data to say </td>
							</tr>
							<tr>
								<td id="btn_25_4" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck4" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck4" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Probably false </td>
							</tr>
							<tr>
								<td id="btn_25_5" class="item_multiple_style mentr-ok-btn">
									<div id="DivUnCheck5" class="simple_select_item_u" style="display:block;"></div>
									<div id="DivCheck5" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>False </td>
							</tr>
						</table>
					</div>
				</div>
					
				<div class="question" id="question26" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_26"><big>26</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider if the assumption below the next statement is really being made or not.</span></div>
								<div class="descripcion_pregunta">We forecast that when the development of supercomputers is complete, it will be followed by a shortage of people who know how to make use of all this computing power</div>
								<label class="pregunta2">Proposed conclusion: The number of highly trained employees is declining.</label>
						</label>
					</div>


					<div class="multiple_select">
						<table id="tabla_26" class="lista_horizontal">
							<tr>
								<td id="btn_26_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="26_DivUnCheck1" class="simple_select_item_u" style="display:block;"></div>
									<div id="26_DivCheck1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Assumption made</td>
							</tr>
							<tr>
								<td id="btn_26_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="26_DivUnCheck2" class="simple_select_item_u" style="display:block;"></div>
									<div id="26_DivCheck2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Assumption not made</td>
							</tr>
						</table>
					</div>

				</div>
					
				<div class="question" id="question27" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_27"><big>27</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the following statement to be true without exception. Analyze the conclusion proposed and decide if it follows the statement given or not.</span></div>
								<div class="descripcion_pregunta">No millionaire who lives in a city has less than two cars. Nonetheless, some but not all the inhabitants of Mikeville city have two cars or more.</div>
								<label class="pregunta2">Proposed conclusion: Mikeville has some millionaires</label>
						</label>
					</div>


					<div class="multiple_select">
						<table id="tabla_27" class="lista_horizontal">
							<tr>
								<td id="btn_27_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="27_DivUnCheck1" class="simple_select_item_u" style="display:block;"></div>
									<div id="27_DivCheck1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Conclusion follows</td>
							</tr>
							<tr>
								<td id="btn_27_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="27_DivUnCheck2" class="simple_select_item_u" style="display:block;"></div>
									<div id="27_DivCheck2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Conclusion does not follow</td>
							</tr>
						</table>
					</div>
				</div>
				
				<div class="question" id="question28" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_28"><big>28</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt=""></small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the argument following the question as true. Decide whether it is a strong or weak argument.</span></div>
								<div class="descripcion_pregunta">Should a company grant its employees some free time to spend in any manner of their choosing?</div>
								<label class="pregunta2">Proposed conclusion: Yes; an all work-no play employee is not a well-rounded person and therefore not the kind of employee the company wants to produce or an employee the company would be proud of.</label>
						</label>
					</div>

					<div class="multiple_select">
						<table id="tabla_28" class="lista_horizontal">
							<tr>
								<td id="btn_28_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="28_DivUnCheck1" class="simple_select_item_u" style="display:block;"></div>
									<div id="28_DivCheck1" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Strong argument</td>
							</tr>
							<tr>
								<td id="btn_28_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="28_DivUnCheck2" class="simple_select_item_u" style="display:block;"></div>
									<div id="28_DivCheck2" class="simple_select_item_c" style="display:none;"></div>
								</td>
								<td>Weak argument</td>
							</tr>
						</table>
					</div>
				</div>

					
				<div class="question" id="question29" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_29"><big>29</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the following train transportation pattern over time</span></div>
									<div class="tabla_preguntas"><img src="<?php echo $this->webroot.'img/tabla1.png';?>" alt=""></div>
								<label class="pregunta2">How many people traveled less than 16 miles during the day time in 2014?</label>
						</label>
					</div>

					<div id="show_29" class="single_select">
						<div id="tabla_29" class="lista_horizontal">
								<div id="btn_29_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="29_DivUnCheck1" class="simple_select_item_u"></div>
									<div id="29_DivCheck1" class="simple_select_item_c"></div>
								<div class="single_option">225,000</div>
								</div>
								<div id="btn_29_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="29_DivUnCheck2" class="simple_select_item_u"></div>
									<div id="29_DivCheck2" class="simple_select_item_c"></div>
								<div class="single_option">279,000</div>
								</div>
								<div id="btn_29_3" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="29_DivUnCheck3" class="simple_select_item_u"></div>
									<div id="29_DivCheck3" class="simple_select_item_c"></div>
								<div class="single_option">490,000</div>
								</div>
								<div id="btn_29_4" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="29_DivUnCheck4" class="simple_select_item_u"></div>
									<div id="29_DivCheck4" class="simple_select_item_c"></div>
								<div class="single_option">654,000</div>
								</div>
								<div id="btn_29_5" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="29_DivUnCheck5" class="simple_select_item_u"></div>
									<div id="29_DivCheck5" class="simple_select_item_c"></div>
								<div class="single_option">654,000</div>
								</div>
							</div>
					</div>
				</div>
					
				<div class="question" id="question30" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_30"><big>30</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the following train transportation pattern over time</span></div>
									<div class="tabla_preguntas"><img src="<?php echo $this->webroot.'img/tabla1.png';?>" alt=""></div>
								<label class="pregunta2">On which train line did more people travel in 1970 than 2014?</label>
						</label>
					</div>

					<div id="show_30" class="single_select">
						<div id="tabla_30" class="lista_horizontal">
								<div id="btn_30_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="30_DivUnCheck1" class="simple_select_item_u"></div>
									<div id="30_DivCheck1" class="simple_select_item_c"></div>
								<div class="single_option">Yellow Line Night Time</div>
								</div>
								<div id="btn_30_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="30_DivUnCheck2" class="simple_select_item_u"></div>
									<div id="30_DivCheck2" class="simple_select_item_c"></div>
								<div class="single_option">Blue Line Night Time</div>
								</div>
								<div id="btn_30_3" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="30_DivUnCheck3" class="simple_select_item_u"></div>
									<div id="30_DivCheck3" class="simple_select_item_c"></div>
								<div class="single_option">Green Line Day Time</div>
								</div>
								<div id="btn_30_4" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="30_DivUnCheck4" class="simple_select_item_u"></div>
									<div id="30_DivCheck4" class="simple_select_item_c"></div>
								<div class="single_option">Black Line Night Time</div>
								</div>
								<div id="btn_30_5" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="30_DivUnCheck5" class="simple_select_item_u"></div>
									<div id="30_DivCheck5" class="simple_select_item_c"></div>
								<div class="single_option">Blue Line Day Time</div>
								</div>
							</div>
					</div>
				</div>
					
				<div class="question" id="question31" style="margin-bottom: 2em;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_31"><big>31</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the following train transportation pattern over time</span></div>
									<div class="tabla_preguntas"><img src="<?php echo $this->webroot.'img/tabla1.png';?>" alt=""></div>
								<label class="pregunta2">On which of the train lines was the difference between the numbers of day and night time passengers the smallest in 2014?</label>
						</label>
					</div>

					<div id="show_31" class="single_select">
						<div id="tabla_31" class="lista_horizontal">
								<div id="btn_31_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="31_DivUnCheck1" class="simple_select_item_u"></div>
									<div id="31_DivCheck1" class="simple_select_item_c"></div>
								<div class="single_option">Black Line</div>
								</div>
								<div id="btn_31_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="31_DivUnCheck2" class="simple_select_item_u"></div>
									<div id="31_DivCheck2" class="simple_select_item_c"></div>
								<div class="single_option">Purple Line</div>
								</div>
								<div id="btn_31_3" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="31_DivUnCheck3" class="simple_select_item_u"></div>
									<div id="31_DivCheck3" class="simple_select_item_c"></div>
								<div class="single_option">Red Line</div>
								</div>
								<div id="btn_31_4" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="31_DivUnCheck4" class="simple_select_item_u"></div>
									<div id="31_DivCheck4" class="simple_select_item_c"></div>
								<div class="single_option">Brown line</div>
								</div>
								<div id="btn_31_5" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="31_DivUnCheck5" class="simple_select_item_u"></div>
									<div id="31_DivCheck5" class="simple_select_item_c"></div>
								<div class="single_option">Blue Line</div>
								</div>
							</div>
					</div>
				</div>
					
				<div class="question" id="question32" style="margin-bottom: 1000px;padding-bottom: 0;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_32"><big>32</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px; margin-top: -8px;" alt="">							</small> 
								<div style="margin-top: -32px;margin-left: 62px;"><span class="pregunta">Consider the following train transportation pattern over time</span></div>
									<div class="tabla_preguntas"><img src="<?php echo $this->webroot.'img/tabla1.png';?>" alt=""></div>
								<label class="pregunta2">By approximately what percentage did the use of the day time Green Line increase between 1970 and 2014?</label>
						</label>
					</div>

					<div id="show_32" class="single_select">
						<div id="tabla_32" class="lista_horizontal">
								<div id="btn_32_1" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="32_DivUnCheck1" class="simple_select_item_u"></div>
									<div id="32_DivCheck1" class="simple_select_item_c"></div>
								<div class="single_option">400%</div>
								</div>
								<div id="btn_32_2" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="32_DivUnCheck2" class="simple_select_item_u"></div>
									<div id="32_DivCheck2" class="simple_select_item_c"></div>
								<div class="single_option">450%</div>
								</div>
								<div id="btn_32_3" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="32_DivUnCheck3" class="simple_select_item_u"></div>
									<div id="32_DivCheck3" class="simple_select_item_c"></div>
								<div class="single_option">500%</div>
								</div>
								<div id="btn_32_4" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="32_DivUnCheck4" class="simple_select_item_u"></div>
									<div id="32_DivCheck4" class="simple_select_item_c"></div>
								<div class="single_option">550%</div>
								</div>
								<div id="btn_32_5" class="item_multiple_style mentr-ok-btn" style="padding-left: 40px;">
									<div id="32_DivUnCheck5" class="simple_select_item_u"></div>
									<div id="32_DivCheck5" class="simple_select_item_c"></div>
								<div class="single_option">600%</div>
								</div>
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
		<div id="mentr-quiz-space-nav">
			
		</div>
	</form>

</section>

		<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell" style="position:relative;">
					<div id="btn_gif_save">+40</div>
					<button class="mentr-btn-submit" id="submintBtn" type="button" >
						SUBMIT
					</button>					<span class="mentr-desc-btn presEnter">
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
			<span class="procentaje" >0 of 32 completed</span>
		</div>
		<div class="mentr-quiz-buttons-nav" style="text-align: right; display: inline-block; float: right;" >
			<div id="mentr-quiz-nav-btn-content">
				<button class="btn-nav upp" id='btnUp'>
					<?php echo $this->Html->image('dashboard/arrow1.png',array('id'=>'btnUp', 'class' => 'upp2'));?>
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

// alert( $(window).height() );

</script>

