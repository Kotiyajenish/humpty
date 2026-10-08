<?php
$mission_eyebrow = get_field('mission_eyebrow');
$mission_heading = get_field('mission_heading');
$mission_content = get_field('mission_content');
?>
<section class="mission">
    <div class="wrap">
        <div class="mission-inner">
            <div class="mission-copy">
                <?php if(!empty($mission_eyebrow)): ?>
                    <span class="eyebrow"><?php echo esc_html($mission_eyebrow); ?></span>
                <?php endif; ?>
                <?php if(!empty($mission_heading)): ?>
                    <h2><?php echo esc_html($mission_heading); ?></h2>
                <?php endif; ?>
                <?php if(!empty($mission_content)): ?>
                    <?php echo wp_kses_post($mission_content); ?>
                <?php endif; ?>
            </div>
            <?php if (have_rows('mission_values')) : ?>
                <div class="mission-values">
                    <?php while (have_rows('mission_values')) : the_row();
                        $mission_value_icon    = get_sub_field('mission_value_icon');
                        $mission_value_heading   = get_sub_field('mission_value_heading');
                        $mission_value_content    = get_sub_field('mission_value_content');
                    ?>
                    <div class="value-card">
                        <div class="value-icon"><?php echo $mission_value_icon; ?></div>
                        <div class="value-text">
                            <?php if ($mission_value_heading) : ?><h4><?php echo esc_html($mission_value_heading); ?></h4><?php endif; ?>
                            <?php if ($mission_value_content) : ?><p><?php echo esc_html($mission_value_content); ?></p><?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>