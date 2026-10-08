<?php
$level_heading = get_field('level_heading');
$levels = get_field('levels');
?>
<?php if ( $level_heading || $levels ) : ?>
<div class="level-system">
    <?php if ( $level_heading ) : ?>
        <h4 class="level-heading"><?php echo esc_html( $level_heading ); ?></h4>
    <?php endif; ?>
    <?php if ( $levels ) : ?>
        <div class="level-list">
            <?php
            $total = count( $levels );
            $index = 1;
            foreach ( $levels as $level ) :
                $small_text = $level['small_text'];
                $number     = $level['number'];
                $label      = $level['label'];
                $active     = $level['active'];
            ?>
                <div class="level-item <?php echo $active ? 'active' : ''; ?>">
                    <div class="level-circle">
                        <?php if ( $small_text ) : ?>
                            <span class="level-small">
                                <?php echo esc_html( $small_text ); ?>
                            </span>
                        <?php endif; ?>
                        <?php if ( $number ) : ?>
                            <span><?php echo esc_html( $number ); ?></span>
                        <?php endif; ?>
                    </div>
                    <?php if ( $label ) : ?>
                        <span class="level-text"><?php echo esc_html( $label ); ?></span>
                    <?php endif; ?>
                </div>
                <?php if ( $index < $total ) : ?>
                    <div class="level-arrow"></div>
                <?php endif; ?>
            <?php
                $index++;
            endforeach;
            ?>
        </div>
    <?php endif; ?>
</div>
<?php endif; ?>