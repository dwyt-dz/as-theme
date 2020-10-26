<?php 
$title = get_sub_field('section_title'); 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="featslider-sc container-dzy">
	<div class="content-wrap" style='background:url(<?php echo esc_url($bgimg['url']); ?>);'>
		<?php if($title) : ?>
			<h2 class="sc-title"><?php echo $title; ?></h2>
		<?php endif; ?>
		<?php
		$featured_posts = get_sub_field('posts_to_display');
		if( $featured_posts ): ?>
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
		    <?php 
		    // Reset the global post object so that the rest of the page works correctly.
		    wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php 
		$link = get_sub_field('page_link');
		if( $link ): 
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    if($link_title) :
		    	$title = $link_title;
		    else :
		    	$title = 'View All';
		    endif;
		    ?>
		    <a class="btn view" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $title ); ?></a>
		<?php endif; ?>
	</div>
</section>
<?php endif; ?>