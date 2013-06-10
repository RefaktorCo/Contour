<!-- PORTFOLIO ITEM -->
<div class="four columns basic">
  <!-- image -->
	<img src="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" alt="item">
	
	
	<!-- project info -->
	<div class="basictitle">
	  <a href="<?php print $node_url;?>" title="click to view project">
		<h6 class="blacktext"><?php print $title; ?></h6>
		<h6 class="greytext smallfont"><?php print render($content['field_portfolio_category']); ?></h6>
    </a>
	</div>  
	
	<!-- prettyphoto link -->																																																											<div class="basicicon">			
	  <a href="<?php echo file_create_url($node->field_image['und'][0]['uri']); ?>" data-rel="prettyPhoto" title="<?php print $title; ?>"><i class="icon-zoom-in whitetext"></i></a>
	</div> 
</div>
