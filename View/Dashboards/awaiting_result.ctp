<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: '360_awaiting'
	}
})
</script>

<style type="text/css">
	
.seccion_izquierda {
	padding-top: 0px;
}

.mobile{
	display: none;
}


@media ( max-width : 750px) {

	.invitaciones{
		width: 100%;
	}

	.invitaciones1{
		width: 100%;
	}

	.seccion_derecha{
		margin-bottom: 0px;
	}

	.boton_module {
	  width: 100% !important;
	    margin-bottom: 25px;
	}
	.mobile{
		display: block;
	}
	#web{
		display: none;
	}
}

@media ( max-width : 370px) {
	.col-xs-8{
		width: 60% !important;
	}
}

</style>

<div id="">
	
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
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_3"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" onclick="function test(){return false;}" href="#"><?php echo __('360 Feedback',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Invitations Sent',true);?>
				<div></div>
			</div>
		</div>
	</div>


	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div class="">


				<div id="web" class="dash-vision-content" style="margin-bottom:60px;">
					<div class=" col-xs-4 col-md-3"
						style="max-height: 200px; background-image: url(../webroot/img/I.png);"
						id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9"
						style="display: table; min-height: 170px;">
						<div style="display: table-cell; vertical-align: middle;">
							<p>We’re still waiting for your reviewers to respond. You will be able to access your results when at least three responses have been received. Meanwhile, why not invite more people to rate you?</p>
							<button class="quiz-result-btn boton_module" style="width: 350px;" onclick="window.location = WEBROOT+'career_program/360_invites'">ASK FOR MORE RATINGS</button>
						</div>

						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
				</div>




				<div class="mobile">
					<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 40px;">
						<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/I.png);" id="imgs-tipe"></div>
						<div class=" col-xs-8 col-md-9 science_text">
							<div style="display: table-cell; vertical-align: middle;">
							<p>We’re still waiting for your reviewers to respond. You will be able to access your results when at least three responses have been received. Meanwhile, why not invite more people to rate you?</p>
							<button class="quiz-result-btn boton_module" style="width: 350px;" onclick="window.location = WEBROOT+'career_program/360_invites'">ASK FOR MORE RATINGS</button>
							</div>
							
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>



			</div>
		</section>

		<section class="seccion_derecha">
			<article id="article_progression">
				<label class="titulo">Reviews</label>
				<div class="invitaciones">
					<div class="invitaciones1">
						<div class="invitaciones1_1">Invitations sent:</div>
						<div class="invitaciones1_2"><?php echo $this->Session->read('Sent'); ?></div>
					</div>
					<div class="invitaciones1">
						<div class="invitaciones1_1">Reviews received:</div>
						<div class="invitaciones1_2"><?php echo $this->Session->read('resultF'); ?></div>
					</div>

					<div class="invitaciones1">
						<div class="invitaciones1_1">Minimum reviews required:</div>
						<div class="invitaciones1_2">3</div>
					</div>



				</div>
			</article>
			<!-- ARTICULOS -->
			<?php //echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>









