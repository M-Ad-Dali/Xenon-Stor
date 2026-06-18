<div x-data="{ open: false }" class="relative">
    {{-- الزر المرئي --}}
    <button @click="open = !open" @click.outside="open = false" type="button"
        class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
        <span>
            {{ request('sort') == 'oldest' ? __('الأقدم') : __('الأحدث') }}
        </span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>

    {{-- القائمة المنبثقة (روابط لارافل) --}}
    <div x-show="open" x-transition x-cloak
        class="absolute left-0 mt-2 w-24 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-1 z-20">

        {{-- الأحدث: نرسل sort=newest أو بدون باراميتر --}}
        <a href="{{ route('orders', array_merge(request()->query(), ['sort' => 'newest'])) }}"
            class="block w-full text-start px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer">
            {{ __('الأحدث') }}
        </a>

        {{-- الأقدم: نرسل sort=oldest --}}
        <a href="{{ route('orders', array_merge(request()->query(), ['sort' => 'oldest'])) }}"
            class="block w-full text-start px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer">
            {{ __('الأقدم') }}
        </a>
    </div>
</div>