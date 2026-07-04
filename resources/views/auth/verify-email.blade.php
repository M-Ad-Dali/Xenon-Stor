@extends('layouts.guest')
@section('content')
    <div class="relative w-full flex items-center justify-center p-6 pt-15 bg-slate-50 dark:bg-slate-950">
        {{-- خلفية جمالية --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-[-10%] left-[10%] w-[40%] h-[40%] rounded-full bg-indigo-500/10 blur-[100px]"></div>
            <div class="absolute bottom-[10%] right-[10%] w-[30%] h-[30%] rounded-full bg-violet-500/10 blur-[100px]"></div>
        </div>

        <div class="w-full max-w-sm relative z-10">
            <div
                class="bg-white/70 dark:bg-slate-900/70 backdrop-blur-xl border border-slate-300 dark:border-slate-800/50 shadow-2xl shadow-indigo-500/5 rounded-3xl p-8">

                <div class="text-center mb-8">
                    <div
                        class="w-16 h-16 bg-indigo-100 dark:bg-indigo-900/50 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-extrabold text-slate-800 dark:text-white">{{ __('كود التحقق') }}</h2>
                    <p class="text-slate-500 mt-4 text-sm leading-relaxed">
                        {{ __('أدخل رمز التحقق المكون من 6 أرقام الذي أرسلناه إلى بريدك الإلكتروني') }}
                    </p>

                    <p class="text-slate-500 mt-1 text-sm leading-relaxed">
                        m@gmail.com
                    </p>
                </div>

                {{-- نموذج إدخال الكود --}}
                <form method="POST" action="{{ route('verification.verify') }}" class="space-y-6">
                    @csrf
                    <div class="flex justify-center gap-2" dir="ltr">
                        @for ($i = 0; $i < 6; $i++)
                            <input type="text" maxlength="1" name="code[]" inputmode="numeric" pattern="[0-9]*"
                                class="w-10 h-12 text-center text-xl font-bold bg-slate-50 dark:bg-slate-800 border border-slate-500 dark:border-slate-700 rounded-xl focus:ring-2 focus:ring-indigo-500 outline-none transition-all">
                        @endfor
                    </div>

                    <x-button-auth
                        class="w-full justify-center py-3 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white shadow-lg transition-all transform hover:scale-[1.02] cursor-pointer">
                        {{ __('تأكيد الكود') }}
                    </x-button-auth>
                </form>

                <div class="text-center mt-6 space-y-4">
                    <p class="text-xs text-slate-400">
                        {{ __('لم يصلك الكود؟') }}
                        <a href="#" class="text-indigo-600 font-bold hover:underline">{{ __('إعادة الإرسال') }}</a>
                    </p>
                    <a href="{{ url()->previous() }}"
                        class="text-xs text-slate-400 hover:text-indigo-600 transition-colors">
                        {{ __('رجوع للخلف') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- هذا الكود يوضع في نهاية صفحة الـ Blade --}}
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const inputs = document.querySelectorAll('input[type="text"]');

        inputs.forEach((input, index) => {
            input.addEventListener("input", (e) => {
                // التأكد من أن المدخل رقم فقط
                input.value = input.value.replace(/[^0-9]/g, '');

                // الانتقال للخانة التالية إذا تم إدخال رقم
                if (input.value.length === 1 && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            // الرجوع للخانة السابقة عند مسح النص (Backspace)
            input.addEventListener("keydown", (e) => {
                if (e.key === "Backspace" && input.value === "" && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });
    });
</script>
