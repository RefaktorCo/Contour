<?php
/**
 * @file html.tpl.php
 * Contour's HTML template.
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
  
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
  

<link href='http://fonts.googleapis.com/css?family=Dosis:200,400,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>

<?php global $user; if (in_array('administrator', array_values($user->roles))): ?>
<script>
jQuery(document).ready(function ($) {
	if ($(window).width() > 768) {
		$("#navbar").sticky({topSpacing:66});
  }
});
</script>
<?php else : ?>
<script>
jQuery(document).ready(function ($) {
	if ($(window).width() > 768) {
		$("#navbar").sticky({topSpacing:0});
  }
});
</script>
<?php endif; ?>

<?php contour_user_css(); ?>

</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>

</body>
</html>