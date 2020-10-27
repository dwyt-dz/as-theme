<?php 
$title 		= get_sub_field('section_title'); 
$bgimg 		= get_sub_field('section_background');
$sclogo  	= get_field('card_logo_section', 'option');
$logo  		= get_field('card_logo', 'option');
$defthumb 	= get_field('default_thumbnail', 'option');
$showlogo 	= get_sub_field('hide_card_logo'); 	
$showcat 	= get_sub_field('hide_category');
$discat 	= get_sub_field('display_category');	
$basictitle = get_sub_field('display_basic');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="carddis-sc">
	<div class="container">
		<div class="content-wrap" style='background:url(<?php echo esc_url($bgimg['url']); ?>);'>
			<?php if($basictitle == "YES") : ?>
				<h2 class="basic-title"><?php echo $title; ?></h2>
			<?php elseif($basictitle == "NO") : ?>
				<?php if($title) : ?>
					<?php if( !empty( $logo ) ): 
						$size = 'medium';
					?>
					<div class="card-logo">
						<?php echo wp_get_attachment_image( $sclogo, $size ); ?>
					</div>
					<?php endif; ?>
					<h2 class="card-title"><?php echo $title; ?></h2>
				<?php endif; ?>
			<?php endif; ?>
			<?php
			$featured_posts = get_sub_field('profiles_to_display');
			if( $featured_posts ): ?>
			    <div class="cardslider custSlide">
			    <?php foreach( $featured_posts as $post ): 

			        // Setup this post for WP functions (variable must be named $post).
			        setup_postdata($post); ?>
			        
			        <div class="cardslides">
			        	<div class="card-wrap">
				        	<div class="img-wrap">
						    	<?php 
						    	if ( has_post_thumbnail() ) :
								    the_post_thumbnail();
								else :
									echo wp_get_attachment_image( $defthumb, 'medium' );
								endif; ?>
						    </div>
						    <div class="card-cat">
					    		<?php 
					    			if($showlogo == 'NO') :
							    		if( !empty( $logo ) ): 
											$size = 'medium';
											echo wp_get_attachment_image( $logo, $size ); 
										endif; 
									endif;
								?>
								<?php 
									if($showcat == 'NO') :
								?>
								<p>
									<?php if(get_field('magazine_name')) : ?>
										<span><?php the_field('magazine_name'); ?></span>
									<?php else :
											the_category(', '); 
									endif; ?>
									
								</p>
								<?php endif; ?>
							</div>
							<?php if($discat == 'YES') : ?>
						    	<span><?php the_category(', '); ?></span>
							<?php endif; ?>
							<div class="text-wrap">
							    <h3><?php the_title(); ?></h3>
							    <p><?php the_field('description'); ?></p>
							    <p><?php echo get_the_excerpt(); ?></p>
							</div>
						    
						    <?php if( have_rows('social_media', 'option') ): ?>
						    <ul class="socmed">
						    <?php while( have_rows('social_media') ): the_row(); 
						        $link = get_sub_field('social_link');
						        $icon = get_sub_field('social_icon');

								if( $link ): 
								    $link_url = $link['url'];
								    $link_title = $link['title'];
								    $link_target = $link['target'] ? $link['target'] : '_self';
								    if($icon){
								    	$link_display = get_sub_field('social_icon');
								    }else{
								    	$link_display = $link['title'];
								    }
								    ?>
								<li><a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $icon; ?></a></li>
								<?php endif; ?>
						    <?php endwhile; ?>
							</ul>
							<?php /*
							<a class="btn-abs" href="<?php the_permalink(); ?>">Go to Article</a>
							*/ ?>
							<?php
							$maglink = get_field('magazine_link');
							if( $maglink ): 
							    $link_url = $maglink['url'];
							    $link_title = $maglink['title'];
							    $link_target = $maglink['target'] ? $maglink['target'] : '_self';
							    
							    ?>
								<a class="btn-abs" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Go to Magazine</a>
							<?php endif; ?>
						<?php endif; ?>
						</div>
					</div>

			    <?php endforeach; ?>
			    </div>
			    <?php 
			    // Reset the global post object so that the rest of the page works correctly.
			    wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>