<?php
function weichie_load_more() {
    $category = get_the_category($post->ID);
    $category = $category[0]->cat_ID;
    $taxonomy  = 'testimonial-category';
    $post_id = $_POST['post_id'];
    $terms = get_sub_field('testimonial_category', $post_id);
    if(is_array($terms))   {
        foreach($terms as $term){
            $emptyTerms[] = $term->term_id;
        }
    }
    $ajaxposts = new WP_Query([
        'post_type' => 'testimonial',
        'posts_per_page' => 3,
        'paged' => $_POST['paged'],
        'cat' =>  $_POST['cat_id'],
    ]);
    $response = '';
    if($ajaxposts->have_posts()) {
        while($ajaxposts->have_posts()) : $ajaxposts->the_post();
            $response .= get_template_part('template-parts/blocks/content-parts/content', 'testimonials-block');
        endwhile;
    } else {
        $response = '';
    }
    echo $response;
    exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');
