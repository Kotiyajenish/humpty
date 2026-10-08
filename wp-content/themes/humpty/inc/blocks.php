<?php
add_action( 'acf/init', function () {
    if ( ! function_exists( 'acf_register_block_type' ) ) {
        return;
    }

	// Hero section code
    acf_register_block_type( array(
        'name'            => 'my-hero',
        'title'           => 'My Hero',
        'category'        => 'formatting',
        'icon'            => 'cover-image',
        'mode'            => 'edit',
		'render_template' => get_template_directory() . '/blocks/block-my-hero.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-hero-css', get_stylesheet_directory_uri() . '/assets/css/block-hero-section.css', array(), null);
        }
    ) );

	// Stats-section code
	acf_register_block_type( array(
        'name'            => 'block-stats-section',
        'title'           => 'Stats Section',
        'category'        => 'formatting',
        'icon'            => 'format-gallery',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-stats-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-stats-css', get_stylesheet_directory_uri() . '/assets/css/block-stats.css', array(), null);
        }
    ) );

	// Banner section
	acf_register_block_type( array(
        'name'            => 'block-banner-section',
        'title'           => 'Banner Section',
        'category'        => 'formatting',
        'icon'            => 'star-filled',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-banner-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-banner-css', get_stylesheet_directory_uri() . '/assets/css/block-banner-section.css', array(), null);
        }
    ) );

	// Featured section
	acf_register_block_type( array(
        'name'            => 'block-featured-section',
        'title'           => 'Featured Section',
        'category'        => 'formatting',
        'icon'            => 'heart',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-featured-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-featured-css', get_stylesheet_directory_uri() . '/assets/css/block-featured-section.css', array(), null);
        }
    ) );

	// Dance section
	acf_register_block_type( array(
		'name'            => 'block-dance-section',
		'title'           => 'Dance Section',
		'category'        => 'formatting',
		'icon'            => 'groups',
		'mode'            => 'edit',
		'render_template' => get_template_directory() . '/blocks/block-dance-section.php',

		'enqueue_assets'  => function() {
			wp_enqueue_style(
				'blackcap-block-dance-css',
				get_stylesheet_directory_uri() . '/assets/css/block-dance-section.css',
				array(),
				filemtime( get_stylesheet_directory() . '/assets/css/block-dance-section.css' )
			);
		},
		'example' => array(
			'attributes' => array(
				'mode' => 'preview',
				'data' => array(
					'is_preview' => true,
				),
			),
		),
	) );

    // testimonials section
    acf_register_block_type( array(
        'name'            => 'testimonials-section',
        'title'           => 'Testimonials Section',
        'category'        => 'formatting',
        'icon'            => 'welcome-learn-more',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-testimonials-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-testimonials-css', get_stylesheet_directory_uri() . '/assets/css/block-testimonials-section.css');
        }
    ));

    // How to Works Section Block
    acf_register_block_type( array(
        'name'            => 'how-to-works-section',
        'title'           => 'How to Works Section',
        'category'        => 'formatting',
        'icon'            => 'admin-users',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-how-to-works.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-how-to-works-css', get_stylesheet_directory_uri() . '/assets/css/block-how-to-work.css');
        }
    ));

    // level-system block
    acf_register_block_type( array(
        'name'            => 'level-system',
        'title'           => 'Level System',
        'category'        => 'formatting',
        'icon'            => 'universal-access',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-level-system.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-level-system-css', get_stylesheet_directory_uri() . '/assets/css/block-level-system.css');
        }
    ));

    // Private Lessons block
    acf_register_block_type( array(
        'name'            => 'private-leasons',
        'title'           => 'Private leasons',
        'category'        => 'formatting',
        'icon'            => 'smiley',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-private-leason.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-private-lessons-css', get_stylesheet_directory_uri() . '/assets/css/block-private-leason.css');
        }
    ));

    // Pricing Section block
    acf_register_block_type( array(
        'name'            => 'pricing-section',
        'title'           => 'Pricing Section',
        'category'        => 'formatting',
        'icon'            => 'buddicons-buddypress-logo',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-pricing-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-pricing-section-css', get_stylesheet_directory_uri() . '/assets/css/block-pricing-section.css');
        }
    ));

    // register block
    acf_register_block_type( array(
        'name'            => 'register-section',
        'title'           => 'Register Section',
        'category'        => 'formatting',
        'icon'            => 'art',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-register-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-register-section-css', get_stylesheet_directory_uri() . '/assets/css/block-register-section.css');
        }
    ));

    // Locations block
    acf_register_block_type( array(
        'name'            => 'locations-section',
        'title'           => 'Locations Section',
        'category'        => 'formatting',
        'icon'            => 'awards',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-locations-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-locations-section-css', get_stylesheet_directory_uri() . '/assets/css/block-locations-section.css');
        }
    ));

    // Event block
    acf_register_block_type( array(
        'name'            => 'event-section',
        'title'           => 'Event Section',
        'category'        => 'formatting',
        'icon'            => 'camera',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-events-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-events-section-css', get_stylesheet_directory_uri() . '/assets/css/block-events-section.css');
        }
    ));

    // Gift block
    acf_register_block_type( array(
        'name'            => 'gift-section',
        'title'           => 'Gift Section',
        'category'        => 'formatting',
        'icon'            => 'performance',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-gift-card-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-gift-card-section-css', get_stylesheet_directory_uri() . '/assets/css/block-gift-card-section.css');
        }
    ));

    // Main section block
    acf_register_block_type( array(
        'name'            => 'banner-main-section',
        'title'           => 'Banner Main Section',
        'category'        => 'formatting',
        'icon'            => 'palmtree',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-banner-main-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-banner-main-section-css', get_stylesheet_directory_uri() . '/assets/css/block-banner-main-section.css');
        }
    ));

    // Dance Programs
    acf_register_block_type( array(
        'name'            => 'dance-programs-section',
        'title'           => 'Dance Programs Section',
        'category'        => 'formatting',
        'icon'            => 'tickets-alt',
        'mode'            => 'edit',
        'render_template' => get_template_directory() . '/blocks/block-dance-programs-section.php',
		'enqueue_assets' => function(){
            wp_enqueue_style('blackcap-block-dance-programs-section-css', get_stylesheet_directory_uri() . '/assets/css/block-dance-programs-section.css');
        }
    ));

    // journey-path block
    acf_register_block_type(array(
        'name'              => 'journey-path-section',
        'title'             => __('Journey Path Section'),
        'description'       => __('Journey Path Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-journey-path-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-ol',
        'keywords'          => array('journey', 'path', 'steps'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style('block-journey-path-section-css', get_stylesheet_directory_uri() . '/assets/css/block-journey-path-section.css');
        }
    ));

    // Progressive details block
    acf_register_block_type(array(
        'name'              => 'progressive-detail-section',
        'title'             => __('Progressive Detail Section'),
        'description'       => __('Journey Path Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-progressive-detail-section.php',
        'category'          => 'formatting',
        'icon'              => 'welcome-learn-more',
        'keywords'          => array('journey', 'path', 'steps'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style('block-progressive-detail-section-css', get_stylesheet_directory_uri() . '/assets/css/block-progressive-detail-section.css');
        }
    ));

    // our curriculum path block
    acf_register_block_type(array(
        'name'              => 'our-curriculum-path-section',
        'title'             => __('Our Curriculum Path Section'),
        'description'       => __('Curriculum Path Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-our-curriculum-path-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-aligncenter',
        'keywords'          => array('curriculum', 'path'),
        'mode'              => 'edit',

        'enqueue_assets' => function () {
            wp_enqueue_style(
                'block-our-curriculum-path-section-css',
                get_stylesheet_directory_uri() . '/assets/css/block-our-curriculum-path-section.css'
            );
        }
    ));

    // Dance details section
    acf_register_block_type(array(
        'name'              => 'dance-details-section',
        'title'             => __('Dance Details Section'),
        'description'       => __('Dance Details Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-dance-details-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-ol',
        'keywords'          => array('dance', 'details'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style('block-dance-details-section-css', get_stylesheet_directory_uri() . '/assets/css/block-dance-details-section.css');
        }
    ));

    // Register Class section
    acf_register_block_type(array(
        'name'              => 'register-classes-section',
        'title'             => __('Register Classes Section'),
        'description'       => __('Register Classes Section'),
        'render_template'   => get_template_directory() . '/blocks/block-register-classes-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'calendar',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
                wp_enqueue_style('block-register-classes-section-css', get_stylesheet_directory_uri() . '/assets/css/block-register-classes-section.css');
        }
    ));

    // Contact Banner Section
    acf_register_block_type(array(
        'name'              => 'contact-banner-section',
        'title'             => __('Contact Banner Section'),
        'description'       => __('Contact Banner Section'),
        'render_template'   => get_template_directory() . '/blocks/block-contact-hero-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'calendar',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
                wp_enqueue_style('block-contact-banner-section-css', get_stylesheet_directory_uri() . '/assets/css/block-contact-hero-section.css');
        }
    ));

    // info strip section
    acf_register_block_type(array(
        'name'              => 'info-strip',
        'title'             => __('Info Strip'),
        'description'       => __('Info Strip Section'),
        'render_template'   => get_template_directory() . '/blocks/block-info-strip-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'info',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-info-strip-css',
                get_template_directory_uri() . '/assets/css/block-info-strip-section.css'
            );
        }
    ));

    // Contact locations section
    acf_register_block_type(array(
        'name'              => 'contact-locations-section',
        'title'             => __('Contact Locations Section'),
        'description'       => __('Contact Locations Section'),
        'render_template'   => get_template_directory() . '/blocks/block-contact-locations-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'location-alt',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-contact-locations-section-css',
                get_template_directory_uri() . '/assets/css/block-contact-locations-section.css',
                array(),
                null
            );
        }
    ));

    // Contact Form Section
    acf_register_block_type(array(
        'name'              => 'contact-form-section',
        'title'             => __('Contact Form Section'),
        'description'       => __('Contact Form Section'),
        'render_template'   => get_template_directory() . '/blocks/block-contact-form-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'email',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-contact-form-section-css',
                get_template_directory_uri() . '/assets/css/block-contact-form-section.css',
                array(),
                null
            );
        }
    ));

    // Ambassador Intro Section
    acf_register_block_type(array(
        'name'              => 'ambassador-intro-section',
        'title'             => __('Ambassador Intro Section'),
        'description'       => __('Ambassador Intro Section'),
        'render_template'   => get_template_directory() . '/blocks/block-ambassador-intro-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'groups',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-ambassador-intro-section-css',
                get_template_directory_uri() . '/assets/css/block-ambassador-intro-section.css',
                array(),
                null
            );
        }
    ));

    // Commit Strip Section
    acf_register_block_type(array(
        'name'              => 'commit-strip',
        'title'             => __('Commit Strip'),
        'description'       => __('Commit Strip'),
        'render_template'   => get_template_directory() . '/blocks/block-commit-strip-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'clock',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-commit-strip-css',
                get_template_directory_uri() . '/assets/css/block-commit-strip-section.css',
                array(),
                null
            );
        }
    ));

    // Ambassador Roles Section
    acf_register_block_type(array(
        'name'              => 'ambassador-roles',
        'title'             => __('Ambassador Roles'),
        'description'       => __('Ambassador Roles Section'),
        'render_template'   => get_template_directory() . '/blocks/block-ambassador-roles-section.php',
        'category'          => 'custom-blocks',
        'icon'              => 'groups',
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-ambassador-roles-css',
                get_template_directory_uri() . '/assets/css/block-ambassador-roles-section.css',
                array(),
                null
            );
        }
    ));

    // Ambassador Perks Section
    acf_register_block_type(array(
        'name'              => 'ambassador-perks',
        'title'             => __('Ambassador Perks'),
        'description'       => __('Ambassador Perks Section'),
        'render_template'   => get_template_directory() . '/blocks/block-ambassador-perks-section.php',
        'category'          => 'formatting',
        'icon'              => 'awards',
        'keywords'          => array('perks', 'ambassador'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-ambassador-perks-css',
                get_template_directory_uri() . '/assets/css/block-ambassador-perks-section.css',
                array(),
                null
            );
        }
    ));

    // Ambassador CTA Section
    acf_register_block_type(array(
        'name'              => 'ambassador-cta',
        'title'             => __('Ambassador CTA'),
        'description'       => __('Ambassador CTA Banner'),
        'render_template'   => get_template_directory() . '/blocks/block-cta-banner-section.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array('cta', 'ambassador'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-ambassador-cta-css',
                get_template_directory_uri() . '/assets/css/block-cta-banner-section.css',
                array(),
                null
            );
        }
    ));

    // Events Filter Bar
    acf_register_block_type(array(
        'name'              => 'events-filter-bar',
        'title'             => __('Events Filter Bar'),
        'description'       => __('Events Filter Bar Section'),
        'render_template'   => get_template_directory() . '/blocks/block-filter-bar-section.php',
        'category'          => 'formatting',
        'icon'              => 'filter',
        'keywords'          => array('events', 'filter'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-events-filter-bar-css',
                get_template_directory_uri() . '/assets/css/block-filter-bar-section.css',
                array(),
                null
            );
        }
    ));

    // Events mochuo section
    acf_register_block_type(array(
        'name'              => 'events-mockup',
        'title'             => __('Events Mockup'),
        'description'       => __('Events Mockup Section'),
        'render_template'   => get_template_directory() . '/blocks/block-events-mockup-section.php',
        'category'          => 'formatting',
        'icon'              => 'camera',
        'keywords'          => array('events', 'mockup'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-events-mockup-css',
                get_template_directory_uri() . '/assets/css/block-events-mockup-section.css',
                array(),
                null
            );
        }
    ));

    // Events CTA Banner
    acf_register_block_type(array(
        'name'              => 'events-cta-banner',
        'title'             => __('Events CTA Banner'),
        'description'       => __('Events CTA Banner Section'),
        'render_template'   => get_template_directory() . '/blocks/block-cta-banner-event-section.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array('events', 'cta'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-events-cta-banner-css',
                get_template_directory_uri() . '/assets/css/block-cta-banner-event-section.css',
                array(),
                null
            );
        }
    ));

    // FAQ Banner Section
    acf_register_block_type(array(
        'name'              => 'faq-hero',
        'title'             => __('FAQ Hero'),
        'description'       => __('FAQ Hero Section'),
        'render_template'   => get_template_directory() . '/blocks/block-faq-mockup-section.php',
        'category'          => 'formatting',
        'icon'              => 'welcome-learn-more',
        'keywords'          => array('faq', 'hero'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-faq-hero-css',
                get_template_directory_uri() . '/assets/css/block-faq-mockup-section.css',
                array(),
                null
            );
        }
    ));

    // FAQ Category Nav
    acf_register_block_type(array(
        'name'              => 'faq-category-nav',
        'title'             => __('FAQ Category Navigation'),
        'description'       => __('FAQ Category Navigation Section'),
        'render_template'   => get_template_directory() . '/blocks/block-category-nav-section.php',
        'category'          => 'formatting',
        'icon'              => 'menu',
        'keywords'          => array('faq', 'navigation', 'category'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-faq-category-nav-css',
                get_template_directory_uri() . '/assets/css/block-category-nav-section.css',
                array(),
                null
            );
        }
    ));

    // Main FAQ Section
    acf_register_block_type(array(
        'name'              => 'faq-section',
        'title'             => __('FAQ Section'),
        'description'       => __('FAQ Accordion Section'),
        'render_template'   => get_template_directory() . '/blocks/block-main-faq-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-help',
        'keywords'          => array('faq', 'accordion'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-faq-section-css',
                get_template_directory_uri() . '/assets/css/block-main-faq-section.css',
                array(),
                null
            );
        }
    ));

    // FAQ CTA
    acf_register_block_type(array(
        'name'              => 'faq-cta',
        'title'             => __('FAQ CTA'),
        'description'       => __('FAQ CTA Section'),
        'render_template'   => get_template_directory() . '/blocks/block-faq-cta-section.php',
        'category'          => 'formatting',
        'icon'              => 'email',
        'keywords'          => array('faq', 'cta'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-faq-cta-css',
                get_template_directory_uri() . '/assets/css/block-faq-cta-section.css',
                array(),
                null
            );
        }
    ));

    // Featured section
    acf_register_block_type(array(
        'name'              => 'featured-logos',
        'title'             => __('Featured Logos'),
        'description'       => __('Featured Logos Section'),
        'render_template'   => get_template_directory() . '/blocks/block-featured-block-section.php',
        'category'          => 'formatting',
        'icon'              => 'star-filled',
        'keywords'          => array('featured', 'logos'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-featured-logos-css',
                get_template_directory_uri() . '/assets/css/block-featured-block-section.css',
                array(),
                null
            );
        }
    ));

    // Event Pill Row
    acf_register_block_type(array(
        'name'              => 'event-pill-row',
        'title'             => __('Event Pill Row'),
        'description'       => __('Event Pill Row Section'),
        'render_template'   => get_template_directory() . '/blocks/block-pill-row-section.php',
        'category'          => 'formatting',
        'icon'              => 'tag',
        'keywords'          => array('event', 'pill'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-event-pill-row-css',
                get_template_directory_uri() . '/assets/css/block-pill-row-section.css',
                array(),
                null
            );
        }
    ));

    // intro section
    acf_register_block_type(array(
        'name'              => 'intro-section',
        'title'             => __('Intro Section'),
        'description'       => __('Intro Section with Video'),
        'render_template'   => get_template_directory() . '/blocks/block-intro-section.php',
        'category'          => 'formatting',
        'icon'              => 'video-alt3',
        'keywords'          => array('intro', 'video'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-intro-section-css',
                get_template_directory_uri() . '/assets/css/block-intro-section.css',
                array(),
                null
            );
        }
    ));

    // Corporate Feature
    acf_register_block_type(array(
        'name'              => 'feature-section',
        'title'             => __('Feature Section'),
        'description'       => __('Feature Section with Images'),
        'render_template'   => get_template_directory() . '/blocks/block-corporate-events-section.php',
        'category'          => 'formatting',
        'icon'              => 'images-alt2',
        'keywords'          => array('feature', 'corporate'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-feature-section-css',
                get_template_directory_uri() . '/assets/css/block-corporate-events-section.css',
                array(),
                null
            );
        }
    ));

    // Team building Workshops
    acf_register_block_type(array(
        'name'            => 'team-building-workshops',
        'title'           => __('Team Building Workshops'),
        'description'     => __('Team Building Workshops Section'),
        'render_template' => get_template_directory() . '/blocks/block-team-building-workshops.php',
        'category'        => 'formatting',
        'icon'            => 'groups',
        'keywords'        => array('team', 'building', 'workshops'),
        'mode'            => 'edit',
        'enqueue_assets'  => function () {
            wp_enqueue_style(
                'block-team-building-workshops-css',
                get_template_directory_uri() . '/assets/css/block-team-building-workshops.css',
                array(),
                null
            );
        }
    ));

    // Weddings Section
    acf_register_block_type(array(
        'name'              => 'wedding-section',
        'title'             => __('Wedding Section'),
        'description'       => __('Wedding Section'),
        'render_template'   => get_template_directory() . '/blocks/block-wedding-section.php',
        'category'          => 'formatting',
        'icon'              => 'heart',
        'keywords'          => array('wedding', 'dance', 'events'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-wedding-section-css',
                get_template_directory_uri() . '/assets/css/block-wedding-section.css',
                array(),
                null
            );
        },
    ));

    // Closing Section
    acf_register_block_type(array(
        'name'              => 'closing-section',
        'title'             => __('Closing Section'),
        'description'       => __('Closing CTA Section'),
        'render_template'   => get_template_directory() . '/blocks/block-closing-section.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array('closing', 'cta', 'contact'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-closing-section-css',
                get_template_directory_uri() . '/assets/css/block-closing-section.css',
                array(),
                null
            );
        }
    ));

    // CTA Banner
    acf_register_block_type(array(
        'name'              => 'cta-banner',
        'title'             => __('CTA Banner'),
        'description'       => __('CTA Banner Section'),
        'render_template'   => get_template_directory() . '/blocks/block-hireus-mockup-cta-section.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array('cta', 'banner', 'contact'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-cta-banner-css',
                get_template_directory_uri() . '/assets/css/block-hireus-mockup-cta-section.css',
                array(),
                null
            );
        }
    ));

    // Who We Are Section
    acf_register_block_type(array(
        'name'              => 'who-we-are',
        'title'             => __('Who We Are'),
        'description'       => __('Who We Are Section'),
        'render_template'   => get_template_directory() . '/blocks/block-who-we-are-section.php',
        'category'          => 'formatting',
        'icon'              => 'groups',
        'keywords'          => array('about', 'who', 'team'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-who-we-are-css',
                get_template_directory_uri() . '/assets/css/block-who-we-are-section.css',
                array(),
                null
            );
        }
    ));

    // Mission Section
    acf_register_block_type(array(
        'name'              => 'mission-section',
        'title'             => __('Mission Section'),
        'description'       => __('Mission Section'),
        'render_template'   => get_template_directory() . '/blocks/block-mission-section.php',
        'category'          => 'formatting',
        'icon'              => 'awards',
        'keywords'          => array('mission', 'values', 'about'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-mission-section-css',
                get_template_directory_uri() . '/assets/css/block-mission-section.css',
                array(),
                null
            );
        },
    ));

    // Services Section
    acf_register_block_type(array(
        'name'              => 'services-section',
        'title'             => __('Services Section'),
        'description'       => __('Services Section'),
        'render_template'   => get_template_directory() . '/blocks/block-services-section.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array('services', 'dance', 'classes'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-services-section-css',
                get_template_directory_uri() . '/assets/css/block-services-section.css',
                array(),
                null
            );
        }
    ));

    // Hero Mockup Section
    acf_register_block_type(array(
        'name'              => 'hero-mockup-section',
        'title'             => __('Hero Mockup Section'),
        'description'       => __('Hero Mockup Section'),
        'render_template'   => get_template_directory() . '/blocks/block-hero-mockup-section.php',
        'category'          => 'formatting',
        'icon'              => 'cover-image',
        'keywords'          => array('hero', 'banner', 'mockup'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-hero-mockup-section-css',
                get_template_directory_uri() . '/assets/css/block-hero-mockup-section.css',
                array(),
                null
            );
        },
   ));

   // Journey Home Mockup Section
   acf_register_block_type(array(
        'name'              => 'journey-home-mockup-section',
        'title'             => __('Journey Home Mockup Section'),
        'description'       => __('Journey Home Mockup Section'),
        'render_template'   => get_template_directory() . '/blocks/block-journey-home-mockup-section.php',
        'category'          => 'formatting',
        'icon'              => 'share',
        'keywords'          => array('journey', 'home', 'mockup'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-journey-home-mockup-section-css',
                get_template_directory_uri() . '/assets/css/block-journey-home-mockup-section.css',
                array(),
                null
            );
        }
    ));

    // Styles Strip Section
    acf_register_block_type(array(
        'name'              => 'styles-strip',
        'title'             => __('Styles Strip'),
        'description'       => __('Styles Strip Gutenberg Block'),
        'render_template'   => get_template_directory() . '/blocks/block-styles-strip-section.php',
        'category'          => 'formatting',
        'icon'              => 'tag',
        'keywords'          => array('styles', 'dance', 'tags'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-styles-strip-section.css',
    ));

    // Kept Section
    acf_register_block_type(array(
        'name'              => 'kept-section',
        'title'             => __('Kept Section'),
        'description'       => __('Kept Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-kept-section.php',
        'category'          => 'formatting',
        'icon'              => 'excerpt-view',
        'keywords'          => array('kept', 'register', 'classes'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-kept-section.css',
    ));

    // Terms Section
    acf_register_block_type(array(
        'name'              => 'terms-section',
        'title'             => __('Terms Section'),
        'description'       => __('Terms & Policies Block'),
        'render_template'   => get_template_directory() . '/blocks/block-terms-conditions-section.php',
        'category'          => 'formatting',
        'icon'              => 'list-view',
        'keywords'          => array('terms', 'policy'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-terms-conditions-section.css',
    ));

    // Schedule Section
    acf_register_block_type(array(
        'name'              => 'schedule-section',
        'title'             => __('Schedule Section'),
        'description'       => __('Schedule Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-schedule-section.php',
        'category'          => 'formatting',
        'icon'              => 'calendar-alt',
        'keywords'          => array('schedule', 'calendar'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-schedule-section.css',
    ));

    // First Class Section
    acf_register_block_type(array(
        'name'            => 'first-class',
        'title'           => __('First Class'),
        'description'     => __('First Class Block'),
        'render_template' => get_template_directory() . '/blocks/block-first-class-section.php',
        'category'        => 'formatting',
        'icon'            => 'welcome-learn-more',
        'keywords'        => array('first', 'class', 'remember'),
        'mode'            => 'edit',
        'enqueue_style'   => get_template_directory_uri() . '/assets/css/block-first-class-section.css',
    ));

    // StudentHub First Class Section
    acf_register_block_type(array(
        'name'              => 'studenthub-first-class-section',
        'title'             => __('StudentHub First Class Section'),
        'description'       => __('StudentHub First Class Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-studenthub-first-class-section.php',
        'category'          => 'formatting',
        'icon'              => 'welcome-learn-more',
        'keywords'          => array('studenthub', 'first class', 'remember'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-studenthub-first-class-section.css',
    ));

    // studenthub-level-description-section
    acf_register_block_type(array(
        'name'              => 'studenthub-level-description-section',
        'title'             => __('StudentHub Level Description Section'),
        'description'       => __('StudentHub Level Description Block'),
        'render_template'   => get_template_directory() . '/blocks/block-level-descriptions-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-ol',
        'keywords'          => array('level', 'studenthub', 'description'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-level-descriptions-section.css',
    ));

    // curriculum-box-section
    acf_register_block_type(array(
        'name'              => 'curriculum-box-section',
        'title'             => __('Curriculum Box'),
        'description'       => __('Curriculum Box Block'),
        'render_template'   => get_template_directory() . '/blocks/block-curriculum-box-section.php',
        'category'          => 'formatting',
        'icon'              => 'editor-ol',
        'keywords'          => array('curriculum','levels','path'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-curriculum-box-section.css',
    ));

    // beyond section
    acf_register_block_type(array(
        'name'              => 'beyond-studenthub',
        'title'             => __('Beyond StudentHub'),
        'description'       => __('Beyond StudentHub Block'),
        'render_template'   => get_template_directory() . '/blocks/block-beyond-section.php',
        'category'          => 'formatting',
        'icon'              => 'images-alt2',
        'keywords'          => array('beyond','studenthub'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-beyond-section.css',
    ));

    // Jointeam into section
    acf_register_block_type(array(
        'name'              => 'jointeam-into-section',
        'title'             => __('Join Team Into Section'),
        'description'       => __('Join Team Into Section Block'),
        'render_template'   => get_template_directory() . '/blocks/block-jointeam-into-section.php',
        'category'          => 'formatting',
        'icon'              => 'images-alt2',
        'keywords'          => array('jointeam'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-jointeam-into-section.css',
    ));

    // Jointeam offer strip
    acf_register_block_type(array(
        'name'              => 'jointeam-offer-strip',
        'title'             => __('Join Team Offer Strip'),
        'description'       => __('Join Team Offer Strip Block'),
        'render_template'   => get_template_directory() . '/blocks/block-jointeam-offer-strip-section.php',
        'category'          => 'formatting',
        'icon'              => 'screenoptions',
        'keywords'          => array('jointeam', 'offer'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-jointeam-offer-strip-section.css',
    ));

    // Jointeam CTA Banner
    acf_register_block_type(array(
        'name'              => 'jointeam-cta-banner',
        'title'             => __('Join Team CTA Banner'),
        'description'       => __('Join Team CTA Banner Block'),
        'render_template'   => get_template_directory() . '/blocks/block-jointeam-cta-section.php',
        'category'          => 'formatting',
        'icon'              => 'megaphone',
        'keywords'          => array('jointeam', 'cta', 'banner'),
        'mode'              => 'edit',
        'enqueue_style'     => get_template_directory_uri() . '/assets/css/block-jointeam-cta-section.css',
    ));

    // Style We Teach Strip
    acf_register_block_type(array(
        'name'              => 'style-we-teach-strip',
        'title'             => __('Style We Teach Strip'),
        'description'       => __('Style We Teach Strip'),
        'render_template'   => get_template_directory() . '/blocks/block-style-we-teach-strip.php',
        'category'          => 'custom-blocks',
        'icon'              => 'editor-ul',
        'keywords'          => array('style', 'dance', 'strip'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-style-we-teach-strip-css',
                get_template_directory_uri() . '/assets/css/block-style-we-teach-strip.css',
                array(),
                null
            );
        },
    ));

    // Beyond The Core Program
    acf_register_block_type(array(
        'name'              => 'beyond-the-core-program',
        'title'             => __('Beyond The Core Program'),
        'description'       => __('Beyond The Core Program'),
        'render_template'   => get_template_directory() . '/blocks/block-beyond-the-core-program.php',
        'category'          => 'custom-blocks',
        'icon'              => 'welcome-learn-more',
        'keywords'          => array('beyond', 'core', 'program'),
        'mode'              => 'edit',
        'enqueue_assets'    => function () {
            wp_enqueue_style(
                'block-beyond-the-core-program-css',
                get_template_directory_uri() . '/assets/css/block-beyond-the-core-program.css',
                array(),
                null
            );
        },
    ));

    // First Class Expect
    acf_register_block_type(array(
        'name'            => 'first-class-expect',
        'title'           => __('First Class Expect'),
        'description'     => __('Things to remember before attending class.'),
        'render_template' => get_template_directory() . '/blocks/block-first-class-expect.php',
        'category'        => 'custom-blocks',
        'icon'            => 'list-view',
        'keywords'        => array( 'first class', 'remember', 'expect'),
        'mode'            => 'edit',
        'enqueue_assets'  => function () {
            wp_enqueue_style( 'block-first-class-expect-css', get_template_directory_uri() . '/assets/css/block-first-class-expect.css',
                array(),
                null
            );
        },
    ));

    // Schedule Section Moved Right
    acf_register_block_type(array(
        'name'            => 'schedule-section-moved-right',
        'title'           => __('Schedule Section Moved Right'),
        'description'     => __('Schedule section moved right.'),
        'render_template' => get_template_directory() . '/blocks/block-schedule-section-moved-right.php',
        'category'        => 'custom-blocks',
        'icon'            => 'schedule',
        'keywords'        => array('schedule', 'section', 'moved', 'right'),
        'mode'            => 'edit',
        'enqueue_assets'  => function () {
            wp_enqueue_style(
                'block-schedule-section-moved-right-css',
                get_template_directory_uri() . '/assets/css/block-schedule-section-moved-right.css',
                array(),
                null
            );
        },
    ));

    // level descriptions section
    acf_register_block_type(array(
        'name'            => 'level-descriptions',
        'title'           => __('Level Descriptions'),
        'description'     => __('Level descriptions section.'),
        'render_template' => get_template_directory() . '/blocks/block-level-descriptions.php',
        'category'        => 'custom-blocks',
        'icon'            => 'list-view',
        'keywords'        => array('level', 'descriptions', 'class', 'dance'),
        'mode'            => 'edit',
        'enqueue_assets'  => function () {
            wp_enqueue_style(
                'block-level-descriptions-css',
                get_template_directory_uri() . '/assets/css/block-level-descriptions.css',
                array(),
                null
            );
        },
    ));

    // Ambassador Mockup Section
    acf_register_block_type(array(
        'name'            => 'ambassador-mockup',
        'title'           => __('Ambassador Mockup'),
        'description'     => __('Ambassador mockup section.'),
        'render_template' => get_template_directory() . '/blocks/block-ambassador-mockup.php',
        'category'        => 'custom-blocks',
        'icon'            => 'groups',
        'keywords'        => array('ambassador', 'mockup', 'section'),
        'mode'            => 'edit',
        'enqueue_assets'  => function () {
            wp_enqueue_style(
                'block-ambassador-mockup-css',
                get_template_directory_uri() . '/assets/css/block-ambassador-mockup.css',
                array(),
                null
            );
        },
    ));

} );

