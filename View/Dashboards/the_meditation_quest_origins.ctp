<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'meditation_origins'
	}
})

</script>
<style>
.Footer {
		padding: 35px 30px 45px 30px !important;
}
.Footer > div {
    padding: 0px !important;
}
#container-text{
	padding-top: 15px;
}
#header2 {
	background-image: url('<?php echo $this->webroot;?>img/dashboard/sale_grut.jpg');
	max-width: 770px;
	max-height: 340px;
	position: relative;
	background-size: 100% 100%;
	background-position: center;
}

.send_btn {
	position: absolute;
	right: 35px;
	bottom: 20px;
}

@media ( max-width : 750px) {
	.quiz-result-cursos {
		border-top: none !important;
	}
	.send_btn {
		position: absolute !important;
		right: 5px;
		bottom: 0px;
	}
	#comentario textarea {
		top: 78px !important;
		width: 88% !important;
	}
}

@media ( max-width : 370px) {


	#btn_got_it{
		width: 100% !important;
		
		margin: 0.2em 0;
	}


.panel-title{

	  font-size: 3vw ;
}

#science p{

font-size: 2.5vw !important;
}
.title p {
	font-size: 4vw ;
}

.title  {
	 height: 35px;
}

 
}

@media ( max-width : 520px) {


	#btn_got_it{
		width: 100% !important;
		
		margin: 0.2em 0;
	}


.title  {
	 height: 45px;
}
	
.panel-title{

	  font-size: 3vw ;
}

.title p {
	font-size: 4vw ;
}
	
}

.caja_module {
  margin-top: 0 ;
  }
  .titulo_izquierda {
  margin-top: 16px !important;
}

.mentr-ok-btn-large {
  font-size: 16px;
}


@-webkit-keyframes fadeout {
	from { 
		opacity: 1;
		 top: 471px;
  right: 290px;
	}
	to {
		opacity: 0;
		  top: 461px;
  right: 264px;
	}
}

@keyframes fadeout {
	from { 
		opacity: 1;
		 top: 471px;
  right: 290px;
	}
	to {
		opacity: 0;
		  top: 461px;
  right: 264px;
	}
}

#btn_giff {
	font-size: 35px;
	font-weight: 600;
	color: #FF6633;
	position: absolute;
	top: 250px;
	right: 154px;
	display: none;
	opacity: 0;
	-webkit-animation-name: fadeout;
	-webkit-animation-duration: 4s;
  animation: fadeout 4s 2s;
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
				<?php echo __('Origins',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="" style="">
				<div id="header2">
					<img alt="" src="<?php echo $this->webroot;?>img/dashboard/sale_grut.jpg"
						style="width: 100%; opacity: 0;">
					<div class="title">
						<p><?php echo __('Origins of RAMANA meditation',true);?></p>
					</div>
				</div>
				<div id="container-text">
					 <h3 style="font-size:20px; color:#000000;">Where does this form of Meditation come from?</h3>
<p>
Ramana Meditation, or a very similar form of it, was being practised long before there is any written record of it. Although legends abound about how meditation first came into existence, no-one really knows for sure. However, the 400 BC <a style="color:#000000; text-decoration: underline;  line-height: 1.5;" href="https://en.wikipedia.org/wiki/Yoga_Sutras_of_Patanjali" target="_blank">Yoga Sutras of Patanjali</a>, the foundational texts of Raja yoga (also known as Ashtanga yoga), provide a better understanding of where meditation fits into the yoga philosophy as a whole. <br> <br>

According to the Yoga Sutra, there are eight Angas (Limbs) of Yoga. The first five are classified as external. These include Yama (Restraints); Niyama (Observances); Asana (Postures); <b>Pranayama (Breath-control);</b> and Pratyahara (Sense withdrawal /Focus). The final three are internal Angas which give information and instructions about mental processes. They include Dharana (Contemplation); <b>Dhyana (Meditation); </b> and Samadhi (Yogic Trance, Oneness, Non-Duality), making meditation or "Dhyana" the seventh Limb of Yoga. 
<br> <br>
The Yoga Sutras of Pantanjali indicate that Pranayama (breath-control) be practiced as an exercise that is preliminary to focus; a means of "tuning-in" and getting present, fast.<sup>i</sup><br><br><sup>i</sup>SadhanaPada’ Chapter 2; Sutra 29</p>

					<div style="text-align : center; margin-top: 35px; margin-bottom: 40px;">
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button"
							style="width: 170px;  border-radius: 6px; line-height: 40px; font-weight: 600; height: 54px;" onclick="">Got it!</button>
					</div>
					<div class="botones" style="margin-top: 51px;">
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
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script>

var click = 0;

$('#btn_got_it').on('click',function(){
	click++;
	if(click<=1){
		$('#btn_giff').css("display","block");
	}else{
	    window.location.href='<?php echo $this->webroot;?>career_program/meditation_intro'
		$('#btn_giff').css("display","none");
	}
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'meditation_origins','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

</script>



