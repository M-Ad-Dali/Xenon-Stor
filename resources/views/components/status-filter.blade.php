<div x-data="{ open: false }" class="relative">
    {{-- الزر المنسدل --}}
    <button @click="open = !open" @click.outside="open = false" type="button"
        class="flex items-center gap-2 text-xs font-semibold text-slate-500 hover:text-purple-600 transition-colors cursor-pointer">
        <span x-text="
            statusFilter === 'all' ? '{{ __('كل الطلبات') }}' : 
            (statusFilter === 'completed' ? '{{ __('مكتملة') }}' : 
            (statusFilter === 'pending' ? '{{ __('معلقة') }}' : '{{ __('ملغاة') }}'))
        "></span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
    </button>

    {{-- القائمة المنسدلة --}}
    <div x-show="open" x-transition x-cloak
        class="absolute left-0 mt-2 w-25 bg-white dark:bg-slate-800 rounded-xl shadow-xl border border-slate-100 dark:border-slate-700 p-1 z-20">
        
        <button @click="statusFilter = 'all'; open = false"
            class="w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer">
            {{ __('كل الطلبات') }}
        </button>
        <button @click="statusFilter = 'completed'; open = false"
            class="w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-green-600 dark:text-green-400">
            {{ __('مكتملة') }}
        </button>
        <button @click="statusFilter = 'pending'; open = false"
            class="w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-blue-600 dark:text-yellow-400">
            {{ __('معلقة') }}
        </button>
        <button @click="statusFilter = 'cancelled'; open = false"
            class="w-full text-center px-3 py-2 text-xs hover:bg-slate-50 dark:hover:bg-slate-700 rounded-lg cursor-pointer text-red-600 dark:text-red-400">
            {{ __('ملغاة') }}
        </button>
    </div>
</div>