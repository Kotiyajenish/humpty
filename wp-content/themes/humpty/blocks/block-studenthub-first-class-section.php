<?php
$eyebrow = get_field('first_class_eyebrow');
$heading = get_field('first_class_heading');
?>
<section class="first-class">
    <div class="wrap">
        <div class="remember-inner">
            <?php if ($eyebrow) : ?>
                <span class="eyebrow"><?php echo esc_html($eyebrow); ?></span>
            <?php endif; ?>
            <?php if ($heading) : ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <?php if (have_rows('studenthub_first_class_items')) : ?>
                <ul class="remember-list">
                    <?php while (have_rows('studenthub_first_class_items')) : the_row();
                        $studenthub_content = get_sub_field('studenthub_content');
                    ?>
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span><?php echo $studenthub_content; ?></span>
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>