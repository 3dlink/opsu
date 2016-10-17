<style type="text/css">
	@media (min-width: 751px) {
	.quiz-result-cursos {
	width: 370px;
	min-height: 120px;
	padding: 20px 0.2em;
	border-bottom: 2px solid #e6e6e6;
	}
	.quiz-result-cursos #quiz-result-img-content {
	width: 370px;
	min-height: 209px;
	position: relative;
	color: #fff;
	background-image: url(/vision_mentr/webroot/files/img1425312315M5X.jpeg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	}
	.quiz-result-cursos #quiz-result-img-content #tittle {
	position: absolute;
	bottom: 0;
	padding: 14px 0 0 14px;	
	background-color: rgba(0,0,0,0.3);
	width: 100%;
	height: 60px;
	font-size: 24px;
	font-weight: 300;
	}
	.tag {
	position: absolute;  
	width: 170px;
	 	height: 30px;
	text-align: center;
	  padding-top: 3.5px;
	background-color: #33b5e5;
	border-radius: 7px;
	right: 10px;
	font-size: 16px;
	top: 10px;
	}
	}

	/* mobile */
	@media (max-width: 750px) {
	.quiz-result-cursos {
	width: 100%;
	min-height: 120px;
	padding: 20px 0.2em;
	border-top: solid 2px #e6e6e6;
	}
	.quiz-result-cursos #quiz-result-img-content {
	width: 100%;
	min-height: 209px;
	position: relative;
	color: #fff;
	background-image: url(/vision_mentr/webroot/files/img1425312315M5X.jpeg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	height: 49vw;
	}
	.quiz-result-cursos #quiz-result-img-content #tittle {
	position: absolute;
	bottom: 0;
	padding: 3% 0 0 4%;
	background-color: rgba(0,0,0,0.3);
	width: 100%;
	height: 28%;
	font-size: 6vw;
	font-weight: 300;
	}
	.tag {
	position: absolute;  
	  width: 46%;
	  height: 14%;
	text-align: center;
	  padding-top: 0.5vh;
	background-color: #33b5e5;
	border-radius: 7px;
	right: 3%;
	font-size: 4vw;
	top: 3%;
	}
	}
</style>
<section id="article_articles">
	<label class="titulo titulo_izquierda" style="margin-bottom: 1px;"><b><?php echo __('Related articles',true); ?></b></label>
</section>
<script>

$(document).ready(function(){
	var logge = "<?php echo $this->UserAuth->isLogged(); ?>";
	$.post(WEBROOT+'articles/getArticles/'+ARTICLES['TAG']+'/'+ARTICLES['LIMIT']+'/'+ARTICLES['CATEGORY']+'/'+ARTICLES['ID'],{},function(data){
		if(data){
			for(x in data){

				if(logge){
					if(data[x]['Category']['name'] == "Big Picture"){
						var cat = "big_picture"; 
					}
					if(data[x]['Category']['name'] == "Self knowledge"){
						var cat = "self_knowledge"; 
					}
					if(data[x]['Category']['name'] == "How to choose"){ 
						var cat = "how_to_choose"; 
					}
					if(data[x]['Category']['name'] == "Job hunting"){ 
						var cat = "job_hunting"; 
					}

				
					var url = WEBROOT+'career_program/resources/'+data[x]['Article']['id']+'/'+cat;
				}
				else{
					if(data[x]['Category']['name'] == "Big Picture"){
						var cat = "big-picture"; 
					}
					if(data[x]['Category']['name'] == "Self knowledge"){
						var cat = "self-knowledge"; 
					}
					if(data[x]['Category']['name'] == "How to choose"){ 
						var cat = "how-to-choose"; 
					}
					if(data[x]['Category']['name'] == "Job hunting"){ 
						var cat = "job-hunting"; 
					}

					var url = WEBROOT+'career/'+cat+'/'+data[x]['Article']['url'];
				}
				var imagen=WEBROOT+'webroot/files/'+data[x]['Article']['main_img'];
						var str = data[x]['Article']['title'];
						data[x]['Article']['title'] = str.substr(0, 30);
			if(x == data.length-1){
				$('#article_articles').append(
					'<div class="quiz-result-cursos" style="border-bottom:none !important;">'+
						'<div id="quiz-result-img-content" style="background-image: url('+imagen+');">'+
							'<div class="tag" style="background-color: '+data[x]['Category']['color']+'">'+data[x]['Category']['name']+'</div>'+
							'<div id="tittle">'+
								'<a style="color: white; text-decoration: none;" href="'+url+'">'+data[x]['Article']['title']+'</a>'+
							'</div>'+
						'</div>'+
					'</div>'
				);
			}else{
				$('#article_articles').append(
					'<div class="quiz-result-cursos">'+
						'<div id="quiz-result-img-content" style="background-image: url('+imagen+');">'+
							'<div class="tag" style="background-color: '+data[x]['Category']['color']+'">'+data[x]['Category']['name']+'</div>'+
							'<div style="cursor:pointer;" id="tittle">'+
								'<a style="color: white; text-decoration: none;" href="'+url+'">'+data[x]['Article']['title']+'</a>'+
							'</div>'+
						'</div>'+
					'</div>'
				);
			}
			}
			$('#article_articles').append('<div style="clear:both;"></div>');
		}
		
	},'json');
});
</script>