<?php
$section_tag         = get_field('section_tag');
$heading             = get_field('heading');
$description         = get_field('description');
$private_label       = get_field('private_label');
$private_title       = get_field('private_title');
$private_description = get_field('private_description');
$private_link        = get_field('private_link');
$private_link_text   = get_field('private_link_text');
?>
<section class="how-it-works">
    <div class="container">
        <div class="section-heading">
            <?php if($section_tag): ?>
                <span class="section-tag">
                    <span class="dot"></span>
                    <?php echo esc_html($section_tag); ?>
                </span>
            <?php endif; ?>
            <?php if($heading): ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>

            <?php if($description): ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
        <div class="steps-grid">
            <?php if ( have_rows('steps') ) : ?>
                <?php while ( have_rows('steps') ) : the_row();

                    $image       = get_sub_field('image');
                    $number      = get_sub_field('step_number');
                    $title       = get_sub_field('title');
                    $desc        = get_sub_field('description');
                    $color_class = get_sub_field('color');
                ?>
                    <div class="step-card">
                        <?php if ( $image ) : ?>
                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                        <?php endif; ?>
                        <div class="step-title">
                            <div class="step-number <?php echo esc_attr( $color_class ); ?>">
                                <?php echo esc_html( $number ); ?>
                            </div>
                            <h3><?php echo esc_html( $title ); ?></h3>
                        </div>
                        <p><?php echo esc_html( $desc ); ?></p>
                        <?php if ( have_rows('tags') ) : ?>
                            <div class="tags">
                                <?php while ( have_rows('tags') ) : the_row(); ?>
                                    <span><?php echo esc_html( get_sub_field('tag') ); ?></span>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if (have_rows('program_tags')) : ?>
            <div class="program-tags">
                <?php while (have_rows('program_tags')) : the_row(); ?>
                    <span class="program-tag">
                        <?php the_sub_field('tag'); ?>
                    </span>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <?php if(have_rows('levels')) : ?>
            <div class="level-system">
                <h4><?php the_field('level_heading'); ?></h4>
                <div class="level-list">
                    <?php while(have_rows('levels')) : the_row();
                        $circle = get_sub_field('circle_text');
                        $label  = get_sub_field('label');
                    ?>
                    <div class="level-item">
                        <div class="level-circle">
                            <?php echo esc_html($circle); ?>
                        </div>
                        <span><?php echo esc_html($label); ?></span>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="private-box">
            <div class="private-content">
                <span><?php echo esc_html($private_label); ?></span>
                <h3><?php echo esc_html($private_title); ?></h3>
                <p><?php echo esc_html($private_description); ?></p>
            </div>
            <?php if($private_link): ?>
                <a href="<?php echo esc_url($private_link); ?>">
                    <?php echo esc_html($private_link_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>