<?php
$styles_description = get_field('styles_description');
?>
<section class="styles-strip">
    <div class="wrap">
        <?php if ($styles_description) : ?>
            <div class="styles-description">
                <?php echo wp_kses_post($styles_description); ?>
            </div>
        <?php endif; ?>
        <?php if (have_rows('styles_tags')) : ?>
            <div class="tags">
                <?php while (have_rows('styles_tags')) : the_row();
                    $style_name = get_sub_field('style_name');
                    if ($style_name) :
                ?>
                      <span><?php echo esc_html($style_name); ?></span>
                <?php
                    endif;
                endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>