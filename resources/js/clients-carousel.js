/**
 * About page clients logo carousel — cards + pagination dots.
 */
function initClientsCarousel() {
  const root = document.querySelector('[data-clients-carousel]');
  const track = root?.querySelector('[data-clients-track]');
  const cards = track ? [...track.querySelectorAll('[data-clients-card]')] : [];
  const dots = root ? [...root.querySelectorAll('[data-clients-dot]')] : [];
  if (!root || !track || !cards.length) return;

  let activeIndex = 0;
  let autoTimer = null;
  let ticking = false;

  const syncJustify = () => {
    track.classList.toggle('justify-center', track.scrollWidth <= track.clientWidth + 1);
  };

  const setActive = (index) => {
    activeIndex = (index + cards.length) % cards.length;
    dots.forEach((dot, i) => {
      const isActive = i === activeIndex;
      dot.classList.toggle('bg-litus-accent', isActive);
      dot.classList.toggle('bg-litus-navy/15', !isActive);
    });
  };

  const scrollToIndex = (index, behavior = 'smooth') => {
    setActive(index);
    const card = cards[activeIndex];
    if (!card) return;

    const trackRect = track.getBoundingClientRect();
    const cardRect = card.getBoundingClientRect();
    const delta = cardRect.left - trackRect.left - (trackRect.width - cardRect.width) / 2;
    track.scrollBy({ left: delta, behavior });
  };

  const nearestIndex = () => {
    const trackRect = track.getBoundingClientRect();
    const centerX = trackRect.left + trackRect.width / 2;
    let closest = 0;
    let minDistance = Infinity;

    cards.forEach((card, i) => {
      const rect = card.getBoundingClientRect();
      const distance = Math.abs(rect.left + rect.width / 2 - centerX);
      if (distance < minDistance) {
        minDistance = distance;
        closest = i;
      }
    });

    return closest;
  };

  const onScroll = () => {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => {
      setActive(nearestIndex());
      ticking = false;
    });
  };

  const startAuto = () => {
    if (autoTimer) clearInterval(autoTimer);
    if (cards.length < 2) return;
    autoTimer = setInterval(() => {
      scrollToIndex(activeIndex + 1);
    }, 3500);
  };

  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const index = Number(dot.getAttribute('data-clients-dot'));
      if (Number.isNaN(index)) return;
      scrollToIndex(index);
      startAuto();
    });
  });

  track.addEventListener('scroll', onScroll, { passive: true });
  track.addEventListener('pointerdown', () => {
    if (autoTimer) clearInterval(autoTimer);
  });
  track.addEventListener('pointerup', startAuto);

  requestAnimationFrame(() => {
    syncJustify();
    scrollToIndex(0, 'auto');
    startAuto();
  });

  window.addEventListener('resize', syncJustify);
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initClientsCarousel);
} else {
  initClientsCarousel();
}
