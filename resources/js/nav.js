document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-nav]');
    const sections = Array.from(document.querySelectorAll('section[id]'));
    let isScrolling = false;
    let ticking = false;

    const updateActiveLink = () => {
        // إذا كنا في صفحة فرعية (مثل المتجر)، نتوقف عن الرصد التلقائي
        if (window.location.pathname !== '/' && window.location.pathname !== '/index.php') return;
        if (isScrolling) return;

        // العثور على السكشن الذي يغطي منتصف الشاشة
        const activeSection = sections.find(section => {
            const { top, bottom } = section.getBoundingClientRect();
            return top <= window.innerHeight * 0.6 && bottom >= window.innerHeight * 0.4;
        });

        // تحديث الروابط بناءً على السكشن المكتشف
        links.forEach(link => {
            const href = link.getAttribute('href');
            // التأكد من أن الرابط يحتوي على الـ ID الخاص بالسكشن النشط
            const isActive = activeSection && href && href.includes(`#${activeSection.id}`);
            link.classList.toggle('active', isActive);
        });

        ticking = false;
    };

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateActiveLink);
            ticking = true;
        }
    });

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            // إذا كان الرابط لا يحتوي على #، دعه يعمل كرابط عادي (مثلاً في صفحة الاقسام)
            if (!href || !href.includes('#')) return;

            const targetId = href.split('#')[1];
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                e.preventDefault();
                isScrolling = true;
                
                // تحديث الـ Active فوراً
                links.forEach(l => l.classList.toggle('active', l === link));
                
                targetSection.scrollIntoView({ behavior: 'smooth' });
                history.pushState(null, null, `#${targetId}`);

                setTimeout(() => { isScrolling = false; }, 800);
            }
        });
    });
});