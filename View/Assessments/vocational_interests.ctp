<?php echo $this->Html->script('quiz/quiz-2.js');?>
<?php echo $this->Html->script('lib/redirect.js');?>

<style type="text/css">

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

#dash_content{
	  background-color: white;
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


@media (max-width: 430px){
	#mentr-quiz-nav .div-navContainer .mentr-quiz-progress {
  width: 160px;
}
.mentr-quiz-progress>div {
  width: 70% !important;
}
}
</style>



		<div id="quiz-wellcome2" style="background-color:#cabeca;">
			<h2 style="line-height: 25px; font-size: 18px;  font-weight: 400 !important;">
				In this quest you will be presented with a series of activities. Simply think about whether or not you would enjoy doing them.
			</h2>
			<h4 style="font-size: 14px;font-weight: 300; line-height: 20px;">
				In order to obtain the best results, go with your initial reaction. Ignore factors such as whether or not you have the necessary skills or training, or how much money you might make.
			</h4>	
		</div>	

<section class="" id="quiz-container">

		<div id="quiz-wellcome" style="padding-right: 165px; background-color:#cabeca; font-weight: 400 !important;">
			<h2 style="font-weight: 500 !important;  margin-bottom: 20px; margin-top: 120px;">
				In this quest you will be presented with a series of activities. Simply think about whether or not you would enjoy doing them.
			</h2>
			<h4 style="line-height: 1.5 !important; margin-bottom: 0px !important;">
				In order to obtain the best results, go with your initial reaction. Ignore factors such as whether or not you have the necessary skills or training, or how much money you might make.
			</h4>	
			<br />
		</div>	

	<form action="">
		<div class="mentr-quiz-content" style="padding-left:256px;">					
				<div class="question visible" id="question1" style="margin-bottom: 2em; margin-top: 15px;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Drive a truck to deliver packages to offices and homes 
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_1_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_1_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question2" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_2"><big>2</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Assemble electronic parts
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_2_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_2_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question3" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_3"><big>3</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Examine blood samples using a microscope
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_3_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_3_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Investigate the cause of a fire
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_4_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_4_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Create special effects for movies
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_5_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_5_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question6" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_6"><big>6</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Paint sets for plays
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_6_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_6_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question7" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_7"><big>7</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Do volunteer work at a non-profit organization
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_7_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_7_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question8" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_8"><big>8</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Teach children how to play sports
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_8_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_8_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question9" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_9"><big>9</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Start my own business
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_9_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_9_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question10" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_10"><big>10</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Negotiate business contracts
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_10_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_10_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Keep shipping and receiving records
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_11_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_11_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question12" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Calculate the wages of employees
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_12_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_12_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Repair household appliances
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_13_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_13_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Raise fish in a fish hatchery
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_14_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_14_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Conduct chemical experiments
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_15_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_15_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
				
				<div class="question" id="question_break">
					<div>
						<h3 class="mentr-quiz-question" style=" text-align: justify; font-weight: 300;font-size: 36px;font-style: italic;">
							<small>
								<span id="index_A"></span>
								<span class=""></span>
							</small> 
							“Don't ask what the world needs. Ask what makes you come alive, and go do it. Because what the world needs is people who have come alive.”
							<br>
							<small style="font-weight: 300; font-style: italic;">
								Howard Thurman
							</small>
						</h3>
					</div>
					<div class="mentr-quiz-respond">						
						<button class="mentr-ok-btn-large" type="button" onclick="quiz.scrollIn('A');" id="btn_a">Got it</button>
						<small class="mentr-desc-btn">
							<label class="presEnter">
								Press ENTER
							</label>
						</small>							
					</div>	
				</div>
					
				<div class="question" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Study the movement of planets
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_16_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_16_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Compose or arrange music
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_17_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_17_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question18" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Draw pictures
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_18_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_18_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question19" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_19"><big>19</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Give career guidance to people
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_19_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_19_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question20" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_20"><big>20</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Perform rehabilitation therapy
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_20_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_20_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question21" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_21"><big>21</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Operate a beauty salon or barber shop
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_21_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_21_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question22" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_22"><big>22</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Manage a department within a large company
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_22_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_22_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question23" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_23"><big>23</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Load computer software into a large computer network 
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_23_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_23_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_23_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_23_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_23_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_23_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_23_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_23_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question24" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_24"><big>24</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Operate a calculator
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_24_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_24_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
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
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question25" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_25"><big>25</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Build kitchen cabinets
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_25_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_25_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_25_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_25_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_25_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_25_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_25_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_25_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_25_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_25_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question26" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_26"><big>26</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Lay brick or tile
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_26_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_26_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_26_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_26_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_26_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_26_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_26_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_26_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_26_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_26_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question27" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_27"><big>27</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Develop a new medicine
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_27_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_27_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_27_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_27_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_27_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_27_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_27_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_27_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_27_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_27_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question28" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_28"><big>28</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Study ways to reduce water pollution
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_28_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_28_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_28_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_28_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_28_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_28_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_28_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_28_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_28_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_28_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question29" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_29"><big>29</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Write books or plays
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_29_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_29_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_29_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_29_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_29_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_29_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_29_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_29_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_29_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_29_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					

				<div class="question" id="question30" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_30"><big>30</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Play a musical instrument
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_30_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_30_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_30_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_30_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_30_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_30_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_30_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_30_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_30_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_30_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
				
				<div class="question" id="question_break">
					<div>
						<h3 class="mentr-quiz-question" style="text-align: justify; font-weight: 300;font-size: 36px;font-style: italic;">
							<small>
								<span id="index_B"></span>
								<span class=""></span>
							</small> 
							“It is your work in life that is the ultimate seduction.”
							<br>
							<small style="font-weight: 300; font-style: italic;">
								Pablo Picasso
							</small>
						</h3>
					</div>
					<div class="mentr-quiz-respond">						
						<button class="mentr-ok-btn-large" type="button" onclick="quiz.scrollIn('B')" id="btn_b">Got it</button>
						<small class="mentr-desc-btn">
							<label class="presEnter">
								Press ENTER
							</label>
						</small>							
					</div>	
				</div>
					
				<div class="question" id="question31" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_31"><big>31</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Teach an individual an exercise routine
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_31_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_31_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_31_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_31_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_31_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_31_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_31_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_31_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_31_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_31_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question32" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_32"><big>32</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Help people with personal or emotional problems
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_32_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_32_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_32_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_32_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_32_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_32_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_32_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_32_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_32_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_32_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question33" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_33"><big>33</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Buy and sell stocks and bonds
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_33_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_33_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_33_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_33_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_33_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_33_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_33_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_33_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_33_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_33_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question34" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_34"><big>34</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Manage a retail store
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_34_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_34_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_34_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_34_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_34_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_34_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_34_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_34_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_34_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_34_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question35" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_35"><big>35</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Develop a spreadsheet using computer software
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_35_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_35_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_35_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_35_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_35_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_35_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_35_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_35_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_35_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_35_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question36" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_36"><big>36</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Proofread records or forms
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_36_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_36_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_36_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_36_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_36_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_36_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_36_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_36_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_36_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_36_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question37" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_37"><big>37</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Set up and operate machines to make products
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_37_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_37_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_37_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_37_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_37_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_37_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_37_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_37_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_37_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_37_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question38" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_38"><big>38</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Put out forest fires
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_38_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_38_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_38_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_38_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_38_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_38_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_38_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_38_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_38_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_38_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question39" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_39"><big>39</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Invent a replacement for sugar
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_39_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_39_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_39_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_39_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_39_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_39_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_39_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_39_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_39_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_39_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question40" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_40"><big>40</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Do laboratory tests to identify diseases
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_40_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_40_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_40_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_40_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_40_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_40_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_40_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_40_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_40_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_40_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question41" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_41"><big>41</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Sing in a band
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_41_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_41_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_41_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_41_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_41_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_41_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_41_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_41_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_41_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_41_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question42" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_42"><big>42</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Edit movies
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_42_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_42_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_42_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_42_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_42_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_42_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_42_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_42_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_42_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_42_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question43" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_43"><big>43</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Take care of children at a day-care center
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_43_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_43_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_43_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_43_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_43_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_43_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_43_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_43_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_43_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_43_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question44" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_44"><big>44</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Teach a high-school class
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_44_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_44_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_44_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_44_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_44_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_44_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_44_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_44_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_44_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_44_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question45" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_45"><big>45</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Sell merchandise at a department store
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_45_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_45_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_45_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_45_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_45_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_45_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_45_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_45_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_45_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_45_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
				
				<div class="question" id="question_break">
					<div>
						<h3 class="mentr-quiz-question" style="text-align: justify; font-weight: 300;font-size: 36px;font-style: italic;">
							<small>
								<span id="index_C"></span>
								<span class=""></span>
							</small> 
							“Life isn't about finding yourself. Life is about creating yourself”
							<br>
							<small style="font-weight: 300; font-style: italic;">
								George Bernard Shaw
							</small>
						</h3>
					</div>
					<div class="mentr-quiz-respond">						
						<button class="mentr-ok-btn-large" type="button" onclick="quiz.scrollIn('C')" id="btn_c">Got it</button>
						<small class="mentr-desc-btn">
							<label class="presEnter">
								Press ENTER
							</label>
						</small>							
					</div>	
				</div>
					
				<div class="question" id="question46" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_46"><big>46</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Manage a clothing store
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_46_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_46_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_46_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_46_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_46_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_46_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_46_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_46_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_46_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_46_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question47" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_47"><big>47</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Keep inventory records
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_47_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_47_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_47_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_47_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_47_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_47_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_47_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_47_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_47_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_47_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question48" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_48"><big>48</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Stamp, sort, and distribute mail for an organization
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_48_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_48_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_48_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_48_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_48_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_48_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_48_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_48_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_48_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_48_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question49" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_49"><big>49</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Test the quality of parts before shipment
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_49_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_49_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_49_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_49_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_49_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_49_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_49_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_49_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_49_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_49_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question50" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_50"><big>50</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Repair and install locks
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_50_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_50_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_50_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_50_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_50_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_50_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_50_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_50_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_50_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_50_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question51" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_51"><big>51</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Develop a way to better predict the weather
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_51_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_51_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_51_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_51_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_51_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_51_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_51_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_51_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_51_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_51_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question52" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_52"><big>52</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Work in a biology lab
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_52_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_52_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_52_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_52_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_52_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_52_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_52_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_52_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_52_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_52_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question53" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_53"><big>53</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Write scripts for movies or television shows
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_53_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_53_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_53_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_53_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_53_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_53_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_53_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_53_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_53_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_53_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question54" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_54"><big>54</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Perform jazz or tap dance
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_54_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_54_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_54_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_54_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_54_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_54_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_54_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_54_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_54_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_54_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question55" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_55"><big>55</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Teach sign language to people with hearing disabilities
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_55_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_55_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_55_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_55_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_55_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_55_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_55_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_55_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_55_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_55_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question56" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_56"><big>56</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Help conduct a group therapy session
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_56_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_56_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_56_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_56_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_56_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_56_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_56_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_56_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_56_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_56_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question57" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_57"><big>57</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Represent a client in a lawsuit
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_57_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_57_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_57_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_57_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_57_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_57_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_57_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_57_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_57_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_57_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question58" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_58"><big>58</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Market a new line of clothing
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_58_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_58_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_58_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_58_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_58_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_58_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_58_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_58_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_58_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_58_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question59" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_59"><big>59</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Inventory supplies using a hand-held computer
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_59_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_59_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_59_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_59_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_59_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_59_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_59_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_59_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_59_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_59_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question60" style="margin-bottom: 2em;margin-bottom: 1000px;">
					<div>
						<label class="mentr-quiz-question">
							<h3><b>I would like to...</b></h3>
							<small>
								<span id="index_60"><big>60</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Record rent payments
						</label>
					</div>
					<div class="mentr-quiz-respond">						
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_60_1" class="">
								<button class="mentr-ok-btn" type="button" id="btn_60_1">1</button>
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="upLabel">Strongly dislike</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_60_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_60_2">2</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_60_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_60_3">3</button>	
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
						<span id="selected_60_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_60_4">4</button>
						</span>
						</div>
						<div class="mentr-quiz-btn-desc-op">
							<span id="selected_60_5" class="">
								<button class="mentr-ok-btn" type="button" id="btn_60_5">5</button> 
							</span>
							<span id="mentr-quiz-btn-desc-op-label" class="downLabel">Strongly like</span>
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
		
		<div id="mentr-quiz-space-nav" style="height: 25px;">
			
		</div>
	</form>

</section>
<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell" style="position:relative;">
					<div id="btn_gif_save">+70</div>
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
			<span class="procentaje" >0 of 60 completed</span>
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


