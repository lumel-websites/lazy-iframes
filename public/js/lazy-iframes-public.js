(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	 $(document).ready(function(e){
		$('.lazy-iframe-overlay').click(function(ee){
			var url = $(this).parent().data('url');
			var embed_code = '';
			if(url!=""){
				embed_code = '<iframe loading="lazy" src="' + url  + '&autoplay=1&volume=1" allowtransparency="true" allow="autoplay" frameborder="0" scrolling="no" class="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen></iframe>';
				$(this).parent().find('.lazy-iframe-wrapper').html(embed_code);
				$(this).hide();	
			}
		});
	});

})( jQuery );
