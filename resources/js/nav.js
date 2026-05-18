document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-nav]');
    const sections = document.querySelectorAll('section[id], div[id]');

    // دالة تفعيل الرابط النشط
    const setActive = (id) => {
        links.forEach(link => {
            const href = link.getAttribute('href');
            const isActive = href === `#${id}` || (id === 'home' && href === '/');
            link.classList.toggle('active', isActive);
        });
    };

    // 1. إدارة الضغط والتمرير السلس (مبسط ونظيف)
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const targetId = link.getAttribute('href');
            if (targetId?.startsWith('#')) {
                e.preventDefault();
                const targetSection = document.getElementById(targetId.substring(1));
                
                if (targetSection) {
                    // نترك المتصفح يمرر بشكل طبيعي، والـ CSS سيتكفل بالمسافة النشطة
                    targetSection.scrollIntoView({ behavior: 'smooth' });

                    // تحديث فوري للمنيو والرابط دون انتظار انتهاء السكرول
                    setActive(targetId.substring(1));
                    history.pushState(null, null, targetId);
                }
            }
        });
    });

    // 2. الـ Scroll Spy الذكي (يعتمد على قراءة المركز الفعلي للشاشة)
    const observerOptions = {
        root: null,
        // نراقب السكشن عندما يمر بمنتصف الشاشة تماماً لضمان دقة الاختيار بنسبة 100%
        rootMargin: '-49% 0px -49% 0px', 
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            // تفعيل السكشن فقط إذا كان يقطع خط منتصف الشاشة حالياً
            if (entry.isIntersecting) {
                setActive(entry.target.id);
            }
        });
    }, observerOptions);

    // مراقبة السكاشن المطابقة للمنيو فقط
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