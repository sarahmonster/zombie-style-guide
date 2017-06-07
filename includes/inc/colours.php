<?php
/**
 * Style guide panel to demonstrate colours used.
 *
 * @package strikebase
 */


/*
 * Output a formatted swatch for a given colour variable.
 */
function styleguide_show_colour_swatch( $variable ) {
	?>
	<div class="color-swatch color-<?php echo $variable; ?>">
		<dl class="color-swatch-label">
			<dt>Hex code</dt>
			<dd class="hex-code"></dd>
			<dt>Sass variable</dt>
			<dd class="sass-code">$color__<?php echo $variable; ?></dd>
		</dl>
	</div>
	<?php
}
?>

<h2 class="panel-title">Colours</h2>

<div class="color-group">

	<div class="copy-text">
		<h3 class="color-group-title">Base colours</h3>

		<p>To evoke a military-type feeling, Strikebase uses a palette of desaturated browns and sand-coloured beiges as its neutral shades. Use for body text, backgrounds, separating elements, and anything that doesn't need to have attention drawn to it.</p>
	</div>

	<?php styleguide_show_colour_swatch( 'black' ); ?>
	<?php styleguide_show_colour_swatch( 'neutral' ); ?>
	<?php styleguide_show_colour_swatch( 'neutral-highlight' ); ?>
	<?php styleguide_show_colour_swatch( 'white' ); ?>
	<?php styleguide_show_colour_swatch( 'pure-white' ); ?>

</div>

<div class="color-group">

	<div class="copy-text">
		<h3 class="color-group-title">Primary colours</h3>

		<p>In keeping with the military theme, we use a series of olive-ish greens as the primary accent colour. This is used to distinguish elements (like labels) from their surrounding text, as well as for background colours and the colours of less important elements.</p>
	</div>

	<?php styleguide_show_colour_swatch( 'primary-dark' ); ?>
	<?php styleguide_show_colour_swatch( 'primary' ); ?>
	<?php styleguide_show_colour_swatch( 'primary-light' ); ?>
</div>

<div class="color-group">

	<div class="copy-text">
		<h3 class="color-group-title">Accent colours</h3>

		<p>Accent colours are used to highlight important information. Red is generally the colours of links, and yellows are used to highlight important information that isn't a link.</p>
	</div>

	<?php styleguide_show_colour_swatch( 'accent' ); ?>
	<?php styleguide_show_colour_swatch( 'accent-alt' ); ?>
	<?php styleguide_show_colour_swatch( 'highlight' ); ?>
</div>
