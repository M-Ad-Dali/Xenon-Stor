document.addEventListener('DOMContentLoaded', function () {
    const profileImageInput = document.getElementById('profile_image');
    
    if (profileImageInput) {
        profileImageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            
            // 1. التحقق من وجود ملف وأن نوعه يبدأ بكلمة image (أمان إضافي)
            if (file && file.type.startsWith('image/')) {
                const imagePreview = document.getElementById('image-preview');
                const placeholderIcon = document.getElementById('placeholder-icon');

                // 2. استخدام URL.createObjectURL بدلاً من FileReader للأداء الأسرع
                if (imagePreview) {
                    imagePreview.src = URL.createObjectURL(file);
                    imagePreview.classList.remove('hidden');
                }
                
                if (placeholderIcon) {
                    placeholderIcon.classList.add('hidden');
                }
            }
        });
    }
});