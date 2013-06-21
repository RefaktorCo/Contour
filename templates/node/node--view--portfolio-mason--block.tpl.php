<?php
/**
 * @file node--view--portfolio-mason--block.tpl.php
 * Contour's node template for the Portfolio Mason block.
 */
$cat = render($content['field_portfolio_category']);
$cat = strip_tags($cat);
$cat = str_replace(' ', ' - ', $cat);
?>

<li class="box <?php print strip_tags(render($content['field_portfolio_category'])); ?>">
<!-- image -->
<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="box item">
<!-- project info -->
<div class="box-info">
	<div class="text">
		<a href="<?php print $node_url;?>" title="Click to view project">
		<h5 class="bold whitetext big-shadow"><?php print $title; ?></h5>
		<h6 class="light whitetext smallfont small-shadow caps"><?php print $cat; ?></h6>
		</a>
	</div>
</div>
</li>