<?php
$gift_tag         = get_field('gift_tag');
$gift_heading     = get_field('gift_heading');
$gift_description = get_field('gift_description');
$gift_button      = get_field('gift_button');
?>

<section class="gift-card-section">
    <div class="container">
        <div class="gift-card-wrapper">

            <div class="gift-card-content">

                <?php if ($gift_tag) : ?>
                    <span class="gift-card-tag">
                        <?php echo esc_html($gift_tag); ?>
                    </span>
                <?php endif; ?>

                <?php if ($gift_heading) : ?>
                    <h2>
                        <?php echo esc_html($gift_heading); ?>
                    </h2>
                <?php endif; ?>

                <?php if ($gift_description) : ?>
                    <p>
                        <?php echo esc_html($gift_description); ?>
                    </p>
                <?php endif; ?>

            </div>

            <?php if ($gift_button) : ?>
                <a href="<?php echo esc_url($gift_button['url']); ?>"
                   target="<?php echo esc_attr($gift_button['target']); ?>"
                   class="gift-card-btn">
                    <?php echo esc_html($gift_button['title']); ?>
                </a>
            <?php endif; ?>

        </div>
    </div>
</section>