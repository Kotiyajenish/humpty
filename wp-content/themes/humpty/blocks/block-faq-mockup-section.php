<?php

$image    = get_field('faq_hero_image');
$eyebrow  = get_field('faq_hero_eyebrow');
$heading  = get_field('faq_hero_heading');
$tagline  = get_field('faq_hero_tagline');
$image_url = !empty($image['url']) ? $image['url'] : '';
?>
<section class="page-hero">
    <div class="page-hero-visual"
        <?php if ($image_url) : ?> style="background-image:url('<?php echo esc_url($image_url); ?>');" <?php endif; ?>>
    </div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-content">
        <div class="wrap">
            <?php if ($eyebrow) : ?><span class="eyebrow on-dark"><?php echo esc_html($eyebrow); ?></span><?php endif; ?>
            <?php if ($heading) : ?><h1><?php echo esc_html($heading); ?></h1><?php endif; ?>
            <?php if ($tagline) : ?><div class="page-hero-tagline"><?php echo wp_kses_post($tagline); ?></div><?php endif; ?>
        </div>
    </div>
</section>