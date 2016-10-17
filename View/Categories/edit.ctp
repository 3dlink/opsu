<div class="categories form">
<?php echo $this->Form->create('Category'); 
	  echo $this->Form->input('id');
?>


	<div class="page-header">
	<h1>
		<?php echo __('Categories',true) ?>
		<small>
			<i class="icon-double-angle-right"></i>
				<?php echo __('Edit Category',true) ?>
		</small>
	</h1>
</div>
	
	<div class="row">
		<div class="col-xs-12">

			<div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Parent Id <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("parent_id" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Lft <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("lft" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Rght <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("rght" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Name <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("name" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

							
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-9 text-right">
						<button class="btn btn-info" type="submit" id="add">
							<i class="icon-ok bigger-110"></i>
							Save
						</button>
					</div>
				</div>
				<?php echo $this->Form->end(); ?>
			</div>
			<div class="um_box_mid_content_mid_right" align="right"></div>
			<div style="clear:both"></div>
		</div>
	</div>




</div>
