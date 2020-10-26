<!DOCTYPE html>

<head>
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header-sc">
		<div class="topbar-sc container">
			<?php 
				$image = get_field('website_logo', 'option');

					if( !empty( $image ) ): ?>
					    <img class="logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
			<div class="container-dzy flex-nowrap">
				<?php //get_template_part('includes/snippet', 'loginAccount');?>
				<?php //get_template_part('includes/section', 'loginForm');?>
				<div class="social-wrap">
					<?php //get_template_part('includes/snippet', 'socials');?>
				</div>
				<!-- use gradient bar - orange violet orange -->
			</div>
		</div>
		<div class="main-nav-sc">
			<div class="container">
				
				<?php
					wp_nav_menu( array( 
					    'theme_location' 	=> 	'dz-action-main-menu',
					    'orderby' 			=>	'menu_order',
					    'container' 	=> 	'ul' ) ); 
					?>
				<!-- use plain bar..black.. or switch colors with the topbar -->
				<span class="inner-nav nav-btn hidden"><i class="fa fa-bars"></i></span>
			</div>
		</div>
	</header>
