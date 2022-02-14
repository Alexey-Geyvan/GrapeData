  <?php
  
        $args_ex_b = array(
            'posts_per_page' => 3,
            'post_type' => 'post',
            'meta_key'			=> 'views_count',
            'orderby'			=> 'meta_value',
            'order'				=> 'DESC'
        );
        $query_ex_b = new WP_Query( $args_ex_b );

        while ( $query_ex_b->have_posts() ) {
            $query_ex_b->the_post();
            $auth_id = get_the_author_meta( 'ID' );

            $cat = get_the_category();
            $color = get_field('category_color', $cat[0]->taxonomy . '_' . $cat[0]->term_id );
        ?>    
           
        <article class="row articles-excerp-big"  data-aos="fade-up" data-aos-duration="1200">
            
            <div class="col-md-8 col-lg-7 articles-excerp-big__image-block" onclick="window.location.href='<?php the_permalink(); ?>'">  
                <div class="articles-excerp-big__image  article-image">
                    <h3 class="articles-excerp-big__image-title"><?php the_title(); ?></h3>
                    <div class="articles-excerp-big__gradient" style="background-image: linear-gradient(85deg, <?php echo $color; ?> 0%, rgba(0,0,0,1) 100%);"></div>
                    <div class="article-image__thumbnail" >
                        <?php the_post_thumbnail(  ); ?>                                     
                    </div>
                    <div class="article-info">
                        <div class="article-info__inner">
                            <div class="article-info__user">
                                <img class="article-info__user-image" src="<?php grd_get_author_avatar($auth_id); ?>" />
                                <div class="article-info__user-name"><?php the_author(); ?></div>
                            </div>
                            <!-- <div class="article-info__date">
                                <div class="article-info__date-icon"></div>
                                <div class="article-info__date-text"><?php echo get_the_date(); ?></div>
                            </div> -->
                        </div>                   
                    </div> 

                </div>              
            </div>

            <div class="col-md-4 col-lg-5 articles-excerp-big__text-block">
                <div class="articles-excerp-big__category-button category-links"><?php the_category(', '); ?></div>
                <a class="articles-excerp-big__title " href="<?php the_permalink(); ?> "><?php the_title(); ?></a>
                <div class="articles-excerp-big__description"> <?php the_excerpt(); ?> </div>                
                <a class="articles-excerp-big__button btn btn-flat btn-readmore" href="<?php the_permalink(); ?>"> Read >  </a>
            </div>
        
        </article>

        <?php
        }   
        wp_reset_postdata();        

        ?>

        
