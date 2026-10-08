<?php
$stats = get_field('stats');
?>

<?php if ( $stats ) : ?>
<section class="stats-section">
    <div class="container">
        <?php foreach ( $stats as $index => $stat ) : ?>
            <div class="stat-item">
                <div class="stat-content">
                    <span class="stat-number">
                        <?php echo esc_html( $stat['number'] ); ?>
                    </span>
                    <span class="stat-label">
                        <?php echo esc_html( $stat['label'] ); ?>
                    </span>
                </div>
            </div>
            <?php if ( $index < count( $stats ) - 1 ) : ?>
                <div class="stat-divider"></div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>