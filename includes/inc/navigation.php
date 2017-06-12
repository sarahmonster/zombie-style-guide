<?php
/**
 * Style guide panel to demonstrate navigation components.
 * This should eventually output markup as well.
 * It would be nice if the code here could be taken directly from theme files.
 *
 * @package strikebase
 */
?>

<h2 class="panel-title"><?php esc_html_e( 'Navigation', 'zombiestyleguide' ); ?></h2>

<h3>Links and anchors</h3>

<p>The <code>&lt;a&gt;</code> element is used to hyperlink text, be that to another page, a named fragment (also referred to as an “anchor”) on the current page, or any other location on the web. Example:</p>
<p><a href=".">Go to the home page</a> or <a href="#menu">return to the menu at the top of this page</a>.</p>


<h3>Post navigation</h3>

<nav class="navigation post-navigation" role="navigation">
	<h2 class="screen-reader-text">Post navigation</h2>
	<div class="nav-links">
		<div class="nav-previous"><a href="#" rel="prev">
			<svg class="phoenix-icon phoenix-icon-arrow"><use xlink:href="http://triggersandsparks.dev/wp-content/themes/phoenix/assets/svg/icons.svg#arrow" /></svg>
			<span>Previous</span>
			Title of post
		</a></div>
		<div class="nav-next"><a href="http://triggersandsparks.dev/2017/01/30/i-only-read-books-written-by-women-for-a-year/" rel="next">
			<svg class="phoenix-icon phoenix-icon-arrow"><use xlink:href="http://triggersandsparks.dev/wp-content/themes/phoenix/assets/svg/icons.svg#arrow" /></svg>
			<span>Next</span>
			A longer title of post
		</a></div>
	</div>
</nav>
