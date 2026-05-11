document.addEventListener('DOMContentLoaded', () => {

    const links = document.querySelectorAll('[data-nav]');
    const sections = document.querySelectorAll('section[id]');

    /* Clear active class from all links */
    function clearActive() {
        links.forEach(l => l.classList.remove('active'));
    }

    /* Set active class on a specific link */
    function setActive(link) {
        clearActive();
        link.classList.add('active');
    }

    /* Add click event listeners to all links */
    links.forEach(link => {
        link.addEventListener('click', (e) => {

            // لو الرابط hash لا نمنع السلوك
            setActive(link);

        });
    });

    /* Set the initial active link based on the URL hash */
    function setInitialActive() {

        /* Get the URL hash */
        const hash = window.location.hash;

        /* If no hash is present, set the home link as active */
        if (!hash) {
            document.querySelector('[href="/"]')?.classList.add('active');
            return;
        }

        /* Find the active link based on the hash */
        const activeLink = document.querySelector(`[href="${hash}"]`);

        /* If an active link is found, set it as active */
        if (activeLink) {
            setActive(activeLink);
        }
    }

    /* Set the initial active link */
    setInitialActive();

    /* Scroll spy */
    window.addEventListener('scroll', () => {

        let current = "";

        sections.forEach(section => {

            const offset = section.offsetTop - 150;

            /* Check if the section is in view */
            if (window.scrollY >= offset) {
                current = section.id;
            }

        });

        links.forEach(link => {

            link.classList.remove('active');

            /* Set the active class on the link corresponding to the current section */
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }

        });

    });

});