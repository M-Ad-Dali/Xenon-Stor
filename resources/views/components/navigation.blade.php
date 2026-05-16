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

                <div class="hidden md:flex sm:ms-10 gap-4">

                    <x-nav-link href="#home" data-nav class="nav-link">
                        Home
                    </x-nav-link>

                    <x-nav-link href="#products" data-nav class="nav-link">
                        Products
                    </x-nav-link>

                    <x-nav-link href="#gaming" data-nav class="nav-link">
                        Gaming
                    </x-nav-link>

                </div>
            </div>

            <div class="flex items-center gap-2">
                <div class="md:hidden flex items-center">
                    <button @click="open = ! open"
                        class="p-2 rounded-xl text-slate-500 hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-all">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <x-dropdown align="{{ app()->getLocale() == 'ar' ? 'left' : 'right' }}" width="auto">
                    <x-slot name="trigger">
                        <button
                            class="flex items-center p-1 rounded-full bg-slate-100/50 dark:bg-slate-800/50 backdrop-blur-md border border-slate-200/50 dark:border-slate-700/50 hover:border-purple-500 hover:scale-105 transition-all duration-300 group">
                            <div
                                class="h-9 w-9 rounded-full bg-linear-to-tr from-purple-600 to-cyan-400 flex items-center justify-center text-white shadow-lg font-black text-lg group-hover:rotate-12 transition-transform">
                                @auth {{ substr(Auth::user()->name, 0, 1) }}
                                @else
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg> @endauth
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="mt-2">
                            <div
                                class="p-5 w-70 max-w-[85vw] bg-white/85 dark:bg-slate-900/95 backdrop-blur-2xl rounded-4xl shadow-2xl border border-white/40 dark:border-slate-700/50">
                                <div class="text-center mb-5">
                                    @auth
                                        <p class="text-base font-black text-slate-800 dark:text-white truncate">
                                            {{ Auth::user()->name }}</p>
                                        <p class="text-[10px] text-slate-500 font-bold opacity-70 mt-1">
                                            {{ Auth::user()->email }}</p>
                                    @else
                                        <h3 class="text-[#a855f7] font-black text-lg mb-4">مرحباً بك!</h3>
                                        <div class="flex flex-col gap-2">
                                            <a href=""
                                                class="py-2.5 bg-[#1e293b] text-white rounded-xl font-bold text-xs text-center hover:bg-[#334155] active:scale-95 transition-all">دخول</a>
                                            <a href=""
                                                class="py-2.5 bg-[#a855f7] text-white rounded-xl font-bold text-xs shadow-md shadow-purple-500/20 text-center hover:bg-[#9333ea] active:scale-95 transition-all">حساب
                                                جديد</a>
                                        </div>
                                    @endauth
                                </div>

                                <hr class="my-4 border-slate-200/40 dark:border-slate-700/40">

                                <div class="space-y-5">
                                    <div class="space-y-2">
                                        <label
                                            class="text-[9px] font-black text-slate-400 uppercase tracking-widest px-1">وضع
                                            العرض</label>
                                        <div @click="toggleTheme()"
                                            class="relative w-full h-11 bg-slate-200/40 dark:bg-slate-800/60 rounded-xl p-1 flex items-center cursor-pointer border dark:border-slate-700/50 group/theme">
                                            <div
                                                class="absolute top-1 bottom-1 w-[calc(50%-4px)] bg-white dark:bg-purple-600 rounded-lg transition-all duration-300 shadow-sm {{ app()->getLocale() == 'ar' ? 'right-1' : 'left-1' }}">
                                            </div>
                                            <div
                                                class="flex w-full z-10 font-bold text-lg text-center pointer-events-none">
                                                <div class="flex-1 group-hover/theme:scale-110 transition-transform">☀️
                                                </div>
                                                <div class="flex-1 group-hover/theme:scale-110 transition-transform">🌙
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="space-y-2">
                                        <label
                                            class="text-[9px] font-black text-slate-400 uppercase tracking-widest px-1">اللغة</label>
                                        <a href="{{ url('lang/' . (app()->getLocale() == 'ar' ? 'en' : 'ar')) }}"
                                            class="relative w-full h-11 bg-slate-200/40 dark:bg-slate-800/60 rounded-xl p-1 flex items-center border dark:border-slate-700/50 hover:border-purple-500/30 transition-colors group/lang">
                                            <div
                                                class="absolute top-1 bottom-1 w-[calc(50%-4px)] bg-white dark:bg-purple-600 rounded-lg transition-all duration-300 shadow-sm {{ app()->getLocale() == 'ar' ? 'right-1' : 'left-1' }}">
                                            </div>
                                            <div
                                                class="flex w-full z-10 font-black text-[10px] text-center uppercase tracking-tight pointer-events-none">
                                                <div
                                                    class="flex-1 transition-all group-hover/lang:scale-110 {{ app()->getLocale() == 'ar' ? 'text-purple-600 dark:text-white' : 'text-slate-500' }}">
                                                    العربية</div>
                                                <div
                                                    class="flex-1 transition-all group-hover/lang:scale-110 {{ app()->getLocale() == 'ar' ? 'text-slate-500' : 'text-purple-600 dark:text-white' }}">
                                                    English</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                @auth
                                    <div class="mt-5 pt-4 border-t border-slate-200/40 text-center">
                                        <form method="POST" action="">
                                            @csrf
                                            <button type="submit"
                                                class="text-red-500 text-[11px] font-black uppercase tracking-widest hover:text-red-400 transition-all">تسجيل
                                                الخروج</button>
                                        </form>
                                    </div>
                                @endauth
                            </div>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    {{-- MOBILE MENU --}}
    <div x-show="open" x-transition.opacity.duration.300ms
        class="md:hidden bg-white/95 dark:bg-slate-900/95 backdrop-blur-md border-t dark:border-white/5 shadow-inner">

        <div class="flex flex-col py-4">

            <a href="#home" data-nav class="nav-link py-4 text-center text-[13px] font-bold uppercase">
                Home
            </a>

            <a href="#products" data-nav class="nav-link py-4 text-center text-[13px] font-bold uppercase">
                Products
            </a>

            <a href="#gaming" data-nav class="nav-link py-4 text-center text-[13px] font-bold uppercase">
                Gaming
            </a>

        </div>
</nav>
