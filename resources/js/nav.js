/**
 * Fixed navbar scroll state + mobile menu.
 */
function initNav() {
  const nav = document.querySelector('[data-navbar]');
  const toggleBtn = document.querySelector('[data-mobile-menu-toggle]');
  const mobileMenu = document.querySelector('[data-mobile-menu]');
  const logo = nav?.querySelector('[data-nav-logo]');
  const links = nav ? [...nav.querySelectorAll('[data-nav-link]')] : [];
  const cta = nav?.querySelector('[data-nav-cta]');

  if (!nav) return;

  const ctaClasses =
    'inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-litus-accent to-cyan-400 px-6 py-2.5 text-[0.82rem] font-bold tracking-[0.04em] text-white no-underline shadow-[0_4px_18px_rgba(6,182,212,0.4)] transition-all duration-250 hover:opacity-90';

  const updateSolid = () => {
    const scrolled = window.scrollY > 80;
    nav.classList.toggle('is-scrolled', scrolled);

    if (logo) {
      logo.classList.toggle('brightness-0', !scrolled);
      logo.classList.toggle('invert', !scrolled);
    }

    if (toggleBtn) {
      toggleBtn.classList.toggle('text-white', !scrolled);
      toggleBtn.classList.toggle('text-litus-navy', scrolled);
    }

    links.forEach((link) => {
      const active = link.dataset.active === 'true';
      link.classList.remove(
        'text-white/90',
        'text-white/82',
        'hover:text-litus-accent',
        'text-litus-muted',
        'border-litus-accent',
        'font-bold',
        'text-litus-accent',
      );

      if (scrolled) {
        if (active) {
          link.classList.add('border-litus-accent', 'font-bold', 'text-litus-accent');
        } else {
          link.classList.add('border-transparent', 'text-litus-muted', 'hover:text-litus-accent');
        }
      } else if (active) {
        link.classList.add('border-litus-accent', 'font-bold', 'text-litus-accent');
      } else {
        link.classList.add('border-transparent', 'text-white/90', 'hover:text-litus-accent');
      }
    });

    if (cta) {
      cta.className = ctaClasses;
    }
  };

  updateSolid();
  window.addEventListener('scroll', updateSolid, { passive: true });

  if (!toggleBtn || !mobileMenu) return;

  const iconOpen = toggleBtn.querySelector('[data-icon="open"]');
  const iconClose = toggleBtn.querySelector('[data-icon="close"]');

  const setOpen = (open) => {
    toggleBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    mobileMenu.classList.toggle('hidden', !open);
    if (iconOpen) iconOpen.classList.toggle('hidden', open);
    if (iconClose) iconClose.classList.toggle('hidden', !open);
    document.body.classList.toggle('overflow-hidden', open);
  };

  toggleBtn.addEventListener('click', () => {
    setOpen(toggleBtn.getAttribute('aria-expanded') !== 'true');
  });

  mobileMenu.querySelectorAll('[data-mobile-menu-close]').forEach((el) => {
    el.addEventListener('click', () => setOpen(false));
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initNav);
} else {
  initNav();
}
