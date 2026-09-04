/*
    Draft — the interaction layer.

    Everything here is a progressive enhancement: with JavaScript off, the nav
    links still work, nothing is hidden, and the site stays fully usable. The
    matching transitions live in resources/css/site.css.

    Pages change in place: instant navigation swaps <main> and keeps the
    header and footer, so those bind once below. Everything that lives inside
    <main> — reveals, spotlight cards, the docs sidebar's current link — goes
    through setUp(root): once on load, and again for each new <main> after
    `instant:navigated`, tearing the previous page's observers down first.
*/

// Flag the document early so CSS only hides reveal targets when JS will
// actually reveal them. This file loads with defer, before first paint.
document.documentElement.classList.add('js');

// The observers the current <main> owns, released before the next one is set up.
const observers = [];

// The header persists for the whole visit: bind it once.
const header = headerState();
const menus = dropdowns();
const menu = mobileMenu();
markCurrentMenuItem();

setUp(document);

document.addEventListener('instant:navigated', function (event) {
    menus.closeAll();
    if (menu) {
        menu.close();
    }
    if (header) {
        header.evaluate();
    }
    markCurrentMenuItem();
    setUp(event.detail.main);
});

/*
    Everything that touches the page's own content. `root` is the document
    on first load and the freshly swapped <main> after a navigation.
*/
function setUp(root) {
    tearDown();
    revealOnScroll(root);
    markCurrentDocLink(root);
    spotlightCards(root);
}

function tearDown() {
    observers.splice(0).forEach(function (observer) {
        observer.disconnect();
    });
}

/*
    The header rests transparent at the very top of the page; the moment
    content scrolls underneath it, data-scrolled fades in the glass, blur,
    and hairline (see #header rules in site.css).
*/
function headerState() {
    const header = document.getElementById('header');

    if (!header) {
        return null;
    }

    function evaluate() {
        header.toggleAttribute('data-scrolled', window.scrollY > 8);
    }

    evaluate();
    window.addEventListener('scroll', evaluate, { passive: true });

    return { evaluate: evaluate };
}

/*
    The nav mega-dropdown. Hover opens with a short intent delay and closes
    with a longer one, so diagonal pointer travel into the panel never slams
    it shut. Click toggles it for touch, Escape and outside-clicks dismiss.
    Returns a handle so a page change can dismiss them all too.
*/
function dropdowns() {
    const roots = document.querySelectorAll('[data-dropdown]');

    function closeAll() {
        roots.forEach(function (root) {
            root.classList.remove('is-open');
            const t = root.querySelector('[data-dropdown-trigger]');
            if (t) {
                t.setAttribute('aria-expanded', 'false');
            }
        });
    }

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

    return { closeAll: closeAll };
}

/*
    The mobile menu: the hamburger toggles .menu-open on <html>, which slides
    the glass sheet down and locks scrolling. Closing on navigation keeps
    same-page anchors from leaving the sheet hanging open. Returns a handle so
    a page change can close it too.
*/
function mobileMenu() {
    const button = document.querySelector('[data-mobile-toggle]');
    const panel = document.querySelector('[data-mobile-panel]');

    if (!button || !panel) {
        return null;
    }

    function close() {
        document.documentElement.classList.remove('menu-open');
        button.setAttribute('aria-expanded', 'false');
    }

    button.addEventListener('click', function () {
        const open = document.documentElement.classList.toggle('menu-open');
        button.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    panel.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', close);
    });

    return { close: close };
}

/*
    Scroll reveals. Elements tagged data-reveal start softened (see site.css)
    and settle into place as they enter the viewport. Each element animates
    once; --reveal-delay staggers siblings.
*/
function revealOnScroll(root) {
    const targets = root.querySelectorAll('[data-reveal]');

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

    observers.push(observer);

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
    post keeps Updates lit. The header is marked here and recomputed after
    every page change (the previous mark is cleared first); the docs sidebar
    lives inside <main> and is marked per page by markCurrentDocLink.
*/
function markCurrentMenuItem() {
    markCurrent(document.querySelectorAll('#header a[href], [data-mobile-panel] a[href]'));
}

function markCurrentDocLink(root) {
    markCurrent(root.querySelectorAll('[data-doc-nav] a[href]'));
}

function markCurrent(links) {
    links.forEach(function (link) {
        const path = window.location.pathname;

        if (link.pathname !== '/' && (path === link.pathname || path.startsWith(link.pathname + '/'))) {
            link.setAttribute('aria-current', 'page');
        } else if (link.pathname === '/' && path === '/') {
            link.setAttribute('aria-current', 'page');
        } else {
            link.removeAttribute('aria-current');
        }
    });
}

/*
    Spotlight cards: track the pointer per card and let the CSS ::after layer
    paint a soft accent bloom underneath it.
*/
function spotlightCards(root) {
    root.querySelectorAll('.spotlight-card').forEach(function (card) {
        card.addEventListener('pointermove', function (event) {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--mx', (event.clientX - rect.left) + 'px');
            card.style.setProperty('--my', (event.clientY - rect.top) + 'px');
        });
    });
}
