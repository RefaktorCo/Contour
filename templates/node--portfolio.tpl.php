<?php
/**
 * @file
 * Contour's theme implementation to display a single Portfolio node.
 */
 
?>
<div class="eight columns">
  <!-- begin flexslider -->
	<div class="flexslider">
		<ul class="slides">
		  <?php print render ($content['field_portfolio_slider']); ?>
		</ul>
	</div>
</div>
<div class="four columns">
<?php
  // Hide comments, tags, and links now so that we can render them later.
  hide($content['field_portfolio_slider']);
  hide($content['field_image']);
  hide($content['field_portfolio_category']);
  hide($content['field_portfolio_type']);
  print render($content);
?>

</div>		