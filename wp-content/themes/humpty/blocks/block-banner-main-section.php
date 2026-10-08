<?php
$label          = get_field('label');
$heading        = get_field('heading');
$highlight_word = get_field('highlight_word');
$description    = get_field('description');
?>
<section class="journey-hero">
    <div class="journey-bg journey-bg-right"></div>
    <div class="journey-bg journey-bg-left"></div>
    <div class="journey-container">
        <?php if(!empty($label)): ?>
            <span class="journey-label"><span class="journey-dot"></span><?php echo esc_html($label); ?></span>
        <?php endif; ?>
        <?php if(!empty($heading)): ?>
            <h1 class="journey-title">
                <?php
                if($highlight_word){
                    echo wp_kses_post(str_replace( $highlight_word, '<em>'.$highlight_word.'</em>', $heading));
                }else{
                    echo esc_html($heading);
                }
                ?>
            </h1>
        <?php endif; ?>
        <?php if(!empty($description)): ?>
            <p class="journey-description"><?php echo esc_html($description); ?></p>
        <?php endif; ?>
        <?php if (have_rows('features')) : ?>
            <div class="journey-tags">
                <?php while (have_rows('features')) : the_row();
                    $icon = get_sub_field('feature_icon');
                    $text = get_sub_field('banner_feature_text');
                ?>
                    <div class="journey-tag">
                        <?php if (!empty($icon)) : ?>
                            <?php echo html_entity_decode($icon); ?>
                        <?php endif; ?>
                        <?php if (!empty($text)) : ?>
                            <span><?php echo esc_html($text); ?></span>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>