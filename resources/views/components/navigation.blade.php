<nav x-data="{ open: false }"
    class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-white/20 dark:border-slate-800/50 sticky top-0 z-50 w-full">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 sm:h-20">

            <div class="flex">
                <div class="shrink-0 flex items-center">
                    <a href="/"
                        class="font-orbitron text-2xl font-bold text-purple-600 dark:text-purple-400 tracking-tighter">
                        XENON<span class="text-slate-900 dark:text-white">STOR</span>
                    </a>
                </div>

                <div class="hidden md:flex sm:ms-10">
                    <x-nav-link href="#home" data-nav class="nav-link">
                        {{ __('الرئيسية') }}
                    </x-nav-link>

                    <x-nav-link href="#products" data-nav class="nav-link">
                        {{ __('المنتجات') }}
                    </x-nav-link>

                    <x-nav-link href="#gaming" data-nav class="nav-link">
                        {{ __('الألعاب') }}
                    </x-nav-link>
                </div>
            </div>

            {{-- Search Input --}}
            <x-search-input class="w-60 xl:w-100 hidden md:block" />

            {{-- Mobile menu button --}}
            <div class="flex items-center gap-2 ">
                <div class="md:hidden flex items-center">
                    <button @click="open = ! open" 
                        class="p-2 rounded-xl text-slate-500 hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-all cursor-pointer">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <x-user-dropdown />
            </div>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <div x-show="open" x-transition:enter="transition ease-out duration-300 transform"
        x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4"
        class="md:hidden absolute top-full left-0 w-full bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-b border-slate-200/50 dark:border-slate-800/50 shadow-xl z-100 flex flex-col py-4 px-6 divide-y divide-slate-100 dark:divide-slate-800/60"
        style="display: none;"
        @click.outside="open = false">

        <x-search-input class="w-full pb-4" />

        {{-- تم تعديل المصفوفة لتستقبل الدوال المترجمة تلقائياً في الموبايل --}}
        @foreach ([
            '#home' => __('الرئيسية'),
            '#products' => __('المنتجات'),
            '#gaming' => __('الألعاب'),
        ] as $url => $label)
            <a href="{{ $url }}" data-nav
                class="nav-link py-3.5 text-center text-xs font-black uppercase tracking-wider text-slate-700 dark:text-slate-300 hover:text-purple-600 dark:hover:text-purple-400 active:scale-98 transition-all">
                {{ $label }}
            </a>
        @endforeach
    </div>
</nav>