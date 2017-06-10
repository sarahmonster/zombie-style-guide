<?php
/**
 * The template for displaying the styleguide page.
 *
 * @package WordPress
 * @subpackage wordpress-styleguide
 * @author Oomph, Inc.
 * @link http://www.oomphinc.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class( 'styleguide' ); ?>>

		<div class="page">

			<aside id="sidebar" class="navigation">
				<div class="logo">
				</div>

				<ul>
					<li><a href="#colours">Colours</a></li>
					<li><a href="#typography">Typography</a></li>
					<li><a href="#buttons">Buttons &amp; forms</a></li>
					<li><a href="#navigation">Navigation</a></li>
					<li><a href="#components">Components</a></li>
					<li><a href="#icons">Icons</a></li>
				</ul>

			</aside>

			<div class="entry-content">

				<section class="panel" id="colours">
					<?php include( 'inc/colours.php' ); ?>
				</section>

				<section class="panel" id="typography">
					<?php include( 'inc/typography.php' ); ?>
				</section>

				<section class="panel" id="buttons">
					<?php include( 'inc/buttons-and-forms.php' ); ?>
				</section>


				<section class="panel" id="components">
					<?php include( 'inc/components.php' ); ?>
				</section><!-- content -->

			</div><!-- .content -->

		</div> <!-- .page -->

<?php wp_footer(); ?>

</body>
</html>
