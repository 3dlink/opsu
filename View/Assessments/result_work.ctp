<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 4,
		TAG: 'wv_results'
	}
})

</script>
<style>
.dash-vision-content {
	height: 570px;
}

@media ( max-width : 750px) {

	.quiz-result-resultado p {
	  font-size: 18px !important;
	}

	.titulo1{
		font-size: 27px !important;
	}

	.dash-vision-content {
	height: inherit !important;
	}

	.dash-vision-content p {
	  margin-left: 135px;
	  font-size: 18px !important;
	}

	h4 {
	  margin-left: 135px;
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
@media ( max-width : 991px) {
.col-xs-4 {
  width: 28%;
}
}
@media ( max-width : 440px) {
		.dash-vision-content p {
	  margin-left: 100px;
	}

	h4 {
	  margin-left: 100px;
	}
	
}
</style>
<?php
echo $this->Html->script ( 'lib/Chart.js' );
echo $this->Html->script ( 'v3.js' );
echo $this->Html->script ( 'radar-chart.js' );
echo $this->Html->css ( 'radar-chart' );

$newArray = array ();
$newArray ['1'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_autonomy'],
		'letter' => 'Autonomy',
		'tooltip' => 'I have complete responsibility for deciding how and when my work gets done'
);
$newArray ['2'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_status'],
		'letter' => 'Social Status',
		'tooltip' => 'My job is respected and admired'
);
$newArray ['3'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_impact'],
		'letter' => 'Impact',
		'tooltip' => 'The results of my work affect the well-being of other people' 
);
$newArray ['4'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_pay'],
		'letter' => 'Compensation',
		'tooltip' => 'I have a good balance between my work and my private time' 
);
$newArray ['5'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_job_security'],
		'letter' => 'Job security',
		'tooltip' => 'My job is safe – I do not risk becoming unemployed' 
);
$newArray ['6'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_variety'],
		'letter' => 'Variety',
		'tooltip' => 'My job requires me to do different things, using a variety of skills' 
);
$newArray ['7'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_balance'],
		'letter' => 'Working conditions',
		'tooltip' => 'My job pays enough to support my short and long-term financial goals' 
);
$newArray ['8'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_completeness'],
		'letter' => 'Sense of completion',
		'tooltip' => 'My job allows me to see my contribution to an end product' 
);
$newArray ['9'] = array (
		'value' => $workvalues ['Workvaluesa'] ['wv_relatedness'],
		'letter' => 'Relatedness',
		'tooltip' => 'I get on well with my colleagues' 
);

rsort($newArray);

echo "
	  <script>
	  var items = [{
	  	Autonomy: '" . $workvalues ['Workvaluesa'] ['wv_autonomy'] . "',
	  	Social_Status: '" . $workvalues ['Workvaluesa'] ['wv_status'] . "',
	  	Impact: '" . $workvalues ['Workvaluesa'] ['wv_impact'] . "',
	  	Compensation: '" . $workvalues ['Workvaluesa'] ['wv_pay'] . "',
	  	Job_security: '" . $workvalues ['Workvaluesa'] ['wv_job_security'] . "',
	  	Variety: '" . $workvalues ['Workvaluesa'] ['wv_variety'] . "',
	  	Working_conditions: '" . $workvalues ['Workvaluesa'] ['wv_balance'] . "',
	  	Sense_of_completion: '" . $workvalues ['Workvaluesa'] ['wv_completeness'] . "',
	  	Relatedness: '" . $workvalues ['Workvaluesa'] ['wv_relatedness'] . "'
	  }];
	  </script>
	   ";



?>
<style>
.dash-result-content .result-indicator .Autonomy #progress {
	background-color: #33b5e5;
}

.dash-result-content .result-indicator .Social #progress {
	background-color: #cf5853;
}

.dash-result-content .result-indicator .Impact #progress {
	background-color: #67b0a1;
}

.dash-result-content .result-indicator .Compensation #progress {
	background-color: #d89689;
}

.dash-result-content .result-indicator .Job #progress {
	background-color: #f7d080;
}

.dash-result-content .result-indicator .Variety #progress {
	background-color: #a73e65;
}

.dash-result-content .result-indicator .Working #progress {
	background-color: #ee9f56;
}

.dash-result-content .result-indicator .Sense #progress {
	background-color: #adcc4f;
}

.dash-result-content .result-indicator .Relatedness #progress {
	background-color: #776895;
}

.dash-result-content .result-indicator .Autonomy {
	background-color: #d6f0fa;
}

.dash-result-content .result-indicator .Social {
	background-color: #f5dedd;
}

.dash-result-content .result-indicator .Impact {
	background-color: #e1efec;
}

.dash-result-content .result-indicator .Compensation {
	background-color: #f7eae7;
}

.dash-result-content .result-indicator .Job {
	background-color: #fdf6e6;
}

.dash-result-content .result-indicator .Variety {
	background-color: #edd8e0;
}

.dash-result-content .result-indicator .Working {
	background-color: #fcecdd;
}

.dash-result-content .result-indicator .Sense {
	background-color: #eff5dc;
}

.dash-result-content .result-indicator .Relatedness {
	background-color: #e4e1ea;
}

#radar_movil {
	display: block;
	margin: 0 auto;
}

.titulo1 {
	font-size: 27px;
	padding: 5px 0;
}

.titulo2 {
	font-size: 20px;
	padding: 20px 0;
	font-weight: bold;
}

.dash-result-left {
	width: 100% !important;
	float: none;
	margin-right: 0;
}

.decoration {
	text-decoration: underline;
	font-weight: bold;
}

div {
	text-align: justify;
}

@media ( max-width : 750px) {
	#quiz-result-container #result-container-principal {
		margin-right: 0;
	}
}
</style>

<script type="text/javascript">

   RadarChart.defaultConfig.color = function() {};
   RadarChart.defaultConfig.radius = 5;

	var data = [
      {
       className: 'germany', // optional can be used for styling
       axes: [
         {axis: "Autonomy", value: items[0]['Autonomy']/10}, 
         {axis: "Social <br /> Status", value: items[0]['Social_Status']/10}, 
         {axis: "Impact", value: items[0]['Impact']/10},  
         {axis: "Compensation", value: items[0]['Compensation']/10},
         {axis: "Job <br /> security", value: items[0]['Job_security']/10}, 
         {axis: "Variety", value: items[0]['Variety']/10}, 
         {axis: "Working <br /> conditions", value: items[0]['Working_conditions']/10},  
         {axis: "Sense of <br /> completion", value: items[0]['Sense_of_completion']/10},  
         {axis: "Relatedness", value: items[0]['Relatedness']/10}
       ]
     	}
   ];


</script>

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
				href="<?php echo $this->webroot;?>career_program/intro_module_1"><?php echo __('Know Myself Intro Page',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color: #B0B0B0;"
				href="<?php echo $this->webroot;?>career_program/quests_module_1"><?php echo __('Quest',true);?></a>
			<div></div>
		</div>
		<span class="glyphicon glyphicon-menu-right"></span>
		<div class="option">
			<a style="color: #B0B0B0;" href=""><?php echo __('Work Values',true);?></a>
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

	<section id="result-container-principal">
		<article class="quiz-result-resultado"
			style="border-bottom: 0; padding-bottom: 0; margin-bottom: 0;">
			<div class="">
				<p style="font-size: 16px; margin-bottom: 0;">
					<label style="padding-top: 29px; font-weight: 400 !important;"
						class="titulo1">Well done!</label> <br> Your work value preferences are summarized below, ranked from the most important to the least important. Research has shown these qualities are the most significant factors when it comes to job satisfaction. In Module 4, Explore Recommended Career Paths, the MENTOR. algorithm identifies appropriate career choices by matching your results to the work values associated with different occupations. Although your preferences play an important role in defining your career choices, they should not be considered in isolation. Completing the remaining quests in this module will give more rounded, reliable results. <br> <br> Want to learn more about how work values correlate to job satisfaction? Check out the background to this quest below. <br>
				</p>
			</div>
			<div style="clear: both;"></div>
		</article>

		<div class="graphiMobile" style="display: none; width: 100%">
			<br />
			<div id="radar_movil" class="radar"></div>
		</div>

		<article class="" style="margin-top: 40px;">
			<div class="dash-result-left">

				<div class="dash-result-content">
					<?php
					$arrayColor = array ();
					$y = 0;
					foreach ( $newArray as $x ) :
						$arrayColor [$y] = $x ['letter'];
						$y ++;
						?>
						<div class="result-indicator">
						<div id="resul-desc-indicator">
							<label style="font-size: 20px"> <b><?php echo ucwords($x['letter']);?></b>
								<a class="tooltips">
										<?php echo $this->Html->image('dashboard/info.png');?>
										<span><?php echo $x ['tooltip'];?></span>
							</a>
							</label> <label id="number"> <b><?php echo $x['value']/10;?></b>
								<small>/10</small>
							</label>
						</div>
						<div class="progress-bar-indicator <?php echo $x['letter'];?>"
							id="">
							<div id="progress" style="width:<?php echo ($x['value']); ?>%;  height: 4px;"></div>
						</div>
					</div>
					<?php endforeach;?>				
					<!-- ......................... -->
				</div>

			</div>
		</article>
		<article style="margin-bottom: 30px;">
			<div class="dash-vision-content">
				<div class=" col-xs-4 col-md-3"
					style="height: 100%; background-image: url(../webroot/img/science.png);"
					id="imgs-tipe"></div>
				<div id="science">
					<div>
						<h4 style="font-size: 20px; font-weight: bold;">The Science Behind It</h4>
						<p style="font-size: 16px; color: #666666; font-weight: 300;">
							Research proves that job satisfaction matters. The Job
							Characteristics Model is a theory that argues that the intrinsic
							nature of work is the core underlying factor causing employees to
							be satisfied with their jobs. The model focuses on five main
							characteristics that need to be met for employee fulfillment:
							Task identity or completion; task significance; variety;
							autonomy; and feedback. These characteristics are most commonly
							measured using the Job Diagnostic Survey, where employees rate
							the most accurate descriptions of their job from 1 to 7. A 2009
							study by T.A. Judge and R. Klinger (<a href="http://www.timothy-judge.com/c06.pdf" target="_blank">Promote Job Satisfaction
							through Mental Challenge</a>, Handbook of Principles of
							Organizational Behaviour, Second Ed, pp107-119) evaluates these
							key techniques and existing research on job satisfaction,
							concluding that employees who are satisfied with their jobs tend
							to perform better, withdraw less, and lead happier and healthier
							lives. Organizations whose employees are satisfied with their
							jobs are more likely to be productive and profitable. This
							conclusion is also firmly supported by Dawis, 2001; Hochwater,
							Perrewe, Ferris & Brymer, 1999. <br>
							<br>Of course, there are a number of different factors to
							consider when assessing the potential for job satisfaction.
							However, a 2012 study by J. Jing and R. James (<a href="http://www.sciencedirect.com/science/article/pii/S0001879111001448" target="_blank">Stability and
							change in work values: A meta-analysis of longitudinal studies</a>,
							Journal of Vocational Behavior) found that work values remain
							relatively stable throughout life. This indicates that a person’s
							current work values can be used as a reliable gauge for what will
							satisfy them in the future.
						</p>
					</div>

					<div style="clear: both;"></div>
				</div>
				<div style="clear: both;"></div>
			</div>
		</article>
	</section>

	<section id="graphiWeb"
		style="display: block; border-top: solid 2px #d0d0d0; float: left; width: 370px;">
		<div id="radar_web" class="radar"></div>
	</section>

	<section>
		<?php echo $this->element('article_list');?>
	</section>
	<div style="clear: both;"></div>
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

</script>

