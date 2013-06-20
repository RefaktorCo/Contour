<?php
/**
 * @file
 * Contour's theme implementation to display a single Drupal node.
 */
 
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> blog-post" <?php print $attributes; ?>>

  <?php if ($display_submitted): ?>
    <!-- post meta -->
			<p class=" blog-meta text-color smallfont bold">
				<i class="icon-calendar"></i> <?php echo t('Published:'); ?> <span class="light"><?php print format_date($node->created, 'custom', 'M d'); ?></span>
				<i class="icon-bookmark"></i> <?php echo t('Posted Under:'); ?> <span class="light"><?php print render($content['field_tags']); ?></span>
			</p>
			<!-- post title -->
  <?php endif; ?>

  <?php print render($title_prefix); ?>
    <h3 class="text-color dosis bold"<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h3>
  <?php print render($title_suffix); ?>
  <div class="grey-dotted midmargin"></div>
  <?php if (render($content['field_image'])) : ?> 
    <div class="node-image">
	    <?php print render($content['field_image']); ?>
	  </div>  
	<?php endif; ?>
    
  <div class="article-node-content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_image']);
      hide($content['field_tags']);
      print render($content);
    ?>
  
  
  <?php if($teaser): ?>
  <div class="medium primary btn">
  	<a href="<?php print $node_url;?>"><?php echo t('Read More'); ?></a>
  </div>	
  <?php endif;?>
  </div>
  <?php if(!drupal_is_front_page() && $page && module_exists('prev_next')): ?>
  <p class="meta blacktext bold bigtoppadding blog-meta">
    <?php if (contour_pagination($node, 'p') != NULL): ?><i class="icon-chevron-left meta bluetext"></i> <?php print contour_pagination($node, 'p'); ?> <?php endif; ?>
    <?php if ( (contour_pagination($node, 'p') != NULL) AND (contour_pagination($node, 'n') != NULL ) ) : ?> &nbsp; - &nbsp; <?php endif; ?>
    <?php if (contour_pagination($node, 'n') != NULL): ?><?php print contour_pagination($node, 'n'); ?> <i class="icon-chevron-right meta bluetext"></i> <?php endif; ?>
  </p>
  <?php endif; ?>
  
  <div class="comments-meta"></div>

  <?php print render($content['comments']); ?>

</article>