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

	<?php get_template_part('templates'); ?>
</main>

<?php get_footer(); ?>