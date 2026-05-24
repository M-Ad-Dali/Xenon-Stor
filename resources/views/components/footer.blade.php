<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<footer
    class="bg-stone-100/80 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-900 transition-colors duration-500">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12 mt-8">

            {{-- العمود الأول: الهوية والوصف --}}
            <div class="md:col-span-1 space-y-4">
                <a href="#" class="text-2xl font-orbitron font-black text-slate-800 dark:text-white tracking-wider">
                    <span class="text-purple-600 dark:text-purple-400">XENON</span>STOR
                </a>
                <p class="text-sm font-medium text-slate-600 dark:text-slate-400 leading-relaxed">
                    {{ __('اكتشف المستقبل في تسوق المنتجات الرقمية') . '<br>' . __('بأمان تام وسرعة فائقة'), }}
                </p>
            </div>

            {{-- العمود الثاني: روابط سريعة --}}
            <div class="space-y-4">
                <h4 class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider">
                    {{ __('تصفح الأقسام') }}
                </h4>
                <ul class="space-y-2.5 text-sm font-black">
                    <li>
                        <a href="#steam"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('العاب منصة ستيم للحاسوب') }}
                        </a>
                    </li>
                    <li>
                        <a href="#playstation"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('العاب بلايستيشن') }}
                        </a>
                    </li>
                    <li>
                        <a href="#xbox"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('العاب إكس بوكس') }}
                        </a>
                    </li>
                    <li>
                        <a href="#windows"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('اشتراكات ويندوز والبرامج') }}
                        </a>
                    </li>
                    <li>
                        <a href="#ai"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('اشتراكات تطبيقات (AI)') }}
                        </a>
                    </li>
                    <li>
                        <a href="#video-games"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('اشتراكات ألعاب الفيديو') }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- العمود الثالث: الدعم والمساعدة --}}
            <div class="space-y-4">
                <h4 class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider">
                    {{ __('الدعم الفني') }}
                </h4>
                <ul class="space-y-2.5 text-sm font-black">
                    <li>
                        <a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('شروط الخدمة') }}
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('سياسة الاسترجاع') }}
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">
                            {{ __('الأسئلة الشائعة') }}
                        </a>
                    </li>
                </ul>
            </div>

            {{-- العمود الرابع: وسائل التواصل الاجتماعي والاتصال --}}
            <div class="space-y-4">
                <h4 class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider">
                    {{ __('تابعنا') }}
                </h4>
                <div class="flex items-center gap-3">
                    {{-- وندوز إكس / تويتر --}}
                    <a href="#"
                        class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm"
                        aria-label="X">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    {{-- انستغرام --}}
                    <a href="#"
                        class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm"
                        aria-label="Instagram">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5h.01" />
                        </svg>
                    </a>
                    {{-- واتساب الفوري --}}
                    <a href="#"
                        class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm"
                        aria-label="WhatsApp">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
                        </svg>
                    </a>
                </div>
                {{-- location --}}
                @php
                    try {
                        // 💡 فحص إذا كنت قد كتبت اسم دولة في الرابط مثل: http://127.0.0.1:8000?test_country=Saudi Arabia
                        if (request()->has('test_country')) {
                            $countryName = request()->query('test_country');
                        } else {
                            // الكود الطبيعي الافتراضي للمشروع
                            $location = geoip()->getLocation(request()->ip());

                            if ($location && isset($location->country) && !$location->default) {
                                $countryName = $location->country;
                            } else {
                                $countryName = __('اليمن');
                            }
                        }
                    } catch (\Exception $e) {
                        $countryName = __('اليمن');
                    }
                @endphp

                <div
                    class="group p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm flex items-center gap-2 w-fit select-none">

                    {{-- أيقونة الموقع الجغرافي الثابتة والمتحولة عند التحويم --}}
                    <svg width="20" height="20" viewBox="0 0 21 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-slate-400 group-hover:text-purple-500 transition-colors duration-300">
                        <g>
                            <path
                                d="M10.6084 1.06348C6.29681 1.06348 2.80151 4.55878 2.80151 8.87041C2.80151 10.7953 3.50132 12.5544 4.6562 13.9156L10.6084 20.9256L16.5605 13.9154C17.7154 12.5544 18.4152 10.7951 18.4152 8.87019C18.4154 4.55878 14.9201 1.06348 10.6084 1.06348ZM10.6084 11.8122C8.8352 11.8122 7.39784 10.3749 7.39784 8.60161C7.39784 6.82836 8.8352 5.391 10.6084 5.391C12.3817 5.391 13.8191 6.82836 13.8191 8.60161C13.8191 10.3749 12.3817 11.8122 10.6084 11.8122Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>

                    {{-- نص الدولة المترجم تلقائياً --}}
                    @if ($countryName)
                        <span
                            class="text-sm font-bold text-slate-600 dark:text-slate-400 group-hover:text-purple-500 dark:group-hover:text-purple-400 transition-colors duration-300 tracking-wide font-orbitron">
                            {{ __($countryName) }}
                        </span>
                    @endif

                </div>
            </div>

        </div>

        {{-- الخط الفاصل السفلي وحقوق الملكية --}}
        <div
            class="border-t border-slate-200 dark:border-slate-900 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs md:text-sm font-medium text-slate-500 dark:text-slate-500 mb-8">
            <p>
                &copy; {{ date('Y') }} <span
                    class="font-orbitron font-black text-slate-700 dark:text-slate-300">XENONSTOR</span>.
                {{ __('جميع الحقوق محفوظة.') }}
            </p>
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-1">🔒 {{ __('دفع آمن 100%') }}</span>
                <span class="flex items-center gap-1">⚡ {{ __('تسليم تلقائي وفوري') }}</span>
            </div>
        </div>
    </footer>
</div>
