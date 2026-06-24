<div x-data="{ open: false }" class="relative">
    {{-- الزر المنسدل --}}
    <button @click="open = !open" @click.outside="open = false" type="button"
        class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
        <span>
            {{-- عرض النص بناءً على الحالة الحالية في الرابط --}}
            {{ request('status') == 'active'
                ? __('نشط')
                : (request('status') == 'inactive'
                    ? __('غير نشط')
                    : __('كل العملاء')) }}
        </span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    {{-- القائمة المنسدلة --}}
    <div x-show="open" x-transition x-cloak
        class="absolute left-0 mt-2 w-32 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-1 z-20">

        <a href="{{ route('customers.index') }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer">
            {{ __('كل العملاء') }}
        </a>
        <a href="{{ route('customers.index', ['status' => 'active']) }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-green-600 dark:text-green-400">
            {{ __('نشط') }}
        </a>
        <a href="{{ route('customers.index', ['status' => 'inactive']) }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-slate-600 dark:text-slate-400">
            {{ __('غير نشط') }}
        </a>
    </div>
</div>