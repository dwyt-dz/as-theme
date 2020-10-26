<?php get_header(); ?>
	<main>

	<section class="fpage-banner dzy">
		<div class="container content-wrap">
			<div class="fp-slider">
				<?php if( have_rows('image_sliders', 'option') ): ?>
				    <div class="annce-slide">
				    <?php while( have_rows('image_sliders', 'option') ): the_row(); 
				        $image = get_sub_field('image');
				        $size = 'large';
				        ?>
				        <div class="slide-content">
					        <div class="img-wrap">
					            <?php echo wp_get_attachment_image( $image, $size ); ?>
					            
					        </div>
					        <div class="text-wrap">
					        	<?php 
					        	$logo = get_field('website_logo', 'option'); 
					        	if($logo) :
					        		echo wp_get_attachment_image( $logo, 'medium' ); 
					        	else :
					        	?>
						        	<h2>Action Space</h2>
						        <?php endif; ?>
					        	<p><?php the_sub_field('title'); ?></p>
					        </div>
					    </div>
				    <?php endwhile; ?>
				    </div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="pmtnbar-dzy">
		<div class="container content-wrap">
			<div class="pmtn-imgs">
				<?php if( have_rows('advertisements', 'option') ): ?>
				    <?php while( have_rows('advertisements', 'option') ): the_row(); 
				    	$link = get_sub_field('link');
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    $image = get_sub_field('image');
				        $size = 'large';
				        ?>
						<a class="pmtn-link" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<?php echo wp_get_attachment_image( $image, $size ); ?>
				        </a>
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	
<?php

	// Check value exists.
	if( have_rows('section_display') ):
	    // Loop through rows.
	    while ( have_rows('section_display') ) : the_row();

	        // Case: Paragraph layout.
	        if( get_row_layout() == 'featured_slider' ):
	            get_template_part('layouts/section', 'featslider');
	            // Do something...

	        elseif( get_row_layout() == 'featured_posts' ):
	            get_template_part('layouts/section', 'featposts');

	        elseif( get_row_layout() == 'featured_tab_display' ):
	            get_template_part('layouts/section', 'tabdisplay'); 

	        elseif( get_row_layout() == 'card_display' ):
	            get_template_part('layouts/section', 'carddisplay');    
	        endif;

	    // End loop.
	    endwhile;

	// No value.
	else :
	    // Do something...
	endif;

	?>

	</main>
<?php get_footer(); ?>