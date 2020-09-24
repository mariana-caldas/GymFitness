(function ($) {
    $(document).ready(function () {
        //Main menu
        $('#menu-main-menu').slicknav();

        //Run bxSlider on testimonials
        $('.testimonials-list').bxSlider({
            auto: true,
            pause: 6000,
            controls: false,
            mode: 'fade'
        });
    });

})(jQuery);
