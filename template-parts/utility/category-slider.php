<section class="category-slider">
	<div class="container">
		<div class="category-slider__list">
		<?php
		$categories = get_categories( );
		foreach($categories as $category)
		{ 
			$image = get_field('category_image', $category->taxonomy . '_' . $category->term_id );
			$cat_name = $category->name;
			$cat_id = $category->cat_ID;
			?>

			<a class="category-slider__item" href="<?php echo get_category_link( $cat_id ); ?>">
				<div class="category-slider__item-inner">
					<div class="category-slider__item-image" style="background-image:url('<?php echo $image; ?>');" > </div>
					<h5 class="category-slider__item-name">
						<?php echo $cat_name; ?>
					</h5>
				</div>				
			</a>

			<?php	
		}
		?>
		</div>

	</div>	
</section>

