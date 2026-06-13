/**
 * Home services row — center-highlight carousel (desktop: all visible, mobile: scroll).
 */
function initServicesCarousel() {
  const root = document.querySelector('[data-services-carousel]');
  const track = root?.querySelector('[data-services-track]');
  const cards = track ? [...track.querySelectorAll('[data-service-card]')] : [];
  if (!root || !track || !cards.length) return;

  const DESKTOP_QUERY = '(min-width: 1024px)';
  const desktopMedia = window.matchMedia(DESKTOP_QUERY);

  let ticking = false;
  let autoTimer = null;
  let activeIndex = cards.findIndex((card) => card.classList.contains('is-active'));
  if (activeIndex < 0) activeIndex = 3;

  const isDesktop = () => desktopMedia.matches;

  const setActiveIndex = (index) => {
    activeIndex = (index + cards.length) % cards.length;
    cards.forEach((card, i) => {
      card.classList.toggle('is-active', i === activeIndex);
    });
  };

  const getCenterCard = () => {
    const trackRect = track.getBoundingClientRect();
    const centerX = trackRect.left + trackRect.width / 2;

    let closest = cards[0];
    let minDistance = Infinity;

    cards.forEach((card) => {
      const rect = card.getBoundingClientRect();
      const cardCenter = rect.left + rect.width / 2;
      const distance = Math.abs(centerX - cardCenter);
      if (distance < minDistance) {
        minDistance = distance;
        closest = card;
      }
    });

    return closest;
  };

  const scrollCardToCenter = (card, behavior = 'smooth') => {
    const trackRect = track.getBoundingClientRect();
    const cardRect = card.getBoundingClientRect();
    const delta = cardRect.left + cardRect.width / 2 - (trackRect.left + trackRect.width / 2);
    track.scrollBy({ left: delta, behavior });
  };

  const updateActiveFromScroll = () => {
    const centerCard = getCenterCard();
    const index = cards.indexOf(centerCard);
    if (index >= 0) setActiveIndex(index);
    ticking = false;
  };

  const onScroll = () => {
    if (isDesktop()) return;
    if (!ticking) {
      ticking = true;
      requestAnimationFrame(updateActiveFromScroll);
    }
  };

  const activateIndex = (index, behavior = 'smooth') => {
    setActiveIndex(index);
    if (!isDesktop()) {
      scrollCardToCenter(cards[activeIndex], behavior);
    }
  };

  const startAuto = () => {
    if (autoTimer) clearInterval(autoTimer);
    autoTimer = setInterval(() => {
      activateIndex(activeIndex + 1);
    }, 4000);
  };

  track.addEventListener('scroll', onScroll, { passive: true });

  cards.forEach((card, index) => {
    card.addEventListener('click', (event) => {
      if (index !== activeIndex) {
        event.preventDefault();
        activateIndex(index);
      }
    });
  });

  const init = () => {
    activateIndex(activeIndex, 'auto');
    startAuto();
  };

  desktopMedia.addEventListener('change', () => {
    activateIndex(activeIndex, 'auto');
  });

  track.addEventListener('pointerdown', () => {
    if (autoTimer) clearInterval(autoTimer);
  });

  track.addEventListener('pointerup', () => {
    startAuto();
  });

  requestAnimationFrame(init);
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initServicesCarousel);
} else {
  initServicesCarousel();
}
