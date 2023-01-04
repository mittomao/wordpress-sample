jQuery(document).ready(function() {
    function sponsor_image_upload() {
       jQuery('body').on('click', '#sponsor-image-uploadbtn', function(event) {
          event.preventDefault;
          wp.media.editor.send.attachment = function(props, attachment) {
             jQuery('#sponsor-image-id').val(attachment.url);
             jQuery('#sponsor-image-img').attr('src', attachment.url).css('display', 'block');
          }
          wp.media.editor.open('#sponsor-image-uploadbtn');
          return false;
       });
    }
    sponsor_image_upload();
 });