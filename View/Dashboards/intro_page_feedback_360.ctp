
<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: '360_intro'
	}
})
</script>

<style type="text/css">
#header2 {
  background-image: url('<?php echo $this->webroot; ?>img/bubble.png');
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
	font-size : 40px; padding: 7px 0 0 20px;   height: 70px;
}
.boton_module {
  margin-bottom: 10px;
  margin-top: 27px;
}


@media ( max-width : 750px) {


.seccion_derecha {
  margin-bottom: -14px !important;
}
.imgChecks > img {
  width: 100%;
}
.quiz-result-cursos #quiz-result-img-content_ #tittle {
  bottom: 0 !important;
}

}

@media ( max-width : 500px) {
	#tittle{
		font-size : 6vw;
	}
}

@media ( max-width : 370px) {

	.dash-vision-content{
			height : 600px !important;
	}
	#tittle{
		  padding: 5% !important;
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
				<div id="header2">
					<?php if($user['premium'] == 0){ ?>
						<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
					<?php } ?>
					<img alt="" src="<?php echo $this->webroot;?>img/bubble.png" style="width: 100%; opacity: 0;">
					
					<div class="title">
						<p><?php echo __('360° Feedback',true);?></p>
					</div>
				</div>
					<div style="text-align: justify;padding-top: 20px;">
						<div>
						<p class="textScale">
						Creating a complete panorama of your behavior and actions, 360° feedback is a means of filling in the gaps you are not able to see. Commonly used by human resources, feedback is typically gathered from an employee’s immediate circle, including subordinates, colleagues and supervisors, in addition to a self-evaluation. The results provide a more complete picture of strengths, weaknesses and blind spots to look out for, and create a stronger base from which to map out a path for personal development. MENTOR. has adapted this technique to evaluate your relevant transferable skills. 
												
						</p>
						<div class="imgChecks" style="  margin-bottom: 25px; margin-top: 35px;">
							<?php echo $this->Html->image('Checks0.png');?>
						</div>
							<p class="textScale">
								The first step is to complete the self-evaluation. You will then be asked to invite people who have known you for 1-3 years to answer the same set of questions about you. The length of time the rater has known to the individual being evaluated has been shown to significantly affect the accuracy of the results. The most accurate results are provided by those in the 1-3 year category. The next most accurate have been known for less than one year. These two groups have gone past the stage of first impressions, but not yet reached the following stage where they begin to make favorable generalizations. This begins to happen after the three year mark and significantly increases after five years. <br><br>
								In order to get the most objective results, it is important to maintain anonymity. For this reason you will not be able to see individual responses. The results will be aggregated when a minimum of three respondents have submitted their answers.

							</p>
						</div>

						<div style="text-align: center; font-size:16px;">
							<button style="width: 50%" id="" type="button" class="btn_take quiz-result-btn boton_module">
							TAKE UP THE QUEST</button>
						</div>

					</div>
					<div>
					<big>
						<label class="titulo titulo_izquierda" style="padding-bottom: 25px !important;">Sample Results</label>
						
					</big>
					<?php echo $this->Html->image('Results.png', array('style' => 'width: 100%;'));?></div>
					<div style="text-align: center; font-size:16px;">
							<button style="  width: 50%" type="button" onclick="" class=" btn_take quiz-result-btn boton_module">
							TAKE UP THE QUEST</button>
					</div>
					<div style="clear:both;"></div>
			</div>

	<div class="ScienceWeb" style="margin-bottom:30px;">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						This assessment is based on the premise that there are parts of ourselves that are known, and parts that are not known, either to ourselves or to others. This concept is the basis for the Johari Window, a fundamental tool used in feedback and leadership training today. Developed by American psychologists Joseph Luft and Harrington Ingham in the 1950s, its purpose is to help people better understand the relationship with their self and others. This in turn provides a greater understanding of where to focus. The Johari Window consists of four “window panes”: the Façade, known only to the self; the Arena, known to all; the Unknown, known to no one; and the Blind Spot, known to others but not the self.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>

			
			<div style="clear:both;"></div>
		</section>	
		<section class="seccion_derecha" >
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
									Invite at least five people to complete the assessment
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Ask people you have known for 1-3 years. If this is not possible, for less than one year
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									At least three invitees must respond before you can see the results
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									You will only see aggregated results
								</td>
							</tr>
						</table>
					</div>
			</article>	

			<!-- ARTICULOS -->
				<?php echo $this->element('article_list');?>


	<div class="ScienceMobile">
		<div style="clear: both;"></div>
		<div class="dash-vision-content" style="margin-bottom: 45px;">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" ></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						This assessment is based on the premise that there are parts of ourselves that are known, and parts that are not known, either to ourselves or to others. This concept is the basis for the Johari Window, a fundamental tool used in feedback and leadership training today. Developed by American psychologists Joseph Luft and Harrington Ingham in the 1950s, its purpose is to help people better understand the relationship with their self and others. This in turn provides a greater understanding of where to focus. The Johari Window consists of four “window panes”: the Façade, known only to the self; the Arena, known to all; the Unknown, known to no one; and the Blind Spot, known to others but not the self.
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


<?php echo $this->element('modal_premium');?>
<script type="text/javascript">
	var premium = '<?php echo $user["premium"];?>';
	// var premium =	1;
	$('.btn_take').on('click',function(){
		if(premium == 0){
			$('#premium').click();
		}else{
			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("take up quest in 360 intro page");
			// setTimeout(function(){
				var track = "take up quest in 360 intro page";
				$.ajax({
					url: WEBROOT+'dashboards/Mixpanelajax/'+track,
					type: 'post',
					success: function(){
						window.location.href='<?php echo $this->webroot;?>career_program/assessment_360m';
					}
				})
			// },1000);
		}
	});
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