<section class="main-content">
    <div class="container">
        <div class="main-content__wrapper">
            <div class="main-content__row">
                <div class="main-content__col">
                    <h2 class="main-content__title"><?php the_sub_field('main_content_section_title') ?></h2>
                    <?php if( have_rows('main_block_content') ):
                        while( have_rows('main_block_content') ): the_row();
                        $subtitle = get_sub_field('subtitle');
                        $content = get_sub_field('content');
                    ?>
                        <div class="main-content__desc">
                            <h3 class="main-content__desc--title"><?= $subtitle ?></h3>
                            <?= $content ?>
                        </div>
                            <?php
                            $addButton = get_sub_field('add_button');
                            if( $addButton && in_array('Add Button', $addButton) ) :
                            $link = get_sub_field('button_group');
                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <div class="btn__wrapper">
                                    <a href="<?= esc_url( $link_url ); ?>" class="btn btn__green" target="<?= esc_attr( $link_target ) ?>"><?= esc_html( $link_title ) ?></a>
                                </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if( have_rows('main_block_media') ):
                    while( have_rows('main_block_media') ): the_row();
                        $selectMedia = get_sub_field('select_media');
                        $positionMedia = get_sub_field('position_media');
                        $positionMediaValue = strtolower($positionMedia['value']); ?>

                        <div class="main-content__col position-<?=$positionMediaValue?>">
                            <div class="main-content__media">
                                <?php
                                if( $selectMedia == 'Image' ) :
                                    $image = get_sub_field('image');
                                    if( !empty( $image ) ): ?>
                                        <img src="<?= esc_url($image['url']); ?>" class="main-content__media--image" alt="<?= esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                <?php elseif ( $selectMedia == 'Video' ) :
                                    $video_mp4 = get_sub_field('video');
                                    $video_url = $video_mp4['url'];
                                    $attr = [
                                        'mp4'   => $video_url,
                                        'class' => 'wp-video-shortcode main-content__media--video',
                                    ];
                                    echo wp_video_shortcode($attr);
                                endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


