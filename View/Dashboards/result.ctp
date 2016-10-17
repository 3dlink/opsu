<?php 
 echo $this->Html->script('v3.js');
 echo $this->Html->script('radar-chart.js');
 echo $this->Html->css('radar-chart');
 ?>
<style>

.area.argentina, .argentina .circle {
	fill: #4F254D;
}

.dash-vision-content{
	margin-top: 0px;
}

</style>
<?php 

if(!empty($workvalues)){
	echo "
	  <script>
	  var items = [{
	  	Autonomy: '".$workvalues['Workvaluesa']['wv_autonomy']."',
	  	Social_Status: '".$workvalues['Workvaluesa']['wv_status']."',
	  	Impact: '".$workvalues['Workvaluesa']['wv_impact']."',
	  	Compensation: '".$workvalues['Workvaluesa']['wv_pay']."',
	  	Job_security: '".$workvalues['Workvaluesa']['wv_job_security']."',
	  	Variety: '".$workvalues['Workvaluesa']['wv_variety']."',
	  	Working_conditions: '".$workvalues['Workvaluesa']['wv_balance']."',
	  	Sense_of_completion: '".$workvalues['Workvaluesa']['wv_completeness']."',
	  	Relatedness: '".$workvalues['Workvaluesa']['wv_relatedness']."'
	  }];

	  </script>
	   ";
}

if(!empty($via)){
	echo "
	  <script>
	  var items2 = [{
	  	Realistic: '".$via['Via']['realistic']."',
	  	Investigative: '".$via['Via']['investigative']."',
	  	Artistic: '".$via['Via']['artistic']."',
	  	Social: '".$via['Via']['social']."',
	  	Enterprising: '".$via['Via']['enterprising']."',
	  	Conventional: '".$via['Via']['conventional']."'
	  }];
	  </script>
	   ";


	$newArray=array();
	$newArray['1']=array('value'=>$via['Via']['realistic'], 'letter'=>'realistic', 'tooltip' => 'Hands-on and practical, you make things work. A straightforward thinker, you fix, build and repair. You learn from doing and like stability in work.');

	$newArray['2']=array('value'=>$via['Via']['investigative'], 'letter'=>'investigative', 'tooltip' => 'Full of ideas and innovation, you are curious and intelligent. A problem-solver who loves to learn, you are reserved, thoughtful and thrive on logic.');

	$newArray['3']=array('value'=>$via['Via']['artistic'], 'letter'=>'artistic', 'tooltip' => 'Talented, independent and driven by creativity, your all or nothing approach needs space and freedom to work. You bring drama to everything you do.');

	$newArray['4']=array('value'=>$via['Via']['social'], 'letter'=>'social', 'tooltip' => 'A helper and a healer, you are all about community. A natural mediator, you want to make the world a better place. Social interaction is a must.');

	$newArray['5']=array('value'=>$via['Via']['enterprising'], 'letter'=>'enterprising', 'tooltip' => 'Persuasive and ambitious, you broker deals and make sales. A goal oriented, big picture thinker, you work hard and are a natural communicator.');

	$newArray['6']=array('value'=>$via['Via']['conventional'], 'letter'=>'conventional', 'tooltip' => 'Organized, efficient and detail oriented, you turn chaos into order. Conscientious and cautious, you can be relied on to make things run smoothly. ');

function order_by_member_key($a, $b){
	$ordenPrioridad=array();
	$ordenPrioridad['realistic'] = 6;
	$ordenPrioridad['investigative'] = 5;
	$ordenPrioridad['artistic'] = 4;
	$ordenPrioridad['social'] = 3;
	$ordenPrioridad['enterprising'] = 2;
	$ordenPrioridad['conventional'] = 1;
		if ($a['value'] == $b['value'])
		{
			// membkey is the same, sort by head
			if ($ordenPrioridad[$a['letter']] < $ordenPrioridad[$b['letter']]) return 1;
			return  -1;
		}
		// sort the higher membkey first:
		return $a['value'] < $b['value'] ? 1 : -1;
}

	usort($newArray, "order_by_member_key");


	$dos = split('-', $archetype['Archetype']['title']);
	$uno = $dos[0];
	$dos = split(' ', $dos[1]);
	$dos = $dos[0];


}

if(!empty($personality)){ 
	echo "
	  <script>
	  var items3 = [{
	  	Resilience: '".$personality[0]['Personality']['resilience']."',
	  	Persuasiveness: '".$personality[0]['Personality']['persuasiveness']."',
	  	Organizational_skills: '".$personality[0]['Personality']['organizational_skills']."',
	  	Hardworking: '".$personality[0]['Personality']['hardworking']."',
	  	Positive_attitude: '".$personality[0]['Personality']['positive_attitude']."',
	  	Collaborative: '".$personality[0]['Personality']['collaborative']."',
	  	Leadership: '".$personality[0]['Personality']['leadership']."'
	  }];
	  </script>
	   ";
}

// debug($dataquestFA);


if(!empty($dataquestFA)) {
	echo "
	  <script>
	  var item4 = [{
	  	Time_management_360: '".$dataquestFA['Feedbacka']['time_management_360']."',
	  	Communication_360: '".$dataquestFA['Feedbacka']['communication_360']."',
	  	Tech_savvy_360: '".$dataquestFA['Feedbacka']['tech_savvy_360']."',
	  	Adaptability_360: '".$dataquestFA['Feedbacka']['adaptability_360']."',
	  	Teamwork_360: '".$dataquestFA['Feedbacka']['teamwork_360']."',
	  	Ledership_360: '".$dataquestFA['Feedbacka']['ledership_360']."',
	  	Problem_solving_360: '".$dataquestFA['Feedbacka']['problem_solving_360']."',
	  	Persuasive_360: '".$dataquestFA['Feedbacka']['persuasive_360']."'
	  }];
	  </script>
	   ";
}

if (!empty($frindsResult)){
	echo "
	  <script>
	  var item6 = [{
	  	Time_management_360_invite: '".$frindsResult['time_management_360_invite']."',
	  	Adaptability_360_invite: '".$frindsResult['adaptability_360_invite']."',
	  	Communication_360_invite: '".$frindsResult['communication_360_invite']."',
	  	Problem_solving_360_invite: '".$frindsResult['problem_solving_360_invite']."',
	  	Teamwork_360_invite: '".$frindsResult['teamwork_360_invite']."',
	  	Ledership_360_invite: '".$frindsResult['ledership_360_invite']."',
	  	Tech_savvy_360_invite: '".$frindsResult['tech_savvy_360_invite']."',
	  	Persuasive_360_invite: '".$frindsResult['persuasive_360_invite']."'
	  }];
	  </script>
	   ";
}

if(!empty($skills)) {
	echo "
	  <script>
	  var item5 = [{
	  	Problem_solving: '".$skills['Skillsa']['problem_solving']."',
	  	Adaptability: '".$skills['Skillsa']['adaptability']."',
	  	Critical_thinking: '".$skills['Skillsa']['critical_thinking']."',
	  	Communication: '".$skills['Skillsa']['communication']."',
	  	Creative_thinking: '".$skills['Skillsa']['creative_thinking']."',
	  	Time_management: '".$skills['Skillsa']['time_management']."',
	  	Numerical_reasoning: '".$skills['Skillsa']['numerical_reasoning']."',
	  	Commercial_awareness: '".$skills['Skillsa']['commercial_awareness']."'
	  }];
	  </script>
	   ";
}

?>


 <?php if(!empty($workvalues)){ ?>
	<script>
		RadarChart.defaultConfig.color = function() {};
   		RadarChart.defaultConfig.radius = 5;
	var data = [
      {
       className: 'germany', // optional can be used for styling
       axes: [
         {axis: "Autonomy", value: items[0]['Autonomy']/10}, 
         {axis: "Social <br /> Status", value: items[0]['Social_Status']/10}, 
         {axis: "Impact", value: items[0]['Impact']/10},  
         {axis: "Compensation", value: items[0]['Compensation']/10},
         {axis: "Job <br /> security", value: items[0]['Job_security']/10}, 
         {axis: "Variety", value: items[0]['Variety']/10}, 
         {axis: "Working <br /> conditions", value: items[0]['Working_conditions']/10},  
         {axis: "Sense of <br /> completion", value: items[0]['Sense_of_completion']/10},  
         {axis: "Relatedness", value: items[0]['Relatedness']/10}
       ]
     }
    ];

 	</script>
 <?php } ?>


<?php if(!empty($personality)){  ?>
	<script>
		RadarChart.defaultConfig.color = function() {};
   		RadarChart.defaultConfig.radius = 5;
	   	var data3 = [
	      {
	       className: 'germany', // optional can be used for styling
	       axes: [
	         {axis: "Organizational <br /> skills", value: items3[0]['Organizational_skills']/10},  
	         {axis: "Persuasiveness", value: items3[0]['Persuasiveness']/10}, 
	         {axis: "Resilience", value: items3[0]['Resilience']/10}, 
	         {axis: "Hardworking", value: items3[0]['Hardworking']/10},
	         {axis: "Positive <br /> attitude", value: items3[0]['Positive_attitude']/10},
	         {axis: "Collaborative", value: items3[0]['Collaborative']/10},
	         {axis: "Leadership", value: items3[0]['Leadership']/10}

	       ]
	     }
	   ];
 	</script>
 <?php } ?>

<?php if(!empty($dataquestFA)) { ?>
	<script>
		RadarChart.defaultConfig.color = function() {};
   		RadarChart.defaultConfig.radius = 5;
		var data4 = [
	      {
	       className: 'germany', // optional can be used for styling
	       axes: [
	        	{axis: "Time <br /> management", value: item4[0]['Time_management_360']/10},  
	         	{axis: "Communication", value: item4[0]['Communication_360']/10}, 
	          	{axis: "Tech <br /> savvy", value: item4[0]['Tech_savvy_360']/10}, 
	         	{axis: "Adaptability", value: item4[0]['Adaptability_360']/10},
	         	{axis: "Teamwork", value: item4[0]['Teamwork_360']/10},
	         	{axis: "Ledership", value: item4[0]['Ledership_360']/10},
	         	{axis: "Problem <br /> solving", value: item4[0]['Problem_solving_360']/10},
	         	{axis: "Persuasive", value: item4[0]['Persuasive_360']/10}
	       ]
	     },

	      {
		    className: 'Argentina',
		    axes: [
			    {axis: "Time <br /> management",value: item6[0]['Time_management_360_invite']/10},  
	         	{axis: "Communication", value: item6[0]['Communication_360_invite']/10},  
	          	{axis: "Tech <br /> savvy", value: item6[0]['Tech_savvy_360_invite']/10},  
	         	{axis: "Adaptability",value: item6[0]['Adaptability_360_invite']/10},  
	         	{axis: "Teamwork", value: item6[0]['Teamwork_360_invite']/10},  
	         	{axis: "Ledership",value: item6[0]['Ledership_360_invite']/10},  
	         	{axis: "Problem <br /> solving",value: item6[0]['Problem_solving_360_invite']/10},  
	         	{axis: "Persuasive",value: item6[0]['Persuasive_360_invite']/10},  
		    ]
		  }
	   ];
   </script>
<?php } ?>

<?php 
	if(!empty($skills)) {
?>
	<script>
		RadarChart.defaultConfig.color = function() {};
   		RadarChart.defaultConfig.radius = 5;
	   	var data5 = [
	      {
	       className: 'germany', // optional can be used for styling
	       axes: [
	        	{axis: "Problem <br />solving", value: item5[0]['Problem_solving']/10},  
	         	{axis: "Adaptability", value: item5[0]['Adaptability']/10}, 
	          	{axis: "Critical <br /> thinking", value: item5[0]['Critical_thinking']/10}, 
	         	{axis: "Communication", value: item5[0]['Communication']/10},
	         	{axis: "Creative <br /> thinking", value: item5[0]['Creative_thinking']/10},
	         	{axis: "Time <br /> management", value: item5[0]['Time_management']/10},
	         	{axis: "Numerical <br /> reasoning", value: item5[0]['Numerical_reasoning']/10},
	         	{axis: "Commercial <br /> awareness", value: item5[0]['Commercial_awareness']/10}
	       ]
	     }
	   ];
	</script>
<?php } ?>

<style type="text/css">
	 #course-content{
		margin-top: 0px !important;
	}

 	#menuUserDashboard2 { 
 		padding-top: 0px !important;
 		margin-top: 15px !important;
 	}

@media ( min-width : 751px) {
	#menuUserDashboard2 {
	  height: 35px;
	}
}

@media ( max-width : 950px) {	
	.Footer {
			padding: 35px 92px 45px 40px !important;;
		}
	}

	#info_content{
		min-height: 400px !important;
	}

	#dash_content_skills{
		min-height: inherit !important;
		height: inherit !important;
	}

	#menu-content {
		/*height: 1105px;*/
	}	

	.pyramid_row{
		width: 100%;
		float: left;
		height: 125px;
	}

	.pyramidItems{
		height: 35px;
		color: white;
		font-size: 14px;
		font-weight: 300;
		border-radius: 5px;
		margin: 0 auto;
		text-align: center;
		padding: 6px 20px;
		width: 110px;
	}
	.top{
		background-color: rgb(255, 102, 51);
		margin-top: 20px;
	}
	.no-top{
		background-color: rgb(0, 153, 204);
	}
	.challenges{
		width: 370px;
		background-color: rgba(255,255,255,0.5);
		border-radius: 5px;
		margin: 0 auto;
		min-height: 40px;
		padding: 10px;
		text-align: center;
		font-size: 20px;
		font-weight: 400;
		color: black;
		height: 76px;
	}
	.pyramid{
		width: 470px;
	  /*background-image: url('../img/dashboard/Pyramid3.png');*/
	  margin: 0 auto;
	  height: 1px;
	  min-height: 380px;
	  background-size: cover;
	}
	.pyramidRigth{
		  background-size: 100% 100%;
		  background-image: url('<?php echo $this->webroot;?>img/dashboard/Pyramid3.png');
	}

	.pyramidLeft{
		  color: white;
		  background-size: 100% 100%;
		  background-image: url('<?php echo $this->webroot;?>img/dashboard/Pyramid3.png');
	}

	.pisos{
		float: left;
		width: 100%;
	}

	.piso1{
		margin-top: 20px;
	}
	.piso2{
		margin-top: 53px;
	}

	.titulo_cajas{
	  padding-top: 16px;
		height: 60px;
		width: 100%;
		font-size: 20px;
		font-weight: 400;
		background-color: white;
		text-align: center;
		color: black;
	}

	#personal_preferences, #your_challenges{
		height: 440px;
		width: 470px;
		box-shadow: 0px 0px 5px 0px rgba(0,0,0,.5);
		float: left;
	}
	#your_challenges{
		margin-left: 30px;
	}

	ul, ol{
		margin: 0 0 10px 0px !important;
	}

	.optionValue3{
		background-color: rgb(0,153,204);
		  width: 90px;
		  height: 40px;
		  border: 2px solid transparent;
		  border-radius: 5px;
		  text-align: center; 
		  /* padding-top: 5px; */
		  /* font-size: 16px; */
		  /* float: left; */
		  /* margin-right: 38px; */
		  /* margin-bottom: 20px; */
		  /* cursor: pointer; */
		  position: absolute;
		  padding-top: 5px;
		  font-weight: 300;
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
		  /* padding-top: 5px; */
		  /* font-size: 16px; */
		  /* float: left; */
		  /* margin-right: 38px; */
		  margin-bottom: 20px; 
		  cursor: pointer; 
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
	}

@media ( max-width : 750px) {

	a.tooltips span {
		width: 200px !important;
	}

	.withSpace{
		padding-top: 25px !important;
	}

	.Footer{
		width: 100% !important;
		padding: 35px 35px 45px 35px !important;
	}
	.Footer br{
		display: none;
	}
	.withBorder{
		width: 100% !important;
	}

	.dash-vision-content {
	  margin-top: 0px !important;
	}

	.dash-result-content {
	  height: inherit !important;
	}

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

		.dash-result-content p {
			font-size: 18px !important;
		}	

		.dash-vision-content p {
			font-size: 18px !important;
		}	

		#descripcion_values{
			font-size:18px; 
		}


		.levelP{
			width: inherit !important;
		}
	.pyramid{
		width: 100% !important;
	}
	

	.pod1{
		border-right: 100px solid transparent !important;
		border-left: 100px solid transparent !important;
		border-bottom: 210px solid rgb(100,199,235) !important;
		margin-left: 118px !important;
		margin-right: 163px !important;
	}
	.pod2{
		border-right: 74px solid transparent !important;
 		border-left: 79px solid transparent !important;
	  	border-bottom: 128px solid rgb(100,199,235) !important;
	  	margin-left: 80px !important;
	  	margin-right: 73px !important;
	}

	.pod3{
		border-right: 73px solid transparent !important;
		border-left: 80px solid transparent !important;
		border-bottom: 128px solid rgb(61,177,216) !important;
	}
	.pyramidLeft{
		width: 98% !important;
	}

	.pyramidRigth{
		width: 98% !important;
		background-size: 100% 100% !important;
	}

	#personal_preferences{
		margin-top: 10px;
		width: 100% !important;
	}

	#your_challenges{
		width: 100% !important;
		margin-left: 0px;
		margin-top: 20px;
	}
	
	.thirdTwoView{
		width: 100% !important;
	}
	
	.thirdTwoView>div {
		height: 370px !important;
		padding : 0 !important;
		text-align : center !important;
	}
	.dash-result-left {
		width: 100% !important;
	}
	.well_done{
		height: 400px !important;
	}

	.radar{
		
		width: 100%;
		height: initial !important;
		padding: 0;
		text-align : center;
	}
	
	#rada_movil {
			padding : 0;
			  text-align: center;
	}
	
	.graphiMobile{
			width : 100%;
	}
	
	.graphiMobile > svg{
			width : 100%;
			overflow : hidden;
	}
	
	#menuUserDashboard2{
		margin-left: 0px !important;
	}

	}

	@media (max-width: 550px){

	.challenges {
		width : 100%;
	}
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

	.dash-result-content{
		height: 615px;
	}

	.radar{
		height:410px;
		margin: 0 auto;
		padding: 10px;
		padding-top: 36px;
	}

	.option{
		cursor: pointer;
	}

	td{
		 border-top:0 !important;
	}


		#descripcion_values{
			width:54%;  
			padding-right: 20px; 
			text-align:justify;
			font-size:16px; 
			float: left;  
			line-height: 18px;
			color: black;
		}


@media (max-width: 440px){
	.liTop {
	  margin-left: 0px !important;
	}
	.firstPodiumLi {
	  margin-left: 0px !important;
	}
	.optionValue, .optionValueEmpty {
	  margin-left: 0px !important;
	}
	.thirdPodiumLi {
	  margin-left: 0px !important;
	}
}


@media (max-width: 420px){
.firstPodium {
  margin-left: -10px !important;
  width: 100% !important;
}
.secondPodium {
  margin-left: -10px !important;
  width: 100% !important;
}
.thirdPodium {
  margin-left: -10px !important;
  width: 100% !important;
}
}

@media (max-width: 410px){
	.optionValue, .optionValueEmpty {
	  margin-left: -3px !important;
	  width: 100% !important;
	}
}

	@media (max-width: 380px){
		#imgs-tipe {
		  width: 80px !important;
		}
	}


	@media (max-width: 360px){
		#imgs-tipe {
		  width: 60px !important;
		}
		.optionValue, .optionValueEmpty {
		  width: 90% !important;
		}
	}

	.MyBootom{
		  padding: 0.8em 1em;
	  font-size: 16px;
	  font-weight: bold;
	  background-color: #fff;
	  border: 2px solid #51284F;
	  opacity: .50;
	  border-radius: 9px;
	  color: #51284F;
	  min-width: 370px;
	}
	
	#info_content {
  	  padding-bottom: 60px;
 	 }
</style>
<script type="text/javascript">

// $(window).load(function(){
// 	var hh = $('#info_content').height();
// 	if(hh < 450){
// 		console.log( $('#dash_content').height() );
// 		console.log( $(window).height() );
// 		var altr =  $(window).height() - $('#dash_content').height();
// 		altr = altr - 270;
// 		if(altr < 360){
// 			altr = 0;
// 		}
// 		hh = 400 + altr;
// 		alert(hh);
// 	}
// 	else{
// 		hh = hh +60;
// 	}
// 	$('#menu-content').height(hh + "px");
// })

$(document).ready(function($){


	$('.optionValue3').each(function(){
		if($(this).html().length >= 20){
			$(this).css('fontSize', '12px');
		}
	})

    	
    var personality = '<?php  if(empty($personality)){ echo 0;} else {echo 1;} ; ?>';
    var fields = '<?php  if(empty($fields)){ echo 0;} else {echo 1;} ; ?>';
    var skills = '<?php  if(empty($skills)){ echo 0;} else {echo 1;} ; ?>';
	var via = '<?php  if(empty($via)){ echo 0;} else {echo 1;} ; ?>';
	var workvalues = '<?php  if(empty($workvalues)){ echo 0;} else {echo 1;} ; ?>';
	var challenges = '<?php  if(empty($challengs)){ echo 0;} else {echo 1;} ; ?>';
	var dataquestFA = '<?php  if(empty($challengs)){ echo 0;} else {echo 1;} ; ?>';
    var div_alto = $("#info_content").height() + 60;
   	var sw = 0;
   
    if($('.active').data('class') == '1one'){
       
		if(via == '1'){
		   
			$('#info_content').css('min-height' , 0);
		    
		    // $("#menu-content").css('height',div_alto);
		    
		}
		else {
		    // $("#menu-content").css('height',div_alto);
		  
		}
    }
    
  
    $(".option").click(function(){
        if($(this).data('class') == '7seven'){
			if(personality == '1'){
				sw = 1;
			}
        }
        if($(this).data('class') == '5five'){
			if(dataquestFA == '1'){
				sw = 1;
			}
        }
        if($(this).data('class') == '6six'){
			if(challenges == '1'){
				sw = 1;
			}
        }
        if($(this).data('class') == '4four'){
			if(workvalues == '1'){
				sw = 1;
			}
        }
        if($(this).data('class') == '3three'){
			if(skills == '1'){
				sw = 1;
			}
        }
        if($(this).data('class') == '2two'){
			if(fields == '1'){
				sw = 1;
			}
        }

        if($(this).data('class') == '1one'){
			if(via == '1'){
				sw = 1;
			}
        }

        if(sw == 1){
        $('#info_content').css('min-height' , 0);
        div_alto = $("#info_content").height() + 60;
        // $("#menu-content").css('height',div_alto);
        sw = 0;
        }
        else{
            $('#info_content').css('min-height' , '100%');
            div_alto = $("#info_content").height() + 60;
            // $("#menu-content").css('height',div_alto);
            
			
        }

    });
});

</script>
<div id="menuUserDashboard2" style="  white-space: nowrap; white-space: nowrap; overflow-x: auto; overflow-y: hidden; width: 88% !important; display: inline-block; margin-bottom: 10px; margin-left: 25px; padding-left: 0 ">
	<div id="pag1" class="option active" data-class="4four">
		Work Values
		<div></div>
	</div>
		<div class="separator"></div>

	<div id="pag2" class="option " data-class="1one">
		Vocational Interests
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="pag3" class="option" data-class="2two">
		Personal Values
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="pag4" class="option" data-class="3three" data-canvas="canvas" data-radar="1">
		Skills
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="pag5" class="option" data-class="6six">
		Preferences
		<div></div>
	</div>
	<div class="separator"></div>
	<div id="pag6" class="option" data-class="5five" data-canvas="canvas3" data-radar="2">
		360° Feedback
		<div></div>
	</div>
</div>

<div id="course-content" class="cont 7seven" style="display:none;">	

	<?php if(!empty($personality)){ ?>
	<div>
		<div class="dash-result-left thirdOneView" style="width:565px">
			<div class="dash-result-content" style="height: 410px; min-height: 200px; !important;">
				<h3 style="border-bottom: none !important;">
					Your total score is: <?php echo number_format($personality[0]['Personality']['overall'],1)?>%
				</h3>
				<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
					Ut quis mauris eget ipsum varius dictum. In lacus nisi, 
					facilisis eu, pretium sed, dapibus et, tellus. 
					 
					Phasellus sodales consectetuer eros. Sed tellus. Sed a mauris 
					nec orci volutpat ultrices. Donec vitae sem. Praesent nibh nisl, 
					pretium non, euismod vitae, gravida et, justo. Cras non sem in magna 
					semper vulputate.
					
					Cum sociis natoque penatibus et magnis dis parturient montes, nascetur 
					ridiculus mus. Nunc metus. Nulla molestie, orci id fermentum sollicitudin, 
					enim.

				</p>
				<div id="btn-result-content" >
					<button id="btn-result" style="min-width: initial !important;" onclick="window.location=WEBROOT+'career_program/results_empl'">
						VIEW YOUR COMPLETE REPORT
					</button>
				</div>
			</div> 
		</div>
		<div class="dash-result-right thirdTwoView" style="width:375px">
			<div class="dash-result-content" style="min-height: 200px !important; height: 410px;">
				<div style="width:100%;">
					<div id="radar_web3" class="radar3"></div>
				</div>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget,
						elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. 
						Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum 
						cursus odio. Etiam consectetuer, risus ac fermentum pretium, est magna fringilla erat, 
						eu aliquam erat pede nec lectus.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>/img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. 
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/assessment_empl'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>

</div>

<div id="course-content" class="cont 2two" style="display:none;">	

	<?php if(!empty($fields)){ ?>
		<div style="width:100%; padding:17px 20px; box-shadow: 0px 0px 5px 0px rgba(0,0,0,.5); background-color:white; border: 1px solid #eaeaea; float: left;">
				<div id="descripcion_values">
					The three values you placed on the podium are your core personal values. Whenever you are faced with an important life or career-related decision, you should make your choice according to what best aligns with these top three, followed by your top 10. Remember, decisions that take your core personal values into account are the decisions that lead to a successful and inspired life.
				</div>
				<div id="btn-result-content" style="  float: right; width: 45%;">
					<button class="MyBootom" style="  width: 100%;min-width: initial !important;" onclick="window.location=WEBROOT+'career_program/results_values'">
						VIEW YOUR COMPLETE REPORT
					</button>
				</div>
			</div>


			<div class="divFather" style="width: 800px; float:left;margin-left: 112px;">
							
			<div style="clear:both"></div>

			<div style="margin: 40px 0px 40px 0px;">

				<div class="menuTop" style=" margin-right:30px;  width: 370px; height: 550px; float: left;">
					<div style="border-top-right-radius:10px; border-top-left-radius:10px; background:#fb957b; color:white; text-align:center; font-size:24px;">
						Top 10
					</div>
					<div style="border:2px solid #ff3300; width: 100%; height: 510px;">
						<ul class="" style=" margin-top:10px !important; float: left; padding-left: 0px;">
							<?php for($x = 0; $x <=6; $x++) {
								// debug($fields[$x]);
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
	</div>
	<?php }else{?>

	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To gain more insight into your personal priorities, follow the link below.
					</p>
					<button onclick="window.location=WEBROOT+'career_program/values_intro'" class="mentr-ok-btn-large">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>

	<?php }?>

	
</div>

<div id="course-content" class="cont 1one" style="display:none;">	
	<?php if(!empty($via)){?>
	<div>
		<div class="dash-result-left">
			<div class="dash-result-content">
					<?php 
					$arrayColor=array();
					$y=0;
					foreach($newArray as $x): $arrayColor[$y]=$x['letter'];$y++;?>
						<div class="result-indicator">
							<div id="resul-desc-indicator">
								<label style="font-size: 20px">
									<b><?php echo ucwords($x['letter']);?></b>
									<a class="tooltips">
										<?php echo $this->Html->image('dashboard/info.png');?>
										<span><?php echo $x['tooltip'];?></span>
									</a>
								</label>
								<label id="number">
									<b><?php echo $x['value']/4;?></b>
									<small>/10</small>
								</label>
							</div>
							<div class="progress-bar-indicator <?php echo $x['letter'];?>" id="">
								<div id="progress" style="width:<?php echo ($x['value']/4)*10; ?>%;"></div>
							</div>
						</div>
					<?php endforeach;?>		
				<div id="btn-result-content" >
					<button id="btn-result" style="min-width: initial !important;" onclick="window.location=WEBROOT+'career_program/results_interests'">
						VIEW YOUR COMPLETE REPORT
					</button>
				</div>	
			</div> 
		</div>
		<div class="dash-result-right">
			<div class="dash-result-content">
				<h3>
					<center>You predominant <?php echo ucwords($uno);?> followed by <?php echo ucwords($dos);?></center>
				</h3>
				<p>
					<?php echo $archetype['Archetype']['texto1'];?>
				</p>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="withSpace">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						The RIASEC model, also known as the Holland Codes, was conceived in the late 1970s. A theory of careers and vocational choice based upon personality types, it has been used by the US Department of Labor Employment & Training Administration for the last 2 decades. Psychologist John L. Holland first came up with the idea in the 1950s and spent the rest of his career developing it. As one of the most empirically tested areas of work psychology, RIASEC is widely used by professional career counsellors and has been incorporated into most popular assessments in the field. <br><br>
						RIASEC is based on the idea that people are more likely to be satisfied and successful in environments that match their personality type. However, new research shows that this is just one method of identifying a good career fit. Although your personality type may not match a particular role, you may find this is balanced out by other valid criteria such as work values.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						 You haven’t completed this quest yet. To throw some light on the things you enjoy doing, what they say about you and your work preferences follow the link below.
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/assessment_interests'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>
	
</div>

<div id="course-content" class="cont 3three" style="display:none;">
	<?php if(!empty($skills)){ ?>
	<div>
		<div class="dash-result-left thirdOneView" style="width:565px">
			<div id="dash_content_skills" class="dash-result-content" style="height: 410px; min-height: 200px; !important;">
				<h3 style="border-bottom: none !important;margin-bottom: 0px !important;">
					Your total score is: <?php echo number_format($skills['Skillsa']['overall'],1)?>%
				</h3>
				<p>
					The results below indicate your current level of transferable skills. Also known as soft skills, personal skills or employability skills, transferable skills are learned from life experience. They can be taken from job to job and applied under all circumstances. Important functional skills, they should not be confused with traits—a trait refers to the manner in which the skill is performed. <br /><br />
					A 2014 study by leading online careers community Glassdoor highlights the significance of transferable skills, with results showing that 7 out of 10 employees consider them more valuable than their degrees. At MENTOR., we believe time spent developing your transferable skills is time well spent. Because you can use them in any role, this approach allows for more flexibility when considering your options, and leaves you in a stronger position should the job market change. <br /><br />
					Developing transferable skills is a life-long project. There is an endless list of skills to be acquired, improved, adapted and enhanced. This evaluation focused on eight key skills that have been shown to improve employability—you can learn more about the research in the Science Behind It section below. You should now create an action plan based on the results below and the personalized shortlist of careers generated in Module 4: Explore Recommended Career Paths. This will establish the most relevant skills for your field of choice and target areas in need of improvement. <br /><br />
					Want to take immediate steps towards developing your transferable skills? Check out our recommended online courses below.

				</p>
				<div id="btn-result-content" >
					<button id="btn-result" style="min-width: initial !important;" onclick="window.location=WEBROOT+'career_program/results_skills'">
						VIEW YOUR COMPLETE REPORT
					</button>
				</div>
			</div>
		</div>
		<div class="dash-result-right thirdTwoView" style="width:375px">
			<div class="dash-result-content" style="min-height: 200px !important; height: 624px;">
			<div class="dash-result-right thirdTwoView" style="width:375px">
				<div id="radar_webSkills2" class="radar2"></div>
			</div>
			</div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						A prospective employer expects you to apply the skills you have learned through your studies, work, and life experiences to the work environment. However, with such a vast number of different skills, it can be hard to know which ones are most important. When designing our assessment we reviewed several studies and surveys including the <a href="https://www.binghamton.edu/ccpd/quick-reference-guides/transferable-skills.pdf">2012 National Association of Colleges and Employers (NACE) Job Outlook Survey</a> and <a href="http://blog.linkedin.com/2014/10/10/what-it-takes-for-a-young-professional-to-get-hired-today/">LinkedIn’s survey of 1400 managers</a> at Fortune 500 companies to establish what key skills employers are looking for in their new hires. The eight dimensions selected above stood out as the front runners, recurring again and again across the board. 
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To evaluate your strengths and areas for improvement, follow the link below.
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/assessment_skills'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>
	
</div>

<div id="course-content" class="cont 6six" style="display:none;">
	<?php  if(!empty($pyra)){ ?>
	<div>

		<div id="personal_preferences">
			<div class="titulo_cajas">Pyramid of Personal Preferences</div>
			<div class="pyramid pyramidLeft">

				<div class="levelP" style="text-align:center;   width: 470px; height: 115px;">
					<div class="" style="  margin-left: -85px;">
						<label class="optionValue3" style="background-color: rgb(255,102,51); margin-top: 15px;">
							<?php echo $pyra['PyramidUser']['top1'];?>
						</label>
						<label class="optionValue3" style="background-color: rgb(255,102,51); margin-top: 75px; ">
							<?php echo $pyra['PyramidUser']['top2'];?>
						</label>
					</div>
				</div>

				<div class="levelP" style="text-align:center;     width: 470px; height: 130px;">
					<div class="" style="">
						<label class="optionValue3 label3" style="margin-top: 25px;  margin-left: -43px;"><?php echo $pyra['PyramidUser']['top3'];?></label>
						<label class="optionValue3 label4" style="margin-top: 85px; margin-left: -95px;"><?php echo $pyra['PyramidUser']['top4'];?></label>
						<label class="optionValue3 label5" style="margin-top: 85px; margin-left: 10px;"><?php echo $pyra['PyramidUser']['top5'];?></label>
					</div>
				</div>

				<div class="levelP" style="text-align:center;     width: 470px; height: 130px; margin-left:-170px;">
					<div class="" style="">
						<label class="optionValue3 label6" style="margin-top: 25px; margin-left: 0px;"><?php echo $pyra['PyramidUser']['top6'];?></label>
						<label class="optionValue3 label7" style="margin-top: 25px; margin-left: 120px;"><?php echo $pyra['PyramidUser']['top7'];?></label>
					 	<label class="optionValue3 label8" style="margin-top: 25px; margin-left: 245px;"><?php echo $pyra['PyramidUser']['top8'];?></label>
					 	<label class="optionValue3 label9" style="margin-top: 85px; margin-left: 0px;"><?php echo $pyra['PyramidUser']['top9'];?></label>
						<label class="optionValue3 label10" style="margin-top: 85px; margin-left: 120px;"><?php echo $pyra['PyramidUser']['top10'];?></label>
					 	<label class="optionValue3 label11" style="margin-top: 85px; margin-left: 245px;"><?php echo $pyra['PyramidUser']['top11'];?></label>
					</div>
				</div>
			</div>
		</div>
		<?php  if(!empty($challengs)){ ?>
		<div id="your_challenges">
			<div class="titulo_cajas">Your Challenges</div>
			<div class="pyramid pyramidRigth">
				<div class="pisos">
				<div class="challenges piso1"><?php echo ucwords($challengs['Challenge']['top_challenge'])?></div>
				<div class="challenges piso2"><?php echo ucwords($challengs['Challenge']['challenge_2'])?></div>
				<div class="challenges piso2"><?php echo ucwords($challengs['Challenge']['challenge_3'])?></div>
				</div>
			</div>
				<div style="clear:both;"></div>
		</div>

<?php }?>
				<div style="clear:both;"></div>
	</div>
	<?php } else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To reach a deeper understanding of your true SELF, follow the link below.
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/p3_intro'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>
	
</div>

<div id="course-content" class="cont 4four" style="display:block;">
	<?php if(!empty($workvalues)){ ?>
	<div>
		<div class="dash-result-left thirdOneView" style="width:565px">
			<div class="dash-result-content well_done" style="height: 410px; min-height: 200px; !important;">
				<h3 style="border-bottom: none !important;">
					Well done!
				</h3>
				<p>
					The results of your assessment are summarised in the right colum. These results are used in identifying appropriate career choices by matching your work values to those involved with different occupations. While your values play an important role in career choice, they should not be considered in isolation. For an improved reliabilty, complete also the rest of the quests in Know Myself module. 

				</p>
				<div id="btn-result-content" >
					<button id="btn-result" style="min-width: initial !important;" onclick="window.location=WEBROOT+'career_program/results_wv'">
						VIEW YOUR COMPLETE REPORT
					</button>
				</div>
			</div>
		</div>
		<div class="dash-result-right thirdTwoView" style="width:375px">
			<div id="radar_web" class="radar"></div>
		</div>
		<div style="clear:both;"></div>
	</div>
	<div class="withSpace">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						Research proves that job satisfaction matters. The Job
						Characteristics Model is a theory that argues that the intrinsic
						nature of work is the core underlying factor causing employees to
						be satisfied with their jobs. The model focuses on five main
						characteristics that need to be met for employee fulfillment:
						Task identity or completion; task significance; variety;
						autonomy; and feedback. These characteristics are most commonly
						measured using the Job Diagnostic Survey, where employees rate
						the most accurate descriptions of their job from 1 to 7. A 2009
						study by T.A. Judge and R. Klinger (<a href="http://www.timothy-judge.com/c06.pdf">Promote Job Satisfaction
						through Mental Challenge</a>, Handbook of Principles of
						Organizational Behaviour, Second Ed, pp107-119) evaluates these
						key techniques and existing research on job satisfaction,
						concluding that employees who are satisfied with their jobs tend
						to perform better, withdraw less, and lead happier and healthier
						lives. Organizations whose employees are satisfied with their
						jobs are more likely to be productive and profitable. This
						conclusion is also firmly supported by Dawis, 2001; Hochwater,
						Perrewe, Ferris & Brymer, 1999. <br>
						<br>Of course, there are a number of different factors to
						consider when assessing the potential for job satisfaction.
						However, a 2012 study by J. Jing and R. James (<a href="http://www.sciencedirect.com/science/article/pii/S0001879111001448">Stability and
						change in work values: A meta-analysis of longitudinal studies</a>,
						Journal of Vocational Behavior) found that work values remain
						relatively stable throughout life. This indicates that a person’s
						current work values can be used as a reliable gauge for what will
						satisfy them in the future.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } else{ ?>
	<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To identify what you need to love your work, follow the link below.
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/assessment_wv'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>
	
</div>
<?php 

	$titles = array();
	$titles['problem_solving_360']['color'] = "#990000";
	$titles['problem_solving_360']['name'] = 'Problem solving';

	$titles['adaptability_360']['color'] = "#FF4444";
	$titles['adaptability_360']['name'] = 'Adaptability';


	$titles['communication_360']['color'] = "#FF9999";
	$titles['communication_360']['name'] = 'Communications skills';

	$titles['time_management_360']['color'] = "#FFFFFF";
	$titles['time_management_360']['name'] = 'Time management';


	$titles['teamwork_360']['color'] = "#B2E517";
	$titles['teamwork_360']['name'] = 'Team Work';


	$titles['ledership_360']['color'] = "#99CC00";
	$titles['ledership_360']['name'] = 'Ledership';

	$titles['persuasive_360']['color'] = "#669900";
	$titles['persuasive_360']['name'] = 'Persuasiveness';

	$titles['tech_savvy_360']['color'] = "#FFFFFF";
	$titles['tech_savvy_360']['name'] = 'Tec-savvy';
?>

<div id="course-content" class="cont 5five" style="display:none; ">

	<?php if(!empty($dataquestFA) /*$this->Session->read("dataQuestFA") != null*/){ 

		$reF['time_management_360'] = $dataquestFA['Feedbacka']['time_management_360'];
		$reF['adaptability_360'] = $dataquestFA['Feedbacka']['adaptability_360'];
		$reF['communication_360'] = $dataquestFA['Feedbacka']['communication_360'];
		$reF['problem_solving_360'] = $dataquestFA['Feedbacka']['problem_solving_360'];
		$reF['teamwork_360'] = $dataquestFA['Feedbacka']['teamwork_360'];
		$reF['ledership_360'] = $dataquestFA['Feedbacka']['ledership_360'];
		$reF['tech_savvy_360'] = $dataquestFA['Feedbacka']['tech_savvy_360'];
		$reF['persuasive_360'] = $dataquestFA['Feedbacka']['persuasive_360'];
		$reF['active_listening'] = $dataquestFA['Feedbacka']['active_listening'];
		$reF['oral_communication'] = $dataquestFA['Feedbacka']['oral_communication'];
		$reF['written_communication'] = $dataquestFA['Feedbacka']['written_communication'];
		$reF['sent'] = $dataquestFA['Feedbacka']['sent'];

		?>


	<div class="dash-result-left " style="border-bottom: solid 2px #d0d0d0; border-top: solid 2px #d0d0d0; width:570px;">
			<div class="dash-result-content" style="height: inherit !important;">
				<?php  foreach ($titles as $key => $value) { ?>

		<?php 
	$bord = "";
	$color = "white";

	$myResult = number_format(($reF[$key] / 10),1);
	$othersResult = number_format(($frindsResult[$key.'_invite'] / 10),1);

	$GAP = $myResult - $othersResult;
	
	if( ($GAP == 0 && $GAP <= 0.5) ||  ($GAP == 0  && $GAP >= -0.5)){
		$GAP = abs($GAP);
		$bac = "#FFFFFF";
		$bord = "border: 2px solid;";
		$color = "black";
	}

	elseif($GAP > 0.5 && $GAP <=1){
		$bac = "#FF9999";
	}

	elseif($GAP > 1 && $GAP <= 1.5){
		$bac = "#ff4444";
	}

	elseif($GAP > 1.5){
		$bac = "#990000";
	}

	elseif($GAP < -0.5 && $GAP >= -1){
		$GAP = abs($GAP);
		$bac = "#B2E517";
	}

	elseif($GAP < -1 && $GAP >= -1.5){
		$GAP = abs($GAP);
		$bac = "#99cc00";
	}

	elseif($GAP < -1.5){
		$GAP = abs($GAP);
		$bac = "#669900";
	}
	?>


				<div class="result-indicator">
					<div id="resul-desc-indicator">
						<label style="font-size: 20px">
							 <!-- <b><?php echo $titles['problem_solving']['name'];?></b> -->
							 <b><?php echo $value['name'];?></b>
							<span>
								<?php echo $this->Html->image('dashboard/info.png');?>
							</span>
						</label>
					</div>
					<div style="width: 100%;" >
						<div class="bs-example" data-example-id="condensed-table">
						    <table class="table table-condensed" style="font-size:16px;">
						      <tbody>
						        <tr>
						          <td style="  width: 50%; ">
									<div class="progress-bar-indicator orange2" style="  margin-top: 5%; float:left;" id="">
										<div id="progress" style="  width: <?php echo $reF[$key];?>%;"></div>
									</div>
						          </td>
						          <td>Self:</td>
						          <td>
						          	<span style="font-weight: bold;"><?php echo $myResult;?></span>
						          	<span class="limitedF" style="font-size:14px; color:#616161;"> / 10</span>
						          </td>
						          <td rowspan="2">
						          	<div style="font-weight: bold; margin-top: -17px; text-align: center; margin-bottom: 10px;">Gap</div>
						          	<div style=" <?php echo $bord; ?> margin: auto; height: 50px; background:<?php echo $bac;?>; width: 50px; -moz-border-radius: 35px; border-radius: 35px;">
						          		<div style="font-size: 25px; text-align: center; padding-top: 5px; color: <?php echo $color;?>;"><?php echo $GAP;?></div>
						          	</div>
						          </td>
						        </tr>
						        <tr>
						          	<td style="  width: 50%; ">
							          	<div class="progress-bar-indicator purple" style="  margin-top: 5%; float:left;" id="">
											<div id="progress" srtyle="width: <?php echo $frindsResult[$key.'_invite'];?>%;"></div>
										</div>
									</td>
						          <td>All Others:</td>
						          <td>
						          	<span style="font-weight: bold;"><?php echo $othersResult;?></span>
						          	<span class="limitedF" style="font-size:14px; color:#616161;"> / 10</span>
						          </td>
						        </tr>
						      </tbody>
						    </table>
						</div>
					</div>
				</div>
			
				<?php  } ?>
			</div>
		</div>
		<section class="dash-result-right "  id="graphiWeb" style="display:block; width: 370px;">
			<div id="radar_web4" class="radar"></div>
		</section>
	<div style="clear:both;"></div>
	<div class="withSpace">
		<div class="dash-vision-content" style="width: 59%;">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(../webroot/img/science.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<h4 style="color:black;   color: black; font-size: 20px; font-weight: bold; margin-top: 0; margin-bottom: 21px;">The Science Behind It</h4>
					<p style="font-size: 16px; font-weight: 300;">
						Nam faucibus sapien id lorem. Donec elit leo, lobortis nec, eleifend eget,
						elementum eget, tellus. Donec at odio sed arcu vehicula venenatis. Nulla facilisi. 
						Aliquam interdum. Morbi vitae tellus a tortor pulvinar facilisis. Curabitur vestibulum 
						cursus odio. Etiam consectetuer, risus ac fermentum pretium, est magna fringilla erat, 
						eu aliquam erat pede nec lectus.
					</p>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } else{ ?>
		<div class="">
		<div class="dash-vision-content">
			<div class=" col-xs-4 col-md-3" style="max-height: 200px; background-image: url(<?php echo $this->webroot; ?>img/I.png);" id="imgs-tipe"></div>
			<div class=" col-xs-8 col-md-9" style="display: table; min-height: 170px;">
				<div style="display: table-cell; vertical-align: middle;">
					<p>
						You haven’t completed this quest yet. To identify gaps in the way you perceive yourself and how the rest of the world sees you, follow the link below.
					</p>
					<button class="mentr-ok-btn-large" onclick="window.location=WEBROOT+'career_program/360_intro'">Go to quest</button>
				</div>
				
				<div style="clear:both;"></div>
			</div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php } ?>

</div>
			

<script type="text/javascript">

var pagina = '<?php 
	if(!empty($pagina)){ 
		echo $pagina;
	}else{ 
		echo 0;
	}?>';

	$('.option').click(function(){
		$('.option').removeClass('active');
		$(this).addClass('active');
		$('.cont').css('display', 'none');

		var cl = $(this).data('class');
		$('.'+cl).css('display', 'block');

		$('#menu_content').height($('#info_content').height() + 60);
	})

	if(pagina > 0){
		$('.option').removeClass('active');
		$('#pag'+pagina).addClass('active');
		$('.cont').css('display', 'none');

		var cl = $('#pag'+pagina).data('class');
		$('.'+cl).css('display', 'block');
	}

</script>

<?php //if($this->Session->read("dataQuestSkills") != null){?>

<?php if(!empty($workvalues)){ ?>

	<script>
	  function randomDataset() {
	    return data.map(function(d) {
	    	return {
	        className: d.className,
	        axes: d.axes.map(function(axis) {
	          return {axis: axis.axis, value: axis.value};
	        })
	      };
	    });
	  }

	  var chart = RadarChart.chart();
	  var cfg = chart.config(); // retrieve default config
	  
	  var svg = d3.select('#radar_web').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg.append('g').classed('single', 1).datum(randomDataset()).call(chart);

	  var svg2 = d3.select('#radar_movil').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg2.append('g').classed('single', 1).datum(randomDataset()).call(chart);

	  	// many radars
	  	chart.config({w: cfg.w / 4, h: cfg.h / 4, axisText: true, levels: 0, circles: true});
	  	cfg = chart.config();

	</script>
<?php } ?>


	
<?php if(!empty($personality)){  ?>
	<script>
	  function randomDataset3() {
	    return data3.map(function(d) {
	      return {
	        className: d.className,
	        axes: d.axes.map(function(axis) {
	          return {axis: axis.axis, value: axis.value};
	        })
	      };
	    });
	  }

	  var chart = RadarChart.chart();
	  var cfg = chart.config(); // retrieve default config
	  
	  var svg = d3.select('#radar_web3').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg.append('g').classed('single', 1).datum(randomDataset3()).call(chart);

	  var svg2 = d3.select('#radar_movil3').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg2.append('g').classed('single', 1).datum(randomDataset3()).call(chart);

	  	// many radars
	  	chart.config({w: cfg.w / 4, h: cfg.h / 4, axisText: true, levels: 0, circles: true});
	  	cfg = chart.config();


	</script>
<?php } ?>

<?php if(!empty($dataquestFA)) { ?>
	<script>
	  	 function randomDataset4() {
	    return data4.map(function(d) {
	      return {
	        className: d.className,
	        axes: d.axes.map(function(axis) {
	          return {axis: axis.axis, value: axis.value};
	        })
	      };
	    });
	  }



	  var chart = RadarChart.chart();
	  var cfg = chart.config(); // retrieve default config
	  
	  var svg = d3.select('#radar_web4').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg.append('g').classed('single', 1).datum(randomDataset4()).call(chart);

	  var svg2 = d3.select('#radar_movil4').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg2.append('g').classed('single', 1).datum(randomDataset4()).call(chart);

	  	// many radars
	  	chart.config({w: cfg.w / 4, h: cfg.h / 4, axisText: true, levels: 0, circles: true});
	  // 	cfg = chart.config();
	</script>
<?php } ?>
<?php if(!empty($skills)) { ?>
	<script>
	 function randomDataset5() {
	    return data5.map(function(d) {
	      return {
	        className: d.className,
	        axes: d.axes.map(function(axis) {
	          return {axis: axis.axis, value: axis.value};
	        })
	      };
	    });
	  }

	  var chart = RadarChart.chart();
	  var cfg = chart.config(); // retrieve default config
	  
	  var svg = d3.select('#radar_webskills2').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg.append('g').classed('single', 1).datum(randomDataset5()).call(chart);

	  var svg2 = d3.select('#radar_movilskills2').append('svg')
	    .attr('width', cfg.w)
	    .attr('height', cfg.h);
	  	svg2.append('g').classed('single', 1).datum(randomDataset5()).call(chart);

	  	// many radars
	  	chart.config({w: cfg.w / 4, h: cfg.h / 4, axisText: true, levels: 0, circles: true});
	  	cfg = chart.config();
	</script>
<?php } ?>
	
<? //} ?>