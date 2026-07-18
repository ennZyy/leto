/**
 * Modal window behaviour for the theme.
 *
 * @package Leto_Starter
 */
( function () {
	'use strict';

	const FOCUSABLE = 'a[href], button:not([disabled]), input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])';

	function getModal() {
		return document.getElementById( 'leto-tour-modal' );
	}

	function getFocusable( modal ) {
		return Array.prototype.slice.call( modal.querySelectorAll( FOCUSABLE ) );
	}

	function openModal( modal ) {
		modal.removeAttribute( 'hidden' );
		document.body.classList.add( 'leto-modal-open' );

		const focusable = getFocusable( modal );
		if ( focusable.length ) {
			focusable[0].focus();
		}

		document.addEventListener( 'keydown', onKeydown );
	}

	function closeModal( modal ) {
		modal.setAttribute( 'hidden', '' );
		document.body.classList.remove( 'leto-modal-open' );
		document.removeEventListener( 'keydown', onKeydown );

		const opener = document.querySelector( '[data-leto-modal-open="leto-tour-modal"]' );
		if ( opener ) {
			opener.focus();
		}
	}

	function onKeydown( e ) {
		const modal = getModal();
		if ( ! modal || modal.hasAttribute( 'hidden' ) ) {
			return;
		}

		if ( 'Escape' === e.key ) {
			closeModal( modal );
			return;
		}

		if ( 'Tab' === e.key ) {
			const focusable = getFocusable( modal );
			if ( ! focusable.length ) {
				return;
			}
			const first = focusable[0];
			const last = focusable[ focusable.length - 1 ];

			if ( e.shiftKey && document.activeElement === first ) {
				e.preventDefault();
				last.focus();
			} else if ( ! e.shiftKey && document.activeElement === last ) {
				e.preventDefault();
				first.focus();
			}
		}
	}

	const modal = getModal();

	if ( modal ) {
		const openers = document.querySelectorAll( '[data-leto-modal-open="leto-tour-modal"]' );
		openers.forEach( function ( opener ) {
			opener.addEventListener( 'click', function () {
				openModal( modal );
			} );
		} );

		const closers = modal.querySelectorAll( '[data-leto-modal-close]' );
		closers.forEach( function ( closer ) {
			closer.addEventListener( 'click', function () {
				closeModal( modal );
			} );
		} );

		document.addEventListener( 'wpcf7mailsent', function ( e ) {
			const form = e.detail ? e.detail.form : null;
			if ( form && modal.contains( form ) ) {
				setTimeout( function () {
					closeModal( modal );
				}, 2500 );
			}
		} );
	}
}() );
