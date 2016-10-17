<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 5,
		TAG: 'vision_intro'
	}
})

</script>

<style>

#container-text > p > a{
	color:black;
	text-decoration: underline;
}

.p_science{
	font-size: 16px !important; 
	text-align:justify !important; 
	font-weight: 300 !important;
}

#myModal{
	background-color: rgba(0,0,0,0.7);
}

#container-text p {
	font-size: 16px;
}

#firstModal {
	width: 330px;
	height: 420px;
	color:black;
	margin-top: 25vh;
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
  padding-bottom: 50px;
}

.closemodal {
	background-image: url('<?php echo $this->webroot;?>img/Close.png');
	width: 32px;
  height: 32px;
  margin-top: -5px;
  margin-left: 270px;
}


#header2 {
  background-image: url('<?php echo $this->webroot; ?>img/career_statement.png');
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
}

.article_tips{
	  margin-bottom: 5px;
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
	text-align: center;margin-bottom: 40px;margin-top: 40px;
}
.science3{
		display: none;
	}
.science_text{
	display: table; min-height: 170px;
}


@media (max-width: 750px){

.p_science{
	font-size: 18px !important; 
	text-align:justify !important; 
	font-weight: 300 !important;
}
#container-text p {
	font-size: 18px;
}

.caja_module {
  margin-top: 0px;
}
.article_tips {
  margin-bottom: 5px !important;
}
.dash-vision-content {
  height:inherit !important;
}
	#firstModal {
		margin-left: 25%;
	}


	.comments {
		padding-left: 0 !important;
	}

	.science_text{
		margin-top: 0px;
	  width: 75%;
	  float: right;
	}

	.science_text p{
		line-height: 25px;
	}


	#mod_comments{
		border-top: none;
		padding-top: 0;
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

	.titulo {
	  font-size: 20px;
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
	.title p {
	  font-size: 34px;
	}
	#firstModal {
		margin-left: 20%;
	}
}

@media (max-width: 500px){
	#firstModal {
		margin-left: 15%;
	}
	.title p {
	   font-size: 25px;
  	padding-top: 18px;
	}
	.title{
		padding-left: 15px;
	}
}

@media (max-width: 467px){
	#firstModal {
		margin-left: 13%;
	}
	.science_text{
		margin-top: -170px;
	}
}

@media (max-width: 440px){
	#firstModal {
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
	#firstModal {
		margin-left: 0%;
	}
	.title p {
	  font-size: 21px;
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
				<?php echo __('The Career Vision Exercise Intro',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div>
				<div id="header2">
							<?php 
							if($user['premium'] == 0){ ?> <img style="margin:10px 0px 10px 8px;   position: absolute; top: 0;" src="<?php echo $this->webroot;?>img/tag_premium.png">
							<?php } ?>

						<img alt="" src="<?php echo $this->webroot;?>img/career_statement.png" style="width: 100%; opacity: 0;">


						<div class="title">
							<p><?php echo __('My Career Vision Statement',true);?></p>
						</div>
				</div>
				<div id="container-text">
					<p>
						When it comes to making career decisions, a little support goes a long way. Tests can ascertain aptitude, personality and preferences, and you can learn how to make better decisions, how to solve problems and build confidence. However, these are only one part of a more holistic process. To add true meaning to your future path and become the best you can be, you must have a deep understanding of yourself and your purpose in life. A career vision based on that purpose creates a clear sense of direction and allows you to really take control of your future. <br><br>
A career vision statement is a short paragraph that sums up how you foresee your future life. It defines your hierarchy of personal preferences, your inspiration and your purpose—what you decide to dedicate your life to. It differs from your mission statement in that it deals with your optimal desired future state. Your mission statement provides the concrete next steps for how you plan to get there. <br><br>
Everybody has a purpose, and often more than one. It’s not only down to fate or genetics, and it’s rarely something discovered in a flash of inspiration. It’s a matter of self-reflection and discovering what is most important, and most relevant, to you. Seek out all the possibilities and when you find the one that fits, you’ll have a powerful tool in your career toolkit: a path to success and a reason to say no to any distractions you encounter along the way.<br><br>
Your career vision is something decided by you, and you alone; worrying about what other people think is one of the biggest roadblocks to defining it. And while it may seem like everyone around you has it all worked out, trust us, they probably don’t. Be one of the few who do. Take on this quest and make a conscious decision to seize control of your future.<br><br>
For best results, we recommend first completing the <a href="<?php echo $this->webroot;?>career_program/p3_intro">Pyramid of Personal Preferences</a>, the <a href="<?php echo $this->webroot;?>career_program/obituary_intro">Obituary Quest</a> and the <a href="<?php echo $this->webroot;?>career_program/values_intro">Personal Values Assessment</a> in order to gain a deeper understanding of yourself and what you want out of life.

					</p>	

					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large" type="button">TAKE UP THE QUEST</button>
					</div>
</div>
</div>
					<div class="science2">
						<div class="dash-vision-content" style="width: 100%; margin-top: 2px; margin-bottom: 60px;">
							<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
							<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
								<div style="display: table-cell; vertical-align: middle;">
									<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 5px; margin-bottom: 21px;">The Science Behind It</h4>
									<p class="p_science">
										Research shows that for both companies and people, having a consistent vision is the single most predictive variable in success. As Stanford professors James C. Collins and Stanford Jerry I. Porras explain in the <a href="https://hbr.org/1996/09/building-your-companys-vision/ar/1" target="_blank">Harvard Business Review</a>, "a core purpose statement for an organization is essentially its reason for existence. Companies that enjoy enduring success have core values and a core purpose that remain fixed while their business strategies and practices endlessly adapt to a changing world." This idea is also reflected by management expert Stephen R. Covey in his 1989 book The 7 Habits of Highly Successful People. Here he suggests individuals create their own mission statement as part of Habit No. 2: Begin with the end in mind.
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
									Set aside a minimum 20 minutes for this quest
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Approach it with an open mind
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Find a quiet place, away from distractions and interruptions
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Your vision should come from you, not from those around you
								</td>
							</tr>
						</table>
					</div>
			</article>	
			<article class="article_tips">
					<big>
						<label class="titulo titulo_izquierda">Examples of career vision statements</label>
					</big>
					<div class="caja_module">
						<table id="examples">
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="1" title="Oprah Winfrey" subtitle="Founder of the Oprah Winfrey Network " content="To be a teacher. And to be known for inspiring my students to be more than they thought they could be" class="link_obituaries btn_modal">Oprah Winfrey</a><br>Founder of the Oprah Winfrey Network
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="2" title="Amanda Steinberg" subtitle="Founder of Dailyworth.com" content="To use my gifts of intelligence, charisma, and serial optimism to cultivate the self-worth and net-worth of women around the world" class="link_obituaries btn_modal">Amanda Steinberg</a><br>Founder of Dailyworth.com
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="3" title="Denise Morrison" subtitle="CEO of the Campbell Soup Company" content="To serve as a leader, live a balanced life, and apply ethical principles to make a significant difference." class="link_obituaries btn_modal">Denise Morrison</a><br>CEO of the Campbell Soup Company
								</td>
							</tr>
						</table>
					</div>
			</article>	

			<?php echo $this->element('article_list');?>

			<div class="science3">
				<div class="dash-vision-content" style="margin-bottom: 40px;float: left;">
					<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
					<div class=" col-xs-8 col-md-9 science_text">
						<div style="display: table-cell; vertical-align: middle;">
							<h4 style="color:black;   color: black; font-size: 18px; font-weight: bold; margin-top: 5px; margin-bottom: 21px;">The Science Behind It</h4>
							<p class="p_science">
								Research shows that for both companies and people, having a consistent vision is the single most predictive variable in success. As Stanford professors James C. Collins and Stanford Jerry I. Porras explain in the Harvard Business Review, "a core purpose statement for an organization is essentially its reason for existence. Companies that enjoy enduring success have core values and a core purpose that remain fixed while their business strategies and practices endlessly adapt to a changing world." This idea is also reflected by management expert Stephen R. Covey in his 1989 book The 7 Habits of Highly Successful People. Here he suggests individuals create their own mission statement as part of Habit No. 2: Begin with the end in mind.
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
  <div class="modal-dialog" id="firstModal">
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

			<?php echo $this->element('modal_premium');?>


<script>
	var premium = '<?php echo $user["premium"];?>';
	// var premium = 1;
	
		$('.btn_modal').on('click',function(){
			$('#modaltitle').html($(this).attr('title'));
			$('#modalsubtitle').html($(this).attr('subtitle'));
			$('#modalcontent').html($(this).attr('content'));
		});

		$('#btn_take_up').on('click',function(){
			if(premium == 0){
				$('#premium').click();
			}
			else{
				// mixpanel.identify(ID_USUARIO);
				// mixpanel.track("take up quest in statement intro page");
				setTimeout(function(){
					window.location.href=WEBROOT+'career_program/vision';
				},1000);
			}
		});
</script>



