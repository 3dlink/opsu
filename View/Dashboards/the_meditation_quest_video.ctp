<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'meditation_main'
	}
	
})
</script>
<style>
#header2 {
	background-image:
		url('<?php echo $this->webroot;?>img/dashboard/video1.png');
	max-width: 770px;
	max-height: 430px;
	position: relative;
	background-size: 100% 100%;
	background-position: center;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

@media ( max-width : 750px) {
#container-text p {
  font-size: 18px;
}
	tr > td {
  font-size: 18px !important;
}
	#comentario {
		height: inherit !important;
		  float: left;
	}
	#article_articles {
		margin-top: 328px;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	.send_btn {
		  position: initial !important;
  float: right;
  margin: 10px 5px;
	}
	#comentario textarea {
		  width: 88% !important;
		  margin-left: 25px;
		  position: initial;
	}
}

.boton_module {
	background-image:
		url(<?php echo $this->webroot;?>img/dashboard/Download.png);
	background-repeat: no-repeat;
	height: 48px;
	width: 263px;
	background-position: 7% 38%;
	padding-right: 0px;
	text-align: center;
	padding-left: 30px;
}


@media ( max-width : 750px) {
	#article_articles {
		margin-top: 0;
	}
	.boton_module {
		width: 50% !important;
	}
}

@media ( max-width : 520px) {
	.boton_module {
		font-size: 2.5vw;
	}
}

@media ( max-width : 370px) {
	.boton_module {
		font-size: 3vw;
		width: 75% !important;
	}
}

#btn_giff {
	font-size: 35px;
	font-weight: 600;
	color: #FF6633;
	position: absolute;
	  bottom: 164px;
  right: 300px;
	display: none;
	opacity: 0;
	-webkit-animation-name: fadeout2;
	-webkit-animation-duration: 2s;
  animation: fadeout 4s 2s;
}


@-webkit-keyframes fadeout {
	from { 
		opacity: 1;
		  bottom: 164px;
  right: 300px;
	}
	to {
		opacity: 0;
		  bottom: 184px;
			right: 270px;
	}
}

@keyframes fadeout {
	from { 
		opacity: 1;
		  bottom: 164px;
  right: 300px;
	}
	to {
		opacity: 0;
		  bottom: 184px;
			right: 270px;
	}
}
.caja_module {
	margin-top: 0;
}

.titulo_izquierda {
	margin-top: 16px !important;
}
</style>

<div style="background-color: #f7f7f7;">
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
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/meditation_intro"><?php echo __('The Meditation Quest',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Video',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="" style="">
				<iframe id="video" src="https://player.vimeo.com/video/131863413" width="100%" height="432" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				<div id="container-text">
					<p>
						Choosing your major or taking any important step in your career can leave you feeling emotionally strained. Take on this quest and learn simple meditation breathing using our instructional video. These techniques will calm your mind and help reduce the stress you are experiencing. A calm mind is free from heated emotion and emanates inspiration, creativity and a love of life. It is the first step towards regaining the mental and emotional equilibrium required to make good, confident decisions. <br><br>
						This video introduces three breathing techniques, or “pranayamas” to help you achieve a meditative state with ease. <br><br>
						Each of these pranayamas has a unique objective. The first, Ujjayi, or “Ocean Breath” in Sanskrit, helps to build a strong diaphragm and strengthen the nervous and digestive systems. The second, Anuloma Viloma, increases the oxygen supply in the body and releases stress and anxiety. With regular practice, this pranayama will help you feel more grounded and level-headed. The third technique is Bhramari, the name of which comes from a type of Indian bee. This focuses on releasing the mind of tension, anger and anxiety, and can also provide relief from mild headaches. <br><br>
						Each technique is demonstrated by Made Sri Paramahansa Istawananda, a renowned yogi from Bali, Indonesia. Made grew up in the Hindu tradition and studied Yoga in the time-honored way; living with his Master for 10 years. Proficient with ancient Yoga scriptures, Made knows most of the standard Sanskrit literature by heart. He lives in Bali with his wife and two children, where he lectures on traditional Hatha Yoga and Yoga philosophy, and practices Yoga on a daily basis. Don´t be intimidated by his long fingernails. This is a status symbol demonstrating that the person uses their brain for work rather than their hands. As you can imagine, a person who works with their hands would break those long nails very quickly!<br><br>
						After you have watched the video we encourage you to also download the audio file from the column on the right and practice by yourself using the guided meditation.
					</p>
					<div style="text-align: center; margin-top: 35px; margin-bottom: 40px;">

						<button id="btn_got_it" class="mentr-ok-btn-large" type="button"
							style="width: 170px; height: 50px; font-weight: 500; border-radius: 6px;">Got
							it!</button>

					</div>
					<div id="btn_giff">+20</div>
					<div class="botones" style="position: relative; margin-top: 35px;">
						<label class="opinion"> How useful did you find this resource? </label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
						
						</div>
					</div>
					<div id="message-succes" style="display: none;">
						<img src="<?php echo $this->webroot;?>img/Check.png" style="" id="message-succes-imagen">
						<div style="" id="message-succes-texto">
							<h3>Thank you for your feedback!</h3>
						</div>
					</div>
						<div id="comentario">
							<label id="mensaje_comentario"> </label>
							<textarea id="text_comentario" placeholder="Say something..."></textarea>

							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button"
									style="width: 110px; height: 40px;">Send</button>
							</div>
						</div>


				</div>
			</div>
		</section>
		<section class="seccion_derecha">
			<article class="article_tips">
				<big> <label class="titulo titulo_izquierda">Make it work</label>
				</big>
				<div class="caja_module">
				<table>
					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Move to a calm place, ideally use the same place to create a routine</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Sit in any comfortable position. Make sure the spine and neck are straight</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Close your eyes; only open them after the meditation is finished</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Take off your eye glasses if you wear them</td>
					</tr>

					<tr>
						<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
						<td>Practice daily for 30 to 60 minutes</td>
					</tr>
				</table>
				</div>
			</article>
			<article class="article_tips">
				<big> <label class="titulo titulo_izquierda">Audio file </label>
				</big>
				<div class="caja_module">Continue practicing meditation using this
					audio file that MENTOR. prepared for you</div>
				<div style="text-align: center; font-size: 16px; padding-top: 32px;">
					<button type="button" id="mp3" class="quiz-result-btn boton_module" style="">DOWNLOAD MP3 FILE</button>
				</div>
			</article>	
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script>
	
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

	var click = 0;

	$('#btn_got_it').on('click',function(){
		setTimeout(function() {
			
			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("got it button in meditation video page");
				$.post(WEBROOT+'dashboards/addMeditation',function(data){
					if(data == '1'){
						$('#btn_giff').css("display","block");
						window.location = WEBROOT+"career_program/quests_module_2";
					}else{
						window.location = WEBROOT+"career_program/quests_module_2";
					}
				},'json');
		  }, 2000);
	});

	$('#mp3').on('click',function(){

		var track = "download mp3";
		$.ajax({
			url: WEBROOT+'dashboards/Mixpanelajax/'+track,
			type: 'post',
		})

		// mixpanel.identify(ID_USUARIO);
		// mixpanel.track("download mp3");
		// setTimeout(function() {
	 //  }, 1000);
	});

var like = 0;

	$('#btn1').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
		$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
		//$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		like = 1;
	});
	$('#btn2').on('click',function(){
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn2').css("background-image", "url("+WEBROOT+"img/N2.png)");
		$('#comentario').css("display", "none");
		like = 0;
	});
	$('#btn3').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/N1.png)");
		$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		like = -1;
	});


	$('.send_btn').on('click', function(){
		var d = '<?php echo date("Y/m/d");?>';

		var comment = [];
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'meditation_main','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

</script>



