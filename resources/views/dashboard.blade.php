<x-app-layout>
    {{-- الحاوية الرئيسية: نستخدم x-data للتحكم في حالة القائمة --}}
    <div class="flex bg-slate-50 dark:bg-slate-950 transition-colors duration-300" x-data="{ open: window.innerWidth >= 1024 }">

        {{-- التعديل الأول: استخدم x-bind لتمرير الحالة لـ Alpine.js --}}
        <x-sidebar x-bind:open="open" />

        {{-- التعديل الثاني: إزالة lg:mr-64 والاعتماد على flex-1 --}}
        <main class="flex-1 p-4 md:p-8 transition-all duration-300 ease-in-out">

            {{-- زر التبديل (الهمبرغر) --}}
            <div class="mb-6">
                <button @click="open = !open"
                    class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 shadow-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-all cursor-pointer lg:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            {{-- هيدر الصفحة --}}
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-black text-slate-900 dark:text-white">{{ __('لوحة تحكم') }}</h1>
                    <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('نظرة عامة على أداء مبيعاتك اليوم') }}</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm transition-all shadow-lg shadow-purple-600/20 cursor-pointer">
                        + {{ __('إضافة منتج') }}
                    </button>
                </div>
            </div>

            {{-- كروت الإحصائيات - 4 كروت --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <x-stat-card :title="__('إجمالي المبيعات')" value="$12,500" icon="💰" color="text-green-600" />

                <x-stat-card :title="__('الطلبات الجديدة')" value="45" icon="📦" color="text-blue-600" />

                <x-stat-card :title="__('المنتجات النشطة')" value="892" icon="🏷️" color="text-purple-600" />

                <x-stat-card :title="__('العملاء الجدد')" value="120" icon="👥" color="text-orange-600" />
            </div>

            {{-- منطقة الجداول والأنشطة --}}
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-8">

                {{-- جدول أحدث الطلبات --}}
                <div
                    class="xl:col-span-2 bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                    <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
                        <h2 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('أحدث الطلبات') }}</h2>
                        <a href="#"
                            class="text-purple-600 text-sm font-bold hover:underline">{{ __('عرض الكل') }}</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-right">
                            <thead class="bg-slate-50 dark:bg-slate-950/50 text-slate-500 text-xs uppercase">
                                <tr>
                                    <th class="p-4">{{ __('العميل') }}</th>
                                    <th class="p-4">{{ __('الدولة') }}</th> {{-- الحقل المضاف --}}
                                    <th class="p-4">{{ __('التاريخ') }}</th>
                                    <th class="p-4">{{ __('المبلغ') }}</th>
                                    <th class="p-4">{{ __('الحالة') }}</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                                @for ($i = 0; $i < 5; $i++)
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors">
                                        <td class="p-4 text-sm font-bold text-slate-700 dark:text-slate-300">محمد
                                            عبدالله</td>
                                        <td class="p-4 text-sm text-slate-500">
                                            {{-- يمكنك إضافة علم أو اسم الدولة هنا --}}
                                            <div class="flex items-center gap-2">
                                                <span>🇸🇦</span> {{-- مثال لعلم السعودية --}}
                                                <span>السعودية</span>
                                            </div>
                                        </td>
                                        <td class="p-4 text-sm text-slate-500">2026/06/07</td>
                                        <td class="p-4 text-sm text-slate-900 dark:text-white font-bold">$250</td>
                                        <td class="p-4">
                                            <span
                                                class="bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 px-3 py-1 rounded-full text-xs font-bold">
                                                {{ __('مكتمل') }}
                                            </span>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- قائمة المنتجات الأكثر مبيعاً --}}
                <div class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6">
                    <h2 class="font-bold text-lg text-slate-900 dark:text-white mb-6">{{ __('الأكثر مبيعاً') }}</h2>
                    <div class="space-y-6">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-xl"></div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">
                                        {{ __('اسم المنتج ' . $i + 1) }}</h4>
                                    <p class="text-xs text-slate-500">{{ __('150 عملية بيع') }}</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
