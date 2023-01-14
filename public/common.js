//Start Fixed header
window.onscroll = function () {
    myFunction()
};
var header = $("#fixheader");
var sticky = header.offsetTop;

function myFunction() {
    if ($(this).scrollTop() > 400 && $(this).width() >= 320) {
        header.addClass("sticky").removeClass("sticky-down");
    } else {
        header.removeClass("sticky").addClass("sticky-down");
    }
}
//End Fixed header


//Start Toggle menu
function toggleMenu() {
    event.stopPropagation();
    $("#menuToggle").toggleClass('active');
}
//End Toggle menu

//Start Smoothscroll
$('.smoothscroll').on('click', function (e) {
    e.preventDefault();
    var hash = $(this).data('href');
    if (hash !== "") {
        event.preventDefault();
        var top = $(hash).offset().top;
        var newtop = (top - 80);
        window.location.hash = hash;
        $('html, body').animate({
            scrollTop: newtop
        }, 1200);
    }
});
//End Smoothscroll
