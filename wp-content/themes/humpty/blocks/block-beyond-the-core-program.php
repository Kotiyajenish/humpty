<?php
$section_label_beyond          = get_field('section_label_beyond');
$section_title_beyond_students = get_field('section_title_beyond_students');
$section_text_beyond_students  = get_field('section_text_beyond_students');
$section_drop_in_workshops = get_field('section_drop_in_workshops');
$section_drop_in_h2_workshops = get_field('section_drop_in_h2_workshops');
$section_drop_in_p_workshops = get_field('section_drop_in_p_workshops');
$section_drop_in_button = get_field('section_drop_in_button');
$section_social_event_text = get_field('section_social_event_text');
$section_social_event_description = get_field('section_social_event_description');
$section_social_event_p = get_field('section_social_event_p');
$section_social_event_button = get_field('section_social_event_button');
$section_Choreo_Club_text = get_field('section_Choreo_Club_text');
$section_Choreo_h2_take = get_field('section_Choreo_h2_take');
$section_choreo_description = get_field('section_choreo_description');
$section_choreo_button = get_field('section_choreo_button');
?>
<section class="beyond-section">
    <div class="wrap">
        <div class="section-head">
            <span class="eyebrow"><?php echo esc_html($section_label_beyond); ?></span>
            <h2><?php echo esc_html($section_title_beyond_students); ?></h2>
            <p><?php echo esc_html($section_text_beyond_students); ?></p>
        </div>
        <div class="feature-inner">
            <div class="feature-copy">
                <?php if (get_field('section_drop_in_workshops')) : ?>
                    <span class="eyebrow">
                        <?php echo esc_html(get_field('section_drop_in_workshops')); ?>
                    </span>
                <?php endif; ?>
                <h2><?php echo esc_html(get_field('section_drop_in_h2_workshops')); ?></h2>
                <p><?php echo esc_html($section_drop_in_p_workshops); ?></p>
                <?php if (have_rows('section_drop_in_feature_list')) : ?>
                    <ul class="feature-list">
                        <?php while (have_rows('section_drop_in_feature_list')) : the_row(); ?>
                            <li>
                                <?php
                                $feature_icon = get_sub_field('feature_icon');
                                $feature_text = get_sub_field('feature_text');

                                if (!empty($feature_icon)) {
                                    echo $feature_icon;
                                }
                                if (!empty($feature_text)) {
                                    echo esc_html($feature_text);
                                }
                                ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($section_drop_in_button) : ?>
                    <a href="<?php echo esc_url($section_drop_in_button['url']); ?>" class="btn-outline" target="<?php echo esc_attr($section_drop_in_button['target']); ?>">
                        <?php echo esc_html($section_drop_in_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="feature-visual split">
                <div class="img-workshop1"><div class="img-block"></div></div>
                <div class="img-workshop2"><div class="img-block"></div></div>
            </div>
        </div>
        <div class="feature-inner reverse">
            <div class="feature-copy">
                <span class="eyebrow"><?php echo esc_html($section_social_event_text); ?></span>
                <h2><?php echo esc_html($section_social_event_description); ?></h2>
                <p><?php echo esc_html($section_social_event_p); ?></p>
                <?php
                    $feature_list = get_field('community_feature_list');
                    if ($feature_list) :
                ?>
                <ul class="feature-list">
                    <?php foreach ($feature_list as $feature) : ?>
                        <?php if (!empty($feature['feature_text'])) : ?>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <polyline points="20 6 9 17 4 12" />
                                </svg>
                                <?php echo esc_html($feature['feature_text']); ?>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if ($section_social_event_button) : ?>
                <a href="<?php echo esc_url($section_social_event_button['url']); ?>" class="btn-outline" target="<?php echo esc_attr($section_social_event_button['target']); ?>">
                    <?php echo esc_html($section_social_event_button['title']); ?>
                </a>
            <?php endif; ?>
            </div>
            <div class="feature-visual img-social">
                <div class="img-block"></div>
            </div>
        </div>
        <div class="feature-inner">
            <div class="feature-copy">
                <span class="eyebrow"><?php echo esc_html($section_Choreo_Club_text); ?></span>
                <h2><?php echo esc_html($section_Choreo_h2_take); ?></h2>
                <p><?php echo esc_html($section_choreo_description); ?></p>
                <?php
                    $feature_list = get_field('performance_feature_list');
                    if ($feature_list) :
                    ?>
                    <ul class="feature-list">
                        <?php foreach ($feature_list as $feature) : ?>
                            <?php if (!empty($feature['section_choreo_feature_text'])) : ?>
                                <li>
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    <?php echo esc_html($feature['section_choreo_feature_text']); ?>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($section_choreo_button) : ?>
                    <a href="<?php echo esc_url($section_choreo_button['url']); ?>" class="btn-outline" target="<?php echo esc_attr($section_choreo_button['target']); ?>">
                        <?php echo esc_html($section_choreo_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <div class="feature-visual split">
                <div class="img-choreo1"><div class="img-block"></div></div>
                <div class="img-choreo2"><div class="img-block"></div></div>
            </div>
        </div>
    </div>
</section>