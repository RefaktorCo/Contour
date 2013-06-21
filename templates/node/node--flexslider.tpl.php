<?php
/**
 * @file node--flexslider.tpl.php
 * Contour's node template for the Image Slider content type.
 */
 
$pos = render($content['field_caption_position']); 
?>

<li>
  <?php print render($content['field_image']); ?>
  <div class="flex-caption<?php if ($pos == "Right") { echo "-right"; }?>"><?php print render($content['field_caption']); ?> </div>    
</li>