<?php
	echo $this->Html->script('../library/jquery.scrollTo.js');
?>

<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'heuristics'
	}
})
</script>
<style>
#header2 {
	background-image: url('<?php echo $this->webroot;?>img/bigM3-2.png');
	width: 770px;
	height: 340px;
	position: relative;
	background-size: 100% 100%;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

@-webkit-keyframes fadeout_ajh {
	from { 
		opacity: 1;
		top: -37px;
		left: 100px;
	}
	to {
		opacity: 0;
		top: -56px;
		left: 138px;
	}
}
@keyframes fadeout_ajh {
	from { 
		opacity: 1;
		top: -37px;
		left: 100px;
	}
	to {
		opacity: 0;
		top: -56px;
		left: 138px;
	}
}

#btn_gif {
  font-size: 35px;
  font-weight: 600;
  color: #FF6633;
  position: absolute;
  top: -37px;
  left: 100px;
  display: none;
  opacity: 0;
  -webkit-animation-name: fadeout_ajh;
  -webkit-animation-duration: 4s;
  animation: fadeout_ajh 4s 2s;
}


.botones {
	width: 100%;
}

@media ( max-width : 750px) { @
	-webkit-keyframes fadeout2 {from { opacity:1;
		top: 91%;
		right: 422px;
	}
	to {
		opacity: 0;
		top: 90%;
		right: 412px;
	}
}

#header2 {
	width: 100%;
	height: 100%;
}

.quiz-result-cursos {
	border-top: none !important;
}

.send_btn {
	position: absolute !important;
	right: 5px;
	bottom: 15px;
}

.title p {
	font-size: 5vw;
}

.botones {
	width: 100%;
}

.titulo {
	font-size: 20px;
}

}
@media ( max-width : 500px) {
	.title p {
	font-size: 6vw;
}

#comentario textarea {
  
  top: 87px;
  }
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
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_3"><?php echo __('Improve My Decision-Making Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/quests_module_3"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Avoid Heuristics in Your Judgement',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id="" style="">
				<div id="header2">
						<img alt="" src="<?php echo $this->webroot;?>img/bigM3-2.png" style="width: 100%; opacity: 0;">
						<div class="title">
							<p><?php echo __('Avoid Heuristics in Your Judgement',true);?></p>
						</div>
				</div>
				<div id="container-text">
					<div>
						<p>Making big life decisions is tough. When you consider that the average American spends 80,000 hours of their life at work, figuring out what that work should be is as hard as it gets. That’s why at MENTOR. we believe in a holistic approach to career related decision-making. A good understanding of yourself and your unique needs, combined with the right information about the careers available to you is a good start. But on top of that, you also need the right mode of thinking to choose which are the most worth pursuing. </p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;">Decisions, decisions, decisions</span>
							<br><br>
							Decision making, on a small scale, comes as second nature. Our brains are busy making hundreds of tiny decisions every single day, mostly without us even realizing we are doing it. The reason we can decide whether to take the bus or catch a cab to work with barely a second thought is because of something called “heuristics.” These are mental shortcuts that allow our brains to solve problems quickly and efficiently. You probably know them best through their colloquial designations: Stereotyping, rule of thumb, common sense and an educated guess are just a few examples. 
							<br><br>
							Heuristics save us time and effort and, in most cases, work perfectly well. However, research over the last few decades has demonstrated that our supposedly “rational” minds are far from perfect: Heuristics can lead to a mismatch between our judgment and reality, called a cognitive bias. It is here that our decision-making abilities can start to trip up. 

						</p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;"> Heuristics</span><br><br>
							Most of the research on heuristics and their effects on judgment and decision-making comes from Israeli psychologists Amos Tversky and Daniel Kahneman. If you are keen to dig a little deeper into the subject, a fascinating summary of their work can be found in Kahneman’s 2011 book, Thinking, Fast and Slow. On a simplified level, heuristics work by substituting one question for another, simpler one. This can inevitably lead to error, something we are keen to avoid when it comes to important decisions about our future careers.
						</p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;"> Representativeness heuristics</span><br><br>
							One of the most common career decision mistakes people make is stereotyping, which results from using representativeness heuristics. This means we use examples of known, past events or experiences that already exist in our minds to represent a concept. We then use these representations or “expectations” to evaluate likelihood. In his 2008 book, Predictably Irrational, Duke University Professor of Psychology and Human Behavior, Dan Ariely, points out: “Expectations can influence nearly every aspect in one’s life.” <br><br>
							An excellent example is the low number of women who take up science, technology, engineering and mathematics (STEM) professions, despite their high level of interest and aptitude in high school. A 2013 study<span style="vertical-align:super; font-size:12px;"><a id="scro" style="cursor:pointer ;color: blue;">1</a></span> demonstrated that the implicit (and erroneous) belief that women are not as good at STEM subjects as men leads to fewer women being hired for such jobs. It also means fewer women choose to major in those subjects. They essentially stereotype themselves out of what could be interesting and successful STEM careers. <br><br>
							This shows how representativeness heuristics can impact our career decisions. While some jobs, such as accounting or being a librarian, may be stereotypically boring, don’t discount them out of hand—you might find they’re not boring to you at all! Spend time working out what you are interested in and what you are good at. Use means such as MENTOR.’s career exploration tool in the Career Decision-Making Program, or job shadowing to understand what a particular occupation entails on a day-to-day basis. Avoid jumping to conclusions about yourself and potential careers.<br>
						</p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;">  Availability heuristics</span><br><br>
							Tell someone they are more likely to be killed by hot tap water than die in a plane crash and you’ll likely be met first by laughter, then disbelief. This is an example of availability heuristics at play. Even though statistically speaking the above statement is true, our brains automatically seek out the most readily available examples to judge probability. Due to their innately dramatic and newsworthy nature, we hear about airline disasters much more often than death by faucet, even though they actually occur less frequently.   <br><br>
							This kind of assumption can also impact career decision-making, leading you to unwittingly narrow down your options. When thinking about jobs, the ones that stand out in your mind are usually the ones you have heard of most often. This may be due to general popularity, a strong family history or particular familiarity with a local industry. But just because they are the most easily recognized does not mean they are a good fit for you. <br><br>
							To avoid falling into the familiarity trap, find ways to broaden your search. Talk to people from as many different fields as you can, and use career recommendation tools to discover jobs you’ve never even heard of before. <br>
						</p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;">  Social proof</span><br><br>
							You know that canned laughter they use on TV shows? You probably find it annoying but watch the show anyway because you think it’s hilarious. This is an example of social proof being used in entertainment. As Robert Cialdini points out in his book Influence: Science and Practice, even though the TV studios know the canned laughter annoys their audience, they continue to use it because they know it increases the perceived funniness of the show. 
							<br><br>
							Social proof is when we look to others to know how to behave. But while this is often is the right thing to do, it can also lead us astray: other people don’t always know best. When it comes to making career decisions, it’s important not to just follow the crowd. Remember, others are probably just as unsure as you. They also may have very valid reasons for making a particular choice; reasons that do not apply to you. Going to law school or studying medicine because that’s what everyone else is doing is not a good way to make such an important decision. Sure, they are popular career choices, but do your research and you’ll likely find a field that is much less subscribed, and a much better personal fit.  
							<br><br>
							Learning about yourself, your skills and your personal preferences is the best way to say no to social proof and blaze your own trail with confidence. Completing the “Know myself” quests in Module 2 will help you evaluate all these factors and generate a personalized list of careers that match your profile. 
						</p>
						<br>
						<p>
							<span style="  font-weight:bold; font-size:20px;">  Avoiding cognitive bias</span><br><br>
							Just knowing about cognitive biases is already a big step towards making better decisions, but awareness alone is not enough. <br><br>
							<span style="  font-style: italic;">Just the facts Ma’am</span><br><br>
							Approach your decisions with a healthy dose of skepticism and always zone in on the hard, evidence-based facts. This will help you sidestep the heuristics issues outlined above and avoid patterns of thinking that are inherently flawed, such as the base rate fallacy. This is a natural tendency to prioritize specific information and neglect broader, factual or “base rate” information which is actually more significant. For example, even if you seem to fit the stereotype for making partner in a big law firm, the chances of anyone succeeding (the base rate) are already low, meaning you may well be overestimating the possibility of success. To better evaluate a certain career you should focus on finding out information on relevant predictors of job satisfaction and success. <br><br>
							<span style="  font-style: italic;">Compare, contrast, question</span><br><br>
							Once you have the facts in hand, you’ll need to go about comparing them. To ensure you don’t skip over any key considerations, be as systematic as possible when evaluating them. List out each factor and rank them according to how important they are for your individual needs.<br><br>
							Also spend time finding information and comparing different sources. Make use of MENTOR.’s Career Exploration tools to research the details of different career paths. Find work experience in roles that interest you—you’ll get first-hand knowledge of whether or not it’s for you, plus the chance to meet and learn from people in the industry. You can also connect with professionals who can give insight into different careers through our Mentoring program.<br><br>
							Questioning your intuition is not always easy, but it is important; we’ve seen how our brains love to make assumptions and jump to conclusions. When it comes to making decisions about your career, skip the shortcuts and go the long way around.<br><br>
							<span style="  font-style: italic;"><span id="refre" style="vertical-align:super; font-size:12px;">1</span> How Stereotypes Impair Women’s Careers in Science by Reuben E., Sapienza P., and Zingales L. 2013 (The Proceedings of the National Academy of Sciences, 2014)</span>

						</p>
					</div>



					<div style="margin:40px -10px; position:relative;">
						<div id="btn_gif">+40</div>
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 170px;height: 50px;">Got it!</button>
					</div>
					<div class="botones">
						<label class="opinion"> How useful did you find this resource? </label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>
						</div>
					</div>
				</div>
				<div id="message-succes" style="display: none;">
					<img src="<?php echo $this->webroot;?>img/Check.png" style=""
						id="message-succes-imagen">
					<div style="" id="message-succes-texto">
						<h3>Thank you for your feedback!</h3>
					</div>
				</div>
				<div id="comentario" style="  height: 250px;">
					<label id="mensaje_comentario"> </label>
					<textarea id="text_comentario" placeholder="Say something..."></textarea>

					<div class="send_btn">
						<button class="mentr-ok-btn-large" type="button"
							style="width: 110px; height: 40px;">Send</button>
					</div>
				</div>
			</div>
		</section>
		<section class="seccion_derecha">
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
	<div style="clear: both;"></div>
</div>

<script>

	$('#scro').click(function(){
		$('body').scrollTo('#refre',900);
	})

	var click = 0;

	$('#btn_got_it').on('click',function(){
		
		$('#btn_gif').css("display","block");
			$.post(WEBROOT+'dashboards/addAjh',function(data){
				if(data){
					// setTimeout(function(){},4000);
					// mixpanel.identify(ID_USUARIO);
					// mixpanel.track("got it button in avoid mistakes");
					setTimeout(function(){
						window.location = WEBROOT+"career_program/quests_module_3";
					},2000);
				}else
					window.location = WEBROOT+"career_program/quests_module_3";
			},'json');
		
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'ajh','modulo':3,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});


</script>



