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
	      <div class="four columns smalltoppadding">
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
	      </div>  
	    <?php endif; ?>
      <!-- END NAME AND SLOGAN --> 
	    <!-- BRANDING RIGHT BLOCK REGION -->   
	    <div class="seven columns push_one">
	      <?php if (isset($page['header_branding_right'])) { print render($page['header_branding_right']); } ?>
	    </div>
	     <!-- END BRANDING RIGHT BLOCK REGION -->   
	  </section>
	  
	  <div class="row">
	    <div class="span12">
	      <div class="menu-wrap">
	        <div class="row">
				    <div class="span9">    
						  <nav class="main-menu-nav">
							  <?php if (isset($page['menu'])) { print render($page['menu']); } ?>
						  </nav>
				    </div>
				    
				    <div class="span3">
				      <?php if (isset($page['menu_social'])) { print render($page['menu_social']); } ?>
				    </div>
	        </div>
	      </div>    
	    </div>  
	  </div>  
	  
	<?php //expressa_style_switch(); ?>  
	</header>
	
	<?php if ($breadcrumb): ?>
	<div id="page-heading" class="row">
	  <div class="span12">
	    <h2><?php  print drupal_get_title(); ?></h2>
	    <?php if (theme_get_setting('breadcrumbs') == '1'): ?>
	      <div id="breadcrumbs"><?php print $breadcrumb; ?> </div>	
	    <?php endif; ?>  	   
	    <hr>
	  </div>
	</div>       
	<?php endif; ?>
	
	<div class="before-content"></div>
	
	
  <div class="row">
    <div class="<?php if ($page['sidebar_first']) { echo "span9";} else { echo "span12"; } ?>">
    
      <?php print render($title_prefix); ?>
      <?php print render($title_suffix); ?>
     	 
     	<?php if ($tabs = render($tabs)): ?>
		    <div id="drupal_tabs" class="tabs bigpadding">
		      <?php print render($tabs); ?>
		    </div>
		  <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

		  <?php if (isset($page['content'])) : ?>
		    <?php print render($page['content']); ?>
		  <?php endif; ?>  
  
    </div>
    <?php if (isset($page['sidebar_first'])) : ?>
    <div class="span3">
      <?php print render($page['sidebar_first']); ?>
    </div>
    <?php endif; ?>
    
  </div><!-- end page content row -->  
	  
  <div class="row">
    <div class="span12">
      <?php print render($page['after_content']); ?>
    </div>
  </div>  
	 
  <?php print $messages; ?>
  </div>
</div> <!-- End Content Wrap -->

<div id="footer-wrap">
  <?php if (isset($page['highlight'])) : ?>
    
    <div class="arrow-down"></div>
    <div id="highlight">
      <?php print render($page['highlight']); ?>
    </div>

  <?php endif; ?>
  <footer>  
    <div id="primary-footer" class="container">
    
		  <div class="row">
		  
		    <div class="span3">
		      <?php if (isset($page['footer_col_1'])) : ?>
				    <?php print render($page['footer_col_1']); ?>
				  <?php endif; ?>
		    </div>
		    
		    <div class="span3">
		      <?php if (isset($page['footer_col_2'])) : ?>
				    <?php print render($page['footer_col_2']); ?>
				  <?php endif; ?>
		    </div>
		    
		    <div class="span3">
		      <?php if (isset($page['footer_col_3'])) : ?>
				    <?php print render($page['footer_col_3']); ?>
				  <?php endif; ?>
		    </div>
		    
		    <div class="span3">
		      <?php if (isset($page['footer_col_4'])) : ?>
				    <?php print render($page['footer_col_4']); ?>
				  <?php endif; ?>
		    </div>
		    
		  </div>  
    </div>
	  <div id="secondary-footer">  
	    <div class="container">
	      <div class="row">
			    <div class="span6">
			    
					  <?php if (isset($page['footer_bottom_left'])) : ?>
					    <?php print render($page['footer_bottom_left']); ?>
					  <?php endif; ?>
			  
			    </div>
			    <div class="span6">
			    
					  <?php if (isset($page['footer_bottom_right'])) : ?>
					    <?php print render($page['footer_bottom_right']); ?>
					  <?php endif; ?>
			  
			    </div>
	      </div>  
	    </div>
	  </div>  
	</footer>
</div>