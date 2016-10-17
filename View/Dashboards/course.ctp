<?php 

$mod2 = $user['Puntaje']['personal'] + $user['Puntaje']['pyramid'] + $user['Puntaje']['obituary'] + $user['Puntaje']['meditation'] + $user['Puntaje']['career'];
$mod1 = $user['Puntaje']['work'] + $user['Puntaje']['abilities'] + $user['Puntaje']['vocational'] + $user['Puntaje']['skills'];
$mod3 = $user['Puntaje']['cdmf'] + $user['Puntaje']['ajh'] + $user['Puntaje']['feedback'];

$mod2 = floor(($mod2 * 100) / 180);
$mod1 = ($mod1 * 100) / 200;
$mod3 = ($mod3 * 100) / 200;
$total = 0;

foreach ($user['Puntaje'] as $key => $value) {
	if($value == 0){
		$total++;
	}
}
$total = 12 - $total;
$percent_total = round(($total * 100) / 12);

?>

<script type="text/javascript">
	$(window).load(function(){
		var hh = $('#info_content').height();
		if(hh < 450){
			hh = 450;
		}
		$('#menu-content').height(hh + "px");
	})

</script>

<style>
.img-content{
	background-size: 150% !important;
}
.career_link{
	cursor: pointer;
}
.course_link{
	cursor: pointer;
}
#dash_content #menu-content {
  height: 159.8%;
}
</style>

<div id="menuUserDashboard2">
	<div class="option active">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option" id="mentoring" style="cursor:pointer;">
		Mentoring
	<div></div>
	</div>
</div>

<div id="course-content">
	<?php //for($x=0; $x < 5; $x++ ):?>


	<div  style="display: none;" class="course-min-content leftC modknowMark " id="modKnow2">
		<div id="course-min-img-content" class="imgInside" style="background-image: url('../webroot/img/dashboard/dash2.png');">		
				<div id="gradiante">
					</div>
					<div id="course-name">
						<label>Know Myself</label>
						<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
					</div>
					<div id="course-tittle">
					 Part 1: Understand what makes me different
					</div>
			</div>
			<div id="course-min-advance">				
				<span>
					<big>
						<big>
							<?php echo $mod1?>
						</big>
					</big>
					<small>%</small>
				</span>			
					<?php 

						if($mod1 >= 70){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
						}
						if($mod1 >= 90){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
						}

					?>	
				<div id="line-Progress">
					<div id="progress" style="width: <?php echo $mod1?>%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>




		<div class="course-min-content leftC modknowReal" id="modKnow">
			
			<?php if($user['User']['mod1'] == 0){ ?>
				<a href="<?php echo $this->webroot;?>career_program/intro_module_1">
			<? }
			else{ ?>
				<a href="<?php echo $this->webroot;?>career_program/quests_module_1">
			<?php }?>


				<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 1;"> 
					<div style="  width: 220px; height: 60px; background: black; color: white; margin: 0 auto; margin-top: 35%; text-align: center; font-size: 20px; padding-top: 15px;">
						<?php 
							if($mod1 == 0){
								echo "Start this module";
							}
							else{
								echo "Continue this module";
							}
						?>
						
					</div>
				</div>
			</a>
			<div id="course-min-img-content" class="imgInside" style="background-image: url('../webroot/img/dashboard/dash2.png');">
				<?php if($user['User']['mod1'] == 0){ ?>
					<a href="<?php echo $this->webroot;?>career_program/intro_module_1">
				<?php }
				else{ ?>
					<a href="<?php echo $this->webroot;?>career_program/quests_module_1">
				<?php }?>				
				<div id="gradiante">
					</div>
					<div id="course-name">
						<label>Know Myself</label>
						<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
					</div>
					<div id="course-tittle">
					 Part 1: Understand what makes me different
					</div>
				</a>
			</div>
			<div id="course-min-advance">				
				<span>
					<big>
						<big>
							<?php echo $mod1?>
						</big>
					</big>
					<small>%</small>
				</span>			
					<?php 

						if($mod1 >= 70){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
						}
						if($mod1 >= 90){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
						}

					?>	
				<div id="line-Progress">
					<div id="progress" style="width: <?php echo $mod1?>%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>
		<div class="course-min-content rigthC leftStyle" style="margin-left: 76px; margin-right: 76px;">
			<?php if($user['User']['mod2'] == 0){ ?>
				<a href="<?php echo $this->webroot;?>career_program/intro_module_2">
			<?php }
			else{ ?>
				<a href="<?php echo $this->webroot;?>career_program/quests_module_2">
			<?php }?>
							<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 1;"> 
					<div style="  width: 220px; height: 60px; background: black; color: white; margin: 0 auto; margin-top: 35%; text-align: center; font-size: 20px; padding-top: 15px;">
						<?php 
							if($mod2 == 0){
								echo "Start this module";
							}
							else{
								echo "Continue this module";
							}
						?>
						
					</div>
				</div>
			</a>
			<div id="course-min-img-content" class=" imgInside" style="background-image: url('../webroot/img/dashboard/dash1.png');">
			<?php if($user['User']['mod2'] == 0){ ?>
				<a href="<?php echo $this->webroot;?>career_program/intro_module_2">
			<?php }
			else{ ?>
				<a href="<?php echo $this->webroot;?>career_program/quests_module_2">
			<?php }?>
								<div id="gradiante">
					</div>
					<div id="course-name">
						<label>My Career Vision</label>
						<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
					</div>
					<div id="course-tittle">
					Part 2: Create a career vision for my life
					</div>
				</a>
			</div>
			<div id="course-min-advance">
				
					<span>
						<big><?php echo $mod2?></big><small>%</small>
					</span>
					<?php 

						if($mod2 >= 70){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
						}
						if($mod2 >= 90){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
						}

					?>			
				<div id="line-Progress">
					<div id="progress" style="width: <?php echo $mod2?>%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
			
		</div>	
		<div class="course-min-content leftC">
			<?php if($user['User']['mod3'] == 0){?>
				<a href="<?php echo $this->webroot;?>career_program/intro_module_3">
			<?php }
			else{?>
				<a href="<?php echo $this->webroot;?>career_program/quests_module_3">
			<?php }?>

				<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 1;"> 
					<div style="  width: 220px; height: 60px; background: black; color: white; margin: 0 auto; margin-top: 35%; text-align: center; font-size: 20px; padding-top: 15px;">
						<?php 
							if($mod3 == 0){
								echo "Start this module";
							}
							else{
								echo "Continue this module";
							}
						?>
						
					</div>
				</div>
			</a>

			<div id="course-min-img-content" class="imgInside" style="background-image: url('../webroot/img/dashboard/dashb3.png');">
				<?php if($user['User']['mod3'] == 0){?>
					<a href="<?php echo $this->webroot;?>career_program/intro_module_3">
				<?php }
				else{?>
					<a href="<?php echo $this->webroot;?>career_program/quests_module_3">
				<?php }?>

					<div id="gradiante">
					</div>
					<div id="course-name">
						<label>Improve My Decision-Making</label>
						<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
					</div>
					<div id="course-tittle">
					 Part 3: Learn how to avoid common mind biases
					</div>
				</a>
			</div>
			<div id="course-min-advance">
				
					<span>
						<big>
							<big>
								<?php echo $mod3?>
							</big>
						</big>
						<small>%</small>
					</span>

					<?php 

						if($mod3 >= 70){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
						}
						if($mod3 >= 90){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
						}

					?>	
				<div id="line-Progress">
					<div id="progress"style="width: <?php echo $mod3?>%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>				
	<?php //endfor;?>
	<div id="mod4" class="course-min-content bloqueado rigthC">
		<?php if($mod1 >= 70){ ?>
			<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 1;"> 
				<div style="  width: 220px; height: 60px; background: black; color: white; margin: 0 auto; margin-top: 35%; text-align: center; font-size: 20px; padding-top: 15px;">
					Enter this module					
				</div>
			</div>
		<?php } else{ ?>
			<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 5;"> 
				<div style="  width: 220px; background: black; color: white; margin: 0 auto; margin-top: 15%; text-align: center; font-size: 20px; padding-top: 15px; padding-bottom:15px;">
					Earn a silver key in Module1, Know Myself, to unlock the access to recommended careers.
				</div>
			</div>
		<?php 	}?>
				

		<div id="bloqueo" class="mod4">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<?php if($mod1 >= 70){
			$cl = "imgInside";
		}else {
			$cl = "";
		}?>
		<div id="course-min-img-content" class="<?php echo $cl;?>" style="background-image: url('../webroot/img/dashboard/dash4.png');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>Explore Career Paths</label>

				<?php if($mod1 >= 70){ ?>
					<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				<?php } else{?> 
					<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDashBlack.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				<?php }?>
			</div>
			<div id="course-tittle">
				Part 4: Browse through recommended careers paths
			</div>
		</div>
		<div id="course-min-advance">
			
				<span>
					<big>
						<big>
							<?php 
							if($mod1 >= 70){ 
								if($career_favoritos == 0) echo 0;
								else{
									if(($career_favoritos >= 1)&&($career_favoritos < 3))
										echo 70;
									if($career_favoritos >= 3)
										echo 100;
								}
							}
							else{
								echo 0;
							}
							?>
						</big>
					</big>
					<small>%</small>
				</span>
					<?php 
					
					if($mod1 >= 70){ 
						if($career_favoritos == 0){}
						else{
							if($career_favoritos >= 1){
								echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
							}
							if($career_favoritos >= 3){
								echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
							}
						}
					}
					else{
						// echo 0;
					}
					?>	
			<div id="line-Progress">
				<div id="progress" style="width:<?php 
				if($mod1 >= 70){ 
					if($career_favoritos == 0) echo 0;
					else{
						if(($career_favoritos >= 1)&&($career_favoritos < 3))
						echo 70;
						if($career_favoritos >= 3)
							echo 100;
					}
					
				}
				else{
					echo 0;
				}
				?>%;">
				</div>
			</div>
			<div id="lineGrey"></div>
			<div id="lineGold"></div>
		</div>
	</div>

	<div id="mod5" class="course-min-content bloqueado leftStyle leftC" style="margin-left: 76px; margin-right: 76px;">
		<?php if($mod1 >= 90){ ?>
				<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 1;"> 
				<div style="  width: 220px; height: 60px; background: black; color: white; margin: 0 auto; margin-top: 35%; text-align: center; font-size: 20px; padding-top: 15px;">
					Enter this module					
				</div>
			</div>
		<?php } else{ ?>
			<div class="maskDash" style="cursor:pointer; display:none; background-image: url('../webroot/img/dashboard/background-hover.png');background-size: 100%;height: 100%;width: 100%;position: absolute;z-index: 5;"> 
				<div style="  width: 220px; background: black; color: white; margin: 0 auto; margin-top: 15%; text-align: center; font-size: 20px; padding-top: 15px; padding-bottom:15px;">
					Earn a golden key in Module1, Know Myself, to unlock the access to recommended courses.				
				</div>
			</div>

		<?php 	} ?>
		<div id="bloqueo" class="mod5">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<?php if($mod1 >= 90){
			$cl = "imgInside";
		}else {
			$cl = "";
		}?>
		<div id="course-min-img-content" class="<?php echo $cl;?>" style="background-image: url('../webroot/img/dashboard/dash5.png');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>Take Action</label>
				<?php if($mod1 >= 90){ ?>
					<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				<?php } else{?> 
					<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDashBlack.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				<?php }?>			</div>
			<div id="course-tittle">
				Part 5: Take a course job hunt or become an entrepeneur
			</div>
		</div>
		<div id="course-min-advance">
				<span>
					<big>
						<big>
							<?php
							if($mod1 >= 90){
								if($course_favoritos == 0)
									echo 0;
								else{
									if(($course_favoritos >= 1)&&($course_favoritos < 3))
										echo 70;
									if($course_favoritos >= 3)
										echo 100;
								}
							}
							else{
								echo 0;
							}
							?>
						</big>
					</big>
					<small>%</small>
				</span>
					<?php 
						if($course_favoritos >= 1){
							echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));
						}
						if($course_favoritos >= 3){
							echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));
						}
					?>	
			<div id="line-Progress">
				<div id="progress" style="width:<?php 
					if($mod1 >= 90){
						if($course_favoritos == 0)
							echo 0;
						else{
							if(($course_favoritos >= 1)&&($course_favoritos < 3))
								echo 70;
							if($course_favoritos >= 3)
								echo 100;
						}
					}
					else{
						echo 0;
					}
				?>%;">
				</div>
			</div>
			<div id="lineGrey"></div>
			<div id="lineGold"></div>
		</div>
	</div>

	<!-- ........................ -->
	<?php if(isset($recomendado['Article'])):?>
	<div class="course-min-content youLikeThis rigthC">
		<div id="bloqueo">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<div id="flag">
			<div>
				<img src="<?php echo $this->webroot.'img/dashboard/star.svg';?>"/>
			</div>		
		</div>
		<div id="course-min-img-content" class="recomendado" style="background-image: url('../webroot/files/<?php echo $recomendado['Article']['square_img']; ?>');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>Recommended for you</label>
				<span class="glyphicon glyphicon-option-vertical"></span>
			</div>
			<div id="course-tittle">
				<?php echo $recomendado['Article']['title']; ?>
			</div>
		</div>
		<div id="course-min-advance">
			
				<span>
					<big>
						<big>
							0
						</big>
					</big>
					<small>%</small>
				</span>
				<!--
					<?php echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));?>
					<?php echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));?>
				-->
			<div id="line-Progress">
				<div id="progress">
				</div>
			</div>
			<div id="lineGrey"></div>
			<div id="lineGold"></div>
		</div>
	</div>
	<?php endif;?>
	<!-- .............................................................. -->
	
	<div id="course-progress-total-content">
		<label style="color: #686868; font-size: 20px; margin-bottom: 32px;">
			<b>You´ve completed <?php echo $total?> out of 12 quests</b>
		</label>
		<div id="course-progress-total">
			<div id="progress-bar-content">
				<span>
					<big>
						<big style="font-size: 30px;  margin-bottom: -5px; color: black; display: inline-block;" >
							<?php echo $percent_total;?>
						</big>
					</big>
					<small>%</small>
				</span>

				<div id="backgroundBar">
					<div id="bar-progress" style="width: <?php echo $percent_total;?>%;">
					</div>
				</div>
				<div id="progress-spacer">
					<!-- <span class="porcn" style="font-family: 'Lato', sans-serif;color: black; font-size: 20px; text-align: center; width: 80%; margin: 0 auto; position: absolute;">15%</span> -->
	<!-- 				<?php for($x=0; $x < 15; $x++):?>
					<div class="bar-spacer"></div>
					<?php endfor;?> -->
					
					<!-- <div class="bar-spacer spacerFinal"></div> -->
				</div>
			</div>
		</div>
	</div>
	<!-- .......................................................... -->		
	<div class="comments" style="padding-top: 20px !important;">
		<label style="color: #686868; font-size: 20px; margin-bottom: 35px;">
			<b>
				What members say about the program
			</b>
		</label>
		<br>
		<div class="peoplesC" style="width: 270px; float:left; margin-right: 80px;">
			<div class="people-sayContent">
				<div id="people-img" style="background-image: url('../webroot/img/dashboard/eric-see-web.jpg');">			
				</div>
				<div id="people-coment">
					<div id="people-header">
						<label id="name">
							Eric See
						</label>
						<br>
						<span id="job">
						</span>
					</div>
					<div id="comment">
						<p >
						Through the Mentor program I feel much more aware of how I would like to work in the future
						</p>
					</div>
				</div>
			</div>		
		</div>
		<div class="peoplesC PeopleRght" style="width: 270px; float:left; margin-right: 80px;">
			<div class="people-sayContent">
				<div id="people-img" style="background-image: url('../webroot/img/dashboard/kevin-gonzales-web.jpg');">			
				</div>
				<div id="people-coment">
					<div id="people-header">
						<label id="name">
							Kevin Gonzalez
						</label>
						<br>
						<span id="job">
						</span>
					</div>
					<div id="comment">
						<p >
						This course really opened my eyes to all the careers that are available and the money you can make
						</p>
					</div>
				</div>
			</div>		
		</div>
		<div class="peoplesC" style="width: 270px; float:left;">
				<div class="people-sayContent">
					<div id="people-img" style="background-image: url('../webroot/img/dashboard/sharon-phillips-web.jpg');">			
					</div>
					<div id="people-coment">
						<div id="people-header">
							<label id="name">
								Sharon Phillips
							</label>
							<br>
							<span id="job">
							</span>
						</div>
						<div id="comment">
							<p >
								The exercises in the course showed me things about myself that I did not know
							</p>
						</div>
					</div>
				</div>		
			</div>
	</div>
</div>

<script>

var mod1 = '<?php echo $mod2;?>';
var mod2 = '<?php echo $mod1;?>';
var mod3 = '<?php echo $mod3;?>';

 if($(window).width() > 750){

 	
 		$( ".course-min-content" )
		  .on( "mouseenter", function() {
		  		if( $('#mascara2').css('display') != 'block' ){
					$(this).find('.maskDash').css('display', 'block');
					$(this).find('.imgInside').addClass('img-content');
				}
		  })
		  .on( "mouseleave", function() {
		    $('.maskDash').css('display', 'none');
			$(this).find('.imgInside').removeClass('img-content');
		 });
 	// }

}

//falta por ruta
$('.recomendado').click(function(){
	window.location.href='<?php echo $this->webroot;?>career_program/resources/<?php echo $recomendado['Article']['id']."/".$recomendado['Category']['name']?>';
});

$('#mentoring').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("mentoring en dashboard");
	if((mod2 >= 70) && (mod1 >= 70)){
		// setTimeout(function(){
			window.location.href='<?php echo $this->webroot;?>career_program/mentoring';
		// },1000);
	}else{
		// setTimeout(function(){
			window.location.href='<?php echo $this->webroot;?>career_program/mentoring_blocked';
		// },1000);
	}
});

if(mod2 >= 70){
	$('#mod4').removeClass('bloqueado');
	$('#mod4').addClass('career_link');
}

if(mod2 >= 90){
	$('#mod5').removeClass('bloqueado');
	$('#mod5').addClass('course_link');
}

$('.career_link').click(function(){
		window.location.href='<?php echo $this->webroot;?>career_program/careers/best_fits';
});

$('.course_link').click(function(){
		window.location.href='<?php echo $this->webroot;?>career_program/courses/recommended';
});

$('.mod4').click(function(){
	alert('Earn a silver key in Module1, Know Myself, to unlock the access to recommended careers.');
});

$('.mod5').click(function(){
	alert('Earn a golden key in Module1, Know Myself, to unlock the access to recommended courses.');
});

$('#menu_content').css('height',($('#info_content').height()));
</script>
