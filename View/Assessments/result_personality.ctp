<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 4,
		TAG: 'personality_summary'
	}
})

</script>

<?php //echo $this->Html->script('lib/Chart.js');?>

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
            {axis: "Collaborative", value: <?php echo $dataComplete['Personality']['collaborative'] / 10;?>}, 
         	{axis: "Persuasiveness", value: <?php echo $dataComplete['Personality']['persuasiveness'] / 10;?>}, 
         	{axis: "Positive <br /> attitude", value: <?php echo $dataComplete['Personality']['positive_attitude'] / 10;?>}, 
            {axis: "Hardworking", value: <?php echo $dataComplete['Personality']['hardworking'] / 10;?>},
         	{axis: "Leadership", value: <?php echo $dataComplete['Personality']['leadership'] / 10;?>},  
         	{axis: "Stress <br /> management", value: <?php echo $dataComplete['Personality']['stress_management'] / 10;?>}, 
         	{axis: "Resilience", value: <?php echo $dataComplete['Personality']['resilience'] / 10;?>}, 
            {axis: "Organizational <br /> skills", value: <?php echo $dataComplete['Personality']['organizational_skills'] / 10;?>},  
       ]
     }
   ];


</script>

<style>

#comentario textarea {
	position: initial;
  max-width: 610px;
  width: 90%;
  height: 80px;
  margin: 0 auto;
  margin-top: -18px;
  display: block;
}

.web_br{
	display: none;
}

.col-md-3 {
  width: 25% !important;
}

#science_texto{
	  margin-left: 213px;
}

.titulo1{
	font-size: 30px;
	font-weight: bold;
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

.decoration{
	text-decoration: underline;
	font-weight: bold;
}
div{
	  text-align: justify;
}


@media ( max-width : 750px) {

	.text_indicador{
		font-size: 18px;
	}

.web_br{
	display: block;
}
	.titulo1 {
	  font-size: 30px !important;
	}
	#careers_list {
	  margin-top: 0px;
	}

	#science > div{
		margin-left: 20vw;
	}
	
	header #menu_user #menu_user-content {
  padding-left: 30px !important;
}
}

@media ( max-width : 500px) {
	#science > div{
		margin-left: 24vw;
	}
}

@media ( max-width : 400px) {
	#science > div{
		margin-left: 28vw;
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
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_1"><?php echo __('Quests',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Employability Assessment',true);?></a>
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
			<div class="text_intro">
				<p style="font-size: 16px;  margin-bottom: 0;">
					<label style="padding-top: 40px;" class="titulo1">You total score is: <?php echo number_format($dataComplete['Personality']['overall'],1)?>%</label>
					<br>				
					Your employability is defined as your capacity to find and retain formal employment. In today’s challenging global economy where automation has led to the loss of many roles and employers are under constant pressure to cut costs, this is no mean feat. Competition is fierce and your level of employability plays an important part in your application. <br><br>
					Studies have shown that employability is determined by assessing three key attributes: interpersonal skills, relevant expertise and willingness to work. This quest used a range of dimensions related to these three attributes to evaluate your employability. Review your results below to see which areas you should focus on in order to make improvements.
					<br>
				</p>
			</div>
			<div style="clear:both;"></div>
		</article>

	<div class="graphiMobile" style="display: none; width:100%">
		<br />
		<div id="radar_movil" class="radar"></div>
	</div>

		<article class="">

<?php 

	$titles = array();
	$titles['resilience']['name'] = 'Resilience';
	$titles['resilience']['color'] = 'blue';
	$titles['resilience']['tooltip'] = 'Capacity to handle difficult situations without becoming stressed or impacting performance';

	$titles['persuasiveness']['name'] = 'Persuasiveness';
	$titles['persuasiveness']['color'] = 'red';
	$titles['persuasiveness']['tooltip'] = 'Ability to use written or spoken words to convince others to change their behavior or beliefs';

	$titles['organizational_skills']['name'] = 'Organizational skills';
	$titles['organizational_skills']['color'] = 'green';
	$titles['organizational_skills']['tooltip'] = 'Ability to use time, energy and resources in an effective manner';

	$titles['hardworking']['name'] = 'Hardworking';
	$titles['hardworking']['color'] = 'orange';
	$titles['hardworking']['tooltip'] = 'Ability to work hard and apply oneself energetically and devotedly to work';

	$titles['positive_attitude']['name'] = 'Positive attitude';
	$titles['positive_attitude']['color'] = 'yellow';
	$titles['positive_attitude']['tooltip'] = 'An optimistic outlook that expects favorable outcomes; does not dwell on negative factors';

	$titles['collaborative']['name'] = 'Collaborative';
	$titles['collaborative']['color'] = 'pink';
	$titles['collaborative']['tooltip'] = 'Ability to work with others for a common purpose or benefit';

	$titles['leadership']['name'] = 'Leadership';
	$titles['leadership']['color'] = 'orange2';
	$titles['leadership']['tooltip'] = 'Ability to guide or direct a group of people or organization to perform and engage in achieving a goal';

	$titles['stress_management']['name'] = 'Stress management';
	$titles['stress_management']['color'] = 'green2';
	$titles['stress_management']['tooltip'] = 'Ability to deal effectively with psychological or emotional stress without impacting performance';
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
									<span><?php echo $value['tooltip'];?></span>
								</a>
							</label>

							<label id="number">
								<b><?php echo number_format($dataComplete['Personality'][$key]/10,1);?></b>
								<small>/10</small>
							</label>
						</div>
						<div class="progress-bar-indicator <?php echo $value['color'];?>" id="">
							<div id="progress" style="width: <?php echo $dataComplete['Personality'][$key];?>% !important;"></div>
						</div>
						<?php if($value['name'] != 'Organizational skills' && $value['name'] != 'Hardworking' && $value['name'] != 'Collaborative'){?>
						<div class="text_indicador" style="margin-top:30px;">
							<div style="margin-top:30px;"> <img src="<?php echo $this->webroot;?>img/row.png" alt="">
								Check out these online courses about <?php echo $value['name'];?>:</div>
							<div style="margin-left:37px;">
								<br />
								<?php foreach ($cursos as $curso) {
									if($curso['Course']['course_skill'] == $value['name']){?>
										<a class="links" target="blank_" href="<?php echo $curso['Course']['course_link'];?>"><b><?php echo $curso['Course']['course_title'];?></b></a><br><br class="web_br">
									<?php }?>
								<?php }?>
							</div>
						</div>
						<?php }?>
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
					<div id="science_texto">
						<h4 style="font-size: 20px; font-weight: bold;">The Science Behind It</h4>
						<p style="font-size: 16px; color: #666666; font-weight: 300;">
							The relationship between employability attributes and personality preferences has been demonstrated in several studies, such as <a href="http://www.sajip.co.za/index.php/sajip/article/view/1064/1309">Employability attributes and personality preferences of postgraduate business management students</a> published in the SA Journal of Industrial Psychology in 2013<sup>1</sup>. Another 2013 study published in Industrial and Organized Psychology<sup>2</sup> establishes that there are three main attributes seen in individuals with high employability. These are: strong interpersonal skills, having the expertise that the work demands and willingness (ambition, drive, and a good work ethic). When designing this assessment, we took the scientific research and combined it with additional studies and surveys (including the <a href="https://www.binghamton.edu/ccpd/quick-reference-guides/transferable-skills.pdf" target="_blank">2012 National Association of Colleges and Employers (NACE) Job Outlook Survey</a> and <a href="http://blog.linkedin.com/2014/10/10/what-it-takes-for-a-young-professional-to-get-hired-today/" target="_blank">LinkedIn’s survey of 1400 managers</a> at Fortune 500 companies) to establish which key personality traits employers are looking for in their new hires. <br><br>

							<sup>1</sup> Ingrid Potgieter, Melinde Coetzee, SA Journal of Industrial Psychology, vol.39, No 1, 2013: <a href="http://www.sajip.co.za/index.php/sajip/article/view/1064/1309" target="_blank">Employability attributes and personality preferences of postgraduate business management students</a> <br>
							<sub>2</sub> Hogan, R., Chamorro-Premuzic, T & Kaiser, R. B.(2013). Employability and career success: Bridging the gap between theory and reality. Industrial and Organizational Psychology, 6(1), 3-16

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
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;margin-left: 35px;margin-top: 20px;">Send</button>
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
</div>


<script type="text/javascript">
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'result_empl','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});


</script>