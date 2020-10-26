<?php 
$title = get_sub_field('section_title'); 
$custClass = get_sub_field('css_class');
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="featposts-sc container-dzy <?php echo $custClass; ?>">
	<div class="content-wrap" style='background:url(<?php echo esc_url($bgimg['url']); ?>);'>
		<?php if($title) : ?>
			<h2 class="sc-title"><?php echo $title; ?></h2>
		<?php endif; ?>
		<?php if( have_rows('posts_to_display') ): ?>
			<div class="featpost-slider custSlide">
			<?php while( have_rows('posts_to_display') ) : the_row(); 
				$featured_posts = get_sub_field('post_group'); ?>

			    <div class="featposts">
			    <?php foreach( $featured_posts as $post ): 

			        // Setup this post for WP functions (variable must be named $post).
			        setup_postdata($post); ?>
			        <div class="featitem">
			        	<?php the_post_thumbnail('medium'); ?>
			        	<h3><?php the_title(); ?></h3>
			            <a class="btn-abs" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			        </div>
			    <?php endforeach; ?>
			    </div>
		    	<?php wp_reset_postdata(); ?>
			<?php endwhile; ?>
			</div>
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