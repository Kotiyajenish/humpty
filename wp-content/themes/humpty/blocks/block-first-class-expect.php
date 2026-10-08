<?php
$first_class_eyebrow_remember = get_field('first_class_eyebrow_remember');
$first_class_eyebrow_remember_title   = get_field('first_class_eyebrow_remember_title');
$first_class_remember_eyebrow_remember_list   = get_field('first_class_remember_eyebrow_remember_list');
$block_id = 'first-class-' . $block['id'];

if (!empty($block['anchor'])) {
    $block_id = $block['anchor'];
}
$class_name = 'first-class';
if (!empty($block['className'])) {
    $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $class_name .= ' align' . $block['align'];
}
?>
<section id="<?php echo esc_attr($block_id); ?>" class="<?php echo esc_attr($class_name); ?>">
    <div class="wrap">
        <div class="remember-inner">
            <?php if ($first_class_eyebrow_remember) : ?>
                <span class="eyebrow"><?php echo esc_html($first_class_eyebrow_remember); ?></span>
            <?php endif; ?>
            <?php if ($first_class_eyebrow_remember_title) : ?>
                <h2><?php echo esc_html($first_class_eyebrow_remember_title); ?></h2>
            <?php endif; ?>
            <?php if ($first_class_remember_eyebrow_remember_list) : ?>
                <ul class="remember-list">
                    <?php foreach ($first_class_remember_eyebrow_remember_list as $item) : ?>
                        <?php
                        $text = $item['remember_text'] ?? '';
                        ?>
                        <?php if ($text) : ?>
                            <li>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>
                                    <?php echo wp_kses_post($text); ?>
                                </span>
                            </li>
                        <?php endif;
                     endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>