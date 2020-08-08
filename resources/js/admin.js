const ClassicEditor=require('@ckeditor/ckeditor5-build-classic')
const SimpleUploadAdapter =require('@ckeditor/ckeditor5-upload/src/adapters/simpleuploadadapter')

ClassicEditor
    .create( document.querySelector( '#post-content' ),{

        simpleUpload: {
            // Feature configuration.
        }
    }, {
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link' ]
    } )
    .then( editor => {
        window.editor = editor;
    } )
    .catch( err => {
        console.error( err.stack );
    } );