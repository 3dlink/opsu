var SELECCIONADOS = 0;
$(document).keypress(function(event) {

    var arr = [0,121,110,13,49,50,51,52,53,54,55,56,57,97,98,99,100,101,102,103,104,105,106];
    if($.inArray(event.which, arr)){

	    if(event.which == 13){
	    	if(SELECCIONADOS == 32)
     			$('#submintBtn').click();
	    }
	    
	      var bt = $('.visible span button').attr("id"); 
	    var ArrayBTN= bt.split('_');
	    // console.log(bt)
     //  if (typeof(bt) != "undefined")
     //   	
     // 	else{
     // 		if(event.which == 13)
     // 	}
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
         }
        
    }
    
    
    
});

$(window).scroll(function() {

    var st = $(this).scrollTop();
    var totalheight = $(document).height() - $(window).height();
   
    if(totalheight ==  parseInt(st)){
        
        if(SELECCIONADOS == 32){
            
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            $("#submintBtn").prop("disabled" , false);
        }
        else{
            $( "#mentr-footer-submit" ).css( "opacity", 0.8 );
            // $("#submintBtn").prop("disabled" , true);
        }
    }
    
    $('.question').each(function(index) {

    	if( $(window).height() >= 750 ){
    		if (($(this).offset().top-st) > 100 && ($(this).offset().top-st) < 450) {
	            $(this).css({'opacity': (1), 'pointer-events': 'all'});
	            $(this).addClass('visible');
	            $(this).find('.mentr-ok-btn-large').css('opacity', 1);
	        }else{
	            $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
	            $(this).removeClass('visible');
	        }
    	}
    	else{
			if (($(this).offset().top-st) > -500 && ($(this).offset().top-st) < 500) {
	            $(this).css({'opacity': (1), 'pointer-events': 'all'});
	            $(this).addClass('visible');
	            $(this).find('.mentr-ok-btn-large').css('opacity', 1);
	        }else{
	            $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
	            $(this).removeClass('visible');
	        }
    	}
    });


   if($('#question1').hasClass('visible')){
    		$('.upp2').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
			$('.upp').addClass('no_visible');
	    }else{
	    	$('.upp2').attr("src", WEBROOT+'img/dashboard/arrow1.png');
			$('.upp').removeClass('no_visible');
	    }
});


quiz = function(){
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	arrayQuiz['result']={'problem_solving':0,'adaptability':0,'critical_thinking':0,'communication':0,'creative_thinking':0,'time_management':0,'numerical_reasoning':0,'commercial_awareness':0,'overall':0}; 
	var arrayContestadas=new Array();	
	
	var arrayMatch=new Object();
	var scrollIn = 1;		

	var arrayOnet=new Object();
    this.init=function(){
    	for(var i=1; i <= 32; i++) {
    		arrayContestadas[i]=false;
    	}
    	quiz_incompleto(arrayQuiz,arrayContestadas,3,32);
	    arrayMatch[0]={ 1:0, 2:1, 3:2, 4:3, 5:4 };
	    arrayMatch[1]={ 1:4, 2:3, 3:2, 4:1, 5:0 };
	    arrayMatch[2]={ 0:0,1:1, 2:1, 3:2, 4:2, 5:3, 6:3, 7:4 };
	    quest_10=0;
	    arrayMatch[3]={ 1:0,2:4 };
			
			$('.mentr-ok-btn').on('click',function(){
				var ArrayBTN= this.id.split('_');

				var multiples_guardar = "";
				if(ArrayBTN[1] == 10){
					for (var i = 1; i < 8; i++) {
						if($('#item_multiple'+i).hasClass('active_multiple')){
							multiples_guardar = multiples_guardar+'1,,,';
						}else{
							multiples_guardar = multiples_guardar+'0,,,';
						}
					}
					guardar_a_medias(3,ArrayBTN[1],multiples_guardar);
				}else{
					guardar_a_medias(3,ArrayBTN[1],ArrayBTN[2]);
				}
      $('#'+this.id).blur();

				if(ArrayBTN[1] != '25' && ArrayBTN[1] != '26' && ArrayBTN[1] != '27' && ArrayBTN[1] != '28' && ArrayBTN[1] != '29' && ArrayBTN[1] != '30' && ArrayBTN[1] != '31' && ArrayBTN[1] != '32'){
					$('#btn_'+ArrayBTN[1]+'_1').html('1');
					$('#btn_'+ArrayBTN[1]+'_2').html('2');
					$('#btn_'+ArrayBTN[1]+'_3').html('3');
					$('#btn_'+ArrayBTN[1]+'_4').html('4');
					$('#btn_'+ArrayBTN[1]+'_5').html('5');

					if(ArrayBTN[1] == '23'){
						$('#btn_'+ArrayBTN[1]+'_1').html('Y');
						$('#btn_'+ArrayBTN[1]+'_2').html('N');
					}
					$('#'+this.id).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
				}
				console.log(ArrayBTN);

				if(ArrayBTN[1] == '1'){
        	$('#question1').removeClass('visible');
				}
				
				$('#question'+ArrayBTN[1]).find('span.selected').attr('class','');
				
				SELECCIONADOS = 1;
				$('span.selected').each(function(index) {
		            SELECCIONADOS++; 
		        });

				$('table.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
		        });
				$('div.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
		        });
				console.log(SELECCIONADOS);
				if(SELECCIONADOS == 32){
			       $( "#mentr-footer-submit" ).css( "opacity", 1);
			       $("#submintBtn").prop("disabled" , false);
			    }

				if(ArrayBTN[1] == 10){
					for (var i = 1; i < 8; i++) {
						if($('#item_multiple'+i).hasClass('active_multiple')){
							quest_10 ++;
						}
					}
					quest_10 = arrayMatch[2][quest_10];
				}

					arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];	
					$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');

					scrollIn=parseFloat(ArrayBTN[1])+1;
					arrayContestadas[ArrayBTN[1]]=true;
					if(parseFloat(scrollIn) < 0){
						scrollIn=1;
					}else if(parseFloat(scrollIn) > 32){
						$("html, body").animate({ scrollTop: $(document).height() }, 1000);
					}		
					quiz.scrollIn(scrollIn);

					if(ArrayBTN[1] == 33){
						$('#submintBtn').focus();
					}

				
				
				var porcentaje=0;
				for(x in arrayContestadas){
					if(arrayContestadas[x]){
						porcentaje++;
					}
				}

				porcentaje=parseInt((SELECCIONADOS/32)*100);
				$('#mentr-progres-indicator').css('width',porcentaje+'%');
				$('.procentaje').html(SELECCIONADOS+' of 32 completed');

				// porcentaje=parseInt((porcentaje/32)*100);
				// $('#mentr-progres-indicator').css('width',porcentaje+'%');
				// $('.procentaje').html(porcentaje+'%');
			});
			$('#btnUp').on('click',function(){
				quiz.Down();
			});
			$('#btnDown').on('click',function(){
				quiz.Up();
			});


//multiple
			$('#item_multiple1').on('click',function(){
				if($('#item_multiple1').hasClass('active_multiple')){
					//activo
					$('#UnCheck1').css('display','block');
					$('#Check1').css('display','none');
					$('#item_multiple1').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck1').css('display','none');
					$('#Check1').css('display','block');
					$('#item_multiple1').addClass('active_multiple');
				}
			});
			$('#item_multiple2').on('click',function(){
				if($('#item_multiple2').hasClass('active_multiple')){
					//activo
					$('#UnCheck2').css('display','block');
					$('#Check2').css('display','none');
					$('#item_multiple2').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck2').css('display','none');
					$('#Check2').css('display','block');
					$('#item_multiple2').addClass('active_multiple');
				}
			});
			$('#item_multiple3').on('click',function(){
				if($('#item_multiple3').hasClass('active_multiple')){
					//activo
					$('#UnCheck3').css('display','block');
					$('#Check3').css('display','none');
					$('#item_multiple3').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck3').css('display','none');
					$('#Check3').css('display','block');
					$('#item_multiple3').addClass('active_multiple');
				}
			});
			$('#item_multiple4').on('click',function(){
				if($('#item_multiple4').hasClass('active_multiple')){
					//activo
					$('#UnCheck4').css('display','block');
					$('#Check4').css('display','none');
					$('#item_multiple4').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck4').css('display','none');
					$('#Check4').css('display','block');
					$('#item_multiple4').addClass('active_multiple');
				}
			});
			$('#item_multiple5').on('click',function(){
				if($('#item_multiple5').hasClass('active_multiple')){
					//activo
					$('#UnCheck5').css('display','block');
					$('#Check5').css('display','none');
					$('#item_multiple5').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck5').css('display','none');
					$('#Check5').css('display','block');
					$('#item_multiple5').addClass('active_multiple');
				}
			});
			$('#item_multiple6').on('click',function(){
				if($('#item_multiple6').hasClass('active_multiple')){
					//activo
					$('#UnCheck6').css('display','block');
					$('#Check6').css('display','none');
					$('#item_multiple6').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck6').css('display','none');
					$('#Check6').css('display','block');
					$('#item_multiple6').addClass('active_multiple');
				}
			});
			$('#item_multiple7').on('click',function(){
				if($('#item_multiple7').hasClass('active_multiple')){
					//activo
					$('#UnCheck7').css('display','block');
					$('#Check7').css('display','none');
					$('#item_multiple7').removeClass('active_multiple');	
				}else{
					//desactivo
					$('#UnCheck7').css('display','none');
					$('#Check7').css('display','block');
					$('#item_multiple7').addClass('active_multiple');
				}
			});




//simple pregunta 25
			$('#btn_25_1').on('click',function(){
				if($('#DivCheck1').css('display') == 'none'){
					$('#DivUnCheck1').css('display','none');
					$('#DivCheck1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});
			$('#btn_25_2').on('click',function(){
				if($('#DivCheck2').css('display') == 'none'){
					$('#DivUnCheck2').css('display','none');
					$('#DivCheck2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});
			$('#btn_25_3').on('click',function(){
				if($('#DivCheck3').css('display') == 'none'){
					$('#DivUnCheck3').css('display','none');
					$('#DivCheck3').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});
			$('#btn_25_4').on('click',function(){
				if($('#DivCheck4').css('display') == 'none'){
					$('#DivUnCheck4').css('display','none');
					$('#DivCheck4').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});
			$('#btn_25_5').on('click',function(){
				if($('#DivCheck5').css('display') == 'none'){
					$('#DivUnCheck5').css('display','none');
					$('#DivCheck5').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#DivUnCheck'+i).css('display','block');
						$('#DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_25').addClass('selected_tabla');
			});




//simple pregunta 29
			$('#btn_29_1').on('click',function(){
				if($('#29_DivCheck1').css('display') == 'none'){
					$('#29_DivUnCheck1').css('display','none');
					$('#29_DivCheck1').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#29_DivUnCheck'+i).css('display','inline-block');
						$('#29_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_29').addClass('selected_tabla');
			});
			$('#btn_29_2').on('click',function(){
				if($('#29_DivCheck2').css('display') == 'none'){
					$('#29_DivUnCheck2').css('display','none');
					$('#29_DivCheck2').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#29_DivUnCheck'+i).css('display','inline-block');
						$('#29_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_29').addClass('selected_tabla');
			});
			$('#btn_29_3').on('click',function(){
				if($('#29_DivCheck3').css('display') == 'none'){
					$('#29_DivUnCheck3').css('display','none');
					$('#29_DivCheck3').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#29_DivUnCheck'+i).css('display','inline-block');
						$('#29_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_29').addClass('selected_tabla');
			});
			$('#btn_29_4').on('click',function(){
				if($('#29_DivCheck4').css('display') == 'none'){
					$('#29_DivUnCheck4').css('display','none');
					$('#29_DivCheck4').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#29_DivUnCheck'+i).css('display','inline-block');
						$('#29_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_29').addClass('selected_tabla');
			});
			$('#btn_29_5').on('click',function(){
				if($('#29_DivCheck5').css('display') == 'none'){
					$('#29_DivUnCheck5').css('display','none');
					$('#29_DivCheck5').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#29_DivUnCheck'+i).css('display','inline-block');
						$('#29_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_29').addClass('selected_tabla');
			});


//simple pregunta 30
			$('#btn_30_1').on('click',function(){
				if($('#30_DivCheck1').css('display') == 'none'){
					$('#30_DivUnCheck1').css('display','none');
					$('#30_DivCheck1').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#30_DivUnCheck'+i).css('display','inline-block');
						$('#30_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_30').addClass('selected_tabla');
			});
			$('#btn_30_2').on('click',function(){
				if($('#30_DivCheck2').css('display') == 'none'){
					$('#30_DivUnCheck2').css('display','none');
					$('#30_DivCheck2').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#30_DivUnCheck'+i).css('display','inline-block');
						$('#30_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_30').addClass('selected_tabla');
			});
			$('#btn_30_3').on('click',function(){
				if($('#30_DivCheck3').css('display') == 'none'){
					$('#30_DivUnCheck3').css('display','none');
					$('#30_DivCheck3').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#30_DivUnCheck'+i).css('display','inline-block');
						$('#30_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_30').addClass('selected_tabla');
			});
			$('#btn_30_4').on('click',function(){
				if($('#30_DivCheck4').css('display') == 'none'){
					$('#30_DivUnCheck4').css('display','none');
					$('#30_DivCheck4').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#30_DivUnCheck'+i).css('display','inline-block');
						$('#30_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_30').addClass('selected_tabla');
			});
			$('#btn_30_5').on('click',function(){
				if($('#30_DivCheck5').css('display') == 'none'){
					$('#30_DivUnCheck5').css('display','none');
					$('#30_DivCheck5').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#30_DivUnCheck'+i).css('display','inline-block');
						$('#30_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_30').addClass('selected_tabla');
			});

//simple pregunta 31
			$('#btn_31_1').on('click',function(){
				if($('#31_DivCheck1').css('display') == 'none'){
					$('#31_DivUnCheck1').css('display','none');
					$('#31_DivCheck1').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#31_DivUnCheck'+i).css('display','inline-block');
						$('#31_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_31').addClass('selected_tabla');
			});
			$('#btn_31_2').on('click',function(){
				if($('#31_DivCheck2').css('display') == 'none'){
					$('#31_DivUnCheck2').css('display','none');
					$('#31_DivCheck2').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#31_DivUnCheck'+i).css('display','inline-block');
						$('#31_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_31').addClass('selected_tabla');
			});
			$('#btn_31_3').on('click',function(){
				if($('#31_DivCheck3').css('display') == 'none'){
					$('#31_DivUnCheck3').css('display','none');
					$('#31_DivCheck3').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#31_DivUnCheck'+i).css('display','inline-block');
						$('#31_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_31').addClass('selected_tabla');
			});
			$('#btn_31_4').on('click',function(){
				if($('#31_DivCheck4').css('display') == 'none'){
					$('#31_DivUnCheck4').css('display','none');
					$('#31_DivCheck4').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#31_DivUnCheck'+i).css('display','inline-block');
						$('#31_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_31').addClass('selected_tabla');
			});
			$('#btn_31_5').on('click',function(){
				if($('#31_DivCheck5').css('display') == 'none'){
					$('#31_DivUnCheck5').css('display','none');
					$('#31_DivCheck5').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#31_DivUnCheck'+i).css('display','inline-block');
						$('#31_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_31').addClass('selected_tabla');
			});


//simple pregunta 32
			$('#btn_32_1').on('click',function(){
				if($('#32_DivCheck1').css('display') == 'none'){
					$('#32_DivUnCheck1').css('display','none');
					$('#32_DivCheck1').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#32_DivUnCheck'+i).css('display','inline-block');
						$('#32_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_32').addClass('selected_tabla');
			});
			$('#btn_32_2').on('click',function(){
				if($('#32_DivCheck2').css('display') == 'none'){
					$('#32_DivUnCheck2').css('display','none');
					$('#32_DivCheck2').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#32_DivUnCheck'+i).css('display','inline-block');
						$('#32_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_32').addClass('selected_tabla');
			});
			$('#btn_32_3').on('click',function(){
				if($('#32_DivCheck3').css('display') == 'none'){
					$('#32_DivUnCheck3').css('display','none');
					$('#32_DivCheck3').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 3){
						$('#32_DivUnCheck'+i).css('display','inline-block');
						$('#32_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_32').addClass('selected_tabla');
			});
			$('#btn_32_4').on('click',function(){
				if($('#32_DivCheck4').css('display') == 'none'){
					$('#32_DivUnCheck4').css('display','none');
					$('#32_DivCheck4').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 4){
						$('#32_DivUnCheck'+i).css('display','inline-block');
						$('#32_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_32').addClass('selected_tabla');
			});
			$('#btn_32_5').on('click',function(){
				if($('#32_DivCheck5').css('display') == 'none'){
					$('#32_DivUnCheck5').css('display','none');
					$('#32_DivCheck5').css('display','inline-block');
				}
				for(i=1;i<=5;i++){
					if(i != 5){
						$('#32_DivUnCheck'+i).css('display','inline-block');
						$('#32_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_32').addClass('selected_tabla');
			});


			//simple pregunta 26
			$('#btn_26_1').on('click',function(){
				if($('#26_DivCheck1').css('display') == 'none'){
					$('#26_DivUnCheck1').css('display','none');
					$('#26_DivCheck1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#26_DivUnCheck'+i).css('display','block');
						$('#26_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_26').addClass('selected_tabla');
			});
			$('#btn_26_2').on('click',function(){
				if($('#26_DivCheck2').css('display') == 'none'){
					$('#26_DivUnCheck2').css('display','none');
					$('#26_DivCheck2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#26_DivUnCheck'+i).css('display','block');
						$('#26_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_26').addClass('selected_tabla');
			});

			//simple pregunta 27
			$('#btn_27_1').on('click',function(){
				if($('#27_DivCheck1').css('display') == 'none'){
					$('#27_DivUnCheck1').css('display','none');
					$('#27_DivCheck1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#27_DivUnCheck'+i).css('display','block');
						$('#27_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_27').addClass('selected_tabla');
			});
			$('#btn_27_2').on('click',function(){
				if($('#27_DivCheck2').css('display') == 'none'){
					$('#27_DivUnCheck2').css('display','none');
					$('#27_DivCheck2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#27_DivUnCheck'+i).css('display','block');
						$('#27_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_27').addClass('selected_tabla');
			});

			//simple pregunta 28
			$('#btn_28_1').on('click',function(){
				if($('#28_DivCheck1').css('display') == 'none'){
					$('#28_DivUnCheck1').css('display','none');
					$('#28_DivCheck1').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 1){
						$('#28_DivUnCheck'+i).css('display','block');
						$('#28_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_28').addClass('selected_tabla');
			});
			$('#btn_28_2').on('click',function(){
				if($('#28_DivCheck2').css('display') == 'none'){
					$('#28_DivUnCheck2').css('display','none');
					$('#28_DivCheck2').css('display','block');
				}
				for(i=1;i<=5;i++){
					if(i != 2){
						$('#28_DivUnCheck'+i).css('display','block');
						$('#28_DivCheck'+i).css('display','none');
					}
				}
				$('#tabla_28').addClass('selected_tabla');
			});


		};

	
		
	this.scrollIn = function(scrollIn){

		if(scrollIn > 28){
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-150});
		}else if(scrollIn == 10 || scrollIn == 25 || scrollIn == 26 || scrollIn == 27 || scrollIn == 28){
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-150});
		}else{
			$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
		}

	};
	
	
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 32){
			scrollIn=32;
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
    		$('.upp2').attr("src", WEBROOT+'img/dashboard/arrow1_inactive.png');
			$('.upp').addClass('no_visible');
	    }else{
	    	$('.upp2').attr("src", WEBROOT+'img/dashboard/arrow1.png');
			$('.upp').removeClass('no_visible');
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
		if(contador >= 32){		
			$('#submintBtn').attr('disabled', 'disabled');
			$('#submintBtn').html('<img class="gifLoader" src='+WEBROOT+'img/loader.gif>');
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 1:
						resultados['result']['problem_solving']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 2:
						resultados['result']['problem_solving']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 3:
						resultados['result']['problem_solving']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['problem_solving']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 5:
						resultados['result']['time_management']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 6:
						resultados['result']['time_management']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['time_management']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 8:
						resultados['result']['time_management']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 9:
						resultados['result']['time_management']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['creative_thinking']=quest_10;
						break;
					case 11:
						resultados['result']['creative_thinking']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['creative_thinking']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['creative_thinking']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['creative_thinking']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['creative_thinking']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['creative_thinking']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['communication']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['communication']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 19:
						resultados['result']['communication']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 20:
						resultados['result']['communication']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 21:
						resultados['result']['communication']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 22:
						resultados['result']['commercial_awareness']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 23:
						resultados['result']['commercial_awareness']+=parseInt(match[3][resultados['quiz'][pregunta]]);
						break;
					case 24:
						resultados['result']['adaptability']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 25:
						var p=0;
						if(resultados['quiz'][pregunta]=='3'){p=4;}
						resultados['result']['critical_thinking']+=p;
						break;
					case 26:
						var p=0;
						if(resultados['quiz'][pregunta]=='2'){p=4;}
						resultados['result']['critical_thinking']+=p;
						break;
					case 27:
						var p=0;
						if(resultados['quiz'][pregunta]=='2'){p=4;}
						resultados['result']['critical_thinking']+=p;
						break;
					case 28:
						var p=0;
						if(resultados['quiz'][pregunta]=='2'){p=4;}
						resultados['result']['critical_thinking']+=p;
						break;
					case 29:
						var p=0;
						if(resultados['quiz'][pregunta]=='3'){p=4;}
						resultados['result']['numerical_reasoning']+=p;
						break;
					case 30:
						var p=0;
						if(resultados['quiz'][pregunta]=='5'){p=4;}
						resultados['result']['numerical_reasoning']+=p;
						break;
					case 31:
						var p=0;
						if(resultados['quiz'][pregunta]=='5'){p=4;}
						resultados['result']['numerical_reasoning']+=p;
						break;
					case 32:
						var p=0;
						if(resultados['quiz'][pregunta]=='2'){p=4;}
						resultados['result']['numerical_reasoning']+=p;
						break;
				}
			}


			resultados['result']['adaptability'] = (((resultados['result']['creative_thinking'] / 7)+((resultados['result']['problem_solving'] / 4) * 0.5)) + resultados['result']['adaptability']) * 12.5;
			resultados['result']['problem_solving']*=6.25;
			resultados['result']['critical_thinking']*=6.25;
			resultados['result']['communication']*=5;
			resultados['result']['creative_thinking']*=3.57;
			resultados['result']['time_management']*=5;
			resultados['result']['numerical_reasoning']*=6.25;
			resultados['result']['commercial_awareness']*=12.5;
			resultados['result']['overall'] = (resultados['result']['problem_solving'] + resultados['result']['adaptability'] + resultados['result']['critical_thinking'] + resultados['result']['communication'] + resultados['result']['creative_thinking'] + resultados['result']['time_management'] + resultados['result']['numerical_reasoning'] + resultados['result']['commercial_awareness']) / 8;

				$('#btn_gif_save').css("display","block");
				$('#btn_gif_save').css('animation', "4s ease 2s normal none 1 running fadeout_save");

					$.post(WEBROOT+'assessments/addSkills',{dataQuest:resultados},function(data){
						if(data){

							var track = "submit button skills assessment";
							$.ajax({
								url: WEBROOT+'dashboards/Mixpanelajax/'+track,
								type: 'post',
								success: function(){
									setTimeout(function(){
										window.location = WEBROOT+"career_program/results_skills";
									},2000);
								}
							})

							// mixpanel.identify(ID_USUARIO);
							// mixpanel.track("submit button skills assessment");

						}
					},'json');
		}else{
			alert('Please complete the unanswered questions');
		}
	});
});