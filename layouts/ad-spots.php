<section class="pmtnbar">
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