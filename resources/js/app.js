import './bootstrap';


// import Swiper JS
import Swiper from 'swiper';
// import Swiper styles
import 'swiper/css';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
Alpine.start();

document.addEventListener('DOMContentLoaded', function() {
    var nomSelect = document.getElementById('nom');
    var personaSelect = document.getElementById('persona');

    nomSelect.addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var persona = selectedOption.getAttribute('data-persona');
        personaSelect.value = persona;
    });
});

document.getElementById('persona').addEventListener('change', function() {
    var selectedOption = this.options[this.selectedIndex];
    var nom = selectedOption.getAttribute('data-nom');
    document.getElementById('nom').value = nom;
});



const swiper = new Swiper('.swiper', {

    modules: [Autoplay, Navigation],

     // Optional parameters
     direction: 'horizontal',
     loop: true,

     autoplay: {
        delay: 3000,
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
