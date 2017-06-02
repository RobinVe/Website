$(function () {
    var top = $('.navbar').offset().top - parseFloat($('.navbar').css('marginTop').replace(/auto/, 0));
    var footTop = $('#footer').offset().top - parseFloat($('#footer').css('marginTop').replace(/auto/, 0));
    var maxY = footTop - $('.navbar').outerHeight();

    $(window).scroll(function (evt) {
        var y = $(this).scrollTop();
        if (y > top) {
            if (y < maxY) {
                $('.navbar').addClass('fixed').removeAttr('style');
            } else {
                $('.navbar').removeClass('fixed').css({
                    position: 'absolute',
                    top: (maxY - top) + 'px'
                });
            }
        } else {
            $('.navbar').removeClass('fixed');
        }
    });
});

(function () {
    $(document).ready(function () {
        return $(window).scroll(function () {
            return $(window).scrollTop() > 200 ? $("#back-to-top").addClass("show") : $("#back-to-top").removeClass("show")
        }), $("#back-to-top").click(function () {
            return $("html,body").animate({
                scrollTop: "0"
            })
        })
    })
}).call(this);
