<?php


 get_header(); ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main" >
		<div class="container">

		<?php get_template_part( 'template-parts/utility/category', 'slider' ); ?>

		<h2 class="header header--underline"><?php single_cat_title('' , true ); ?></h2>

		<?php get_template_part( 'template-parts/articles/excerp', 'portrait-archive' ); ?>			
		
		<?php get_template_part( 'template-parts/forms/form', 'with_image' ); ?>
		
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();