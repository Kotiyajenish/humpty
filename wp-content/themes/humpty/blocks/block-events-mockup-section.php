<?php
$bottom_heading = get_field('bottom_heading');
$bottom_content = get_field('bottom_content');
?>
<section class="events-list">
    <div class="wrap">
        <?php if (have_rows('events')) : ?>
            <div class="events-grid">
                <?php while (have_rows('events')) : the_row();
                    $link = get_sub_field('event_link');
                    $link_url    = !empty($link['url']) ? $link['url'] : '#';
                    $link_title  = !empty($link['title']) ? $link['title'] : 'View Details';
                    $link_target = !empty($link['target']) ? $link['target'] : '_self';
                    $class = get_sub_field('event_class');
                ?>
                    <a href="<?php echo esc_url($link_url); ?>" class="event-card <?php echo esc_attr($class); ?>" target="<?php echo esc_attr($link_target); ?>">
                        <div class="event-card-visual">
                            <div class="event-date-chip">
                                <span class="num"><?php echo esc_html(get_sub_field('date_number')); ?></span>
                                <span class="mon"><?php echo esc_html(get_sub_field('date_month')); ?></span>
                            </div>
                            <span class="event-tag-pill"><?php echo esc_html(get_sub_field('tag')); ?></span>
                        </div>
                        <div class="event-card-body">
                            <div class="event-card-type">
                                <?php echo esc_html(get_sub_field('event_type')); ?>
                            </div>
                            <div class="event-card-title">
                                <?php echo esc_html(get_sub_field('event_title')); ?>
                            </div>
                            <div class="event-card-meta">
                                <span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                                    <?php echo esc_html(get_sub_field('event_time')); ?>
                                </span>
                                <span>
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    <?php echo esc_html(get_sub_field('event_location')); ?>
                                </span>
                            </div>
                            <span class="event-card-link"><?php echo esc_html($link_title); ?> →</span>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if ($bottom_heading || $bottom_content) : ?>
            <div class="more-note">
                <?php if ($bottom_heading) : ?><h4><?php echo esc_html($bottom_heading); ?></h4><?php endif; ?>
                <?php if ($bottom_content) : ?><?php echo wp_kses_post($bottom_content); ?><?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</section>