var SELECCIONADOS = 0;


$(document).keypress(function(event) {
   
    var arr = [0,13,49,50,51,52,53,54,55,56,57];
    if($.inArray(event.which, arr)){
    if(event.which == 13){
        var bt = $('.visible  button').attr("id");
    }
    else {
        var bt = $('.visible span button').attr("id"); 
    }
       
       var ArrayBTN= bt.split('_');
        switch(event.which) {
        case 13:
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
        case 54:
            $('#btn_'+ArrayBTN[1]+'_6').click();
            break;
        default: 
            break;
         }
        
    }
  
});
$(window).scroll(function() {

    var st = $(this).scrollTop() + 1;

    //boton de subir en el footer cuando esta en la primera pregunta debe desaparecer
    if(st < 1400){
    	$("#btnUp").css("opacity", 0.3 );
    	$("#btnUp").prop("disabled" , true);
    }else{
    	$("#btnUp").css("opacity", 1 );
    	$("#btnUp").prop("disabled" , false);
    }

    //console.log(st);
    if(($(document).height() - $(window).height()) ==  parseInt(st)){


        if(SELECCIONADOS == 26){
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
        console.log(this.id);
      }else {
      	if(!(this.id == 'question24' || this.id == 'question25' || this.id == 'question26')){
	        $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
	        $(this).removeClass('visible');
      	}
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
	no_avanzar = false;
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	arrayQuiz['result']={'time_management_360_invite':0,'adaptability_360_invite':0,'communication_360_invite':0,'problem_solving_360_invite':0,'teamwork_360_invite':0,'ledership_360_invite':0,'tech_savvy_360_invite':0,'persuasive_360_invite':0,'active_listening_invite':0,'oral_communication_invite':0,'written_communication_invite':0}; 
	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		

    this.init=function(){

    	for(var i=1; i <= 26; i++) {
    		arrayContestadas[i]=false;
    	}

	    arrayMatch[0]={ 1:0, 2:1, 3:2, 4:3, 5:4, 6:2 }

		$('.mentr-ok-btn').on('click',function(){
			var ArrayBTN= this.id.split('_');

				$('#btn_'+ArrayBTN[1]+'_1').html('1');
				$('#btn_'+ArrayBTN[1]+'_2').html('2');
				$('#btn_'+ArrayBTN[1]+'_3').html('3');
				$('#btn_'+ArrayBTN[1]+'_4').html('4');
				$('#btn_'+ArrayBTN[1]+'_5').html('5');
				$('#btn_'+ArrayBTN[1]+'_6').html('6');
				$('#btn_'+ArrayBTN[1]+'_1').removeClass('glyphicon glyphicon-ok');
				$('#btn_'+ArrayBTN[1]+'_2').removeClass('glyphicon glyphicon-ok');
				$('#btn_'+ArrayBTN[1]+'_3').removeClass('glyphicon glyphicon-ok');
				$('#btn_'+ArrayBTN[1]+'_4').removeClass('glyphicon glyphicon-ok');
				$('#btn_'+ArrayBTN[1]+'_5').removeClass('glyphicon glyphicon-ok');
				$('#btn_'+ArrayBTN[1]+'_6').removeClass('glyphicon glyphicon-ok');

				if(ArrayBTN[1] == '1'){
					$('#btn_'+ArrayBTN[1]+'_1').html('A');
					$('#btn_'+ArrayBTN[1]+'_2').html('B');
					$('#btn_'+ArrayBTN[1]+'_3').html('C');
					$('#btn_'+ArrayBTN[1]+'_4').html('D');
				}

				$('#'+this.id).addClass('glyphicon glyphicon-ok');
				$('#'+this.id).html('');

			$('#question'+ArrayBTN[1]).find('span.selected').attr('class','');
			
			SELECCIONADOS = 1;
			$('span.selected').each(function(index) {
	            SELECCIONADOS++; 
	        });
			$('span.selected_6').each(function(index) {
	            SELECCIONADOS++; 
	        });
			$('textarea.selected_enter').each(function(index) {
	            SELECCIONADOS++; 
	        });
			
			if(SELECCIONADOS == 26){
		      $( "#mentr-footer-submit" ).css( "opacity", 1);
		      $("#submintBtn").prop("disabled" , false);
					$('#mentr-progres-indicator').css('width',100+'%');
	       	$('.procentaje').html(100+'%');
		    }

    	console.log(SELECCIONADOS);

				arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	

				if(ArrayBTN[1] > 23){
					if($('#input_'+ArrayBTN[1]).val()==''){
						alert('Please complete this question');
						no_avanzar = true;
					}else{
						arrayQuiz['quiz'][ArrayBTN[1]]=$('#input_'+ArrayBTN[1]).val();	
						$('#input_'+ArrayBTN[1]).addClass('selected_enter');	
						$('#btn_'+ArrayBTN[1]).addClass('selected_enter_btn');
					}
				}else{
					if(ArrayBTN[2] == 6){
						$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected_6');
					}else{
						$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');
					}
				}

				if(!no_avanzar){
					scrollIn=parseFloat(ArrayBTN[1])+1;
					arrayContestadas[ArrayBTN[1]]=true;
					if(parseFloat(scrollIn) < 0){
						scrollIn=1;
					}else if(parseFloat(scrollIn) > 26){
						scrollIn=26;
					}		



					if(ArrayBTN[1] == 25){
	          $('#question25').removeClass('visible');
						$('#question26').addClass('visible');
						$('#question25').css({'opacity': 0.3 , 'pointer-events': 'none'});
						$('#question26').css({'opacity': 1 , 'pointer-events': 'none'});
	        }

					if(ArrayBTN[1] == 26){
						$('#question26').removeClass('visible');
						$('#question26').css({'opacity': 0.3 , 'pointer-events': 'none'});
						$('#submintBtn').attr('disabled', false);            		
						$('#submintBtn').addClass('visible');            		
						$('#submintBtn').focus();

						return false;
					}

					quiz.scrollIn(scrollIn);
				}

			if(!no_avanzar){
				var porcentaje=0;
				for(x in arrayContestadas){
					if(arrayContestadas[x]){
						porcentaje++;
					}
				}
				porcentaje=parseInt((porcentaje/26)*100);
				$('#mentr-progres-indicator').css('width',porcentaje+'%');
				$('.procentaje').html(porcentaje+'%  completed');
			}

		});
		
		
		
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});

	};
	this.scrollIn = function(scrollIn){		
		if(scrollIn== 1){
			console.log('asdas');
		}
		if(scrollIn== 25){
			scrollIn='A';
		}else if(scrollIn == 'A' && ($('#input_24').val()!='')){
			scrollIn=25;
		}
		if(scrollIn== 26){
			scrollIn='B';
		}else if(scrollIn == 'B' && ($('#input_25').val()!='')){
			scrollIn=26;
		}
		$('body').scrollTo('#index_'+scrollIn,900,{offset:-150});
	}
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 26){
			scrollIn=26;
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
		if(contador == 26){		
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 2:
						resultados['result']['communication_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['active_listening_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 3:
						resultados['result']['communication_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['oral_communication_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['communication_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						resultados['result']['written_communication_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 5:
						resultados['result']['problem_solving_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 6:
						resultados['result']['problem_solving_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['problem_solving_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 8:
						resultados['result']['teamwork_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 9:
						resultados['result']['teamwork_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['teamwork_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 11:
						resultados['result']['ledership_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['ledership_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['ledership_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['adaptability_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['adaptability_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['adaptability_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['time_management_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['time_management_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 19:
						resultados['result']['time_management_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 20:
						resultados['result']['tech_savvy_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 21:
						resultados['result']['persuasive_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 22:
						resultados['result']['persuasive_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 23:
						resultados['result']['persuasive_360_invite']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
				}
			}
		
			resultados['result']['time_management_360_invite']*=8.33;
			resultados['result']['adaptability_360_invite']*=8.33;
			resultados['result']['communication_360_invite']*=8.33;
			resultados['result']['problem_solving_360_invite']*=8.33;
			resultados['result']['teamwork_360_invite']*=8.33;
			resultados['result']['ledership_360_invite']*=8.33;
			resultados['result']['tech_savvy_360_invite']*=25;
			switch(resultados['result']['tech_savvy_360_invite']){
				case 0:
					resultados['result']['tech_savvy_360_invite'] = 10;
					break;
				case 1:
					resultados['result']['tech_savvy_360_invite'] = 25;
					break;
				case 2:
					resultados['result']['tech_savvy_360_invite'] = 50;
					break;
				case 3:
					resultados['result']['tech_savvy_360_invite'] = 75;
					break;
				case 4:
					resultados['result']['tech_savvy_360_invite'] = 90;
					break;
			}
			resultados['result']['persuasive_360_invite']*=8.33;
			resultados['result']['active_listening_invite']*=25;
			resultados['result']['oral_communication_invite']*=25;
			resultados['result']['written_communication_invite']*=25;

			var url = window.location.href;
			url = url.split('/');
			url = url[url.length-1];

			$.post(WEBROOT+'assessments/addFaInvite/'+url,{dataQuest:resultados},function(data){
				if(data){
					window.location = WEBROOT+"Assessments/friend_thanks/"+url;
					// alert('enviado');
				}
			},'json');

		}else{
			alert('Please complete the unanswered questions');
		}
	});
});
