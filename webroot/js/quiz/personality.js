var SELECCIONADOS = 0;
$(document).keypress(function(event) {
   
    var arr = [0,13,49,50,51,52,53,54,55,56,57];
    if($.inArray(event.which, arr)){

	    if(event.which == 13){
	        var bt = $('.visible  button').attr("id");
	    }else{
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
        default: 
            break;
         break;
         }
        
    }
    
    
    
});

$(window).scroll(function() {

    var st = $(this).scrollTop() + 1;
    if(($(document).height() - $(window).height()) ==  parseInt(st)){
        if(SELECCIONADOS == 18){
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            // $("#submintBtn").prop("disabled" , 'false');
            
        }
        else{
            $( "#mentr-footer-submit" ).css( "opacity", 0.8 );
            // $("#submintBtn").prop("disabled" , 'true');

        }
    }

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


quiz = function(){
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	// arrayQuiz['result']={'problem_solving':0,'adaptability':0,'critical_thinking':0,'communication':0,'creative_thinking':0,'time_management':0,'numerical_reasoning':0,'commercial_awareness':0,'overall':0}; 
	arrayQuiz['result'] = {'resilience' : 0, 'persuasiveness' : 0, 'organizational_skills' : 0, 'hardworking' : 0, 'positive_attitude' : 0, 'stress_management' : 0, 'collaborative' : 0, 'leadership' : 0 };

	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		

	var arrayOnet=new Object();
    this.init=function(){
    	for(var i=1; i <= 18; i++) {
    		arrayContestadas[i]=false;
    	}
    	quiz_incompleto(arrayQuiz,arrayContestadas,9,18);

		arrayMatch[0]={ 1:0, 2:1, 3:2, 4:3, 5:4}
		arrayMatch[1]={ 1:4, 2:3, 3:2, 4:1, 5:0}
		arrayMatch[2]={	1:0, 2:4, 3:0, 4:0}
		arrayMatch[3]={ 1:4, 2:0, 3:0, 4:0}
		arrayMatch[4]={ 1:0, 2:4, 3:2, 4:1}
		arrayMatch[5]={ 1:4, 2:0, 3:1, 4:2}
		arrayMatch[6]={ 1:0, 2:2, 3:1, 4:4}

			$('.mentr-ok-btn').on('click',function(){
				var no_avanza  = 1;
				var ArrayBTN= this.id.split('_');
				if(ArrayBTN[1] == 1){
					$('#question1').removeClass('visible');
				}

				if(SELECCIONADOS == 18){
			       $( "#mentr-footer-submit" ).css( "opacity", 1);
			       // $("#submintBtn").prop("disabled" , 'false');
			    }

		    if(ArrayBTN[1] == 6){
		    	if($('#input_6').data('educa') != 0){
		    		$('#btn_6').css('background-color', 'rgb(153, 204, 0)');
		    		$('#btn_6').css('background-image', 'none');
		    		arrayQuiz['quiz'][ArrayBTN[1]] =  $('#input_6').data('educa');
					}else{
						no_avanza = 0;
					}
				}else{
					arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	
				}	

				if(ArrayBTN[1] != '13' && ArrayBTN[1] != '14' && ArrayBTN[1] != '15' && ArrayBTN[1] != '16' && ArrayBTN[1] != '17' && ArrayBTN[1] != '18'){
					$('#btn_'+ArrayBTN[1]+'_1').html('1');
					$('#btn_'+ArrayBTN[1]+'_2').html('2');
					$('#btn_'+ArrayBTN[1]+'_3').html('3');
					$('#btn_'+ArrayBTN[1]+'_4').html('4');
					$('#btn_'+ArrayBTN[1]+'_5').html('5');
				if(no_avanza)
					$('#'+this.id).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
				}

				$('#question'+ArrayBTN[1]).find('span.selected').attr('class','');
				
				SELECCIONADOS = 1;
				$('span.selected').each(function(index) {
		            SELECCIONADOS++; 
		        });

				$('table.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
		        });

				

				if(no_avanza){
					$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');

					scrollIn=parseFloat(ArrayBTN[1])+1;
					arrayContestadas[ArrayBTN[1]]=true;

					if(ArrayBTN[1] == 6){
						guardar_a_medias(9,ArrayBTN[1],$('#input_6').data('educa'));
					}else{
						guardar_a_medias(9,ArrayBTN[1],ArrayBTN[2]);
					}
					if(parseFloat(scrollIn) < 0){
						scrollIn=1;
					}else if(parseFloat(scrollIn) > 18){
						$("html, body").animate({ scrollTop: $(document).height() }, 1000);
					}		
					quiz.scrollIn(scrollIn);

					if(ArrayBTN[1] == 19){
						$('#submintBtn').focus();
					}
					
					
					var porcentaje=0;
					for(x in arrayContestadas){
						if(arrayContestadas[x]){
							porcentaje++;
						}
					}
			
					porcentaje=parseInt((SELECCIONADOS/18)*100);
					$('#mentr-progres-indicator').css('width',porcentaje+'%');
					$('.procentaje').html(SELECCIONADOS+' of 18 completed');
				}
			});
			$('#btnUp').on('click',function(){
				quiz.Down();
			});
			$('#btnDown').on('click',function(){
				quiz.Up();
			});

//simple pregunta 13
			$('#btn_13_1').on('click',function(){
				if($('#DivCheck_13_1').css('display') == 'none'){
					$('#DivUnCheck_13_1').css('display','none');
					$('#DivCheck_13_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_13_'+i).css('display','block');
						$('#DivCheck_13_'+i).css('display','none');
					}
				}
				$('#tabla_13').addClass('selected_tabla');
			});
			$('#btn_13_2').on('click',function(){
				if($('#DivCheck_13_2').css('display') == 'none'){
					$('#DivUnCheck_13_2').css('display','none');
					$('#DivCheck_13_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_13_'+i).css('display','block');
						$('#DivCheck_13_'+i).css('display','none');
					}
				}
				$('#tabla_13').addClass('selected_tabla');
			});
			$('#btn_13_3').on('click',function(){
				if($('#DivCheck_13_3').css('display') == 'none'){
					$('#DivUnCheck_13_3').css('display','none');
					$('#DivCheck_13_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_13_'+i).css('display','block');
						$('#DivCheck_13_'+i).css('display','none');
					}
				}
				$('#tabla_13').addClass('selected_tabla');
			});
			$('#btn_13_4').on('click',function(){
				if($('#DivCheck_13_4').css('display') == 'none'){
					$('#DivUnCheck_13_4').css('display','none');
					$('#DivCheck_13_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck_13_'+i).css('display','block');
						$('#DivCheck_13_'+i).css('display','none');
					}
				}
				$('#tabla_13').addClass('selected_tabla');
			});
			$('#btn_13_5').on('click',function(){
				if($('#DivCheck_13_5').css('display') == 'none'){
					$('#DivUnCheck_13_5').css('display','none');
					$('#DivCheck_13_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_13_'+i).css('display','block');
						$('#DivCheck_13_'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});

//simple pregunta 14
			$('#btn_14_1').on('click',function(){
				if($('#DivCheck_14_1').css('display') == 'none'){
					$('#DivUnCheck_14_1').css('display','none');
					$('#DivCheck_14_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_14_'+i).css('display','block');
						$('#DivCheck_14_'+i).css('display','none');
					}
				}
				$('#tabla_14').addClass('selected_tabla');
			});
			$('#btn_14_2').on('click',function(){
				if($('#DivCheck_14_2').css('display') == 'none'){
					$('#DivUnCheck_14_2').css('display','none');
					$('#DivCheck_14_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_14_'+i).css('display','block');
						$('#DivCheck_14_'+i).css('display','none');
					}
				}
				$('#tabla_14').addClass('selected_tabla');
			});
			$('#btn_14_3').on('click',function(){
				if($('#DivCheck_14_3').css('display') == 'none'){
					$('#DivUnCheck_14_3').css('display','none');
					$('#DivCheck_14_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_14_'+i).css('display','block');
						$('#DivCheck_14_'+i).css('display','none');
					}
				}
				$('#tabla_14').addClass('selected_tabla');
			});
			$('#btn_14_4').on('click',function(){
				if($('#DivCheck_14_4').css('display') == 'none'){
					$('#DivUnCheck_14_4').css('display','none');
					$('#DivCheck_14_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck_14_'+i).css('display','block');
						$('#DivCheck_14_'+i).css('display','none');
					}
				}
				$('#tabla_14').addClass('selected_tabla');
			});
			$('#btn_14_5').on('click',function(){
				if($('#DivCheck_14_5').css('display') == 'none'){
					$('#DivUnCheck_14_5').css('display','none');
					$('#DivCheck_14_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_14_'+i).css('display','block');
						$('#DivCheck_14_'+i).css('display','none');
					}
				}
				$('#tabla_14').addClass('selected_tabla');
			});

//simple pregunta 15
			$('#btn_15_1').on('click',function(){
				if($('#DivCheck_15_1').css('display') == 'none'){
					$('#DivUnCheck_15_1').css('display','none');
					$('#DivCheck_15_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_15_'+i).css('display','block');
						$('#DivCheck_15_'+i).css('display','none');
					}
				}
				$('#tabla_15').addClass('selected_tabla');
			});
			$('#btn_15_2').on('click',function(){
				if($('#DivCheck_15_2').css('display') == 'none'){
					$('#DivUnCheck_15_2').css('display','none');
					$('#DivCheck_15_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_15_'+i).css('display','block');
						$('#DivCheck_15_'+i).css('display','none');
					}
				}
				$('#tabla_15').addClass('selected_tabla');
			});
			$('#btn_15_3').on('click',function(){
				if($('#DivCheck_15_3').css('display') == 'none'){
					$('#DivUnCheck_15_3').css('display','none');
					$('#DivCheck_15_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_15_'+i).css('display','block');
						$('#DivCheck_15_'+i).css('display','none');
					}
				}
				$('#tabla_15').addClass('selected_tabla');
			});
			$('#btn_15_4').on('click',function(){
				if($('#DivCheck_15_4').css('display') == 'none'){
					$('#DivUnCheck_15_4').css('display','none');
					$('#DivCheck_15_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck_15_'+i).css('display','block');
						$('#DivCheck_15_'+i).css('display','none');
					}
				}
				$('#tabla_15').addClass('selected_tabla');
			});
			$('#btn_15_5').on('click',function(){
				if($('#DivCheck_15_5').css('display') == 'none'){
					$('#DivUnCheck_15_5').css('display','none');
					$('#DivCheck_15_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_15_'+i).css('display','block');
						$('#DivCheck_15_'+i).css('display','none');
					}
				}
				$('#tabla_15').addClass('selected_tabla');
			});

//simple pregunta 16
			$('#btn_16_1').on('click',function(){
				if($('#DivCheck_16_1').css('display') == 'none'){
					$('#DivUnCheck_16_1').css('display','none');
					$('#DivCheck_16_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_16_'+i).css('display','block');
						$('#DivCheck_16_'+i).css('display','none');
					}
				}
				$('#tabla_16').addClass('selected_tabla');
			});
			$('#btn_16_2').on('click',function(){
				if($('#DivCheck_16_2').css('display') == 'none'){
					$('#DivUnCheck_16_2').css('display','none');
					$('#DivCheck_16_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_16_'+i).css('display','block');
						$('#DivCheck_16_'+i).css('display','none');
					}
				}
				$('#tabla_16').addClass('selected_tabla');
			});
			$('#btn_16_3').on('click',function(){
				if($('#DivCheck_16_3').css('display') == 'none'){
					$('#DivUnCheck_16_3').css('display','none');
					$('#DivCheck_16_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_16_'+i).css('display','block');
						$('#DivCheck_16_'+i).css('display','none');
					}
				}
				$('#tabla_16').addClass('selected_tabla');
			});
			$('#btn_16_4').on('click',function(){
				if($('#DivCheck_16_4').css('display') == 'none'){
					$('#DivUnCheck_16_4').css('display','none');
					$('#DivCheck_16_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck_16_'+i).css('display','block');
						$('#DivCheck_16_'+i).css('display','none');
					}
				}
				$('#tabla_16').addClass('selected_tabla');
			});
			$('#btn_16_5').on('click',function(){
				if($('#DivCheck_16_5').css('display') == 'none'){
					$('#DivUnCheck_16_5').css('display','none');
					$('#DivCheck_16_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_16_'+i).css('display','block');
						$('#DivCheck_16_'+i).css('display','none');
					}
				}
				$('#tabla_16').addClass('selected_tabla');
			});

//simple pregunta 17
			$('#btn_17_1').on('click',function(){
				if($('#DivCheck_17_1').css('display') == 'none'){
					$('#DivUnCheck_17_1').css('display','none');
					$('#DivCheck_17_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_17_'+i).css('display','block');
						$('#DivCheck_17_'+i).css('display','none');
					}
				}
				$('#tabla_17').addClass('selected_tabla');
			});
			$('#btn_17_2').on('click',function(){
				if($('#DivCheck_17_2').css('display') == 'none'){
					$('#DivUnCheck_17_2').css('display','none');
					$('#DivCheck_17_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_17_'+i).css('display','block');
						$('#DivCheck_17_'+i).css('display','none');
					}
				}
				$('#tabla_17').addClass('selected_tabla');
			});
			$('#btn_17_3').on('click',function(){
				if($('#DivCheck_17_3').css('display') == 'none'){
					$('#DivUnCheck_17_3').css('display','none');
					$('#DivCheck_17_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_17_'+i).css('display','block');
						$('#DivCheck_17_'+i).css('display','none');
					}
				}
				$('#tabla_17').addClass('selected_tabla');
			});
			$('#btn_17_4').on('click',function(){
				if($('#DivCheck_17_4').css('display') == 'none'){
					$('#DivUnCheck_17_4').css('display','none');
					$('#DivCheck_17_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_17').addClass('selected_tabla');
			});
			$('#btn_17_5').on('click',function(){
				if($('#DivCheck_17_5').css('display') == 'none'){
					$('#DivUnCheck_17_5').css('display','none');
					$('#DivCheck_17_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_17_'+i).css('display','block');
						$('#DivCheck_17_'+i).css('display','none');
					}
				}
				$('#tabla_17').addClass('selected_tabla');
			});

//simple pregunta 18
			$('#btn_18_1').on('click',function(){
				if($('#DivCheck_18_1').css('display') == 'none'){
					$('#DivUnCheck_18_1').css('display','none');
					$('#DivCheck_18_1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck_18_'+i).css('display','block');
						$('#DivCheck_18_'+i).css('display','none');
					}
				}
				$('#tabla_18').addClass('selected_tabla');
			});
			$('#btn_18_2').on('click',function(){
				if($('#DivCheck_18_2').css('display') == 'none'){
					$('#DivUnCheck_18_2').css('display','none');
					$('#DivCheck_18_2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck_18_'+i).css('display','block');
						$('#DivCheck_18_'+i).css('display','none');
					}
				}
				$('#tabla_18').addClass('selected_tabla');
			});
			$('#btn_18_3').on('click',function(){
				if($('#DivCheck_18_3').css('display') == 'none'){
					$('#DivUnCheck_18_3').css('display','none');
					$('#DivCheck_18_3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck_18_'+i).css('display','block');
						$('#DivCheck_18_'+i).css('display','none');
					}
				}
				$('#tabla_18').addClass('selected_tabla');
			});
			$('#btn_18_4').on('click',function(){
				if($('#DivCheck_18_4').css('display') == 'none'){
					$('#DivUnCheck_18_4').css('display','none');
					$('#DivCheck_18_4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck_18_'+i).css('display','block');
						$('#DivCheck_18_'+i).css('display','none');
					}
				}
				$('#tabla_18').addClass('selected_tabla');
			});
			$('#btn_18_5').on('click',function(){
				if($('#DivCheck_18_5').css('display') == 'none'){
					$('#DivUnCheck_18_5').css('display','none');
					$('#DivCheck_18_5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck_18_'+i).css('display','block');
						$('#DivCheck_18_'+i).css('display','none');
					}
				}
				$('#tabla_18').addClass('selected_tabla');
			});

		};

	this.scrollIn = function(scrollIn){
		if(scrollIn == 13 || scrollIn == 14 || scrollIn == 15 || scrollIn == 16 || scrollIn == 17 || scrollIn == 18){
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-150});
		}else
		$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	};
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 18){
			scrollIn=18;
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
		contador=0;

		for(pregunta in resultados['quiz']){
			contador++;
		}
		for(pregunta in resultados['user']){
			contador++;
		}
		if(contador >= 18){	
			$('#btn_gif_save').css("display","block");
			$('#btn_gif_save').css('animation', "4s ease 2s normal none 1 running fadeout_save");
			
			$('#submintBtn').attr('disabled', 'disabled');
			$('#submintBtn').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');	
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 1:
						resultados['result']['resilience']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 2:
						resultados['result']['resilience']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 3:
						resultados['result']['persuasiveness']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['persuasiveness']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 5:
						resultados['result']['organizational_skills']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 6:
						resultados['result']['organizational_skills']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['hardworking']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 8:
						resultados['result']['hardworking']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 9:
						resultados['result']['positive_attitude']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['positive_attitude']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 11:
						resultados['result']['stress_management']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['stress_management']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['collaborative']+=parseInt(match[2][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['collaborative']+=parseInt(match[3][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['leadership']= resultados['result']['leadership'] + parseInt(match[4][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['leadership']+=parseInt(match[5][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['leadership']+=parseInt(match[6][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['leadership']+=parseInt(match[6][resultados['quiz'][pregunta]]);
						break;
				}
			}

			resultados['result']['stress_management'] = (resultados['result']['stress_management']*7.87)+((resultados['result']['organizational_skills']+resultados['result']['positive_attitude'])*1.68);


			resultados['result']['resilience'] *= 11.25;
			if(resultados['result']['resilience'] == 0){
				resultados['result']['resilience'] = 10;
			}
			
			resultados['result']['persuasiveness']*=11.25;
			if(resultados['result']['persuasiveness'] == 0){
				resultados['result']['persuasiveness'] = 10;
			}
			

			resultados['result']['organizational_skills']*=11.25;
			if(resultados['result']['organizational_skills'] == 0){
				resultados['result']['organizational_skills'] = 10;
			}
			
			resultados['result']['hardworking']*=11.25;
			if(resultados['result']['hardworking'] == 0){
				resultados['result']['hardworking'] = 10;
			}
			
			resultados['result']['positive_attitude']*=11.25;
			if(resultados['result']['positive_attitude'] == 0){
				resultados['result']['positive_attitude'] = 10;
			}
			
			resultados['result']['collaborative']*=11.25;
			if(resultados['result']['collaborative'] == 0){
				resultados['result']['collaborative'] = 10;
			}

			resultados['result']['leadership']*=5,62;
					$.post(WEBROOT+'assessments/addPersonality',{dataQuest:resultados},function(data){
						if(data){
							// mixpanel.identify(ID_USUARIO);
							// mixpanel.track("submit button employability assessment");

							var track = "submit button employability assessment";
							$.ajax({
								url: WEBROOT+'dashboards/Mixpanelajax/'+track,
								type: 'post',
								success: function(){
									setTimeout(function(){
										window.location = WEBROOT+"career_program/results_empl"; //assessments/resultPersonality
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