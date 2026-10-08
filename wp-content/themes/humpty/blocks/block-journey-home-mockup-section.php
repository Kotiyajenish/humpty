<?php

// Section
$journey_home_mockup_eyebrow = get_field('journey_home_mockup_eyebrow');
$journey_home_mockup_heading = get_field('journey_home_mockup_heading');
$journey_home_mockup_content = get_field('journey_home_mockup_content');

// Feature Card
$journey_feature_tag            = get_field('journey_feature_tag');
$journey_feature_image          = get_field('journey_feature_image');
$journey_feature_number         = get_field('journey_feature_number');
$journey_feature_title          = get_field('journey_feature_title');
$journey_feature_content        = get_field('journey_feature_content');
$journey_feature_price          = get_field('journey_feature_price');
$journey_feature_price_subtitle = get_field('journey_feature_price_subtitle');
$journey_feature_link           = get_field('journey_feature_link');

// Workshop Card
$journey_workshop_tag      = get_field('journey_workshop_tag');
$journey_workshop_image    = get_field('journey_workshop_image');
$journey_workshop_number   = get_field('journey_workshop_number');
$journey_workshop_title    = get_field('journey_workshop_title');
$journey_workshop_content  = get_field('journey_workshop_content');
$journey_workshop_link     = get_field('journey_workshop_link');

// Social Card
$journey_social_tag      = get_field('journey_social_tag');
$journey_social_image    = get_field('journey_social_image');
$journey_social_number   = get_field('journey_social_number');
$journey_social_title    = get_field('journey_social_title');
$journey_social_content  = get_field('journey_social_content');
$journey_social_link     = get_field('journey_social_link');

// Choreo Card
$journey_choreo_tag      = get_field('journey_choreo_tag');
$journey_choreo_image    = get_field('journey_choreo_image');
$journey_choreo_number   = get_field('journey_choreo_number');
$journey_choreo_title    = get_field('journey_choreo_title');
$journey_choreo_content  = get_field('journey_choreo_content');
$journey_choreo_link     = get_field('journey_choreo_link');
?>
<section class="journey">
    <div class="wrap">
        <div class="journey-head">
            <?php if ($journey_home_mockup_eyebrow) : ?>
                <span class="eyebrow"><?php echo esc_html($journey_home_mockup_eyebrow); ?></span>
            <?php endif; ?>
            <?php if ($journey_home_mockup_heading) : ?>
                <h2><?php echo esc_html($journey_home_mockup_heading); ?></h2>
            <?php endif; ?>
            <?php if ($journey_home_mockup_content) : ?>
                <?php echo wp_kses_post($journey_home_mockup_content); ?>
            <?php endif; ?>
        </div>
        <svg class="path-svg" viewBox="0 0 1180 90" fill="none">
            <path d="M 195 45 C 320 45, 320 30, 430 30" stroke="#E8632C" stroke-width="2.5" stroke-dasharray="2 7" stroke-linecap="round"></path>
            <path d="M 195 45 C 320 45, 320 60, 430 60" stroke="#6B7A5E" stroke-width="2.5" stroke-dasharray="2 7" stroke-linecap="round"></path>
            <path d="M 750 30 C 850 30, 850 45, 980 45" stroke="#E8632C" stroke-width="2.5" stroke-dasharray="2 7" stroke-linecap="round"></path>
            <path d="M 750 60 C 850 60, 850 45, 980 45" stroke="#6B7A5E" stroke-width="2.5" stroke-dasharray="2 7" stroke-linecap="round"></path>
        </svg>
        <div class="journey-grid">
            <div class="journey-col">
                <div class="jcard feature">
                    <?php if ($journey_feature_tag) : ?>
                        <span class="tag"><?php echo esc_html($journey_feature_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($journey_feature_image) : ?>
                        <img src="<?php echo esc_url($journey_feature_image['url']); ?>" alt="<?php echo esc_attr($journey_feature_image['alt']); ?>">
                    <?php endif; ?>
                    <?php if ($journey_feature_number) : ?>
                        <div class="num"><?php echo esc_html($journey_feature_number); ?></div>
                    <?php endif; ?>
                    <?php if ($journey_feature_title) : ?>
                        <h3><?php echo esc_html($journey_feature_title); ?></h3>
                    <?php endif; ?>
                    <?php if ($journey_feature_content) : ?>
                        <p><?php echo esc_html($journey_feature_content); ?></p>
                    <?php endif; ?>
                    <?php if ($journey_feature_price) : ?>
                        <div class="price">
                            <?php echo esc_html($journey_feature_price); ?>
                            <?php if ($journey_feature_price_subtitle) : ?>
                                <span><?php echo esc_html($journey_feature_price_subtitle); ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($journey_feature_link) : ?>
                        <span class="mini-link"><?php echo esc_html($journey_feature_link); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="journey-col split">
                <div class="jcard workshop">
                    <?php if ($journey_workshop_tag) : ?>
                        <span class="tag"><?php echo esc_html($journey_workshop_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($journey_workshop_image) : ?>
                        <img src="<?php echo esc_url($journey_workshop_image['url']); ?>" alt="<?php echo esc_attr($journey_workshop_image['alt']); ?>">
                    <?php endif; ?>
                    <?php if ($journey_workshop_number) : ?>
                        <div class="num"><?php echo esc_html($journey_workshop_number); ?></div>
                    <?php endif; ?>
                    <?php if ($journey_workshop_title) : ?>
                        <h3><?php echo esc_html($journey_workshop_title); ?></h3>
                    <?php endif; ?>
                    <?php if ($journey_workshop_content) : ?>
                        <p><?php echo esc_html($journey_workshop_content); ?></p>
                    <?php endif; ?>
                    <?php if ($journey_workshop_link) : ?>
                        <span class="mini-link"><?php echo esc_html($journey_workshop_link); ?></span>
                    <?php endif; ?>
                </div>
                <div class="jcard social">
                    <?php if ($journey_social_tag) : ?>
                        <span class="tag"><?php echo esc_html($journey_social_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($journey_social_image) : ?>
                        <img src="<?php echo esc_url($journey_social_image['url']); ?>" alt="<?php echo esc_attr($journey_social_image['alt']); ?>">
                    <?php endif; ?>
                    <?php if ($journey_social_number) : ?>
                        <div class="num"><?php echo esc_html($journey_social_number); ?></div>
                    <?php endif; ?>
                    <?php if ($journey_social_title) : ?>
                        <h3><?php echo esc_html($journey_social_title); ?></h3>
                    <?php endif; ?>
                    <?php if ($journey_social_content) : ?>
                        <p><?php echo esc_html($journey_social_content); ?></p>
                    <?php endif; ?>
                    <?php if ($journey_social_link) : ?>
                        <span class="mini-link"><?php echo esc_html($journey_social_link); ?></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="journey-col">
                <div class="jcard choreo">
                    <?php if ($journey_choreo_tag) : ?>
                        <span class="tag"><?php echo esc_html($journey_choreo_tag); ?></span>
                    <?php endif; ?>
                    <?php if ($journey_choreo_image) : ?>
                        <img src="<?php echo esc_url($journey_choreo_image['url']); ?>" alt="<?php echo esc_attr($journey_choreo_image['alt']); ?>">
                    <?php endif; ?>
                    <?php if ($journey_choreo_number) : ?>
                        <div class="num"><?php echo esc_html($journey_choreo_number); ?></div>
                    <?php endif; ?>
                    <?php if ($journey_choreo_title) : ?>
                        <h3><?php echo esc_html($journey_choreo_title); ?></h3>
                    <?php endif; ?>
                    <?php if ($journey_choreo_content) : ?>
                        <p><?php echo esc_html($journey_choreo_content); ?></p>
                    <?php endif; ?>
                    <?php if ($journey_choreo_link) : ?>
                        <span class="mini-link"><?php echo esc_html($journey_choreo_link); ?></span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>