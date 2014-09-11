$(document).ready(function () {
    $('.llFlaskrArticleForm #content').summernote();

    $('.llFlaskrArticleForm').submit(function () {
        setTimeout(function () {
            $('#content').val($('.llFlaskrArticleForm #content').code());
        }, 50);
    });
});