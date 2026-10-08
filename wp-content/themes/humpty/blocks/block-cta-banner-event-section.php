<?php
$events_cta_heading = get_field('events_cta_heading') ?: 'Ready to Dance?';
$events_cta_content = get_field('events_cta_content') ?: '<p>Join our community and start your dance journey today. Book your first class and experience the joy of dance.</p>';
$primary_button = get_field('primary_button');
if (empty($primary_button)) {
    $primary_button = array(
        'title'  => 'Book a Class',
        'url'    => '#',
        'target' => '_self',
    );
}
$secondary_button = get_field('secondary_button');
if (empty($secondary_button)) {
    $secondary_button = array(
        'title'  => 'Learn More',
        'url'    => '#',
        'target' => '_self',
    );
}
?>
<section class="cta-banner">
    <div class="wrap">
        <div class="cta-inner">
            <div class="cta-copy">
                <?php if ($events_cta_heading) : ?>
                    <h2><?php echo esc_html($events_cta_heading); ?></h2>
                <?php endif; ?>
                <?php if ($events_cta_content) : ?>
                    <?php echo wp_kses_post($events_cta_content); ?>
                <?php endif; ?>
            </div>
            <div class="cta-actions">
                <?php if (!empty($primary_button)) : ?>
                    <a href="<?php echo esc_url($primary_button['url']); ?>" class="btn-white"
                    target="<?php echo esc_attr(!empty($primary_button['target']) ? $primary_button['target'] : '_self'); ?>">
                        <?php echo esc_html($primary_button['title']); ?>
                    </a>
                <?php endif; ?>
                <?php if (!empty($secondary_button)) : ?>
                    <a href="<?php echo esc_url($secondary_button['url']); ?>"
                       class="cta-link"
                       target="<?php echo esc_attr(!empty($secondary_button['target']) ? $secondary_button['target'] : '_self'); ?>">
                        <?php echo esc_html($secondary_button['title']); ?> →
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>