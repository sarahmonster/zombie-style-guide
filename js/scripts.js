/**
 * Scripts
 *
 * Handles dynamic highlighting of menu items and smooth scrolling.
 */
( function($) {

/*
	* We're going to use the Waypoints and ScrollTo libraries to build a dynamic menu.
	* This will animate a scroll effect to and from panels in the page as well as
	* highlighting the current panel in the nav menu.
	*/
	function highlightActiveNav() {
		var $sections = $( '.panel' );
		var $navLinks = $( '.navigation a' );

		// Use the Waypoints plugin to indicate our current nav item
		$sections.waypoint( {
			handler: function( direction ) {
				if (direction === 'down') {
					var activePanel = this;
					var panelID = activePanel.element.id;

					// Find the active panel's corresponding link by matching the panel ID in the URL
					var $activeLink = $( '.navigation a[href="#' + panelID + '"]' );
					// Remove any existing classes
					$navLinks.removeClass( 'active' );
					// Highlight the currently active panel by adding a CSS class
					$activeLink.addClass( 'active' );
				}

			},
			offset: '10px'
		});

		/* When we scroll up, we want to use a slightly different offset
		 to trigger Waypoints, and show highlight the active panel once
		 it's taking up a lot of the viewport.

		 Waypoints is a bit weird about this and we need to repeat
		 ourselves in order to change the offset as we scroll up.

		 In short: this is just a repetition of the above.

		 Ref: https://github.com/imakewebthings/waypoints/issues/31
		*/
		$sections.waypoint( {
			handler: function( direction ) {
				if (direction === 'up') {
					var activePanel = this;
					var panelID = activePanel.element.id;

					// Find the active panel's corresponding link by matching the panel ID in the URL
					var $activeLink = $( '.navigation a[href="#' + panelID + '"]' );
					// Remove any existing classes
					$navLinks.removeClass( 'active' );
					// Highlight the currently active panel by adding a CSS class
					$activeLink.addClass( 'active' );
				}

			},
			offset: function() {
				return -this.element.clientHeight + 500
			}
		});

		// Use scrollTo library to smoothly scroll between panels
		$navLinks.click( function() {
			$.scrollTo( $( this ).attr( 'href' ), {
				duration: 400,
				offset: { 'top': -10 }
			} );
		});
	}

	// Run our functions on document load
	$( window ).on( 'load', function() {
		highlightActiveNav();
	});

} )(jQuery);
