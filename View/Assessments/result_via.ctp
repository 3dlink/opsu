<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 4,
		TAG: 'riasec_summary'
	}
})

</script>


<?php echo $this->Html->script('../library/jquery.knob.js');?>
<?php 

$newArray=array();
$newArray['1']=array('value'=>$dataQuestVIA['Via']['realistic'], 'letter'=>'realistic', 'tooltip' => 'Hands-on and practical, you make things work. A straightforward thinker, you fix, build and repair. You learn from doing and like stability in work.');
$newArray['2']=array('value'=>$dataQuestVIA['Via']['investigative'], 'letter'=>'investigative', 'tooltip' => 'Full of ideas and innovation, you are curious and intelligent. A problem-solver who loves to learn, you are reserved, thoughtful and thrive on logic.');
$newArray['3']=array('value'=>$dataQuestVIA['Via']['artistic'], 'letter'=>'artistic', 'tooltip' => 'Talented, independent and driven by creativity, your all or nothing approach needs space and freedom to work. You bring drama to everything you do.');
$newArray['4']=array('value'=>$dataQuestVIA['Via']['social'], 'letter'=>'social', 'tooltip' => 'A helper and a healer, you are all about community. A natural mediator, you want to make the world a better place. Social interaction is a must.');
$newArray['5']=array('value'=>$dataQuestVIA['Via']['enterprising'], 'letter'=>'enterprising', 'tooltip' => 'Persuasive and ambitious, you broker deals and make sales. A goal oriented, big picture thinker, you work hard and are a natural communicator.');
$newArray['6']=array('value'=>$dataQuestVIA['Via']['conventional'], 'letter'=>'conventional', 'tooltip' => 'Organized, efficient and detail oriented, you turn chaos into order. Conscientious and cautious, you can be relied on to make things run smoothly. ');
function order_by_member_key($a, $b){
	$ordenPrioridad=array();
	$ordenPrioridad['realistic'] = 6;
	$ordenPrioridad['investigative'] = 5;
	$ordenPrioridad['artistic'] = 4;
	$ordenPrioridad['social'] = 3;
	$ordenPrioridad['enterprising'] = 2;
	$ordenPrioridad['conventional'] = 1;
		if ($a['value'] == $b['value'])
		{
			// membkey is the same, sort by head
			if ($ordenPrioridad[$a['letter']] < $ordenPrioridad[$b['letter']]) return 1;
			return  -1;
		}
		// sort the higher membkey first:
		return $a['value'] < $b['value'] ? 1 : -1;
}
usort($newArray, "order_by_member_key");



$dos = split('-', $archetype['Archetype']['title']);
$uno = $dos[0];
$dos = split(' ', $dos[1]);
$dos = $dos[0];

?>

<style>

#comentario textarea {
	position: initial;
  max-width: 610px;
  width: 90%;
  height: 80px;
  margin: 0 auto;
  margin-top: -18px;
  display: block;
}


.h4_science{
	font-weight: 600 !important;
	font-size:20px !important;
	margin-left: 188px !important;
}
.p_science{
	font-size: 16px !important; 
	color: #666666 !important; 
	font-weight: 300 !important;  
	margin-left: 188px !important;
}
.col-xs-4 {
  width: 25%;
}
.titulo1{
	text-align: left;
	font-size: 30px !important;
	padding: 20px 0;
}
.titulo2{
	text-align: left;
	font-size: 20px;
	padding: 20px 0;
	font-weight: bold;
}

.dash-result-left {
  width: 100%;
  float: none; 
  margin-right: 0;
}

@media ( max-width : 750px) {
	#careers_list {
	  margin-top: 0px;
	}
}

@media ( max-width : 630px) {
	a.tooltips span {
	  width: 200px;
	}
}


@media ( max-width : 600px) {
	.h4_science{
		margin-left: 125px !important;
	}
	.p_science{  
		margin-left: 125px !important;
	}
}

@media ( max-width : 600px) {
	.h4_science{
		margin-left: 100px !important;
	}
	.p_science{  
		margin-left: 100px !important;
	}
}
</style>

<div>		
	<div id="menuUserDashboard" style="color: #B0B0B0;">
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Know Myself Intro Page',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_1"><?php echo __('Quests',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Vocational Interests',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option active">
			<?php echo __('Results',true);?>
			<div></div>
		</div>
	</div>
</div>
<div class="" id="quiz-result-container">
	<?php 
		$arrayColor=array();
		$y=0;
		foreach($newArray as $x): $arrayColor[$y]=$x['letter'];$y++;
		endforeach;
	?>	

	<section id="seccion_oculta" style="display:none;">
		<div id="circuloRIASEC_arriba">
			<div class="RIASEC">
				<div id="" class="C1 <?php echo $arrayColor[0];?>">
					<div class="C2 <?php echo $arrayColor[1];?>" >
						<div class="C3">
							<div class="C4">
								<div class="C5">
									<div class="C6">
										<div id="RIASEC-result">
											<span id="Pletra" class="<?php echo $arrayColor[0]?>"><?php echo strtoupper(mb_substr($arrayColor[0],0,1));?></span><span id="Sletra" class="<?php echo $arrayColor[1]?>"><?php echo strtoupper(mb_substr($arrayColor[1],0,1));?></span>	
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="result-container-principal">
		<article class="quiz-result-resultado" style="border-bottom: 0;padding-bottom:0;margin-bottom:0;">
			<div class="">
				<p style="font-size: 16px;  margin-bottom: 0;">
					<label class="titulo1">You are predominant <?php echo ucwords($uno);?> followed by <?php echo ucwords($dos);?></label>
					<br>				
					<?php echo $archetype['Archetype']['texto1'];?>
					<br>
					<label class="titulo2">Your strengths</label>
					<br>
					<?php echo $archetype['Archetype']['texto2'];?>
					<br>
					<label class="titulo2">Areas for improvement</label>
					<br>
					<?php echo $archetype['Archetype']['texto3'];?>
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>

<!-- 		<article id="climate_movil" style="display:none;" class="jobs">
			<b>Ideal job climate</b>
			<div id="job-content">
				<div style="width:100%;  margin-bottom: 20px;">
					<label>
						<span><b>Autonomy</b></span> 
						<?php $split= split(' ',$archetype['Archetype']['autonomy']);?>
						<span class="<?php echo $split[0];?>"><?php echo $archetype['Archetype']['autonomy']?></span>
					</label>
				</div>
				<div style="width:100%;  margin-bottom: 20px;">
					<label>
						<span><b>Variety</b></span> 
						<?php $split= split(' ',$archetype['Archetype']['variety']);?>
						<span class="<?php echo $split[0];?>"><?php echo $archetype['Archetype']['variety']?></span>
					</label>
				</div>
				<div style="width:100%;  margin-bottom: 20px;">
					<label>
						<span><b>Reasonable pay</b></span> 
						<?php $split= split(' ',$archetype['Archetype']['reasonable_pay']);?>
						<span class="<?php echo $split[0];?>"><?php echo $archetype['Archetype']['reasonable_pay']?></span>
					</label>
				</div>
				<div style="width:100%;  margin-bottom: 20px;">
					<label>
						<span><b>Job security</b></span> 
						<?php $split= split(' ',$archetype['Archetype']['job_security']);?>
						<span class="<?php echo $split[0];?>"><?php echo $archetype['Archetype']['job_security']?></span>
					</label>
				</div>
				<div style="width:100%;  margin-bottom: 20px;">
					<label>
						<span><b>Impact</b></span> 
						<?php $split= split(' ',$archetype['Archetype']['impact']);?>
						<span class="<?php echo $split[0];?>"><?php echo $archetype['Archetype']['impact']?></span>
					</label>
				</div>
				<div style="font-size: 16px;">
					
					<label><br>
						<a href="" style="color: black; font-size: 16px; text-decoration: underline;">Get deeper insights on your ideal job climate</a>
					</label>
				</div>
			</div>
		</article> -->

		<article style="margin-bottom: 20px;margin-top: 26px;">
			<label id="your_traits" class="titulo2">Your traits</label>

			<div class="dash-result-left">

				<div class="dash-result-content">
					<?php 
					$arrayColor=array();
					$y=0;
					foreach($newArray as $x): $arrayColor[$y]=$x['letter'];$y++;?>
						<div class="result-indicator">
							<div id="resul-desc-indicator">
								<label style="font-size: 20px">
									<b><?php echo ucwords($x['letter']);?></b>
									<a class="tooltips">
										<?php echo $this->Html->image('dashboard/info.png');?>
										<span><?php echo $x['tooltip'];?></span>
									</a>
								</label>
								<label id="number">
									<b><?php echo $x['value']/4;?></b>
									<small>/10</small>
								</label>
							</div>
							<div class="progress-bar-indicator <?php echo $x['letter'];?>" id="">
								<div id="progress" style="width:<?php echo ($x['value']/4)*10; ?>%;"></div>
							</div>
						</div>
					<?php endforeach;?>				
					<!-- ......................... -->
				</div>

			</div>
		</article>
		<article>
			<div class="dash-vision-content" style="margin-bottom:30px;">
				<div class=" col-xs-4 col-md-3" style="height: 100%; background-image: url(../webroot/img/science.png);" id="imgs-tipe">
					
				</div>
				<div id="science">
					<div>
						<h4 class="h4_science">The Science Behind It</h4>
						<p class="p_science">
							The RIASEC model, also known as the Holland Codes, was conceived in the late 1970s. A theory of careers and vocational choice based upon personality types, it has been used by the US Department of Labor Employment & Training Administration for the last 2 decades. Psychologist John L. Holland first came up with the idea in the 1950s and spent the rest of his career developing it. As one of the most empirically tested areas of work psychology, RIASEC is widely used by professional career counsellors and has been incorporated into most popular assessments in the field. <br><br>
							RIASEC is based on the idea that people are more likely to be satisfied and successful in environments that match their personality type. However, new research shows that this is just one method of identifying a good career fit. Although your personality type may not match a particular role, you may find this is balanced out by other valid criteria such as work values.
						</p>
					</div>
					
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>

				<div class="botones">
						<label  class="opinion">
							How useful did you find this resource?
						</label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
						</div>
					</div>
					<div id="message-succes" style="display: none;">
						<img src="<?php echo $this->webroot;?>img/Check.png" style="" id="message-succes-imagen">
						<div style="" id="message-succes-texto">
							<h3 class="titulo">Thank you for your feedback!</h3>
							<p>
							</div>
					</div>

						<div id="comentario">
							<label id="mensaje_comentario">
								
							</label>
							<textarea id="text_comentario" placeholder="Say something..."></textarea>
	
							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;margin-left: 35px;margin-top: 20px;">Send</button>
							</div>
						</div>
		</article>		
	</section>	
	<section id="circulo_web" style="display:block;border-top: solid 2px #d0d0d0; float: left; width: 370px;">
			<div class="RIASEC">
				<div id="" class="C1 <?php echo $arrayColor[0];?>">
					<div class="C2 <?php echo $arrayColor[1];?>" >
						<div class="C3">
							<div class="C4">
								<div class="C5">
									<div class="C6">
										<div id="RIASEC-result">
											<span id="Pletra" class="<?php echo $arrayColor[0]?>"><?php echo strtoupper(mb_substr($arrayColor[0],0,1));?></span><span id="Sletra" class="<?php echo $arrayColor[1]?>"><?php echo strtoupper(mb_substr($arrayColor[1],0,1));?></span>	
										</div>										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>
	<section id="careers_list">
		<?php echo $this->element('article_list');?>
	</section>
	<div style="clear:both;"></div>
</div>

<script type="text/javascript">
		

var like = 0;

	$('#btn1').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
		$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
		//$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		like = 1;
	});
	$('#btn2').on('click',function(){
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn2').css("background-image", "url("+WEBROOT+"img/N2.png)");
		$('#comentario').css("display", "none");
		like = 0;
	});
	$('#btn3').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/N1.png)");
		$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		like = -1;
	});


	$('.send_btn').on('click', function(){
		var d = '<?php echo date("Y/m/d");?>';

		var comment = [];
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'result_interests','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});




</script>