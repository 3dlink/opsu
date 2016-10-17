<?php echo $this->Html->script(array('pekeUpload')); ?>

<style>

#container-obituary{
	margin-top: 31px;
}

#myModal{
	background-color: rgba(0,0,0,0.7);
}

.modal-dialog {
	width: 330px;
	height: 420px;
	color:black;
	margin-top: 25vh;
}
.modal-content {
	height: 420px;
}

.modal-title{
	font-size: 20px;
	font-weight: 600;
}

.modal-subtitle{
	font-size: 18px;
	font-weight: 300;
}

.modal-body{
	font-size: 16px;
	font-weight: 300;
	text-align: justify;
}

.closemodal {
	background-image: url('<?php echo $this->webroot;?>img/Close.png');
	width: 32px;
  height: 32px;
  margin-top: -5px;
  margin-left: 270px;
}

@-webkit-keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -40px;
  	left: 500px;
	}

	to {
		opacity: 0;
		top: -53px;
  	left: 526px;
	}

}

@keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -40px;
  	left: 500px;
	}

	to {
		opacity: 0;
		top: -53px;
  	left: 526px;
	}

}

#btn_gif_save {
  font-size: 35px;
  font-weight: 600;
  color: #FF6633;
  position: absolute;
  top: -40px;
  left: 510px;
  display: none;
  opacity: 0;
  -webkit-animation-name: fadeout_save;
  -webkit-animation-duration: 2s;
  animation: fadeout_save 4s 2s;
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
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
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
	cursor: pointer;
  color: black;
  text-decoration: underline;
}

.comments{
	  border-top: solid 2px #d0d0d0;
}

.take_up_btn{
	text-align: center;margin-bottom: 60px;margin-top: 40px;position: relative;
}
.science3{
	display: none;
}
#container-text{
	padding-top: 0px;
	font-size: 16px;
	color: black;
}
#items{
	color: black;
  font-size: 16px;
  padding-left: 30px;
  margin-top: -10px;
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

textarea{
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
  padding-left: 10px;
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
	#container-text {
	  font-size: 18px;
	}

	#container-obituary {
	  margin-top: 35px;
	}

	.take_up_btn {
	  margin-bottom: 35px;
	}

	.modal-dialog {
		margin-left: 25%;
	}

	.avatar{
		height: 210px;
	  width: 210px;
	  float: left;
	  margin-top: -20px;
	  margin-left: 32%;
	}

	.form_row{
		margin-bottom: 0;
	}
	.linea1 {
	  border-bottom: none;
	}
	.linea11 {
  	border-bottom: 1px solid #e6e6e6;
	}

	.input_1{
  padding-left: 16px;
	}
	.input_2{
		  width: 14%;
		    text-align: left;
	}
	.input_3{
		  width: 18%;
  padding-left: 16px;
  text-align: left;
	}
	.input_4{
		  width: 82%;
  padding-left: 20px;
    text-align: left;
	}
	.input_5{
		  width: 14%;
  padding-left: 20px;
	}
	.input_6{
		  width: 86%;
  padding-left: 5px;
    text-align: left;
	}
	.input_7{
		width: 32%;
  	padding-left: 16px;
  	text-align: left;
	}
	.input_8{
	  width: 68%;
  	padding-left: 0px;
  	  text-align: left;
	}

	#datos_user{
	padding: 0 5%;
  width: 100%;
  top: 235px;
  font-size: 20px;
	}

	#obituary_form_box{
		height: 915px;
		  font-size: 18px;
		  margin-top: 60px;
	}

	textarea{
		margin-top: 200px;
		width: 90%;
		min-width: 0px;
		height: 480px;
		max-height: 480px;
		min-height: 480px;
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
	  font-size: 18px !important;
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
	    margin-top: 328px;
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

@media (max-width: 600px){
	.modal-dialog {
		margin-left: 20%;
	}
}

@media (max-width: 500px){
	.modal-dialog {
		margin-left: 15%;
	}
	.avatar{
	  margin-left: 26%;
	}
}

@media (max-width: 467px){
	.modal-dialog {
		margin-left: 13%;
	}
}


@media (max-width: 440px){
	.modal-dialog {
		margin-left: 9%;
	}
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

@media (max-width: 380px){
	.modal-dialog {
		margin-left: 0%;
	}
}

@media (max-width: 330px){
	.avatar{
	  margin-left: 14%;
	}
}
</style>
<?php //debug($user);?>
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
				<?php echo __('The Obituary Exercise',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div>
				<div id="container-text">
					<p>
						<span class="titulo">Instructions</span>
						<div style="height:20px;"></div>
							When writing your obituary, you should think about what people would say about you, were you to pass away. Because spontaneous thought is the most honest, try not to overthink it but write whatever comes to mind, even if it doesn’t make sense to start with. You’ll have time to come back and review it again later. You should spend about 20 minutes writing your first draft. Do not try to critique or analyze your thoughts, but set them aside for a few days. When you come back to them again you’ll be able to read and review them in a more objective way and perfect your answers.
							<br><br>
							Questions you should ask yourself as you do this exercise:
							<br><br>
								<div id="items">
									• What and/or who did you impact or change? Why?<br>
									• How did you give back to those around you?<br>
									• Who did you care for? How did you impact or change this person/these people?<br>
									• What were major accomplishments in your life? At the ages of 40, 50, 60, 70?<br>
									• What were your biggest accomplishments?<br>
									• What did you show interest in? What were you inspired by?<br>
									• What was your legacy?
								</div>
					</p>	
				</div>

				<div id="container-obituary">
					<span class="titulo">Write your obituary below</span>
					
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
									<?php if(!empty($obituary)){ ?>
									<?php if($obituary['Orbituary']['image'] == ""){?>
										<img src="<?php echo $this->webroot.'img/dashboard/unImagen.png';?>" style="width: 100%;" class="img-polaroid">
									<?php } else{ ?>
										<img src="<?php echo $this->webroot.'files/'.$obituary['Orbituary']['image'];?>" style="width: 100%;" class="img-polaroid">
										<?php } ?>
									<?php }else{ ?>
									<img src="<?php echo $this->webroot.'img/dashboard/unImagen.png';?>" style="width: 100%;" class="img-polaroid">
									<?php } ?>
								</div>
								<div style="display:none;">
									<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
								</div>
							</div>
							<div class="imageHiddenContent2">
								<?php if(!empty($obituary)){ ?>
								<?php if($obituary['Orbituary']['image'] != ""){
									echo '<input type="hidden" value="'.$obituary['Orbituary']['image'].'" id="ArticleSquareImg" name="data[Article][square_img]">';
								}?>
								<?php } ?>
								<!-- Recordar llenar este div cuando es edicion!!!!!! -->
							</div>
						</div>

						<div id="datos_user">
							<div class="form_row linea11">
							<input class="input_1 inI linea1" id="Userinfo"  readonly value="<?php echo ucwords($user['State']['name']);?> - <?php echo ucwords($user['User']['first_name']).' '.ucwords($user['User']['last_name']);?>,">
							<?php if(!empty($obituary)){ ?>
							<input class="input_2 inI linea1" id="obituary_age" value="<?php echo ucwords($obituary['Orbituary']['age']);?>">
							</div>
							<div class="form_row">
							<input class="input_3 inI"  readonly value="died">
							<input class="input_4 inI" id="obituary_died"  value="<?php echo ucwords($obituary['Orbituary']['died']);?>">
							<input class="input_5 inI"  readonly value="at">
							<input class="input_6 inI" id="obituary_place" value="<?php echo ucwords($obituary['Orbituary']['place']);?>">
							</div>
							<div class="form_row">
							<input class="input_7 inI"  readonly value="following">
							<input class="input_8 inI" id="obituary_cause" value="<?php echo ucwords($obituary['Orbituary']['cause']);?>">
							</div>
							<?php }else{ ?>
							<input class="input_2 inI linea1" id="obituary_age" placeholder="insert your age">
							</div>
							<div class="form_row">
							<input class="input_3 inI"  readonly value="died">
							<input class="input_4 inI" id="obituary_died"  placeholder="insert date">
							<input class="input_5 inI"  readonly value="at">
							<input class="input_6 inI" id="obituary_place" placeholder="insert place of dead">
							</div>
							<div class="form_row">
							<input class="input_7 inI"  readonly value="following">
							<input class="input_8 inI" id="obituary_cause" placeholder="insert cause of dead">
							</div>
							<?php } ?>
							
						</div>

						<?php if(empty($obituary)){ ?>
						<textarea id="obi" placeholder="Write your obituary..."></textarea>
						<?php }else{ ?>
						<textarea id="obi" placeholder="Write your obituary..."><?php echo $obituary['Orbituary']['obituary'];?></textarea>
						<?php } ?>

					</div>

				</div>

					<div class="take_up_btn">
						<div id="btn_gif_save">+50</div>
						<button id="btn_save_obi" class="mentr-ok-btn-large" type="button">SAVE MY OBITUARY</button>
					</div>
				
			</div>

		</section>	
		<section class="seccion_derecha">
			<article class="article_tips">
					<big>
						<label class="titulo titulo_izquierda">Make it work</label>
					</big>
					<div class="caja_module">
						<table>
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Put aside at least 20 minutes of quiet time with no interruptions
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Don’t overthink it
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Put aside your first draft and come back to it a few days later 
								</td>
							</tr>
						</table>
					</div>
			</article>	
			<article class="article_tips" style="  border-bottom: solid 2px #d0d0d0;  padding-bottom: 25px;">
					<big>
						<label class="titulo titulo_izquierda">Examples of obituaries</label>
					</big>
					<div class="caja_module">
						<table>
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" href="http://www.nytimes.com/2015/07/14/business/satoru-iwata-nintendo-chief-executive-dies-at-55.html?ref=obituaries&_r=0" target="_blank" id="1" title="Satoru Iwata" class="link_obituaries btn_modal">Satoru Iwata</a><br>Nintendo Chief Executive
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" href="http://www.legacy.com/memorial-sites/2015/obituary.aspx?n=BB-King&pid=174865805&ua=JKt3UMHq%2bUsglf3zALnfRg%3d%3d" target="_blank" id="1" title="B.B. King" class="link_obituaries btn_modal">B.B. King</a><br>Influential Blues Musician
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" target="_blank" href="http://www.legacy.com/memorial-sites/2013/obituary.aspx?n=Nelson-Mandela&pid=168359315&ua=qof591r8lQUA27kuD2IDNA%3d%3d" id="1" title="Nelson Mandela" class="link_obituaries btn_modal">Nelson Mandela</a><br>Nobel Peace Prize Winner
								</td>
							</tr>
						</table>
					</div>
			</article>	
		</section>

		<div style="clear: both;"></div>
	</div>			
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<div type="button" class="closemodal" data-dismiss="modal" aria-label="Close"></div>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <span class="modal-title" id="modaltitle"></span><br>
        <span class="modal-subtitle" id="modalsubtitle"></span>
      </div>
      <div id="modalcontent" class="modal-body"></div>
    </div>
  </div>
</div>

<script>

	$('.btn_modal').on('click',function(){
		$('#modaltitle').html($(this).attr('title'));
		$('#modalsubtitle').html($(this).attr('subtitle'));
		$('#modalcontent').html($(this).attr('content'));
	});

	if($(window).width() <= 750){
		$('.input_2').prop("placeholder" , "age");
	}

	$('#btn_save_obi').on('click',function(){


		var orbituary = new Object();
		if($('#obituary_age').val() == undefined) orbituary['age'] = '0'; else orbituary['age'] = $('#obituary_age').val();
		if($('#obituary_died').val() == undefined) orbituary['died'] = ''; else orbituary['died'] = $('#obituary_died').val();
		if($('#obituary_place').val() == undefined) orbituary['place'] = ''; else orbituary['place'] = $('#obituary_place').val();
		if($('#obituary_cause').val() == undefined) orbituary['cause'] = ''; else orbituary['cause'] = $('#obituary_cause').val();
		if($('#obi').val() == undefined) orbituary['obituary'] = ''; else orbituary['obituary'] = $('#obi').val();
		if($('#ArticleSquareImg').attr('value') == undefined) orbituary['image'] = ''; else orbituary['image'] = $('#ArticleSquareImg').attr('value');
		
		var URLactual = window.location.href;
		URL = URLactual.split('/');

		if(orbituary['obituary'] != ''){

			
		$('#btn_save_obi').attr('disabled', 'disabled');
		$('#btn_save_obi').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
			
		if(orbituary['age'] == ''){orbituary['age'] = '0';}
		$.post(WEBROOT+'dashboards/addOrbituary',{orbituary:orbituary},function(data){
			if(data){
				if(URL[URL.length-1] != '1')
					$('#btn_gif_save').css("display","block");
					setTimeout(function(){
					// mixpanel.identify(ID_USUARIO);
					// mixpanel.track("save button obituary quest");
					$('#btn_gif_save').css("display","none");
					window.location.href=WEBROOT+'career_program/obituary_results';
			},2000);
			}
		},'json');

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



