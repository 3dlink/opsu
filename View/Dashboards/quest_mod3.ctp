<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'quests_module_3'
	}
})
</script>

<style>
@media ( max-width : 750px) {
	#contenido_quest {
		padding-bottom: 0 !important;
	}
	#article_progression {
		border-top: none !important;
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

.texto-contenido-der{
 text-align: left;
  }
</style>
<div style="min-height: 1089px;  background-color: #f7f7f7;">
	<div>
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_3"><?php echo __('Improve My Decision-Making Intro Page',true);?></a>
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
						Take on these quests and learn to make better, more balanced decisions. Following prescribed methods of thinking has been proven to generate optimum solutions to complex problems. The quests in this module will introduce an efficient career decision-making framework and valuable information on how to avoid common cognitive biases that can cloud your judgment. This will help ensure you consider all the right factors and increase your chances of achieving your unique version of career success.<br><br>
						You’ll earn points for each completed assessment. You need 140 points to get the silver key. 
					</p>	



					<div class="contenido">
						<div class="imagen-contenido-izq " style="background-image: url('<?php echo $this->webroot;?>img/modulo3-1.png');">

						</div>
						<div class="texto-contenido-der ">
							<p style="margin-top: -6px;"><b class="titulo">Avoid Common Career Decision Mistakes</b>
							</p>
							<p>
								Learn about heuristics and how to avoid the negative effect they can have on career-related decisions.
							</p>

							<div class="div-button">
								<button id="btn_ajh" class="mentr-ok-btn-large2" type="button">Complete quest</button>
							</div>

							<div>
								<div class="mentr-backend-points <?php if($ajh == 'y')echo 'verde'; else echo 'rojo';?>">
									<div class="centerV2">
										40
									</div>
								</div>	
							</div>

						</div>					
					</div>

					<div class="contenido">

						<div class="imagen-contenido-izq derecha" style="background-image: url('<?php echo $this->webroot;?>img/modulo3-2.png');">
								<?php if($user['premium'] == 0){ ?>
								<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
								<?php } ?>
						</div>

						<div class="texto-contenido-der izquierda">
							<p style="margin-top: -6px;"><b class="titulo">Career Decision-Making Framework</b></p>
								<p style="">
								Learn simple and efficient career decision-making techniques that help you make the best choice.
							</p>

							<div class="div-button">
								<button id="btn_cdmf" class="mentr-ok-btn-large2" type="button">Complete quest</button>
							</div>
							
								<div>
									<div class="mentr-backend-points <?php if($cdmf == 'y')echo 'verde'; else echo 'rojo';?>">
										<div class="centerV2">
											100
										</div>
									</div>	
								</div>
						</div>
					</div>

					<div class="contenido">

						<div class="imagen-contenido-izq" style="background-size: 100% 100%;background-image: url('<?php echo $this->webroot;?>img/bubble.png');">
								<?php if($user['premium'] == 0){ ?>
								<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
								<?php } ?>
						</div>

						<div class="texto-contenido-der">
							<p style="margin-top: -6px;"><b class="titulo">360 Feedback</b></p>
								<p style="">
								Identify gaps in the way you perceive yourself and how the rest of the world sees you.
							</p>

							<div class="div-button">
								<button id="360feedback" class="mentr-ok-btn-large2" type="button">Complete quest</button>
							</div>

							
								<div>
									<div class="mentr-backend-points <?php if($feed == 'y')echo 'verde'; else echo 'rojo';?>">
										<div class="centerV2">
											60
										</div>
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
	
				<div style="min-height: 80px;  margin-top: 17px;">
					<div style="position:relative;">
						<div style="color:#333333;	">
							<big style="font-size: 30px;"><?php echo $percent;?></big>
							<small style="font-size: 18px;">%</small>
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
							<div id="barProgress" style="width: <?php echo $percent;?>%;">
							</div>
							<div id="passLine"></div>
							<div id="finishLine"></div>
						</div>
					</div>
				</div>
	
				<div style="min-height: 280px;border: solid 1px #cccccc;padding: 20px 20px 20px 20px;position:relative;">
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
							<p style="margin-top: 16px;"><span style="font-size: 30px;">140</span> <br> points needed</p>
						</div>
						<div class="llaves">
							<div style="display: inline-block;">
								<div id="keyYellow">
									<div class="centerV2">
										<img src="<?php echo $this->webroot;?>img/keyA.png">
									</div>
								</div>
							</div>
							<p style="margin-top: 18px;"><span style="font-size: 30px;">200</span> <br> points needed</p>
						</div>
					</div>
					<div style="clear:both;"></div>
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


$('#360feedback').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("360 from quests m3");
	if(<?php echo $this->Session->read('done');?> == 0){
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/360_intro';
		// },500);
	}
	else{
		if(<?php echo $this->Session->read('resultF');?> < 3){
			setTimeout(function(){window.location.href=WEBROOT+'career_program/360_awaiting';},500);
		}
		else{
			setTimeout(function(){window.location.href=WEBROOT+'career_program/360_results';},500);
		}	
	}
});

$('#btn_cdmf').on('click',function(){
	if(premium == 0){
		$('#premium').click();
	}else{
		// mixpanel.identify(ID_USUARIO);
		// mixpanel.track("cdmf from quests m3");
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/framework';
		// },500);
	}
	
});
$('#btn_ajh').on('click',function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("avoid mistakes from quests m3");
	// setTimeout(function(){
		window.location.href=WEBROOT+'career_program/heuristics';
	// },500);
});

</script>