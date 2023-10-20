import './bootstrap';

import Swiper from 'swiper';
import  { Autoplay, Navigation } from 'swiper/modules';
import 'swiper/css/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

AOS.init({
    startEvent: 'load',
    once: false,
});

const swiperOne = new Swiper('.swiper-one', {

    modules: [Autoplay, Navigation],

     // Optional parameters
     direction: 'horizontal',
     loop: true,
     speed: 2100,
     autoplay: {
        delay: 3000,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next-one',
        prevEl: '.swiper-button-prev-one',
    },
});

const swipeTwo = new Swiper('.swiper-two', {

    modules: [Autoplay, Navigation],

     // Optional parameters
    direction: 'horizontal',
    loop: true,
    speed:2100,
    autoplay: {
        delay: 5000,
    },

    // Navigation arrows
    navigation: {
        nextEl: 'swiper-button-next-two',
        prevEl: '.swiper-button-prev-two',
    },
});


