$(document).ready(function () {

    function HeaderMove(){
        if ($("header").length){
            let $menu = $("header");
            $(window).scroll(function() {
                let winScrollTop = $(this).scrollTop();
                if ( winScrollTop > 100 && $menu.hasClass("default")){
                    $menu.removeClass("default").addClass("moved");
                } else if(winScrollTop <= 100 && $menu.hasClass("moved")) {
                    $menu.removeClass("moved").addClass("default");
                }
            });
        }
    }
    function FrescoInit(){
        // $("div.fresco").on("click", function (event) {
        //     event.preventDefault();
        //     Fresco.show($(this).data('fresco'));
        // });
    }
    function SferaInit(){
        if ($(".about__sfera").length){
            setTimeout(function() {
                $(".about__sfera").addClass('loaded-sfera');
            }, 3000);
        }
    }

    SferaInit();
    FrescoInit();
    HeaderMove()
    function ClinicSlider(){
        if ($(".clinic").length){
            var ClinicSlider = new Swiper(".clinic .swiper-container", {
                slidesPerView: 5,
                loop: true,
                centeredSlides: true,
                spaceBetween: 20,
                noSwiping: true,
                draggable: false,
                allowTouchMove: false,
                mousewheel: {
                    releaseOnEdges: true,
                },
                navigation: {
                    nextEl: ".clinic__slider-next",
                    prevEl: ".clinic__slider-prev",
                },
            });
        }
    }

    ClinicSlider();

    barba.init({
        transitions: [{
            name: 'StartContainer',
            leave() {
                // create your stunning leave animation here
            },
            enter() {
                StartContainer();
                SferaInit();
                FrescoInit();
                ClinicSlider();
                HeaderMove();
            }
        }]
    });



    if ($(".popup").length){
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $('.fade').removeClass('showed');
            $('.fade__container').fadeOut(300);
            $('.popup').fadeIn(300);
            $('#success-send').fadeIn(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function (){
                $('#success-send').fadeOut(300);
                $('.popup').fadeOut(300);
            }, 2000);
        }, false );
    };

    function StartContainer(){
        var swiper = new Swiper(".start-container .swiper-container", {
            slidesPerView: 4,
            centeredSlides: true,
            spaceBetween: 84,
            mousewheel: {
                releaseOnEdges: true,
            },
        });
    }
    if ($('.start-container').length) {
        StartContainer();
    }

});

