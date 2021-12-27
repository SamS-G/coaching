$(document).ready(() => {
    if ($(window).width() <= 1281) {

        $(".flex-r").removeClass("flex-r").addClass("flex-c");
    }
})

function isTouchDevice() {
    return typeof window.ontouchstart !== 'undefined';
}

$(document).ready(() => {
    if (isTouchDevice()) {
        // 1st click, add "clicked" class, preventing the location change. 2nd click will go through.
        $(".discipline-card").click(function (event) {
            // Perform a reset - Remove the "clicked" class on all other menu items
           $(".discipline-card").not(this).removeClass("clicked");
            $(".mobile-hover").not(this).removeClass("mobile-hover");

            $(this).toggleClass("clicked");
            $(this).find(".drop-down-window").toggleClass("mobile-hover");

            if ($(this).hasClass("clicked")) {

                event.preventDefault();
            }
        });

    }
});
