<?php
/**
 * Style guide panel to demonstrate media components.
 * This should eventually output markup as well.
 * It would be nice if the code here could be taken directly from theme files.
 *
 * @package strikebase
 */
?>

<h2 class="panel-title"><?php esc_html_e( 'Media', 'zombiestyleguide' ); ?></h2>

<h3>Figures</h3>
<p>Figures are usually used to refer to images:</p>
<div class="example">
	<figure>
		<img src="http://placekitten.com/720/300/" alt="Example image"><br>
		<figcaption> This is a placeholder image, with supporting caption.</figcaption>
	</figure>
</div>

<p>Here, a part of a poem is marked up using figure. A <code>cite</code> element surrounds the name of the text being referred to:</p>
<div class="example">
	<figure>‘Twas brillig, and the slithy toves<br>
	Did gyre and gimble in the wabe;<br>
	All mimsy were the borogoves,<br>
	And the mome raths outgrabe.<p></p>
		<figcaption> <cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98</figcaption>
	</figure>
</div>

<pre class="examplecode"><code>&lt;figure&gt;
&lt;img src="link/to/image" alt="Alt text displayed when image does not load"&gt;
&lt;figcaption&gt;An optional caption for the content above with an optional &lt;cite&gt;citation&lt;/cite&gt;&lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
