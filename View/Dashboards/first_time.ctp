<div id="maskF" style="
  background: black;
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0.7;
  z-index: 10;">
</div>

<div style="z-index: 11;
  background: white;
  position: absolute;
  left: 75px;
  top: 360px;
  opacity: 0.5;
  height: 27px;
  width: 91px;"></div>

<script type="text/javascript">
	
	$(document).ready(function(){
		$('#maskF').width($(document).width()+'px');
		$('#maskF').height(($(document).height() -300 )+'px');
	})

</script>


<div id="menuUserDashboard2">
	<div class="option active">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option" onclick="window.location.href='<?php echo $this->webroot;?>Dashboards/mentoring_service'" style="cursor : pointer;">
		Mentoring
	<div></div>
	</div>
</div>

<div id="course-content">
	<?php //for($x=0; $x < 5; $x++ ):?>
		<div class="course-min-content leftC">
			<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash1.png');">
				<a href="<?php echo $this->webroot;?>dashboards/introMod1">
				<div id="gradiante">
				</div>
				<div id="course-name">
					<label>My Career Vision</label>
					<span class="glyphicon glyphicon-option-vertical"></span>
				</div>
				<div id="course-tittle">
				 Part 1: Create a career vision for my life
				</div>
				</a>
			</div>
			<div id="course-min-advance">
				
					<span>
						<big>71</big><small>%</small>
					</span>
					<?php echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));?>
					<?php echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));?>				
				<div id="line-Progress">
					<div id="progress" style="width: 71%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>
		<div class="course-min-content rigthC leftStyle" style="margin-left: 77px; margin-right: 77px;">
			<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash2.png');">
				<a href="<?php echo $this->webroot;?>dashboards/introMod2">
				<div id="gradiante">
				</div>
				<div id="course-name">
					<label>Know Myself</label>
					<span class="glyphicon glyphicon-option-vertical"></span>
				</div>
				<div id="course-tittle">
				 Part 2: Understand what makes me different
				</div>
				</a>
			</div>
			<div id="course-min-advance">				
				<span>
					<big>
						<big>
							10
						</big>
					</big>
					<small>%</small>
				</span>			
				<!-- 
					<?php echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));?>
					<?php echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));?>
				 -->	
				<div id="line-Progress">
					<div id="progress" style="width: 10%;">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>	
		<div class="course-min-content leftC">
			<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dashb3.png');">
				<a href="<?php echo $this->webroot;?>dashboards/introMod3">
				<div id="gradiante">
				</div>
				<div id="course-name">
					<label>Improve My Decision-Making</label>
					<span class="glyphicon glyphicon-option-vertical"></span>
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
								100
							</big>
						</big>
						<small>%</small>
					</span>
					<?php echo $this->html->image('dashboard/KeyGrey.svg',array('id'=>'keyGrey'));?>
					<?php echo $this->html->image('dashboard/KeyGold.svg',array('id'=>'keyGold'));?>
				
				<div id="line-Progress">
					<div id="progress">
					</div>
				</div>
				<div id="lineGrey"></div>
			<div id="lineGold"></div>
			</div>
		</div>				
	<?php //endfor;?>
	<div class="course-min-content bloqueado rigthC">
		<div id="bloqueo">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash4.png');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>Explore Career Paths</label>
				<span class="glyphicon glyphicon-option-vertical"></span>
			</div>
			<div id="course-tittle">
				Part 4: Browse through recommended careers paths
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
	<div class="course-min-content bloqueado leftStyle leftC" style="margin-left: 77px; margin-right: 77px;">
		<div id="bloqueo">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash5.png');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>Take Action</label>
				<span class="glyphicon glyphicon-option-vertical"></span>
			</div>
			<div id="course-tittle">
				Part 5: Take a course job hunt or become an entrepeneur
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
		<div id="course-min-img-content" style="background-image: url('../webroot/files/<?php echo $recomendado['Article']['square_img']; ?>');">
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
			<b>You´ve completed 6 out of 17 quests</b>
		</label>
		<div id="course-progress-total">
			<div id="progress-bar-content">
				<span>
					<big>
						<big style="font-size: 30px;  margin-bottom: -5px; color: black; display: inline-block;" >
							15
						</big>
					</big>
					<small>%</small>
				</span>

				<div id="backgroundBar">
					<div id="bar-progress">
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
				What people say about our service
			</b>
		</label>
		<br>
		<div class="peoplesC" style="width: 270px; float:left; margin-right: 80px;">
			<div class="people-sayContent">
				<div id="people-img" style="background-image: url('../webroot/img/dashboard/people1.png');">			
				</div>
				<div id="people-coment">
					<div id="people-header">
						<label id="name">
							Jane Roberts
						</label>
						<br>
						<span id="job">
							 Macworld
						</span>
					</div>
					<div id="comment">
						<p >
						Lorem ipsum dolor sit amet, consectetuer 
						adipiscing elit. Ut quis mauris eget ipsum 
						varius dictum. In lacus nisi, facilisis eu, 
						pretium sed, dapibus et, tellus. Phasellus sodales 
						consectetuer eros. Sed tellus. Sed a mauris nec orci 
						volutpat ultrices. Donec vitae sem. Praesent nibh nisl.
						</p>
					</div>
				</div>
			</div>		
		</div>
		<div class="peoplesC PeopleRght" style="width: 270px; float:left; margin-right: 80px;">
			<div class="people-sayContent">
				<div id="people-img" style="background-image: url('../webroot/img/dashboard/people1.png');">			
				</div>
				<div id="people-coment">
					<div id="people-header">
						<label id="name">
							Jane Roberts
						</label>
						<br>
						<span id="job">
							 Macworld
						</span>
					</div>
					<div id="comment">
						<p >
						Lorem ipsum dolor sit amet, consectetuer 
						adipiscing elit. Ut quis mauris eget ipsum 
						varius dictum. In lacus nisi, facilisis eu, 
						pretium sed, dapibus et, tellus. Phasellus sodales 
						consectetuer eros. Sed tellus. Sed a mauris nec orci 
						volutpat ultrices. Donec vitae sem. Praesent nibh nisl.
						</p>
					</div>
				</div>
			</div>		
		</div>
		<div class="peoplesC" style="width: 270px; float:left;">
				<div class="people-sayContent">
					<div id="people-img" style="background-image: url('../webroot/img/dashboard/people1.png');">			
					</div>
					<div id="people-coment">
						<div id="people-header">
							<label id="name">
								Jane Roberts
							</label>
							<br>
							<span id="job">
								 Macworld
							</span>
						</div>
						<div id="comment">
							<p >
							Lorem ipsum dolor sit amet, consectetuer 
							adipiscing elit. Ut quis mauris eget ipsum 
							varius dictum. In lacus nisi, facilisis eu, 
							pretium sed, dapibus et, tellus. Phasellus sodales 
							consectetuer eros. Sed tellus. Sed a mauris nec orci 
							volutpat ultrices. Donec vitae sem. Praesent nibh nisl.
							</p>
						</div>
					</div>
				</div>		
			</div>
	</div>
</div>
