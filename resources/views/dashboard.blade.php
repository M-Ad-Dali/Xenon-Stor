<x-app-layout>
    {{-- الحاوية الرئيسية: استخدام flex لضمان بقاء السايد بار بجانب المحتوى --}}
    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300">

        {{-- السايد بار: يتم تمرير الحالة له --}}
        <x-sidebar x-bind:open="open" />

        {{-- المحتوى الرئيسي: flex-1 يجعل المحتوى يملأ المساحة المتبقية بجانب السايد بار --}}
        <main class="flex-1 p-4 md:p-8 transition-all duration-300 ease-in-out">

            {{-- هيدر الصفحة --}}
            <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                <div>
                    <h1 class="text-3xl font-black text-slate-900 dark:text-white">{{ __('لوحة تحكم') }}</h1>
                    <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('نظرة عامة على أداء مبيعاتك اليوم') }}</p>
                </div>
                <x-btn-create-products />
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
                <x-orders-table />

                {{-- قائمة المنتجات الأكثر او لاقل مبيعاً --}}
                <div class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 p-6">

                    @php
                        // 1. التقاط قيمة الفلتر الحالية من الرابط
                        $currentSort = request('product_sort', 'highest');
                    @endphp

                    <div class="flex items-center justify-between mb-6">
                        <h2 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('الأكثر مبيعاً') }}</h2>

                        {{-- القائمة المنسدلة كروابط لارافل --}}
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" @click.outside="open = false" type="button"
                                class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
                                <span>{{ $currentSort === 'highest' ? __('الأكثر مبيعاً') : __('الأقل مبيعاً') }}</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <div x-show="open" x-transition x-cloak
                                class="absolute left-0 mt-2 w-28 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-800 p-1 z-10">

                                {{-- روابط لارافل المستقلة --}}
                                <a href="{{ request()->fullUrlWithQuery(['product_sort' => 'highest']) }}"
                                    class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg">
                                    {{ __('الأكثر مبيعاً') }}
                                </a>
                                <a href="{{ request()->fullUrlWithQuery(['product_sort' => 'lowest']) }}"
                                    class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg">
                                    {{ __('الأقل مبيعاً') }}
                                </a>
                            </div>
                        </div>
                    </div>

                    {{-- قائمة المنتجات --}}
                    <div class="space-y-6">
                        {{-- هنا سيقوم لارافل بعرض البيانات بناءً على $currentSort --}}
                        @for ($i = 0; $i < 4; $i++)
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-slate-100 dark:bg-slate-800 rounded-xl"></div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900 dark:text-white">
                                        {{ __('اسم المنتج ' . $i + 1) }}
                                    </h4>
                                    <p class="text-xs text-slate-500 font-medium">
                                        {{-- المنطق يتم في السيرفر (PHP) --}}
                                        {{ $currentSort === 'highest' ? '150 ' . __('عملية بيع') : '5 ' . __('عمليات بيع') }}
                                    </p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
