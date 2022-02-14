<?php

// CONFIG
include( 'configure/configure.php' );

// JAVASCRIPT & CSS
include( 'configure/js-css.php' );

// Utilities
include( 'configure/utilities.php' );

// ACF
include( 'configure/acf.php' );

// breadcrumbs
include( 'configure/breadcrumbs.php' );

// Sidebars
include( 'configure/sidebars.php' );

// contributors 
if( is_admin() && current_user_can('contributor') ) {
	include( 'configure/contributors.php' );
}

/*
// CPT TAXONOMY
include( 'configure/cpt-taxonomy.php' );



// SHORTCODES
include( 'configure/shortcodes.php' );

*/