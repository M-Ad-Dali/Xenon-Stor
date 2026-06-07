@php
    $isAr = app()->getLocale() == 'ar';

    $slides = [
        [
            'id' => '#about',
            'title' =>
                '<span class="bg-clip-text text-transparent bg-linear-to-r from-purple-600 via-fuchsia-500 to-cyan-500 dark:from-purple-400 dark:via-fuchsia-500 dark:to-cyan-400">XenonStor</span>',
            'desc' => __('اكتشف المستقبل في تسوق المنتجات الرقمية') . '<br>' . __('بأمان تام وسرعة فائقة'),
            'btn_text' => __('من نحن'),
            'btn_url' => '#about',
            'btn_color' =>
                'border-purple-500 text-purple-600 dark:text-purple-400 hover:bg-purple-500 hover:shadow-purple-500/20',
            'glows' => [
                [
                    'class' =>
                        'bottom-1/4 w-96 h-96 bg-cyan-500/25 dark:bg-cyan-500/10 ' . ($isAr ? '-right-20' : '-left-20'),
                ],
            ],
        ],
        [
            'id' => '#offers',
            'title' => 'Store <span class="text-cyan-600 dark:text-cyan-400">' . __('offers') . '</span>',
            'desc' => __('أفضل العروض على الالعب وبطاقات الشحن العالمية'),
            'btn_text' => __('اكتشف العروض'),
            'btn_url' => '#offers',
            'btn_color' =>
                'border-cyan-500 text-cyan-600 dark:text-cyan-400 hover:bg-cyan-500 hover:shadow-cyan-500/20',
            'glows' => [
                [
                    'class' =>
                        'top-1/4 w-96 h-96 bg-purple-500/25 dark:bg-purple-500/10 ' .
                        ($isAr ? '-left-20' : '-right-20'),
                ],
            ],
        ],
        [
            'id' => '#steam',
            'title' => 'Steam <span class="text-red-900 dark:text-red-600">' . __('Library') . '</span>',
            'desc' => __('مكتبة ستيم العملاقة بين يديك وبأرخص الأسعار'),
            'btn_text' => __('تصفح ستيم'),
            'btn_url' => '#steam',
            'btn_color' =>
                'border-red-900 text-red-900 dark:text-red-500 hover:bg-red-900 hover:text-white hover:shadow-[0_0_15px_rgba(150,0,0,0.5)]',
            'glows' => [
                [
                    'class' =>
                        'absolute z-0 bottom-1/3 w-96 h-96 bg-red-900/30 dark:bg-red-950/40 blur-[120px] ' .
                        ($isAr ? '-left-20' : '-right-20'),
                ],
            ],
        ],
        [
            'id' => '#playstation',
            'title' =>
                'PlayStation <span class="text-slate-400 dark:text-slate-200 font-bold drop-shadow-[0_0_8px_rgba(200,200,200,0.8)]">' .
                __('Store') .
                '</span>',
            'desc' => __('أحدث ألعاب واشتراكات بلايستيشن بأسعار حصرية'),
            'btn_text' => __('تصفح بلايستيشن'),
            'btn_url' => '#playstation',
            'btn_color' =>
                'border-slate-400 text-slate-500 dark:text-slate-200 hover:bg-slate-500 hover:text-white hover:shadow-[0_0_15px_rgba(150,150,150,0.5)]',
            'glows' => [
                [
                    'class' =>
                        'top-1/3 w-96 h-96 bg-slate-300/30 dark:bg-slate-400/20 blur-[100px] ' .
                        ($isAr ? 'right-10' : 'left-10'),
                ],
            ],
        ],
        [
            'id' => '#xbox',
            'title' => 'Xbox <span class="text-[#107C10] dark:text-[#107C10]">' . __('Ultimate') . '</span>',
            'desc' => __('اشتراكات جيم باس وألعاب إكس بوكس الفورية'),
            'btn_text' => __('تصفح إكس بوكس'),
            'btn_url' => '#xbox',
            'btn_color' =>
                'border-[#107C10] text-[#107C10] hover:bg-[#107C10] hover:text-white hover:shadow-[0_0_20px_rgba(16,124,16,0.4)]',
            'glows' => [['class' => 'center w-full h-96 bg-[#107C10]/20 blur-3xl']],
        ],
        [
            'id' => '#premium',
            'title' => 'Premium <span class="text-orange-600 dark:text-orange-400">Apps</span>',
            'desc' => __('اشتراكات ويندوز الأصلية وبرامج Adobe و Microsoft Office بأسعار مميزة'),
            'btn_text' => __('اكتشف البرامج'),
            'btn_url' => '#premium',
            'btn_color' =>
                'border-orange-500 text-orange-600 dark:text-orange-400 hover:bg-orange-500 hover:shadow-orange-500/20',
            'glows' => [
                [
                    'class' =>
                        '-bottom-20 w-full max-w-4xl h-full max-h-4xl bg-orange-600/25 dark:bg-orange-600/10 ' .
                        ($isAr ? 'left-0' : 'right-0'),
                ],
                [
                    'class' =>
                        '-bottom-10 w-80 h-80 bg-red-600/25 dark:bg-red-600/10 delay-500 ' .
                        ($isAr ? 'right-10' : 'left-10'),
                ],
            ],
        ],
        [
            'id' => '#ai',
            'title' => 'AI <span class="text-emerald-600 dark:text-emerald-400">Vision</span>',
            'desc' => __('اشتراكات ChatGPT Plus و Gemini و Claude AI بأسعار خرافية'),
            'btn_text' => __('اكتشف الذكاء الاصطناعي'),
            'btn_url' => '#ai',
            'btn_color' =>
                'border-emerald-500 text-emerald-600 dark:text-emerald-400 hover:bg-emerald-500 hover:shadow-emerald-500/20',
            'glows' => [
                [
                    'class' =>
                        'bottom-0 w-full max-w-3xl h-full max-h-3xl bg-emerald-500/25 dark:bg-emerald-500/10 ' .
                        ($isAr ? 'right-0' : 'left-0'),
                ],
                [
                    'class' =>
                        'top-10 w-72 h-72 bg-teal-400/25 dark:bg-teal-400/10 delay-700 ' .
                        ($isAr ? 'left-10' : 'right-10'),
                ],
            ],
        ],
        [
            'id' => '#entertainment',
            'title' => 'Entertainment <span class="text-rose-600 dark:text-rose-400">Department</span>',
            'desc' => __('اشتراكات نيتفليكس ويوتيوب بريميوم وشاهد'),
            'btn_text' => __('تصفح الباقات'),
            'btn_url' => '#entertainment',
            'btn_color' =>
                'border-rose-500 text-rose-600 dark:text-rose-400 hover:bg-rose-500 hover:shadow-rose-500/20',
            'glows' => [
                [
                    'class' =>
                        'top-1/2 left-1/2 w-full max-w-2xl h-full max-h-2xl -translate-x-1/2 -translate-y-1/2 bg-rose-500/25 dark:bg-rose-500/10',
                ],
            ],
        ],
    ];
@endphp

@foreach ($slides as $slide)
    <div class="swiper-slide flex items-center justify-center">
        <div class="relative min-h-[90vh] flex items-center justify-center w-full overflow-hidden">

            {{-- طباعة كرات التوهج الخلفية بهيكل HTML موحد ونظيف جداً --}}
            @foreach ($slide['glows'] as $glow)
                <div class="absolute rounded-full blur-3xl animate-pulse {{ $glow['class'] }}"></div>
            @endforeach

            {{-- المحتوى الداخلي للسلايد --}}
            <div class="container mx-auto px-6 text-center z-10">
                <h2 class="text-5xl md:text-7xl font-orbitron font-black mb-8 px-1">
                    {!! $slide['title'] !!}
                </h2>

                <p class="text-xl md:text-2xl text-slate-700 dark:text-slate-400 mb-10 font-bold mx-4 leading-relaxed">
                    {!! $slide['desc'] !!}
                </p>

                <a href="{{ $slide['btn_url'] }}"
                    class="px-10 py-3 border-2 font-black rounded-2xl transition duration-300 shadow-sm inline-block hover:text-white {{ $slide['btn_color'] }}">
                    {{ $slide['btn_text'] }}
                </a>
            </div>

        </div>
    </div>
@endforeach
