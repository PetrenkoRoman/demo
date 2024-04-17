<section class="testimonial">
    <div class="container">
        <h2 class="testimonial__title"><?php the_sub_field('testimonial_section_title') ?></h2>
        <div class="testimonial__wrapper">
            <?php
            $postNum = get_sub_field('testimonial_posts');
            $taxonomy  = 'testimonial-category';
            $terms = get_sub_field('testimonial_category');
            if(is_array($terms))   {
                foreach($terms as $term){
                    $emptyTerms[] = $term->term_id;
                }
            }
            $args = [
                'post_type' => 'testimonial',
                'post_status' => 'publish',
                'posts_per_page' => $postNum,
                'order' => 'DESC',
                'paged' => 1,
                'tax_query' => [
                    [
                        'taxonomy' => $taxonomy,
                        'terms'    => $terms ? $terms : $emptyTerms,
                        'operator' => $terms ? 'IN' : 'NOT IN'
                    ],
                ],
            ];
            $posts = new WP_Query( $args );
            if ($posts->have_posts()) : ?>
                <div class="testimonial__row">
                    <?php while ($posts->have_posts()) : $posts->the_post();
                        get_template_part('template-parts/blocks/content-parts/content', 'testimonials-block');
                    endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <div class="btn__wrapper">
                <a href="#!" class="btn btn__green" id="load-more" data-cat-id="<?php echo $taxonomy; ?>">Load more</a>
            </div>
        </div>
    </div>
</section>