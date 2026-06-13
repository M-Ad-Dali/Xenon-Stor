<x-app-layout>
    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300" x-data="{ open: window.innerWidth >= 1024 }">
        <x-sidebar x-bind:open="open" />

        <main class="flex-1 w-full overflow-hidden">
            <div class="py-12">
                <div class="px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    {{-- هيد الجدول المخصص --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ request()->routeIs('orders') ? __('الطلبات') : __('أحدث الطلبات') }}
                            </h1>
                            <p class="text-sm text-slate-500 mt-1">
                                {{ __('إدارة ومتابعة طلبات العملاء بشكل فعال') }}
                            </p>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <x-search-input placeholder="{{ __('ابحث عن طلب...') }}" />
                        </div>
                    </div>

                    {{-- الجدول --}}
                    <x-orders-table :showFilter="true" />
                </div>
            </div>
        </main>
    </div>
</x-app-layout>