<style>

.contenedor_personas {
  margin-top: -10px;
}

#myModal{
	background-color: rgba(0,0,0,0.7);
}

.modal-dialog {
	width: 330px;
	height: 420px;
	color:black;
	margin-top: 25vh;
}
.modal-content {
	height: 420px;
}

.modal-title{
	font-size: 20px;
	font-weight: 600;
}

.modal-subtitle{
	font-size: 18px;
	font-weight: 300;
}

.modal-body{
	font-size: 16px;
	font-weight: 300;
	text-align: justify;
}

.closemodal {
	background-image: url('<?php echo $this->webroot;?>img/Close.png');
	width: 32px;
  height: 32px;
  margin-top: -5px;
  margin-left: 270px;
}

#header2 {
	background-image: url('<?php echo $this->webroot;?>img/obituary.png');
}
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
}

.article_tips{
	  margin-bottom: 25px;
}

#btn_take_up{
	width: 370px;
	height: 60px;
	font-size: 16px;
	font-weight: 400;
}

.link_obituaries{
	cursor: pointer;
  color: black;
  text-decoration: underline;
}

.comments{
	  border-top: solid 2px #d0d0d0;
}

.take_up_btn{
	text-align: center;margin-bottom: 35px;margin-top: 35px;
}
.science3{
		display: none;
	}
.science_text{
	display: table; min-height: 170px;
}


@media (max-width: 750px){

	.dash-vision-content {
		padding-top: 30px;
		margin-bottom: 60px !important;
	}

	.take_up_btn {
	  margin-top: 45px;
	}

	#container-text p {
	  font-size: 18px;
	}

	.modal-dialog {
		margin-left: 25%;
	}

	.comments {
		padding-left: 0 !important;
	}

	.science_text{
	  width: 75%;
	  float: right;
	}

	.science_text p{
		line-height: 25px;
	}


	#mod_comments{
		border-top: none;
		padding-top: 5px;
	}
	#comments_abj{
		border-top: none;
		  margin-top: -25px;
	}

	tr > td {
	  font-size: 18px !important;
	}
	.science2{
		display: none;
	}
	.science3{
		display: block;
	}

	#header2{
		  height: 60vw;
	}

	#article_articles {
	    margin-top: 328px;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	.send_btn{
		position:absolute !important;
		right: 5px;bottom:0px;
	}
	#comentario textarea{
		top: 78px !important;
  	width: 88% !important;
	}
}

@media (max-width: 600px){
	.modal-dialog {
		margin-left: 20%;
	}
}


@media (max-width: 500px){
	.modal-dialog {
		margin-left: 15%;
	}
	.title p {
	  font-size: 28px;
	  padding-top: 14px;
	}
	.title{
		padding-left: 15px;
	}
}

@media (max-width: 467px){
	.modal-dialog {
		margin-left: 13%;
	}
	.science_text{
		margin-top: -170px;
	}
}

@media (max-width: 440px){
	.modal-dialog {
		margin-left: 9%;
	}
	.take_up_btn{
		text-align: center;margin-left: -7px;
	}
	#btn_take_up{
		width: 97%;
	}
}

@media (max-width: 380px){
	.modal-dialog {
		margin-left: 0%;
	}
}

</style>

<div style="min-height: 1700px;  background-color: #f7f7f7;">
	<div>		
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My Career Vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('The Obituary Exercise Intro',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div>
				<div id="header2">
					<img alt="" src="<?php echo $this->webroot;?>img/bubble.png" style="width: 100%; opacity: 0;">
					<div class="title">
						<p><?php echo __('360° Feedback',true);?></p>
					</div>
				</div>
				<div id="container-text">
					<p>
						Although it may seem a little morbid, the practice of writing your own obituary is an illuminating exercise when it comes to understanding your purpose and direction in life. An anecdote about Alfred Nobel tells how his obituary, published in error when his brother died, was entitled: “The Merchant of Death is Dead”. Alfred, who at the time was best known for inventing dynamite, was shocked at how the world would remember him. That sneak preview of his obituary inspired him to establish the Nobel Foundation and its celebrated Peace Prizes, which became his legacy instead. 
						<br><br>

						Imagining how you will be remembered serves as an excellent wake-up call for how you want to live your life, and to stop wasting valuable time. It makes you take a long, hard look at yourself, asking “why am I here?” and “where am I going?” You may find that, like Alfred Nobel, you aren’t too keen on the answers. From leaving a job you hate to getting out of a relationship that has long since gone sour, the change it inspires could be the path to finding your life’s purpose.  
					</p>	

					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large" type="button">TAKE UP THE QUEST</button>
					</div>
</div>
</div>
					<!-- .......................................................... -->		
					<div id="comments_izq" class="comments">
						<div>
							<label class="titulo">
								<b style="padding-left: 20px;">
									What members say about this module
								</b>
							</label>
						</div>

							<div class="contenedor_personas">
								<div class="people-sayContent" style="display:table-cell;">
									<div id="people-img" style="background-image: url('../webroot/img/dashboard/kimberly-collins-web.jpg');width: 170px;height: 170px;margin-top: 45px;margin-bottom: 30px;">			
									</div>
									<div id="people-coment">
										<div id="people-header">
											<label id="name" class="titulo">
												Kimberly Collins
											</label>
											<br>
											<span id="job">
											</span>
										</div>
										<div id="comment">
											<p >
											I was a bit skeptical when I initially read this exercise because I thought it would create more anxiety about what I have not accomplished yet. But instead it made me excited about what´s to come.
											</p>
										</div>
									</div>
								</div>		

								<div class="people-sayContent" style="display:table-cell;width:30px;"></div>

								<div class="people-sayContent" style="display:table-cell;">
									<div id="people-img" style="background-image: url('../webroot/img/dashboard/anthony-chapman-web.jpg');width: 170px;height: 170px;margin-top:40px;margin-bottom: 30px;">			
									</div>
									<div id="people-coment">
										<div id="people-header">
											<label id="name" class="titulo">
												Anthony	Chapman
											</label>
											<br>
											<span id="job">
											</span>
										</div>
										<div id="comment">
											<p>
												Being forced to dig deep inside and find myself has been very rewarding
											</p>
										</div>
									</div>
								</div>
							</div>
						<div style="clear:both;"></div>
					</div>

					<div class="science2">
						<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 60px;">
							<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
							<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
								<div style="display: table-cell; vertical-align: middle;">
									<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
									<p style="font-size: 16px; font-weight: 300; text-align:justify;">
										The practice of writing one’s own obituary has been around for years. It used to be a common practice in journalism school before it also became popular in psychology seminars. Nowadays it is often used by professional personal coaches and mentors to assist their clients or protégés to identify a value-based vision for their lives. 
									</p>
								</div>
								
								<div style="clear:both;"></div>
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>

				
			
		</section>	
		<section class="seccion_derecha">
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
									Put aside at least 20 minutes of quiet time with no interruptions
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Don’t overthink it
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Put aside your first draft and come back to it a few days later 
								</td>
							</tr>
						</table>
					</div>
			</article>	
			<article class="article_tips" style="  border-bottom: solid 2px #d0d0d0;  padding-bottom: 25px;">
					<big>
						<label class="titulo titulo_izquierda">Examples of obituaries</label>
					</big>
					<div class="caja_module">
						<table>
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" href="http://www.nytimes.com/2015/07/14/business/satoru-iwata-nintendo-chief-executive-dies-at-55.html?ref=obituaries&_r=0" target="_blank" id="1" title="Satoru Iwata" class="link_obituaries btn_modal">Satoru Iwata</a><br>Nintendo Chief Executive
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" href="http://www.legacy.com/memorial-sites/2015/obituary.aspx?n=BB-King&pid=174865805&ua=JKt3UMHq%2bUsglf3zALnfRg%3d%3d" target="_blank" id="1" title="B.B. King" class="link_obituaries btn_modal">B.B. King</a><br>Influential Blues Musician
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" target="_blank" href="http://www.legacy.com/memorial-sites/2013/obituary.aspx?n=Nelson-Mandela&pid=168359315&ua=qof591r8lQUA27kuD2IDNA%3d%3d" id="1" title="Nelson Mandela" class="link_obituaries btn_modal">Nelson Mandela</a><br>Nobel Peace Prize Winner
								</td>
							</tr>
						</table>
					</div>
			</article>	

			<div id="comments_abj" class="comments">
				<div>
					<label id="mod_comments" class="titulo">
						<b style="padding-left: 20px;">
							What members say about this module
						</b>
					</label>
				</div>

					<div class="contenedor_personas">
						<div class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/kimberly-collins-web.jpg');width: 170px;height: 170px;margin-top: 45px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Kimberly Collins
									</label>
									<br>
									<span id="job">
									</span>
								</div>
								<div id="comment">
									<p >
									I was a bit skeptical when I initially read this exercise because I thought it would create more anxiety about what I have not accomplished yet. But instead it made me excited about what´s to come.
									</p>
								</div>
							</div>
						</div>		

						<div class="people-sayContent" style="display:table-cell;width:30px;"></div>

						<div id="segunda_persona" class="people-sayContent" style="display:table-cell;">
							<div id="people-img" style="background-image: url('../webroot/img/dashboard/anthony-chapman-web.jpg');width: 170px;height: 170px;margin-top:40px;margin-bottom: 30px;">			
							</div>
							<div id="people-coment">
								<div id="people-header">
									<label id="name" class="titulo">
										Anthony	Chapman
									</label>
									<br>
									<span id="job">
									</span>
								</div>
								<div id="comment">
									<p>
										Being forced to dig deep inside and find myself has been very rewarding
									</p>
								</div>
							</div>
						</div>
					</div>

				<div style="clear:both;"></div>
			</div>

			<div class="science3">
				<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 40px;">
					<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9 science_text">
						<div style="display: table-cell; vertical-align: middle;">
							<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
							<p style="font-size: 18px; font-weight: 300; text-align:justify;">
								The practice of writing one’s own obituary has been around for years. It used to be a common practice in journalism school before it also became popular in psychology seminars. Nowadays it is often used by professional personal coaches and mentors to assist their clients or protégés to identify a value-based vision for their lives. 
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<div type="button" class="closemodal" data-dismiss="modal" aria-label="Close"></div>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <span class="modal-title" id="modaltitle"></span><br>
        <span class="modal-subtitle" id="modalsubtitle"></span>
      </div>
      <div id="modalcontent" class="modal-body"></div>
    </div>
  </div>
</div>

<script>

	$('.btn_modal').on('click',function(){
		$('#modaltitle').html($(this).attr('title'));
		$('#modalsubtitle').html($(this).attr('subtitle'));
		$('#modalcontent').html($(this).attr('content'));
	});

	$('#btn_take_up').on('click',function(){
		// mixpanel.identify(ID_USUARIO);
		// mixpanel.track("take up quest in obituary intro page");
		// setTimeout(function(){
			window.location.href=WEBROOT+'career_program/obituary';
		// },1000);
	});


</script>



