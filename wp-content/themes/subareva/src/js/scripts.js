$(document).ready(function () {
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
                } else if(winScrollTop <= 100 && $menu.hasClass("moved")) {
                    $menu.removeClass("moved").addClass("default");
                }
            });
        }
    }

    function ShowAcardeon(){
        if ($(".service").length){
            $( ".service__head" ).on( "click", function() {
                $(this).closest('.service__item').find('.service__content').fadeToggle(300);
            } );
        }
    }
    ShowAcardeon();
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
                    nextEl: ".clinic__slider-next",
                    prevEl: ".clinic__slider-prev",
                },
            });
        }
    }

    ClinicSlider();
    const  tl = gsap.timeline();
    function pageAnimIn(container){
        let WidthWind = $( window ).width();
        return tl.to(container.querySelector('.preloader-page'), {
           width: WidthWind,
            duration: 0.5
        })
    }
    function pageAnimOut(container){
        let WidthWind = $( window ).width();
        return tl.from(container.querySelector('.preloader-page'), {
            width: WidthWind,
            duration: 0.5
        })
            .call(AosStart, [container])
    }
    barba.init({
        transitions: [{
            name: 'base',
            async leave(data) {
                await pageAnimIn(data.current.container)
                data.current.container.remove();
            },
            async enter(data) {
                StartContainer();
                SferaInit();
                FrescoInit();
                ClinicSlider();
                HeaderMove();
                ShowAcardeon();
                MapsList();
                PotrfolioStom();
                ReviewsContainer();
                await pageAnimOut(data.next.container)
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
        });
    }

    if ($('#portfolio__stomatolog-slider').length) {
        PotrfolioStom();
    }

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

