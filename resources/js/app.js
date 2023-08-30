import './bootstrap';

import Swiper from 'swiper';
import  { Autoplay, Navigation } from 'swiper/modules';
import 'swiper/css/bundle';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();

// document.addEventListener('DOMContentLoaded', function() {
//     var nomSelect = document.getElementById('nom');
//     var personaSelect = document.getElementById('persona');

//     nomSelect.addEventListener('change', function() {
//         var selectedOption = this.options[this.selectedIndex];
//         var persona = selectedOption.getAttribute('data-persona');
//         personaSelect.value = persona;
//     });
// });

// document.getElementById('persona').addEventListener('change', function() {
//     var selectedOption = this.options[this.selectedIndex];
//     var nom = selectedOption.getAttribute('data-nom');
//     document.getElementById('nom').value = nom;
// });



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


