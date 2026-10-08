<?php
$contact_form_eyebrow        = get_field('contact_form_eyebrow');
$contact_form_title        = get_field('contact_form_title');
$contact_form_description    = get_field('contact_form_description');
$contact_form_shortcode = get_field('contact_form_shortcode');
?>
<section class="form-section">
    <div class="wrap">
        <div class="form-inner">
            <div class="form-copy">
                <?php if ($contact_form_eyebrow) : ?>
                    <span class="eyebrow"><?php echo esc_html($contact_form_eyebrow); ?></span>
                <?php endif; ?>
                <?php if ($contact_form_title) : ?>
                    <h2><?php echo esc_html($contact_form_title); ?></h2>
                <?php endif; ?>
                <?php if ($contact_form_description) : ?>
                    <p><?php echo esc_html($contact_form_description); ?></p>
                <?php endif; ?>
            </div>
            <div class="form-box">
                <?php
                    if ($contact_form_shortcode) {echo do_shortcode($contact_form_shortcode);}
                ?>
            </div>
        </div>
    </div>
</section>