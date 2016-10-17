	<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 3,
		TAG: 'quests_module_1'
	}
})
</script>

<!-- Start of MENTOR Zendesk Widget script -->

<style>
@media ( max-width : 750px) {
	.contenido {
	  border-bottom: none;
	}
	p {
		  font-size: 16px !important;
	}
	.medi{
		background-position: 45% 45% !important;
	}
	.caja_module tr>td {
		font-size: 18px !important;
		font-family: lato;
		font-weight: 300;
	}
	.titulo {
		font-size: 20px;
	}
	#mod_comments {
		display: none;
	}
	#titulo_modulo {
		padding-left: 30px;
	}
	.seccion_derecha{
		padding-bottom : 60px;
	}
}

.texto-contenido-der {
	
}
</style>
<?php 
// debug($percent);
// debug($points);
?>
<div id="" style="min-height: 1670px;">
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
			<div class="option active">
				<?php echo __('Quests',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div id="contenido_quest">
				<div id="container" style="text-align: justify;">
					<p style="padding-bottom: 17px;">
						Complete these quests and work your way towards a deeper
						understanding of who you are. The more conscious you become of
						your inner-self, the more you’ll be able to define a clear and
						inspiring direction for your future. This will provide you with an
						efficient way to evaluate every future opportunity that you
						encounter. <br> <br> You will earn points for each completed
						quest. You need 140 points to obtain the silver key. This is
						required to unlock our Mentoring Service, which gives you the
						opportunity to connect with mentors who can guide you on your
						journey.
					</p>

					<div class="contenido">

						<div class="imagen-contenido-izq" style="  background-size: 100%; background-position:center; background-image: url('<?php echo $this->webroot;?>img/obituary.png');"></div>

						<div class="texto-contenido-der">
							<p style="margin-top: -6px;">
								<b class="titulo">The obituary exercise</b>
							</p>
							<p style="">A wake-up call for your life.
								Think big. Imagine the possibilities.</p>

							<div class="div-button">
								<button id="link_obi" class="mentr-ok-btn-large2" type="button">Complete
									quest</button>
							</div>

							<div>
								<div
									class="mentr-backend-points <?php if($obi == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">50</div>
								</div>
							</div>
						</div>
					</div>

					<div class="contenido">
						<div class="imagen-contenido-izq derecha" style="background-image: url('<?php echo $this->webroot;?>img/piradl.png'); background-position: center;">
							<?php if($user['premium'] == 0){ ?>
								<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
							<?php } ?>
				</div>
						<div class="texto-contenido-der izquierda">
							<p style="margin-top: -6px;">
								<b class="titulo">Pyramid of personal preferences</b>
							</p>
							<p>
								A profund yet simple tool for a deeper understanding<br>of your
								true SELF.

							</p>

							<div class="div-button">
								<button id="link_pyramid" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>
							<div>
								<div
									class="mentr-backend-points <?php if($py == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">40</div>
								</div>
							</div>

						</div>
					</div>

					
					<div class="contenido">
						<div class="imagen-contenido-izq" style="background-image: url('<?php echo $this->webroot;?>img/by Eli DeFaria.png');">
							<?php if($user['premium'] == 0){ ?>
								<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
							<?php } ?>
						</div>
						<div class="texto-contenido-der">
							<p style="margin-top: -6px;">
								<b class="titulo">Gain insight into your personal priorities</b>
							</p>
							<p style="">
								Understand why you act, or react, the way you do. <br>Reflect on
								what's most important to you.
							</p>

							<div class="div-button">
								<button id="valuesPersonal" class="mentr-ok-btn-large2" type="button">Complete quest</button>
							</div>

							<div>
								<div
									class="mentr-backend-points <?php if($top == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">20</div>
								</div>
							</div>
						</div>
					</div>



					<div class="contenido">
						<div class="imagen-contenido-izq derecha medi" style="background-position:center; background-size:150%; background-image: url('<?php echo $this->webroot;?>img/career_statement.png');">
								<?php if($user['premium'] == 0){ ?>
									<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
								<?php } ?>
						</div>

						<div class="texto-contenido-der izquierda">
							<p style="margin-top: -6px;">
								<b class="titulo">Your career vision statement</b>
							
							
							<p style="">Define a clear and inspiring direction for your future.</p>

							<div class="div-button">
								<button id="link_career" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>

							<div>
								<div
									class="mentr-backend-points <?php if($car == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">50</div>
								</div>
							</div>
						</div>
					</div>

					<div class="contenido">
						<div class="imagen-contenido-izq yoga" style="  background-image: url('<?php echo $this->webroot;?>img/Capa2.png'); background-size: 400%; background-position: -220% 170%;">
						<?php if($user['premium'] == 0){ ?>
							<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
						<?php } ?>
						</div>
						<div class="texto-contenido-der ">
							<p style="margin-top: -6px;">
								<b class="titulo">The meditation quest</b>
								
							</p>
							<p>Learn how to handle stress with this age-old meditation method.</p>
							<div class="div-button">
								<button id="link_meditation" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>
							<div>
								<div
									class="mentr-backend-points <?php if($medi == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">20</div>
								</div>
							</div>

						</div>
					</div>




				</div>
			</div>
		</section>

		<section class="seccion_derecha">
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
					<?php }elseif($points < 180){?>
						<p style="text-align: justify; font-size: 16px;">Well done! You have earned a silver key and you contributed to unlocking the mentoring service section. Now earn <?php echo (180 - $points);?> points more to get a gold key and crystalize your career vision.  </p>
					<?php }else{?>
						<p style="text-align: justify; font-size: 16px;">Congratulations!
						You have earned a gold key and completed this section. You now
						know yourself better and are more prepared to make career-related
						decisions.</p>
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
								<span style="font-size: 30px;">180</span> <br> points needed
							</p>
						</div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</article>
			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script>
var id = '<?php echo $this->UserAuth->getUserId()?>';

$('#link_obi').on('click',function(){

	// mixpanel.identify(id);
	// mixpanel.track("obituary from quests m1");
	var obi = '<?php echo $obi;?>';
	if(obi == 'n'){
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/obituary_intro';
		// },500);
	}else{
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/obituary_results';
		// },500);
	}
});
$('#link_career').on('click',function(){
	// mixpanel.identify(id);
	// mixpanel.track("statement from quests m1");
	var car = '<?php echo $car;?>';
	if(car == 'n'){
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/vision_intro';
		// },500);
	}else{
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/vision_results';
		// },500);
	}
});
$('#link_pyramid').on('click',function(){
	// mixpanel.identify(id);
	// mixpanel.track("p3 from quests m1");
	var py = '<?php echo $py;?>';
	if(py == 'n'){
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/p3_intro';
		// },500);
	}else{
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/results/5';
		// },500);
	}
});
$('#link_meditation').on('click',function(){
	// mixpanel.identify(id);
	// mixpanel.track("meditation from quests m1");
	// setTimeout(function(){
		window.location.href=WEBROOT+'career_program/meditation_intro';
	// },500);
});

$('#valuesPersonal').on('click',function(){
	// mixpanel.identify(id);
	// mixpanel.track("values from quests m1");
	// setTimeout(function(){

		window.location.href=WEBROOT+'career_program/values_intro';
	// },500);
});

</script>


