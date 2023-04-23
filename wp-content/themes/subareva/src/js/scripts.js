$(document).ready(function () {
    barba.init({
        transitions: [{
            name: 'StartContainer',
            leave() {
                // create your stunning leave animation here
            },
            enter() {
                StartContainer();
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

