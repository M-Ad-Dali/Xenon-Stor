// 1. الفحص الأولي الفوري عند تحميل الملف لمنع وميض الشاشة
const savedTheme = localStorage.getItem('theme');
const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

// 2. تحديث حركة الأزرار في الـ Dropdown بناءً على الثيم الحالي عند فتح القائمة
document.addEventListener('DOMContentLoaded', () => {
    // الاستماع لأي تغيير يدوي يحدث للثيم لتحديث شكل الأزرار
    document.addEventListener('theme-changed', (event) => {
        // يمكن إضافة تأثيرات إضافية هنا إذا أردت مستقبلاً
    });
});