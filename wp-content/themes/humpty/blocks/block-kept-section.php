<?php
$kept_label       = get_field('kept_label');
$kept_heading     = get_field('kept_heading');
$kept_description = get_field('kept_description');
?>
<section class="kept-section">
    <div class="wrap">
        <?php if ($kept_label) : ?>
            <div class="kept-label"><?php echo esc_html($kept_label); ?></div>
        <?php endif; ?>
        <div class="placeholder-block">
            <?php if ($kept_heading) : ?>
                <h4><?php echo esc_html($kept_heading); ?></h4>
            <?php endif; ?>
            <?php if ($kept_description) : ?>
                <p><?php echo esc_html($kept_description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>