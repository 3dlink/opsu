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


#comentario {
  display: none;
  width: 100%;
  border: 2px solid #cccccc;
  height: 225px;
  max-width: 683px;
  position: relative;
  margin: -40px 0px 60px 47px;
  background: #ededed;
  right: inherit;
  bottom: inherit;
}
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
  position: relative;
  max-width: 770px;
  width: 100%;
  min-width: 0;
  min-height: 64px;
  border: 2px solid #cccccc;
  background: white;
  margin: 0 auto;
  margin-bottom: 60px;  
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
	margin-top: 40px;
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
	width: 430px;padding-left: 23px;
}
.input_3{
	width: 430px; text-align: left;
  padding-left: 20px;
}
.input_7{
	width: 430px;text-align: left;
  padding-left: 20px;
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

#btn1, #btn2, #btn3{
	margin-right: 20px !important;
}

#comentario{
	margin-left: 0px;
  width: 100%;
}

.titulo {
  font-size: 20px;
}


	.form_row{
		margin-bottom: 0;
	}

	.input_1{
		  width: 100%%;
  padding-left: 16px;
	}
	.input_3{
		  width: 100%;
  padding-left: 16px;
  text-align: left;
	}
	.input_7{
		width: 100%;
  	padding-left: 16px;
  	text-align: left;
	}

	#datos_user{
	padding: 0 5%;
  width: 100%;
  top: 235px;
  font-size: 20px;
	}

	#obituary_form_box{
		height: 890px;
		  font-size: 18px;
	}

	#obi{
		margin-top: 170px;
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
	  margin-left: 32%;
	}
	#mod_comments{
		border-top: none;
		padding-top: 0;
	}
	#comments_abj{
		border-top: none;
		  margin-top: -25px;
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

@media (max-width: 500px){
	.avatar{
	  margin-left: 26%;
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
	  margin-left: 20%;
	}

}

@media (max-width: 330px){
	.avatar{
	  margin-left: 14%;
	}
}
</style>
<div style="background-color: #f7f7f7;">
	<div>		
		<div id="menuUserDashboard" style="color: #B0B0B0;">
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/dashboard"><?php echo __('Dashboard',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My Career Vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
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
								<div style="height:210px;" class="image-placeholder image-placeholder2 second">
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
							<input class="input_1 inI" id="Userinfo"  readonly value="<?php echo ucwords($user['User']['State']['name']);?> - <?php echo ucwords($user['User']['first_name']).' '.ucwords($user['User']['last_name']);?>, <?php echo ucwords($user['Orbituary']['age']);?>, ">
							</div>
							<div class="form_row">
							<input class="input_3 inI"  readonly value="died <?php echo ucwords($user['Orbituary']['died']);?> at <?php echo ucwords($user['Orbituary']['place']);?>">
							</div>
							<div class="form_row">
							<input class="input_7 inI"  readonly value="following <?php echo ucwords($user['Orbituary']['cause']);?>">
							</div>
						</div>

						<textarea id="obi" readonly placeholder="Write your Orbituary..."> <?php echo $user['Orbituary']['obituary'];?></textarea>

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
							<label id="mensaje_comentario">
								
							</label>
							<textarea id="text_comentario" placeholder="Say something..."></textarea>
	
							<div class="send_btn">
								<button class="mentr-ok-btn-large" type="button" style="width: 110px;height: 40px;">Send</button>
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

	$('#btn_save_obi').on('click',function(){
		window.location = WEBROOT+"career_program/edit_obituary";
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'obituary','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

</script>



