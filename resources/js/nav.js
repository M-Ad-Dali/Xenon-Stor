document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('[data-nav]');
    const sections = document.querySelectorAll('section[id]');
    let isScrolling = false;
    let ticking = false;

    // اختصار التحقق من الصفحة الرئيسية
    const isHomepage = () => /^\/(en|ar)?\/?(index\.php)?$/.test(window.location.pathname);

    const updateActiveLink = () => {
        if (!isHomepage() || isScrolling) return;

        // تحديد السكشن النشط باستخدام findIndex لاختصار الكود
        const activeIdx = Array.from(sections).findIndex(s => {
            const { top, bottom } = s.getBoundingClientRect();
            return top <= window.innerHeight * 0.6 && bottom >= window.innerHeight * 0.4;
        });

        const activeId = activeIdx !== -1 ? `#${sections[activeIdx].id}` : null;

        links.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', activeId && href.endsWith(activeId));
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
            const targetId = href?.split('#').pop();
            const targetSection = targetId ? document.getElementById(targetId) : null;
            
            if (targetSection) {
                e.preventDefault();
                isScrolling = true;
                
                links.forEach(l => l.classList.toggle('active', l === link));
                targetSection.scrollIntoView({ behavior: 'smooth' });
                history.pushState(null, null, `#${targetId}`);

                setTimeout(() => { isScrolling = false; }, 800);
            }
        });
    });
});