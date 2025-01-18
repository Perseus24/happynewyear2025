import './bootstrap';
import 'flowbite';
// flowbite integration
import Alpine from 'alpinejs';

window.Alpine = Alpine;

const carouselElement = document.getElementById('controls-carousel');
const items = [
    {
        position: 0,
        el: document.getElementById('carousel-item-1'),
    },
    {
        position: 1,
        el: document.getElementById('carousel-item-2'),
    },
    {
        position: 2,
        el: document.getElementById('carousel-item-3'),
    },
    {
        position: 3,
        el: document.getElementById('carousel-item-4'),
    },
];

Alpine.start();
