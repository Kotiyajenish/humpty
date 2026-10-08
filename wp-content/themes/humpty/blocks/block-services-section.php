<?php
/**
 * Services Section Block Template
 */

$services_eyebrow     = get_field('services_eyebrow');
$services_heading     = get_field('services_heading');
$services_description_content = get_field('services_description_content');
?>
<section class="services">
    <div class="wrap">
        <div class="section-head">
            <?php if ($services_eyebrow) : ?>
                <span class="eyebrow"><?php echo esc_html($services_eyebrow); ?></span>
            <?php endif; ?>
            <?php if ($services_heading) : ?>
                <h2><?php echo esc_html($services_heading); ?></h2>
            <?php endif; ?>
            <?php if ($services_description_content) : ?>
                <p><?php echo esc_html($services_description_content); ?></p>
            <?php endif; ?>
        </div>
        <?php if (have_rows('services_items')) : ?>
            <div class="services-grid 9">
                <?php while (have_rows('services_items')) : the_row();
                    $style = get_sub_field('service_style_class');
                    $icon  = get_sub_field('service_icon');
                    $title = get_sub_field('service_title');
                    $text  = get_sub_field('service_description');

                    // Skip this card entirely if the row has no real content
                    if (empty($icon) && empty($title) && empty($text)) {
                        continue;
                    }
                ?>
                    <div class="service-card<?php echo !empty($style) ? ' ' . esc_attr($style) : ''; ?>">
                        <?php if ($icon) : ?>
                            <div class="service-icon"><?php echo esc_html($icon); ?></div>
                        <?php endif; ?>
                        <?php if ($title) : ?>
                            <h3><?php echo esc_html($title); ?></h3>
                        <?php endif; ?>
                        <?php if ($text) : ?>
                            <p><?php echo esc_html($text); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
