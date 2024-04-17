<?php
function postTypeTestimonial() {
    $labels = [
        'name' => __( 'Testimonial' ),
        'singular_name' => __( 'Testimonial' ),
        'add_new' => __( 'New Testimonial' ),
        'add_new_item' => __( 'Add New Testimonial' ),
        'edit_item' => __( 'Edit Testimonial' ),
        'new_item' => __( 'New Testimonial' ),
        'view_item' => __( 'View Testimonial' ),
        'search_items' => __( 'Search Testimonial' ),
        'not_found' =>  __( 'No Testimonial Found' ),
        'not_found_in_trash' => __( 'No Testimonial found in Trash' ),
    ];
    $args = [
        'taxonomies' => array('testimonial-category'),
        'publicly_queryable' => true,
        'labels' => $labels,
        'has_archive' => false,
        'public' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => [
            'title',
            'custom-fields',
            'thumbnail'
        ],
    ];
    register_post_type( 'testimonial', $args );
}
add_action( 'init', 'postTypeTestimonial' );

function postTypeTestimonialTaxonomy() {
    register_taxonomy( 'testimonial-category', 'testimonial',
        [
            'labels' => [
                'name'              => 'Testimonial Categories',
                'singular_name'     => 'Testimonial Category',
                'search_items'      => 'Search Testimonial Categories',
                'all_items'         => 'All Testimonial Categories',
                'edit_item'         => 'Edit Testimonial Categories',
                'update_item'       => 'Update Testimonial Category',
                'add_new_item'      => 'Add New Testimonial Category',
                'new_item_name'     => 'New Testimonial Category Name',
                'menu_name'         => 'Category',
            ],
            'hierarchical' => true,
            'sort' => true,
            'args' => array('orderby' => 'term_order' ),
            'show_admin_column' => true
        ]
    );
}
add_action( 'init', 'postTypeTestimonialTaxonomy' );