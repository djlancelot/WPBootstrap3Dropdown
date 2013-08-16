<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Standard header parts for html -->
	<!-- Here is the call for the css: -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  	<!-- Here we call the jquery and bootstrap javascripts: -->
<?php wp_enqueue_script("jquery"); ?>
<!-- And insert head part: -->
<?php wp_head(); ?>
<!-- If you want hover dropdown insert this script here or in a separate file: -->
   <script>
jQuery(document).ready(function($) {
	$('ul.nav li.dropdown').hover(function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
	}, function() {
	  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
	});
});
</script>
  </head>
  <body >
  		<div class="navbar navbar-inverse">
     		<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
    		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
      		<span class="icon-bar"></span>
    		</button>
			<!-- Inserting the menu: -->       	
        	<?php
        		wp_nav_menu(
          			array(
          				'theme_location' => 'primary',
            			'menu' => 'main-menu',
            			'container_class' => 'dropdown nav-collapse collapse navbar-responsive-collapse',
            			'menu_class' => 'nav navbar-nav',
            			'fallback_cb' => '',
            			'menu_id' => 'main-menu',
						// Here we call our custom Walker
						'walker' => new Bootstrap_DropDown_Nav_Menu()       
          			)    
        ); ?>

  	</div>  <!-- /navbar -->
