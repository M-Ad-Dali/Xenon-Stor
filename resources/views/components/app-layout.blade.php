<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}"
    class="scroll-smooth" x-data="{
        darkMode: false,
        init() {
            const theme = localStorage.getItem('theme');
            this.darkMode = theme ?
                theme === 'dark' :
                window.matchMedia('(prefers-color-scheme: dark)').matches;
        }
    }" x-init="init()" :class="{ 'dark': darkMode }"
    @theme-changed.window="darkMode = $event.detail.isDark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'XenonStor') }}</title>

    {{-- Preconnect --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&family=Orbitron:wght@700&display=swap"
        rel="stylesheet">

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Alpine --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body
    class="font-cairo antialiased bg-neutral-50 text-slate-900 dark:bg-slate-950 dark:text-slate-100 transition-colors duration-500"
    x-cloak>

    <div class="min-h-screen flex flex-col justify-between">

        {{-- Navigation --}}
        @include('components.navigation')

        {{-- Main Content --}}
        <main class="flex-1 w-full">
            {{ $slot }}
        </main>

    </div>

    <x-footer />

</body>

</html>
