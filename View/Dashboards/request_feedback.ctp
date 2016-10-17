<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: '360_request'
	}
})
</script>

<style type="text/css">
@-webkit-keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -43px;
  	right: 222px;
	}

	to {
		opacity: 0;
		top: -70px;
  	right: 174px;
	}

}


@keyframes fadeout_save {
	
	from { 
		opacity: 1;
		top: -43px;
  	right: 222px;
	}

	to {
		opacity: 0;
		top: -70px;
  	right: 174px;
	}

}
#btn_gif {
  font-size: 35px;
  font-weight: 600;
  color: #FF6633;
  position: absolute;
  top: -43px;
  right: 222px;
  display: none;
  opacity: 0;
  -webkit-animation-name: fadeout_save;
  -webkit-animation-duration: 4s;
  animation: fadeout_save 4s 2s;
}

.dash-vision-content{
	  margin-top: 7px;
}
.inI{
	-webkit-appearance:none;
	border: none;
  	background: none; 
  	border-bottom: 1px solid #999999;

}

.firsTd{
	padding-left: 0px !important;
}

.imgChecks > img{
	display: block; 
	margin: auto;
	width: 85%;
}

.dropdown-menu > li > a{
		color:#9B9B9B;
}
@media ( max-width : 750px) {

.doa {
  margin-left: 0 !important;
}

.seccion_derecha {
  margin-bottom: -9px;
}

.doa > ul {
  margin-top: 1px !important;
}

.imgChecks > img {
  width: 100%;
}
.quiz-result-cursos #quiz-result-img-content #tittle {
  bottom: 0 !important;
}

}


@media ( max-width : 370px) {

	.dash-vision-content{
			height : 600px !important;
	}
	
	#tittle{
	
			padding: 7px 0 0 5px !important;
	}

}


@media ( max-width : 320px) {

.dash-vision-content{
			height : 620px !important;
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
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_3"><?php echo __('Improve My Decision-Making Intro Page',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_3"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" onclick="function test(){return false;}" href="#"><?php echo __('360 Feedback',true);?></a>
				<div></div>
			</div>

			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Request Feedback',true);?>
				<div></div>
			</div>
		</div>
	</div>


<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div id="">

		<!-- <div class="video" style="width: 100%;">
						<?php echo $this->Html->image('vimeo.jpg',array('style'=>'width: 100%;'));?>
				</div>	 -->
					<div style="text-align: justify;margin-top: -11px;">
						<div>
						<h4 style="color:black; margin-top: 0px; font-weight: bold !important; font-size:30px; line-height:33px;">Great job! You've completed the first step of the quest.</h4>
						<div class="imgChecks" style="margin-bottom: 20px;">
							<?php echo $this->Html->image('Checks1.png');?>
						</div>
							<p>
								Next, invite at least five people to complete the same assessment about you. For best results, choose people that have known you for 1-3 years. If that is not possible for all of the invites, choose people that have known you for less than one year. If you still cannot reach five by using these two criteria, choose people that have known you for 3-5 years to make up the numbers. Ideally the people rating you should have known you long enough to get past first impressions, but not so long that they begin to generalize favorably.
								<br /><br />
								Upon invitation each will receive an email with a link to the assessment page. At least three of the people you invited need to submit their answers before you can unlock the final results.
								<br /><br />
								You will be able to see only the aggregated results of the people reviewing you.
							</p>
						</div>

						<?php for ($x = 1; $x < 6; $x++) { 
							$top = "";
							if($x == 1){
								$top = "margin-top: 45px;";
							}
							?>
						
							<div style="<?php echo $top;?> font-size:17px; width:100%; margin-bottom: 25px;" class="invitation">
								<div style="float:left;">
									<span style=" font-weight: bold; color:#FF6633;"><?php echo $x;?>.</span> 
									<input id="name<?php echo $x;?>" class="inI" style="width:160px; margin-left:20px;" placeholder="Name">
								</div>
								<div style="float:left;" class="secoInvitation">
									<input id="email<?php echo $x;?>" class="inI" style="width:340px; margin-left:15px;" placeholder="Email">
								</div>
								<div class="secoInvitation">
										<input style="float: left; margin-left:15px;   margin-bottom: 25px;" class="inI selt" id="V<?php echo $x;?>" readonly value="Relationship...">

										<div class="btn-group doa" id="DV<?php echo $x;?>" style="margin-bottom: -1px; border-bottom: 1px solid #999999;margin-left: -20px;">
											<span class="down flagRow dropdown-toggle" data-toggle="dropdown" tabindex="-1" id="SV<?php echo $x;?>" ><img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"></span>

							                <ul class="dropdown-menu" style=" border:0px; margin-left: -170px; min-width: 190px; background-color: #E6E6E6; ">
							                  <li><a style="" class="relationShip" data-number="<?php echo $x;?>" href="">Friend</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Family</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Colleague</a></li>
											  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Mentor</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Professor</a></li>
											  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Other</a></li>
							                </ul>
									    </div> 

								</div>
							</div>
							<div style="clear:both;"></div>
						<?php } ?>
						<div class="inviByMore">
						<?php for ($x = 6; $x < 8; $x++) { ?>
							<div style="font-size:17px; width:100%; margin-bottom: 25px;" class="invitation">
								<div style="float:left;">
									<span ><?php echo $x;?>.</span> 
									<input id="name<?php echo $x;?>" class="inI" style="width:160px; margin-left:20px;" placeholder="Name">
								</div>
								<div style="float:left;" class="secoInvitation">
									<input id="email<?php echo $x;?>" class="inI" style="width:340px; margin-left:15px;" placeholder="Email">
								</div>
								<div class="secoInvitation">
								
									<input style="float: left; margin-left:15px;  margin-bottom: 25px;" class="inI selt" id="V<?php echo $x;?>" readonly value="Relationship...">

										<div class="btn-group doa" id="DV<?php echo $x;?>" style="margin-bottom: -1px; border-bottom: 1px solid #999999;margin-left: -20px;">
											<span class="down flagRow dropdown-toggle" data-toggle="dropdown" id="SV<?php echo $x;?>" tabindex="-1"><img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"></span>
							                <ul class="dropdown-menu" style="background-color: #E6E6E6; margin-left: -170px; min-width: 190px; border:0px;">
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Friend</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Family</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Colleague</a></li>
											  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Mentor</a></li>
							                  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Professor</a></li>
											  <li><a class="relationShip" data-number="<?php echo $x;?>" href="">Other</a></li>
							                </ul>
									    </div> 
								</div>


						

							</div>
							<div style="clear:both;"></div>
						<?php } ?>
						</div>


						<h4 id="addMoreInv" style="color:black; font-size: 18px;">Add more... <?php echo $this->Html->image('More.png');?> </h4>

						<div style="text-align: center; font-size:16px; position:relative;">
						<div id="btn_gif">+60</div>
							<button style="width: 50%" type="button" id="sentInvitation" class="quiz-result-btn boton_module">
							SEND THE INVITATIONS</button>
						</div>

					</div>
					<div style="clear:both;"></div>
			</div>

	<div class="ScienceWeb" style="margin-bottom:45px;">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						This assessment is based on the premise that there are parts of ourselves that are known, and parts that are not known, either to ourselves or to others. This concept is the basis for the Johari Window, a fundamental tool used in feedback and leadership training today. Developed by American psychologists Joseph Luft and Harrington Ingham in the 1950s, its purpose is to help people better understand the relationship with their self and others. This in turn provides a greater understanding of where to focus. The Johari Window consists of four “window panes”: <i>the Façade, known only to the self; the Arena, known to all; the Unknown, known to no one; and the Blind Spot, known to others but not the self.</i>
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>

			
			<div style="clear:both;"></div>
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
									Invite at least five people to complete the assessment
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									Ask people you have known for 1-3 years. If this is not possible, for less than one year
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									At least three invitees must respond before you can see the results
								</td>
							</tr>

							<tr>
								<td style="padding:0;">
										<?php echo $this->Html->image('likeH.png');?>
								</td>
								<td>
									You will only see aggregated results
								</td>
							</tr>
						</table>
					</div>
			</article>	

			<!-- ARTICULOS -->
				<?php echo $this->element('article_list');?>


	<div class="ScienceMobile">
		<div style="clear: both;"></div>
		<div class="dash-vision-content" style="height: 450px;">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						This assessment is based on the premise that there are parts of ourselves that are known, and parts that are not known, either to ourselves or to others. This concept is the basis for the Johari Window, a fundamental tool used in feedback and leadership training today. Developed by American psychologists Joseph Luft and Harrington Ingham in the 1950s, its purpose is to help people better understand the relationship with their self and others. This in turn provides a greater understanding of where to focus. The Johari Window consists of four “window panes”: <i>the Façade, known only to the self; the Arena, known to all; the Unknown, known to no one; and the Blind Spot, known to others but not the self.</i> 
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
<br/><br/>

		</section>
		<div style="clear: both;"></div>

	</div>
</div>
<script type="text/javascript">
	
	$('#addMoreInv').click(function(){
		var can = $('.inviByMore').children().length;
		can = can /2 + 6;
		if(can == 9){
			$('#addMoreInv').css('display', 'none');
		}
		$('.inviByMore').append('<div style="font-size:17px; width:100%; margin-bottom: 25px;" class="invitation">'+
								'<div style="float:left;">'+
									'<span >'+can+'.</span> '+
									'<input id="name'+can+'" class="inI" style="width:160px; margin-left:20px;" placeholder="Name">'+
								'</div>'+
								'<div style="float:left;" class="secoInvitation">'+
									'<input id="email'+can+'" class="inI" style="width:340px; margin-left:15px;" placeholder="Email">'+
								'</div>'+
								'<div class="secoInvitation">'+
									'<input style="float: left; margin-left:15px;   margin-bottom: 25px;" class="inI selt" id="V'+can+'" readonly value="Relationship...">'+
										'<div id="DV'+can+'" class="btn-group doa" style="margin-bottom: -1px;margin-left: -20px; border-bottom: 1px solid #999999;">'+
											'<span id="SV'+can+'" class="down flagRow dropdown-toggle" data-toggle="dropdown" tabindex="-1"><img style="width: 20px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"></span>'+
							                '<ul class="dropdown-menu" style="background-color: #E6E6E6;  margin-left: -170px; min-width: 190px; border:0px;">'+
							                  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Friend</a></li>'+
							                  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Family</a></li>'+
							                  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Colleague</a></li>'+
											  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Mentor</a></li>'+
							                  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Professor</a></li>'+
											  '<li><a class="relationShip" data-number="<?php echo $x;?>" href="">Other</a></li>'+
							                '</ul>'+
									    '</div> '+
								'</div>'+
							'</div>'+
							'<div style="clear:both;"></div>');
	});



$(document).on('click', '.selt', function(e){
	
	var idThis = $(this).attr('id');
	if($('#D'+idThis).hasClass("open")){
		setTimeout(function(){
	   		$('#D'+idThis).removeClass("open");
		},10);
	}
	else{
		setTimeout(function(){
	   		$('#D'+idThis).addClass("open");
		},10);
	}
	$('#S'+idThis).click();
});

$(document).on('click', '.relationShip', function(e){
	e.preventDefault();
	var n = $(this).data('number');
	$('#V'+n).val($(this).html());
})

$(document).on('mouseenter', '.relationShip', function(){
		$('.relationShip').css('background-color', '#E6E6E6');
		$('.relationShip').css('color', '#9b9b9b');

		$(this).css('background-color', '#FF6633');
		$(this).css('color', 'white');
})



$(document).on('click', '.flagRow', function(){
	$(document).on('blur', '.flagRow', function(){
		$('.flagRow > img').attr('src', "<?php echo $this->webroot.'img/down-menu.png';?>");
	});

	if($(this).hasClass('down')){
		$(this).find('img').attr('src', "<?php echo $this->webroot.'img/up-menu.png';?>");
		$(this).addClass('up');
		$(this).removeClass('down');
	}
	else{
		$(this).find('img').attr('src', "<?php echo $this->webroot.'img/down-menu.png';?>");
		$(this).addClass('down');
		$(this).removeClass('up');
	}
	
})

$('#sentInvitation').click(function(){
	var emp = 0;
	var tot = $('.inI').length / 3;
	var finisData = [];
	var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
	var dat = [];

	var e = ""
	for (var i = 1; i <= tot; i++) {

		e = $('#email'+i).val();
		if($('#name'+i).val() != "" && e != "" && $('#V'+i).val() != ""){

			if(!pattern.test(e)){
				alert('Not a valid e-mail address');
				return false;
			}
			else{
				emp = emp + 1;
				dat = {
					name : $('#name'+i).val(),
					email: e,
					relationship: $('#V'+i).val()
				};
				finisData.push(dat);
				
			}
		}
	}

	if(emp <= 4){
		alert('Please make at least 5 invitations');	
		return false;
	}
	console.log(dat);
	$.ajax({
		url: WEBROOT+'assessments/send_invitations',
		data: {finisData : finisData},
		type: "post",
		dataType: 'json',
		success: function(data){
			// console.log(dat);
			if(data == 1){
				$('#btn_gif').css("display","block");
					// mixpanel.identify(ID_USUARIO);
					// mixpanel.track("send invitations button in 360");
				setTimeout(function(){
					window.location = WEBROOT+"career_program/360_invites_ok";
				},2000);
			}
		},
		error: function(){
			alert('Try again later');
		}
	})

});


</script>