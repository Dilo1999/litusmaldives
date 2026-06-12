/**
 * Blog category filter.
 */
function initBlogFilter() {
  const root = document.querySelector('[data-blog]');
  if (!root) return;

  const buttons = root.querySelectorAll('[data-blog-filter]');
  const items = root.querySelectorAll('[data-blog-item]');
  const featured = root.querySelector('[data-blog-featured]');

  const filter = (cat) => {
    let firstVisible = null;
    items.forEach((item) => {
      const tag = (item.dataset.tag || '').toLowerCase();
      const match = cat === 'All' || tag.includes(cat.toLowerCase());
      item.classList.toggle('is-hidden', !match);
      if (match && !firstVisible) firstVisible = item;
    });

    if (featured) {
      const featTag = (featured.dataset.tag || '').toLowerCase();
      const showFeatured = cat === 'All' || featTag.includes(cat.toLowerCase());
      featured.classList.toggle('is-hidden', !showFeatured);
    }

    buttons.forEach((btn) => {
      const active = btn.dataset.blogFilter === cat;
      btn.classList.toggle('bg-litus-primary', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('border-litus-primary', active);
      btn.classList.toggle('bg-transparent', !active);
      btn.classList.toggle('text-litus-primary', !active);
      btn.classList.toggle('border-litus-primary/20', !active);
    });
  };

  buttons.forEach((btn) => {
    btn.addEventListener('click', () => filter(btn.dataset.blogFilter));
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initBlogFilter);
} else {
  initBlogFilter();
}
