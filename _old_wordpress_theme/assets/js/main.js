/**
 * Kiwa Personal Media — main.js
 * Minimal vanilla JS. No jQuery, no external libraries.
 */

(function () {
	'use strict';

	const prefersReducedMotion =
		window.matchMedia('(prefers-reduced-motion: reduce)').matches;

	/* ---- Scroll class on body ---- */
	function handleScroll() {
		if (window.scrollY > 20) {
			document.body.classList.add('is-scrolled');
		} else {
			document.body.classList.remove('is-scrolled');
		}
	}

	if (!prefersReducedMotion) {
		window.addEventListener('scroll', handleScroll, { passive: true });
	}

	/* Run once on load in case page is already scrolled */
	handleScroll();

	/* ---- Placeholder: future lightweight additions ---- */
	// e.g. intersection observer for fade-in, copy-to-clipboard for code blocks
})();
