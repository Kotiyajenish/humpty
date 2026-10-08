<?php
$cards = get_field('jointeam_offer_cards');
?>
<section class="offer-strip">
    <div class="wrap">
        <div class="offer-grid">
            <?php if (have_rows('jointeam_offer_cards')) :
                 while (have_rows('jointeam_offer_cards')) : the_row(); ?>
                    <div class="offer-card">
                        <div class="offer-icon">
                            <?php
                            $icon = get_sub_field('jointeam_offer_icon');
                                if ( ! empty($icon) ) {
                                    echo $icon;
                                }
                            ?>
                        </div>
                        <div>
                            <?php if (get_sub_field('title')) : ?>
                                <h4><?php the_sub_field('title'); ?></h4>
                            <?php endif; ?>
                            <?php if (get_sub_field('description')) : ?>
                                <p><?php the_sub_field('description'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile;
             endif; ?>
        </div>
    </div>
</section>