<?php echo $this->Html->script('quiz/quiz-4.js');?>
<style type="text/css">
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
header #menu_user {
  float: none;
  max-width: none;
}

header #menu_user #menu_user-content {
  padding-left: 30px;
}
.mentr-quiz-question {
  font-size: 22px;
  font-weight: 400;
}

#btn_10_1 {
   margin: 0 auto !important; 
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

#dash_content{
	background-color: white;
}

.question {
  float: left;
}


.comparation{
	width: 270px;
	height: 220px;
	border: solid 1px #e0e0e0;
	float: left;
}
.or{
	width: 130px;
  height: 220px;
  float: left;
  text-align: center;
  padding-top: 70px;
	font-size: 24px;
	font-weight: 400;
	margin: 20px 0px;
	color: #333333;
}

.mentr-quiz-respond {
  margin-left: 2.4em;
  float: left;
  margin-top: 50px;
}

.mentr-comparation-btn {
  background-color: #ffa500;
  background-image: linear-gradient(to bottom, #ffa95c, #ff885c);
  border: 0px solid rgba(0,0,0,0);
  border-radius: 10px;
  color: #fff;
  height: 40px;
  width: 110px;
  margin: 0 auto;
  display: block;
  font-size: 16px;
  font-weight: 400;
}

.mentr-comparation-btn:hover {
  background-image: linear-gradient(to bottom, #ff973b, #ff713b);
}

.pregunta{
	text-align: center;
	min-height: 160px;
	width: 100%;
	float: left;
	color:#333333;
	font-size: 20px;
	font-weight: 300;
}

.pregunta h1{
	font-size: 24px;
	font-weight: 400;
	margin: 20px 0px;
}

.elegido{
  background-color: rgb(153, 204, 0);
  background-image: none;
}
.elegido:hover {
  background-image: none;
}

#portada_movil{
	display: none;
	margin-bottom: 20px;
}

#start{
	width: 370px;
	height: 100px;
	font-size: 30px;
  display: block;
  margin: 0 auto;
	margin-bottom: 50px;
}

@media ( max-width : 750px) {

	#portada_movil{
		display: none;
	}
	.comparation {
	  width: 260px !important;
	  height: 220px !important;
	  display: block !important;
	  padding: 0 !important;
 	 	border-radius: 0 !important;
	}
	.pregunta {
	  width: 100% !important;
	  font-size: 20px !important;
	  padding: 0 !important;
 	 	border-radius: 0 !important;
	}
	.or {
	  width: 55px !important;
	  height: 220px !important;
	  padding-top: 70px !important;
	}
}


@media ( max-width : 750px) {
	#portada_movil{
		display: block;
	}
	.comparation {
  		width: 100% !important;
  	  	height: 200px !important;
	}
	.pregunta {
	  width: 100% !important;
	  min-height: 138px !important;
	  font-size: 20px !important;
	  padding: 0 !important;
 	 	border-radius: 0 !important;
	}
	.or {
	  width: 370px !important;
	  max-height: 80px !important;
	  padding-top: 22px !important;
 	 	border-radius: 0 !important;
 	 	margin: 0 !important;
	}
}

@media ( max-width : 500px) {
	.mentr-quiz-respond{
		margin-left: 0;
	}
}
@media ( max-width : 460px) {
	#start{
		width: 100%;
	}
}

@media ( max-width : 420px) {
	.question{
		width: 100%;
	}
	.mentr-quiz-respond{
		width: 100%;
	}
	.pregunta {
		height: initial !important;
	}
	.comparation{
		width: 100% !important;
	}
	.or{
		width: 100% !important;
	}
}

@media ( max-width : 380px) {
	#start{
		font-size: 22px;
	}
}

</style>

<section id="portada_movil">

		<div id="quiz-wellcome2" style="background-color:#cabeca;min-height: 970px;text-align:justify;  margin-top: 100px;">
			<h2 style="line-height: 35px; font-size: 30px;  font-weight: 400 !important; margin-bottom:20px;">
				In this quest you will be asked to compare how important are for you each of the 9 qualities identified by scientific research to correlate the most with job satisfaction.
			</h2>
			<h4 style="font-size: 22px;font-weight: 300; line-height: 30px; margin-bottom:50px !important; ">
				Frame the comparation in terms of which quality is more important to you right now, not in terms of which value is more important to you in the long term. 
			</h4>	

			<input class="mentr-btn-submit" id="start" type="button" value="START ASSESSMENT">	
		</div>	

</section>


<section class="" id="quiz-container">

		<div id="quiz-wellcome" style="padding-right: 165px; background-color:#cabeca; font-weight: 400 !important;  margin-top: 100px;">
			<h2 style="font-weight: 500 !important;  margin-bottom: 20px; ">
				In this quest you will be asked to compare how important are for you each of the 9 qualities identified by scientific research to correlate the most with job satisfaction.
			<h4 style="line-height: 1.5 !important; margin-bottom: 0px !important;">
				Frame the comparation in terms of which quality is more important to you right now, not in terms of which value is more important to you in the long term. 
			</h4>	
			<br />
		</div>	

	<form action="">
		<div class="mentr-quiz-content" style="padding-left: 19em;">					
				<div class="question" id="question1" style="margin-bottom: 2em; margin-top: 55px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_1"><big>1</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy</h1>
								<p>I have complete responsibility for deciding how and when my work gets done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_1_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness</h1>
								<p>My job allows me to see my contribution to an end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_1_2">Choose</button>
						</div>
					</div>	
				</div>
					
				<div class="question" id="question2" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_2"><big>2</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness</h1>
								<p>I get on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_2_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status</h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_2_2">Choose</button>
						</div>
					</div>
				</div>

				<div class="question" id="question3" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_3"><big>3</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay</h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_3_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_3_2">Choose</button>
						</div>
					</div>
				</div>

				<div class="question" id="question4" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_4"><big>4</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety</h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_4_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security</h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_4_2">Choose</button>
						</div>
					</div>
				</div>

				<div class="question" id="question5" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_5"><big>5</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Status</h1>
								<p>My job is respected and admired</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_5_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy</h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_5_2">Choose</button>
						</div>
					</div>
				</div>

				<div class="question" id="question6" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_6"><big>6</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_6_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_6_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question7" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_7"><big>7</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job security</h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_7_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay</h1>
								<p>My job pays enough to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_7_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question8" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_8"><big>8</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p>Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_8_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_8_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question9" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_9"><big>9</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Status</h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_9_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness </h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_9_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question10" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_10"><big>10</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_10_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_10_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question11" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_11"><big>11</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>My job is safe – I do not risk becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_11_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_11_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question12" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_12"><big>12</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p>I have a good balance between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_12_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_12_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question13" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_13"><big>13</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_13_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy</h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_13_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question14" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_14"><big>14</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_14_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_14_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question15" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_15"><big>15</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_15_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_15_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question16" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_16"><big>16</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_16_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness </h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_16_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question17" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_17"><big>17</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_17_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_17_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question18" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_18"><big>18</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_18_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_18_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question19" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_19"><big>19</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_19_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy</h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_19_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question20" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_20"><big>20</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_20_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_20_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question21" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_21"><big>21</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p> Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_21_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_21_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question22" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_22"><big>22</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_22_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness </h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_22_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question23" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_23"><big>23</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_23_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_23_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question24" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_24"><big>24</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p>Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_24_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Impact</h1>
								<p>The results of my work affect the well-being of other people</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_24_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question25" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_25"><big>25</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_25_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy</h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_25_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question26" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_26"><big>26</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_26_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_26_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question27" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_27"><big>27</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Pay </h1>
								<p>Receive enough pay to support my short and long-term financial goals</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_27_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness </h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_27_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question28" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_28"><big>28</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p> My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_28_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_28_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question29" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_29"><big>29</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_29_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy </h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_29_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question30" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_30"><big>30</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p> Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_30_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Relatedness </h1>
								<p>Getting on well with my colleagues</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_30_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question31" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_31"><big>31</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Job Security </h1>
								<p>Being sure that I will keep my job without the risk of becoming unemployed</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_31_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness </h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_31_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question32" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_32"><big>32</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance</h1>
								<p>Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_32_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p> Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_32_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question33" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_33"><big>33</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_33_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy </h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_33_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question34" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_34"><big>34</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Variety </h1>
								<p>My job requires me to do different things, using a variety of skills</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_34_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Completeness</h1>
								<p>My job allows me to see my contribution to the end product</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_34_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question35" style="margin-bottom: 2em;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_35"><big>35</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p>Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_35_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Autonomy </h1>
								<p>The job gives me complete responsibility for deciding how and when the work is done</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_35_2">Choose</button>
						</div>
					</div>
				</div>


				<div class="question" id="question36" style="margin-bottom: 2em;margin-bottom: 200px;">
					<div>
						<label class="mentr-quiz-question">
							<small>
								<span id="index_36"><big>36</big></span>
								<img src="<?php echo $this->webroot.'img/dashboard/arrowM.png';?>" style="width: 24px;" alt="">							</small> 
							Which of these two work values is a greater priority for you?
						</label>
					</div>
					<div class="mentr-quiz-respond">				
						<div class="comparation">
							<div class="pregunta">
								<h1>Work/Life Balance </h1>
								<p> Achieve an optimal arrangement between my work and my private time</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_36_1">Choose</button>
						</div>
						<div class="or">or</div>					
						<div class="comparation">
							<div class="pregunta">
								<h1>Status </h1>
								<p>Hold a respected and admired job</p>
							</div>
							<button class="mentr-comparation-btn" type="button" id="btn_36_2">Choose</button>
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
					<!-- <input class="mentr-btn-submit" id="submintBtn" type="button" value="SUBMIT">	 -->
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
			<span class="procentaje" >0 of 36 completed</span>
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


<script type="text/javascript">
$('#btn_gif_save').css("display","block");
$('#start').click(function(){
	$('body').scrollTo('970px',900);
});
</script>