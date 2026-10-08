<?php
$register_tag           = get_field('register_tag');
$register_title         = get_field('register_title');
$register_description   = get_field('register_description');
$card_title_main             = get_field('card_title_main');
$card_description       = get_field('card_description');
$email_placeholder      = get_field('email_placeholder');
$name_placeholder       = get_field('name_placeholder');
$location_placeholder   = get_field('location_placeholder');
$button_text            = get_field('button_text');
$button_link            = get_field('button_link');
$register_note          = get_field('register_note');
?>
<section class="register-section" id="register">
    <div class="container">
        <div class="register-header">
            <?php if (!empty($register_tag)) : ?>
                <span class="section-tag">
                    <span class="dot"></span>
                    <?php echo esc_html($register_tag); ?>
                </span>
            <?php endif; ?>
            <?php if (!empty($register_title)) : ?>
                <h2><?php echo esc_html($register_title); ?></h2>
            <?php endif; ?>
            <?php if (!empty($register_description)) : ?>
                <p><?php echo esc_html($register_description); ?></p>
            <?php endif; ?>
        </div>
        <div class="register-card">
            <?php if(!empty($card_title_main)) : ?>
                <h4><?php echo esc_html($card_title_main); ?></h4>
            <?php endif; ?>

            <?php if (!empty($card_description)) : ?>
                <p class="register-description">
                    <?php echo esc_html($card_description); ?>
                </p>
            <?php endif; ?>
            <form class="register-form">
                <input type="text" placeholder="<?php echo esc_attr($email_placeholder); ?>">
                <input type="text" placeholder="<?php echo esc_attr($name_placeholder); ?>">
                <select>
                    <option value=""><?php echo esc_html($location_placeholder); ?></option>
                    <?php if (have_rows('locations')) : ?>
                        <?php while (have_rows('locations')) : the_row();
                            $location_name = get_sub_field('location_name');
                            if ($location_name) :
                        ?>
                        <option value="<?php echo esc_attr($location_name); ?>">
                            <?php echo esc_html($location_name); ?>
                        </option>
                        <?php
                            endif;
                        endwhile;
                     endif; ?>
                </select>
                <?php
                $button_url    = '#';
                $button_target = '_self';

                if ($button_link) {
                    $button_url    = $button_link['url'];
                    $button_target = $button_link['target'] ?: '_self';
                }
                ?>
                <button type="submit" formaction="<?php echo esc_url($button_url); ?>" formtarget="<?php echo esc_attr($button_target); ?>">
                    <?php echo esc_html($button_text); ?>
                </button>
            </form>
            <?php if (!empty($register_note)) : ?>
                <p class="register-note"><?php echo esc_html($register_note); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>