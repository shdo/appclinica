
;
$(document).on("ready", LOGEO);


function LOGEO() {
    $(".username").focus(function() {
        $(".user-icon").css("left", "-48px");
    });
    $(".username").blur(function() {
        $(".user-icon").css("left", "0px");
    });

    $(".password").focus(function() {
        $(".pass-icon").css("left", "-48px");
    });
    $(".password").blur(function() {
        $(".pass-icon").css("left", "0px");
    });
}


;
$(document).on("ready", menuVertical);


function menuVertical() {

    var menu_ul = $('.menu > li > ul'),
            menu_a = $('.menu > li > a');

    menu_ul.hide();

    menu_a.click(function(e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true, true).slideDown('normal');
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true, true).slideUp('normal');
        }
    });
}

