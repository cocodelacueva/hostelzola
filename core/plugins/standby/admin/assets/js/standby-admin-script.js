jQuery(document).ready(function() {
 
jQuery('#upload-image-button').click(function() {
 var formfield = jQuery('#upload-image').attr('name');
 tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
 return false;
});

window.send_to_editor = function(html) {
var imgurl = jQuery('img',html).attr('src');
 jQuery('#upload-image').val(imgurl);
 tb_remove();
}


});