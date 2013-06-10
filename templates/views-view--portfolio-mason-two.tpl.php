<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */
?>
	<?php if ($header): ?>
    <?php print $header; ?>
	<?php endif; ?>
	
	<section class="row">
	<!-- portfolio mason one uses ul id masonic -->
	<ul id="masonic-two">
		  <?php print render($title_prefix); ?>
		 
		  <?php print render($title_suffix); ?>

		
		  <?php if ($exposed): ?>
		    <div class="view-filters">
		      <?php print $exposed; ?>
		    </div>
		  <?php endif; ?>
		
		  <?php if ($attachment_before): ?>
		    <div class="attachment attachment-before">
		      <?php print $attachment_before; ?>
		    </div>
		  <?php endif; ?>
		
		  <?php if ($rows): ?>
		   
		      <?php print $rows; ?>
		  
		  <?php elseif ($empty): ?>
		    <div class="view-empty">
		      <?php print $empty; ?>
		    </div>
		  <?php endif; ?>
		
		  <?php if ($pager): ?>
		    <?php print $pager; ?>
		  <?php endif; ?>
		
		  <?php if ($attachment_after): ?>
		    <div class="attachment attachment-after">
		      <?php print $attachment_after; ?>
		    </div>
		  <?php endif; ?>
		
		  <?php if ($more): ?>
		    <?php print $more; ?>
		  <?php endif; ?>
		
		  <?php if ($footer): ?>
		    <div class="view-footer">
		      <?php print $footer; ?>
		    </div>
		  <?php endif; ?>
		
		  <?php if ($feed_icon): ?>
		    <div class="feed-icon">
		      <?php print $feed_icon; ?>
		    </div>
		  <?php endif; ?>
	</ul>
</section>
<script>
//<![CDATA[
jQuery(document).ready(function ($) {
$(window).load(function(){
    var container = $("#masonic-two");
    container.masonry({
        itemSelector : 'ul#masonic-two > li',
    });
    // cache container
var $container = $('#masonic-two');
// initialize isotope
$container.isotope({
  itemSelector : 'li.box-two'
});
// filter items when filter link is clicked
$('#filters a').click(function(){
  var selector = $(this).attr('data-filter');
  $container.isotope({ filter: selector });
  return false;
});
var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');
      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
 });
});
});
//]]>
</script>