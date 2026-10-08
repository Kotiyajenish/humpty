<?php
$badge_text         = get_field('badge_text');
$section_title      = get_field('section_title');
$section_description= get_field('section_description');
$dance_cards        = get_field('dance_cards');

if ( ! empty( $block['data']['is_preview'] ) ) : ?>
    <img class="block-preview-image" src="<?php echo esc_url( site_url( '/wp-content/uploads/2026/07/Screenshot-2026-07-07-182337.png' ) ); ?>" alt="Dance Section Preview" style="width:100%;height:auto;display:block;">
    <?php
    return;
endif;
?>
<section class="dance-section">
    <div class="container">
        <div class="section-header">
            <?php if($badge_text): ?>
                <span class="section-badge">
                    <span class="badge-dot"></span>
                    <?php echo esc_html($badge_text); ?>
                </span>
            <?php endif; ?>

            <?php if($section_title): ?>
                <h2 class="section-title">
                    <?php echo esc_html($section_title); ?>
                </h2>
            <?php endif; ?>

            <?php if($section_description): ?>
                <p class="section-description">
                    <?php echo esc_html($section_description); ?>
                </p>
            <?php endif; ?>

        </div>

        <?php if($dance_cards): ?>

            <div class="dance-grid">

                <?php foreach($dance_cards as $card): ?>

                    <div class="dance-card">

                        <?php if(!empty($card['image'])): ?>
                            <img src="<?php echo esc_url($card['image']['url']); ?>"
                                 alt="<?php echo esc_attr($card['image']['alt']); ?>">
                        <?php endif; ?>

                        <div class="dance-card-content">

                            <h3><?php echo esc_html($card['title']); ?></h3>

                            <?php if($card['button']): ?>
                                <a href="<?php echo esc_url($card['button']['url']); ?>"
                                   target="<?php echo esc_attr($card['button']['target'] ?: '_self'); ?>">
                                    <?php echo esc_html($card['button']['title']); ?>
                                </a>
                            <?php endif; ?>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>

    </div>
</section>