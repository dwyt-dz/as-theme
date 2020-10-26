<section class="pagebanner-sc">
	<?php $pagebanner = get_field('page_banner');
	if($pagebanner){
		$banner = get_field('page_banner');
	}else{
		$banner = get_field('default_banner', 'option');
	}
	if( !empty( $banner ) ): ?>
	    <img src="<?php echo esc_url($banner['url']); ?>" alt="<?php echo esc_attr($banner['alt']); ?>" />
	<?php endif; ?>
</section>