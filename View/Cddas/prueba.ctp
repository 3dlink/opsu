<?php echo $this->Html->script('quiz/quiz-1.js');?>
<?php //echo $this->Html->image('ejmp.png');?>
<section class="" id="quiz-container">
		<div id="quiz-wellcome">
			<h2>
				Welcome and congratulations on your decision to <br>
				take this assessment.
			</h2>
			<h4>
				Building a fullfiling career plays an important part into living a successful<br>
				and inspired life and you’ve taken a first step towards it.
			</h4>	
		</div>			
	<form action="">
		<div class="mentr-quiz-content" >
			<div class="question" id="question1">
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
					<span id="btn_1_content">
						<span id="selected_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_1">OK</button>
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</span>
				</div>	
			</div>
			<div class="question" id="question2">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_2"><big>2</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						What would you like to do next career wise?
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
										I have too many
										<br>
										ideas
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
										I have a reasonable
										<br>
										clear idea
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
							<button class="mentr-ok-btn" type="button" id="btn_3_1">1</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_3_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_2">2</button>	
					</span>
					<span id="selected_3_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_3">3</button>	
					</span>
					<span id="selected_3_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_4">4</button>
					</span>	
					<span id="selected_3_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_5">5</button>	
					</span>
					<span id="selected_3_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_6">6</button>	
					</span>
					<span id="selected_3_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_7">7</button>	
					</span>
					<span id="selected_3_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_3_8">8</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_3_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_3_9">9</button> 
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
							<button class="mentr-ok-btn" type="button" id="btn_4_1" >1</button>	
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_4_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_2" >2</button>	
					</span>
					<span id="selected_4_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_3" >3</button>	
					</span>
					<span id="selected_4_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_4" >4</button>	
					</span>
					<span id="selected_4_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_5" >5</button>
					</span>
					<span id="selected_4_6" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_4_6" >6</button>	
					</span>
					<span id="selected_4_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_7" >7</button>	
					</span>
					<span id="selected_4_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_4_8" >8</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_4_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_4_9" >9</button>     
						</span> 
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I believe that following my passions is a good strategy for choosing my career
					</label>
				</div>
				<div class="mentr-quiz-respond">	
					<span id="selected_5_1" class="">					
						<button class="mentr-ok-btn" type="button" id="btn_5_1" >Yes</button>
					</span>
					<br>
					<span id="selected_5_0" class="">
						<button class="mentr-ok-btn" type="button" id="btn_5_0" >No</button>
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
						I believe that a career choice is a one-time choice and a life-long commitment
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_1" class="">	
							<button class="mentr-ok-btn" type="button" id="btn_6_1">1</button>	
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_6_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_2">2</button>	
					</span>
					<span id="selected_6_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_3">3</button>
					</span>
					<span id="selected_6_4" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_6_4">4</button>	
					</span>
					<span id="selected_6_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_5">5</button>
					</span>
					<span id="selected_6_6" class="">	
						<button class="mentr-ok-btn" type="button" id="btn_6_6">6</button>	
					</span>
					<span id="selected_6_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_7">7</button>	
					</span>
					<span id="selected_6_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_6_8">8</button>	
					</span>
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_6_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_6_9">9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I believe there is only one career that suits me
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_1">1</button>	
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
						<span id="selected_7_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_2">2</button>
						</span>	
						<span id="selected_7_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_3">3</button>
						</span>	
						<span id="selected_7_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_4">4</button>
						</span>	
						<span id="selected_7_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_5">5</button>
						</span>	
						<span id="selected_7_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_6">6</button>
						</span>	
						<span id="selected_7_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_7">7</button>
						</span>	
						<span id="selected_7_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_8">8</button>
						</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_7_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_7_9">9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I believe that going with my gut will help me make a good career decision
					</label>
				</div>
				<div class="mentr-quiz-respond">	
					<span id="selected_8_1" class="">					
						<button class="mentr-ok-btn" type="button" id="btn_8_1">Yes</button>	
					</span>
					<br>
					<span id="selected_8_0" class="">
						<button class="mentr-ok-btn" type="button" id="btn_8_0">No</button>
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
							<button class="mentr-ok-btn" type="button" id="btn_9_1" >1</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_9_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_2" >2</button>
					</span>	
					<span id="selected_9_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_3" >3</button>
					</span>	
					<span id="selected_9_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_4" >4</button>
					</span>	
					<span id="selected_9_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_5" >5</button>
					</span>	
					<span id="selected_9_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_6" >6</button>
					</span>	
					<span id="selected_9_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_7" >7</button>
					</span>	
					<span id="selected_9_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_9_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_9_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_9_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I believe that I do not have to choose a career now because time will lead me to the right career choice
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_1" >1</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_10_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_2" >2</button>
					</span>	
					<span id="selected_10_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_3" >3</button>
					</span>	
					<span id="selected_10_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_4" >4</button>
					</span>	
					<span id="selected_10_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_5" >5</button>
					</span>	
					<span id="selected_10_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_6" >6</button>
					</span>	
					<span id="selected_10_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_7" >7</button>
					</span>	
					<span id="selected_10_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_10_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_10_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_10_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
					</div>
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
							<button class="mentr-ok-btn" type="button" id="btn_11_1">1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_11_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_2">2</button>
					</span>	
					<span id="selected_11_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_3">3</button>
					</span>	
					<span id="selected_11_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_4">4</button>
					</span>	
					<span id="selected_11_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_5">5</button>
					</span>	
					<span id="selected_11_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_6">6</button>
					</span>	
					<span id="selected_11_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_7">7</button>
					</span>	
					<span id="selected_11_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_11_8">8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_11_19" class="">
							<button class="mentr-ok-btn" type="button" id="btn_11_9">9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
							<button class="mentr-ok-btn" type="button" id="btn_12_1">1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_12_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_2">2</button>
					</span>	
					<span id="selected_12_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_3">3</button>
					</span>	
					<span id="selected_12_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_4">4</button>
					</span>	
					<span id="selected_12_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_5">5</button>
					</span>	
					<span id="selected_12_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_6">6</button>
					</span>	
					<span id="selected_12_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_7">7</button>
					</span>	
					<span id="selected_12_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_12_8">8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_12_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_12_9">9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
							<button class="mentr-ok-btn" type="button" id="btn_13_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_13_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_2" >2</button>
					</span>	
					<span id="selected_13_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_3" >3</button>
					</span>	
					<span id="selected_13_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_4" >4</button>
					</span>	
					<span id="selected_13_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_5" >5</button>
					</span>	
					<span id="selected_13_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_6" >6</button>
					</span>	
					<span id="selected_13_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_7" >7</button>
					</span>	
					<span id="selected_13_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_13_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_13_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_13_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I know what job satisfaction looks like for me (for example, degree of autonomy, job security, sufficient pay)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_14_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_2" >2</button>
					</span>	
					<span id="selected_14_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_3" >3</button>
					</span>	
					<span id="selected_14_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_4" >4</button>
					</span>	
					<span id="selected_14_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_5" >5</button>
					</span>	
					<span id="selected_14_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_6" >6</button>
					</span>	
					<span id="selected_14_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_7" >7</button>
					</span>	
					<span id="selected_14_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_14_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_14_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_14_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I have enough information about my competencies (for example, verbal skills, numerical ability)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_15_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_2" >2</button>
					</span>	
					<span id="selected_15_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_3" >3</button>
					</span>	
					<span id="selected_15_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_4" >4</button>
					</span>	
					<span id="selected_15_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_5" >5</button>
					</span>	
					<span id="selected_15_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_6" >6</button>
					</span>	
					<span id="selected_15_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_7" >7</button>
					</span>	
					<span id="selected_15_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_15_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_15_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_15_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I know what steps to take for making a career decision
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_16_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_2" >2</button>
					</span>	
					<span id="selected_16_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_3" >3</button>
					</span>	
					<span id="selected_16_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_4" >4</button>
					</span>	
					<span id="selected_16_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_5" >5</button>
					</span>	
					<span id="selected_16_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_6" >6</button>
					</span>	
					<span id="selected_16_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_7" >7</button>
					</span>	
					<span id="selected_16_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_16_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_16_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_16_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
							<button class="mentr-ok-btn" type="button" id="btn_17_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_17_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_2" >2</button>
					</span>	
					<span id="selected_17_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_3" >3</button>
					</span>	
					<span id="selected_17_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_4" >4</button>
					</span>	
					<span id="selected_17_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_5" >5</button>
					</span>	
					<span id="selected_17_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_6" >6</button>
					</span>	
					<span id="selected_17_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_7" >7</button>
					</span>	
					<span id="selected_17_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_17_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_17_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_17_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I know how to combine the information I have about myself with the information I have about the different careers
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_18_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_2" >2</button>
					</span>	
					<span id="selected_18_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_3" >3</button>
					</span>	
					<span id="selected_18_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_4" >4</button>
					</span>	
					<span id="selected_18_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_5" >5</button>
					</span>	
					<span id="selected_18_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_6" >6</button>
					</span>	
					<span id="selected_18_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_7" >7</button>
					</span>	
					<span id="selected_18_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_18_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_18_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_18_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
						I find it difficult to make a career decision because my preferences cannot be combined in one career, and I do not want to give any of them up (e.g., I'd like to work as a free-lancer, but I also wish to have a steady income)
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_19_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_2" >2</button>
					</span>	
					<span id="selected_19_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_3" >3</button>
					</span>	
					<span id="selected_19_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_4" >4</button>
					</span>	
					<span id="selected_19_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_5" >5</button>
					</span>	
					<span id="selected_19_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_6" >6</button>
					</span>	
					<span id="selected_19_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_7" >7</button>
					</span>	
					<span id="selected_19_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_19_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_19_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_19_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
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
							<button class="mentr-ok-btn" type="button" id="btn_20_1" >1</button>
						</span>	
						<span id="mentr-quiz-btn-desc-op-label">Does not describe me</span>
					</div>
					<span id="selected_20_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_2" >2</button>
					</span>	
					<span id="selected_20_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_3" >3</button>
					</span>	
					<span id="selected_20_4" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_4" >4</button>
					</span>	
					<span id="selected_20_5" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_5" >5</button>
					</span>	
					<span id="selected_20_6" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_6" >6</button>
					</span>	
					<span id="selected_20_7" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_7" >7</button>
					</span>	
					<span id="selected_20_8" class="">
						<button class="mentr-ok-btn" type="button" id="btn_20_8" >8</button>
					</span>	
					<div class="mentr-quiz-btn-desc-op">
						<span id="selected_20_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_20_9" >9</button>
						</span>
						<span id="mentr-quiz-btn-desc-op-label">Describe me well</span>
					</div>
				</div>	
			</div>
			
			<div class="question" id="question_break">
				<div>
					<h3 class="mentr-quiz-question" style="font-weight: 300;font-size: 36px;font-style: italic;">
						<small>
							<span id="index_A"></span>
							<span class=""></span>
						</small> 
						"To find out what one is fitted to do, and to secure and <br>opportunity to do it, the key to happiness"
						<br>
						<small style="font-weight: 300; font-style: italic;">
							john dewey
						</small>
					</h3>
				</div>
				<div class="mentr-quiz-respond">						
					<button class="mentr-ok-btn-large" type="button" onclick="quiz.scrollIn('A')">Got it</button>
					<small class="mentr-desc-btn">
						<label>
							Press ENTER
						</label>
					</small>							
				</div>	
			</div>

			<div class="question" id="question21">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_21"><big>21</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						what is your birthday?
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<input class="mentr-input-text" type="date" value="" id="input_21">
					<span id="btn_2_content">
						<span id="selected_21" class="">
							<button class="mentr-ok-btn" type="button" id="btn_21">OK</button>	
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</span>
				</div>	
			</div>
			
			<div class="question" id="question22">
				<div>
					<label class="mentr-quiz-question">
						<small>
							<span id="index_22"><big>22</big></span>
							<?php echo $this->Html->image('dashboard/arrowM.png',array('style'=>'width: 24px;'));?>
						</small> 
						What is the highest level of education you have completed? If currently enrolled, highest degree received.
					</label>
				</div>
				<div class="mentr-quiz-respond">						
					<div>
						<span id="selected_22_1" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_1">A</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								No schooling completed, or less than 1 year
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_2" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_2">B</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Nursery, kindergarten, and elementary (grades 1-8)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_3" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_3">C</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								High school (grades 9-12, no degree)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_4" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_4">D</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								High school graduate (or equivalent)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_5" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_5">E</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Some college (1-4 years, no degree)
							</label>
						</small>
					</div>	
					<div>
						<span id="selected_22_6" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_6">F</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Associate’s degree (including occupational or academic degrees)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_7" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_7">G</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Bachelor’s degree (BA, BS, AB, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_8" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_8">H</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Master’s degree (MA, MS, MENG, MSW, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_9" class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_9">I</button>
						</span>
						<small class="mentr-desc-btn">
							<label>
								Professional school degree (MD, DDC, JD, etc)
							</label>
						</small>
					</div>
					<div>
						<span id="selected_22_10"class="">
							<button class="mentr-ok-btn" type="button" id="btn_22_10">J</button>
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
						<button class="mentr-ok-btn" type="button" id="btn_23_1">A</button>
					</span>
					<small class="mentr-desc-btn">
						<label>
							Man
						</label>
					</small>	
					<span id="selected_23_2" class="">
						<button class="mentr-ok-btn" type="button" id="btn_23_2">B</button>
					</span>	
					<small class="mentr-desc-btn">
						<label>
							Woman
						</label>
					</small>
					<span id="selected_23_3" class="">
						<button class="mentr-ok-btn" type="button" id="btn_23_3">C</button>
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
						We will send you a summary of this assessment by email.	 <br>Please indicate us you email address
					</label>
				</div>
				<div class="mentr-quiz-respond">
					<input class="mentr-input-text" type="email" value="" id="input_24">
					<span id="btn_3_content">
						<span id="selected_24" class="">
							<button class="mentr-ok-btn" type="button" id="btn_24">OK</button>	
						</span>
						<small class="mentr-desc-btn">
							<label>Press ENTER</label>
						</small>
					</span>
				</div>	
			</div>				
		</div>
		<div style="clear:both"></div>
		<div id="mentr-footer-submit">	
			<div id="mentr-footer-row">
				<div id="mentr-footer-cell">
					<input class="mentr-btn-submit" id="submintBtn" type="button" value="Submit">	
					<span class="mentr-desc-btn">
						<label>
							Press ENTER
						</label>
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
	</div>		
</nav>
<footer>
	
</footer>
