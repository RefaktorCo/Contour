<?php
/**
 * @file
 * Expressa's node template for the Featured Products block.
 */
 
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']);  
?>

<!-- product page widget -->
		<div class="product-widget">
			<img src="<?php print file_create_url($content['product:field_image']['#items'][0]['uri']); ?>" alt="product">
			<div class="product-info">
				<h5 class="greytext meta caps"><?php echo $title; ?></h5>
				<h6 class="meta bold ubuntu"><?php print render($content['product:commerce_price']); ?></h6>
			</div>
		</div>