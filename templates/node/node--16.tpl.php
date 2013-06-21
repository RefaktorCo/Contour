<?php
/**
 * @file node--portfolio.tpl.php
 * Contour's theme implementation to display a single Portfolio node.
 */
 
?>
<div class="folio-wide bigtoppadding">
  <!-- begin flexslider -->
	<div class="flexslider">
		<ul class="slides">
		  <?php print render ($content['field_portfolio_slider']); ?>
		</ul>
	</div>


<?php if($teaser): ?>
  <a href="<?php print $node_url;?>"><h4 class="text-color dosis bold portfolio-teaser-heading"><?php print $title; ?></h2></a>
<?php endif;?>
<?php
  // Hide comments, tags, and links now so that we can render them later.
  hide($content['field_portfolio_slider']);
  hide($content['field_image']);
  hide($content['links']);
  hide($content['field_portfolio_category']);
  hide($content['field_portfolio_type']);
  print render($content);
?>

</div>		