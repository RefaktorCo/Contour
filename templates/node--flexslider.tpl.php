<?php
/**
 * @file
 * Expressa's node template for the Image Slider content type.
 */
?>

<li>
  <?php print render($content['field_image']); ?>
  <div class="flex-caption"><?php print render($content['field_caption']); ?> </div>    
</li>