jQuery(function ($) {   // All scripts after this line (with this we can use jQuery symbol"$" inside Wordpress!!)
    

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

        // var home = $('#section__home').outerHeight();
        // console.log(home);

        // $(window).scroll(function() {
        //     $('.js-nav').toggleClass('nav--sticked', $(document).scrollTop() >= 20);
        // });



        // slider
        $(".js-team__slider").slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 8000,
            dots: true,
            infinite: true,
            centerMode: true,
            centerPadding: '30px'
        });

    });




    /*********************************** NAVIGATION EFFECT *****************************************/
    // Add .nav--sticked after X scroll
    var flag = false;
    $(window).scroll(function () { 
    var scroll = $(this).scrollTop();
    // if (scroll >= $('#section__home').outerHeight() ) { //After section section__home
    if (scroll >= 1 ) { //After 1px
        if(!flag){
        $('nav').addClass('nav--sticked');
        flag = true;
        }
    }
    else {
        if(flag){
        $('nav').removeClass('nav--sticked');
        flag = false;
        }
    }
    });

    // Hide Nav on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 0;
    var navbarHeight = $('nav').outerHeight();

    $(window).scroll(function(event){
    didScroll = true;
    });

    setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
    }, 50);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
        return;
        
        // If scrolled down and past the navbar, add class .nav-up.
        // This is needed so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.nav--sticked').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
            $('.nav--sticked').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
        }
    /*********************************** NAVIGATION EFFECT *****************************************/


}); // All scripts before this line