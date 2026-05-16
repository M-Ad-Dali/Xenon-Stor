<div class="relative inline-block text-left self-center z-150" x-data="{ open: false }" @click.outside="open = false"
    @close.stop="open = false">

    {{-- 1. زر التحكم المباشر (Trigger) --}}
    <button @click="open = ! open" type="button"
        class="flex items-center p-1 rounded-full bg-slate-100/50 dark:bg-slate-800/50 backdrop-blur-md border border-slate-200/50 dark:border-slate-700/50 hover:border-purple-500 hover:scale-105 transition-all duration-300 group cursor-pointer">
        <div
            class="h-9 w-9 rounded-full bg-linear-to-tr from-purple-600 to-cyan-400 flex items-center justify-center text-white shadow-lg font-black text-lg group-hover:rotate-12 transition-transform">
            @auth {{ substr(Auth::user()->name, 0, 1) }}
            @else
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            @endauth
        </div>
    </button>

    {{-- 2. محتوى القائمة المنسدلة (Content) --}}
    <div x-show="open" style="display: none;" @click.away="open = false" @click.stop.immediate
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        class="absolute z-160 mt-2 p-5 w-70 max-w-[85vw] bg-white/85 dark:bg-slate-900/95 backdrop-blur-2xl rounded-4xl shadow-2xl border border-white/40 dark:border-slate-700/50 {{ app()->getLocale() == 'ar' ? 'ltr:origin-top-left rtl:origin-top-right start-0' : 'ltr:origin-top-right rtl:origin-top-left end-0' }}">

        {{-- أ. قسم المستخدم أو أزرار الدخول --}}
        <div class="text-center mb-5">
            @auth
                <p class="text-base font-black text-slate-800 dark:text-white truncate">{{ Auth::user()->name }}</p>
                <p class="text-[10px] text-slate-500 font-bold opacity-70 mt-1">{{ Auth::user()->email }}</p>
            @else
                <h3 class="text-[#a855f7] font-black text-lg mb-4">مرحباً بك!</h3>
                <div class="flex flex-col gap-2 font-bold text-xs text-center">
                    <a href=""
                        class="py-2.5 bg-[#1e293b] text-white rounded-xl hover:bg-[#334155] active:scale-95 transition-all">دخول</a>
                    <a href=""
                        class="py-2.5 bg-[#a855f7] text-white rounded-xl shadow-md shadow-purple-500/20 hover:bg-[#9333ea] active:scale-95 transition-all">حساب
                        جديد</a>
                </div>
            @endauth
        </div>

        <hr class="my-4 border-slate-200/40 dark:border-slate-700/40">

        {{-- ب. قسم الإعدادات (وضع العرض واللغة) --}}
        <div class="space-y-5">
            <div class="space-y-2">
                <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest px-1">وضع العرض</label>
                <div @click="toggleTheme()"
                    class="relative w-full h-11 bg-slate-200/40 dark:bg-slate-800/60 rounded-xl p-1 flex items-center cursor-pointer border dark:border-slate-700/50 group/theme">
                    <div
                        class="absolute top-1 bottom-1 w-[calc(50%-4px)] bg-white dark:bg-purple-600 rounded-lg transition-all duration-300 shadow-sm {{ app()->getLocale() == 'ar' ? 'right-1' : 'left-1' }}">
                    </div>
                    <div class="flex w-full z-10 font-bold text-lg text-center pointer-events-none select-none">
                        <div class="flex-1 group-hover/theme:scale-110 transition-transform">☀️</div>
                        <div class="flex-1 group-hover/theme:scale-110 transition-transform">🌙</div>
                    </div>
                </div>
            </div>

            <div class="space-y-2">
                <label class="text-[9px] font-black text-slate-400 uppercase tracking-widest px-1">اللغة</label>
                <a href="{{ url('lang/' . (app()->getLocale() == 'ar' ? 'en' : 'ar')) }}"
                    class="relative w-full h-11 bg-slate-200/40 dark:bg-slate-800/60 rounded-xl p-1 flex items-center border dark:border-slate-700/50 hover:border-purple-500/30 transition-colors group/lang">
                    <div
                        class="absolute top-1 bottom-1 w-[calc(50%-4px)] bg-white dark:bg-purple-600 rounded-lg transition-all duration-300 shadow-sm {{ app()->getLocale() == 'ar' ? 'right-1' : 'left-1' }}">
                    </div>
                    <div
                        class="flex w-full z-10 font-black text-[10px] text-center uppercase tracking-tight pointer-events-none select-none">
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

        {{-- جـ. زر تسجيل الخروج --}}
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
