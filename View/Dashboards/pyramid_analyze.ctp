
<script src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="https://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>

<?php 
	echo $this->Html->script('lib/redirect');
	echo $this->Html->script('lib/touch-punch');
?>
<script>
$(document).ready(function(){
	ARTICLES = {
		CATEGORY: 'null',
		ID: 'null',
		LIMIT: 2,
		TAG: 'P3_results'
	}
})
</script>
<style type="text/css">
.text_under_pyramid{
	margin-top:-23px;
}
.fuentes{
	width:200px; float:left;
}

.piramide{
	width:570px; float:right;
}

.container-img{
	width: 100%;
  padding-top: 30px;
  padding-bottom: 45px;
}
.img{
	width: 100%;
  max-width: 617px;
  margin: 0 auto;
}
.add{
	font-size: 16px;
}
.plus{
	margin-left: 10px;
}
#container-text {
  padding-top: 20px;
}
	.take_up_btn {
	  text-align: center;
	  margin-bottom: 60px;
	  margin-top: 35px;
	}

	#btn_take_up {
	  width: 370px;
	  height: 60px;
	  font-size: 16px;
	  font-weight: 400;
	}

	.btn_alone_right{
		border-top: 2px solid #d0d0d0;
	}
	.seccion_izquierda{
		padding-top: 0;
	}
	h1{
		color: black;
		font-size: 30px;
		font-weight: 400;
		margin: 0;
	}

	#checks{
		width: 617px;
	  height: 135px;
		display: block;
		margin: 0 auto;
	  background-image: url('../img/dashboard/Checks1.png');
	  margin-top: 30px;
	  margin-bottom: 45px;
	}
	#drag{
		height: 520px;
	}

	@media ( max-width : 750px) {
		.text_under_pyramid{
			margin-top:40px;
		}
	.fuentes{
		float:none;
		width: 100%;
	  display: -webkit-inline-box;
	  margin-top: 20px;
	}
	.fuentes > div{
	  margin-right: 20px;
	}

	.piramide{
		float:none;
	}
		#checks{
			width: 100%;
			background-repeat: no-repeat;
		  background-size: contain;
		}
	}

	@media ( max-width : 450px) {
		#btn_take_up {
			width: 100%;

  margin-left: 0px;
		}
	}

	.optionValue{
		background-color: rgb(0,153,204);
		  width: 90px;
		  height: 40px;
		  border: 2px solid transparent;
		  border-radius: 5px;
		  text-align: center; 
		  position: absolute;
		  padding-top: 5px;
		  font-weight: 300;
		  color: white;
	}

	.optionValue2{
		  padding-top: 5px;
		  font-weight: 300;
		background-color: white;
		  width: 90px;
		  height: 40px;
		  border: 2px solid #fbae95;
		  border-radius: 5px;
		  text-align: center; 
		  margin-bottom: 20px; 
		  cursor: pointer; 
	}

	.optionValue2:hover{
		  border: 2px solid #ff6633;
	}
</style>

<?php 

	$arreglos = split(', ', $datos['Pyramid']['questions']);

		$arrayContador = array();
    foreach($arreglos as $elemento){
        if(array_key_exists($elemento, $arrayContador)){
            $arrayContador[$elemento] += 1;
        } else {
            $arrayContador[$elemento] = 1;
        }
    }
    
    arsort($arrayContador);


    $arrayFields = Array();
    $f = 1;
    foreach ($arrayContador as $key => $value) {
    	$arrayFields[$f] = ucwords($key);
    	$f += 1;
    }
    
    // debug($arrayFields);

	// $arreglos = $datos['Pyramid'];
	// $arrayContador = Array();
	// unset($arreglos['id']);
	// unset($arreglos['user_id']);
	// unset($arreglos['assessment_id']);

 //    foreach($arreglos as $elemento){
 //        if(array_key_exists($elemento, $arrayContador)){
 //            $arrayContador[$elemento] += 1;
 //        } else {
 //            $arrayContador[$elemento] = 1;
 //        }
 //    }
    
 //    arsort($arrayContador);
 //    // debug($arrayContador);
 //    $arrayFields = Array();
 //    $f = 1;
 //    foreach ($arrayContador as $key => $value) {
 //    	$arrayFields[$f] = $key;
 //    	$f += 1;
 //    }

    // debug($arrayFields);

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
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/intro_module_2"><?php echo __('My career vision Intro Page',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/quests_module_2"><?php echo __('Quests',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option">
				<a style="color:#B0B0B0;" href="<?php echo $this->webroot;?>career_program/p3_intro"><?php echo __('Pyramid of Personal Preferences Intro',true);?></a>
				<div></div>
			</div>
			<span class="glyphicon glyphicon-menu-right"></span>
			<div class="option active">
				<?php echo __('Analyze My Results',true);?>
				<div></div>
			</div>
		</div>
	</div>

	<div class="contenedor_secciones">
		<section class="seccion_izquierda">
			<div>
				<div id="container-text">
					<h1>Great Job!</h1>

					<div class="container-img">
						<div class="img"><img style="width:100%;" src="../img/dashboard/Checks1.png"></div>
					</div>
					<p>
						Your responses will be integrated into the MENTOR. algorithm used in Module 4, Explore Recommended Careers, to generate a personalized list of best-fit careers based on your unique profile. <br><br>
						This quest is currently in its beta version and we appreciate your patience while we continue to fine tune its capabilities and better interpret the answers given. We will soon be updating to a new and improved version and will inform you by email of any changes that might influence the career recommendations provided. <br><br>
						In the meantime, please review and analyze your results below. You can make adjustments where necessary by dragging and dropping items from the left hand column, or using the Add more button.  <br><br>
					</p>	

					<div id="drag">
					<div class="piramide">
						
						<div style="  background: rgb(255,228,173); width: 100%; height: 153px;">
							<div style="  border-left: 95px solid transparent;border-bottom: 153px solid rgb(255,203,100);float: left; margin-left: 190px;border-right: 95px solid transparent;">
								<label class="pirad optionValue" style="background-color: rgb(255,102,51); margin-top: 25px; margin-left: -45px;">
									<?php echo $arrayFields[1];?>
								</label>
								<label class="pirad optionValue" style="background-color: rgb(255,102,51); margin-top: 85px; margin-left: -45px;">
									<?php if(!empty($arrayFields[2])) echo $arrayFields[2]; else echo '';?>
								</label>

							</div>
						</div>

						<div style="background: rgb(173,225,245); width: 100%; height: 153px;">
							<div style="border-right: 95px solid transparent; border-left: 95px solid transparent; border-bottom: 153px solid rgb(100,199,235); height: 100%; margin-left: 95px;margin-right: 95px;">
								<label class="pirad optionValue" style="margin-top: 25px; margin-left: 50px;"><?php if(!empty($arrayFields[3])) echo $arrayFields[3]; else echo '';?></label>
								<label class="pirad optionValue" style="margin-top: 85px; margin-left: 5px;"><?php if(!empty($arrayFields[4])) echo $arrayFields[4]; else echo '';?></label>
								<label class="pirad optionValue" style="margin-top: 85px; margin-left: 100px;"><?php if(!empty($arrayFields[5])) echo $arrayFields[5]; else echo '';?></label>
								
							</div>
						</div>

						<div style="  background: rgb(153,214,235); width: 100%; height: 153px;">
							<div style="border-right: 95px solid transparent; border-left: 95px solid transparent; border-bottom: 153px solid rgb(61,177,216); height: 100%;">
								<label class="pirad optionValue" style="margin-top: 25px; margin-left: 20px;"><?php if(!empty($arrayFields[6])) echo $arrayFields[6]; else echo '';?></label>
								<label class="pirad optionValue" style="margin-top: 25px; margin-left: 145px;"><?php if(!empty($arrayFields[7])) echo $arrayFields[7]; else echo '';?></label>
							 	<label id="target1" class="pirad optionValue draggable droppable" style="background-color:white; width: 140px; margin-top: 25px; margin-left: 270px;color:black;"></label>

							 	<label class="pirad optionValue" style="margin-top: 85px; margin-left: 20px;"><?php if(!empty($arrayFields[8])) echo $arrayFields[8]; else echo '';?></label>
								<label class="pirad optionValue" style="margin-top: 85px; margin-left: 145px;"><?php if(!empty($arrayFields[9])) echo $arrayFields[9]; else echo '';?></label>
							 	<label id="target2" class="pirad optionValue draggable droppable" style="background-color:white; margin-top: 85px; margin-left: 270px; width: 140px;color:black;"></label>
							</div>
						</div>

					</div>
					<div class="fuentes">
						
						<?php 
							for ($i=10; $i <= 11; $i++) { 
								if(!empty($arrayFields[$i]))
									echo '<div><label style="z-index:50;" id="O'.$i.'" class="droppable draggable optionValue2">'.$arrayFields[$i].'</label></div>';
								else
									echo '';
							}
						?>
						<input id="inp1" class="optionValue2 draggable droppable" style="width: 140px; border: 2px solid white; ">
						<div><label id="lbl1" style="z-index:50; display:none" id="O17" class=" droppable draggable optionValue2"></label></div>
						
						<input id="inp2" class="optionValue2 draggable droppable inputMore" style="	width: 140px; border: 2px solid white; display:none;" >
						<div><label id="lbl2" style="z-index:50; display:none" id="O18" class=" droppable draggable optionValue2"></label></div>

						<div class="add">
	 						Add more...
	 						<img class="plus" src="../img/More.png">
	 					</div>

					</div>




					</div>
					<p class="text_under_pyramid">
						The preferences identified in the pyramid above should be taken into consideration when thinking about your career options. You will be able to easily review your results in the Results section of the Dashboard later on.<br><br>
						In the next step of this quest, you will be asked to identify and work through the biggest perceived challenges you face in fulfilling your true potential.
					</p>	

					<div class="take_up_btn">
						<button id="btn_take_up" class="mentr-ok-btn-large save" onclick="" type="button">TAKE ME THERE</button>
					</div>
			</div>
			</div>
		</section>	
		<section class="seccion_derecha">
			<!-- ARTICULOS -->
			<?php echo $this->element('article_list');?>
		</section>
		<div style="clear: both;"></div>
	</div>	
		
</div>

<script type="text/javascript">
	


	$('.add').click(function(){
		$('.inputMore').css('display', 'block');
		$('.add').css('display', 'none');
	}) 

	$('#inp1').focusout(function(){
		$(this).css('display', 'none');
		$('#lbl1').css('display', 'block');
		$('#lbl1').html( $(this).val() );
	})

	$('#inp2').focusout(function(){
		$(this).css('display', 'none');
		$('#lbl2').css('display', 'block');
		$('#lbl2').html( $(this).val() );
	})

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
		        var obj;
		        if ($(ui.helper).hasClass('draggable')) {
		          	obj = $(ui.helper).clone();  
		        	val = $(ui.helper).html();
		        	clss = $(ui.helper).attr('id');
		        	$("#"+clss).html('');			  
			        $(this).html(val);
		        }
		    }
		}).sortable({
		    revert: false
		});
	});
	$('.save').click(function(){
		var data = [];
		$('.pirad').each(function(k,v){
			data[k] = $(this).html();
		})
		$.ajax({
			url: WEBROOT+'dashboards/savePyramid',
			data: {data:data},
			type: 'post',
			success: function(){
				var track = "next button results assessment p3";
				$.ajax({
					url: WEBROOT+'dashboards/Mixpanelajax/'+track,
					type: 'post',
					success: function(){
						window.location.href=WEBROOT+'career_program/p3_bottlenecks';
					}
				})
			},
			error: function(){

			}
		})
		console.log(data);
	})
</script>




