$(document).ready(function () {

    barba.init({
        prefetchIgnore: true,
        transitions: [{
            name: 'base',
            async leave(data) {
                await pageAnimIn(data.current.container)
                data.current.container.remove();
            },
            async enter(data) {
                SferaInit();
                PlayVideo();
                MainStartAnimate();
                StartContainer();
                ClinicSlider();
                HeaderMove();
                ShowAcardeon();
                MapsList();
                PotrfolioStom();
                ReviewsContainer();
                MobMenuInit();
                PopupInit();
                await pageAnimOut(data.next.container)
            }
        }]
    });

    function MobMenuInit(){
        if ($(".header__mob").length){
            $( ".header__burger" ).on( "click", function() {
                $(this).toggleClass('active');
                $('.start__decoration-top').toggleClass('burger-active').css({transition: "all 1s", 'transition-delay': "0.5s"});
                setTimeout(function() {
                    $('.header__mob').fadeToggle(300);
                }, 700);
            } );
        }
    }
    MobMenuInit();
    function AosStart(){
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 1000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    }
    AosStart()
    function HeaderMove(){
        if ($("header").length){
            let $menu = $("header");
            $(window).scroll(function() {
                let winScrollTop = $(this).scrollTop();
                if ( winScrollTop > 100 && $menu.hasClass("default")){
                    $menu.removeClass("default").addClass("moved");
                    $('.start__decoration-top').addClass("moved");
                } else if(winScrollTop <= 100 && $menu.hasClass("moved")) {
                    $menu.removeClass("moved").addClass("default");
                } else if(winScrollTop <= 80 && $('.start__decoration-top').hasClass("moved")) {
                    $('.start__decoration-top').removeClass("moved");
                }
            });
        }
    }
    HeaderMove();
    function ShowAcardeon(){
        if ($(".service").length){
            $( ".service__head" ).on( "click", function() {
                $(this).closest('.service__item').find('.service__content').toggleClass('open');
            } );
        }
    }
    ShowAcardeon();
    function SferaInit(){
        if ($(".about__sfera").length){
            setTimeout(function() {
                $(".about__sfera").addClass('loaded-sfera');
            }, 1000);
        }
    }
    SferaInit();
    // FrescoInit();
    function ClinicSlider(){
        if ($(".clinic").length){
            var ClinicSlider = new Swiper(".clinic .swiper-container", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 30,
                    stretch: 0,
                    depth: 300,
                    modifier: 0.5,
                    slideShadows: true,
                },
                loop: true,
                navigation: {
                    nextEl: ".clinic__slider-next",
                    prevEl: ".clinic__slider-prev",
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 5,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 480px
                    500: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 4,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 640px
                    768: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 3,
                            slideShadows: true,
                        },
                    },
                    1200: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 300,
                            modifier: 1.5,
                            slideShadows: true,
                        },
                    }
                }
            });
        }
    }
    ClinicSlider();

    function MainStartAnimate(){
        if ($(".start-container").length){
            gsap.from('.start__sfera', {opacity: 0, duration: 2, delay: 1, scaleX: 7, scaleY:7});
            gsap.from('.start__decoration-left', {opacity: 0, duration: 1, delay: 2, scaleX: 3, scaleY:3, x: "200px", y: "100px"});
            gsap.from('.start__decoration-top', {opacity: 0, delay: 2, scaleX: 3, scaleY:3, x: "-300px", y: "300px"});
            gsap.from('.start__decoration-bottom', {opacity: 0, duration: 1, delay: 2, scaleX: 3, scaleY:3, x: "-300px", y: "-200px"});
            gsap.from('.start__socials', {opacity: 0, duration: 0.5, delay: 2.3, x: "-100px"});
            gsap.from('.start__contacts', {opacity: 0, duration: 0.5, delay: 2.3, x: "100px" });
            gsap.from('.header__will', {duration: 0.5, delay: 4, y: "100%" });
            gsap.to('.header__will', {opacity: 0, duration: 0.5, delay: 5});
            gsap.from('.header__nav', {opacity: 0, duration: 1, delay: 6 });
            // gsap.to('.start__sfera', {zIndex: 1, duration: 0.3, delay: 5});
        }
    }
    MainStartAnimate();
    function pageAnimIn(container){
        const  tl = gsap.timeline();
        let WidthWind = $( window ).width();
        return tl.to(container.querySelector('.preloader-page'), {
           width: WidthWind,
            duration: 0.5
        })
    }
    function pageAnimOut(container){
        const  tl = gsap.timeline();
        let WidthWind = $( window ).width();
        return tl.from(container.querySelector('.preloader-page'), {
            width: WidthWind,
            duration: 0.5
        })
            .call(AosStart, [container])
    }
    function PlayVideo(){
        if ($("#myVideo").length){
            document.getElementById('myVideo').play();
        }
    }
    PlayVideo();

    function PopupInit(){
        if ($(".popup").length){
            document.addEventListener( 'wpcf7mailsent', function( event ) {
                $('.popup').fadeOut(300);
                $('#success-send').fadeIn(300);
                $('.wpcf7-response-output').empty();
                setTimeout(function (){
                    $('#success-send').fadeOut(300);
                }, 2000);
            }, false );
            $(".js-form").click(function () {
                // $('body').removeClass('locked');
                $('.popup').fadeIn(300);
            });
            $(".popup__close").click(function () {
                // $('body').removeClass('locked');
                $(this).closest('.popup').fadeOut(300);
            });
        };
    }
    PopupInit();

    function StartContainer(){
        if ($(".start-container .swiper-container").length){
            var swiper = new Swiper(".start-container .swiper-container", {
                slidesPerView: 4,
                centeredSlides: true,
                spaceBetween: 84,
                mousewheel: {
                    releaseOnEdges: true,
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    // when window width is >= 480px
                    480: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    500: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    // when window width is >= 640px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 40
                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 40
                    }
                }
            });
        }
    }
    StartContainer();

    function ReviewsContainer(){
        var swiper = new Swiper(".reviews .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 20,
            mousewheel: {
                releaseOnEdges: true,
            },
            navigation: {
                nextEl: ".reviews .clinic__slider-next",
                prevEl: ".reviews .clinic__slider-prev",
            },
        });
    }
    if ($('.reviews').length) {
        ReviewsContainer();
    }

    function PotrfolioStom(){
        if ($('#portfolio__stomatolog-slider').length) {
            var PotrfolioStom = new Swiper("#portfolio__stomatolog-slider", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 5,
                    stretch: 0,
                    depth: 300,
                    modifier: 1.5,
                    slideShadows: true,
                },
                loop: true,
                navigation: {
                    nextEl: ".stomatolog-slider .clinic__slider-next",
                    prevEl: ".stomatolog-slider .clinic__slider-prev",
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 5,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 480px
                    500: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 4,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 640px
                    768: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 3,
                            slideShadows: true,
                        },
                    },
                    1200: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 300,
                            modifier: 1.5,
                            slideShadows: true,
                        },
                    }
                }
            });
            var PotrfolioStom1 = new Swiper("#portfolio__cosmetics-slider", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 5,
                    stretch: 0,
                    depth: 300,
                    modifier: 1.5,
                    slideShadows: true,
                },
                loop: true,
                navigation: {
                    nextEl: ".cosmetics-slider .clinic__slider-next",
                    prevEl: ".cosmetics-slider .clinic__slider-prev",
                },
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 5,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 480px
                    500: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 4,
                            slideShadows: true,
                        },
                    },
                    // when window width is >= 640px
                    768: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 100,
                            modifier: 3,
                            slideShadows: true,
                        },
                    },
                    1200: {
                        coverflowEffect: {
                            rotate: 5,
                            stretch: 0,
                            depth: 300,
                            modifier: 1.5,
                            slideShadows: true,
                        },
                    }
                }
            });
        }
    }

    PotrfolioStom();

    function MapsList(){
        if ($("#map1").length){
            function initMap1() {
                var positionx = $('#map1').closest('.contacts__item').data('setx');
                var positiony = $('#map1').closest('.contacts__item').data('sety');
                var element = document.getElementById('map1');
                var options = {
                    zoom: 14,
                    mapId: "",
                    center: {lat:  positionx, lng: positiony},
                };
                var myMap = new google.maps.Map(element, options);
                var markers = [
                    {
                        coordinates: {lat:  positionx, lng: positiony},
                    },
                ];
                for(var i = 0; i < markers.length; i++) {
                    addMarker(markers[i]);
                }
                function addMarker(properties) {
                    var IconImg = $('.contacts__list').data('marker');
                    var marker = new google.maps.Marker({
                        position: properties.coordinates,
                        icon: IconImg,
                        map: myMap
                    });
                    if(properties.image) {
                        marker.setIcon(properties.image);
                    }
                    if(properties.info) {
                        var InfoWindow = new google.maps.InfoWindow({
                            content: properties.info
                        });
                        marker.addListener('click', function(){
                            InfoWindow.open(myMap, marker);
                        });
                    }
                }
            }
            initMap1();
        }
        if ($("#map2").length){
            function initMap2() {
                var positionx = $('#map2').closest('.contacts__item').data('setx');
                var positiony = $('#map2').closest('.contacts__item').data('sety');
                var element = document.getElementById('map2');
                var options = {
                    zoom: 14,
                    mapId: "",
                    center: {lat:  positionx, lng: positiony},
                };
                var myMap = new google.maps.Map(element, options);
                var markers = [
                    {
                        coordinates: {lat:  positionx, lng: positiony},
                    },
                ];
                for(var i = 0; i < markers.length; i++) {
                    addMarker(markers[i]);
                }
                function addMarker(properties) {
                    var IconImg = $('.contacts__list').data('marker');
                    var marker = new google.maps.Marker({
                        position: properties.coordinates,
                        icon: IconImg,
                        map: myMap
                    });
                    if(properties.image) {
                        marker.setIcon(properties.image);
                    }
                    if(properties.info) {
                        var InfoWindow = new google.maps.InfoWindow({
                            content: properties.info
                        });
                        marker.addListener('click', function(){
                            InfoWindow.open(myMap, marker);
                        });
                    }
                }
            }
            initMap2();
        }
        if ($("#map3").length){
            function initMap3() {
                var positionx = $('#map3').closest('.contacts__item').data('setx');
                var positiony = $('#map3').closest('.contacts__item').data('sety');
                var element = document.getElementById('map3');
                var options = {
                    zoom: 14,
                    mapId: "",
                    center: {lat:  positionx, lng: positiony},
                };
                var myMap = new google.maps.Map(element, options);
                var markers = [
                    {
                        coordinates: {lat:  positionx, lng: positiony},
                    },
                ];
                for(var i = 0; i < markers.length; i++) {
                    addMarker(markers[i]);
                }
                function addMarker(properties) {
                    var IconImg = $('.contacts__list').data('marker');
                    var marker = new google.maps.Marker({
                        position: properties.coordinates,
                        icon: IconImg,
                        map: myMap
                    });
                    if(properties.image) {
                        marker.setIcon(properties.image);
                    }
                    if(properties.info) {
                        var InfoWindow = new google.maps.InfoWindow({
                            content: properties.info
                        });
                        marker.addListener('click', function(){
                            InfoWindow.open(myMap, marker);
                        });
                    }
                }
            }
            initMap3();
        }
    }
    MapsList();
    function TabInit(){
        if($('.tabs-elements').length){
            $(".tabs-elements .tabs-nav-item").click(function() {
                $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
                $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "block")
                    .hide()
                    .fadeIn();
            }).eq(0).addClass("active");
            $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
        }
    }
    TabInit();

});

