import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // تفعيل التبديل اليدوي للوضع الداكن عبر الكلاس
    darkMode: 'class', 

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js', // أضفنا هذا لضمان قراءة الكلاسات داخل ملفات الجافاسكريبت
    ],

    theme: {
        extend: {
            fontFamily: {
                // الخطوط الافتراضية
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                
                cairo: ['Cairo', 'sans-serif'],
                orbitron: ['Orbitron', 'sans-serif'],
            },
            boxShadow: {
                'neon-purple': '0 0 20px rgba(168, 85, 247, 0.4)',
            }
        },
    },

    plugins: [forms],
};