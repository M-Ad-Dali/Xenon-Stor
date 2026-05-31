<x-app-layout>
    <div x-data="{
        activeCategory: '{{ request('category', 'ALL') }}',
        categoryTitle: '{{ request('category') ? 'نتائج القسم المختار' : 'جميع الأقسام' }}'
        }"
        class="min-h-screen bg-slate-50 dark:bg-slate-950 py-12 px-4 sm:px-6 lg:px-8 transition-colors duration-300">
        <div class="max-w-7xl mx-auto">

            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="text-xs font-black text-purple-600 dark:text-purple-400 uppercase tracking-widest bg-purple-50 dark:bg-purple-950/40 px-3 py-1.5 rounded-full inline-block border border-purple-100 dark:border-purple-900/30 mb-8">
                    {{ __('المتجر الكامل') }}
                </span>

                <h1 class="text-3xl md:text-5xl font-black text-slate-900 dark:text-white mb-4 tracking-tight">
                    {{ __('تصفح') }}
                    <span class="bg-linear-to-r from-purple-600 to-cyan-400 bg-clip-text text-transparent">
                        {{ __('جميع الأقسام والمنتجات') }}
                    </span>
                </h1>
            </div>

            {{-- SERVICES CATEGORY --}}
            <x-section-services />

            {{-- PRODUCTS --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">

                <div class="mb-6 text-center col-span-full">
                    <h2 class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white">
                        <span x-text="categoryTitle"></span>
                    </h2>
                </div>

                @php
                    $products = [
                        ['category_id' => 'steam'],
                        ['category_id' => 'playstation'],
                        ['category_id' => 'xbox'],
                        ['category_id' => 'windows'],
                        ['category_id' => 'ai'],
                        ['category_id' => 'video-games'],
                    ];
                @endphp

                @foreach ($products as $prod)
                    <div x-show="activeCategory === 'ALL' || activeCategory === '{{ $prod['category_id'] }}'"
                        x-transition class="w-full">

                        {{-- PRODUCTS CARD --}}
                        <x-product-card />
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</x-app-layout>
