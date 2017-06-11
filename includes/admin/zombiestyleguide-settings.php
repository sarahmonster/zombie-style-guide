<?php
/**
 * The code that controls our custom settings page for the plugin.
 *
 * This will collect our user's Mapbox API key, and preferred map style.
 * It also allows them to set a preferred date format, select their "loved" tag,
 * set a home location(s), and choose whether they want links to location posts.
 *
 * @todo: Setting for home location, input validation & helpful errors.
 *
 * @package zombie-style-guide
 */

/*
 * Add our settings page as a submenu of our existing "Wanderlist" menu, created
 * by the "location" CPT.
 * This means all behaviours for the plugin will be clustered under a single,
 * logical menu.
 */
function zombiestyleguide_add_admin_menu() {
	add_submenu_page(
		'tools.php',
		esc_attr__( 'Zombie Style Guide Settings', 'zombiestyleguide' ),
		esc_html__( 'Style Guide', 'zombiestyleguide' ),
		'manage_options',
		'zombiestyleguide',
		'zombiestyleguide_options_page'
	);
}
add_action( 'admin_menu', 'zombiestyleguide_add_admin_menu' );

/*
 * Register our settings sections and fields.
 */
function zombiestyleguide_settings_init() {

	register_setting( 'zombiestyleguide_settings', 'zombiestyleguide_settings' );

	// General settings
	add_settings_section(
		'zombiestyleguide_general_settings_section',
		esc_html__( 'Source files', 'zombiestyleguide' ),
		'zombiestyleguide_general_section_description',
		'zombiestyleguide_settings'
	);

	add_settings_field(
		'zombiestyleguide_dateformat',
		esc_html__( 'Color variables', 'zombiestyleguide' ),
		'zombiestyleguide_colorvariables_render',
		'zombiestyleguide_settings',
		'zombiestyleguide_general_settings_section'
	);
}
add_action( 'admin_init', 'zombiestyleguide_settings_init' );

/*
 * These functions add descriptions for each of our settings sections.
 */
function zombiestyleguide_general_section_description() {
	esc_html_e( 'If you use SCSS variables to build your site, Zombie Style Guide will use those variables to automagically build your style guide.', 'zombiestyleguide' );
}

/*
 * These functions are used to render each particular option's input field.
 * @todo: Add data validation to ensure correct user input.
 */

function zombiestyleguide_colorvariables_render() {
	$options = get_option( 'zombiestyleguide_settings' );
	?>
	<input id='zombiestyleguide-colorvariables-input' type='url' name='zombiestyleguide_settings[zombiestyleguide_colorvariables]' value='<?php echo esc_attr( $options['zombiestyleguide_colorvariables'] ); ?>'>
	<p class="description">Full URL to a file that contains all your colour variables.</p>
	<?php
}

/*
 * Set up the actual settings page itself.
 */
function zombiestyleguide_options_page(  ) {
	?>
	<div class="wrap">
		<?php if ( isset( $_REQUEST['settings-updated'] ) ) : ?>
			<div class="updated fade"><p><strong><?php esc_html_e( 'Your settings have been saved!', 'zombiestyleguide' ); ?></strong></p></div>
		<?php endif; ?>

		<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

		<form action='options.php' method='post'>
			<?php
			settings_fields( 'zombiestyleguide_settings' );
			do_settings_sections( 'zombiestyleguide_settings' );
			submit_button();
			?>
	</div>
	<?php
}
