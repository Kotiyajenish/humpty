<?php
$featured_title = get_field('featured_title');
$featured_items = get_field('featured_items');
?>
<section class="featured-section">
    <div class="container">
        <?php if ( $featured_title ) : ?>
            <span class="featured-title">
                <?php echo esc_html( $featured_title ); ?>
            </span>
        <?php endif; ?>
        <?php if ( $featured_items ) : ?>
            <?php foreach ( $featured_items as $item ) : ?>
                <span class="featured-item">
                    <?php echo esc_html( $item['name'] ); ?>
                </span>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>