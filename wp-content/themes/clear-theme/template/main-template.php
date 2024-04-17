<?php
/* Template Name: Main Template */
get_header();

if( have_rows('main_blocks') ):
    while ( have_rows('main_blocks') ) : the_row();
        include dirname(dirname(__FILE__)) . '/template-parts/blocks/' . get_row_layout() . '.php' ;
    endwhile;
else :

endif;

get_footer(); ?>