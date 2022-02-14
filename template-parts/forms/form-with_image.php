<?php 
$banner_settig = get_field('default-banner', 'option');
?>

<section>
    <div class="container">

        <h2 class="header text-center"><?php echo get_field('form_banner_header', 'option'); ?></h2>

        <div class="row form-with-image">
            <div class="col-12 col-lg-8 form-with-image__image-col">                
                <?php get_template_part( 'template-parts/banners/banner', 'form' ); ?>            
            </div>
            <div class="col-12 col-lg-4 form-with-image__form-col">
                <div class="form-with-image__form bg-white">
                    <?php echo do_shortcode( '[contact-form-7 id="61"]' ); ?>
                </div>       
            </div>
        </div>

    </div>
</section>