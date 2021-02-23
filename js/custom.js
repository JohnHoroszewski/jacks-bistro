jQuery( document ).ready( function( $ ){

    $nav = $( '.main-navigation' );

    $( '.mobile-menu i' ).on( 'click', function(){
        $( this ).toggleClass( 'opened' );

        $nav.slideToggle();
    });

    $( window ).scroll( function() {

		var $parallax = $( '.parallax' ),
            $wScroll = $( this ).scrollTop(),
            $itemPos = $parallax.offset(),
            $compScroll = $wScroll - $itemPos.top;
            
		$parallax.css({
			'background-position-y' :  -$compScroll /8  ,
        });
        
        if ( $(window).width() > 1023 ) {
            if ( $wScroll > 400 ) {
                $( '.top-header' ).addClass( 'scrolled' );
            } else {
                $( '.top-header' ).removeClass( 'scrolled' );
            }
        }
    });
});