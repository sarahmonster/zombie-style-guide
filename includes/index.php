<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strikebase Style Guide</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Francois+One" type="text/css" media="all" />
	<link rel="stylesheet" href="../../style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="style-guide.css" type="text/css" media="all" />

	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/scripts.js"></script>
</head>

<body>

	<div class="page">

		<aside id="sidebar" class="navigation">
			<div class="logo">
				<?php echo file_get_contents( '../svg/strikebase.svg' ); ?>
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

		<div class="content">

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
</body>
</html>
