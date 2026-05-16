document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-nav]');
    const sections = document.querySelectorAll('section[id]');

    // دالة ذكية لتفعيل الرابط النشط وإلغاء البقية بأسطر أقل
    const setActive = (id) => {
        links.forEach(link => {
            const isActive = link.getAttribute('href') === `#${id}`;
            link.classList.toggle('active', isActive);
        });
    };

    // 1. إدارة الضغط والتمرير السلس للقسم
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId?.startsWith('#')) {
                e.preventDefault();
                document.querySelector(targetId)?.scrollIntoView({ behavior: 'smooth' });
                setActive(targetId.substring(1));
            }
        });
    });

    // 2. الـ Scroll Spy الحديث البديل لكود الحسابات القديم (Intersection Observer)
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // إذا كان القسم ظاهراً بنسبة 50% أو أكثر في الشاشة
            if (entry.isIntersecting) {
                setActive(entry.target.id);
            }
        });
    }, { rootMargin: '-30% 0px -60% 0px' }); // تحديد منطقة الرؤية وسط الشاشة بدقة

    sections.forEach(section => observer.observe(section));

    // 3. تفعيل رابط الهوم الافتراضي عند بداية التحميل إذا لم يكن هناك Hash
    if (!window.location.hash) {
        (document.querySelector('[href="/"]') || document.querySelector('[href="#home"]'))?.classList.add('active');
    }
});