$(function() {

	$('#ulStates').keydown(function(e){ 
		var chr =String.fromCharCode( e.which );
		console.log(chr);
	});



	preloadf();
	checkbg();
	checkkey();
	checksucces();

	cstep = 1;
	interval = setInterval(nextstep, 5000);
	//gotostep(4);

	$('#education').next().find('li a').click(function(){
				$('#formulario').css('maxHeight', '900px');

		//console.log($('#education').val());
		$('#school').show();
		cw = $( window ).width();		
		if (cw < 750)
			$('#formulario').css('height', '1170');
		else
			$('#formulario').css('height', '930');
		
		if ($('#education').val() == "Doctorate") {
			$('#formulario').css('height', '1236');
			$('div.EducationBac').hide();
			$('div.EducationMas').hide();
			$('div.EducationDoc').show();
			if (cw < 750){
				$('#formulario').css('maxHeight', '980px');
			}
			else 
				$('#formulario').css('height', '1000');
		}
		else if ($('#education').val() == "Master’s degree") {
			$('#formulario').css('maxHeight', '980px');
			$('div.EducationBac').hide();
			$('div.EducationMas').show();
			$('div.EducationDoc').hide();
			if (cw < 750){
				$('#formulario').css('height', '1236');
			}
			else
				$('#formulario').css('height', '1000');
		}
		else if ($('#education').val() == "Bachelor’s degree") {
			$('#formulario').css('maxHeight', '980px');
			$('div.EducationBac').show();
			$('div.EducationMas').hide();
			$('div.EducationDoc').hide();
			if (cw < 750){
				$('#formulario').css('height', '1236');
			}
			else
				$('#formulario').css('height', '1000');
		} 
		else {
			$('#formulario').css('maxHeight', '900px');
			$('div.EducationBac').hide();
			$('div.EducationMas').hide();
			$('div.EducationDoc').hide();	
			if (cw < 750){
				$('#formulario').css('height', '1170');
			}
			else
				$('#formulario').css('height', '930');
		}
	});


	isiphone = false;
	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
		isiphone = true;
	}
	oldwidth = $( window ).width();
	if (oldwidth < 750 || isiphone) {
		//$('.form-inline').after($('#map-canvas'));
		$('#pantalla_movil').append($('#formulario'));
	}
	$( window ).resize(function() {
		moveform();
		checkbg();
	})
	checkTermsPrivacy();

});

function gotostep(stepno) {
	if (stepno < 0 || stepno > 4) stepno = 1;

	$('.buline .active').removeClass('active');
	$('.buline .bullet:nth-child('+stepno+')').addClass('active');

	$('.fpoints table tr.active').removeClass('active');
	$('.fpoints table tr:nth-child('+stepno+')').addClass('active');;

	$('#fondoa').removeClass('fondo'+cstep).addClass('fondo'+stepno).show();
	$('#fondob').animate({opacity: 0}, 800, function() {
		$('#fondob').removeClass('fondo'+cstep).addClass('fondo'+stepno);
		$('#fondob').animate({opacity: 1}, 800, function() { $('#fondoa').hide(); });
		cstep = stepno;
	});
	//$('#fondo').removeClass('fondo'+cstep).addClass('fondo'+stepno);
}

function nextstep() {
	newstep = cstep + 1;
	if (newstep > 4) newstep = 1;
	gotostep(newstep);
}

function goto(stepno) {
	clearInterval(interval);
	gotostep(stepno);
}

function preloadf() {
	$('<img/>').attr('src', WEBROOT+'img/dream/fondo1.jpg').load(function() {
	   	$(this).remove(); 
	   	$('#fondo').show();
	});
}

function moveform() {
	width = $( window ).width();
	haschanged = ((oldwidth - 750)*(width - 750) < 0);
	if (!haschanged) {
		return;
	}

	if (width >= 750 && !isiphone) {
		$('#subtitulo').after($('#formulario'));
	} else {
		$('#pantalla_movil').append($('#formulario'));
	}
	oldwidth = width;
}

function checkTermsPrivacy() {
	$('.checkTermsPrivacy').click(function(){
		if( $('#immm').attr('src') ==  WEBROOT+'img/dream/check.png'){
			$('#immm').attr('src', WEBROOT+'img/dream/checkSelected.png');
		}
		else{
			 $('#immm').attr('src', WEBROOT+'img/dream/check.png');
		}
	})
}

function checkbg() {
	// width = $( window ).width();
	// if (width > 750) return;
	hh = $('#fondo').height();
	$('#fondoa').css('height', hh);
	$('#fondob').css('height', hh);
}

function checkkey() {
	$(document).keypress(function(event){
	    $('.doa.open').each(function() {
	    	chr = String.fromCharCode(event.which);
	    	tul = $(this).find('ul');
			$(tul).find('li').each(function() {
	    		var name = $(this).text();	
	    		if( name.toLowerCase().indexOf(chr.toLowerCase()) === 0 ) {
		            tul.scrollTo($(this));
		            //$(this).find('a').click();
		            return false; 
		        }
	    	});
	    });
	})
}

function checksucces() {
	// $('#name').keyup(function() {
	// 	if ($(this).val() == 'success') {
	// 		$('#bott1').hide();
	// 		$('#bott2').show();
	// 	} else {
	// 		$('#bott2').hide();
	// 		$('#bott1').show();
	// 	}
	// });
}

