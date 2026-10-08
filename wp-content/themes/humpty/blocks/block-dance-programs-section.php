<?php
$label       = get_field('program_label');
$heading     = get_field('program_heading');
$description = get_field('program_description');
?>

<section class="dance-programs">
    <div class="dance-programs-container">

        <div class="dance-programs-header">

            <?php if ($label) : ?>
                <span class="dance-programs-label">
                    <span class="dance-programs-dot"></span>
                    <?php echo esc_html($label); ?>
                </span>
            <?php endif; ?>

            <?php if ($heading) : ?>
                <h2 class="dance-programs-title">
                    <?php echo esc_html($heading); ?>
                </h2>
            <?php endif; ?>

            <?php if ($description) : ?>
                <p class="dance-programs-description">
                    <?php echo esc_html($description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if (have_rows('program_items')) : ?>
            <div class="dance-programs-list">

                <?php while (have_rows('program_items')) : the_row();

                    $program_name = get_sub_field('program_name');

                    if ($program_name) :
                ?>

                        <span class="dance-program-item">
                            <?php echo esc_html($program_name); ?>
                        </span>

                <?php endif;
                endwhile; ?>

            </div>
        <?php endif; ?>

    </div>
</section>