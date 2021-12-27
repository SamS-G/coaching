$(document).ready(function () {
    if ($(window).width() >= 768) {
        function scrollSpy() {

            const sections = ['home', 'amal-concept', 'for-who', 'amal-description', 'testimonial', 'disciplines', 'prestations', 'contact'];
            let current;

            for (let i = 0; i < sections.length; i++) {
                let currentLoop = $('#' + sections[i]);
                if (currentLoop.length && currentLoop.offset().top - 200 <= $(window).scrollTop()) {
                    current = sections[i];
                }
            }
            $("." + current).addClass('actived');
            $("nav ul li a").not("." + current).removeClass('actived');
        }

/* smooth scrolling navigation
        $("nav ul li a").click(() => {
            const target = $(this).attr("href");
            console.log(target)
            $("body, html").animate({
                scrollTop: $(target).offset().top
            }, 300);
            return false;
        });

        scrollSpy();

        $(window).scroll(() => {
            scrollSpy();
        })*/
    }
})



