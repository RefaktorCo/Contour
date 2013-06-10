<?php
$cat = render($content['field_portfolio_category']);
$cat = strip_tags($cat);
$cat = str_replace(' ', ' - ', $cat);
?>

<li class="box-three <?php print strip_tags(render($content['field_portfolio_category'])); ?>">
	<!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="box item">
	<div class="overlay">
		<!-- prettyphoto link -->
		<a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>"><i class="icon-zoom-in blacktext right"></i></a>
	</div>
	<a href="<?php print $node_url;?>" title="Click to view project">
	<div class="info">
		<h6 class="blacktext meta bold caps"><?php print $title; ?></h6>
	</div>
	</a>
</li>