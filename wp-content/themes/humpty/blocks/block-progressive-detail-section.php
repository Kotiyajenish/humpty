<?php
$progressive_detail_label = get_field('progressive_detail_label') ?: 'Progressive Detail';
$progressive_detail_title = get_field('progressive_detail_title') ?: 'Our Progressive Journey';
$progressive_detail_description = get_field('progressive_detail_description') ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
?>
<section id="progressive-detail" class="progressive-detail">
    <div class="progressive-detail-container">
        <div class="progressive-detail-header">
            <span class="progressive-detail-label">
                <span class="progressive-detail-dot"></span>
                <?php echo esc_html($progressive_detail_label); ?>
            </span>
            <h2 class="progressive-detail-title">
                <?php echo esc_html($progressive_detail_title); ?>
            </h2>
            <p class="progressive-detail-description">
                <?php echo esc_html($progressive_detail_description); ?>
            </p>
        </div>
        <div class="progressive-detail-cards">
            <?php if (have_rows('progressive_detail_cards')) : ?>
                <?php while (have_rows('progressive_detail_cards')) : the_row();
                    $image    = get_sub_field('card_image');
                    $number   = get_sub_field('card_number') ?: '01';
                    $title    = get_sub_field('card_title') ?: 'Card Title';
                    $subtitle = get_sub_field('card_subtitle') ?: 'Card Subtitle';
                    $color    = get_sub_field('card_color') ?: 'orange';
                ?>
                    <div class="progressive-detail-card">
                        <?php if ($image) : ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="progressive-detail-image">
                        <?php endif; ?>
                        <div class="progressive-detail-heading">
                            <div class="progressive-detail-number progressive-detail-number-<?php echo esc_attr($color); ?>">
                                <span><?php echo esc_html($number); ?></span>
                            </div>
                            <h3 class="progressive-detail-card-title">
                                <span><?php echo esc_html($title); ?></span>
                                <?php if ($subtitle) : ?>
                                    <small class="progressive-detail-card-subtitle">
                                        <span><?php echo esc_html($subtitle); ?></span>
                                    </small>
                                <?php endif; ?>
                            </h3>
                        </div>
                        <?php if (have_rows('card_features')) : ?>
                            <ul class="progressive-detail-list">
                                <?php while (have_rows('card_features')) : the_row();
                                    $feature = get_sub_field('feature_text') ?: 'Feature description';
                                ?>
                                    <li class="progressive-detail-list-item">
                                        <svg class="progressive-detail-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                        <span><?php echo esc_html($feature); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="progressive-detail-card">
                    <div class="progressive-detail-heading">
                        <div class="progressive-detail-number progressive-detail-number-orange"><span>01</span></div>
                        <h3 class="progressive-detail-card-title">
                            <span>Card Title</span>
                            <small class="progressive-detail-card-subtitle"><span>Card Subtitle</span></small>
                        </h3>
                    </div>
                    <ul class="progressive-detail-list">
                        <li class="progressive-detail-list-item">
                            <svg class="progressive-detail-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Feature description</span>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>