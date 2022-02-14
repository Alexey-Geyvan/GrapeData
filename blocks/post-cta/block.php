<?php

if (empty(block_value('link'))) {
    $the_post_banner_link = get_field('post_banner_link', 'option');
} else {
    $the_post_banner_link = block_value('link');
}

if (empty(block_value('image'))) {
    $the_post_banner_image = get_field('post_banner_image', 'option');
} else {
    $image_id = (block_value('image'));
    $the_post_banner_image =  wp_get_attachment_image_url( $image_id, 'full' );
}
?>

<div class="post-cta" onclick="window.loacation.href='<?php echo $the_post_banner_link; ?>'">
    <img src="<?php echo $the_post_banner_image; ?>" class="post-cta__image">
</div>