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

        //When page is ready, a fixed menu is shown when scrolling even if the page is refreshed
        const headerScroll = document.querySelector('.navigation-bar');
        const recBounding = headerScroll.getBoundingClientRect();
        const topDistance = Math.round(Math.abs(recBounding.top));
        fixedMenu(topDistance);        
    });

})(jQuery);


window.onscroll = () => {
    let scroll = Math.round(window.scrollY);
    fixedMenu(scroll);
}

//Adds a fixed menu on top
function fixedMenu(scrollEffect){
    const headerScroll = document.querySelector('.navigation-bar');
    if(scrollEffect > 200){
        headerScroll.classList.add('navFixedTop');
    } else {
        headerScroll.classList.remove('navFixedTop');
    }
}
