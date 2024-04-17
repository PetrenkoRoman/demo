<div class="testimonial__item">
    <div class="testimonial__item--stars">
        <?php
        $starNumber = get_field('testimonial_rating');
        for ($number = 1; $number <= $starNumber; $number++) : ?>
            <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.76901 0.513671C9.99155 -0.171224 10.9605 -0.171223 11.183 0.513671L13.1464 6.55646C13.246 6.86276 13.5314 7.07013 13.8535 7.07013L20.2072 7.07013C20.9274 7.07013 21.2268 7.99165 20.6442 8.41494L15.5039 12.1496C15.2433 12.3389 15.1343 12.6744 15.2338 12.9807L17.1972 19.0235C17.4198 19.7084 16.6359 20.2779 16.0533 19.8547L10.913 16.12C10.6524 15.9307 10.2996 15.9307 10.0391 16.12L4.89876 19.8547C4.31615 20.2779 3.53226 19.7084 3.7548 19.0235L5.71822 12.9807C5.81774 12.6744 5.70872 12.3389 5.44817 12.1496L0.307862 8.41494C-0.274744 7.99165 0.0246759 7.07013 0.744817 7.07013L7.09858 7.07013C7.42064 7.07013 7.70607 6.86276 7.80559 6.55646L9.76901 0.513671Z" fill="#DCB16D"/>
            </svg>
        <?php endfor ?>
    </div>
    <div class="testimonial__item--content">
        <?php the_field('testimonial_content') ?>
    </div>
    <div class="testimonial__item--name">
        <span class="testimonial__item--name-title"><?php the_field('testimonial_title') ?></span>
        <span class="testimonial__item--name-position">from <?php the_field('testimonial_position') ?></span>
    </div>
</div>