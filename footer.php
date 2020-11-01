
	<footer>
		<section class="footer-sc">
			<div class="container content-wrap">
				<div class="logo-wrap">
					<?php 
					$image = get_field('footer_logo', 'option');
					if( !empty( $image ) ): 
						$size = 'medium';
						?>
					    <?php echo wp_get_attachment_image( $image, $size ); ?>
					<?php endif; ?>
				</div>
				<div class="socmed">
					<?php get_template_part('includes/snippet', 'socials');?>
				</div>
				<?php
				wp_nav_menu( array( 
				    'theme_location' => 'dz-action-fmenu',
				    'container'		 => '', 
				    'container_class' => 'footer-menu' ) ); 
				?>
				<p class="copyright">Copyright @ Action Space 2020. All Rights Reserved.</p>
				</div>
			</div>
		</section>

	
	</footer>

	<script type="text/javascript">
		jQuery(document).ready(function( $ ) {
			$('.title-last').each(function(index, element) {
	            var heading = $(element);
	            var word_array, last_word, first_part;

	            word_array = heading.html().split(/\s+/); // split on spaces
	            last_word = word_array.pop();             // pop the last word
	            first_part = word_array.join(' ');        // rejoin the first words together

	            heading.html([first_part, ' <span class="last-word">', last_word, '</span>'].join(''));
	        });

		    $(".login-btn").click(function(){
		       $('.login-wrap').removeClass('hidden');
		       $('.login-wrap').toggleClass("show");
		    });
		    $(".close-lgn").click(function(){
		       $('.shop .menu').removeClass('show');
		       $('.shop .menu').toggleClass("hidden");
		    });
		    $(".shop .menu-wrap .menu-btn").click(function(){
		      $('.shop .menu-wrap .menu').toggleClass('show');
		    });
		    
		    $(".nav-btn").click(function(){
		       $('.nav-sc').removeClass('hidden');
		       $('.nav-sc').toggleClass("show");
		    });
		    $(".close-nav").click(function(){
		       $('.nav-sc').removeClass('show');
		       $('.nav-sc').toggleClass("hidden");
		    });
		    $('input.tnp-email').val('Subscribe to our Newsletter');
		    $('input.tnp-email').click(function(){
		    	$('input.tnp-email').val('Enter your E-mail Address');
		    	$('input.tnp-submit').show("slow");
		    });
		    $("ul.tabs-dzy li:first").addClass('current');
		    $(".tab-content:first").addClass('current');
		    $('ul.tabs-dzy li').click(function(){
				var tab_id = $(this).attr('data-tab');

				$('ul.tabs-dzy li').removeClass('current');
				$('.tab-content').removeClass('current');

				$(this).addClass('current');
				$("#"+tab_id).addClass('current');
			})
			$('.menu-item-has-children').hover(function(){
			    $('.sub-menu', this).toggleClass('show');
			}, function(){
			    $('.sub-menu', this).delay(2000).fadeOut();
			});
			$(".menu-item-has-children a").click(function(){
		       $('.menu-item-has-children .sub-menu', this).removeClass('hidden');
		       $('.menu-item-has-children .sub-menu', this).toggleClass("show");
		    });
			$('.annce-slide').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  fade: true,
			  arrows: false,
			  cssEase: 'linear'
			});
			$('.shop-slide').slick({
			  dots: true,
			  infinite: true,
			  speed: 500,
			  fade: true,
			  arrows: false,
			  cssEase: 'linear',
			  slidesToShow: 1,
			  slidesToScroll: 1
			});
			$('.featslider').slick({
			  dots: false,
			  arrows: true,
			  infinite: true,
			  slidesToShow: 3,
			  centerPadding: '60px',
			  slidesToScroll: 3,
			  responsive: [
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 670,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});
			$('.featpost-slider').slick({
			  dots: false,
			  arrows: true,
			  infinite: true,
			  slidesToShow: 2,
			  slidesToScroll: 2,
			  responsive: [
			    {
			      breakpoint: 670,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
			});
			$('.cardslider').slick({
			  dots: false,
			  arrows: true,
			  infinite: true,
			  slidesToShow: 5,
			  slidesToScroll: 3,
			  responsive: [
			    {
			      breakpoint: 1280,
			      settings: {
			        slidesToShow: 4,
			        slidesToScroll: 4
			      }
			    },
			    {
			      breakpoint: 992,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 600,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1,
			        centerMode: true,
			        centerPadding: '65px',
			      }
			    }
			  ]
			});
			$(".custSlide .slick-prev").html('<i class="fa fa-caret-left"></i>');
			$(".custSlide .slick-next").html('<i class="fa fa-caret-right"></i>');

			$(window).scroll(function() {    
			    var scroll = $(window).scrollTop();

			     //>=, not <=
			    if (scroll >= 500) {
		        $(".header-sc").addClass("scroll");
			    } else {
			        $(".header-sc").removeClass("scroll");
			    }
			}); 
		});
		fitty('.card-cat a', {
		  minSize: 6,
		  maxSize: 16
		});
		fitty('.shop-title', {
		  minSize: 12,
		  maxSize: 40
		});
		
		
		
	</script>

	<?php wp_footer(); ?>
	</body>
</html>
