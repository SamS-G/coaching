$(document).ready(function() {
// When the user scrolls the page, execute myFunction
    $(window).scroll(function () {
        myFunction()
    });

    let navbar = $("#myheader");
    let sticky = navbar.offset().top;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if ($(window).scrollTop()  >+ sticky) {
            navbar.addClass("sticky-navbar");
        } else {
            navbar.removeClass("sticky-navbar");
        }
    }

})
