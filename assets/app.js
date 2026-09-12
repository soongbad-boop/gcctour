document.addEventListener('DOMContentLoaded', () => {
    // Mobile navigation drawer toggle
    const btn = document.querySelector('.menuButton');
    const nav = document.querySelector('#primaryNav');
    
    if (btn && nav) {
        // Create backdrop element if missing
        let backdrop = document.querySelector('.navBackdrop');
        if (!backdrop) {
            backdrop = document.createElement('div');
            backdrop.className = 'navBackdrop';
            document.body.appendChild(backdrop);
        }

        const toggleNav = (show) => {
            const isOpen = show !== undefined ? show : !nav.classList.contains('navOpen');
            nav.classList.toggle('navOpen', isOpen);
            backdrop.classList.toggle('active', isOpen);
            btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            document.body.style.overflow = isOpen ? 'hidden' : '';
        };

        btn.addEventListener('click', () => toggleNav());
        backdrop.addEventListener('click', () => toggleNav(false));

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && nav.classList.contains('navOpen')) {
                toggleNav(false);
            }
        });
    }

    // FAQ Accordion Toggle functionality
    const faqQuestions = document.querySelectorAll('.faqQuestion');
    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const isOpen = item.classList.contains('open');
            
            // Optionally close other items in the same container
            const container = item.closest('.faqContainer');
            if (container) {
                container.querySelectorAll('.faqItem').forEach(el => {
                    if (el !== item) el.classList.remove('open');
                });
            }

            item.classList.toggle('open', !isOpen);
        });
    });
});
