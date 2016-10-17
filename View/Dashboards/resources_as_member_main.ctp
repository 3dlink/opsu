<style>

 	#menuUserDashboard2 { 
    	padding-top: 10px !important;
    }

    .allContent{
    	margin-top: 10px;
    }
#header2 {
  background-image: url('../img/sunset-hair.png');
  max-width: 770px;
  max-height: 320px;
  position: relative;
  background-size: 100% 100%;
  background-position: center;
  background-position-y: 49%;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

.article {
  width: 470px;
  max-width: 470px;
  height: 446px;
  margin-right: 30px; 
  float: left;
}


#dash_content #info_content {
  background-color: #f7f7f7;
   min-height: inherit; 
  width: 1055px;
  float: left;
}


@media ( max-width : 750px) {

	#labelMovil{
		padding-left: 0px !important;
	}

	#menuUserDashboard2 {
		padding-left: 5px !important;
	}

	#article_articles {
		margin-top: 328px;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	
	#course-min-advance > div > p{
		font-size: 16px !important;
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
		  margin-left: -56px !important;
	}
	
	.seccion_derecha{
		  margin-left: 16px;
		
	
	}
	
	
	.seccion_izquierda {
		width: 97% !important;
	}
	
	.rigthC {
			  width: 87% !important;
			    margin-left: 45px !important;
	}
	
	
	
	#dash_content{
		  padding-left: 10px !important;
	
	}
	
	#labelMovil2{
	  padding-left: 13px;
	}
}

	.option{
		cursor: pointer;
	}

</style>

<div id="menu-as-member" >
<div id="menuUserDashboard2" style="width: 1015px;">
	<div class="option <?php echo $big_picture;?>" data-class="big_picture">
		Big Picture
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="self_knowledge" class="option <?php echo $self_knowledge;?>" data-class="self_knowledge">
		Self-knowledge
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="how_choose" class="option <?php echo $how_to_choose;?>" data-class="how_to_choose">
		How to Choose
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="job_hunting" class="option <?php echo $job_hunting;?>" data-class="job_hunting">
		Job Hunting
		<div></div>
	</div>
	<!-- <div class="separator"></div> -->
	<div class="option searchResources">
		<input type="" placeholder="Search" id="searchR" style="text-indent: 20px;   height: 38px;   border: none;   width: 365px; ;margin-left: 25px;">
		<div></div>
	</div>
</div>
	</div>

<div class="allContent" style="background-color: #f7f7f7;">

	<div class="contenedor_secciones" style="margin-left: -20px;">
		<section class="seccion_izquierda video" style="width: 1000px;">
		<?php foreach($articles as $article){?>
			<div class="course-min-content rigthC article" >
					<div id="course-min-img-content" onclick="window.location.href = WEBROOT+'career_program/resources/<?php echo $article['Article']['id'];?>/<?php echo $page;?>'; "  style="cursor:pointer;  background-size: 100% 100%;background-position-y: 49%;background-image: url('<?php echo $this->webroot.'files/'.$article['Article']['main_img'];?>');  height: 265px;   display: block;">
					
					<div id="gradiante" cursor:pointer;>
					</div>
					<div id="course-name" style="  position: inherit;  display: table-cell; height: 225px;   font-weight: bold; font-size: 24px; text-align: left;" >
						<?php echo $article['Article']['title'];?>
					</div>
					
					
				</div>
				<div id="course-min-advance" style="  height: 180px;">				
					<div>
					
					<p style="padding-top: 10px;">
						<?php echo $article['Article']['excerpt'];?>
						</p>
						
					</div>
					
					<div style="text-align: center; margin-bottom: 57px;">
					
						<button id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 170px; height: 50px;" onclick="window.location.href = WEBROOT+'career_program/resources/<?php echo $article['Article']['id'];?>/<?php echo $page;?>'; ">Read more</button>
				
					</div>
				</div>
			</div>
		<?php }?>	
		</section>
		<div style="clear: both;"></div>
	</div>

	<div class="paging" style="text-align: center; margin-bottom:60px; font-family:'lato',bold; font-size: 16px; border-top: 1px solid #D6D6D6;">
		<?php echo $this->Paginator->prev('<- ');?> 
		<?php echo $this->Paginator->numbers();?>
		<?php echo $this->Paginator->next(' ->');?>
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

<script>



$('#self_knowledge').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("self-knowledge in resources");
});
$('#how_choose').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("how to choose in resources");
});
$('#job_hunting').click(function(){
	// mixpanel.identify(ID_USUARIO);
	// mixpanel.track("job junting in resources");
});



function falseR(e){
	e.preventDefault();
	alert('click');
	return false;
}
</script>

<script type="text/javascript">

$(window).load(function(){
	 var h = $('#info_content').height();
	 if(h < 450){
	 	h = 450;
	 }
	 $('#menu-content').css('height', h+'px');
})

$(document).ready(function(){
	if ($('.paging').children().length == 2){
		$('.paging').html('');
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
		window.location = WEBROOT+"career_program/resources/"+cl;
	}

});


$("#searchR").keypress(function(e) {
    var c1 = 0;
    if(e.which == 13) {
        var val = $('#searchR').val();
        c1 = $('.active').data('class');
        if (typeof c1 === "undefined") {
		    c1 = "big_picture";
		}
    	$.ajax({
     		url: WEBROOT+'dashboards/resources_as_member_main/'+c1+'/'+val,
     		type: 'post',
     		dataType: 'json',
     		success: function(){
     		   window.location = WEBROOT+'career_program/resources/'+c1+'/'+val;
     		},
     		error: function(a,e,i){
     		   window.location = WEBROOT+'career_program/resources/'+c1+'/'+val;
     		}
     	});
    }
});
</script>


