/**
 * Home page hero auto-slider.
 * Background: crossfade + Ken Burns per slide.
 * Content: wait mode exit (y -20) then enter (y 40), 0.7s each.
 */
function initHeroSlider() {
  const root = document.querySelector('[data-hero-slider]');
  if (!root) return;

  const backgrounds = root.querySelectorAll('[data-hero-bg]');
  const contents = root.querySelectorAll('[data-hero-content]');
  const dots = root.querySelectorAll('[data-hero-dot]');
  const prevBtn = root.querySelector('[data-hero-prev]');
  const nextBtn = root.querySelector('[data-hero-next]');
  if (!contents.length) return;

  let current = 0;
  let timer = null;
  let transitioning = false;

  const wait = (ms) => new Promise((resolve) => setTimeout(resolve, ms));

  const setDots = (index) => {
    dots.forEach((dot, i) => {
      dot.classList.toggle('w-9', i === index);
      dot.classList.toggle('w-2.5', i !== index);
      dot.classList.toggle('bg-litus-primary', i === index);
      dot.classList.toggle('bg-white/35', i !== index);
    });
  };

  const setBackground = (index) => {
    backgrounds.forEach((bg, i) => {
      bg.classList.toggle('is-active', i === index);
    });
  };

  const playEnter = async (content) => {
    content.classList.add('is-active', 'is-entering');
    await wait(700);
    content.classList.remove('is-entering');
  };

  const goTo = async (index) => {
    const next = (index + contents.length) % contents.length;
    if (transitioning || next === current) return;

    transitioning = true;
    if (timer) clearInterval(timer);

    const outgoing = contents[current];
    const incoming = contents[next];

    setBackground(next);
    outgoing.classList.add('is-exiting');

    await wait(700);

    outgoing.classList.remove('is-active', 'is-exiting');
    current = next;
    setDots(current);
    await playEnter(incoming);

    transitioning = false;
    timer = setInterval(() => goTo(current + 1), 5500);
  };

  const restart = (index) => {
    if (transitioning) return;
    if (timer) clearInterval(timer);
    goTo(index);
  };

  dots.forEach((dot, i) => dot.addEventListener('click', () => restart(i)));
  if (prevBtn) prevBtn.addEventListener('click', () => restart(current - 1));
  if (nextBtn) nextBtn.addEventListener('click', () => restart(current + 1));

  setDots(0);
  setBackground(0);

  transitioning = true;
  playEnter(contents[0]).then(() => {
    transitioning = false;
    timer = setInterval(() => goTo(current + 1), 5500);
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initHeroSlider);
} else {
  initHeroSlider();
}
