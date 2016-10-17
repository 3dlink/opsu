<?php

	// debug($course);
	$acum = 0;

?>

<script type="text/javascript">

$(window).load(function(){
	var hh = $('#info_content').height();
	if(hh < 450){
		hh = 450;
	}
	$('#menu-content').height(hh + "px");
})

</script>

<style>
 	#menuUserDashboard2 { 
    	padding-top: 10px !important;
    }
#header2 {
  background-image: url('/vision_mentr/img/sunset-hair.png');
  max-width: 770px;
  max-height: 320px;
  position: relative;
  background-size: 100% 187%;
  background-position: center;
  background-position-y: 49%;
}
.course-min-content {
	box-shadow: 0px 5px 5px 0px #9d9d9d;
}
.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

.article {

  width: 470px;
  max-width: 470px;
  height: 520px;
  margin-right: 30px; 
  float: left;
  }

@media ( max-width : 750px) {

	#imgs-tipe {
    	width: 95px !important;
	}

	.contCourse{
		width: 85% !important;
	}

	#barr{
		display: block !important;
	}

	#course-min-img-content{
		background-size: 115% 115% !important;
	}

	.course-min-content #course-min-advance {
  		padding: 1px 10px 0px 20px !important;
	}

	.full, .empty{
		width: 70%;
		/*height: 10%;*/
	}

	#article_articles {
		margin-top: 328px;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	
	#course-min-advance > div > p{
		font-size: 15px !important;
	}
	
	.article {

		  width: 100% !important;
		  max-width: 100% !important;
		
  }
	.send_btn {
		position: absolute !important;
		right: 5px;
		bottom: 0px;
	}
	#comentario textarea {
		top: 78px !important;
		width: 88% !important;
	}
	#search {
		
		display : none;
	}
	
	#searchinput {
	
		display : none;
	}
	
	#menu-as-member {
	
	}
	
	.contenedor_secciones{
		  margin-left: -20px !important;
	}
	
	.seccion_derecha{
		  margin-left: 16px;
		
	
	}

	.seccion_izquierda{
		width: 93% !important;
	}
	
	
	.seccion_izquierda .video{
		width: 97% !important;
		
	}
	
	.rigthC {
		width: 100% !important;
		margin-left: 0px !important;
	}
	
	#menuUserDashboard2{
		margin-left: 0px !important;
		height: 75px !important;
	}

	#course-name{
		font-size: 16px !important;
	}

	.seeMore{
		margin-right: 0px !important;
	}
	
	#dash_content{
		  /*padding-left: 10px !important;*/
	
	}
	
	#labelMovil2{
	  padding-left: 13px;
	}

	.searchResources{
		display: block !important;
	}

	#searchR{
		width: 99% !important;
		  margin-left: 0px !important;
		    margin-top: 5px;
	}
	
}

.course-min-content #course-min-advance {
  padding: 1px 20px 0px 20px;
}

	.option{
		cursor: pointer;
	}

	@media ( max-width : 370px) {
	
	
		#imgs-tipe {
		  width: 55px !important;
		}
}

@media ( max-width : 320px) {
	
	#imgs-tipe {
		  width: 45px !important;
		}
}
</style>

<?php 
 // debug($course);
?>

<div id="barr" style=" border-top: 2px solid #CDCDCD; display:none;   width: 95%; margin: auto; margin-bottom:5px;"></div>

<div id="menuUserDashboard2" style="margin-left: 20px;">
	<div class="option <?php echo $recommended;?>" data-class="recommended">
		Recommended For You
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="wish option <?php echo $wishlist;?>" data-class="wishlist">
		Wishlist
		<div></div>
	</div>
	<div class="separator"></div>
	<div class="option <?php echo $all;?>" data-class="all">
		All Courses
		<div></div>
	</div>

	<div class="option" style="margin:0px;">
		<input id="searchR" type="" placeholder="Search"  style=" text-indent: 20px;   height: 38px;   border: none;   width: 500px; ;margin-left: 25px;">
		<div></div>
	</div>
</div>

<!-- course recommended -->
<div id="course-content" class="cont recommended">

<div class="contenedor_secciones" style="margin-left: -18px;">
		<section class="seccion_izquierda video" style="margin-left:20px; width: 1000px;">

			<?php if($puntos<90){?>
				<div class="" style="margin-bottom: 20px;   width: 97%;">
					<div class="dash-vision-content">
						<!-- url(/vision_mentr/img/Lock.png) -->
						<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot;?>/img/Lock.png);" id="imgs-tipe"></div>
						<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
							<div style="display: table-cell; vertical-align: middle;">
								<p>
									Earn a golden key in <a href="<?php echo $this->webroot;?>career_program/quests_module_1">Module 1, Know Myself</a>, to unlock the access to recommended courses. 
								</p>
								<button onclick="window.location=WEBROOT+'career_program/quests_module_1'" class="mentr-ok-btn-large">Go to Module 1</button>
							</div>
							
							<div style="clear:both;"></div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			<?php }?>


		<?php foreach($course as $courses){?>

			<div id="co<?php echo $courses['Course']['id'];?>" class="seeMore course-min-content rigthC article" >
					<div class="maskBack" style=" display:none;  text-align: center; font-weight: 200; background-color: black; opacity:0.7; width: 100%; height: 51%; position: absolute; z-index: 1;">
						<button onclick="window.open('<?php echo $courses['Course']['course_link'];?>')" style="  font-weight: 300;  border: 2px solid white; border-radius: 20px; background: none; color: white; font-size: 23px; margin-top: 20%; width: 275px; height: 85px;"> See course details </button>
					</div>
					<div id="course-min-img-content"  style="cursor:pointer;  background-repeat: no-repeat;  background-size: 105%; background-position-y: 49%;background-image: url('<?php echo $this->webroot.'img/'.$courses['Course']['course_image'];?>');  height: 264px;">
					
					<div id="gradiante" cursor:pointer;>
					</div>
					<div id="course-name" style="font-weight: bold; font-size: 20px; text-align: left;" >
						<?php echo $courses['Course']['course_title'];?>
					</div>
				</div>
				<div id="course-min-advance" style="  height: 260px;">				
					<div>
					
						<div class="contCourse" style="  width: 90%; float: left; padding-top: 5px; font-size:20px;">
							<?php echo "Improve your: <b>".$courses['Course']['course_skill']."</b>";?>
							<br />
							<?php echo "Provided by: ". $courses['Course']['course_provider'];?>
						</div>
						<div class="" style="float:right; padding-top: 15px;">
							<?php 
								if($courses['Coursebyuser']['like'] == 1){ ?>
									<img class="course full" id="<?php echo $courses['Course']['id'];?>" src="<?php echo $this->webroot.'img/heart_full.png';?>">					
								<?php } else {?>
									<img class="course empty" id="<?php echo $courses['Course']['id'];?>" src="<?php echo $this->webroot.'img/heart_empty.png';?>">					
								<?php } ?>
						</div>
						
					</div>
					<div style="clear: both;"></div>

				<div>
					<div style="font-size:16px; padding-top: 10px;">
						<?php echo $courses['Course']['course_description'];?>
					</div>
					<div style="  margin-left: -25px; width: 120px; height: 40px; margin-top: 35px;">
						<?php if($courses['Course']['gratis'] == 1){ ?>
							<div style="font-size: 20px; padding-left: 20%; padding-top: 3%; color: white; font-weight: 400; width: 100%;  height: 100%;   background-repeat: no-repeat; background-image: url('<?php echo $this->webroot.'img/tagFree.png';?>');">
								FREE
							</div>
						<?php } else{?>
							<div style="font-size: 20px; padding-left: 20%; padding-top: 3%; color: white; font-weight: 400; width: 100%; height: 100%;   background-repeat: no-repeat; background-image: url('<?php echo $this->webroot.'img/tagPrice.png';?>');">
								$ <?php echo $courses['Course']['price'];?>
							</div>
						<?php } ?>
					</div>
				</div>
				</div>
			</div>
		<?php ?>	

<?php }?>
		</section>
		<div style="clear: both;"></div>
	</div>


				
	<?php if(!empty($this->Paginator)){ ?>
	<div class="paging" style="text-align: center; margin-bottom:50px; font-family:'lato',bold; font-size: 16px; border-top: 1px solid #D6D6D6;">
		<?php echo $this->Paginator->prev('<- ');?> 
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(' ->'); }?>
	</div>
</div>

<!-- My favourites courses -->

<div id="course-content" style="display:none;" class="cont favorites">
</div>

<!-- All courses -->

<div id="course-content" style="display:none;" class="cont all">

</div>



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

</style>

<script type="text/javascript">

$( ".seeMore" )
  .mouseout(function() {
   	$(this).find('.maskBack').css('display', 'none');

  })
  .mouseover(function() {
   	$(this).find('.maskBack').css('display', 'block');

  });



$('.course').click(function(){
	if($(this).hasClass('empty')){
		$(this).removeClass('empty');
		$(this).addClass('full');
		$(this).attr('src' , '<?php echo $this->webroot;?>img/heart_full.png');
		LikeOrNot($(this).attr('id'), 1);
		$('.maskBack').css('display', 'none');
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
		$('.maskBack').css('display', 'none');
		return false;
	}
})

function LikeOrNot(id , result){
	$.ajax({
		url: WEBROOT+"course/like/"+id+"/"+result,
	})
}

$(document).ready(function(){
	if ($('.paging').children().length == 2){
		$('.paging').html('');
	}

	var he = $('#info_content').height();



	$('#menu-content').css('height', he+'px');

})

$('#searchR').bind("enterKey",function(e){
   var val = $('#searchR').val();
   var cl = 'all';

	$.ajax({
		url: WEBROOT+'course/index/'+cl+"?data="+val,
		type: 'post',
		dataType: 'json',
		success: function(){
			window.location = WEBROOT+"career_program/courses/"+cl+"?data="+val;
		},
		error: function(a,e,i){
			window.location = WEBROOT+"career_program/courses/"+cl+"?data="+val;
		}
	})

});

$('#searchR').keyup(function(e){
    if(e.keyCode == 13)
    {
        $(this).trigger("enterKey");
    }
});

$('.option').click(function(){
	if($(this).hasClass('searchResources')){

	}
	else{
		$('.cont').css('display', 'none');
		$('.option').removeClass('active');
		$(this).addClass('active');
		var cl = $(this).data('class');
		$('.'+cl).css('display', 'block');

		window.location = WEBROOT+"career_program/courses/"+cl;
	}

});

</script>