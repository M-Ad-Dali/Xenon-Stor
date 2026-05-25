{{-- تفعيل استقبال المتغيرات من الخارج مع قيم افتراضية --}}
@props([
    'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=600',
    'badge' => null,
    'category' => 'PC / PLAYSTATION',
    'title' => 'Cyberpunk 2077',
    'description' => __('اكتشف عالم ليل المدينة المذهل مع حزمة الإضافات الرقمية الكاملة بأمان وسرعة.'),
    'oldPrice' => '59.99 $',
    'price' => '39.99 $',
    'url' => '#',
])

<div x-data="{ bubbleOpen: false }" class="w-full max-w-[16rem] mx-auto">

    {{-- كارد المنتج الأساسي --}}
    <div @click="bubbleOpen = true"
        class="group relative bg-white dark:bg-slate-900/60 rounded-[1.8rem] border border-slate-200/60 dark:border-slate-800/50 p-3 flex flex-col justify-between overflow-hidden shadow-lg hover:shadow-xl hover:shadow-purple-500/15 dark:hover:shadow-purple-500/15 hover:-translate-y-1 hover:border-purple-500/40 dark:hover:border-purple-500/40 transition-all duration-300 w-full cursor-pointer h-full">

        {{-- Glow Effect --}}
        <div class="absolute -inset-px bg-linear-to-r from-purple-600 to-cyan-400 rounded-[1.8rem] opacity-0 group-hover:opacity-10 transition duration-500 pointer-events-none"></div>

        {{-- Image --}}
        <div class="relative w-full aspect-square rounded-[1.4rem] overflow-hidden bg-slate-100 dark:bg-slate-950 mb-3 group-hover:scale-[1.02] transition-transform duration-300">

            {{-- 🛠️ تعديل الكارد الخارجي: حساب النسبة تلقائياً --}}
            @if (!empty($oldPrice) && !empty($price))
                @php
                    $old = (float) filter_var($oldPrice, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                    $current = (float) filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                    $percentage = $old > 0 ? round((($old - $current) / $old) * 100) : 0;
                @endphp

                @if ($percentage > 0)
                    <span class="absolute top-2.5 inset-s-2.5 z-10 py-0.5 px-2 bg-purple-600 text-white font-orbitron text-[8px] font-black tracking-wider rounded-md shadow-sm">
                        -{{ $percentage }}%
                    </span>
                @endif
            @endif

            <img src="{{ $image }}" alt="{{ $title }}" loading="lazy" decoding="async" class="w-full h-full object-cover group-hover:rotate-1 transition-transform duration-500">
            <div class="absolute inset-0 bg-linear-to-t from-purple-900/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        </div>

        {{-- Content --}}
        <div class="flex flex-col flex-1 px-0.5 rtl:text-right ltr:text-left">
            <span class="text-[8px] font-black text-purple-600 dark:text-purple-400 uppercase tracking-widest mb-1 block">
                {{ $category }}
            </span>

            <h3 class="text-xs md:text-sm font-black text-slate-800 dark:text-white line-clamp-1 mb-1 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                {{ $title }}
            </h3>

            <p class="text-[10px] text-slate-500 dark:text-slate-400 font-medium line-clamp-2 mb-2.5 leading-relaxed">
                {{ $description }}
            </p>

            {{-- Price + Button --}}
            <div class="flex items-center justify-between mt-auto pt-2 border-t border-slate-100 dark:border-slate-800/40 gap-1.5">
                <div class="flex flex-col shrink-0">
                    @if (!empty($oldPrice))
                        <span class="text-[9px] font-bold text-slate-400 dark:text-slate-500 line-through leading-none mb-0.5">
                            {{ $oldPrice }}
                        </span>
                    @endif
                </div>

                <button type="button" @click.stop="window.location.href='{{ $url }}'"
                    class="ms-auto flex items-center py-1 px-2.5 gap-1.5 bg-slate-900 dark:bg-purple-600 text-white font-bold text-[14px] rounded-lg hover:bg-purple-700 dark:hover:bg-purple-500 active:scale-95 transition-all shadow-sm hover:shadow-purple-500/15 cursor-pointer truncate">
                    <x-icon-cart classes="w-4 h-4" />
                    {{ $price }}
                </button>
            </div>
        </div>
    </div>

    {{-- 🌟 نافذة البابل المنبثقة (Bubble Pop-up Modal) 🌟 --}}
    <div x-show="bubbleOpen" class="fixed inset-0 z-50 flex items-center justify-center p-4 overflow-x-hidden overflow-y-auto" x-cloak>

        {{--  الخلفية الضبابية المظلمة (Backdrop) --}}
        <div x-show="bubbleOpen" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="bubbleOpen = false" 
            class="fixed inset-0 bg-slate-950/40 backdrop-blur-md transition-opacity"></div>

        {{-- جسم الفقاعة المنبثقة المطور --}}
        <div x-show="bubbleOpen" x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0 scale-75 translate-y-4" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease-in duration-200 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-75 translate-y-4" 
            class="relative bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-[2.2rem] p-5 w-full max-w-md shadow-2xl transition-all rtl:text-right ltr:text-left overflow-hidden max-h-[85vh] overflow-y-auto">

            {{-- زر إغلاق مخفي ذكي --}}
            <button @click="bubbleOpen = false" class="absolute top-4 inset-s-4 w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 hover:text-purple-500 hover:bg-purple-500/10 flex items-center justify-center transition-all cursor-pointer z-20">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="flex flex-col gap-4 mt-2">
                {{-- بنر أو صورة المنتج داخل البابل --}}
                <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-slate-100 dark:bg-slate-950 shadow-inner">

                    {{-- 🛠️ تعديل البابل المنبثق: تم استبدال المتغير القديم بالحسبة الديناميكية للنسبة المئوية --}}
                    @if (!empty($oldPrice) && !empty($price))
                        @php
                            $old_b = (float) filter_var($oldPrice, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                            $current_b = (float) filter_var($price, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
                            $percentage_b = $old_b > 0 ? round((($old_b - $current_b) / $old_b) * 100) : 0;
                        @endphp

                        @if ($percentage_b > 0)
                            <span class="absolute top-3 inset-s-3 z-10 py-0.5 px-2 bg-purple-600 text-white font-orbitron text-[9px] font-black tracking-wider rounded-md shadow-md">
                                -{{ $percentage_b }}%
                            </span>
                        @endif
                    @endif

                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-cover">
                </div>

                {{-- تفاصيل المنتج والنصوص الكاملة --}}
                <div class="px-1">
                    <span class="text-[9px] font-black text-purple-600 dark:text-purple-400 uppercase tracking-widest block mb-1">
                        {{ $category }}
                    </span>
                    <h2 class="text-base md:text-lg font-black text-slate-800 dark:text-white mb-2 font-orbitron">
                        {{ $title }}
                    </h2>
                    <p class="text-xs text-slate-600 dark:text-slate-400 font-medium leading-relaxed bg-slate-50 dark:bg-slate-950/40 p-3 rounded-xl border border-slate-100 dark:border-slate-800/40">
                        {{ $description }}
                    </p>
                </div>

                {{-- منطقة السعر النهائي وأزرار التحكم --}}
                <div class="flex items-center justify-between pt-3.5 border-t border-slate-100 dark:border-slate-800/60 mt-1">
                    <div class="flex flex-col">
                        @if (!empty($oldPrice))
                            <span class="text-[10px] font-bold text-slate-400 dark:text-slate-500 line-through mb-0.5">
                                {{ $oldPrice }}
                            </span>
                        @endif
                        <span class="text-lg font-orbitron font-black text-slate-900 dark:text-white tracking-tight">
                            {{ $price }}
                        </span>
                    </div>

                    <div class="flex gap-2">
                        <button @click="bubbleOpen = false" class="px-3.5 py-2 bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-black rounded-xl hover:bg-slate-200 dark:hover:bg-slate-700 transition-all cursor-pointer">
                            {{ __('إلغاء') }}
                        </button>
                        <a href="{{ $url }}" class="flex items-center gap-1.5 py-2 px-4 bg-purple-600 text-white font-black text-xs rounded-xl hover:bg-purple-700 active:scale-95 transition-all shadow-md shadow-purple-500/20">
                            <x-icon-cart classes="w-3.5 h-3.5" />
                            {{ __('شراء الان') }}
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>