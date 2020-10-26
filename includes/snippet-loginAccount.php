<?php if ( is_user_logged_in() ) : ?>
	<a href="<?php echo site_url(); ?>/account" class="btn-animation">
	  <svg width="200" height="62">
	    <defs>
	        <linearGradient id="grad1">
	            <stop offset="0%" stop-color="#ff9900"/>
	            <stop offset="100%" stop-color="#E178ED" />
	        </linearGradient>
	    </defs>
	     <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="185" height="50"></rect>
	  </svg>
	  <!--<span>Voir mes réalisations</span>-->
	    <span>Account</span>
	</a>
<?php else : ?>
	<a href="#" class="login-btn btn-animation">
	  <svg width="200" height="62">
	    <defs>
	        <linearGradient id="grad1">
	            <stop offset="0%" stop-color="#ff9900"/>
	            <stop offset="100%" stop-color="#E178ED" />
	        </linearGradient>
	    </defs>
	     <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="185" height="50"></rect>
	  </svg>
	  <!--<span>Voir mes réalisations</span>-->
	    <span>Login</span>
	</a>
<?php endif; ?>