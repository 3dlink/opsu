<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'intro_module_2'
	}
})
</script>

<style>
@media (max-width: 750px){
.caja_module tr > td {
    font-size: 18px !important;
  font-family: lato;
  font-weight: 300;
}

.titulo {
  font-size: 20px;
}

#mod_comments {
	/*display: none;*/
}

#titulo_modulo {
	  padding-left:30px;
	  }
	
}
</style>
<div style="background-color: #f7f7f7;">
	<div>

		<div id="menuUserDashboard" style="color: #B0B0B0; width: 970px;">
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Know Myself Intro Page',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="contenedor_video">
			<iframe id="video" src="https://player.vimeo.com/video/131182761" width="100%" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<!-- <div class="video" style="width: 100%;">
						<?php echo $this->Html->image('dashboard/video.png',array('style'=>'width: 100%;'));?>
					</div> -->
				<div style="text-align: center; padding-top: 40px;">
					<div style=" text-align: justify; ">
						<p>
							Career planning starts with self-awareness. Who are you, and what
							are your strengths and areas for improvement?<br><br> There are no
							rules to say what type of person can do what type of job.
							However, research has shown that certain personalities, personal
							preferences and skill sets are more suited to particular fields.
							Career success and fulfilment are more likely to be achieved if
							you do a job you enjoy and are good at. <br><br> Understanding
							yourself as a person (your likes and dislikes, strengths and
							areas for improvement) will help you identify careers you may
							find interesting. While developing skills is a lifelong pursuit,
							evaluating your existing level helps you find direction. Matching
							your career choices to your existing skills, knowledge and
							strengths will set you in good stead for the future. <br><br>
							Clarifying your values and understanding what motivates you in
							the workplace will help assure a fulfilling career. And while
							studies have shown personality and career do not necessarily
							correlate, certain traits can affect your employability.
							Awareness of your qualities and areas to improve allows you to
							showcase yourself in the best light. <br> <br>The assessments in this
							module are only a starting point for your journey of
							self-discovery. To complement your newfound self-knowledge, we
							highly recommend “trying on” some different roles to see how they
							fit. Seek relevant work experience or use MENTOR. to connect with
							successful people in the careers that appeal to you. This is an
							opportunity to learn more about them and their role, and see how
							you compare. Knowing yourself and what you are looking for will
							make a good career match easier to find.

						</p>
					</div>
						<button style="margin-top: 15px; width:40%;" id="link" type="button"
						onclick="window.location.href='<?php echo $this->webroot;?>career_program/quests_module_2'"
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
				<div style="clear: both;"></div>
			</div>
			<!-- .......................................................... -->
		<!-- 		<div id="comments_izq" class="comments">
				<div>
					<label class="titulo what_members"> <b style="padding-left: 20px;">
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
				</div> -->



				<div style="clear: both;"></div>
			</div>
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
							<td>Throw light on what you enjoy doing</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Evaluate your existing skills</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Analyze your work values and find out what motivates you</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('dashboard/circle-check.png');?>
								</td>
							<td>Understand your personality and desirable traits for
								employers</td>
						</tr>
					</table>
				</div>
				<div id="link2" style="text-align: center; font-size: 16px;">
					<button type="button"
						onclick="window.location.href='<?php echo $this->webroot;?>career_program/quests_module_1'"
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
						<p style="text-align: justify; font-size: 16px;">You have 0
						points. You need 140 points to earn a silver key and unlock
						additional modules.</p>
					<?php }elseif($points < 140){?>
						<p style="text-align: justify; font-size: 16px;">You have <?php echo $points;?> points. You need <?php echo (140 - $points);?> extra points to earn a silver key and unlock additional modules. </p>
					<?php }elseif($points < 200){?>
						<p style="text-align: justify; font-size: 16px;">Well done! You have earned a silver key and unlocked Module 4, Explore Career Paths. Now earn <?php echo (200 - $points);?> extra points more to get a gold key and unlock Module 5 as well.</p>
					<?php }else{?>
						<p style="text-align: justify; font-size: 16px;">Congratulations! You have earned a gold key and completed this section. You now know yourself better and are more prepared to make career-related decisions.</p>
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
			var track = "low start-continue intro m1";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
		})

		$('#link2').click(function(){
			var track = "right start-continue intro m1";
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


