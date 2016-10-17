<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MENTOR. | About Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link
	href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<?php
	echo $this->Html->css ( '../library/bootstrap/css/bootstrap.css' );
	echo $this->Html->css ( 'mentr-backend' );
	echo $this->Html->css ( 'mentr-backend_d' );
	echo $this->Html->css ( 'career_guidance.css' );
	echo $this->Html->script ( 'jquery-1.11.2.js' );
	
	?>
	<?php 	echo $this->Html->script('googleAnalytics.js'); ?>

	<style>

	span > a{
		color: black;
		text-decoration: underline !important;
	}

	span{
		font-size: 14px;
	}
	span > sup{
		font-weight: bold;
	}

	p > a{
		color: black;
		text-decoration: underline !important;
	}
	#lista > li > a{
		color: black;
		text-decoration: underline !important;
	}
	
	.Footer {
		padding: 35px 92px 45px 85px;
	    height: 100% !important;
	}
	h3{
		margin-top: 0px;
	}
	p{
		text-align: justify;
		font-size: 16px;
	}
	.ul{
		text-align: justify;
		font-size: 16px;
	}
#img1 {
	background-image:
		url('<?php echo $this->webroot; ?>img/aboutus/shutterstock_228452812.jpg'); /**/
	background-size: 101%;
	background-repeat: no-repeat;
	background-position-x: -1px;
	width: 445px;
	height: 250px;
	margin-bottom: 20px;
	
}

#img2 {
	background-image:
		url('<?php echo $this->webroot; ?>img/aboutus/shutterstock_195600056.jpg'); /**/
	background-size: 100%;
	background-repeat: no-repeat;
	background-position-x: -2px;
	width: 445px;
	height: 250px;
	margin-bottom: 20px;
}

#img3 {
	background-image:
		url('<?php echo $this->webroot; ?>img/aboutus/shutterstock_207061771.jpg'); /**/
	background-size: 101%;
	background-repeat: no-repeat;
	background-position-x: -1px;
	width: 445px;
	height: 250px;
}

header {
	padding: 20px 30px 0px 30px;
	min-height: 120px;
	background-color: white;
	width: 1170px;
	color: black;
}

#legal-content {
	width: 1170px;
	padding: 0px 30px 0px 30px;
	float: none;
}

#legal-content-textos {
	float: left;
	width: 635px;
}

#legal-content-imagenes {
	float: right;
  	width: 445px;
  	margin-left: 30px;
}

li {
	list-style-type: none;
}

#titulo_header {
	font-size: 40px;
	padding-left: 45px;
	color: inherit;
}

p {
	color: inherit;
}



@media ( max-width : 950px) {	
	#content-menu-div-principal > div > div> p {
  		font-weight: bold !important;
  		font-size: 20px !important;
	}
	.Footer {
		padding: 35px 92px 45px 50px !important;;
	}
	body {
	  background-color: white;
	}

	section{
		width: 100% !important;
	}

	#firstTitle{
		margin-top: 15px !important;
	}
}



@media ( max-width : 750px) {
	ul{
		font-size: 18px !important;
	}

	p{
		font-size: 18px;
	}

	.Footer{
		width: 100% !important;
		padding: 35px 35px 45px 35px !important;
	}
	.Footer br{
		display: none;
	}
	header {
		width: 100%;
	}
	#titulo_header {
  margin-top: 15px;
		font-size: 24px;
	}
	#legal-content-textos {
		width: 100%;
		  margin-top: -12px;
	}
	#img1 {
		width: 100%;
		height: 320px;
		  background-size: 100% 100%;
		
	}
	#img2 {
		width: 100%;
		height: 320px;
		  background-size: 100% 100%;
		
	}
	#img3 {
		width: 100%;
		height: 320px;
		  background-size: 100% 100%;
		
	}
	#legal-content-imagenes {
		width: 100%;
		margin-right: 0;
		margin-top: 20px;
	}
	#legal-content {
		padding: 0px 35px 40px 35px;
	}
	#separador_header {
		/*display: none;*/
	}
}

@media ( max-width : 500px) {
	#img1 {
	height: 50vw;
	}
	
	#img2 {
	height: 50vw;
	}
	
	#img3 {
	height: 50vw;
	}
	
}

@media ( max-width : 500px) {
	#img1 {
	height: 50vw;
	}
	
	#img2 {
	height: 50vw;
	}
	
	#img3 {
	height: 50vw;
	}
	
}

@media ( max-width : 370px) {
	#img1 {
	height: 50vw;
	}
	
	#img2 {
	height: 50vw;
	}
	
	#img3 {
	height: 50vw;
	}
	
}
</style>
</head>





<body style="">
	<?php echo $this->element('menu_negro')?>

	<header>
		<div>
			<div id="logo_legal" style="cursor:pointer;">
				<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">
			</div>
			<div id="titulo_header" style="color: #333333; font-size:24px; margin-top:16px;">About Us</div>
		</div>
		<div id="separador_header"></div>
	</header>

	<section id="legal-content">
		<div style="" id="legal-content-textos">
			<div style="">
				<h3 id="firstTitle" style="text-align: left; font-size: 30px; margin-top:-5px;">
					Your loyal career companion, no matter where your journey takes you…
				</h3><br>
				<h3 style="font-size: 20px">Our purpose and vision</h3>
				<p>
					At MENTOR. we empower individuals to develop high quality lives. We do this by offering a world class mentoring service for successful careers, and a personal development program to help you make assertive career-related decisions. We focus on careers because what you do, how good you are at it, and how much you enjoy it has a significant impact on your quality of life. Evidence shows a strong correlation between job satisfaction and satisfaction with life in general<sup>i</sup>. Since work plays a substantial role in life, this correlation makes sense—people who have jobs they like are more likely to lead happy lives.<br><br>
				</p>
				<h3 style="font-size: 20px">The problem</h3>
				<p>
					<a href="http://www.gallup.com/services/170945/world-poll.aspx" target="_blank">Gallup’s World Poll</a> surveyed adults in more than 160 countries with results showing that over 50% of the adults in the world rate the desire for a fulfilling job more highly than anything else in their lives<sup>ii</sup>. At the same time, another poll shows that 70% of employees in the US are unengaged with their jobs<sup>iii</sup>. So although most people agree they’d like a fulfilling career, a vast number of people in the US are missing out on one. This disconnect is, in part, caused by outdated and biased advice, or sometimes the lack of advice, given to young people when they are setting out to determine their career and future.<br><br>
				</p>
				<h3 style="font-size: 20px">Our solution</h3>
				<p>
					We believe much can be done to guide younger people in how to make better career decisions; decisions that will ultimately lead to fulfillment. <br><br>
					The MENTOR. solution is composed of three stages:
				</p>

				<ul class="ul" id="lista">
					<li>• Identify your biggest impediments in the career-related decision-making process with <a href="http://joinmentor.co/career/assessment-career-decision-impediments" target="_blank">this assessment</a></li>
					<li>• Enroll in the <a href="http://joinmentor.co" target="_blank">Career Decision-Making Program</a>. Taking a holistic approach, this program will help narrow down relevant career options, personalized for you</li>
					<li>• Connect with experienced professionals who will mentor you on how to boost your career development<sup>iv</sup></li>
				</ul>
				<br>
				<h3 style="font-size: 20px">Our approach</h3>
				<p>
					<b>Evidence based:</b> We only consider factors that have been clearly demonstrated by scientific research to correlate with job satisfaction and career success—we share this research with you as you work through the program. <br><br>
					<b>Holistic minded:</b> We know career-related decision-making is complex. Finding the right career from the thousands that exist is overwhelming, especially when you are only just starting to find yourself. This is why we propose tackling such important decisions from a number of different angles. With MENTOR. you will:
				</p>
				<ul class="ul">
					<li>• Learn about your work values, personal preferences, vocational interests and skills</li>
					<li>• Find your life purpose and create a personal career vision that supports it</li>
					<li>• Apply formal mental models that have been proven to give more reliable results when making decisions</li>
					<li>• Explore and try a multitude of career paths </li>
					<li>• Create a plan for your journey</li>
				</ul><br>
				<p>
					<b>Technological:</b> We’ve built a state of the art algorithm to provide you with the most relevant career path recommendations based on your personal profile. Although this is an excellent tool for narrowing down the vast number of career options available, we believe that even the best algorithm is just one component in your career decision-making tool kit. In accordance with our holistic philosophy, the best results come from a multi-faceted approach. <br><br>
					<b>Quality focused:</b> We only use and promote information from reliable sources that have been verified and tested. Knowing what an important factor it is for overall quality of life, we consider advising people on their career options to be a great responsibility and take it extremely seriously.<br><br>
					With so many variables, possibilities and choices to be made, the journey towards a fulfilling career is as unique as your fingerprint. And while there are no detailed, step-by-step directions to success, there is a map, and you can count on MENTOR. to be by your side, helping you read it.<br><br><br>
					<span>
					  <sup>i</sup> Tait, Padgett, and Baldwin, 1989, <a href="http://psycnet.apa.org/index.cfm?fa=buy.optionToBuy&id=1989-34968-001" target="_blank">Job and life satisfaction: A reevaluation of the strength of the relationship and gender effects as a function of the date of the study</a>, Journal of Applied Psychology, Vol 74(3), Jun 1989, 502-507<br>
					  <sup>ii</sup> <a href="http://www.gallup.com/businessjournal/183527/everyone-world-wants-good-job.aspx?utm_source=alert&utm_medium=email&utm_content=morelink&utm_campaign=syndication" target="_blank">What everybody in the world wants: a good job</a><br>
					  <sup>iii</sup> Gallup 2013 <a href="http://www.gallup.com/services/178514/state-american-workplace.aspx" target="_blank">State of the American Workplace study</a><br>
					  <sup>iv</sup> Career Benefits Associated With Mentoring for Protégés: A Meta-Analysis. Journal of Applied Psychology 2004, Vol. 89, No. 1, 127–136.
					</span>
				</p>
			</div>
		</div>
		<div id="legal-content-imagenes">
			<div id="img1"></div>
			<div id="img2"></div>
			<div id="img3"></div>
		</div>
	</section>


	
	<?php echo $this->element('footer_uno')?>

	<style type="text/css">

		.Footer {
			  margin-top: 60px !important;
		}

		.Footer > div{
			  width: 1110px !important;
		}

		@media ( max-width : 750px) {
			.Footer > div{
			  width: 100% !important;
			}
			#legal-content-imagenes {
	  			float: right !important;
	  		}
	  	}
	  	
	</style>

	<script type="text/javascript">
		$('#logo_legal').click(function(){
			if( "<?php echo $this->UserAuth->getUserId();?>" != ""){
				window.location = "<?php echo $this->webroot; ?>"+'career_program/dashboard';
			}
			else{
				window.location = "<?php echo $this->webroot; ?>";
			}
		})
	</script>

</body>
</html>
