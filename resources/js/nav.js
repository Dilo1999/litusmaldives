/**
 * Fixed navbar scroll state + mobile menu.
 */
function initNav() {
  const nav = document.querySelector('[data-navbar]');
  const toggleBtn = document.querySelector('[data-mobile-menu-toggle]');
  const mobileMenu = document.querySelector('[data-mobile-menu]');
  const logo = nav?.querySelector('[data-nav-logo]');
  const links = nav ? [...nav.querySelectorAll('[data-nav-link]')] : [];
  const phone = nav?.querySelector('[data-nav-phone]');
  const phoneIcon = nav?.querySelector('[data-nav-phone-icon]');
  const cta = nav?.querySelector('[data-nav-cta]');
  const divider = nav?.querySelector('[data-nav-divider]');

  if (!nav) return;

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
      } else {
        if (active) {
          link.classList.add('border-litus-accent', 'font-bold', 'text-litus-accent');
        } else {
          link.classList.add('border-transparent', 'text-white/82', 'hover:text-litus-accent');
        }
      }
    });

    if (phone) {
      phone.classList.toggle('text-white', !scrolled);
      phone.classList.toggle('text-litus-navy', scrolled);
    }

    if (phoneIcon) {
      phoneIcon.classList.toggle('text-white/70', !scrolled);
      phoneIcon.classList.toggle('text-litus-accent', scrolled);
    }

    if (divider) {
      divider.classList.toggle('bg-white/20', !scrolled);
      divider.classList.toggle('bg-litus-navy/12', scrolled);
    }

    if (cta) {
      if (scrolled) {
        cta.className = 'rounded-md border border-litus-accent bg-transparent px-5 py-2 text-[0.72rem] font-semibold tracking-[0.08em] text-litus-accent no-underline transition-all duration-250 hover:bg-litus-accent hover:text-white';
      } else {
        cta.className = 'rounded-md border border-white/45 bg-transparent px-5 py-2 text-[0.72rem] font-semibold tracking-[0.08em] text-white no-underline transition-all duration-250 hover:border-litus-accent hover:bg-litus-accent hover:text-white';
      }
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
