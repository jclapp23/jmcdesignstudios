<?php
	
	function register_my_menus() { 
		register_nav_menus( 
			array(
				'main-nav' => 'Main Nav',
				'footer-nav'=>'Footer Nav' 
			)
		);
	}
	add_action( 'init', 'register_my_menus' );
	
	//WIDGET AREAS
	if ( function_exists('register_sidebar') ) 
		register_sidebar(array(
			'name' => 'Contact Sidebar',
			'description' => 'This section is in the contact sidebar.',
			'before_title' => '<h3>', 
			'after_title' => '</h3>',
			'before_widget' => '<div id="%1$s" class="widget %2$s">', 
			'after_widget' => '</div>'
		));





?>
