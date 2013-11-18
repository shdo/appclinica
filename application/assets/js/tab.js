$(document).ready(function() {
    $(".content_tab").hide();
    $("ul.tabs li:first").addClass("active").show();
    $(".content_tab:first").show();

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active");
        $(this).addClass("active");
        $(".content_tab").hide();
        var activeTab = $(this).find("a").attr("href");
        $(activeTab).fadeIn();
        return false;
    });
});
