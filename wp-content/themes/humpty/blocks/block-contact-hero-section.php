<?php
$background  = get_field('background_image');
$eyebrow     = get_field('eyebrow');
$title       = get_field('title');
$description = get_field('description');
$overlay     = get_field('overlay_color');
$opacity     = get_field('overlay_opacity');

// Default Values
$eyebrow    = !empty($eyebrow) ? $eyebrow : 'Join Our Team';
$title      = !empty($title) ? $title : 'Become Part of Soul2Sole';
$description = !empty($description)
    ? $description
    : 'Help us spread the love of Latin dance while inspiring students across the GTA.';
$overlay = !empty($overlay) ? $overlay : '#000000';
$opacity = !empty($opacity) ? $opacity : 50;
?>
<section class="page-hero">
    <div class="page-hero-visual"
        <?php if ($background) : ?>
            style="background-image:url('<?php echo esc_url(wp_get_attachment_image_url($background, 'full')); ?>');"
        <?php endif; ?>>
    </div>
    <div class="page-hero-overlay"
        style="background-color:<?php echo esc_attr($overlay); ?>;opacity:<?php echo esc_attr($opacity / 100); ?>;">
    </div>
    <div class="page-hero-content">
        <div class="wrap">
            <span class="eyebrow on-dark">
                <?php echo esc_html($eyebrow); ?>
            </span>
            <h1><?php echo esc_html($title); ?></h1>
            <p class="page-hero-tagline">
                <?php echo esc_html($description); ?>
            </p>
        </div>
    </div>
</section>