var SELECCIONADOS = 0;
var vi = 0;
$(document).keypress(function(event) {

    var arr = [0,121,110,13,49,50,51,52,53,54,55,56,57,97,98,99,100,101,102,103,104,105,106];
  
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
	    default: 
        break;
     }
        
    }
    
    
    
});
$(window).scroll(function() {
    var st = $(this).scrollTop();
    var totalheight = $(document).height() - $(window).height();
   
    
    
    // if(totalheight ==  parseInt(st)){
     
    //     if(SELECCIONADOS == 10){
    //         $( "#mentr-footer-submit" ).css( "opacity", 1);
    //         $("#submintBtn").prop("disabled" , false);
    //     	console.log('askjdh');
    //     }else{
    //         $( "#mentr-footer-submit" ).css( "opacity", 0.5 );
    //         $("#submintBtn").prop("disabled" , true);
    //     }
    // }
    
    
    
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


    for(i=1; i<=10; i++){
    	if($('#question'+i).hasClass('visible')){
    		vi++;
    	}
    }


    if($('#question1').hasClass('visible') && (vi < 2)){
    	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
			$('#btnUp').addClass('no_visible');
    }else{
    	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1.png');
			$('#btnUp').removeClass('no_visible');
    }

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
    $('#question10').css({
      'opacity': (1), 
      'pointer-events': 'all'
    });

    $('#question10').addClass('visible');
    $('#question9').css({'opacity': 0.3 , 'pointer-events': 'none'});
    $('#question9').removeClass('visible');
   }  
   
    
});
	var seleccionados_q6=[];
	var seleccionados_q4=[];
	var resultados=new Object();
quiz= function(){

	var scrollIn = 1;
	this.init=function(){			

		$('.mentr-ok-btn').on('click',function(){
			var ArrayBTN= this.id.split('_');		

			$('#question'+ArrayBTN[1]).find('span.selected').attr('class',''); 
			var respondido = 1;

			var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;

			if(this.id == "btn_1" ){
				if(($('#input_1').val() == 'Title') || ($('#input_2').val() == '') || ($('#input_3').val() == '')){
					$('#input_1').css('color','#FF6633');
					respondido = 0;
				}
				if(respondido == 1){
					$('#input_1').css('color','black');
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}
			}else if(this.id == "btn_2" ){
				if($('#input_4').val() != ''){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else{
					respondido = 0;
				}
			}else if(this.id == "btn_3" ){
				if($('#input_5').val() != ''){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else{
					respondido = 0;
				}
			}else if(this.id == "btn_4" ){
				var seleccionado=0;
				var k=0;
				$('.opcion_seleccionada').each(function(index) {
					seleccionado++;
					seleccionados_q4[k] = $(this).html();
					k++;
				});
				if(seleccionado>0){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else{
					respondido = 0;
				}
			}else if(this.id == "btn_5" ){
				if(($('#input_6').val() != 'Select')&&($('#input_7').val() != '')){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
					$('#input_6').css('color','black');
				}else{
					$('#input_6').css('color','#FF6633');
					respondido = 0;
				}
			}else if(this.id == "btn_6" ){
				var seleccionado=0;
				var k=0;
				$('#q6 .opcion_seleccionada').each(function(index) {
					seleccionado++;
					seleccionados_q6[k] = $(this).html();
					k++;
				});
				if(seleccionado>1){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else if((seleccionado==1) && (seleccionados_q6[0] == 'Other')){
					if(($('#input_8').val() == '')){
						respondido = 0;
					}else{
						$('#selected_'+ArrayBTN[1]).addClass('selected');
						SELECCIONADOS++; 
					}
				}else if(seleccionado>0){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else{
					respondido = 0;
				}
			}else if(this.id == "btn_7" ){
				if($('#input_9').val() != 'State'){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
					$('#input_9').css('color','black');
				}else{
					$('#input_9').css('color','#FF6633');
					respondido = 0;
				}
			}else if(this.id == "btn_8"){
				if($('#input_10').val() != '' && pattern.test($('#input_10').val())){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					$('#input_10').css('color','black');
					SELECCIONADOS++; 
				}else{
					$('#input_10').css('color','#FF6633');
					respondido = 0;
				}
			}else if(this.id == "btn_9"){
				if($('.imageHiddenContent2').html() != ''){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					$('#input_10').css('color','black');
					SELECCIONADOS++; 
				}else{
					$('#input_10').css('color','#FF6633');
					respondido = 0;
				}
			}else if(this.id == "btn_10"){
				var seleccionado = 0;
				$('.check_seleccionado').each(function(index) {
					seleccionado++;
				});
				if(seleccionado>0){
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					SELECCIONADOS++; 
				}else{
					respondido = 0;
				}
			}
				$('#'+this.id).addClass('glyphicon glyphicon-ok');
				$('#'+this.id).html('');

      if(respondido == 1){

				scrollIn=parseFloat(ArrayBTN[1])+1;
				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}else if(parseFloat(scrollIn) >= 10){
					scrollIn=10;
				}	
				$('#input_'+ArrayBTN[1]).blur();
				$('#btn_'+ArrayBTN[1]).blur();
				quiz.scrollIn(scrollIn);

			}
			

			porcentaje=parseInt((SELECCIONADOS/10)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(SELECCIONADOS+' of 10 completed');
		});
		$('#btnUp').on('click',function(){
			quiz.Down();
		});
		$('#btnDown').on('click',function(){
			quiz.Up();
		});
		
	};

	this.scrollIn = function(scrollIn){		
		$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	}

	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 10){
			scrollIn=10;
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

	if($('#question1').hasClass('visible')){
  	$('#btnUpIMG').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
		$('#btnUp').addClass('no_visible');
  }

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
		if(SELECCIONADOS == 10){		

		var q4 = '';
		for (var i = 0; i < seleccionados_q4.length; i++) {
			q4 = q4 + seleccionados_q4[i] + ', ';
		};


		var q6 = '';
		for (var i = 0; i < seleccionados_q6.length; i++) {
			q6 = q6 + seleccionados_q6[i] + ', ';
		};

		img = $('#ArticleSquareImg').attr('value');

		resultados['result']={'mentor_title':$('#input_1').val(),'mentor_name':$('#input_2').val(),'mentor_surname':$('#input_3').val(),'mentor_job_title':$('#input_4').val(),'mentor_state':$('#input_9').val(),'mentor_email':$('#input_10').val(),'mentor_privacy':$('.check_seleccionado').attr('id'),'mentor_job_explanation':$('#input_5').val(),'mentor_central_career':q4,'mentor_advice_level':$('#input_6').val(),'mentor_advice':$('#input_7').val(),'mentor_challenges':q6,'mentor_image':img};

			$.post(WEBROOT+'assessments/addAdviser',{dataQuest:resultados},function(data){
				if(data){
					window.location = WEBROOT+"assessments/thx";
				}
			},'json');
		}else{
			alert('Please complete the unanswered questions'); 
		}
	});
});

