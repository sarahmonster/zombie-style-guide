<?php
/**
 * Style guide panel to demonstrate buttons and form elements.
 * This should include styling for active and focus states.
 *
 * @package strikebase
 */
?>

<h2 class="panel-title">Buttons &amp; forms</h2>

<h3>Buttons</h3>

<p>The primary button is used for important actions, and should only appear once on a page. It's the default button styling. Secondary buttons are for less important actions. <a href="https://www.nngroup.com/articles/reset-and-cancel-buttons/">Avoid using reset and cancel buttons</a> unless you have an extremely good reason for doing so.</p>

<button>Primary button</button>
<button class="secondary">Secondary button</button>

<h3>Forms</h3>

<p>The <code>&lt;fieldset&gt;</code> element groups related fields within a form and should have a title attribute and a corresponding <code>&lt;legend&gt;</code>. The <code>&lt;label&gt;</code> element ensures field descriptions are associated with their corresponding form widgets, and are very important for form accesibility.</p>

<form class="form">

	<fieldset title="Sample input field types">
		<legend class="form--legend">Input Field Types</legend>

		<label for="text">Text Input</label>
		<input id="text" class="form--input" name="text" required="required" type="text">

		<label for="password">Password</label>
		<input id="password" class="form--input" name="password" required="required" type="password">

		<label for="textarea">Textarea</label>
		<textarea id="textarea" class="form--textarea" name="textarea" rows="8"></textarea>
	</fieldset>

	<fieldset title="Selectable Option Items">
		<legend>Selectable Option Items</legend>

		<label for="select">Select</label>
		<select class="form--select" name="select"><optgroup label="Option Group"><option value="">Option One</option><option value="">Option Two</option><option value="">Option Three</option></optgroup>

		<label class="check" for="checkbox1"><input id="checkbox1" checked="checked" name="checkbox" type="checkbox"> Choice A</label>
		<label class="check" for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label>
		<label class="check" for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label>

		<label class="radio" for="radio1"><input id="radio1" class="radio" checked="checked" name="radio" type="radio"> Option 1</label>
		<label class="radio" for="radio2"><input id="radio2" class="radio" name="radio" type="radio"> Option 2</label></li>
		<label class="radio" for="radio3"><input id="radio3" class="radio" name="radio" type="radio"> Option 3</label>
	</fieldset>

</form>
