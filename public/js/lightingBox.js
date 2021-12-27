$(document).ready(() => {
    $(() => {
        let big = $(".big");
        let hiddenLi = $('.image-gallery ul li:last-child');
        $(".little").click(function () {
            let sourceLittleImg = $(this).attr('src');
            let sourceBigImg = sourceLittleImg.replace("little", "big");
            big.html("<img src='" + sourceBigImg + "' alt='amal_tay_coaching'>" + "<button type='button' class='btn-close btn-close-white' aria-label='Close'></button>");
            hiddenLi.css("display", "block");
            big.fadeIn("500ms");
        });
        big.click(function () {
            $(".big").fadeOut("fast");
            hiddenLi.css("display", "none");
        });

    })
});
