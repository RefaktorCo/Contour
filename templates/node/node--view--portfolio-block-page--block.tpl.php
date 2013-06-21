<?php
/**
 * @file node--view--portfolio-block-page--block.tpl.php
 * Contour's node template for the Portfolio block (page).
 */
?>

<li class="gridblock">
	<a href="<?php print $node_url;?>" title="Click To View Project">
	<!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="griditem">
	<div class="info">
		<h6 class="text-color caps largefont bold"><?php print $title; ?></h6>
		<h5 class="greytext smallfont caps">
			<?php print render($content['field_portfolio_category']); ?>
		</h5>
	</div>
	</a>
</li>