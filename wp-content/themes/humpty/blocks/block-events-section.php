<?php
$section_tag = get_field('section_tag');
$heading = get_field('heading');
$button = get_field('button_link');
$footer_button = get_field('footer_button_link');
?>
<section class="events-section">
    <div class="container">
        <div class="events-header">
            <div class="events-heading">
                <?php if($section_tag): ?>
                    <span class="section-tag">
                        <span class="dot"></span>
                        <?php echo esc_html($section_tag); ?>
                    </span>
                <?php endif; ?>
                <?php if($heading): ?>
                    <h2><?php echo esc_html($heading); ?></h2>
                <?php endif; ?>
            </div>
            <?php if($button): ?>
                <a href="<?php echo esc_url($button['url']); ?>" class="events-link" target="<?php echo esc_attr($button['target']); ?>">
                    <?php echo esc_html($button['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="events-list">
            <?php if(have_rows('events')): ?>
                <?php while(have_rows('events')): the_row(); ?>
                    <div class="event-item">
                        <div class="event-date">
                            <span class="month"><?php the_sub_field('month'); ?></span>
                            <span class="day"><?php the_sub_field('day'); ?></span>
                        </div>
                        <div class="event-content">
                            <span class="event-category"><?php the_sub_field('category'); ?></span>
                            <h3><?php the_sub_field('event_title'); ?></h3>
                            <p><?php the_sub_field('event_details'); ?></p>
                        </div>
                        <span class="event-arrow">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <p class="events-footer">
            <?php the_field('footer_text'); ?>
            <?php if($footer_button): ?>
                <a href="<?php echo esc_url($footer_button['url']); ?>" target="<?php echo esc_attr($footer_button['target']); ?>">
                    <?php echo esc_html($footer_button['title']); ?>
                </a>
            <?php endif; ?>
        </p>
    </div>
</section>