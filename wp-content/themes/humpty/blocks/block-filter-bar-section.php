<?php if (have_rows('filter_items')) : ?>
<section class="filter-bar">
    <div class="wrap">
        <div class="filter-bar-inner">
            <?php while (have_rows('filter_items')) : the_row();
                $label  = get_sub_field('label');
                $active = get_sub_field('active');
            ?>
                <span class="filter-pill <?php echo $active ? 'active' : ''; ?>">
                    <?php echo esc_html($label); ?>
                </span>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>