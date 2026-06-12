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
                <x-orders-table />

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