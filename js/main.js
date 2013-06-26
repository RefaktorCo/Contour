jQuery(document).ready(function ($) {

  $('.search-api-sorts li a').addClass('medium default btn');
  
  $('.commerce-add-to-cart input[type="submit"]').addClass('medium color-button btn');
  
  $('#navigationmain').mobileMenu();
  
  $('#block-views-portfolio-two-block div.four.columns.basic:nth-child(3n+1)').addClass('alpha');
  
  $('#block-views-portfolio-three-block div.three.columns:nth-child(4n+1)').addClass('alpha');
  
  $('div.three.columns.product:nth-child(4n+1)').addClass('alpha');
  
  /* $().UItoTop({ easingType: 'easeOutQuart' }); */
  

jQuery(document).ready(function ($) {
	if ($(window).width() > 768) {
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