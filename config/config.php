<?php

namespace WPD\BeaverPopups;

return (object) [
	'plugin_slug'                                 => $slug = 'wpd-bb-popup',
	'plugin_abbv'                                 => $abbv = wpd_get_abbreviation_from_slug( $slug, 'wpd', '_' ),
	'plugin_name'                                 => 'WPD Beaver Popups',
	'plugin_description'                          => '',
	'plugin_version'                              => $version = '1.1.0',
	'plugin_website'                              => 'https://beaverpopups.com',
	'plugin_author'                               => 'Doug Belchamber',
	'plugin_author_uri'                           => 'https://wpdevelopers.co.uk',
	'plugin_text_domain'                          => $wpd_text_domain = 'wpd-beaver-popups',
	'plugin_nonce'                                => 'wpd-bb-popups',
	'plugin_wp_minimum_version'                   => '4.7',
	'plugin_php_minimum_version'                  => '5.4',
	'plugin_bb_minimum_version'                   => '1.10.0',
	/**
	 * Namespace of our options inside wp_options table.
	 */
	'wp_options_prefix'                           => $options_prefix = __NAMESPACE__ . ':',
	'wp_options' => [
		'public'    => [
			/*
			 * Site option that stores site wide popups setup
			 */
			'OPTION_POPUPS_SITE'                        => 'SitePopups',

			/**
			 * Site option that stores custom post type related popups setup
			 */
			'OPTION_POPUPS_CPT'                         => 'CPTPopups',

			/**
			 * Meta key that holds post specific popup setup
			 */
			'POST_META_POPUPS'                          => 'SinglePopups',

			/**
			 * Meta key that holds term specific popup setup
			 */
			'TERM_META_POPUPS'                          => 'TermPopups',

			/**
			 * Custom post type for popup
			 */
			'CUSTOM_POST_TYPE_POPUP'                    => 'wpd-bb-popup',

			/**
			 * Disable popups sitewide options key
			 */
			'DISABLE_POPUPS_SITEWIDE_FOR_ADMINS_KEY'    => 'DisablePopupsSitewideForAdmins',
			'DISABLE_POPUPS_SITEWIDE_KEY'               => 'DisablePopupsSitewide',
			'CLICK_TRIGGER_POPUPS'                      => 'ClickTriggeredPopups'
		],
		'private' => [
			'prefix' => $options_prefix . 'Plugin\\',
			'options' => [
				'version' => [
					'name'    => 'Version',
					'default' => $version
				]
			]
		]
	],
	'transient_prefix'                            => $options_prefix . '\Transients',
	'plugin_menu_name'                            => __('Beaver Popups', $wpd_text_domain),
	'plugin_menu_icon'                            => Plugin::assetDistUri( 'images/wpd-beaver-popups-admin-icon.svg' ),
	'admin_page_slug'                             => $slug . '-settings',
	'shortcode_prefix'                            => $abbv,
];
