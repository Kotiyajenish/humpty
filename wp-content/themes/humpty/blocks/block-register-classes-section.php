<?php
$note = get_field('register_text_note');
$title = get_field('register_title');
$description = get_field('register_description');
?>
<section class="register-classes-section">
    <div class="register-classes-container">
        <?php if(!empty($note)): ?>
            <div class="register-classes-note"><?php echo esc_html($note); ?></div>
        <?php endif; ?>
        <div class="register-classes-box">
           <?php if(!empty($title)): ?>
                <h4 class="register-classes-title">
                    <?php echo esc_html($title); ?>
                </h4>
            <?php endif; ?>
            <?php if(!empty($description)): ?>
                <p class="register-classes-description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>