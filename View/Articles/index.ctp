<style>
.btn {
	display: inline-block;
	padding: 6px 12px;
	margin-bottom: 0;
	font-size: 14px;
	font-weight: 400;
	line-height: 1.42857143;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	-ms-touch-action: manipulation;
	touch-action: manipulation;
	cursor: pointer;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	background-image: none;
	border: 1px solid transparent;
	border-radius: 4px;
	color: #333;
background-color: #fff;
border-color: #ccc;
}
</style>

<div class="umtop">
	
<div class="row">
	<div class="col-xs-12">
		<div class="page-header">
			<h1>
				<?php echo __('All Articles',true);?>
				<small>
					|
					<a href="<?php echo $this->webroot;?>articles/add">	<?php echo __('New Article',true);?></a>
				</small>
			</h1>
		</div>




<div class="row"> 

<!-- SEARCH -->
	<div style="width: 27%;margin-left: 72%;margin-top: -1%;">
		<form action="<?php echo $this->webroot;?>articles/search">
		<div class="input-group">
		  <input type="text" name="search" class="form-control" placeholder="Search">
		  <span class="input-group-btn">
			<button class="btn" type="submit"><span class="icon-search"></span></button>
		  </span>
		</div>
	</form>
  </div>


<!-- FILTRO -->
			<div class="col-xs-3" style="border:solid;">
		  <h4 class="widgettitle">Filter By</h4>
			<br/>
			  <form action="<?php echo $this->webroot;?>articles/applyFilter">

								<label class="col-sm-3 control-label no-padding-left text-left"> Tags</label>
									<select id="tag" name="tag[]" class="chosen-select" multiple style="width: 65%;margin-left: 8%;">
						  <option value="T">-Select-</option>
						  <?php foreach ($tags as $tag) { ?>
							<option value="<?php echo $tag['Tag']['id'] ?>"><?php echo $tag['Tag']['name'] ?></option>
						  <?php } ?>       
						</select>
					<br/>
					<label class="col-sm-3 control-label no-padding-left text-left" style="margin-top: 6%;margin-left: -6%;"> Premium</label>
									<select id="premium" name="premium" class="form-control" style="width: 75%;margin-top: 5%;margin-left: 25%;">
						  <option value="P">All</option>
						  <option value="1">Yes</option>
						  <option value="0">No</option>          
						</select>

				  <br/>

				<button type="submit" class="btn btn-primary btn-block" style="width: 50%;margin-left: 20%;margin-bottom: 5%;"><i class="fa fa-search"></i> Show me</button>

			  </form>
				</div> 


				<div class="col-xs-9">
					<?php if (!empty($articles)) {
						$sl=0;
							foreach ($articles as $article) { ?>
										
								<div class="col-xs-6" style="border:solid 1px;min-height: 170px;margin-top:2%;position:relative;">
											<img src="<?php echo $this->webroot?>files/<?php echo $article['Article']['square_img']?>" alt="post img" style="max-width: 50%;width: 171px;height: 168px;max-height: 168px;margin-left: -5%;" class="pull-left img-responsive thumb margin10 img-thumbnail">
									<div style="position: absolute;top: 5%;left: 48%;">
										<article>
											<h4><?php echo $article['Article']['title'] ?></h4>
										</article>
								</div>
										<div style="position:absolute;bottom: 3%;left: 48%;">
									   <a href="<?php echo $this->webroot.'articles/edit/'.$article['Article']['id'];?>">> Edit</a>&nbsp;&nbsp;&nbsp;
									   <?php if($article['Article']['active']) {
										 		echo $this->Html->link('> Deactivate',array('action' => 'desactive', $article['Article']['id']), array('escape' => false, 'confirm' => __('Sure you want to deactivate this article?')));
										 	}else{
										 		echo $this->Html->link('> Activate',array('action' => 'active', $article['Article']['id']), array('escape' => false, 'confirm' => __('Sure you want to activate this article?')));
										 	}
										 	?></div>

							</div> 

							<?php } ?>
					<?php } ?>

				</div>



</div>





	</div>
	<div class="um_box_down"></div>
</div>
</div>
