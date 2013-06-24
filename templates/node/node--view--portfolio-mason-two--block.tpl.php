<?php
/**
 * @file node--view--portfolio-mason-two--block.tpl.php
 * Contour's node template for the Portfolio Mason block (second style).
 */

?>

<!-- for masonic two we use li class box-two -->
<li class="box-two <?php print strip_tags(render($content['field_portfolio_category'])); ?>">
<!-- image -->
<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="box item">
<!-- prettyphoto link -->
<div class="overlay">
	<a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>">
	<i class="icon-zoom-in blacktext right"></i>
	</a>
</div>
<!-- project info -->
<div class="info">
	<h6 class="blacktext bold caps"><?php print $title; ?></h6>
	<a href="<?php print $node_url;?>" class="greytext smallfont caps"><?php echo t('VIEW PROJECT'); ?></a>
</div>
</li>