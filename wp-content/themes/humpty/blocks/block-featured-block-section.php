<?php
$featured_label = get_field('featured_label');
?>
<section class="featured">
    <div class="wrap">
        <div class="featured-inner">
            <?php if ($featured_label) : ?>
                <span class="featured-label">
                    <?php echo esc_html($featured_label); ?>
                </span>
            <?php endif; ?>
            <div class="featured-divider"></div>
            <?php if (have_rows('featured_logos')) : ?>
                <div class="featured-logos">
                    <?php while (have_rows('featured_logos')) : the_row();
                        $logo_name = get_sub_field('logo_name');
                        $logo_bold = get_sub_field('logo_bold');
                    ?>
                        <span class="logo-pill <?php echo $logo_bold ? 'bold' : ''; ?>"><?php echo esc_html($logo_name); ?></span>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>