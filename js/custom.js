(function($) {
	$( ".menu-mobile-search" ).click(function() {
	  event.preventDefault();
	  $( "#searchForm__form" ).toggleClass( "search-toggle" );
	});

	$( "#searchForm__close" ).click(function() {
	  event.preventDefault();
	  $( "#searchForm__form" ).toggleClass( "search-toggle" );
	});
}(jQuery));