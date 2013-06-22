<?php
/**
 * @file node--product-display.tpl.php
 * Contour's node template for the Product Display content type.
 */

?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="product-display-node">
    <div class="row">
  
	   <div class="six columns">
	  	 <div class="flexslider">
	       <ul class="slides">
	         <?php print render($content['field_product_slider']); ?>
	       </ul>
	  	 </div>  
	    </div>
	    
	    <div class="six columns">
	    
			  <h3 class="caps text-color product-title"><?php echo $title; ?></h3>  
			  <h6 class="smallfont bold greytext">SKU: <?php print $content['product:commerce_price']['#object']->sku; ?></h6>
			  <h5 class="text-color ubuntu bold smalltoppadding"><?php print render($content['product:commerce_price']); ?> </h5>			  
			  <!-- tabs -->
				<div class="tabs bigtoppadding">
					<ul>
						<!-- tab headings -->
						<li class="active"><a href="#tab1">ITEM INFO</a></li>
						<li class=""><a href="#tab2">PRODUCT CARE</a></li>
						
					</ul>
					<!-- tab content -->
					<div class="active" data-tab="tab1">
						<p>
							 <?php print render($content['field_item_info']); ?>
						</p>
					</div>
					<div data-tab="tab2">
						<p>
							<?php print render($content['field_product_care']); ?>
						</p>
					</div>
					
				</div>
				<!-- end tabs -->
			    
			  <?php print render($content['body']); ?>  
			  
			  <div class="product-display-cart-line"><?php print render($content['field_reference']); ?></div> 
	
			</div>
	  </div>
  </div>

</article>