<div class="banner-1">
    <div class="banner-1__image article-image">
        <div class="article-image__thumbnail">
            <img src="<?php echo get_field('banner1_image', 'option'); ?>" alt="">
        </div>
    </div>

    <div class="banner-1__content">
        <div class="banner-1__content-inner">
            <div class="banner-1__pre-title">
                <?php echo get_field('banner1_pre-title', 'option'); ?>
            </div>
            <div class="banner-1__title">
                <span><?php echo get_field('banner1_title', 'option'); ?></span>
            </div>
            <div class="banner-1__after-title">
                <?php echo get_field('banner1_after-title', 'option'); ?> <span> <?php echo get_field('banner1_disscount', 'option'); ?>%</span>
            </div>
            <div class="banner-1__description"><?php echo get_field('banner1_description', 'option'); ?></div>            
        </div>
    </div>

    
</div>

