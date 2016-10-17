<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'framework'
	}
})
</script>
<style>

.Footer{
	margin-top: 0 !important;
}

p > a{
	color: black;
	text-decoration: underline;
}

@-webkit-keyframes fadeout_cmdf {
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
@keyframes fadeout_cmdf {
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


#container-text {
  padding-top: 20px;
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
  -webkit-animation-name: fadeout_cmdf;
  -webkit-animation-duration: 4s;
  animation: fadeout_cmdf 4s 2s;
}

#header2 {
	background-image: url('<?php echo $this->webroot;?>img/bigM3-1.png');
	max-width: 770px;
  	max-height: 340px;
	position: relative;
	background-size: cover;
    background-position: center;
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
}

@media (max-width: 750px){

	.title p {
	  font-size: 5vw;
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

@media (max-width: 500px){
	.title p {
	    font-size: 7vw;
  padding-top: 0px;
  line-height: 33px;
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
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_3"><?php echo __('Improve My Decision-Making Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_3"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Career Decision-Making Framework',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video">
			<div id=""style="">
				<div id="header2">
						<img alt="" src="<?php echo $this->webroot;?>img/bigM3-1.png" style="width: 100%; opacity: 0;">
						<div class="title">
							<p><?php echo __('Carrer Decision Making Framework',true);?></p>
						</div>
				</div>
				<div id="container-text">
					<p>
						Today’s job market is a complex maze of opportunities, challenges and frustrations, especially for the first time job hunter looking to get their foot in the door. It is unstructured and fiercely competitive with dozens, often hundreds (and sometimes even thousands) of candidates battling it out for interesting entry-level roles. Add to this the results of the <a href="http://www.gallup.com/strategicconsulting/163007/state-american-workplace.aspx" target="_blank">Gallup 2013 State of the American Workplace study</a>, which found that as many as 70% of working Americans feel unfulfilled in their jobs, and you have a pretty stark picture indeed. 
						</p>
						<h3 class="titulo">Find your way</h3>
						<p>
						In times as these, it is often unclear how to go about charting your way to a successful and fulfilling career. But while it may be tempting to just follow in the footsteps of those who have been there before, take heed: people and circumstances are variables that cannot be recreated, and every path is one of a kind. As you set forth on your own unique journey, know that the road to the future is rarely straight. There will be many unexpected twists and turns as your career path unfolds before you—the trick is to welcome each and every one. The job market may be more complicated than ever before, but the Career Decision-Making Framework provides a set of core principles that, once understood, will serve as guiding stars on your voyage to success. 
						</p>
						<h3 class="titulo">Look inward</h3>
						<p>
						Making decisions about your career is a complex process. First of all, there are thousands of careers out there. Each has its own attributes to learn about then compare. This task is made even more complicated when you are only just getting to know yourself, your strengths and weaknesses, and personal preferences. Add to this the uncertainty of what will interest your future self; as you can read about <a href="http://en.wikipedia.org/wiki/End-of-history_illusion" target="_blank">here</a>, time changes us all more than we expect. <br><br>
						The very first step in making any career-related decision is to learn more about yourself. This is, of course, an open-ended topic—after all, people are very complicated creatures. That’s why at MENTOR. we have sifted through the research to identify the factors that science tells us correlate most with job satisfaction and career success. <br><br>
						Based on this, MENTOR. targets a deeper understanding of five key work values that research has shown to be the most closely linked to job satisfaction: seeing how your efforts contribute to end product or service; the impact you perceive your work to have on the world around you; the variety of skills and tasks involved; how much autonomy you have in making work-related decisions; and the feedback provided on your approach and performance. If you haven’t already done so, take our Work Values Assessment to establish the importance you place on each. <br><br>
						Another personal aspect is your desire for development, known as your “Growth Need Strength” (GNS). A high GNS indicates a high level of satisfaction from performing challenging activities, pushing pay lower down in your priorities. If your GNS is low and pay comes high up in your priorities, you should focus on high paying jobs. However, one important consideration to bear in mind is that there is always a trade-off between pay, challenging work, and lifestyle. MENTOR. establishes your GNS according to the answers you provide in Module 2, and later takes it into account in Module 4’s career-matching algorithm. <br><br>
						Your vocational interests also provide a signpost to possible career matches. Although there is less of a correlation between career success and personal interests than, say, work values, your interests can certainly help to narrow down your choices. If you haven’t yet completed the Vocational Interests Assessment, we highly recommend doing so.  <br><br>
						Employers consider transferable skills such as problem solving, the ability to learn quickly, analytical thinking, team work and strong communication to be some of the most desirable abilities when recruiting new employees. Determining your existing skill level and areas for improvement is a valuable exercise and can be done by completing the Employability Assessment. By developing and mastering the skills you particularly like to use, you will not only improve your performance and enjoyment at work, you will also make yourself stand out from the crowd, opening up new opportunities for progression. 
						</p>
						<h3 class="titulo">Look forward</h3>
						<p>
						Creating a career vision is one of the most important pieces of career advice around, but sadly one that is often neglected. Research shows that a consistent vision is the single most predictive variable for success, for both companies and people. Serving as a fixed point on a very broad horizon, a career vision gives you something to work towards. It provides a means of evaluating the opportunities you encounter, helping you to avoid wasting time and resources on unnecessary or irrelevant distractions. Your career vision is something you will always strive for yet never fully achieve. It is your contribution to a bigger issue that is close to your hear, like equality in the workplace or human rights; you won’t solve it alone but can use your talents to make an impact, no matter how big or small. To help you develop a career vision, we recommend working through the quests in Module 1.
						</p>
						<h3 class="titulo">Explore</h3>
						<p>
						The next important step is finding a career that matches your personal profile. In Module 4, the MENTOR. algorithm incorporates information provided in Module 2 to match your unique profile against thousands of careers to suggest the best fit possibilities. Shortlisting in this way allows you to discover a wide range of potentially satisfying careers, many of which you may never have heard of. This process is not only a speedy way to evaluate a vast amount of information, but also neatly sidesteps the pitfall of “availability heuristics”, a mental shortcut that often unwittingly limits our choices to the most familiar options.<br><br>
						This creates a starting point from which to explore and learn about different careers. Talk to people in as many different fields as possible and make your own shortlist from MENTOR.’s suggestions (you can easily do this by adding them to your “favorites”). Dig into the information provided in Module 4 about each career, the expected salary, skill and education requirements, plus the prospects for this kind of position over the next decade. Look for ways to “trial” different options through volunteering, internships or job shadowing. And of course, talking to people whose careers interest you is a great way to learn more about what they do and how they got there. After completing the Career Decision-Making Program you will also gain access to our mentoring service, a network of professionals with 7+ years of experience in specific careers, who are on hand to offer relevant advice. 
						</p>
						<h3 class="titulo">Proceed wisely</h3>
						<p>
						Finally, it’s time to make a decision. When choosing which of your shortlisted options to pursue, be sure to avoid the cognitive biases that can blight your ability to make judicious decisions—you’ll learn more about this in the next quest in this module. <br><br>
						Once you’ve got a career in your sights, it is important to remember the power of relationships. Just as critical when it comes to landing a job as they are to job success, relationships are an essential factor for overall happiness. A relationship-centric mindset will set you in good stead for success, so always be ready to help, be polite to everyone you meet and seek ways to build meaningful relationships—you never know when you might need them.<br><br>
						As you progress through life, you will find your career works its way through different stages. In your early twenties, you are taking the first steps in a marathon, not a sprint. This is the time to lay a solid foundation for the future by building the transferable skills that will help keep your future career options open. It is the time to build your network and develop your knowledge of yourself and the world; to explore and experiment, to try on jobs and find the ones that fit. Although most people in their early twenties do not yet need to have chosen their career path, one caveat is for those considering STEM careers, which tend to necessitate an earlier choice. As you move into your late twenties, you might still be exploring different careers, but you will have started to develop a track record and professional reputation around specific professional skills. This is also the time that you can use your experience to fine tune your work values, ready to move onto, and into, your future career.  
						</p>
						<h3 class="titulo">Map your own path</h3>
						<p>
						What that career may be is yet to be seen. With so many variables, possibilities and choices to be made, the journey towards a fulfilling career is as unique as your fingerprint. And while there are no detailed, step-by-step directions to success, there is a map, and you will learn to read it with MENTOR. by your side.
					</p>	

					<div style="margin:40px -10px;position:relative;">
						<div id="btn_gif">+100</div>
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 170px;height: 50px;">Got it!</button>
					</div>
					<div class="botones">
						<label  class="opinion">
							How useful did you find this resource?
						</label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
						</div>
					</div>
					<div id="message-succes" style="display: none;">
						<img src="<?php echo $this->webroot;?>img/Check.png" style="" id="message-succes-imagen">
						<div style="" id="message-succes-texto">
							<h3 class="titulo">Thank you for your feedback!</h3>
							<p>
							</div>
					</div>

						<div id="comentario">
							<label id="mensaje_comentario">
								
							</label>
							<textarea id="text_comentario" placeholder="Say something..."></textarea>
	
							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;">Send</button>
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

$('#btn_got_it').click(function(){
		$.post(WEBROOT+'dashboards/addCdmf',function(data){
			if(data){
				$('#btn_gif').css("display","block");
					// mixpanel.track("got it button in CDMF");
					setTimeout(function(){
						window.location = WEBROOT+"career_program/quests_module_3";
					},2000);
			}else{
			window.location = WEBROOT+"career_program/quests_module_3";
			}
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'cdmf','modulo':3,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

</script>



