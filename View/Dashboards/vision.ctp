<style>

#dash_content #info_content {
	min-height: inherit;
}

.col-xs-4 {
  width: 25%;
}
.col-xs-6 {
  width: 75%;
}
@media ( max-width : 750px) {
	
	#imgs-tipe {
  width: 140px !important;
}
}

@media ( max-width : 480px) {
		.col-xs-8 {
  width: 57%;
}
}

@media ( max-width : 420px) {
	#imgs-tipe {
  width: 88px !important;
}
}

@media ( max-width :370px) {
	#imgs-tipe {
  width: 64px !important;
}
}

#menu-content {
	height: 420px !important;
}
</style>
<div id="course-content" style="padding-bottom: 40px;">

<?php if(!empty($vision)){ ?>
	<div class="dash-vision centerV1">
		<?php echo $this->Html->image('dashboard/Comillas1.png',array('id'=>'comillasLeft'));?>
		<?php echo $this->Html->image('dashboard/Comillas2.png',array('id'=>'comillasRight'));?>
		<p class="centerV2" style="font-size: 20px; font-weight: 300;">
			“<?php echo $vision['Careervision']['career_vision']?>”
		</p>
	</div>
<?php }else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To define a clear and
						inspiring direction for your future, complete the quest in the
						first module, <a href="<?php echo $this->webroot;?>career_program/vision_intro">Know Myself.</a>
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location.href='<?php echo $this->webroot;?>career_program/vision_intro'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
<?php }?>
</div>
