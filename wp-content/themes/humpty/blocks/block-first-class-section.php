<section class="first-class">
    <div class="wrap">
        <div class="remember-inner">
            <?php if (get_field('first_class_eyebrow')) : ?>
                <span class="eyebrow">
                    <?php the_field('first_class_eyebrow'); ?>
                </span>
            <?php endif; ?>
            <?php if (get_field('first_class_heading')) : ?>
                <h2>
                    <?php the_field('first_class_heading'); ?>
                </h2>
            <?php endif; ?>
            <?php if (have_rows('first_class_items')) : ?>
                <ul class="remember-list">
                    <?php while (have_rows('first_class_items')) : the_row(); ?>
                        <li>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>
                                <?php echo wp_kses_post(get_sub_field('content')); ?>
                            </span>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>