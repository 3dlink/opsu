<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'P3_intro'
	}
})
</script>
<style type="text/css">
#container-text ul {
  font-size: 16px;
  color:black;
  margin-bottom: 0;
}
#sc_p{

	font-size: 16px; font-weight: 300;
}
#header2 {
  max-width: 770px;
  max-height: 430px;
  position: relative;
}

.take_up_btn {
  text-align: center;
  margin-bottom: 35px;
  margin-top: 30px;
}

.btn_take_up {
  width: 370px;
  height: 60px;
  font-size: 16px;
  font-weight: 400;
}

.btn_alone_right{
	border-top: 2px solid #d0d0d0;
}

@media ( max-width : 750px) {
#sc_p{
		font-size: 18px; font-weight: 300;
	}
	.caja_module {
		font-size: 18px;
	}
	tr > td {
	  font-size: 18px !important;
	}
}

@media ( max-width : 630px) {
	.title p {
		font-size: 33px;
	}
}

@media ( max-width : 500px) {
	.title {
		height: 50px;
	}
}

@media ( max-width : 550px) {
	.title p {
		font-size: 5.5vw;
	}
}
@media ( max-width : 440px) {
	.btn_take_up {
	  width: 100% !important;
	  margin-left: 0px;
	}
}
@media ( max-width : 365px) {
	.text_science {
	  width: 60%;
	}
}


</style>
<div style="background-color: #f7f7f7;">
	<div>
		
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My career vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Pyramid of Personal Preferences Intro',true);?>
				<div></div>
			</div>
		</div>
	</div>

	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div>
				<div id="header2">
						<?php if($user['premium'] == 0){ ?>
							<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
						<?php } ?>
						<img alt="" src="<?php echo $this->webroot;?>img/dashboard/Pyramid1.png" style="width: 100%; opacity: 1;">		
						<div class="title">
							<p><?php echo __('Pyramid of personal preferences',true);?></p>
						</div>
				</div>
				<div id="container-text">
					<p>
						This quest involves the Pyramid of Personal Preferences, a profound, yet simple tool that contributes to choosing and developing a successful career. Using a combination of self-reflection, specific questions and observations, the Pyramid of Personal Preferences moves you one step further towards a more conscious way of living and decision-making.  <br><br>
						Knowing more about yourself and understanding clearly what you want, and why, is a prerequisite to having a great life. Living and working in a mindful way reduces stress, increases success and heightens well-being. It is the desire for well-being that ultimately drives most of our actions. Establishing your inspiration and mission in life maps out the road to achieving a state of well-being, and selecting your career path is an important step along the way. The Pyramid of Personal Preferences can help with all of this.<br><br>
						Specially developed to unlock your potential and empower you to be the best you can be, the Pyramid of Personal Preferences taps into your innermost being. It supports the development of both spiritual and material wealth by helping you to: <br><br>
</p>	
						<ul>
							<li>Build a strong foundation for a fulfilling career;</li>
							<li>Create lifelong understanding about what is really driving you;</li>
							<li>Make clear decisions; and </li>
							<li>Communicate effectively with yourself and others.</li>
						</ul>

		<p>				<br><br>
						The Pyramid of Personal Preferences is based on a theory of motivation called Maslow’s hierarchy of needs. This posits that humans have five intrinsic needs, each of which occupies a layer of a pyramid. Physical needs, security, friendship and love, and esteem are called “deficiency” needs and make up, in the order that they should be met, four of the basic five. If any of these four needs are not satisfied, the individual will feel tension and anxiety, although they may not be physically or consciously aware of it. The fifth and final need is self-actualization, or the need to fulfill our potential. Maslow’s theory suggests that to focus motivation on this higher level, all other basic needs must be achieved and mastered. 

					</p>	

					<img alt="" src="<?php echo $this->webroot;?>img/dashboard/Pyramid2.png" style="width: 100%;margin:20px 0;">

					<p style="margin-bottom:0px;">
						The Pyramid of Personal Preferences homes in on the top of Maslow’s pyramid, breaking down self-actualization into two key steps: The first is to analyze your true personal preferences. The second ascertains the biggest challenges to achieving your goals, and how to tackle them.<br><br>

						Take up this quest to become more conscious of your inner voice and turn towards your purpose in life. Use it to create a vision of your future and your career that delivers focus and clear, lifelong decisions. Reaching the top of the Pyramid of Personal Preferences means learning to live as the real you, with the success, reduced stress and high quality of life that entails.
					</p>


					<div class="take_up_btn">
						<button class="btn_take_up mentr-ok-btn-large down" type="button">TAKE UP THE QUEST</button>
					</div>
			</div>
			</div>
			<div style="clear:both;"></div>
			<div class="science2">
				<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 60px;">
					<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9 text_science" style="display: table; min-height: 170px;">
						<div style="display: table-cell; vertical-align: middle;">
							<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
							<p id="sc_p">
								This quest is based on Maslow´s hierarchy of needs, a psychology theory proposed by Abraham Maslow in his 1943 paper "A Theory of Human Motivation" in the Psychological Review. Often displayed as a pyramid, the most basic human needs are found at the bottom, with more complex needs at the peak. The theory builds on Maslow´s belief that self-actualization, the very top level need, is the desire to become the most that one can be. When it comes to achieving a purposeful career, mastering this need is key. One of the best-known theories of motivation, Maslow’s hierarchy remains a very popular framework in sociology research, management training, and secondary and higher psychology instruction today.
							</p>
						</div>
						
						<div style="clear:both;"></div>
					</div>
					<div style="clear:both;"></div>
				</div>
			</div>
		</section>	
		<section class="seccion_derecha">
			<article class="article_tips">
					<big>
						<label class="titulo titulo_izquierda">Make it work</label>
					</big>
					<div class="caja_module">
						<table>
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
										Reserve at least 30 minutes with no interruptions
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
										Write down an average of 5 items per question
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
										Be objective in your observations 
								</td>
							</tr>
						</table>
					</div>
			</article>	

			<article class="btn_alone_right">
				<div class="take_up_btn">
					<button class="btn_take_up mentr-ok-btn-large up" style="width:330px;" type="button">TAKE UP THE QUEST</button>
				</div>
			</article>
			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>

		</section>
		<div style="clear: both;"></div>
	</div>	
		
</div>
<?php echo $this->element('modal_premium');?>
<script type="text/javascript">
var id = '<?php echo $this->UserAuth->getUserId()?>';
	var premium = '<?php echo $user["premium"];?>';
	// var premium = 1;
	$('.btn_take_up').on('click',function(){

		if(premium == 0){
			$('#premium').click();
		}
		else{
			// mixpanel.identify(id);
			if($(this).hasClass('up')){
				var track = "right take up quest in p3 intro page";
				// mixpanel.track("left take up quest in p3 intro page");
			}else{
				var track = "lower take up quest in p3 intro page";
				// mixpanel.track("lower take up quest in p3 intro page");
			}
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			//redirects
			var challenges = '<?php echo $existe_cha; ?>'; //0 si no lo ha completado
			var pyramid = '<?php echo $existe_pyramid; ?>';
			var assessment = '<?php echo $existe; ?>';

			if(challenges == '1'){
				window.location.href=WEBROOT+'career_program/p3_bottlenecks_results';
			}else if(pyramid == '1'){
				window.location.href=WEBROOT+'career_program/p3_bottlenecks';
			}else if(assessment == '1'){
				window.location.href=WEBROOT+'career_program/p3_assessment_results';
			}else{
				setTimeout(function(){
					window.location.href=WEBROOT+'career_program/p3_assessment';
				},500);
			}

			/*setTimeout(function(){
				window.location.href=WEBROOT+'career_program/p3_assessment';
			},500);*/
		}
		
	});

</script>

