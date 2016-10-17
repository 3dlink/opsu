var SELECCIONADOS = 0;
$(document).keypress(function(event) {

    var arr = [0,121,110,13,49,50,51,52,53,54,55,56,57,97,98,99,100,101,102,103,104,105,106];
  
    if($.inArray(event.which, arr)){
        
    if(event.which == 13){
        var bt = $('.visible  button').attr("id");
    }
    else {
        var bt = $('.visible span button').attr("id"); 
    }

    

		if(event.which == 13 && SELECCIONADOS == 27){	 
	  	$('#submintBtn').click();
		}
       
   var ArrayBTN= bt.split('_');
    switch(event.which) {
    case 13:           
    		$('#btn_'+ArrayBTN[1]).click();
        break;  
    default: 
        break;
     }
        
    }
    
    
    
});
$(window).scroll(function() {

    var st = $(this).scrollTop();
    var totalheight = $(document).height() - $(window).height();
   
    
    
    if(totalheight ==  parseInt(st)){
     
        if(SELECCIONADOS == 27){
            
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            $("#submintBtn").prop("disabled" , false);
        }
    }
    
    
    $('.question').each(function(index) {        
        var div_alto = $(this).height();
        var minimo = 50;
        var maximo = 300;
        if (($(this).offset().top-st) >= minimo && ($(this).offset().top-st) <= maximo) {
          $('.question').css({'opacity': 0.3 , 'pointer-events': 'none'});
					$(this).css({
            'opacity': (1), 
            'pointer-events': 'all'
          });
          
          $(this).addClass('visible');
          var ArrayBTN = this.id.split('question');	
          $('#'+ArrayBTN[1]+'_1').focus();

        } else {
          $(this).removeClass('visible');
        }
    });
    if(st == 0){

        $('#question1').css({
            'opacity': (1), 
            'pointer-events': 'all'
        });
        $('#question1').addClass('visible');
        $('#question2').css({'opacity': 0.3 , 'pointer-events': 'none'});
        $('#question2').removeClass('visible');
    }
    
   if(totalheight ==  parseInt(st)){

        $('#question27').css({
            'opacity': (1), 
            'pointer-events': 'all'
        });

        $('#question27').addClass('visible');
        $('#question26').css({'opacity': 0.3 , 'pointer-events': 'none'});
        $('#question26').removeClass('visible');
   }  
   
    
});
	var resultados=[];
quiz= function(){

	var scrollIn = 1;
	this.init=function(){			

    quiz_incompleto(8,27);

		$('.mentr-ok-btn').on('click',function(){
			var ArrayBTN= this.id.split('_');		

			$('#question'+ArrayBTN[1]).find('span.selected').attr('class',''); 
			var respondido = 1;

			if(($('#'+ArrayBTN[1]+'_1').val() == '') && ($('#'+ArrayBTN[1]+'_2').val() == '') && ($('#'+ArrayBTN[1]+'_3').val() == '') && ($('#'+ArrayBTN[1]+'_4').val() == '') && ($('#'+ArrayBTN[1]+'_5').val() == '') && ($('#'+ArrayBTN[1]+'_6').val() == '') && ($('#'+ArrayBTN[1]+'_7').val() == '') && ($('#'+ArrayBTN[1]+'_8').val() == '') && ($('#'+ArrayBTN[1]+'_9').val() == '')){
				respondido = 0;
			}else{
				$('#'+this.id).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
				if(!$('#selected_'+ArrayBTN[1]).parent().hasClass('ya')){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					$('#selected_'+ArrayBTN[1]).parent().addClass('ya');
					SELECCIONADOS++; 
				}else{
					$('#selected_'+ArrayBTN[1]).addClass('selected');
				}
			}

      if(respondido == 1){
      	var a = '';
      	for (var j = 1; j <= 9; j++) {
					if($('#'+ArrayBTN[1]+'_'+j).val() != '')
						a = a + $('#'+ArrayBTN[1]+'_'+j).val() + ', ';
				}

				guardar_a_medias(8,ArrayBTN[1],a);


				scrollIn=parseFloat(ArrayBTN[1])+1;
				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}else if(parseFloat(scrollIn) > 27){
					$('body').scrollTo('#mentr-footer-submit',900,{offset:-250});
				}	
				$('#input_'+ArrayBTN[1]).blur();
				$('#btn_'+ArrayBTN[1]).blur();
				quiz.scrollIn(scrollIn);

			}
			

			porcentaje=parseInt((SELECCIONADOS/27)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(SELECCIONADOS+' of 27 completed');
		});
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});
		
	};

	this.scrollIn = function(scrollIn){		
		if($(window).width() <= 750){
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-125});
	  }else{
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	  }
	}

	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 27){
			$('body').scrollTo('#mentr-footer-submit',900,{offset:-250});
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

}


$(document).ready(function(){
    $('#question1').css({
        'opacity': (1), 
        'pointer-events': 'all'
    });
    $('#question1').addClass('visible');
    $('#question2').css({'opacity': 0.3 , 'pointer-events': 'none'});
    $('#question2').removeClass('visible');
	quiz = new quiz();
	quiz.init();

	$('#submintBtn').click(function(){
		if(SELECCIONADOS == 27){	
			$('#submintBtn').attr('disabled', 'disabled');
			$('#submintBtn').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');	

			resultados = '';

			// eliminar 8, 10, 13, 14, 16, 19, 21, 23, 26 y 27

			for (var i = 0; i < 27; i++) {
				if((i != 8) && (i != 10) && (i != 13) && (i != 14) && (i != 16) && (i != 19) && (i != 21) && (i != 23) && (i != 26) && (i != 27)){
					for (var j = 1; j <= 9; j++) {
						if($('#'+(i+1)+'_'+j).val() != '')
							resultados = resultados + $('#'+(i+1)+'_'+j).val() + ', ';
					}
				}
			}

				resultados = resultados.substring(0, (resultados.length - 2));

			var track = "submit button assessment p3";
			$.ajax({
				url: WEBROOT+'dashboards/Mixpanelajax/'+track,
				type: 'post'
			})

			$.post(WEBROOT+'assessments/addPyramid',{dataQuest:resultados},function(data){
				if(data){
					setTimeout(function(){
						window.location.href=WEBROOT+'career_program/p3_assessment_results'; //dashboards/pyramidAnalyze
					},500);
				}
			},'json');
		}else{
			alert('Please complete the unanswered questions'); 
		}
	});
});

function quiz_incompleto(ass,num){
    	//VERIFICO SI YA EL USUARIO EMPEZO EL ASSESSMENT Y LO ACTUALIZO
    
    	$.get(WEBROOT+'assessments/completado/'+ass, function(data) {
    		if(data.length > 0){
    			var scroll_nuevo = 0;

					for (var i = 1; i <= data.length; i++) {
						if(data[i-1] != 0){
							string = data[i-1].substring(0,data[i-1].length-1);
							string = string.split(", ");

							for (var j = 1; j <= (string.length); j++) {
								$('#'+i+'_'+j).val(string[j-1]);
							}

							$('#btn_'+i).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
							if(!$('#selected_'+i).parent().hasClass('ya')){
								$('#selected_'+i).addClass('selected');
								$('#selected_'+i).parent().addClass('ya');
								SELECCIONADOS++; 
							}else{
								$('#selected_'+i).addClass('selected');
							}
						}else{
							if(scroll_nuevo == 0)
								scroll_nuevo = i;
						}
					};

					porcentaje=parseInt((SELECCIONADOS/num)*100);
					$('#mentr-progres-indicator').css('width',porcentaje+'%');
					$('.procentaje').html(SELECCIONADOS+' of '+num+' completed');

					if(scroll_nuevo != 1){
						if(scroll_nuevo < num){
							$('body').scrollTo('#index_'+scroll_nuevo,2500,{offset:-250});
						}else{
							$('body').scrollTo('#submintBtn',2500,{offset:-250});
						}
					}
    		}

			},'json');
			
}