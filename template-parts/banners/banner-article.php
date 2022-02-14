<?php
$the_post_banner_link = get_field('post-banner-settings_banner-link', 'option');
$the_post_banner_image = get_field('post-banner-settings_banner-image', 'option');
?>


<div class="post-cta" onclick="window.loacation.href='<?php echo $the_post_banner_link; ?>'">
    <img src="<?php echo $the_post_banner_image; ?>" class="post-cta__image">
</div>