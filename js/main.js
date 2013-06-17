jQuery(document).ready(function ($) {

  $('.search-api-sorts li a').addClass('medium default btn');
  
// twitter 
jQuery(document).ready(function ($) {
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





jQuery(document).ready(function ($) {
	if ($(window).width() > 768) {
		$("#navbar").sticky({topSpacing:0});
		$("#sticky-sidebar").sticky({topSpacing:75});
		$("#sticky-sidebar").sticky({bottomSpacing:470});
}
});


jQuery(document).ready(function ($) {
  $("a[data-rel^='prettyPhoto']").prettyPhoto({
      animationSpeed: 'normal', /* fast/slow/normal */
      padding: 40, /* padding for each side of the picture */
      opacity: 0.35, /* Value betwee 0 and 1 */
      showTitle: true, /* true/false */
      allowresize: true, /* true/false */
      theme: 'light_square' /* light_rounded / dark_rounded / light_square / dark_square */
  });
});


// navivation 

jQuery(document).ready(function ($) {
	selectnav('menu', {
	  label: '### Table of content ### ',
	  nested: true,
	  indent: '-'
	});
});
/*!
 * Vallenato 1.0
 * A Simple JQuery Accordion
 *
 * Designed by Switchroyale
 * 
 * Use Vallenato for whatever you want, enjoy!
 */

jQuery(document).ready(function ($) {

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

jQuery(document).ready(function ($) {
  $('.carousel').carousel();
  
  $('.planner-webform .webform-component-textfield').addClass('six columns project_planner_item');
  $('.project_planner_item:even').addClass('alpha');
  
  $('.planner-webform input[type="submit"]').addClass('medium primary btn whitetext');
 
});

$(window).load(function() {
  $('.home .flex-control-nav').addClass('show');
});
});