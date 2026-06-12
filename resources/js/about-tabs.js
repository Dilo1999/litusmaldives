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
      btn.classList.toggle('bg-litus-primary', active);
      btn.classList.toggle('text-white', active);
      btn.classList.toggle('bg-transparent', !active);
      btn.classList.toggle('text-litus-primary', !active);
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
