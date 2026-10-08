<section class="cat-nav">
    <div class="wrap-wide">
        <?php if (have_rows('faq_category_items')) : ?>
            <div class="cat-nav-inner">
                <?php while (have_rows('faq_category_items')) : the_row();
                    $link = get_sub_field('nav_link');
                    if ($link) :
                ?>
                    <a href="<?php echo esc_url($link['url']); ?>" class="cat-pill" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
                        <?php echo esc_html($link['title']); ?>
                    </a>
                <?php
                    endif;
                endwhile;
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>