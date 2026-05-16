<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" 
    x-data="{
        darkMode: localStorage.getItem('theme') === 'dark' ||
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)
    }" 
    :class="{ 'dark': darkMode }"
    {{-- التعديل الذهبي هنا: الاستماع لحدث التغيير القادم من الـ Dropdown وتحديث حالة الـ Layout فوراً --}}
    @theme-changed.window="darkMode = $event.detail.isDark"
>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'XenonStor') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- سكربت الفحص السريع الصافي لمنع وميض الشاشة الأبيض قبل تحميل Alpine --}}
    <script>
        if (localStorage.getItem('theme') === 'dark' || 
            (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    {{-- ستيل لمنع وميض العناصر قبل تحميل جافاسكريبت --}}
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

{{-- التعديل في سطر الـ body أدناه: تم استبدال bg-slate-50 بـ bg-neutral-50 للـ Light Mode --}}
<body
    class="font-cairo antialiased bg-neutral-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-500"
    x-cloak>
    <div class="min-h-screen">

        {{-- شريط التنقل --}}
        @include('components.navigation')

        <main>
            {{ $slot }}
        </main>

    </div>
</body>

</html>