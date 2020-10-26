<?php 
// Check value exists.
if( have_rows('section_display') ):
    // Loop through rows.
    while ( have_rows('section_display') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'featured_slider' ):
            get_template_part('layouts/section', 'featslider');
            // Do something...

        elseif( get_row_layout() == 'featured_posts' ):
            get_template_part('layouts/section', 'featposts');

        elseif( get_row_layout() == 'featured_tab_display' ):
            get_template_part('layouts/section', 'tabdisplay'); 

        elseif( get_row_layout() == 'card_display' ):
            get_template_part('layouts/section', 'carddisplay');    
        endif;

        elseif( get_row_layout() == 'ad_spots' ):
            get_template_part('layouts/ad', 'spots');    

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


?>
