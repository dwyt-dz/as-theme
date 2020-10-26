<?php if( have_rows('magazine_layout') ): 
    while( have_rows('magazine_layout') ): the_row(); 
        if( get_row_layout() == 'magazine' ): ?>
        	<div class="wflex-row nowrap m-wrap mag-wrap">
        		<div class="w40 md50 m100">
        			<?php 
        			$cover = get_sub_field('magazine_cover');
					if( !empty( $cover ) ): ?>
					    <img class="cover" src="<?php echo esc_url($cover['url']); ?>" alt="<?php echo esc_attr($cover['alt']); ?>" />
					<?php endif; ?>
        		</div>
        		<div class="conts w60 md50 m100 d-shrink wflex-col ">
        			<?php 
					$image = get_sub_field('logo');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
					<h2><?php the_sub_field('subtitle'); ?></h2>

        			<h3><?php the_sub_field('title'); ?></h3>
		            
					<p><?php the_sub_field('description'); ?></p>
					<h4>Social Links</h4>
					<?php if( have_rows('social_media') ): ?>
						<ul class="social-med">
					    <?php while( have_rows('social_media') ): the_row(); 
					        $link = get_sub_field('social_link');
					        $icon = get_sub_field('social_icon');

							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <li>
									<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $icon; echo $link_title; ?> </a>
								</li>
							<?php endif; ?>
					    <?php endwhile; ?>
						</ul>
					<?php endif; ?>

					<a class="btn btn-3" href="<?php echo get_sub_field('magazine_link'); ?>" target="_blank">Go to Magazine</a>
        		</div>
        	</div>
            
        <?php endif; 
    endwhile; 
endif; ?>