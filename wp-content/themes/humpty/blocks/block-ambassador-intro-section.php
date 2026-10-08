<?php
$ambassador_intro_eyebrow      = get_field('ambassador_intro_eyebrow');
$ambassador_intro_title        = get_field('ambassador_intro_title');
$ambassador_intro_content = get_field('ambassador_intro_content');
$ambassador_intro_button = get_field('ambassador_intro_button');
$intro_image  = get_field('intro_image');
?>
<section class="intro-section">
    <div class="wrap">
        <div class="intro-inner">
            <div class="intro-copy">
                <?php if ($ambassador_intro_eyebrow) : ?>
                    <span class="eyebrow"><?php echo esc_html($ambassador_intro_eyebrow); ?></span>
                <?php endif; ?>
                <?php if ($ambassador_intro_title) : ?>
                    <h2><?php echo esc_html($ambassador_intro_title); ?></h2>
                <?php endif; ?>
                <?php if ($ambassador_intro_content) : ?>
                    <?php echo wp_kses_post($ambassador_intro_content); ?>
                <?php endif; ?>
                <?php if ($ambassador_intro_button) : ?>
                    <a href="<?php echo esc_url($ambassador_intro_button['url']); ?>" target="<?php echo esc_attr($ambassador_intro_button['target'] ? $intro_button['target'] : '_self'); ?>"
                       class="btn-primary">
                        <?php echo esc_html($ambassador_intro_button['title']); ?>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                <?php endif; ?>
            </div>
            <div class="intro-visual">
                <div class="img-block">
                    <?php
                        if ($intro_image) {
                            echo wp_get_attachment_image(
                                $intro_image,
                                'full',
                                false,
                                array(
                                    'class' => 'intro-image'
                                )
                            );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>