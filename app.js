$(document).ready(function(){
    const nav = $("#navigation");
    const navTop = nav.offset().top;

    $(window).on("scroll", stickyNavigation);

    function stickyNavigation() {
        let body = $("body");

        if($(window).scrollTop()>= navTop) {
            body.addClass("fixedNav");
        }
        else {
            body.removeClass("fixedNav")
        }
    }

});