<?php 
$title = get_sub_field('section_title'); 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>

<?php if($hidesc == "NO") : ?>
<section class="featslider-sc container-dzy">
	<div class="content-wrap" style='background:url(<?php echo esc_url($bgimg['url']); ?>);'>
		
	</div>
</section>
<?php endif; ?>