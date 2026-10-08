<?php

	add_action( 'acf/init', function () {

		// Hero section code
		acf_add_local_field_group( array(
			'key' => 'group_my_hero',
			'title' => 'My Hero Block',

			'fields' => array(

				array(
					'key' => 'field_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),

				array(
					'key' => 'field_text',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'textarea',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => 'acf/my-hero',
					),
				),
			),
		) );

		// Stats-section code
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(
				'key' => 'group_block_stats_section',
				'title' => 'Stats Section Block',

				'fields' => array(

					array(
						'key' => 'field_stats',
						'label' => 'Stats',
						'name' => 'stats',
						'type' => 'repeater',
						'button_label' => 'Add Stat',
						'sub_fields' => array(

							array(
								'key' => 'field_number',
								'label' => 'Number',
								'name' => 'number',
								'type' => 'text',
							),

							array(
								'key' => 'field_label',
								'label' => 'Label',
								'name' => 'label',
								'type' => 'text',
							),

						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/block-stats-section',
						),
					),
				),

			) );
		}

		// Banner-section code
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(

				'key'   => 'group_block_banner_section',
				'title' => 'Banner Section Block',

				'fields' => array(

					array(
						'key'           => 'field_badge_text',
						'label'         => 'Badge Text',
						'name'          => 'badge_text',
						'type'          => 'text',
						'default_value' => 'Soul2Sole Latin Dance Company',
					),

					array(
						'key'           => 'field_banner_image',
						'label'         => 'Banner Image',
						'name'          => 'banner_image',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'library'       => 'all',
					),

					array(
						'key'           => 'field_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'wysiwyg',
						'tabs'          => 'all',
						'toolbar'       => 'full',
						'media_upload'  => 1,
						'default_value' => 'Learn to Dance',
					),

					array(
						'key'           => 'field_highlight_text',
						'label'         => 'Highlight Text',
						'name'          => 'highlight_text',
						'type'          => 'text',
						'default_value' => 'With Confidence',
					),

					array(
						'key'           => 'field_description',
						'label'         => 'Description',
						'name'          => 'description',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => 'Join our community and experience the joy of Latin dance through expert instruction and a welcoming environment.',
					),

					array(
						'key'   => 'field_button',
						'label' => 'Button',
						'name'  => 'button',
						'type'  => 'link',
					),

					array(
						'key'           => 'field_note',
						'label'         => 'Note',
						'name'          => 'note',
						'type'          => 'text',
						'default_value' => 'No partner or experience required.',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/block-banner-section',
						),
					),
				),
			));
		}

		// Featured-section code
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(

				'key'   => 'group_block_featured_section',
				'title' => 'Featured Section Block',
				'fields' => array(
					array(
						'key'   => 'field_featured_title',
						'label' => 'Featured Title',
						'name'  => 'featured_title',
						'type'  => 'text',
					),
					array(
						'key'          => 'field_featured_items',
						'label'        => 'Featured Items',
						'name'         => 'featured_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Item',

						'sub_fields' => array(

							array(
								'key'   => 'field_featured_item_name',
								'label' => 'Item Name',
								'name'  => 'name',
								'type'  => 'text',
							),

						),
					),

				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/block-featured-section',
						),
					),
				),
			) );
		}

		// Dance Section Block
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(

				'key'   => 'group_block_dance_section',
				'title' => 'Dance Section Block',

				'fields' => array(

					array(
						'key'   => 'field_badge_text',
						'label' => 'Badge Text',
						'name'  => 'badge_text',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_section_title',
						'label' => 'Section Title',
						'name'  => 'section_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_section_description',
						'label' => 'Section Description',
						'name'  => 'section_description',
						'type'  => 'textarea',
					),

					array(
						'key'          => 'field_dance_cards',
						'label'        => 'Dance Cards',
						'name'         => 'dance_cards',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Dance Card',

						'sub_fields' => array(

							array(
								'key'            => 'field_card_image',
								'label'          => 'Card Image',
								'name'           => 'image',
								'type'           => 'image',
								'return_format'  => 'array',
								'preview_size'   => 'medium',
								'library'        => 'all',
							),

							array(
								'key'   => 'field_card_title',
								'label' => 'Card Title',
								'name'  => 'title',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_card_button',
								'label' => 'Button',
								'name'  => 'button',
								'type'  => 'link',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/block-dance-section',
						),
					),
				),

			) );
		}

		// Testimonials Section Block
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(
				'key' => 'group_testimonials_block',
				'title' => 'Testimonials Block',
				'fields' => array(

					array(
						'key' => 'field_section_tag',
						'label' => 'Section Tag',
						'name' => 'section_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_heading',
						'label' => 'Heading',
						'name' => 'heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_rating',
						'label' => 'Rating',
						'name' => 'rating',
						'type' => 'number',
					),

					array(
						'key' => 'field_rating_text',
						'label' => 'Rating Text',
						'name' => 'rating_text',
						'type' => 'text',
					),

					array(
						'key' => 'field_review_url',
						'label' => 'Google Review URL',
						'name' => 'review_url',
						'type' => 'url',
					),

					array(
						'key' => 'field_button_text',
						'label' => 'Button Text',
						'name' => 'button_text',
						'type' => 'text',
					),

					array(
						'key' => 'field_testimonials',
						'label' => 'Testimonials',
						'name' => 'testimonials',
						'type' => 'repeater',
						'button_label' => 'Add Testimonial',
						'layout' => 'block',
						'sub_fields' => array(

							array(
								'key' => 'field_review',
								'label' => 'Review',
								'name' => 'review',
								'type' => 'textarea',
							),

							array(
								'key' => 'field_initials',
								'label' => 'Initials',
								'name' => 'initials',
								'type' => 'text',
							),

							array(
								'key' => 'field_name',
								'label' => 'Name',
								'name' => 'name',
								'type' => 'text',
							),

							array(
								'key' => 'field_source',
								'label' => 'Source',
								'name' => 'source',
								'type' => 'text',
								'default_value' => 'via Google',
							),

							array(
								'key' => 'field_avatar_color',
								'label' => 'Avatar Color',
								'name' => 'avatar_color',
								'type' => 'select',
								'choices' => array(
									'orange'       => 'Orange',
									'orange-deep'  => 'Orange Deep',
									'sage'         => 'Sage',
									'sage-deep'    => 'Sage Deep',
								),
								'default_value' => 'orange',
								'return_format' => 'value',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/testimonials-section',
						),
					),
				),
			));
		}

		// How It Works Block
		if ( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( array(
				'key' => 'group_how_it_works',
				'title' => 'How It Works Block',
				'fields' => array(

					array(
						'key' => 'field_section_tag',
						'label' => 'Section Tag',
						'name' => 'section_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_heading',
						'label' => 'Heading',
						'name' => 'heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_description',
						'label' => 'Description',
						'name' => 'description',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_steps',
						'label' => 'Steps',
						'name' => 'steps',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Step',
						'sub_fields' => array(

							array(
								'key' => 'field_step_image',
								'label' => 'Image',
								'name' => 'image',
								'type' => 'image',
								'return_format' => 'array',
								'preview_size' => 'medium',
							),

							array(
								'key' => 'field_step_number',
								'label' => 'Step Number',
								'name' => 'step_number',
								'type' => 'text',
							),

							array(
								'key' => 'field_step_color',
								'label' => 'Step Color',
								'name' => 'color',
								'type' => 'select',
								'choices' => array(
									'orange' => 'Orange',
									'sage'   => 'Sage',
									'dark'   => 'Dark',
								),
								'default_value' => 'orange',
								'return_format' => 'value',
							),

							array(
								'key' => 'field_step_title',
								'label' => 'Title',
								'name' => 'title',
								'type' => 'text',
							),

							array(
								'key' => 'field_step_description',
								'label' => 'Description',
								'name' => 'description',
								'type' => 'textarea',
							),

						),
					),
					array(
						'key' => 'field_program_tags',
						'label' => 'Program Tags',
						'name' => 'program_tags',
						'type' => 'repeater',
						'button_label' => 'Add Tag',
						'sub_fields' => array(
							array(
								'key' => 'field_program_tag',
								'label' => 'Tag',
								'name' => 'tag',
								'type' => 'text',
							),
						),
						'layout' => 'table',
					),
				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/how-to-works-section',
						),
					),
				),
			) );
		}

		// Level System
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(
				'key'   => 'group_level_system',
				'title' => 'Level System',

				'fields' => array(

					array(
						'key'   => 'field_level_heading',
						'label' => 'Level Heading',
						'name'  => 'level_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_levels',
						'label'        => 'Levels',
						'name'         => 'levels',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Level',

						'sub_fields' => array(

							array(
								'key'   => 'field_small_text',
								'label' => 'Top Text',
								'name'  => 'small_text',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_level_number',
								'label' => 'Level Number',
								'name'  => 'number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_level_label',
								'label' => 'Bottom Text',
								'name'  => 'label',
								'type'  => 'text',
							),

							array(
								'key'           => 'field_level_active',
								'label'         => 'Active',
								'name'          => 'active',
								'type'          => 'true_false',
								'ui'            => 1,
								'default_value' => 0,
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/level-system',
						),
					),
				),

			) );
		}

		// Private Lessons
		if ( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( array(

				'key'   => 'group_private_lessons',
				'title' => 'Private Lessons',

				'fields' => array(

					array(
						'key'   => 'field_private_icon',
						'label' => 'Icon',
						'name'  => 'icon',
						'type'  => 'text',
						'default_value' => '+',
					),

					array(
						'key'   => 'field_private_tag',
						'label' => 'Tag',
						'name'  => 'tag',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_private_heading',
						'label' => 'Heading',
						'name'  => 'heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_private_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'textarea',
					),

					array(
						'key'   => 'field_private_button_text',
						'label' => 'Button Text',
						'name'  => 'button_text',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_private_button_link',
						'label' => 'Button Link',
						'name'  => 'button_link',
						'type'  => 'link',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_program_link_text',
						'label' => 'Program Link Text',
						'name' => 'program_link_text',
						'type' => 'text',
					),

					array(
						'key' => 'field_program_link',
						'label' => 'Program Link',
						'name' => 'program_link',
						'type' => 'link',
						'return_format' => 'array',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/private-leasons',
						),
					),
				),
			) );
		}

		// Pricing Section Fields
		if( function_exists('acf_add_local_field_group') ){

			acf_add_local_field_group(array(

				'key' => 'group_pricing_section',
				'title' => 'Pricing Section Fields',

				'fields' => array(

					array(
						'key' => 'field_section_tag',
						'label' => 'Section Tag',
						'name' => 'section_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_pricing_title',
						'label' => 'Pricing Title',
						'name' => 'pricing_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_pricing_description',
						'label' => 'Pricing Description',
						'name' => 'pricing_description',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_pricing_note',
						'label' => 'Pricing Note',
						'name' => 'pricing_note',
						'type' => 'text',
					),


					// Pricing Cards
					array(
						'key' => 'field_pricing_cards',
						'label' => 'Pricing Cards',
						'name' => 'pricing_cards',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Pricing Card',

						'sub_fields' => array(

							array(
								'key' => 'field_card_title',
								'label' => 'Title',
								'name' => 'title',
								'type' => 'text',
							),

							array(
								'key' => 'field_card_price',
								'label' => 'Price',
								'name' => 'price',
								'type' => 'text',
							),

							array(
								'key' => 'field_card_price_text',
								'label' => 'Price Text',
								'name' => 'price_text',
								'type' => 'text',
							),

							array(
								'key' => 'field_card_duration',
								'label' => 'Duration',
								'name' => 'duration',
								'type' => 'text',
							),

							array(
								'key' => 'field_card_badge',
								'label' => 'Badge',
								'name' => 'badge',
								'type' => 'text',
							),


							// Features Repeater
							array(
								'key' => 'field_card_features',
								'label' => 'Features',
								'name' => 'features',
								'type' => 'repeater',
								'layout' => 'block',
								'button_label' => 'Add Feature',

								'sub_fields' => array(

									array(
										'key' => 'field_feature_text',
										'label' => 'Feature',
										'name' => 'feature',
										'type' => 'text',
									),

								),
							),

						),
					),
					// Addons
					array(
						'key' => 'field_pricing_addons',
						'label' => 'Addons',
						'name' => 'addons',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Addon',

						'sub_fields' => array(

							array(
								'key' => 'field_addon_title',
								'label' => 'Title',
								'name' => 'title',
								'type' => 'text',
							),

							array(
								'key' => 'field_addon_description',
								'label' => 'Description',
								'name' => 'description',
								'type' => 'textarea',
							),

							array(
								'key' => 'field_addon_price',
								'label' => 'Price',
								'name' => 'price',
								'type' => 'text',
							),

						),
					),

				),


				'location' => array(

					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/pricing-section',
						),
					),

				),

			));
		}

		// Register Section
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group( array(

				'key'   => 'group_register_section',
				'title' => 'Register Section',

				'fields' => array(

					array(
						'key'   => 'field_register_tag',
						'label' => 'Section Tag',
						'name'  => 'register_tag',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_register_title',
						'label' => 'Section Title',
						'name'  => 'register_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_register_description',
						'label' => 'Section Description',
						'name'  => 'register_description',
						'type'  => 'textarea',
					),

					array(
						'key'   => 'field_card_title_main',
						'label' => 'Card Title',
						'name'  => 'card_title_main',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_card_description',
						'label' => 'Card Description',
						'name'  => 'card_description',
						'type'  => 'textarea',
					),

					array(
						'key'   => 'field_email_placeholder',
						'label' => 'Email Placeholder',
						'name'  => 'email_placeholder',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_name_placeholder',
						'label' => 'Name Placeholder',
						'name'  => 'name_placeholder',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_location_placeholder',
						'label' => 'Location Placeholder',
						'name'  => 'location_placeholder',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_locations',
						'label'        => 'Locations',
						'name'         => 'locations',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Location',

						'sub_fields' => array(

							array(
								'key'   => 'field_location_name',
								'label' => 'Location Name',
								'name'  => 'location_name',
								'type'  => 'text',
							),

						),

					),

					array(
						'key'   => 'field_button_text',
						'label' => 'Button Text',
						'name'  => 'button_text',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_button_link',
						'label'        => 'Button Link',
						'name'         => 'button_link',
						'type'         => 'link',
						'return_format'=> 'array',
					),

					array(
						'key'   => 'field_register_note',
						'label' => 'Bottom Note',
						'name'  => 'register_note',
						'type'  => 'textarea',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/register-section',
						),
					),
				),

			) );
		}

		// Location section
		if ( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group( array(

				'key'   => 'group_locations_section',
				'title' => 'Locations Section',

				'fields' => array(

					array(
						'key'   => 'field_locations_tag',
						'label' => 'Section Tag',
						'name'  => 'section_tag',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_locations_title',
						'label' => 'Section Title',
						'name'  => 'section_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_locations_description',
						'label' => 'Section Description',
						'name'  => 'section_description',
						'type'  => 'textarea',
					),

					array(
						'key'          => 'field_locations_link',
						'label'        => 'View All Link',
						'name'         => 'view_all_link',
						'type'         => 'link',
						'return_format'=> 'array',
					),

					array(
						'key'          => 'field_location_cards',
						'label'        => 'Location Cards',
						'name'         => 'location_cards',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Location',

						'sub_fields' => array(

							array(
								'key'   => 'field_location_name',
								'label' => 'Location Name',
								'name'  => 'location_name',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_location_address',
								'label' => 'Location Description',
								'name'  => 'location_description',
								'type'  => 'text',
							),

							array(
								'key'          => 'field_location_icon',
								'label'        => 'Location Icon',
								'name'         => 'location_icon',
								'type'         => 'image',
								'return_format'=> 'array',
								'preview_size' => 'medium',
								'library'      => 'all',
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/locations-section',
						),
					),
				),

			) );
		}

		// Events Block
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key' => 'group_events_block',
				'title' => 'Events Block',
				'fields' => array(

					// Section Tag
					array(
						'key' => 'field_section_tag',
						'label' => 'Section Tag',
						'name' => 'section_tag',
						'type' => 'text',
					),

					// Heading
					array(
						'key' => 'field_heading',
						'label' => 'Heading',
						'name' => 'heading',
						'type' => 'text',
					),

					// Top Button
					array(
						'key' => 'field_button_link',
						'label' => 'Top Button',
						'name' => 'button_link',
						'type' => 'link',
					),

					// Events Repeater
					array(
						'key' => 'field_events',
						'label' => 'Events',
						'name' => 'events',
						'type' => 'repeater',
						'layout' => 'row',
						'button_label' => 'Add Event',
						'sub_fields' => array(

							array(
								'key' => 'field_month',
								'label' => 'Month',
								'name' => 'month',
								'type' => 'text',
							),

							array(
								'key' => 'field_day',
								'label' => 'Day',
								'name' => 'day',
								'type' => 'number',
							),

							array(
								'key' => 'field_category',
								'label' => 'Category',
								'name' => 'category',
								'type' => 'text',
							),

							array(
								'key' => 'field_event_title',
								'label' => 'Event Title',
								'name' => 'event_title',
								'type' => 'text',
							),

							array(
								'key' => 'field_event_details',
								'label' => 'Event Details',
								'name' => 'event_details',
								'type' => 'text',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/event-section',
						),
					),
				),
			));
		}

		// Gift Card Block
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key' => 'group_gift_card_block',
				'title' => 'Gift Card Block',

				'fields' => array(

					array(
						'key' => 'field_gift_tag',
						'label' => 'Tag',
						'name' => 'gift_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_gift_heading',
						'label' => 'Heading',
						'name' => 'gift_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_gift_description',
						'label' => 'Description',
						'name' => 'gift_description',
						'type' => 'textarea',
						'rows' => 4,
					),

					array(
						'key' => 'field_gift_button',
						'label' => 'Button',
						'name' => 'gift_button',
						'type' => 'link',
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/gift-section',
						),
					),
				),
			));
		}

		// Banner Main Block
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_banner_main_block',
				'title' => 'Banner Main Block',

				'fields' => array(

					array(
						'key'   => 'field_label',
						'label' => 'Label',
						'name'  => 'label',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_heading',
						'label' => 'Heading',
						'name'  => 'heading',
						'type'  => 'textarea',
						'rows'  => 2,
					),

					array(
						'key'   => 'field_highlight_word',
						'label' => 'Highlight Word',
						'name'  => 'highlight_word',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_description',
						'label' => 'Description',
						'name'  => 'description',
						'type'  => 'textarea',
						'rows'  => 4,
					),

					array(
						'key'           => 'field_features',
						'label'         => 'Features',
						'name'          => 'features',
						'type'          => 'repeater',
						'layout'        => 'table',
						'button_label'  => 'Add Feature',

						'sub_fields' => array(

							array(
								'key'       => 'field_feature_icon',
								'label'     => 'Feature Icon (SVG)',
								'name'      => 'feature_icon',
								'type'      => 'textarea',
								'rows'      => 5,
								'new_lines' => '',
							),

							array(
								'key'   => 'field_banner_feature_text',
								'label' => 'Feature Text',
								'name'  => 'banner_feature_text',
								'type'  => 'text',
							),

						),
					),
				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/banner-main-section',
						),
					),
				),
			));
		}

		// Dance Programs Block
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_dance_programs',
				'title' => 'Dance Programs',

				'fields' => array(

					array(
						'key'   => 'field_program_label',
						'label' => 'Label',
						'name'  => 'program_label',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_program_heading',
						'label' => 'Heading',
						'name'  => 'program_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_program_description',
						'label' => 'Description',
						'name'  => 'program_description',
						'type'  => 'textarea',
						'rows'  => 4,
					),

					array(
						'key'          => 'field_program_items',
						'label'        => 'Programs',
						'name'         => 'program_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Program',

						'sub_fields' => array(

							array(
								'key'   => 'field_program_name',
								'label' => 'Program Name',
								'name'  => 'program_name',
								'type'  => 'text',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/dance-programs-section',
						),
					),
				),
			));
		}

		// Journey Path Block
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(

				'key'   => 'group_journey_path',
				'title' => 'Journey Path',

				'fields' => array(

					array(
						'key'   => 'field_journey_label',
						'label' => 'Label',
						'name'  => 'journey_label',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_journey_heading',
						'label' => 'Heading',
						'name'  => 'journey_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_journey_description',
						'label' => 'Description',
						'name'  => 'journey_description',
						'type'  => 'textarea',
						'rows'  => 4,
					),

					array(
						'key'          => 'field_journey_steps',
						'label'        => 'Journey Steps',
						'name'         => 'journey_steps',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Step',

						'sub_fields' => array(

							array(
								'key'   => 'field_step_badge',
								'label' => 'Badge',
								'name'  => 'step_badge',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_step_badge_color',
								'label' => 'Badge Color',
								'name'  => 'step_badge_color',
								'type'  => 'select',
								'choices' => array(
									'badge-orange' => 'Orange',
									'badge-green'  => 'Green',
									'badge-gray'   => 'Gray',
								),
							),

							array(
								'key'   => 'field_step_image',
								'label' => 'Image',
								'name'  => 'step_image',
								'type'  => 'image',
								'return_format' => 'url',
								'preview_size'  => 'medium',
							),

							array(
								'key'   => 'field_step_number',
								'label' => 'Number',
								'name'  => 'step_number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_step_number_color',
								'label' => 'Number Color',
								'name'  => 'step_number_color',
								'type'  => 'select',
								'choices' => array(
									'number-orange' => 'Orange',
									'number-green'  => 'Green',
									'number-dark'   => 'Dark',
								),
							),

							array(
								'key'   => 'field_step_title',
								'label' => 'Title',
								'name'  => 'step_title',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_step_description',
								'label' => 'Description',
								'name'  => 'step_description',
								'type'  => 'textarea',
							),

							array(
								'key'   => 'field_step_link',
								'label' => 'Button',
								'name'  => 'step_link',
								'type'  => 'link',
							),

							array(
								'key'   => 'field_step_active',
								'label' => 'Highlight Card',
								'name'  => 'step_active',
								'type'  => 'true_false',
								'ui'    => 1,
							),
						),
					),
					array(
						'key'   => 'field_private_label',
						'label' => 'Private Label',
						'name'  => 'private_label',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_private_title',
						'label' => 'Private Title',
						'name'  => 'private_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_private_content',
						'label' => 'Private Content',
						'name'  => 'private_content',
						'type'  => 'textarea',
					),
					array(
						'key'   => 'field_private_link',
						'label' => 'Private Button',
						'name'  => 'private_link',
						'type'  => 'link',
					),

				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/journey-path-section',
						),
					),
				),
			));
		}

		// Progressive Detail
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_progressive_detail',
				'title' => 'Progressive Detail',

				'fields' => array(

					array(
						'key'           => 'field_progressive_detail_label',
						'label'         => 'Label',
						'name'          => 'progressive_detail_label',
						'type'          => 'text',
						'placeholder'   => 'Enter Label',
						'default_value' => 'Progressive Detail',
					),

					array(
						'key'           => 'field_progressive_detail_title',
						'label'         => 'Title',
						'name'          => 'progressive_detail_title',
						'type'          => 'text',
						'placeholder'   => 'Enter Title',
						'default_value' => 'Our Progressive Journey',
					),

					array(
						'key'           => 'field_progressive_detail_description',
						'label'         => 'Description',
						'name'          => 'progressive_detail_description',
						'type'          => 'textarea',
						'rows'          => 4,
						'placeholder'   => 'Enter Description',
						'default_value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					),

					array(
						'key'          => 'field_progressive_detail_cards',
						'label'        => 'Cards',
						'name'         => 'progressive_detail_cards',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Card',

						'sub_fields' => array(

							array(
								'key'            => 'field_progressive_card_image',
								'label'          => 'Card Image',
								'name'           => 'card_image',
								'type'           => 'image',
								'return_format'  => 'array',
								'preview_size'   => 'medium',
							),

							array(
								'key'           => 'field_progressive_card_number',
								'label'         => 'Card Number',
								'name'          => 'card_number',
								'type'          => 'text',
								'placeholder'   => '01',
								'default_value' => '01',
							),

							array(
								'key'           => 'field_progressive_card_title',
								'label'         => 'Card Title',
								'name'          => 'card_title',
								'type'          => 'text',
								'placeholder'   => 'Enter Card Title',
								'default_value' => 'Card Title',
							),

							array(
								'key'           => 'field_progressive_card_subtitle',
								'label'         => 'Card Subtitle',
								'name'          => 'card_subtitle',
								'type'          => 'text',
								'placeholder'   => 'Enter Card Subtitle',
								'default_value' => 'Card Subtitle',
							),

							array(
								'key'           => 'field_progressive_card_color',
								'label'         => 'Number Color',
								'name'          => 'card_color',
								'type'          => 'select',
								'choices'       => array(
									'orange' => 'Orange',
									'green'  => 'Green',
									'dark'   => 'Dark',
								),
								'default_value' => 'orange',
							),

							array(
								'key'          => 'field_progressive_card_features',
								'label'        => 'Features',
								'name'         => 'card_features',
								'type'         => 'repeater',
								'layout'       => 'table',
								'button_label' => 'Add Feature',

								'sub_fields' => array(

									array(
										'key'           => 'field_progressive_feature_text',
										'label'         => 'Feature Text',
										'name'          => 'feature_text',
										'type'          => 'text',
										'placeholder'   => 'Enter Feature',
										'default_value' => 'Feature description',
									),

								),
							),

						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/progressive-detail-section',
						),
					),
				),

			));
		}

		// Curriculum Path Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_curriculum_path',
				'title' => 'Curriculum Path',

				'fields' => array(

					array(
						'key'   => 'field_curriculum_title',
						'label' => 'Title',
						'name'  => 'curriculum_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_curriculum_steps',
						'label' => 'Curriculum Steps',
						'name'  => 'curriculum_steps',
						'type'  => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Step',

						'sub_fields' => array(

							array(
								'key'   => 'field_curriculum_step_label',
								'label' => 'Step Label',
								'name'  => 'step_label',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_curriculum_step_number',
								'label' => 'Step Number',
								'name'  => 'step_number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_curriculum_step_text',
								'label' => 'Step Text',
								'name'  => 'step_text',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_curriculum_active_step',
								'label' => 'Active Step',
								'name'  => 'active_step',
								'type'  => 'true_false',
								'ui'    => 1,
							),

						),
					),


					array(
						'key'   => 'field_curriculum_features',
						'label' => 'Features',
						'name'  => 'curriculum_features',
						'type'  => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'sub_fields' => array(
							array(
								'key'   => 'field_curriculum_feature_text',
								'label' => 'Feature Text',
								'name'  => 'feature_text',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_curriculum_svg_our_icon',
								'label' => 'SVG Text',
								'name'  => 'svg_our_icon',
								'type'  => 'textarea',
							),

						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/our-curriculum-path-section',
						),
					),
				),
			));
		}

		// Dance details section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key' => 'group_dance_details_section',
				'title' => 'Dance Details Section',

				'fields' => array(

					array(
						'key' => 'field_dance_details',
						'label' => 'Dance Details',
						'name' => 'dance_details',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Dance Detail',

						'sub_fields' => array(

							array(
								'key' => 'field_detail_type',
								'label' => 'Detail Type',
								'name' => 'detail_type',
								'type' => 'select',
								'choices' => array(
									'workshops' => 'Workshops',
									'social'    => 'Social',
									'choreo'    => 'Choreo Team',
								),
								'default_value' => 'workshops',
								'return_format' => 'value',
							),

							array(
								'key' => 'field_detail_images',
								'label' => 'Images',
								'name' => 'images',
								'type' => 'gallery',
								'return_format' => 'id',
								'preview_size' => 'medium',
							),

							array(
								'key' => 'field_detail_label',
								'label' => 'Label',
								'name' => 'label',
								'type' => 'text',
							),

							array(
								'key' => 'field_detail_title',
								'label' => 'Title',
								'name' => 'title',
								'type' => 'text',
							),
							array(
								'key' => 'field_detail_description',
								'label' => 'Description',
								'name' => 'description',
								'type' => 'textarea',
							),

							array(
								'key' => 'field_detail_points',
								'label' => 'Points',
								'name' => 'points',
								'type' => 'repeater',
								'layout' => 'table',
								'button_label' => 'Add Point',

								'sub_fields' => array(
									array(
										'key' => 'field_point_text',
										'label' => 'Point Text',
										'name' => 'point_text',
										'type' => 'text',
									),

								),
							),

							array(
								'key' => 'field_detail_button',
								'label' => 'Button',
								'name' => 'button',
								'type' => 'link',
								'return_format' => 'array',
							),

						),
					),

				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/dance-details-section',
						),
					),
				),

			));
		}

		// Register classes section
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key' => 'group_register_classes_section',
				'title' => 'Register Classes Section',

				'fields' => array(

					array(
						'key' => 'field_register_text_note',
						'label' => 'Note',
						'name' => 'register_text_note',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_register_title',
						'label' => 'Title',
						'name' => 'register_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_register_description',
						'label' => 'Description',
						'name' => 'register_description',
						'type' => 'textarea',
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/register-classes-section',
						),
					),
				),
			));
		}

		// Contact Banner Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_page_hero',
				'title' => 'Page Hero',

				'fields' => array(

					array(
						'key'           => 'field_page_hero_background',
						'label'         => 'Background Image',
						'name'          => 'background_image',
						'type'          => 'image',
						'return_format' => 'id',
						'preview_size'  => 'medium',
					),

					array(
						'key'           => 'field_page_hero_eyebrow',
						'label'         => 'Eyebrow',
						'name'          => 'eyebrow',
						'type'          => 'text',
						'default_value' => 'Join Our Team',
					),

					array(
						'key'           => 'field_page_hero_title',
						'label'         => 'Title',
						'name'          => 'title',
						'type'          => 'text',
						'default_value' => 'Become Part of Soul2Sole',
					),

					array(
						'key'           => 'field_page_hero_description',
						'label'         => 'Description',
						'name'          => 'description',
						'type'          => 'textarea',
						'rows'          => 4,
						'default_value' => 'Help us spread the love of Latin dance while inspiring students across the GTA.',
					),

					array(
						'key'           => 'field_page_hero_overlay',
						'label'         => 'Overlay Color',
						'name'          => 'overlay_color',
						'type'          => 'color_picker',
						'default_value' => '#000000',
					),

					array(
						'key'           => 'field_page_hero_overlay_opacity',
						'label'         => 'Overlay Opacity',
						'name'          => 'overlay_opacity',
						'type'          => 'range',
						'min'           => 0,
						'max'           => 100,
						'step'          => 1,
						'default_value' => 50,
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/contact-banner-section',
						),
					),
				),

			));
		}

		// Contact info strip
		if (function_exists('acf_add_local_field_group')) {

		 acf_add_local_field_group(array(

			'key'   => 'group_info_strip',
			'title' => 'Info Strip',

			'fields' => array(

				array(
					'key' => 'field_info_cards',
					'label' => 'Info Cards',
					'name' => 'info_cards',
					'type' => 'repeater',
					'layout' => 'block',
					'button_label' => 'Add Card',

					'sub_fields' => array(

						array(
							'key' => 'field_card_icon',
							'label' => 'Icon',
							'name' => 'icon',
							'type' => 'image',
							'return_format' => 'id',
							'preview_size' => 'medium',
							'library' => 'all',
						),

						array(
							'key' => 'field_card_icon_bg',
							'label' => 'Icon Background Color',
							'name' => 'icon_background_color',
							'type' => 'color_picker',
						),

						array(
							'key' => 'field_card_title',
							'label' => 'Card Title',
							'name' => 'title',
							'type' => 'text',
						),

						array(
							'key' => 'field_card_text',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'text',
						),

						array(
							'key' => 'field_card_link',
							'label' => 'Link',
							'name' => 'link',
							'type' => 'link',
							'return_format' => 'array',
						),

						array(
							'key' => 'field_card_small_text',
							'label' => 'Small Text',
							'name' => 'small_text',
							'type' => 'text',
						),

					),

				),

				array(
					'key' => 'field_note_icon',
					'label' => 'Bottom Note Icon',
					'name' => 'note_icon',
					'type' => 'image',
					'return_format' => 'id',
					'preview_size' => 'medium',
					'library' => 'all',
				),

				array(
					'key' => 'field_note_text',
					'label' => 'Bottom Note',
					'name' => 'note_text',
					'type' => 'textarea',
					'rows' => 3,
				),

			),

			'location' => array(
				array(
					array(
						'param'    => 'block',
						'operator' => '==',
						'value'    => 'acf/info-strip',
					),
				),
			),
		  ));
		}

		// Contact Location section
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(

				'key'   => 'group_contact_locations_section',
				'title' => 'Contact Locations Section',

				'fields' => array(

					array(
						'key'   => 'field_contact_locations_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'contact_locations_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_contact_locations_title',
						'label' => 'Title',
						'name'  => 'contact_locations_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_contact_locations_description',
						'label' => 'Description',
						'name'  => 'contact_locations_description',
						'type'  => 'textarea',
					),

					array(
						'key'   => 'field_contact_locations_cards',
						'label' => 'Location Cards',
						'name'  => 'contact_locations_cards',
						'type'  => 'repeater',
						'layout'=> 'block',
						'button_label' => 'Add Location',

						'sub_fields' => array(

							array(
								'key'   => 'field_contact_location_icon',
								'label' => 'Location Icon',
								'name'  => 'contact_location_icon',
								'type'  => 'image',
								'return_format' => 'id',
							),

							array(
								'key'   => 'field_contact_location_area',
								'label' => 'Area',
								'name'  => 'contact_location_area',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_contact_location_name',
								'label' => 'Location Name',
								'name'  => 'contact_location_name',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_contact_location_address',
								'label' => 'Address',
								'name'  => 'contact_location_address',
								'type'  => 'textarea',
								'rows'  => 3,
							),

							array(
								'key'   => 'field_contact_location_direction_link',
								'label' => 'Direction Link',
								'name'  => 'contact_location_direction_link',
								'type'  => 'url',
							),

							array(
								'key'   => 'field_contact_location_button_text',
								'label' => 'Button Text',
								'name'  => 'contact_location_button_text',
								'type'  => 'text',
								'default_value' => 'Get directions →',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/contact-locations-section',
						),
					),
				),

			));
		}

		// Contact Form Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_contact_form_section',
				'title' => 'Contact Form Section',

				'fields' => array(
					array(
						'key'   => 'field_contact_form_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'contact_form_eyebrow',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_contact_form_title',
						'label' => 'Title',
						'name'  => 'contact_form_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_contact_form_description',
						'label' => 'Description',
						'name'  => 'contact_form_description',
						'type'  => 'textarea',
						'rows'  => 3,
					),
					array(
						'key'   => 'field_contact_form_shortcode',
						'label' => 'Contact Form Shortcode',
						'name'  => 'contact_form_shortcode',
						'type'  => 'text',
						'instructions' => 'Example: [contact-form-7 id="f12de5a" title="Contact form"]',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/contact-form-section',
						),
					),
				),
			));
		}

		// Ambassador Intro Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_ambassador_intro_section',
				'title' => 'Ambassador Intro Section',

				'fields' => array(

					array(
						'key'   => 'field_ambassador_intro_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'ambassador_intro_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_ambassador_intro_title',
						'label' => 'Title',
						'name'  => 'ambassador_intro_title',
						'type'  => 'textarea',
						'rows'  => 2,
					),

					array(
						'key'           => 'field_ambassador_intro_content',
						'label'         => 'Content',
						'name'          => 'ambassador_intro_content',
						'type'          => 'wysiwyg',
						'tabs'          => 'visual',
						'toolbar'       => 'full',
						'media_upload'  => 1,
						'delay'         => 0,
					),

					array(
						'key'   => 'field_ambassador_intro_button',
						'label' => 'Button',
						'name'  => 'ambassador_intro_button',
						'type'  => 'link',
					),

					array(
						'key'   => 'field_ambassador_intro_image',
						'label' => 'Right Image',
						'name'  => 'ambassador_intro_image',
						'type'  => 'textarea',
						'return_format' => 'id',
						'preview_size'  => 'medium',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/ambassador-intro-section',
						),
					),
				),

			));
	    }

		// Commit Strip Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_commit_strip',
				'title' => 'Commit Strip',
				'fields' => array(

					array(
						'key' => 'field_commit_items',
						'label' => 'Commit Items',
						'name' => 'commit_items',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Item',
						'sub_fields' => array(

							array(
								'key' => 'field_commit_icon',
								'label' => 'Icon (SVG)',
								'name' => 'icon',
								'type' => 'textarea',
								'rows' => 5,
							),

							array(
								'key' => 'field_commit_heading',
								'label' => 'Heading',
								'name' => 'heading',
								'type' => 'text',
							),

							array(
								'key' => 'field_commit_description',
								'label' => 'Description',
								'name' => 'description',
								'type' => 'text',
							),

						),
						'min' => 0,
						'max' => 0,
					),

				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/commit-strip',
						),
					),
				),
			));
		}

		// Ambassador Roles Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_ambassador_roles',
				'title' => 'Ambassador Roles',
				'fields' => array(

					array(
						'key' => 'field_roles_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'roles_eyebrow',
						'type' => 'text',
					),

					array(
						'key' => 'field_roles_heading',
						'label' => 'Heading',
						'name' => 'roles_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_roles_description',
						'label' => 'Description',
						'name' => 'roles_description',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_roles_items',
						'label' => 'Role Items',
						'name' => 'role_items',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Role',
						'sub_fields' => array(

							array(
								'key' => 'field_role_badge',
								'label' => 'Badge',
								'name' => 'badge',
								'type' => 'text',
							),

							array(
								'key' => 'field_role_title',
								'label' => 'Title',
								'name' => 'title',
								'type' => 'text',
							),

							array(
								'key' => 'field_role_content',
								'label' => 'Content',
								'name' => 'content',
								'type' => 'textarea',
							),

						),
					),

				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/ambassador-roles',
						),
					),
				),
			));
		}

		// Ambassador Perks Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_ambassador_perks',
				'title' => 'Ambassador Perks',
				'fields' => array(
					array(
						'key' => 'field_perks_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'perks_eyebrow',
						'type' => 'text',
					),
					array(
						'key' => 'field_perks_title',
						'label' => 'Title',
						'name' => 'perks_title',
						'type' => 'text',
					),
					array(
						'key' => 'field_perks_content',
						'label' => 'Content',
						'name' => 'perks_content',
						'type' => 'wysiwyg',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
					array(
						'key' => 'field_perks_items',
						'label' => 'Perks',
						'name' => 'perks_items',
						'type' => 'repeater',
						'button_label' => 'Add Perk',
						'sub_fields' => array(
							array(
								'key' => 'field_perk_icon',
								'label' => 'SVG Icon',
								'name' => 'perk_icon',
								'type' => 'textarea',
								'rows' => 6,
								'instructions' => 'Paste SVG code.',
							),
							array(
								'key' => 'field_perk_title',
								'label' => 'Title',
								'name' => 'perk_title',
								'type' => 'text',
							),
							array(
								'key' => 'field_perk_description',
								'label' => 'Description',
								'name' => 'perk_description',
								'type' => 'textarea',
								'rows' => 3,
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/ambassador-perks',
						),
					),
				),
			));
		}
		// Ambassador CTA Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_ambassador_cta',
				'title' => 'Ambassador CTA',

				'fields' => array(

					array(
						'key' => 'field_cta_heading',
						'label' => 'Heading',
						'name' => 'cta_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_cta_content',
						'label' => 'Content',
						'name' => 'cta_content',
						'type' => 'wysiwyg',
						'tabs' => 'all',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					array(
						'key' => 'field_cta_button',
						'label' => 'Button',
						'name' => 'cta_button',
						'type' => 'link',
						'return_format' => 'array',
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/ambassador-cta',
						),
					),
				),
			));
		}
		// Filter Bar Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_events_filter_bar',
				'title' => 'Events Filter Bar',

				'fields' => array(

					array(
						'key'           => 'field_filter_items',
						'label'         => 'Filter Items',
						'name'          => 'filter_items',
						'type'          => 'repeater',
						'button_label'  => 'Add Filter',
						'layout'        => 'row',

						'sub_fields' => array(

							array(
								'key'   => 'field_filter_label_bar',
								'label' => 'Label',
								'name'  => 'label',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_filter_active',
								'label' => 'Default Active',
								'name'  => 'active',
								'type'  => 'true_false',
								'ui'    => 1,
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/events-filter-bar',
						),
					),
				),
			));
		}

		// Event mockup Section
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key' => 'group_events_list',
				'title' => 'Events List',
				'fields' => array(

					array(
						'key' => 'field_events',
						'label' => 'Events',
						'name' => 'events',
						'type' => 'repeater',
						'button_label' => 'Add Event',

						'sub_fields' => array(

							array(
								'key'=>'field_event_link',
								'label'=>'Link',
								'name'=>'event_link',
								'type'=>'link',
								'return_format'=>'array',
							),

							array(
								'key'=>'field_event_class',
								'label'=>'Card Class',
								'name'=>'event_class',
								'type'=>'text',
							),

							array(
								'key'=>'field_date_num',
								'label'=>'Date',
								'name'=>'date_number',
								'type'=>'text',
							),

							array(
								'key'=>'field_date_month',
								'label'=>'Month',
								'name'=>'date_month',
								'type'=>'text',
							),

							array(
								'key'=>'field_tag',
								'label'=>'Tag',
								'name'=>'tag',
								'type'=>'text',
							),

							array(
								'key'=>'field_type',
								'label'=>'Event Type',
								'name'=>'event_type',
								'type'=>'text',
							),

							array(
								'key'=>'field_title',
								'label'=>'Title',
								'name'=>'event_title',
								'type'=>'text',
							),

							array(
								'key'=>'field_time',
								'label'=>'Time',
								'name'=>'event_time',
								'type'=>'text',
							),

							array(
								'key'=>'field_location',
								'label'=>'Location',
								'name'=>'event_location',
								'type'=>'text',
							),
						),

					),

					array(
						'key'=>'field_bottom_heading',
						'label'=>'Bottom Heading',
						'name'=>'bottom_heading',
						'type'=>'text',
					),

					array(
						'key'=>'field_bottom_content',
						'label'=>'Bottom Content',
						'name'=>'bottom_content',
						'type'=>'wysiwyg',
						'toolbar'=>'basic',
						'media_upload'=>0,
					),
				),
				'location'=>array(
					array(
						array(
						'param'=>'block',
						'operator'=>'==',
						'value'=>'acf/events-mockup',
						),
					),
				),
			));
	  	}

		// Events CTA Banner
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key'   => 'group_events_cta_banner',
				'title' => 'Events CTA Banner',

				'fields' => array(

					array(
						'key'           => 'field_events_cta_heading',
						'label'         => 'Heading',
						'name'          => 'events_cta_heading',
						'type'          => 'text',
						'placeholder'   => 'Ready to Dance?',
						'default_value' => 'Ready to Dance?',
					),

					array(
						'key'           => 'field_events_cta_content',
						'label'         => 'Content',
						'name'          => 'events_cta_content',
						'type'          => 'wysiwyg',
						'toolbar'       => 'basic',
						'media_upload'  => 0,
						'default_value' => '<p>Join our community and start your dance journey today.</p>',
					),

					array(
						'key'           => 'field_events_cta_primary_button',
						'label'         => 'Primary Button',
						'name'          => 'primary_button',
						'type'          => 'link',
						'return_format' => 'array',
						'default_value' => array(
							'title'  => 'Book a Class',
							'url'    => '#',
							'target' => '_self',
						),
					),

					array(
						'key'           => 'field_events_cta_secondary_button',
						'label'         => 'Secondary Button',
						'name'          => 'secondary_button',
						'type'          => 'link',
						'return_format' => 'array',
						'default_value' => array(
							'title'  => 'Learn More',
							'url'    => '#',
							'target' => '_self',
						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/events-cta-banner',
						),
					),
				),
			));
		}

		// FAQ mockup Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_faq_hero',
				'title' => 'FAQ Hero',

				'fields' => array(

					array(
						'key'   => 'field_faq_hero_image',
						'label' => 'Background Image',
						'name'  => 'faq_hero_image',
						'type'  => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
						'library'       => 'all',
					),

					array(
						'key'   => 'field_faq_hero_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'faq_hero_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_faq_hero_heading',
						'label' => 'Heading',
						'name'  => 'faq_hero_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_faq_hero_tagline',
						'label' => 'Tagline',
						'name'  => 'faq_hero_tagline',
						'type'  => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/faq-hero',
						),
					),
				),
			));
		}

		// Category Nav Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_faq_category_nav',
				'title' => 'FAQ Category Navigation',

				'fields' => array(

					array(
						'key'          => 'field_faq_category_items',
						'label'        => 'Navigation Items',
						'name'         => 'faq_category_items',
						'type'         => 'repeater',
						'button_label' => 'Add Navigation Item',
						'layout'       => 'row',

						'sub_fields' => array(

							array(
								'key'           => 'field_faq_category_link',
								'label'         => 'Navigation Link',
								'name'          => 'nav_link',
								'type'          => 'link',
								'return_format' => 'array',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/faq-category-nav',
						),
					),
				),
			));
		}

		// FAQ Main Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_faq_section',
				'title' => 'FAQ Section',

				'fields' => array(

					array(
						'key'          => 'field_faq_groups',
						'label'        => 'FAQ Groups',
						'name'         => 'faq_groups',
						'type'         => 'repeater',
						'button_label' => 'Add FAQ Group',
						'layout'       => 'block',

						'sub_fields' => array(

							array(
								'key'   => 'field_group_id',
								'label' => 'Group ID',
								'name'  => 'group_id',
								'type'  => 'text',
								'instructions' => 'Example: registration',
							),

							array(
								'key'   => 'field_group_title',
								'label' => 'Group Title',
								'name'  => 'group_title',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_group_icon',
								'label' => 'SVG Icon',
								'name'  => 'group_icon',
								'type'  => 'textarea',
								'rows'  => 6,
							),

							array(
								'key'          => 'field_faq_items',
								'label'        => 'FAQ Items',
								'name'         => 'faq_items',
								'type'         => 'repeater',
								'button_label' => 'Add FAQ',

								'sub_fields' => array(

									array(
										'key'   => 'field_question',
										'label' => 'Question',
										'name'  => 'question',
										'type'  => 'text',
									),

									array(
										'key'   => 'field_answer',
										'label' => 'Answer',
										'name'  => 'answer',
										'type'  => 'wysiwyg',
										'toolbar' => 'basic',
										'media_upload' => 0,
									),

								),

							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/faq-section',
						),
					),
				),

			));
		}

		// FAQ CTA Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_faq_cta',
				'title' => 'FAQ CTA',

				'fields' => array(

					array(
						'key'   => 'field_faq_cta_heading',
						'label' => 'Heading',
						'name'  => 'faq_cta_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_faq_cta_content',
						'label'        => 'Content',
						'name'         => 'faq_cta_content',
						'type'         => 'wysiwyg',
						'toolbar'      => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'           => 'field_faq_cta_button',
						'label'         => 'Button',
						'name'          => 'faq_cta_button',
						'type'          => 'link',
						'return_format' => 'array',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/faq-cta',
						),
					),
				),

			));
		}

		// Featured block section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_featured_logos',
				'title' => 'Featured Logos',

				'fields' => array(

					array(
						'key'   => 'field_featured_label',
						'label' => 'Featured Label',
						'name'  => 'featured_label',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_featured_logos',
						'label'        => 'Logos',
						'name'         => 'featured_logos',
						'type'         => 'repeater',
						'layout'       => 'row',
						'button_label' => 'Add Logo',

						'sub_fields' => array(

							array(
								'key'   => 'field_logo_name',
								'label' => 'Logo Name',
								'name'  => 'logo_name',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_logo_bold',
								'label' => 'Bold',
								'name'  => 'logo_bold',
								'type'  => 'true_false',
								'ui'    => 1,
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/featured-logos',
						),
					),
				),

			));
		}

		// Event Pill Row
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_event_pill_row',
				'title' => 'Event Pill Row',

				'fields' => array(

					array(
						'key'          => 'field_event_pills',
						'label'        => 'Event Pills',
						'name'         => 'event_pills',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Pill',

						'sub_fields' => array(

							array(
								'key'   => 'field_event_pill_text',
								'label' => 'Pill Text',
								'name'  => 'pill_text',
								'type'  => 'text',
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/event-pill-row',
						),
					),
				),

			));
		}

		// Intro Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_intro_section',
				'title' => 'Intro Section',

				'fields' => array(

					array(
						'key'   => 'field_intro_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'intro_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_intro_heading',
						'label' => 'Heading',
						'name'  => 'intro_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_intro_content',
						'label'        => 'Content',
						'name'         => 'intro_content',
						'type'         => 'wysiwyg',
						'toolbar'      => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'           => 'field_intro_button',
						'label'         => 'Button',
						'name'          => 'intro_button',
						'type'          => 'link',
						'return_format' => 'array',
					),

					array(
						'key'   => 'field_intro_video',
						'label' => 'Video URL',
						'name'  => 'intro_video',
						'type'  => 'oembed',
					),

					array(
						'key'   => 'field_intro_video_label',
						'label' => 'Video Label',
						'name'  => 'intro_video_label',
						'type'  => 'text',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/intro-section',
						),
					),
				),

			));
		}
		// corporate events section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_feature_section',
				'title' => 'Feature Section',

				'fields' => array(

					array(
						'key'   => 'field_feature_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'feature_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_feature_heading',
						'label' => 'Heading',
						'name'  => 'feature_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_feature_content',
						'label'        => 'Content',
						'name'         => 'feature_content',
						'type'         => 'wysiwyg',
						'toolbar'      => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'          => 'field_feature_list',
						'label'        => 'Feature List',
						'name'         => 'feature_list',
						'type'         => 'repeater',
						'button_label' => 'Add Item',

						'sub_fields' => array(

							array(
								'key'   => 'field_feature_item',
								'label' => 'Item',
								'name'  => 'item',
								'type'  => 'text',
							),

						),
					),

					array(
						'key'           => 'field_feature_button',
						'label'         => 'Button',
						'name'          => 'feature_button',
						'type'          => 'link',
						'return_format' => 'array',
					),

					array(
						'key'           => 'field_feature_image_1',
						'label'         => 'Image 1',
						'name'          => 'feature_image_1',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),

					array(
						'key'   => 'field_feature_image_label_1',
						'label' => 'Image 1 Label',
						'name'  => 'feature_image_label_1',
						'type'  => 'text',
					),

					array(
						'key'           => 'field_feature_image_2',
						'label'         => 'Image 2',
						'name'          => 'feature_image_2',
						'type'          => 'image',
						'return_format' => 'array',
						'preview_size'  => 'medium',
					),

					array(
						'key'   => 'field_feature_image_label_2',
						'label' => 'Image 2 Label',
						'name'  => 'feature_image_label_2',
						'type'  => 'text',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/feature-section',
						),
					),
				),

			));
		}

		// Team Building workshop
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_team_building',
				'title' => 'Team Building Block',
				'fields' => array(

					array(
						'key' => 'field_team_building_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'team_building_eyebrow',
						'type' => 'text',
					),

					array(
						'key' => 'field_team_building_heading',
						'label' => 'Heading',
						'name' => 'team_building_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_team_building_content',
						'label' => 'Content',
						'name' => 'team_building_content',
						'type' => 'wysiwyg',
						'tabs' => 'visual',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					array(
						'key' => 'field_team_building_features',
						'label' => 'Feature List',
						'name' => 'team_building_features',
						'type' => 'repeater',
						'button_label' => 'Add Feature',
						'layout' => 'table',
						'sub_fields' => array(

							array(
								'key' => 'field_team_building_feature_text',
								'label' => 'Feature Text',
								'name' => 'team_building_feature_text',
								'type' => 'text',
							),

						),
					),

					array(
						'key' => 'field_team_building_button',
						'label' => 'Button',
						'name' => 'team_building_button',
						'type' => 'link',
					),

					array(
						'key' => 'field_team_building_text',
						'label' => 'Text',
						'name' => 'team_building_text',
						'type' => 'text',
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
					),

					array(
						'key' => 'field_team_building_image_label',
						'label' => 'Image Label',
						'name' => 'team_building_image_label',
						'type' => 'text',
					),

					array(
						'key' => 'field_team_building_reverse_layout',
						'label' => 'Reverse Layout',
						'name' => 'team_building_reverse_layout',
						'type' => 'true_false',
						'ui' => 1,
						'default_value' => 0,
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/team-building-workshops',
						),
					),
				),

			));
		}

		// Wedding Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_weddings',
				'title' => 'Weddings Block',
				'fields' => array(
					array(
						'key' => 'field_wedding_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'wedding_eyebrow',
						'type' => 'text',
					),
					array(
						'key' => 'field_wedding_heading',
						'label' => 'Heading',
						'name' => 'wedding_heading',
						'type' => 'text',
					),
					array(
						'key' => 'field_wedding_content',
						'label' => 'Content',
						'name' => 'wedding_content',
						'type' => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
					array(
						'key' => 'field_wedding_features',
						'label' => 'Features',
						'name' => 'wedding_features',
						'type' => 'repeater',
						'button_label' => 'Add Feature',
						'layout' => 'table',
						'sub_fields' => array(
							array(
								'key' => 'field_wedding_feature_text',
								'label' => 'Feature',
								'name' => 'wedding_feature_text',
								'type' => 'text',
							),
						),
					),
					array(
						'key' => 'field_wedding_bottom_content',
						'label' => 'Bottom Content',
						'name' => 'wedding_bottom_content',
						'type' => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),
					array(
						'key' => 'field_wedding_button',
						'label' => 'Button',
						'name' => 'wedding_button',
						'type' => 'link',
					),
					array(
						'key' => 'field_wedding_image',
						'label' => 'Image',
						'name' => 'wedding_image',
						'type' => 'image',
						'return_format' => 'array',
					),
					array(
						'key' => 'field_wedding_image_label',
						'label' => 'Image Label',
						'name' => 'wedding_image_label',
						'type' => 'text',
					),
					array(
						'key' => 'field_wedding_video_url',
						'label' => 'YouTube URL',
						'name' => 'wedding_video_url',
						'type' => 'url',
					),
					array(
						'key' => 'field_wedding_video_label',
						'label' => 'Video Label',
						'name' => 'wedding_video_label',
						'type' => 'text',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/wedding-section',
						),
					),
			    ),
			));
		}

		// Closing Section
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(
				'key' => 'group_closing_section',
				'title' => 'Closing Section',
				'fields' => array(

					array(
						'key' => 'field_closing_heading',
						'label' => 'Heading',
						'name' => 'closing_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_closing_content',
						'label' => 'Content',
						'name' => 'closing_content',
						'type' => 'textarea',
						'rows' => 3,
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/closing-section',
						),
					),
				),
			));
		}

		// CTA Banner
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_cta_banner',
				'title' => 'CTA Banner',
				'fields' => array(

					array(
						'key' => 'field_cta_banner_heading',
						'label' => 'Heading',
						'name' => 'cta_banner_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_cta_banner_content',
						'label' => 'Content',
						'name' => 'cta_banner_content',
						'type' => 'textarea',
						'rows' => 3,
					),

					array(
						'key' => 'field_cta_banner_button',
						'label' => 'Button',
						'name' => 'cta_banner_button',
						'type' => 'link',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/cta-banner',
						),
					),
				),

			));
		}

		// Who We Are Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key' => 'group_who_we_are',
				'title' => 'Who We Are',
				'fields' => array(

					array(
						'key' => 'field_who_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'who_eyebrow',
						'type' => 'text',
					),

					array(
						'key' => 'field_who_heading',
						'label' => 'Heading',
						'name' => 'who_heading',
						'type' => 'text',
					),

					array(
						'key' => 'field_who_content',
						'label' => 'Content',
						'name' => 'who_content',
						'type' => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					array(
						'key' => 'field_who_button',
						'label' => 'Button',
						'name' => 'who_button',
						'type' => 'link',
					),

					array(
						'key' => 'field_who_stats',
						'label' => 'Statistics',
						'name' => 'who_stats',
						'type' => 'repeater',
						'button_label' => 'Add Stat',
						'layout' => 'table',
						'sub_fields' => array(

							array(
								'key' => 'field_who_stat_number',
								'label' => 'Number',
								'name' => 'who_stat_number',
								'type' => 'text',
							),

							array(
								'key' => 'field_who_stat_label',
								'label' => 'Label',
								'name' => 'who_stat_label',
								'type' => 'text',
							),

						),
					),

					array(
						'key' => 'field_who_image',
						'label' => 'Image',
						'name' => 'who_image',
						'type' => 'image',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_who_image_label',
						'label' => 'Image Label',
						'name' => 'who_image_label',
						'type' => 'text',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/who-we-are',
						),
					),
				),

			));
		}

		// Mission Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_mission_section',
				'title' => 'Mission Section',
				'fields' => array(

					array(
						'key'   => 'field_mission_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'mission_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_mission_heading',
						'label' => 'Heading',
						'name'  => 'mission_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_mission_content',
						'label' => 'Content',
						'name'  => 'mission_content',
						'type'  => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'   => 'field_mission_values',
						'label' => 'Mission Values',
						'name'  => 'mission_values',
						'type'  => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Value',
						'sub_fields' => array(

							array(
								'key'   => 'field_mission_value_icon',
								'label' => 'SVG Icon',
								'name'  => 'mission_value_icon',
								'type'  => 'textarea',
								'rows'  => 6,
							),

							array(
								'key'   => 'field_mission_value_heading',
								'label' => 'Heading',
								'name'  => 'mission_value_heading',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_mission_value_content',
								'label' => 'Content',
								'name'  => 'mission_value_content',
								'type'  => 'textarea',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/mission-section',
						),
					),
				),

			));
		}

		// Services Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_services_section',
				'title' => 'Services Section',

				'fields' => array(

					array(
						'key'   => 'field_services_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'services_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_services_heading',
						'label' => 'Heading',
						'name'  => 'services_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_services_description_content',
						'label' => 'Description',
						'name'  => 'services_description_content',
						'type'  => 'textarea',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'   => 'field_services_items',
						'label' => 'Service Cards',
						'name'  => 'services_items',
						'type'  => 'repeater',
						'layout'=> 'block',
						'button_label' => 'Add Service',

						'sub_fields' => array(

							array(
								'key'   => 'field_service_style_class',
								'label' => 'Style Class',
								'name'  => 'service_style_class',
								'type'  => 'text',
								'instructions' => 'Example: style-salsa, style-bachata, style-chacha',
							),

							array(
								'key'   => 'field_service_icon',
								'label' => 'Icon Letter',
								'name'  => 'service_icon',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_service_title',
								'label' => 'Title',
								'name'  => 'service_title',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_service_description',
								'label' => 'Description',
								'name'  => 'service_description',
								'type'  => 'textarea',
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/services-section',
						),
					),
				),

			));
		}

		// Hero Banner section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_journey_hero',
				'title' => 'Journey Hero',

				'fields' => array(

					array(
						'key'           => 'field_hero_mockup_eyebrow',
						'label'         => 'Eyebrow',
						'name'          => 'hero_mockup_eyebrow',
						'type'          => 'text',
						'default_value' => 'Find your path',
					),

					array(
						'key'           => 'field_hero_mockup_heading',
						'label'         => 'Heading',
						'name'          => 'hero_mockup_heading',
						'type'          => 'wysiwyg',
						'default_value' => '<h1>Every dancer’s journey<br> looks a little <em>different.</em></h1>',
					),

					array(
						'key'           => 'field_hero_mockup_content',
						'label'         => 'Content',
						'name'          => 'hero_mockup_content',
						'type'          => 'wysiwyg',
						'toolbar'       => 'basic',
						'media_upload'  => 0,
						'default_value' => '<p>Start with structured progressive courses, then branch out into workshops, social practice, and our performance team — at your own pace.</p>',
					),

					array(
						'key'          => 'field_hero_mockup_pills',
						'label'        => 'Hero Pills',
						'name'         => 'hero_mockup_pills',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Pill',

						'sub_fields' => array(

							array(
								'key'   => 'field_hero_mockup_pill_icon',
								'label' => 'SVG Icon',
								'name'  => 'hero_mockup_pill_icon',
								'type'  => 'textarea',
							),
							array(
								'key'           => 'field_hero_mockup_pill_text',
								'label'         => 'Text',
								'name'          => 'hero_mockup_pill_text',
								'type'          => 'text',
								'default_value' => 'Easy to Use',
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/hero-mockup-section',
						),
					),
				),

			));
		}

		// Journey Home Mockup section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_journey_home_mockup_section',
				'title' => 'Journey Home Mockup Section',

				'fields' => array(

					array(
						'key'   => 'field_journey_home_mockup_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'journey_home_mockup_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_journey_home_mockup_heading',
						'label' => 'Heading',
						'name'  => 'journey_home_mockup_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_journey_home_mockup_content',
						'label' => 'Content',
						'name'  => 'journey_home_mockup_content',
						'type'  => 'wysiwyg',
						'toolbar' => 'basic',
						'media_upload' => 0,
					),

					// Feature Card
					array(
						'key' => 'tab_feature',
						'label' => 'Feature Card',
						'type' => 'tab',
					),

					array(
						'key' => 'field_journey_feature_tag',
						'label' => 'Tag',
						'name' => 'journey_feature_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_feature_image',
						'label' => 'Image',
						'name' => 'journey_feature_image',
						'type' => 'image',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_journey_feature_number',
						'label' => 'Number',
						'name' => 'journey_feature_number',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_feature_title',
						'label' => 'Title',
						'name' => 'journey_feature_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_feature_content',
						'label' => 'Content',
						'name' => 'journey_feature_content',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_journey_feature_price',
						'label' => 'Price',
						'name' => 'journey_feature_price',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_feature_price_subtitle',
						'label' => 'Price Subtitle',
						'name' => 'journey_feature_price_subtitle',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_feature_link',
						'label' => 'Mini Link',
						'name' => 'journey_feature_link',
						'type' => 'text',
					),

					// Workshop Card
					array(
						'key' => 'tab_workshop',
						'label' => 'Workshop Card',
						'type' => 'tab',
					),

					array(
						'key' => 'field_journey_workshop_tag',
						'label' => 'Tag',
						'name' => 'journey_workshop_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_workshop_image',
						'label' => 'Image',
						'name' => 'journey_workshop_image',
						'type' => 'image',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_journey_workshop_number',
						'label' => 'Number',
						'name' => 'journey_workshop_number',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_workshop_title',
						'label' => 'Title',
						'name' => 'journey_workshop_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_workshop_content',
						'label' => 'Content',
						'name' => 'journey_workshop_content',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_journey_workshop_link',
						'label' => 'Mini Link',
						'name' => 'journey_workshop_link',
						'type' => 'text',
					),

					// Social Card
					array(
						'key' => 'tab_social',
						'label' => 'Social Card',
						'type' => 'tab',
					),

					array(
						'key' => 'field_journey_social_tag',
						'label' => 'Tag',
						'name' => 'journey_social_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_social_image',
						'label' => 'Image',
						'name' => 'journey_social_image',
						'type' => 'image',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_journey_social_number',
						'label' => 'Number',
						'name' => 'journey_social_number',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_social_title',
						'label' => 'Title',
						'name' => 'journey_social_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_social_content',
						'label' => 'Content',
						'name' => 'journey_social_content',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_journey_social_link',
						'label' => 'Mini Link',
						'name' => 'journey_social_link',
						'type' => 'text',
					),

					// Choreo Card
					array(
						'key' => 'tab_choreo',
						'label' => 'Choreo Card',
						'type' => 'tab',
					),

					array(
						'key' => 'field_journey_choreo_tag',
						'label' => 'Tag',
						'name' => 'journey_choreo_tag',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_choreo_image',
						'label' => 'Image',
						'name' => 'journey_choreo_image',
						'type' => 'image',
						'return_format' => 'array',
					),

					array(
						'key' => 'field_journey_choreo_number',
						'label' => 'Number',
						'name' => 'journey_choreo_number',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_choreo_title',
						'label' => 'Title',
						'name' => 'journey_choreo_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_journey_choreo_content',
						'label' => 'Content',
						'name' => 'journey_choreo_content',
						'type' => 'textarea',
					),

					array(
						'key' => 'field_journey_choreo_link',
						'label' => 'Mini Link',
						'name' => 'journey_choreo_link',
						'type' => 'text',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/journey-home-mockup-section',
						),
					),
				),

			));
		}

		// Styles Strip Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_styles_strip',
				'title' => 'Styles Strip Block',

				'fields' => array(

					array(
						'key'           => 'field_styles_description',
						'label'         => 'Description',
						'name'          => 'styles_description',
						'type'          => 'wysiwyg',
						'tabs'          => 'all',
						'toolbar'       => 'basic',
						'media_upload'  => 0,
					),

					array(
						'key'          => 'field_styles_tags',
						'label'        => 'Dance Styles',
						'name'         => 'styles_tags',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Style',

						'sub_fields' => array(
							array(
								'key'   => 'field_style_name',
								'label' => 'Style Name',
								'name'  => 'style_name',
								'type'  => 'text',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/styles-strip',
						),
					),
				),

			));
		}

		// Kept Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_kept_section',
				'title' => 'Kept Section Block',

				'fields' => array(

					array(
						'key'   => 'field_kept_label',
						'label' => 'Top Label',
						'name'  => 'kept_label',
						'type'  => 'textarea',
						'rows'  => 3,
					),

					array(
						'key'   => 'field_kept_heading',
						'label' => 'Heading',
						'name'  => 'kept_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_kept_description',
						'label' => 'Description',
						'name'  => 'kept_description',
						'type'  => 'textarea',
						'rows'  => 3,
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/kept-section',
						),
					),
				),

			));
		}

		// Terms Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_terms_section',
				'title' => 'Terms Section',

				'fields' => array(

					array(
						'key'   => 'field_sidebar_label',
						'label' => 'Sidebar Label',
						'name'  => 'sidebar_label',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_sidebar_items',
						'label'        => 'Sidebar Items',
						'name'         => 'sidebar_items',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Item',

						'sub_fields' => array(

							array(
								'key'   => 'field_sidebar_item_number',
								'label' => 'Number',
								'name'  => 'number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_sidebar_item_anchor',
								'label' => 'Anchor ID',
								'name'  => 'anchor_id',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_sidebar_item_title',
								'label' => 'Title',
								'name'  => 'title',
								'type'  => 'text',
							),

						),
					),

					array(
						'key'   => 'field_sidebar_card_text',
						'label' => 'Sidebar Card Text',
						'name'  => 'sidebar_card_text',
						'type'  => 'textarea',
					),

					array(
						'key'   => 'field_sidebar_button',
						'label' => 'Sidebar Button',
						'name'  => 'sidebar_button',
						'type'  => 'link',
					),

					array(
						'key'          => 'field_terms',
						'label'        => 'Terms',
						'name'         => 'terms',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Term',

						'sub_fields' => array(

							array(
								'key'   => 'field_term_number',
								'label' => 'Number',
								'name'  => 'number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_term_anchor',
								'label' => 'Anchor ID',
								'name'  => 'anchor_id',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_term_heading',
								'label' => 'Heading',
								'name'  => 'heading',
								'type'  => 'text',
							),

							array(
								'key'          => 'field_term_content',
								'label'        => 'Content',
								'name'         => 'content',
								'type'         => 'wysiwyg',
								'toolbar'      => 'basic',
								'media_upload' => 0,
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/terms-section',
						),
					),
				),

			));
		}

		// Schedule Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_schedule_section',
				'title' => 'Schedule Section',

				'fields' => array(

					array(
						'key'   => 'field_schedule_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'schedule_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_schedule_heading',
						'label' => 'Heading',
						'name'  => 'schedule_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_schedule_description',
						'label' => 'Description',
						'name'  => 'schedule_description',
						'type'  => 'textarea',
						'rows'  => 3,
					),

					array(
						'key'   => 'field_member_callout_title',
						'label' => 'Member Callout Title',
						'name'  => 'member_callout_title',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_member_callout_description',
						'label'        => 'Member Callout Description',
						'name'         => 'member_callout_description',
						'type'         => 'wysiwyg',
						'toolbar'      => 'basic',
						'media_upload' => 0,
					),

					array(
						'key'   => 'field_member_login_title',
						'label' => 'Member Login Title',
						'name'  => 'member_login_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_member_login_description',
						'label' => 'Member Login Description',
						'name'  => 'member_login_description',
						'type'  => 'textarea',
						'rows'  => 2,
					),

					array(
						'key'          => 'field_schedule_filters',
						'label'        => 'Schedule Filters',
						'name'         => 'schedule_filters',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Filter',

						'sub_fields' => array(

							array(
								'key'   => 'field_filter_label',
								'label' => 'Filter Label',
								'name'  => 'filter_label',
								'type'  => 'text',
							),

							array(
								'key'          => 'field_filter_options',
								'label'        => 'Filter Options',
								'name'         => 'filter_options',
								'type'         => 'repeater',
								'layout'       => 'table',
								'button_label' => 'Add Option',

								'sub_fields' => array(

									array(
										'key'   => 'field_option_text',
										'label' => 'Option Text',
										'name'  => 'option_text',
										'type'  => 'text',
									),

								),

							),

						),

					),

					array(
						'key'   => 'field_schedule_widget_title',
						'label' => 'Schedule Widget Title',
						'name'  => 'schedule_widget_title',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_schedule_widget_description',
						'label' => 'Schedule Widget Description',
						'name'  => 'schedule_widget_description',
						'type'  => 'textarea',
						'rows'  => 2,
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/schedule-section',
						),
					),
				),

			));
		}

		// First Class Section
		if (function_exists('acf_add_local_field_group')) {

			acf_add_local_field_group(array(

				'key'   => 'group_first_class',
				'title' => 'First Class',

				'fields' => array(

					array(
						'key'   => 'field_first_class_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'first_class_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_first_class_heading',
						'label' => 'Heading',
						'name'  => 'first_class_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_first_class_items',
						'label'        => 'Remember Items',
						'name'         => 'first_class_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Item',

						'sub_fields' => array(

							array(
								'key'          => 'field_first_class_item_content',
								'label'        => 'Content',
								'name'         => 'content',
								'type'         => 'wysiwyg',
								'toolbar'      => 'basic',
								'media_upload' => 0,
							),
						),
					),
				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/first-class',
						),
					),
				),
			));
		}

		// What tO experct section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_first_class_section',
				'title' => 'First Class Section',

				'fields' => array(

					array(
						'key'   => 'field_first_class_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'first_class_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_first_class_heading',
						'label' => 'Heading',
						'name'  => 'first_class_heading',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_studenthub_first_class_items',
						'label'        => 'Remember List',
						'name'         => 'studenthub_first_class_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Item',

						'sub_fields' => array(

							array(
								'key'          => 'field_studenthub_content',
								'label'        => 'Content',
								'name'         => 'studenthub_content',
								'type'         => 'wysiwyg',
								'toolbar'      => 'basic',
								'media_upload' => 0,
							),

						),

					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/studenthub-first-class-section',
						),
					),
				),

			));
		}

		// StudentHub Level Description
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_studenthub_level_description_section',
				'title' => 'StudentHub Level Description Section',

				'fields' => array(

					array(
						'key'   => 'field_studenthub_level_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'studenthub_level_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_studenthub_level_heading',
						'label' => 'Heading',
						'name'  => 'studenthub_level_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_studenthub_level_description',
						'label' => 'Description',
						'name'  => 'studenthub_level_description',
						'type'  => 'textarea',
					),

					array(
						'key'          => 'field_studenthub_level_cards',
						'label'        => 'Level Cards',
						'name'         => 'studenthub_level_cards',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Level',

						'sub_fields' => array(

							array(
								'key'   => 'field_studenthub_level_number',
								'label' => 'Level Number',
								'name'  => 'studenthub_level_number',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_studenthub_level_title',
								'label' => 'Level Title',
								'name'  => 'studenthub_level_title',
								'type'  => 'text',
							),

							array(
								'key'          => 'field_studenthub_level_content',
								'label'        => 'Content',
								'name'         => 'studenthub_level_content',
								'type'         => 'wysiwyg',
								'toolbar'      => 'basic',
								'media_upload' => 0,
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/studenthub-level-description-section',
						),
					),
				),

			));
		}

		// Curriculum Box Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_curriculum_box_section',
				'title' => 'Curriculum Box Section',

				'fields' => array(

					array(
						'key'   => 'field_curriculum_box_label',
						'label' => 'Curriculum Label',
						'name'  => 'curriculum_box_label',
						'type'  => 'text',
					),

					array(
						'key'          => 'field_curriculum_box_items',
						'label'        => 'Curriculum Path',
						'name'         => 'curriculum_box_items',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Level',

						'sub_fields' => array(

							array(
								'key'   => 'field_curriculum_box_circle',
								'label' => 'Circle Text',
								'name'  => 'curriculum_box_circle',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_curriculum_box_meta',
								'label' => 'Meta Text',
								'name'  => 'curriculum_box_meta',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_curriculum_box_start',
								'label' => 'Start Node',
								'name'  => 'curriculum_box_start',
								'type'  => 'true_false',
								'ui'    => 1,
							),

						),

					),

					array(
						'key'          => 'field_curriculum_box_features',
						'label'        => 'Curriculum Features',
						'name'         => 'curriculum_box_features',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Feature',

						'sub_fields' => array(

							array(
								'key'   => 'field_curriculum_box_feature_svg',
								'label' => 'SVG Icon',
								'name'  => 'curriculum_box_feature_svg',
								'type'  => 'textarea',
								'rows'  => 8,
							),

							array(
								'key'   => 'field_curriculum_box_feature_text',
								'label' => 'Feature Text',
								'name'  => 'curriculum_box_feature_text',
								'type'  => 'text',
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/curriculum-box-section',
						),
					),
				),

			));
		}

		// Beyond StudentHub Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_studenthub_mockup_beyond_section',
				'title' => 'StudentHub Mockup Beyond Section',

				'fields' => array(

					array(
						'key'   => 'field_studenthub_mockup_beyond_eyebrow',
						'label' => 'Section Eyebrow',
						'name'  => 'studenthub_mockup_beyond_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_studenthub_mockup_beyond_heading',
						'label' => 'Section Heading',
						'name'  => 'studenthub_mockup_beyond_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_studenthub_mockup_beyond_description',
						'label' => 'Section Description',
						'name'  => 'studenthub_mockup_beyond_description',
						'type'  => 'textarea',
					),

					array(
						'key'          => 'field_studenthub_mockup_blocks',
						'label'        => 'Feature Blocks',
						'name'         => 'studenthub_mockup_blocks',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Block',

						'sub_fields' => array(

							array(
								'key'   => 'field_studenthub_mockup_layout',
								'label' => 'Layout',
								'name'  => 'studenthub_mockup_layout',
								'type'  => 'select',
								'choices' => array(
									'split'  => 'Split Images',
									'single' => 'Single Image',
								),
								'default_value' => 'split',
								'ui' => 1,
							),

							array(
								'key'   => 'field_studenthub_mockup_reverse_layout',
								'label' => 'Reverse Layout',
								'name'  => 'studenthub_mockup_reverse_layout',
								'type'  => 'true_false',
								'ui'    => 1,
							),

							array(
								'key'   => 'field_studenthub_mockup_eyebrow',
								'label' => 'Eyebrow',
								'name'  => 'studenthub_mockup_eyebrow',
								'type'  => 'text',
							),

							array(
								'key'   => 'field_studenthub_mockup_heading',
								'label' => 'Heading',
								'name'  => 'studenthub_mockup_heading',
								'type'  => 'text',
							),

							array(
								'key'          => 'field_studenthub_mockup_description',
								'label'        => 'Description',
								'name'         => 'studenthub_mockup_description',
								'type'         => 'wysiwyg',
								'toolbar'      => 'basic',
								'media_upload' => 0,
							),

							// Image One
							array(
								'key'   => 'field_studenthub_mockup_image_one',
								'label' => 'Image One',
								'name'  => 'studenthub_mockup_image_one',
								'type'  => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
								'library'       => 'all',
							),

							// Image Two (Only for Split Layout)
							array(
								'key'   => 'field_studenthub_mockup_image_two',
								'label' => 'Image Two',
								'name'  => 'studenthub_mockup_image_two',
								'type'  => 'image',
								'return_format' => 'array',
								'preview_size'  => 'medium',
								'library'       => 'all',
								'conditional_logic' => array(
									array(
										array(
											'field'    => 'field_studenthub_mockup_layout',
											'operator' => '==',
											'value'    => 'split',
										),
									),
								),
							),

							array(
								'key'          => 'field_studenthub_mockup_feature_list',
								'label'        => 'Feature List',
								'name'         => 'studenthub_mockup_feature_list',
								'type'         => 'repeater',
								'layout'       => 'table',
								'button_label' => 'Add Feature',

								'sub_fields' => array(

									array(
										'key'   => 'field_studenthub_mockup_feature_svg',
										'label' => 'SVG',
										'name'  => 'studenthub_mockup_feature_svg',
										'type'  => 'textarea',
										'rows'  => 6,
									),

									array(
										'key'   => 'field_studenthub_mockup_feature_text',
										'label' => 'Feature Text',
										'name'  => 'studenthub_mockup_feature_text',
										'type'  => 'text',
									),

								),

							),

							array(
								'key'   => 'field_studenthub_mockup_button',
								'label' => 'Button',
								'name'  => 'studenthub_mockup_button',
								'type'  => 'link',
							),

						),

					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/beyond-studenthub',
						),
					),
				),

			));
		}

		// Join Team Into Section
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_jointeam_into_section',
				'title' => 'Join Team Into Section',

				'fields' => array(

					array(
						'key'   => 'field_jointeam_intro_eyebrow',
						'label' => 'Eyebrow',
						'name'  => 'jointeam_intro_eyebrow',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_jointeam_intro_heading',
						'label' => 'Heading',
						'name'  => 'jointeam_intro_heading',
						'type'  => 'text',
					),

					array(
						'key'   => 'field_jointeam_intro_content',
						'label' => 'Content',
						'name'  => 'jointeam_intro_content',
						'type'  => 'wysiwyg',
						'tabs' => 'all',
						'toolbar' => 'full',
						'media_upload' => 1,
					),

					array(
						'key'   => 'field_jointeam_intro_button',
						'label' => 'Button',
						'name'  => 'jointeam_intro_button',
						'type'  => 'link',
					),

					array(
						'key'   => 'field_jointeam_intro_image',
						'label' => 'Image',
						'name'  => 'jointeam_intro_image',
						'type'  => 'image',
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
					),

				),

				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/jointeam-into-section',
						),
					),
				),

			));
		}

		// Join Team Offer Strip
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(

				'key'   => 'group_jointeam_offer_strip',
				'title' => 'Join Team Offer Strip',

				'fields' => array(

					array(
						'key'          => 'field_jointeam_offer_cards',
						'label'        => 'Offer Cards',
						'name'         => 'jointeam_offer_cards',
						'type'         => 'repeater',
						'layout'       => 'block',
						'button_label' => 'Add Card',

						'sub_fields' => array(

							array(
								'key'   => 'field_jointeam_offer_icon',
								'label' => 'SVG Icon',
								'name'  => 'jointeam_offer_icon',
								'type'  => 'textarea',
								'rows'  => 8,
								'new_lines' => '',
							),
							array(
								'key'   => 'field_jointeam_offer_title',
								'label' => 'Title',
								'name'  => 'title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_jointeam_offer_description',
								'label' => 'Description',
								'name'  => 'description',
								'type'  => 'textarea',
								'rows'  => 3,
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/jointeam-offer-strip',
						),
					),
				),

			));
		}

		// Join Team CTA Banner
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_jointeam_cta_banner',
				'title' => 'Join Team CTA Banner',
				'fields' => array(
					array(
						'key'           => 'field_jointeam_cta_heading',
						'label'         => 'Heading',
						'name'          => 'jointeam_cta_heading',
						'type'          => 'text',
						'default_value' => 'Ready to apply?',
					),
					array(
						'key'           => 'field_jointeam_cta_content',
						'label'         => 'Content',
						'name'          => 'jointeam_cta_content',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => 'Thank you in advance for your interest in joining our team and spreading the love of Latin dance!',
					),
					array(
						'key'           => 'field_jointeam_cta_button',
						'label'         => 'Button',
						'name'          => 'jointeam_cta_button',
						'type'          => 'link',
						'default_value' => array(
							'title'  => 'Apply Now',
							'url'    => 'https://forms.gle/i9528LH3YSxjS9Y66',
							'target' => '_blank',
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/jointeam-cta-banner',
						),
					),
				),

			));
		}

		// Style We Teach Strip
		if (function_exists('acf_add_local_field_group')) {
			acf_add_local_field_group(array(
				'key'   => 'group_style_we_teach_strip',
				'title' => 'Style We Teach Strip',

				'fields' => array(
					array(
						'key'           => 'field_styles_description',
						'label'         => 'Description',
						'name'          => 'styles_description',
						'type'          => 'textarea',
						'rows'          => 3,
						'default_value' => 'We specialize in Salsa and Bachata, and also teach Kizomba, Latin Hustle, Cha Cha, Merengue, Casino Rueda, shines and body movement.',
					),
					array(
						'key'          => 'field_styles_tags',
						'label'        => 'Dance Styles',
						'name'         => 'styles_tags',
						'type'         => 'repeater',
						'layout'       => 'table',
						'button_label' => 'Add Style',
						'sub_fields' => array(
							array(
								'key'           => 'field_style_name',
								'label'         => 'Style Name',
								'name'          => 'style_name',
								'type'          => 'text',
								'default_value' => 'Salsa',
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/style-we-teach-strip',
						),
					),
				),

			));
		}

		// Beyond The Core Program
		if ( function_exists( 'acf_add_local_field_group' ) ) {

			acf_add_local_field_group(array(
				'key' => 'group_beyond_the_core_program',
				'title' => 'Beyond The Core Program',
				'fields' => array(

					array(
						'key' => 'field_section_label_beyond',
						'label' => 'Section Label',
						'name' => 'section_label_beyond',
						'type' => 'text',
						'default_value' => 'Beyond the core program',
					),

					array(
						'key' => 'field_section_title_beyond_students',
						'label' => 'Section Title',
						'name' => 'section_title_beyond_students',
						'type' => 'text',
						'default_value' => 'More ways to dance',
					),

					array(
						'key' => 'field_section_text_beyond_students',
						'label' => 'Section Description',
						'name' => 'section_text_beyond_students',
						'type' => 'textarea',
						'rows' => 4,
					),

					array(
						'key' => 'field_section_drop_in_workshops',
						'label' => 'Drop-in Workshops Title',
						'name' => 'section_drop_in_workshops',
						'type' => 'text',
						'default_value' => 'Drop-in workshops',
					),

					array(
						'key' => 'field_section_drop_in_h2_workshops',
						'label' => 'sharpen one skill at a time',
						'name' => 'section_drop_in_h2_workshops',
						'type' => 'text',
						'default_value' => 'Sharpen one skill at a time',
					),
					array(
						'key' => 'field_section_drop_in_p_workshops',
						'label' => 'Drop-in workshops description',
						'name' => 'section_drop_in_p_workshops',
						'type' => 'textarea',
						'default_value' => 'No multi-week commitment. Just show up for the topic you want. Great for filling gaps in your foundation or trying a style outside your regular course.'
					),
					array(
						'key' => 'field_section_drop_in_feature_list',
						'label' => 'Feature List',
						'name' => 'section_drop_in_feature_list',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'min' => 1,
						'sub_fields' => array(
							array(
								'key' => 'field_section_drop_in_feature_icon',
								'label' => 'Feature Icon',
								'name' => 'feature_icon',
								'type' => 'textarea',
							),
							array(
								'key' => 'field_section_drop_in_feature_text',
								'label' => 'Feature Text',
								'name' => 'feature_text',
								'type' => 'text',
								'required' => 1,
								'placeholder' => 'Enter feature text',
							),
						),
					),
					array(
						'key' => 'field_section_drop_in_button',
						'label' => 'Drop-in Workshops Button',
						'name' => 'section_drop_in_button',
						'type' => 'link',
					),
					array(
						'key' => 'field_section_social_event_text',
						'label' => 'Social Events Text',
						'name' => 'section_social_event_text',
						'type' => 'text',
						'default_value' => 'Social Events',
					),
					array(
						'key' => 'field_section_social_event_description',
						'label' => 'Social Events Description',
						'name' => 'section_social_event_description',
						'type' => 'text',
						'default_value' => 'Where the classroom meets the dance floor'
					),
					array(
						'key' => 'field_section_social_event_p',
						'label' => 'Social Events Paragraph',
						'name' => 'section_social_event_p',
						'type' => 'textarea',
						'default_value' => 'Where the classroom meets the dance floor'
					),
					array(
						'key' => 'field_community_feature_list',
						'label' => 'Feature List',
						'name' => 'community_feature_list',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'min' => 1,
						'sub_fields' => array(
							// Feature Text
							array(
								'key' => 'field_community_feature_text',
								'label' => 'Feature Text',
								'name' => 'feature_text',
								'type' => 'text',
								'required' => 1,
								'placeholder' => 'Enter feature text',
							),
						),
					),
					array(
						'key' => 'field_section_social_event_button',
						'label' => 'Social Events Button',
						'name' => 'section_social_event_button',
						'type' => 'link',
					),
					array(
						'key' => 'field_section_Choreo_Club_text',
						'label' => 'Choreo Club Text',
						'name' => 'section_Choreo_Club_text',
						'type' => 'text',
						'default_value' => 'Choreo Club',
					),
					array(
						'key' => 'field_section_Choreo_h2_take',
						'label' => 'Choreo Club H2 Text',
						'name' => 'section_Choreo_h2_take',
						'type' => 'text',
						'default_value' => 'Take it to the stage',
					),
					array(
						'key' => 'field_section_choreo_description',
						'label' => 'Choreo Club Description',
						'name' => 'section_choreo_description',
						'type' => 'textarea',
						'default_value' => 'When you’re ready for a bigger challenge',
					),
					array(
						'key' => 'field_performance_feature_list',
						'label' => 'Feature List',
						'name' => 'performance_feature_list',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'min' => 1,
						'sub_fields' => array(
							// Feature Text
							array(
								'key' => 'field_performance_feature_text',
								'label' => 'Feature Text',
								'name' => 'section_choreo_feature_text',
								'type' => 'text',
								'required' => 1,
								'placeholder' => 'Enter feature text',
							),
						),
					),
					array(
						 'key' => 'field_section_choreo_button',
						 'label' => 'Choreo Club Button',
						 'name' => 'section_choreo_button',
						 'type' => 'link',
					)
				),
				'location' => array(
					array(
						array(
							'param'    => 'block',
							'operator' => '==',
							'value'    => 'acf/beyond-the-core-program',
						),
					),
				),
			));
		}

		// First Class Expect Section
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(

				'key' => 'group_first_class_expect',
				'title' => 'First Class Expect',

				'fields' => array(

					array(
						'key' => 'field_first_class_eyebrow_remember',
						'label' => 'Eyebrow',
						'name' => 'first_class_eyebrow_remember',
						'type' => 'text',
					),

					array(
						'key' => 'field_first_class_eyebrow_remember_title',
						'label' => 'Title',
						'name' => 'first_class_eyebrow_remember_title',
						'type' => 'text',
					),

					array(
						'key' => 'field_first_class_remember_eyebrow_remember_list',
						'label' => 'Remember List',
						'name' => 'first_class_remember_eyebrow_remember_list',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Remember Item',
						'min' => 1,

						'sub_fields' => array(

							array(
								'key' => 'field_first_class_remember_text',
								'label' => 'Remember Text',
								'name' => 'remember_text',
								'type' => 'textarea',
								'rows' => 2,
							),

						),
					),

				),

				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/first-class-expect',
						),
					),
				),

				'menu_order' => 0,
				'position' => 'normal',
				'style' => 'default',
				'label_placement' => 'top',
				'instruction_placement' => 'label',
				'active' => true,

			));
		}

		// Schedule Section Moved Right
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(

				'key' => 'group_schedule_section_moved_right',
				'title' => 'Schedule Section Moved Right',

				'fields' => array(
					array(
						'key' => 'field_schedule_section_eyebrow',
						'label' => 'Eyebrow',
						'name' => 'schedule_section_eyebrow',
						'type' => 'text',
						'default_value' => 'Class schedule',
					),
					array(
						'key' => 'field_schedule_moved_right',
						'label' => 'Heading',
						'name' => 'schedule_moved_right',
						'type' => 'text',
						'default_value' => 'Upcoming Schedule',
					),
					array(
						'key' => 'field_schedule_filter_location',
						'label' => 'Filter Location',
						'name' => 'schedule_filter_location',
						'type' => 'text',
						'default_value' => 'Filter by style or level',
					),
					array(
						'key' => 'field_schedule_about_membership',
						'label' => 'About Membership',
						'name' => 'schedule_about_membership',
						'type' => 'text',
						'default_value' => 'About Membership',
					),
					array(
						'key' => 'field_schedule_about_membership_p',
						'label' => 'About Membership Paragraph',
						'name' => 'schedule_about_membership_p',
						'type' => 'wysiwyg',
						'default_value' => 'Members pay $150/month for unlimited access to classes across all locations.',
					),
					array(
						'key' => 'field_schedule_member_login',
						'label' => 'Member Login',
						'name' => 'schedule_member_login',
						'type' => 'text',
						'default_value' => 'Member Login',
					),
					array(
						'key' => 'field_schedule_member_login_p',
						'label' => 'Member Login Paragraph',
						'name' => 'schedule_member_login_p',
						'type' => 'textarea',
						'default_value' => 'ActivityMessenger widget loads here — students log in to manage their membership',
					),
					array(
						'key' => 'field_schedule_filters_row',
						'label' => 'Filters',
						'name' => 'schedule_filters_row',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Filter',
						'min' => 1,
						'sub_fields' => array(
							array(
								'key' => 'field_schedule_filter_label',
								'label' => 'Label',
								'name' => 'filter_label',
								'type' => 'text',
							),
							array(
								'key' => 'field_schedule_filter_options',
								'label' => 'Options',
								'name' => 'filter_options',
								'type' => 'repeater',
								'layout' => 'table',
								'button_label' => 'Add Option',
								'sub_fields' => array(
									array(
										'key' => 'field_schedule_filter_option',
										'label' => 'Option',
										'name' => 'option',
										'type' => 'text',
									),

								),
							),

						),
					),
					array(
						'key' => 'field_schedule_loading_text',
						'label' => 'Loading Text',
						'name' => 'schedule_loading_text',
						'type' => 'text',
						'default_value' => 'Loading...',
					),
					array(
						'key' => 'field_schedule_loading_text_p',
						'label' => 'Loading Paragraph',
						'name' => 'schedule_loading_text_p',
						'type' => 'textarea',
						'default_value' => 'ActivityMessenger calendar widget loads here',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/schedule-section-moved-right',
						),
					),
				),
			));
		}

		// Level Descriptions
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(

				'key' => 'group_level_descriptions',
				'title' => 'Level Descriptions',

				'fields' => array(

					array(
						'key' => 'field_level_descriptions_your_progression',
						'label' => 'Eyebrow',
						'name' => 'level_descriptions_your_progression',
						'type' => 'text',
						'default_value' => 'Your progression',
					),
					array(
						'key' => 'field_level_descriptions_h2',
						'label' => 'Heading',
						'name' => 'level_descriptions_h2',
						'type' => 'text',
						'default_value' => 'Level Descriptions',
					),
					array(
						'key' => 'field_level_descriptions_p_tag',
						'label' => 'Paragraph Tag',
						'name' => 'level_descriptions_p_tag',
						'type' => 'textarea',
						'default_value' => 'A clear, structured path from your very first class to confident social dancing.',
					),
					array(
						'key' => 'field_level_descriptions_list',
						'label' => 'Level Descriptions',
						'name' => 'level_descriptions_list',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Level',
						'min' => 1,

						'sub_fields' => array(

							array(
								'key' => 'field_level_description_number',
								'label' => 'Level Number',
								'name' => 'level_number',
								'type' => 'text',
							),

							array(
								'key' => 'field_level_description_title',
								'label' => 'Title',
								'name' => 'level_title',
								'type' => 'text',
							),

							array(
								'key' => 'field_level_description_content',
								'label' => 'Description',
								'name' => 'level_description',
								'type' => 'textarea',
								'rows' => 5,
							),
						),
					),
					array(
						'key' => 'field_level_our_curriculum_path',
						'label' => 'Title',
						'name' => 'level_our_curriculum_path',
						'type' => 'text',
						'default_value' => 'Our curriculum path',
					),
					array(
						'key' => 'field_student_path_mockup_curriculum_path',
						'label' => 'Curriculum Path',
						'name' => 'student_path_mockup_curriculum_path',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Path',
						'min' => 1,

						'sub_fields' => array(

							array(
								'key' => 'field_student_path_mockup_path_level',
								'label' => 'Level',
								'name' => 'student_path_mockup_path_level',
								'type' => 'textarea',
							),

							array(
								'key' => 'field_student_path_mockup_path_duration',
								'label' => 'Duration',
								'name' => 'student_path_mockup_path_duration',
								'type' => 'text',
							),

						),
					),
					array(
						'key' => 'field_student_path_mockup_curriculum_features',
						'label' => 'Curriculum Features',
						'name' => 'student_path_mockup_curriculum_features',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Feature',
						'min' => 1,

						'sub_fields' => array(

							array(
								'key' => 'field_student_path_mockup_feature_icon',
								'label' => 'Icon',
								'name' => 'student_path_mockup_feature_icon',
								'type' => 'text',
							),

							array(
								'key' => 'field_student_path_mockup_feature_text',
								'label' => 'Feature Text',
								'name' => 'student_path_mockup_feature_text',
								'type' => 'text',
							),

						),
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/level-descriptions',
						),
					),
				),
			));
		}

		// Ambassador Mockup Section
		if ( function_exists( 'acf_add_local_field_group' ) ) {
			acf_add_local_field_group(array(

				'key' => 'group_ambassador_mockup',
				'title' => 'Ambassador Mockup',

				'fields' => array(
					array(
						'key' => 'field_ambassador_intro_section_mockup',
						'label' => 'Eyebrow',
						'name' => 'ambassador_intro_section_mockup',
						'type' => 'text',
						'default_value' => 'Why we built this program',
					),
					array(
						'key' => 'field_ambassador_intro_h2',
						'label' => 'Eyebrow',
						'name' => 'ambassador_intro_h2',
						'type' => 'text',
						'default_value' => 'Dance is more than movement',
					),
					array(
						'key' => 'field_ambassador_intro_content',
						'label' => 'Eyebrow',
						'name' => 'ambassador_intro_content',
						'type' => 'wysiwyg',
					),
					array(
						'key' => 'field_ambassador_intro_apply_now',
						'label' => 'Eyebrow',
						'name' => 'ambassador_intro_apply_now',
						'type' => 'link',
					),
					array(
						'key' => 'field_commit_cards',
						'label' => 'Commitment Cards',
						'name' => 'commit_cards',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Commitment',
						'min' => 1,
						'sub_fields' => array(

						// SVG Icon
						array(
							'key' => 'field_commitment_strip_icon',
							'label' => 'SVG Icon',
							'name' => 'icon',
							'type' => 'textarea',
							'rows' => 5,
							'new_lines' => '',
							'placeholder' => '<svg width="18" height="18" ...></svg>',
						),

						// Title
						array(
							'key' => 'field_commitment_strip_title',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'required' => 1,
						),

						// Description
						array(
							'key' => 'field_commitment_strip_description',
							'label' => 'Description',
							'name' => 'description',
							'type' => 'text',
							'required' => 1,
						),
					),
					),
					array(
						'key' => 'field_ambassador_roles_section_text',
						'label' => 'Perks',
						'name' => 'ambassador_roles_section_text',
						'type' => 'text',
						'default_value' => 'Where you can help',
					),
					array(
						'key' => 'field_ambassador_roles_section_h2',
						'label' => 'Perks',
						'name' => 'ambassador_roles_section_h2',
						'type' => 'text',
						'default_value' => 'Ambassador roles',
					),
					array(
						'key' => 'field_ambassador_roles_section_p',
						'label' => 'Perks',
						'name' => 'ambassador_roles_section_p',
						'type' => 'text',
					),
					array(
						'key' => 'field_roles_section_ambassador',
						'label' => 'Ambassador Roles',
						'name' => 'roles_section_ambassador',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Role',
						'sub_fields' => array(

							array(
								'key' => 'field_roles_section_ambassador_badge',
								'label' => 'Badge',
								'name' => 'roles_section_ambassador_badge',
								'type' => 'text',
								'placeholder' => 'Administrative',
							),

							array(
								'key' => 'field_roles_section_ambassador_title',
								'label' => 'Role Title',
								'name' => 'roles_section_ambassador_title',
								'type' => 'text',
								'placeholder' => 'Administrative Support',
							),

							array(
								'key' => 'field_roles_section_ambassador_description',
								'label' => 'Description',
								'name' => 'roles_section_ambassador_description',
								'type' => 'textarea',
								'rows' => 4,
							),

						),
					),
					array(
						'key' => 'field_ambassador_perks_section',
						'label' => 'Mockup',
						'name' => 'ambassador_perks_section',
						'type' => 'text',
					),
					array(
						'key' => 'field_ambassador_perks_section_h2',
						'label' => 'Mockup',
						'name' => 'ambassador_perks_section_h2',
						'type' => 'text',
					),
					array(
						'key' => 'field_ambassador_perks_section_p',
						'label' => 'Mockup',
						'name' => 'ambassador_perks_section_p',
						'type' => 'text',
					),
					array(
						'key' => 'field_perks_grid',
						'label' => 'Perks Grid',
						'name' => 'perks_grid',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Perks grid',
						'min' => 1,
						'sub_fields' => array(
						// SVG Icon
						array(
							'key' => 'field_perks_grid_icon',
							'label' => 'SVG Icon',
							'name' => 'icon',
							'type' => 'textarea',
							'rows' => 5,
							'new_lines' => '',
							'placeholder' => '<svg width="18" height="18" ...></svg>',
						),
						array(
							'key' => 'field_perks_grid_section_h3',
							'label' => 'Perks Grid',
							'name' => 'perks_grid_section_h3',
							'type' => 'text',
						),
						array(
							'key' => 'field_perks_grid_section_p',
							'label' => 'Perks Grid',
							'name' => 'perks_grid_section_p',
							'type' => 'text',
						),
					  ),
					),
					array(
						'key' => 'field_cta_banner_title',
						'label' => 'CTA Banner Title',
						'name' => 'cta_banner_title',
						'type' => 'text',
					),
					array(
						'key' => 'field_cta_banner_content',
						'label' => 'CTA Banner Content',
						'name' => 'cta_banner_content',
						'type' => 'text',
					),
					array(
						'key' => 'field_ambassador_perks_cta_button',
						'label' => 'CTA Banner Button',
						'name' => 'ambassador_perks_cta_button',
						'type' => 'link',
					),
					array(
						'key' => 'field_ambassador_filter_bar',
						'label' => 'Filter Bar',
						'name' => 'ambassador_filter_bar',
						'type' => 'repeater',
						'layout' => 'table',
						'button_label' => 'Add Filter',
						'min' => 1,
						'sub_fields' => array(
							array(
								'key' => 'field_ambassador_filter_label',
								'label' => 'Filter Label',
								'name' => 'ambassador_filter_label',
								'type' => 'text',
								'placeholder' => 'All Events',
							),
						),
					),
					array(
						'key' => 'field_ambassador_events_grid',
						'label' => 'Events Grid',
						'name' => 'ambassador_events_grid',
						'type' => 'repeater',
						'layout' => 'block',
						'button_label' => 'Add Event',
						'min' => 1,
						'sub_fields' => array(
							array(
								'key' => 'field_ambassador_events_grid_date',
								'label' => 'Date',
								'name' => 'ambassador_events_grid_date',
								'type' => 'number',
								'placeholder' => '26',
							),

							array(
								'key' => 'field_ambassador_events_grid_month',
								'label' => 'Month',
								'name' => 'ambassador_events_grid_month',
								'type' => 'text',
								'placeholder' => 'Jun',
							),

							array(
								'key' => 'field_ambassador_events_grid_tag',
								'label' => 'Event Tag',
								'name' => 'ambassador_events_grid_tag',
								'type' => 'text',
								'placeholder' => 'Bachata',
							),

							array(
								'key' => 'field_ambassador_events_grid_class',
								'label' => 'Event CSS Class',
								'name' => 'ambassador_events_grid_class',
								'type' => 'text',
								'placeholder' => 'ev-bachata',
							),

							array(
								'key' => 'field_ambassador_events_grid_type',
								'label' => 'Event Type',
								'name' => 'ambassador_events_grid_type',
								'type' => 'text',
								'placeholder' => 'Family Programs',
							),

							array(
								'key' => 'field_ambassador_events_grid_title',
								'label' => 'Event Title',
								'name' => 'ambassador_events_grid_title',
								'type' => 'text',
								'placeholder' => 'After-Hours Programs',
							),

							array(
								'key' => 'field_ambassador_events_grid_time',
								'label' => 'Event Time',
								'name' => 'ambassador_events_grid_time',
								'type' => 'text',
								'placeholder' => '7:50 pm',
							),

							array(
								'key' => 'field_ambassador_events_grid_event_location',
								'label' => 'Event Location',
								'name' => 'ambassador_events_grid_event_location',
								'type' => 'text',
								'placeholder' => 'Room 33',
							),

							array(
								'key' => 'field_ambassador_event_link',
								'label' => 'Event Link',
								'name' => 'ambassador_event_link',
								'type' => 'url',
								'placeholder' => 'https://example.com/event',
							),

						),
					),
					array(
						'key' => 'field_ambassador_more_note',
						'label' => 'Ambassador more note',
						'name' => 'ambassador_more_note',
						'type' => 'text',
					),
					array(
						'key' => 'field_ambassador_more_note_p',
						'label' => 'Ambassador more note',
						'name' => 'ambassador_more_note_p',
						'type' => 'textarea',
					),
				),
				'location' => array(
					array(
						array(
							'param' => 'block',
							'operator' => '==',
							'value' => 'acf/ambassador-mockup',
						),
					),
				),
			));
		}
	}
);
