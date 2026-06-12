/**
 * Gallery category filter + lightbox.
 */
function initGallery() {
  const root = document.querySelector('[data-gallery]');
  if (!root) return;

  const buttons = root.querySelectorAll('[data-gallery-filter]');
  const items = root.querySelectorAll('[data-filter-item]');
  const lightbox = document.querySelector('[data-gallery-lightbox]');
  const lightboxImg = lightbox?.querySelector('[data-lightbox-img]');
  const lightboxTitle = lightbox?.querySelector('[data-lightbox-title]');
  const lightboxClose = lightbox?.querySelector('[data-lightbox-close]');

  const filter = (cat) => {
    items.forEach((item) => {
      const match = cat === 'All' || item.dataset.category === cat;
      item.classList.toggle('is-hidden', !match);
    });
    buttons.forEach((btn) => {
      const active = btn.dataset.galleryFilter === cat;
      btn.classList.toggle('bg-litus-primary', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('border-litus-primary', active);
      btn.classList.toggle('bg-transparent', !active);
      btn.classList.toggle('text-litus-primary', !active);
      btn.classList.toggle('border-litus-primary/20', !active);
    });
  };

  buttons.forEach((btn) => {
    btn.addEventListener('click', () => filter(btn.dataset.galleryFilter));
  });

  items.forEach((item) => {
    item.addEventListener('click', () => {
      if (!lightbox || !lightboxImg) return;
      lightboxImg.src = item.dataset.image || lightboxImg.src;
      lightboxImg.alt = item.dataset.title || '';
      if (lightboxTitle) lightboxTitle.textContent = item.dataset.title || '';
      lightbox.classList.add('is-open');
      lightbox.classList.remove('hidden');
      document.body.classList.add('overflow-hidden');
    });
  });

  const closeLightbox = () => {
    if (!lightbox) return;
    lightbox.classList.remove('is-open');
    lightbox.classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
  };

  lightboxClose?.addEventListener('click', closeLightbox);
  lightbox?.addEventListener('click', (e) => {
    if (e.target === lightbox) closeLightbox();
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && lightbox?.classList.contains('is-open')) closeLightbox();
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initGallery);
} else {
  initGallery();
}
