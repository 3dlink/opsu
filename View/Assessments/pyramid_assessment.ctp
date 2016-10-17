<?php echo $this->Html->script('quiz/piramid.js');?>
<?php echo $this->Html->script('lib/redirect.js');?>

<style type="text/css">
.pregunta_div{
margin-top: -32px;margin-left: 62px;
}
.btn_quiz{
	margin-left: -10px;
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

.no_visible{  
	border-color: #7a5270 !important;
	cursor: inherit;
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

#header {
  height: 100px;
  margin-left: auto;
  margin-right: auto;
  max-width: 1280px;
}

.mentr-quiz-question {
  font-size: 22px;
  font-weight: 400;
}
#dash_content{
	  background-color: white;
}

#quiz-container #quiz-wellcome {
	padding-top: 115px;
}
#btn_1_content, #btn_2_content, #btn_3_content {
  display: block;
}
.inputs{
	width: 100%;
	max-width: 660px;
}

.question{
  float: left;
}
.ejemplos_movil{
	display: none;
	margin-bottom: 20px;
}
.inp{
	float: left;
	width: 200px;
	height: 40px;
	margin-right: 20px;
	margin-bottom: 20px;
	background: white;
	border: solid 2px #cccccc;	
	  font-size: 16px;
}
.mentr-quiz-respond {
  float: left;
    margin-left: 62px;
}
.hidden_quiz{
	display: none;
}
.show{
	display: block;
}
.add{
	font-size: 16px;
}
.plus{
	margin-left: 10px;
	cursor: pointer;
}
.btn_quiz{
	margin-top: 40px;
}

@media (max-width: 750px){
.btn_quiz {
   margin-left: 0px; 
}
.pregunta_div{
margin-top: -28px;margin-left: 62px;
}
.mentr-desc-btn{
	display: none;
}
#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
  width: 270px;
}
	.ejemplos_movil{
		display: block;
	}#ejemplos_web{
		display: none;
	}
	.mentr-quiz-respond div {
  display: block;
  width: 100%;
  height: initial;
  padding: initial;
  border-radius: initial;
  border: none;
    float: left;
}
#quiz-container {
  margin-top: 40px !important;
}
}

@media (max-width: 400px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
	  width: 180px;
	}
}

@media (max-width: 360px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
	  width: 150px;
	}
}
</style>



		<div id="quiz-wellcome2" style="background-color:#cabeca;">
			<h2 style="line-height: 25px; font-size: 18px;  font-weight: 400 !important;">
				The following questions are designed to establish what really matters most to you. Your answers will help pinpoint your greatest preferences and inspiration.
			</h2>
			<h4 style="font-size: 14px;font-weight: 300; line-height: 20px;">
				You should give an average of five responses per question. There is no rank value attached to the order of your answers. You will need to use more space to write about your dreams. 
			</h4>	
		</div>	

<section class="" id="quiz-container">

		<div id="quiz-wellcome" style="padding-right: 165px; background-color:#cabeca; font-weight: 400 !important;">
			<h2 style="font-weight: 500 !important;  margin-bottom: 20px; ">
				The following questions are designed to establish what really matters most to you. Your answers will help pinpoint your greatest preferences and inspiration.
			</h2>
			<h4 style="line-height: 1.5 !important; margin-bottom: 0px !important;">
				You should give an average of five responses per question. There is no rank value attached to the order of your answers. You will need to use more space to write about your dreams. 
			</h4>	
			<br />
		</div>	

	<form action="">
		<div class="mentr-quiz-content">					
				<div class="question" id="question1" style="margin-bottom: 2em; margin-top: 55px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I prefer conversations about these themes:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">
					<div class="ejemplos_movil" style="width:100%;float:left;font-size:16px;color:black;">e.g. Fashion, relationships, quantum mechanics, horses, etc.</div>

					<div class="inputs" style="float: left;">
						<input class="inp" id="1_1">
						<input class="inp" id="1_2">
						<input class="inp" id="1_3">
						<input class="inp" id="1_4">
						<input class="inp" id="1_5">
						<input class="inp" id="1_6">
						<input class="inp hidden_quiz" id="1_7">
						<input class="inp hidden_quiz" id="1_8">
						<input class="inp hidden_quiz" id="1_9">
					</div>

					<div id="ejemplos_web" style="width:250px;float:left;font-size:16px;color:black;min-height: 120px;">e.g. Fashion, relationships, quantum mechanics, horses, etc.</div>

					<div class="add" id="add_1">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_1_content" class="btn_quiz" style="float:left;">
						<span id="selected_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>	
				</div>
					
				<div class="question" id="question2" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_2"><big>2</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I spend a lot of my time:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="2_1">
						<input class="inp" id="2_2">
						<input class="inp" id="2_3">
						<input class="inp" id="2_4">
						<input class="inp" id="2_5">
						<input class="inp" id="2_6">
						<input class="inp hidden_quiz" id="2_7">
						<input class="inp hidden_quiz" id="2_8">
						<input class="inp hidden_quiz" id="2_9">
					</div>

					<div class="add" id="add_2">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_2_content" class="btn_quiz" style="float:left;">
						<span id="selected_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question3" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_3"><big>3</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I have expertise in these areas:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="3_1">
						<input class="inp" id="3_2">
						<input class="inp" id="3_3">
						<input class="inp" id="3_4">
						<input class="inp" id="3_5">
						<input class="inp" id="3_6">
						<input class="inp hidden_quiz" id="3_7">
						<input class="inp hidden_quiz" id="3_8">
						<input class="inp hidden_quiz" id="3_9">
					</div>

					<div class="add" id="add_3">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_3_content" class="btn_quiz" style="float:left;">
						<span id="selected_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I prefer to spend my money on:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="4_1">
						<input class="inp" id="4_2">
						<input class="inp" id="4_3">
						<input class="inp" id="4_4">
						<input class="inp" id="4_5">
						<input class="inp" id="4_6">
						<input class="inp hidden_quiz" id="4_7">
						<input class="inp hidden_quiz" id="4_8">
						<input class="inp hidden_quiz" id="4_9">
					</div>

					<div class="add" id="add_4">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_4_content" class="btn_quiz" style="float:left;">
						<span id="selected_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I think frequently about:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="5_1">
						<input class="inp" id="5_2">
						<input class="inp" id="5_3">
						<input class="inp" id="5_4">
						<input class="inp" id="5_5">
						<input class="inp" id="5_6">
						<input class="inp hidden_quiz" id="5_7">
						<input class="inp hidden_quiz" id="5_8">
						<input class="inp hidden_quiz" id="5_9">
					</div>

					<div class="add" id="add_5">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_5_content" class="btn_quiz" style="float:left;">
						<span id="selected_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question6" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_6"><big>6</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I easily have a high level of attention for:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="6_1">
						<input class="inp" id="6_2">
						<input class="inp" id="6_3">
						<input class="inp" id="6_4">
						<input class="inp" id="6_5">
						<input class="inp" id="6_6">
						<input class="inp hidden_quiz" id="6_7">
						<input class="inp hidden_quiz" id="6_8">
						<input class="inp hidden_quiz" id="6_9">
					</div>

					<div class="add" id="add_6">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_6_content" class="btn_quiz" style="float:left;">
						<span id="selected_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6">OK</button>
						</span>
						<small class="mentr-desc-btn">
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
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I spend my energy on:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="7_1">
						<input class="inp" id="7_2">
						<input class="inp" id="7_3">
						<input class="inp" id="7_4">
						<input class="inp" id="7_5">
						<input class="inp" id="7_6">
						<input class="inp hidden_quiz" id="7_7">
						<input class="inp hidden_quiz" id="7_8">
						<input class="inp hidden_quiz" id="7_9">
					</div>

					<div class="add" id="add_7">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_7_content" class="btn_quiz" style="float:left;">
						<span id="selected_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>	
				</div>
					
				<div class="question" id="question8" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_8"><big>8</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							In my house/condo/room you can see:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="8_1">
						<input class="inp" id="8_2">
						<input class="inp" id="8_3">
						<input class="inp" id="8_4">
						<input class="inp" id="8_5">
						<input class="inp" id="8_6">
						<input class="inp hidden_quiz" id="8_7">
						<input class="inp hidden_quiz" id="8_8">
						<input class="inp hidden_quiz" id="8_9">
					</div>

					<div class="add" id="add_8">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_8_content" class="btn_quiz" style="float:left;">
						<span id="selected_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question9" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_9"><big>9</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I prefer to spend my free time with:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="9_1">
						<input class="inp" id="9_2">
						<input class="inp" id="9_3">
						<input class="inp" id="9_4">
						<input class="inp" id="9_5">
						<input class="inp" id="9_6">
						<input class="inp hidden_quiz" id="9_7">
						<input class="inp hidden_quiz" id="9_8">
						<input class="inp hidden_quiz" id="9_9">
					</div>

					<div class="add" id="add_9">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_9_content" class="btn_quiz" style="float:left;">
						<span id="selected_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question10" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_10"><big>10</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							These situations have brought tears of inspiration to my eyes:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="10_1">
						<input class="inp" id="10_2">
						<input class="inp" id="10_3">
						<input class="inp" id="10_4">
						<input class="inp" id="10_5">
						<input class="inp" id="10_6">
						<input class="inp hidden_quiz" id="10_7">
						<input class="inp hidden_quiz" id="10_8">
						<input class="inp hidden_quiz" id="10_9">
					</div>

					<div class="add" id="add_10">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_10_content" class="btn_quiz" style="float:left;">
						<span id="selected_10" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I feel naturally connected to:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="11_1">
						<input class="inp" id="11_2">
						<input class="inp" id="11_3">
						<input class="inp" id="11_4">
						<input class="inp" id="11_5">
						<input class="inp" id="11_6">
						<input class="inp hidden_quiz" id="11_7">
						<input class="inp hidden_quiz" id="11_8">
						<input class="inp hidden_quiz" id="11_9">
					</div>

					<div class="add" id="add_11">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_11_content" class="btn_quiz" style="float:left;">
						<span id="selected_11" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question12" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							For many years I have been interested in:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="12_1">
						<input class="inp" id="12_2">
						<input class="inp" id="12_3">
						<input class="inp" id="12_4">
						<input class="inp" id="12_5">
						<input class="inp" id="12_6">
						<input class="inp hidden_quiz" id="12_7">
						<input class="inp hidden_quiz" id="12_8">
						<input class="inp hidden_quiz" id="12_9">
					</div>

					<div class="add" id="add_12">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_12_content" class="btn_quiz" style="float:left;">
						<span id="selected_12" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I collect:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="13_1">
						<input class="inp" id="13_2">
						<input class="inp" id="13_3">
						<input class="inp" id="13_4">
						<input class="inp" id="13_5">
						<input class="inp" id="13_6">
						<input class="inp hidden_quiz" id="13_7">
						<input class="inp hidden_quiz" id="13_8">
						<input class="inp hidden_quiz" id="13_9">
					</div>

					<div class="add" id="add_13">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_13_content" class="btn_quiz" style="float:left;">
						<span id="selected_13" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I have great discipline when I:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="14_1">
						<input class="inp" id="14_2">
						<input class="inp" id="14_3">
						<input class="inp" id="14_4">
						<input class="inp" id="14_5">
						<input class="inp" id="14_6">
						<input class="inp hidden_quiz" id="14_7">
						<input class="inp hidden_quiz" id="14_8">
						<input class="inp hidden_quiz" id="14_9">
					</div>

					<div class="add" id="add_14">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_14_content" class="btn_quiz" style="float:left;">
						<span id="selected_14" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							My inner eye likes to visualize:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="15_1">
						<input class="inp" id="15_2">
						<input class="inp" id="15_3">
						<input class="inp" id="15_4">
						<input class="inp" id="15_5">
						<input class="inp" id="15_6">
						<input class="inp hidden_quiz" id="15_7">
						<input class="inp hidden_quiz" id="15_8">
						<input class="inp hidden_quiz" id="15_9">
					</div>

					<div class="add" id="add_15">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_15_content" class="btn_quiz" style="float:left;">
						<span id="selected_15" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
				
				<div class="question" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I currently earn my money by:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="16_1">
						<input class="inp" id="16_2">
						<input class="inp" id="16_3">
						<input class="inp" id="16_4">
						<input class="inp" id="16_5">
						<input class="inp" id="16_6">
						<input class="inp hidden_quiz" id="16_7">
						<input class="inp hidden_quiz" id="16_8">
						<input class="inp hidden_quiz" id="16_9">
					</div>

					<div class="add" id="add_16">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_16_content" class="btn_quiz" style="float:left;">
						<span id="selected_16" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I am passionate about:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="17_1">
						<input class="inp" id="17_2">
						<input class="inp" id="17_3">
						<input class="inp" id="17_4">
						<input class="inp" id="17_5">
						<input class="inp" id="17_6">
						<input class="inp hidden_quiz" id="17_7">
						<input class="inp hidden_quiz" id="17_8">
						<input class="inp hidden_quiz" id="17_9">
					</div>

					<div class="add" id="add_17">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_17_content" class="btn_quiz" style="float:left;">
						<span id="selected_17" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question18" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I am well organized in these areas:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="18_1">
						<input class="inp" id="18_2">
						<input class="inp" id="18_3">
						<input class="inp" id="18_4">
						<input class="inp" id="18_5">
						<input class="inp" id="18_6">
						<input class="inp hidden_quiz" id="18_7">
						<input class="inp hidden_quiz" id="18_8">
						<input class="inp hidden_quiz" id="18_9">
					</div>

					<div class="add" id="add_18">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_18_content" class="btn_quiz" style="float:left;">
						<span id="selected_18" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question19" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_19"><big>19</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							My top goals are:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="19_1">
						<input class="inp" id="19_2">
						<input class="inp" id="19_3">
						<input class="inp" id="19_4">
						<input class="inp" id="19_5">
						<input class="inp" id="19_6">
						<input class="inp hidden_quiz" id="19_7">
						<input class="inp hidden_quiz" id="19_8">
						<input class="inp hidden_quiz" id="19_9">
					</div>

					<div class="add" id="add_19">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_19_content" class="btn_quiz" style="float:left;">
						<span id="selected_19" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question20" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_20"><big>20</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I am inspired by:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="20_1">
						<input class="inp" id="20_2">
						<input class="inp" id="20_3">
						<input class="inp" id="20_4">
						<input class="inp" id="20_5">
						<input class="inp" id="20_6">
						<input class="inp hidden_quiz" id="20_7">
						<input class="inp hidden_quiz" id="20_8">
						<input class="inp hidden_quiz" id="20_9">
					</div>

					<div class="add" id="add_20">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_20_content" class="btn_quiz" style="float:left;">
						<span id="selected_20" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question21" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_21"><big>21</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							The following people inspire me:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="21_1">
						<input class="inp" id="21_2">
						<input class="inp" id="21_3">
						<input class="inp" id="21_4">
						<input class="inp" id="21_5">
						<input class="inp" id="21_6">
						<input class="inp hidden_quiz" id="21_7">
						<input class="inp hidden_quiz" id="21_8">
						<input class="inp hidden_quiz" id="21_9">
					</div>

					<div class="add" id="add_21">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_21_content" class="btn_quiz" style="float:left;">
						<span id="selected_21" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question22" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_22"><big>22</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I prefer reading these types of books/magazines/blogs:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="22_1">
						<input class="inp" id="22_2">
						<input class="inp" id="22_3">
						<input class="inp" id="22_4">
						<input class="inp" id="22_5">
						<input class="inp" id="22_6">
						<input class="inp hidden_quiz" id="22_7">
						<input class="inp hidden_quiz" id="22_8">
						<input class="inp hidden_quiz" id="22_9">
					</div>

					<div class="add" id="add_22">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_22_content" class="btn_quiz" style="float:left;">
						<span id="selected_22" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question23" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_23"><big>23</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I have achieved these goals:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="23_1">
						<input class="inp" id="23_2">
						<input class="inp" id="23_3">
						<input class="inp" id="23_4">
						<input class="inp" id="23_5">
						<input class="inp" id="23_6">
						<input class="inp hidden_quiz" id="23_7">
						<input class="inp hidden_quiz" id="23_8">
						<input class="inp hidden_quiz" id="23_9">
					</div>

					<div class="add" id="add_23">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_23_content" class="btn_quiz" style="float:left;">
						<span id="selected_23" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>	
				</div>
					
				<div class="question" id="question24" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_24"><big>24</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I am grateful for:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="24_1">
						<input class="inp" id="24_2">
						<input class="inp" id="24_3">
						<input class="inp" id="24_4">
						<input class="inp" id="24_5">
						<input class="inp" id="24_6">
						<input class="inp hidden_quiz" id="24_7">
						<input class="inp hidden_quiz" id="24_8">
						<input class="inp hidden_quiz" id="24_9">
					</div>

					<div class="add" id="add_24">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_24_content" class="btn_quiz" style="float:left;">
						<span id="selected_24" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question25" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_25"><big>25</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I can easily get out of bed for these activities:
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="25_1">
						<input class="inp" id="25_2">
						<input class="inp" id="25_3">
						<input class="inp" id="25_4">
						<input class="inp" id="25_5">
						<input class="inp" id="25_6">
						<input class="inp hidden_quiz" id="25_7">
						<input class="inp hidden_quiz" id="25_8">
						<input class="inp hidden_quiz" id="25_9">
					</div>

					<div class="add" id="add_25">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_25_content" class="btn_quiz" style="float:left;">
						<span id="selected_25" class="">
							<button class="mentr-ok-btn" type="button" id="btn_25">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question26" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_26"><big>26</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							I can perform these activities without getting easily tired: 
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="26_1">
						<input class="inp" id="26_2">
						<input class="inp" id="26_3">
						<input class="inp" id="26_4">
						<input class="inp" id="26_5">
						<input class="inp" id="26_6">
						<input class="inp hidden_quiz" id="26_7">
						<input class="inp hidden_quiz" id="26_8">
						<input class="inp hidden_quiz" id="26_9">
					</div>

					<div class="add" id="add_26">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_26_content" class="btn_quiz" style="float:left;">
						<span id="selected_26" class="">
							<button class="mentr-ok-btn" type="button" id="btn_26">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>
					
				<div class="question" id="question27" style="margin-bottom: 2em;margin-bottom: 900px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_27"><big>27</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;margin-top: -7px;" alt="">							</small> 
								<div class="pregunta_div">
							My greatest dreams are:                                          
						</div></label>
					</div>
					<div class="mentr-quiz-respond">

					<div class="inputs">
						<input class="inp" id="27_1">
						<input class="inp" id="27_2">
						<input class="inp" id="27_3">
						<input class="inp" id="27_4">
						<input class="inp" id="27_5">
						<input class="inp" id="27_6">
						<input class="inp hidden_quiz" id="27_7">
						<input class="inp hidden_quiz" id="27_8">
						<input class="inp hidden_quiz" id="27_9">
					</div>

					<div class="add" id="add_27">
						Add more...
						<img class="plus" src="../img/More.png">
					</div>

					<div id="btn_27_content" class="btn_quiz" style="float:left;">
						<span id="selected_27" class="">
							<button class="mentr-ok-btn" type="button" id="btn_27">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</div>						
					</div>
				</div>					
		</div>
		<div style="clear:both"></div>
		
		<div id="mentr-quiz-space-nav" style="height: 25px;">
			
		</div>
	</form>

</section>
<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell">
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
			<span class="procentaje" >0 of 27 completed</span>
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


<script>

$('.plus').click(function(){
	pregunta = $(this).parent().attr('id');
	pregunta = pregunta.split('_')[1];
	$('#'+pregunta+'_7').css('display','block');
	$('#'+pregunta+'_8').css('display','block');
	$('#'+pregunta+'_9').css('display','block');
	$(this).parent().css('display','none');
});

</script>

