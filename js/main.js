//price range slider
$(".price-slider").noUiSlider({
    range: [10, 100]
   ,start: [20, 80]
   ,step: 10
   ,slide: function(){
      var values = $(this).val();
      $(".prices").text(
         values[0] +
         " - " +
         values[1]
      );
   }
});

var prices = [];

prices.push({range:[10,100],start:[20,80],handles:2,step:10,slide:function(){var values=$(this).val();$('.prices').text(values[0] + ' - ' + values[1]);}});

// twitter 
jQuery(function($){
        $(".tweet").tweet({
            username: "envato",
            join_text: "auto",
            avatar_size: null,
            count: 2,
            auto_join_text_default: " we said,", 
            auto_join_text_ed: " we",
            auto_join_text_ing: " we were",
            auto_join_text_reply: " we replied to",
            auto_join_text_url: " we were checking out",
            loading_text: "loading tweets..."
        });
    });





$(document).ready(function(){
 if ($(window).width() > 768) {
			$("#navbar").sticky({topSpacing:0});
$("#sticky-sidebar").sticky({topSpacing:75});
$("#sticky-sidebar").sticky({bottomSpacing:470});
	}
});





$(document).ready(function(){
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            animationSpeed: 'normal', /* fast/slow/normal */
            padding: 40, /* padding for each side of the picture */
            opacity: 0.35, /* Value betwee 0 and 1 */
            showTitle: true, /* true/false */
            allowresize: true, /* true/false */
            theme: 'light_square' /* light_rounded / dark_rounded / light_square / dark_square */
        });
    });






// Project Planner

function CheckAll(x)
{
    
if (ISBLANK(x.fieldnm_1.value)) 
	{ 	
		    alert("Please define value for Your name field !!");
    	    return false;
    }

if (ISBLANK(x.fieldnm_2.value)) 
	{ 	
		    alert("Please define value for Your E-mail field !!");
    	    return false;
    }

if (ISBLANK(x.fieldnm_11.value)) 
	{ 	
		    alert("Please define value for Your project budget field !!");
    	    return false;
    }

 
	 return true;
}

/// email check

function checkemail(myemail)
{
var str=myemail;
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
{
testresults=true
}
else
{
testresults=false
}
return (testresults)
}

/// to check that perticular value is EMPTY OR NOT
function ISBLANK(xx)
{ 
        var cc=0,tt;
		for(tt=0; tt<xx.length; tt++)
		{
		     if (xx.charAt(tt)==' ')
			 {
			 	cc=cc+1; // count blank character
			 }
		}
		if (cc==xx.length)
		{
			return true;  //// means it is BLANK
		}
	     return false;	//// means it is NOT BLANK
}

function is_radio_button_selected(fieldnm)
{
// set var radio_choice to false
var radio_choice = false;

// Loop from zero to the one minus the number of radio button selections
for (counter = 0; counter < fieldnm.length; counter++)
{
// If a radio button has been selected it will return true
// (If not it will return false)
if (fieldnm[counter].checked)
radio_choice = true; 
}

if (!radio_choice)
{
return (false); /// means not selected
}
return (true); /// means selected
}

// navivation 


selectnav('menu', {
  label: '### Table of content ### ',
  nested: true,
  indent: '-'
});

/*!
 * Vallenato 1.0
 * A Simple JQuery Accordion
 *
 * Designed by Switchroyale
 * 
 * Use Vallenato for whatever you want, enjoy!
 */

$(document).ready(function()
{
	//Add Inactive Class To All Accordion Headers
	$('.accordion-header').toggleClass('inactive-header');
	
	//Set The Accordion Content Width
	var contentwidth = $('.accordion-header').width();
	$('.accordion-content').css({'width' : contentwidth });
	
	//Open The First Accordion Section When Page Loads
	$('.accordion-header').first().toggleClass('active-header').toggleClass('inactive-header');
	$('.accordion-content').first().slideDown().toggleClass('open-content');
	
	// The Accordion Effect
	$('.accordion-header').click(function () {
		if($(this).is('.inactive-header')) {
			$('.active-header').toggleClass('active-header').toggleClass('inactive-header').next().slideToggle().toggleClass('open-content');
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
		
		else {
			$(this).toggleClass('active-header').toggleClass('inactive-header');
			$(this).next().slideToggle().toggleClass('open-content');
		}
	});
	
	return false;
});

(function( $ ) {
	 if ($(window).width() > 480) {
	$( function(){
		$( ".carousel" ).carousel();
	} );
}
}( jQuery ));

$(window).load(function() {
  $('.home .flex-control-nav').addClass('show');
});