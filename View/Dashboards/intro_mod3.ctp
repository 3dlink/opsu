<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'intro_module_3'
	}
})
</script>

<style>

@media ( max-width : 750px) {
	.caja_module tr>td {
		font-size: 18px !important;
		font-family: lato;
		font-weight: 300;
	}
	.titulo {
		font-size: 20px;
	}
	#titulo_modulo {
		padding-left: 30px;
	}
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
			<div class="option active">
				<?php echo __('Improve My Decision-Making Intro Page',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="contenedor_video">
			<iframe id="video" src="https://player.vimeo.com/video/131182762" width="100%" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<!-- <div class="video" style="width: 100%;">
						<?php echo $this->Html->image('vimeo.jpg',array('style'=>'width: 100%;'));?>
					</div> -->
				<div style="text-align:center; padding-top: 20px;">
					<div style="text-align: justify; ">
						<p>

							As we saw in the previous modules, “Who am I?” is one of the most
							important questions you can ask yourself when taking career
							related decisions. In the Explore Career Paths module, the
							MENTOR. algorithm generated a list of best-fit careers using all
							the data provided by you so far. <br>
							<br> However, this still leaves decisions to be made; how should
							you select which one to pursue? In Module 1 we looked at how
							creating and following a career vision statement is a great tool
							to maintain focus and evaluate these kinds of opportunities. <br>
							<br> The purpose of this module is to empower you with further
							knowledge that can greatly improve your chances of achieving a
							fulfilling career. <br>
							<br> One component you will learn about is heuristics. These
							simple, efficient rules can speed up decision making and problem
							solving. Useful shortcuts, heuristics help us to solve problems
							without all the usual analysis, but they can also hinder us. Find
							out how, and when, to use them for maximum effect. <br>
							<br> You will also learn how to avoid common cognitive biases.
							These are certain ways of thinking that can lead to poor
							judgment. Fortunately, cognitive biases can be controlled and you
							will discover how to do just that. <br>
							<br> Up until now, the quests you have completed have relied
							solely upon input provided by you. In this module you will have
							the opportunity to enhance that information. The 360° assessment
							introduces others’ opinions in an anonymous way. Chosen based on
							the type and length of relationship, we avoid people, such as
							family members, who may already be biased. A highly popular tool
							used in the corporate world to collect opinions about an
							individual's performance from their co-workers, MENTOR. has
							adapted it to apply to the career decision making process. It
							will help identify gaps in the way you perceive yourself and how
							the rest of the world sees you. <br>
							<br> Your path towards a successful and fulfilling career is
							unique, and may at times be stressful. This module will also
							provide you with a framework of thought we hope will prove useful
							at such moments. No matter where your road takes you and what
							frustrations you encounter along the way, it is all part of your
							journey. Remember to learn from it and enjoy it, because as
							Ernest Hemingway said, "it is the journey that matters, in the
							end."
						</p>
					</div>
					<!-- <div id="link" style="text-align: left;"> -->
						<button style="margin-top: 15px; width:40%;" id="link" type="button"
						onclick="window.location.href='<?php echo $this->webroot;?>career_program/quests_module_3'"
						class="quiz-result-btn boton_module">
							<?php
							
							if ($points == 0) {
								echo "START THIS MODULE";
							} else {
								echo "CONTINUE THIS MODULE";
							}
							?>
						</button>
					<!-- </div> -->
				</div>
				<div style="clear: both;"></div>
			</div>
			<!-- .......................................................... -->
		<!-- 	<div id="comments_izq" class="comments">
				<div>
					<label class="titulo what_members"> <b>
							What members say about this module </b>
					</label>
				</div>

				<div class="contenedor_personas">
					<div class="people-sayContent" style="display: table-cell;">
						<div id="people-img"
							style="background-image: url('../webroot/img/dashboard/people1.png'); width: 170px; height: 170px; margin-top: 40px; margin-bottom: 30px;">
						</div>
						<div id="people-coment">
							<div id="people-header">
								<label id="name" class="titulo"> Jane Roberts </label> <br> <span
									id="job"> Macworld </span>
							</div>
							<div id="comment">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut
									quis mauris eget ipsum varius dictum. In lacus nisi, facilisis
									eu, pretium sed, dapibus et, tellus. Phasellus sodales
									consectetuer eros. Sed tellus. Sed a mauris nec orci volutpat
									ultrices. Donec vitae sem. Praesent nibh nisl.</p>
							</div>
						</div>
					</div>

					<div class="people-sayContent"
						style="display: table-cell; width: 30px;"></div>

					<div class="people-sayContent" style="display: table-cell;">
						<div id="people-img"
							style="background-image: url('../webroot/img/dashboard/people2.png'); width: 170px; height: 170px; margin-top: 40px; margin-bottom: 30px;">
						</div>
						<div id="people-coment">
							<div id="people-header">
								<label id="name" class="titulo"> Paul Hewson </label> <br> <span
									id="job"> The Verge </span>
							</div>
							<div id="comment">
								<p>Nam faucibus sapien id lorem. Donec elit leo, lobortis nec,
									eleifend eget, elementum eget, tellus. Donec at odio sed arcu
									vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi
									vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum
									cursus odio.</p>
							</div>
						</div>
					</div>
				</div>



				<div style="clear: both;"></div>
			</div> -->
			<div style="clear: both;"></div>
		</section>
		<section class="seccion_derecha">
			<article class="article_tips">
				<big> <label class="titulo titulo_izquierda">This module will help
						you</label>
				</big>
				<div class="caja_module">
					<table>
						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Avoid cognitive biases when taking career related decisions</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Learn an efficient career decision making framework</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Identify gaps in the way you perceive yourself and how the rest of the world sees you</td>
						</tr>

						
					</table>
				</div>
				<div id="link2" style="text-align: center; font-size: 16px;">
					<button type="button"
						onclick="window.location.href='<?php echo $this->webroot;?>career_program/quests_module_3'"
						class="quiz-result-btn boton_module">
							<?php
							
							if ($points == 0) {
								
								echo "START THIS MODULE";
							} else {
								echo "CONTINUE THIS MODULE";
							}
							?>
						</button>
				</div>
			</article>

			<article id="article_progression">
				<label class="titulo progression titulo_izquierda">Progress</label>

				<div style="min-height: 80px; margin-top: 17px;">
					<div style="position:relative;">
						<div style="color: #333333;">
							<big style="font-size: 30px;"><?php echo $percent;?></big> <small
								style="font-size: 18px;">%</small>
						</div>
					<?php 
						if($percent >= 70){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey_mod'));
						}
						if($percent >= 90){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold_mod'));
						}
					?>
						<div class="progresionBarDefault">

							<div id="barProgress" style="width: <?php echo $percent;?>%;"></div>
							<div id="passLine"></div>
							<div id="finishLine"></div>
						</div>
					</div>
				</div>

				<div
					style="min-height: 280px; border: solid 1px #cccccc; padding: 20px 20px 20px 20px; position: relative;">
					<?php if($points == 0){?>
						<p style="text-align: justify;font-size: 16px;">You have 0 points. You need 140 points to earn a silver key.</p>
					<?php }elseif($points < 140){?>
						<p style="text-align: justify;font-size: 16px;">You have <?php echo $points;?> points. You need <?php echo (140 - $points);?> extra points to earn a silver key. </p>
					<?php }elseif($points < 200){?>
						<p style="text-align: justify;font-size: 16px;">Well done! You have earned a silver key. Now earn <?php echo (200 - $points);?> points to get a gold key and improve your decision-making even more.  </p>
					<?php }else{?>
						<p style="text-align: justify;font-size: 16px;">Congratulations! You have earned a gold key and completed this section. You are now ready to take better career-related decisions.</p>
					<?php }?>	
	
					<div class="caja_llaves">
						<div class="llaves">
							<div style="display: inline-block;">
								<div id="keyBlue">
									<div class="centerV2">
										<img src="<?php echo $this->webroot;?>img/keyB.png">
									</div>
								</div>
							</div>
							<p style="margin-top: 16px;">
								<span style="font-size: 30px;">140</span> <br> points needed
							</p>
						</div>
						<div class="llaves">
							<div style="display: inline-block;">
								<div id="keyYellow">
									<div class="centerV2">
										<img src="<?php echo $this->webroot;?>img/keyA.png">
									</div>
								</div>
							</div>
							<p style="margin-top: 18px;">
								<span style="font-size: 30px;">200</span> <br> points needed
							</p>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</article>

			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>



			<!-- <div id="comments_abj" class="comments">
				<div>
					<label id="mod_comments" class="titulo"> <b
						style="padding-left: 20px;"> What members say about this module </b>
					</label>
				</div>

				<div class="contenedor_personas">
					<div class="people-sayContent" style="display: table-cell;">
						<div id="people-img"
							style="background-image: url('../webroot/img/dashboard/people1.png'); width: 170px; height: 170px; margin-top: 40px; margin-bottom: 30px;">
						</div>
						<div id="people-coment">
							<div id="people-header">
								<label id="name" class="titulo"> Jane Roberts </label> <br> <span
									id="job"> Macworld </span>
							</div>
							<div id="comment">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Ut
									quis mauris eget ipsum varius dictum. In lacus nisi, facilisis
									eu, pretium sed, dapibus et, tellus. Phasellus sodales
									consectetuer eros. Sed tellus. Sed a mauris nec orci volutpat
									ultrices. Donec vitae sem. Praesent nibh nisl.</p>
							</div>
						</div>
					</div>

					<div class="people-sayContent"
						style="display: table-cell; width: 30px;"></div>

					<div id="segunda_persona" class="people-sayContent"
						style="display: table-cell;">
						<div id="people-img"
							style="background-image: url('../webroot/img/dashboard/people2.png'); width: 170px; height: 170px; margin-top: 40px; margin-bottom: 30px;">
						</div>
						<div id="people-coment">
							<div id="people-header">
								<label id="name" class="titulo"> Paul Hewson </label> <br> <span
									id="job"> The Verge </span>
							</div>
							<div id="comment">
								<p>Nam faucibus sapien id lorem. Donec elit leo, lobortis nec,
									eleifend eget, elementum eget, tellus. Donec at odio sed arcu
									vehicula venenatis. Nulla facilisi. Aliquam interdum. Morbi
									vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum
									cursus odio.</p>
							</div>
						</div>
					</div>
				</div>



				<div style="clear: both;"></div>
			</div> -->
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script type="text/javascript">

		$('#link').click(function(){
			var track = "low start-continue intro m3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
		})

		$('#link2').click(function(){
			var track = "right start-continue intro m3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
		})
	
	$(document).ready(function(){ //para que funcione
		if($(window).width() < 580){
	  	$("#video").height(300);
	  }
		if($(window).width() < 430){
	  	$("#video").height(220);
	  }
	});

	$(window).resize(function() { //para madu
		if($(window).width() < 580){
	  	$("#video").height(300);
	  }
		if($(window).width() < 430){
	  	$("#video").height(220);
	  }
	});
</script>




