/**
 * About page vision / mission tabs.
 */
function initAboutTabs() {
  const root = document.querySelector('[data-about-tabs]');
  if (!root) return;

  const buttons = root.querySelectorAll('[data-tab-btn]');
  const panels = root.querySelectorAll('[data-tab-panel]');

  const show = (name) => {
    buttons.forEach((btn) => {
      const active = btn.dataset.tabBtn === name;
      btn.classList.toggle('bg-litus-navy', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('shadow-[0_4px_14px_rgba(14,23,59,0.2)]', active);
      btn.classList.toggle('bg-litus-surface', !active);
      btn.classList.toggle('text-litus-muted', !active);
    });
    panels.forEach((panel) => {
      panel.classList.toggle('is-hidden', panel.dataset.tabPanel !== name);
    });
  };

  buttons.forEach((btn) => {
    btn.addEventListener('click', () => show(btn.dataset.tabBtn));
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initAboutTabs);
} else {
  initAboutTabs();
}
