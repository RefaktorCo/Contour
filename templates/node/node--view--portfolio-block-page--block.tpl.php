<li class="gridblock">
	<a href="<?php print $node_url;?>" title="Click To View Project">
	<!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="griditem">
	<div class="info">
		<h6 class="text-color caps largefont bold"><?php print $title; ?></h6>
		<p class="greytext smallfont caps">
			<?php print render($content['field_portfolio_category']); ?>
		</p>
	</div>
	</a>
</li>