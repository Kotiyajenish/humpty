<?php
$icon                = get_field('icon');
$tag                 = get_field('tag');
$heading             = get_field('heading');
$description         = get_field('description');
$button_text         = get_field('button_text');
$button_link         = get_field('button_link');

$program_link_text   = get_field('program_link_text');
$program_link        = get_field('program_link');

$link_url            = ! empty($button_link['url']) ? $button_link['url'] : '#';
$link_target         = ! empty($button_link['target']) ? $button_link['target'] : '_self';

$program_url         = ! empty($program_link['url']) ? $program_link['url'] : '#';
$program_target      = ! empty($program_link['target']) ? $program_link['target'] : '_self';
?>

<section class="private-lessons-section">

    <a href="<?php echo esc_url($link_url); ?>"
       target="<?php echo esc_attr($link_target); ?>"
       class="private-lessons-card">

        <div class="private-icon">
            <?php echo esc_html($icon); ?>
        </div>

        <div class="private-content">

            <?php if ($tag) : ?>
                <span class="private-tag">
                    <?php echo esc_html($tag); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h3><?php echo esc_html($heading); ?></h3>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>

        </div>

        <?php if ($button_text) : ?>
            <span class="private-link">
                <?php echo esc_html($button_text); ?>
            </span>
        <?php endif; ?>

    </a>

    <?php if ($program_link_text) : ?>
        <div class="program-details">
            <a href="<?php echo esc_url($program_url); ?>"
               target="<?php echo esc_attr($program_target); ?>"
               class="program-details-link">
                <?php echo esc_html($program_link_text); ?>
                <span>→</span>
            </a>
        </div>
    <?php endif; ?>

</section>