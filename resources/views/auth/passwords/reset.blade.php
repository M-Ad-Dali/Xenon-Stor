@extends('layouts.guest')
@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-6 bg-slate-50 dark:bg-slate-950">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-[-10%] left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[30%] rounded-full bg-violet-500/10 blur-[100px]"></div>
        </div>

        <div class="w-full max-w-sm relative z-10">
            <div class="bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl border border-white/20 dark:border-slate-800/50 shadow-2xl shadow-indigo-500/5 rounded-3xl p-8">
                
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-extrabold text-slate-800 dark:text-white">
                        {{ __('تعيين كلمة مرور جديدة') }}
                    </h2>
                    <p class="text-slate-500 mt-2 text-sm">{{ __('يرجى إدخال كلمة المرور الجديدة أدناه') }}</p>
                </div>

                <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
                    @csrf
                    
                    {{-- حقل سري يمرر الـ Token للمسار --}}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div>
                        <x-label for="password" :value="__('كلمة المرور الجديدة')" />
                        <x-input id="password" type="password" name="password" required 
                            class="w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border-slate-200 dark:border-slate-700" />
                    </div>

                    <div>
                        <x-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />
                        <x-input id="password_confirmation" type="password" name="password_confirmation" required 
                            class="w-full mt-2 bg-slate-50 dark:bg-slate-950/50 border-slate-200 dark:border-slate-700" />
                    </div>

                    <x-button-auth type="submit"
                        class="w-full justify-center py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white shadow-lg shadow-indigo-500/20 transition-all transform hover:scale-[1.02]">
                        {{ __('حفظ كلمة المرور') }}
                    </x-button-auth>
                </form>
            </div>
        </div>
    </div>
@endsection