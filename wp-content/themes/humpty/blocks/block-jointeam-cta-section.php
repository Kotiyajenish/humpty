<?php
$jointeam_cta_heading = get_field('jointeam_cta_heading');
$jointeam_cta_content = get_field('jointeam_cta_content');
$jointeam_cta_button  = get_field('jointeam_cta_button');

// Default Values
$jointeam_cta_heading = !empty($jointeam_cta_heading) ? $jointeam_cta_heading : 'Ready to apply?';
$jointeam_cta_content = !empty($jointeam_cta_content) ? $jointeam_cta_content : 'Thank you in advance for your interest in joining our team and spreading the love of Latin dance!';

if (empty($jointeam_cta_button)) {
    $jointeam_cta_button = array(
        'title'  => 'Apply Now',
        'url'    => 'https://forms.gle/i9528LH3YSxjS9Y66',
        'target' => '_blank',
    );
}
?>
<section class="cta-banner">
    <div class="wrap">
        <div class="cta-inner">
            <div class="cta-copy">
                <h2><?php echo esc_html($jointeam_cta_heading); ?></h2>
                <p><?php echo esc_html($jointeam_cta_content); ?></p>
            </div>
            <div class="cta-actions">
                <a href="<?php echo esc_url($jointeam_cta_button['url']); ?>" target="<?php echo esc_attr($jointeam_cta_button['target']); ?>"
                    class="btn-white">
                    <?php echo esc_html($jointeam_cta_button['title']); ?>
                </a>
            </div>
        </div>
    </div>
</section>