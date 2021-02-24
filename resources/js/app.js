import debounce from './_libs/debounser';
import isInViewport from './_libs/isInViewport';
import Swiper from 'swiper';
const WOW = require('wowjs');

//WOW init
window.wow = new WOW.WOW();
window.wow.init();


// SLIDER SWIPER
let swiper = new Swiper('.main-intro__container', {
    spaceBetween: 30,
    centeredSlides: true,
    speed: 1500,
    autoplay: {
        delay: 7000,
        disableOnInteraction: false,
    },
    parallax: true,
    loop: true,
    pagination: {
        el: '.main-intro__pagination',
        clickable: true,

    }
});

let slider_main_succulents = new Swiper('.main-succulents__container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.main-succulents__next',
        prevEl: '.main-succulents__prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 2.5,
            spaceBetween: 0,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

let slider_main_cactus = new Swiper('.main-cactus__container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.main-cactus__next',
        prevEl: '.main-cactus__prev',
    },

    breakpoints: {
        0: {
            slidesPerView: 2.5,
            spaceBetween: 0,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

let slider_main_news = new Swiper('.main-news-slider__container', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.main-news__next',
        prevEl: '.main-news__prev',
    },
    breakpoints: {
        0: {
            slidesPerView: 2.5,
            spaceBetween: 0,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    }
});

var carousel = new Swiper('.main-carousel__container', {
    slidesPerView: 6.5,
    spaceBetween: 10,
    initialSlide: 1.5,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 2.5,
            initialSlide: 0
        },
        480: {
            slidesPerView: 4.5,
        },
        768: {
            slidesPerView: 5.5,
        },
        1024: {
            slidesPerView: 4.5,
        },
        1300: {
            slidesPerView: 5.5,
        },
        1600: {
            slidesPerView: 6.5,
        }
    }
});

// END SLIDER SWIPER


//autoresize of input
window.document.addEventListener('DOMContentLoaded', () =>{



// EVENTS on SCROLL

let debounceFunc = debounce(function() {
    const HEADER    = document.querySelector('.js-header');
    const MAIN      = document.querySelector('main');

    let setClassOnVision = (target, destination,  visibleInterval = 100, clas = 'wow') =>{
        if (target){
            let mainHeight = destination.offsetHeight;
            let viewportHeight = window.innerHeight;
            if (isInViewport(destination, visibleInterval)) {
                target.classList.remove(`${clas}`);
            } else {
                target.classList.add(`${clas}`);
            };
        };
    };

    //toggle header bg opacity
    let mainHeight = MAIN.offsetHeight;
    let viewportHeight = window.innerHeight;
    setClassOnVision(HEADER, MAIN, mainHeight - 200, 'active');

}, 100);

// END EVENTS on SCROLL

window.addEventListener('scroll', debounceFunc);





// EVENTS on CLICK

window.document.addEventListener('click', (event) => {
    const BURGER    = document.querySelector('.js-burger');
    const MENU      = document.querySelector('.js-menu');
    const SEARCH    = document.querySelector('.js-search');

    // menu burger action
    if (event.target === BURGER){
        BURGER.classList.toggle('active');
        MENU.classList.toggle('active');
        document.body.hasAttribute('style') ? document.body.removeAttribute('style')
                                                        : document.body.style.overflow = "hidden";
    };

    if (event.target.closest('.js-header') && event.target !== BURGER){
        BURGER.classList.remove('active');
        MENU.classList.remove('active');
        document.body.removeAttribute('style');
    };


    //search activation
    if (event.target === SEARCH){
        SEARCH.parentElement.classList.toggle('active');
        SEARCH.nextElementSibling.focus();
    }
    if (event.target !== SEARCH && event.target !== SEARCH.nextElementSibling) {
        SEARCH.parentElement.classList.remove('active');
    }
});

// END EVENTS on CLICK


//Basket

    let data = [
        {
            index: 1,
            name: 'Ечеверія пурпузорум (Echeveria Purpusorum) червона',
            size: '4',
            cost: '80',
            src: 'uploads/basket-img1.jpg'
        },
        {
            index: 2,
            name: 'Гастерія (Gasteria Little Warty) Літл Варті',
            size: '14',
            cost: '102',
            src: 'uploads/basket-img2.jpg'
        }
    ]

    const PURCHASE_COUNTER   = document.querySelector('.js-count-purchase');
    const BASKET             = document.querySelector('.js-basket');



    const CONTAINS = (arr) =>{
        for (let i = 0; i < length; i++){
            `<div class="basket__item js-basket-item">
                    <div class="basket__img">
                        <img src="${prod[i].src}" alt="img${prod[i].index}">
                    </div>
                    <div class="basket__name">
                        <h2>${prod[i].name}</h2>
                        <div class="basket__size">
                            <p>Розмір</p>
                            <span>${prod[i].size} см</span>
                        </div>
                    </div>
                    <div class="basket__price">
                        <div class="basket__price-curr">
                            <span>${prod[i].cost} грн</span>
                        </div>
                        <div class="basket__price-counter">
                            <button><span></span></button>
                            <input name="count" type="number" value="1"
                                   onload="this.style.width = ((this.value.length + 1) * 8) + 'px';"
                                   onkeydown="this.style.width = ((this.value.length + 1) * 12) + 'px';">
                            <button><span></span></button>
                        </div>
                        <div class="basket__price-sum">
                            <span>80 грн</span>
                        </div>
                    </div>
                    <button class="basket__remover">
                        <span></span>
                    </button>
                </div>`
        }
    }

    const CHECK_BASKET = ([...arr]) =>{
        if (arr.length > 0 && PURCHASE_COUNTER) {
            PURCHASE_COUNTER.classList.add('active');
            PURCHASE_COUNTER.innerText = [...arr].length;
        } else if (PURCHASE_COUNTER){
            PURCHASE_COUNTER.classList.remove('active');
            BASKET.innerHTML = '<h1>Корзина пуста!<h2>'
        }
    }

    const BASKET_CONTAINS = ([...arr]) =>{
        if (!BASKET) {
            return;
        }
        BASKET.innerHTML = `<section class="basket js-basket">
            <h1>Ваше замовлення</h1>
            <div class="basket__list">
                <div class="basket__list-header">
                    <p>Назва</p>
                    <div>
                        <p>Ціна</p>
                        <p>Кількість</p>
                        <p>Сума</p>
                    </div>
                </div>
                ${CONTAINS(arr)}
                <div class="basket__item js-basket-item">
                    <div class="basket__img">
                        <img src="uploads/basket-img2.jpg" alt="img1">
                    </div>
                    <div class="basket__name">
                        <h2>Ечеверія пурпузорум (Echeveria Purpusorum) червона</h2>
                        <div class="basket__size">
                            <p>Розмір</p>
                            <span>4 см</span>
                        </div>
                    </div>
                    <div class="basket__price">
                        <div class="basket__price-curr">
                            <span>80 грн</span>
                        </div>
                        <div class="basket__price-counter">
                            <button><span></span></button>
                            <input name="count" type="number" value="1"
                                   onload="this.style.width = ((this.value.length + 1) * 8) + 'px';"
                                   onkeydown="this.style.width = ((this.value.length + 1) * 15) + 'px';">
                            <button><span></span></button>
                        </div>
                        <div class="basket__price-sum">
                            <span>80 грн</span>
                        </div>
                    </div>
                    <button class="basket__remover">
                        <span></span>
                    </button>
                </div>
            </div>
            <p class="basket__total"><span>Вього до сплати:</span><label>262</label></p>
            <a href="catalog.html">Продовжити покупки <span></span></a>
            <button class="button button--fill">Оформити замовлення</button>
        </section>`;
    }


    /*let promiseBasket = new Promise(BASKET_CONTAINS(data))

    promiseBasket.then(CHECK_BASKET(data));*/
    BASKET_CONTAINS(data);
    CHECK_BASKET(data);

    const INPUTS_TYPE_NUMBER = document.querySelectorAll('input[type=number]');
    [...INPUTS_TYPE_NUMBER].forEach(inp => inp.style.width = ((inp.value.length + 1) * 8) + 'px');



})

