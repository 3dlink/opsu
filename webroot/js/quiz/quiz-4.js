var SELECCIONADOS = 0;
var lim_inf = 50;
var off = 100;
if(($(window).width() < 750)){
	lim_inf = -150;
	off = 10;
}

$(window).scroll(function() {

    var st = $(this).scrollTop() + 1;
    if(($(document).height() - $(window).height()) ==  parseInt(st)){
        if(SELECCIONADOS == 36){
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

       if (($(this).offset().top-st) > lim_inf && ($(this).offset().top-st) < 450) {
       	// $('.question').css('opacity', '0.3');
            $(this).css({
                'opacity': (1)
                , 'pointer-events': 'all'
            });
            $(this).addClass('visible');
            $(this).find('.mentr-ok-btn-large').css('opacity', 1);
            
        }else {
            $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
            $(this).removeClass('visible');
           
        }
    });
});
quiz= function(){
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	arrayQuiz['result']={'wv_completeness':0,'wv_autonomy':0,'wv_status':0,'wv_relatedness':0,'wv_impact':0,'wv_pay':0,'wv_job_security':0,'wv_variety':0,'wv_balance':0}; 
	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		

  this.init=function(){
    	for(var i=1; i <= 36; i++) {
    		arrayContestadas[i]=false;
    	}
    	quiz_incompleto(arrayQuiz,arrayContestadas,6,36);
	    arrayMatch[0]={1:1,2:1}

		$('.mentr-comparation-btn').on('click',function(){
			var ArrayBTN= this.id.split('_');
			$('#btn_'+ArrayBTN[1]+'_1').removeClass('elegido');
			$('#btn_'+ArrayBTN[1]+'_1').html('Choose');
			$('#btn_'+ArrayBTN[1]+'_2').removeClass('elegido');
			$('#btn_'+ArrayBTN[1]+'_2').html('Choose');

			$('#'+this.id).addClass('elegido');
			$('#'+this.id).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
			
			SELECCIONADOS = 0;
			$('.elegido').each(function(index) {
          SELECCIONADOS++; 
      });

			if(SELECCIONADOS == 36){
       	$( "#mentr-footer-submit" ).css( "opacity", 1);
       	$("#submintBtn").prop("disabled" , false);
				$('#mentr-progres-indicator').css('width','100%');
				$('.procentaje').html('100%');
	    }

				arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	
				scrollIn=parseFloat(ArrayBTN[1])+1;
				arrayContestadas[ArrayBTN[1]]=true;

				guardar_a_medias(6,ArrayBTN[1],ArrayBTN[2]);

				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}else if(parseFloat(scrollIn) > 36){
					scrollIn=36;
				}		



				if(ArrayBTN[1] == 35){
          $('#question35').removeClass('visible');
					$('#question36').addClass('visible');
					$('#question35').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#question36').css({'opacity': 1 , 'pointer-events': 'none'});
        }

				if(ArrayBTN[1] == 36){
					$('#question36').removeClass('visible');
					$('#question36').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#submintBtn').attr('disabled', false);            		
					$('#submintBtn').addClass('visible');            		
					$('#submintBtn').focus();
					return false;
				}

				quiz.scrollIn(scrollIn);

			
		
			var porcentaje=0;
			for(x in arrayContestadas){
				if(arrayContestadas[x]){
					porcentaje++;
				}
			}
			porcentaje=parseInt((SELECCIONADOS/36)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(SELECCIONADOS+' of 36 completed');
		});
		
		
		
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});
		
	};
	this.scrollIn = function(scrollIn){
		if(scrollIn == 36){
			$('body').scrollTo('#mentr-footer-submit',900,{offset:-off-100});
		}else{
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-off-100});
		}
	};
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 36){
			scrollIn=37;

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
	quiz = new quiz();
	quiz.init();
	$('#submintBtn').click(function(){
		$('#submintBtn').attr('disabled', 'disabled');
		$('#submintBtn').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
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
		if(contador == 36){		
			

			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 1:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_autonomy']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 2:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_relatedness']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 3:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_pay']++;
						else
							resultados['result']['wv_impact']++;
						break;
					case 4:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_job_security']++;
						break;
					case 5:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_status']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 6:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_impact']++;
						else
							resultados['result']['wv_relatedness']++;
						break;
					case 7:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_pay']++;
						break;
					case 8:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_variety']++;
						break;
					case 9:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_status']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 10:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_impact']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 11:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_impact']++;
						break;
					case 12:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_job_security']++;
						break;
					case 13:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_relatedness']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 14:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_pay']++;
						else
							resultados['result']['wv_relatedness']++;
						break;
					case 15:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_pay']++;
						break;
					case 16:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_relatedness']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 17:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_pay']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 18:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_impact']++;
						break;
					case 19:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_impact']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 20:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_relatedness']++;
						break;
					case 21:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_pay']++;
						break;
					case 22:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_impact']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 23:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 24:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_impact']++;
						break;
					case 25:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_pay']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 26:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_relatedness']++;
						break;
					case 27:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_pay']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 28:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 29:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 30:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_relatedness']++;
						break;
					case 31:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_job_security']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 32:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_status']++;
						break;
					case 33:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 34:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_variety']++;
						else
							resultados['result']['wv_completeness']++;
						break;
					case 35:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_autonomy']++;
						break;
					case 36:
						if(resultados['quiz'][pregunta] == 1)
							resultados['result']['wv_balance']++;
						else
							resultados['result']['wv_completeness']++;
						break;
				}
			}
			resultados['result']['wv_completeness'] = (resultados['result']['wv_completeness'] * 100)/8;
			resultados['result']['wv_autonomy'] = (resultados['result']['wv_autonomy'] * 100)/8;
			resultados['result']['wv_status'] = (resultados['result']['wv_status'] * 100)/8;
			resultados['result']['wv_relatedness'] = (resultados['result']['wv_relatedness'] * 100)/8;
			resultados['result']['wv_impact'] = (resultados['result']['wv_impact'] * 100)/8;
			resultados['result']['wv_pay'] = (resultados['result']['wv_pay'] * 100)/8;
			resultados['result']['wv_job_security'] = (resultados['result']['wv_job_security'] * 100)/8;
			resultados['result']['wv_variety'] = (resultados['result']['wv_variety'] * 100)/8;
			resultados['result']['wv_balance'] = (resultados['result']['wv_balance'] * 100)/8;

			$('#btn_gif_save').css("display","block");
			$('#btn_gif_save').css('animation', "4s ease 2s normal none 1 running fadeout_save");
				setTimeout(function(){
					$.post(WEBROOT+'assessments/addWorkValues',{dataQuest:resultados},function(data){
						if(data){
							// mixpanel.identify(ID_USUARIO);
							// mixpanel.track("submit button job satisfaction assessment");

							var track = "submit button job satisfaction assessment";
							$.ajax({
								url: WEBROOT+'dashboards/Mixpanelajax/'+track,
								type: 'post',
								success: function(){
									setTimeout(function(){
										// window.location = WEBROOT+"career_program/results_wv";
									},2000);
								}
							})
						}
					},'json');
			},1000);


			
		}else{
			alert('Please complete the unanswered questions');
		}
	});
});
