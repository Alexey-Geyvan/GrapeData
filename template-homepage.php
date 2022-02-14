<?php
//*template name: homepage*//

 get_header(); ?>

<div id="primary" class="content-area" >
	<main id="main" class="site-main" > 

		<section>
			<div class="container">    
				<?php get_template_part( 'template-parts/articles/excerp', 'fullwidth' ); ?>
			</div>
		</section>

		<?php get_template_part( 'template-parts/utility/category', 'slider' ); ?>

		<section>
    		<div class="container">
        		<h2 class="header">Popular Articles</h2>
				<?php get_template_part( 'template-parts/articles/excerp', 'big' ); ?>
			</div>
		</section>
		
		<section>
    		<div class="container">
        		<h2 class="header">Latest news</h2>
				<?php get_template_part( 'template-parts/articles/excerp', 'portrait' ); ?>
			</div>
		</section>

		
		<?php get_template_part( 'template-parts/forms/form', 'with_image' ); ?>
			
        
        
			
			
			
	</main>
</div><!-- .content-area -->



<?php
get_footer();