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

<style>

#comentario {
  margin: -40px 0px 60px 77px;
}
.send_btn{
	position:absolute;right: 25px;bottom:20px;
}

	.optionValue{
		background-color: white;
		width: 170px;
		height: 40px;
		border: 2px solid #fbae95;
  		border-radius: 5px;
  		text-align: center;
  		padding-top: 4px;
  		font-size: 16px;
  		float: left;
  		margin-right: 30px;
  		margin-bottom: 20px;
	}

	.selecThis{
		color: white;
		background-color: #ff6633;
	}

	.quiz-result-btn{
		height: 56px;
		width: 170px;
		font-weight: bold;
		font-size: 16px;
	}

	li{
		 list-style-type: none;
	}

	.top10{
		color: white !important;
		background-color: #ff3300 !important;
		text-align: center !important;
	}

	.podium{
		color: white !important;
		background-color: #ff3300 !important;
		text-align: center !important;
	}

	.VeryImportant{
		color: white !important;
		background-color: #ff6633 !important;
		text-align: center !important;
	}

	.Important{
		color: white !important;
		background-color: #51284f !important;
		text-align: center !important;
	}

	.optionValueEmpty{
		/*background-color: #f2f2f2;*/
		background-color: gray;
		width: 170px;
		height: 40px;
  		border-radius: 5px;
  		padding-top: 4px;
  		font-size: 16px;
  		float: left;
  		margin-right: 6px;
  		margin-left: 6px;
  		margin-bottom: 20px;
  		cursor: pointer;
	}

	@media ( max-width : 750px) {

		.divFather{
			width: 94% !important;
			margin-left: 25px !important;
		}

	#indicatorSelect{
		display: block !important;
		font-size:12px !important;
		float: right;
		padding-top: 5px;
		padding-right: 3px;
	}

	#content-options{
		width: 100% !important;
		margin-left: 0px !important;
		padding-left: 20px !important;
		  text-align: justify;
		  padding-right: 20px;
	}

	.optionValue, .optionValueEmpty{
		width: 150px !important;
	}

	.seccion_derecha {
		float: left !important;
	}

	.ClassOptionsValues{
		width: 100% !important;
		margin: 0px !important;
		padding: 35px 0px 40px 0px;	
	}

	.modal-dialog{
		margin-top: 20px;
		margin-left: auto;
  		margin-right: auto;
	}

	.squareF{
		float: left;
		width: 100% !important;
		margin-right: auto !important;
  		margin-left: auto !important;
	}

	.bottomWeb{
		display: none !important; 
	}

	.bottomMobile{
		display: block !important;
	}

	.top10Mobile{
		margin-left: 6px !important;
		margin-right: 6px !important;
		padding-top: 5px !important;
		margin-bottom: 20px !important;
	}

	.top10MobileUl{
		margin-top: 20px !important;
	}

	.squareI > ul > li {
		margin-left: 6px !important;
	}

	.squareS2{ 
		float: right !important;
	}

	.squareS{
		width: 46% !important;
		margin-right: 0px !important;
		height: initial !important;
	}

	.squareSL{
		margin-right: 10px !important;
	}

	.squareI{
		height: 195px !important;
  		white-space: nowrap;
  		overflow-x: hidden;
  		overflow-y: hidden;
	}

	.squareTitle{
		font-size: 17px !important;
	}

	#menuPodium{
		width: 47% !important;
	}


	.podium1{
		width: 150px !important;
		left: 10px !important;
	}

	.menuTop{
		margin-right: 15px !important;
		width: 47% !important;
	}
	.liTop{
		margin-left: 10px !important;
	}

	.spaceBottom{
		padding-bottom: 0px !important;
	}
	.firstPodium{
  		  margin-left: 15% !important;
	}

	.thirdPodium{
		margin-left: 30% !important;
	}

	.firstPodiumLi{
  		  margin-left: 20% !important;
	}

	.thirdPodiumLi{
		margin-left: 35% !important;
	}
}

@media (max-width: 550px){

	.firstPodium{
  		  margin-left: 0px !important;
	}

	.thirdPodium{
		margin-left: 0px !important;
	}

	.firstPodiumLi{
  		  margin-left: 10px !important;
	}

	.thirdPodiumLi{
		margin-left: 10px !important;
	}	
}
</style>
<?php 

//debug($fields);

?>
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

	<div class="divFather" style="width: 800px; float:left;  border-top: solid 2px #d0d0d0; padding-top:25px;   margin-left: 55px;">

			<div>
				<div style="font-size:16px; color:black;">
					The three values you placed on the podium are your core personal values. Whenever you are faced with an important life or career-related decision, you should make your choice according to what best aligns with these top three, followed by your top 10. Remember, decisions that take your core personal values into account are the decisions that lead to a successful and inspired life.
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
							<?php for($x = 0; $x <=6; $x++) {
								$st = "";
								if($fields[$x]['PersonalValues']['id'] == 6){
									$st = "font-size:14px;";
								}
								echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[$x]['PersonalValues']['id'].'" class="allO top10 optionValue liTop first1 draggable veryimport droppable S'.$fields[$x]['PersonalValues']['id'].'">'.$fields[$x]['PersonalValues']['name'].'</li>';
							}?>
						</ul> 
					</div>
				</div>


				<div id="menuPodium" style="width: 370px; height: 550px; float: left;">
					<div class="" style="  border-top-right-radius:10px; border-top-left-radius:10px; background:#eddadd; color:#51284f; text-align:center; font-size:24px;">
						Podium
					</div>
            <ul class="" style="  z-index: 100; position: relative; float: left; padding-left: 0px;">
              <li style= "margin-left: 103px; margin-top: 50px;  margin-bottom: 10px; " id="1" class="top10 firstPodiumLi optionValueEmpty second2 draggable veryimport droppable D1">
              	<?php echo $fields[7]['first'][0]['PersonalValues']['name'];?>
              </li>
              <li style= "margin-bottom: 10px; margin-top: 90px; margin-left: 10px; " id="2" class="top10 optionValueEmpty second2 draggable veryimport droppable D2">
              	<?php echo $fields[7]['second'][0]['PersonalValues']['name'];?>
              </li>
              <li style= "margin-left: 187px; margin-top: 90px; margin-bottom: 10px; " id="3" class="top10 thirdPodiumLi optionValueEmpty second2 draggable veryimport droppable D3">
                <?php echo $fields[7]['third'][0]['PersonalValues']['name'];?>
			  </li>
            </ul> 
					<div class="" style="  padding: 10px; position:relative;  border:2px solid #e4bec3; width: 100%; height: 510px;">
           
            <div class="podium1 firstPodium" style=" width: 170px; left: 100px; text-align: center; height: 400px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:5;">
              1
            </div>
         
						<div class="podium1 secondPodium" style=" width: 170px;  text-align: center; height: 260px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:10;">
              2
            </div>
 
            <div class="podium1 thirdPodium" style="width: 170px; left: 185px; text-align: center; height: 120px;background: #F7EBED;float: left;position: absolute;opacity: 0.7;font-size: 48px;font-weight: bolder;text-shadow: 0 0 2px #efe1e5;color: white;bottom: 10px; z-index:10;">
              3
            </div>
					</div>
				</div>

				
			</div>


			<div style="clear:both"></div>

			<div style="text-align: center;   padding-bottom: 60px;">
				<button id="editScreen" type="button" class="quiz-result-btn">
					EDIT
				</button>
			</div>


			<div style="clear:both"></div>

			<div class="botones">
				<label class="opinion">
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

		<section class="seccion_derecha">
			<?php echo $this->element('article_list');?>
		</section>

</div>
			<div style="clear:both"></div>


<script type="text/javascript">
	$('.mentr-ok-btn').click(function(){
		if($(this).attr('id') == 'btn1'){
			$('#comentario').css('display', 'block');
		}
		else{
			$('#comentario').css('display', 'none');
		}
	});

var like = 0;

	$('#btn1').on('click',function(){
		$('#btn2').css("background-image", "url("+WEBROOT+"img/2.png)");
		$('#btn3').css("background-image", "url("+WEBROOT+"img/1.png)");
		$('#btn1').css("background-image", "url("+WEBROOT+"img/N3.png)");
		$('#mensaje_comentario').html("That's great. Please tell us what you enjoyed most");
		//$('#mensaje_comentario').html("We're sorry to hear that. Please give us some more details");
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
		comment={'valor':like,'comentario':$('#text_comentario').val(),'quest':'personal_values','modulo':1,'created':d}; 

		$.post(WEBROOT+'dashboards/addComment',{comment:comment},function(data){
			if(data){
				$('#comentario').css('display','none');
				$('.botones').css('display','none');
				$('#message-succes').css('display','block');
			}
		},'json');
	});

	$('#editScreen').click(function(){
		window.location.replace(WEBROOT+'career_program/edit_values');
	})
</script>