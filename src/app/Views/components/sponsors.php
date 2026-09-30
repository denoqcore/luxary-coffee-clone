<?php
$slides = [
    '/images/sliders/lavazza.svg',
    '/images/sliders/bianchi.svg',
    '/images/sliders/covim.svg',
    '/images/sliders/dolcevita.svg',
    '/images/sliders/Gattopardo.svg',
    '/images/sliders/logo-colored.svg',
    '/images/sliders/pellini.svg',
    '/images/sliders/varanini.svg',
];
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>

<div class="max-w-8xl mx-auto py-16 px-6 md:px-8 lg:px-12 relative oveflow-hidden">
    <!-- background img -->
   <div class="absolute inset-0 z-[-1] pointer-events-none flex justify-between items-center">
        <img 
            src="/images/top-grade-shape-2-1.webp" 
            alt="shape-left"5
            class="w-52 md:w-88 lg:w-104 object-contain opacity-80"
        >
        <img 
            src="/images/top-grade-shape-2-2.webp" 
            alt="shape-right" 
            class="w-52 md:w-88 lg:w-104 object-contain opacity-80"
        >
    </div>


    <div class="max-w-6xl mx-auto">
    <div class="flex flex-col items-center justify-center mb-8">
        <span class="text-[12px] md:text-sm bg-[var(--main-color)] px-4 py-1 text-white rounded-full uppercase tracking-widest">
            Luxury Cafe
        </span>
        <h3 class="font-bold text-[28px] md:text-[32px] mt-3 text-center uppercase">
            Parteneri de încredere
        </h3>
    </div>

    <div class="relative">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $slide): ?>
                    <div class="swiper-slide flex justify-center items-center p-4">
                        <img src="<?= $slide ?>" alt="Brand Logo" class="h-14 md:h-18 object-contain mx-auto select-none">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="absolute top-1/2 -translate-y-1/2 left-0 md:left-[-40px] lg:left-[-60px] z-10 hidden md:block">
         <button class="swiper-button-prev  p-3 rounded-full transition-colors">
            </button>
        </div>
        <div class="absolute top-1/2 -translate-y-1/2 right-0 md:right-[-40px] lg:right-[-60px] z-10 hidden md:block">
            <button class="swiper-button-next p-3 rounded-full ransition-colors">
            </button>
        </div>
    </div>
        </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 24,
        freeMode: true,
        loop: true,
        centeredSlides: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            320: { slidesPerView: 1, spaceBetween: 12 },
            640: { slidesPerView: 2, spaceBetween: 126 },
            768: { slidesPerView: 3, spaceBetween: 104 },
            1024: { slidesPerView: 4, spaceBetween: 150}
        }
    });
});
</script>