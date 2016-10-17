<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 5,
		TAG: 'obituary_summary'
	}
})

</script>

<?php echo $this->Html->script(array('pekeUpload')); ?>
<style>
#header2 {
	background-image: url('<?php echo $this->webroot;?>img/obituary.png');
	max-width: 770px;
  	max-height: 430px;
	position: relative;
	  background-size: 100% 170%;
  background-position: center;
  background-position-y: 73%;
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
}

.botones {
  position: absolute;
  max-width: 770px;
  width: 90%;
  min-width: 0;
  min-height: 64px;
  border: 2px solid #cccccc;
  background: white;
  margin-top: 0;
}

.article_tips{
	  margin-bottom: 25px;
}

#btn_save_obi{
	width: 370px;
	height: 60px;
	font-size: 16px;
	font-weight: 400;
}

.link_obituaries{
  color: black;
  text-decoration: underline;
}

.comments{
	  border-top: solid 2px #d0d0d0;
}

.take_up_btn{
	text-align: center;margin-bottom: 40px;margin-top: 40px;
}
.science3{
	display: none;
}
#container-text{
	padding-top: 0px;
}
#items{
	color: black;
  font-size: 16px;
  padding-left: 30px;
}
#obituary_form_box{
	height: 600px;
	width: 100%;
	margin-top: 30px;
	box-shadow: 0px 0px 5px 0px #9d9d9d;
	font-size: 20px;
	background: white;
	position: relative;
}
.inI{
	-webkit-appearance:none;
	border: none;
  	background: none; 
  	border-bottom: 1px solid #e6e6e6;
}
.form_row{
	margin-bottom: 15px;
}
.avatar{
	position: relative;
	height: 210px; 
	width: 210px; 
	float:right; 
	margin-top: -20px; 
	margin-right: 10px;
}

#obi{
	border:none;
	background-image: url('<?php echo $this->webroot;?>img/lineas.png');
	color: black;
	font-size: 20px;
	min-height: 360px;
  min-width:730px;
  max-height: 360px;
	max-width:730px;
  line-height: 40px;
  margin-top: 10px;
  margin-left:20px;  
  padding-left: 20px;
  padding-right: 20px;
}

#datos_user{
	position: absolute;
	padding: 30px 0 0 20px;
	width:450px;
}

.input_1{
	width: 250px;padding-left: 23px;
}
.input_2{
	width: 180px;margin-left: -4px;
}
.input_3{
	width: 60px;text-align:right;
}
.input_4{
	width: 120px;margin-left: -4px;  padding-left: 6px;
}
.input_5{
	width: 25px;  margin-left: -4px;
}
.input_6{
	width: 225px;margin-left: -4px;
}
.input_7{
	width: 105px;text-align:right;  padding-right: 5px;
}
.input_8{
	width: 325px;margin-left: -4px;
}
.img-polaroid{
		height: 100%;
		border-radius: 100%;
		border: 10px solid #B3B3B3;
	}

#ribbon{
	position: absolute;
	height: 97px;
	width: 56px;
	background-image: url('<?php echo $this->webroot;?>img/ribbon.png');
	left: -13px;
}

@media (max-width: 750px){


	.form_row{
		margin-bottom: 0;
	}

	.input_1{
		  width: 80%;
  padding-left: 16px;
	}
	.input_2{
		  width: 20%;
		    text-align: right;
	}
	.input_3{
		  width: 40%;
  padding-left: 16px;
  text-align: left;
	}
	.input_4{
		  width: 60%;
  padding-left: 20px;
    text-align: right;
	}
	.input_5{
		  width: 25%;
  padding-left: 20px;
  margin-left: 0px;
	}
	.input_6{
		  width: 75%;
  padding-left: 5px;
    text-align: right;
	}
	.input_7{
		width: 40%;
  	padding-left: 16px;
  	text-align: left;
	}
	.input_8{
	  width: 60%;
  	padding-left: 0px;
  	  text-align: right;
	}

	#datos_user{
	padding: 0 10%;
  width: 100%;
  top: 235px;
	}

	#obituary_form_box{
		height: 960px;
		  font-size: 18px;
	}

	#obi{
		margin-top: 240px;
		width: 90%;
		min-width: 0px;
		height: 480px;
		max-height: 480px;
		min-height: 480px;
	}

	.avatar{
		height: 210px;
	  width: 210px;
	  float: left;
	  margin-top: -20px;
	  margin-left: 21vw;
	}
	#mod_comments{
		border-top: none;
		padding-top: 0;
	}
	#comments_abj{
		border-top: none;
		  margin-top: -25px;
	}

	.seccion_izquierda{
		border-bottom: solid 2px #d0d0d0;
	}

	tr > td {
	  font-size: 16px !important;
	}
	.science2{
		display: none;
	}
	.science3{
		display: block;
	}

	#header2{
		  height: 60vw;
	}

	.title p {
	  font-size: 5vw;
	    padding-top: 14px;
	}
	
	#article_articles {
	    margin-top: 162px;
	}
	.quiz-result-cursos {
		border-top: none !important;
	}
	.send_btn{
		position:absolute !important;
		right: 5px;bottom:0px;
	}
	#comentario textarea{
		top: 78px !important;
  	width: 88% !important;
	}
}
@media (max-width: 440px){
	.take_up_btn{
		text-align: center;margin-left: -7px;
	}
	#btn_save_obi{
		width: 97%;
	}
	.avatar{
	  margin-left: 11vw;
	}
}
</style>
<div style="min-height: 1700px;  background-color: #f7f7f7;">
	<div>		
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>Dashboards"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>Dashboards/introMod1"><?php echo __('My career vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>Dashboards/quest_mod1"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('My Obituary',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div>
				<div id="container-obituary">
					<span class="titulo">My obituary</span>
					
					<div id="obituary_form_box">
						<div class="avatar">
							<div id="ribbon"></div>
							<div class="form_holder" id="image">
								<div style="position:relative; cursor:pointer;" class="second">
									<div id="MaskUpload" style="top:20px;display: none;position: absolute; height: 210px; width: 210px; padding-top: 70px; color: white; padding-left: 50px;">Upload photo</div>
									<div id="MaskUploadO" style="display: none;position: absolute; height: 190px; width: 190px; border-radius: 100px; background: black; opacity: 0.5; top: 10px; left: 10px;"></div>
									<div id="MaskUpload2" style="top:20px;display: none;position: absolute; height: 210px; width: 210px; padding-top: 70px; color: white; padding-left: 50px;">Change photo</div>
								</div>
								<div style="cursor:pointer;height:210px;" class="image-placeholder image-placeholder2 second">
									<?php 
									if($user['Orbituary']['image'] == ""){?>
										<img src="<?php echo $this->webroot.'img/dashboard/unImagen.png';?>" style="width: 100%;" class="img-polaroid">
									<?php } else{ ?>
										<img src="<?php echo $this->webroot.'files/'.$user['Orbituary']['image'];?>" style="width: 100%;" class="img-polaroid">
									<?php } ?>
								</div>
								<div style="display:none;">
									<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
								</div>
							</div>
							<div class="imageHiddenContent2">
								<?php if($user['Orbituary']['image'] != ""){
									echo '<input type="hidden" value="'.$user['Orbituary']['image'].'" id="ArticleSquareImg" name="data[Article][square_img]">';
								}?>
								<!-- Recordar llenar este div cuando es edicion!!!!!! -->
							</div>
						</div>

						<div id="datos_user">
							<div class="form_row">
							<input class="input_1 inI" id="Userinfo"  readonly value="<?php echo ucwords($user['User']['State']['name']);?> - <?php echo ucwords($user['User']['first_name']).' '.ucwords($user['User']['last_name']);?>,">
							<input class="input_2 inI" id="obituary_age" placeholder="insert your age" value="<?php echo ucwords($user['Orbituary']['age']);?>">
							</div>
							<div class="form_row">
							<input class="input_3 inI"  readonly value="died">
							<input class="input_4 inI" id="obituary_died"  placeholder="insert date" value="<?php echo ucwords($user['Orbituary']['died']);?>">
							<input class="input_5 inI"  readonly value="at">
							<input class="input_6 inI" id="obituary_place" placeholder="insert place of dead" value="<?php echo ucwords($user['Orbituary']['place']);?>">
							</div>
							<div class="form_row">
							<input class="input_7 inI"  readonly value="following">
							<input class="input_8 inI" id="obituary_cause" placeholder="insert cause of dead" value="<?php echo ucwords($user['Orbituary']['cause']);?>">
							</div>
						</div>

						<textarea id="obi" placeholder="Write your Orbituary..."> <?php echo $user['Orbituary']['obituary'];?></textarea>

					</div>

				</div>

					<div class="take_up_btn">
						<button id="btn_save_obi" class="mentr-ok-btn-large" type="button">EDIT MY OBITUARY</button>
					</div>

					<div class="botones">
						<label  class="opinion">
							How useful did you find this resource?
						</label>
						<div class="faces">
							<button id="btn1" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/3.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn2" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/1.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
							<button id="btn3" class="mentr-ok-btn" style="background-image: url('<?php echo $this->webroot;?>img/2.png');background-position: center;background-size: 100%;background-color: white;" type="button"></button>	
						</div>
						<div id="comentario">
							<label id="mensaje_comentario">
								
							</label>
							<textarea placeholder="Say something..."></textarea>
	
							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;">Send</button>
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

	if($(window).width() <= 750){
		$('.input_2').prop("placeholder" , "age");
	}

	$('#btn_save_obi').on('click',function(){

		if(!isNaN($('#obituary_age').val())){

		var orbituary = new Object();
		orbituary['age'] = $('#obituary_age').val();
		orbituary['died'] = $('#obituary_died').val();
		orbituary['place'] = $('#obituary_place').val();
		orbituary['cause'] = $('#obituary_cause').val();
		orbituary['obituary'] = $('#obi').val();
		orbituary['image'] = $('#ArticleSquareImg').attr('value');
		

		$.post(WEBROOT+'dashboards/editOrbituary',{orbituary:orbituary},function(data){
			if(data){
				window.location = WEBROOT+"Dashboards/obituaryIntro";
			}
		},'json');

	}else{
		alert('Incorrect age field');
	}
	});


	$('#btn1').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
		$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
		//$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		if(document.body.clientWidth<750){
			$('#article_articles').css("margin-top", "400px");
		}
	});
	$('#btn2').on('click',function(){
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn2').css("background-image", "url("+WEBROOT+"img/N1.png)");
		$('#comentario').css("display", "none");
		if(document.body.clientWidth<750){
			$('#article_articles').css("margin-top", "162px");
		}
	});
	$('#btn3').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/3.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/N2.png)");
		$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
		$('#comentario').css("display", "block");
		if(document.body.clientWidth<750){
			$('#article_articles').css("margin-top", "400px");
		}
	});

		$(function(){
    	$("#image").hover(function(){
    		if($('.imageHiddenContent2').children().length == 0){
    			$(this).find("#MaskUpload").fadeIn();
    		}
    		else{
    			$(this).find("#MaskUpload2").fadeIn();
    			$(this).find("#MaskUploadO").fadeIn();
    		}
    		},
    		function(){
    			if($('.imageHiddenContent2').children().length == 0){
    				$(this).find("#MaskUpload").fadeOut();
	    		}
	    		else{
	    			$(this).find("#MaskUpload2").fadeOut();
	    			$(this).find("#MaskUploadO").fadeOut();
	    		}
		});        
	});

	$('.second').click(function(){
		$('.btn-upload').click();
	});

	$(document).ready(function(){
		$("#file2").pekeUpload({showPercent: false, theme:'bootstrap', btnText:'Browse', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>articles/upload"});

	});

</script>



