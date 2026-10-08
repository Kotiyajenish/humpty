<?php
$studenthub_mockup_beyond_eyebrow     = get_field('studenthub_mockup_beyond_eyebrow');
$studenthub_mockup_beyond_heading     = get_field('studenthub_mockup_beyond_heading');
$studenthub_mockup_beyond_description = get_field('studenthub_mockup_beyond_description');
?>

<section class="beyond-section">
    <div class="wrap">

        <div class="section-head">

            <?php if ($studenthub_mockup_beyond_eyebrow) : ?>
                <span class="eyebrow">
                    <?php echo esc_html($studenthub_mockup_beyond_eyebrow); ?>
                </span>
            <?php endif; ?>

            <?php if ($studenthub_mockup_beyond_heading) : ?>
                <h2>
                    <?php echo esc_html($studenthub_mockup_beyond_heading); ?>
                </h2>
            <?php endif; ?>

            <?php if ($studenthub_mockup_beyond_description) : ?>
                <p>
                    <?php echo esc_html($studenthub_mockup_beyond_description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if (have_rows('studenthub_mockup_blocks')) : ?>

            <?php while (have_rows('studenthub_mockup_blocks')) : the_row();

                $studenthub_mockup_layout      = get_sub_field('studenthub_mockup_layout');
                $studenthub_mockup_reverse     = get_sub_field('studenthub_mockup_reverse_layout');
                $studenthub_mockup_eyebrow     = get_sub_field('studenthub_mockup_eyebrow');
                $studenthub_mockup_heading     = get_sub_field('studenthub_mockup_heading');
                $studenthub_mockup_description = get_sub_field('studenthub_mockup_description');
                $studenthub_mockup_button      = get_sub_field('studenthub_mockup_button');

            ?>

                <div class="feature-inner <?php echo $studenthub_mockup_reverse ? 'reverse' : ''; ?>">

                    <div class="feature-copy">

                        <?php if ($studenthub_mockup_eyebrow) : ?>
                            <span class="eyebrow">
                                <?php echo esc_html($studenthub_mockup_eyebrow); ?>
                            </span>
                        <?php endif; ?>

                        <?php if ($studenthub_mockup_heading) : ?>
                            <h2>
                                <?php echo esc_html($studenthub_mockup_heading); ?>
                            </h2>
                        <?php endif; ?>

                        <?php if ($studenthub_mockup_description) : ?>
                            <?php echo wp_kses_post($studenthub_mockup_description); ?>
                        <?php endif; ?>

                        <?php if (have_rows('studenthub_mockup_feature_list')) : ?>

                            <ul class="feature-list">

                                <?php while (have_rows('studenthub_mockup_feature_list')) : the_row();

                                    $studenthub_mockup_feature_svg  = get_sub_field('studenthub_mockup_feature_svg');
                                    $studenthub_mockup_feature_text = get_sub_field('studenthub_mockup_feature_text');

                                ?>

                                    <li>

                                        <?php echo $studenthub_mockup_feature_svg; ?>

                                        <span>
                                            <?php echo esc_html($studenthub_mockup_feature_text); ?>
                                        </span>

                                    </li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                        <?php if ($studenthub_mockup_button) : ?>

                            <a href="<?php echo esc_url($studenthub_mockup_button['url']); ?>"
                                target="<?php echo esc_attr($studenthub_mockup_button['target']); ?>"
                                class="btn-outline">

                                <?php echo esc_html($studenthub_mockup_button['title']); ?>

                            </a>

                        <?php endif; ?>

                    </div>

                    <!-- Visual Section -->

                    <?php if ($studenthub_mockup_layout == 'single') : ?>

                        <div class="feature-visual img-social">
                            <div class="img-block"></div>
                        </div>

                    <?php else : ?>

                        <div class="feature-visual split">
                            <div class="img-workshop1">
                                <div class="img-block"></div>
                            </div>

                            <div class="img-workshop2">
                                <div class="img-block"></div>
                            </div>
                        </div>

                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</section>