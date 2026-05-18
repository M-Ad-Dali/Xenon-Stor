{{-- تفعيل استقبال المتغيرات من الخارج مع قيم افتراضية --}}
@props([
    'image' => 'https://images.unsplash.com/photo-1542751371-adc38448a05e?auto=format&fit=crop&q=80&w=600',
    'badge' => '-20%',
    'category' => 'PC / PLAYSTATION',
    'title' => 'Cyberpunk 2077',
    'description' => __('اكتشف عالم ليل المدينة المذهل مع حزمة الإضافات الرقمية الكاملة بأمان وسرعة.'),
    'oldPrice' => '59.99 $',
    'price' => '39.99 $',
    'url' => '#'
])

<div
    onclick="window.location='{{ $url }}'"
    class="group relative bg-white dark:bg-slate-900/60 rounded-[1.8rem] border border-slate-200/60 dark:border-slate-800/50 p-3 flex flex-col justify-between overflow-hidden shadow-lg hover:shadow-xl hover:shadow-purple-500/15 dark:hover:shadow-purple-500/15 hover:-translate-y-1 hover:border-purple-500/40 dark:hover:border-purple-500/40 transition-all duration-300 w-full max-w-[16rem] mx-auto cursor-pointer"
>

    {{-- Glow Effect --}}
    <div class="absolute -inset-px bg-linear-to-r from-purple-600 to-cyan-400 rounded-[1.8rem] opacity-0 group-hover:opacity-10 transition duration-500 pointer-events-none"></div>

    {{-- Image --}}
    <div class="relative w-full aspect-square rounded-[1.4rem] overflow-hidden bg-slate-100 dark:bg-slate-950 mb-3 group-hover:scale-[1.02] transition-transform duration-300">

        @if(!empty($badge))
            <span class="absolute top-2.5 inset-s-2.5 z-10 py-0.5 px-2 bg-purple-600 text-white font-orbitron text-[8px] font-black tracking-wider rounded-md shadow-sm">
                {{ $badge }}
            </span>
        @endif

        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            loading="lazy"
            decoding="async"
            class="w-full h-full object-cover group-hover:rotate-1 transition-transform duration-500"
        >

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
                @if(!empty($oldPrice))
                    <span class="text-[9px] font-bold text-slate-400 dark:text-slate-500 line-through leading-none mb-0.5">
                        {{ $oldPrice }}
                    </span>
                @endif

                <span class="text-sm md:text-base font-orbitron font-black text-slate-900 dark:text-white tracking-tight">
                    {{ $price }}
                </span>
            </div>

            <button
                type="button"
                class="py-1 px-2.5 bg-slate-900 dark:bg-purple-600 text-white font-bold text-[9px] rounded-lg hover:bg-purple-700 dark:hover:bg-purple-500 active:scale-95 transition-all shadow-sm hover:shadow-purple-500/15 cursor-pointer truncate"
            >
                {{ __('شراء الآن') }}
            </button>

        </div>
    </div>
</div>