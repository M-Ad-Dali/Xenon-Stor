<x-app-layout>
    {{-- الحاوية الرئيسية: نستخدم x-data للتحكم في حالة القائمة --}}
    <div class="flex bg-slate-50 dark:bg-slate-950 transition-colors duration-300" x-data="{ open: window.innerWidth >= 1024 }">

        {{-- التعديل الأول: استخدم x-bind لتمرير الحالة لـ Alpine.js --}}
        <x-sidebar x-bind:open="open" />

        {{-- التعديل الثاني: إزالة lg:mr-64 والاعتماد على flex-1 --}}
        <main class="flex-1 p-4 md:p-8 transition-all duration-300">

            {{-- زر التبديل (الهمبرغر) --}}
            <div class="mb-6">
                <button @click="open = !open"
                    class="p-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 shadow-sm hover:bg-slate-100 dark:hover:bg-slate-800 transition-all cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            {{-- العنوان --}}
            <div class="mb-8">
                <h1 class="text-3xl font-black text-slate-900 dark:text-white">{{ __('لوحة التحكم') }}</h1>
                <p class="text-slate-500 dark:text-slate-400 mt-1">{{ __('مرحباً بك في إدارتك الخاصة') }}</p>
            </div>

            {{-- كروت الإحصائيات --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div
                    class="bg-white dark:bg-slate-900 p-6 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-sm">
                    <div class="text-purple-600 mb-2 text-2xl">📊</div>
                    <h3 class="text-slate-500 dark:text-slate-400 text-sm">{{ __('إجمالي الطلبات') }}</h3>
                    <p class="text-3xl font-black text-slate-900 dark:text-white mt-1">1,284</p>
                </div>
            </div>

            {{-- جدول البيانات --}}
            <div
                class="bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden">
                <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
                    <h2 class="font-bold text-lg text-slate-900 dark:text-white">{{ __('أحدث الطلبات') }}</h2>
                    <a href="#" class="text-purple-600 text-sm font-bold">{{ __('عرض الكل') }}</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead class="bg-slate-50 dark:bg-slate-950/50 text-slate-500 text-xs uppercase">
                            <tr>
                                <th class="p-4">{{ __('العميل') }}</th>
                                <th class="p-4">{{ __('الحالة') }}</th>
                                <th class="p-4">{{ __('الإجراء') }}</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                            <tr>
                                <td class="p-4 text-sm text-slate-700 dark:text-slate-300">أحمد محمد</td>
                                <td class="p-4"><span
                                        class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-bold">{{ __('مكتمل') }}</span>
                                </td>
                                <td class="p-4 text-purple-600 font-bold text-sm cursor-pointer">{{ __('عرض') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
