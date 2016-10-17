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
       
       var ArrayBTN= bt.split('_');
        switch(event.which) {
        case 13:           
        	//quiz.scrollIn('A');
        	//alert(ArrayBTN[1]);
        	if(ArrayBTN[1] == "a"){
        		//alert();
        		quiz.scrollIn('A'); 
        		$('#btn_'+ArrayBTN[1]).blur();
        	}else{
        		$('#btn_'+ArrayBTN[1]).click();
        		
        	}
            break;
            
        case 121:
            $('#btn_'+ArrayBTN[1]+'_1').click();
            break;
        case 110:
            $('#btn_'+ArrayBTN[1]+'_0').click();
        break;
        case 97:
            $('#btn_'+ArrayBTN[1]+'_1').click();
        break; 
        case 98:
            $('#btn_'+ArrayBTN[1]+'_2').click();
        break; 
        case 99:
            $('#btn_'+ArrayBTN[1]+'_3').click();
        break; 
        case 100:
            $('#btn_'+ArrayBTN[1]+'_4').click();
        break;   
        case 101:
            $('#btn_'+ArrayBTN[1]+'_5').click();
        break;   
        case 102:
            $('#btn_'+ArrayBTN[1]+'_6').click();
        break;   
        case 103:
            $('#btn_'+ArrayBTN[1]+'_7').click();
        break;   
        case 104:
            $('#btn_'+ArrayBTN[1]+'_8').click();
        break;   
        case 105:
            $('#btn_'+ArrayBTN[1]+'_9').click();
        break;   
        case 106:
            $('#btn_'+ArrayBTN[1]+'_10').click();
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
        case 55:
            $('#btn_'+ArrayBTN[1]+'_7').click();
            break;
        case 56:
            $('#btn_'+ArrayBTN[1]+'_8').click();
            break;    
        case 57:
            $('#btn_'+ArrayBTN[1]+'_9').click();
            break;    
        default: 
            break;
         }
        
    }
    
    
    
});
$(window).scroll(function() {
    //console.log(contador);
    var st = $(this).scrollTop();
    var totalheight = $(document).height() - $(window).height();
   
    
    
    if(totalheight ==  parseInt(st)){
        
     
        if(SELECCIONADOS == 24){
            
            $( "#mentr-footer-submit" ).css( "opacity", 1);
            $("#submintBtn").prop("disabled" , false);
        }
        else{
            $( "#mentr-footer-submit" ).css( "opacity", 0.8 );
            $("#submintBtn").prop("disabled" , true);
        }
    }
    
    
    $('.question').each(function(index) {        
        var div_alto = $(this).height();
        var minimo = 50;
        var maximo = 300;

    	// var minimo = 20;
        // var maximo = 450;

        //console.log(div_alto);
        // if(div_alto < 100){
        //     //minimo = 60;
        //     //maximo = 450;
        // }
        // else if (div_alto > 300){
            
        // }
        
        //console.log(minimo + " " + maximo);
        //console.log($(this).offset().top +" "+ $(this).height(); );
        //console.log($(document).height() - $(window).height() +"--"+  parseInt(st));
        if (($(this).offset().top-st) >= minimo && ($(this).offset().top-st) <= maximo) {
                    $('.question').css({'opacity': 0.3 , 'pointer-events': 'none'});

            $(this).css({
                'opacity': (1), 
                'pointer-events': 'all'
            });


            /*if($(this).attr('id') == 'question1'){
            	$(this).find('input').focus();
            }*/
            $(this).addClass('visible');
        } 
       
        else {
            // $(this).css({'opacity': 0.3 , 'pointer-events': 'none'});
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

        //$('#question24').find('input').focus();
        $('#question24').css({
            'opacity': (1), 
            'pointer-events': 'all'
        });

        $('#question24').addClass('visible');
        $('#question23').css({'opacity': 0.3 , 'pointer-events': 'none'});
        $('#question23').removeClass('visible');
   }  
   
   if(totalheight ==  parseInt(st) + 1){
	   $('#question24').css({'opacity': 0.3 , 'pointer-events': 'none'});
       $('#question24').removeClass('visible');
       $('#question25').css({
           'opacity': (1), 
           'pointer-events': 'all'
       });
       $('#question25').addClass('visible');
       
       
       
       
  } 

    
});
quiz= function(){
	var arrayQuiz=new Object();
	arrayQuiz['quiz']=new Object();
	arrayQuiz['user']=new Object();
	arrayQuiz['result']={'F120':0,'F121':0,'F122':0,'F123':0,'F124':0,'F125':0,'F126':0,'F127':0,'F128':0,'F129':0,'F130':0,'F131':0,'F132':0,'F106':0};
	arayContestadas={'1':false,'2':false,'3':false,'4':false,'5':false,'6':false,'7':false,'8':false,'9':false,'10':false,'11':false,'12':false,'13':false,'14':false,'16':false,'16':false,'17':false,'18':false,'19':false,'20':false,'21':false,'22':false,'20':false,'21':false,'22':false,'23':false,'24':false};
	var arrayMatch=new Object();
	var scrollIn = 1;
	this.init=function(){			
		arrayMatch[0]={ 1:1, 2:2, 3:3, 4:4, 5:5, 6:6, 7:7, 8:8, 9:9 }
		arrayMatch[1]={ 1:-4, 2:-3, 3:-2, 4:-1, 5: 0, 6: 1, 7: 2, 8: 3, 9: 4 }
		arrayMatch[2]={	5: 0, 6: 1, 7: 2, 8: 3, 9: 4,4:0,3:0,2:0,1:0 }
		arrayMatch[3]={ 1:-4, 2:-3, 3:-2, 4:-1, 5: 0,6:0,7:0,8:0,9:0 }			
		$('.mentr-ok-btn').on('click',function(){

			var ArrayBTN= this.id.split('_');			

			$('#btn_'+ArrayBTN[1]+'_1').html('1');
			$('#btn_'+ArrayBTN[1]+'_2').html('2');
			$('#btn_'+ArrayBTN[1]+'_3').html('3');
			$('#btn_'+ArrayBTN[1]+'_4').html('4');
			$('#btn_'+ArrayBTN[1]+'_5').html('5');
			$('#btn_'+ArrayBTN[1]+'_6').html('6');
			$('#btn_'+ArrayBTN[1]+'_7').html('7');
			$('#btn_'+ArrayBTN[1]+'_8').html('8');
			$('#btn_'+ArrayBTN[1]+'_9').html('9');
			$('#btn_'+ArrayBTN[1]+'_1').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_2').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_3').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_4').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_5').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_6').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_7').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_8').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_9').removeClass('glyphicon glyphicon-ok');
			$('#btn_'+ArrayBTN[1]+'_10').removeClass('glyphicon glyphicon-ok');

			if(ArrayBTN[1] == '2' || ArrayBTN[1] == '23'){
				$('#btn_'+ArrayBTN[1]+'_1').html('A');
				$('#btn_'+ArrayBTN[1]+'_2').html('B');
				$('#btn_'+ArrayBTN[1]+'_3').html('C');
			}

			if(ArrayBTN[1] == '22'){
				$('#btn_'+ArrayBTN[1]+'_1').html('A');
				$('#btn_'+ArrayBTN[1]+'_2').html('B');
				$('#btn_'+ArrayBTN[1]+'_3').html('C');
				$('#btn_'+ArrayBTN[1]+'_4').html('D');
				$('#btn_'+ArrayBTN[1]+'_5').html('E');
				$('#btn_'+ArrayBTN[1]+'_6').html('F');
				$('#btn_'+ArrayBTN[1]+'_7').html('G');
				$('#btn_'+ArrayBTN[1]+'_8').html('H');
				$('#btn_'+ArrayBTN[1]+'_9').html('I');
				$('#btn_'+ArrayBTN[1]+'_10').html('J');
			}

			$('#'+this.id).addClass('glyphicon glyphicon-ok');
			$('#'+this.id).html('');



			$('#question'+ArrayBTN[1]).find('span.selected').attr('class','');            
			 if(this.id == "btn_2_1" ){
			     $("#btn_2_1").off( "mouseleave" );
			     $('#C1M').css('display','inline-block');
		            $('#C1N').css('display','none');
		            $('#C2M').css('display','inline-block');
		            $('#C2N').css('display','none');
		            $('#C3M').css('display','inline-block'); 
		            $('#C3N').css('display','none');
		            $('#C1M').css('display','none');
		            $('#C1N').css('display','inline-block'); 
			 }
			 else if (this.id == "btn_2_2"){
			     $("#btn_2_2").off( "mouseleave" ); 
			        $('#C1M').css('display','inline-block');
		            $('#C1N').css('display','none');
		            $('#C2M').css('display','inline-block');
		            $('#C2N').css('display','none');
		            $('#C3M').css('display','inline-block');
		            $('#C3N').css('display','none');
		            
		            $('#C2M').css('display','none');
		            $('#C2N').css('display','inline-block');
			 }
			 else if (this.id == "btn_2_3"){
			     $("#btn_2_3").off( "mouseleave" ); 
			     
			     $('#C1M').css('display','inline-block');
		            $('#C1N').css('display','none');
		            $('#C2M').css('display','inline-block');
		            $('#C2N').css('display','none');
		            $('#C3N').css('display','inline-block');
		            $('#C3M').css('display','none');
			 }
            SELECCIONADOS = 1;
            $('span.selected').each(function(index) {
                SELECCIONADOS++; 
            });
/*            
            if(SELECCIONADOS == 24){
               $( "#mentr-footer-submit" ).css( "opacity", 1);
               $("#submintBtn").prop("disabled" , false);
			   $('#question24').css({'opacity': 0.3 , 'pointer-events': 'none'});
				$('#question24').removeClass('visible');
				$('#question25').css({
					'opacity': (1), 
					'pointer-events': 'all'
       });
       $('#question25').addClass('visible');
			   
			   
            }
            
*/
			
			if(ArrayBTN[1] != 1 && ArrayBTN[1] != 21 && ArrayBTN[1] != 24){
				arrayQuiz['quiz'][ArrayBTN[1]]=ArrayBTN[2];
				$('#selected_'+ArrayBTN[1]+'_'+ArrayBTN[2]).addClass('selected');
				scrollIn=parseFloat(ArrayBTN[1])+1;
				arayContestadas[ArrayBTN[1]]=true;
				if(parseFloat(scrollIn) < 0){
					scrollIn=1;
				}else if(parseFloat(scrollIn) > 24){
					scrollIn=24;
				}	
				$('#btn_'+ArrayBTN[1]+'_'+ArrayBTN[2]).blur();
				quiz.scrollIn(scrollIn);
			}else{
				var vacios=/^\s*$/;//campos vacios
				var regularExpresion=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;//email
				var validate=false;
				valor=$('#input_'+ArrayBTN[1]).val();
				if(ArrayBTN[1] == 1){
					if(!vacios.test(valor)){
						validate=true;
					}
				}else if(ArrayBTN[1] == 21){
					if(!vacios.test(valor)){
						validate=true;
					}
					else if(ArrayBTN[1] == 22){
						
						
					 	var variable= $(this).offset() = $(document).height();						
						console.log(variable);					
						
						
						
					
						$('#question21').css({'opacity': 0.3 , 'pointer-events': 'none'});
						$('#question21').removeClass('visible');
						$('#question22').css({
						'opacity': (1), 
						'pointer-events': 'all'
										});
						$('#question22').addClass('visible');
						$('#question23').css({'opacity': 0.3 , 'pointer-events': 'none'});
						$('#question23').removeClass('visible');
					
					
					
					}
				
					
					
				}else if(ArrayBTN[1] == 24){
					if(regularExpresion.test(valor)){
						validate=true;
						/* */
						  $( "#mentr-footer-submit" ).css( "opacity", 1);
								$("#submintBtn").prop("disabled" , false);
								$('#question24').css({'opacity': 0.3 , 'pointer-events': 'none'});
								$('#question24').removeClass('visible');
								$('#btn_24').blur();
								$('#submintBtn').focus();
								$('#question25').css({
								'opacity': (1), 
								'pointer-events': 'all'
													});
						
						
						
					}
				}
				if(!validate){
					$('#input_'+ArrayBTN[1]).focus();
				}else{
					arayContestadas[ArrayBTN[1]]=true;
					arrayQuiz['user'][ArrayBTN[1]]=valor;
					$('#selected_'+ArrayBTN[1]).addClass('selected');
					scrollIn=parseFloat(ArrayBTN[1])+1;
					if(parseFloat(scrollIn) < 0){
						scrollIn=1;
					}else if(parseFloat(scrollIn) >= 25){
						scrollIn=25;
					}	
					$('#input_'+ArrayBTN[1]).blur();
					$('#btn_'+ArrayBTN[1]).blur();
					quiz.scrollIn(scrollIn);
				}				
			}
			var porcentaje=0;
			for(x in arayContestadas){
				if(arayContestadas[x]){
					porcentaje++;
				}
			}
			porcentaje=parseInt((porcentaje/24)*100);
			$('#mentr-progres-indicator').css('width',porcentaje+'%');
			$('.procentaje').html(porcentaje+'%');
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
		
		
		
		
		
			/* Caritas al pasar el mouse*/
			
			
			
			/* Carita 1 */
			$('#C1M').on('mouseleave',function(){
			$('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','none');
			$('#C1N').css('display','inline-block');
             
		});
	
			$('#C1M').on('mouseenter',function(){
			$('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','none');
			$('#C1N').css('display','inline-block');
			
        });
	
		
			$('#C1N').on('mouseleave',function(){
			$('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','inline-block');
			$('#C1N').css('display','none');
             
		});
	
			$('#C1N').on('mouseenter',function(){
			$('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','none');
			$('#C1N').css('display','inline-block');
			
        });
			
			
			/* Carita 2 */
			
			$('#C2M').on('mouseleave',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C2M').css('display','none');
			$('#C2N').css('display','inline-block');
             
		});
	
			$('#C2M').on('mouseenter',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C2M').css('display','none');
			$('#C2N').css('display','inline-block');
			
        });
	
		
			$('#C2N').on('mouseleave',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C2M').css('display','inline-block');
			$('#C2N').css('display','none');
             
		});
	
			$('#C2N').on('mouseenter',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C2M').css('display','none');
			$('#C2N').css('display','inline-block');
			
        });
		
		
		
		/* Carita 3 */
		
			$('#C3M').on('mouseleave',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','none');
			$('#C3N').css('display','inline-block');
             
		});
	
			$('#C3M').on('mouseenter',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','none');
			$('#C3N').css('display','inline-block');
			
        });
	
		
			$('#C3N').on('mouseleave',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
			$('#C3N').css('display','none');
             
		});
	
			$('#C3N').on('mouseenter',function(){
			$('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','none');
			$('#C3N').css('display','inline-block');
			
        });
		
		
		
		
		
	/* Fin de codigo caritas al pasar el mouse */
		
		
		
		$('#C1M').on('click',function(){
		    $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','none');
            $('#C1N').css('display','inline-block');
            $("#btn_2_1").click();
        });
       
        
	
        $('#C2M').on('click',function(){
            $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            
            $('#C2M').css('display','none');
            $('#C2N').css('display','inline-block');
            $("#btn_2_2").click();
        });
      
        $('#C3M').on('click',function(){
            $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3N').css('display','inline-block');
            $('#C3M').css('display','none');
            $("#btn_2_3").click();
            
        });
        
        $('#C1N').on('click',function(){
            $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            $('#C1M').css('display','none');
            $('#C1N').css('display','inline-block');
            $("#btn_2_1").click();
        });
       
        
        $('#C2N').on('click',function(){
            $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3M').css('display','inline-block');
            $('#C3N').css('display','none');
            
            $('#C2M').css('display','none');
            $('#C2N').css('display','inline-block');
            $("#btn_2_2").click();
        });
      
        $('#C3N').on('click',function(){
            $('#C1M').css('display','inline-block');
            $('#C1N').css('display','none');
            $('#C2M').css('display','inline-block');
            $('#C2N').css('display','none');
            $('#C3N').css('display','inline-block');
            $('#C3M').css('display','none');
            $("#btn_2_3").click();
            
        });
        
        
		
		
		//
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
		$('#input_21').on('click',function(){
			$('#input_21').on('keyup',function(){
				var vacios=/^\s*$/;//campos vacios
				if(vacios.test($('#input_21').val())){
					$('#btn_2_content').css('display','none');
				}else{
					$('#btn_2_content').css('display','inline-block');
				}
			});
			$('#input_21').on('change',function(){
				var vacios=/^\s*$/;//campos vacios
				if(vacios.test($('#input_21').val())){
					$('#btn_2_content').css('display','none');
				}else{
					$('#btn_2_content').css('display','inline-block');
				}
			});
		});
		$('#input_24').on('click',function(){
			$('#input_24').on('keyup',function(){
				var vacios=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;//emails
				if(vacios.test($('#input_24').val())){
					$('#btn_3_content').css('display','inline-block');
				}else{
					$('#btn_3_content').css('display','none');
				}
			});
			$('#input_24').on('change',function(){
				var vacios=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;//emails
				if(vacios.test($('#input_24').val())){
					$('#btn_3_content').css('display','inline-block');
				}else{
					$('#btn_3_content').css('display','none');
				}
			});
		});
		
		
	};
	this.scrollIn = function(scrollIn){		
		if(scrollIn== 11){
			scrollIn='A';
		}else if(scrollIn == 'A'){
			scrollIn=11;
		}
		$('body').scrollTo('#index_'+scrollIn,900,{offset:-250});
	}
	this.Up = function(){
		scrollIn++;		
		if(parseFloat(scrollIn) >= 25){
			scrollIn=25;
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
		if(contador == 24){		
			for(pregunta in resultados['quiz']){
				switch(parseInt(pregunta)){
					case 2:
						if(resultados['quiz'][pregunta] == 1){
							resultados['result']['F125']+=3;
							resultados['result']['F130']+=0;
						}else if(resultados['quiz'][pregunta] == 2){
							resultados['result']['F125']+=2;
							resultados['result']['F130']+=4;
						}else if(resultados['quiz'][pregunta] == 3) {
							resultados['result']['F125']+=0;
							resultados['result']['F130']+=0;
						}					
						break;
					case 3:
						resultados['result']['F125']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 4:
						resultados['result']['F122']+=parseInt(match[3][resultados['quiz'][pregunta]]);
						resultados['result']['F123']+=parseInt(match[2][resultados['quiz'][pregunta]]);
						resultados['result']['F125']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 5:
						if(resultados['quiz'][pregunta] == 1){
							resultados['result']['F120']+=0;
							resultados['result']['F121']+=2;
							resultados['result']['F126']+=3;
						}else{
							resultados['result']['F120']+=2;
							resultados['result']['F121']+=0;
							resultados['result']['F126']+=0;
						}
						break;
					case 6:
						resultados['result']['F126']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 7:
						resultados['result']['F126']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 8:
						if(resultados['quiz'][pregunta] == 1){
							resultados['result']['F120']+=0;
							resultados['result']['F121']+=3;
							resultados['result']['F126']+=3;
						}else{
							resultados['result']['F120']+=3;
							resultados['result']['F121']+=0;
							resultados['result']['F126']+=0;
						}
						break;
					case 9:
						resultados['result']['F132']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 10:
						resultados['result']['F124']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 11:
						resultados['result']['F129']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 12:
						resultados['result']['F129']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 13:
						resultados['result']['F129']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 14:
						resultados['result']['F128']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 15:
						resultados['result']['F128']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 16:
						resultados['result']['F127']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 17:
						resultados['result']['F127']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 18:
						resultados['result']['F127']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 19:
						resultados['result']['F130']+=parseInt(match[1][resultados['quiz'][pregunta]]);
						break;
					case 20:
						resultados['result']['F131']+=parseInt(match[0][resultados['quiz'][pregunta]]);
						break;
					case 22:
						switch(parseInt(resultados['quiz'][pregunta])){
							case 1:
							case 2:
								resultados['result']['F106']+=1
								break;
							case 3:
							case 4:
							case 5:
								resultados['result']['F106']+=2
								break;
							case 6:
								resultados['result']['F106']+=3
								break;
							case 7:
								resultados['result']['F106']+=4
								break;
							case 8:
							case 9:
							case 10:
								resultados['result']['F106']+=5
								break;	
						}
						break;
				}
			}
			resultados['result']['F127']=parseFloat(parseInt(resultados['result']['F127'])/3).toFixed(2);	
			resultados['result']['F128']=parseInt((resultados['result']['F128'])/2).toFixed(2);
			resultados['result']['F129']=parseInt((resultados['result']['F129'])/3).toFixed(2);
			
			$.post(WEBROOT+'assessments/addCdda',{dataQuest:resultados},function(data){
				if(data){
					window.location = WEBROOT+"career/assessment-cdda-results";
				}
			},'json');
		}else{
			alert('Please complete the unanswered questions'); 
		}
	});
});

