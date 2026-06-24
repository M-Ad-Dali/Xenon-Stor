@php
  // تعريف البيانات هنا لتكون متاحة داخل الملف
    $cartItems = [
        ['name' => __('منتج تجريبي 1'), 'price' => '$150', 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500'],
        ['name' => __('منتج تجريبي 2'), 'price' => '$300', 'image' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500'],
    ];
@endphp


@extends('layouts.app')
@section('content')
<div class="py-12 bg-slate-50 dark:bg-slate-950 min-h-screen">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-bold text-slate-900 dark:text-white mb-8">{{ __('سلة التسوق') }}</h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            {{-- قائمة المنتجات --}}
            <div class="lg:col-span-2 space-y-4">
                @foreach($cartItems as $item)
                <div class="bg-white dark:bg-slate-900 p-4 rounded-2xl border border-slate-200 dark:border-slate-800 flex items-center gap-4">
                    <img src="{{ $item['image'] }}" class="w-20 h-20 rounded-xl object-cover bg-slate-100">
                    <div class="flex-1">
                        <h3 class="font-bold text-slate-900 dark:text-white">{{ $item['name'] }}</h3>
                        <p class="text-sm text-slate-500">{{ $item['price'] }}</p>
                    </div>
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
                @endforeach
            </div>

            {{-- ملخص الطلب (ثابت) --}}
            <div class="lg:col-span-1">
                <div class="bg-white dark:bg-slate-900 p-6 rounded-3xl border border-slate-200 dark:border-slate-800 sticky top-24">
                    <h2 class="font-bold text-lg mb-4">{{ __('ملخص الطلب') }}</h2>
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">{{ __('الإجمالي الفرعي') }}</span>
                            <span class="font-bold">$450</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-slate-500">{{ __('الشحن') }}</span>
                            <span class="font-bold text-green-600">{{ __('مجاني') }}</span>
                        </div>
                        <hr class="border-slate-200 dark:border-slate-800">
                        <div class="flex justify-between font-bold text-lg">
                            <span>{{ __('المجموع') }}</span>
                            <span>$450</span>
                        </div>
                    </div>
                    <button class="w-full py-4 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-bold transition cursor-pointer">
                        {{ __('إتمام الطلب') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection