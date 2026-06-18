<div x-data="{ open: false }" class="relative">
    {{-- الزر المنسدل --}}
    <button @click="open = !open" @click.outside="open = false" type="button"
        class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
        <span>
            {{-- عرض النص بناءً على الحالة الحالية في الرابط --}}
            {{ request('status') == 'completed'
                ? __('مكتملة')
                : (request('status') == 'pending'
                    ? __('معلقة')
                    : (request('status') == 'cancelled'
                        ? __('ملغاة')
                        : __('كل الطلبات'))) }}
        </span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    {{-- القائمة المنسدلة (روابط لارافل) --}}
    <div x-show="open" x-transition x-cloak
        class="absolute left-0 mt-2 w-32 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-1 z-20">

        <a href="{{ route('orders') }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer">
            {{ __('كل الطلبات') }}
        </a>
        <a href="{{ route('orders', ['status' => 'completed']) }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-green-600 dark:text-green-400">
            {{ __('مكتملة') }}
        </a>
        <a href="{{ route('orders', ['status' => 'pending']) }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-blue-600 dark:text-yellow-400">
            {{ __('معلقة') }}
        </a>
        <a href="{{ route('orders', ['status' => 'cancelled']) }}"
            class="block w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-red-600 dark:text-red-400">
            {{ __('ملغاة') }}
        </a>
    </div>
</div>
