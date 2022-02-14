<div class="row">

    <?php
        
    $args_ex_p = array(
        'posts_per_page' => 3,
        'post_type' => 'post',
        'orderby' => 'date',
        'order'   => 'DESC'
        // 'suppress_filters' => true
    );
    $query_ex_p = new WP_Query( $args_ex_p );

    while ( $query_ex_p->have_posts() ) {
        $query_ex_p->the_post();
        $auth_id = get_the_author_meta( 'ID' );
    ?>    

    <div class="col-md-6 col-lg-4 excerp-portrait"  data-aos="fade-in" data-aos-duration="1200">
        <div class="excerp-portrait__wrapper"  onclick="window.location.href='<?php the_permalink(); ?>';">

            <div class="excerp-portrait__image article-image">

                <div class="article-image__thumbnail">
                    <?php the_post_thumbnail( 'medium' ); ?>                                     
                </div> 

            </div>

            <div class="excerp-portrait__text-block">


                <div class="article-info">
                    <div class="article-info__inner">
                        <div class="article-info__user">
                            <img class="article-info__user-image" src="<?php grd_get_author_avatar($auth_id); ?>" />
                            <div class="article-info__user-name"><?php the_author(); ?></div>
                        </div>
                        <div class="article-info__date">
                            <div class="article-info__date-icon"></div>
                            <div class="article-info__date-text"><?php echo get_the_date(); ?></div>
                        </div>
                    </div>                   
                </div> 

                <div class="excerp-portrait__text">
                    <div class="excerp-portrait__category-button category-button"><?php the_category(' '); ?></div>
                    <h4 class="excerp-portrait__title" ><?php the_title(); ?></h4>
                    <div class="excerp-portrait__description"> <?php the_excerpt(); ?> </div>
                </div>             

            </div>

        </div>  
    </div>

    <?php
        }   
        wp_reset_postdata();      
    ?>


</div>