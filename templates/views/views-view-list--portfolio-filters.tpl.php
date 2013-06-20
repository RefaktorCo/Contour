<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * @ingroup views_templates
 */
?>

<section id="options" class="row bigtoppadding">
  <ul id="filters" class="option-set">
    <li><h6 class="bold text-color meta"><?php echo t('Filters:'); ?></h6></li>
	  <li><a href="#" data-filter="*"><?php echo t('show all'); ?></a></li>
    <?php foreach ($rows as $id => $row): ?>
      <?php print $row; ?>
    <?php endforeach; ?>
    </ul>
</section>