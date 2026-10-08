<?php
$faq_cta_heading = get_field('faq_cta_heading');
$faq_cta_content = get_field('faq_cta_content');
$faq_cta_button  = get_field('faq_cta_button');
?>
<section class="faq-cta">
    <div class="wrap">
        <div class="faq-cta-inner">
            <div class="faq-cta-copy">
                <?php if ($faq_cta_heading) : ?><h3><?php echo esc_html($faq_cta_heading); ?></h3><?php endif; ?>
                <?php if ($faq_cta_content) : ?><?php echo wp_kses_post($faq_cta_content); ?><?php endif; ?>
            </div>
            <?php if ($faq_cta_button) :
                $url    = !empty($faq_cta_button['url']) ? $faq_cta_button['url'] : '#';
                $title  = !empty($faq_cta_button['title']) ? $faq_cta_button['title'] : 'Learn More';
                $target = !empty($faq_cta_button['target']) ? $faq_cta_button['target'] : '_self';
            ?>
                <div class="faq-cta-actions">
                    <a href="<?php echo esc_url($url); ?>" class="btn-white" target="<?php echo esc_attr($target); ?>">
                        <?php echo esc_html($title); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>