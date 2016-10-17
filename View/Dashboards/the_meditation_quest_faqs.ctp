<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'meditation_faq'
	}
})
</script>
<style>
#header2 {
	background-image:
		url('<?php echo $this->webroot;?>img/dashboard/By Dominik Martin.jpg');
	max-width: 770px;
	max-height: 340px;
	position: relative;
	background-size: cover;
	background-position: center;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}




.panel-heading a:after {
	font-family: 'Glyphicons Halflings';
	content: "\e113";  
	position: absolute;
  right: 10px;
	color: grey;
}

.panel-heading a.collapsed:after {
	content: "\e114";
}

.panel-group .panel-heading+.panel-collapse>.panel-body, .panel-group .panel-heading+.panel-collapse>.list-group
	{
	border-top: 0px solid #ddd;
}

.panel-body {
	background-color: #ddd;
}

.panel-default>.panel-heading {
	background-color: #ddd;
}

#accordion {
	padding-top: 25px;
}

.panel-heading {
	height: 60px !important;
}

.panel-title {
	margin-top: 10px !important;
	font-weight: 500;
	font-size: 20px;
}

.panel-body {
	margin-top: -12px;
}
.panel-group{
	color: black;
}
.panel-group .panel {
	margin-bottom: 21px;
}
@media ( max-width : 750px) {

	.panel-heading {
	  height: inherit !important; 
	}

	.Footer{
		padding: 35px 30px 45px 30px !important;
	}

	.panel-heading a.collapsed:after {
    	content: "\e114";
    	position: absolute;
    	right: 10px;
	}
	.panel-title{
		padding-right: 20px;
	}
	.panel-body{
		font-size: 18px !important;
	}
	.title p {
		font-size: 5vw !important;
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
@media ( max-width : 370px) {
	#btn_got_it {
		width: 100% !important;
		margin: 0.2em 0;
	}
	.panel-title {
		*font-size: 3vw;
	}
	#science p {
		font-size: 2.5vw !important;
	}
	.title p {
		font-size: 4vw;
	}
	.title {
		height: 35px;
	}
}

a {
	cursor: pointer;
}

@media ( max-width : 520px) {
	#btn_got_it {
		width: 100% !important;
		margin: 0.2em 0;
	}
	.title {
		height: 45px;
	}
	.panel-title {
		*font-size: 3vw;
	}
	.title p {
		font-size: 4vw;
	}
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


<div style="min-height: 1357px; background-color: #f7f7f7;"
	id="divcontenedor">
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
				<?php echo __('FAQs',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="" style="">
				<div id="header2">
					<img alt=""
						src="<?php echo $this->webroot;?>img/dashboard/By Dominik Martin.jpg"
						style="width: 100%; opacity: 0;">
					
					<div class="title">
						<p><?php echo __('Common questions on meditation',true);?></p>
					</div>
				</div>
				<div id="container-text" style="    padding-top: 0px;">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default" id="panel1">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseOne"
										class="collapsed collapsea"> I find it difficult to practice regularly,
										what can I do? </a>
								</h4>

							</div>
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Unlike the basic need for food, water or shelter, the need for meditation is not hardwired into us and requires a conscious effort to maintain. Controlled by free will, such higher functions of the mind must be tamed. The following suggestions may help: 
									<ul>

<li>Assign a convenient, fixed time on your schedule</li> 
<li>Gradually get your body accustomed to it by spending at least 5-10 minutes sitting still every day</li>
<li>Find or create a place where you feel at ease. You might want to use candles, incense, blankets or cushions to personalize your ‘private space of peace and inspiration’</li>
<li>Avoid music</li>
<li>Think about the time you can save with meditation through the improved concentration, better sleeping patterns and healthier body that result</li>
<li>Create more time for yourself by doing an electronic detox and disconnect from social networks and TV.</li></div>
							</div>
						</div>
						<div class="panel panel-default" id="panel2">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseTwo"
										class="collapsed collapsea"> Why do so many thoughts keep popping into my mind during meditation? </a>
								</h4>

							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Imagine your mind as a hard drive where every single memory is stored. We are largely unaware of it but our entire life is saved in a series of images, memories, smells, sights and sounds. When we focus inwards, these often inaccessible moments can resurface, especially if they are connected to an unresolved emotion or unbalanced mindset. Meditation gives you the ability to distance yourself from the daily grind and uses stillness and an open heart to access your inner voice, you core being. 

This connection to your finer life energy can bring you deeper understanding, inspiration and vision. It is here that you discover the real you and the ideas and inspiration that come from within. If you can harness them and live them authentically, you are on track to having an amazing life and your meditation practice will have been of great use.</div>
							</div>
						</div>


						<div class="panel panel-default" id="panel3">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseThree"
										class="collapsed collapsea"> I can’t focus and sit for a long time, what can I do? </a>
								</h4>

							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">If you are encountering physical obstacles to sitting for long periods, allow yourself to move your arms and legs a little. Imagine your spine is a broomstick and straighten your back and your neck. Have patience and know that sitting improves with practice. 
If it is your mind that is the problem, gently refocus by bringingyour eyes back and centering on the space between them. Also bring back your mind and focus gently on the same space.Let your thoughts come and go, and don’t try to analyze them. This will improve with regular practice, usually within 4-8 weeks.</div>
							</div>
						</div>
					
<!-- faltan 11 -->
<div class="panel panel-default" id="panel4">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseFour"
										class="collapsed collapsea"> How can I handle the thoughts coming into my mind during meditation? </a>
								</h4>

							</div>
							<div id="collapseFour" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">The mind stores away all impressions of the past, recognizing, comparing, analyzing and labeling them with a judgment of “good or bad.” Those with an imbalanced perspective have an emotional charge and are memorized as unresolved.Meditation is a process where these imprints of the past are purified and the charges dissolved. It is a time for the brain to reflect on its records and that is what pops up as thoughts and images. 
When such thoughts or visions appear, just watch them. Let them pass by, observing them like a white cloud driftingacross the sky. Observe without emotion, analysis or labeling. Try to simply be a witness with no attachment or judgment by just focusing your attention. The trick is to remove the task of evaluation and judgment from the mind. By giving your mind this time off, it will recede into the background and instead become focused and still.</div>
							</div>
						</div>
					

<div class="panel panel-default" id="panel5">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseFive"
										class="collapsed collapsea"> What are the benefits to the body and mind, and especially emotions? </a>
								</h4>

							</div>
							<div id="collapseFive" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Practicing Ramana Meditation on a regular basis helps one to live a life free of distress, and overcome stressful emotions. It improves blood pressure, especially hypertension, and is an effective treatment for anxiety, lack of focus, relationship problems and addictions; neuroscientists have found that, after just 11 hours of meditation, practitioners experienced structural changes in the part of the brain involved in monitoring focus and self-control.Research has also found meditation to promote divergent thinking, a type of thinking that allows many new ideas to be generated.</div>
							</div>
						</div>
					

<div class="panel panel-default" id="panel6">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseSix"
										class="collapsed collapsea"> What is the best posture for sitting meditation? </a>
								</h4>

							</div>
							<div id="collapseSix" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">There is no prescribed posture but the Yoga Sutra of Patanjali(2.46) offers a guideline that can be used for almost anything connected to Yoga and Meditation. In this case it is the idea of SthiraSukhamAsanam,which means the posture should be stable and comfortable. This defines best practice by excluding all other concerns. First orientate yourself by asking if your position is stable and comfortable. You should either sit on the floor or on a chair. The only other requirements are a straight back and neck.
The Lotus or Half Lotus position also have benefits but you should only use these if you can sit for one hour.
Once you can manage to sit and meditate for 45 minutes, your mind will also become strong and steady and you will have added another pillar to the foundation of your will to succeed in life.</div>
							</div>
						</div>
					

<div class="panel panel-default" id="panel7">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseSeven"
										class="collapsed collapsea"> How can I progress quickly in meditation? </a>
								</h4>

							</div>
							<div id="collapseSeven" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Practice, practice, practice. This is the most rewarding path. You will progress faster if you are disciplined and practice every day. Be patient and do not expect anything—you can’t force this type of liberation.</div>
							</div>
						</div>
					

<div class="panel panel-default" id="panel8">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseEight"
										class="collapsed collapsea"> Can I meditate for longer periods than the recommended hour? </a>
								</h4>

							</div>
							<div id="collapseEight" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Yes! There is no limit other than the physical body—as long as you can keep your mind in a state of concentration and total thoughtlessness.</div>
							</div>
						</div>
					


<div class="panel panel-default" id="panel9">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseNine"
										class="collapsed collapsea"> What is the minimum length of time for meditation? </a>
								</h4>

							</div>
							<div id="collapseNine" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Ideally it is recommended to meditate daily for 45-60 minutes.However, it is better to meditate for just five minutes only than not at all. Try to make it a habit, like eating, drinking or having a shower or shave every day.</div>
							</div>
						</div>
					



<div class="panel panel-default" id="panel10">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseTen"
										class="collapsed collapsea"> When is the best time to meditate? </a>
								</h4>

							</div>
							<div id="collapseTen" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">There is no prescribed time of day for meditation, the best time is when you are inspired and feel at ease. However there are benefits to practicing at the same time (and in the same place) every day. The yoga scriptures suggest finding a quiet environment in the early hours, and starting the morning with a calm mind certainly helps to master the day.</div>
							</div>
						</div>
					


<div class="panel panel-default" id="panel11">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseEleven"
										class="collapsed collapsea"> How about alcohol or any drugs? </a>
								</h4>

							</div>
							<div id="collapseEleven" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Meditation does not go well with either alcohol or drugs, however a specialized program may assist those with genuine addictions. Meditation is a natural process to control the mind and taking alcohol and drugs are unnatural methods that suppress the brains high quality waves, knocking out the connection of the brain with the higher senses.</div>
							</div>
						</div>
					



<div class="panel panel-default" id="panel12">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseTwelve"
										class="collapsed collapsea"> Is meditation similar to hypnosis? </a>
								</h4>

							</div>
							<div id="collapseTwelve" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">No, it’s the opposite—you practice meditation to increase consciousness.</div>
							</div>
						</div>
					


<div class="panel panel-default" id="panel13">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseThirteen"
										class="collapsed collapsea"> Why are there breathing techniques? </a>
								</h4>

							</div>
							<div id="collapseThirteen" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Breathing deeply increases the supply of oxygen to the brain. Using special breathing techniques (Pranayama) helps to gain control of the mind and release stress, enabling a meditative state to be reached more quickly. </div>
							</div>
						</div>
					


<div class="panel panel-default" id="panel14">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a data-toggle="collapse" data-target="#collapseFourTeen"
										class="collapsed collapsea"> I have depression from time to time. Can meditation help me? </a>
								</h4>

							</div>

							<div id="collapseFourTeen" class="panel-collapse collapse">
								<div class="panel-body" style="font-size:16px;">Yes, with a still mind you will master depression. Most cases of depression (excluding rare clinical depression) can be seen as a natural feedback mechanismindicating that your expectations towards yourself, others, and your perception of things or events in your life are unrealistic. 
Meditation is very valuable means of looking deeper inside yourself and developing an appreciation for how things are. When the mind is still and balanced, depression cannot occur. At the end of a meditation, ask yourself: What are the benefits of my condition?What is the benefit of what troubles me? What is the message?.</div>
							</div>
						</div>
					</div>																														
					





					<div style="text-align: center; margin-top: 35px;">
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button"
							style="width: 170px; border-radius: 6px; margin-bottom:60px; font-size:16px; line-height: 40px; font-weight: 500; height: 54px;"
							onclick="">Got
							it!</button>
					</div>
					
				</div>
			</div>


			<!-- Post Info -->


		</section>
		<section class="seccion_derecha">
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script>

	$(document).ready(function(){
		//$('#des_desplegar').click();
	});

	var click = 0;
	var colap = 0;


	$('#btn_got_it').on('click',function(){
		click++;
		if(click<=1){
			$('#btn_giff').css("display","block");
		}else{
		    window.location.href='<?php echo $this->webroot;?>career_program/meditation_intro'
			$('#btn_giff').css("display","none");
		}
	});

	 $('.panel').on('shown.bs.collapse', function (e) {
		   // alert('Event fired on #' + $('.in').length);
			colap = $('.in').length;



            if(colap == 14){
				$('#divcontenedor').css('min-height', '2890px');
				}
            if(colap == 13){
				$('#divcontenedor').css('min-height', '2770px');
				}
            if(colap == 12){
				$('#divcontenedor').css('min-height', '2650px');
				}
            if(colap == 11){
				$('#divcontenedor').css('min-height', '2530px');
				}
            if(colap == 10){
				$('#divcontenedor').css('min-height', '2410px');
				}
            if(colap == 9){
				$('#divcontenedor').css('min-height', '2290px');
				}
            if(colap == 8){
				$('#divcontenedor').css('min-height', '2170px');
				}
            if(colap == 7){
				$('#divcontenedor').css('min-height', '2050px');
				}
            if(colap == 6){
				$('#divcontenedor').css('min-height', '1930px');
				}
			if(colap == 5){
				$('#divcontenedor').css('min-height', '1820px');
				}
		    if(colap == 4){
				$('#divcontenedor').css('min-height', '1710px');
				}

		    if(colap == 2){
				$('#divcontenedor').css('min-height', '1475px');
				}

		    if(colap == 3){
				$('#divcontenedor').css('min-height', '1593px');
				}

		    if(colap == 1){
				$('#divcontenedor').css('min-height', '1356px');
				}
		    
				if(colap == 0){
					$('#divcontenedor').css('min-height', '1240px');
					}
		});

	 $('.panel').on('hidden.bs.collapse', function () {
	    // alert('Event fired on #' + $('.in').length);
			colap = $('.in').length;
			 if(colap == 14){
				$('#divcontenedor').css('min-height', '2890px');
				}
            if(colap == 13){
				$('#divcontenedor').css('min-height', '2770px');
				}
            if(colap == 12){
				$('#divcontenedor').css('min-height', '2650px');
				}
            if(colap == 11){
				$('#divcontenedor').css('min-height', '2530px');
				}
            if(colap == 10){
				$('#divcontenedor').css('min-height', '2410px');
				}
            if(colap == 9){
				$('#divcontenedor').css('min-height', '2290px');
				}
            if(colap == 8){
				$('#divcontenedor').css('min-height', '2170px');
				}
            if(colap == 7){
				$('#divcontenedor').css('min-height', '2050px');
				}
            if(colap == 6){
				$('#divcontenedor').css('min-height', '1930px');
				}
			if(colap == 5){
				$('#divcontenedor').css('min-height', '1820px');
				}
		    if(colap == 4){
				$('#divcontenedor').css('min-height', '1710px');
				}

		    if(colap == 2){
				$('#divcontenedor').css('min-height', '1475px');
				}

		    if(colap == 3){
				$('#divcontenedor').css('min-height', '1593px');
				}

		    if(colap == 1){
				$('#divcontenedor').css('min-height', '1356px');
				}
		    
			if(colap == 0){
				$('#divcontenedor').css('min-height', '1240px');
				}
	  });

	
	

$('#btn1').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
});
$('#btn2').on('click',function(){
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
	$('#btn2').css("background-image", "url("+WEBROOT+"img/N1.png)");
});
$('#btn3').on('click',function(){
	$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
	$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
	$('#btn3').css("background-image", "url("+WEBROOT+"img/N2.png)");
});


</script>


<?php echo $this->Html->css('meditation_intro.css'); ?>

