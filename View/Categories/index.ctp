<div class="umtop">
	
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>
				<?php echo __('Categories',true);?>
				<small>
					<i class="icon-double-angle-right"></i>
					<?php echo __('Category List',true);?>
				</small>
			</h1>
		</div>
	
	
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
					<thead>
						<tr role="row">
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1">Id</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1">Parent</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1">Lft</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1">Rght</th>
							<th class="hidden-480 " role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1">Name</th>
							<th class="" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 100px;">Actions</th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($categories)) {
							$sl=0;
							
							
							 foreach ($categories as $category) { ?>
							
		<tr class="odd">

			<td class="td-name" ><?php echo $category['Category']['id'] ?></td>

			<td class="td-username" ><?php echo $category['Category']['parent_id'] ?></td>

			<td class="td-username" ><?php echo $category['Category']['lft'] ?></td>

			<td class="td-username" ><?php echo $category['Category']['rght'] ?></td>

			<td class="td-username" ><?php echo $category['Category']['name'] ?></td>
			<td class=" ">
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
			<a class="green" href="<?php echo $this->webroot.'categories/view/'.$category['Category']['id'];?>" title="View category">
			<i class="icon-eye-open bigger-130"></i>
			</a>
							
			<a class="green" href="<?php echo $this->webroot.'categories/edit/'.$category['Category']['id'];?>" title="Edit category">
			<i class="icon-pencil bigger-130"></i>
			</a>
			<?php 
				echo $this->Form->postLink($this->Html->image(SITE_URL.'usermgmt/img/delete.png', array("alt" => __('Delete'), "title" => __('Delete'))), array('action' => 'delete', $category['Category']['id']), array('escape' => false, 'confirm' => __('Sure you want to remove this user?')));
			?>
			</div>
			</td>
			</tr>
			<?php } ?>
			<?php } ?>
	
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
