<li class="box Illustration">
<!-- image -->
<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="box item">
<!-- project info -->
<div class="box-info">
	<div class="text">
		<a href="<?php print $node_url;?>" title="Click to view project">
		<h5 class="bold whitetext big-shadow"><?php print $title; ?></h5>
		<h6 class="light whitetext smallfont small-shadow"><?php print render($content['field_portfolio_category']); ?></h6>
		</a>
	</div>
</div>
</li>