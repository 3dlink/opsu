<?php
	$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>

<html>
<head>
	<meta charset="UTF-8">
	    <title>Your Website Title</title>
    <!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="<?php echo $url_actual;?>" />
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo $article['Article']['title'];?>" />
    <meta property="og:description"   content="<?php $article['Article']['text'];?>" />
    <meta property="og:image"         content="<?php echo 'https://joinmentor.co/mentortest/files/'.$article['Article']['main_img']; ?>" />

	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<?php 
		echo $this->Html->css('../library/bootstrap/css/bootstrap.css');
		echo $this->Html->css('mentr-backend');
	 	echo $this->Html->css('resources_view.css');
	 	echo $this->Html->script('jquery-1.11.2.js');

	?>
	
	<?php echo $this->Html->script('jquery-1.11.2.js');?>
		<?php	echo $this->Html->script('lib/bootstrap.min'); ?> 
			<?php 	echo $this->Html->script('googleAnalytics.js'); ?>

</head>
<script>

$(document).ready(function(){

	var cat='';
var pathname = window.location.pathname; // Returns path only
pathname = pathname.split('/');

$('title').html(pathname[4]);


if(pathname[3] == 'big-picture' || pathname[2] == 'big-picture' ){
	$('.LiBP').css('display', 'none');
	$('#labelMovil2').html('Big picture');
	cat = 'Big Picture';
}
if(pathname[3] == 'self-knowledge' || pathname[2] == 'self-knowledge' ){
	$('.LiSK').css('display', 'none');
	$('#labelMovil2').html('Self-knowledge');
	cat = 'Self-knowledge';
}
if(pathname[3] == 'how-to-choose' || pathname[2] == 'how-to-choose' ){
  $('.LiHTC').css('display', 'none');
	$('#labelMovil2').html('How to choose');
	cat = 'How to choose';
}
if(pathname[3] == 'job-hunting' || pathname[2] == 'job-hunting' ){
	$('.LiJH').css('display', 'none');
	$('#labelMovil2').html('Job hunting');
	cat = 'Job hunting';
}
	$('.showMenu').click(function(){
		if( $('.showMenu img').hasClass('sMimage1') ){
			$('.showMenu img').removeClass('sMimage1');
			$('.showMenu img').addClass('sMimage2');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/up-menu.png';?>");
			$('.downMenu').css('display', 'block');
		}
		else{
			$('.showMenu img').removeClass('sMimage2');
			$('.showMenu img').addClass('sMimage1');
			$('.showMenu img').attr('src' , "<?php echo $this->webroot.'img/down-menu.png';?>");
			$('.downMenu').css('display', 'none');
		}
	})


	ARTICLES = {
	CATEGORY: cat,
	ID: <?php echo $article['Article']['id']; ?>,
	LIMIT: 5,
	TAG: 'null'
}

})
</script>

<style>

#container-text a{
	color: black !important;
	text-decoration: underline !important;
	cursor: pointer;
}

</style>

<?php
	$url_actual = "http://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
?>
		<?php echo $this->element('menu_negro');?>

<body style="  margin: 0 auto;">

<style type="text/css">

#legal-content {
     padding: 0px 0px 60px 30px;
 }
 #menuUserDashboard2 {
 	padding-bottom: 10px;
 	height: inherit;
 }
</style>

	<header style="  padding: 20px 30px 0px 30px">	
		<div>
			<div id="logo_legal" style="cursor:pointer;">
				<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">			
			</div>
			<div style="padding-top: 15px;" id="titulo_header">Career Guidance</div>
		</div>
		<div id="separador_header"></div>
	</header>

	<section id="menuUserDashboard2">
		<div class="option <?php echo $big_picture;?>" data-class="big_picture">
			Big Picture
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $self_knowledge;?>" data-class="self_knowledge">
			Self-knowledge
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $how_to_choose;?>" data-class="how_to_choose">
			How to Choose
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $job_hunting;?>" data-class="job_hunting">
			Job Hunting
			<div></div>
		</div>
	</section>

	<section id="menu-content-mobile">
		<ul>
			<li>
				<div id="labelMovil" style="background-color:#F7F7F7; font-size: 20px; font-weight: 500; padding: 16px 5px 16px 5px; margin-left:30px;margin-right:30px;" class="visible-xs"><span style="font-weight: bold;  color: #51284f;" id="labelMovil2"></span><span class="showMenu" style="float:right;"> <img class="sMimage1" style="width: 25px; height: 15px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"></span>
				</div>
				<ul class="downMenu" style="display: none;font-weight: bold;">
					<li class="LiBP">							
						<a class="MD1" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career/big-picture'?>">
							Big Picture
						</a>
					</li>
					<li class="LiSK">
						<a class="MD2" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career/self-knowledge'?>">
							Self-knowledge
						</a>
					</li>
					<li class="LiHTC">
						<a class="MD3" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career/how-to-choose'?>">
							How to choose
						</a>
					</li>
					<li class="LiJH">
						<a class="MD3" style="border-top: 1px solid #c8c0c8;" href="<?php echo $this->webroot.'career/job-hunting'?>">
							Job hunting
						</a>
					</li>
				</ul>
			</li>
		</ul>
	</section>

	<section id="contenedor" style="">

		<section id="legal-content">	

			<div id="header" style="  width: 100%; height: 340px; background-image:url(<?php echo $this->webroot.'files/'.$article['Article']['main_img'] ;?>)">
				<div class="title" style="  display: table;">
					<p style=" display: table-cell; vertical-align: middle; font-size: 24px; font-weight: bold;"><?php echo __($article['Article']['title'],true);?></p>
				</div>
			</div>

			<div id="container-text">
				<?php echo $article['Article']['text'];?>

				<div style="margin-top: 35px;">
					
					<button onclick="window.location.href = WEBROOT;" id="btn_got_it" class="mentr-ok-btn-large" style="float: left;" type="button">Enroll in Mentor´s Career Decision-Making Program</button>

<!-- <div id="" class="fb-share-button" data-title="HOLAA" data-href="http://joinmentor.co/mentortest/career/big-picture/-A-Successful-Career-Starts-With-A-Clear-Vision" data-layout="button"></div> -->
					<a href="https://www.facebook.com/dialog/share?app_id=815805455200370&scrape=true&display=wap&href=<?php echo $url_actual;?>&redirect_uri=<?php echo $url_actual; ?>">
					<button id="share_button" class="mentr-ok-btn-facebook" type="button" style="  float: right; width: 120px; height: 40px;">
						<img id="fb_normal" class="img_red" src="<?php echo $this->webroot;?>img/FB.png"> <img id="fb_hover" class="img_red" style="display:none;" src="<?php echo $this->webroot;?>img/FBhover.png">
						<span>
							SHARE
						</span>
					</button>
					</a>
					<!-- <a href = "https://twitter.com/intent/tweet?original_referer=<?php echo $this->webroot;?>&amp;tw_p=tweetbutton&amp;url=<?php echo $url_actual;?>&amp;text=Good reading: <?php echo __($article['Article']['title'],true);?> from MENTOR." id="twitter" class="mentr-ok-btn-tweet" type="button" style="width: 120px; height: 40px;"><img id="tw_normal" class="img_red twitter-share-button" src="<?php echo $this->webroot;?>img/TW.png"><img id="tw_hover" class="img_red" style="display:none;" src="<?php echo $this->webroot;?>img/TWhover.png"><span>TWEET</span></a>
				<a href="https://twitter.com/intent/tweet?original_referer=<?php echo $this->webroot;?>&amp;tw_p=tweetbutton&amp;url=http://www.mentr.com&amp;text=Good reading: <?php echo __($article['Article']['title'],true);?> from MENTOR."><span class="ico">compartir en Twitter</span></a> -->
				</div>
			</div>

		</section>

			<?php echo $this->element('article_list');?>
	</section>

<?php echo $this->element('footer_uno')?>

<!--

	<footer class="Footer">
		<div style="border-bottom: 2px solid #e4bec3; padding-bottom: 20px;">
			<img style="width: 140px; height: 25px;"
				src="<?php echo $this->webroot.'img/logo3.png';?>">
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 35%; padding-top: 25px;">
			<div class="footer_hola">Mentor.</div>
			<div class="footer_chao"><a href="<?php echo $this->webroot;?>aboutus">About MENTOR.</a></div>
			<div class="footer_chao">Become a Mentor</div>
			<div><a href="<?php echo $this->webroot;?>contactus">Feedback, Ideas & Help</a></div>
		</div>
		<div class="withBorder"
			style="color: #d9d9d9; float: left; width: 30%; padding-top: 25px;">
			<div>Copyright &copy; 2015 Joinmentor.com</div>
			<div>
				<a href="<?php echo $this->webroot;?>/start/legalPage">Privacy
					Policy</a>
			</div>
			<div>
				<a href="<?php echo $this->webroot;?>/start/legalPage">Terms of Use</a>
			</div>
		</div>
		<div
			style="color: #979797; width: 30%; float: right; line-height: 1.2; padding-top: 25px;">
			<div>
				MENTOR. does not provide medical advice,<br /> psychiatric diagnosis
				or treatment.<br /> Read more <a
					href="<?php echo $this->webroot;?>/start/legalPage">here</a>.
			</div>
		</div>
	</footer>
-->


<style type="text/css">

	#articles_section{
		border-top: solid 2px #e6e6e6;
	}

	#article_articles{
		float: left;
		margin-left: 30px;
		border-top: 2px solid #e6e6e6;
	}

	.Footer > div{
		width: 1110px !important;
		/*padding: 35px 430px 45px 385px !important;*/
	}

	@media ( max-width: 750px){
		.Footer > div{
			width: 100% !important;
		}
	}
			

</style>

<script>


!function(d,s,id){
var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
	
	$('#facebook').hover(function(){
		$('#fb_normal').css('display','none');
		$('#fb_hover').css('display','inline');
	},function(){
		$('#fb_normal').css('display','inline');
		$('#fb_hover').css('display','none');
	});

	$('#twitter').hover(function(){
		$('#tw_normal').css('display','none');
		$('#tw_hover').css('display','inline');
	},function(){
		$('#tw_normal').css('display','inline');
		$('#tw_hover').css('display','none');
	});

	$(document).ready(function(){
		if ($('.paging').children().length == 2){
			$('.paging').html('');
		}
	})

	$('.option').click(function(){
		if($(this).hasClass('searchResources')){

		}
		else{
			$('.cont').css('display', 'none');
			$('.option').removeClass('active');
			$(this).addClass('active');
			var cl = $(this).data('class');
			$('.'+cl).css('display', 'block');
			window.location = WEBROOT+"start/careerGuidance/"+cl;
		}

	});

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
