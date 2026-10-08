<?php
$studenthub_level_eyebrow    = get_field('studenthub_level_eyebrow');
$studenthub_level_heading    = get_field('studenthub_level_heading');
$studenthub_level_description       = get_field('studenthub_level_description');
?>
<section class="levels">
    <div class="wrap">
        <div class="section-head">
            <?php if ($studenthub_level_eyebrow) : ?>
                <span class="eyebrow"><?php echo esc_html($studenthub_level_eyebrow); ?></span>
            <?php endif; ?>
            <?php if ($studenthub_level_heading) : ?>
                <h2><?php echo esc_html($studenthub_level_heading); ?></h2>
            <?php endif; ?>
            <?php if ($studenthub_level_description) : ?>
                <p><?php echo esc_html($studenthub_level_description); ?></p>
            <?php endif; ?>
        </div>
        <?php if (have_rows('studenthub_level_cards')) : ?>
            <div class="levels-grid">
                <?php while (have_rows('studenthub_level_cards')) : the_row();
                    $studenthub_level_number  = get_sub_field('studenthub_level_number');
                    $studenthub_level_title   = get_sub_field('studenthub_level_title');
                    $studenthub_level_content = get_sub_field('studenthub_level_content');
                ?>
                    <div class="level-card">
                        <?php if ($studenthub_level_number) : ?>
                            <div class="level-num">
                                <?php echo esc_html($studenthub_level_number); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($studenthub_level_title) : ?>
                            <h3><?php echo esc_html($studenthub_level_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($studenthub_level_content) : ?>
                            <?php echo $studenthub_level_content; ?>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>