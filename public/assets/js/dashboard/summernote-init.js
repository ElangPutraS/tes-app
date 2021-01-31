$('textarea[name="description"]').summernote({
    placeholder: 'Description...',
    tabsize: 2,
    height: 100,
    toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['view', ['fullscreen', 'codeview', 'help']],
        ['link', ['linkDialogShow', 'unlink']]
    ],
});
