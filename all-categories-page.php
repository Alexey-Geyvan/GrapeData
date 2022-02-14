<?php
//*template name: all categories*//

 get_header(); ?>

<div id="primary" class="content-area" >

	<main id="main" class="site-main" >
		<div class="container">
			<div class="row all-categories">
				<?php	
				$categories = get_categories( );
				foreach($categories as $category)
				{ 
					$image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
					$cat_name = $category->name;
					$cat_id = $category->cat_ID;
					?>

					<div class="col-12 col-md-6 col-lg-4 all-categories__col">
						<a class="all-categories__link" href="<?php echo get_category_link( $cat_id ); ?>">
							<div class="all-categories__item article-image">
								<div class="all-categories__image article-image__thumbnail"> 
									<img src="<?php echo $image; ?>" alt="<?php echo $cat_name; ?>">
								</div> 
								<h3 class="all-categories__item-name">
									<?php echo $cat_name; ?>
								</h3>
							</div>							
						</a>
					</div>					

				<?php } ?>
			</div>
		
		
		<?php get_template_part( 'template-parts/forms/form', 'with_image' ); ?>		
			
		</div>
	</main>
</div><!-- .content-area -->



<?php
get_footer();