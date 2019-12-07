jQuery(function ($) {
    
    $(document).ready(function() {

        // one page navigation plugin
        $('.js-nav__menu').onePageNav({
            currentClass: 'nav__item--current',
            changeHash: false,
            navHeight: 99, 
            scrollSpeed: 750
        });

        // open / close the navigation in a small resolution 
        $('.js-nav__menu .nav__item').click(function() {
            $('.nav').removeClass('nav--opened');
            $('.nav__toggler').removeClass('nav__toggler--opened');
        });

        $('.js-nav__toggler').click(function() {
            $('.nav').toggleClass('nav--opened');
            $(this).toggleClass('nav__toggler--opened');
        });

    });

    $(document).scroll(function() {
        $('.js-nav').toggleClass('nav--sticked', $(document).scrollTop() >= 20);
    });

});