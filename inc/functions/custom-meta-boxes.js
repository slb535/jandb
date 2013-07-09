/************************************************************
 This code will display the #link-post-url field if the post
 has the post format of 'link', or display the
 #video-post-code field if the post has the post format of
 video, or alternatively it will not show any additional
 fields if neither of the above two post formats are
 selected.
************************************************************/

(function($) {
    if($('#post-format-link').is(":checked")) {
        $('#link-post-url').css('display', 'block');
        $('#link-post-caption').css('display', 'block');
    }
    else if($('#post-format-video').is(":checked")) {
        $('#video-post-code').css('display', 'block');
    }
    else {
        $('#post-details').css('display', 'none');
    }
})(jQuery);