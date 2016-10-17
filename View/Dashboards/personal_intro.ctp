<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: "null",
		ID: "null",
		LIMIT: 5,
		TAG: 'values_intro'
	}
});

</script>

<style>
/*#myModal {
	background-color: rgba(0, 0, 0, 0.7);
}

.modal-dialog {
	width: 330px;
	height: 420px;
	color: black;
	margin-top: 25vh;
}

.modal-content {
	height: 420px;
}

.modal-title {
	font-size: 20px;
	font-weight: 600;
}

.modal-subtitle {
	font-size: 18px;
	font-weight: 300;
}

.modal-body {
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
}*/

#header2 {
	background-image: url('<?php echo $this->webroot;?>img/dashboard/eli.jpg');
	max-width: 770px;
	max-height: 340px;
	position: relative;
	background-size: cover;
}

}
.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

.article_tips {
	margin-bottom: 25px;
}

#btn_take_up {
	width: 370px;
	height: 60px;
	font-size: 16px;
	font-weight: 400;
}

.link_obituaries {
	cursor: pointer;
	color: black;
	text-decoration: underline;
}

.comments {
	border-top: solid 2px #d0d0d0;
}

.take_up_btn {
	text-align: center;
	margin-bottom: 35px;
	margin-top: 35px;
}

.science3 {
	display: none;
}

.science_text {
	display: table;
	min-height: 170px;
}

@media ( max-width : 750px) {
	.seccion_derecha{
		margin-bottom: -30px !important;
	}
	.article_tips {
  	border-top: none !important; 
	}
	.dash-vision-content {
		padding-top: 30px;
		margin-bottom: 60px !important;
	}
	.take_up_btn {
		margin-top: 45px;
	}
	#container-text p {
		font-size: 16px;
	}
/*	.modal-dialog {
		margin-left: 25%;
	}*/
	.comments {
		padding-left: 0 !important;
	}
	.science_text {
		width: 75%;
		float: right;
	}
	.science_text p {
		line-height: 25px;
	}
	#mod_comments {
		border-top: none;
		padding-top: 0;
	}
	#comments_abj {
		border-top: none;
		margin-top: -25px;
	}
	.seccion_izquierda {
		border-bottom: solid 2px #d0d0d0;
	}
	tr>td {
		font-size: 18px !important;
	}
	.science2 {
		display: none;
	}
	.science3 {
		display: block;
	}
	#header2 {
		height: 60vw;
	}
	.titulo {
		font-size: 20px;
	}
	#article_articles {
		float: inherit !important;
		/*margin-top: 328px;*/
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
}

@media ( max-width : 600px) {
/*	.modal-dialog {
		margin-left: 20%;
	}*/
}

@media ( max-width : 500px) {
/*	.modal-dialog {
		margin-left: 15%;
	}*/
	.title p {
		font-size: 28px;
		padding-top: 14px;
	}
	.title {
		padding-left: 15px;
	}
}

@media ( max-width : 467px) {
/*	.modal-dialog {
		margin-left: 13%;
	}*/
	.science_text {
		margin-top: -170px;
	}
}

@media ( max-width : 440px) {
/*	.modal-dialog {
		margin-left: 9%;
	}*/
	.take_up_btn {
		text-align: center;
		margin-left: -7px;
	}
	#btn_take_up {
		width: 97%;
	}
}

@media ( max-width : 380px) {
/*	.modal-dialog {
		margin-left: 0%;
	}*/
}
</style>

<div style="min-height: 1350px; background-color: #f7f7f7;">
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
					href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My career vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('My Personal Values',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div>
				<div id="header2" style="background-image: url('<?php echo $this->webroot;?>img/by Eli DeFaria.png');">
					<?php if($user['premium'] == 0){ ?>
					<img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
					<?php } ?>
					<img alt=""
						src="<?php echo $this->webroot;?>img/dashboard/eli.jpg"
						style="width: 100%; opacity: 0;">
					<div class="title">
						<p><?php echo __('My Personal Values',true);?></p>
					</div>
				</div>
				<div id="container-text">
					<p>
						Your personal values are a guiding light in your life. They are the criteria by which you judge people, things and events. They help you know how to behave, to understand what you want to achieve, and to decide what is good, useful, beneficial, desirable or beautiful. As the name indicates, they are also highly personal and vary greatly from one person to another. Although they are influenced by outside factors such as culture and society, they are, at their core, an individual choice. <br /><br />
						Because your personal values are so key in shaping and motivating your attitudes, behavior and thoughts, it is important to understand them. Living and working in a way that conflicts with them is a major roadblock to happiness and success, and causes tension and confusion. Identifying and acknowledging your personal values helps you think honestly about your life goals. It allows you to seek a way to achieve them that fits with who you are. This leads to progress in all aspects of life: work, home, friendship, community, mind and body.<br /><br />
						Research shows that our personal values remain pretty stable over our life time. However, as this 
						<a style="color:black; text-decoration:underline;" href="https://web.archive.org/web/20150113155248/http:/www.wjh.harvard.edu/~dtg/Quoidbach et al 2013.pdf" target="_blank">Harvard Study by Daniel Gilbert</a> points out, they can and do change, and as people we are not terribly good at predicting how much; a tendency that is more acute in youth. This means although they are a good indicator of our future values, they should also be reviewed regularly to account for any shift in priorities.<br /><br />
						The purpose of this quest is to help you identify the unique personal values that serve as guiding principles in your life. This isn´t about what you think other people might value, or even what they value about you–this is about what you think about yourself
					</p>

					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large" type="button">TAKE
							UP THE QUEST</button>
					</div>
				</div>
			</div>
			<!-- .......................................................... -->


			<div class="science2">
				<div class="dash-vision-content"
					style="width: 100%; margin-top: 2px; margin-bottom: 30px;">
					<div class=" col-xs-4 col-md-3"
						style="max-height: 200px; background-image: url(../webroot/img/science.png);"
						id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9"
						style="display: table; min-height: 170px;">
						<div style="display: table-cell; vertical-align: middle;">
							<h4
								style="color: black; color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The
								Science Behind It</h4>
							<p style="font-size: 16px; font-weight: 300;">
									A <a href="http://pubs.acs.org/doi/abs/10.1021/ed066p659">Harvard University study</a> carried out over a 15-year period by educational psychologist William G. Perry demonstrated that personal values are a main conditioner for college students choosing a career path. However, although research shows them to stay relatively stable, this <a href="https://web.archive.org/web/20150113155248/http:/www.wjh.harvard.edu/~dtg/Quoidbach et al 2013.pdf" target="_blank">Harvard Study by Daniel Gilbert</a> indicates that personal values do change more than we predict over the course of a lifetime, and should therefore be reviewed on a regular basis.
							</p>
						</div>

						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
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
							<td>Put aside at least 20 minutes of quiet time with no interruptions</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
							<td>Don’t overthink it</td>
						</tr>

						<tr>
							<td style="padding: 0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
							<td>Put aside your first draft and come back to it a few days later</td>
						</tr>
					</table>
				</div>
				<div>
					<?php echo $this->element('article_list');?>
				</div>
			</article>
			

		

			<div class="science3">
				<div class="dash-vision-content"
					style="width: 100%; margin-top: 2px; margin-bottom: 40px;">
					<div class=" col-xs-4 col-md-3"
						style="max-height: 200px; background-image: url(../webroot/img/science.png);"
						id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9 science_text">
						<div style="display: table-cell; vertical-align: middle;">
							<h4
								style="color: black; color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The
								Science Behind It</h4>
							<p style="font-size: 16px; font-weight: 300;">
							A <a href="http://pubs.acs.org/doi/abs/10.1021/ed066p659">Harvard University study</a> carried out over a 15-year period by educational psychologist William G. Perry demonstrated that personal values are a main conditioner for college students choosing a career path. However, although research shows them to stay relatively stable, this <a href="https://web.archive.org/web/20150113155248/http:/www.wjh.harvard.edu/~dtg/Quoidbach et al 2013.pdf" target="_blank">Harvard Study by Daniel Gilbert</a> indicates that personal values do change more than we predict over the course of a lifetime, and should therefore be reviewed on a regular basis.
							</p>
						</div>

						<div style="clear: both;"></div>
					</div>
					<div style="clear: both;"></div>
				</div>
			</div>

		</section>

		<div style="clear: both;"></div>
	</div>
</div>

<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<div type="button" class="closemodal" data-dismiss="modal"
					aria-label="Close"></div>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<span class="modal-title" id="modaltitle"></span><br> <span
					class="modal-subtitle" id="modalsubtitle"></span>
			</div>
			<div id="modalcontent" class="modal-body"></div>
		</div>
	</div>
</div> -->
<?php echo $this->element('modal_premium');?>
<script>
	var premium = '<?php echo $user["premium"];?>';
// var premium = 1;
	// $('.btn_modal').on('click',function(){
	// 	$('#modaltitle').html($(this).attr('title'));
	// 	$('#modalsubtitle').html($(this).attr('subtitle'));
	// 	$('#modalcontent').html($(this).attr('content'));
	// });

	$('#btn_take_up').on('click',function(){
		if(premium == 0){
			$('#premium').click();
		}
		else{

		var track = "take up quest in values intro page";
		$.ajax({
			url: WEBROOT+'dashboards/Mixpanelajax/'+track,
			type: 'post',
			success: function(){
				window.location.href=WEBROOT+'career_program/values';
			}
		})
		}
	});


</script>



