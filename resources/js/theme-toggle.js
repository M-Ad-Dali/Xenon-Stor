// 1. الفحص الأولي الفوري عند تحميل الملف لمنع وميض الشاشة (الوضع الداكن هو الافتراضي للزائر الجديد)
const savedTheme = localStorage.getItem('theme');

// إذا كان المستخدم قد اختار الوضع المضيء صراحةً سابقاً، نقوم بإزالتها
if (savedTheme === 'light') {
    document.documentElement.classList.remove('dark');
} else {
    // في حال كان جديداً (الذاكرة فارغة) أو اختار الداكن بنفسه، يتفعل الوضع الداكن تلقائياً
    document.documentElement.classList.add('dark');
}

// 2. تحديث حركة الأزرار في الـ Dropdown بناءً على الثيم الحالي عند فتح القائمة
document.addEventListener('DOMContentLoaded', () => {
    // الاستماع لأي تغيير يدوي يحدث للثيم لتحديث شكل الأزرار
    document.addEventListener('theme-changed', (event) => {
        // يمكن إضافة تأثيرات إضافية هنا إذا أردت مستقبلاً
    });
});