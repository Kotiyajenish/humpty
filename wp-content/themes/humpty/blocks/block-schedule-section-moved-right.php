<?php
$schedule_section_eyebrow = get_field('schedule_section_eyebrow');
$schedule_moved_right = get_field('schedule_moved_right');
$schedule_filter_location = get_field('schedule_filter_location');
$schedule_about_membership = get_field('schedule_about_membership');
$schedule_about_membership_p = get_field('schedule_about_membership_p');
$schedule_member_login = get_field('schedule_member_login');
$schedule_member_login_p = get_field('schedule_member_login_p');
$schedule_loading_text = get_field('schedule_loading_text');
$schedule_loading_text_p = get_field('schedule_loading_text_p');
?>
<section class="schedule-section">
  <div class="wrap">
    <div class="schedule-head">
      <?php if ($schedule_section_eyebrow) : ?>
            <span class="eyebrow"><?php echo esc_html($schedule_section_eyebrow); ?></span>
        <?php endif; ?>
      <h2><?php echo esc_html($schedule_moved_right); ?></h2>
      <p><?php echo esc_html($schedule_filter_location); ?></p>
    </div>
    <div class="member-callout">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
      <div class="member-callout-copy">
        <h4><?php echo esc_html($schedule_about_membership); ?></h4>
        <p><?php echo wp_kses_post($schedule_about_membership_p); ?></p>
      </div>
    </div>
    <div class="schedule-placeholder" style="margin-top:18px;">
      <h4><?php echo esc_html($schedule_member_login); ?></h4>
      <p><?php echo wp_kses_post($schedule_member_login_p); ?></p>
    </div>
    <?php
        $filters = get_field('schedule_filters_row');
        if ($filters) :
        ?>
        <div class="filters-row" style="margin-top:32px;">
            <?php foreach ($filters as $filter) : ?>
                <div class="filter-group">
                    <?php if (!empty($filter['filter_label'])) : ?>
                        <label> <?php echo esc_html($filter['filter_label']); ?> </label>
                    <?php endif; ?>
                    <select>
                        <?php if (!empty($filter['filter_options'])) :
                            foreach ($filter['filter_options'] as $option) :
                                if (!empty($option['option'])) : ?>
                                    <option value="<?php echo esc_attr($option['option']); ?>">
                                        <?php echo esc_html($option['option']); ?>
                                    </option>
                                <?php endif;
                                endforeach;
                        endif; ?>
                    </select>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <div class="schedule-placeholder">
      <h4><?php echo esc_html($schedule_loading_text); ?></h4>
      <p><?php echo wp_kses_post($schedule_loading_text_p); ?></p>
    </div>
  </div>
</section>