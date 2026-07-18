/**
 * Theme navigation script.
 *
 * @package Leto_Starter
 */
( function () {
	'use strict';

	// --- Mobile menu toggle ---
	const toggle = document.querySelector( '.leto-menu-toggle' );
	const nav = document.getElementById( 'leto-primary-menu' );

	if ( toggle && nav ) {
		toggle.addEventListener( 'click', function () {
			const isOpen = nav.classList.toggle( 'is-open' );
			toggle.setAttribute( 'aria-expanded', isOpen ? 'true' : 'false' );
		} );

		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && nav.classList.contains( 'is-open' ) ) {
				nav.classList.remove( 'is-open' );
				toggle.setAttribute( 'aria-expanded', 'false' );
				toggle.focus();
			}
		} );
	}

	// --- Testimonials carousel ---
	const carousels = document.querySelectorAll( '[data-testimonials-carousel]' );

	carousels.forEach( function ( carousel ) {
		const slides = carousel.querySelectorAll( '[data-slide]' );
		const prevBtn = carousel.querySelector( '[data-testimonials-prev]' );
		const nextBtn = carousel.querySelector( '[data-testimonials-next]' );
		const dots = document.querySelectorAll( '[data-testimonials-dot]' );

		if ( ! slides.length ) {
			return;
		}

		let current = 0;
		const total = slides.length;

		function show( index ) {
			// Wrap around.
			if ( index < 0 ) {
				index = total - 1;
			} else if ( index >= total ) {
				index = 0;
			}

			slides.forEach( function ( slide, i ) {
				if ( i === index ) {
					slide.removeAttribute( 'hidden' );
				} else {
					slide.setAttribute( 'hidden', '' );
				}
			} );

			dots.forEach( function ( dot, i ) {
				if ( i === index ) {
					dot.classList.add( 'is-active' );
					dot.setAttribute( 'aria-selected', 'true' );
				} else {
					dot.classList.remove( 'is-active' );
					dot.setAttribute( 'aria-selected', 'false' );
				}
			} );

			current = index;
		}

		if ( prevBtn ) {
			prevBtn.addEventListener( 'click', function () {
				show( current - 1 );
			} );
		}

		if ( nextBtn ) {
			nextBtn.addEventListener( 'click', function () {
				show( current + 1 );
			} );
		}

		dots.forEach( function ( dot ) {
			dot.addEventListener( 'click', function () {
				const index = parseInt( dot.getAttribute( 'data-testimonials-dot' ), 10 );
				if ( ! isNaN( index ) ) {
					show( index );
				}
			} );
		} );

		// Keyboard navigation: Left/Right arrow keys when focus is inside carousel.
		carousel.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'ArrowLeft' ) {
				show( current - 1 );
			} else if ( e.key === 'ArrowRight' ) {
				show( current + 1 );
			}
		} );
	} );
}() );
