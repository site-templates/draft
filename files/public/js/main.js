/*
    Draft — the interaction layer.

    Everything here is a progressive enhancement: with JavaScript off, the nav
    links still work, nothing is hidden, and the site stays fully usable. The
    matching transitions live in resources/css/site.css.
*/

// Flag the document early so CSS only hides reveal targets when JS will
// actually reveal them. This file loads with defer, before first paint.
document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', function () {
    headerState();
    dropdowns();
    mobileMenu();
    revealOnScroll();
    markCurrentMenuItem();
    spotlightCards();
});

/*
    The header rests transparent at the very top of the page; the moment
    content scrolls underneath it, data-scrolled fades in the glass, blur,
    and hairline (see #header rules in site.css).
*/
function headerState() {
    const header = document.getElementById('header');

    if (!header) {
        return;
    }

    function evaluate() {
        header.toggleAttribute('data-scrolled', window.scrollY > 8);
    }

    evaluate();
    window.addEventListener('scroll', evaluate, { passive: true });
}

/*
    The nav mega-dropdown. Hover opens with a short intent delay and closes
    with a longer one, so diagonal pointer travel into the panel never slams
    it shut. Click toggles it for touch, Escape and outside-clicks dismiss.
*/
function dropdowns() {
    const roots = document.querySelectorAll('[data-dropdown]');

    roots.forEach(function (root) {
        const trigger = root.querySelector('[data-dropdown-trigger]');
        let openTimer = null;
        let closeTimer = null;

        function open() {
            clearTimeout(closeTimer);
            roots.forEach(function (other) {
                if (other !== root) {
                    close(other);
                }
            });
            root.classList.add('is-open');
            if (trigger) {
                trigger.setAttribute('aria-expanded', 'true');
            }
        }

        function close(target) {
            const el = target || root;
            el.classList.remove('is-open');
            const t = el.querySelector('[data-dropdown-trigger]');
            if (t) {
                t.setAttribute('aria-expanded', 'false');
            }
        }

        root.addEventListener('pointerenter', function (event) {
            if (event.pointerType !== 'mouse') {
                return;
            }
            clearTimeout(closeTimer);
            openTimer = setTimeout(open, 50);
        });

        root.addEventListener('pointerleave', function (event) {
            if (event.pointerType !== 'mouse') {
                return;
            }
            clearTimeout(openTimer);
            closeTimer = setTimeout(function () {
                close();
            }, 180);
        });

        if (trigger) {
            trigger.addEventListener('click', function (event) {
                event.preventDefault();
                root.classList.contains('is-open') ? close() : open();
            });
        }

        // Keep the panel open while it holds keyboard focus.
        root.addEventListener('focusout', function (event) {
            if (!root.contains(event.relatedTarget)) {
                close();
            }
        });
    });

    document.addEventListener('click', function (event) {
        roots.forEach(function (root) {
            if (!root.contains(event.target)) {
                root.classList.remove('is-open');
                const t = root.querySelector('[data-dropdown-trigger]');
                if (t) {
                    t.setAttribute('aria-expanded', 'false');
                }
            }
        });
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            roots.forEach(function (root) {
                root.classList.remove('is-open');
            });
        }
    });
}

/*
    The mobile menu: the hamburger toggles .menu-open on <html>, which slides
    the glass sheet down and locks scrolling. Closing on navigation keeps
    same-page anchors from leaving the sheet hanging open.
*/
function mobileMenu() {
    const button = document.querySelector('[data-mobile-toggle]');
    const panel = document.querySelector('[data-mobile-panel]');

    if (!button || !panel) {
        return;
    }

    button.addEventListener('click', function () {
        const open = document.documentElement.classList.toggle('menu-open');
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    panel.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            document.documentElement.classList.remove('menu-open');
            button.setAttribute('aria-expanded', 'false');
        });
    });
}

/*
    Scroll reveals. Elements tagged data-reveal start softened (see site.css)
    and settle into place as they enter the viewport. Each element animates
    once; --reveal-delay staggers siblings.
*/
function revealOnScroll() {
    const targets = document.querySelectorAll('[data-reveal]');

    if (!('IntersectionObserver' in window)) {
        targets.forEach(function (el) {
            el.classList.add('is-visible');
        });
        return;
    }

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -10% 0px', threshold: 0.05 });

    targets.forEach(function (el) {
        // Anything already above the fold reveals immediately.
        if (el.getBoundingClientRect().top < window.innerHeight * 0.9) {
            el.classList.add('is-visible');
        } else {
            observer.observe(el);
        }
    });
}

/*
    aria-current tells screen readers which page you're on and lights up the
    active nav link. Section pages count for their parents, so /updates/some
    post keeps Updates lit.
*/
function markCurrentMenuItem() {
    document.querySelectorAll('#header a[href], [data-mobile-panel] a[href], [data-doc-nav] a[href]').forEach(function (link) {
        const path = window.location.pathname;

        if (link.pathname !== '/' && (path === link.pathname || path.startsWith(link.pathname + '/'))) {
            link.setAttribute('aria-current', 'page');
        } else if (link.pathname === '/' && path === '/') {
            link.setAttribute('aria-current', 'page');
        }
    });
}

/*
    Spotlight cards: track the pointer per card and let the CSS ::after layer
    paint a soft accent bloom underneath it.
*/
function spotlightCards() {
    document.querySelectorAll('.spotlight-card').forEach(function (card) {
        card.addEventListener('pointermove', function (event) {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--mx', (event.clientX - rect.left) + 'px');
            card.style.setProperty('--my', (event.clientY - rect.top) + 'px');
        });
    });
}
