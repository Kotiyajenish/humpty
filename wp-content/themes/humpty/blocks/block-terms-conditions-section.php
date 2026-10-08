<?php
$sidebar_label     = get_field('sidebar_label');
$sidebar_card_text = get_field('sidebar_card_text');
$button            = get_field('sidebar_button');
?>

<section class="terms-section">
    <div class="wrap">
        <div class="terms-layout">

            <div class="terms-sidebar">

                <?php if ($sidebar_label) : ?>
                    <div class="sidebar-label">
                        <?php echo esc_html($sidebar_label); ?>
                    </div>
                <?php endif; ?>

                <?php if (have_rows('sidebar_items')) : ?>
                    <div class="sidebar-nav">

                        <?php while (have_rows('sidebar_items')) : the_row();

                            $number = get_sub_field('number');
                            $anchor = get_sub_field('anchor_id');
                            $title  = get_sub_field('title');

                        ?>

                            <a href="#<?php echo esc_attr($anchor); ?>" class="sidebar-link">
                                <span class="sidebar-num"><?php echo esc_html($number); ?></span>
                                <?php echo esc_html($title); ?>
                            </a>

                        <?php endwhile; ?>

                    </div>
                <?php endif; ?>

                <?php if ($sidebar_card_text || $button) : ?>

                    <div class="sidebar-card">

                        <?php if ($sidebar_card_text) : ?>
                            <p><?php echo esc_html($sidebar_card_text); ?></p>
                        <?php endif; ?>

                        <?php if ($button) : ?>

                            <a class="btn-outline"
                               href="<?php echo esc_url($button['url']); ?>"
                               target="<?php echo esc_attr($button['target']); ?>"
                               style="width:100%;justify-content:center;">

                                <?php echo esc_html($button['title']); ?>

                            </a>

                        <?php endif; ?>

                    </div>

                <?php endif; ?>

            </div>

            <div class="terms-content">

                <?php if (have_rows('terms')) : ?>

                    <?php while (have_rows('terms')) : the_row();

                        $number  = get_sub_field('number');
                        $anchor  = get_sub_field('anchor_id');
                        $heading = get_sub_field('heading');
                        $content = get_sub_field('content');

                    ?>

                        <div class="term-block" id="<?php echo esc_attr($anchor); ?>">

                            <div class="term-head">

                                <div class="term-num">
                                    <?php echo esc_html($number); ?>
                                </div>

                                <h2>
                                    <?php echo esc_html($heading); ?>
                                </h2>

                            </div>

                            <?php echo wp_kses_post($content); ?>

                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </div>
    </div>
</section>