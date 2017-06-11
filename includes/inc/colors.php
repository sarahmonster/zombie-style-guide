<?php
/**
 * Style guide panel to demonstrate colours used.
 *
 * @package strikebase
 */


/*
 * Output a formatted swatch for a given colour variable.
 */
function zombiestyleguide_show_colour_swatch( $variable, $code = false ) {
	?>
	<div class="color-swatch color-<?php echo trim( $variable, '$' ); ?>" style="background-color: <?php echo $code; ?>">
		<dl class="color-swatch-label">
			<dt>Code</dt>
			<dd class="color-code"><?php echo $code; ?></dd>
			<dt>Variable</dt>
			<dd class="color-variable"><?php echo $variable; ?></dd>
		</dl>
	</div>
	<?php
}

/*
 * Read a file containing colour variables.
 */
function zombiestyleguide_read_colour_variables( $file ) {
	$raw_text = file_get_contents( $file );

	$meta_variable_pattern = '/\$\S*:\s*\$[a-z0-9\-\_]*/mi';

	/*
	 * Get all the colour variables that refer to color codes.
	 * Matches hex, rgb(a), HSL(a)
	 * @link http://www.regexpal.com/97509
	 */
	$hex_code_pattern = '/\$\S*:\s*#[a-z0-9]*/mi';
	$color_code_pattern = '/\$\S*:\s*(#([\da-f]{3}){1,2}|(rgb|hsl)a\((\d{1,3}%?,\s?){3}(1|0?\.\d+)\)|(rgb|hsl)\(\d{1,3}%?(,\s?\d{1,3}%?){2}\))/mi';
	$pattern = '/^Tags:\s?[a-z,\s-]+$/mi';
	preg_match_all( $color_code_pattern, $raw_text, $color_codes );

	// Iterate through our variables to create an indexed array of variables => code.
	$variables = array();
	foreach( $color_codes[0] as $color_code ) {
		$bits = explode( ':', $color_code );
		$variable = $bits[0];
		$code = $bits[1];
		$variables[$variable] = $code;
	}

	//print_r( $variables );
	return $variables;
}

?>

<h2 class="panel-title"><?php esc_html_e( 'Colours', 'zombiestyleguide' ); ?></h2>

<div class="color-group">

	<?php
	// Get & read the colour variable file.
	$options = get_option( 'zombiestyleguide_settings' );
	if ( $options['zombiestyleguide_colorvariables'] ) {
		$colors = zombiestyleguide_read_colour_variables( $options['zombiestyleguide_colorvariables'] );

		// Display a swatch for each colour variable.
		foreach( $colors as $key => $value ) {
			zombiestyleguide_show_colour_swatch( $key, $value );
		}
	}
	?>
</div>
