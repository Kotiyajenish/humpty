<?php
$eyebrow   = get_field('feature_eyebrow');
$heading   = get_field('feature_heading');
$content   = get_field('feature_content');
$button    = get_field('feature_button');
$image1    = get_field('feature_image_1');
$image2    = get_field('feature_image_2');
$label1    = get_field('feature_image_label_1');
$label2    = get_field('feature_image_label_2');
?>
<section class="feature-section alt-bg">
    <div class="wrap">
        <div class="feature-inner">
            <div class="feature-copy">
                <?php if ($eyebrow) : ?>
                    <span class="eyebrow"><?php echo esc_html($eyebrow); ?></span>
                <?php endif; ?>
                <?php if ($heading) : ?>
                    <h2><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
                <?php if ($content) : ?>
                    <?php echo wp_kses_post($content); ?>
                <?php endif; ?>
                <?php if (have_rows('feature_list')) : ?>
                    <ul class="feature-list">
                        <?php while (have_rows('feature_list')) : the_row(); ?>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <?php echo esc_html(get_sub_field('item')); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ?: '_self'); ?>" class="btn-outline">
                        <?php echo esc_html($button['title']); ?> →
                    </a>
                <?php endif; ?>
            </div>
            <div class="feature-visual split">
                <div class="img-corp">
                    <div class="img-block">
                        <?php if ($image1) : ?>
                            <img src="<?php echo esc_url($image1['url']); ?>" alt="<?php echo esc_attr($image1['alt']); ?>">
                        <?php endif; ?>
                        <?php if ($label1) : ?>
                            <span class="img-label"><?php echo esc_html($label1); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="img-corp2">
                    <div class="img-block">
                        <?php if ($image2) : ?><img src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>"><?php endif; ?>
                        <?php if ($label2) : ?><span class="img-label"><?php echo esc_html($label2); ?></span><?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>