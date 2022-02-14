<div class="sidebar-posts">
    <h4 class="header header--underline sidebar-posts__header">
        <?php block_field('title'); ?>
    </h4>


<?php
    $args_top_side = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'meta_key'			=> 'views_count',
        'orderby'			=> 'meta_value',
        'order'				=> 'DESC'
    );
    $query_top_side = new WP_Query( $args_top_side );

    while ( $query_top_side->have_posts() ) {
        $query_top_side->the_post();
    ?>
    
    <div class="sidebar-posts__item" onclick="window.location.href='<?php the_permalink(); ?>';">

        <div class="sidebar-posts__image-wrapper">
            <?php the_post_thumbnail( 'medium' ); ?>
        </div>

        <h5 class="sidebar-posts__title"> <?php the_title(); ?> </h5>

        <div class="sidebar-posts__info">
            <div class="sidebar-posts__category-button category-button"> <?php the_category(' '); ?> </div>
            <div class="sidebar-posts__date"><?php echo get_the_date(); ?></div>
        </div>

    </div>
    
    
    <?php
        }   
        wp_reset_postdata();        

        ?>
</div>