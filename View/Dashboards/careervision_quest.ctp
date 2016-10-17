<?php echo $this->Html->script(array('pekeUpload')); ?>

<style>


#container-text > p > a{
	color:black;
	text-decoration: underline;
}

.job_climate_article{
	border-bottom: 2px solid #d0d0d0;
}

#changePhoto_{
	display:none;
	position: absolute;
	font-weight:300;   
	bottom: -80px;
	box-shadow: none; 
	border-radius: 10px; 
	left: 45px;
	width: 150px !important; 
	height: 30px;  
	border: 2px solid #977F96; 
	background-color: transparent; 
	color: #977F96;
}

.caja_no_ideal{
	margin-top: 20px;
	text-align: justify;
	font-size: 18px;
	font-weight: 300;
}
.caja_ideal{
	text-align: center;	
	margin-top: 20px;
	margin-bottom: 30px;
}

.caja_ideal #ideal_1{
	color: #3d3d3d;
	font-size: 36px;
}
.caja_ideal #ideal_2{	
	color: #545454;
	font-size: 36px;
}
.caja_ideal #ideal_3{
	color: #888888;
	font-size: 30px;
}
.caja_ideal #ideal_4{
	color: #c1c1c1;
	font-size: 18px;
}
.caja_ideal #ideal_5{
	color: #d5d5d5;
	font-size: 16px;
}

.caja_no_ideal b{
	color: black;
	font-size: 16px;
	font-weight: 600;
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
	margin-bottom: 5px;
}

#btn_save_obi{
	width: 370px;
	height: 60px;
	font-size: 16px;
	font-weight: 400;
}

#btn_quest_div{
	width: 170px;
  display: block;
  margin: 40px auto;
}

#btn_quest_ideal{
	width: 170px;
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
}
#obituary_form_box{
	height: 645px;
	width: 100%;
	margin-top: 41px;
	box-shadow: 0px 0px 5px 0px #9d9d9d;
	font-size: 20px;
	background: white;
	position: relative;
}

.form_row{
	margin-bottom: 15px;
}
.avatar{
	padding-top: 30px;
	height: 280px;
  width: 250px;
  margin: 0 auto;
}

textarea{
	border:none;
	background-image: url('<?php echo $this->webroot;?>img/lineas.png');
	color: black;
	font-size: 20px;
	min-height: 320px;
  min-width:730px;
  max-height: 320px;
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
		border-radius: 2%;
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
	  padding-top: 0px;
	  font-size: 18px;
	  color: black;
	}

	#items {
	  color: black;
	  font-size: 16px;
	  padding-left: 30px;
	}

	.caja_module {
	  margin-top: -5px;
	}

	.article_tips {
	  margin-bottom: 5px !important;
	}

	#container-obituary {
	  margin-top: -10px;
	}

	.seccion_izquierda{
		padding-top: 15px;
	}

	.take_up_btn {
	  margin-bottom: 40px;
	}

	.job_climate_article{
		border-bottom: none;
	}

	#changePhoto_{
		display:block;
	}

	.modal-dialog {
		margin-left: 25%;
	}
	.avatar{
		position: relative;
	}

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
		  width: 18%;
  padding-left: 16px;
  text-align: left;
	}
	.input_4{
		  width: 82%;
  padding-left: 20px;
    text-align: right;
	}
	.input_5{
		  width: 14%;
  padding-left: 20px;
	}
	.input_6{
		  width: 86%;
  padding-left: 5px;
    text-align: right;
	}
	.input_7{
		width: 32%;
  	padding-left: 16px;
  	text-align: left;
	}
	.input_8{
	  width: 68%;
  	padding-left: 0px;
  	  text-align: right;
	}

	#datos_user{
	padding: 0 10%;
  width: 100%;
  top: 235px;
	}

	#obituary_form_box{
		height: 840px;
		  font-size: 18px;
	}

	textarea{
		margin-top: 50px;
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
	/*.avatar{
	  margin-left: 26%;
	}*/
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
	/*.avatar{
	  margin-left: 20%;
	}*/
}

@media (max-width: 330px){
	.modal-dialog {
		margin-left: 0%;
	}
	/*.avatar{
	  margin-left: 14%;
	}*/
}
</style>
<?php 
	$newArray = array ();

	if(!empty($workvalues)){

	$newArray ['1'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_autonomy'],
			'letter' => 'Autonomy' 
	);
	$newArray ['2'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_status'],
			'letter' => 'Social Status' 
	);
	$newArray ['3'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_impact'],
			'letter' => 'Impact' 
	);
	$newArray ['4'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_pay'],
			'letter' => 'Compensation' 
	);
	$newArray ['5'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_job_security'],
			'letter' => 'Job security' 
	);
	$newArray ['6'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_variety'],
			'letter' => 'Variety' 
	);
	$newArray ['7'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_balance'],
			'letter' => 'Working conditions' 
	);
	$newArray ['8'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_completeness'],
			'letter' => 'Sense of completion' 
	);
	$newArray ['9'] = array (
			'value' => $workvalues ['Workvaluesa'] ['wv_relatedness'],
			'letter' => 'Relatedness' 
	);

rsort($newArray);
}
?>
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
				<?php echo __('The Career Vision Exercise',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div>
				<div id="container-text">
					
						<div class="titulo" style="margin-bottom:33px;margin-top:-5px;">Instructions</div><p>
							Writing a career vision statement requires some introspection. First, review your results from the <a href="<?php echo $this->webroot;?>career_program/p3_intro">Pyramid of Personal Preferences</a>, the <a href="<?php echo $this->webroot;?>career_program/obituary_intro">Obituary Quest</a> and the <a href="<?php echo $this->webroot;?>career_program/values_intro">Personal Values Assessment</a> . Organize this information into three parts: The value you create; who you are creating value for; and the expected outcome. For example, I use my expertise in technology to inspire researchers to create drugs to cure rare diseases.<br><br>
You’ll want to think about things like culture, pace of work, surroundings, activities, expertise, experiences, people, and other broader life factors such as family, friendships, community, the world, values, time, relationships and possessions.<br><br>
When considering the above, it is important to remember the primary purpose of your career vision statement is to guide and inspire. It is not about finding a specific job in a specific industry, or about making money; these are career goals, not visions. Your vision is something you can always strive towards, yet never fully achieve—a philosophy, rather than a finite action.<br><br>
Test your vision statement by asking the following questions:
							<br><br>
								<div id="items">
									• Not “what”, but “why”: Ask yourself “why do I do this” three, four, or five times to get to the heart of the matter<br>
									• Does it guide and inspire me? <br>
									• Is this something I can ever fully achieve?<br>
									• Will it stand the test of time? <br>
									• Is it aligned with my hierarchy of preferences and personal values?
								</div>
						<br>
<p>
						Write, re-write, and keep on writing until you find the unique combination that resonates deeply within you, the one that answers the question “why am I here?”
With your vision in hand and in heart, the next step is to establish goals that can help you achieve it. Goals are not actions but targets, which should be directly tied to your vision in order to be as meaningful as possible. Goals are not set in stone and should always be open to evaluation and negotiation. An ongoing process of adaptation, as you learn and grow, your goals will need to be adjusted accordingly.
<br><br>
					</p>	
				</div>

				<div id="container-obituary">
					<span class="titulo">Write your career vision statement below</span>
					
					<div id="obituary_form_box">
						<div class="avatar">
							<div class="form_holder" id="image">
								<div style="position:relative; cursor:pointer;" class="second">
									<div id="MaskUpload" style="font-weigth:300;top:20px;display: none;position: absolute; height: 250px; width: 250px; padding-top: 90px; color: white; padding-left: 70px;z-index: 1;">Upload photo</div>
									<div id="MaskUploadO" style="display: none;position: absolute; height: 250px; width: 250px; background: black; opacity: 0.5;"></div>
									<div id="MaskUpload2" style="top:20px;display: none;position: absolute; height: 250px; width: 250px; padding-top: 90px; color: white; padding-left: 70px;">Change photo</div>
								</div>
								<button id="changePhoto_" type="button" class="second quiz-result-btn boton_module">
									Upload photo
								</button>
								<div style="cursor:pointer;height:250px;" class="image-placeholder image-placeholder2 second">
									<?php if(!empty($careervision)){ ?>
									<?php if($careervision['Careervision']['image'] == ""){?>
										<img src="<?php echo $this->webroot.'img/default_vision.jpg';?>" style="width: 100%;  border-radius: 2%;">
									<?php } else{ ?>
										<img src="<?php echo $this->webroot.'files/'.$careervision['Careervision']['image'];?>" style="width: 100%;  border-radius: 2%;  height: 100%;">
										<?php } ?>
									<?php }else{ ?>
									<img src="<?php echo $this->webroot.'img/default_vision.jpg';?>" style="width: 100%;  border-radius: 2%;">
									<?php } ?>
								</div>
								<div style="display:none;">
									<input type="file" class="" id="file2" name="file2" accept="image/*" data-img="" data-index="" />
								</div>
							</div>
							<div class="imageHiddenContent2">
								<?php if(!empty($careervision)){ ?>
								<?php if($careervision['Careervision']['image'] != ""){
									echo '<input type="hidden" value="'.$careervision['Careervision']['image'].'" id="ArticleSquareImg" name="data[Article][square_img]">';
								}?>
								<?php } ?>
								<!-- Recordar llenar este div cuando es edicion!!!!!! -->
							</div>
						</div>

						<?php if(empty($careervision)){ ?>
						<textarea id="obi" placeholder="Write your Career Vision..."></textarea>
						<?php }else{ ?>
						<textarea id="obi" placeholder="Write your Career Vision..."><?php echo $careervision['Careervision']['career_vision'];?></textarea>
						<?php } ?>

					</div>

				</div>

					<div class="take_up_btn">
						<div id="btn_gif_save">+50</div>
						<button id="btn_save_obi" class="mentr-ok-btn-large" type="button">SAVE MY CAREER VISION STATEMENT</button>
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
									Set aside a minimum 20 minutes for this quest
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Approach it with an open mind
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Find a quiet place, away from distractions and interruptions
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Your vision should come from you, not from those around you
								</td>
							</tr>
						</table>
					</div>
			</article>	
			<article class="article_tips">
					<big>
						<label class="titulo titulo_izquierda">Examples of career vision statements</label>
					</big>
					<div class="caja_module">
						<table id="examples">
							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="1" title="Oprah Winfrey" subtitle="Founder of the Oprah Winfrey Network " content="To be a teacher. And to be known for inspiring my students to be more than they thought they could be" class="link_obituaries btn_modal">Oprah Winfrey</a><br>Founder of the Oprah Winfrey Network
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="2" title="Amanda Steinberg" subtitle="Founder of Dailyworth.com" content="To use my gifts of intelligence, charisma, and serial optimism to cultivate the self-worth and net-worth of women around the world" class="link_obituaries btn_modal">Amanda Steinberg</a><br>Founder of Dailyworth.com
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('row.png');?>
								</td>
								<td>
									<a type="button" data-toggle="modal" data-target="#myModal" id="3" title="Denise Morrison" subtitle="CEO of the Campbell Soup Company" content="To serve as a leader, live a balanced life, and apply ethical principles to make a significant difference." class="link_obituaries btn_modal">Denise Morrison</a><br>CEO of the Campbell Soup Company
								</td>
							</tr>
						</table>
					</div>
			</article>	
			<article class="article_tips job_climate_article">
				<big>
					<label class="titulo">Your top work values</label>
				</big>
				<?php if(empty($workvalues)){?>
					<div class="caja_no_ideal">
						You haven’t yet completed your <b>Ideal Job Climate</b> assessment. Understanding better your work values will help you complete this quest.
						<div id="btn_quest_div"><button id="btn_quest_ideal" class="mentr-ok-btn-large" type="button">GO TO QUEST</button></div>
					</div>
				<?php }else{?>
					<div class="caja_ideal">
						<?php for ($i=0; $i < 5; $i++) { ?>
							<div id="ideal_<?php echo ($i+1);?>"><?php echo $newArray[$i]['letter']?></div>
						<?php } ?>
					</div>
				<?php }?>
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

$('#btn_quest_ideal').on('click',function(){
	window.location.href=WEBROOT+'career_program/assessment_wv';
});

$('.btn_modal').on('click',function(){
		$('#modaltitle').html($(this).attr('title'));
		$('#modalsubtitle').html($(this).attr('subtitle'));
		$('#modalcontent').html($(this).attr('content'));
	});

	if($(window).width() <= 750){
		$('.input_2').prop("placeholder" , "age");
	}

	$('#btn_save_obi').on('click',function(){

		if($('#obi').val() != ''){
			
			$('#btn_save_obi').attr('disabled', 'disabled');
			$('#btn_save_obi').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

		var careervision = new Object();
		careervision['career_vision'] = $('#obi').val();
		if($('#ArticleSquareImg').attr('value') == undefined) careervision['image'] = ''; else careervision['image'] = $('#ArticleSquareImg').attr('value');
		

		$.post(WEBROOT+'dashboards/addCareerVision',{careervision:careervision},function(data){
			if(data){
				$('#btn_gif_save').css("display","block");
				// mixpanel.identify(ID_USUARIO);
				// mixpanel.track("save button statement quest");
				// setTimeout(function(){
					window.location.href=WEBROOT+'career_program/quests_module_2';
				// },2000);
			}
		},'json');

	}else{
		alert('Please complete career vision statement field');
	}
	});

	$(function(){
    	$("#image").hover(function(){
    		if($('.imageHiddenContent2').children().length == 0){
    			$(this).find("#MaskUpload").fadeIn();
    			$(this).find("#MaskUploadO").fadeIn();
    		}
    		else{
    			$(this).find("#MaskUpload2").fadeIn();
    			$(this).find("#MaskUploadO").fadeIn();
    		}
    		},
    		function(){
    			if($('.imageHiddenContent2').children().length == 0){
    				$(this).find("#MaskUpload").fadeOut();
	    			$(this).find("#MaskUploadO").fadeOut();
	    		}
	    		else{
	    			$(this).find("#MaskUpload2").fadeOut();
	    			$(this).find("#MaskUploadO").fadeOut();
	    		}
		});        
	});

	$('.second').click(function(){
		$('.btn-upload').click();
  	$('#changePhoto_').html('Change photo');
	});
	$(document).ready(function(){
		$("#file2").pekeUpload({showPercent: false, theme:'bootstrap', btnText:'Browse', allowedExtensions:"jpeg|jpg|png|gif", multi:false, url:"<?php echo $this->webroot?>articles/upload"});

	});

</script>



