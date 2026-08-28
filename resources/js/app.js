const menuBtn = document.getElementById('menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

function closeMobileMenu() {
    mobileMenu?.classList.add('hidden');
    menuBtn?.setAttribute('aria-expanded', 'false');
}

function toggleMobileMenu() {
    const isOpen = mobileMenu?.classList.toggle('hidden') === false;

    menuBtn?.setAttribute('aria-expanded', String(isOpen));
}

function initScrollSpy() {
    const links = Array.from(document.querySelectorAll('[data-nav-link]'));
    const sections = links
        .map((link) => document.getElementById(link.getAttribute('data-nav-link')))
        .filter(Boolean);

    const name = document.body.getAttribute('data-name') || 'Portfolio';

    if (sections.length === 0 || typeof IntersectionObserver === 'undefined') {
        return;
    }

    const setActive = (sectionId) => {
        links.forEach((link) => {
            const active = link.getAttribute('data-nav-link') === sectionId;

            link.classList.toggle('text-foreground', active);
            link.classList.toggle('bg-primary/10', active);
            link.setAttribute('aria-current', active ? 'true' : 'false');

            if (active) {
                document.title = name.toUpperCase();
            }
        });
    };

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActive(entry.target.id);
                }
            });
        },
        { rootMargin: '-40% 0px -55% 0px' },
    );

    sections.forEach((section) => observer.observe(section));
}

function initContactForm() {
    const form = document.getElementById('contact-form');

    if (!form) {
        return;
    }

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const name = form.elements.name.value.trim();
        const email = form.elements.email.value.trim();
        const message = form.elements.message.value.trim();

        const subject = encodeURIComponent(`Portfolio message from ${name}`);
        const body = encodeURIComponent(`${message}\n\n— ${name} (${email})`);
        const mailto = `mailto:lishabueno8@gmail.com?subject=${subject}&body=${body}`;

        window.location.href = mailto;
    });
}

function initCertificateModal() {
    const modal = document.getElementById('certificate-modal');
    const backdrop = document.getElementById('certificate-modal-backdrop');
    const closeBtn = document.getElementById('certificate-modal-close');
    const image = document.getElementById('certificate-modal-image');
    const title = document.getElementById('certificate-modal-title');

    if (!modal || !image || !title) {
        return;
    }

    const openModal = (src, certTitle) => {
        image.src = src;
        image.alt = certTitle;
        title.textContent = certTitle;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
        closeBtn?.focus();
    };

    const closeModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
        image.src = '';
    };

    document.querySelectorAll('[data-cert-open]').forEach((btn) => {
        btn.addEventListener('click', () => {
            openModal(btn.getAttribute('data-cert-open'), btn.querySelector('h3')?.textContent || 'Certificate');
        });
    });

    closeBtn?.addEventListener('click', closeModal);
    backdrop?.addEventListener('click', closeModal);

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    menuBtn?.addEventListener('click', toggleMobileMenu);
    mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMobileMenu));

    initScrollSpy();
    initContactForm();
    initCertificateModal();
});