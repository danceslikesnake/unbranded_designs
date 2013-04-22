$(document).ready(function() {
    // slider demonstration styles
    $('.info_overlay').css({ opacity: 0.9 });
    $('.comment_options').css({ opacity: 0.5 });

    // comment hover effects
    $('.comment_wrapper').hover(
        function(){
            $(this).find('.comment_options').css({ opacity: 1 });
        },
        function(){
            $(this).find('.comment_options').css({ opacity: 0.5 });
        }
    );
});

// preload images
var image1 = $('<img />').attr('src', 'ubd_imgs/hide_rest.gif');
var image2 = $('<img />').attr('src', 'ubd_imgs/hide_hover.gif');
var image3 = $('<img />').attr('src', 'ubd_imgs/extend_rest.gif');
var image4 = $('<img />').attr('src', 'ubd_imgs/extend_hover.gif');

// info controls
function hide_info_display()
{
    $(".design_detail_info_wrapper").hide("slide", { direction: "right" }, 200);
    $(".design_detail_info_controls").html('<a href="javascript:;" onclick="show_info_display(); return false;" class="extend_info">Extend Info</a>');
}
function show_info_display()
{
    $(".design_detail_info_wrapper").show("slide", { direction: "right" }, 200);
    $(".design_detail_info_controls").html('<a href="javascript:;" onclick="hide_info_display(); return false;" class="hide_info">Hide Info</a>');
}