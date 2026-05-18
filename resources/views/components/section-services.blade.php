@php
        $baseCard =
            'group flex flex-col items-center justify-between aspect-[1/1.05] rounded-[22px] p-4 text-center bg-white dark:bg-[#090f1e] border border-slate-200 dark:border-slate-800/80 shadow-sm transition-all duration-300 hover:-translate-y-1.5';
        $baseImg = 'w-11 h-11 object-contain opacity-80 hover:opacity-100 transition-all duration-300 hover:scale-110';
        $baseSpan =
            'block text-[9px] tracking-wider font-semibold text-slate-400 dark:text-slate-500 transition-colors duration-300';

        $cards = [
            [
                'title' => __('العاب منصة ستيم للحاسوب'),
                'sub_title' => 'STEAM',
                'url' => asset('images/categories/steam.svg'),
                'color' => '#00ADEF',
            ],
            [
                'title' => __('العاب بلايستيشن'),
                'sub_title' => 'PLAYSTATION',
                'url' => asset('images/categories/playstation.svg'),
                'color' => '#006FCD',
            ],
            [
                'title' => __('العاب إكس بوكس'),
                'sub_title' => 'XBOX NETWORK',
                'url' => asset('images/categories/xbox.svg'),
                'color' => '#107C10',
            ],
            [
                'title' => __('اشتراكات ويندوز والبرامج'),
                'sub_title' => 'WINDOWS & SOFTWARE',
                'url' => asset('images/categories/windows.svg'),
                'color' => '#0078D4',
            ],
            [
                'title' => __('اشتراكات تطبيقات (AI)'),
                'sub_title' => 'AI APPS',
                'url' => asset('images/categories/ai.svg'),
                'color' => '#10A37F',
            ],
            
            [
                'title' => __('اشتراكات ألعاب الفيديو'),
                'sub_title' => 'GAME PASS',
                'url' => asset('images/categories/game-pass.svg'),
                'color' => '#0F856C',
            ],
        ];
    @endphp

    <section id="services"
        class=" justify-center  bg-stone-50 dark:bg-[#030712] transition-colors duration-500 scroll-mt-20">
        <x-section-header :title="__('الخدمات الرقمية')" :description="__('نوفر لكم أفضل الخدمات الرقمية واشتراكات البرامج بأعلى معايير الجودة.')" />
        <div class="container mx-auto px-6 w-full">
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-5 max-w-6xl mx-auto justify-center py-16">
                @foreach ($cards as $card)
                    <a href="#"
                        class="{{ $baseCard }} hover:border-[var(--brand-color)]/50 dark:hover:border-[var(--brand-color)]/60 hover:shadow-[0_0_25px_var(--brand-color)]"
                        style="--brand-color: {{ $card['color'] }}; --tw-shadow-color: {{ $card['color'] }};">
                        <div class="flex items-center justify-center flex-1 w-full min-h-60px">
                            <img src="{{ $card['url'] }}" alt="{{ $card['sub_title'] }}"
                                class="{{ $baseImg }} hover:drop-shadow-[0_0_12px_var(--brand-color)]">
                        </div>
                        <div class="w-full mt-2">
                            <p class="text-[11px] font-bold text-slate-700 dark:text-slate-300 line-clamp-1 mb-0.5">
                                {{ $card['title'] }}
                            </p>
                            <span class="{{ $baseSpan }} group-hover:text-$brand-color">
                                {{ $card['sub_title'] }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>