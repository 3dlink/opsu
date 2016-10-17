<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'P3_bottleneck'
	}
})
</script>
<style type="text/css">

.container-img{
	width: 100%;
  padding-top: 30px;
  padding-bottom: 45px;
}
.img{
	width: 100%;
  max-width: 617px;
  margin: 0 auto;
}
#container-text {
  padding-top: 20px;
}
.textarea {
  border: none;
  background-image: url('../img/dashboard/lineas.png');
  color: black;
  font-size: 20px;
  min-height: 120px;
  width: 98%;
  resize:none;
  line-height: 40px;
  margin-top: 10px;
  margin-left: 20px;
  padding-left: 20px;
  padding-right: 20px;
}

.take_up_btn {
  text-align: center;
  margin-bottom: 60px;
  margin-top: 35px;
}

#btn_take_up {
  width: 170px;
  height: 60px;
  font-size: 16px;
  font-weight: 400;
}

.btn_alone_right{
	border-top: 2px solid #d0d0d0;
}
.seccion_izquierda{
	padding-top: 0;
}
h1{
	color: black;
	font-size: 30px;
	font-weight: 400;
	margin: 0;
}

#checks{
	width: 617px;
  height: 135px;
	display: block;
	margin: 0 auto;
  background-image: url('../img/dashboard/Checks2.png');
  margin-top: 30px;
  margin-bottom: 50px;
}
#drag{
	height: 520px;
}

#challenges{
	width: 100%;
	float: left;
	margin-top: 20px;
	margin-bottom: 40px;
}

@media ( max-width : 750px) {
	.textarea {
		margin-left: 0px;
	}
	#checks{
		width: 100%;
		background-repeat: no-repeat;
	  background-size: contain;
	}
}

@media ( max-width : 450px) {
	#btn_take_up {
		width: 100%;
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
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/p3_intro"><?php echo __('Pyramid of Personal Preferences',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Challenges',true);?>
				<div></div>
			</div>
		</div>
	</div>

	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div>
				<div id="container-text">
					<h1>Great Job!</h1>

					<div class="container-img">
						<div class="img"><img style="width:100%;" src="../img/dashboard/Checks2.png"></div>
					</div>
					<p>
						Challenges can be seen as feedback from life, and facing and overcoming them is one of the most effective way to learn. However, although we encounter them in all areas of life, our reaction is usually to fear the suffering they can cause, rather than embracing the potential to improve. <br><br>
						The kind of challenges we encounter can be physical, mental, psychological, financial, social, and of course, related to your business or career. Here, we want you to focus on the challenges that you perceive to be obstacles on the road to achieving your dreams or fulfilling your true potential. Write down the top three.  <br><br>
						In the next and final step you will be working on solving these top challenges through self-reflection, and asking and answering specific questions.
					</p>

					<div id="challenges">

						<h1>Top challenge</h1>

						<textarea id="ch1" class="textarea"></textarea>

						<h1 style="margin-top:40px;">Challenge no. 2</h1>

						<textarea id="ch2" class="textarea"></textarea>

						<h1 style="margin-top:40px;">Challenge no. 3</h1>

						<textarea id="ch3" class="textarea"></textarea>

					</div>


					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large" type="button">SAVE</button>
					</div>
			</div>
			</div>
		</section>	
		<section class="seccion_derecha">
			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>

		</section>
		<div style="clear: both;"></div>
	</div>	
		
</div>

<script>
	
	$('#btn_take_up').click(function(){

		if(($('#ch1').val() != '') && ($('#ch2').val() != '') && ($('#ch3').val() != '')){

			$('#btn_take_up').attr('disabled', 'disabled');
			$('#btn_take_up').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

		var challenges = [];

		challenges[0] = $('#ch1').val();
		challenges[1] = $('#ch2').val();
		challenges[2] = $('#ch3').val();

		challenges[0] = challenges[0].replace(/\n/g, " ");
		challenges[1] = challenges[1].replace(/\n/g, " ");
		challenges[2] = challenges[2].replace(/\n/g, " ");

		$.post(WEBROOT+'dashboards/addChallenges',{challenges:challenges},function(data){
			if(data){

				var track = "save button bottlenecks p3";
				$.ajax({
					url: WEBROOT+'dashboards/Mixpanelajax/'+track,
					type: 'post',
					success: function(){
						window.location.href=WEBROOT+'career_program/p3_bottlenecks_results';
					}
				})

			}
		},'json');

		}else{
			alert('Please complete the unanswered questions');
		}

		
	});

</script>


