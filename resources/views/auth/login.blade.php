@extends('layouts.guest')
@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-6 bg-slate-50 dark:bg-slate-950">

        {{-- خلفية جمالية خفيفة --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-[-10%] left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[30%] rounded-full bg-violet-500/10 blur-[100px]"></div>
        </div>

        <div class="w-full max-w-sm relative z-10">
            {{-- الحاوية (Card) --}}
            <div
                class="bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl border border-white/20 dark:border-slate-800/50 shadow-2xl shadow-indigo-500/5 rounded-3xl p-8">

                <div class="text-center mb-8">
                    <h2
                        class="text-3xl font-extrabold text-transparent bg-clip-text bg-linear-to-r from-indigo-600 to-violet-600 dark:from-indigo-400 dark:to-violet-400">
                        {{ __('مرحباً بك') }}
                    </h2>
                    <p class="text-slate-500 mt-2 text-sm">{{ __('سجل دخولك للوصول إلى لوحة التحكم') }}</p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <div>
                        <x-label for="email" :value="__('البريد الإلكتروني')" />
                        <x-input id="email" type="email" name="email"
                            class="w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-indigo-500"
                            required autofocus />
                    </div>

                    <div <div class="w-full mt-2">

                        <x-label for="password" :value="__('كلمة المرور')" />

                        <div
                            class="flex items-center w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border border-slate-200 dark:border-slate-700 rounded-xl overflow-hidden focus-within:ring-2 focus-within:ring-indigo-500">

                            <x-input type="password" id="password" name="password"
                                class="flex-1 w-full bg-transparent border-none py-3 px-4 focus:outline-none focus:ring-0 text-slate-900 dark:text-white"
                                required />

                            <button type="button"
                                onclick="
                                  let x = document.getElementById('password');
                                  let show = document.getElementById('icon-show');
                                  let hide = document.getElementById('icon-hide');

                                  if (x.type === 'password') {
                                      x.type = 'text';
                                      show.classList.add('hidden');
                                      hide.classList.remove('hidden');
                                  } else {
                                      x.type = 'password';
                                      show.classList.remove('hidden');
                                      hide.classList.add('hidden');
                                  }
                                "
                                class="px-4 py-3 text-slate-400 hover:text-indigo-600 transition-colors cursor-pointer">

                                {{-- عين مفتوحة --}}
                                <svg id="icon-show" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6.936 0A11.94 11.94 0 0112 19.5A11.94 11.94 0 012.064 12A11.94 11.94 0 0112 4.5A11.94 11.94 0 0121.936 12z" />
                                </svg>

                                {{-- عين مشطوبة --}}
                                <svg id="icon-hide" class="w-5 h-5 hidden" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 3l18 18M10.584 10.587A2 2 0 0012 14a2 2 0 001.414-.586M9.88 5.09A10.94 10.94 0 0112 4.5c5.25 0 9.645 3.438 10.936 7.5a11.827 11.827 0 01-4.043 5.654M6.228 6.228A11.827 11.827 0 001.064 12a11.94 11.94 0 005.32 6.32" />
                                </svg>

                            </button>
                        </div>
                    </div>

                        <x-button-auth
                            class="w-full justify-center py-3 rounded-xl bg-linear-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 text-white shadow-lg shadow-indigo-500/20 transition-all transform hover:scale-[1.02] cursor-pointer">
                            {{ __('دخول آمن') }}
                        </x-button-auth>

                        <div class="text-center pt-2">
                            <a href="#"
                                class="text-xs text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                {{ __('هل نسيت كلمة المرور؟') }}
                            </a>
                        </div>
                </form>
            </div>

            {{-- رابط إضافي في الأسفل --}}
            <p class="text-center text-slate-400 text-xs mt-8">
                {{ __('لا تملك حساباً؟') }}
                <a href="#" class="text-indigo-600 dark:text-indigo-400 font-bold underline underline-offset-4">تواصل
                    مع الإدارة</a>
            </p>
        </div>
    </div>
@endsection
