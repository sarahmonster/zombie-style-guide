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
 * Split a string containing a bunch of colour variables into an indexed array of variables.
 */
function zombiestyleguide_output_colour_variables( $variable_string ) {
	global $color_variables;

	if (!is_array($color_variables)) :
		$color_variables = array();
	endif;

	$return = array();

	// Explode our variable string into individual variables.
	$variables = explode( ';', $variable_string );

	// Iterate through our variables to create an indexed array of variables => code.
	foreach( $variables as $variable ) :
		if ( '' === $variable ) {
			break;
		}

		$bits = explode( ':', $variable );
		$index = $bits[0];
		$code = trim( $bits[1] );

		zombiestyleguide_show_colour_swatch( $index, zombiestyleguide_color_lookup( $index, $code ) );
	endforeach;
}

/*
 * Recursively look up a colour code from our global array.
 *
 */
function zombiestyleguide_color_lookup( $variable, $code ) {
	global $color_variables;

	// Matches hex, rgb(a), HSL(a)
	$color_code_pattern = '/(#([\da-f]{3}){1,2}|(rgb|hsl)a\((\d{1,3}%?,\s?){3}(1|0?\.\d+)\)|(rgb|hsl)\(\d{1,3}%?(,\s?\d{1,3}%?){2}\))/i';

	// Matches a variable referring to another variable.
	$meta_variable_pattern = '/\$[a-z0-9\-\_]*/i';

	// Valid colour code? Okay!
	if ( preg_match( $color_code_pattern, $code ) ) :
		// Add it to our index.
		$color_variables[$variable] = $code;
		return $code;

	elseif ( preg_match( $meta_variable_pattern, $code ) ) :
		if ( array_key_exists( $code, $color_variables ) ) :
			return $color_variables[$code];
		else :
			// Pfft, too hard to process. Let's bail.
			return false;
		endif;
	endif;

}

/*
 * Parse CSS comments according to a pre-determined structure in order
 * to break our variables into pre-defined sections, with documentation.
 */
function zombiestyleguide_parse_CSS( $file ) {

	// Split our file into individual lines.
	$lines = explode( "\n", file_get_contents( $file ) );

	// Loop through every line to see what's up.
	$i = 0;
	$sections = array( array( 'title' => '', 'description' => '', 'variables' => '' ) );
	$block = false;

	foreach ( $lines as $line ) :
		// First up, strip pesky whitespace.
		$line = trim( $line );

		if ( '//' === substr( $line, 0, 2 ) ) :
			// We've got a CSS comment.
			if ( $block ) :
				// If this line is part of a comment block, add it to the existing section description.
				$sections[$i]['description'] .= ltrim( $line, '//' );
			else :
				// Otherwise, create a new section array with this line as the title.
				$i++;
				$sections[$i]['title'] = ltrim( $line, '//' );
				$sections[$i]['description'] = '';
				$sections[$i]['variables'] = '';
			endif;
			$block = true; // We're currently in a comment block.

		elseif ( '$' === substr( $line, 0, 1 ) ) :
			// We've got a variable. Let's add it to our variables string.
			$sections[$i]['variables'] .= $line;
			$block = false; // If we were in a comment block, it's now ended.

		else :
			// Discard any other lines.
			$block = false;
		endif;
	endforeach;

	foreach ( $sections as $section ) : ?>

	<div class="color-group">
		<?php if ( array_key_exists( 'title', $section ) && $section['title'] ) : ?>
		<div class="copy-text">
			<h3 class="color-group-title"><?php echo $section['title']; ?></h3>
			<?php if ( $section['description'] ) : ?>
				<p><?php echo $section['description']; ?></p>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<?php zombiestyleguide_output_colour_variables( $section['variables'] ); ?>
	</div><!-- .color-group -->
	<?php endforeach;
}
?>

<h2 class="panel-title"><?php esc_html_e( 'Colours', 'zombiestyleguide' ); ?></h2>

	<?php
	// Get & read the colour variable file.
	$options = get_option( 'zombiestyleguide_settings' );
	if ( $options['zombiestyleguide_colorvariables'] ) {
		$colors = zombiestyleguide_parse_CSS( $options['zombiestyleguide_colorvariables'] );
	}
	?>
