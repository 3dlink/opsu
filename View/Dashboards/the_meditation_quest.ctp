<script>
$(document).ready(function(){
    ARTICLES = {
            CATEGORY: 'null',
            ID: 'null',
            LIMIT: 5,
            TAG: 'meditation_intro'
            }
})
</script>
<style>

.col-xs-4 {
  width: 25% !important;
}
#science{
	margin-left: 220px;
}
.title p {
  padding-top: 0px;
}
#container-text > p > a {
  color: rgb(2, 2, 2);
  text-decoration: underline;
}

#header2 {
	background-image:
		url('<?php echo $this->webroot;?>img/dashboard/julia_cesar.jpg');
	max-width: 770px;
	max-height: 340px;
	position: relative;
	background-size: cover;
	background-position: center;
}
.caja_module {
  margin-top: 5px ;
  }
  .titulo_izquierda {
  margin-top: 16px !important;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

@media ( max-width : 750px) {
#container-text p {
  font-size: 18px;
}
	tr > td {
  font-size: 18px !important;
}
	#science{
		  float: left;
  width: 66%;
  margin-left: 80px;
	}
	#article_articles {
		margin-top: 0;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	.send_btn {
		position: absolute !important;
		right: 5px;
		bottom: 0px;
	}
	#comentario textarea {
		top: 78px !important;
		width: 88% !important;
	}
	.dash-vision-content {
		height: 100% !important;
	}
	.panel-title {
		font-size: 3vw;
	}
}
@media ( max-width : 620px) {
	#science{
		  float: left;
  width: 66%;
  margin-left: 48px;
	}
}
@media ( max-width : 520px) {
	#science{
		  float: left;
  width: 66%;
  margin-left: 24px;
	}
}
@media ( max-width : 440px) {
	#science{
		  float: left;
  width: 66%;
  margin-left: 0px;
	}
}
@media ( max-width : 370px) {
	#btn_got_it {
		width: 100% !important;
		margin: 0.2em 0;
	}
	.panel-title {
		font-size: 3vw;
	}
	#science p {
		font-size: 2.5vw !important;
	}
	.title p {
		font-size: 4vw;
	}
	.title {
		height: 35px;
	}
}

@media ( max-width : 360px) {
	#science{
		  float: left;
  width: 60%;
  margin-left: 0px;
	}
}
@media ( max-width : 520px) {
	#btn_got_it {
		width: 100% !important;
		margin: 0.2em 0;
	}
	.title {
		height: 45px;
	}
	.panel-title {
		font-size: 3vw;
	}
	.title p {
		font-size: 6vw;
	}
}

.mentr-ok-btn-large {
  font-size: 16px;
  
  }
</style>

<div style="min-height: 1700px; background-color: #f7f7f7;">
	<div>
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My Career Vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('The Meditation Quest',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="" style="">
				<div id="header2">
					<?php if($user['premium'] == 0){ ?>
					<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
					<?php } ?>
					<img alt="" src="<?php echo $this->webroot;?>img/dashboard/julia_cesar.jpg" style="width: 100%; opacity: 0;">
					<div class="title">
						<p><?php echo __('The Meditation Quest',true);?></p>
					</div>
				</div>
				<div id="container-text">
					<p>
						Whenever emotional or mental pressure builds up, the resulting tension is known as stress. The ensuing state of worry and anxiety is all too common when it comes to choosing a major, or making any important career-related decision.<br><br>
						If this sounds familiar, you are not alone. Most students are affected by this kind of stress, which can affect their ability to make good decisions. Recent research shows that <a href="http://www.psychologicalscience.org/index.php/news/releases/stress-changes-how-people-make-decisions.html" target="_blank">stress changes the way we weigh risk and reward</a>, making us focus too much on the upside of our choices. This translates to poorer decisions when under stress because we don’t properly evaluate all of our options. And careful evaluation is exactly what is needed at this time—a <a href="http://www.heldrich.rutgers.edu/sites/default/files/products/uploads/Chasing_American_Dream_Report.pdf" target="_blank">2012 Rutger University study</a> showed that 37% of students wished they could turn back the clock and re-consider their major. <br><br>
						Meditation is a proven method of overcoming stress. Scientific research has long since shown that meditation soothes our nervous system and triggers the relaxation response in our bodies. 1 On a more spiritual note, meditation quiets the mind and balances the emotions, leaving your heart more open to hearing your inner self, your soul.<br><br>
						This quest will teach you the Ramana Meditation Method. It is based on elements of the traditional form of Rāja yoga whose ancient sages proclaimed practitioners would better understand themselves and the purpose of their existence. Their lives would be less stressful and more purposeful, peaceful and successful.<br><br>
						Take on this quest and begin your own journey to a stress-free existence with the simple breathing techniques demonstrated in MENTOR.´s instructional video.
					</p>

					<div style="left: -10px; margin-top: 35px; text-align: center;">
						<!-- <div id="btn_gif">+80</div> -->
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 370px; height: 54px; border-radius: 6px; line-height: 40px; font-weight: 500;">SHOW ME HOW IT'S DONE</button>
					</div>
					<br> <br>
					<p style="margin-top:5px;">If you would like to learn more about meditation, take a look at the articles below.</p>
				
					<div id="contenido_quest" style="  padding-top: 10px;">
						<div class="contenido">

							<div class="imagen-contenido-izq" style="background-size: cover; background-image: url('<?php echo $this->webroot;?>img/dashboard/sale_grut.jpg');"></div>

							<div class="texto-contenido-der">
								<p>
									<b class="titulo">Origins of the Ramana Meditation Method</b>
								</p>
								<p style="color: #333333;">Learn the story behind this form of meditation.</p>

								<div class="div-button">
									<a
										href="<?php echo $this->webroot;?>career_program/meditation_origins">
										<button style="font-size:18px; width: 130px;" class="mentr-ok-btn-large mentr-ok-btn-large2" type="button">Read more</button>
									</a>
								</div>

								<div></div>
							</div>
						</div>

						<div class="contenido">
							<div class="imagen-contenido-izq derecha" style="background-size: cover; background-image: url('<?php echo $this->webroot;?>img/dashboard/By Dominik Martin.jpg');"></div>
							<div class="texto-contenido-der izquierda">
								<p>
									<b class="titulo">Meditation FAQs</b>
								
								
								<p style="color: #333333;">How do I empty my mind? What is the best posture? Discover the benefits, drawbacks and more practical information about meditation.</p>
								</p>

								<div class="div-button">
									<a
										href="<?php echo $this->webroot;?>career_program/meditation_faq">
										<button style="font-size:18px; width: 130px;" class="mentr-ok-btn-large mentr-ok-btn-large2" type="button">Read more</button>
									</a>
								</div>
								<div></div>
							</div>
						</div>
					</div>
				</div>
				<div class="dash-vision-content" style="margin-bottom: 60px; margin-top:0px;">
					<div class=" col-xs-4 col-md-3"
						style="height: 100%; background-image: url(../webroot/img/science.png);"
						id="imgs-tipe"></div>
					<div id="science">
						<div>
							<h4 style="font-weight: 600; font-size : 20px;">The Science Behind It</h4>
							<p style="font-size: 18px; color: #666666; font-weight: 300;">
								In the 1970s, Herbert Benson, Professor of Mind/Body Medicine at Harvard Medical School, and his team showed that while stress activates the “fight or flight” response, mindfulness meditation activates what is often called the “relaxation response.” Our heart rate slows, our respiration slows and our blood pressure drops, all of which helps us to manage stress*. A more recent, 2010 study further supports these findings. Performed at Stanford, it found that an 8-week mindfulness course reduced the reactivity of the amygdala and increased activity in areas of the prefrontal cortex that help regulate emotions, subsequently reducing stress.** Other researchers from Harvard University also found congruent results which demonstrated changes in the physical structure of the brain following a similar meditation course, providing yet more evidence that meditation serves as a realistic and maintainable stress management technique.***<br><br>
								* Benson, H., Beary, J., & Carol, M. (1974). The relaxation response. Psychiatry. 19, 37. 37-45.6<br><br>
								** Goldin, P. & Gross, J. (2010). Effects of mindfulness-based stress reduction (MBSR) on emotion regulation in social anxiety disorder. Emotion. 10, 1. 83-91.<br><br>
								*** Hölzel, B., Carmody, J., Vangel, M., Congleton, C., Yerramsetti, S., Gard, T. & Lazar, S. (2011) Mindfulness practice leads to increases in regional brain gray matter density. Neuroimaging.191. 36-43.
								</p>
						</div>

						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
				</div>





			</div>
	
	</div>
	</section>
	<section class="seccion_derecha">
		<article class="article_tips">
			<big> <label class="titulo titulo_izquierda">Make it work</label>
			</big>
			<div class="caja_module">
				<table>
					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Move to a calm place, ideally use the same place to create a routine</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Sit in any comfortable position. Make sure the spine and neck are straight</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Close your eyes; only open them after the meditation is finished</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Take off your eye glasses if you wear them</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Practice daily for 30 to 60 minutes</td>
					</tr>
				</table>
			</div>
		</article>	
			
			<?php echo $this->element('article_list');?>
		</section>
	<div style="clear: both;"></div>
</div>
</div>
<?php echo $this->element('modal_premium');?>
<script>

	var click = 0;
		var premium = '<?php echo $user["premium"];?>';
// var premium = 1;
	$('#btn_got_it').on('click',function(){
		if(premium == 0){
			$('#premium').click();
		}
		else{
			click++;
			if(click<=1){
				$('#btn_gif').css("display","block");
			}else{
				$('#btn_gif').css("display","none");
			}

			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("show me button in meditation intro page");
			setTimeout(function(){
				window.location.href='<?php echo $this->webroot;?>career_program/meditation_video'
			},2000);
		}
	});

$('#btn1').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
	$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
	$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
	$('#comentario').css("display", "block");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "588px");
	}
});
$('#btn2').on('click',function(){
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn2').css("background-image", "url("+WEBROOT+"img/N1.png)");
	$('#comentario').css("display", "none");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "328px");
	}
});
$('#btn3').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/N2.png)");
	$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
	$('#comentario').css("display", "block");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "588px");
	}
});

</script>



