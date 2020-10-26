<!DOCTYPE html>

<head>
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header-sc">
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
	</header>
