var WEBROOT = "";
var T = 0;
var ID_USUARIO = "";


function guardar_a_medias(ass, q, a){
	//guardar en bd el beta

	$.post(WEBROOT+'assessments/medio_assessment/'+ass+'/'+q+'/'+a,function(data){
		if(!data){
			alert('Error, Please try again.')
		}
	},'json');
}

function quiz_incompleto(arrayQuiz,arrayContestadas, ass, num){
    	var arrayMatch=new Object();
    	arrayMatch[2]={ 0:0,1:1, 2:1, 3:2, 4:2, 5:3, 6:3, 7:4 };
    
    	$.get(WEBROOT+'assessments/completado/'+ass, function(data) {
    		//datos_viejos = data;
    		if(data.length > 0){
    			var scroll_nuevo = 0;

					for (var i = 1; i <= data.length; i++) {
						if(data[i-1] != 0){
							arrayQuiz['quiz'][i]=''+data[i-1]+'';
							if(ass == 6){
								$('#btn_'+i+'_'+data[i-1]).addClass('elegido');
								$('#btn_'+i+'_'+data[i-1]).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
							}else if(ass == 9 && i == 6){
								$('#btn_6').html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
				    		$('#btn_6').css('background-color', 'rgb(153, 204, 0)');
				    		$('#btn_6').css('background-image', 'none');
				    		var idParaSelect = data[i-1];
								var text = $('li #'+idParaSelect).html();
								$('#input_6').val(text);
								$('#input_6').data('educa', idParaSelect);
								$('#selected_6').addClass('selected');
				    		arrayQuiz['quiz'][i] =  $('#input_6').data('educa');
							}else if(ass == 9 && i >= 13){
								$('#DivUnCheck_'+i+'_'+data[i-1]).css('display','none');
								$('#DivCheck_'+i+'_'+data[i-1]).css('display','block');
								$('#tabla_'+i).addClass('selected_tabla');
							}else if(ass == 3 && i == 10){
								var opciones = data[i-1].substring(0,data[i-1].length-3);
								opciones = opciones.split(",,,");

								for (var h = 1; h <= 7; h++) {
									if(opciones[h-1] == "1"){
										$('#UnCheck'+h).css('display','none');
										$('#Check'+h).css('display','block');
										$('#item_multiple'+h).addClass('active_multiple');
									}	
								};

								for (var h = 1; h < 8; h++) {
									if($('#item_multiple'+h).hasClass('active_multiple')){
										quest_10 ++;
									}
								}
								quest_10 = arrayMatch[2][quest_10];
								arrayQuiz['quiz'][i]=''+quest_10+'';

								$('#selected_10_1').addClass('selected');
								$('#btn_10_1').html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
							}else if(ass == 3 && i >= 25){
								$('#'+i+'_DivUnCheck'+data[i-1]).css('display','none');
								$('#'+i+'_DivCheck'+data[i-1]).css('display','inline-block');
								$('#tabla_'+i).addClass('selected_tabla');
							}else{
								$('#selected_'+i+'_'+data[i-1]).addClass('selected');
								$('#btn_'+i+'_'+data[i-1]).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
							}
							arrayContestadas[i]=true;
						}else{
							if(scroll_nuevo == 0)
								scroll_nuevo = i;
						}
					};

					if(ass == 6){
						$('.elegido').each(function(index) {
			        SELECCIONADOS++; 
			      });
					}else{
						$('span.selected').each(function(index) {
			        SELECCIONADOS++; 
			      });
			      if(ass == 9){
			      	$('table.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
			        });
			      }
			      if(ass == 3){
			      	$('table.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
		        	});
							$('div.selected_tabla').each(function(index) {
		            SELECCIONADOS++; 
		        	});
						}
					}

		      var porcentaje=0;
					for(x in arrayContestadas){
						if(arrayContestadas[x]){
							porcentaje++;
						}
					}
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