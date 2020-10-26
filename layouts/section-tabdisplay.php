<?php 
$title = get_sub_field('section_title'); 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="tabdisplay-sc container-dzy">
	<div class="content-wrap" style='background:url(<?php echo esc_url($bgimg['url']); ?>);'>
		<?php if($title) : ?>
			<h2 class="sc-title"><?php echo $title; ?></h2>
		<?php endif; ?>
		<div class="customTab">
			<?php
			$repCount = count(get_sub_field('featured_group'));

			if( have_rows('featured_group') ): $postCount = 0;?>
				<ul class="tabs-dzy">
					<?php 
						while( have_rows('featured_group') ) : the_row(); $postCount++;
					?>

					<li class="tab-link" data-tab="tab-<?php echo $postCount;?>"><?php the_sub_field('group_title'); ?></li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			<?php if( have_rows('featured_group') ): $postCount = 0;?>
			    <div class="tab-wrap">
			    	<?php while( have_rows('featured_group') ) : the_row(); $postCount++;
			    		$featured_posts = get_sub_field('featured_posts');?>
			    		<div id="tab-<?php echo $postCount;?>" class="tab-content">
			    			<div class="featslider custSlide">
						    <?php foreach( $featured_posts as $post ): 

						        // Setup this post for WP functions (variable must be named $post).
						        setup_postdata($post); ?>
						        
						        <div class="featslides">
						        	<div class="img-wrap">
								    	<?php the_post_thumbnail('thumbnail'); ?>
								    	<a class="btn-abs" href="<?php the_permalink(); ?>">Go to Article</a>
								    </div>
								    <div class="text-wrap">
									    <h3><?php the_title(); ?></h3>
									    <p><?php the_field('post_excerpt'); ?></p>
									    <?php
									    	$elink = get_field('website_link'); 
									    	if( $elink ): 
										    	$elink_url = $elink['url'];
										    	$elink_title = $elink['title'];
										    	$elink_target = $elink['target'] ? $elink['target'] : '_self';
											    if($icon){
											    	$elink_display = $elink['title'];
											    }else{
											    	$elink_display = "Website Link";
											    }
										    ?>
											<a class="button event-info" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $elink_display; ?></a>
									    <?php endif; ?>
									    <?php if(get_field('event_date')) : ?>
									    	<p class="event-info"><?php the_field('event_date'); ?></p>
									    <?php endif; ?>
									</div>

								</div>

						    <?php endforeach; ?>
							</div>
							<?php wp_reset_postdata(); ?>
						</div>
					<?php endwhile;?>
			    </div>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>