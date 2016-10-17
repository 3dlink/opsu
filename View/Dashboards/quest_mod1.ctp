<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'quests_module_2'
	}
})
</script>
<?php 

	// debug(  );

?>
<!-- Start of MENTOR Zendesk Widget script -->
<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","mentor.zendesk.com");/*]]>*/</script>
<!-- End of mentor Zendesk Widget script -->
<style>
@media ( max-width : 750px) {
	.contenido {
	  border-bottom: none;
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
	  padding-left:30px;
	  }
}

.texto-contenido-der {
 
  
  }
</style>
<div style="min-height: 1445px; background-color: #f7f7f7;">
	<div>

		<div id="menuUserDashboard" style="color: #B0B0B0; width: 970px;">
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Know Myself Intro Page',true);?></a>
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
						Work through these assessments to improve your self-knowledge. The
						more you know and understand about yourself, the better you’ll be
						able to confidently evaluate your career options. <br>
						<br> We’ll share the scientific research behind your results on
						completion of each assessment. Your final career recommendations
						will be based on an algorithm that takes all your responses into
						account with a particular emphasis on job satisfaction. <br>
						<br> You’ll earn points for each completed assessment. You need
						140 points to get the silver key. This unlocks Module 4, where
						you’ll learn more about the careers that match your results.
					</p>


					<div class="contenido">

						<div class="imagen-contenido-izq" style="background-image: url('<?php echo $this->webroot;?>img/dashboard/qmd2_1.png');"></div>

						<div class="texto-contenido-der">
							<p style="margin-top: -6px;">
								<b class="titulo">What job satisfaction means to you</b>
							</p>
							<p style="color: #333333;">We are all unique
								with different needs. Identify what you need to love your work.
							</p>

							<div class="div-button">
								<button id="link_work_values" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>

							<div>
								<div
									class="mentr-backend-points <?php if($work == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">70</div>
								</div>
							</div>
						</div>
					</div>


					<div class="contenido">

						<div class="imagen-contenido-izq derecha" style="background-image: url('<?php echo $this->webroot;?>img/dashboard/qmd2_3.png');">
						<?php if($user['premium'] == 0){ ?>
							<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
						<?php } ?>
						</div>

						<div class="texto-contenido-der izquierda">
							<p style="margin-top: -6px;">
								<b class="titulo">What you enjoy doing</b>
							</p>
							<p style="color: #333333; ">Throw light on the
								things you enjoy doing, what they say about you and your work
								preferences.</p>

							<div class="div-button">
								<button id="link_vocational" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>

							<div>
								<div
									class="mentr-backend-points <?php if($voc == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">70</div>
								</div>
							</div>
						</div>
					</div>

					<div class="contenido">
						<div class="imagen-contenido-izq " style="background-image: url('<?php echo $this->webroot;?>img/dashboard/qmd2_2.png');">
						<?php if($user['premium'] == 0){ ?>
							<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
						<?php } ?>
						</div>
						<div class="texto-contenido-der ">
							<p style="margin-top: -6px;">
								<b class="titulo">Personality and employability</b>	
							<p style="color: #333333;">Learn about your personality and what
								traits are most desirable to employers.</p>
							</p>

							<div class="div-button">
								<button id="link_abilities" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>
							<div>
								<div
									class="mentr-backend-points <?php if($abi == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">20</div>
								</div>
							</div>

						</div>




					</div>

					<div class="contenido">
						<div class="imagen-contenido-izq derecha" style="background-image: url('<?php echo $this->webroot;?>img/dashboard/qmd2_4.png');">
						<?php if($user['premium'] == 0){ ?>
							<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
						<?php } ?>
						</div>
						<div class="texto-contenido-der izquierda">
							<p style="margin-top: -6px;">
								<b class="titulo">Identify your existing skills</b>
							
							
							<p style="color: #333333;">Evaluate your existing skills level to find your strengths and areas for improvement.</p>
							</p>

							<div class="div-button">
								<button id="link_skills" class="mentr-ok-btn-large2"
									type="button">Complete quest</button>
							</div>
							<div>
								<div
									class="mentr-backend-points <?php if($sk == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">40</div>
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
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<?php echo $this->element('modal_premium');?>


<script>
	var premium = '<?php echo $user["premium"];?>';
	// var premium = 1;
$('#link_work_values').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("job satisfaction from quests m2");
	var work = '<?php echo $work;?>';
	if(work == 'n'){
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/assessment_wv';
		// },500);
	}else{
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/results_wv';
		// },500);
	}
});

$('#link_abilities').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("employability from quests m2");
	var abi = '<?php echo $abi;?>';
	if(premium == 0){
		$('#premium').click();
	}
	else{
		if(abi == 'n'){
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/assessment_empl';
			// },500);
		}else{
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/results_empl';
			// },500);
		}
	}
	
});

$('#link_vocational').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("interests from quests m2");
	var voc = '<?php echo $voc;?>';
	if(premium == 0){
		$('#premium').click();
	}
	else{
		if(voc == 'n'){
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/assessment_interests';
			// },500);
		}else{
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/results_interests';
			// },500);
		}
	}
});

$('#link_skills').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("skills from quests m2");
	var sk = '<?php echo $sk;?>';
	if(premium == 0){
		$('#premium').click();
	}
	else{
		if(sk == 'n'){
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/assessment_skills';
			// },500);
		}else{
			// setTimeout(function(){
				window.location.href=WEBROOT+'career_program/results_skills';
			// },500);
		}
	}
});

</script>