<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 5,
		TAG: 'results_CDDA'
	}
})

</script>

<?php 
	echo $this->Html->script('../library/jquery.knob.js');
	$arrayf26=array();
	$arrayf26['-8']=100;
	$arrayf26['-7']=96;
	$arrayf26['-6']=91;
	$arrayf26['-5']=87;
	$arrayf26['-4']=83;
	$arrayf26['-3']=78;
	$arrayf26['-2']=74;
	$arrayf26['-1']=70;
	$arrayf26['0']=65;
	$arrayf26['1']=61;
	$arrayf26['2']=57;
	$arrayf26['3']=52;
	$arrayf26['4']=48;
	$arrayf26['5']=44;
	$arrayf26['6']=39;
	$arrayf26['7']=35;
	$arrayf26['8']=31;
	$arrayf26['9']=26;
	$arrayf26['10']=22;
	$arrayf26['11']=18;
	$arrayf26['12']=13;
	$arrayf26['13']=9;
	$arrayf26['14']=5;
?>

<div class="" id="quiz-result-container">
	<section id="result-container-principal">
		<article id="quiz-result-principal">
			<div id="quiz-result-principal-container">
				<div id="img-principal">
					<?php echo $this->Html->image("train.jpg", array('style'=>'max-height: 400px;width: 100%;opacity: 0;'));?>
					<div id="tittle">
						Your career decision impediments
					</div>
				</div>
			</div>
		</article>
		<article class="quiz-result-resultado">
			<div class="result-header">
				<div>Information about yourselft</div>
				<br>
				<?php if((($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10 < 40){?>
					<div class="subtitulo">You feel you do not know enough about yourself</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo (($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10;?>" class="dial">
						</div>
					</div> 
					<div class="texto">
						<p>
							Answering the question, “Who am I?” is the first step toward learning to make good career decisions. Your score is in the lower percentile for this segment. Your answers reflect a lack of knowledge about yourself and your preferences. Perhaps you do not know, or have not yet discovered what work conditions you need to achieve job satisfaction. Unsure about your existing skills, you find it difficult to say at what level they are and if they are sufficient to succeed in a particular occupation. Personality is also a concern for you. You are not aware of your own personality traits, nor how they could translate into useful characteristics for certain fields. 
						</p>
					</div>
				<?php }elseif (((($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10 >= 40) && ((($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10 <= 80)) {?>
					<div class="subtitulo">You feel you know yourself reasonably well</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo (($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10;?>" class="dial">
						</div>
					</div> 
					<div class="texto">
						<p>
							Answering the question, “Who am I?” is the first step toward learning to make good career decisions. Your score is in the middle percentile for this segment. Your answers reflect some knowledge about yourself and your preferences. You are beginning to understand and discover what work conditions you need to achieve job satisfaction. Confident in your existing skills, you are able to say at what level they are and have some idea whether or not they are sufficient to succeed in a particular occupation. You have some understanding of your own personality traits, and how they translate into useful characteristics for certain fields. 
						</p>
					</div>
				<?php }elseif ((($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10 > 80) {?>
					<div class="subtitulo">You feel you know yourself very well</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo (($dataQuest['quiz']['14']+$dataQuest['quiz']['15'])/2)*10;?>" class="dial">
						</div>
					</div> 
					<div class="texto">
						<p>
							Answering the question, “Who am I?” is the first step toward learning to make good career decisions. Your score is in the upper percentile for this segment. Your answers reflect strong knowledge about yourself and your preferences. You have a good understanding of what work conditions you need to achieve job satisfaction. Confident in your existing skills, you are able to say at what level they are and whether or not they are sufficient to succeed in a particular occupation. You are aware of your own personality traits, and understand how they translate into useful characteristics for certain fields. 
						</p>
					</div>
				<?php }?>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="result-header">
				<div>Information about occupations</div>
				<br>
				<?php if($dataQuest['result']['F129']*10 < 40){?>
					<div class="subtitulo">You are knowledgeable about occupations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial2">
						</div>
					</div> 
					<div class="texto">
						<p>
							When making career decisions it is important to be fully aware of your choices. Your score is in the lower percentile for this segment. A low score in this area indicates that you have good knowledge of what career options are available, and that you understand the job market and the opportunities it holds. Specific careers involve different activities and your results demonstrate an advanced comprehension of what they may entail. You are well-informed about the education and training requirements that are expected for different career paths. 
						</p>
					</div>
				<?php }elseif (($dataQuest['result']['F129']*10 >= 40) && ($dataQuest['result']['F129']*10 <= 80)) {?>
					<div class="subtitulo">You are somewhat knowledgeable about occupations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial2">
						</div>
					</div> 
					<div class="texto">
						<p>
							When making career decisions it is important to be fully aware of your choices. Your score is in the middle percentile for this segment. An average score in this area indicates that you have some knowledge of what career options are available, and that you are beginning to understand the job market and the opportunities it holds. Specific careers involve different activities and your results demonstrate some comprehension of what they may entail. You have some knowledge of the education and training requirements that are expected for different career paths. 
						</p>
					</div>
				<?php }elseif ($dataQuest['result']['F129']*10 > 80) {?>
					<div class="subtitulo">You lack information about occupations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial2">
						</div>
					</div> 
					<div class="texto">
						<p>
							When making career decisions it is important to be fully aware of your choices. Your score is in the upper percentile for this segment. A high score in this area indicates a lack of information about what career options are available, and that you do not yet understand the job market and the opportunities it holds. Specific careers involve different activities and your results demonstrate a gap in your current knowledge of what they may entail. You lack information on the education and training requirements that are expected for different career paths. 
						</p>
					</div>
				<?php }?>
			<div style="clear:both;"></div>
		</article>
		<article class="quiz-result-resultado">
			<div class="result-header">
				<div>Dysfunctional beliefs</div>
				<br>
				<?php if($arrayf26[$dataQuest['result']['F126']] < 40){?>
					<div class="subtitulo">You are rational and have realistic expectations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $dataQuest['result']['F129']*10;?>" class="dial3">
						</div>
					</div> 
					<div class="texto">
						<p>
							When it comes to making career decisions, it is important to think clearly and rationally. Your score is in the lower percentile for this segment. A low score in this area indicates that you are able to consider your options in a rational way and have realistic expectations about your future career. You realize that choosing your career is not a one-off decision but a long term process, and that listening to your gut in such situations can impede your progress.   
						</p>
					</div>
				<?php }elseif (($arrayf26[$dataQuest['result']['F126']] >= 40) && ($arrayf26[$dataQuest['result']['F126']] <= 80)) {?>
					<div class="subtitulo">You are somewhat rational and have mixed expectations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $arrayf26[$dataQuest['result']['F126']];?>" class="dial3">
						</div>
					</div> 
					<div class="texto">
						<p>
							When it comes to making career decisions, it is important to think clearly and rationally. Your score is in the middle percentile for this segment. An average score in this area indicates that you are sometimes able to consider your options in a rational way and have both realistic and unrealistic expectations about your future career. You may realize that choosing your career is not a one-off decision but a long term process. However, you also find it difficult to ignore your gut even though you realize this may impede your progress.   
						</p>
					</div>
				<?php }elseif ($arrayf26[$dataQuest['result']['F126']] > 80) {?>
					<div class="subtitulo">You are irrational with unrealistic expectations</div>
					</div>
					<div class="Pi-result">
						<div style="display: inline-block;">
							<input type="text" value="<?php echo $arrayf26[$dataQuest['result']['F126']];?>" class="dial3">
						</div>
					</div> 
					<div class="texto">
						<p>
							When it comes to making career decisions, it is important to think clearly and rationally. Your score is in the lower percentile for this segment. A low score in this area indicates that you are rarely able to consider your options in a rational way and have unrealistic expectations about your future career. You may consider choosing a career to be a one-off decision that cannot be reversed, and believe there is only one career out there that suits you. You find it difficult to ignore your gut when making decisions.
						</p>
					</div>
				<?php }?>
			<div style="clear:both;"></div>
		</article>
		<?php //endfor;?>		
		<article id="Recommendations" class="quiz-result-resultado">
			<div class="result-header recomendaciones_div">
				<div>Recommendations</div>
				<div >
					<div class="items_recommendations">
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div class="texto items">
								<p>Spend some time exploring information about different careers that interest you and make use of MENTOR.´s algorithm to see how well you match with each </p>
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div class="texto items">
								<p>Read through the Resources section to find out more about the research that tells us what should, and should not, be considered in the career decision-making process</p>
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div class="texto items">
								<p>Take MENTOR.´s Career Decision-Making Program. Designed to help you get to know yourself better, it involves a range of different assessments and coaching exercises</p>
							</div>
							<div style="clear: both;"></div>
						</div>
						<div style="clear: both;"></div>
						<div id="recomendation-content">
							<div id="circle-arrow">
								<?php echo $this->Html->image('dashboard/circle-arrow.png');?>
							</div>
							<div class="texto items">
								<p>Further enhance your understanding of yourself, who you are and your purpose in life, and create a career vision using exercises in MENTOR.´s Career Decision-Making Program</p>
							</div>
							<div style="clear: both;"></div>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>	
			<div>
				<button type="button" class="quiz-result-btn">
					Learn more about the Career Decision Course
				</button>
			</div>
					
		</article>		
	</section>	
	<section id="article-cont">
		<?php echo $this->element('article_list');?>
	</section>
</div>

	

	<script>
    $(function() {
        $(".dial").knob({
					'min':0,
					'max':100,
					'readOnly':true,
					'width': 270,
					'height': 270,
					'inputColor': 'rgb(93, 170, 154)',
					'fgColor': 'rgb(93, 170, 154)',
					'bgColor': 'rgb(223, 237, 234)',
					'font' : 'lato',
					'fontWeight': 100,
					'fontSize': 38,
					'thickness':'.1' 
        });

        $(".dial2").knob({
					'min':0,
					'max':100,
					'readOnly':true,
					'width': 270,
					'height': 270,
					'inputColor': 'rgb(159, 47, 89)',
					'fgColor': 'rgb(159, 47, 89)',
					'bgColor': 'rgb(235, 212, 221)',
					'font' : 'lato',
					'fontWeight': 100,
					'fontSize': 38,
					'thickness':'.1'
        });

        $(".dial3").knob({
					'min':0,
					'max':100,
					'readOnly':true,
					'width': 270,
					'height': 270,
					'inputColor': 'rgb(33, 174, 226)',
					'fgColor': 'rgb(33, 174, 226)',
					'bgColor': 'rgb(210, 238, 249)',
					'font' : 'lato',
					'fontWeight': 100,
					'fontSize': 38,
					'thickness':'.1'
        });

    });
</script>