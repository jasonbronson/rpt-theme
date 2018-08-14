<?php

// check if the flexible content field has rows of data
if (have_rows('left_resort_rail_components', 'option')) {
    // loop through the rows of data
    while (have_rows('left_resort_rail_components', 'option')) {
        the_row();
        if (get_row_layout() == 'make_reservation') {
            get_template_part('layouts/resort-makereservation');
        } elseif (get_row_layout() == 'live_chat') {
            get_template_part('layouts/resort-livechat');                
        } elseif (get_row_layout() == 'wysiwyg') {
            get_template_part('layouts/resort-wysiwyg'); 
        }
    }
}

