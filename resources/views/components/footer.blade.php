<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <footer class=" dark:bg-slate-950 border-t border-slate-200 dark:border-slate-900 transition-colors duration-500">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-10 mb-12 mt-8 text-center md:text-start">

            {{-- العمود الأول: الهوية والوصف --}}
            <div class="md:col-span-1 space-y-4">
                <a href="#"
                    class="text-2xl font-orbitron font-black text-slate-800 dark:text-white tracking-widerBlock inline-block">
                    <span class="text-purple-600 dark:text-purple-400">XENON</span>STOR
                </a>
                <p class="text-sm font-medium text-slate-600 dark:text-slate-400 leading-relaxed">
                    {!! __('اكتشف المستقبل في تسوق المنتجات الرقمية') . '<br>' . __('بأمان تام وسرعة فائقة') !!}
                </p>
            </div>

            {{-- العمود الثاني: روابط سريعة --}}
            <div class="space-y-4">
                <h4 class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider">
                    {{ __('تصفح الأقسام') }}
                </h4>
                <ul class="space-y-2.5 text-sm font-black">
                    <li><a href="/#offers"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('العروض') }}</a>
                    </li>
                    <li><a href="/#steam"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('العاب منصة ستيم للحاسوب') }}</a>
                    </li>
                    <li><a href="/#playstation"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('العاب بلايستيشن') }}</a>
                    </li>
                    <li><a href="/#xbox"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('العاب إكس بوكس') }}</a>
                    </li>
                    <li><a href="/#windows"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('اشتراكات ويندوز والبرامج') }}</a>
                    </li>
                    <li><a href="/#ai"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('اشتراكات تطبيقات (AI)') }}</a>
                    </li>
                    <li><a href="/#video-games"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('اشتراكات ألعاب الفيديو') }}</a>
                    </li>
                </ul>
            </div>

            {{-- العمود الثالث: الدعم والمساعدة --}}
            <div class="space-y-4">
                <h4 class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider">
                    {{ __('الدعم الفني') }}
                </h4>
                <ul class="space-y-2.5 text-sm font-black">
                    <li><a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('شروط الخدمة') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('سياسة الاسترجاع') }}</a>
                    </li>
                    <li><a href="#"
                            class="text-slate-600 dark:text-slate-400 hover:text-purple-600 dark:hover:text-purple-400 transition-colors">{{ __('الأسئلة الشائعة') }}</a>
                    </li>
                </ul>
            </div>

            {{-- العمود الرابع: وسائل التواصل الاجتماعي والاتصال --}}
            <div class="space-y-5 text-center md:text-start justify-items-center md:justify-items-start">

                <h4
                    class="text-sm font-orbitron font-black text-slate-800 dark:text-white uppercase tracking-wider block w-full">
                    {{ __('تابعنا') }}
                </h4>

                {{-- أيقونات التواصل الاجتماعي --}}
                <div class="flex items-center justify-center md:justify-start gap-3 w-full">
                    {{-- وندوز إكس / تويتر --}}
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm inline-flex items-center justify-center"
                        aria-label="X">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>

                    {{-- انستغرام --}}
                    <a href="#"
                        class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm inline-flex items-center justify-center"
                        aria-label="Instagram">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37zM17.5 6.5h.01" />
                        </svg>
                    </a>

                    {{-- واتساب الفوري --}}
                    <a href="https://wa.me/YOUR_NUMBER" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm inline-flex items-center justify-center"
                        aria-label="WhatsApp">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L0 24l6.335-1.662c1.746.953 3.71 1.454 5.709 1.455h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                        </svg>
                    </a>

                    {{-- فيسبوك --}}
                    <a href="https://facebook.com/YOUR_PAGE" target="_blank"
                        class="w-10 h-10 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm inline-flex items-center justify-center"
                        aria-label="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                        </svg>
                    </a>
                </div>

                {{-- location (موقع الدولة) --}}
                @php
                    try {
                        if (request()->has('test_country')) {
                            $countryName = request()->query('test_country');
                        } else {
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
                    class="group h-10 px-3 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 hover:border-purple-500 hover:text-purple-500 transition-all shadow-sm flex items-center justify-center gap-2 w-fit select-none mx-auto md:mx-0">
                    <svg width="20" height="20" viewBox="0 0 21 22" fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="text-slate-400 group-hover:text-purple-500 transition-colors duration-300">
                        <g>
                            <path
                                d="M10.6084 1.06348C6.29681 1.06348 2.80151 4.55878 2.80151 8.87041C2.80151 10.7953 3.50132 12.5544 4.6562 13.9156L10.6084 20.9256L16.5605 13.9154C17.7154 12.5544 18.4152 10.7951 18.4152 8.87019C18.4154 4.55878 14.9201 1.06348 10.6084 1.06348ZM10.6084 11.8122C8.8352 11.8122 7.39784 10.3749 7.39784 8.60161C7.39784 6.82836 8.8352 5.391 10.6084 5.391C12.3817 5.391 13.8191 6.82836 13.8191 8.60161C13.8191 10.3749 12.3817 11.8122 10.6084 11.8122Z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
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
            class="border-t border-slate-200 dark:border-slate-900 pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs md:text-sm font-medium text-slate-500 dark:text-slate-500 mb-8 text-center md:text-start">
            <p>
                &copy; {{ date('Y') }} <span
                    class="font-orbitron font-black text-slate-700 dark:text-slate-300">XENONSTOR</span>.
                {{ __('جميع الحقوق محفوظة.') }}
            </p>
            <div class="flex items-center justify-center md:justify-end gap-6 w-full md:w-auto">
                <span class="flex items-center gap-1">🔒 {{ __('دفع آمن 100%') }}</span>
                <span class="flex items-center gap-1">⚡ {{ __('تسليم تلقائي وفوري') }}</span>
            </div>
        </div>
    </footer>
</div>
