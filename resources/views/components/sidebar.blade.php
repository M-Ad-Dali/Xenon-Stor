@props(['open' => false])

{{-- خلفية التعتيم للموبايل --}}
<div x-show="open" 
    x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200"
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" 
    @click="open = false"
    class="fixed inset-0 bg-black/50 z-40 lg:hidden" x-cloak>
</div>

{{-- السايدبار --}}
<aside
    class="fixed lg:relative top-16 lg:top-0 bottom-0 z-50 bg-white dark:bg-slate-900 border-e border-slate-200 dark:border-slate-800 flex flex-col transition-all duration-300 ease-in-out shrink-0 w-64"
    :class="open ? 'inset-s-0' : '-inset-s-full lg:inset-s-0'">

    <div class="w-64 flex flex-col h-full">
        {{-- الهيدر --}}
        <div class="h-20 flex items-center justify-between px-6 border-b border-slate-100 dark:border-slate-800 shrink-0">
            <span class="text-xl font-black text-purple-600 tracking-tight">{{ __('لوحة التحكم') }}</span>
            <button @click="open = false"
                class="lg:hidden p-2 ms-2 rounded-lg text-slate-400 hover:bg-red-500/10 hover:border-red-500/50 dark:text-slate-500 hover:text-red-400 transition-all duration-200 border border-transparent cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        {{-- الروابط --}}
        <nav class="flex-1 p-4 space-y-6 overflow-y-auto text-start">
            {{-- قسم الإدارة --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">{{ __('الرئيسية') }}</h3>
                <div class="space-y-1">
                    <x-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('لوحة التحكم') }}
                    </x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('الطلبات') }}</x-sidebar-link>
                </div>
            </div>

            {{-- قسم المتجر --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">{{ __('المتجر') }}</h3>
                <div class="space-y-1">
                    <x-sidebar-link href="#">{{ __('المنتجات') }}</x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('التصنيفات') }}</x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('العملاء') }}</x-sidebar-link>
                </div>
            </div>

            {{-- قسم النظام --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">{{ __('النظام') }}</h3>
                <div class="space-y-1">
                    <x-sidebar-link href="#">{{ __('الإعدادات العامة') }}</x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('المستخدمون') }}</x-sidebar-link>
                </div>
            </div>
        </nav>

        {{-- تسجيل الخروج --}}
        <div class="p-4 border-t border-slate-100 dark:border-slate-800 shrink-0">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full text-start text-slate-500 hover:text-red-500 text-sm font-bold p-2 transition-colors cursor-pointer">
                    {{ __('تسجيل الخروج') }}
                </button>
            </form>
        </div>
    </div>
</aside>