<?php
/**
 * @file
 * Contour's node template for the Testimonials content type.
 */
 
?>
<div>
  <div class="quote">
		<i class="icon-quote-left"></i>
		<h6 class="greytext"><?php print render($content['field_testimonial_content']); ?></h6>
		<i class="icon-quote-right"></i>
  </div>
	<!-- person image -->
	<div class="credit">
		<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" class="person"/>
		<h6 class="blacktext smallfont"><?php print render($content['field_testimonial_name']); ?></h6>
	</div>
</div>