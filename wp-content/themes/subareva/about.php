<?php
/* Template Name: О клинике */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 */
$post_id = basename(get_permalink());
$post_id = get_the_ID();
$slug = $wp_query->post->post_title;
get_header();
?>

    <main id="main" class="main page-about">
        <?php get_template_part( 'template-parts/content', 'static' ); ?>
        <div class="start__decoration">
            <div class="start__decoration-top"></div>
            <div class="start__decoration-left"></div>
            <div class="start__decoration-bottom"></div>
        </div>
        <section class="about">
            <div class="about__container small-container">
                <div class="about__content">
                    <h1 class="about__title section-title">
                        <div class="about__title-svg" data-aos="fade-up" data-aos-delay="100">
                            <svg class="about__title-before" width="1202" height="98" viewBox="0 0 1202 98" fill="none" xmlns="http://www.w3.org/2000/svg" >
                                <g opacity="0.35">
                                    <path d="M271.005 94.5061H262.958L301.387 0.144064L341.426 94.5061H322.748L312.994 69.8711H280.612L271.005 94.5061ZM296.998 30.2055L283.294 63.9165H310.897L296.998 30.2055ZM21.0679 32.3184C23.4575 34.6714 27.9929 37.4567 34.3816 40.2419C44.8667 44.5638 51.7918 49.0298 55.0105 52.9196C58.278 56.8093 59.8386 62.0917 59.8386 68.3825C59.8386 76.7382 56.5711 83.4132 50.914 88.9836C44.818 94.1219 37.6003 96.9072 28.7245 96.9072C22.2383 96.9072 16.9713 95.6586 12.192 93.3056C7.80291 90.4723 3.65761 86.8707 0 81.7324L7.21769 76.9783C9.60733 80.868 12.0457 84.0855 15.2644 86.1504C18.5319 88.1192 22.1895 89.3678 25.7496 89.3678C30.5777 89.3678 34.6742 87.8311 37.8929 84.6137C41.1604 81.3963 42.7209 77.5065 42.7209 72.8004C42.7209 64.8769 35.7959 58.2019 21.6531 52.6314H21.2142C13.7039 49.2699 8.48567 46.1005 5.2182 42.2108C1.9995 38.273 0.438914 33.4229 0.438914 27.5643C0.438914 19.6407 3.26747 12.8217 8.48567 7.6354C13.7039 2.49711 20.6289 0.0960428 29.5535 0.0960428C36.0397 0.0960428 41.6968 1.63273 46.0859 4.41797C50.914 7.6354 54.5716 11.5251 56.9612 16.6634L50.8652 20.6972C49.3046 16.3753 47.2076 13.1579 43.9401 10.8048C41.1604 8.49979 37.5027 7.25123 33.1136 7.25123C28.2856 7.25123 24.6279 8.49979 21.7994 11.5732C18.9708 14.3584 17.4102 17.96 17.4102 22.7141C17.4102 26.3157 18.6782 29.5332 21.0679 32.3184ZM138.307 80.5799C141.135 76.258 142.696 68.7666 142.696 58.0098H143.135V2.06492H151.62V61.0832C151.62 72.8965 149.231 82.1166 143.574 88.0712C137.916 94.0739 129.431 97.2433 118.555 97.2433C113.727 97.2433 108.802 95.9948 104.413 94.4581C99.5846 92.9214 95.927 90.5683 93.0985 87.3509C90.2699 84.1335 88.2704 80.9641 87.0025 77.0263C85.7345 73.1366 85.003 67.8542 85.003 61.1792V2.49711H102.413V58.0579C102.413 68.7666 103.681 76.306 106.802 80.6279C110.07 84.9498 115.288 87.0148 122.652 87.0148C129.821 87.0148 135.088 85.0459 138.307 80.5799ZM243.548 54.0241C240.281 50.1343 235.502 46.9169 228.967 45.2361C234.185 43.9876 238.281 41.6345 241.11 38.129C243.938 34.5274 245.206 30.5896 245.206 25.4513C245.206 21.1294 243.938 17.0956 241.939 13.6381C239.94 10.0365 236.721 7.25123 233.014 5.28235C231.015 4.0338 227.796 3.31348 224.09 2.9293C219.993 2.49711 215.165 2.11294 209.508 2.11294H181.662V94.5541H214.921C226.236 94.5541 234.721 92.5852 240.378 88.5514C246.036 84.6617 248.425 78.2268 248.425 69.9191C248.767 63.6283 247.255 58.4901 243.548 54.0241ZM199.413 8.06759H206.338C213.995 8.06759 219.652 9.60428 223.31 12.3895C226.967 15.1748 228.967 19.4967 228.967 25.4513C228.967 31.8382 227.406 36.1601 224.139 38.9453C220.871 41.7306 215.653 43.2673 207.996 43.2673H199.511V8.06759H199.413ZM226.577 84.2295C223.31 87.0148 217.652 88.5514 210.435 88.5514H199.413V48.8858H207.899C215.946 48.8858 222.042 50.8547 226.138 54.4563C230.235 58.0579 232.234 63.6283 232.234 71.1677C231.795 77.1223 230.283 81.4443 226.577 84.2295ZM420.333 44.948C424.43 41.0583 426.819 35.7759 426.819 29.101C426.819 20.313 423.991 13.6381 417.895 8.93198C411.799 4.61005 402.923 2.25701 391.17 2.25701H360.494V94.6982H377.905V8.06759H385.122C393.169 8.06759 399.265 9.60428 403.362 13.2059C407.458 16.4233 409.458 21.5616 409.458 28.6688C409.458 35.0556 407.458 39.3775 403.362 42.595C399.265 45.3802 392.486 47.3491 382.294 48.1655L407.312 94.9383H426.673L401.655 51.623C410.189 50.9507 416.237 48.4536 420.333 44.948ZM510.164 94.5061H451.886V2.06492H510.164V8.73989H469.296V42.8351H506.897V49.5101H469.296V87.2549H510.164V94.5061ZM567.174 65.165L542.156 2.11294H523.917L562.834 96.9072L600.044 2.11294H591.119L567.174 65.165ZM609.749 94.5061H601.263L640.034 0.144064L680.072 94.5061H661.394L651.641 69.8711H619.259L609.749 94.5061ZM635.645 30.2055L621.941 63.9165H649.544L635.645 30.2055ZM819.208 69.1988C815.941 75.8738 811.99 80.772 807.065 84.2295C802.237 87.8311 796.58 89.3678 790.093 89.3678C780.779 89.3678 773.122 85.7662 767.904 78.659C762.686 71.5519 760.247 61.6595 760.247 48.8858C760.247 35.824 763.076 25.0672 768.294 17.5758C773.951 10.0365 781.315 6.00267 790.484 6.00267C796.141 6.00267 800.969 7.53936 805.455 10.3246C809.845 13.1098 813.502 17.4318 816.331 23.0022L821.988 19.1125C818.33 12.7257 813.502 7.97155 807.406 4.75412C801.798 1.53668 794.873 0 786.826 0C773.805 0 762.93 4.75412 754.005 13.9262C745.08 23.0983 740.984 34.5274 740.984 48.4536C740.984 62.812 745.373 74.193 754.005 83.4132C762.491 92.5852 773.366 96.9072 786.387 96.9072C794.873 96.9072 802.529 94.9383 809.016 90.5203C815.502 86.1984 820.769 80.1957 824.426 72.7044L819.208 69.1988ZM864.172 87.4469H904.601V94.5541H846.323V2.06492H864.124V87.4469H864.172ZM940.299 2.06492H922.889V94.5061H940.299V2.06492ZM987.507 2.06492L1036.03 65.9814V2.06492H1044.52V94.5061H1036.03L979.753 20.7452V94.5061H971.267V2.06492H987.507ZM1093.63 2.06492H1076.22V94.5061H1093.63V2.06492ZM1183.85 84.2295C1188.68 80.6279 1192.77 75.8738 1195.99 69.1988L1201.21 72.8004C1197.55 80.3398 1192.28 86.2944 1185.8 90.6164C1179.31 94.9383 1171.66 97.0032 1163.17 97.0032C1150.15 97.0032 1139.27 92.6813 1130.79 83.5092C1122.3 74.3371 1117.77 62.908 1117.77 48.5496C1117.77 34.6234 1121.86 23.1943 1130.79 14.0222C1139.71 4.85016 1150.59 0.0960428 1163.61 0.0960428C1171.66 0.0960428 1178.58 1.63273 1184.24 4.85016C1190.33 8.06759 1195.11 12.7737 1198.82 19.2086L1193.16 23.0983C1190.33 17.5278 1186.68 13.2059 1182.29 10.4206C1177.9 7.6354 1172.97 6.09872 1167.32 6.09872C1158 6.09872 1150.78 9.98845 1145.13 17.6719C1139.91 25.2112 1137.08 35.92 1137.08 48.9818C1137.08 61.6595 1139.47 71.5519 1144.74 78.7551C1149.95 85.8622 1157.76 89.4638 1166.93 89.4638C1173.22 89.3678 1178.87 87.6871 1183.85 84.2295Z" fill="#E0E0EF"/>
                                </g>
                            </svg>
                        </div>
                        <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/header/logo.svg'?>" alt="Logo" data-aos="fade-up" data-aos-delay="400">
                    </h1>
                    <div class="about__title-content" data-aos="fade-right" data-aos-delay="700">
                        <p>это центры эстетической медицины, которые создают WOW-впечатления от результата и обслуживания.</p>
                        <br><p></p><br>
                        <p>Врачи оказывают услуги в сферах:</p>
                    </div>
                    <div class="about__buttons" data-aos="fade-up" data-aos-delay="1000">
                        <a href="<?php echo esc_url( get_permalink(27) ); ?>" class="about__button button">
                            <span>Стоматология</span>
                        </a>
                        <a href="<?php echo esc_url( get_permalink(29) ); ?>" class="about__button button">
                            <span>Косметология</span>
                        </a>
                    </div>
                </div>
                <div class="about__sfera">
                    <video autoplay muted loop  id="myVideo">
                        <source src="<?php echo get_template_directory_uri() . '/img/templates/header/sfera.mp4'?>" type="video/mp4">
                    </video>
<!--                    <iframe id="sfera" src="https://blobmixer.14islands.com/view?ambient=0.95&angle1=1.03&angle2=0.31&angle3=1.57&bloom=0&ccRougness=0.21&clearColor=%23ffffff&clearcoat=0.22&color=%23ddf4ff&color1=%23000fff&color2=%23ffff00&color3=%237600ff&decay1=0&decay2=0&decay3=0&dist1=20&dist2=9.53&dist3=8.2&distort=0&dynEnv=false&envMap=2&flatShading=true&floor=false&floorColor=rgba%2811%2C39%2C43%2C1%29&floorEnvMap=0.37&floorMetalness=0&floorOpacity=0.27&floorRoughness=0.15&floorSize=0&floorY=-0.4&frequency=0.01&glitch=false&gradient=foil&int1=3.4&int2=0.7&int3=5&int4=0&int5=0.63&ior=2.33&lights[0]=1&lights[1]=2&lights[2]=3&lights[3]=4&lights[4]=5&metalness=0&noise=0&numWaves=5&opacity=1&penum1=1&penum3=1&poleAmount=0&pp=false&reflectivity=1&roughness=0.55&rshad=false&rx=-0.78&ry=1.23&rz=-2.49&scale=1.11&scanline=0&segments=512&shadow1=false&shadow2=false&shadowBias1=false&shadowFocus1=1&shadowMap=false&sky=false&speed=0&surfPoleAmount=0.43&surfaceDistort=1.9&surfaceFrequency=1.31&surfaceSpeed=1&transmission=0.17&useGradient=true&uv=true&vignette=0&wireframe=false&x1=3.87&x2=-2.8&x3=1.33&x4=3.07&y1=-3.73&y2=-6.67&y3=-0.27&z1=1.93&z2=5.73&z3=7.13&z4=3.53&z5=6.2"  frameborder="0" width="auto" height="100%"></iframe>-->
                </div>
            </div>
        </section>
        <section class="team">
            <div class="team__container small-container">
                <div class="team__title section-title">
                    <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="400">
                        Команда
                    </h1>
                    <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                        Команда
                    </p>
                </div>
                <div class="team__list" data-aos="fade-up" data-aos-delay="700">
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                    <div class="team__item">
                        <div class="team__img">
                            <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/team/1.jpg'?>" alt="Асташенков Александр">
                        </div>
                        <h2 class="team__name">
                            Асташенков Александр
                        </h2>
                        <p class="team__work">стоматолог-ортопед</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="clinic">
            <div class="clinic__container small-container">
                <div class="clinic__title section-title">
                    <h1 class="section-title__main" data-aos="fade-up" data-aos-delay="400">
                        клиникА
                    </h1>
                    <p class="section-title__back" data-aos="fade-up" data-aos-delay="100">
                        клиникА
                    </p>
                </div>
                <div class="clinic__slider" data-aos="fade-up" data-aos-delay="700">
                    <div class="block">
                        <div class="swiper-container">
                            <div class="clinic__wrapper swiper-wrapper">
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-1.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-2.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <div class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-3.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </div>
                                <a href="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>" class="swiper-slide clinic__slider-item fresco" data-fresco="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>">
                                    <img class="about__title-img swiper-slide-image" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/slide-4.jpg'?>" alt="Диагностика">
                                    <h3 class="clinic__slider-desc swiper-slide-title">Диагностика</h3>
                                </a>
                            </div>
                        </div>
                        <div class="clinic__slider-nav">
                            <div class="clinic__slider-prev">
                                <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/prev.png'?>" alt="PREV">
                            </div>
                            <div class="clinic__slider-next">
                                <img class="about__title-img" src="<?php echo get_template_directory_uri() . '/img/templates/clinic/next.png'?>" alt="NEXT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
get_footer();
?>
