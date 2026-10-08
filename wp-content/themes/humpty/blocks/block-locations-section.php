<?php
$section_tag         = get_field('section_tag');
$section_title       = get_field('section_title');
$section_description = get_field('section_description');

$view_all_link = get_field('view_all_link');
$location_cards = get_field('location_cards');
?>

<section class="locations-section">

    <div class="container">

        <div class="locations-header">

            <div class="locations-heading">

                <?php if ($section_tag) : ?>
                    <span class="section-tag">
                        <span class="dot"></span>
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if ($section_title) : ?>
                    <h2><?php echo esc_html($section_title); ?></h2>
                <?php endif; ?>

            </div>

            <?php if ($view_all_link) : ?>
                <a href="<?php echo esc_url($view_all_link['url']); ?>"
                   target="<?php echo esc_attr($view_all_link['target'] ?: '_self'); ?>"
                   class="locations-link">
                    <?php echo esc_html($view_all_link['title']); ?>
                </a>
            <?php endif; ?>

        </div>

        <?php if ($section_description) : ?>
            <p class="locations-description">
                <?php echo esc_html($section_description); ?>
            </p>
        <?php endif; ?>

        <?php if ($location_cards) : ?>

            <div class="locations-grid">

                <?php foreach ($location_cards as $card) : ?>

                    <div class="location-card">

                        <?php if (!empty($card['location_icon'])) : ?>

                            <img src="<?php echo esc_url($card['location_icon']['url']); ?>"
                                 alt="<?php echo esc_attr($card['location_icon']['alt']); ?>">

                        <?php else : ?>

                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 12-9 12S3 17 3 10a9 9 0 0118 0"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>

                        <?php endif; ?>

                        <h3>
                            <?php echo esc_html($card['location_name']); ?>
                        </h3>

                        <p>
                            <?php echo esc_html($card['location_description']); ?>
                        </p>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>

</section>