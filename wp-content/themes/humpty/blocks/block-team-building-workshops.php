<?php
$team_building_eyebrow    = get_field('team_building_eyebrow');
$team_building_heading    = get_field('team_building_heading');
$team_building_content    = get_field('team_building_content');
$button     = get_field('team_building_button');
$team_building_image_label = get_field('team_building_image_label');
$reverse    = get_field('team_building_reverse_layout');
?>
<section class="feature-section">
    <div class="wrap">
        <div class="feature-inner <?php echo $reverse ? 'reverse' : ''; ?>">
            <div class="feature-copy">
                <?php if ($team_building_eyebrow) : ?><span class="eyebrow"><?php echo esc_html($team_building_eyebrow); ?></span><?php endif; ?>
                <?php if ($team_building_heading) : ?><h2><?php echo esc_html($team_building_heading); ?></h2><?php endif; ?>
                <?php if ($team_building_content) : ?><?php echo wp_kses_post($team_building_content); ?><?php endif; ?>
                <?php if (have_rows('team_building_features')) : ?>
                    <ul class="feature-list">
                        <?php while (have_rows('team_building_features')) : the_row(); ?>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <?php echo esc_html(get_sub_field('team_building_feature_text')); ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target'] ? $button['target'] : '_self'); ?>"
                        class="btn-outline">
                        <?php echo esc_html($button['title']); ?> →
                    </a>
                <?php endif; ?>
            </div>
            <div class="feature-visual">
                <div class="img-team">
                    <div class="img-block">
                        <span class="img-label"><?php echo esc_html($team_building_image_label); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>