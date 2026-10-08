<?php

$eyebrow        = get_field('wedding_eyebrow');
$heading        = get_field('wedding_heading');
$content        = get_field('wedding_content');
$button         = get_field('wedding_button');
$image          = get_field('wedding_image');
$image_label    = get_field('wedding_image_label');
$bottom_content = get_field('wedding_bottom_content');
$video_url      = get_field('wedding_video_url');
$video_label    = get_field('wedding_video_label');
?>
<section class="feature-section alt-bg">
    <div class="wrap">
        <div class="feature-inner">
            <div class="feature-copy">
                <?php if ($eyebrow) : ?><span class="eyebrow"><?php echo esc_html($eyebrow); ?></span><?php endif; ?>
                <?php if ($heading) : ?><h2><?php echo esc_html($heading); ?></h2><?php endif; ?>
                <?php if ($content) : ?><?php echo wp_kses_post($content); ?><?php endif; ?>
                <?php if (have_rows('wedding_features')) : ?>
                    <ul class="feature-list">
                        <?php while (have_rows('wedding_features')) : the_row(); ?>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <?php echo esc_html(get_sub_field('wedding_feature_text')); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($bottom_content) : ?>
                    <?php echo wp_kses_post($bottom_content); ?>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <a class="btn-outline" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">
                        <?php echo esc_html($button['title']); ?> →
                    </a>
                <?php endif; ?>
            </div>
            <div class="feature-visual">
                <div class="img-wedding"><div class="img-block"><span class="img-label">Wedding dance performance</span></div></div>
                <?php if ($video_url) : ?>
                    <a href="<?php echo esc_url($video_url); ?>" class="video-placeholder" target="_blank">
                        <div class="play-btn">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="white">
                                <polygon points="6 3 20 12 6 21 6 3"></polygon>
                            </svg>
                        </div>
                        <?php if ($video_label) : ?>
                            <span class="video-label"><?php echo esc_html($video_label); ?></span>
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>