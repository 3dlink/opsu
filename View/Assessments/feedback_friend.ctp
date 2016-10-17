<?php echo $this->Html->script('quiz/quiz_360_inv.js');?>
<style type="text/css">

.presEnter{
  font-size: 14px !important;
  font-weight: 600 !important;
}

.mentr-quiz-question > div{
	margin-top: -30px;
	margin-left: 62px;
}

.selected_enter_btn{
	background-image: none;
	background-color: rgb(153, 204, 0);
}

.no_visible{  
	border-color: #7a5270 !important;
	cursor: inherit;
}

#mentr-quiz-nav .div-navContainer {
  width: 700px;
}
.mentr-quiz-content_friend {
  padding-left: 300px;
}
#quiz-header {
  max-width: 1280px;
  padding: 0 20px;
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

.selected {
	border: none !important;
}
#dash_content{
	  background-color: white;
}

@media (max-width: 750px){

	#mentr-quiz-nav .div-navContainer {
	  width: 100%;
	}

	.no_style{
	  display: block !important;
	  width: inherit !important;
	  height: inherit !important;
	  padding: inherit !important;
	  border-radius: inherit !important;
}

	.mentr-quiz-question > div {
	  margin-top: -26px;
	}
	#quiz-header {
	  padding: 20px 0px;
	}
}
@media (max-width: 600px){
	#quiz-wellcome2 {
	  padding-left: 30px !important;
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

	<div id="quiz-wellcome2" style="background-color:#cabeca;">
		<h2 style="line-height: 25px; font-size: 18px;  font-weight: 400 !important;margin-top:0px;padding:20px 0px;margin-bottom: 0px;">
		Thank you for taking the time to review <?php echo ucwords($member['User']['first_name']);?>'s strengths and performance. Your opinions will greatly contribute to shaping <?php echo ucwords($member['User']['first_name']);?>'s career decisions. 
		</h2>
		<h4 style="font-size: 14px;font-weight: 300; line-height: 20px;">
			When answering the questions below, please think about the time you have spent and the activities you have shared with <?php echo ucwords($member['User']['first_name']);?> over the last twelve months. Read each item carefully and select the response that best reflects your opinion.<br><br>
			Remember, your responses are anonymous and will simply be aggregated with other responses received. None of your responses will be attributed to you as an individual.
		</h4>	
	</div>	

<section class="" id="quiz-container_friend">

		<div id="quiz-wellcome" style="padding-right: 165px; background-color:#cabeca; font-weight: 400 !important;padding:35px 65px 30px 20px;margin-top:100px;">
			<h2 style="font-weight: 500 !important;  margin-bottom: 20px; margin-top:0px;">
			Thank you for taking the time to review <?php echo ucwords($member['User']['first_name']);?>'s strengths and performance. Your opinions will greatly contribute to shaping <?php echo ucwords($member['User']['first_name']);?>'s career decisions. 
			</h2>
			<h4 style="line-height: 1.5 !important; margin-bottom: 20px !important;">
			When answering the questions below, please think about the time you have spent and the activities you have shared with <?php echo ucwords($member['User']['first_name']);?> over the last twelve months. Read each item carefully and select the response that best reflects your opinion.</h4>
				<h4 style="line-height: 1.5 !important; margin-bottom: 0px !important;">
			Remember, your responses are anonymous and will simply be aggregated with other responses received. None of your responses will be attributed to you as an individual.
				</h4>
		</div>	

	<form id="top_360" action="">
		<div class="mentr-quiz-content_friend">					
				<div class="question visible" id="question1" style="margin-bottom: 2em; margin-top: 55px;padding-bottom:0px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">					</small> 
								<div>
									How long have you known <?php echo ucwords($member['User']['first_name']);?>?
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond qmr_f">						
						<div class="row_1">
						<span id="selected_1_1" class="cell_1">
							<button class="mentr-ok-btn btn__1" style="margin-left:0;" type="button" id="btn_1_1">
								<span id="btnContent">A</span>
							</button>
						</span>
						<small class="mentr-desc-btn cell_1">
							<label class="label_1">
								Less than 1 year
							</label>
						</small>
					</div>	
					<div class="row_1">
						<span id="selected_1_2" class="cell_1">
							<button class="mentr-ok-btn btn__1" style="margin-left:0;" type="button" id="btn_1_2">
								<span id="btnContent">B</span>
							</button>
						</span>
						<small class="mentr-desc-btn cell_1">
							<label class="label_1">
								1-3 years
							</label>
						</small>
					</div>	
					<div class="row_1">
						<span id="selected_1_3" class="cell_1">
							<button class="mentr-ok-btn btn__1" style="margin-left:0;" type="button" id="btn_1_3">
								<span id="btnContent">C</span>
							</button>
						</span>
						<small class="mentr-desc-btn cell_1">
							<label class="label_1">
								3-5 years
							</label>
						</small>
					</div>	
					<div class="row_1">
						<span id="selected_1_4" class="cell_1">
							<button class="mentr-ok-btn btn__1" style="margin-left:0;" type="button" id="btn_1_4">
								<span id="btnContent">D</span>
							</button>
						</span>
						<small class="mentr-desc-btn cell_1">
							<label class="label_1">
								More than 5 years
							</label>
						</small>
					</div>	
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question2" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_2"><big>2</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Listens to others' points of view with an open mind
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_2_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_2_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_2_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_2_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_2_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_2_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_2_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_2_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_2_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_2_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question3" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_3"><big>3</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Expresses ideas clearly and concisely to individuals and groups, in both formal and informal settings
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_3_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_3_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_3_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_3_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_3_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_3_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_3_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Communicates clearly and concisely in writing (e.g. correspondence is well-organized, to the point, and uses correct spelling, punctuation and grammar)
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_4_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_4_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_4_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_4_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_4_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_4_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_4_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>
					
				<div class="question espaciado_360" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When faced with a problem...</b></h3>
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Actively seeks the root cause 
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_5_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_5_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_5_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_5_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_5_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_5_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_5_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_5_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_5_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_5_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question6" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When faced with a problem...</b></h3>
							<small>
								<span id="index_6"><big>6</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Generates alternative solutions 
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_6_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_6_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_6_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_6_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_6_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_6_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_6_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question7" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When faced with a problem...</b></h3>
							<small>
								<span id="index_7"><big>7</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Evaluates alternative courses of action
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_7_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_7_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_7_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_7_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_7_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_7_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_7_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_7_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_7_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question8" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When working within a team...</b></h3>
							<small>
								<span id="index_8"><big>8</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is open to new ideas that may change own goals for the benefit of the team
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_8_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_8_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_8_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_8_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_8_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_8_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_8_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_8_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_8_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_8_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question9" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When working within a team...</b></h3>
							<small>
								<span id="index_9"><big>9</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Shares credit for accomplishments with team members
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_9_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_9_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_9_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_9_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_9_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_9_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_9_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_9_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_9_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question10" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>When working within a team...</b></h3>
							<small>
								<span id="index_10"><big>10</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Works cooperatively with others to solve problems
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_10_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_10_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_10_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_10_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_10_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_10_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_10_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_10_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_10_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is able to remain calm under stress
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_11_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_11_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_11_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_11_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_11_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_11_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_11_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_11_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_11_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question12" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is optimistic about life and can see beyond temporary setbacks and problems
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_12_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_12_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_12_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_12_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_12_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_12_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_12_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_12_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_12_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>
					
				<div class="question espaciado_360" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is able to influence others
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_13_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_13_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_13_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_13_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_13_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_13_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_13_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_13_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_13_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Embraces changes in technology and automation
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_14_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_14_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_14_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_14_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_14_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_14_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_14_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_14_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_14_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is flexible and open-minded when dealing with others
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_15_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_15_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_15_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_15_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_15_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_15_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_15_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_15_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_15_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>
				
				<div class="question espaciado_360" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Learns from personal experiences and/or mistakes
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_16_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_16_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_16_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_16_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_16_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_16_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_16_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_16_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_16_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Doesn't put off making decisions
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_17_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_17_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_17_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_17_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_17_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_17_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_17_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_17_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_17_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>
					
				<div class="question espaciado_360" id="question18" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Deals effectively with interruptions
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_18_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_18_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_18_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_18_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_18_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_18_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_18_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_18_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_18_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question19" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_19"><big>19</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Maintains a tidy work space
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_19_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_19_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_19_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_19_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_19_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_19_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_19_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_19_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_19_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question20" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_20"><big>20</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Is one of the first to try out new technology
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_20_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_20_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_20_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_20_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_20_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_20_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_20_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_20_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_20_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>
					
				<div class="question espaciado_360" id="question21" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_21"><big>21</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Understands what others need
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_21_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_21_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_21_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_21_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_21_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_21_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_21_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_21_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_21_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>		
				</div>

				<div class="question espaciado_360" id="question22" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_22"><big>22</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Influences others to complete tasks and goals
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_22_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_22_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_22_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_22_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_22_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_22_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_22_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_22_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_22_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>

				<div class="question espaciado_360" id="question23" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_23"><big>23</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								Obtains the support of others to accomplish goals
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">						
						<div class="mentr-quiz-btn-desc-op_inv punto1">
							<span id="selected_23_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_23_1">1</button>
							</span><div class="text_under_btn">Poor</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto2">
						<span id="selected_23_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_2">2</button>
						</span><div class="text_under_btn">Fair</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto3">
						<span id="selected_23_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_3">3</button>
						</span><div class="text_under_btn">Good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto4">
						<span id="selected_23_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_4">4</button>
						</span><div class="text_under_btn">Very good</div>
					</div>
						<div class="mentr-quiz-btn-desc-op_inv punto5">
							<span id="selected_23_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_23_5">5</button>
							</span><div class="text_under_btn">Out-standing</div>
						</div>
						<div class="mentr-quiz-btn-desc-op_inv punto6">
							<span id="selected_23_6" class="">
								<button class="mentr-ok-btn btn6" type="button" id="btn_23_6">6</button>
							</span><div class="text_under_btn">Unable to say</div>
						</div>
					</div>	
				</div>

				<div class="question espaciado_360" id="question24" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_24"><big>24</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								What do you think <?php echo ucwords($member['User']['first_name']);?> is really good at?
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">	
					<textarea class="mentr-input-text_inv" value="" id="input_24"></textarea>		
					<div class="no_style">
					<button class="mentr-ok-btn-large_inv mentr-ok-btn" onclick="quiz.scrollIn('A')" type="button" id="btn_24">Save</button>	
					<small class="mentr-desc-btn">
						<label class="presEnter">
							Press ENTER
						</label>
					</small>	
					</div>		
					</div>	
				</div>

				<div class="question espaciado_360" id="question25" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_25"><big>25</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								In which area could <?php echo ucwords($member['User']['first_name']);?> have a great career?
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">			
					<textarea class="mentr-input-text_inv" value="" id="input_25"></textarea>		
					<div class="no_style"><button class="mentr-ok-btn-large_inv mentr-ok-btn" onclick="quiz.scrollIn('B')" type="button" id="btn_25">Save</button>
					<small class="mentr-desc-btn">
						<label class="presEnter">
							Press ENTER
						</label>
					</small>	</div>				
					</div>	
				</div>
					
				<div class="question espaciado_360" id="question26" style="margin-bottom: 4em;margin-bottom: 200px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_26"><big>26</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
								<div>
								What do you think <?php echo ucwords($member['User']['first_name']);?> is particularly good/bad at, but not aware of?
								</div>
						</label>
					</div>
					<div class="mentr-quiz-respond" style="width: 100%;height: 130px;position: relative;">
					<textarea class="mentr-input-text_inv" value="" id="input_26"></textarea>							
					<div class="no_style"><button class="mentr-ok-btn-large_inv mentr-ok-btn" onclick="quiz.scrollIn('C')" type="button" id="btn_26">Save</button>
					<small class="mentr-desc-btn">
						<label class="presEnter">
							Press ENTER
						</label>
					</small>		</div>				
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
		
		<div id="mentr-quiz-space-nav" style="height: 25px;">
			
		</div>
	</form>

</section>
<div id="mentr-footer-submit_friend">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell">
					<input class="mentr-btn-submit" id="submintBtn" type="button" value="SUBMIT">	
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
			<span class="procentaje" >0% completed</span>
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

<script>

</script>
