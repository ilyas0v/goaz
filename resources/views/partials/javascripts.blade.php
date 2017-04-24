<script src="js/jquery-2.1.4.min.js"></script><!-- jQuery library -->
<script src="js/bootstrap.min.js"></script><!-- .bootstrap script -->
<script src="js/jquery.srcipts.min.js"></script><!-- modernizr, retina, stellar for parallax -->
<script src="owl-carousel/owl.carousel.min.js"></script><!-- Carousels script -->
<script src="masterslider/masterslider.min.js"></script><!-- Master slider main js -->
<script src="js/jquery.dlmenu.min.js"></script><!-- for responsive menu -->
<script src="js/include.js"></script><!-- custom js functions -->

<script>
    /* <![CDATA[ */
    jQuery(document).ready(function ($) {
        'use strict';

        // MASTER SLIDER START
        var slider = new MasterSlider();
        slider.setup('masterslider', {
            width: 1140, // slider standard width
            height: 654, // slider standard height
            space: 0,
            speed: 50,
            layout: "fullwidth",
            centerControls: false,
            loop: true,
            autoplay: true
                    // more slider options goes here...
                    // check slider options section in documentation for more options.
        });
        // adds Arrows navigation control to the slider.
        slider.control('arrows');

        // CLIENTS CAROUSEL START
        $('#client-carousel').owlCarousel({
            items: 6,
            loop: true,
            margin: 30,
            responsiveClass: true,
            mouseDrag: true,
            dots: false,
            responsive: {
                0: {
                    items: 2,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                600: {
                    items: 3,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsiveClass: true,
                    mouseDrag: true
                }
            }
        });
    });
    /* ]]> */
</script>
