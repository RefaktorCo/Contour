<?php
/**
 * @file
 * Expressa's node template for the Featured Products block.
 */
 
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']);  
?>

<!-- product page widget -->
		<div class="product-widget">
			<a href="<?php print $node_url;?>"><img src="<?php print file_create_url($content['product:field_image']['#items'][0]['uri']); ?>" alt="product"></a>
			<a href="<?php print $node_url;?>" title="View product details">
			<div class="product-info">
				<h5 class="greytext meta caps"><?php echo $title; ?></h5>
				<h6 class="meta bold ubuntu greytext"><?php print render($content['product:commerce_price']); ?></h6>
			</div>
			</a>
		</div>