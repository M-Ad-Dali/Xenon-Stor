@props([
    'title',
    'value',
    'icon',
    'color' => 'text-slate-600' {{-- لون افتراضي في حال لم يتم تمريره --}}
])

<div class="bg-white dark:bg-slate-900 p-6 rounded-3xl border border-slate-200 dark:border-slate-800 shadow-sm transition-all hover:shadow-md">
    <div class="{{ $color }} mb-3 text-2xl">
        {{ $icon }}
    </div>
    <h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium">
        {{ $title }}
    </h3>
    <p class="text-2xl font-black text-slate-900 dark:text-white mt-1">
        {{ $value }}
    </p>
</div>