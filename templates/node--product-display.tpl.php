<?php
/**
 * @file
 * Expressa's node template for the Product Display content type.
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
	    
			  <h3><?php echo $title; ?></h3>  
			    
			  <?php print render($content['body']); ?>  
			  
			  <?php print render($content['product:commerce_price']); ?> 
			  			  
			  <div class="product-display-cart-line">
			  
			  <?php print render($content['field_reference']); ?>		 
			  
			  <?php print flag_create_link('shop', $node->nid); ?>
	    </div>
			
				     
			</div>
	  </div>
  </div>
	
	

</article>