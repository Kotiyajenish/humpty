<?php
$curriculum_title = get_field('curriculum_title');
?>
<section class="our-curriculum-path-section">
    <div class="curriculum-path">
        <?php if ($curriculum_title) : ?>
            <h4 class="curriculum-path-title">
                <?php echo esc_html($curriculum_title); ?>
            </h4>
        <?php endif; ?>
        <div class="curriculum-path-timeline">
            <?php if (have_rows('curriculum_steps')) : ?>
                <?php while (have_rows('curriculum_steps')) : the_row();
                    $step_label  = get_sub_field('step_label');
                    $step_number = get_sub_field('step_number');
                    $step_text   = get_sub_field('step_text');
                    $active_step = get_sub_field('active_step');
                ?>
                    <div class="curriculum-step">
                        <div class="curriculum-step-circle <?php echo $active_step ? 'curriculum-step-circle-active' : ''; ?>">
                            <?php if ($step_label) : ?>
                                <span class="curriculum-step-label">
                                    <?php echo esc_html($step_label); ?>
                                </span>
                            <?php endif; ?>
                            <?php if ($step_number) : ?>
                                <span>
                                    <?php echo esc_html($step_number); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <?php if ($step_text) : ?>
                            <span class="curriculum-step-text">
                                <?php echo esc_html($step_text); ?>
                            </span>
                        <?php endif; ?>
                    </div>
                    <?php if (!empty(get_row_index()) && get_row_index() < count(get_field('curriculum_steps'))) : ?>
                        <div class="curriculum-path-arrow">
                            <div class="curriculum-path-arrow-head"></div>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="progressive-detail-features">
            <?php if (have_rows('curriculum_features')) : ?>
                <?php while (have_rows('curriculum_features')) : the_row();
                    $feature_text = get_sub_field('feature_text');
                    $svg_our_icon = get_sub_field('svg_our_icon');
                ?>
                <div class="progressive-detail-feature">
                    <?php if ($svg_our_icon) : ?>
                        <p class="svg-our-icon"><?php echo $svg_our_icon; ?></p>
                    <?php endif; ?>
                    <span><?php echo esc_html($feature_text); ?></span>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>