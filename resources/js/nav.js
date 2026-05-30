document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-nav]');
    const sections = document.querySelectorAll('section[id], div[id]');

    // دالة تفعيل الرابط النشط
    const setActive = (id) => {
        links.forEach(link => {
            const href = link.getAttribute('href');
            const isActive = href === `#${id}`;

            link.classList.toggle('active', isActive);
        });
    };

    // 1. إدارة الضغط والتمرير السلس
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            
            // نتحقق فقط من الروابط التي تستهدف سكشن (تبدأ بـ #)
            if (href?.startsWith('#')) {
                const targetSection = document.getElementById(href.substring(1));
                
                // إذا كنا في الصفحة الرئيسية والسكشن موجود
                if (targetSection) {
                    e.preventDefault(); // نمنع الانتقال الافتراضي
                    targetSection.scrollIntoView({ behavior: 'smooth' }); // نمرر بسلاسة
                    setActive(href.substring(1)); // نحدد الرابط النشط
                    history.pushState(null, null, href); // نحدث عنوان URL بدون إعادة تحميل الصفحة
                }
                // إذا لم يجد السكشن (نحن في صفحة أخرى)، 
                // لا نفعل شيئاً ونترك المتصفح يفتح الرابط بشكل طبيعي.
            }
        });
    });

    // 2. الـ Scroll Spy الذكي
    const observerOptions = {
        root: null,
        rootMargin: '-49% 0px -49% 0px', 
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setActive(entry.target.id);
            }
        });
    }, observerOptions);

    sections.forEach(section => {
        const hasMatchingLink = Array.from(links).some(link => link.getAttribute('href') === `#${section.id}`);
        if (hasMatchingLink) {
            observer.observe(section);
        }
    });

    // 3. إدارة التحميل الأولي
    if (!window.location.hash) {
        const homeLink = document.querySelector('[href="/"]') || document.querySelector('[href="#home"]');
        homeLink?.classList.add('active');
    } else {
        setActive(window.location.hash.substring(1));
    }
});