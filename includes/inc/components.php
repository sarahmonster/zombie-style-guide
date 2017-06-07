<?php
/**
 * Style guide panel to demonstrate various UI components.
 * This should eventually output markup as well.
 * It would be nice if the code here could be taken directly from theme files.
 *
 * @package strikebase
 */
?>

<h2 class="panel-title">Components</h2>

<h3>Definition Lists</h3>

<p>Definition lists are used to present data in a label-data pair.</p>
<dl>
	<dt>Label</dt>
	<dd>Data</dd>

	<dt>Source of income</dt>
	<dd>Magic beans</dd>

</dl>

<h3>Cards</h3>

<p>Cards are used to show related data. They span full-width on smaller (phone-sized) devices but generally are floated in two columns at larger breakpoints.</p>

<section class="strikebase-card">
	<h2 class="strikebase-card-title">Card title</h2>
	<dl>
		<dt>Label</dt>
		<dd>Often contains definition lists</dd>
	</dl>
</section>

<h3>Drop-downs</h3>

<p>Drop-downs are used to show filter and sort options.</p>

<ul class="dropdown-container">

	<li class="dropdown-label">
		<a href="#">Dropdown label</a>

		<ul class="dropdown">
			<li class="dropdown-title">[Filter or sort] by [thing]</li>

			<?php
			// Create an array of terms.
			$terms = ['Red', 'Yellow', 'Blue'];

			// Loop through the terms and output each as a filter option.
			foreach ( $terms as $term ) : ?>
				<li><a class="filter-link" href="#" data-filter="<?php echo $term; ?>"><?php echo $term; ?></a></li>
			<?php endforeach; ?>
		</ul> <!-- .dropdown -->
	</li>
</ul><!-- .dropdown-container -->
