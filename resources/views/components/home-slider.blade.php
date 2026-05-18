<section id="home" class="relative min-h-[85vh] overflow-hidden group">

    <div class="swiper homeSwiper min-h-[85vh]">

        <div class="swiper-wrapper">
            {{-- هنا يتم حقن السلايدات --}}
            {{ $slot }}
        </div>

        {{-- Navigation --}}
        <div
            class="swiper-button-next text-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>
        <div
            class="swiper-button-prev text-purple-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        </div>

        {{-- Pagination --}}
        <div class="swiper-pagination"></div>

    </div>

</section>
