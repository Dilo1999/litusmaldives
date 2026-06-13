function initFaq() {
  const root = document.querySelector('[data-faq]');
  if (!root) return;

  const toggles = [...root.querySelectorAll('[data-faq-toggle]')];

  toggles.forEach((toggle) => {
    toggle.addEventListener('click', () => {
      const index = toggle.dataset.faqToggle;
      const panel = root.querySelector(`[data-faq-panel="${index}"]`);
      const icon = root.querySelector(`[data-faq-icon="${index}"]`);
      const isOpen = panel && !panel.classList.contains('hidden');

      root.querySelectorAll('[data-faq-panel]').forEach((el) => el.classList.add('hidden'));
      root.querySelectorAll('[data-faq-icon]').forEach((el) => {
        el.classList.remove('rotate-180', 'text-litus-accent');
        el.classList.add('text-[#b0bcd0]');
      });

      if (!isOpen && panel) {
        panel.classList.remove('hidden');
        icon?.classList.add('rotate-180', 'text-litus-accent');
        icon?.classList.remove('text-[#b0bcd0]');
      }
    });
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initFaq);
} else {
  initFaq();
}
