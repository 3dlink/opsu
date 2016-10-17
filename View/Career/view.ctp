 <style type="text/css">

 	.btnSaveC{
 		  font-size: 16px;
		  background-color: #fff;
		  border: 2px solid #51284F;
		  opacity: .50;
		  border-radius: 9px;
		  color: #51284F;
 	}
 	#img_indeed{
 		height:18px;width:60px; float:right;  margin-top: 8px;
 	}

	@media ( max-width : 750px) {
		.Salary3{
			margin-left: 20px !important;
		}

	 	#img_indeed{
	 		margin-top: 0px;
	 	}

	 	.ui-slider .ui-slider-handle {
	 		width: 2em !important;
  			height: 2em !important;
	 	}
	 	#area-range2 > span:nth-child(2) {
	 		  top: -.8em !important;
	 	}

	}

	@media ( max-width : 470px) {
		#titulos_indeed {
		  font-size: 14px;
		}
		#btn_job {
			font-size: 14px;
		}
		tr > td {
		  font-size: 14px !important;
		}
	}

	@media ( max-width : 430px) {
		#titulos_indeed {
		  font-size: 12px;
		}
		#btn_job {
			font-size: 12px;
			width: inherit;
			height: inherit;
		}
		tr > td {
		  font-size: 12px !important;
		}
	}

	@media ( max-width : 330px) {
		#titulos_indeed {
		  font-size: 11px;
		}
		#btn_job {
			font-size: 11px;
			width: inherit;
			height: inherit;
		}
		tr > td {
		  font-size: 11px !important;
		}
	}
 </style>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">


  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
  <script type="text/javascript" src="https://gdc.indeed.com/ads/apiresults.js"></script>
  <?php echo $this->Html->script('lib/jquery-mobile.js');?>

  <?php echo $this->Html->script('lib/circles.min.js');?>
<?php 


$RealR = round($career['Carreersfit']['r'] * 100); 
if($RealR <= 0){
	$RealR = 1;
}
	
	$imgC = str_replace(".", "", $career['Jobsinfo']['id']);
	if ( !file_exists("../webroot/img/career/".$imgC.".jpg") ){
		$imgC = "default";
	}

	if($RealR >= 75){
		$compatibility = "excellent";
	}
	if($RealR >= 50 && $RealR < 75){
		$compatibility = "good";
	}
	if($RealR >= 20 && $RealR < 50){
		$compatibility = "poor";
	}
	if($RealR < 20){
		$compatibility = "very poor";
	}


	if($career['Jobsinfo']['career_employement_change'] >= 13){
		$botonJob = "EXCELLENT";
		$ColorBottom = "#99CC00";
	}
	if($career['Jobsinfo']['career_employement_change'] > 0 && $career['Jobsinfo']['career_employement_change'] < 13){
		$botonJob = "GOOD";
		$ColorBottom = "#FFBB33";

	}
	if($career['Jobsinfo']['career_employement_change'] <= 0 && $career['Jobsinfo']['career_employement_change'] > -9){
		$botonJob = "POOR";
		$ColorBottom = "#FF8800";

	}
	if($career['Jobsinfo']['career_employement_change'] < -9){
		$botonJob = "VERY POOR";		
		$ColorBottom = "#FF4444";
	}

	if($career['Jobsinfo']['career_employement_change'] > 0){
		$text = "grow by ".$career['Jobsinfo']['career_employement_change']."%";
	}
	if($career['Jobsinfo']['career_employement_change'] < 0){
		$text = "decrece by ".$career['Jobsinfo']['career_employement_change']."%";
	}
	if($career['Jobsinfo']['career_employement_change'] == 0){
		$text = "remain the same";
	}
	
	
?>
<?php

$s['problem_solving']['name'] = "Problem solving";
$s['problem_solving']['color'] = "blue";
$s['critical_thinking']['name'] = "Critical thinking";
$s['critical_thinking']['color'] = "red";
$s['time_management']['name'] = "The management";
$s['time_management']['color'] = "green";
$s['persuasion']['name'] = "Persuasion";
$s['persuasion']['color'] = "orange";

$s['speaking']['name'] = "Communication skills";
$s['speaking']['color'] = "yellow";

$acum = 0;
?>

<style>
p{
	  white-space: pre-line;
}

.option{
	cursor: pointer;
}

#area-range > span:nth-child(3){
	background: #9BCD05 !important;
	top: -0.4em !important;
}
#area-range > span:nth-child(1){
	display: none;
}

#area-range > span:nth-child(2){
	background: #9BCD05 !important;
	color: #9BCD05 !important;
	top: -.4em;
}

.ui-slider-handle{
	background: #9BCD05 !important;
	color: #9BCD05 !important;
	top: -.4em;
	left: 40%;
}

#area-range2 > span:nth-child(3){
	background: #9BCD05 !important;
	top: -0.4em !important;
}
#area-range2 > span:nth-child(1){
	display: none;
}

#area-range2 > span:nth-child(2){
	background: #9BCD05 !important;
	color: #9BCD05 !important;
	top: -.4em;
}

h4{
	font-size: 20px !important;
	font-weight: bold;
}

label{
	font-family: 'Lato', Bold;
	font-weight: bold;
  	font-size: 16px;
}

div{
	font-family: 'lato' bold !important;
}

</style>

<div id="menuUserDashboard2">
	<div class="option allCa" data-class="1one">
		All careers
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option active" data-class="2two">
		<?php echo $career['Jobsinfo']['career_name']; ?>
		<div></div>
	</div>
</div>

	<div id="course-content" style="display:none;" class="cont 1one">
		<!-- que se hata aqui -->
	</div>

	<div id="course-content" class="cont 2two" style="  width: 100%;">
		<div class="men-left" style="text-align:justify;  width: 55%; float:left;">

			<div class="course-min-content" style=" height:320px; max-width: none;  margin-bottom:0px">
				<div id="course-min-img-content" style=" background-size: cover; background-repeat: no-repeat;  height: 100%; background-image: url('	<?php echo $this->webroot."img/career/".$imgC.".jpg";?>');">
					<div id="course-tittle" style="display:table; font-size: 24px;">
						<span style="display:table-cell; vertical-align: middle; font-weight: bold;"><?php echo $career['Jobsinfo']['career_name']; ?></span>
					</div>
				</div>
			</div>


		<!-- 	<div>
				<?php //echo $this->Html->image('career/'.$career['Jobsinfo']['id'].'.jpg', array('width' => '100%', 'height' => '320px'));?>
			</div> -->
			<div>
				<div>
					<h4 style="color:black; margin-top: 30px; margin-bottom: 20px;">
						What they do
					</h4>
						<p><?php echo nl2br($career['Jobsinfo']['career_what']);?></p>
				</div>
				<div class = "secondText">
					<h4 style="color:black; margin-top: 30px; margin-bottom: 20px;">
						How to become one
					</h4>
					<p>
						<?php echo nl2br($career['Jobsinfo']['career_how']);?>
					</p>
				</div>

				<div class="dash-result-content data-mobile" style="display:none; border-top: 2px #D7D7D7 solid; margin-top: -90px; padding-top: 30px;">

					<div style=" margin-bottom:20px;">
						<h4 style="color:black; margin-top: 30px; margin-bottom: 20px;">How to become one</h4>
						<p><?php echo nl2br($career['Jobsinfo']['career_how']);?></p>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-bottom: 20px;">
							Overrall compatibility
						</h4>
						<div style="width:100%;">
							<div style="  float: left; width:50%;">
								<div id="canvas">
									<div class="circle" id="circles-2"></div>
								</div>
							</div>
							<div style="  float: right; width:50%;">
								<p style="font-size:1.16em;">
									Based the information you provided, this career is an <b><?php echo $compatibility;?></b> fit for you.
								</p>
								<div id="btn-result-content" style="padding-top: 0.5em;">
									<?php if($career['Carreersfit']['favorite'] == 0){ ?>
										<button id="btn-result" class="favorites addfavorites" data-career="<?php echo $career['Carreersfit']['id'];?>" style="padding: 0.4em 1em;   min-width: 150px;">Add to favorites</button>
									<?php }
									else{ ?>
										<button id="btn-result" class="favorites removefavorites" data-career="<?php echo $career['Carreersfit']['id'];?>" style="padding: 0.4em 1em;   min-width: 150px;">Remove from favorites</button>
									<?php } ?>
								</div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Match with my career vision
						</h4>
						<p>How much would this career contribute towards fullfilling my career vision?</p>
						<div id="area-range2" style="margin-top: 40px; background:#E1F0B4;   border: 0px; height: 5px;"></div>
						<div style="margin-top: 5px;">
							<label>Low</label> <label style="float: right;">High</label> 
						</div>
						<div id="btn-result-content " style="  text-align: center; padding-top: 0.5em;">
							<button id="" class="btnSaveC porcentCarrer" style="  font-weight: 300; padding: 0.4em 1em;   min-width: 150px;">
								Save
							</button>
						</div>
					</div>

				</div>
				<!--<h4 style="color:black; margin-top: 30px; margin-bottom: 35px;">
					Importance of the strenghts you'll need
				</h4>

				 <div class="dash-result-left" style="width:100%; ">
					<div class="dash-result-content" style="padding: 1em 20px !important; min-height: 0px !important;">
						<div style="  text-align: center; float: right; width: 20%;   margin-bottom: 8px; font-size: 16px; padding-left: 35px;">How you scored</div>
						<div style="clear:both;"></div>

						<?php 
								// debug($user_skills);

						foreach ($s as $key => $value) { //debug($key);?>
							
						<div class="result-indicator" style="width: 80%; float:left;">
							<div id="resul-desc-indicator">
								<label class="name-stadis" style="font-size: 20px">
									<b><?php echo $value['name'];?></b>
									<span>
										<?php echo $this->Html->image('dashboard/info.png');?>
									</span>
								</label>
								<label id="number">
									<b><?php echo round($career['Jobsinfo'][$key] / 10);?></b>
									<small>/10</small>
								</label>
							</div>
							<div class="progress-bar-indicator <?php echo $value['color']?>" id="">
								<div id="progress" style="width:<?php echo $career['Jobsinfo'][$key]; ?>%"></div>
							</div>
						</div>
						<div class="result-indicator" style="padding-top: 13px; width: 20%; float: left; font-size: 15px; padding-left: 45px;">
							<label style="font-size: 20px; color:#FF4A4A;" id="number">
								<b><?php 
								if(!empty($user_skills)){
									if($key == "speaking"){
										echo round($user_skills['Skillsa']['communication'] / 10);
									}
									elseif($key == "persuasion"){
										echo round($user_skills['Skillsa']['commercial_awareness'] / 10);
									}
									else{
										echo round($user_skills['Skillsa'][$key] / 10);
									}
								}else{
									if($key == "speaking"){
										echo 'N/A1';
									}
									elseif($key == "persuasion"){
										echo 'N/A2';
									}
									else{
										echo 'N/A3';
									}

								}
									?></b>
								<small><?php if(!empty($user_skills))echo '/10';?></small>
							</label>
						</div>
						<div style="clear:both;"></div>

						<?php }

						?>

						<p style="margin-top:10px;">Improve your skills y taking an online course from the selection of <span onclick="window.location.href='<?php echo $this->webroot;?>dashboards/course'" style="font-weight: bold; text-decoration: underline;">Courses</span> we have prepared for you.</p>
					</div>
				</div> -->
						<div style="clear:both;"></div>

				<div class="sencondDataMobile" style="display:none;">
					
					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Salary in <?php echo $st['State']['name'];?>
						</h4>
						<div class="Salary3" style="display: flex; margin-left:50px; margin-right:20px;">
							<div style="width: 80px; float: left;">
								<div style="  font-size: 16px; border-bottom: 5px solid #C3C3C3;">Entry Level</div>
								<div style="  font-size: 16px;">$<?php 

									$to = isset($career['State']['menor']) ? $career['State']['menor'] * 1000 : "N/A";
									echo $to;

								?></div>
							</div>
							<div style="text-align:center; width: 110px; color: #B9DC52; float: left; margin-left:10px;">
								<div style="  font-size: 16px; border-bottom: 5px solid #B9DC52;">Median</div>
								<div style="  font-size: 16px;">$<?php 
									
									$to = isset($career['State']['medio']) ? $career['State']['medio'] * 1000 : "N/A";
									echo $to;

									?></div>
							</div>
							<div style="text-align:right; width: 80px; float: left; margin-left:10px;">
								<div style="  font-size: 16px; border-bottom: 5px solid #C3C3C3;">Highest</div>
								<div style="  font-size: 16px;">$<?php 

									$to = isset($career['State']['mayor']) ? $career['State']['mayor'] * 1000 : "N/A";
									echo $to;

								?></div>
							</div>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Job outlook
						</h4>
						<div>
							<div style="  text-align: center; color:white; height: 40px; width: 100%; background:<?php echo $ColorBottom;?>;">
								<label style="font-size:18px; margin-top: 5px;"><?php echo $botonJob; ?></label>
							</div>
							<div>
								<p style="margin-top: 30px; margin-bottom: 30px;">The <?php echo $career['Jobsinfo']['career_name']; ?> job market is expected to <?php echo $text;?> between 2012 and 2022, creating <?php echo number_format($career['Jobsinfo']['career_openings'] * 1000, 0,null,".");?> job vacancies.</p>
							</div>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Minimun entry-level education
						</h4>
						<div>
							<p><?php echo $career['Jobsinfo']['career_education_level'];?></p>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Minimun on-the-job training
						</h4>
						<div>
							<p><?php echo $career['Jobsinfo']['career_job_training'];?></p>
						</div>
					</div>

				</div>

			<div style="  margin-top: 40px; padding-bottom: 30px;">
				<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;font-weight:600;">
					<?php echo $career['Jobsinfo']['career_name']; ?> jobs in <?php echo $st['State']['name'];?>
				</h4>
				<?php if(!empty($indeed)){?>
					<div id = "indeed">
						<table style="border-collapse: collapse;">
							<tr id="titulos_indeed">
								<td class="td_indeed_titulo">
									Title
								</td>
								<td class="td_indeed_titulo">
									Company
								</td>
								<td class="td_indeed_titulo">
									Location
								</td>
								<td class="td_indeed_titulo">
									More info
								</td>
							</tr>

							<?php for($i=0;$i<6;$i++){
									if(isset($indeed[$i])){
								?>
										<tr class="trabajos_indeed">
											<td class="td_indeed">
												<?php echo $indeed[$i]['jobtitle'];?>
											</td>
											<td class="td_indeed">
												<?php echo $indeed[$i]['company'];?>
											</td>
											<td class="td_indeed">
												<?php echo $indeed[$i]['formattedLocation'];?>
											</td>
											<td class="td_indeed_btn">
													<a target="_blank" id="btn_job" href="<?php echo $indeed[$i]['url'];?>">Job details</a>
											</td>
										</tr>
							<?php 
									}
								}
							?>

						</table>
					</div>
				

				<div style="color:black; width:120px;  float: right;margin-top: 0px;">
					<h4 style="font-size:16px !important;float:left;">Jobs by</h4>
					<img id="img_indeed" src="<?php echo $this->webroot;?>img/indeed.png"></img>
				</div>

				<?php }else{?> 
					<div style="font-size:16px;">Sorry, no job vacancies found for this state</div>
				<?php } ?>

			</div>


			</div>
		</div>

		<div class="men-right" style="width: 36%;   float: left; margin-left: 30px;" >
			<div class="dash-result-right" style="width:100%; ">
				<div class="dash-result-content" style="padding: 1em 20px !important; min-height: 0px !important;">
					
					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-bottom: 20px;">
							Overrall compatibility
						</h4>
						<div style="width:100%;">
							<div style="  float: left; width:50%;">
								<div id="canvas">
									<div class="circle" id="circles-1"></div>
								</div>
							</div>
							<div style="  float: right; width:50%;">
								<p style="font-size:1.16em;">
									Based the information you provided, this career is an <b><?php echo $compatibility;?> fit </b>for you.
								</p>
								<div id="btn-result-content" style="padding-top: 0.5em;">
									<?php if($career['Carreersfit']['favorite'] == 0){ ?>
										<button id="btn-result" class="favorites addfavorites" data-career="<?php echo $career['Carreersfit']['id'];?>" style="padding: 0.4em 1em;   min-width: 150px;">Add to favorites</button>
									<?php }
									else{ ?>
										<button id="btn-result" class="favorites removefavorites" data-career="<?php echo $career['Carreersfit']['id'];?>" style="padding: 0.4em 1em;   min-width: 150px;">Remove from favorites</button>
									<?php } ?>
								</div>
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Match with my career vision
						</h4>
						<p>
							How much would this career contribute towards fullfilling my career vision?
						</p>
						<div id="area-range" style="margin-top: 40px; background:#E1F0B4;   border: 0px; height: 5px;"></div>
						<div style="margin-top: 5px;">
							<label>Low</label> <label style="float: right;">High</label> 
						</div>
						<div id="btn-result-content" style="padding-top: 0.5em;">
							<button id="" class="btnSaveC porcentCarrer" style="font-weight: 300; padding: 0.4em 1em;   min-width: 150px;">
								Save
							</button>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Salary in <?php echo $st['State']['name'];?>
						</h4>
						<div style="display: flex; margin-left:20px; margin-right:20px;">
							<div style="width: 80px; float: left;">
								<div style="  font-size: 16px; border-bottom: 5px solid #C3C3C3;">Entry Level</div>
								<div style="  font-size: 16px;">$<?php 

									$to = isset($career['State']['menor']) ? $career['State']['menor'] * 1000 : "N/A";
									echo $to;

								?></div>
							</div>
							<div style="text-align:center; width: 110px; color: #B9DC52; float: left; margin-left:10px;">
								<div style="  font-size: 16px; border-bottom: 5px solid #B9DC52;">Median</div>
								<div style="  font-size: 16px;">$<?php 

									$to = isset($career['State']['medio']) ? $career['State']['medio'] * 1000 : "N/A";
									echo $to;

								?></div>
							</div>
							<div style="text-align:right; width: 80px; float: left; margin-left:10px;">
								<div style="  font-size: 16px; border-bottom: 5px solid #C3C3C3;">Highest</div>
								<div style="  font-size: 16px;">$<?php 

									$to = isset($career['State']['mayor']) ? $career['State']['mayor'] * 1000 : "N/A";
									echo $to;

								?></div>
							</div>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Job outlook
						</h4>
						<div>
							<div style="  text-align: center; color:white; height: 40px; width: 100%; background:<?php echo $ColorBottom;?>;">
								<label style="font-size:18px; margin-top: 5px;"><?php echo $botonJob; ?></label>
							</div>
							<div>
								<p style="margin-top: 30px; margin-bottom: 30px;">The <?php echo $career['Jobsinfo']['career_name']; ?> job market is expected to <?php echo $text;?> between 2012 and 2022, creating <?php echo number_format($career['Jobsinfo']['career_openings'] * 1000, 0,",",".");?> job vacancies.</p>
							</div>
							<!-- <div class="table-responsive">
							  <table border="0" class="table" style="margin-bottom:0px; border-spacing: 0; font-size:14px;">
							    <tr style="background:#B9A9B9;font-weight: bold;">
								  <td class="">Title</td>
								  <td class="">Change</td>
								  <td class="">Vacancies</td>
								</tr>
								<tr>
									<td>Dentists-General</td>
									<td>+16%</td>
									<td>20.600</td>
								</tr>
								<tr style="background: #EDE9ED;">
									<td>Oral and maxillofacial surgeons</td>
									<td>+16%</td>
									<td>1.100</td>
								</tr>
								<tr>
									<td>Orthodontists</td>
									<td>+16%</td>
									<td>12.000</td>
								</tr>
								<tr style="background: #EDE9ED;">
									<td>Prosthodontists</td>
									<td>+15%</td>
									<td>100</td>
								</tr>
								<tr>
									<td>Dentists - all other specialists</td>
									<td>+6%</td>
									<td>400</td>
								</tr>
							  </table>
							</div> -->
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Minimun entry-level education
						</h4>
						<div style="font-size: 16px;">
							<?php echo $career['Jobsinfo']['career_education_level'];?>
						</div>
					</div>

					<div style="border-bottom: 2px #D7D7D7 solid; padding-bottom: 30px;">
						<h4 style="color:black; margin-top: 20px; margin-bottom: 20px;">
							Minimun on-the-job training
						</h4>
						<div style="font-size: 16px;">
							<?php echo $career['Jobsinfo']['career_job_training'];?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">

$('.favorites').click(function(){
	var idCar = "<?php echo $career['Jobsinfo']['id'] ?>";
	if($(this).hasClass('addfavorites')){
		$.ajax({
			url:WEBROOT+'Career/changeFavorite/'+idCar,
			dataType: 'json',
			success: function(data){
				if(data == 1){
					$('.addfavorites').addClass('removefavorites');
					$('.addfavorites').html('Remove from favorites');
					$('.addfavorites').removeClass('addfavorites');
				}
			},
			error: function(a,e,i){
				console.log(a);
			}
		})
	}
	if($(this).hasClass('removefavorites')){
		$.ajax({
			url:WEBROOT+'Career/changeFavorite/'+idCar,
			dataType: 'json',
			success: function(data){
				if(data == 1){
					$('.removefavorites').addClass('addfavorites');
					$('.removefavorites').html('Add to favorites');
					$('.removefavorites').removeClass('removefavorites');
				}
			},
			error: function(a,e,i){
				console.log(a);
			}
		})
	}
})

$('.option').click(function(){
	$('.cont').css('display', 'none');
	$('.option').removeClass('active');
	$(this).addClass('active');
	var cl = $(this).data('class');
	// $('.'+cl).css('display', 'block');
});

$('.allCa').click(function(){
		window.location = WEBROOT+"career_program/careers/all";
})

$('.porcentCarrer').click(function(){
	$('.porcentCarrer').css('color', 'white');
  	$('.porcentCarrer').css('border', '2px solid #99cc00');
  	$('.porcentCarrer').css('backgroundColor', '#99cc00');
  	$('.porcentCarrer').html('Saved!');
  	$('.porcentCarrer').css('opacity', '1');

	setTimeout(function(){ 

		$('.porcentCarrer').css('color', '#51284F');
	  	$('.porcentCarrer').css('border', '2px solid #51284F');
	  	$('.porcentCarrer').css('backgroundColor', '#fff');
	  	$('.porcentCarrer').html('Save');
	  	$('.porcentCarrer').css('opacity', '0.5');
	
	}, 3000);
	
});

$(document).ready(function(){
	// console.log($('#info_content').height());
	var hh = $('#info_content').height();
	// hh = hh + 0;

	// console.log(hh);
	// var hh2 = $('#menu-content').height();
	$('#menu-content').height(hh + "px");

	$('.dash-result-right > .dash-result-content').height((hh  - 90)+ "px");

   	$( "#area-range" ).slider({	
    	range: false,
     	min: 0,
      	max: 100,
      	values: [0, 50]
    });


   	$( "#area-range2" ).slider({	
    	range: false,
     	min: 0,
      	max: 100,
      	values: [0, 50]
    });
})

</script>
	<script>
	var active;
	var inactive;
		//@ http://jsfromhell.com/array/shuffle [v1.0]
		function shuffle(o){ //v1.0
			for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
		}

		if(<?php echo $RealR;?> >= 75){
			active = "#99CC00";
			inactive ="#EEF7D5";
		}

		if(<?php echo $RealR; ?> >= 50 && <?php echo $RealR;?> < 75){
			active = "#FFBB33";
			inactive = "#f9e4bb";
		}

		if(<?php echo $RealR; ?> >= 20 && <?php echo $RealR; ?> < 50){
			active = "#FF8800";
			inactive = "#F8DBBB";
		}

		if(<?php echo $RealR; ?> < 20){
			active = "#FF4444";
			inactive = "#FCD8D8"
		}

		//claro / oscuro
		var colors = [ 
			[inactive, active]
		], circles = [];

			var child = document.getElementById('circles-1'),
				percentage = <?php echo $RealR; ?>;
				circles.push(Circles.create({
				id:         child.id,
				value:		percentage,
				radius:     75,
				width:      10,
				colors:     colors[1 - 1]
			}));
			
			var child = document.getElementById('circles-2'),
				percentage = <?php echo $RealR; ?>;
				circles.push(Circles.create({
				id:         child.id,
				value:		percentage,
				radius:     60,
				width:      10,
				colors:     colors[1 - 1]
			}));

			// $(document).on('change', '#circles-1', function(){
			// 	alert('ready')
			// })


			 $('#circles-1').css('color', active);


	</script>
