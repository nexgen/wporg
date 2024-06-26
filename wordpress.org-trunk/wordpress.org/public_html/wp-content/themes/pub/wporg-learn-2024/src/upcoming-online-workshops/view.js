/**
 * WordPress dependencies
 */
import { format } from '@wordpress/date';

( () => {
	const utcDates = document.querySelectorAll( '[data-date-utc]' );

	Array.from( utcDates ).forEach( ( date ) => {
		const utc = date.dataset.dateUtc;

		date.textContent = format( 'g:i a (\\U\\T\\CP)', utc );
	} );
} )();
