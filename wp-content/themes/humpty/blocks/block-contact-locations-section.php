<?php
$contact_locations_eyebrow     = get_field('contact_locations_eyebrow');
$contact_locations_title       = get_field('contact_locations_title');
$contact_locations_description = get_field('contact_locations_description');
?>
<section class="locations-section">
    <div class="wrap">
        <div class="section-head">
            <?php if ($contact_locations_eyebrow) : ?>
                <span class="eyebrow"><?php echo esc_html($contact_locations_eyebrow); ?></span>
            <?php endif; ?>
            <?php if ($contact_locations_title) : ?>
                <h2><?php echo esc_html($contact_locations_title); ?></h2>
            <?php endif; ?>
            <?php if ($contact_locations_description) : ?>
                <p><?php echo esc_html($contact_locations_description); ?></p>
            <?php endif; ?>
        </div>
        <?php if (have_rows('contact_locations_cards')) :
              $location_classes = [
                  'loc-richmondhill',
                  'loc-mississauga',
                  'loc-vaughan',
                  'loc-toronto'
              ];

            $i = 0;
        ?>
        <div class="locations-grid">
            <?php while (have_rows('contact_locations_cards')) : the_row();

                $contact_location_icon            = get_sub_field('contact_location_icon');
                $contact_location_area            = get_sub_field('contact_location_area');
                $contact_location_name            = get_sub_field('contact_location_name');
                $contact_location_address         = get_sub_field('contact_location_address');
                $contact_location_direction_link  = get_sub_field('contact_location_direction_link');
                $contact_location_button_text     = get_sub_field('contact_location_button_text');
            ?>
                <div class="location-card <?php echo esc_attr($location_classes[$i] ?? ''); ?>">
                    <div class="location-map">
                        <?php
                        if ($contact_location_icon) {
                            echo wp_get_attachment_image(
                                $contact_location_icon,
                                'full',
                                false,
                                array(
                                    'class' => 'map-pin'
                                )
                            );
                        }
                        ?>
                    </div>
                    <div class="location-body">
                        <?php if ($contact_location_area) : ?>
                            <div class="location-area">
                                <?php echo esc_html($contact_location_area); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($contact_location_name) : ?>
                            <div class="location-name">
                                <?php echo esc_html($contact_location_name); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($contact_location_address) : ?>
                            <div class="location-addr">
                                <?php echo nl2br(esc_html($contact_location_address)); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($contact_location_direction_link) : ?>
                            <a href="<?php echo esc_url($contact_location_direction_link); ?>" target="_blank" rel="noopener noreferrer" class="location-link">
                                <?php echo esc_html($contact_location_button_text ?: 'Get directions →'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php
                $i++;
            endwhile;
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>