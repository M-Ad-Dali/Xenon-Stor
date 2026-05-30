{{-- تفعيل استقبال المتغيرات الأصلية فقط بدون أي قيم افتراضية --}}
@props(['title', 'description', 'id'])
<div id="{{ $id }}" class="text-center max-w-3xl mx-auto mb-12 px-4 pt-24">

    {{-- طباعة العنوان الأصلي الممرر من السكشن --}}
    <h2 class="text-2xl md:text-4xl font-black text-slate-900 dark:text-white tracking-wider mb-3 uppercase">
        {{ $title }}
    </h2>

    {{-- طباعة الوصف الأصلي الممرر من السكشن --}}
    <p class="text-xs md:text-sm text-cyan-600 dark:text-cyan-400 opacity-90 dark:opacity-80 font-bold">
        {{ $description }}
    </p>
</div>