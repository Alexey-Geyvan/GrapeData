<?php

// Utilities functions here




//get user avatar
function grd_get_author_avatar( $auth_id ) {
    $auth_id_string = 'user_' . $auth_id;  
    
    if (get_field( 'avatar', $auth_id_string )) {
        $auth_img = get_field( 'avatar', $auth_id_string );
    } else {
        $auth_img  = get_avatar_url( $auth_id , array(
            'size' => 80,
            'default'=>'mystery',
        ));
    }       
    
    echo $auth_img;      
}



//excerpt length
function my_excerpt_length($length){
    return 25;
    }
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');



//AJAX category function
add_action( 'wp_ajax_loadPostsArchive', 'load_more_archive' );
add_action( 'wp_ajax_nopriv_loadPostsArchive', 'load_more_archive' );

function load_more_archive(){       

    $offset = $_POST[ 'count' ];      
    $category_id = $_POST[ 'category' ]; 
    $result = '<div class="row">';

    $args_ajax_cat = array(
        'posts_per_page' => 6,
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC',
        'category__in' => $category_id,
        'offset' => $offset
    );
    $query_ajax_cat = new WP_Query( $args_ajax_cat );


    while ( $query_ajax_cat->have_posts() ) {
        $query_ajax_cat->the_post();

        $offset = $offset + 1;        

        $permalink = get_permalink();
        $onclick = 'onclick="window.location.href=' . "'" . $permalink . "';" . '"';
        $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $directory = get_template_directory_uri(); 
        $auth_id = get_the_author_meta( 'ID' );
        $auth_id_string = 'user_' . $auth_id;
        $avatar = get_field('avatar', $auth_id_string );
        $author = get_the_author();
        $date = get_the_date();
        $title = get_the_title();
        $excerpt = get_the_excerpt();        
    
        $result.='<div class="col-md-6 col-lg-4 excerp-portrait"  data-aos="fade-in" data-aos-duration="1200">';  
        $result.='<div class="excerp-portrait__wrapper" ' . $onclick . '>'; 

        $result.='<div class="excerp-portrait__image article-image">'; 

            $result.='<div class="article-image__thumbnail">';
            $result.= '<img src="' . $thumbnail[0] . '">';
            $result.='</div>'; 

            $result.='<div class="article-image__cloud article-image__cloud--small">';  
            $result.= '<img src="' . $directory . '/img/cloud-small.svg" />';
            $result.='</div>';

        $result.='</div>'; //article-image

        $result.='<div class="excerp-portrait__text-block">';

            $result.='<div class="article-info">';
                $result.='<div class="article-info__inner">';
                $result.='<div class="article-info__user">';
                $result.='<img class="article-info__user-image" src="' . $avatar . '" />';
                $result.='<div class="article-info__user-name">' . $author . '</div>';
                $result.='</div>'; //__user
                $result.='<div class="article-info__date">';
                $result.='<div class="article-info__date-icon"></div>';
                $result.='<div class="article-info__date-text">' . $date . '</div>';
            $result.='</div></div></div>'; 

            $result.='<div class="excerp-portrait__text">';
                $result.='<div class="excerp-portrait__category-button category-button">';
                foreach( get_the_category() as $category ){
                    $result.= '<a href="' . get_category_link($category) .  '" rel="category tag">' . $category->name . '</a>';
                }
                $result.='</div>';
                $result.='<h4 class="excerp-portrait__title" >' . $title . '</h4>';
                $result.='<div class="excerp-portrait__description">' . $excerpt . '</div>';
            $result.='</div>';

        $result.='</div>';   //__text-block

        $result.='</div>';     
        $result.='</div>';     

    }   
    wp_reset_postdata(); 

    $result.='</div>'; //row

    wp_send_json_success(array(
        'result' => $result,
        'newCount' => $offset
      ));

}




//coockie add class to body
// add_filter( 'body_class','grd_body_classes' );
// function grd_body_classes( $classes ) {
//     if(isset($_COOKIE['top_popup_state'])) {     
//         $classes[] = $_COOKIE['top_popup_state'];
//     } 
//     if (is_user_logged_in()) {
//         $classes[] = 'closed-pop-up';
//     }       
//     return $classes;     
// }



/*
//AJAX add js
add_action( 'wp_print_footer_scripts', 'ajax_load_more', 99 );
function ajax_load_more() {
	?>
	<script>
        jQuery(document).ready( function( $ ){            
            const ajaxurl = '<?php echo admin_url( "admin-ajax.php" ); ?>';
            $('.ajax-load-more').click(function(){            
                // var prodId = $(this).attr('id');
                const count = <?php echo $counter; ?>;
                const data = {
                    action: 'loadposts',
                    count: count
                };
                console.log(count);
                jQuery.post( ajaxurl, data, function( response ){
                    alert( 'Получено с сервера: ' + response );
                });
                //return false;

            });
        });
	</script>
	<?php
}

*/