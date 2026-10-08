<?php
$note_icon = get_field('note_icon');
$note_text = get_field('note_text');
?>

<section class="info-strip">

    <div class="wrap">

        <?php if (have_rows('info_cards')) : ?>

            <div class="info-grid">

                <?php while (have_rows('info_cards')) : the_row();

                    $icon       = get_sub_field('icon');
                    $bg         = get_sub_field('icon_bg');
                    $title      = get_sub_field('title');
                    $text       = get_sub_field('text');
                    $link       = get_sub_field('link');
                    $small_text = get_sub_field('small_text');

                ?>

                    <div class="info-card">

                        <div class="info-icon"
                            <?php if ($bg) : ?>
                                style="background-color: <?php echo esc_attr($bg); ?>;"
                            <?php endif; ?>>

                            <?php
                            if ($icon) {
                                echo wp_get_attachment_image($icon, 'full');
                            }
                            ?>

                        </div>

                        <div class="info-content">

                            <?php if ($title) : ?>
                                <h4><?php echo esc_html($title); ?></h4>
                            <?php endif; ?>

                            <?php if ($text) : ?>

                                <?php if ($link) : ?>

                                    <p>
                                        <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                                            <?php echo esc_html($text); ?>
                                        </a>
                                    </p>

                                <?php else : ?>

                                    <p><?php echo esc_html($text); ?></p>

                                <?php endif; ?>

                            <?php endif; ?>

                            <?php if ($small_text) : ?>
                                <p class="small"><?php echo esc_html($small_text); ?></p>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>


        <?php if ($note_icon || $note_text) : ?>

            <div class="hours-note">

                <?php if ($note_icon) : ?>

                    <div class="hours-note-icon">
                        <?php echo wp_get_attachment_image($note_icon, 'full'); ?>
                    </div>

                <?php endif; ?>

                <?php if ($note_text) : ?>

                    <div class="hours-note-content">
                        <p><?php echo esc_html($note_text); ?></p>
                    </div>

                <?php endif; ?>

            </div>

        <?php endif; ?>

    </div>

</section>