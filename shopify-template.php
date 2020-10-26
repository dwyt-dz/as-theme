<?php 
/**
* Template Name: Shopify Page
*
*/
get_header(); 

$subtitle 	= get_field('page_subtitle');
$hidetitle  = get_field('hide_title');
?>

<main>
	<?php if($hidesc == "NO") : ?>
	<header class="page-sc container-dzy">
		<h1><?php the_title(); ?></h1>
		<?php if($subtitle) : ?>
			<p class='subtitle'><?php echo $subtitle; ?></p>
		<?php endif; ?>
	</header>
	<?php endif; ?>

	<?php

	// Check value exists.
	if( have_rows('shop_display') ):
	    // Loop through rows.
	    while ( have_rows('shop_display') ) : the_row();

	        // Case: Paragraph layout.
	        if( get_row_layout() == 'display_collection' ):
	            get_template_part('layouts/shop', 'discollection');
	            // Do something...

	        elseif( get_row_layout() == 'featured_banner' ):
	            get_template_part('layouts/shop', 'featbanner');

	        elseif( get_row_layout() == 'display_products' ):
	            get_template_part('layouts/shop', 'disproducts');

	        elseif( get_row_layout() == 'ad_spots' ):
	            get_template_part('layouts/ad', 'spots');    

	          
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