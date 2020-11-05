<?php get_header(); ?>
	<main>

	<section class="fpage-banner dzy">
		<div class="container content-wrap">
			<div class="fp-slider">
				<?php if( have_rows('image_sliders', 'option') ): ?>
				    <div class="annce-slide custSlide">
				    <?php while( have_rows('image_sliders', 'option') ): the_row(); 
				        $image = get_sub_field('image');
				        $size = 'full';
				        ?>
				        <div class="slide-content">
					        <div class="img-wrap">
					            <?php echo wp_get_attachment_image( $image, $size ); ?>
					        </div>
					        
					        <div class="text-wrap">
					        	<?php 
					        	$logo = get_field('website_logo', 'option'); 
					        	if($logo) :
					        		echo wp_get_attachment_image( $logo, 'large' ); 
					        	else :
					        	?>
						        	<h2>Action Space</h2>
						        <?php endif; ?>
						        <?php $hidesc = get_sub_field('hide_section'); 
					        		if($hidesc == 'NO') : ?>
					        	<p><?php the_sub_field('title'); ?></p>
					        	<?php endif; ?>
					        </div>
					    	
					    </div>
				    <?php endwhile; ?>
				    </div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	
	<?php get_template_part('templates'); ?>

	</main>
<?php get_footer(); ?>