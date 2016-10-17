<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: '360_confirmation'
	}
})
</script>

<style type="text/css">
.boton_module {
  margin-bottom: 30px;
}
.firsTd{
	padding-left: 0px !important;
}

.imgChecks > img{
	display: block; 
	margin: auto;
	width: 85%;
}

#tittle{
	
}

@media ( max-width : 750px) {

.imgChecks > img {
  width: 100%;
}
.quiz-result-cursos #quiz-result-img-content #tittle {
  bottom: 0 !important;
}
.boton_module {
  margin-bottom: 40px;
}
}

@media ( max-width : 500px) {

	.dash-vision-content{
			height : 380px !important;
	}
}

@media ( max-width : 370px) {

	.dash-vision-content{
			height : 600px !important;
	}
	#tittle{
	
			padding: 7px 0 0 4px !important;
	}
}


@media ( max-width : 320px) {

.dash-vision-content{
			height : 620px !important;
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
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_3"><?php echo __('Improve My Decision-Making Intro Page',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_3"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>

			

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('360 Feedback',true);?>
				<div></div>
			</div>
		</div>
	</div>


<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="">
				<div>
					<div style="font-size:30px; font-weight:600;color:black; border-top: solid 2px #d0d0d0;padding-top:15px;">
						Well done! Now sit tight and wait for your raters to respond
					</div>

					<div style="text-align: justify;padding-top: 30px;">
						<div>
						
						
						<div class="imgChecks" style="margin-bottom: 20px;">
							<?php echo $this->Html->image('Checks2.png');?>
						</div>
							<p>
								To see and compare results at least three people must complete the assessment. We will notify you by email when sufficient results are received. You can always invite more people to rate your strengths <a href="<?php echo $this->webroot;?>career_program/360_invites" style="text-decoration: underline; color: black;"><b>here</b></a>.
							</p>
							<br>
							<p>
								Meanwhile, you can start working towards completing another quest.
							</p>
							<br>
						</div>
						
						<div style="text-align: center; font-size:16px;">
							<button style="  width: 50%" type="button" onclick="window.location.href='<?php echo $this->webroot;?>career_program/dashboard'" class="quiz-result-btn boton_module">
							GO TO DASHBOARD</button>
						</div>

					</div>
					
					
					<div style="clear:both;"></div>
			</div>

	

			
			<div style="clear:both;"></div>
		</section>	
		<section class="seccion_derecha" style="padding-left:10px;">
				

		<!-- ARTICULOS -->
		<?php echo $this->element('article_list');?>


	<div class="ScienceMobile">
		<div style="clear: both;"></div>
		<div class="dash-vision-content" style="  height: 450px !important;">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget,
						elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. 
						Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum 
						cursus odio. Etiam consectetuer, risus ac fermentum pretium, est magna fringilla erat, 
						eu aliquam erat pede nec lectus.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>


		</section>
		<div style="clear: both;"></div>

	</div>
</div>
<script type="text/javascript">
	

$(document).on('click', '.relationShip', function(e){
	e.preventDefault();
	var n = $(this).data('number');
	$('#V'+n).val($(this).html());
})

$(document).on('mouseenter', '.relationShip', function(){
		$('.relationShip').css('background-color', '#E6E6E6');
		$('.relationShip').css('color', 'black');

		$(this).css('background-color', '#FF6633');
		$(this).css('color', 'white');
})



$(document).on('click', '.flagRow', function(){
	$(document).on('blur', '.flagRow', function(){
		$('.flagRow > img').attr('src', "<?php echo $this->webroot.'img/down-menu.png';?>");
	});

	if($(this).hasClass('down')){
		$(this).find('img').attr('src', "<?php echo $this->webroot.'img/up-menu.png';?>");
		$(this).addClass('up');
		$(this).removeClass('down');
	}
	else{
		$(this).find('img').attr('src', "<?php echo $this->webroot.'img/down-menu.png';?>");
		$(this).addClass('down');
		$(this).removeClass('up');
	}
	
})


</script>