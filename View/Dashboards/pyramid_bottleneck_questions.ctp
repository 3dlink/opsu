<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'P3_bottleneck_r'
	}
})

var click = 1;
</script>
<style type="text/css">

#container-text {
  padding-top: 20px;
}

	@-webkit-keyframes fadeout {
		from { 
			opacity: 1;
			bottom: 60px;
			right: 300px;
		}
		to {
			opacity: 0;
			bottom: 70px;
			right: 280px;
		}
	}

	@keyframes fadeout {
		from { 
			opacity: 1;
			bottom: 60px;
			right: 300px;
		}
		to {
			opacity: 0;
			bottom: 70px;
			right: 280px;
		}
	}

	#gif_pyramid {
	  font-size: 35px;
	  font-weight: 600;
	  color: #FF6633;
	  position: absolute;
	  bottom: 60px;
	  right: 300px;
	  display: none;
	  opacity: 0;
	  -webkit-animation-name: fadeout;
	  -webkit-animation-duration: 2s;
  	animation: fadeout 4s 2s;
	}

.textarea {
  border: none;
  background-image: url('../img/lineas.png');
  color: black;
  font-size: 20px;
  min-height: 120px;
  width: 100%;
  resize:none;
  line-height: 40px;
  margin-top: 10px;
  padding-left: 20px;
  padding-right: 20px;
}
.challenges{
	text-align: center;
	color: black;
	display: table-row;
}
.challenges>div{
	display: table-cell;
	vertical-align: middle;
}
.challenges>div>div{
	margin: 0 auto;
	font-size: 20px;
	font-weight: 400;
	background-color: rgba(255,255,255,0.5);
	border-radius: 5px;
	padding: 10px;
	width: 70%;
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
  margin-top: 40px;
}

.seccion_izquierda{
	padding-top: 0;
}
h1{
	color: black;
	font-size: 30px;
	font-weight: 400;
	margin: 0;
	margin-bottom: 20px;
}

#pyramid{
  width: 570px;
  background-image: url('../img/dashboard/Pyramid3.png');
  margin: 0 auto;
  min-height: 460px;
  height: 1px;
  margin-bottom: 35px;
  margin-top: 35px;
  display: table;
}

.pisos{
	float: left;
	width: 100%;
}

.piso1{
	margin-top: 38px;
}
.piso2{
	margin-top: 75px;
}
#pregunta_padre{
	font-size: 20px;
	margin-top: 35px;
	color: black;
}

.pregunta{
	height: 190px;
	background: white;
	padding: 20px;
	margin-top: 20px;
}

.titulo_pregunta{
	font-size: 20px;
	font-weight: 600;
	float: left;
	margin-left: 10px;
	color:black;
	margin-top: -7px;
}
#preguntas_todas{
	float: left;
	width: 100%;
}

@media ( max-width : 750px) {
.challenges>div>div{
	font-size: 4vw;
	padding: 1vw;
}
	#checks{
		width: 100%;
		background-repeat: no-repeat;
	  background-size: contain;
	}
}
@media ( max-width : 630px) {
	#pyramid{
	  width: 100%;
	  background-size: contain;
	  height: 71vw;
	  min-height: initial;
	}
}
@media ( max-width : 590px) {
	.piso1 {
	  margin-top: 34px;
	}
	.piso2 {
  margin-top: 62px;
}
}
@media ( max-width : 560px) {
	.piso2 {
  margin-top: 46px;
}
}
@media ( max-width : 510px) {
	.piso2 {
  margin-top: 26px;
}
}
@media ( max-width : 460px) {
	.piso2 {
  margin-top: 12px;
}
}
@media ( max-width : 450px) {
	#btn_take_up {
		width: 100%;
	}
}
@media ( max-width : 440px) {
	.challenges {
		width: 100%;
	}
	.piso2 {
  margin-top: 5px;
}
}
@media ( max-width : 400px) {
	.piso1 {
	  margin-top: 25px;
	}
}
@media ( max-width : 380px) {
	.piso2 {
	  margin-top: 10px;
	}
}

</style>
<?php echo $this->Html->script('../library/jquery.scrollTo.js'); ?>
		
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
					<h1>Excellent!</h1>
					<p>
						The challenge displayed at the top of the pyramid is the main “bottleneck” holding you back from reaching your goals. You should focus on resolving this issue first. As the most significant obstacle in your way, once this is removed, you will find the other challenges are easier to tackle. But be aware, as you overcome each challenge, in time, another is sure to appear in its place.
					</p>

					<div id="pyramid">
						<div class="table_row challenges">
							<div><div><?php echo ucwords($challenges['Challenge']['top_challenge'])?></div></div>
						</div>
						<div class="table_row challenges">
							<div><div><?php echo ucwords($challenges['Challenge']['challenge_2'])?></div></div>
						</div>
						<div class="table_row challenges">
							<div><div><?php echo ucwords($challenges['Challenge']['challenge_3'])?></div></div>
						</div>
					</div>

					<p>
						The first step of solving these bottlenecks is to first accept that there is a reason behind them. Once you discover those reasons, you must acknowledge their positive side. Because the first challenge is the most significant, that is the best place to start. <br><br>
						The questions below provide a guideline for this process. Work your way through them, answering as honestly as you can. Do not be tempted to give up even if you cannot see anything positive about the situation; there is always an upside to any downturn, even if it is not immediately apparent. 
					</p>

					<div id="preguntas_todas">
						<div id="pregunta_padre">
							<b>Challenge 1:</b> <?php echo ucwords($challenges['Challenge']['top_challenge'])?>
						</div>

						<div id="q1" class="pregunta">
							<img src="../img/dashboard/arrow_black.png" style="width: 24px;float:left;" alt="">
							<div class="titulo_pregunta"><b>What have I done?</b></div>
							<textarea id="text_q1" class="textarea"></textarea>
						</div>
					</div>
					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large" type="button">NEXT</button>
					</div>
						<div id="gif_pyramid">+40</div>
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
//32
// if(piso1.length <= 32 && piso2.length <= 32 && piso3.length <= 32){
// 	$('.piso1').css('margin-top','48px');
// 	$('.piso2').css('margin-top','114px');
// 	$('.piso3').css('margin-top','96px');
// }
// if(piso1.length > 32 && ){
// 	$('.piso2').css('margin-top','90px');
// }

var piso1 = '<?php echo ucwords($challenges['Challenge']['top_challenge'])?>';
var piso2 = '<?php echo ucwords($challenges['Challenge']['challenge_2'])?>';
var piso3 = '<?php echo ucwords($challenges['Challenge']['challenge_3'])?>';
// 


		var challenge_num = 1;
		var preguntas = [];
		preguntas[0] = 'What action did I take?';
		preguntas[1] = 'Why did I act this way?';
		preguntas[2] = 'What was I thinking? ';
		preguntas[3] = 'Why did I think this?';
		preguntas[4] = 'What do I think now? ';
		preguntas[5] = 'Why do I think this?';
		preguntas[6] = 'How can I improve my actions?';
		preguntas[7] = 'How important was it?';
		preguntas[8] = 'Why was it so important?';
		preguntas[9] = 'What have I lost?';
		preguntas[10] = 'Have I really lost anything significant?';
		preguntas[11] = 'Was it important for my eternal happiness?';
		preguntas[12] = 'What are the positive aspects of this challenge? ';
		preguntas[13] = 'How can this challenge help me achieve my higher purpose?';



	$(document).keypress(function(event) {
    if(event.which == 13){
      $('#btn_take_up').click();
    }
  });

	$('#btn_take_up').click(function(){

//		if($('#text_q'+click).val() != ''){

		click++;

		if(click < 16){


			$('#preguntas_todas').append(
			'<div id="q'+click+'" class="pregunta">'+
					'<img src="../img/dashboard/arrow_black.png" style="width: 24px;float:left;">'+
					'<div class="titulo_pregunta"><b>'+preguntas[(click-2)]+'</b></div>'+
					'<textarea id="text_q'+click+'" class="textarea"></textarea>'+
				'</div>'
			);

			$('#text_q'+click).focus();
			$('body').scrollTo('#text_q'+click,900);

			if(click == 15){
				$('#btn_take_up').html('SAVE');
			}

		}else{

			$('#btn_take_up').attr('disabled', 'disabled');
			$('#btn_take_up').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
			
			var resultados = [];
			resultados[0] = '<?php echo ucwords($challenges['Challenge']['top_challenge'])?>';
			for (var i = 1; i < 16; i++) {
				resultados[i] = $('#text_q'+i).val();
			}

			$('#gif_pyramid').css("display","block");
			
		//	setTimeout(function() {
				$.post(WEBROOT+'dashboards/addChallengesQuestions',{dataQuest:resultados},function(data){
					if(data){
						var track = "save button bottlenecks questions P3";
						$.ajax({
							url: WEBROOT+'dashboards/Mixpanelajax/'+track,
							type: 'post',
							success: function(){
								window.location.href=WEBROOT+'career_program/results/5';
							}
						})
						// },1000);
					}
				},'json');
	//	  }, 2000);
			

		}

	//}
	});

</script>


