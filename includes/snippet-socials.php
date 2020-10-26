<?php if( have_rows('social_media', 'option') ): ?>
    <?php while( have_rows('social_media', 'option') ): the_row(); 
        $link = get_sub_field('social_link');
        $icon = get_sub_field('social_icon');

		if( $link ): 
		    $link_url = $link['url'];
		    $link_title = $link['title'];
		    $link_target = $link['target'] ? $link['target'] : '_self';
		    if($icon){
		    	$link_display = get_sub_field('social_icon');
		    }else{
		    	$link_display = $link['title'];
		    }
		    ?>
		<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo $icon; ?></a>
		<?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>