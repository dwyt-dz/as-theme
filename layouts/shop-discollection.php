<?php 
$title = get_sub_field('section_title'); 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="shop collections-sc">
	<div class="container">
			<?php if($title) : ?>
				<h2 class="reg-title"><?php echo $title; ?></h2>
			<?php endif; ?> 
		<?php 
			$title = get_sub_field('collections_title');
			echo do_shortcode('
				[wps_products_buy_button collection="'.$title.'" excludes="" items_per_row="2" full_width="true"]
			'); 
		?>

	</div>
</section>
<?php endif; ?>