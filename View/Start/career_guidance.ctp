<!DOCTYPE html>
<script type="text/javascript">WEBROOT='<?php echo $this->webroot; ?>';</script>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout; ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<?php 
		echo $this->Html->css('../library/bootstrap/css/bootstrap.css');
		echo $this->Html->css('mentr-backend');
	 	echo $this->Html->css('career_guidance.css');
	 	echo $this->Html->script('jquery-1.11.2.js');
	 	echo $this->Html->script('googleAnalytics.js');
	?>
</head>
<script>

$(document).ready(function(){

var pathname = window.location.pathname; // Returns path only
pathname = pathname.split('/');

if(pathname[3] == 'big-picture' || typeof pathname[3] == "undefined" || pathname[2] == 'big-picture'){
	$('.LiBP').css('display', 'none');
	$('#labelMovil2').html('Big picture');
}
if(pathname[3] == 'self-knowledge' || pathname[2] == 'self-knowledge'){
	$('.LiSK').css('display', 'none');
	$('#labelMovil2').html('Self-knowledge');
}
if(pathname[3] == 'how-to-choose' || pathname[2] == 'how-to-choose'){
  $('.LiHTC').css('display', 'none');
	$('#labelMovil2').html('How to choose');
}
if(pathname[3] == 'job-hunting' || pathname[2] == 'job-hunting'){
	$('.LiJH').css('display', 'none');
	$('#labelMovil2').html('Job hunting');
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

})




</script>

<style>

#menuUserDashboard2 {
	height: 40px;
	padding-top: 0px;
}

#menuUserDashboard2 .option {
  display: inline-block;
   margin: 0; 
  color: #5b5b5b;
}

@media(max-width: 950px){
	.Footer{
		width: 100% !important;
		padding: 35px 92px 45px 40px !important;
	}
}


@media(max-width: 750px){
	.Footer{
		width: 100% !important;
		padding: 35px 92px 45px 40px !important;
	}
}

</style>

		<?php echo $this->element('menu_negro');?>

<body style="  margin: 0 auto;">

 	<header style="">	
		<div>
			<div id="logo_legal" style="cursor:pointer;">
				<img src="<?php echo $this->webroot.'img/LogoMetr2.png';?>">			
			</div>
			<div style="color: #333333; font-size:24px; margin-top:15px;" id="titulo_header" >Career Guidance</div>
		</div>
		<div id="separador_header"></div>
	</header> 

<section id="menuUserDashboard2" style="">
	<div style="float: left;">
		<div class="option <?php echo $big_picture;?>" data-class="big-picture">
			Big Picture
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $self_knowledge;?>" data-class="self-knowledge">
			Self-knowledge
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $how_to_choose;?>" data-class="how-to-choose">
			How to Choose
			<div></div>
		</div>
		<div class="separator"></div>
		<div class="option <?php echo $job_hunting;?>" data-class="job-hunting">
			Job Hunting
			<div></div>
		</div>
	</div>
	
	<div style="float: right; width: 350px;" class="option searchResources">
		<input id="searchR" placeholder="Search" style="text-indent: 20px;height: 40px;   border: none;   width: 100%; background:#f7f7f7;">
		<div></div>
	</div>
</section>
<div style="	clear: both;"></div>
<section id="menu-content-mobile">
	<ul style="  margin-top: 1px;">
		<li>
			<div id="labelMovil" style="background-color:#F7F7F7; font-size: 20px; font-weight: 500; padding: 15px; padding-left: 0px; padding-right: 3px;margin-left:30px;margin-right:30px;" class="visible-xs"><span style="font-weight: bold;  color: #51284f;" id="labelMovil2"></span><span class="showMenu" style="float:right;"> <img class="sMimage1" style="width: 25px; height: 15px;" src="<?php echo $this->webroot.'img/down-menu.png';?>"></span>
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

<section id="buscar_mobile">
	<input type="" placeholder="Search" style="text-align:left;" id="search_mobile">
</section>

<section id="legal-content" style="  width: 1170px;">	
	 <?php foreach($articles as $article){
	 	// debug($article['Article']['url']);
	 	$parseTitle = str_replace(" ", "-", $article['Article']['url']);
	 	// debug($parseTitle);
	 		switch ($article['Category']['name']) {
				case 'Self-knowledge':
					$categoria = 'self-knowledge';
					break;
				case 'Big Picture':
					$categoria = 'big-picture';
					break;
				case 'How to choose':
					$categoria = 'how-to-choose';
					break;
				case 'Job hunting':
					$categoria = 'job-hunting';
					break;
			}

	 	?>
			<div class="course-min-content rigthC article" >
					<div id="course-min-img-content" onclick="window.location.href = WEBROOT+'career/<?php echo $categoria."/".$parseTitle;?>'; "  style="cursor:pointer;  background-size: cover;background-image: url('<?php echo $this->webroot.'files/'.$article['Article']['main_img'];?>');  height: 200px;">
					
					<div id="gradiante" cursor:pointer;>
					</div>
					<div id="course-name" style="font-size: 20px; text-align: left;" >
						<?php echo $article['Article']['title'];?>
					</div>
					
					
				</div>
				<div id="course-min-advance">				
					<div id="excerpt">
					
					<p style="padding-top: 10px; text-align: justify;">
						<?php echo $article['Article']['excerpt'];?>
						</p>
						
					</div>
					
					<div class="btn_article">
					<button id="btn_got_it" class="mentr-ok-btn-large" type="button" style="width: 170px; height: 50px;" onclick="window.location.href = WEBROOT+'career/<?php echo $categoria."/".$parseTitle;?>'; ">
						Read more
					</button>
				
					</div>
				</div>
			</div>
		<?php }?>	
</section>

<?php echo $this->element('footer_uno')?>

<style type="text/css">
	.Footer > div{ 
		width: 1110px !important;
	}
	@media ( max-width : 950px) {
		.Footer > div > div {
	  		width: 100% !important;
		}
	  	.Footer {
	    	padding: 35px 92px 45px 40px !important;
	  	}
	}

  	@media ( max-width : 750px) {
	
  		.Footer br{
			display: none;
		}

	  .Footer{
	    width: 100% !important;
	    padding:35px 35px 45px 35px !important;
	  }

	}

</style>


	<script>
$('#searchR').bind("enterKey",function(e){
   var val = $('#searchR').val();
   var pathname = window.location.pathname; // Returns path only
	pathname = pathname.split('/');
   var cl = pathname[3];

   	window.location = WEBROOT+"career/search/"+val;

});

$('#searchR').keyup(function(e){
    if(e.keyCode == 13)
    {
        $(this).trigger("enterKey");
    }
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
			window.location = WEBROOT+"career/"+cl;
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
