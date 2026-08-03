(function () {
	'use strict';

	var toggle = document.getElementById( 'speckNavToggle' );
	var nav = document.getElementById( 'speckPrimaryNav' );

	if ( ! toggle || ! nav ) {
		return;
	}

	toggle.addEventListener( 'click', function () {
		var isOpen = nav.classList.toggle( 'is-open' );
		toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
	} );
})();

/**
 * Hero search tabs (Vehicle / Keyword / Budget): switches which field
 * group is shown inside the search form.
 */
(function () {
	'use strict';

	var tabs = document.querySelectorAll( '.speck-search-tabs__tab' );
	if ( ! tabs.length ) {
		return;
	}

	tabs.forEach( function ( tab ) {
		tab.addEventListener( 'click', function () {
			var target = tab.getAttribute( 'data-speck-tab' );

			tabs.forEach( function ( t ) {
				t.classList.toggle( 'is-active', t === tab );
				t.setAttribute( 'aria-selected', t === tab ? 'true' : 'false' );
			} );

			document.querySelectorAll( '.speck-search-fields' ).forEach( function ( fields ) {
				fields.classList.toggle( 'is-active', fields.getAttribute( 'data-speck-fields' ) === target );
			} );
		} );
	} );
})();

/**
 * "Explore By Automotive Brand" coverflow carousel: the card nearest the
 * center of the track scales up and gets full opacity; the rest recede.
 */
(function () {
	'use strict';

	var track = document.querySelector( '[data-speck-brand-track]' );
	if ( ! track ) {
		return;
	}

	var cards = Array.prototype.slice.call( track.querySelectorAll( '.speck-brands__card' ) );
	var ticking = false;

	function updateActiveCard() {
		var trackRect = track.getBoundingClientRect();
		var trackCenter = trackRect.left + trackRect.width / 2;
		var closest = null;
		var closestDistance = Infinity;

		cards.forEach( function ( card ) {
			var cardRect = card.getBoundingClientRect();
			var cardCenter = cardRect.left + cardRect.width / 2;
			var distance = Math.abs( cardCenter - trackCenter );

			if ( distance < closestDistance ) {
				closestDistance = distance;
				closest = card;
			}
		} );

		cards.forEach( function ( card ) {
			card.classList.toggle( 'is-active', card === closest );
		} );

		ticking = false;
	}

	function onScroll() {
		if ( ! ticking ) {
			window.requestAnimationFrame( updateActiveCard );
			ticking = true;
		}
	}

	track.addEventListener( 'scroll', onScroll, { passive: true } );
	window.addEventListener( 'resize', onScroll );
	updateActiveCard();

	var prevBtn = document.querySelector( '.speck-brands__nav--prev' );
	var nextBtn = document.querySelector( '.speck-brands__nav--next' );
	var scrollAmount = function () {
		return cards.length ? cards[ 0 ].getBoundingClientRect().width + 28 : 180;
	};

	if ( prevBtn ) {
		prevBtn.addEventListener( 'click', function () {
			track.scrollBy( { left: -scrollAmount(), behavior: 'smooth' } );
		} );
	}
	if ( nextBtn ) {
		nextBtn.addEventListener( 'click', function () {
			track.scrollBy( { left: scrollAmount(), behavior: 'smooth' } );
		} );
	}
})();
