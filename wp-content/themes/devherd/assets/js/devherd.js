(function( $ ) {
    $( document ).ready( function() {
        $( '#masonry' ).magnificPopup( {
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading...',
            mainClass: 'masonry-lightbox',
            gallery: {
                enabled: true,
                navigateByImgClick: false,
                preload: [0, 1],
            },
        } );
    } );
})( jQuery );
