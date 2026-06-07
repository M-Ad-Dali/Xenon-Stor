@props(['active' => false])

<<<<<<< HEAD
<a {{ $attributes->merge(['class' => 'flex items-center p-3 rounded-xl transition-all font-bold text-sm ' . ($active ? 'bg-purple-600 text-white shadow-lg shadow-purple-500/20' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800 hover:text-purple-600 dark:hover:text-black')]) }}>
=======
<a {{ $attributes->merge(['class' => 'flex items-center p-3 rounded-xl transition-all font-bold text-sm ' . ($active ? 'bg-purple-600 text-white shadow-lg shadow-purple-500/20' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-slate-800')]) }}>
>>>>>>> a9fc0fe90658d61d58c7925538b06bfe32b9a201
    {{ $slot }}
</a>