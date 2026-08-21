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
