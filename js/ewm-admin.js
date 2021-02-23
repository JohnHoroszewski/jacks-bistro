jQuery(document).ready(function($){

    var mediaUploader;

    $( '#upload-button' ).on( 'click', function( e ){
        e.preventDefault();

        if ( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Company Logo',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        mediaUploader.on( 'select', function(){
            attachement = mediaUploader.state().get( 'selection' ).first().toJSON();
            $( '#company-logo' ).val( attachement.url );
            $( '#admin-logo-image' ).attr( 'src', attachement.url );
        });

        mediaUploader.open();

    });

});