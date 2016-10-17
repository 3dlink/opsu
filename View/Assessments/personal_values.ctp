<?php 
	echo $this->Html->css('personal_values');

	if(!empty($incomp)){
		$incomplete = split('%', $incomp['Incomplete']['q_a']);
	}
	
?>
<script type="text/javascript">

$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'values_1'
	}
})


</script>

<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

<?php 
	echo $this->Html->script('lib/redirect');
	echo $this->Html->script('lib/touch-punch');
?>

<style type="text/css">

	#indicatorSelect{
		display:none; 
	}

	@-webkit-keyframes fadeout {
		from { 
			opacity: 1;
			top: 0px;
			right: 300px;
		}
		to {
			opacity: 0;
			top: -10px;
			right: 290px;
		}
	}
	@keyframes fadeout {
		from { 
			opacity: 1;
			top: 0px;
			right: 300px;
		}
		to {
			opacity: 0;
			top: -10px;
			right: 290px;
		}
	}
	#gif_personal {
  font-size: 35px;
  font-weight: 600;
  color: #FF6633;
  position: absolute;
  top: 0px;
  right: 300px;
  display: none;
  opacity: 0;
  -webkit-animation-name: fadeout;
  -webkit-animation-duration: 2s;
  animation: fadeout 4s 2s;
}

</style>

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
				<?php echo __('My Personal Values',true);?>
				<div></div>
			</div>
		</div>
	</div>
	<div id="content-options" style="width: 800px; float:left;  border-top: solid 2px #d0d0d0; padding-top:15px;   margin-left: 55px;">
		<?php if(count($fields) >= 41){?>
			<div style="font-size:16px;">
				Review the list of sample value words and phrases below. As you look at them, click on those that stand out as most important to you; the ones that evoke a response and “feel” like you. <br /><br />
				Do not select values just because they are socially acceptable or desirable. Let your intuition guide your choices.<br /><br />
				Begin by selecting at least 20 values that you consider to be the most important to you from the following list:

			</div>
			<div class="ClassOptionsValues" style="width: 600px;  margin: 35px 0px 40px 100px;">
				<?php 
					if(isset($incomplete[0])){
						$lastSelects = split(':::', $incomplete[0]);
						$lastSelect = array();
						foreach ($lastSelects as $key => $value) {
							$v = split(";", $value);
							if(!empty($v[1])){
								array_push($lastSelect, $v[1]);
							}
						}
					}
					foreach ($fields as $key => $value) {
					$class = "";
					if(isset($lastSelect)){
						if(in_array($value['PersonalValues']['id'], $lastSelect)){
							$class = "selecThis";
						}
					}
					$st = "";
					if($value['PersonalValues']['id'] == 6){
						$st = "style='font-size:14px;'";
					}
					echo '<div '.$st.' id="'.$value['PersonalValues']['id'].'" class="optionValue '.$class.' ">'.$value['PersonalValues']['name'].'</div>';
				}?>
				<div id="" style="display:none; font-size:16px;" class="optionValue aditional1"><input style="width: 100%; cursor:pointer; text-align:center; -webkit-appearance: none; border: none; "></div>
				<div id="" style="display:none; font-size:16px;" class="optionValue aditional2"><input style="width: 100%; cursor:pointer; text-align:center; -webkit-appearance: none; border: none; "></div>
				<div id="" style="display:none; font-size:16px;" class="optionValue aditional3"><input style="width: 100%; cursor:pointer; text-align:center; -webkit-appearance: none; border: none; "></div>


			</div>
						<div style="clear:both"></div>
					<div style="text-align:center; cursor:pointer; font-size:16px;" class="addPersonalValue" id="">
						Add more...
  						<img class="plus" src="../img/More.png">
  					</div>
			<div style="text-align: center; margin-bottom:15px;">
				<button id="" type="button" style="display:none;  margin-right: 30px;" class="nextScreen quiz-result-btn">
					NEXT
				</button>
			</div>
		<?php } ?>

		<?php if(count($fields) >= 20 && count($fields) <= 25){?>
			<div>
				<div style="font-size:30px; font-weight:bold;">
					Well done!
				</div>
				<div style="margin-top:25px; font-size:16px;">
					Now decide on 12 or more of these values that you feel are most important to you. Drag them into the corresponding column
				</div>
			</div>
			<div class="ClassOptionsValues" style="margin: 35px 0px 40px 0px;">
				<ul id="sortable" style="  float: left; padding-left: 0px;">
					<?php 
						if(isset($incomplete[1]) && !empty($incomplete[1])){
							$split1 = split("/", $incomplete[1]);
							if( !empty($split1[2])  ){
								$emptyOption = array();
								$split2 = split(":::", $split1[2]);
								foreach ($split2 as $k => $v) {
									$split3 = split(";", $v);
									if(isset($split3[1])){
										array_push($emptyOption, $split3[1]);
									}
								}
							}
								foreach ($fields as $key => $value) {
									if(isset($emptyOption)){
										if(in_array($value['PersonalValues']['id'], $emptyOption)){
											$st = "";
											if($value['PersonalValues']['id'] == 6){
												$st = "style='font-size:14px;'";
											}
											echo '<li '.$st.' id="'.$value['PersonalValues']['id'].'" class="S'.$value['PersonalValues']['id'].' first1 droppable draggable optionValue">'.$value['PersonalValues']['name'].'</li>';
										}

									else{
										echo '<li style="display:none; id="'.$value['PersonalValues']['id'].'" class="S'.$value['PersonalValues']['id'].' first1 droppable draggable optionValue">'.$value['PersonalValues']['name'].'</li>';
									}
								}
							}
						}else{
							foreach ($fields as $key => $value) {
								$st = "";
								if($value['PersonalValues']['id'] == 6){
									$st = "style='font-size:14px;'";
								}
								echo '<li '.$st.' id="'.$value['PersonalValues']['id'].'" class="S'.$value['PersonalValues']['id'].' first1 droppable draggable optionValue">'.$value['PersonalValues']['name'].'</li>';
							}
						}	
					?>
				</ul>
			</div>
							
			<div style="clear:both"></div>

			<div class="squareF" style="margin: 5px 0px -25px 0px;">
				<div class="squareS squareSL " style=" margin-right:30px; width: 370px; height: 550px; float: left;">
					<div class="squareTitle" style="border-top-right-radius:10px; border-top-left-radius:10px; background:#a48fa3; color:white; text-align:center; font-size:24px;">
						Important
					</div>
					<div class="squareI squaredMobile2 " style="border:2px solid #51284f; width: 100%; height: 510px;">
						<ul class="" style=" margin-top:20px; float: left; padding-left: 0px;">
							<?php 
								if(isset($incomplete[1]) && !empty($incomplete[1])){
									$split1_2 = split("/", $incomplete[1]);
									$VeryI = array();
									if( !empty($split1_2[1])  ){
										
										$split2_2 = split(":::", $split1_2[1]);
										foreach ($split2_2 as $k => $v) {
											$split3_2 = split(";", $v);
											if(isset($split3_2[1])){
												array_push($VeryI, $split3_2[1]);
											}
										}
									}
									if(isset($VeryI)){
										foreach ($fields as $key => $value) {
											if(in_array($value['PersonalValues']['id'], $VeryI)){
												$st = "";
												if($value['PersonalValues']['id'] == 6){
													$st = "style='font-size:14px;'";
												}
												echo '<li data-id="'.$value['PersonalValues']['id'].'" '.$st.' id="'.$value['PersonalValues']['id'].'" class="optionValueEmpty second2 draggable selecThis impor Important droppable D'.$value['PersonalValues']['id'].'">'.$value['PersonalValues']['name'] .'</li>';
											}
										}
									}
									
									for($x = count($VeryI)+1; $x <= 15; $x++ ){
										echo '<li '.$st.' id="'.$x.'" class="optionValueEmpty second2 impor draggable droppable D'.$x.'"></li>';
									}
								}else{
									for($x = 16; $x <=30; $x++) {
										$st ="";
										if($x == 30){
											$st = "style= 'margin-left: 100px;'";
										}
										echo '<li data-id="0" '.$st.' id="'.$x.'" class="optionValueEmpty second2 draggable impor droppable D'.$x.'"></li>';
									}
								}?>
						</ul> 
					</div>
					<div class="bottomMobile" style="display:none; text-align: right; margin-bottom:50px;">
						<button id="" style="background-color: #c4c4c4;" type="button" class="backScreen quiz-result-btn">
							BACK
						</button>
					</div>
				</div>

				<div class="squareS" style=" width: 370px; height: 550px; float: left;">
					<div class="squareTitle" style="">
						 Very Important<span id="indicatorSelect">(0/15)</span>
					</div>
					<div class="squareI squaredMobile1" style="border:2px solid #ff3300; width: 100%; height: 510px;">
						<ul class="" style=" margin-top:20px; float: left; padding-left: 0px;">
							<?php 
							// debug($incomplete[1]);
								if(isset($incomplete[1]) && !empty($incomplete[1])){
									$split1_2 = split("/", $incomplete[1]);
									if( !empty($split1_2[0])  ){
										$VeryI = array();
										$split2_2 = split(":::", $split1_2[0]);
										foreach ($split2_2 as $k => $v) {
											$split3_2 = split(";", $v);
											if(isset($split3_2[1])){
												array_push($VeryI, $split3_2[1]);
											}
										}
									}
									foreach ($fields as $key => $value) {
										if(in_array($value['PersonalValues']['id'], $VeryI)){
											$st = "";
											if($value['PersonalValues']['id'] == 6){
												$st = "style='font-size:14px;'";
											}
											echo '<li data-id="'.$value['PersonalValues']['id'].'" '.$st.' id="'.$value['PersonalValues']['id'].'" class="optionValueEmpty second2 veryimport draggable selecThis VeryImportant droppable D'.$value['PersonalValues']['id'].'">'.$value['PersonalValues']['name'] .'</li>';
										}
									}
								}else{
									for($x = 16; $x <=30; $x++) {
										$st ="";
										if($x == 30){
											$st = "style= 'margin-left: 100px;'";
										}
										echo '<li '.$st.' id="'.$x.'" class="optionValueEmpty second2 draggable veryimport droppable D'.$x.'"></li>';
									}
								}
							?>
						</ul> 
					</div>
				</div>
					<div class="bottomMobile" style="display:none;   text-align: left; margin-bottom:50px;">
						<button id="" type="button" class="nextScreen quiz-result-btn">
							NEXT
						</button>
					</div>
			</div>
			<div style="clear:both"></div>
			<div class="bottomWeb" style="  margin-left: -30px; text-align: center; margin-bottom:50px;">
				<button id="" style="margin-right:30px; background-color: #c4c4c4;" type="button" class="backScreen back_1 quiz-result-btn">
					BACK
				</button>
				<button id="" type="button" class="nextScreen quiz-result-btn">
					NEXT
				</button>
			</div>
		<?php } ?>


		<?php if(count($fields) >= 11 && count($fields) <= 15){?>
			<div>
				<div style="font-size:30px; font-weight:bold;">
					Great!
				</div>
				<div style="margin-top:25px; font-size:16px;">
					Now, if you could only choose 10 of these values, which would they be? Move them into the right column.
				</div>
			</div>
			<div style="margin: 35px 0px 40px 0px;">
				<ul id="sortable" style="  float: left; padding-left: 0px;">
					<?php foreach ($fields as $key => $value) {
							$st = "";
							if($value['PersonalValues']['id'] == 6){
								$st = "style='font-size:14px;'";
							}
							echo '<li '.$st.' id="'.$value['PersonalValues']['id'].'" class="S'.$value['PersonalValues']['id'].' first1 droppable draggable optionValue">'.$value['PersonalValues']['name'].'</li>';
					}?>
				</ul>
			</div>
							
			<div style="clear:both"></div>

			<div class="squareF" style="margin: 5px 0px -25px 0px;">
				<div class="squareS" style=" margin-right:30px; width: 370px; height: 550px; float: left;">
					<div class="squareTitle" style="border-top-right-radius:10px; border-top-left-radius:10px; background:#fbae95; color:white; text-align:center; font-size:24px;">
						Very Important
					</div>
					<div class="squareI squaredMobile4" style="border:2px solid #ff3300; width: 100%; height: 510px;">
						<ul class="" style=" margin-top:20px; float: left; padding-left: 0px;">
							<?php for($x = 1; $x <=15; $x++) {
								$st ="";
								if($x == 15){
									$st = "style= 'margin-left: 100px;'";
								}
								echo '<li '.$st.' id="'.$x.'" class="optionValueEmpty second2 impor draggable droppable D'.$x.'"></li>';
							}?>
						</ul> 
					</div>
					<div class="bottomMobile" style="display:none; text-align: right; margin-bottom:50px;">
						<button id="" style="background-color: #c4c4c4;" type="button" class="backScreen  quiz-result-btn">
							BACK
						</button>
					</div>
				</div>

				<div class="squareS squareS2" style=" width: 370px; height: 550px; float: left;">
					<div class="squareTitle" style="border-top-right-radius:10px; border-top-left-radius:10px; background:#fb957b; color:white; text-align:center; font-size:24px;">
						Top 10<span id="indicatorSelect">(0/10)</span>
					</div>
					<div class="squareI squaredMobile3" style="border:2px solid #ff3300; width: 100%; height: 510px;">
						<ul class="top10MobileUl" style=" margin-top:10px; float: left; padding-left: 0px;">
							<?php for($x = 16; $x <=25; $x++) {
								echo '<li style= "margin-bottom: 10px; margin-left: 100px;" id="'.$x.'" class="top10Mobile optionValueEmpty second2 draggable veryimport droppable D'.$x.'"></li>';
							}?>
						</ul> 
					</div>
					<div class="bottomMobile" style="display:none;   text-align: left; margin-bottom:50px;">
						<button id="" type="button" class="nextScreen quiz-result-btn">
							NEXT
						</button>
					</div>
				</div>
			</div>

			<div style="clear:both"></div>

			<div class="bottomWeb" style="  margin-left: -30px; text-align: center; margin-bottom:40px;">
				
				<button id="" style="  margin-right: 30px; background-color: #c4c4c4;" type="button" class="backScreen back_2 quiz-result-btn">
							BACK
						</button>

						<button id="" type="button" class="nextScreen quiz-result-btn">
					NEXT
				</button>
			</div>
		<?php } ?>

		<?php if(count($fields) <= 10){?>
			<div>
				<div style="font-size:30px; font-weight:bold; color:black;">
					Very good.
				</div>
				<div style="margin-top:25px; font-size:16px; color:black;">
					Now choose which three of these values are the most important to you.
				</div>
			</div>
							
			<div style="clear:both"></div>

			<div style="margin: 35px 0px 40px 0px;">
				<div class="menuTop" style=" margin-right:30px;  width: 370px; height: 550px; float: left;">
					<div style="border-top-right-radius:10px; border-top-left-radius:10px; background:#fb957b; color:white; text-align:center; font-size:24px;">
						Top 10
					</div>
					<div style="border:2px solid #ff3300; width: 100%; height: 510px;">
						<ul class="" style=" margin-top:10px; float: left; padding-left: 0px;">
							<?php for($x = 0; $x <=9; $x++) {
								$st = "";
								if($fields[$x]['PersonalValues']['id'] == 6){
									$st = "font-size:14px;";
								}
								echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[$x]['PersonalValues']['id'].'" class="liTop allO top10 optionValue first1 draggable veryimport droppable S'.$fields[$x]['PersonalValues']['id'].'">'.$fields[$x]['PersonalValues']['name'].'</li>';
							}?>
						</ul> 
					</div>
				</div>
				<div id="menuPodium" style="width: 370px; height: 550px; float: left;">
					<div style="  border-top-right-radius:10px; border-top-left-radius:10px; background:#eddadd; color:#51284f; text-align:center; font-size:24px;">
						Podium
					</div>
		            <ul class="" style="  z-index: 100; position: relative; float: left; padding-left: 0px;">
		              <li data-pos="1" style= "margin-left: 103px; margin-top: 50px;  margin-bottom: 10px; " id="1" class="firstPodiumLi allO optionValueEmpty second2 draggable import droppable D1"></li>
		              <li data-pos="2" style= "margin-bottom: 10px; margin-top: 90px; margin-left: 10px; " id="2" class="allO optionValueEmpty second2 draggable import droppable D2"></li>
		              <li data-pos="3" style= "margin-left: 187px; margin-top: 90px; margin-bottom: 10px; " id="3" class="thirdPodiumLi allO optionValueEmpty second2 draggable import droppable D3"></li>
		            </ul> 
					<div style="  padding: 10px; position:relative;  border:2px solid #e4bec3; width: 100%; height: 510px;">
		            	<div class="podium1 firstPodium" style=" width: 170px; left: 100px; text-align: center; height: 400px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:5;">
		            		1
		            	</div>
		         		<div style="clear:both"></div>
						<div class="podium1 secondPodium" style=" width: 170px;  text-align: center; height: 260px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:10;">
		              		2
		            	</div>
						<div style="clear:both"></div>
		            	<div class="podium1 thirdPodium" style="width: 170px; left: 185px; text-align: center; height: 120px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:10;">
		              		3
		            	</div>
						<div style="clear:both"></div>
					</div>
				</div>
			</div>

			<div style="clear:both"></div>

			<div class="spaceBottom" style="text-align: center;   margin-bottom: 40px; position:relative;">
				<div id="gif_personal">+40</div>
				<button id="" type="button" class="nextScreen quiz-result-btn">
					SAVE
				</button>
			</div>
		<?php } ?>
	</div>

	<section class="seccion_derecha">
		<article class="article_tips">
				<big>
					<label style="margin-bottom: 0px;" class="titulo titulo_izquierda">Make it work</label>
				</big>
				<div class="caja_module" style="margin-top: 0px;">
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
									Go with your gut feeling and listen to your body rather than your mind. Choose the words that make your body feel light and that resonate on a deeper level
							</td>
						</tr>

						<tr>
							<td style="padding:0;">
									<?php echo $this->Html->image('likeH.png');?>
							</td>
							<td>
									Having identified your core values, be sure to keep them at the top of your mind
							</td>
						</tr>
					</table>
				</div>
		</article>	
		<?php if(count($fields) >= 41){
			echo $this->element('article_list');
		} ?>
	</section>

			<div style="clear:both"></div>


</div>

<!-- Button trigger modal -->
<button style="display:none;" type="button" id="openModal" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" style="  background-color: rgba(0,0,0,0.8);" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:330px;">
    <div class="modal-content" style="  border: 1px solid rgba(0, 0, 0, 1); border-radius:15px;">
      <div class="modal-header" style="  border-bottom: 0px;">
        <button type="button" class="close" style="  border: 2px solid black; opacity: 1; border-radius: 30px; width: 25px;" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h4 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Oops!</h4>
        <div id="modalMsg" style="font-size:18px;  margin-bottom: 10px;"> </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	var varScroll = 0;
	var varScroll2 = 0;

$(document).ready(function(){

		if( $('.selecThis').length >= 20){
			$('.nextScreen').css('display', 'initial');
		}
		

		if ($('.optionValue').length >= 45){
			$('title').html('First Step My Personal Values Quest');
		}

		if($('.optionValue').length >= 20 && $('.optionValue').length <= 25){
			$('title').html('Second Step My Personal Values Quest');
		}

		if($('.optionValue').length >= 11 && $('.optionValue').length <= 15){
			$('title').html('Third Step My Personal Values Quest');
		}

		if($('.optionValue').length <= 10){
			$('title').html('Fourth Step My Personal Values Quest');
		} 

		$('.optionValue').click(function(){
			var coun = 0;
			if ($('.optionValue').length >= 45){

				$('.optionValue').each(function(k,v){
					if( $(this).hasClass('selecThis') ){
						coun = coun + 1;
						if(coun >= 20){
							$('.nextScreen').css('display', 'initial');
						}
					}
				})		
			}

			if($('.aditional1').hasClass('selecThis')){
				$('.aditional1 input').css('backgroundColor','#ff6633');
			}
			else{
				$('.aditional1 input').css('backgroundColor','white');
			}

			if($('.aditional2').hasClass('selecThis')){
				$('.aditional2 input').css('backgroundColor','#ff6633');
			}
			else{
				$('.aditional2 input').css('backgroundColor','white');
			}

			if($('.aditional3').hasClass('selecThis')){
				$('.aditional3 input').css('backgroundColor','#ff6633');
			}
			else{
				$('.aditional3 input').css('backgroundColor','white');
			}
		})

		$('.addPersonalValue').click(function(){
			if ( $('.aditional1').css('display') == 'none'){
				$('.aditional1').css('display', 'block');
				return;
			}
			if( $('.aditional2').css('display') == 'none' &&  $('.aditional1').css('display') == 'block'){
				$('.aditional2').css('display', 'block');
				return;
			}
			if( $('.aditional3').css('display') == 'none' &&  $('.aditional1').css('display') == 'block' && $('.aditional2').css('display') == 'block'){
				$('.aditional3').css('display', 'block');
				$('.addPersonalValue').css('display', 'none');
			}
		});

		$('.optionValue').each(function(k,v){
			if( !$(v).hasClass('aditional1') && !$(v).hasClass('aditional2') && !$(v).hasClass('aditional3')){
				if($(v).html().length >= 17){
					$(v).css('fontSize', '14px');
					if($(document).width() <= 750){
						$(v).css('fontSize', '12px');
					}
				}
			}
		})

		$(".draggable").draggable({
			start : function(event, ui){ 
		    },
		    revert: 'invalid',
		    helper: function () { 
				var cloned = $(this).clone();
		        cloned.attr('id', ($(this).attr('id')).toString());		    
		        return cloned;
		    },
		});

		$(".droppable").droppable({
		    hoverClass: 'ui-state-active',
		    tolerance: 'pointer',

		    accept: function (event, ui) {
            if($(this).html() == ""){
              return true;
            }
            else{
               return false;
          }
		    	
		    },
		    drop: function (event, ui) {


		        var obj;
		        if ($(ui.helper).hasClass('draggable')) {
		          	obj = $(ui.helper).clone();  
		        	val = $(ui.helper).html();
		        	if($(ui.helper).html() == ""){
  						return false;
		        	}
		        	if($(ui.helper).html() == "Concern for Environment"){
		        		$(this).css('fontSize', '14px');
		        	}
		        	else{
		        		$(this).css('fontSize', '16px');
		        	}
			        if ($('.optionValue').length >= 20 && $('.optionValue').length <= 26){
			        	if($(ui.helper).html() != "" && $(ui.helper).hasClass('S'+$(ui.helper).attr('id'))){
		               		$('.S'+$(ui.helper).attr('id')).removeClass('VeryImportant');
			          		$('.S'+$(ui.helper).attr('id')).removeClass('Important');
		               	}
		              	if($(ui.helper).html() != "" && $(ui.helper).hasClass('D'+$(ui.helper).attr('id'))){
		               		$('.D'+$(ui.helper).attr('id')).removeClass('Important');
			          		$('.D'+$(ui.helper).attr('id')).removeClass('VeryImportant');	
		               	}


				          if($(this).html() == ""){
				          	if($(this).hasClass('veryimport')){
				          		$(this).removeClass('Important');
					     	  	$(this).addClass('VeryImportant');
					     	  	$(this).data('id', $(ui.helper).attr('id'));
					     	  		versionMobile('VI');
						        }
						        if($(this).hasClass('impor')){
						          	$(this).removeClass('VeryImportant');
						          	$(this).addClass('Important');
									$(this).data('id', $(ui.helper).attr('id'));
										versionMobile('I');
						        }
				          }

			        }
			        if ($('.optionValue').length >= 12 && $('.optionValue').length <= 16){

			        	if($(ui.helper).html() != "" && $(ui.helper).hasClass('S'+$(ui.helper).attr('id'))){
		               		$('.S'+$(ui.helper).attr('id')).removeClass('top10');
			          		$('.S'+$(ui.helper).attr('id')).removeClass('VeryImportant');
		               	}
		              	if($(ui.helper).html() != "" && $(ui.helper).hasClass('D'+$(ui.helper).attr('id'))){
		               		$('.D'+$(ui.helper).attr('id')).removeClass('top10');
			          		$('.D'+$(ui.helper).attr('id')).removeClass('VeryImportant');	
		               	}

				          if($(this).html() == ""){
				          	if($(this).hasClass('veryimport')){
				          		$(this).removeClass('VeryImportant');
					     	  	  $(this).addClass('top10');
					     	  	  $(this).data('id', $(ui.helper).attr('id'));
					     	  	  	versionMobile('Top');
					     	  	  

					          }
					          if($(this).hasClass('impor')){
					            $(this).removeClass('top10');
					     	  	  $(this).addClass('VeryImportant');
					     	  	  	versionMobile('I2');
					     	  	  

					          }
				          }
			        }

	                if ($('.optionValue').length <= 11){

		              	if($(ui.helper).html() != "" && $(ui.helper).hasClass('S'+$(ui.helper).attr('id'))){
		               		$('.S'+$(ui.helper).attr('id')).removeClass('podium');
			          		$('.S'+$(ui.helper).attr('id')).removeClass('top10');
		               	}
		              	if($(ui.helper).html() != "" && $(ui.helper).hasClass('D'+$(ui.helper).attr('id'))){
		               		$('.D'+$(ui.helper).attr('id')).removeClass('top10');
			          		$('.D'+$(ui.helper).attr('id')).removeClass('podium');	
		               	}

				        if($(this).html() == ""){
				          	if($(this).hasClass('import')){
				          		$(this).removeClass('top10');
					     	  	$(this).addClass('podium');
					     	  	$(this).data('id', $(ui.helper).attr('id'));
					        }
					        if($(this).hasClass('veryimport')){
					            $(this).removeClass('podium');
					     	  	$(this).addClass('top10');
					        }
				        }
	                }
			        $(this).html(val);
			        if($(ui.helper).hasClass('first1')){
			          	$('.S'+$(ui.helper).attr('id')).html('');
			        }
			        else{
			          	$('.D'+$(ui.helper).attr('id')).html('');
			        }
		        }
		    }
		}).sortable({
		    revert: false
		});

		viewportHeight = $(window).height(),
		$myDialog = $('#myModal');
		$myDialog.css('paddingTop',  (viewportHeight/2) - 150);
	});

	$('.nextScreen').click(function(){
		var coun = 0;
		var optionSelect = [];
		var po = [];
		var dele = [];
		if($('.optionValue').length >= 41){
			$('.optionValue').each(function(k,v){
				if( $(this).hasClass('selecThis') ){
					coun = coun + 1;
					if( !$(v).hasClass('aditional1') && !$(v).hasClass('aditional2') && !$(v).hasClass('aditional3')){
						optionSelect.push( $(this).attr('id') );
					}
				}
			})		
			if(coun < 20 ){
				$('#modalMsg').html('Choose at least 20 values to proceed');
				$('#openModal').click();
				return false;
			}
			if(coun > 25){
				$('#modalMsg').html('Choose maximum 25 values to proceed');
				$('#openModal').click();
				return false;
			}

			$('.nextScreen').attr('disabled', 'disabled');
			$('.nextScreen').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("next button values page 1");
			var track = "next button values page 1";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);

			var aditio = [];

			if( $('.aditional1').css('display') == 'block' ){
				aditio[0] = $('.aditional1').find('input').val();
			}

			if( $('.aditional2').css('display') == 'block' ){
				aditio[1] = $('.aditional2 input').val();
			}

			if( $('.aditional3').css('display') == 'block' ){
				aditio[2] = $('.aditional3 input').val();
			}

			if(aditio.length > 0){
				$.ajax({
					url: WEBROOT+'Assessments/addvalue',
					data: {data: aditio},
					dataType: 'json',
					type:'post',
					success: function(data){
						for (var i = 0; i <= data.length -1; i++) {
							optionSelect.push(data[i]);
						};
						sendData(1, optionSelect);
					},
					error: function(){}

				})
			}
			else{
				sendData(1, optionSelect);
			}
		}

		if($('.optionValue').length >= 20 && $('.optionValue').length <= 25){
			$('.optionValueEmpty').each(function(k,v){
				if( $(this).hasClass('VeryImportant') ){
					coun = coun + 1;
					optionSelect.push( $(this).data('id') );
				}
			})		

			if(coun > 15 ){
				$('#modalMsg').html('Please choose a minimum 12 values as Very Important');
				$('#openModal').click();
				return false;
			}
			if(coun < 12){
				$('#modalMsg').html('Please choose a minimum 12 values as Very Important');
				$('#openModal').click();
				return false;
			}


			$('.nextScreen').attr('disabled', 'disabled');
			$('.nextScreen').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("next button values page 2");
			var track = "next button values page 2";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);
			sendData(2,optionSelect);
		}

		if($('.optionValue').length >= 12 && $('.optionValue').length <= 15){
			$('.optionValueEmpty').each(function(k,v){
				if( $(this).hasClass('top10') ){
					coun = coun + 1;
					optionSelect.push( $(this).data('id') );
				}
			})		
			if(coun > 10 ){
				$('#modalMsg').html('Please choose a minimum 10 values');
				$('#openModal').click();
				return false;
			}
			if(coun < 10 ){
				$('#modalMsg').html('Please choose a minimum 10 values');
				$('#openModal').click();
				return false;
			}

			// mixpanel.identify(ID_USUARIO);
			// mixpanel.track("next button values page 3");
			$('.nextScreen').attr('disabled', 'disabled');
			$('.nextScreen').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

			var track = "next button values page 3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);
			sendData(3, optionSelect);
		}		

	    if($('.optionValue').length <= 11){
	    	console.log($('.optionValue').length);
	      $('.allO').each(function(k,v){
	      	if($(this).html() != ""){
		        if( $(this).hasClass('podium') ){
		        		coun = coun + 1;
		          		var position = $(this).data('id') + ":::" + $(this).data('pos');
		          		po.push( position );
		          		dele.push($(this).data('id'));
		        }
	    	}
	      })  

	      $('.veryimport').each(function(k,v){
				var position = $(this).attr('id');
		        optionSelect.push( position );
	    	
	      })
	      if(coun < 3 ){
	        $('#modalMsg').html('Please select your top three values');
	        $('#openModal').click();
	        return false;
	      }  

			optionSelect = jQuery.grep(optionSelect, function(value) {
				if(value != dele[0] && value != dele[1] && value != dele[2]){
					return value;
				}
			});
	  		
			optionSelect.push(po[0]);
			optionSelect.push(po[1]);
			optionSelect.push(po[2]);

			$('.nextScreen').attr('disabled', 'disabled');
			$('.nextScreen').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');

			var track = "save button values page 3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);
	      saveData(optionSelect);
	    }

	})

	$('.optionValue').click(function(){
		if( $('.optionValue').length >= 41 ){
			if( $(this).hasClass('selecThis') ){
				$(this).removeClass('selecThis');
			}
			else{
				$(this).addClass('selecThis');
			}
		}
	})

	$('.backScreen').click(function(){
		var pant = "";

		if($('.optionValue').length >= 20 && $('.optionValue').length <= 25){
			var track = "back button values page 2";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);
			pant = 2;
		}

		if($('.optionValue').length >= 11 && $('.optionValue').length <= 15){
			var track = "back button values page 3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})
			sleep(1000);
			pant = 3;
		}

		$.ajax({
			url: WEBROOT+'Assessments/personalValues',
			type: 'post',
			data: {back:pant},
			dataType: 'json',
			success: function(data1){
				window.location.replace(WEBROOT + 'career_program/values?' + data1);
			},
			error: function(a,e,i){

			}
		})		 
	})

  	function saveData(data){
		$('#gif_personal').css("display","block");
		setTimeout(function() 
	  {
	    $.redirect(WEBROOT+'career_program/results_values', {'data1': data}, 'get');
	  }, 1000);	
  	}

	function sendData(n, data){
		if(n == 1){
			dataSend = data;
		}
		if(n == 2){
			var dataSend = [];
			var counVI = [];
			var counI = [];
			var coun = [];
			$('.VeryImportant').each(function(k,v){
				counVI.push( $(this).data('id') );
			});
			$('.Important').each(function(k,v){
				counI.push( $(this).data('id') );
			});
			$('.optionValue').each(function(k,v){
				if( $(this).css('display') != 'none' && $(this).html() != "" ){
					coun.push( $(this).attr('id') );
				}
			});
			dataSend.push( counVI );
			dataSend.push( counI );
			dataSend.push( coun );
		}

		if(n == 3){
			var dataSend = [];
			var counVI = [];
			var counTop = [];
			var coun = [];
			$('.VeryImportant').each(function(k,v){
				counVI.push( $(this).data('id') );
			});
			$('.top10').each(function(k,v){
				counTop.push( $(this).data('id') );
			});
			$('.optionValue').each(function(k,v){
				if( $(this).css('display') != 'none' && $(this).html() != "" ){
					coun.push( $(this).attr('id') );
				}
			});
			dataSend.push( counTop );
			dataSend.push( counVI );
			dataSend.push( coun );

		}

		$.ajax({
			url: WEBROOT+'Assessments/valuesincomplete/'+n,
			data: {data:dataSend},
			type: 'post',
			success: function(){
				$.redirect(WEBROOT+'career_program/values', {'data1': data}, 'get');
			},
			error: function(a,e,i){
				console.log(a);
			}
		})
	}

	function versionMobile(typeS){
		var leVI = $('.VeryImportant').length ;
		var leI = $('.Important').length ;
		var leTop = $('.top10').length ;
		var leI2 = $('.VeryImportant').length;

		if(typeS == "VI"){
			$('#indicatorSelect').html('('+leVI+'/15)');
			if(leVI % 3 == 0 && leVI > 1){
				varScroll = varScroll + 180;
				$('.squaredMobile1').animate({
			        scrollTop: varScroll
			    }, 1000);
			   cleanOptions();
			}
		}
		if(typeS == "I"){
			if(leI % 3 == 0 && leI > 1){
				varScroll2 = varScroll2 + 180;
				$('.squaredMobile2').animate({
			        scrollTop: varScroll2
			    }, 1000);
			    cleanOptions();
			}
		}

		if(typeS == "Top"){
			$('#indicatorSelect').html('('+leTop+'/10)');

			if(leTop % 3 == 0 && leTop > 1){
				varScroll = varScroll + 180;
				$('.squaredMobile3').animate({
			        scrollTop: varScroll
			    }, 1000);
			   cleanOptions();
			}
		}
		if(typeS == "I2"){
			if(leI2 % 3 == 0 && leI2 > 1){
				varScroll2 = varScroll2 + 180;
				$('.squaredMobile4').animate({
			        scrollTop: varScroll2
			    }, 1000);
			    cleanOptions();
			}
		}

	}

	function cleanOptions(){
		$('.first1').each(function(k,v){
    	if($(this).html() == ''){
    		$(this).css('display', 'none');
    	}
    })
	}

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
</script>