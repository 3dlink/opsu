var SELECCIONADOS = 0;
var datos_viejos = [];
$(document).keypress(function(event) {
   
    var arr = [0,13,49,50,51,52,53,54,55,56,57];
    if($.inArray(event.which, arr)){
    if(event.which == 13){
        var bt = $('.visible  button').attr("id");
    }
    else {
        var bt = $('.visible span button').attr("id"); 
    }
       if (typeof(bt) != "undefined")
       var ArrayBTN= bt.split('_');


        switch(event.which) {
        case 13:
            $('#submintBtn').click();
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
        if(SELECCIONADOS == 22){
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            $("#submintBtn").prop("disabled" , false);
        }
        else{
            $( "#mentr-footer-submit" ).css( "opacity", 0.8 );
            $("#submintBtn").prop("disabled" , true);

        }
    }
    
    $('.question').each(function(index) {
      if (($(this).offset().top-st) >= 0 && ($(this).offset().top-st) <= 350) {
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
	arrayQuiz['result']={'time_management_360':0,'adaptability_360':0,'communication_360':0,'problem_solving_360':0,'teamwork_360':0,'ledership_360':0,'tech_savvy_360':0,'persuasive_360':0,'active_listening':0,'oral_communication':0,'written_communication':0}; 
	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		

    this.init=function(){

    	for(var i=1; i <= 22; i++) {
    		arrayContestadas[i]=false;
    	}


    	quiz_incompleto(arrayQuiz,arrayContestadas,4,22);

	    arrayMatch[0]={ 1:0, 2:1, 3:2, 4:3, 5:4 }

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
			
			if(SELECCIONADOS == 22){
		      $( "#mentr-footer-submit" ).css( "opacity", 1);
		      $("#submintBtn").prop("disabled" , false);
					$('#mentr-progres-indicator').css('width',100+'%');
	       	$('.procentaje').html('22 of 22 completed');
		    }

				arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	
				$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');
				scrollIn=parseFloat(ArrayBTN[1])+1;
				arrayContestadas[ArrayBTN[1]]=true;



				guardar_a_medias(4,ArrayBTN[1],ArrayBTN[2]);


				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}else if(parseFloat(scrollIn) > 22){
					scrollIn=22;
				}		



				if(ArrayBTN[1] == 21){
          $('#question21').removeClass('visible');
					$('#question22').addClass('visible');
					$('#question21').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#question22').css({'opacity': 1 , 'pointer-events': 'none'});
        }

				if(ArrayBTN[1] == 22){
					$('#question22').removeClass('visible');
					$('#question22').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$('#submintBtn').attr('disabled', false);            		
					$('#submintBtn').addClass('visible'); 
					$('body').scrollTo('#mentr-footer-submit',900,{offset:-250});          
					return false;
				}

				quiz.scrollIn(scrollIn);

			var porcentaje=0;
			for(x in arrayContestadas){
				if(arrayContestadas[x]){
					porcentaje++;
				}
			}
			porcentaje=parseInt((SELECCIONADOS/22)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(SELECCIONADOS+' of 22 completed');
			// porcentaje2=parseInt((porcentaje/22)*100);
			// $('#mentr-progres-indicator').css('width',porcentaje2+'%');
			// $('.procentaje').html(porcentaje+' de completed');
		});
		
		
		
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});
	};
	this.scrollIn = function(scrollIn){
		if($(window).height() < 514)
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-110});
		else
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	};
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) > 22){
			scrollIn=22;
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
  }else{
  	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1.png');
		$('#btnUp').removeClass('no_visible');
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
		if(contador == 22){		
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 1:
						resultados['result']['communication_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['active_listening']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 2:
						resultados['result']['communication_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['oral_communication']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 3:
						resultados['result']['communication_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['written_communication']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['problem_solving_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 5:
						resultados['result']['problem_solving_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 6:
						resultados['result']['problem_solving_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['teamwork_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 8:
						resultados['result']['teamwork_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 9:
						resultados['result']['teamwork_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['ledership_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 11:
						resultados['result']['ledership_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['ledership_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['adaptability_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['adaptability_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['adaptability_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['time_management_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['time_management_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['time_management_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 19:
						resultados['result']['tech_savvy_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 20:
						resultados['result']['persuasive_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 21:
						resultados['result']['persuasive_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 22:
						resultados['result']['persuasive_360']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
				}
			}
		
			resultados['result']['time_management_360']*=8.33;
			resultados['result']['adaptability_360']*=8.33;
			resultados['result']['communication_360']*=8.33;
			resultados['result']['problem_solving_360']*=8.33;
			resultados['result']['teamwork_360']*=8.33;
			resultados['result']['ledership_360']*=8.33;
			resultados['result']['tech_savvy_360']*=25;
			switch(resultados['result']['tech_savvy_360']){
				case 0:
					resultados['result']['tech_savvy_360'] = 10;
					break;
				case 1:
					resultados['result']['tech_savvy_360'] = 25;
					break;
				case 2:
					resultados['result']['tech_savvy_360'] = 50;
					break;
				case 3:
					resultados['result']['tech_savvy_360'] = 75;
					break;
				case 4:
					resultados['result']['tech_savvy_360'] = 90;
					break;
			}
			resultados['result']['persuasive_360']*=8.33;
			resultados['result']['active_listening']*=25;
			resultados['result']['oral_communication']*=25;
			resultados['result']['written_communication']*=25;

			console.log(resultados);
			$.post(WEBROOT+'assessments/addFa',{dataQuest:resultados},function(data){
				if(data){
					// mixpanel.identify(ID_USUARIO);
					// mixpanel.track("submit button assessment member 360");
					var track = "submit button assessment member 360";
					$.ajax({
						url: WEBROOT+'dashboards/Mixpanelajax/'+track,
						type: 'post',
						success: function(){
							setTimeout(function(){
								window.location = WEBROOT+"career_program/360_invites"; //Dashboards/request_feedback
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