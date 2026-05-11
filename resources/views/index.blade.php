<x-app-layout>

    <section id="home" class="relative">
        {{-- HOME SLIDER --}}
        <x-home-slider>

            {{-- Slide 1 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    <div
                        class="absolute bottom-1/4 -right-20 w-96 h-96 bg-cyan-500/20 rounded-full blur-[120px] animate-pulse">
                    </div>
                    <div class="container mx-auto px-6 text-center z-10">
                        <h2 class="text-6xl md:text-8xl font-orbitron font-black mb-8">
                            <span
                                class="bg-clip-text text-transparent bg-linear-to-r from-purple-400 via-fuchsia-500 to-cyan-400">
                                XenonStor
                            </span>
                        </h2>
                        <p class="text-xl md:text-2xl text-slate-400 mb-10">
                            اكتشف المستقبل في تسوق المنتجات الرقمية
                            <br>
                            بأمان تام وسرعة فائقة
                        </p>
                        <a href="#about"
                            class="px-10 py-3 border-2 border-purple-500 text-purple-500 font-black hover:bg-purple-500 hover:text-white rounded-2xl transition">
                            من نحن
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    <div
                        class="absolute top-1/4 -left-20 w-96 h-96 bg-purple-500/30 rounded-full blur-[120px] animate-pulse">
                    </div>
                    <div class="text-center z-10">
                        <h2 class="text-6xl md:text-8xl font-black text-white font-orbitron px-1">
                            Gaming <span class="text-cyan-500">Cards</span>
                        </h2>
                        <p class="text-lg text-slate-400 mt-6 mb-10">
                            أفضل العروض على بطاقات الشحن العالمية
                        </p>
                        <a href="#gaming"
                            class="px-10 py-3 border-2 border-cyan-500 text-cyan-500 font-black hover:bg-cyan-500 hover:text-white rounded-2xl transition">
                            اكتشف العروض
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 3 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    <div
                        class="absolute top-1/2 left-1/2 w-125 h-125 -translate-x-1/2 -translate-y-1/2 bg-rose-500/20 rounded-full blur-[120px] animate-pulse">
                    </div>
                    <div class="text-center z-10">
                        <h2 class="text-6xl md:text-8xl font-black text-white font-orbitron">
                            Pure <span class="text-rose-500">Premium</span>
                        </h2>
                        <p class="text-lg text-slate-400 mt-6 mb-10">
                            اشتراكات نيتفليكس ويوتيوب بريميوم وشاهد
                        </p>
                        <a href="#entertainment"
                            class="px-10 py-3 border-2 border-rose-500 text-rose-500 font-black hover:bg-rose-500 hover:text-white rounded-2xl transition">
                            تصفح الاشتراكات
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 4 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full overflow-hidden">
                    {{-- Glow Effect --}}
                    <div
                        class="absolute bottom-0 right-0 w-137.5 h-137.5 bg-emerald-500/20 rounded-full blur-[140px] animate-pulse">
                    </div>
                    <div
                        class="absolute top-10 left-10 w-72 h-72 bg-teal-400/10 rounded-full blur-[100px] animate-pulse delay-700">
                    </div>
                    {{-- Content --}}
                    <div class="text-center z-10">
                        <h2 class="text-6xl md:text-8xl font-black text-white font-orbitron">
                            AI <span class="text-emerald-400">Vision</span>
                        </h2>
                        <p class="text-lg text-slate-400 mt-6 mb-10 px-4">
                            اشتراكات ChatGPT Plus و Gemini و Claude AI بأسعار خرافية
                        </p>
                        <a href="#ai"
                            class="px-10 py-3 border-2 border-emerald-400 text-emerald-400 font-black hover:bg-emerald-400 hover:text-white rounded-2xl transition duration-300">
                            اكتشف الذكاء الاصطناعي
                        </a>
                    </div>
                </div>
            </div>

        </x-home-slider>
    </section>

    {{-- PRODUCTS SECTION --}}
    <section id="products" class="py-24 container mx-auto px-6">
        <div class="flex items-center justify-between mb-16">
            <h2 class="text-4xl font-orbitron font-black border-r-8 border-purple-600 pr-6 dark:text-white">
                المنتجات المميزة
            </h2>
            <div class="hidden md:block flex-1 h-0.5 bg-linear-to-l from-purple-600/50 to-transparent ms-10"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @forelse($products ?? [] as $product)
                {{-- Product Card --}}
            @empty
                <div
                    class="col-span-full p-20 text-center border-2 border-dashed border-slate-300 dark:border-slate-800 rounded-[3rem]">
                    <span class="text-6xl block mb-6">📦</span>
                    <p class="text-xl font-bold text-slate-500 dark:text-slate-400 mb-2">
                        لا توجد منتجات حالياً
                    </p>
                    <p class="text-slate-400 dark:text-slate-600">
                        انتظرونا قريباً بأقوى العروض
                    </p>
                </div>
            @endforelse
        </div>

    </section>

</x-app-layout>
