<?php
/**
 * @file node--view--recent-posts-block--block.tpl.php
 * Contour's node template for the Recent Posts block.
 */
?>

<!-- post one -->
<article class="home-blog-post">
<div class="content-title">
	<!-- post date -->
	<div class="home-post-meta">
		<span class="day"><?php print format_date($node->created, 'custom', 'd'); ?></span><span class="month"><?php print format_date($node->created, 'custom', 'M'); ?></span>
	</div>
	<!-- post title and blog category -->
	<div class="post-title">
		<h6 class="text-color bold"><?php print $title; ?></h6>
		<h6 class="greytext caps meta">POSTED UNDER: <?php print render($content['field_tags']); ?></h6>
	</div>
</div>
<!-- post excerpt -->
<div class="recent-posts-block-teaser">

	  <?php
      hide($content['field_tags']);
      hide($content['field_image']);
      print render($content);
    ?>
    
    <?php if($teaser): ?>
  	<a class="recent-posts-block-teaser-link" href="<?php print $node_url;?>">read more</a>
<?php endif;?>

</div>
</article>