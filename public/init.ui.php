<?php

$_theme = APP_THEME;
$_nav = [
	'application_intel' => [
		'title' => 'Application Intel',
		'icon' => 'fal fa-info-circle',
		'items' => [
			'intel_analytics_dashboard' => [
				'title' => 'Analytics Dashboard',
				'url' => APP_URL.'/intel_analytics_dashboard.php'
			],
			'intel_marketing_dashboard' => [
				'title' => 'Marketing Dashboard',
				'url' => APP_URL.'/intel_marketing_dashboard.php'
			],
			'intel_introduction' => [
				'title' => 'Introduction',
				'url' => APP_URL.'/intel_introduction.php'
			],
			'intel_privacy' => [
				'title' => 'Privacy',
				'url' => APP_URL.'/intel_privacy.php'
			]
		]
	],
	'theme_settings' => [
		'title' => 'Theme Settings',
		'icon' => 'fal fa-cog',
		'items' => [
			'settings_how_it_works' => [
				'title' => 'How it works',
				'url' => APP_URL.'/settings_how_it_works.php'
			],
			'settings_layout_options' => [
				'title' => 'Layout Options',
				'url' => APP_URL.'/settings_layout_options.php'
			],
			'settings_theme_modes' => [
				'title' => 'Theme Modes (beta)',
				'url' => APP_URL.'/settings_theme_modes.php'
			],
			'settings_skin_options' => [
				'title' => 'Skin Options',
				'url' => APP_URL.'/settings_skin_options.php'
			],
			'settings_saving_db' => [
				'title' => 'Saving to Database',
				'url' => APP_URL.'/settings_saving_db.php'
			]
		]
	],
	'documentation' => [
		'title' => 'Documentation',
		'icon' => 'fal fa-book',
		'items' => [
			'docs_general' => [
				'title' => 'General Docs',
				'url' => APP_URL.'/docs_general.php'
			],
			'docs_flavors_editions' => [
				'title' => 'Flavors & Editions',
				'url' => APP_URL.'/docs_flavors_editions.php'
			],
			'docs_community_support' => [
				'title' => 'Community Support',
				'url' => APP_URL.'/docs_community_support.php'
			],
			'docs_premium_support' => [
				'title' => 'Premium Support',
				'url' => APP_URL.'/docs_premium_support.php'
			],
			'docs_licensing' => [
				'title' => 'Licensing',
				'url' => APP_URL.'/docs_licensing.php'
			],
			'docs_buildnotes' => [
				'title' => 'Build Notes',
				'url' => APP_URL.'/docs_buildnotes.php',
				'span' => [
					'text' => 'v4.6.3'
				]
			]
		]
	],
	[
		'title' => 'Basic Features',
		'group' => true,
	],
	'components' => [
		'title' => 'Components',
		'icon' => 'fal fa-wrench',
		'items' => [
			'php_utils' => [
				'title' => 'Utilities',
				'url' => APP_URL.'/php_utils.php'
			],
			'php_navigation' => [
				'title' => 'Navigation',
				'url' => APP_URL.'/php_navigation.php'
			],
			'php_tables' => [
				'title' => 'Tables',
				'url' => APP_URL.'/php_tables.php'
			],
			'controls' => [
				'title' => 'Controls',
				'items' => [
					'php_controls_select' => [
						'title' => 'Select',
						'url' => APP_URL.'/php_controls_select.php'
					],
					'php_controls_input' => [
						'title' => 'Input',
						'url' => APP_URL.'/php_controls_input.php'
					],
					'php_controls_button' => [
						'title' => 'Button',
						'url' => APP_URL.'/php_controls_button.php'
					],
					'php_controls_alert' => [
						'title' => 'Alert',
						'url' => APP_URL.'/php_controls_alert.php'
					]
				]
			]
		]
	],
	'database' => [
		'title' => 'Database',
		'icon' => 'fal fa-database',
		'items' => [
			'php_db_intro' => [
				'title' => 'Introduction',
				'url' => APP_URL.'/php_db_intro.php'
			],
			'php_db_users' => [
				'title' => 'Fetch Users',
				'url' => APP_URL.'/php_db_users.php'
			]
		]
	],
	'authentication' => [
		'title' => 'Authentication',
		'icon' => 'fal fa-lock',
		'items' => [
			'php_auth_docs' => [
				'title' => 'Documentation',
				'url' => APP_URL.'/php_auth_docs.php'
			],
			'php_auth_page' => [
				'title' => 'Authenticate Page',
				'url' => APP_URL.'/php_auth_page.php'
			],
			'php_auth_login' => [
				'title' => 'Login',
				'url' => APP_URL.'/php_auth_login.php'
			],
			'php_auth_logout' => [
				'title' => 'Logout',
				'url' => APP_URL.'/php_auth_logout.php'
			]
		]
	],
	'mailer' => [
		'title' => 'Mailer',
		'icon' => 'fal fa-envelope',
		'items' => [
			'php_mailer_docs' => [
				'title' => 'Documentation',
				'url' => APP_URL.'/php_mailer_docs.php'
			],
			'php_mailer_templates' => [
				'title' => 'Templates',
				'url' => APP_URL.'/php_mailer_templates.php'
			]
		]
	],
	[
		'title' => 'Advanced Features',
		'group' => true,
	],
	'rest_api' => [
		'title' => 'REST API',
		'icon' => 'fal fa-cloud',
		'items' => [
			'php_api_docs' => [
				'title' => 'Documentation',
				'url' => APP_URL.'/php_api_docs.php'
			],
			'php_api_playground' => [
				'title' => 'Playground',
				'url' => APP_URL.'/php_api_playground.php'
			]
		]
	],
	'security' => [
		'title' => 'Security',
		'icon' => 'fal fa-lock',
		'items' => [
			'php_security_intro' => [
				'title' => 'Introduction',
				'url' => APP_URL.'/php_security_intro.php'
			],
			'php_security_email_verify' => [
				'title' => 'Email Verification',
				'url' => APP_URL.'/php_security_email_verify.php'
			],
			'php_security_phone_verify' => [
				'title' => 'Phone Verification',
				'url' => APP_URL.'/php_security_phone_verify.php'
			],
			'php_security_2fa' => [
				'title' => 'Two-Factor Auth',
				'url' => APP_URL.'/php_security_2fa.php'
			]
		]
	],
	[
		'title' => 'Tools & Components',
		'group' => true,
	],
	'ui_components' => [
		'title' => 'UI Components',
		'icon' => 'fal fa-window',
		'items' => [
			'ui_alerts' => [
				'title' => 'Alerts',
				'url' => APP_URL.'/ui_alerts.php'
			],
			'ui_accordion' => [
				'title' => 'Accordions',
				'url' => APP_URL.'/ui_accordion.php'
			],
			'ui_badges' => [
				'title' => 'Badges',
				'url' => APP_URL.'/ui_badges.php'
			],
			'ui_breadcrumbs' => [
				'title' => 'Breadcrumbs',
				'url' => APP_URL.'/ui_breadcrumbs.php'
			],
			'ui_buttons' => [
				'title' => 'Buttons',
				'url' => APP_URL.'/ui_buttons.php'
			],
			'ui_button_group' => [
				'title' => 'Button Group',
				'url' => APP_URL.'/ui_button_group.php'
			],
			'ui_cards' => [
				'title' => 'Cards',
				'url' => APP_URL.'/ui_cards.php'
			],
			'ui_carousel' => [
				'title' => 'Carousel',
				'url' => APP_URL.'/ui_carousel.php'
			],
			'ui_collapse' => [
				'title' => 'Collapse',
				'url' => APP_URL.'/ui_collapse.php'
			],
			'ui_dropdowns' => [
				'title' => 'Dropdowns',
				'url' => APP_URL.'/ui_dropdowns.php'
			],
			'ui_list_filter' => [
				'title' => 'List Filter',
				'url' => APP_URL.'/ui_list_filter.php'
			],
			'ui_modal' => [
				'title' => 'Modal',
				'url' => APP_URL.'/ui_modal.php'
			],
			'ui_navbars' => [
				'title' => 'Navbars',
				'url' => APP_URL.'/ui_navbars.php'
			],
			'ui_panels' => [
				'title' => 'Panels',
				'url' => APP_URL.'/ui_panels.php'
			],
			'ui_pagination' => [
				'title' => 'Pagination',
				'url' => APP_URL.'/ui_pagination.php'
			],
			'ui_popovers' => [
				'title' => 'Popovers',
				'url' => APP_URL.'/ui_popovers.php'
			],
			'ui_progress_bars' => [
				'title' => 'Progress Bars',
				'url' => APP_URL.'/ui_progress_bars.php'
			],
			'ui_scrollspy' => [
				'title' => 'ScrollSpy',
				'url' => APP_URL.'/ui_scrollspy.php'
			],
			'ui_side_panel' => [
				'title' => 'Side Panel',
				'url' => APP_URL.'/ui_side_panel.php'
			],
			'ui_spinners' => [
				'title' => 'Spinners',
				'url' => APP_URL.'/ui_spinners.php'
			],
			'ui_tabs_pills' => [
				'title' => 'Tabs & Pills',
				'url' => APP_URL.'/ui_tabs_pills.php'
			],
			'ui_toasts' => [
				'title' => 'Toasts',
				'url' => APP_URL.'/ui_toasts.php'
			],
			'ui_tooltips' => [
				'title' => 'Tooltips',
				'url' => APP_URL.'/ui_tooltips.php'
			]
		]
	],
	'utilities' => [
		'title' => 'Utilities',
		'icon' => 'fal fa-bolt',
		'items' => [
			'utilities_borders' => [
				'title' => 'Borders',
				'url' => APP_URL.'/utilities_borders.php'
			],
			'utilities_clearfix' => [
				'title' => 'Clearfix',
				'url' => APP_URL.'/utilities_clearfix.php'
			],
			'utilities_color_pallet' => [
				'title' => 'Color Pallet',
				'url' => APP_URL.'/utilities_color_pallet.php'
			],
			'utilities_display_property' => [
				'title' => 'Display Property',
				'url' => APP_URL.'/utilities_display_property.php'
			],
			'utilities_fonts' => [
				'title' => 'Fonts',
				'url' => APP_URL.'/utilities_fonts.php'
			],
			'utilities_flexbox' => [
				'title' => 'Flexbox',
				'url' => APP_URL.'/utilities_flexbox.php'
			],
			'utilities_helpers' => [
				'title' => 'Helpers',
				'url' => APP_URL.'/utilities_helpers.php'
			],
			'utilities_position' => [
				'title' => 'Position',
				'url' => APP_URL.'/utilities_position.php'
			],
			'utilities_responsive_grid' => [
				'title' => 'Responsive Grid',
				'url' => APP_URL.'/utilities_responsive_grid.php'
			],
			'utilities_sizing' => [
				'title' => 'Sizing',
				'url' => APP_URL.'/utilities_sizing.php'
			],
			'utilities_spacing' => [
				'title' => 'Spacing',
				'url' => APP_URL.'/utilities_spacing.php'
			],
			'utilities_typography' => [
				'title' => 'Typography',
				'tags' => 'fonts headings bold lead colors sizes link text states list styles truncate alignment',
				'url' => APP_URL.'/utilities_typography.php'
			],
			'menu_child' => [
				'title' => 'Menu child',
				'items' => [
					'sublevel_item' => [
						'title' => 'Sublevel Item',

					],
					'another_item' => [
						'title' => 'Another Item',

					]
				]
			],
			'disabled_item' => [
				'title' => 'Disabled item',

			]
		]
	],
	'font_icons' => [
		'title' => 'Font Icons',
		'icon' => 'fal fa-map-marker-alt',
		'span' => [
			'class' => 'dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top',
			'text' => '7,500+'
		],
		'items' => [
			'fontawesome' => [
				'title' => 'FontAwesome',
				'items' => [
					'icons_fontawesome_light' => [
						'title' => 'Light',
						'url' => APP_URL.'/icons_fontawesome_light.php'
					],
					'icons_fontawesome_regular' => [
						'title' => 'Regular',
						'url' => APP_URL.'/icons_fontawesome_regular.php'
					],
					'icons_fontawesome_solid' => [
						'title' => 'Solid',
						'url' => APP_URL.'/icons_fontawesome_solid.php'
					],
					'icons_fontawesome_duotone' => [
						'title' => 'Duotone',
						'url' => APP_URL.'/icons_fontawesome_duotone.php'
					],
					'icons_fontawesome_brand' => [
						'title' => 'Brand',
						'url' => APP_URL.'/icons_fontawesome_brand.php'
					]
				]
			],
			'nextgen_icons' => [
				'title' => 'NextGen Icons',
				'items' => [
					'icons_nextgen_general' => [
						'title' => 'General',
						'url' => APP_URL.'/icons_nextgen_general.php'
					],
					'icons_nextgen_base' => [
						'title' => 'Base',
						'url' => APP_URL.'/icons_nextgen_base.php'
					]
				]
			],
			'stack_icons' => [
				'title' => 'Stack Icons',
				'items' => [
					'icons_stack_showcase' => [
						'title' => 'Showcase',
						'url' => APP_URL.'/icons_stack_showcase.php'
					],
					'icons_stack_generate' => [
						'title' => 'Generate Stack',
						'url' => APP_URL.'/icons_stack_generate.php?layers=3'
					]
				]
			]
		]
	],
	'tables' => [
		'title' => 'Tables',
		'icon' => 'fal fa-th-list',
		'items' => [
			'tables_basic' => [
				'title' => 'Basic Tables',
				'url' => APP_URL.'/tables_basic.php'
			],
			'tables_generate_style' => [
				'title' => 'Generate Table Style',
				'url' => APP_URL.'/tables_generate_style.php'
			]
		]
	],
	'form_stuff' => [
		'title' => 'Form Stuff',
		'icon' => 'fal fa-edit',
		'items' => [
			'form_basic_inputs' => [
				'title' => 'Basic Inputs',
				'url' => APP_URL.'/form_basic_inputs.php'
			],
			'form_checkbox_radio' => [
				'title' => 'Checkbox & Radio',
				'url' => APP_URL.'/form_checkbox_radio.php'
			],
			'form_input_groups' => [
				'title' => 'Input Groups',
				'url' => APP_URL.'/form_input_groups.php'
			],
			'form_validation' => [
				'title' => 'Validation',
				'url' => APP_URL.'/form_validation.php'
			]
		]
	],
	[
		'title' => 'Plugins & Addons',
		'group' => true,
	],
	'plugins' => [
		'title' => 'Plugins',
		'icon' => 'fal fa-shield-alt',
		'items' => [
			'plugins_faq' => [
				'title' => 'Plugins FAQ',
				'url' => APP_URL.'/plugins_faq.php'
			],
			'plugins_waves' => [
				'title' => 'Waves',
				'url' => APP_URL.'/plugins_waves.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-400 ml-2',
					'text' => '9 KB'
				]
			],
			'plugins_pacejs' => [
				'title' => 'PaceJS',
				'url' => APP_URL.'/plugins_pacejs.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '13 KB'
				]
			],
			'plugins_smartpanels' => [
				'title' => 'SmartPanels',
				'url' => APP_URL.'/plugins_smartpanels.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '9 KB'
				]
			],
			'plugins_bootbox' => [
				'title' => 'BootBox',
				'tags' => 'alert sound',
				'url' => APP_URL.'/plugins_bootbox.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '15 KB'
				]
			],
			'plugins_slimscroll' => [
				'title' => 'Slimscroll',
				'url' => APP_URL.'/plugins_slimscroll.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '5 KB'
				]
			],
			'plugins_throttle' => [
				'title' => 'Throttle',
				'url' => APP_URL.'/plugins_throttle.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '1 KB'
				]
			],
			'plugins_navigation' => [
				'title' => 'Navigation',
				'url' => APP_URL.'/plugins_navigation.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '2 KB'
				]
			],
			'plugins_i18next' => [
				'title' => 'i18next',
				'url' => APP_URL.'/plugins_i18next.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '10 KB'
				]
			],
			'plugins_appcore' => [
				'title' => 'App.Core',
				'url' => APP_URL.'/plugins_appcore.php',
				'span' => [
					'class' => 'dl-ref label bg-success-700 ml-2',
					'text' => '14 KB'
				]
			]
		]
	],
	'datatables' => [
		'title' => 'Datatables',
		'icon' => 'fal fa-table',
		'tags' => 'datagrid',
		'span' => [
			'class' => 'dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top',
			'text' => '235 KB'
		],
		'items' => [
			'datatables_basic' => [
				'title' => 'Basic',
				'url' => APP_URL.'/datatables_basic.php'
			],
			'datatables_autofill' => [
				'title' => 'Autofill',
				'url' => APP_URL.'/datatables_autofill.php'
			],
			'datatables_buttons' => [
				'title' => 'Buttons',
				'url' => APP_URL.'/datatables_buttons.php'
			],
			'datatables_export' => [
				'title' => 'Export',
				'tags' => 'tables pdf excel print csv',
				'url' => APP_URL.'/datatables_export.php'
			],
			'datatables_colreorder' => [
				'title' => 'ColReorder',
				'url' => APP_URL.'/datatables_colreorder.php'
			],
			'datatables_columnfilter' => [
				'title' => 'ColumnFilter',
				'url' => APP_URL.'/datatables_columnfilter.php'
			],
			'datatables_fixedcolumns' => [
				'title' => 'FixedColumns',
				'url' => APP_URL.'/datatables_fixedcolumns.php'
			],
			'datatables_fixedheader' => [
				'title' => 'FixedHeader',
				'url' => APP_URL.'/datatables_fixedheader.php'
			],
			'datatables_keytable' => [
				'title' => 'KeyTable',
				'url' => APP_URL.'/datatables_keytable.php'
			],
			'datatables_responsive' => [
				'title' => 'Responsive',
				'url' => APP_URL.'/datatables_responsive.php'
			],
			'datatables_responsive_alt' => [
				'title' => 'Responsive Alt',
				'url' => APP_URL.'/datatables_responsive_alt.php'
			],
			'datatables_rowgroup' => [
				'title' => 'RowGroup',
				'url' => APP_URL.'/datatables_rowgroup.php'
			],
			'datatables_rowreorder' => [
				'title' => 'RowReorder',
				'url' => APP_URL.'/datatables_rowreorder.php'
			],
			'datatables_scroller' => [
				'title' => 'Scroller',
				'url' => APP_URL.'/datatables_scroller.php'
			],
			'datatables_select' => [
				'title' => 'Select',
				'url' => APP_URL.'/datatables_select.php'
			],
			'datatables_alteditor' => [
				'title' => 'AltEditor',
				'url' => APP_URL.'/datatables_alteditor.php'
			]
		]
	],
	'statistics' => [
		'title' => 'Statistics',
		'icon' => 'fal fa-chart-pie',
		'tags' => 'chart, graphs',
		'items' => [
			'statistics_flot' => [
				'title' => 'Flot',
				'tags' => 'bar pie',
				'url' => APP_URL.'/statistics_flot.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '36 KB'
				]
			],
			'statistics_chartjs' => [
				'title' => 'Chart.js',
				'tags' => 'bar pie',
				'url' => APP_URL.'/statistics_chartjs.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '205 KB'
				]
			],
			'statistics_chartist' => [
				'title' => 'Chartist.js',
				'url' => APP_URL.'/statistics_chartist.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '39 KB'
				]
			],
			'statistics_c3' => [
				'title' => 'C3 Charts',
				'url' => APP_URL.'/statistics_c3.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '197 KB'
				]
			],
			'statistics_peity' => [
				'title' => 'Peity',
				'tags' => 'small',
				'url' => APP_URL.'/statistics_peity.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '4 KB'
				]
			],
			'statistics_sparkline' => [
				'title' => 'Sparkline',
				'tags' => 'small tiny',
				'url' => APP_URL.'/statistics_sparkline.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '42 KB'
				]
			],
			'statistics_easypiechart' => [
				'title' => 'Easy Pie Chart',
				'url' => APP_URL.'/statistics_easypiechart.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '4 KB'
				]
			],
			'statistics_dygraph' => [
				'title' => 'Dygraph',
				'tags' => 'complex',
				'url' => APP_URL.'/statistics_dygraph.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-700 ml-2',
					'text' => '120 KB'
				]
			]
		]
	],
	'notifications' => [
		'title' => 'Notifications',
		'icon' => 'fal fa-exclamation-circle',
		'items' => [
			'notifications_sweetalert2' => [
				'title' => 'SweetAlert2',
				'url' => APP_URL.'/notifications_sweetalert2.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '40 KB'
				]
			],
			'notifications_toastr' => [
				'title' => 'Toastr',
				'url' => APP_URL.'/notifications_toastr.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-600 ml-2',
					'text' => '5 KB'
				]
			]
		]
	],
	'form_plugins' => [
		'title' => 'Form Plugins',
		'icon' => 'fal fa-credit-card-front',
		'items' => [
			'form_plugins_colorpicker' => [
				'title' => 'Color Picker',
				'url' => APP_URL.'/form_plugins_colorpicker.php'
			],
			'form_plugins_datepicker' => [
				'title' => 'Date Picker',
				'url' => APP_URL.'/form_plugins_datepicker.php'
			],
			'form_plugins_daterange_picker' => [
				'title' => 'Date Range Picker',
				'url' => APP_URL.'/form_plugins_daterange_picker.php'
			],
			'form_plugins_dropzone' => [
				'title' => 'Dropzone',
				'url' => APP_URL.'/form_plugins_dropzone.php'
			],
			'form_plugins_ionrangeslider' => [
				'title' => 'Ion.RangeSlider',
				'url' => APP_URL.'/form_plugins_ionrangeslider.php'
			],
			'form_plugins_inputmask' => [
				'title' => 'Inputmask',
				'url' => APP_URL.'/form_plugins_inputmask.php'
			],
			'form_plugins_imagecropper' => [
				'title' => 'Image Cropper',
				'url' => APP_URL.'/form_plugins_imagecropper.php'
			],
			'form_plugins_select2' => [
				'title' => 'Select2',
				'url' => APP_URL.'/form_plugins_select2.php'
			],
			'form_plugins_summernote' => [
				'title' => 'Summernote',
				'tags' => 'texteditor editor',
				'url' => APP_URL.'/form_plugins_summernote.php'
			]
		]
	],
	'miscellaneous' => [
		'title' => 'Miscellaneous',
		'icon' => 'fal fa-globe',
		'items' => [
			'miscellaneous_fullcalendar' => [
				'title' => 'FullCalendar',
				'url' => APP_URL.'/miscellaneous_fullcalendar.php'
			],
			'miscellaneous_lightgallery' => [
				'title' => 'Light Gallery',
				'url' => APP_URL.'/miscellaneous_lightgallery.php',
				'span' => [
					'class' => 'dl-ref label bg-primary-500 ml-2',
					'text' => '61 KB'
				]
			]
		]
	],
	[
		'title' => 'Layouts & Apps',
		'group' => true,
	],
	'pages' => [
		'title' => 'Pages',
		'icon' => 'fal fa-plus-circle',
		'items' => [
			'page_chat' => [
				'title' => 'Chat',
				'url' => APP_URL.'/page_chat.php'
			],
			'page_contacts' => [
				'title' => 'Contacts',
				'url' => APP_URL.'/page_contacts.php'
			],
			'forum' => [
				'title' => 'Forum',
				'items' => [
					'page_forum_list' => [
						'title' => 'List',
						'url' => APP_URL.'/page_forum_list.php'
					],
					'page_forum_threads' => [
						'title' => 'Threads',
						'url' => APP_URL.'/page_forum_threads.php'
					],
					'page_forum_discussion' => [
						'title' => 'Discussion',
						'url' => APP_URL.'/page_forum_discussion.php'
					]
				]
			],
			'inbox' => [
				'title' => 'Inbox',
				'items' => [
					'page_inbox_general' => [
						'title' => 'General',
						'url' => APP_URL.'/page_inbox_general.php'
					],
					'page_inbox_read' => [
						'title' => 'Read',
						'url' => APP_URL.'/page_inbox_read.php'
					],
					'page_inbox_write' => [
						'title' => 'Write',
						'url' => APP_URL.'/page_inbox_write.php'
					]
				]
			],
			'page_invoice' => [
				'title' => 'Invoice (printable)',
				'url' => APP_URL.'/page_invoice.php'
			],
			'authentication' => [
				'title' => 'Authentication',
				'items' => [
					'page_forget' => [
						'title' => 'Forget Password',
						'url' => APP_URL.'/page_forget.php'
					],
					'page_locked' => [
						'title' => 'Locked Screen',
						'url' => APP_URL.'/page_locked.php'
					],
					'page_login' => [
						'title' => 'Login',
						'url' => APP_URL.'/page_login.php'
					],
					'page_login_alt' => [
						'title' => 'Login Alt',
						'url' => APP_URL.'/page_login_alt.php'
					],
					'page_register' => [
						'title' => 'Register',
						'url' => APP_URL.'/page_register.php'
					],
					'page_confirmation' => [
						'title' => 'Confirmation',
						'url' => APP_URL.'/page_confirmation.php'
					]
				]
			],
			'error_pages' => [
				'title' => 'Error Pages',
				'items' => [
					'page_error' => [
						'title' => 'General Error',
						'url' => APP_URL.'/page_error.php'
					],
					'page_error_404' => [
						'title' => 'Server Error',
						'url' => APP_URL.'/page_error_404.php'
					],
					'page_error_announced' => [
						'title' => 'Announced Error',
						'url' => APP_URL.'/page_error_announced.php'
					]
				]
			],
			'page_profile' => [
				'title' => 'Profile',
				'url' => APP_URL.'/page_profile.php'
			],
			'page_projects' => [
				'title' => 'Projects',
				'url' => APP_URL.'/page_projects.php'
			],
			'page_search' => [
				'title' => 'Search Results',
				'url' => APP_URL.'/page_search.php'
			]
		]
	]
];