<section class="schedule-section">
    <div class="wrap">
        <div class="schedule-head">
            <?php if(get_field('schedule_eyebrow')) : ?>
                <span class="eyebrow"><?php the_field('schedule_eyebrow'); ?></span>
            <?php endif; ?>
            <?php if(get_field('schedule_heading')) : ?>
                <h2><?php the_field('schedule_heading'); ?></h2>
            <?php endif; ?>
            <?php if(get_field('schedule_description')) : ?>
                <p><?php the_field('schedule_description'); ?></p>
            <?php endif; ?>
        </div>
        <div class="member-callout">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <line x1="12" y1="16" x2="12" y2="12"></line>
                <line x1="12" y1="8" x2="12.01" y2="8"></line>
            </svg>
            <div class="member-callout-copy">
                <?php if(get_field('member_callout_title')) : ?>
                    <h4><?php the_field('member_callout_title'); ?></h4>
                <?php endif; ?>
                <?php echo wp_kses_post(get_field('member_callout_description')); ?>
            </div>
        </div>
        <div class="schedule-placeholder" style="margin-top:18px;">
            <?php if(get_field('member_login_title')) : ?>
                <h4><?php the_field('member_login_title'); ?></h4>
            <?php endif; ?>
            <?php if(get_field('member_login_description')) : ?>
                <p><?php the_field('member_login_description'); ?></p>
            <?php endif; ?>
        </div>
        <?php if(have_rows('schedule_filters')) : ?>
            <div class="filters-row" style="margin-top:32px;">
                <?php while(have_rows('schedule_filters')) : the_row(); ?>
                    <div class="filter-group">
                        <label><?php the_sub_field('filter_label'); ?></label>
                        <select>
                            <?php if(have_rows('filter_options')) : ?>
                                <?php while(have_rows('filter_options')) : the_row(); ?>
                                    <option><?php the_sub_field('option_text'); ?></option>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </select>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="schedule-placeholder">
            <?php if(get_field('schedule_widget_title')) : ?>
                <h4><?php the_field('schedule_widget_title'); ?></h4>
            <?php endif; ?>
            <?php if(get_field('schedule_widget_description')) : ?>
                <p><?php the_field('schedule_widget_description'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>