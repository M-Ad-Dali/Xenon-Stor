@extends('layouts.app')
@section('content')
    {{-- تعريف البيانات المؤقتة مباشرة في الصفحة --}}
    @php
        $products = [
            (object) [
                'id' => 1,
                'name' => 'سماعات احترافية RGB',
                'price' => 250,
                'oldPrice' => 300,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500',
                'category' => (object) ['name' => 'إلكترونيات'],
                'description' => 'سماعات رأس لاسلكية مع إضاءة محيطية ونظام عزل ضوضاء متطور.',
            ],
            (object) [
                'id' => 2,
                'name' => 'لوحة مفاتيح ميكانيكية',
                'price' => 120,
                'oldPrice' => '',
                'image_url' => 'https://images.unsplash.com/photo-1595225476474-87563907a212?w=500',
                'category' => (object) ['name' => 'ألعاب'],
                'description' => 'لوحة مفاتيح ميكانيكية سريعة الاستجابة مثالية للاعبين المحترفين.',
            ],
            (object) [
                'id' => 3,
                'name' => 'ساعة ذكية رياضية',
                'price' => 150,
                'oldPrice' => 250,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500',
                'category' => (object) ['name' => 'إكسسوارات'],
                'description' => 'تتبع نبضات القلب والنشاط البدني مع تصميم مقاوم للماء.',
            ],
            (object) [
                'id' => 4,
                'name' => 'كاميرا تصوير 4K',
                'price' => 899,
                'oldPrice' => 1200,
                'image_url' => 'https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=500',
                'category' => (object) ['name' => 'تصوير'],
                'description' => 'كاميرا احترافية بدقة 4K مع عدسة قابلة للتغيير.',
            ],
        ];
    @endphp

    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <x-sidebar x-bind:open="open" />

        <main class="flex-1 p-4 md:p-8 transition-all duration-300 ease-in-out">

            <div class="mb-8 flex flex-col gap-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h1 class="text-3xl font-black text-slate-900 dark:text-white">{{ __('قائمة المنتجات') }}</h1>
                        <p class="text-slate-500 dark:text-slate-400 mt-1">
                            {{ __('تحكم في منتجات متجرك، التعديل والحذف') }}</p>
                    </div>
                    <div class="shrink-0">
                        <x-btn-create-products />
                    </div>
                </div>

                {{-- الصف الثاني: البحث + الدروب داون المنسدل --}}
                <div class="flex justify-between flex-col sm:flex-row gap-4">
                    <div class="w-full sm:w-1/2 lg:w-1/3">
                        <x-search-input placeholder="{{ __('ابحث عن منتج...') }}" class="w-full" />
                    </div>

                    {{-- القائمة المنسدلة للتصنيف --}}
                    <div x-data="{ open: false, selectedCategory: '{{ __('عرض الكل') }}' }" class="relative px-10 py-2">
                        <button @click="open = !open" @click.outside="open = false"
                            class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
                            <span x-text="selectedCategory"></span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="open" x-transition x-cloak
                            class="absolute left-0 mt-2 w-32 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-1 z-50">

                            @foreach (['عرض الكل', 'العروض', 'ستيم', 'بلايستيشن', 'اكس بوكس', 'اشتراكات بريميم', 'AI اشتراكات', 'اشترامات الترفيه'] as $cat)
                                <button @click="selectedCategory = '{{ __($cat) }}'; open = false"
                                    class="w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-slate-700 dark:text-slate-300">
                                    {{ __($cat) }}
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- عرض المنتجات --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                @forelse($products as $product)
                    <div class="relative group">
                        <x-product-card :isAdmin="true" :image="$product->image_url" :title="$product->name" :category="$product->category->name"
                            :price="$product->price" :oldPrice="$product->oldPrice" :description="$product->description" />

                        {{-- أزرار التحكم --}}
                        <div
                            class="absolute top-4 right-4 z-20 flex gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <a href="{{ route('products.create') }}"
                                class="p-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-blue-600 rounded-lg shadow-lg hover:scale-110 transition-transform cursor-pointer">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                            </a>
                            <form action="#" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
                                @csrf @method('DELETE')
                                <button type="submit"
                                    class="p-2 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-red-500 rounded-lg shadow-lg hover:scale-110 transition-transform cursor-pointer">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p>{{ __('لا توجد منتجات.') }}</p>
                @endforelse
            </div>
        </main>
    </div>
@endsection
