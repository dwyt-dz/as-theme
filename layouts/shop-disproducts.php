<?php 
$title = get_sub_field('section_title'); 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>


<section class="shop products-sc">
	<div class="container">
			<?php if($title) : ?>
				<h2 class="reg-title"><?php echo $title; ?></h2>
			<?php endif; ?>
			<?php echo do_shortcode('[wps_products items_per_row="4" excludes="description"]'); ?>


	</div>
</section>
