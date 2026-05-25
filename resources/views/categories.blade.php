<x-app-layout>
    <div class="min-h-screen bg-slate-50 dark:bg-slate-950 py-12 px-4 sm:px-6 lg:px-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto">

            {{-- 1. رأس الصفحة --}}
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="text-xs font-black text-purple-600 dark:text-purple-400 uppercase tracking-widest bg-purple-50 dark:bg-purple-950/40 px-3 py-1.5 rounded-full inline-block mb-3 border border-purple-100 dark:border-purple-900/30">
                    {{ __('المتجر الكامل') }}
                </span>

                <h1 class="text-3xl md:text-5xl font-black text-slate-900 dark:text-white mb-4 tracking-tight">
                    {{ __('تصفح') }}
                    <span class="bg-linear-to-r from-purple-600 to-cyan-400 bg-clip-text text-transparent">
                        {{ __('جميع الأقسام والمنتجات') }}
                    </span>
                </h1>
            </div>

            {{-- 🔥 تعريف الكاردات --}}
            @php
                $cards = [
                    [
                        'id' => 'steam',
                        'title' => __('العاب منصة ستيم للحاسوب'),
                        'sub_title' => 'STEAM',
                        'url' => asset('images/categories/steam.svg'),
                        'color' => '#00ADEF',
                    ],
                    [
                        'id' => 'playstation',
                        'title' => __('العاب بلايستيشن'),
                        'sub_title' => 'PLAYSTATION',
                        'url' => asset('images/categories/playstation.svg'),
                        'color' => '#006FCD',
                    ],
                    [
                        'id' => 'xbox',
                        'title' => __('العاب إكس بوكس'),
                        'sub_title' => 'XBOX NETWORK',
                        'url' => asset('images/categories/xbox.svg'),
                        'color' => '#107C10',
                    ],
                    [
                        'id' => 'windows',
                        'title' => __('اشتراكات ويندوز والبرامج'),
                        'sub_title' => 'WINDOWS & SOFTWARE',
                        'url' => asset('images/categories/windows.svg'),
                        'color' => '#0078D4',
                    ],
                    [
                        'id' => 'ai',
                        'title' => __('اشتراكات تطبيقات (AI)'),
                        'sub_title' => 'AI APPS',
                        'url' => asset('images/categories/ai.svg'),
                        'color' => '#10A37F',
                    ],
                    [
                        'id' => 'video-games',
                        'title' => __('اشتراكات ألعاب الفيديو'),
                        'sub_title' => 'GAME PASS',
                        'url' => asset('images/categories/game-pass.svg'),
                        'color' => '#0F856C',
                    ],
                ];
            @endphp

            {{-- Alpine --}}
            <div x-data="{
                activeCategory: '{{ request('category', 'ALL') }}',
                categoryTitle: @js(collect($cards)->firstWhere('id', request('category'))['title'] ?? 'جميع الأقسام')
            }" class="w-full">

                {{-- CATEGORIES --}}
                <section
                    class="justify-center bg-stone-50 dark:bg-[#030712] transition-colors duration-500 scroll-mt-20">
                    <div id="servic" class="container mx-auto px-6 w-full">

                        <div
                            class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-5 max-w-6xl mx-auto justify-center py-16">

                            @foreach ($cards as $card)
                                <a href="{{ route('categories.index', ['category' => $card['id']]) }}"
                                    @click.prevent="
                                        activeCategory = '{{ $card['id'] }}';
                                        categoryTitle = '{{ $card['title'] }}'
                                    "
                                    :class="activeCategory === '{{ $card['id'] }}' ? 'is-active' : ''"
                                    class="group flex flex-col items-center justify-between aspect-[1/1.05] rounded-[22px] p-4 text-center bg-white dark:bg-[#090f1e] border border-slate-200 dark:border-slate-800/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-brand-purple/50 dark:hover:border-brand-purple/60 hover:shadow-[0_0_25px_var(--brand-color)]"
                                    style="--brand-color: {{ $card['color'] }}; --tw-shadow-color: {{ $card['color'] }};">

                                    <div class="relative flex items-center justify-center flex-1 w-full min-h-60px">

                                        {{-- مربع شفاف خلف الأيقونة --}}
                                        <div class="absolute w-18 h-18 rounded-2xl border border-white/10 dark:border-white/5 shadow-inner"
                                            style="background-color: {{ $card['color'] }}20;">
                                        </div>

                                        <img src="{{ $card['url'] }}" alt="{{ $card['sub_title'] }}"
                                            class="relative z-10 w-11 h-11 object-contain opacity-80 hover:opacity-100 transition-all duration-300 hover:scale-110 hover:drop-shadow-[0_0_12px_var(--brand-color)]">
                                    </div>

                                    <div class="w-full mt-2">
                                        <p
                                            class="text-[11px] font-bold text-slate-700 dark:text-slate-300 line-clamp-1 mb-0.5">
                                            {{ $card['title'] }}
                                        </p>

                                        <span
                                            class="block text-[9px] tracking-wider font-semibold text-slate-400 dark:text-slate-500 transition-colors duration-300">
                                            {{ $card['sub_title'] }}
                                        </span>
                                    </div>

                                </a>
                            @endforeach

                        </div>

                    </div>
                </section>

                {{-- PRODUCTS --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

                    {{-- عنوان القسم --}}
                    <div class="mb-6 text-center col-span-full">
                        <h2 class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white">
                            <span x-text="categoryTitle"></span>
                        </h2>
                    </div>

                    @php
                        $products = [
                            ['category_id' => 'steam'],
                            ['category_id' => 'playstation'],
                            ['category_id' => 'xbox'],
                            ['category_id' => 'windows'],
                            ['category_id' => 'ai'],
                            ['category_id' => 'video-games'],
                        ];
                    @endphp

                    @foreach ($products as $prod)
                        <div x-show="activeCategory === 'ALL' || activeCategory === '{{ $prod['category_id'] }}'"
                            x-transition class="w-full">

                            <x-product-card />
                        </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</x-app-layout>
