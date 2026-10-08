<?php
$cta_banner_heading = get_field('cta_banner_heading');
$cta_banner_content = get_field('cta_banner_content');
$cta_banner_button  = get_field('cta_banner_button');
?>
<section class="cta-banner">
    <div class="wrap">
        <div class="cta-inner">
            <div class="cta-copy">
                <?php if ($cta_banner_heading) : ?>
                    <h2><?php echo esc_html($cta_banner_heading); ?></h2>
                <?php endif; ?>
                <?php if ($cta_banner_content) : ?>
                    <p><?php echo esc_html($cta_banner_content); ?></p>
                <?php endif; ?>
            </div>
            <div class="cta-actions">
                <?php if ($cta_banner_button) : ?>
                    <a href="<?php echo esc_url($cta_banner_button['url']); ?>" class="btn-white" target="<?php echo esc_attr($cta_banner_button['target'] ?: '_self'); ?>">
                        <?php echo esc_html($cta_banner_button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>