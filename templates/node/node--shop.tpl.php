<?php
/**
 * @file node--shop.tpl.php
 * Contour's node template for the Product Display content type.
 */
global $base_url;
$image_url = file_create_url($content['product:field_image']['#items'][0]['uri']); 
$sku = $content['product:commerce_price']['#object']->sku;
$product = commerce_product_load_by_sku($sku);
$id = $product->product_id;
?>

<!-- Product class product-->
<div class="three columns product">
	<div class="product-holder">
	<!-- image -->
		<img src="<?php print $image_url; ?>" alt="product">
		<!-- save for later button -->

		<h5 class="text-color ubuntu bold smalltoppadding"><?php print flag_create_link('shop', $node->nid); ?></h5>
		<!-- add to cart button -->
		<a href="<?php print $base_url.'/product/add/'.$id; ?>" title="Add to cart">
		<div class="add-product">
			<h6 class="text-color-inverse meta extrabold">ADD TO CART</h6>
		</div>
		</a>
	</div>
	<!-- end product holder -->
	<!-- link to product info -->
	<a href="<?php print $node_url;?>" title="View product details">
	<div class="product-info">
		<h6 class="greytext caps"><?php echo $title; ?></h6>
		<h6 class="text-color meta extrabold ubuntu"><?php print render($content['product:commerce_price']); ?> </h6>
	</div>
	</a>
</div>