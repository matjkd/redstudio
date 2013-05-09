/* ===================================================
 * Isotope responsive integration into Bootstrap
 * Code based on http://pknopf.com/blog/jquery-isotope-with-responsive-twitter-bootstrap
 * by Paul Knopf
 *
 * with some minor modifications.
 * ========================================================== */
var $container = null;

$(window).load(function() {

	$container = $('#isotope');

	// set the widths on page load
	setWidths();

	$container.imagesLoaded(function() {

		//update images
		activateIsotope();

		// update columnWidth on window resize
		$(window).smartresize(function() {
			// set the widths on resize

			setWidths();
			// reinit isotope
			activateIsotope();

		});

		$('.sort li a').click(function() {
			$('.sort li a').removeClass('lead');
			$(this).addClass('lead');
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter : selector
			});
			return false;
		});

	});

	// need to run this here because isotope doesn't initiate on initial page load
	setWidths();
	// reinit isotope
	activateIsotope();

});

/* ===================================================
*
* Functions
*
* ========================================================== */

// activate isotope
function activateIsotope() {

	$container.isotope({

		animationEngine : 'best-available',
		resizable : false, // disable normal resizing

		// set columnWidth to a percentage of container width
		masonry : {
			columnWidth : getUnitWidth()
		}
	});

}

// get the column width per unit.
function getUnitWidth() {
	var width;
	if ($(".visible-phone").is(":visible")) {
		width = $container.width() / 2;
	} else if ($(".visible-tablet").is(":visible")) {
		width = $container.width() / 3;
	} else {
		width = $container.width() / 4;
	}
	return width;
}

// set all the widths to the elements
function setWidths() {
	var unitWidth = getUnitWidth() - 20;
	$container.children().css({
		width : unitWidth
	});

}

