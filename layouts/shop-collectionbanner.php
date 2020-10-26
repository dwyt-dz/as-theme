<?php 
$bgimg = get_sub_field('section_background');
$hidesc		= get_sub_field('hide_section');		
?>


<section class="shop collection-banner">
	<div class="container">
		<?php $title = get_the_title(); ?>
		<div class="banner-wrap">
			<div id="image-cont">
			</div>
			<div id="title-cont">
			</div>
			<div id="desc-cont">
				
			</div>
		</div>
		<?php echo do_shortcode('[wps_collections title="'.$title.'" single="false" full_width="true" dropzone_collection_title="#title-cont" dropzone_collection_image="#image-cont" dropzone_collection_description="#desc-cont"]') ?>
	</div>
</section>


