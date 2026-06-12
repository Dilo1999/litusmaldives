/**
 * Fixed navbar scroll state + mobile menu.
 */
function initNav() {
  const nav = document.querySelector('[data-navbar]');
  const toggleBtn = document.querySelector('[data-mobile-menu-toggle]');
  const mobileMenu = document.querySelector('[data-mobile-menu]');
  if (!nav) return;

  const updateSolid = () => {
    nav.classList.toggle('border-white/20', window.scrollY > 60);
    nav.classList.toggle('bg-litus-navy/95', window.scrollY > 60);
    nav.classList.toggle('border-white/10', window.scrollY <= 60);
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
