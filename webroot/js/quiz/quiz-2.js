var SELECCIONADOS = 0;
 //comentario para actualizar

$(document).keypress(function(event) {
   
    var arr = [0,13,49,50,51,52,53,54,55,56,57];
    if($.inArray(event.which, arr)){

	    if(event.which == 13){
	        var bt = $('.visible  button').attr("id");
	    }else{
	        var bt = $('.visible span button').attr("id"); 
	    }

      if (typeof(bt) != "undefined")
       	var ArrayBTN= bt.split('_');
     	else{
     		if(event.which == 13)
     			$('#submintBtn').click();
     	}
        switch(event.which) {
        case 13:
            //$('#btn_'+ArrayBTN[1]).focus();
      			$('#'+this.id).blur();
            $('#btn_'+ArrayBTN[1]).click();
            break;
        case 49:
            $('#btn_'+ArrayBTN[1]+'_1').click();
            break;
        case 50:
            $('#btn_'+ArrayBTN[1]+'_2').click();
            break;
        case 51:
            $('#btn_'+ArrayBTN[1]+'_3').click();
            break;
        case 52:     
            $('#btn_'+ArrayBTN[1]+'_4').click();
            break;
        case 53:
            $('#btn_'+ArrayBTN[1]+'_5').click();
            break;
        default: 
            break;
         }
        
    }
  
});
$(window).scroll(function() {

    var st = $(this).scrollTop() + 1;
    if(($(document).height() - $(window).height()) ==  parseInt(st)){
        if(SELECCIONADOS == 60){
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            $("#submintBtn").prop("disabled" , false);
            
        }
        else{
            $( "#mentr-footer-submit" ).css( "opacity", 0.8 );
            $("#submintBtn").prop("disabled" , true);

        }
    }
    
    // $('.question').css({'opacity': 0.3 , 'pointer-events': 'none'});
    // $('.question').removeClass('visible');

    $('.question').each(function(index) {

       if (($(this).offset().top-st) > 100 && ($(this).offset().top-st) < 450) {
            $(this).css({'opacity': (1), 'pointer-events': 'all'});
            $(this).addClass('visible');
            $(this).find('.mentr-ok-btn-large').css('opacity', 1);
            
        }else{
            $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
            $(this).removeClass('visible');
           
        }
    });

    if($('#question1').hasClass('visible')){
    	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
			$('#btnUp').addClass('no_visible');
    }else{
    	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1.png');
			$('#btnUp').removeClass('no_visible');
    }

});


quiz= function(){
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	arrayQuiz['result']={'realistic':0,'investigative':0,'artistic':0,'social':0,'enterprising':0,'conventional':0}; 
	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		
	/* Variables que guardan el valor de ONET  Comentado por Emmanuel*/
	var arrayOnet=new Object();
    this.init=function(){
    	for(var i=1; i <= 60; i++) {
    		arrayContestadas[i]=false;
    	}


    	quiz_incompleto(arrayQuiz,arrayContestadas,2,60);



	    arrayMatch[0]={ 1:0, 2:1, 3:2, 4:3, 5:4 }
		arrayOnet[0]={'Bv1q25':1,'Bv1q26':2,'Bv1q27':3,'Bv1q28':4,'Bv1q29':5,'Bv1q30':6,'Bv1q31':7,'Bv1q32':8,'Bv1q33':9,'Bv1q34':10,'Bv1q35':11,'Bv1q36':12,'Bv1q13':13,'Bv1q14':14,'Bv1q15':15,'Bv1q16':16,'Bv1q17':17,'Bv1q18':18,'Bv1q19':19,'Bv1q20':20,'Bv1q21':21,'Bv1q22':22,'Bv1q23':23,'Bv1q24':24,'Bv1q2':25,'Bv1q1 ':26,'Bv1q3':27,'Bv1q4':28,'Bv1q5':29,'Bv1q6':30,'Bv1q7':31,'Bv1q8':32,'Bv1q9':33,'Bv1q10':34,'Bv1q11':35,'Bv1q12':36,'Bv1q49':37,'Bv1q50':38,'Bv1q51':39,'Bv1q52':40,'Bv1q53':41,'Bv1q54':42,'Bv1q55':43,'Bv1q56':44,'Bv1q57':45,'Bv1q58':46,'Bv1q59':47,'Bv1q60':48,'Bv1q37':49,'Bv1q38':50,'Bv1q39':51,'Bv1q40':52,'Bv1q41':53,'Bv1q42':54,'Bv1q43':55,'Bv1q44':56,'Bv1q45':57,'Bv1q46':58,'Bv1q47':59,'Bv1q48':60}

		$('.mentr-ok-btn').on('click',function(){

      $('#'+this.id).blur();

			var ArrayBTN= this.id.split('_');

			$('#btn_'+ArrayBTN[1]+'_1').html('1');
			$('#btn_'+ArrayBTN[1]+'_2').html('2');
			$('#btn_'+ArrayBTN[1]+'_3').html('3');
			$('#btn_'+ArrayBTN[1]+'_4').html('4');
			$('#btn_'+ArrayBTN[1]+'_5').html('5');

			$('#'+this.id).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');

			$('#question'+ArrayBTN[1]).find('span.selected').attr('class','');
			
			SELECCIONADOS = 1;
			$('span.selected').each(function(index) {
	            SELECCIONADOS++; 
	        });
			

				arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	
				$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');
				scrollIn=parseFloat(ArrayBTN[1])+1;
				arrayContestadas[ArrayBTN[1]]=true;

				guardar_a_medias(2,ArrayBTN[1],ArrayBTN[2]);

				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}


			if(SELECCIONADOS == 60){
		       $( "#mentr-footer-submit" ).css( "opacity", 1);
		       $("#submintBtn").prop("disabled" , false);
		    }

				if(ArrayBTN[1] == 59){
          $('#question59').removeClass('visible');
					$('#question60').addClass('visible');
					$('#question59').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#question60').css({'opacity': 1 , 'pointer-events': 'none'});
        }

				if(ArrayBTN[1] == 60){
					$('#question60').removeClass('visible');
					$('#question60').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#submintBtn').attr('disabled', false);            		
					$('#submintBtn').addClass('visible');    
					$('body').scrollTo('#mentr-footer-submit',900,{offset:-250});        		
					// $('#submintBtn').focus();
					// quiz.scrollIn(scrollIn);
					//return false;
				}

				quiz.scrollIn(scrollIn);
			
			
			var porcentaje=0;

			for(x in arrayContestadas){
				if(arrayContestadas[x]){
					porcentaje++;
				}
			}
			
			porcentaje=parseInt((SELECCIONADOS/60)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(SELECCIONADOS+' of 60 completed');
			// porcentaje=parseInt((porcentaje/60)*100);
			// $('#mentr-progres-indicator').css('width',porcentaje+'%');
			// $('.procentaje').html(porcentaje+'%');
		});
		
		
		
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});
		$('#btn_2_1').on('mouseenter',function(){
			$('#C1M').css('display','none');
			$('#C1N').css('display','inline-block');
		});
		$('#btn_2_1').on('mouseleave',function(){
			$('#C1M').css('display','inline-block');
			$('#C1N').css('display','none');
		});
		$('#btn_2_2').on('mouseenter',function(){
			$('#C2M').css('display','none');
			$('#C2N').css('display','inline-block');
		});
		$('#btn_2_2').on('mouseleave',function(){
			$('#C2M').css('display','inline-block');
			$('#C2N').css('display','none');
		});
		$('#btn_2_3').on('mouseenter',function(){
			$('#C3M').css('display','none');
			$('#C3N').css('display','inline-block');
		});
		$('#btn_2_3').on('mouseleave',function(){
			$('#C3M').css('display','inline-block');
			$('#C3N').css('display','none');
		});
		
		$('#input_1').on('keyup',function(){
			var vacios=/^\s*$/;//campos vacios
			if(vacios.test($('#input_1').val())){
				$('#btn_1_content').css('display','none');
			}else{
				$('#btn_1_content').css('display','inline-block');
			}
		});
		$('#input_1').on('click',function(){
			$('#input_1').on('keyup',function(){
				var vacios=/^\s*$/;//campos vacios
				if(vacios.test($('#input_1').val())){
					$('#btn_1_content').css('display','none');
				}else{
					$('#btn_1_content').css('display','inline-block');
				}
			});
			$('#input_1').on('change',function(){
				var vacios=/^\s*$/;//campos vacios
				if(vacios.test($('#input_1').val())){
					$('#btn_1_content').css('display','none');
				}else{
					$('#btn_1_content').css('display','inline-block');
				}
			});
		});

	};


	this.scrollIn = function(scrollIn){
		$('#btn_a').blur();
		$('#btn_b').blur();
		$('#btn_c').blur();
	    
	  if(scrollIn== 46){
	        scrollIn='C';
	    }else if(scrollIn == 'C'){
	        scrollIn=46;
	    }
	  
	  if(scrollIn== 31){
	        scrollIn='B';
	    }else if(scrollIn == 'B'){
	        scrollIn=31;
	    }
	  
		if(scrollIn == 16){
			scrollIn='A';
		}else if(scrollIn == 'A'){
			scrollIn=16;
		}

		$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	};
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 60){
			scrollIn=60;
		}
		quiz.scrollIn(scrollIn);
	};
	this.Down = function(){
		scrollIn--;
		
		if(parseFloat(scrollIn) <= 0){
			scrollIn=1;
		}
		
		quiz.scrollIn(scrollIn);
	};
	
	
	
	
	this.GetQuiz = arrayQuiz;
	this.GetMatch = arrayMatch;
}
$(document).ready(function(){

	if($('#question1').hasClass('visible')){
  	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
		$('#btnUp').addClass('no_visible');
  }

	quiz = new quiz();
	quiz.init();
	$('#submintBtn').click(function(){
		//console.log(quiz.GetQuiz.length);
		resultados=quiz.GetQuiz;
		match=quiz.GetMatch;
		//console.log(resultados['quiz']);
		contador=0;
		for(pregunta in resultados['quiz']){
			contador++;
		}
		for(pregunta in resultados['user']){
			contador++;
		}
		if(contador == 60){		
			$('#submintBtn').attr('disabled', 'disabled');
			$('#submintBtn').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 1:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 2:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 3:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 5:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 6:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 8:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 9:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 11:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 19:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 20:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 21:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 22:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 23:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 24:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 25:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 26:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 27:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 28:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 29:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 30:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 31:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 32:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 33:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 34:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 35:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 36:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 37:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 38:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 39:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 40:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 41:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 42:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 43:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 44:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 45:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 46:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 47:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 48:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 49:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 50:
						resultados['result']['realistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 51:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 52:
						resultados['result']['investigative']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 53:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 54:
						resultados['result']['artistic']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 55:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 56:
						resultados['result']['social']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 57:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 58:
						resultados['result']['enterprising']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 59:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 60:
						resultados['result']['conventional']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
				}
			}
			console.log(resultados);

			$('#btn_gif_save').css("display","block");
			$('#btn_gif_save').css('animation', "4s ease 2s normal none 1 running fadeout_save");
					$.post(WEBROOT+'assessments/addVia',{dataQuest:resultados},function(data){
						if(data){
							// mixpanel.identify(ID_USUARIO);
							// mixpanel.track("submit button interests assessment");

							var track = "submit button interests assessment";
							$.ajax({
								url: WEBROOT+'dashboards/Mixpanelajax/'+track,
								type: 'post',
								success: function(){
									setTimeout(function(){
										window.location = WEBROOT+"career_program/results_interests";
									},2000);
								}
							})
						}
					},'json');
				
		}else{
			alert('Please complete the unanswered questions');
		}
	});
});



// function guardar_a_medias(ass, q, a){
// 	//guardar en bd el beta

// 	$.post(WEBROOT+'assessments/medio_assessment/'+ass+'/'+q+'/'+a,function(data){
// 		if(!data){
// 			alert('Error, Please try again.')
// 		}
// 	},'json');
// }

// function quiz_incompleto(arrayQuiz,arrayContestadas, ass, num){
//     	//VERIFICO SI YA EL USUARIO EMPEZO EL ASSESSMENT Y LO ACTUALIZO
    
//     	$.get(WEBROOT+'assessments/completado/'+ass, function(data) {
//     		//datos_viejos = data;
//     		if(data.length > 0){
//     			var scroll_nuevo = 0;

// 					for (var i = 1; i <= data.length; i++) {
// 						if(data[i-1] != 0){
// 							arrayQuiz['quiz'][i]=''+data[i-1]+'';
// 							$('#selected_'+(i)+'_'+data[i-1]).addClass('selected');
// 							$('#btn_'+(i)+'_'+data[i-1]).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
// 							arrayContestadas[(i)]=true;
// 						}else{
// 							if(scroll_nuevo == 0)
// 								scroll_nuevo = i;
// 						}
// 					};

// 					$('span.selected').each(function(index) {
// 		        SELECCIONADOS++; 
// 		      });

// 		      var porcentaje=0;
// 					for(x in arrayContestadas){
// 						if(arrayContestadas[x]){
// 							porcentaje++;
// 						}
// 					}
// 					porcentaje=parseInt((SELECCIONADOS/num)*100);
// 					$('#mentr-progres-indicator').css('width',porcentaje+'%');
// 					$('.procentaje').html(SELECCIONADOS+' of '+num+' completed');
					
// 					if(scroll_nuevo <num){
// 						$('body').scrollTo('#index_'+scroll_nuevo,2500,{offset:-250});
// 					}else{
// 						$('body').scrollTo('#submintBtn',2500,{offset:-250});
// 					}
//     		}

// 			},'json');
			
// }
