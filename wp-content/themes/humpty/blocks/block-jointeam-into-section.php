<?php

$eyebrow = get_field('jointeam_intro_eyebrow');
$heading = get_field('jointeam_intro_heading');
$content = get_field('jointeam_intro_content');
$button  = get_field('jointeam_intro_button');
$image   = get_field('jointeam_intro_image');

?>

<section class="intro-section">
	<div class="wrap">
		<div class="intro-inner">

			<div class="intro-copy">

				<?php if ($eyebrow) : ?>
					<span class="eyebrow"><?php echo esc_html($eyebrow); ?></span>
				<?php endif; ?>

				<?php if ($heading) : ?>
					<h2><?php echo esc_html($heading); ?></h2>
				<?php endif; ?>

				<?php if ($content) : ?>
					<?php echo wp_kses_post($content); ?>
				<?php endif; ?>

				<?php if ($button) : ?>
					<a href="<?php echo esc_url($button['url']); ?>"
						target="<?php echo esc_attr($button['target'] ?: '_self'); ?>"
						class="btn-primary">

						<?php echo esc_html($button['title']); ?>

						<svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
							<line x1="5" y1="12" x2="19" y2="12"></line>
							<polyline points="12 5 19 12 12 19"></polyline>
						</svg>

					</a>
				<?php endif; ?>

			</div>

			<div class="intro-visual">
				<div class="img-block">
					<?php if ($image) : ?>
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</section>