<?php
$heading = get_field('closing_heading');
$content = get_field('closing_content');
?>
<section class="closing">
    <div class="wrap">
        <?php if ($heading) : ?>
            <h3><?php echo esc_html($heading); ?></h3>
        <?php endif; ?>
        <?php if ($content) : ?>
            <p><?php echo esc_html($content); ?></p>
        <?php endif; ?>
    </div>
</section>