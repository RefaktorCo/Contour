<?php
/**
 * @file
 * Expressa's node template for the Product Display content type.
 */
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']); 
?>

	<!-- Product class product-->
			<div class="three columns product">
				<div class="product-holder">
				<!-- image -->
					<img src="<?php print $image_url; ?>" alt="product">
					<!-- save for later button -->
					<a href="#" title="Save product for later">
					<div class="product-icon">
						<?php print flag_create_link('shop', $node->nid); ?>
					</div>
					</a>
					
					<!-- add to cart button -->
					<a href="#" title="Add to cart">
					<div class="add-product">
						<h6 class="blacktext meta extrabold">ADD TO CART</h6>
					</div>
					</a>
				</div>
				<!-- end product holder -->
				<!-- link to product info -->
				<a href="<?php print $node_url;?>" title="View product details">
				<div class="product-info">
					<h6 class="greytext "><?php echo $title; ?></h6>
					<h6 class="blacktext meta extrabold ubuntu"><?php print render($content['product:commerce_price']); ?> </h6>
				</div>
				</a>
			</div>

