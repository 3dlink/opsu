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
								<td><strong><?php echo __('Id Articulo');?></strong></td>
								<td><?php echo h($article['Article']['id']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Title');?></strong></td>
								<td><?php echo h($article['Article']['title']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Excerpt');?></strong></td>
								<td><?php echo h($article['Article']['excerpt']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Status');?></strong></td>
								<td><?php echo h($article['Article']['status']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Premium');?></strong></td>
								<td><?php echo h($article['Article']['premium']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Main Img');?></strong></td>
								<td><img id="main" style="width : 30%; height : 30%;" class="col-md-4" src="<?php echo $this->webroot?>files/<?php echo $article['Article']['main_img']?>"></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Second Img');?></strong></td>
								<td><img id="main" style="width : 30%; height : 30%;" class="col-md-4" src="<?php echo $this->webroot?>files/<?php echo $article['Article']['square_img']?>"></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Created');?></strong></td>
								<td><?php echo h($article['Article']['created']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Modified');?></strong></td>
								<td><?php echo h($article['Article']['modified']); ?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Tags');?></strong></td>
								<td><?php foreach ($article['Tag'] as $tag){echo $tag['name'] . ', ';}?></td>
							</tr>
							<tr>
								<td><strong><?php echo __('Text');?></strong></td>
								<td><?php echo h($article['Article']['text']); ?></td>
							</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
















		

    