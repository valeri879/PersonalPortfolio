$(document).ready(function () {

    var height = $(window).height();
    $('.main').css({height: height});

    //fixed menu
    $(window).scroll(function () {
        if ($(window).scrollTop() > height) {
            $(".menu, .menu-button").addClass("fixed");
            $("#personal-detail").addClass("margin");
        } else {
            $(".menu, .menu-button").removeClass("fixed");
            $("#personal-detail").removeClass("margin");
        }
    });

    //mobile menu
    $(".menu-button").on("click", function () {
        $(".bg, .menu-ul-mobile").addClass("active");
        $("body").addClass("no-scroll");
    });

    $(".menu-ul-mobile a").on("click", function () {
        $(".bg, .menu-ul-mobile").removeClass("active");
        $("body").removeClass("no-scroll");
    });


    //animate css
    AOS.init({
        duration: 1200
    });


    //anchor navigate
    var $root = $('html, body');
    $('a').on('click', function (event) {
        var hash = this.hash;
        // Is the anchor on the same page?
        if (hash && this.href.slice(0, -hash.length - 1) == location.href.slice(0, -location.hash.length - 1)) {
            $root.animate({
                scrollTop: $(hash).offset().top
            }, 'normal', function () {
                location.hash = hash;
            });
            return false;
        }
    });

});