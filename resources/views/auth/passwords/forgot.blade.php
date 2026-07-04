@extends('layouts.guest')
@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-6 bg-slate-50 dark:bg-slate-950">
        {{-- خلفية جمالية --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-[-10%] left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[30%] rounded-full bg-violet-500/10 blur-[100px]"></div>
        </div>

        <div class="w-full max-w-sm relative z-10">
            <div class="bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl border border-white/20 dark:border-slate-800/50 shadow-2xl shadow-indigo-500/5 rounded-3xl p-8">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-extrabold text-transparent bg-clip-text bg-linear-to-r from-indigo-600 to-violet-600 dark:from-indigo-400 dark:to-violet-400">
                        {{ __('نسيت كلمة المرور؟') }}
                    </h2>
                    <p class="text-slate-500 mt-2 text-sm">
                        {{ __('لا تقلق، أدخل بريدك وسنرسل لك رابطاً لاستعادة حسابك.') }}
                    </p>
                </div>

                {{-- نموذج واحد فقط --}}
                <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
                    @csrf

                    <div>
                        <x-label for="email" :value="__('البريد الإلكتروني')" />
                        <x-input id="email" type="email" name="email" :value="old('email')"
                            class="w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border-slate-200 dark:border-slate-700 focus:ring-2 focus:ring-indigo-500"
                            required autofocus />
                    </div>

                    {{-- زر الإرسال --}}
                    <x-button-auth
                        class="w-full justify-center py-3 rounded-xl bg-linear-to-r from-indigo-600 to-indigo-700 hover:from-indigo-700 hover:to-indigo-800 text-white shadow-lg shadow-indigo-500/20 transition-all transform hover:scale-[1.02] cursor-pointer">
                        {{ __('إرسال رابط الاستعادة') }}
                    </x-button-auth>

                    <div class="text-center pt-2">
                        <a href="{{ route('login') }}"
                            class="text-xs text-slate-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                            {{ __('العودة لصفحة الدخول') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection