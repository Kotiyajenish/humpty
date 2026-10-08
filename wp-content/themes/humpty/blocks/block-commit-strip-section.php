<section class="commit-strip">
    <div class="wrap">
        <div class="commit-grid">
            <?php if (have_rows('commit_items')) : ?>
                <?php while (have_rows('commit_items')) : the_row();
                    $commit_icon = get_sub_field('icon');
                    $commit_heading = get_sub_field('heading');
                    $commit_description = get_sub_field('description');
                ?>
                    <div class="commit-card">
                        <div class="commit-icon">
                            <?php echo $commit_icon; ?>
                        </div>
                        <div>
                            <?php if ($commit_heading) : ?>
                                <h4><?php echo esc_html($commit_heading); ?></h4>
                            <?php endif; ?>
                            <?php if ($commit_description) : ?>
                                <p><?php echo esc_html($commit_description); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>