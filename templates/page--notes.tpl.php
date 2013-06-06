<?php
/**
 * @file
 * Contour's theme implementation to display a single Drupal page.
 */
?>

<header>
  <div class="container top">
	  <section class="row">
	    <!--BRANDING LEFT BLOCK REGION -->
      <?php if (isset($page['header_branding_left'])) { print render($page['header_branding_left']); } ?>
		  <!-- END BRANDING LEFT --> 
	    <!--LOGO -->  
      <?php if ($logo): ?>
        <div class="four columns smalltoppadding">
		      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
		        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
		      </a>
        </div>
	    <?php endif; ?>
			<!--END LOGO -->   
			<!-- NAME AND SLOGAN --> 
	    <?php if ($site_name || $site_slogan): ?>
	 
		      <div id="name-and-slogan"<?php if ($disable_site_name && $disable_site_slogan) { print ' class="hidden"'; } ?>>
		
		        <?php if ($site_name): ?>
		          <h1 id="site-name"<?php if ($disable_site_name) { print ' class="hidden"'; } ?>>
		            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
		          </h1>
		        <?php endif; ?>
		
		        <?php if ($site_slogan): ?>
		          <div id="site-slogan"<?php if ($disable_site_slogan) { print ' class="hidden"'; } ?>>
		            <?php print $site_slogan; ?>
		          </div>
		        <?php endif; ?>
		
		  
	      </div>  
	    <?php endif; ?>
      <!-- END NAME AND SLOGAN --> 
	    <!-- BRANDING RIGHT BLOCK REGION -->   
	    <div class="seven columns push_one">
	      <?php if (isset($page['header_branding_right'])) { print render($page['header_branding_right']); } ?>
	    </div>
	     <!-- END BRANDING RIGHT BLOCK REGION -->   
	  </section>
  </div>  
  <div class="container" id="navbar">
    <section class="row">
      <!-- NAVIGATION -->
      <div class="eight columns">
	      <nav id="navigationmain">
          <?php print theme('links__system_main_menu', array(
		            'attributes' => array(
		              'id' => 'main-menu-links',
		              'class' => array('links', 'clearfix'),
		            ),
		            'heading' => array(
		              'text' => t('Main menu'),
		              'level' => 'h2',
		              'class' => array('element-invisible'),
		            ),
		          )); 
		          ?>

				</nav>
			</div>
			    
	    <div class="four columns">
	      <?php if (isset($page['header_menu_right'])) { print render($page['header_menu_right']); } ?>
	    </div>
    </section>  
  </div>
</header>


<?php if (isset($page['before_content'])) : ?>
  <!-- BEFORE CONTENT BLOCK REGION -->
  <?php print render($page['before_content']); ?>
  <!-- END BEFORE CONTENT BLOCK REGION -->
<?php endif; ?>  

<!-- Container - top-grey class gives bottom border for containers -->
<div class="container white bigpadding top-grey">
	<section class="row">
	<h6 class="bluetext largefont bold"><?php echo t('OUR NOTES'); ?></h6>
	</section>
	<section class="row">
	<h2 class="bold blacktext"><?php echo t('WELCOME TO OUR BLOG.'); ?></h2>
	</section>
	<section class="row">
	<h6 class="blacktext smallfont bold"><?php echo t('THIS IS WHERE WE DO OUR DAILY RAMBLINGS. WE WRITE ABOUT DESIGN, DEVELOPMENT AND DAY TO DAY STUFF.'); ?></h6>
	</section>
</div>

<div class="container grey">
	<!-- all blog pages go under section id blog -->
	<section id="blog" class="row white">
  
	  <?php if ( ($page['sidebar_left']) ) : ?>
	  <aside id="sidebar-left">
		  <div class="<?php if ($page['sidebar_right']) { echo "three columns";} else { echo "three columns"; } ?> sidebar">
		    <div id="sticky-sidebar">
		    <?php print render($page['sidebar_left']); ?>
		    </div>
		  </div>
	  </aside>
	  <?php endif; ?>

		<div class="<?php if ( ($page['sidebar_right']) AND ($page['sidebar_left']) ) { echo "six columns";} elseif ( ($page['sidebar_right']) OR ($page['sidebar_left']) ) {  echo "nine columns"; }  else { echo "twelve columns"; } ?>">
		  <?php if (isset($page['content'])) { print render($page['content']); } ?>
		</div>
  
	  <?php if ( ($page['sidebar_right']) ) : ?>
	  <div class="<?php if ($page['sidebar_left']) { echo "three columns";} else { echo "three columns"; } ?>">
	    <?php print render($page['sidebar_right']); ?>
	  </div>
	  <?php endif; ?>
  
    <?php print $messages; ?>
	</section>
</div>
<footer>
<script>
//<![CDATA[
 // Can also be used with $(document).ready()
jQuery(document).ready(function ($) {
  $('.flexslider').flexslider({
direction: "horizontal",
    animation: "slide",
directionNav: false,
    controlNav: true,
    animationLoop: true,
    pauseOnAction: true,
    pauseOnHover: true,
    nextText: "Next",
    prevText: "Previous",
manualControls: ".flex-control-nav li.nav-button",
smoothHeight: true
  });
 });
 //]]>
</script>
  <div class="black container top largetoppadding midbottompadding">
		<div class="row bigbottompadding">
	    <div class="four columns">
	      <?php if (isset($page['footer_col_1'])) : ?>
			    <?php print render($page['footer_col_1']); ?>
			  <?php endif; ?>
	    </div>
	    <div class="three columns">
	      <?php if (isset($page['footer_col_2'])) : ?>
			    <?php print render($page['footer_col_2']); ?>
			  <?php endif; ?>
	    </div>
	    <div class="three columns">
	      <?php if (isset($page['footer_col_3'])) : ?>
			    <?php print render($page['footer_col_3']); ?>
			  <?php endif; ?>
	    </div>
	    <div class="two columns">
	      <?php if (isset($page['footer_col_4'])) : ?>
			    <?php print render($page['footer_col_4']); ?>
			  <?php endif; ?>
	    </div>
		</div>  
  </div>
	<div class="black container midpadding">
	  <section class="row smalltoppadding">			    
	    <div class="six columns">
			  <?php if (isset($page['footer_bottom_left'])) : ?>
			    <?php print render($page['footer_bottom_left']); ?>
			  <?php endif; ?>
      </div>
			<div class="six columns">
			  <?php if (isset($page['footer_bottom_right'])) : ?>
			    <?php print render($page['footer_bottom_right']); ?>
			  <?php endif; ?>			    
			</div>
	  </section>  
	</div>  
</footer>