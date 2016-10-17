<?php

	// debug($careers);
	$acum = 0;

?>

<style>


 	.dash-vision-content{
 		margin-top: 0px !important;
 	}
 	#menuUserDashboard2 { 
    	padding-top: 10px !important;
    }
.option{
	cursor: pointer;
}
.rigthC{
	margin-right: 76px;
}
@media (max-width: 750px){
	.col-xs-8{
		padding-right: 0px !important;
	}
	#searchR{
		width: 100% !important;
	}
}
</style>

<div id="menuUserDashboard2">
	<div class="option <?php echo $fits;?>" data-class="best_fits">
		Best Career Fits
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option <?php echo $favourites;?>" data-class="favourites">
		My Favourite Careers
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option <?php echo $all;?>" data-class="all">
		All Careers
		<div></div>
	</div>
	<div class="option searchResources" style="margin: 0px;">
		<input id="searchR" type="" placeholder="Search"  style="text-indent: 20px;   height: 38px;   border: none;   width: 440px; ;margin-left: 25px;">
		<div></div>
	</div>
</div>

<!-- Best careers fits -->
<div id="course-content" class="cont best_fits">

	 <?php 
	if($puntos < 70 && ($fits != "" || $favourites !="")){?>
		<div class="">
			<div class="dash-vision-content">
				<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot;?>img/Lock.png);" id="imgs-tipe"></div>
				<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
					<div style="display: table-cell; vertical-align: middle;">
						<p>
							Earn a silver key in <a href="<?php echo $this->webroot;?>career_program/intro_module_1">Module 1, Know Myself</a>, to unlock the access to recommended careers.
						</p>
						<button onclick="window.location=WEBROOT+'career_program/intro_module_1'" class="mentr-ok-btn-large">Go to Module 1</button>
					</div>
					<div style="clear:both;"></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
	<?php }else{?>
		<?php
			if($puntos < 70 && isset($_GET['data'])){ ?>
				<div class="">
					<div class="dash-vision-content"  style="margin-bottom: 40px;">
						<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot;?>img/Lock.png);" id="imgs-tipe"></div>
						<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
							<div style="display: table-cell; vertical-align: middle;">
								<p>
									Earn a silver key in <a href="<?php echo $this->webroot;?>career_program/intro_module_1">Module 1, Know Myself</a>, to unlock the access to recommended careers.
								</p>
								<button onclick="window.location=WEBROOT+'career_program/intro_module_1'" class="mentr-ok-btn-large">Go to Module 1</button>
							</div>
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			<?php } else{ if($puntos < 70){?>
					<div class="dash-vision-content" style="margin-bottom: 40px;">
						<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot;?>img/Lock.png);" id="imgs-tipe"></div>
						<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
							<div style="display: table-cell; vertical-align: middle;">
								<p>
									To view how you match with each career, earn a silver key in <a href="<?php echo $this->webroot;?>career_program/intro_module_1">Module 1, Know Myself.</a>
								</p>
								<button onclick="window.location=WEBROOT+'career_program/intro_module_1'" class="mentr-ok-btn-large">Go to Module 1</button>
							</div>
							
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;"></div>
					</div>
			<?php } }?>
		<?php foreach ($careers as $key => $value): $acum = $acum + 1;	
			$imgC = str_replace(".", "", $value['Jobsinfo']['id']);
			if ( !file_exists("../webroot/img/career/".$imgC.".jpg") ){
				$imgC = "default";
			}
			if($acum%3==0 && $acum != 0){ 
			 if(isset($value['Carreersfit'][0]['favorite'])){ 
				if($value['Carreersfit'][0]['favorite'] == 1){
					$in = 1;
				}
				else{
					$in = 0;
				}
			}
			if(isset($value['Carreersfit']['favorite'])){
				if($value['Carreersfit']['favorite'] == 1){
					$in = 1;
				}
				else{
					$in = 0;
				}
			}?>
				<div class="course-min-content youLikeThisCareer leftC leftStyle" id="C<?php echo $value['Jobsinfo']['id'];?>" style="">
					<div id="<?php echo $value['Jobsinfo']['id'];?>" class="change_favorite <?php if($in == 1){ echo 'flag_favorite'; }else{ echo 'flag_no_favorite';} ?>">	
					</div>


				<div id="course-min-img-content" style="  background-size: cover;background-repeat: no-repeat; background-image: url('<?php echo $this->webroot."img/career/".$imgC.".jpg";?>');">
					<a href="<?php echo $this->webroot."career_program/careers/".$value['Jobsinfo']['id'];?>">
					<div id="gradiante">
					</div>
					<div id="course-name">
						<label></label>
								<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				
					</div>
				
					<div id="course-tittle" style="display: table;">
					 <span style="display: table-cell; vertical-align: middle;"><?php echo $value['Jobsinfo']['career_name'];?></span>
					</div>
					</a>
				</div>
				<div id="course-min-advance">				
					<span>
						<big>
							<big>
								<?php 
								if($puntos>=70){
									if(isset($value['Carreersfit'][0]['r'])) {
										if($value['Carreersfit'][0]['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit'][0]['r'] * 100);
										}
									}
									else {
										if($value['Carreersfit']['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit']['r'] * 100);
										}
									}
								}else{
									echo 'N/A';
								}
								?>
							</big>
						</big>
						<small><?php if($puntos>=70) echo '%';?> recommendation</small>
					</span>		

					<div class="" style="float:right;">
						<?php 
						if($value['Carreersfit']['favorite'] == 1){ ?>
							<!-- <img class="careers full" id="<?php echo $value['Carreersfit']['id'];?>" src="<?php echo $this->webroot.'img/heart_full.png';?>">					 -->
						<?php } else {?>
							<!-- <img class="careers empty" id="<?php echo $value['Carreersfit']['id'];?>" src="<?php echo $this->webroot.'img/heart_empty.png';?>">					 -->
						<?php } ?>
					</div>

					<div id="line-Progress">
						<div id="progress" style="width: <?php 
								if($puntos>=70){
									if(isset($value['Carreersfit'][0]['r'])){ 
										if($value['Carreersfit'][0]['r'] <= 0){
											echo 1;
										}else{
											echo round($value['Carreersfit'][0]['r'] * 100); 
										}
									}else{ 
										if($value['Carreersfit']['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit']['r'] * 100); 
										}
									}
								}else{
									echo 50;
								}
								?>%;">
						</div>
					</div>
				</div>
			</div>	

		<?php } else{ //debug($value);?>

	<?php if(isset($value['Carreersfit'][0]['favorite'])){ 
		if($value['Carreersfit'][0]['favorite'] == 1){
			$in = 1;
		}
		else{
			$in = 0;
		}
	}
	if(isset($value['Carreersfit']['favorite'])){
		if($value['Carreersfit']['favorite'] == 1){
			$in = 1;
		}
		else{
			$in = 0;
		}
	}?>
	
			<div class="course-min-content youLikeThisCareer rigthC leftStyle" style="" id="C<?php echo $value['Jobsinfo']['id'];?>">
				<div id="<?php echo $value['Jobsinfo']['id'];?>" class="change_favorite <?php if($in == 1){ echo 'flag_favorite'; }else{ echo 'flag_no_favorite';} ?>">	
				</div>

				<div id="course-min-img-content" style="background-repeat: no-repeat;   background-size: cover; background-image: url('<?php echo $this->webroot."img/career/".$imgC.".jpg";?>');">
					<a href="<?php echo $this->webroot."career_program/careers/".$value['Jobsinfo']['id'];?>">
					<div id="gradiante">
					</div>
					<div id="course-name">
						<label></label>
								<span class=""><img src="<?php echo $this->webroot;?>img/dashboard/arrowDash.png" style="  margin-right: -20px; margin-top: -11px;"></span>
				
					</div>
					<div id="course-tittle" style="display: table;">
 						<span style="display: table-cell; vertical-align: middle;"><?php echo $value['Jobsinfo']['career_name'];?></span>
 					</div>
					</a>
				</div>
				<div id="course-min-advance">				
					<span>
						<big>
							<big>
								<?php 
								if($puntos>=70){
									if(isset($value['Carreersfit'][0]['r'])) {
										if($value['Carreersfit'][0]['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit'][0]['r'] * 100);
										}
									}
									else {
										if($value['Carreersfit']['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit']['r'] * 100);
										}
									}
								}else{
									echo 'N/A';
								}
								?>
							</big>
						</big>
						<small><?php if($puntos>=70) echo '%';?> recommendation</small>
					</span>		
					<div class="" style="float:right;">
						<?php 
						if($value['Carreersfit']['favorite'] == 1){ ?>
							<!-- <img class="careers full" id="<?php echo $value['Carreersfit']['id'];?>" src="<?php echo $this->webroot.'img/heart_full.png';?>">					 -->
						<?php } else {?>
							<!-- <img class="careers empty" id="<?php echo $value['Carreersfit']['id'];?>" src="<?php echo $this->webroot.'img/heart_empty.png';?>">					 -->
						<?php } ?>
					</div>
					<div id="line-Progress">
						<div id="progress" style="width: <?php 
								if($puntos>=70){
									if(isset($value['Carreersfit'][0]['r'])){ 
										if($value['Carreersfit'][0]['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit'][0]['r'] * 100); 
										}
									}
									else{ 
										if($value['Carreersfit']['r'] <= 0){
											echo 1;
										}
										else{
											echo round($value['Carreersfit']['r'] * 100); 
										}
									}
								}else{
									echo 50;
								}
								?>%;">
						</div>
					</div>
				</div>
			</div>	
			<?php } ?>
	<?php endforeach; ?>
	<div class="paging" style="text-align: center; margin-bottom:50px; font-family:'lato',bold; font-size: 16px; border-top: 1px solid #D6D6D6;">
			<?php if(!empty($this->Paginator)){
					echo $this->Paginator->prev('<- '); 
					echo $this->Paginator->numbers();
					echo $this->Paginator->next(' ->');
				}
			?>
	</div>
<?php }?>

</div>

<style type="text/css">
	
	.paging > span{
		margin-right: 30px;
		margin-left: 30px; 
		font-weight: bold;
	}
	.paging > span > a, .next, .prev{
		color: #D6D6D6;
	}


	#menuUserDashboard2 {
		/*height: 75px;*/
	}
</style>

<script type="text/javascript">




	$( ".course-min-content" )
	  .on( "mouseenter", function() {
		$(this).find('.maskDash').css('display', 'block');
		$(this).find('.imgInside').addClass('img-content');
	  })
	  .on( "mouseleave", function() {
	    $('.maskDash').css('display', 'none');
		$(this).find('.imgInside').removeClass('img-content');
	 });




$(window).load(function(){
	var hh = $('#info_content').height();
	if(hh < 461){
		hh = 450;
	}
	$('#menu-content').height((hh+35) +"px");
})
$(document).ready(function(){
	if ($('.paging').children().length == 2){
		$('.paging').html('');
	}
})



$('.change_favorite').click(function(){
	var idCar = $(this).attr('id');
	var ac = "<?php echo $favourites;?>";
	var pos = 0;
	$.ajax({
		url:WEBROOT+'career/changeFavorite/'+idCar,
		dataType: 'json',
		success: function(data){
			if(data == 1){
				if($("[ id = '"+idCar+"']").hasClass('flag_no_favorite')){
					// $("[ id = 'C"+idCar+"']").css('display', 'none');
					$("[ id = '"+idCar+"']").addClass('flag_favorite');
					$("[ id = '"+idCar+"']").removeClass('flag_no_favorite');
				}else{
					if(ac == "active"){
						$("[ id = 'C"+idCar+"']").css('display', 'none');
					}
					$("[ id = '"+idCar+"']").addClass('flag_no_favorite');
					$("[ id = '"+idCar+"']").removeClass('flag_favorite');
				}
				
				if(ac == "active"){
					$('.youLikeThisCareer').removeClass('rigthC');
					$('.youLikeThisCareer').removeClass('leftC');

					$('.youLikeThisCareer').each(function(k,v){
						if( $(this).css('display') != "none"){
							pos = pos + 1;
							if((pos + 2) % 3 === 0 || pos == 1){
								$(this).addClass('rigthC');
							}
							if( (pos + 1) % 3 === 0){
								$(this).addClass('rigthC');
							}
						}
					})
				}
			}
		},
		error: function(a,e,i){
			console.log(a);
		}
	})


});



// $('.flag_favorite').click(function(){
// 	var idCar = $(this).attr('id');
// 	$.ajax({
// 		url:WEBROOT+'career/removeFavorite/'+idCar,
// 		dataType: 'json',
// 		success: function(data){
// 			if(data == 1){
// 				$("[ id = '"+idCar+"']").addClass('flag_no_favorite');
// 				$("[ id = '"+idCar+"']").removeClass('flag_favorite');
// 			}
// 		},
// 		error: function(a,e,i){
// 			console.log(a);
// 		}
// 	})


// });




$('.careers').click(function(){
	if($(this).hasClass('empty')){
		$(this).removeClass('empty');
		$(this).addClass('full');
		$(this).attr('src' , '<?php echo $this->webroot;?>img/heart_full.png');
		LikeOrNot($(this).attr('id'), 1);
		return false;
	}
	if($(this).hasClass('full')){
		if($('.wish').hasClass('active')){
			$('#co'+$(this).attr('id')).css('display', 'none');
		}
		$(this).removeClass('full');
		$(this).addClass('empty');
		$(this).attr('src' , '<?php echo $this->webroot;?>img/heart_empty.png');
		LikeOrNot($(this).attr('id'), 0);
		return false;
	}
})

$('.option').click(function(){
	if(!$(this).hasClass('searchResources')){
		$('.cont').css('display', 'none');
		$('.option').removeClass('active');
		$(this).addClass('active');
		var cl = $(this).data('class');
		$('.'+cl).css('display', 'block');
		window.location = WEBROOT+"career_program/careers/"+cl;
	}
});

function LikeOrNot(id , result){
	$.ajax({
		url: WEBROOT+"career/like/"+id+"/"+result,
	})
}

$('#searchR').bind("enterKey",function(e){
   var val = $('#searchR').val();
   var cl = 'all';

	$.ajax({
		url: WEBROOT+'career_program/careers/'+cl+"?data="+val,
		type: 'post',
		dataType: 'json',
		success: function(){
			window.location = WEBROOT+"career_program/careers/"+cl+"?data="+val;
		},
		error: function(a,e,i){
			window.location = WEBROOT+"career_program/careers/"+cl+"?data="+val;
		}
	})

});

$('#searchR').keyup(function(e){
    if(e.keyCode == 13)
    {
        $(this).trigger("enterKey");
    }
});

</script>