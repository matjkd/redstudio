/*================================================================*/
/* Sticky menu
/*================================================================*/
$(window).scroll(function() {
	// add navbar opacity on scroll
	if ($(this).scrollTop() > 100) {
		$(".navigation").addClass("sticky");
	} else {
		$(".navigation").removeClass("sticky");
	}

	// global scroll to top button
	if ($(this).scrollTop() > 150) {
		$('.toTop').fadeIn();
	} else {
		$('.toTop').fadeOut();
	}
});

/*================================================================*/
/* Match Height function
/*================================================================*/
function autoheight(element) {
$(element).css('height', 'auto');
	var highestCol = Math.max.apply(Math, $(element).map(
  function(){
    return $(this).height();
  }
));
	$(element).height(highestCol);
}
/*================================================================*/
/* Validation Functions
/*================================================================*/

//validate email
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

//validate name
function validateName(name) {
     var re = /[A-Za-z0-9]{2,40}/;
    return re.test(name);
 }
 
 //validate phone  
    function validatePhone(phone) {
     var re = /[A-Za-z0-9]{2,40}/;
    return re.test(phone);
     }



$(document).ready(function(){
	
/*================================================================*/
/*  superfish
/*================================================================*/
$('.nav-container').superfish({ 
        delay:       0,
        animation:   {
            opacity:'show',
            height:'show'
        },
		animationOut:   {
            opacity:'hide',
            height:'hide'
        },
        speed:       'fast',
        autoArrows:  true
    });
/*================================================================*/
/*	superfish mobile fix 
/*  there is a bug in superfish that causes the menu to not open
/*  properly until it's been opened and closed. this simulates that.
/*================================================================*/
		
		  $('#mobileMenu').trigger('click');
		  $('#mobileMenu').trigger('click');
 





/*================================================================*/
/* pretty photo popup initiate
/*================================================================*/
 $("a[data-rel^='prettyPhoto']").prettyPhoto({
 social_tools: ""
 });
 
 
 
/*================================================================*/	
/* scroll to top action	
/*================================================================*/
$('.toTop').click(function() {
	$("html, body").animate({
		scrollTop : 0
	}, 700);
	return false;
});

/*================================================================*/	
/* Sequence js code
/*================================================================*/
if ($("#sequence").length > 0){
    var options = {
        autoPlay: true,
        nextButton: true,
        prevButton: true,
        preloader: true,
        navigationSkip: false
    };
    var sequence = $("#sequence").sequence(options).data("sequence");

    sequence.afterLoaded = function(){
        $(".sequence-prev, .sequence-next").fadeIn(500);
    }
}
	
/*================================================================*/	
	//activate bootstrap popover
/*================================================================*/
	$('body').popover({
             selector: '[data-toggle="popover"]',
             trigger: 'hover'
         });
 
         $('body').tooltip({
             selector: 'a[rel="tooltip"], [data-toggle="tooltip"]'
         });

/*================================================================*/	
	//Form Validation
/*================================================================*/		 
$('#formemail').tooltip( {
        title: 'Invalid email address',
        placement: 'right',
        trigger: 'manual'
    });
    
     $('#formphone').tooltip( {
        title: 'Invalid phone number',
        placement: 'right',
        trigger: 'manual'
    });

    $('#formname').tooltip( {
        title: 'You must enter your name',
        placement: 'right',
        trigger: 'manual'
    });

    $('#callback-form').submit( function() {
        var validForm = true;
        // validate email
        if( validateEmail( $('#formemail').val() ) == false ) {
            $('#formemail').tooltip('show');
            validForm = false;
        }
        else {
            $('#formemail').tooltip('hide');
        }
        
        
         // validate phone
        if( validatePhone( $('#formphone').val() ) == false ) {
            $('#formphone').tooltip('show');
            validForm = false;
        }
        else {
            $('#formphone').tooltip('hide');
        }
        
        // validate name
        if( validateName( $('#formname').val() ) == false ) {
         	$('#formname').tooltip('show');
            validForm = false;	
         } else {
            $('#formname').tooltip('hide');
        }
       
        
        if( validForm ) {
            message( 'error', 'Ooops', "Access Denied", 3000 );
        }
        return false;
    });
		 

/*================================================================*/		 
	//equal height elements on page load
/*================================================================*/	
	autoheight('.featureBox');
 		 


// end of document ready		 
});


  
/*================================================================*/		 
	//equal height elements on window resize
/*================================================================*/	
$(window).resize(function() {
	
	autoheight('.featureBox');
	
});