<section class="pill-row">
    <div class="wrap">
        <?php if (have_rows('event_pills')) : ?>
            <div class="pill-grid">
                <?php while (have_rows('event_pills')) : the_row();
                    $pill_text = get_sub_field('pill_text');
                    if ($pill_text) :
                ?>
                    <span class="event-pill"><?php echo esc_html($pill_text); ?></span>
                <?php
                    endif;
                endwhile;
                ?>
            </div>
        <?php endif; ?>
    </div>
</section>