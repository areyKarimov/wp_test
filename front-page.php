<?php

/**
 * Template Name: Главная страница
 *
 */
get_header() ?>

<main class="main">
    <section class="main-intro">
        <div class="main-intro__container swiper-container wow fadeIn">
            <div class="swiper-wrapper">
            <? foreach(get_field('initial_slider') as $item) :?>
                <div class="swiper-slide">
                    <div class="main-intro__slide-bg"><img src="<?= $item['initial_bg'] ?>" alt="background"></div>
                    <div class="container">
                        <div class="main-intro__slide-banner" data-swiper-parallax="-200"><img src="<?= $item['initial_proposition'] ?>" alt="banner"></div>
                    </div>
                </div>
                <? endforeach ?>
            </div>
            <div class="main-intro__pagination swiper-pagination"></div>
        </div>
    </section>

    <section class="main-catalog">
        <h2>КАТАЛОГ</h2>
        <div class="container">
            <span class="flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower.png" alt="background">
            </span>
            <div class="main-catalog__item wow fadeInLeft" data-wow-delay="0.3s">
                <a href="#" class="main-catalog__item-link"></a>
                <div class="main-catalog__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img1.jpg" alt="Кактуси"></div>
                <h4 class="main-catalog__title">Кактуси</h4>
            </div>
            <div class="main-catalog__item wow fadeInLeft" data-wow-delay="0.6s">
                <a href="#" class="main-catalog__item-link"></a>
                <div class="main-catalog__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img2.jpg" alt="Суккуленти"></div>
                <h4 class="main-catalog__title">Суккуленти</h4>
            </div>
            <div class="main-catalog__item wow fadeInLeft" data-wow-delay="0.9s">
                <a href="#" class="main-catalog__item-link"></a>
                <div class="main-catalog__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img3.jpg" alt="Флораріуми"></div>
                <h4 class="main-catalog__title">Флораріуми</h4>
            </div>
            <div class="main-catalog__item wow fadeInLeft" data-wow-delay="1.2s">
                <a href="#" class="main-catalog__item-link"></a>
                <div class="main-catalog__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img4.jpg" alt="Аксесуари"></div>
                <h4 class="main-catalog__title">Аксесуари</h4>
            </div>
        </div>
    </section>

    <section class="slider main-cactus wow fadeInRight" data-wow-offset="200">
        <h3>Кактуси - кращий вибір покупців</h3>
        <div class="container">
            <span class="flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower.png" alt="background">
            </span>
            <div class="main-cactus__container slider__container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img1.jpg" alt="img"></div>
                            <div class="slider__item-content">
                                <h4>Маммілярія <span class="slider__item-size">4 см</span>
                                </h4>
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">15 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>80 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img2.jpg" alt="img"></div>
                            <div class="slider__item-content">
                                <h4>Ферокактус <span class="slider__item-size">5 см</span></h4>
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">19 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>180 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img3.jpg" alt="img"></div>
                            <div class="slider__item-content">
                                <h4>Гімнокаліціум <span class="slider__item-size">3 см</span></h4>
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">21 відгук</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>80 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img1.jpg" alt="img"></div>
                            <div class="slider__item-content">
                                <h4>Маммілярія <span class="slider__item-size">4 см</span></h4>
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">15 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>80 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__controls">
                <div class="main-cactus__prev slider__controls-prev"></div>
                <div class="main-cactus__next slider__controls-next"></div>
            </div>
        </div>
    </section>

    <section class="slider main-succulents wow fadeInLeft" data-wow-offset="200">
        <h3>Суккуленти - кращий вибір покупців</h3>
        <div class="container">
            <div class="main-succulents__container slider__container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img4.jpg" alt="img"></div>
                            <h4>Седум <span class="slider__item-size">4 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">15 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>70 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img5.jpg" alt="img"></div>
                            <h4>Хавортія <span class="slider__item-size">6 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">19 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>110 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img6.jpg" alt="img"></div>
                            <h4>Ечеверія <span class="slider__item-size">4 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">21 відгук</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span>80 грн</span>
                                    <span>40 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img4.jpg" alt="img"></div>
                            <h4>Седум <span class="slider__item-size">4 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">15 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>70 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__controls">
                <div class="main-succulents__prev slider__controls-prev"></div>
                <div class="main-succulents__next slider__controls-next"></div>
            </div>
        </div>
    </section>

    <section class="slider main-news wow fadeInRight" data-wow-offset="200">
        <h3>Новинки</h3>
        <div class="container">
            <span class="flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower.png" alt="background">
            </span>
            <div class="main-news-slider__container slider__container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img7.jpg" alt="img"></div>
                            <h4>Флораріум міні-куб <span class="slider__item-size">16 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">15 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>360 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img8.jpg" alt="img"></div>
                            <h4>Декоративні горщики Animal <span class="slider__item-size">12 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">19 відгуків</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>110 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider__item">
                            <a href="#" class="slider__item-link"></a>
                            <div class="slider__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/slider-img9.jpg" alt="img"></div>
                            <h4>Композиція “Pectus” <span class="slider__item-size">26 см</span></h4>
                            <div class="slider__item-content">
                                <div class="slider__item-review">
                                    <div>
                                        <span></span><span></span><span></span><span></span><span></span>
                                    </div>
                                    <a href="#">21 відгук</a>
                                </div>
                                <div class="slider__item-cost">
                                    <span></span>
                                    <span>580 грн</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider__controls">
                <div class="main-news__prev slider__controls-prev"></div>
                <div class="main-news__next slider__controls-next"></div>
            </div>
        </div>
    </section>

    <section class="main-about">
        <div class="main-about__bg"><img src="<?= get_field('about_bg') ?>" alt="background"></div>
        <div class="container">
            <div class="main-about__content wow fadeInDown" data-wow-offset="200">
                <h3><?= get_field('about_title') ?></h3>
                <div class="wp-content"><?= get_field('about_text') ?></div>
                <a href="<?= get_field('about_link_url') ?>" class="button"><?= get_field('about_link_text') ?></a>
            </div>
        </div>
    </section>

    <section class="main-benefits">
        <h3>Тільки у нас</h3>
        <div class="container">
            <span class="flower">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower.png" alt="background">
            </span>
            <ul class="main-benefits__list">
                <li class="wow fadeIn" data-wow-delay="0.2s">
                    <span class="wow bounceIn" data-wow-delay="0.2s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-icon1.png" alt="icon1">
                    </span>
                    Тільки здорові рослини
                </li>
                <li class="wow fadeIn" data-wow-delay="0.4s">
                    <span class="wow bounceIn" data-wow-delay="0.4s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-icon2.png" alt="icon2">
                    </span>
                    Спеціальний грунт
                </li>
                <li class="wow fadeIn" data-wow-delay="0.6s">
                    <span class="wow bounceIn" data-wow-delay="0.6s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-icon3.png" alt="icon3">
                    </span>
                    Флораріуми на замовлення
                </li>
                <li class="wow fadeIn" data-wow-delay="0.8s">
                    <span class="wow bounceIn" data-wow-delay="0.8s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-icon4.png" alt="icon4">
                    </span>
                    Безоплатна доставка замовлення від 1000 грн
                </li>
                <li class="wow fadeIn" data-wow-delay="1s">
                    <span class="wow bounceIn" data-wow-delay="1s">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-icon5.png" alt="icon5">
                    </span>
                    Сюрприз у коробці
                </li>
            </ul>
            <div class="main-benefits__img wow fadeInRight" data-wow-delay="0.6s"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-benefits-img.jpg" alt="background"></div>
        </div>
    </section>

    <section class="main-carousel js-main-carousel">
        <span class="flower">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/flower.png" alt="background">
        </span>
        <h3>@hamatishop</h3>
        <div class="main-carousel__container swiper-container wow fadeInDown" data-wow-duration="2s" data-wow-offset="100">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img1.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/carousel1.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/carousel2.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/carousel3.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/carousel4.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img2.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img3.jpg" alt="img"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/main-catalog-img4.jpg" alt="img"></div>
            </div>
        </div>
        <div class="container">
            <button class="button">Приєднуйтесь</button>
        </div>
    </section>
</main>

<?php get_footer(); ?>