$(function() {


	
	checkbg();
	checksucces();

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
		if( $('#immm').attr('src') ==  '/img/dashboard/check.png'){
			$('#immm').attr('src', '/img/dashboard/checkSelected.png');
		}
		else{
			 $('#immm').attr('src', '/img/dashboard/check.png');
		}
	})
	$('.check16').click(function(){
		if( $('#immm16').attr('src') ==  '/img/dashboard/check.png'){
			$('#immm16').attr('src', '/img/dashboard/checkSelected.png');
		}
		else{
			 $('#immm16').attr('src', '/img/dashboard/check.png');
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
	$('#name').keyup(function() {
		if ($(this).val() == 'success') {
			$('#bott1').hide();
			$('#bott2').show();
		} else {
			$('#bott2').hide();
			$('#bott1').show();
		}
	});
}

