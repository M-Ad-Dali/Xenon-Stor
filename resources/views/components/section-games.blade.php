@props([
    'id', // معرف السكشن الفريد لكل قسم
    'title', // عنوان القسم الديناميكي
    'viewAllUrl' => '#', // رابط صفحة عرض الكل
    'hasProducts' => true, // تحكم يدوي: ضعها true لعرض 4 كروت، أو false للحالة الفارغة
])

<section id="{{ $id }}"
    class="py-4 dark:bg-slate-950 transition-colors duration-500 pt-10 md:pt-20 lg:scroll-mt-21 scroll-mt-17"
    x-data="{
        scroll(direction) {
            const isRTL = document.documentElement.dir === 'rtl';
            const distance = 290;
            let moveAmount = direction === 'next' ? distance : -distance;
    
            if (isRTL) {
                moveAmount = -moveAmount;
            }
    
            this.$refs.carousel.scrollBy({ left: moveAmount, behavior: 'smooth' });
        }
    }">

    <div class="container mx-auto px-4 md:px-6">
        {{-- Section Header --}}
        <div class="flex items-center justify-between mb-6 md:mb-12 gap-3 md:gap-4">
            {{-- Title & View All --}}
            <div class="flex items-center justify-between gap-3 md:gap-6 w-full">

                {{-- عنوان القسم --}}
                <h2
                    class="font-orbitron font-black text-slate-800 dark:text-white border-purple-600 flex-1 min-w-0 line-clamp-2
                    {{ app()->getLocale() == 'ar' ? 'text-xl sm:text-2xl md:text-4xl border-r-4 sm:border-r-8 pr-3 sm:pr-6' : 'text-base xs:text-lg sm:text-2xl md:text-4xl border-l-4 sm:border-l-8 pl-3 sm:pl-6' }} 
                    leading-tight wrap-break-word">
                    {{ $title }}
                </h2>

                {{-- زر عرض الكل --}}
                <a href="{{ route('categories.index', ['category' => $id]) }}"
                    class="text-[11px] md:text-sm font-black text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 pb-0.5 border-b-2 border-purple-600/60 dark:border-purple-400/60 hover:border-purple-700 dark:hover:border-purple-300 transition-all shrink-0">
                    {{ __('عرض الكل') }}
                </a>

            </div>

            {{-- Dynamic Decorative Line --}}
            <div
                class="hidden lg:block flex-1 h-0.5 {{ app()->getLocale() == 'ar' ? 'bg-linear-to-l' : 'bg-linear-to-r' }} from-purple-600/50 to-transparent">
            </div>

            {{-- Carousel Navigation Controls --}}
            <div class="flex items-center gap-1.5 md:gap-2 shrink-0">
                <button @click="scroll('prev')"
                    class="p-2 md:p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 shadow-md active:scale-95 transition-all cursor-pointer"
                    aria-label="Previous">
                    <svg class="w-4 h-4 md:w-5 md:h-5 rtl:rotate-180" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button @click="scroll('next')"
                    class="p-2 md:p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 shadow-md active:scale-95 transition-all cursor-pointer"
                    aria-label="Next">
                    <svg class="w-4 h-4 md:w-5 md:h-5 rtl:rotate-180" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        {{-- Carousel --}}
        <div x-ref="carousel"
            class="flex gap-4 md:gap-6 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-4 px-1 justify-start items-stretch scrollbar-none [-ms-overflow-style:none] [&::-webkit-scrollbar]:hidden">

            @if ($hasProducts)
                @for ($i = 1; $i <= 4; $i++)
                    <div class="snap-start shrink-0 w-65 xs:w-[290px] sm:w-[320px]">
                        <x-product-card />
                    </div>
                @endfor
            @else
                <div class="w-full flex justify-center">
                    <div
                        class="w-full max-w-4xl p-8 md:p-20 text-center bg-slate-50 dark:bg-slate-900/40 border-2 border-dashed border-slate-300 dark:border-slate-800 rounded-3xl md:rounded-[3rem] backdrop-blur-md">
                        <span class="text-4xl md:text-6xl block mb-4 md:mb-6 animate-bounce">📦</span>
                        <p class="text-lg md:text-xl font-black text-slate-700 dark:text-slate-300 mb-1 md:mb-2">
                            {{ __('لا توجد منتجات حالياً') }}
                        </p>
                        <p class="text-sm md:text-slate-500 dark:text-slate-500 font-medium">
                            {{ __('انتظرونا قريباً بأقوى العروض') }}
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>
