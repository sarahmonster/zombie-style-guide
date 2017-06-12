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

			<aside id="sidebar" class="zombiestyleguide-navigation">
				<div class="logo">
				</div>

				<ul>
					<li><a href="#colors"><?php esc_html_e( 'Colours', 'zombiestyleguide' ); ?></a></li>
					<li><a href="#typography"><?php esc_html_e( 'Typography', 'zombiestyleguide' ); ?></a></li>
					<li><a href="#buttons-forms"><?php esc_html_e( 'Buttons & Forms', 'zombiestyleguide' ); ?></a></li>
					<li><a href="#navigation"><?php esc_html_e( 'Navigation', 'zombiestyleguide' ); ?></a></li>
					<li><a href="#components"><?php esc_html_e( 'Components', 'zombiestyleguide' ); ?></a></li>
					<li><a href="#icons"><?php esc_html_e( 'Icons', 'zombiestyleguide' ); ?></a></li>
				</ul>

			</aside>

			<div class="site-main zombiestyleguide-site-main">

				<section class="zombiestyleguide-panel" id="colors">
					<?php include( 'inc/colors.php' ); ?>
				</section>

				<section class="zombiestyleguide-panel" id="typography">
					<?php include( 'inc/typography.php' ); ?>
				</section>

				<section class="zombiestyleguide-panel" id="buttons-forms">
					<?php include( 'inc/buttons-and-forms.php' ); ?>
				</section>

				<section class="zombiestyleguide-panel" id="navigation">
					<?php include( 'inc/navigation.php' ); ?>
				</section><!-- content -->

				<section class="zombiestyleguide-panel" id="components">
					<?php include( 'inc/components.php' ); ?>
				</section><!-- content -->

			</div><!-- .content -->

		</div> <!-- .page -->

<?php wp_footer(); ?>

</body>
</html>
