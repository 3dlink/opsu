<?php 
	echo $this->Html->script('lib/Chart.js');
	echo $this->Html->script('v3.js');
	echo $this->Html->script('radar-chart.js');
	echo $this->Html->css('radar-chart');?>
<?php echo $this->Html->script('../library/jquery.knob.js');?>


<style type="text/css">

.dash-result-content .result-indicator {
  padding: 0px 0;
  padding-bottom: 33px;

}

table {
  border-spacing: 0 8px;
  }

.firsTd{
	padding-left: 0px !important;
}

.imgChecks > img{
	display: block; 
	margin: auto;
	width: 85%;
}

td{
	  border-top: 0px !important;
}



@media ( max-width : 750px) {
.caja{
  margin-top: 20px !important;
}
.radar{
	margin: 20px auto;
}
.contenedor_secciones{
	  margin-left: 35px !important;
	  padding-right: 30px;
}
.dash-result-left{
	width: 100% !important;
}
.sci {
  width: 100% !important;
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
			<div class="option">
				<a style="color:#B0B0B0;" onclick="function test(){return false;}" href="#"><?php echo __('360 Feedback',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Results',true);?>
				<div></div>
			</div>
		</div>
	</div>

<div class="contenedor_secciones" style="  text-align: justify;   margin-left: 55px;">
	<?php 
		$titles = array();
		$titles['problem_solving_360']['name'] = 'Problem solving';
		$titles['adaptability_360']['name'] = 'Adaptability';
		$titles['communication_360']['name'] = 'Communications skills';
		$titles['time_management_360']['name'] = 'Time management';
		$titles['teamwork_360']['name'] = 'Team Work';
		$titles['ledership_360']['name'] = 'Ledership';
		$titles['persuasive_360']['name'] = 'Persuasiveness';
		$titles['tech_savvy_360']['name'] = 'Tec-savvy';
	?>
	<?php if(!empty($dataQuestFA)){
		$reF = $dataQuestFA['Feedbacka'];
	?>
		<script type="text/javascript">
		   RadarChart.defaultConfig.color = function() {};
		   RadarChart.defaultConfig.radius = 5;
			var data = [
		      {
		       className: 'germany', // optional can be used for styling
		       axes: [
		            {axis: "Time <br /> management", value: <?php echo $reF['time_management_360'] / 10;?>}, 
		            {axis: "Communication", value: <?php echo $reF['communication_360'] / 10;?>}, 
		         	{axis: "Tech <br /> savvy", value: <?php echo $reF['tech_savvy_360'] / 10;?>}, 
		         	{axis: "Adaptability", value: <?php echo $reF['adaptability_360'] / 10;?>}, 
		         	{axis: "Teamwork", value: <?php echo $reF['teamwork_360'] / 10;?>},  
		         	{axis: "Ledership", value: <?php echo $reF['ledership_360'] / 10;?>}, 
		            {axis: "Problem <br /> solving", value: <?php echo $reF['problem_solving_360'] / 10;?>},
		            {axis: "Persuasive", value: <?php echo $reF['persuasive_360'] / 10;?>},  


		       ]
		     }
		   ];
		</script>

<!-- <div id="course-content" class="cont 5five" style="border-bottom: solid 2px #d0d0d0;"> -->

	<div class="dash-result-left " style="border-top: solid 2px #d0d0d0; width:770px;margin-top: 10px !important;">
		<div class="text_intro" style=" margin-top:24px;">
			<p>The following graphics display the "Gap", or difference between your average rating n each dimension (labeled "Self") and the average of all other raters (labeled "All others"). This an help you identify blindpots or areas where you ware rated more favorably by your other raters than by yourself. The Gap for these imensions red colored in shades of green. Conversely, the graphics can also help you identiy your opportunitiesfor improvement, or areas where you rated yourself higher tahn he others did. The Gap for these dimensions are colored in shades of red. The darker the shades of green or red, the large the Gap. Finally, if a dimmension's Gap is not shaded with a specific color, it indicated an area of agreement between yourself and the other raters. </p>
		</div>
		<br>
		<div class="graphiMobile" style="border-top: solid 2px #d0d0d0; border-bottom: solid 2px #d0d0d0; display:none; width: 100%;">
			<div id="radar_movil" class="radar"></div>
		</div>
	<!-- </div> -->
<div class="dash-result-content caja" style="margin-top: -15px"> 
		<div class="">
	<br>
	<div class="dash-result-content" style="margin-top: 20px !important;">
			<!-- <div class="dash-result-content" style="height: inherit !important;"> -->
				<?php  foreach ($titles as $key => $value) {
					?>
				<div class="result-indicator">
					<div id="resul-desc-indicator">
						<label style="font-size: 20px">
							 <b><?php echo $value['name'];?></b>
							<span>
								<?php echo $this->Html->image('dashboard/info.png');?>
							</span>
						</label>
					</div>
					<div style="width: 100%; height: 50px;   margin-top: -15px;" >
						<?php 
							$bord = "";
							$color = "white";

							$myResult = number_format(($reF[$key] / 10),1);
							$othersResult = number_format(($frindsResult[$key.'_invite'] / 10),1);

							$GAP = $myResult - $othersResult;
							
							if( ($GAP >= 0 && $GAP <= 0.5) ||  ($GAP <= 0  && $GAP >= -0.5)){
								$GAP = abs($GAP);
								$bac = "#FFFFFF";
								$bord = "border: 2px solid black;";
								$color = "black";
							}

							elseif($GAP > 0.5 && $GAP <=1){
								$bac = "#FF9999";
							}

							elseif($GAP > 1 && $GAP <= 1.5){
								$bac = "#ff4444";
							}

							elseif($GAP > 1.5){
								$bac = "#990000";
							}

							elseif($GAP < -0.5 && $GAP >= -1){
								$GAP = abs($GAP);
								$bac = "#B2E517";
							}

							elseif($GAP < -1 && $GAP >= -1.5){
								$GAP = abs($GAP);
								$bac = "#99cc00";	
							}

							elseif($GAP < -1.5){
								$GAP = abs($GAP);
								$bac = "#669900";
							}
						?>
						<div class="bs-example" data-example-id="condensed-table">
						    <table class="table table-condensed" style="font-size:16px;">
						      <tbody>
						        <tr>
						          <td style="  width: 50%; ">
									<div class="progress-bar-indicator orange2" style="  margin-top: 5%; float:left;" id="">
										<div id="progress" style="  width: <?php echo $reF[$key];?>%;"></div>
									</div>
						          </td>
						          <td style="padding-left: 25px;">Self:</td>
						          <td>
						          	<span style="font-weight: bold;"><?php echo $myResult;?></span>
						          	<span class="limitedF" style="font-size:14px; color:#616161;"> / 10</span>
						          </td>
						          <td rowspan="2">
						          	<div style="font-weight: bold; margin-top: -17px; text-align: center; margin-bottom: 10px;">Gap</div>
						          	<div style=" <?php echo $bord; ?> margin: auto; height: 50px; background:<?php echo $bac;?>; width: 50px; -moz-border-radius: 35px; border-radius: 35px;">
						          		<div style="font-size: 25px; text-align: center; padding-top: 5px; color: <?php echo $color;?>;"><?php echo $GAP;?></div>
						          	</div>
						          </td>
						        </tr>
						        <tr>
						          	<td style="  width: 50%; ">
							          	<div class="progress-bar-indicator purple" style="  margin-top: 5%; float:left;" id="">
											<div id="progress" style="  width: <?php echo $frindsResult[$key.'_invite'];?>%;"></div>
										</div>
									</td>
						          <td style="padding-left: 25px;">All Others:</td>
						          <td>
						          	<span style="font-weight: bold;"><?php echo $othersResult;?></span>
						          	<span class="limitedF" style="font-size:14px; color:#616161;"> / 10</span>
						          </td>
						        </tr>
						      </tbody>
						    </table>
						  </div>
					</div>
				</div>
				  <br><br>
				<?php  } ?>
			</div>
		</div>


	 </div> 

	<div class="dash-vision-content sci" style="width: 100%;   margin-top: 20px;margin-bottom: 60px;">
		<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
		<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
			<div style="display: table-cell; vertical-align: middle;">
				<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
				<p style="font-size: 16px; font-weight: 300;">
					Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget,
					elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. 
					Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum 
					cursus odio. Etiam consectetuer, risus ac fermentum pretium, est magna fringilla erat, 
					eu aliquam erat pede nec lectus.
				</p>
			</div>
			
			<div style="clear:both;"></div>
		</div>
		<div style="clear:both;"></div>
	</div>

	 </div> 




		<section class="dash-result-right"  id="graphiWeb" style="  margin-top: 10px; border-top: solid 2px #d0d0d0; display:block; width: 370px; ">
			<div id="radar_web" class="radar"></div>
		</section>
		<div style="clear:both;"></div>

</div>

	<?php } else{ ?>
	<div style="float: left;padding-right: 55px;margin-bottom: 60px;">
		<div class="dash-vision-content" style="margin-top: 0px;">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven't completed this quest yet. To discover the gaps that might exists between how you percieve yourself and how others perceive you, follow the link below
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/assessment_360m'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<?php } ?>

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