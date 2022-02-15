<?php

 get_header(); ?>

<?php if( have_posts() ) the_post(); ?>

<?php 
    $post_id = get_the_id();
    grd_track_post_views( $post_id );

    $auth_id = get_the_author_meta( 'ID' );
    $auth_id_string = 'user_' . $auth_id;
?>

<article class="article">
    <div class="container">

        <?php get_template_part( 'template-parts/utility/category', 'slider' ); ?>

        <div class="row justify-content-between">

            <div class="col article__content">
                <div class="article-title">
                    <h1><?php the_title(); ?></h1>   
                    <span>
                        <?php the_excerpt(); ?>
                    </span>
                    <div class="article-image articles-excerp-big">

                        <div class="article-image__thumbnail">
                            <?php the_post_thumbnail(  ); ?>                                     
                        </div>  

                        <div class="article-info">
                            <div class="article-info__inner">
                                <div class="article-info__user">
                                    <img class="article-info__user-image" src="<?php grd_get_author_avatar($auth_id); ?>">
                                    <div class="article-info__user-name"><?php the_author(); ?></div>
                                </div>
                                <div class="article-info__date">
                                    <div class="article-info__date-icon"></div>
                                    <div class="article-info__date-text"><?php echo get_the_date(); ?></div>
                                </div>
                            </div>                   
                        </div> 

                    </div>
                </div>
                <?php get_template_part( 'template-parts/banners/banner', 'article' ); ?>
                <div class="article-body">
                    <?php the_content(); ?>                    
                </div>
                <div class="article-share share-social">
                    <p class="share-social__wrapper mb-0">
                        <span class="share-social__text">Share</span>
                        <?php 
                            global $wp;
                            $current_url = home_url( add_query_arg( array(), $wp->request ) );
                        ?>
                        <a target="_blank" href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php echo $current_url; ?>" class="share-social__link">
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.8185 15.7768C13.9461 15.7768 17.8457 9.87018 17.8457 4.74956C17.8457 4.58351 17.842 4.41377 17.8346 4.24772C18.5932 3.69912 19.2479 3.0196 19.7678 2.24109C19.0613 2.55542 18.3112 2.76071 17.5431 2.84994C18.3519 2.36516 18.9574 1.6036 19.2475 0.706418C18.4867 1.15732 17.6547 1.47539 16.7871 1.647C16.2025 1.02586 15.4296 0.614591 14.5878 0.476779C13.746 0.338967 12.8823 0.482289 12.1302 0.884585C11.3781 1.28688 10.7794 1.92575 10.4268 2.7024C10.0742 3.47906 9.9872 4.35025 10.1794 5.18129C8.63877 5.10398 7.13163 4.70378 5.75564 4.00663C4.37964 3.30948 3.16551 2.33094 2.19196 1.13446C1.69715 1.98757 1.54574 2.99708 1.7685 3.95782C1.99126 4.91855 2.57147 5.75843 3.39122 6.30674C2.7758 6.2872 2.17386 6.12151 1.63514 5.82335V5.87132C1.63459 6.7666 1.9441 7.63444 2.51105 8.32732C3.078 9.0202 3.86741 9.49536 4.74508 9.67203C4.17499 9.82801 3.57666 9.85073 2.99639 9.73845C3.24405 10.5084 3.72591 11.1818 4.37472 11.6647C5.02353 12.1476 5.80691 12.4159 6.61554 12.4322C5.24273 13.5105 3.5469 14.0954 1.80119 14.0927C1.4916 14.0922 1.18232 14.0732 0.875 14.0358C2.64845 15.1736 4.71145 15.7779 6.8185 15.7768Z" fill="white"/>
                            </svg>
                        </a>
                        <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>" class="share-social__link">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1857 0.655273H2.08623C1.31502 0.655273 0.691406 1.26412 0.691406 2.01689V18.1828C0.691406 18.9356 1.31502 19.5481 2.08623 19.5481H18.1857C18.9569 19.5481 19.5842 18.9356 19.5842 18.1865V2.01689C19.5842 1.26412 18.9569 0.655273 18.1857 0.655273ZM6.29653 16.7548H3.49212V7.7364H6.29653V16.7548ZM4.89432 6.50763C3.99396 6.50763 3.26703 5.78069 3.26703 4.88402C3.26703 3.98735 3.99396 3.26042 4.89432 3.26042C5.791 3.26042 6.51793 3.98735 6.51793 4.88402C6.51793 5.777 5.791 6.50763 4.89432 6.50763ZM16.7909 16.7548H13.9902V12.371C13.9902 11.3268 13.9717 9.97992 12.5326 9.97992C11.0751 9.97992 10.8537 11.1201 10.8537 12.2972V16.7548H8.05666V7.7364H10.743V8.96886H10.7799C11.1526 8.26038 12.0677 7.51131 13.4293 7.51131C16.2669 7.51131 16.7909 9.37845 16.7909 11.8065V16.7548Z" fill="white"/>
                            </svg>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" class="share-social__link">
                            <svg width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 35.9789 8.77641 45.908 20.25 47.7084V30.9375H14.1562V24H20.25V18.7125C20.25 12.6975 23.8331 9.375 29.3152 9.375C31.9402 9.375 34.6875 9.84375 34.6875 9.84375V15.75H31.6613C28.68 15.75 27.75 17.6002 27.75 19.5V24H34.4062L33.3422 30.9375H27.75V47.7084C39.2236 45.908 48 35.9789 48 24Z" fill="white"/>
                            </svg>
                        </a>
                    </p>               
                </div> 

                <?php if (has_tag()) { ?>
                    <div class="article-tags">
                        <div class="article-tags__wrapper">
                            <?php echo get_the_tag_list(); ?>
                        </div>                    
                    </div>
                <?php } ?>
                
                
            </div>

            <div class="col d-none d-lg-block sidebar">
                <?php get_sidebar(); ?>
            </div>   

        </div> 

        <?php get_template_part( 'template-parts/forms/form', 'with_image' ); ?>

        <section>
    		<div class="container">
                <?php
                    $categories = get_the_category();
                    $category_id = $categories[0]->cat_ID;
                    $category_link = get_category_link( $category_id );
                    $category_name = get_cat_name( $category_id );
                ?>
        		<h2 class="header">More from <a href="<?php echo $category_link; ?>"><?php echo $category_name; ?></a></h2>
				<?php get_template_part( 'template-parts/articles/excerp', 'portrait-single' ); ?>
                <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
            </div>
		</section>
        
    </div>    
</article>



<?php
get_footer();