<?php // USE class login-btn to open this modal ?>
<div class="login-wrap hidden">
	<div class="content-wrap">
		<?php login_with_ajax(); ?>
		<img class="img" src="<?php echo get_template_directory_uri(); ?>/icons/undraw_mobile_login_ikmv.svg" alt="Login Display">
		<span class="close-lgn"><i class="fa fa-window-close"></i></span>
	</div>
</div>