<x-app-layout>

    <section id="home" class="relative bg-stone-100/80 dark:bg-slate-950 transition-colors duration-500">
        {{-- HOME SLIDER --}}
        <x-home-slider>

            {{-- Slide 1 --}}
            <div class="swiper-slide flex items-center justify-center ">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    {{-- تعديل التوهج: استخدام bg-cyan-500/25 في اللايت مود ليصبح مرئياً و 10% في الداكن --}}
                    <div class="absolute bottom-1/4 w-96 h-96 bg-cyan-500/25 dark:bg-cyan-500/10 rounded-full blur-[100px] animate-pulse
                        {{ app()->getLocale() == 'ar' ? '-right-20' : '-left-20' }}">
                    </div>
                    <div class="container mx-auto px-6 text-center z-10">
                        <h2 class="text-5xl md:text-7xl font-orbitron font-black mb-8">
                            <span class="bg-clip-text text-transparent bg-linear-to-r from-purple-600 via-fuchsia-500 to-cyan-500 dark:from-purple-400 dark:via-fuchsia-500 dark:to-cyan-400">
                                XenonStor
                            </span>
                        </h2>
                        <p class="text-xl md:text-2xl text-slate-700 dark:text-slate-400 mb-10 font-bold mx-4">
                            {{ __('اكتشف المستقبل في تسوق المنتجات الرقمية') }}
                            <br>
                            {{ __('بأمان تام وسرعة فائقة') }}
                        </p>
                        <a href="#about"
                            class="px-10 py-3 border-2 border-purple-500 text-purple-600 dark:text-purple-400 font-black hover:bg-purple-500 hover:text-white rounded-2xl transition duration-300 shadow-sm hover:shadow-purple-500/20">
                            {{ __('من نحن') }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 2 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    {{-- تعديل التوهج: استخدام bg-purple-500/25 في اللايت مود و 10% في الداكن --}}
                    <div class="absolute top-1/4 w-96 h-96 bg-purple-500/25 dark:bg-purple-500/10 rounded-full blur-[100px] animate-pulse
                        {{ app()->getLocale() == 'ar' ? '-left-20' : '-right-20' }}">
                    </div>
                    <div class="text-center z-10">
                        <h2 class="text-5xl md:text-7xl font-black text-slate-800 dark:text-white font-orbitron px-1">
                            Gaming <span class="text-cyan-600 dark:text-cyan-400">Cards</span>
                        </h2>
                        <p class="text-lg text-slate-700 dark:text-slate-400 mt-6 mb-10 font-bold mx-4">
                            {{ __('أفضل العروض على بطاقات الشحن العالمية') }}
                        </p>
                        <a href="#gaming"
                            class="px-10 py-3 border-2 border-cyan-500 text-cyan-600 dark:text-cyan-400 font-black hover:bg-cyan-500 hover:text-white rounded-2xl transition duration-300 shadow-sm hover:shadow-cyan-500/20">
                            {{ __('اكتشف العروض') }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 3 (المعروضة في الصورة لديك) --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full">
                    {{-- تعديل التوهج: استخدام bg-rose-500/25 في اللايت مود و 10% في الداكن مع تماسك الـ blur --}}
                    <div
                        class="absolute top-1/2 left-1/2 w-125 h-125 -translate-x-1/2 -translate-y-1/2 bg-rose-500/25 dark:bg-rose-500/10 rounded-full blur-[100px] animate-pulse">
                    </div>
                    <div class="text-center z-10">
                        <h2 class="text-5xl md:text-7xl font-black text-slate-800 dark:text-white font-orbitron">
                            Pure <span class="text-rose-600 dark:text-rose-400">Premium</span>
                        </h2>
                        <p class="text-lg text-slate-700 dark:text-slate-400 mt-6 mb-10 font-bold mx-4">
                            {{ __('اشتراكات نيتفليكس ويوتيوب بريميوم وشاهد') }}
                        </p>
                        <a href="#entertainment"
                            class="px-10 py-3 border-2 border-rose-500 text-rose-600 dark:text-rose-400 font-black hover:bg-rose-500 hover:text-white rounded-2xl transition duration-300 shadow-sm hover:shadow-rose-500/20">
                            {{ __('تصفح الاشتراكات') }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 4 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full overflow-hidden">
                    {{-- تعديل التوهج السفلي والعلوي --}}
                    <div class="absolute bottom-0 w-137.5 h-137.5 bg-emerald-500/25 dark:bg-emerald-500/10 rounded-full blur-[110px] animate-pulse
                        {{ app()->getLocale() == 'ar' ? 'right-0' : 'left-0' }}">
                    </div>
                    <div class="absolute top-10 w-72 h-72 bg-teal-400/25 dark:bg-teal-400/10 rounded-full blur-[90px] animate-pulse delay-700
                        {{ app()->getLocale() == 'ar' ? 'left-10' : 'right-10' }}">
                    </div>
                    
                    <div class="text-center z-10">
                        <h2 class="text-5xl md:text-7xl font-black text-slate-800 dark:text-white font-orbitron">
                            AI <span class="text-emerald-600 dark:text-emerald-400">Vision</span>
                        </h2>
                        <p class="text-lg text-slate-700 dark:text-slate-400 mt-6 mb-10 px-4 font-bold mx-4">
                            {{ __('اشتراكات ChatGPT Plus و Gemini و Claude AI بأسعار خرافية') }}
                        </p>
                        <a href="#ai"
                            class="px-10 py-3 border-2 border-emerald-500 text-emerald-600 dark:text-emerald-400 font-black hover:bg-emerald-500 hover:text-white rounded-2xl transition duration-300 shadow-sm hover:shadow-emerald-500/20">
                            {{ __('اكتشف الذكاء الاصطناعي') }}
                        </a>
                    </div>
                </div>
            </div>

            {{-- Slide 5 --}}
            <div class="swiper-slide flex items-center justify-center">
                <div class="relative min-h-[90vh] flex items-center justify-center w-full overflow-hidden">
                    {{-- تعديل توهج البرامج --}}
                    <div class="absolute -bottom-20 w-140 h-140 bg-orange-600/25 dark:bg-orange-600/10 rounded-full blur-[110px] animate-pulse
                        {{ app()->getLocale() == 'ar' ? 'left-0' : 'right-0' }}">
                    </div>
                    <div class="absolute -bottom-10 w-80 h-80 bg-red-600/25 dark:bg-red-600/10 rounded-full blur-[90px] animate-pulse delay-500
                        {{ app()->getLocale() == 'ar' ? 'right-10' : 'left-10' }}">
                    </div>
                    
                    <div class="text-center z-10">
                        <h2 class="text-5xl md:text-7xl font-black text-slate-800 dark:text-white font-orbitron">
                            Premium <span class="text-orange-600 dark:text-orange-400">Apps</span>
                        </h2>
                        <p class="text-lg text-slate-700 dark:text-slate-300 mt-6 mb-10 px-4 font-bold mx-4">
                            {{ __('اشتراكات ويندوز الأصلية وبرامج Adobe و Microsoft Office بأسعار مميزة') }}
                        </p>
                        <a href="#software"
                            class="px-10 py-3 border-2 border-orange-500 text-orange-600 dark:text-orange-400 font-black hover:bg-orange-500 hover:text-white rounded-2xl transition duration-300 shadow-sm hover:shadow-orange-500/20">
                            {{ __('اكتشف البرامج') }}
                        </a>
                    </div>
                </div>
            </div>

        </x-home-slider>
    </section>

    {{-- PRODUCTS SECTION --}}
    <section id="products" class="py-24 bg-stone-100/80 dark:bg-slate-950 transition-colors duration-500">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between mb-16 gap-6">
                <h2 class="text-2xl md:text-4xl font-orbitron font-black text-slate-800 dark:text-white shrink-0 border-purple-600
                    {{ app()->getLocale() == 'ar' ? 'border-r-8 pr-6' : 'border-l-8 pl-6' }}">
                    {{ __('المنتجات المميزة') }}
                </h2>
                <div class="hidden md:block flex-1 h-0.5 bg-linear-to-{{ app()->getLocale() == 'ar' ? 'l' : 'r' }} from-purple-600/50 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
                @forelse($products ?? [] as $product)
                    {{-- كروت المنتجات ستعرض هنا --}}
                @empty
                    <div
                        class="col-span-full p-20 text-center bg-slate-50 dark:bg-slate-900/40 border-2 border-dashed border-slate-300 dark:border-slate-800 rounded-[3rem] backdrop-blur-md">
                        <span class="text-6xl block mb-6 animate-bounce">📦</span>
                        <p class="text-xl font-black text-slate-700 dark:text-slate-300 mb-2">
                            {{ __('لا توجد منتجات حالياً') }}
                        </p>
                        <p class="text-slate-500 dark:text-slate-500 font-medium">
                            {{ __('انتظرونا قريباً بأقوى العروض') }}
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

</x-app-layout>