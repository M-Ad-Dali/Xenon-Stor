<div {{ $attributes->merge(['class' => 'self-center']) }}>
    <div class="relative w-full flex items-center">
        
        <span class="absolute top-1/2 inset-e-3.5 -translate-y-1/2 flex items-center pointer-events-none z-20">
            <svg class="w-4 h-4 text-slate-400 dark:text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </span>
        
        <input type="search" placeholder="{{ __('بحث...') }}" 
            class="w-full py-2.5 ps-4 pe-10 text-xs font-semibold rounded-xl bg-white dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/50 text-slate-900 dark:text-white placeholder-slate-400 focus:outline-none focus:border-purple-500 dark:focus:border-purple-500 focus:ring-1 focus:ring-purple-500 transition-all duration-300 z-10">
    </div>
</div>