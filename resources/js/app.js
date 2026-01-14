import './bootstrap';

/* ========================================
   ELEGANT SCROLL REVEAL ANIMATION
   ======================================== */
function initScrollReveal() {
    const elements = document.querySelectorAll('[data-reveal]');
    if (!elements.length) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) {
        elements.forEach((el) => el.classList.add('is-revealed'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;

                const el = entry.target;
                const delay = el.getAttribute('data-reveal-delay');

                if (delay) {
                    setTimeout(() => {
                        el.classList.add('is-revealed');
                    }, parseInt(delay) * 100);
                } else {
                    el.classList.add('is-revealed');
                }

                observer.unobserve(el);
            });
        },
        {
            root: null,
            rootMargin: '0px 0px -50px 0px',
            threshold: 0.1,
        }
    );

    elements.forEach((el) => observer.observe(el));
}

/* ========================================
   IMAGE REVEAL ON LOAD
   ======================================== */
function initImageReveal() {
    const images = document.querySelectorAll('.img-reveal');

    images.forEach((container) => {
        const img = container.querySelector('img');
        if (!img) return;

        if (img.complete) {
            container.classList.add('revealed');
        } else {
            img.addEventListener('load', () => {
                container.classList.add('revealed');
            });
        }
    });
}

/* ========================================
   TEXT REVEAL ANIMATION
   ======================================== */
function initTextReveal() {
    const textElements = document.querySelectorAll('.text-reveal');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    textElements.forEach((el) => observer.observe(el));
}

/* ========================================
   SMOOTH COUNTER ANIMATION
   ======================================== */
function animateCounter(el, target, duration = 2000) {
    const start = 0;
    const startTime = performance.now();

    function update(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);

        // Easing function (ease-out-cubic)
        const easeProgress = 1 - Math.pow(1 - progress, 3);
        const current = Math.floor(start + (target - start) * easeProgress);

        el.textContent = current.toLocaleString();

        if (progress < 1) {
            requestAnimationFrame(update);
        }
    }

    requestAnimationFrame(update);
}

function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const target = parseInt(entry.target.getAttribute('data-counter'));
                    animateCounter(entry.target, target);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.5 }
    );

    counters.forEach((el) => observer.observe(el));
}

/* ========================================
   SMOOTH NAVBAR ON SCROLL
   ======================================== */
function initNavbarScroll() {
    const navbar = document.querySelector('nav');
    if (!navbar) return;

    let lastScroll = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;

        if (currentScroll > 100) {
            navbar.classList.add('shadow-sm');
        } else {
            navbar.classList.remove('shadow-sm');
        }

        lastScroll = currentScroll;
    }, { passive: true });
}

/* ========================================
   MAGNETIC BUTTON EFFECT
   ======================================== */
function initMagneticButtons() {
    const buttons = document.querySelectorAll('.btn-magnetic');

    buttons.forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;

            btn.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
        });

        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0, 0)';
        });
    });
}

/* ========================================
   LAZY LOAD IMAGES
   ======================================== */
function initLazyLoad() {
    const images = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                imageObserver.unobserve(img);
            }
        });
    });

    images.forEach((img) => imageObserver.observe(img));
}

/* ========================================
   PARALLAX ON SCROLL (subtle)
   ======================================== */
function initParallax() {
    const elements = document.querySelectorAll('[data-parallax]');
    if (!elements.length) return;

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) return;

    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;

        elements.forEach((el) => {
            const speed = parseFloat(el.getAttribute('data-parallax')) || 0.5;
            const yPos = -(scrolled * speed);
            el.style.transform = `translateY(${yPos}px)`;
        });
    }, { passive: true });
}

/* ========================================
   CURSOR FOLLOWER (optional, subtle)
   ======================================== */
function initCursorEffect() {
    // Only on desktop
    if (window.innerWidth < 1024) return;

    const cursor = document.createElement('div');
    cursor.className = 'cursor-follower';
    cursor.style.cssText = `
        position: fixed;
        width: 20px;
        height: 20px;
        background: rgba(0, 0, 0, 0.1);
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.15s ease, width 0.3s ease, height 0.3s ease;
        transform: translate(-50%, -50%);
        mix-blend-mode: difference;
        display: none;
    `;
    document.body.appendChild(cursor);

    document.addEventListener('mousemove', (e) => {
        cursor.style.display = 'block';
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });

    // Grow cursor on interactive elements
    const interactives = document.querySelectorAll('a, button, [role="button"]');
    interactives.forEach((el) => {
        el.addEventListener('mouseenter', () => {
            cursor.style.width = '40px';
            cursor.style.height = '40px';
        });
        el.addEventListener('mouseleave', () => {
            cursor.style.width = '20px';
            cursor.style.height = '20px';
        });
    });
}

/* ========================================
   INIT ALL EFFECTS
   ======================================== */
document.addEventListener('DOMContentLoaded', () => {
    // Add page transition class
    document.body.classList.add('page-transition');

    // Initialize all effects
    initScrollReveal();
    initImageReveal();
    initTextReveal();
    initCounters();
    initNavbarScroll();
    initMagneticButtons();
    initLazyLoad();
    initParallax();

    // Optional: Uncomment for custom cursor
    // initCursorEffect();
});
