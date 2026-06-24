@extends('layouts.app')
@section('content')
    <div class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300">
        <x-sidebar x-bind:open="open" />

        <main class="flex-1 w-full overflow-hidden">
            <div class="py-12">
                <div class="px-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
                    
                    {{-- هيد الجدول الخاص بالعملاء --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-slate-900 dark:text-white">
                                {{ __('العملاء') }}
                            </h1>
                            <p class="text-sm text-slate-500 mt-1">
                                {{ __('قائمة العملاء المسجلين في النظام') }}
                            </p>
                        </div>
                        
                        <div class=" w-full sm:w-1/2 lg:w-1/3">
                            <x-search-input placeholder="{{ __('بحث عن الطلبات...') }}" />
                        </div>
                    </div>

                    {{-- جدول العملاء (يفضل إنشاء مكون مستقل x-customers-table) --}}
                    <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-sm border border-slate-200 dark:border-slate-800">
                        {{-- هنا سيتم عرض الجدول أو مكون الجدول --}}
                        <x-customers-table />
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection