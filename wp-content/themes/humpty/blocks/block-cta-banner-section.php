<?php
$cta_heading = get_field('cta_heading');
$cta_content = get_field('cta_content');
$cta_button = get_field('cta_button');
?>
<section class="cta-banner">
    <div class="wrap">
       <div class="cta-inner">
            <div class="cta-copy">
                <?php if ($cta_heading) : ?>
                    <h2><?php echo esc_html($cta_heading); ?></h2>
                <?php endif; ?>
                <?php if ($cta_content) : ?>
                    <div class="cta-content"><?php echo wp_kses_post($cta_content); ?></div>
                <?php endif; ?>
            </div>
            <?php if ($cta_button) : ?>
                <div class="cta-actions">
                    <a href="<?php echo esc_url($cta_button['url']); ?>" class="btn-white" target="<?php echo esc_attr($cta_button['target'] ?: '_self'); ?>">
                        <?php echo esc_html($cta_button['title']); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>