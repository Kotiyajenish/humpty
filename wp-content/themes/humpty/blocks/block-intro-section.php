<?php
$eyebrow    = get_field('intro_eyebrow');
$heading    = get_field('intro_heading');
$content    = get_field('intro_content');
$button     = get_field('intro_button');
$video      = get_field('intro_video');
$video_label = get_field('intro_video_label');
?>

<section class="intro-section">
    <div class="wrap">

        <div class="intro-inner">

            <div class="intro-copy">

                <?php if ($eyebrow) : ?>
                    <span class="eyebrow"><?php echo esc_html($eyebrow); ?></span>
                <?php endif; ?>

                <?php if ($heading) : ?>
                    <h2><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>

                <?php if ($content) : ?>
                    <?php echo wp_kses_post($content); ?>
                <?php endif; ?>

                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>"
                       class="btn-primary"
                       target="<?php echo esc_attr($button['target'] ?: '_self'); ?>">

                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22 6 12 13 2 6"></polyline>
                        </svg>

                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>

            </div>

            <div class="intro-video">

                <?php if ($video) : ?>

                    <div class="video-placeholder">
                        <?php echo $video; ?>

                        <?php if ($video_label) : ?>
                            <span class="video-label">
                                <?php echo esc_html($video_label); ?>
                            </span>
                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </div>
</section>