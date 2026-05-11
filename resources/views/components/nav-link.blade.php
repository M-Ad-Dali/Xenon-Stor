@props(['active'])

@php
$classes = ($active ?? false)
    ? 'flex items-center px-4 h-full border-b-2 border-purple-500 font-black text-purple-600 dark:text-purple-400 transition duration-150'
    : 'flex items-center px-4 h-full border-b-2 border-transparent text-sm font-bold text-slate-500 hover:text-purple-600 dark:text-slate-300 hover:border-purple-500/30 transition duration-150';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>