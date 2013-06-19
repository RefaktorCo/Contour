<?php

function contour_form_system_theme_settings_alter(&$form, &$form_state) {

  // Container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'contour') . '/css/theme-options.css'),
    ),
  );

	  // Design
	  $form['options']['css'] = array(
	    '#type' => 'fieldset',
	    '#title' => 'Design',
	  );
	        
	    // User CSS
	    $form['options']['css']['user_css'] = array(
	      '#type' => 'textarea',
	      '#title' => 'Add your own CSS',
	      '#default_value' => theme_get_setting('user_css'),
	    ); 
	  
	  // Twitter
	  $form['options']['twitter'] = array(
	    '#type' => 'fieldset',
	    '#title' => 'Twitter',
	  );    
	  
	    // Twitter App Consumer Key
	    $form['options']['twitter']['twitter_app_consumer_key'] =array(
	      '#type' => 'textfield',
	      '#title' => 'Twitter App Consumer Key',
	      '#default_value' => theme_get_setting('twitter_app_consumer_key'),
	      '#states' => array (
	        'invisible' => array(
	          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
	        )
	      )
	    );
	    
	    // Twitter App Consumer Secret
	    $form['options']['twitter']['twitter_app_consumer_secret'] =array(
	      '#type' => 'textfield',
	      '#title' => 'Twitter App Consumer Secret',
	      '#default_value' => theme_get_setting('twitter_app_consumer_secret'),
	      '#states' => array (
	        'invisible' => array(
	          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
	        )
	      )
	    );
	    
	    // Twitter App Access Token
	    $form['options']['twitter']['twitter_app_access_token'] =array(
	      '#type' => 'textfield',
	      '#title' => 'Twitter App Access Token',
	      '#default_value' => theme_get_setting('twitter_app_access_token'),
	      '#states' => array (
	        'invisible' => array(
	          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
	        )
	      )
	    );
	    
	    // Twitter App Access Token Secret
	    $form['options']['twitter']['twitter_app_access_secret'] =array(
	      '#type' => 'textfield',
	      '#title' => 'Twitter App Access Token Secret',
	      '#default_value' => theme_get_setting('twitter_app_access_secret'),
	      '#states' => array (
	        'invisible' => array(
	          'input[name="enable_twitter_feed"]' => array('checked' => FALSE)
	        )
	      )
	    );
    
}

?>