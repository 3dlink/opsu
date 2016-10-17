<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 4,
		TAG: 'skills_summary'
	}
})

</script>

<?php 

	echo $this->Html->script('lib/Chart.js');
	echo $this->Html->script('v3.js');
	echo $this->Html->script('radar-chart.js');
	echo $this->Html->css('radar-chart');

?>

<script type="text/javascript">

   RadarChart.defaultConfig.color = function() {};
   RadarChart.defaultConfig.radius = 5;

	var data = [
      {
       className: 'germany', // optional can be used for styling
       axes: [
            {axis: "Problem <br />solving", value: <?php echo $dataComplete['Skillsa']['problem_solving'] / 10;?>}, 
         	{axis: "Adaptability", value: <?php echo $dataComplete['Skillsa']['adaptability'] / 10;?>}, 
         	{axis: "Critical <br /> thinking", value: <?php echo $dataComplete['Skillsa']['critical_thinking'] / 10;?>}, 
            {axis: "Communication", value: <?php echo $dataComplete['Skillsa']['communication'] / 10;?>},
         	{axis: "Creative <br /> thinking", value: <?php echo $dataComplete['Skillsa']['creative_thinking'] / 10;?>},  
         	{axis: "Time <br /> management", value: <?php echo $dataComplete['Skillsa']['time_management'] / 10;?>}, 
         	{axis: "Numerical <br /> reasoning", value: <?php echo $dataComplete['Skillsa']['numerical_reasoning'] / 10;?>}, 
            {axis: "Commercial <br /> awareness", value: <?php echo $dataComplete['Skillsa']['commercial_awareness'] / 10;?>},  
       ]
     }
   ];


</script>

<?php echo $this->Html->script('lib/Chart.js');?>

<style>
.col-md-3 {
  width: 25%;
}
.titulo1{
	font-size: 30px;
	padding: 5px 0;
}
.titulo2{
	font-size: 20px;
	padding: 20px 0;
	font-weight: bold;
}

.dash-result-left {
  width: 100%;
  float: none; 
  margin-right: 0;
}

.dash-vision-content #imgs-tipe {
  min-height: 225px;
}

.Footer{
	/*margin-top: 60px !important;*/
}

.decoration{
	text-decoration: underline;
	font-weight: bold;
}
div{
	  text-align: justify;
}


@media ( max-width : 750px) {

	#careers_list {
		margin-top: 0px !important;
		margin-bottom: 30px;
	}

	a.tooltips span {
		  width: 100px !important;
		    height: initial !important;
	}

	.titulo1 {
  		font-size: 20px !important;
	}

	#comentario {
  		margin-left: 45px !important;
  		width: 80% !important;
	}
	
	#mensaje_comentario {
		padding: 10px;
	}	

	#rada_movil {
		padding : 0;
		text-align: center;
	}
	
	.graphiMobile{
			width : 100%;
	}
	
	.graphiMobile > svg{
			width : 100%;
			overflow : hidden;
	}
	
	.radar {
	
		width : 100%;
		text-align : center;
	}
	
}
</style>

<div>		
	<div id="menuUserDashboard" style="color: #B0B0B0;">
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Know Myself Intro Page',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>

		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_1"><?php echo __('Quest',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>

		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Skills Assessment',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option active">
			<?php echo __('Results',true);?>
			<div></div>
		</div>
	</div>
</div>

<div class="" id="quiz-result-container">

	<?php //debug($dataComplete['result']);?>

	<section id="result-container-principal">
		<article class="quiz-result-resultado" style="border-bottom: 0;padding-bottom:0;margin-bottom:0;">
			<div class="">
				<p style="font-size: 16px;  margin-bottom: 0;">
					<label style="padding-top: 40px; font-weight: bold !important;" class="titulo1">Your total scored is: <?php echo number_format($dataComplete['Skillsa']['overall'],1)?>%</label>
					<br>				
					The results below indicate your current level of transferable skills. Also known as soft skills, personal skills or employability skills, transferable skills are learned from life experience. They can be taken from job to job and applied under all circumstances. Important functional skills, they should not be confused with traits—a trait refers to the manner in which the skill is performed. <br /><br />
A 2014 study by leading online careers community Glassdoor highlights the significance of transferable skills, with results showing that 7 out of 10 employees consider them more valuable than their degrees. At MENTOR., we believe time spent developing your transferable skills is time well spent. Because you can use them in any role, this approach allows for more flexibility when considering your options, and leaves you in a stronger position should the job market change. <br /><br />
Developing transferable skills is a life-long project. There is an endless list of skills to be acquired, improved, adapted and enhanced. This evaluation focused on eight key skills that have been shown to improve employability—you can learn more about the research in the Science Behind It section below. You should now create an action plan based on the results below and the personalized shortlist of careers generated in Module 4: Explore Recommended Career Paths. This will establish the most relevant skills for your field of choice and target areas in need of improvement. <br /><br />
Want to take immediate steps towards developing your transferable skills? Check out our recommended online courses below.

					<br>
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>

<div class="graphiMobile" style="display: none; width:100%">
	<br />
								<div id="radar_movil" class="radar"></div>


				</div>

<script>
	$(document).ready(function(){
		// alert($('#canvas').css('height'));
	})
</script>
		<article class="">

<?php 
// adaptability: 31.25 commercial_awareness: 50communication: 55 creative_thinking: 24.99 critical_thinking: 75 numerical_reasoning: 25 problem_solving: 
// 25 time_management: 10

	$titles = array();
	$titles['problem_solving']['name'] = 'Problem solving';
	$titles['problem_solving']['color'] = 'blue';
	$titles['problem_solving']['dimmensions'] = "Ability to find a solution to a difficult question or situation";
	$titles['problem_solving']['courses'] = array();
	$titles['problem_solving']['courses'][0]['name'] = "Problem-solving Strategies";
	$titles['problem_solving']['courses'][0]['url'] = "https://www.udemy.com/problem-solving-and-decision-making/?dtcode=znZhMiX37vl4";
	$titles['problem_solving']['courses'][1]['name'] = "Creative Problem Solving and Decision Making";
	$titles['problem_solving']['courses'][1]['url'] = "https://www.edx.org/course/creative-problem-solving-decision-making-delftx-tpm1x";

	$titles['adaptability']['name'] = 'Adaptability';
	$titles['adaptability']['color'] = 'red';
	$titles['adaptability']['dimmensions'] = "Ability to adjust oneself readily to different conditions";
	$titles['adaptability']['courses'] = array();


	$titles['critical_thinking']['name'] = 'Critical thinking';
	$titles['critical_thinking']['color'] = 'green';
	$titles['critical_thinking']['dimmensions'] = "Ability to think in a way that is clear, rational, open-minded, and informed by evidence";
	$titles['critical_thinking']['courses'] = array();
	$titles['critical_thinking']['courses'][0]['name'] = "Critical Thinking in Global Challenges";
	$titles['critical_thinking']['courses'][0]['url'] = "https://www.coursera.org/course/criticalthinking";
	$titles['critical_thinking']['courses'][1]['name'] = "The Science of Everyday Thinking";
	$titles['critical_thinking']['courses'][1]['url'] = "https://www.edx.org/course/science-everyday-thinking-uqx-think101x";


	$titles['communication']['name'] = 'Communication skills';
	$titles['communication']['color'] = 'orange';
	$titles['communication']['dimmensions'] = "Ability to convey information effectively and efficiently";
	$titles['communication']['courses'] = array();

	$titles['creative_thinking']['name'] = 'Innovation Generation: How to Be Creative';
	$titles['creative_thinking']['color'] = 'yellow';
	$titles['creative_thinking']['dimmensions'] = "Ability to look at problems or situations from a fresh perspective";
	$titles['creative_thinking']['courses'] = array();
	$titles['creative_thinking']['courses'][0]['name'] = "Innovation Generation: How to Be Creative";
	$titles['creative_thinking']['courses'][0]['url'] = "https://www.edx.org/course/innovation-generation-how-be-creative-uthealthsphx-inov101x";


	$titles['time_management']['name'] = 'Time management';
	$titles['time_management']['color'] = 'pink';
	$titles['time_management']['dimmensions'] = "Ability to apply systematic, priority-based structuring to time allocation";
		$titles['time_management']['courses'] = array();

	$titles['time_management']['courses'][0]['name'] = "Work Smarter, Not Harder: Time Management for Personal & Professional Productivity";
	$titles['time_management']['courses'][0]['url'] = "https://www.coursera.org/learn/work-smarter-not-harder";



	$titles['numerical_reasoning']['name'] = 'Numerical reasoning';
	$titles['numerical_reasoning']['color'] = 'orange2';
	$titles['numerical_reasoning']['dimmensions'] = "Ability to interpret, analyze and draw logical conclusions based on numerical data";
		$titles['numerical_reasoning']['courses'] = array();

	$titles['commercial_awareness']['name'] = 'Commercial awareness';
	$titles['commercial_awareness']['color'] = 'green2';
	$titles['commercial_awareness']['dimmensions'] = "Ability to understand what makes a business or organization successful";
		$titles['commercial_awareness']['courses'] = array();

?>



<?php foreach ($titles as $key => $value) { ?>
			<div class="dash-result-left">
				<div class="dash-result-content" style="color: #333333 !important;padding: 0em 20px !important; font-size: 16px; height: 100% !important; min-height:0px !important; margin-top: 20px;">
					<div class="result-indicator" style="padding-bottom: 3em !important;">
						<div id="resul-desc-indicator" style="margin-bottom: 25px;">
							
							<label style="font-size: 20px">
								<b><?php echo $value['name'];?></b>
								<a class="tooltips" style="cursor: pointer;">
									<?php echo $this->Html->image('dashboard/info.png');?>
									<span><?php echo $value['dimmensions'];?></span>
								</a>
							</label>

							<label id="number">
								<b style="  font-size: 20px;"><?php 
								$resultE = number_format($dataComplete['Skillsa'][$key]/10,1);
								if($resultE == 0.0){
									$resultE = "1.0";
								}
								if($resultE == 10.0){
									$resultE = "9.5";
								}

								echo $resultE;

								?></b>
								<small>/10</small>
							</label>
						</div>
						<div class="progress-bar-indicator <?php echo $value['color'];?>" id="">
							<div id="progress" style="width: <?php if($dataComplete['Skillsa'][$key] == 0) echo '1'; else{ if($dataComplete['Skillsa'][$key] == 10) echo '9.5'; else echo $dataComplete['Skillsa'][$key];}?>% !important;"></div>
						</div>
						<div style="margin-top:30px;">
						<!-- 	<div>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pellentesque dui mauris, ut vestibulum nunc fermentum sed. Sed convallis ipsum nec risus commodo luctus. Ut lobortis aliquet mi sit amet molestie. Donec malesuada leo nec congue posuere. In ultrices rhoncus felis, quis semper tellus faucibus eu. Vivamus quam augue, vehicula vitae velit feugiat, mollis aliquam odio. 
							</div>

							<div style="margin-top:35px;">	<img src="<?php echo $this->webroot;?>img/row.png" alt="">
								See the pages: <span class="decoration">Listening Skills</span> and <span class="decoration">Active Listening</span> for more on developingyour listening skills.
							</div> -->
							<?php if (!empty($value['courses'])) { ?>
								<div style="margin-top:30px;"> <img src="<?php echo $this->webroot;?>img/row.png" alt="">
										Check out these online course about <?php echo  $value['name'];?>:</div>
									<div style="margin-left:37px;">
										<br />
										<?php foreach ($value['courses'] as $ky => $ve) { ?>
										<b><a style="color:black; text-decoration: underline;" href="<?php echo $ve['url'];?>" target="_blank"><?php echo $ve['name'];?></a></b><br>
									<?php } ?>
								</div>
							<?php } ?>
							
						</div>
					</div>
				</div>
			</div>
<?php } ?>
		</article>
		<article>
			<div class="dash-vision-content" style="margin-bottom:30px;">
				<div class=" col-xs-4 col-md-3" style="height: 100%; background-image: url(../webroot/img/science.png);" id="imgs-tipe">
				</div>
				<div id="science">
					<div>
						<h4 style="font-size: 20px; font-weight: bold;">The Science Behind It</h4>
						<p style="  padding-left: 100px; font-size: 16px; color: #666666; font-weight: 300;">
							A prospective employer expects you to apply the skills you have learned through your studies, work, and life experiences to the work environment. However, with such a vast number of different skills, it can be hard to know which ones are most important. When designing our assessment we reviewed several studies and surveys including the <a href="https://www.binghamton.edu/ccpd/quick-reference-guides/transferable-skills.pdf" target="_blank">2012 National Association of Colleges and Employers (NACE) Job Outlook Survey</a> and <a href="http://blog.linkedin.com/2014/10/10/what-it-takes-for-a-young-professional-to-get-hired-today/" target="_blank">LinkedIn’s survey of 1400 managers</a> at Fortune 500 companies to establish what key skills employers are looking for in their new hires. The eight dimensions selected above stood out as the front runners, recurring again and again across the board. 
						</p>
					</div>
					
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
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
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;margin-right: 45px;margin-top:80px;float: right;">Send</button>
							</div>
						</div>
		</article>		
	</section>	

	<section id="graphiWeb" style="display:block;border-top: solid 2px #d0d0d0; float: left; width: 370px;">
							<div id="radar_web" class="radar"></div>

	</section>
	
	<section id="careers_list">
		<?php echo $this->element('article_list');?>
	</section>
	<div style="clear:both;"></div>

<!-- 		<div class="botones" style="margin:initial;">
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
				<div id="comentario" style="margin: 10px 0px 0px 90px;  height: 250px;">
					<label id="mensaje_comentario"> </label>
					<textarea id="text_comentario" placeholder="Say something..."></textarea>

					<div class="send_btn" style="  margin-top: 100px; position: absolute; right: 30px;">
						<button class="mentr-ok-btn-large" type="button"
							style="width: 110px; height: 40px;">Send</button>
					</div>
				</div>

				<div style=" height: 60px;"></div> -->
</div>

<script type="text/javascript">


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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'resul_ska','modulo':2,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});



  function randomDataset() {
    return data.map(function(d) {
      return {
        className: d.className,
        axes: d.axes.map(function(axis) {
          return {axis: axis.axis, value: axis.value};
        })
      };
    });
  }

			  var chart = RadarChart.chart();
			  var cfg = chart.config(); // retrieve default config
			  var svg = d3.select('#radar_web').append('svg')
			    .attr('width', cfg.w)
			    .attr('height', cfg.h);
			  svg.append('g').classed('single', 1).datum(randomDataset()).call(chart);

			  var svg2 = d3.select('#radar_movil').append('svg')
			    .attr('width', cfg.w)
			    .attr('height', cfg.h);
			  svg2.append('g').classed('single', 1).datum(randomDataset()).call(chart);

			  // many radars
			  chart.config({w: cfg.w / 4, h: cfg.h / 4, axisText: true, levels: 0, circles: true});
			  cfg = chart.config();

</script>