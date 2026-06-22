@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} 
    {!! $attributes->merge([
        'class' => 'w-full px-4 py-3 
                    bg-white dark:bg-slate-950 
                    border border-slate-200 dark:border-slate-700 
                    rounded-xl shadow-sm 
                    text-slate-900 dark:text-slate-100 
                    placeholder-slate-400 dark:placeholder-slate-600
                    transition-all duration-200 ease-in-out
                    focus:outline-none focus:ring-2 focus:ring-indigo-500/50 focus:border-indigo-500'
    ]) !!}
>