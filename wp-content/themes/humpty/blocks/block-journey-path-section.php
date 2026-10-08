<?php
$label               = get_field('journey_label');
$heading             = get_field('journey_heading');
$description         = get_field('journey_description');
$private_label       = get_field('private_label');
$private_title       = get_field('private_title');
$private_content = get_field('private_content');
$private_link        = get_field('private_link');
?>

<section class="journey-path">

    <div class="journey-path-container">

        <div class="journey-path-header">

            <?php if ($label) : ?>
                <span class="journey-path-label">
                    <span class="journey-path-dot"></span>
                    <?php echo esc_html($label); ?>
                </span>
            <?php endif; ?>
            <?php if ($heading) : ?>
                <h2 class="journey-path-title">
                    <?php echo esc_html($heading); ?>
                </h2>
            <?php endif; ?>
            <?php if ($description) : ?>
                <p class="journey-path-description">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="journey-path-steps">
            <?php
            $steps = get_field('journey_steps');
            if ($steps) :
                $count = count($steps);
                $i = 0;
                while (have_rows('journey_steps')) : the_row();
                    $badge        = get_sub_field('step_badge');
                    $badge_color  = get_sub_field('step_badge_color');
                    $step_image        = get_sub_field('step_image');
                    $number       = get_sub_field('step_number');
                    $number_color = get_sub_field('step_number_color');
                    $title        = get_sub_field('title');
                    $desc         = get_sub_field('description');
                    $link         = get_sub_field('step_link');
                    $active       = get_sub_field('step_active');
                    // echo '<pre>';
                    // print_r($steps[0]['title']);
                    // print_r($steps);
                    // echo '</pre>';
            ?>
            <div class="journey-card <?php echo $active ? 'active' : ''; ?>">
                <?php if ($badge) : ?>
                    <span class="journey-badge <?php echo esc_attr($badge_color); ?>">
                        <?php echo esc_html($badge); ?>
                    </span>
                <?php endif; ?>
                 <?php if (!empty($steps[$i]['image']['url'])) : ?>
                    <img src="<?php echo esc_url($steps[$i]['image']['url']); ?>" alt="">
                <?php endif; ?>
                <?php if ($number) : ?>
                    <div class="journey-number <?php echo esc_attr($number_color); ?>">
                        <?php echo esc_html($number); ?>
                    </div>
                <?php endif; ?>
                <?php if ($title) : ?>
                    <h3><?php echo esc_html($title); ?></h3>
                <?php endif; ?>
                <?php if ($desc) : ?>
                    <p><?php echo esc_html($desc); ?></p>
                <?php endif; ?>
                <?php if ($link) : ?>
                    <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target']); ?>">
                        <?php echo esc_html($link['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
            <?php if ($i < $count) : ?>
                <div class="journey-arrow">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M5 12h14M13 5l7 7-7 7"></path>
                    </svg>
                </div>
            <?php endif; ?>
            <?php
                $i++;
                endwhile;
            endif;
            ?>
        </div>
        <?php if ($private_title) : ?>
            <a href="<?php echo esc_url($private_link['url']); ?>" target="<?php echo esc_attr($private_link['target']); ?>" class="private-lessons">
                <div class="private-icon">+</div>
                <div class="private-content">
                    <?php if ($private_label) : ?>
                        <span class="private-label">
                            <?php echo esc_html($private_label); ?>
                        </span>
                    <?php endif; ?>
                    <h3><?php echo esc_html($private_title); ?></h3>
                    <?php if ($private_content) : ?>
                        <p><?php echo wp_kses_post($private_content); ?></p>
                    <?php endif; ?>
                </div>
                <?php if ($private_link) : ?>
                    <span class="private-link">
                        <?php echo esc_html($private_link['title']); ?>
                    </span>
                <?php endif; ?>

            </a>

        <?php endif; ?>

    </div>

</section>