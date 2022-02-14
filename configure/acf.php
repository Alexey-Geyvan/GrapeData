<?php
// ACF functions here



//refiste and add to admin sidebar
if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
		'page_title' 	=> 'GrapeData',
		'menu_title'	=> 'GrapeData',
		'menu_slug' 	=> 'grapedata',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));	

    // Add sub page.
    acf_add_options_sub_page(array(
		'page_title' 	=> 'Banners Settings',
		'menu_title'	=> 'Banners settings',
		'parent_slug'	=> 'grapedata',
	));

    //  // Add sub page.
    //  acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Html Banners',
	// 	'menu_title'	=> 'Html Banners',
	// 	'parent_slug'	=> 'grapedata',
	// ));
	
}




function grd_track_post_views ( $post_id ) {
    if ( !is_single() ) return;        
    $count = (int) get_field('views_count', $post_id);
    $count++;
    update_field('views_count', $count, $post_id);   
}
// add_action( 'wp_head', 'wpb_track_post_views');



/*
//AJAX add js
add_action( 'wp_print_footer_scripts', 'ajax_plus_click_ajax', 99 );
function ajax_plus_click_ajax() {
	?>
	<script>
        jQuery(document).ready( function( $ ){            
            var ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';
            $('.products-list__item-wrap').click(function(){            
                var prodId = $(this).attr('id');
                var data = {
                    action: 'plusclick',
                    prodId: prodId
                };
                console.log(prodId);
                jQuery.post( ajaxurl, data, function( response ){
                    //alert( 'Получено с сервера: ' + response );
                });
                //return false;

            });
        });
	</script>
	<?php
}
add_action( 'wp_ajax_plusclick', 'plus_click_ajax' );
add_action( 'wp_ajax_nopriv_plusclick', 'plus_click_ajax' );
//AJAX add function
function plus_click_ajax(){     
    $prodId = $_POST[ 'prodId' ];      
    $count = (int) get_field('click_count', $prodId);
    $count++;
    update_field('click_count', $count, $prodId);     
	die; 
}

*/