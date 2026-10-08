<?php
$level_descriptions_your_progression = get_field('level_descriptions_your_progression');
$level_descriptions_h2              = get_field('level_descriptions_h2');
$level_descriptions_p_tag           = get_field('level_descriptions_p_tag');
$level_descriptions_list            = get_field('level_descriptions_list');
$level_our_curriculum_path = get_field('level_our_curriculum_path');
?>
<section class="levels">
    <div class="wrap">
        <div class="section-head">
            <?php if ($level_descriptions_your_progression) : ?>
                <span class="eyebrow">
                    <?php echo esc_html($level_descriptions_your_progression); ?>
                </span>
            <?php endif; ?>
            <?php if ($level_descriptions_h2) : ?>
                <h2>
                    <?php echo esc_html($level_descriptions_h2); ?>
                </h2>
            <?php endif; ?>
            <?php if ($level_descriptions_p_tag) : ?>
                <p>
                    <?php echo esc_html($level_descriptions_p_tag); ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if (!empty($level_descriptions_list) && is_array($level_descriptions_list)) : ?>
            <div class="levels-grid">
                <?php foreach ($level_descriptions_list as $level) : ?>
                    <div class="level-card">
                        <?php if (!empty($level['level_number'])) : ?>
                            <div class="level-num">
                                <?php echo esc_html($level['level_number']); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($level['level_title'])) : ?>
                            <h3>
                                <?php echo esc_html($level['level_title']); ?>
                            </h3>
                        <?php endif; ?>
                        <?php if (!empty($level['level_description'])) : ?>
                            <p>
                                <?php echo esc_html($level['level_description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <div class="curriculum-box">
            <div class="curriculum-label"><?php echo esc_html($level_our_curriculum_path); ?></div>
            <?php
            $student_path_mockup_curriculum_path = get_field('student_path_mockup_curriculum_path');
            if ($student_path_mockup_curriculum_path) :
            ?>
            <div class="curriculum-path">
                <?php foreach ($student_path_mockup_curriculum_path as $index => $path) : ?>
                    <div class="path-node <?php echo ($index === 0) ? 'start' : ''; ?>">
                        <div class="path-circle">
                            <?php echo WP_kses_post($path['student_path_mockup_path_level']); ?>
                        </div>
                        <div class="path-meta">
                            <?php echo nl2br(esc_html($path['student_path_mockup_path_duration'])); ?>
                        </div>
                    </div>
                    <?php if ($index < count($student_path_mockup_curriculum_path) - 1) : ?>
                        <svg class="path-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    <?php endif;
                endforeach; ?>
            </div>
            <?php endif; ?>
            <?php
            $student_path_mockup_curriculum_features = get_field('student_path_mockup_curriculum_features');
            if ($student_path_mockup_curriculum_features) :
            ?>
                <div class="curriculum-features">
                    <?php foreach ($student_path_mockup_curriculum_features as $feature) : ?>
                        <div class="curriculum-feature">
                            <?php if (!empty($feature['student_path_mockup_feature_icon'])) : ?>
                                <?php echo $feature['student_path_mockup_feature_icon']; ?>
                            <?php endif; ?>
                            <?php echo esc_html($feature['student_path_mockup_feature_text']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>