<?php

if (empty($the_sidebar_banner_link)) {
    $the_sidebar_banner_link = get_field('sidebar-banner-settings_banner-link', 'option');
} else {
    $the_sidebar_banner_link = block_value('link');
}
if (empty(block_value('image'))) {
    $the_sidebar_banner_image = get_field('sidebar-banner-settings_banner-image', 'option');
} else {
    $image_id = (block_value('image'));
    $the_sidebar_banner_image =  wp_get_attachment_image_url( $image_id, 'full' );
}
?>


<div class="sidebar-banner" onclick="window.loacation.href='<?php echo $the_sidebar_banner_link; ?>'">
    <div class="sidebar-banner__image" style="background-image:url('<?php echo $the_sidebar_banner_image; ?>')"></div>
</div>