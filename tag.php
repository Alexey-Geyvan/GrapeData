<?php


 get_header(); ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main" >
		<div class="container">

		<?php get_template_part( 'template-parts/utility/category', 'slider' ); ?>

		<?php 
		// $tag_id = get_queried_object()->term_id;
		$tag_slug = get_queried_object()->slug;
		$tag_name = single_tag_title('', false);  
        
		?>
		<h2 class="header header--underline" style="text-transform:capitalize;"><?php echo $tag_name; ?></h2>

        <div class="row">
		<?php
		$args = array(
            'posts_per_page' => 6,
            'post_type' => 'post',
            'orderby' => 'date',
            'order'   => 'DESC',
            'tag' => $tag_slug
            // 'suppress_filters' => true
        );
        $query = new WP_Query( $args );

        
        
        while ( $query->have_posts() ) {
            $query->the_post();
			$auth_id = get_the_author_meta( 'ID' );
            $auth_id_string = 'user_' . $auth_id;
		?>

		<div class="col-md-6 col-lg-4 excerp-portrait"  data-aos="fade-in" data-aos-duration="1200">
            <div class="excerp-portrait__wrapper"  onclick="window.location.href='<?php the_permalink(); ?>';">

                <div class="excerp-portrait__image article-image">

                    <div class="article-image__thumbnail">
                        <?php the_post_thumbnail( 'medium' ); ?>                                     
                    </div> 

                    <div class="article-image__cloud article-image__cloud--small">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cloud-small.svg" />                              
                    </div> 

                </div>

                <div class="excerp-portrait__text-block">


                    <div class="article-info">
                        <div class="article-info__inner">
                            <div class="article-info__user">
                                <img class="article-info__user-image" src="<?php echo get_field('avatar', $auth_id_string ); ?>" />
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
	
		<?php get_template_part( 'template-parts/forms/form', 'with_image' ); ?>		
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();