<?php
$section_tag = get_field('section_tag');
$heading = get_field('heading');
$rating = get_field('rating');
$rating_text = get_field('rating_text');
$review_url = get_field('review_url');
$button_text = get_field('button_text');
?>
<section class="testimonials-section">
    <div class="container">
        <div class="section-heading">
            <?php if(!empty($section_tag)): ?>
                <span class="section-tag">
                    <span class="dot"></span>
                    <?php echo esc_html($section_tag); ?>
                </span>
            <?php endif; ?>
            <?php if(!empty($heading)): ?>
                <h2><?php echo esc_html($heading); ?></h2>
            <?php endif; ?>
            <div class="rating-box">
                <span class="rating-score"><?php echo esc_html($rating); ?></span>
                <span class="stars">★★★★★</span>
                <span class="rating-text"><?php echo esc_html($rating_text); ?></span>
            </div>
        </div>
        <div class="testimonial-grid">
            <?php if(have_rows('testimonials')): ?>
                <?php while(have_rows('testimonials')): the_row();
                    $review = get_sub_field('review');
                    $initials = get_sub_field('initials');
                    $name = get_sub_field('name');
                    $source = get_sub_field('source');
                    $avatar_color = get_sub_field('avatar_color');
                ?>
                <div class="testimonial-card">
                    <span class="stars">★★★★★</span>
                    <p><?php echo esc_html($review); ?></p>
                    <div class="author">
                        <div class="avatar <?php echo esc_attr($avatar_color); ?>">
                            <?php echo esc_html($initials); ?>
                        </div>
                        <div class="author-info">
                            <h4><?php echo esc_html($name); ?></h4>
                            <span><?php echo esc_html($source); ?></span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php if($review_url): ?>
            <div class="review-btn">
                <a href="<?php echo esc_url($review_url); ?>">
                    <?php echo esc_html($button_text); ?> →
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>