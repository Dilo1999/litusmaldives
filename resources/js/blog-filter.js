/**
 * Blog category filter — matches React Blog.tsx behaviour.
 */
function initBlogFilter() {
  const root = document.querySelector('[data-blog]');
  if (!root) return;

  const buttons = root.querySelectorAll('[data-blog-filter]');
  const featuredCards = [...root.querySelectorAll('[data-blog-featured]')];
  const gridItems = [...root.querySelectorAll('[data-blog-item]')];

  const matches = (tag, cat) => {
    if (cat === 'All') return true;
    return (tag || '').toLowerCase().includes(cat.toLowerCase());
  };

  const filter = (cat) => {
    const matchingSlugs = featuredCards
      .filter((card) => matches(card.dataset.tag, cat))
      .map((card) => card.dataset.slug);

    featuredCards.forEach((card) => {
      card.classList.toggle('hidden', card.dataset.slug !== matchingSlugs[0]);
    });

    gridItems.forEach((item) => {
      const slug = item.dataset.slug;
      const index = matchingSlugs.indexOf(slug);
      item.classList.toggle('hidden', index <= 0);
    });

    buttons.forEach((btn) => {
      const active = btn.dataset.blogFilter === cat;
      btn.classList.toggle('bg-litus-navy', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('shadow-[0_4px_14px_rgba(14,23,59,0.2)]', active);
      btn.classList.toggle('bg-white', !active);
      btn.classList.toggle('text-litus-muted', !active);
      btn.classList.toggle('shadow-[0_2px_8px_rgba(14,23,59,0.07)]', !active);
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
