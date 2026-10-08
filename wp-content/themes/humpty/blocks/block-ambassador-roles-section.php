<section class="roles-section">
    <div class="wrap">

        <div class="section-head">

            <?php if (get_field('roles_eyebrow')) : ?>
                <span class="eyebrow"><?php the_field('roles_eyebrow'); ?></span>
            <?php endif; ?>

            <?php if (get_field('roles_heading')) : ?>
                <h2><?php the_field('roles_heading'); ?></h2>
            <?php endif; ?>

            <?php if (get_field('roles_description')) : ?>
                <p><?php the_field('roles_description'); ?></p>
            <?php endif; ?>

        </div>

        <div class="roles-grid">

            <?php if (have_rows('role_items')) : ?>
                <?php while (have_rows('role_items')) : the_row(); ?>

                    <div class="role-card">

                        <?php if (get_sub_field('badge')) : ?>
                            <span class="role-badge"><?php the_sub_field('badge'); ?></span>
                        <?php endif; ?>

                        <?php if (get_sub_field('title')) : ?>
                            <h3><?php the_sub_field('title'); ?></h3>
                        <?php endif; ?>

                        <?php if (get_sub_field('content')) : ?>
                            <p><?php the_sub_field('content'); ?></p>
                        <?php endif; ?>

                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>

    </div>
</section>