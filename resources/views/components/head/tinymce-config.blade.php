<script src="https://cdn.tiny.cloud/1/n0xxrbdp224awa9s0dppn8ykll5e80819iqsp5r3942leytw/tinymce/6/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
tinymce.init({
    selector: 'textarea#job_details', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists ',
    height: 700,
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',


});
tinymce.init({
    selector: 'textarea#casecontent', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'image code table lists ',

    toolbar: 'undo redo | blocks | link image | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
    image_title: true,
    automatic_uploads: true,
    file_picker_types: 'image',
    /* and here's our custom image picker*/
    file_picker_callback: (cb, value, meta) => {
        const input = document.createElement('input');
        input.setAttribute('type', 'file');
        input.setAttribute('accept', 'image/*');

        input.addEventListener('change', (e) => {
            const file = e.target.files[0];

            const reader = new FileReader();
            reader.addEventListener('load', () => {
                /*
                  Note: Now we need to register the blob in TinyMCEs image blob
                  registry. In the next release this part hopefully won't be
                  necessary, as we are looking to handle it internally.
                */
                const id = 'blobid' + (new Date()).getTime();
                const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                const base64 = reader.result.split(',')[1];
                const blobInfo = blobCache.create(id, file, base64);
                blobCache.add(blobInfo);

                /* call the callback and populate the Title field with the file name */
                cb(blobInfo.blobUri(), {
                    title: file.name
                });
            });
            reader.readAsDataURL(file);
        });

        input.click();
    },
    content_style: 'body { font-family:Play,Arial,sans-serif; font-size:16px }'

});
</script>