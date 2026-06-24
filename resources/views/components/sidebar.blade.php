<div x-data="{
    open: window.innerWidth >= 1024,
    checkSize() { this.open = window.innerWidth >= 1024; }
}" @resize.window="checkSize()"
    class="flex min-h-screen bg-slate-50 dark:bg-slate-950 transition-colors duration-300">

    {{-- خلفية التعتيم --}}
    <div x-show="open && window.innerWidth < 1024" x-transition.opacity.duration.300ms @click="open = false"
        class="fixed inset-0 bg-black/50 z-40 lg:hidden" x-cloak>
    </div>

    {{-- السايدبار --}}
    <aside class="sticky top-0 z-50 bg-white dark:bg-slate-900 border-e border-slate-200 dark:border-slate-800 flex flex-col transition-all duration-300 ease-in-out shrink-0"
        :class="open ? 'w-64' : 'w-20'">

        <div class="flex flex-col h-full">
            {{-- الهيدر --}}
            <div
                class="h-20 flex items-center justify-between px-6 border-b border-slate-100 dark:border-slate-800 shrink-0">
                <span x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                    x-transition:enter-start="opacity-0" x-transition:leave="transition-opacity ease-in duration-200"
                    x-transition:leave-end="opacity-0"
                    class="text-xl font-black text-purple-600 tracking-tight whitespace-nowrap">
                    {{ __('لوحة التحكم') }}
                </span>
                <button @click="open = !open"
                    class="hidden sm:flex p-2 rounded-lg text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all duration-200 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            {{-- التنقل --}}
            <nav class="flex-1 p-4 space-y-6 overflow-y-auto text-start">

                {{-- قسم الرئيسية --}}
                <div>
                    <h3 x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-end="opacity-0"
                        class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                        {{ __('الرئيسية') }}
                    </h3>
                    <div class="space-y-1">
                        <x-sidebar-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('لوحة التحكم') }}</span>
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('orders') }}" :active="request()->routeIs('orders')">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('الطلبات') }}</span>
                        </x-sidebar-link>
                    </div>
                </div>

                {{-- قسم المتجر --}}
                <div>
                    <h3 x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-end="opacity-0"
                        class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                        {{ __('المتجر') }}
                    </h3>
                    <div class="space-y-1">
                        <x-sidebar-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('المنتجات') }}</span>
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('customers.index') }}" :active="request()->routeIs('customers.index')">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('العملاء') }}</span>
                        </x-sidebar-link>
                    </div>
                </div>

                {{-- قسم النظام --}}
                <div>
                    <h3 x-show="open" x-transition:enter="transition-opacity ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:leave="transition-opacity ease-in duration-200" x-transition:leave-end="opacity-0"
                        class="px-2 mb-2 text-xs font-semibold text-slate-400 uppercase tracking-wider text-start">
                        {{ __('النظام') }}
                    </h3>
                    <div class="space-y-1">
                        <x-sidebar-link href="#">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('الإعدادات العامة') }}</span>
                        </x-sidebar-link>
                        <x-sidebar-link href="{{ route('register') }}">
                            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('المستخدمون') }}</span>
                        </x-sidebar-link>
                    </div>
                </div>
            </nav>

            {{-- تسجيل الخروج --}}
            <div class="p-4 border-t border-slate-100 dark:border-slate-800 shrink-0">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        class="w-full flex items-center text-slate-500 hover:text-red-500 text-sm font-bold p-2 transition-colors cursor-pointer">
                        <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span x-show="open" class="ms-3 whitespace-nowrap">{{ __('تسجيل الخروج') }}</span>
                    </button>
                </form>
            </div>
        </div>
    </aside>
</div>
