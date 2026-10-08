<?php
$banner_image   = get_field('banner_image');
$badge_text     = get_field('badge_text');
$title          = get_field('title');
$highlight_text = get_field('highlight_text');
$description    = get_field('description');
$button         = get_field('button');
$note           = get_field('note');

// Default Values
$badge_text     = !empty($badge_text) ? $badge_text : 'Soul2Sole Latin Dance Company';
$title          = !empty($title) ? $title : 'Learn to Dance';
$highlight_text = !empty($highlight_text) ? $highlight_text : 'With Confidence';
$description    = !empty($description) ? $description : 'Join our community and experience the joy of Latin dance through expert instruction and a welcoming environment.';

if (empty($button)) {
    $button = array(
        'title'  => 'Get Started',
        'url'    => '#',
        'target' => '_self',
    );
}
$note = !empty($note) ? $note : '';
?>
<section class="banner-section" <?php if (!empty($banner_image)) : ?> style="background-image:url('<?php echo esc_url($banner_image['url']); ?>');" <?php endif; ?>>
    <div class="hero-content">
        <span class="hero-badge">
            <span class="hero-badge-dot"></span>
            <?php echo esc_html($badge_text); ?>
        </span>
        <h1 class="hero-title">
            <?php echo wp_kses_post($title); ?>
            <?php if (!empty($highlight_text)) : ?><br><em><?php echo esc_html($highlight_text); ?></em><?php endif; ?>
        </h1>
        <p class="hero-description">
            <?php echo esc_html($description); ?>
        </p>
        <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>" class="hero-button">
            <?php echo esc_html($button['title']); ?>
        </a>
        <p class="hero-note"><?php echo esc_html($note); ?></p>
    </div>
</section>