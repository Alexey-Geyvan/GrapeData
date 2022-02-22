<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

<?php

$nav_color='';

if (is_front_page()) {
	$nav_color='navbar-dark';
} else {
	$nav_color='navbar-light';
}

?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  >
<div class="page">

	<header class="header">
		<div class="overlay"></div>	

		<nav class="navbar navbar-expand-lg <?php echo $nav_color; ?>" role="navigation">		
		  <div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="col col-xl-3 navbar-brand-col">
				<a class="navbar-brand" href="/">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="navbar-brand__logo"> -->
					marketresearchtoday
				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1" aria-controls="bs-main-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'decentralized' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="row navbar-row">
				
				<div class="col navbar-nav-col">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-main',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-main-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
				</div>
				
			</div>

		  </div>
		</nav>

		<?php 
		if (is_front_page()) {			
			get_template_part( 'template-parts/headers/homepage' );
		} ?>

		<?php 
		if (is_page() && get_field('header_show-breadcrumbs') && function_exists( 'dimox_breadcrumbs' )) {
			echo '<div class="container">';
			dimox_breadcrumbs();
			echo '</div>';
		} elseif ( is_single() || is_archive() || is_category() || is_tag() ) {
			echo '<div class="container">';
			dimox_breadcrumbs();
			echo '</div>';
		} ?>
		
		
		<?php if ( is_page() && get_field('header_show-title') ) {
			echo '<div class="container">';
			echo '<h1 class="page-title text-center">';
			the_title();
			echo '</h1>';
			echo '</div>';
		} ?>

	</header>
	
	<div class="page__content content">
