<?php

function _add_javascript() {
	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, false);    	
	wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', array(), null, false);    	
	wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js', array(), null, false);
	wp_enqueue_script( 'AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);	
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick.js', array('jquery'), null, true); 	
	wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true); 		
}
add_action('wp_enqueue_scripts', '_add_javascript', 100);



function _add_stylesheets() {	
	// wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', array(), null, 'all'  );
	// wp_enqueue_style('icon', 'https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css', array(), null, 'all' );		
	wp_enqueue_style('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), null, 'all' );	
	wp_enqueue_style('slick', get_template_directory_uri() . '/js/vendor/slick/slick.css', array(), null, 'all' );		
	wp_enqueue_style('dc-icons', get_template_directory_uri() . '/fonts/dc-icons/css/dc-icons.css', array(), null, 'all' );
	wp_enqueue_style('theme', get_template_directory_uri() . '/css/style.css', array(), '1.0.3', 'all' );		
}	
add_action('wp_enqueue_scripts', '_add_stylesheets');




// delete jquery migrate
function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		//$scripts->add('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', null, null, true );
	}
}
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );




//some admin styles
add_action('admin_head', 'grd_admin_styles');
function grd_admin_styles() {
  echo '<style>@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap");</style>
		<style>
				body { font-family: "Montserrat", sans-serif;}
				#adminmenu div.wp-menu-name { padding: 8px 8px 9px 36px; }
				.acf-preview {height:100%;}
				.acf-preview img { width:100%; height:auto; }
		</style>';

//   echo '<script>
//   $(body).addClass("folded");
//   </script>';
}



//login page
function grd_login_logo() { 
	wp_enqueue_style('login-register', get_template_directory_uri() . '/css/login-register.css', array(), null, 'all' );	
 }
add_action( 'login_enqueue_scripts', 'grd_login_logo' );
function grd_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'grd_login_logo_url' );
 
function grd_login_logo_url_title() {
    return 'Decentrilizednow';
}
add_filter( 'login_headertext', 'grd_login_logo_url_title' );