(function( $ ) {
    // $( document ).ready( function() {
    //     $( '#masonry' ).magnificPopup( {
    //         delegate: 'a',
    //         type: 'image',
    //         tLoading: 'Loading...',
    //         mainClass: 'masonry-lightbox',
    //         gallery: {
    //             enabled: true,
    //             navigateByImgClick: false,
    //             preload: [0, 1],
    //         },
    //     } );
    // } );

    $( document ).ready( function() {
        var $grid = $( '#masonry' ).imagesLoaded( function() {
            $grid.masonry( {
                itemSelector: '.grid-img',
                columnWidth: '.grid-sizer',
                percentPosition: true,
                gutter: '.gutter-sizer',
            } );
        } );
    } );
})( jQuery );
