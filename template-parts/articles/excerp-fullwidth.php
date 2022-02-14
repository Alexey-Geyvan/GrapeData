
        
    <div class="fullwidth-slider">

     
        <?php
        $args = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'orderby' => 'date',
            'order'   => 'DESC'
            // 'suppress_filters' => true
        );
        $query = new WP_Query( $args );

        while ( $query->have_posts() ) {
            $query->the_post();
        ?>    
           
        <article class="row excerp-fullwidth" style="background-image:url('<?php the_post_thumbnail_url( 'medium' ); ?>')">
            
            <div class="col-md-4 col-xl-3 excerp-fullwidth__text-block">

                <div class="excerp-fullwidth__category-button category-button"><?php the_category(' '); ?></div>

                <a class="excerp-fullwidth__title highlight" href="<?php the_permalink(); ?>"  >
                    <span class="highlight__inner">
                        <?php the_title(); ?>
                    </span>
                </a>

                <div class="excerp-fullwidth__description">
                    <?php the_excerpt(); ?> 
                </div>

                <a class="excerp-fullwidth__button btn btn-secondary btn-readmore" href="<?php the_permalink(); ?>">
                    Read >
                </a>

            </div>

            <div class="col-md-8 col-xl-9 excerp-fullwidth__image-block">                
                <img class="excerp-fullwidth__image" src="<?php the_post_thumbnail_url( 'full' ); ?>" >
            </div>

        </article>

        <?php
        }   
        wp_reset_postdata();

        ?>

</div> 