<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: "<?php echo $page;?>",
		ID: "<?php echo $article['Article']['id']?>",
		LIMIT: 5,
		TAG: 'null'
	}
});

</script>

<style>

#container-text h4{
	font-size: 20px !important;
	    color: black;
}



#comentario {
  margin: -40px 0px 60px 0px;
}
.botones {
  width: 100%;
}
#header2 {
  background-image: url('../img/sunset-hair.png');
  max-width: 770px;
  max-height: 320px;
  position: relative;
  background-size: 100% 100%;
  background-position: center;
  background-position-y: 49%;
  background-repeat: no-repeat;
}

#container-text a{
	/*color: red !important;*/
	text-decoration: underline;
	color: black;
}

.send_btn {
	position: absolute;
	right: 25px;
	bottom: 20px;
}

@media ( max-width : 750px) {
	#menuUserDashboard2 {
		padding-left: 5px !important;
	}
	#labelMovil{
		padding-left: 0px !important;
	}
	

	.faces > button{
		margin-left: 20px !important;
	}

	.quiz-result-cursos {
		border-top: none !important;
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
	
	#contenedor-member{
		/*width: 470px !important;*/
	}
	.seccion_izquierda {
		  width: 91% !important;
	}
	
	#labelMovil2{
	  padding-left: 24px;
	}
	#labelMovil > span{
		padding-left: 20px !important;
	}
	
	
}
</style>

<div class="allContent" style="background-color: #f7f7f7;">
	<div id="contenedor-member">
		<div id="menuUserDashboard" style="padding-left: 0px; color: #B0B0B0;   margin-left: 25px;">
			<div class="option">
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/resources/big_picture"><?php echo __('Resources',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<?php 
				// debug($page);
				if($page == "Big_picture" || $page == "big_picture"){
					$tiP = "Big picture";
					$pg = "big_picture";
				}
				if($page == "Self_knowledge" || $page == "self_knowledge"){
					$tiP = "Self knowledge";
					$pg = "self_knowledge";	
				}
				if($page == "How_to_choose" || $page == "how_to_choose"){
					$tiP = "How to choose";
					$pg = "how_to_choose";	
				}
				if($page == "Job_hunting" || $page == "job_hunting"){
					$tiP = "Job hunting";
					$pg = "job_hunting";	
				}
				
				
				?>
				<a style="color: #B0B0B0;"
					href="<?php echo $this->webroot;?>career_program/resources/<?php echo $pg;?>"><?php echo __($tiP,true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __($article['Article']['title'],true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda video" style="  margin-left: 30px; width: 570px;">
			<div id="" style="">
				<div id="header2" style="  width: 100%; height: 100%; background-size:cover; background-image:url(<?php echo $this->webroot.'files/'.$article['Article']['main_img'] ;?>)">
					<!-- <img alt="" src="<?php echo $this->webroot.'files/'.$article['Article']['square_img'] ;?>" style="  width: 570px; height: 320px;"> -->
					<div class="title" style="display: table;">
						<p style=" padding-top:0px;   height: 100%;  display: table-cell; vertical-align: middle; font-size: 24px; font-weight: bold;"><?php echo __($article['Article']['title'],true);?></p>
					</div>
				</div>
				<div id="container-text">
					<?php echo $article['Article']['text'];?>

					<div style="text-align: center; margin-top: 35px; margin-bottom: 45px;">
						<button onclick="window.location.href = WEBROOT+'career_program/resources/<?php echo $pg;?>';" id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 170px; height: 50px;">Got it! </button>
					</div>
					<div class="botones">
						<label class="opinion"> How useful did you find this resource? </label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
						</div>
					</div>
					<div id="message-succes" style="display: none;">
						<img src="<?php echo $this->webroot;?>img/Check.png" style="" id="message-succes-imagen">
						<div style="" id="message-succes-texto">
							<h3>Thank you for your feedback!</h3>
						</div>
					</div>
						<div id="comentario">
							<label id="mensaje_comentario"> </label>
							<textarea id="text_comentario" placeholder="Say something..."></textarea>
							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button" style="width: 110px; height: 40px;">Send</button>
							</div>
						</div>


				</div>
			</div>
		</section>
		<section class="seccion_derecha">
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>
</div>

<script>


	var click = 0;

	$('#btn_got_it').on('click',function(){
		click++;
		if(click<=1){
			$('#btn_gif').css("display","block");
		}else{
			$('#btn_gif').css("display","none");
		}
	});

var like = 0;

	$('#btn1').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
		$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
		$('#comentario').css("display", "block");
		like = 1;
	});
	$('#btn2').on('click',function(){
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn2').css("background-image", "url("+WEBROOT+"img/N2.png)");
		$('#comentario').css("display", "none");
		like = 0;
	});
	$('#btn3').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/N1.png)");
		$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		like = -1;
	});


	$('.send_btn').on('click', function(){
		var d = '<?php echo date("Y/m/d");?>';

		var comment = [];
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'resources','modulo':0,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

$(window).load(function(){
	$('#menu-content').height($('#info_content').height());
});

var porcentaje = 0;

$(document).ready(function(){
		$('title').html("Resources - <?php echo $article['Article']['title'];?>");
	// porcentaje = $('#header2').width();
 // 	porcentaje2 = porcentaje - 100;
 // 	porcentaje3 = porcentaje + 150;

 // 	if($(window).width() < 750){
	//  	if(porcentaje <= porcentaje2){
	//  		$("#header2").css("background-size",porcentaje+"px "+porcentaje2+"px");
	//  	}
	//  	else{
	// 	 	$("#header2").css("background-size",porcentaje3+"px "+porcentaje+"px");
	//  	}
	// }
	// else{
	// 	$("#header2").css("background-size", "570px 320px");
	// }
})

// $(window).resize(function() { //para madu
// 	 	porcentaje = $('#header2').width();
// 	 	porcentaje2 = porcentaje - 100;
// 	 	porcentaje3 = porcentaje + 150;

// 	 	if($(window).width() < 750){
// 		 	if(porcentaje <= porcentaje2){
// 		 		$("#header2").css("background-size",porcentaje+"px "+porcentaje2+"px");
// 		 	}
// 		 	else{
// 			 	$("#header2").css("background-size",porcentaje3+"px "+porcentaje+"px");
// 		 	}
// 		}
// 		else{
// 			$("#header2").css("background-size", "570px 320px");
// 		}
// 	});
</script>




