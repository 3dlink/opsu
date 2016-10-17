<div id="menuUserDashboard">
	<div class="option active">
		My Course
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option">
		Mentoring
		<div></div>
	</div>
</div>

<div id="course-content">
	<?php for($x=0; $x < 5; $x++ ):?>
		<div class="course-min-content">
			<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash1.png');">
				<div id="gradiante">
				</div>
				<div id="course-name">
					<label>My Career Vision</label>
					<span class="glyphicon glyphicon-option-vertical"></span>
				</div>
				<div id="course-tittle">
				 Part 1: Create a career vision for my life
				</div>
			</div>
			<div id="course-min-advance">
				
					<span>
						<big>
							<big>
								70
							</big>
						</big>
						<small>%</small>
					</span>
					<?php echo $this->html->image('dashboard/key-1.png',array('id'=>'keyGrey'));?>
					<?php echo $this->html->image('dashboard/key-2.png',array('id'=>'keyGold'));?>
				
				<div id="line-Progress">
					<div id="progress">
					</div>
				</div>
			</div>
		</div>		
	<?php endfor;?>
	<!-- ........................ -->
	
	<div class="course-min-content bloqueado">
		<div id="bloqueo">
			<div id="bloqueo-cell">
				<?php echo $this->Html->image('dashboard/padlock.png');?>
			</div>
		</div>
		<div id="course-min-img-content" style="background-image: url('../webroot/img/dashboard/dash1.png');">
			<div id="gradiante">
			</div>
			<div id="course-name">
				<label>My Career Vision</label>
				<span class="glyphicon glyphicon-option-vertical"></span>
			</div>
			<div id="course-tittle">
			 Part 1: Create a career vision for my life
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
				<!--<?php echo $this->html->image('dashboard/key-1.png',array('id'=>'keyGrey'));?>
				<?php echo $this->html->image('dashboard/key-2.png',array('id'=>'keyGold'));?>
				-->
			<div id="line-Progress">
				<div id="progress">
				</div>
			</div>
		</div>
	</div>
	<!-- .............................................................. -->
	
	<div id="course-progress-total-content">
		<label style="color:black;">
			<b>You´ve completed 6 out of 17 quests</b>
		</label>
		<div id="course-progress-total">
			<div id="progress-bar-content">
				<div id="backgroundBar">
					<div id="bar-progress">
					</div>
				</div>
				<div id="progress-spacer">
					<?php for($x=0; $x < 15; $x++):?>
					<div class="bar-spacer"></div>
					<?php endfor;?>
					
					<div class="bar-spacer spacerFinal"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- .......................................................... -->		
	<div class="comments">
		<label>
			<b>
				What people say about our service
			</b>
		</label>
		<br>
		<?php for($x=0; $x<3; $x++):?>
			<div class="col-xs-12 col-sm-12 col-md-4">
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
		<?php endfor;?>
	</div>
</div>
