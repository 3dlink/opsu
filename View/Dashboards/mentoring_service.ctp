<script>
$(document).ready(function(){
    ARTICLES = {
            CATEGORY: 'null',
            ID: 'null',
            LIMIT: 5,
            TAG: 'meditation_intro'
            }
})
</script>
<style>
.science3{
		display: none;
	}
.carousel-inner {
	margin-left : 7px;
}

#course-content{
	color : black;
}
#header2 {
	background-image:
		url('<?php echo $this->webroot;?>img/dashboard/shutterstock_134305943.png');
	max-width: 770px;
	max-height: 340px;
	position: relative;
	background-size: 100% 100%;
	background-position: center;
}

.lineas {
		width: 88% !important;
		margin: 0 7% !important;
	}
	
	.lineaa {
		width: 88% !important;
		margin-left:  4% !important;
	
	}
.caja_module {
	margin-top: -5px;
}

.titulo_izquierda {
	margin-top: 16px !important;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

.mentr-ok-btn-large {
	font-size: 16px;
}

.carousel-indicators li {
	background-color: #000 \9;
	background-color: rgba(184, 181, 184, 1);
	border-color: rgba(184, 181, 184, 1);
	width: 5px;
	height: 5px;
	margin: 0px 4px;
}

.carousel-indicators {
	bottom: 3px;
}

.carousel-carita {
	width: 108px;
	height: 108px;
	padding: 2.2em;
	background-color: #fff;
	border: 8px solid #cabeca;
	margin-top: -192px;
	margin-left: 18px;
	border-radius: 50%;
	display: inline-block;
	background-image: url("../webroot/img/dashboard/Capa 3.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	/* margin-right: 20px; */
}

.carousel-contenido {
	/*width: 180px;*/
	line-height: 1;
	font-size: 16px;
	height: 66px;
	/*margin-left: 157px;*/
	padding-right: 40px;
	padding-left: 15px;
	margin-top: -123px;
	display: inline-block;
	text-align: justify;
	font-family: Lato;
	font-style: italic;
	color : black;
}

.carousel-titulo {
	/*width: 150px;*/
	line-height: 1;
	font-size: 30px;
	font-family: Lato;
	font-weight: 300;
	height: 66px;
	/*margin-left: 157px;*/
	padding-left: 15px;
	margin-top: -192px;
	display: inline-block;
	color : black;
}

.carousel-titulo  p {
	font-size: 20px;
	font-family: 'Lato', Regular;
}

.carousel-indicators .active {
	background-color: #454345;
	width: 6px;
	height: 6px;
	margin: 0px 4px;
}

.carousel-texto {
	position: absolute;
	bottom: 205px;
	left: 4%;
	z-index: 10;
	padding-top: 20px;
	color: black;
	text-align: center;
}

.interno {
	width: 100%;
	height: 250px;
}

.seccion_derecha {
	background-color: white;
	box-shadow: 0px 1px 1px 1px rgba(136, 136, 136, 0.51);
}

article_tips {
	border-top: 0;
}

table {
	font-size: 18px;
	font-weight: 300;
}

td {
	padding-top: 11px;
}

h4 {
	font-size: 20px;
	font-weight: bold;
}

}
.dash-vision-content-mobile {
	width: 100%;
	min-height: 234px;
	background-color: #fff;
	border: 1px solid #eaeaea;
	box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, .5);
	margin-top: 30px;
	padding: 1em 1em 1em 0em;
	background-image: linear-gradient(to right, #755473 -1%, #fff 31%);
}

	tr>td { 
		color: black;
	}
@media ( max-width : 750px) {

	.carousel-contenido {
	  /*width: 70%;*/
	  width: 100%;
	}

	.interno {
  width: 100%;
}
.carousel-texto {
  margin-left: 22px;
  margin-top: -11px;
  color: black;
  font-size: 20px;
  display: inline-block;
  text-align: center;
}
	.carousel-inner {
	  position: relative;
	  width: 100%;
	  overflow: hidden;
	  margin: 0;
	}

	#science{
		display: none;
	}
	.science3{
		display: block;
	}
	tr>td {
		font-size: 16px !important;
		font-weight: 300;  
		color: black;
	}
	.lineas {
		width: 90% !important;
		margin: 0 10% !important;
	}
	
	.lineaa {
		width: 96% !important;
	
	}
	#principal {
		height: 1750px !important;
	}
	#science #imgs-tipe {
		width: 202px !important;
	}
	#science  p {
		font-size: 16px !important;
	}
	#movil-sience {
		display: block !important;
	}
	#movil-sience .dash-vision-content {
		margin-bottom: 40px !important;
	}
	#dvc-web {
		display: none;
	}
	#article_articles {
		margin-top: 0;
	}
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
	.panel-title {
		
	}
	.seccion_izquierda {
		margin-left: 0px !important;
		width: 100% !important;
		border: 0;
		margin-top: 0px !important;
	}
	.seccion_derecha {
		margin-left: 10px !important;
		height: initial !important;
		margin-top: 35px !important;
		width: 95% !important;
		margin-bottom: 20px;
		padding-left: 0px;
	}
	#linea3{
		display: none;
	}
	.article_tips {
		border-top: 0 !important;
	}
	#carousel-example-generic {
		margin-left: 0px;
	  width: 100% !important;
	  max-width: 465px;
	    margin: 0 auto;
	}
	.title p {
		font-size: 40px !important;
	}
	
}
@media ( max-width : 520px) {

	#science #imgs-tipe {
		width: 125px !important;
	}
	.carousel-titulo {
		margin-left: 20px !important;
		/*margin-left: 109px !important;*/
	}
	.carousel-carita {
		width: 85px !important;
		height: 85px !important;
	}
	.carousel-indicators {
		width: 60% !important;
		/*width: 35% !important;*/
	}
	#science p {
		
	}
	.carousel-contenido {
		margin-left: 20px;
		/*margin-left: 109px !important;*/
	}
	.dash-vision-content-mobile {
		height: 0 !important;
	}
	.mentr-ok-btn-large {
		
	}
	.seccion_izquierda {
		width: 100% !important;
		padding-left: 0px;
		margin-top: 0px !important;
	}
	#btn_got_it {
		width: 90% !important;
		margin: 0.2em 0;
	}
	.title {
		height: 65px;
		padding-top: 20px;
	}
	.panel-title {
		font-size: 40px;
		margin-top: -20px;
	}
	.title p {
		font-size: 40px;
		margin-top: -22px;
	}
}

@media ( max-width : 380px) {
.col-xs-8 {
  width: 62.666667%;
}
}

@media ( max-width : 370px) {
	.carousel-texto {
		left: 10%;
	}
	.btn_got_itt {
		margin-left: 10px !important;
	}
	.seccion_derecha {
		padding-left: 0;
	}
	.seccion_izquierda {
		margin-top: 0px !important;
	}
	#carousel-example-generic h4 {
		font-size: 16px;
	}
	.carousel-contenido {
		width: 100%;
		margin-left: 20px;
		/*margin-left: 100px !important;*/
		/*width: 128px;*/
	}
	.carousel-titulo {
		margin-left: 20px !important;
		/*margin-left: 100px !important;*/
	}
	.carousel-carita {
		width: 70px !important;
		height: 70px !important;
	}
	.carousel-indicators {
		width: 65% !important;
	}

	.carousel-inner {
		margin-left: 0px;
	}
	.dash-vision-content-mobile p {
		height: 21% !important;
	}
	.dash-vision-content-mobile {
		margin-left: 0;
		position: absolute;
		top: 2625px;
		width: 95% !important;
		top: 2625px;
	}
	.dash-vision-content-mobile h4 {
		font-size: 14px !important;
	}
	.seccion_izquierda {
		width: 95% !important;
		padding-left: 0px;
	}
	.seccion_derecha {
		margin-bottom: 0px;
	}
	#btn_got_it {
		height: 85px !important;
	}
}

#dash_content #menu-content {
	background-color: #e6e6e6;
	width: 225px;
	height: 191%;
	float: left;
}

@media ( max-width : 350px) {
	.col-xs-8 {
	  width: 61.666667%;
	}
}
</style>
<script>
// $(window).load(function(){
// var div_alto = $("#info_content").height();
// 	$("#menu-content").css('height',div_alto);

// });
</script>
<div id="menuUserDashboard2">
	<div class="option"
		onclick="window.location.href='<?php echo $this->webroot;?>career_program/dashboard'"
		style="cursor: pointer;">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option  active">
		Mentoring
		<div></div>
	</div>
</div>


<div style="height: 1551px; background-color: #f7f7f7;" id="principal">

	<div class="contenedor_secciones" id="course-content"
		style="margin-left: 35px;">
		<section class="seccion_izquierda video"
				style="width: 570px; margin-left: 0px;">
				<div id="" style="">
					<div id="header2" style="max-height: 320px;">
						<img alt=""
							src="<?php echo $this->webroot;?>img/dashboard/shutterstock_134305943.png"
							style="width: 100%; opacity: 0;">
						<div class="title">
							<p><?php echo __('Find a mentor',true);?></p>
						</div>
					</div>
					<div id="container-text">

						<h4>What is mentoring?</h4>
						<p>Defined as trusted guide or counsellor, the idea of a mentor dates back to Ancient Greece where an older, experienced adult would help a younger person learn how to navigate the world. As a concept, mentoring has proved invaluable in many organizations. The focus of the relationship is on using the personal knowledge and in-depth experience of the mentor to develop their “protégé” in a particular area. Although this can apply to all areas of life, at MENTOR. we consider it from a specifically career-related perspective. <br><br>
The reason people become mentors is not for personal gain, but to share their experience and genuinely have an impact on someone’s life; they know they’re probably where they are today because someone took the time to help them in the early days. It’s a relationship that is about developing self-esteem and work identity as well as learning, making it a valuable addition to other forms of development support, coaching and training. <br><br>
Typically the mentor and their protégé meet at designated times and places to discuss issues, make plans and review results. This may be a formal or informal procedure depending on the people involved, however, each session must have a purpose. The relationship may focus on one particular issue over a short period of time or a number of issues over several years. Either way, it is a powerful means to longer-term personal development in a business environment.
.</p>
						<br>
						<h4>What is the difference between a coach and a mentor?</h4>
						<p>A mentor and a coach differ in a number of ways. A mentor is generally a senior-level manager from within the same industry as you, and therefore able to provide relevant guidance on development opportunities, career paths and leadership strategies. The mentor is generally not paid for their services and the main concern is the long-term development of implicit, intuitive subjects and behaviors. Although the agenda and direction is set by the mentee, there is mutual respect on both sides and both participate in sharing and reflection. <br><br>
A coach, on the other hand, is specifically focused on learning and development related to explicit tasks or short-term needs. Contracted and paid for a fixed period with specific goals in mind, it is the coach that sets the agenda, observing your performance, analyzing your skills, behavior and attitude, and providing you with an unbiased, outside perspective to help you improve your efficiency and effectiveness.</p>
						<br>
						<h4>Who are the mentors?</h4>
						<p>All our mentors are carefully screened and selected according to their experience and achievements. They are professionals with at least seven years of industry specific experience, who live and work in the US. Mentors are assigned according to your personal profile and the state you live in, and are carefully matched to reflect the particular challenges you are facing and your career of interest.</p>
						<br>
						<h4>How can it help me?</h4>
						<p>Mentoring has been empirically proven to assist in three overarching functions: career-related support, psychosocial support and role modeling. A mentor not only shares their experience, but also serves as an ally who can help you overcome any number of career-related hurdles. They have already walked the path you have chosen and can help you open doors along the way—doors that might otherwise stay closed. A mentor can help you clarify your career aspirations and work out what actions are required to achieve your goals. This kind of guidance and advice not only improves self-confidence but leads to greater career satisfaction and an increased likelihood of success—benefits that last a lifetime.</p>

						<div style="left: -10px; margin-top: 28px; text-align: center;">
							<!-- <div id="btn_gif">+80</div> -->
							<button id="btn_got_it" class="mentr-ok-btn-large" type="button"
								style="width: 305px; height: 60px; font-size: 16px; border-radius: 6px; line-height: 40px; font-weight: 600;"
								onclick="window.location.href='<?php echo $this->webroot;?>career_program/form'">APPLY
								TO BECOME A PROTÉGÉ</button>
						</div>


						<div class="dash-vision-content" id="dvc-web"
							style="margin-bottom: 60px; height: 500px; margin-top: 57px;">
							<div class=" col-xs-4 col-md-3"
								style="height: 100%; background-image: url(../webroot/img/science.png);"
								id="imgs-tipe"></div>
							<div id="science">
								<div>
									<h4 style="font-weight: 600; font-size: 20px;">The Science Behind It</h4>
					<p
						style="font-size: 16px; color: #666666; font-family: lato; font-weight: 300;">Research shows that mentoring can have a positive and significant impact on your career. A 2004 study published in the Journal of Applied Psychology<sup>1</sup> found that when it comes to promotion, compensation and career satisfaction, individuals who had been mentored reported greater career outcomes than those who had not. A Harvard Business Review survey<sup>2</sup> also supports these findings. Of 1,250 top executives interviewed, those who had been mentored or sponsored reported higher income, a better education, a quicker path to achievement, and more job satisfaction than those who had not. <br> <br>
						<sup>1</sup> “Career Benefits Associated With Mentoring for Protégés: A Meta-Analysis”. Journal of Applied Psychology 2004, Vol. 89, No. 1, 127–136. <br>
						<sup>2</sup> Roche, Gerard R. (January–February 1979). "Much Ado about Mentors". Harvard Business Review 57: 14–28.</p>
								</div>

								<div style="clear: both;"></div>
							</div>
							<div style="clear: both;"></div>
						</div>

					</div>






				</div>
		</section>
		<section class="seccion_derecha" style="height: 1551px;">
			<article class="article_tips">
				<big> <label class="titulo titulo_izquierda"
					style="padding-left: 20px;">Make it work</label>
				</big>
				<div class="caja_module">
					<table>
						<tr>
							<td style="padding-left: 20px; vertical-align: top;"><img
								src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
							<td>Put thought, time and effort into building the mentoring relationship</td>
						</tr>

						<tr>
							<td style="padding-left: 20px; vertical-align: top;"><img
								src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
							<td>Notify your mentor and the mentor match team of any change in contact details</td>
						</tr>

						<tr>
							<td style="padding-left: 20px; vertical-align: top;"><img
								src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
							<td>Check email regularly and reply promptly to your mentor’s emails, even if you are busy</td>
						</tr>

						<tr>
							<td style="padding-left: 20px; vertical-align: top;"><img
								src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
							<td>Let your mentor and the mentor match team know if you are unable to continue or wish to end the relationship</td>
						</tr>

					</table>
				</div>
				<div
					style="width: 80%; height: 2px; text-align: center; background-color: #d0d0d0;"
					class="lineaa"></div>
				<div style="left: -10px; margin-top: 35px; text-align: center;">
					<!-- <div id="btn_gif">+80</div> -->
					<button id="btn_got_it" class="mentr-ok-btn-large btn_got_itt"
						type="button"
						style="width: 305px; height: 60px; font-size: 16px; border-radius: 6px; line-height: 40px; font-weight: 600;"
						onclick="window.location.href='<?php echo $this->webroot;?>career_program/form'">APPLY
						TO BECOME A PROTÉGÉ</button>
				</div>

			</article>
			<div style="width: 80%; height: 2px; background-color: #d0d0d0; margin-top: 40px;" class="lineaa"></div>
			<div style="clear: both;"></div>

			<div id="carousel-example-generic"
				style="width: 370px; height: 280px; padding-top: 30px;"
				class="carousel slide" data-ride="carousel">
				<!-- Indicators -->

				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0"
						class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<!-- <li data-target="#carousel-example-generic" data-slide-to="3"></li> -->
				</ol>
		
		
		
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-texto">
							<h4>Meet some of our mentors</h4>
						</div>
						<div class="interno"></div>
						<div class="carousel-titulo">
							Edward Harris<br>
							<p style="font-size: 20px;">Data Scientist</p>
						</div>
						<div class="carousel-contenido">“Don’t worry if you make mistakes. Striving to avoid mistakes is the main enemy of growth and evolution”</div>
						<!-- <div class="carousel-carita"></div> -->
					</div>
					<div class="item">
						<div class="carousel-texto">
							<h4>Meet some of our mentors</h4>
						</div>
						<div class="interno"></div>
						<div class="carousel-titulo">
							Laura Martinez <br>
							<p style="font-size: 20px;">Event Planner</p>
						</div>
						<div class="carousel-contenido">“Society tends to put constraints on people´s minds but really you can do whatever you want to do”</div>
						<!-- <div class="carousel-carita"></div> -->
					</div>
					<div class="item">
						<div class="carousel-texto">
							<h4>Meet some of our mentors</h4>
						</div>
						<div class="interno"></div>
						<div class="carousel-titulo">
							Jeff Miller <br>
							<p style="font-size: 20px;">Executive Director</p>
						</div>
						<div class="carousel-contenido">“Don’t be afraid of risk, you can do anything if you believe in it and you have the right strategy ”</div>
						<!-- <div class="carousel-carita"></div> -->
					</div>
					<!-- <div class="item">
						<div class="carousel-texto">
							<h4>Meet some of our mentors</h4>
						</div>
						<div class="interno"></div>
						<div class="carousel-titulo">
							Leo Messi <br>
							<p style="font-size: 20px;">Football Player</p>
						</div>
						<div class="carousel-contenido">“Do what you gotta do so that when
							you get to do what you wanna do, you are able to.”</div>
						<div class="carousel-carita"></div>
					</div> -->
				</div>

			</div>
				<div
					style="width: 80%; height: 2px; text-align: center; background-color: #d0d0d0;"
					class="lineaa" id="linea3"></div>
		</section>

	<div class="seccion_izquierda" style="display: none;" id="movil-sience">
		<div id="science" class="dash-vision-content"
			style="height: 440px; margin-top: 35px;">
			<div class=" col-xs-4 col-md-3"
				style="height: 100%; background-image: url(../webroot/img/science.png);"
				id="imgs-tipe"></div>
			<div>
				<div>
					<h4 style="font-weight: 600; font-size: 20px;">The Science Behind It</h4>
					<p
						style="font-size: 16px; color: #666666; font-family: lato; font-weight: 300;">Research shows that mentoring can have a positive and significant impact on your career. A 2004 study published in the Journal of Applied Psychology<sup>1</sup> found that when it comes to promotion, compensation and career satisfaction, individuals who had been mentored reported greater career outcomes than those who had not. A 1979 Harvard Business Review survey<sup>2</sup> alsosupports these findings. Of 1,250 top executives interviewed, those who had been mentored or sponsored reported higher income, a better education, a quicker path to achievement, and more job satisfaction than those who had not. <br> <br>
						<sup>1</sup> “Career Benefits Associated With Mentoring for Protégés: A Meta-Analysis”. Journal of Applied Psychology 2004, Vol. 89, No. 1, 127–136. <br>
						<sup>2</sup> Roche, Gerard R. (January–February 1979). "Much Ado about Mentors". Harvard Business Review 57: 14–28.</p>
				</div>

				<div style="clear: both;"></div>
			</div>
			<div style="clear: both;"></div>
		</div>



		<div class="science3">
			<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 40px;">
				<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
				<div class=" col-xs-8 col-md-9 science_text">
					<div style="display: table-cell; vertical-align: middle;">
						<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
						<p style="font-size: 18px; font-weight: 300; text-align:justify;">Research shows that mentoring can have a positive and significant impact on your career. A 2004 study published in the Journal of Applied Psychology<sup>1</sup> found that when it comes to promotion, compensation and career satisfaction, individuals who had been mentored reported greater career outcomes than those who had not. A 1979 Harvard Business Review survey<sup>2</sup> alsosupports these findings. Of 1,250 top executives interviewed, those who had been mentored or sponsored reported higher income, a better education, a quicker path to achievement, and more job satisfaction than those who had not. <br> <br>
						<sup>1</sup> “Career Benefits Associated With Mentoring for Protégés: A Meta-Analysis”. Journal of Applied Psychology 2004, Vol. 89, No. 1, 127–136. <br>
						<sup>2</sup> Roche, Gerard R. (January–February 1979). "Much Ado about Mentors". Harvard Business Review 57: 14–28.</p>
					</div>
					
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>

	</div>

</div>

</div>

</div>




<script>

	var click = 0;

	$('#btn_got_it').on('click',function(){
		click++;
		if(click<=1){
			$('#btn_gif').css("display","block");
		}else{
			$('#btn_gif').css("display","none");
		}
	});

$('#btn1').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
	$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
	$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
	$('#comentario').css("display", "block");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "588px");
	}
});
$('#btn2').on('click',function(){
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn2').css("background-image", "url("+WEBROOT+"img/N1.png)");
	$('#comentario').css("display", "none");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "328px");
	}
});
$('#btn3').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/N2.png)");
	$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
	$('#comentario').css("display", "block");
	if(document.body.clientWidth<750){
		$('#article_articles').css("margin-top", "588px");
	}
});
</script>



