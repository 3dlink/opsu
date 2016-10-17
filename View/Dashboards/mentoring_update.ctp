<style type="text/css">
	.inputMore1, .inputMore2{
		display: none;
	}
	table{
		color: black;
	}

	#dash_content {
    	color: black;
	}
	.option{
		cursor: pointer;
	}
	.rowMentoring{
		min-height: 80px;
		border-top: 1px solid #E6E6E6;
		padding-top: 25px;	
	}
	.titleRow{
		width: 35%;
		float: left;
		font-weight: bold;
		font-size: 20px;
	}
	.formRow{
		width: 65%;
		float: left;
	}

	.inI{
		-webkit-appearance:none;
		border: none;
	  	background: none; 
	  	border-bottom: 1px solid #999999;
	}
	.dropdown-menu > li > a{
		color:#9B9B9B;
	}

	.radioB{
		margin-right:10px; 
		float: left; 
		border: 1px solid #9a9a9a; 
		width: 20px; 
		height: 20px; 
		border-radius: 10px;
	}

	.radioBchecked{
		display: none;
		background: #ff6633; 
		width: 73%; 
		border-radius: 10px; 
		margin: 0 auto; 
		margin-top: 2px; 
		height: 70%;
	}

	.optionValue{
		background-color: white;
		height: 40px;
		border: 2px solid #fbae95;
  		border-radius: 5px;
  		text-align: center;
  		padding: 5px 10px 5px 10px;
  		font-size: 16px;
  		float: left;
  		cursor: pointer;
  		margin-bottom: 20px;
	}
	.selecThis{ 
		color: white;
		background-color: #ff6633;
	}


	.carousel-indicators li {
	background-color: #000 \9;
	background-color: rgba(184, 181, 184, 1);
	border-color: rgba(184, 181, 184, 1);
	width: 5px;
	height: 5px;
	margin: 0px 4px;
}

.carousel-indicators {
	bottom: 3px;
}

.carousel-carita {
	width: 108px;
	height: 108px;
	padding: 2.2em;
	background-color: #fff;
	border: 8px solid #cabeca;
	margin-top: -192px;
	margin-left: 18px;
	border-radius: 50%;
	display: inline-block;
	background-image: url("../webroot/img/dashboard/Capa 3.png");
	background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	/* margin-right: 20px; */
}

.interno {
	width: 100%;
	height: 250px;
}

.carousel-contenido {
	width: 180px;
	line-height: 1;
	font-size: 16px;
	height: 66px;
	margin-left: 157px;
	margin-top: -123px;
	display: inline-block;
	text-align: justify;
}

.carousel-titulo {
	width: 150px;
	line-height: 1;
	font-size: 30px;
	font-weight: 600;
	height: 66px;
	color: black;
	margin-left: 157px;
	margin-top: -192px;
	display: inline-block;
}

.carousel-indicators .active {
	background-color: #454345;
	width: 6px;
	height: 6px;
	margin: 0px 4px;
}

.carousel-texto {
	position: absolute;
	/* right: 61%; */
	bottom: 205px;
	left: 4%;
	z-index: 10;
	padding-top: 20px;
	color: black;
	/* padding-bottom: 20px; */
	text-align: center;
	text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}

@media (max-width: 750px){
	#allContentMentoring{
		width: 100% !important;
	    margin-left: 0px !important;
	    padding-left: 20px;
	    padding-right: 20px !important;
	}

	.titleRow{
		float: none !important;
		width: 100% !important;
		margin-bottom: 10px !important;
	}
	.formRow{
		float: none !important;
		width: 100% !important;
	}
	.optionValue{
		float: left !important;
		margin-right: 10px !important;
		margin-left: 0px !important;
	}

	#interest{
		width: 97% !important;
	}

	#riS{
		width: 100% !important;
		margin-left: 0px !important;
		padding-left: 20px !important;
		padding-right: 20px !important;
		height: inherit !important;
		margin-bottom: 60px !important;
	}

	.rules{
		height: 7% !important;
	}

	.spanEduca {
  		margin-top: 20px !important;
  	}

  	.doa > ul {
  		margin-left: -330px !important;
  	}

	.selects > input {
		width: 97% !important;
	}

	.caja_module td{
		padding-left: 10px !important;
	}

	.titulo_izquierda{
		  padding-left: 10px !important;
	}

	#carousel-example-generic{
		width: 100% !important;
	}
}
</style>

<script type="text/javascript">

	$(document).ready(function(){
		$(".Q1 #<?php echo $mentoring['Mentoring']['describes'];?>").click();
		$("#<?php echo $mentoring['Mentoring']['year'];?>.year").click();
		$("#<?php echo $mentoring['Mentoring']['gender'];?>.quest7").click();
	})
</script>
<div id="menuUserDashboard2" style="  padding-left: 25px;">
	<div class="option" onclick="window.location.href='<?php echo $this->webroot;?>career_program/dashboard'">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option active">
		Mentoring
	<div></div>
	</div>
</div>

<div id="allContentMentoring" style="float:left; font-size:16px;  margin-left:30px; color:black; width:570px;">
	<div style="font-size:30; font-weight: bold;">
		Splendid choice!
	</div>
	<div style="">
		Help us find you a good match. Our team strives to connect protejés with mentors that work in a sector you are interested in, hace faced similar challenges as you are right now and share some of your values <br /> <br />
		To help us with this task, please provide some details about yourself:
		<br /><br />
	</div>
<!-- 1 -->
	<div class="rowMentoring Q1">
		<div class="titleRow">Wich of the following best describes you</div>
		<div class="formRow">
			
			<div>
				<div style="clear:both"></div>
				<div style="">
					<div id="1" class="radioB quest1">  <div class="radioBchecked"></div>  </div>
					<div style="">High School student</div>
				</div>
				<div style="">
					<div id="2" class="radioB quest1" > <div class="radioBchecked"></div> </div>
					<div style="">College undergraduate</div>
				</div>
				<div style="clear:both"></div>
				<div style="">
					<div id="3" class="radioB quest1"> <div class="radioBchecked"></div> </div>
					<div style="">University undergraduate</div>
				</div>
				<div style="">
					<div id="4" class="radioB quest1"> <div class="radioBchecked"></div> </div>
					<div style="">Postgraduate student</div>
				</div>
				<div style="margin-bottom:20px;">
					<div id="5" class="radioB quest1"> <div class="radioBchecked"></div> </div>
					<div style="">Not currently studying</div>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 2 -->
	<div class="rowMentoring Q2"  style="display:none;">
		<div class="titleRow">Highest education level attained</div>
		<div class="formRow selects one">
			<?php 
				$career = "Select one...";
				$idCareer = "0";
				$li = "";
				foreach ($educations as $key => $value) {
					$li = $li . '<li><a id="'.$value['Education']['id'].'" class="educa se" href="">'.$value['Education']['description'].'</a></li>';
					if($user['User']['education_id'] != 0 && $value['Education']['id'] == $user['User']['education_id'] ){
						// educations
						$idCareer = $value['Education']['id'];
						$career = $value['Education']['description'];
					}
				}
			?>
			<input style="color:black; float: left;   padding-left: 10px;  width: 95%; margin-bottom: 25px;" class="inI selt educaV" readonly="" data-educa="<?php echo $idCareer;?>" value="<?php echo $career;?>">
			<div class="btn-group doa" style="">
				<span style="margin-top: 7px; display: block; margin-left: -20px;" class="spanEduca down flagRow dropdown-toggle" data-toggle="dropdown" tabindex="-1">
					<img style="width: 20px;" src="<?php echo $this->webroot;?>img/down-menu.png">
				</span>
				<ul class="dropdown-menu" style="  width: 350px; max-height:200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto; top: 26px; border:0px; margin-left: -350px; min-width: 170px; background-color: #E6E6E6; ">
					<?php 
						echo $li;
					?>
		       	</ul>
			</div> 
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 3 -->
	<div class="rowMentoring Q3" style="display:none;">
		<div class="titleRow">Year of study</div>
		<div class="formRow selects">
			<input style="color:black; float: left;   padding-left: 10px;  width: 27%; margin-bottom: 25px;" class="inI selt yearV" readonly="" data-year="<?php echo $mentoring['Mentoring']['year']; ?>">
			<div class="btn-group doa" style="">
				<span style="margin-top: 7px; display: block; margin-left: -20px;" class="spanEduca down flagRow dropdown-toggle" data-toggle="dropdown" tabindex="-1">
					<img style="width: 20px;" src="<?php echo $this->webroot;?>img/down-menu.png">
				</span>
				<ul class="dropdown-menu" style="  width: 100px; max-height:200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto; top: 26px; border:0px; margin-left: -100px; min-width: 50px; background-color: #E6E6E6; ">
		        	<li><a id="1" class="year se" href="">1st</a></li>
		        	<li><a id="2" class="year se" href="">2nd</a></li>
		        	<li><a id="3" class="year se" href="">3rd</a></li>
		        	<li><a id="4" class="year se" href="">4th</a></li>
		        	<li><a id="5" class="year se" href="">5th</a></li>	            
		       	</ul>
			</div> 
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 4 -->	
	<div class="rowMentoring">
		<div class="titleRow">
			<div>Challenges you are facing <br /><br /></div>
			<div style="font-weight:300;">We will do our best to match you with a mentor that has faced similar challenges</div>
		</div>
		<?php 
			$spl = split(":::", $mentoring['Mentoring']['challenges']);
			foreach ($spl as $key => $value) {
				if($key != 14){
					$v = split(" = ", $value);
					if(isset($v[1])){
						if($v[1] == 1){
							if($key == 13){
								$spl[$key] = 'class="optionValue Other selecThis" data-active="1"';
							}
							else{
								$spl[$key] = 'class="optionValue selecThis" data-active="1"';
							}
						}
						else{
							if($key == 13){
								$spl[$key] = 'class="optionValue Other" data-active="0"';
							}
							else{
								$spl[$key] = 'class="optionValue Other" data-active="0"';
							}
						}
					}
					else{
						if($key == 13){
							$spl[$key] = 'class="optionValue Other" data-active="0"';
						}
						else{
							$spl[$key] = 'class="optionValue Other" data-active="0"';
						}
					}
				}
				else{
					if($spl[13] == 'class="optionValue Other selecThis" data-active="1"'){
						$s = "block";
					}
					else{
						$s = 'none';
					}
				}
			}

		?>
		<div class="formRow">
			<div id="" style="width: 80px;" <?php echo $spl[0]; ?> >Gender</div>
			<div id="" style="width: 160px; margin-left:10px; margin-right:10px;" <?php echo $spl[1]; ?> >Sexual orientation</div>
			<div id="" style="width: 90px;" <?php echo $spl[2]; ?> >Network</div>
			<div id="" style="width: 100px;" <?php echo $spl[3]; ?>>Relocation</div>
			<div id="" style="width: 140px; margin-left:10px; margin-right:10px;" <?php echo $spl[4]; ?> >Phisical disabilty</div>
			<div id="" style="width: 90px;" <?php echo $spl[5]; ?> >Ethnicity</div>
			<div id="" style="width: 130px; padding: 5px 0px 5px 0px;" <?php echo $spl[6]; ?> >Drugs / addiction</div>
			<div id="" style="width: 70px; margin-left:10px; margin-right:10px;" <?php echo $spl[7]; ?> >Money</div>
			<div id="" style="width: 130px; padding: 5px 0px 5px 0px;" <?php echo $spl[8]; ?> >Family pressure</div>
			<div id="" style="width: 170px;" <?php echo $spl[9]; ?> >Gangs / violence</div>
			<div id="" style="width: 170px; margin-left:10px;" <?php echo $spl[10]; ?> >Lack of experience</div>
			<div id="" style="width: 150px;" <?php echo $spl[11]; ?> >Lack of direction</div>
			<div id="" style="width: 110px; margin-left:10px; margin-right:10px;" <?php echo $spl[12]; ?> >Self-doubt</div>
			<div id="" style="width: 70px;" <?php echo $spl[13]; ?> >Other</div>
			<div id="" style="display:<?php echo $s;?>; margin-bottom:20px;" class="challengesOther" > <input style="width: 95%;" value="<?php echo $spl[14];?>"> </div>
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 5 -->	
	<div class="rowMentoring">
		<?php 
			$positions = split(":::", $mentoring['Mentoring']['occupations']);
			$inp1 = "";
			$inp2 = "";
			if(!isset($positions[1])){
				$positions[1] = "";
			}

			if(!isset($positions[2])){
				$positions[2] = "";
			}

			if(isset($positions[3])){
				if($positions[3] != ""){
					$inp1 = "display:block;";
				}
			}
			if(isset($positions[4])){
				if($positions[4] != ""){
					$inp2 = "display:block;";
				}
			}
		?>
		<div class="titleRow">
			<div>What are your targeted positions/occupations? <br /><br /></div>
			<div style="font-weight:300;">We will match you with mentors working in this industries</div>
		</div>
		<div class="formRow"> 
			<div style="width: 100%;">
				<div class="PyO"><input style="margin-bottom:20px; width: 95%;" value="<?php echo $positions[0];?>"> </div>
				<div class="PyO"><input style="margin-bottom:20px; width: 95%;" value="<?php echo $positions[1];?>"> </div>
				<div class="PyO"><input style="margin-bottom:20px; width: 95%;" value="<?php echo $positions[2];?>"> </div> 
				<div class="PyO inputMore1" style="<?php echo $inp1;?>"><input style="margin-bottom:20px; width: 95%;" value="<?php echo $positions[3];?>"> </div>
				<div class="PyO inputMore2" style="<?php echo $inp2;?>"><input style=" margin-bottom:20px; width: 95%;" value="<?php echo $positions[4];?>"> </div>
			</div>
			<?php 
				if($inp2 == ""){
			?>
			<div class="more" style="cursor:pointer;">
				<div style="float:left;">
					Add More...
				</div>
				<div style="float:left; margin-left:10px;  margin-top: -5;  margin-bottom: 15px;">
					<?php echo $this->Html->image('More.png');?>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 6 -->	
	<div class="rowMentoring">
		<div class="titleRow">Why are you interested in participating in The Mentoring Program?</div>
		<div class="formRow" style="margin-bottom: 20px;"><textarea id="interest" style="  border: 1px solid; width:350px; height: 115px; resize:none;"><?php echo $mentoring['Mentoring']['interested'];?></textarea> </div>
	</div>
	<div style="clear:both"></div>

<!-- 7 -->	
	<div class="rowMentoring">
		<div class="titleRow" style="margin-bottom: 20px;">Do you have a gender preferences?</div>
		<div class="formRow">
			<div style="float: left; width: 90px;">
				<div class="radioB quest7" id="1">  <div class="radioBchecked"></div>  </div>
				<div style="float:left;">Male</div>
			</div>
			<div style="float: left; width: 100px;">
				<div class="radioB quest7" id="2">  <div class="radioBchecked"></div>  </div>
				<div style="float:left;">Female</div>
			</div>
			<div style="float: left;">
				<div class="radioB quest7" id="3">  <div class="radioBchecked"></div>  </div>
				<div style="float:left;">Does not matter</div>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 8 -->	
	<div class="rowMentoring">
		<?php 
			$m = split(":::", $mentoring['Mentoring']['method']);
		?>
		<div class="titleRow " style="margin-bottom: 20px;">Preferred method of contact with your mentor</div>
		<div class="formRow">
			<div style="float:left;">
			<?php if (!in_array(1, $m) ){ ?>
				<div class="mthodC" id="1" style="float:left;"><?php echo $this->Html->image('dashboard/Rectangulo2020.png');?></div>
			<?php	} else{?>
				<div class="mthodC" id="1" style="float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
			<?php } ?>
				<div style="float:left; margin-left:10px; margin-right:25px;">Email</div>
			</div>
			<div style="float:left;">
				<?php if (!in_array(2, $m) ){ ?>
					<div class="mthodC" id="2" style="float:left;"><?php echo $this->Html->image('dashboard/Rectangulo2020.png');?></div>
				<?php	} else{?>
					<div class="mthodC" id="2" style="float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
				<?php } ?>
				<div style="float:left; margin-left:10px; margin-right:25px;">Skype</div>
			</div>
			<div style="float:left;">
					<?php if (!in_array(3, $m) ){ ?>
						<div class="mthodC" id="3" style="float:left;"><?php echo $this->Html->image('dashboard/Rectangulo2020.png');?></div>
					<?php	} else{?>
						<div class="mthodC" id="3" style="float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
					<?php } ?>
				<div style="float:left; margin-left:10px;">Face-to-face</div>
			</div>
		</div>
	</div>
	<div style="clear:both"></div>

<!-- 9 -->	
	<div class="rowMentoring">
		<div class="titleRow" style="margin-bottom: 20px;">In which state do you currently reside</div>
		<div class="formRow selects">
			<?php 
				$stat = "Select one...";
				$idState = "0";
				$li2 = "";
				foreach ($states as $key => $value) {
					$li2 = $li2 . '<li><a id="'.$value['State']['id'].'" class="state se" href="">'.$value['State']['name'].'</a></li>';
					if($user['User']['state_id'] != 0 && $value['State']['id'] == $user['User']['state_id']){
						$stat = $value['State']['name'];
						$idState = $value['State']['id'];
					}
				}
			?>
			<input style="color:black; float: left;   padding-left: 10px;  width: 95%; margin-bottom: 25px;" class="inI selt stateV" readonly="" data-state="<?php echo $idState; ?>" value="<?php echo $stat;?>">
			<div class="btn-group doa" style="">
				<span style="margin-top: 7px; display: block; margin-left: -20px;" class="spanEduca down flagRow dropdown-toggle" data-toggle="dropdown" tabindex="-1">
					<img style="width: 20px;" src="<?php echo $this->webroot;?>img/down-menu.png">
				</span>
				<ul class="dropdown-menu" style="  width: 350px; max-height:200px; white-space: nowrap; overflow-x: hidden; overflow-y: auto; top: 26px; border:0px; margin-left: -350px; min-width: 170px; background-color: #E6E6E6; ">
		        	<?php
		        		echo $li2;
		        	?>
		       	</ul>
			</div> 
		</div>
	</div>
<div style="clear: both;"></div>
<!-- Rules -->	
	<div class="rowMentoring">
		<div>
			<div class="rules" style=" margin-top: 4%; height: 6%; margin-right:15px; float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
			<div style="text-align:justify; margin-bottom:20px;">I understand that my mentor has volunteered for the Program and that the relationship is learning based. The Mentoring Program is not an employed placement program </div>
		</div>
		<div>
			<div class="rules" style="margin-top: 4%; height: 6%; margin-right:15px; float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
			<div style="text-align:justify; margin-bottom:20px;">I understand that registering for the Mentoring Program does not necessarily guarantee participation in the mentoring program if MENTOR. cannot make a suitable match</div>
		</div>
		<div>
			<div class="rules" style="margin-top: 2%; height: 6%; margin-right:15px; float:left;"><?php echo $this->Html->image('dashboard/Check2.png');?></div>
			<div style="text-align:justify; margin-bottom:20px;">I understand that I must take ownership of arranging meeting, times and locations</div>
		</div>
	</div>

	<div style="text-align: center;">
		<button style="height: 65px; width:  175px; " type="button" class="save quiz-result-btn">
			SUBMIT
		</button>
	</div>

</div>

<div id="riS" style="float:left; width:405px; margin-left:20px;   height: 1650px; background-color: white; box-shadow:0px 1px 1px 1px rgba(136, 136, 136, 0.51);">
	
	<article class="article_tips">
			<big> <label class="titulo titulo_izquierda"
				style="padding-left: 20px;">Make it work</label>
			</big>
			<div class="caja_module">
				<table>
					<tr>
						<td style="padding-left: 20px; vertical-align: top;"><img
							src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
						<td>Putting thought, time and effort into the mentoring
							relationship</td>
					</tr>

					<tr>
						<td style="padding-left: 20px; vertical-align: top;"><img
							src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
						<td>Notifying my mentor and the mentor match team if my contact
							details change</td>
					</tr>

					<tr>
						<td style="padding-left: 20px; vertical-align: top;"><img
							src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
						<td>Cheking my email regularly and replying promptly to my
							mentor’s emails even when I am busy</td>
					</tr>

					<tr>
						<td style="padding-left: 20px; vertical-align: top;"><img
							src="<?php echo $this->webroot;?>img/likeH.png" alt=""></td>
						<td>Letting my mentor and the mentor match team know if I am
							unable to continue or wish to end the relationship</td>
					</tr>

				</table>
			</div>
		</article>
		<div style="width: 80%; height: 1px; margin: 0 10%; background-color: #d0d0d0; margin-top: 40px;"></div>
		<div style="clear: both;"></div>

		<div id="carousel-example-generic"
			style="width: 370px; height: 280px; padding-top: 30px;"
			class="carousel slide" data-ride="carousel">
			<!-- Indicators -->

			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0"
					class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div>
					<div class="interno"></div>


					<div class="carousel-titulo">
						Leo Messi <br>
						<p style="font-size: 20px;">Football Player</p>
					</div>
					<div class="carousel-contenido">“Do what you gotta do so that when
						you get to do what you wanna do, you are able to.”</div>
					<div class="carousel-carita"></div>

				</div>
				<div class="item">
					<div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div>
					<div class="interno"></div>
					<!-- <div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div> -->
					<div class="carousel-titulo">
						Leo Messi <br>
						<p style="font-size: 20px;">Football Player</p>
					</div>
					<div class="carousel-contenido">“Do what you gotta do so that when
						you get to do what you wanna do, you are able to.”</div>
					<div class="carousel-carita"></div>
				</div>
				<div class="item">
					<div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div>
					<div class="interno"></div>
					<!-- <div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div> -->
					<div class="carousel-titulo">
						Leo Messi <br>
						<p style="font-size: 20px;">Football Player</p>
					</div>
					<div class="carousel-contenido">“Do what you gotta do so that when
						you get to do what you wanna do, you are able to.”</div>
					<div class="carousel-carita"></div>
				</div>
				<div class="item">
					<div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div>
					<div class="interno"></div>
					<!-- <div class="carousel-texto">
						<h5>Discover some of the mentors</h5>
					</div> -->
					<div class="carousel-titulo">
						Leo Messi <br>
						<p style="font-size: 20px;">Football Player</p>
					</div>
					<div class="carousel-contenido">“Do what you gotta do so that when
						you get to do what you wanna do, you are able to.”</div>
					<div class="carousel-carita"></div>
				</div>
			</div>

		</div>
</div>


<!-- Button trigger modal -->
<button style="display:none;" type="button" id="openModal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" style="  background-color: rgba(0,0,0,0.8);" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:330px;   top: 250px;">
    <div class="modal-content" style="  border: 1px solid rgba(0, 0, 0, 1); border-radius:15px;">
      <div class="modal-header" style="  border-bottom: 0px;">
        <button type="button" class="close" style="font-size: 20px;  border: 2px solid black; opacity: 1; border-radius: 30px; width: 25px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h4 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Ups!</h4>
        <div id="modalMsg" style="font-size:18px;  margin-bottom: 10px;"> </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript"> 
	$('.se').click(function(e){
		return false;
	})
	$('.mthodC').click(function(){
		if( $(this).find('img').attr('src') == WEBROOT+"img/dashboard/Rect%C3%A1ngulo%2020.png" ){
			$(this).find('img').attr('src', WEBROOT+'img/dashboard/Check2.png');
		}
		else{
			$(this).find('img').attr('src', WEBROOT+"img/dashboard/Rect%C3%A1ngulo%2020.png");
		}
	})

	$('.rules').click(function(){
		if( $(this).find('img').attr('src') == WEBROOT+"img/dashboard/Rect%C3%A1ngulo%2020.png" ){
			$(this).find('img').attr('src', WEBROOT+'img/dashboard/Check2.png');
		}
		else{
			$(this).find('img').attr('src', WEBROOT+"img/dashboard/Rect%C3%A1ngulo%2020.png");
		}
	})

	$('.more').click(function(){
		if( $('.inputMore1').css('display') == 'none'){
			$('.inputMore1').css('display', 'block');
		}
		else{
			$('.inputMore2').css('display', 'block');
			$('.more').css('display', 'none');
		}
	});

	$('.save').click(function(){
		var pYo = ""; 
		var education = $('.educaV').data('educa');
		var describesId = 0;
		var year = $('.yearV').data('year');
		var methodC = "";
		var challenges = "";
		var interested = $('#interest').val();
		var gender = "";
		var state = $('.stateV').data('state');

		$('.optionValue').each(function(k,v){
			var p = k+1;
			challenges = challenges + p + " = " + $(this).data('active') + ":::";
		})

		$('.quest1').each(function(k,v){
			if( $(this).find('.radioBchecked').css('display') == 'block'){
				describesId = $(this).attr('id');
			}
		})

		$('.mthodC').each(function(k,v){
			if($(this).find('img').attr('src') == WEBROOT+'img/dashboard/Check2.png'){
				methodC = methodC + $(this).attr('id') + ":::";
			}
		})

		$('.PyO').each(function(k,v){
			if( $(this).find('input').val() != ""){
				pYo = pYo + $(this).find('input').val() + ":::";
			}
		})

		$('.quest7').each(function(k,v){
			if( $(this).find('.radioBchecked').css('display') == 'block'){
				gender = $(this).attr('id');
			}
		})

		if(pYo == "" || describesId == 0 || methodC == "" || interested == "" || gender == "" || state == ""){
			// inputEmpty();
			// return false;
		}

		$(".rules").each(function(k,v){
			if ( $(this).find('img').attr('src') == WEBROOT+"img/dashboard/Rect%C3%A1ngulo%2020.png"){
				// acceptRules();
				// return false;
			}
		})

		challenges = challenges + $('.challengesOther').find('input').val();

		var data = {
			describes : describesId,
			year : year,
			occupations: pYo,
			method: methodC,
			challenges: challenges,
			interested : interested,
			gender : gender,
			user_id: 2
		}
		var dataUser = {
			state_id: state,
			education_id: education,
			user_id: 2
		}
		$.ajax({
			url: WEBROOT+"dashboards/mentoring_update",
			data: {Mentoring: data, User:dataUser},
			type: 'post',
			dataType: 'json',
			success: function(){
				window.location.replace(WEBROOT+ 'career_program/mentoring_ok');
			},
			error: function(a,e,i){

			}
		})
		
	})

	$('.state').click(function(){
		var value = $(this).html();
		$('.stateV').val(value);
		$('.stateV').data('state', $(this).attr('id'));
	})

	$('.educa').click(function(){
		var value = $(this).html();
		$('.educaV').val(value);
		$('.educaV').data('educa', $(this).attr('id'));
	})

	$('.year').click(function(){
		var value = $(this).html();
		$('.yearV').val(value);
		$('.yearV').data('year', $(this).attr('id'));
	})
	
	$(document).ready(function(){
		var he = $('#allContentMentoring').height() + 100;
		$('#menu-content').css('height', he+'px');
	})

	$('.quest1').click(function(){
		$('.quest1').each(function(k,v){
			$(this).find('.radioBchecked').css('display', 'none');
		})
		if( $(this).find('.radioBchecked').css('display') == 'none'){
			$(this).find('.radioBchecked').css('display', 'block');
		}
		else{
			$(this).find('.radioBchecked').css('display', 'none');
		}

		var thisID = $(this).attr('id');

		if(thisID <= 4){
			$('.Q2').css('display', 'none');
			$('.Q3').css('display', 'block');
		}
		else{
			$('.Q2').css('display', 'block');
			$('.Q3').css('display', 'none');
		}
	})

	$('.quest7').click(function(){
		$('.quest7').each(function(k,v){
			$(this).find('.radioBchecked').css('display', 'none');
		})
		if( $(this).find('.radioBchecked').css('display') == 'none'){
			$(this).find('.radioBchecked').css('display', 'block');
		}
		else{
			$(this).find('.radioBchecked').css('display', 'none');
		}
	})

	$('.optionValue').click(function(){
		if( $(this).hasClass('selecThis') ){
			$(this).removeClass('selecThis');
			$(this).data('active', "0");
		}
		else{
			$(this).addClass('selecThis');
			$(this).data('active', "1");
		}

		if($(this).hasClass('Other')){
			if($('.challengesOther').css('display') == "none"){
				$('.challengesOther').css('display', 'block');
			}
			else{
				$('.challengesOther').css('display', 'none');
			}
		}
	})
	
	$('.one').click(function(){
	var eleme = $(this);
	setTimeout(function(){
		   eleme.find('.doa').addClass("open"); 
		   eleme.find('.doa > span > img').attr('src', WEBROOT+"img/up-menu.png");
		},10);
	})

function acceptRules(){
	$('#modalMsg').html('Please accept all the terms');
	$('#openModal').click();
}

function inputEmpty(){
	$('#modalMsg').html('Please complete all fields');
	$('#openModal').click();
}

</script>