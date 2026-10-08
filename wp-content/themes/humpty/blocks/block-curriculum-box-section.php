<?php
$curriculum_box_label = get_field('curriculum_box_label');
?>
<section class="levels">
  <div class="wrap">
<div class="curriculum-box">
    <?php if ($curriculum_box_label) : ?>
        <div class="curriculum-label">
            <?php echo esc_html($curriculum_box_label); ?>
        </div>
    <?php endif; ?>
    <?php if (have_rows('curriculum_box_items')) : ?>
        <div class="curriculum-path">
            <?php
            $rows = get_field('curriculum_box_items');
            $count = count($rows);
            $i = 1;
            while (have_rows('curriculum_box_items')) :
                the_row();
                $circle = get_sub_field('curriculum_box_circle');
                $meta   = get_sub_field('curriculum_box_meta');
                $start  = get_sub_field('curriculum_box_start');
            ?>
            <div class="path-node <?php echo $start ? 'start' : ''; ?>">
                <div class="path-circle">
                    <?php echo wp_kses_post(nl2br($circle)); ?>
                </div>
                <div class="path-meta">
                    <?php echo wp_kses_post(nl2br($meta)); ?>
                </div>
            </div>
            <?php if ($i < $count) : ?>
                <svg class="path-arrow" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
                <?php endif; ?>
            <?php
                $i++;
            endwhile;
            ?>
        </div>
    <?php endif; ?>
    <?php if (have_rows('curriculum_box_features')) : ?>
        <div class="curriculum-features">
            <?php while (have_rows('curriculum_box_features')) : the_row();
                $svg  = get_sub_field('curriculum_box_feature_svg');
                $text = get_sub_field('curriculum_box_feature_text');
            ?>
                <div class="curriculum-feature">
                    <?php if ($svg) : ?>
                        <?php echo $svg; ?>
                    <?php endif; ?>
                    <?php if ($text) : ?>
                        <span><?php echo esc_html($text); ?></span>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
</div>
</section>