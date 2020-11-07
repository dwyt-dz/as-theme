<?php 

get_header(); 

$subtitle 	= get_field('page_subtitle');
$title 		= get_field('page_title');
?>

<?php //get_template_part('includes/section', 'pageBanner');?>

<main>
	<header class="page-sc container-dzy">
		<?php if($title) : ?>
			<h1><?php echo $title; ?></h1>
		<?php else : ?>
			<h1><?php the_title(); ?></h1>
		<?php endif; ?>
		<?php if($subtitle) : ?>
			<p class='subtitle'><?php echo $subtitle; ?></p>
		<?php endif; ?>
	</header>
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
		the_content();
	endif;

	?>
	
</main>

<?php get_footer(); ?>