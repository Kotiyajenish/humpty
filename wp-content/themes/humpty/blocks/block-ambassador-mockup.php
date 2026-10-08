<?php
$ambassador_intro_section_mockup = get_field('ambassador_intro_section_mockup');
$ambassador_intro_h2 = get_field('ambassador_intro_h2');
$ambassador_intro_content = get_field('ambassador_intro_content');
$ambassador_intro_apply_now = get_field('ambassador_intro_apply_now');

$ambassador_roles_section_text = get_field('ambassador_roles_section_text');
$ambassador_roles_section_h2 = get_field('ambassador_roles_section_h2');
$ambassador_roles_section_p = get_field('ambassador_roles_section_p');

$ambassador_perks_section = get_field('ambassador_perks_section');
$ambassador_perks_section_h2 = get_field('ambassador_perks_section_h2');
$ambassador_perks_section_p = get_field('ambassador_perks_section_p');

$cta_banner_title = get_field('cta_banner_title');
$cta_banner_content = get_field('cta_banner_content');
$ambassador_perks_cta_button = get_field('ambassador_perks_cta_button');

$ambassador_more_note = get_field('ambassador_more_note');
$ambassador_more_note_p = get_field('ambassador_more_note_p');

?>
<section class="intro-section">
  <div class="wrap">
    <div class="intro-inner">
      <div class="intro-copy">
        <span class="eyebrow"><?php echo esc_html($ambassador_intro_section_mockup); ?></span>
        <h2><?php echo esc_html($ambassador_intro_h2); ?></h2>
        <?php echo $ambassador_intro_content; ?>
        <a href="<?php echo esc_url($ambassador_intro_apply_now['url']); ?>" target="_blank" class="btn-primary">
          <?php echo esc_html($ambassador_intro_apply_now['title']); ?>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </div>
      <div class="intro-visual">
        <div class="img-block"></div>
      </div>
    </div>
  </div>
</section>
<!-- COMMITMENT STRIP -->
<?php
  $commit_cards = get_field('commit_cards');
  if ($commit_cards) : ?>
  <section class="commit-strip">
      <div class="wrap">
        <div class="commit-grid">
          <?php foreach ($commit_cards as $card) : ?>
            <div class="commit-card">
              <?php if (!empty($card['icon'])) : ?>
                <div class="commit-icon">
                  <?php echo $card['icon']; ?>
                </div>
              <?php endif; ?>
              <div>
              <?php if (!empty($card['title'])) : ?>
                <h4><?php echo esc_html($card['title']); ?></h4>
              <?php endif; ?>
              <?php if (!empty($card['description'])) : ?>
                <p><?php echo esc_html($card['description']); ?></p>
              <?php endif; ?>
              </div>
            </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- ROLES -->
<section class="roles-section">
  <div class="wrap">
    <div class="section-head">
        <span class="eyebrow"><?php echo esc_html($ambassador_roles_section_text); ?></span>
        <h2><?php echo esc_html($ambassador_roles_section_h2); ?></h2>
        <p><?php echo $ambassador_roles_section_p; ?></p>
    </div>
    <?php
      $ambassador_roles = get_field('roles_section_ambassador');
      if ($ambassador_roles) : ?>
          <div class="roles-grid">
              <?php foreach ($ambassador_roles as $role) : ?>
                  <div class="role-card">
                      <?php if (!empty($role['roles_section_ambassador_badge'])) : ?>
                          <span class="role-badge">
                              <?php echo esc_html($role['roles_section_ambassador_badge']); ?>
                          </span>
                      <?php endif; ?>
                      <?php if (!empty($role['roles_section_ambassador_title'])) : ?>
                          <h3>
                              <?php echo esc_html($role['roles_section_ambassador_title']); ?>
                          </h3>
                      <?php endif; ?>
                      <?php if (!empty($role['roles_section_ambassador_description'])) : ?>
                          <p>
                              <?php echo esc_html($role['roles_section_ambassador_description']); ?>
                          </p>
                      <?php endif; ?>
                  </div>
              <?php endforeach; ?>
          </div>
      <?php endif; ?>
  </div>
</section>
<!-- PERKS -->
<section class="perks-section">
  <div class="wrap">
    <div class="section-head">
        <span class="eyebrow"><?php echo esc_html($ambassador_perks_section); ?></span>
        <h2><?php echo esc_html($ambassador_perks_section_h2); ?></h2>
        <p><?php echo $ambassador_perks_section_p; ?></p>
    </div>
    <?php
      $perks_grid = get_field('perks_grid');
      if ($perks_grid) : ?>
          <div class="perks-grid">
              <?php foreach ($perks_grid as $perk) : ?>
                  <div class="perk-card">
                      <?php if (!empty($perk['icon'])) : ?>
                          <div class="perk-icon"><?php echo $perk['icon']; ?></div>
                      <?php endif; ?>
                      <?php if (!empty($perk['perks_grid_section_h3'])) : ?>
                          <h3><?php echo esc_html($perk['perks_grid_section_h3']); ?></h3>
                      <?php endif; ?>
                      <?php if (!empty($perk['perks_grid_section_p'])) : ?>
                          <p><?php echo esc_html($perk['perks_grid_section_p']); ?></p>
                      <?php endif; ?>
                  </div>
              <?php endforeach; ?>
          </div>
      <?php endif; ?>
  </div>
</section>
<!-- CTA -->
<section class="cta-banner">
  <div class="wrap">
    <div class="cta-inner">
      <div class="cta-copy">
        <h2><?php echo esc_html($cta_banner_title); ?></h2>
        <p><?php echo esc_html($cta_banner_content); ?></p>
      </div>
      <div class="cta-actions">
        <a href="<?php echo $ambassador_perks_cta_button['url'];?>" target="_blank" class="btn-white">
          <?php echo $ambassador_perks_cta_button['title'];?>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- FILTER BAR -->
<?php
$ambassador_filter_bar = get_field('ambassador_filter_bar');
if ($ambassador_filter_bar) : ?>
    <section class="filter-bar">
        <div class="wrap">
            <div class="filter-bar-inner">
                <?php foreach ($ambassador_filter_bar as $index => $filter) :
                    if (!empty($filter['ambassador_filter_label'])) : ?>
                        <span class="filter-pill <?php echo ($index === 0) ? 'active' : ''; ?>">
                            <?php echo esc_html($filter['ambassador_filter_label']); ?>
                        </span>
                    <?php endif;
                endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<!-- EVENTS LIST -->
<section class="events-list">
  <div class="wrap">
    <?php
      $ambassador_events_grid = get_field('ambassador_events_grid');
      if ($ambassador_events_grid) : ?>
          <div class="events-grid">
              <?php foreach ($ambassador_events_grid as $event) : ?>
                  <a href="<?php echo !empty($event['ambassador_event_link']) ? esc_url($event['ambassador_event_link']) : '#'; ?>"
                      class="event-card <?php echo !empty($event['ambassador_events_grid_class']) ? esc_attr($event['ambassador_events_grid_class']) : ''; ?>"
                  >
                      <div class="event-card-visual">
                          <div class="event-date-chip">
                              <?php if (!empty($event['ambassador_events_grid_date'])) : ?>
                                  <span class="num">
                                      <?php echo esc_html($event['ambassador_events_grid_date']); ?>
                                  </span>
                              <?php endif; ?>
                              <?php if (!empty($event['ambassador_events_grid_month'])) : ?>
                                  <span class="mon">
                                      <?php echo esc_html($event['ambassador_events_grid_month']); ?>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <?php if (!empty($event['ambassador_events_grid_tag'])) : ?>
                              <span class="event-tag-pill">
                                  <?php echo esc_html($event['ambassador_events_grid_tag']); ?>
                              </span>
                          <?php endif; ?>
                      </div>
                      <div class="event-card-body">
                          <?php if (!empty($event['ambassador_events_grid_type'])) : ?>
                              <div class="event-card-type">
                                  <?php echo esc_html($event['ambassador_events_grid_type']); ?>
                              </div>
                          <?php endif; ?>
                          <?php if (!empty($event['ambassador_events_grid_title'])) : ?>
                              <div class="event-card-title">
                                  <?php echo esc_html($event['ambassador_events_grid_title']); ?>
                              </div>
                          <?php endif; ?>
                          <div class="event-card-meta">
                              <?php if (!empty($event['ambassador_events_grid_time'])) : ?>
                                  <span>
                                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <circle cx="12" cy="12" r="10"/>
                                          <path d="M12 6v6l4 2"/>
                                      </svg>
                                      <?php echo esc_html($event['ambassador_events_grid_time']); ?>
                                  </span>
                              <?php endif; ?>
                              <?php if (!empty($event['ambassador_events_grid_event_location'])) : ?>
                                  <span>
                                      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                          <circle cx="12" cy="10" r="3"/>
                                      </svg>
                                      <?php echo esc_html($event['ambassador_events_grid_event_location']); ?>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <span class="event-card-link">View details →</span>
                      </div>
                  </a>
              <?php endforeach; ?>
          </div>
      <?php endif; ?>
    <div class="more-note">
      <?php if(!empty($ambassador_more_note)): ?>
            <h4><?php echo esc_html($ambassador_more_note); ?></h4>
      <?php endif; ?>
      <?php if(!empty($ambassador_more_note_p)): ?>
        <p><?php echo esc_html($ambassador_more_note_p); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>