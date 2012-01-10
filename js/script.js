/* Author:  */

// Use this function to toggle .show-grid
// Best to be used in development environments
function showGrid() {
	if (!jQuery){
		console.log('jQuery missing');
		return false;
	} else {
		$ = jQuery;
		$('.container_12, .container_16, .container_24').toggleClass('show-grid');
		return;
	}
}