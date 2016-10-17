<script type="text/javascript">
//Inicializamos el tinymce
tinymce.init({
	selector: ".texto",
	language : 'en',
    plugins: 'link image code',
    relative_urls: true
});
</script>

<style>
  .image-placeholder{
	background: #eee;
	height: 281px;
	line-height: 270px;
	text-align: center;
	font-weight: 700;
	margin-bottom: 20px;
	overflow: hidden;
	margin-top: 10px;
	width: 500px;
}

.second{
	line-height: 250px;
	width: 250px;
	height: 250px;
}
</style>


<div class="articles form">
<?php echo $this->Form->create('Article'); 
			echo $this->Form->input('id');
?>

<div class="page-header">
	<h1>
		<?php echo __('Articles',true) ?>
		<small>
			<i class="icon-double-angle-right"></i>
				<?php echo __('Edit Article',true) ?>
		</small>
	</h1>
</div>
	
	<div class="row">
		<div class="col-xs-12">

			<div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Title <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("title" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Excerpt <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("excerpt" ,array('label' => false,'type'=>'textarea','div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Status <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("status" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Category</label>
					<div class="col-sm-9"><?php echo $this->Form->input("category_id" ,array('label' => false, 'type'=>'select', 'placeholder'=>'Category', 'div' => false))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Tags <font color='red'>*</font></label>
					<div class="col-sm-9">
						<?php echo $this->Form->input("Tag", array('label' => false,'type'=>'select', 'multiple'=>true,'placeholder'=>'Tags','div' => false, 'options'=>$tags,'selected' => $this->html->value('Tag.Tag'), 'class'=>'chosen-select', 'style' => 'width: 350px; display: none;' ))?>
					</div>
					<button type="button" class="btn btn-info" id="tag_button" data-toggle="modal" data-target="#myModal">
						<i class="icon-plus bigger-110"></i>
					</button>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Premium <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("premium" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<figure class="span12" style="margin-top:2%;">
					<div class="form_holder" id="image">
						<div class="col-md-3 col-sm-3">
							<label style="margin-left: 60%;">Main Image</label>
						</div>

						<div class="span3">
							<?php if($this->data['Article']['main_img']){?>
								<div class="image-placeholder image-placeholder1">
									<img src="<?php echo $this->webroot."files/".$this->data['Article']['main_img'];?>" style="width: 100%;">
								</div>
							<?php	}else{?>
								<div class="image-placeholder image-placeholder1">Dimensions</div>
							<?php	}?>
							<div class="span9" style="margin-left: 25%;">
								<input type="file" class="loco" id="file1" name="file1" accept="image/*" data-img="" data-index="" />
							</div>
						</div>
					</div>
				</figure>

				<figure class="span12" style="margin-top: 5%;">
					<div class="form_holder" id="image">
						<div class="col-md-3 col-sm-3">
							<label style="margin-left: 55%;">Second Image</label>
						</div>

						<div class="span3">
								<?php if($this->data['Article']['square_img']){?>
									<div class="image-placeholder image-placeholder2 second" style="width: 25%;">
										<img src="<?php echo $this->webroot."files/".$this->data['Article']['square_img'];?>" style="width: 100%;">
									</div>
								<?php	}else{?>
									<div class="image-placeholder image-placeholder2" style="width: 25%;">Dimensions</div>
								<?php	}?>
								<div class="span9" style="margin-left: 25%;">
								<input type="file" class="loco" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
							</div>
						</div>
					</div>
				</figure>
				<div class="imageHiddenContent1"></div>
				<div class="imageHiddenContent2"></div>

<!--
				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Main Img <font color='red'>*</font></label>
					<div class="col-sm-9"><?php //echo $this->Form->input("main_img" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Second Img <font color='red'>*</font></label>
					<div class="col-sm-9"><?php //echo $this->Form->input("square_img" ,array('label' => false,'div' => false,'class'=>"umstyle5" ))?></div>
					<div style="clear:both"></div>
				</div>
-->
				<div class="form-group" style="margin-top: 3%;">
					<label class="col-sm-3 control-label no-padding-right text-right" for="form-field-1"> Text <font color='red'>*</font></label>
					<div class="col-sm-9"><?php echo $this->Form->input("text" ,array('label' => false,'div' => false,'class'=>"umstyle5 texto" ))?></div>
					<div style="clear:both"></div>
				</div>
							
				<div class="clearfix form-actions">
					<div class="col-md-offset-3 col-md-3 text-right">
						<button class="btn btn-info" type="submit" id="add">
							<i class="icon-ok bigger-110"></i>
							Save
						</button>
					</div>
				</div>

				<div class="col-md-offset-3 col-md-3 text-right">
					<?php echo $this->Html->link('Delete article',array('action' => 'delete', $this->data['Article']['id']), array('escape' => false, 'confirm' => __('Sure you want to remove this article?')));?>
				</div>

				<?php echo $this->Form->end(); ?>

			</div>
			<div class="um_box_mid_content_mid_right" align="right"></div>
			<div style="clear:both"></div>
		</div>
	</div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Tag</h4>
      </div>
      <div class="modal-body">
        <div class="articles form">

					<div class="row">
						<div class="col-xs-12">

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right text-right" for="form-field-1"> <?php echo __('Alias',true);?> <font color='red'>*</font></label>
									<div class="col-sm-9">
										<input class="umstyle5" style="width: 100%;" id="name_tag" maxlength="120" type="text" required="required">
									</div>
									<div style="clear:both"></div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label no-padding-right text-right" for="form-field-1"> <?php echo __('Label',true);?></label>
									<div class="col-sm-9">
										<input class="umstyle5" style="width: 100%;" id="label_tag" maxlength="45" type="text">
									</div>
									<div style="clear:both"></div>
								</div>

						</div>
					</div>

				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save_tag">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

	$(document).ready(function(){
 	
 		var toPend = "";

		$("#file1").pekeUpload({theme:'bootstrap', btnText:'Browse', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>articles/upload"});
		$("#file2").pekeUpload({theme:'bootstrap', btnText:'Browse', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>articles/upload"});

	});
			
	$('#save_tag').click(function() {

		var alias = $('#name_tag').val();
		
		if($('#name_tag').val() == ''){
			alert('Ingrese el alias del Tag');
		}else{
			$.post(WEBROOT + "articles/add_tag",{name : $('#name_tag').val(), label: $('#label_tag').val()},function(resp){
				if(resp){
					$('#myModal').modal('hide');
					$('#name_tag').val('');
					$('#label_tag').val('');
					$('#TagTag').prepend('<option value="'+resp+'">'+alias+'</option>');
					$("#TagTag").trigger("chosen:updated");
				}else{
					alert('ERROR');
				}
			},"json");
		}

	});

</script>
