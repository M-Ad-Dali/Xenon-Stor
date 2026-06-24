@extends('layouts.guest')
@section('content')
    <div class="relative min-h-screen w-full flex items-center justify-center p-6 bg-slate-50 dark:bg-slate-950">

        {{-- خلفية جمالية --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-[-10%] left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[30%] rounded-full bg-violet-500/10 blur-[100px]"></div>
        </div>

        <div class="w-full max-w-md relative z-10">
            <div
                class="bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl border border-white/20 dark:border-slate-800/50 shadow-2xl shadow-indigo-500/5 rounded-3xl p-8">

                <div class="text-center mb-8">
                    <h2
                        class="text-3xl font-extrabold text-transparent bg-clip-text bg-linear-to-r from-indigo-600 to-violet-600">
                        {{ __('إنشاء حساب جديد') }}
                    </h2>
                </div>

                {{-- أضفنا enctype للتمكن من رفع الصورة --}}
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-4">
                    @csrf

                    {{-- حاوية الصورة الدائرية --}}
                    <div class="flex flex-col items-center justify-center space-y-3 mb-6">
                        <x-label :value="__('الصورة الشخصية')" />

                        <label for="profile_image" class="cursor-pointer group relative">
                            <div
                                class="w-28 h-28 rounded-full border-2 border-dashed border-slate-300 dark:border-slate-700 flex items-center justify-center overflow-hidden bg-slate-100 dark:bg-slate-800 transition-all hover:border-indigo-500">
                                <img id="image-preview" src="#" alt="Preview"
                                    class="hidden w-full h-full object-cover">

                                <div id="placeholder-icon" class="text-slate-400">
                                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </div>
                            </div>
                        </label>

                        {{-- حقل الملف مخفي --}}
                        <input id="profile_image" type="file" name="profile_image" class="hidden" accept="image/*"
                            onchange="previewImage(event)">
                    </div>

                    {{-- الاسم --}}
                    <div>
                        <x-label for="name" :value="__('الاسم الكامل')" />
                        <x-input id="name" type="text" name="name" class="w-full mt-2" required />
                    </div>

                    {{-- البريد الإلكتروني --}}
                    <div>
                        <x-label for="email" :value="__('البريد الإلكتروني')" />
                        <x-input id="email" type="email" name="email" class="w-full mt-2" required />
                    </div>

                    {{-- رقم الهاتف --}}
                    <div>
                        <x-label for="phone" :value="__('رقم الهاتف')" />
                        <x-input id="phone" type="tel" name="phone" class="w-full mt-2 {{ app()->getLocale() === 'ar' ? 'text-right' : 'text-left' }}" placeholder="+967 xxxxxxxxx"
                            required />
                    </div>

                    {{-- كلمة المرور --}}
                    <div class="w-full mt-2">
                        <x-label for="password" :value="__('كلمة المرور')" />
                        <x-input-pass />
                    </div>

                    {{-- تأكيد كلمة المرور --}}
                    <div class="w-full mt-2">
                        <x-label for="password_confirmation" :value="__('تأكيد كلمة المرور')" />
                        <x-input-pass name="password_confirmation" id="password_confirmation" />
                    </div>

                    <x-button-auth
                        class="w-full justify-center py-3 rounded-xl bg-linear-to-r from-indigo-600 to-indigo-700 mt-4">
                        {{ __('تسجيل الحساب') }}
                    </x-button-auth>
                </form>
            </div>

            <p class="text-center text-slate-400 text-xs mt-8">
                {{ __('لديك حساب بالفعل؟') }}
                <a href="{{ route('login') }}" class="text-indigo-600 font-bold underline">سجل دخولك</a>
            </p>
        </div>
    </div>
@endsection
