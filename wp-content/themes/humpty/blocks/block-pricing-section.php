<?php
$section_tag         = get_field('section_tag');
$pricing_title       = get_field('pricing_title');
$pricing_description = get_field('pricing_description');
$pricing_note        = get_field('pricing_note');
?>
<section class="pricing-section" id="pricing-addons">
    <div class="container">
        <div class="pricing-header">
            <?php if ($section_tag) : ?>
                <span class="section-tag">
                    <span class="dot"></span>
                    <?php echo esc_html($section_tag); ?>
                </span>
            <?php endif; ?>

            <?php if ($pricing_title) : ?>
                <h2>
                    <?php echo esc_html($pricing_title); ?>
                </h2>
            <?php endif; ?>


            <?php if ($pricing_description) : ?>
                <p>
                    <?php echo esc_html($pricing_description); ?>
                </p>
            <?php endif; ?>


            <?php if ($pricing_note) : ?>
                <strong>
                    <?php echo esc_html($pricing_note); ?>
                </strong>
            <?php endif; ?>

        </div>


        <div class="pricing-grid">

            <?php if (have_rows('pricing_cards')) : ?>

                <?php while (have_rows('pricing_cards')) : the_row(); 

                    $title      = get_sub_field('title');
                    $price      = get_sub_field('price');
                    $price_text = get_sub_field('price_text');
                    $duration   = get_sub_field('duration');
                    $badge      = get_sub_field('badge');

                ?>

                <div class="pricing-card <?php echo $badge ? 'featured' : ''; ?>">

                    <?php if ($title) : ?>
                        <h3>
                            <?php echo esc_html($title); ?>
                        </h3>
                    <?php endif; ?>


                    <div class="price">

                        <?php if ($price) : ?>
                            <span>
                                <?php echo esc_html($price); ?>
                            </span>
                        <?php endif; ?>


                        <?php if ($price_text) : ?>
                            <small>
                                <?php echo esc_html($price_text); ?>
                            </small>
                        <?php endif; ?>

                    </div>

                    <div class="course-duration">
                    <?php if ($duration) : ?>
                        <div class="duration">
                            <?php echo esc_html($duration); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($badge) : ?>
                        <span class="badge">
                            <?php echo esc_html($badge); ?>
                        </span>
                    <?php endif; ?>
                    </div>


                    <?php if (have_rows('features')) : ?>

                        <ul>

                            <?php while (have_rows('features')) : the_row(); ?>

                                <li>
                                    <?php echo esc_html(get_sub_field('feature')); ?>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>


                    <a href="#register" class="pricing-btn">
                        Register
                    </a>


                </div>


                <?php endwhile; ?>

            <?php endif; ?>


        </div>


        <?php if (have_rows('addons')) : ?>

        <div class="addons">

            <?php while (have_rows('addons')) : the_row(); 

                $addon_title = get_sub_field('title');
                $addon_desc  = get_sub_field('description');
                $addon_price = get_sub_field('price');

            ?>

            <div class="addon-card">

                <div>

                    <?php if ($addon_title) : ?>
                        <h4>
                            <?php echo esc_html($addon_title); ?>
                        </h4>
                    <?php endif; ?>


                    <?php if ($addon_desc) : ?>
                        <p>
                            <?php echo esc_html($addon_desc); ?>
                        </p>
                    <?php endif; ?>

                </div>


                <?php if ($addon_price) : ?>
                    <strong>
                        <?php echo esc_html($addon_price); ?>
                    </strong>
                <?php endif; ?>


            </div>


            <?php endwhile; ?>

        </div>

        <?php endif; ?>


    </div>

</section>