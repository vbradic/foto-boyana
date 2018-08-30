$("#weddings-scroll-start").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#weddings-scroll-end").offset().top
    }, 1500);
});

$("#vow-scroll-start").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#vow-scroll-end").offset().top
    }, 1500);
});

$("#family-scroll-start").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#family-scroll-end").offset().top
    }, 1500);
});

$("#maternity-scroll-start").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#maternity-scroll-end").offset().top
    }, 1500);
});