import './bootstrap';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';

// const swiper = new Swiper(".citiesSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 20,
//     loop: true,
//     pagination: {
//         el: ".swiper-pagination",
//         clickable: true,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next-custom",
//         prevEl: ".swiper-button-prev-custom",
//     },
//     breakpoints: {
//         640: {
//             slidesPerView: 2,
//         },
//         768: {
//             slidesPerView: 3,
//         },
//         1024: {
//             slidesPerView: 4,
//         },
//     },
// });

document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.main-header');

    if (!header) return;

    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            
            header.classList.add('shadow-md');
        } else {
            // Jika kembali ke atas, hapus kelas bayangan
            header.classList.remove('shadow-md');
        }
    });
});
