$(document).ready(function() {
    // slider demonstration styles
    $('.slider_background_overlay').css({ opacity: 0.8 });
    $('.design_list_img_overlay').css({ opacity: 0.85 });
    $('.info_overlay').css({ opacity: 0.9 });

    $('a.design_list_thumbnail').hover(
        function(){
            $(this).find('.design_list_img_overlay').stop().animate({ backgroundColor:'#fc354c'},220);
        },
        function(){
            $(this).find('.design_list_img_overlay').stop().animate({ backgroundColor:'#29221f'},220);
        }
    );

    $('.field').focus(function() {
        $(this).css({ backgroundColor: '#FFFFFF' });
    });
    $('.field').blur(function() {
        $(this).css({ backgroundColor: '#fefdf0' });
    });

});