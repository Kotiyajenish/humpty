<?php
$hero_mockup_eyebrow = get_field('hero_mockup_eyebrow') ?: 'Find your path';
$hero_mockup_heading = get_field('hero_mockup_heading') ?: '<h1>Every dancer’s journey<br> looks a little <em>different.</em></h1>';
$hero_mockup_content = get_field('hero_mockup_content') ?: '<p>Start with structured progressive courses, then branch out into workshops, social practice, and our performance team — at your own pace.</p>';
?>
<header class="hero">
    <div class="wrap hero-inner">
        <span class="eyebrow">
            <?php echo esc_html($hero_mockup_eyebrow); ?>
        </span>
        <h1>
            <?php echo wp_kses_post($hero_mockup_heading); ?>
        </h1>
        <div class="sub">
            <?php echo wp_kses_post($hero_mockup_content); ?>
        </div>
        <div class="hero-pills">
            <?php if (have_rows('hero_mockup_pills')) :
                 while (have_rows('hero_mockup_pills')) : the_row();
                    $hero_mockup_pill_icon = get_sub_field('hero_mockup_pill_icon');
                    $text = get_sub_field('hero_mockup_pill_text');
                ?>
                <span class="pill">
                    <?php echo $hero_mockup_pill_icon; ?>
                    <?php echo esc_html($text); ?>
                </span>
                <?php endwhile;
             endif; ?>
        </div>
    </div>
</header>