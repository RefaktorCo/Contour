<?php
/**
 * @file node--view--more-products--block.tpl.php
 * Contour's node template for the More Products block.
 */
global $base_url;

$product_id = '';

if (!empty($node->field_reference[0])) {
	$product_id = $node->field_reference[0]['product_id'];
}

if (!empty($node->field_reference['und'])) {
	$product_id = $node->field_reference['und'][0]['product_id'];
}

?>
	
<div class="two columns product">
	<div class="product-holder">
		<!-- product image -->
		<img src="<?php print file_create_url($content['product:field_image']['#items'][0]['uri']); ?>" alt="product">
		<!-- save product for later -->
		<h5 class="blacktext ubuntu bold smalltoppadding"><?php print flag_create_link('shop', $node->nid); ?></h5>		<!-- add to cart button -->
		<a href="<?php print $base_url.'/product/add/'.$product_id
; ?>" title="Add to cart">
		<div class="add-product">
			<h6 class="blacktext meta extrabold">ADD TO CART</h6>
		</div>
		</a>
	</div>
	<!-- end product holder -->
	<!-- product info page link -->
	<a href="<?php print $node_url;?>" title="View product details">
	<div class="product-info">
		<h6 class="greytext caps"><?php echo $title; ?></h6>
		<h6 class="blacktext meta extrabold ubuntu"><?php print render($content['product:commerce_price']); ?> </h6>
	</div>
	</a>
</div>