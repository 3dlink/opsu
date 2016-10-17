<div class="umtop">
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
				<div class="page-header">
				<h1>
					<?php echo __('Vista',true);?>
					<small>
						<i class="icon-double-angle-right"></i>
						<?php echo __('Articulo',true);?>
					</small>
				</h1>
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<tbody>
							<tr>
								<td><strong><?php echo __('Id');?></strong></td>
								<td><?php echo h($category['Category']['id']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Parent Category');?></strong></td>
								<td><?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Lft');?></strong></td>
								<td><?php echo h($category['Category']['lft']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Rght');?></strong></td>
								<td><?php echo h($category['Category']['rght']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Name');?></strong></td>
								<td><?php echo h($category['Category']['name']); ?></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>

