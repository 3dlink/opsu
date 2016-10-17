<style>
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
  		cursor: pointer;
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
		border: 2px solid #fbae95;
		background-color: #f2f2f2;
		/*background-color: gray;*/
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


<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

<?php 
	echo $this->Html->script('lib/redirect');
	echo $this->Html->script('lib/touch-punch.js');

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


	<div class="divFather" style="width: 800px; float:left;   border-top: solid 2px #d0d0d0; padding-top:25px;   margin-left: 55px;">
		
			<div>
				<div style="font-size:30px; font-weight:bold;">
					Very good
				</div>
				<div style="margin-top:25px; font-size:16px;">
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

								if($x >= 7){
									if($x == 7){
										echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[7]['first'][0]['PersonalValues']['id'].'" class="allO optionValueEmpty liTop first1 draggable veryimport droppable S'.$fields[7]['first'][0]['PersonalValues']['id'].'"></li>';
									}
									if($x == 8){
										echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[7]['second'][0]['PersonalValues']['id'].'" class="allO optionValueEmpty liTop first1 draggable veryimport droppable S'.$fields[7]['second'][0]['PersonalValues']['id'].'"></li>';
									}
									if($x == 9){
										echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[7]['third'][0]['PersonalValues']['id'].'" class="allO optionValueEmpty liTop first1 draggable veryimport droppable S'.$fields[7]['third'][0]['PersonalValues']['id'].'"></li>';
									}
									
								}else{
									$st = "";
									if($fields[$x]['PersonalValues']['id'] == 6){
										$st = "font-size:14px;";
									}
									echo '<li style= "'.$st.' z-index:200; margin-bottom: 10px; margin-left: 100px;" id="'.$fields[$x]['PersonalValues']['id'].'" class="liTop allO top10 optionValue first1 draggable veryimport droppable S'.$fields[$x]['PersonalValues']['id'].'">'.$fields[$x]['PersonalValues']['name'].'</li>';
								}
							}?>
						</ul> 
					</div>
				</div>

				<div id="menuPodium" style="width: 370px; height: 550px; float: left;">
					<div style="  border-top-right-radius:10px; border-top-left-radius:10px; background:#eddadd; color:#51284f; text-align:center; font-size:24px;">
						Podium
					</div>
            <ul class="" style="  z-index: 100; position: relative; float: left; padding-left: 0px;">
              <li data-pos="1" style= "margin-left: 103px; margin-top: 50px;  margin-bottom: 10px; " data-id="<?php echo $fields[7]['first'][0]['PersonalValues']['id'];?>" id="1" class="podium allO optionValueEmpty firstPodiumLi second2 draggable import droppable D1">
              	<?php echo $fields[7]['first'][0]['PersonalValues']['name'];?>
              </li>
              <li data-pos="2" style= "margin-bottom: 10px; margin-top: 90px; margin-left: 10px; " data-id="<?php echo $fields[7]['second'][0]['PersonalValues']['id'];?>" id="2" class="podium allO optionValueEmpty second2 draggable import droppable D2">
              	<?php echo $fields[7]['second'][0]['PersonalValues']['name'];?>

              </li>
              <li data-pos="3" style= "margin-left: 187px; margin-top: 90px; margin-bottom: 10px; " data-id="<?php echo $fields[7]['third'][0]['PersonalValues']['id'];?>" id="3" class="podium allO optionValueEmpty thirdPodiumLi second2 draggable import droppable D3">
              	<?php echo $fields[7]['third'][0]['PersonalValues']['name'];?>

              </li>
            </ul> 
			
			<div style="  padding: 10px; position:relative;  border:2px solid #e4bec3; width: 100%; height: 510px;">
           
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

			<div style="text-align: center;  padding-bottom: 80px;">
				<button id="nextScreen" type="button" class="quiz-result-btn">
					SAVE
				</button>
			</div>

	</div>


	<section class="seccion_derecha">
				<article class="article_tips">
						<big>
							<label style="margin-bottom: 0px;" class="titulo titulo_izquierda">Make it work</label>
						</big>
						<div class="caja_module"  style="margin-top: 0px;">
							<table>
								<tr>
									<td style="padding:0;">
											<?php echo $this->Html->image('likeH.png');?>
									</td>
									<td>
											Block out at least 15m of uninterrupted time
									</td>
								</tr>

								<tr>
									<td style="padding:0;">
											<?php echo $this->Html->image('likeH.png');?>
									</td>
									<td>
											Go with your gut feeling and listen to your body rather than your mind. Choose the words that make your body feel light and that resonate on a deeper level.
									</td>
								</tr>

								<tr>
									<td style="padding:0;">
											<?php echo $this->Html->image('likeH.png');?>
									</td>
									<td>
											After you finalize identifying your core values, it’s important to keep them top of mind.
									</td>
								</tr>
							</table>
						</div>
				</article>	
	</section>
</div>
			<div style="clear:both"></div>

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
      	<h4 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Ups!</h4>
        <div id="modalMsg" style="margin-bottom: 10px;"> </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
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
		        //alert($(this).parent().html());
		        //alert($(ui.helper).attr('class'));
		        var obj;
		        if ($(ui.helper).hasClass('draggable')) {
		          	obj = $(ui.helper).clone();  
		        	val = $(ui.helper).html();
			        if($(ui.helper).html() == ""){
  						return false;
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

	$('#nextScreen').click(function(){
		var coun = 0;
		var optionSelect = [];
		var po = [];
		var dele = [];
		if($('.optionValue').length == 41){
			$('.optionValue').each(function(k,v){
				if( $(this).hasClass('selecThis') ){
					coun = coun + 1;
					optionSelect.push( $(this).attr('id') );
				}
			})		
			if(coun < 20 ){
				$('#modalMsg').html('Choose at least 20 values');
				$('#openModal').click();
				return false;
			}
			if(coun > 25){
				$('#modalMsg').html('Choose maximum 25 values');
				$('#openModal').click();
				return false;
			}
			sendData(optionSelect);

		}


	    if($('.optionValue').length <= 11){
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
	    saveData(optionSelect);
	    }

	})

	$('.optionValue').click(function(){
		if( $('.optionValue').length == 41 ){
			if( $(this).hasClass('selecThis') ){
				$(this).removeClass('selecThis');
			}
			else{
				$(this).addClass('selecThis');
			}
		}
	})

  	function saveData(data){
    	$.redirect(WEBROOT+'career_program/results_values', {'data1': data}, 'get'); //Assessments/resultValues
  	}

</script>