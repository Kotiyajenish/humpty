<section class="faq-section">
  <div class="wrap">
        <?php if (have_rows('faq_groups')) :
             while (have_rows('faq_groups')) : the_row();
                $group_id    = get_sub_field('group_id');
                $group_title = get_sub_field('group_title');
                $group_icon  = get_sub_field('group_icon');
            ?>
            <div class="faq-group" id="<?php echo esc_attr($group_id); ?>">
                <div class="faq-group-head">
                    <div class="faq-group-icon">
                        <?php echo $group_icon; ?>
                    </div>
                    <h2><?php echo esc_html($group_title); ?></h2>
                </div>
                <?php if (have_rows('faq_items')) :
                        while (have_rows('faq_items')) : the_row(); ?>
                        <details class="faq-item">
                            <summary>
                                <?php echo esc_html(get_sub_field('question')); ?>
                                <span class="plus">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                    </svg>
                                </span>
                            </summary>
                            <div class="faq-answer"><?php echo wp_kses_post(get_sub_field('answer')); ?></div>
                        </details>
                    <?php endwhile;
                    endif; ?>
            </div>
            <?php endwhile;
         endif; ?>
    </div>
</section>