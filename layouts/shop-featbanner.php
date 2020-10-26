<?php 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="shop shop-banner">
	<div class="container">
		<div class="grid-wrap">
				<div class="menu-wrap">
					<a href="#" class="menu-btn">Collections</a>
					<?php
					wp_nav_menu( array( 
					    'theme_location' 	=> 	'dz-action-shopify-front-menu',
					    'orderby' 			=>	'menu_order',
					    'container' 	=> 	'ul' ) ); 
					?>
				</div>
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
					<label>
				        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:" />  
					</label>
				    <button type="submit" class="search-submit"><span class="fa fa-search"></span></button>
				</form>
				<?php if( have_rows('featured_item') ): ?>
				<div class="shop-slide custSlide">
					<?php while( have_rows('featured_item') ) : the_row(); ?>
					<div class="prod-wrap">
						<div class="text-wrap">
							<h2 class="title-last shop-title"><?php the_sub_field('title'); ?></h2>
							<p><?php the_sub_field('description') ?></p>
							<a href="<?php the_sub_field('page_link'); ?>">Explore Now</a>
						</div>
						<div class="image-wrap">
						<?php $image = get_sub_field('image');
							$size = 'medium'; // (thumbnail, medium, large, full or custom size)
							if( $image ) {
							    echo wp_get_attachment_image( $image, $size );
						}?>
						</div>
					</div>
						
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>

