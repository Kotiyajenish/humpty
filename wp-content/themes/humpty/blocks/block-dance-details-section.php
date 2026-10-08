<?php
if (have_rows('dance_details')) :
?>
<section class="dance-details-section">
    <div class="dance-details-container">
        <?php
        while (have_rows('dance_details')) : the_row();
            $type        = get_sub_field('detail_type');
            $images      = get_sub_field('images');
            $label       = get_sub_field('label');
            $title       = get_sub_field('title');
            $description = get_sub_field('description');
            $points      = get_sub_field('points');
            $button      = get_sub_field('button');
            $image_class = ($images && count($images) > 1) ? 'two-images' : 'single-image';
        ?>
        <div class="dance-detail-row <?php echo esc_attr($type); ?>-detail" id="<?php echo esc_attr($type); ?>-detail">
            <?php if ($images) : ?>
                <div class="dance-detail-images <?php echo esc_attr($image_class); ?>">
                    <?php foreach ($images as $image_id) : ?>
                        <?php
                          $image_url = wp_get_attachment_image_url($image_id, 'large');
                          $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="dance-detail-content">
                <?php if ($label) : ?>
                    <span class="dance-label"><span class="dance-dot"></span>
                        <?php echo esc_html($label); ?>
                    </span>
                <?php endif; ?>
                <?php if ($title) : ?>
                    <h3><?php echo esc_html($title); ?></h3>
                <?php endif; ?>
                <?php if ($description) : ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>
                <?php if ($points) : ?>
                    <ul class="dance-points">
                        <?php foreach ($points as $point) : ?>
                            <li>
                                <svg viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span><?php echo esc_html($point['point_text']); ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?php if ($button) : ?>
                    <a href="<?php echo esc_url($button['url']); ?>" class="dance-btn" target="<?php echo esc_attr($button['target']); ?>">
                        <?php echo esc_html($button['title']); ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>