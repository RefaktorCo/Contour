<!-- PORTFOLIO ITEM -->
<div class="three columns item">
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">
	
	<!-- prettyphoto link -->																																																														
	<a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>">
	<div class="item-icon">
		<i class="icon-zoom-in"></i>
	</div>
	</a>
	<!-- view project link with project title and project categories -->
	<a href="<?php print $node_url;?>" title="click to view project">
	<div class="item-info">
		<h6 class="color-text"><?php print $title; ?></h6>
		<h6 class="greytext smallfont"><?php print render($content['field_portfolio_category']); ?></h6>
	</div>
	</a>
</div>