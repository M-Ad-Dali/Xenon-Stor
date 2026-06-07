@props(['open' => false])

{{-- خلفية التعتيم للموبايل --}}
<<<<<<< HEAD
<div x-show="open" x-transition:enter="transition-opacity ease-out duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-in duration-200"
=======
<div x-show="open" x-transition:enter="transition-opacity duration-300" x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity duration-200"
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click="open = false"
    class="fixed inset-0 bg-black/50 z-40 lg:hidden" x-cloak>
</div>

<<<<<<< HEAD
{{-- السايدبار --}}
<aside
    class="fixed lg:relative top-16 lg:top-0 bottom-0 z-50 bg-white dark:bg-slate-900 border-e border-slate-200 dark:border-slate-800 flex flex-col transition-all duration-300 ease-in-out shrink-0 w-64"
    :class="open ? 'inset-s-0' : '-inset-s-full lg:inset-s-0'">

=======
{{-- السلايدر: تم تعديل المنطق ليعمل كـ sticky في الشاشات الكبيرة و fixed في الصغيرة --}}
<aside
    class="fixed lg:relative top-16 lg:top-0 z-50 bg-white dark:bg-slate-900 border-l border-slate-200 dark:border-slate-800 flex flex-col transition-all duration-300 ease-in-out shrink-0 overflow-hidden"
    :class="open ? 'w-64 translate-x-0' : 'w-0 translate-x-full lg:translate-x-0 lg:w-0'"
    style="height: calc(100vh - 4rem);">

    {{-- حاوية المحتوى الثابتة --}}
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
    <div class="w-64 flex flex-col h-full">
        {{-- الهيدر --}}
        <div
            class="h-20 flex items-center justify-between px-6 border-b border-slate-100 dark:border-slate-800 shrink-0">
            <span class="text-xl font-black text-purple-600 tracking-tight">{{ __('لوحة التحكم') }}</span>
            <button @click="open = false"
<<<<<<< HEAD
                class="lg:hidden p-2 ms-2 rounded-lg text-slate-400 hover:bg-red-500/10 hover:border-red-500/50 dark:text-slate-500 hover:text-red-400 transition-all duration-200 border border-transparent cursor-pointer">
=======
                class="lg:hidden p-2 ml-2 rounded-lg text-slate-400 hover:text-white hover:bg-red-500/10 hover:border-red-500/50 dark:text-slate-500 dark:hover:text-red-400 transition-all duration-200 border border-transparent cursor-pointer">
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        {{-- الروابط --}}
<<<<<<< HEAD
        <nav class="flex-1 p-4 space-y-6 overflow-y-auto text-start">
            {{-- قسم الإدارة --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                    {{ __('الرئيسية') }}</h3>
=======
        <nav class="flex-1 p-4 space-y-6 overflow-y-auto">
            {{-- قسم الإدارة --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">{{ __('الرئيسية') }}
                </h3>
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
                <div class="space-y-1">
                    <x-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('لوحة التحكم') }}
                    </x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('الطلبات') }}</x-sidebar-link>
                </div>
            </div>

            {{-- قسم المتجر --}}
            <div>
<<<<<<< HEAD
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                    {{ __('المتجر') }}</h3>
=======
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">{{ __('المتجر') }}
                </h3>
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
                <div class="space-y-1">
                    <x-sidebar-link href="#">{{ __('المنتجات') }}</x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('التصنيفات') }}</x-sidebar-link>
                    <x-sidebar-link href="#">{{ __('العملاء') }}</x-sidebar-link>
                </div>
            </div>

<<<<<<< HEAD
            {{-- قسم النظام --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                    {{ __('النظام') }}</h3>
=======
            {{-- قسم الإعدادات --}}
            <div>
                <h3 class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider">{{ __('النظام') }}
                </h3>
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
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
                <button
<<<<<<< HEAD
                    class="w-full text-start text-slate-500 hover:text-red-500 text-sm font-bold p-2 transition-colors cursor-pointer">
=======
                    class="w-full text-right text-slate-500 hover:text-red-500 text-sm font-bold p-2 transition-colors cursor-pointer">
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
                    {{ __('تسجيل الخروج') }}
                </button>
            </form>
        </div>
    </div>
</aside>
