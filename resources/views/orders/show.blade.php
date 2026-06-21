@extends('layouts.app')
@section('content')
    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950">
        <x-sidebar />

        <main class="flex-1 py-12 px-4">
            <div class="max-w-4xl mx-auto" id="invoice">
                
                {{-- 1. الهيدر (العلامة التجارية ورقم الفاتورة) --}}
                <header class="flex justify-between items-start mb-12">
                    <div>
                        <span class="font-orbitron lg:text-4xl sm:text-3xl text-xl font-bold text-purple-600 dark:text-purple-400">XENON<span class="text-slate-900 dark:text-white">STOR</span></span>
                        <p class="text-slate-400 text-sm">المتجر الرقمي الحديث</p>
                    </div>
                    <div class="text-center">
                        <h1 class="lg:text-4xl sm:text-3xl text-xl font-black text-slate-900 dark:text-white uppercase tracking-tight">فاتورة</h1>
                        <p class="text-indigo-600 font-bold mt-1">#{{ $id ?? '0000' }}</p>
                    </div>
                </header>

                {{-- 2. بيانات العميل والتاريخ --}}
                <section class="grid grid-cols-2 gap-8 mb-12 bg-slate-50 dark:bg-slate-800/50 p-6 rounded-2xl">
                    <div>
                        <h3 class="text-xs uppercase text-slate-400 font-bold mb-2">إلى</h3>
                        <p class="text-slate-900 dark:text-white font-bold text-lg">اسم العميل</p>
                    </div>
                    <div class="text-right">
                        <h3 class="text-xs uppercase text-slate-400 font-bold mb-2">التاريخ</h3>
                        <p class="text-slate-900 dark:text-white font-bold">2026-06-18</p>
                    </div>
                </section>

                {{-- 3. جدول المنتجات --}}
                <table class="w-full mb-12">
                    <thead class="border-b-2 border-slate-100 dark:border-slate-800">
                        <tr>
                            <th class="py-4 text-right text-slate-400">المنتج</th>
                            <th class="py-4 text-left text-slate-400">السعر</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-800">
                        <tr>
                            <td class="py-6 font-bold text-slate-900 dark:text-white">اسم المنتج هنا</td>
                            <td class="py-6 text-left font-bold text-slate-900 dark:text-white">$0.00</td>
                        </tr>
                    </tbody>
                </table>

                {{-- 4. الإجمالي --}}
                <footer class="flex justify-end">
                    <div class="w-full md:w-1/2 bg-indigo-50 dark:bg-indigo-900/20 p-6 rounded-2xl">
                        <div class="flex justify-between font-black text-2xl text-indigo-600">
                            <span>الإجمالي</span>
                            <span>$0.00</span>
                        </div>
                    </div>
                </footer>

                {{-- 5. الإجراءات (لا تظهر عند الطباعة) --}}
                <div class="mt-8 text-center print:hidden">
                    <button onclick="window.print()" class="px-8 py-3 bg-indigo-600 text-white rounded-xl font-bold hover:bg-indigo-700 transition cursor-pointer">
                        طباعة الفاتورة
                    </button>
                </div>
            </div>
        </main>
    </div>

    {{-- تنسيق الطباعة (معزول لضمان نظافة الكود) --}}
    <style>
        
    </style>
@endsection