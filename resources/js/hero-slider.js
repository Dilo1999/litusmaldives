/**
 * Home hero slider — matches React Home.tsx (VerticalTileWipe, MosaicReveal, HorizontalBlinds).
 */
function initHeroSlider() {
  const root = document.querySelector('[data-hero-slider]');
  if (!root) return;

  const baseImg = root.querySelector('[data-hero-base]');
  const effectRoot = root.querySelector('[data-hero-effect]');
  const copyInner = root.querySelector('[data-hero-copy-inner]');
  const eyebrowEl = root.querySelector('[data-hero-eyebrow]');
  const h1El = root.querySelector('[data-hero-h1]');
  const h2El = root.querySelector('[data-hero-h2]');
  const subEl = root.querySelector('[data-hero-sub]');
  const ctaLabel = root.querySelector('[data-hero-cta-label]');
  const secondaryLabel = root.querySelector('[data-hero-secondary-label]');
  const dots = [...root.querySelectorAll('[data-hero-dot]')];
  const prevBtn = root.querySelector('[data-hero-prev]');
  const nextBtn = root.querySelector('[data-hero-next]');

  let slides = [];
  try {
    if (root.dataset.heroSlides) {
      slides = JSON.parse(root.dataset.heroSlides);
    } else {
      const slidesEl = root.querySelector('[data-hero-slides]');
      slides = JSON.parse(slidesEl?.textContent?.trim() || '[]');
    }
  } catch {
    return;
  }

  if (!baseImg || !effectRoot || !Array.isArray(slides) || slides.length < 2) return;

  const TRANS_DURATION = 980;
  const INTERVAL_MS = 5500;

  let slide = 0;
  let prevSlide = null;
  let transitioning = false;
  let timer = null;
  let transTimer = null;

  const cssUrl = (src) => `url("${String(src).replace(/"/g, '\\"')}")`;

  slides.forEach((s) => {
    if (!s?.image) return;
    const img = new Image();
    img.src = s.image;
  });

  const setDots = (index) => {
    dots.forEach((dot, i) => {
      const active = i === index;
      const mark = dot.querySelector('[data-hero-dot-mark]');
      const num = dot.querySelector('[data-hero-dot-num]');

      if (mark) {
        mark.style.background = active ? '#06B6D4' : 'rgba(255,255,255,0.35)';
        mark.style.boxShadow = active ? '0 0 0 4px rgba(6,182,212,0.25)' : 'none';
      }

      if (num) {
        num.classList.toggle('text-litus-accent', active);
        num.classList.toggle('text-white/45', !active);
      }

      // Fallback for legacy horizontal pill dots
      if (!mark) {
        dot.style.width = active ? '28px' : '8px';
        dot.style.height = '8px';
        dot.style.borderRadius = '4px';
        dot.style.background = active ? '#06B6D4' : 'rgba(255,255,255,0.35)';
      }
    });
  };

  const animateCopy = (index) => {
    const s = slides[index];
    if (!s || !copyInner) return;

    copyInner.classList.remove('hero-copy-enter');
    void copyInner.offsetWidth;
    copyInner.classList.add('hero-copy-enter');

    if (eyebrowEl) eyebrowEl.textContent = s.eyebrow || '';
    if (h1El) h1El.textContent = s.h1;
    if (h2El) h2El.textContent = s.h2;
    if (subEl) subEl.textContent = s.sub;
    if (ctaLabel) ctaLabel.textContent = s.cta;
    if (secondaryLabel) secondaryLabel.textContent = s.secondary_cta || 'CONTACT Us';
  };

  const buildWipe = (src) => {
    const wrap = document.createElement('div');
    wrap.className = 'hero-fx-layer';
    const N = 10;

    for (let c = 0; c < N; c += 1) {
      const tile = document.createElement('div');
      tile.className = 'hero-fx-wipe-tile';
      tile.style.left = `${(c / N) * 100}%`;
      tile.style.width = `${100 / N}%`;
      tile.style.setProperty('--hero-delay', `${c * 50}ms`);

      const inner = document.createElement('div');
      inner.className = 'hero-fx-wipe-inner';
      inner.style.left = `-${c * 100}%`;
      inner.style.width = `${N * 100}%`;
      inner.style.backgroundImage = cssUrl(src);

      tile.appendChild(inner);
      wrap.appendChild(tile);
    }

    return wrap;
  };

  const buildMosaic = (src) => {
    const wrap = document.createElement('div');
    wrap.className = 'hero-fx-layer';
    const COLS = 10;
    const ROWS = 6;
    const TOTAL = COLS * ROWS;
    const order = Array.from({ length: TOTAL }, (_, i) => i).sort(() => Math.random() - 0.5);

    for (let idx = 0; idx < TOTAL; idx += 1) {
      const c = idx % COLS;
      const r = Math.floor(idx / COLS);
      const delay = (order.indexOf(idx) / TOTAL) * 550;

      const tile = document.createElement('div');
      tile.className = 'hero-fx-mosaic-tile';
      tile.style.left = `${(c / COLS) * 100}%`;
      tile.style.top = `${(r / ROWS) * 100}%`;
      tile.style.width = `${100 / COLS}%`;
      tile.style.height = `${100 / ROWS}%`;
      tile.style.setProperty('--hero-delay', `${delay}ms`);

      const inner = document.createElement('div');
      inner.className = 'hero-fx-mosaic-inner';
      inner.style.top = `-${r * 100}%`;
      inner.style.left = `-${c * 100}%`;
      inner.style.width = `${COLS * 100}%`;
      inner.style.height = `${ROWS * 100}%`;
      inner.style.backgroundImage = cssUrl(src);

      tile.appendChild(inner);
      wrap.appendChild(tile);
    }

    return wrap;
  };

  const buildBlinds = (src) => {
    const wrap = document.createElement('div');
    wrap.className = 'hero-fx-layer';
    const N = 8;

    for (let r = 0; r < N; r += 1) {
      const strip = document.createElement('div');
      strip.className = 'hero-fx-blind-strip';
      strip.style.top = `${(r / N) * 100}%`;
      strip.style.height = `${100 / N}%`;
      strip.style.setProperty('--hero-delay', `${r * 60}ms`);

      const inner = document.createElement('div');
      inner.className = 'hero-fx-blind-inner';
      inner.style.top = `-${r * 100}%`;
      inner.style.height = `${N * 100}%`;
      inner.style.backgroundImage = cssUrl(src);

      strip.appendChild(inner);
      wrap.appendChild(strip);
    }

    return wrap;
  };

  const renderEffect = (s) => {
    if (s.effect === 'mosaic') return buildMosaic(s.image);
    if (s.effect === 'blinds') return buildBlinds(s.image);
    return buildWipe(s.image);
  };

  const clearEffect = () => {
    effectRoot.replaceChildren();
    root.classList.remove('is-hero-transitioning');
  };

  const mountEffect = (incoming) => {
    clearEffect();
    root.classList.add('is-hero-transitioning');

    const fx = renderEffect(incoming);
    effectRoot.appendChild(fx);

    // Kick off CSS animations on freshly inserted nodes
    void effectRoot.offsetWidth;
    requestAnimationFrame(() => {
      fx.querySelectorAll('[class*="hero-fx-"]').forEach((el) => {
        el.style.animation = 'none';
        void el.offsetWidth;
        el.style.animation = '';
      });
    });
  };

  const finishTransition = () => {
    baseImg.src = slides[slide].image;
    clearEffect();
    prevSlide = null;
    transitioning = false;
  };

  const startTimer = () => {
    if (timer) clearInterval(timer);
    timer = setInterval(() => {
      goTo((slide + 1) % slides.length);
    }, INTERVAL_MS);
  };

  const goTo = (index) => {
    const next = ((index % slides.length) + slides.length) % slides.length;
    if (next === slide || transitioning) return;

    transitioning = true;
    prevSlide = slide;
    slide = next;

    if (transTimer) clearTimeout(transTimer);

    const incoming = slides[next];
    mountEffect(incoming);
    animateCopy(next);
    setDots(next);

    transTimer = setTimeout(finishTransition, TRANS_DURATION);
  };

  const manualGoTo = (index) => {
    goTo(index);
    startTimer();
  };

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => manualGoTo(i));
  });

  if (prevBtn) {
    prevBtn.addEventListener('click', () => manualGoTo((slide - 1 + slides.length) % slides.length));
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => manualGoTo((slide + 1) % slides.length));
  }

  if (copyInner) copyInner.classList.add('hero-copy-enter');
  setDots(0);
  startTimer();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initHeroSlider);
} else {
  initHeroSlider();
}
