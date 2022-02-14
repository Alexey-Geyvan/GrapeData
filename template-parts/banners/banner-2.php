<div class="banner-2">
    <div class="banner-2__image article-image">
        <div class="article-image__thumbnail">
            <img src="<?php echo get_field('banner2_image', 'option'); ?>" alt="">
        </div>
    </div>

    <div class="banner-2__content">
        <div class="banner-2__content-inner">           
            <div class="banner-2__title">
                <?php echo get_field('banner2_title', 'option'); ?> <span class="banner-2__after-title"><?php echo get_field('banner2_after-title', 'option'); ?></span>
            </div>            
            <div class="banner-2__description"><?php echo get_field('banner2_description', 'option'); ?></div>            
        </div>
    </div>    
</div>

