<div class="contact-us mb-5">
    <div class="row">
        <div class="col-12 col-md-8 order-2 order-md-1">
            <h3 class="contact-us__title">
               <?php block_field('form-title'); ?>
            </h3>
            <?php            
            $form_id = block_value('form-id');
            echo do_shortcode( '[contact-form-7 id="'.$form_id.'"]' ); 
            ?>
        </div>

        <div class="col-12 col-md-4 order-1 order-md-2 mb-5 mb-md-0">
            <h3 class="contact-us__title">
               <?php block_field('info-title'); ?>
            </h3>
            <ul class="contact-us__info list-unstyled">
                <li class="contact-us__info-item">
                     <i class="icon-mail"></i>
                     <a href="mailto:<?php the_field('company-info_email', 'options'); ?>"><span><?php the_field('company-info_email', 'options'); ?></span></a>
                </li>
                <li class="contact-us__info-item">
                    <i class="icon-phone"></i>
                    <a href="tel:<?php the_field('company-info_phone', 'options'); ?>"><span>Phone: <?php the_field('company-info_phone', 'options'); ?></span></a>
                </li>
                <li class="contact-us__info-item">
                    <i class="icon-location"></i>
                    <span><?php the_field('company-info_location', 'options'); ?></span>
                </li>
               
            </ul>
        </div>
    </div>
</div>