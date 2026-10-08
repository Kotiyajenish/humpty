<?php

$perks_eyebrow = get_field('perks_eyebrow');
$perks_title = get_field('perks_title');
$perks_content = get_field('perks_content');

?>

<section class="perks-section">

    <div class="wrap">

        <div class="section-head">

            <?php if ($perks_eyebrow) : ?>
                <span class="eyebrow">
                    <?php echo esc_html($perks_eyebrow); ?>
                </span>
            <?php endif; ?>

            <?php if ($perks_title) : ?>
                <h2><?php echo esc_html($perks_title); ?></h2>
            <?php endif; ?>

            <?php if ($perks_content) : ?>
                <?php echo wp_kses_post($perks_content); ?>
            <?php endif; ?>

        </div>

        <?php if (have_rows('perks_items')) : ?>

            <div class="perks-grid">

                <?php while (have_rows('perks_items')) : the_row();

                    $perk_icon = get_sub_field('perk_icon');
                    $perk_title = get_sub_field('perk_title');
                    $perk_description = get_sub_field('perk_description');

                ?>

                    <div class="perk-card">

                        <?php if ($perk_icon) : ?>
                            <div class="perk-icon">
                                <?php echo $perk_icon; ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($perk_title) : ?>
                            <h3><?php echo esc_html($perk_title); ?></h3>
                        <?php endif; ?>

                        <?php if ($perk_description) : ?>
                            <p><?php echo esc_html($perk_description); ?></p>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>

            </div>

        <?php endif; ?>

    </div>

</section>