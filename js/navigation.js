/* Pillar Legal Marketing — mobile menu */
(function () {
  var openBtn = document.querySelector('[data-menu-open]');
  var menu = document.getElementById('site-menu');
  if (!openBtn || !menu) return;

  function isOpen() {
    return menu.classList.contains('is-open');
  }

  function open() {
    menu.classList.add('is-open');
    openBtn.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    var closeBtn = menu.querySelector('.menu-panel [data-menu-close]');
    if (closeBtn) closeBtn.focus();
  }

  function close() {
    menu.classList.remove('is-open');
    openBtn.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
    openBtn.focus();
  }

  openBtn.addEventListener('click', open);
  menu.querySelectorAll('[data-menu-close]').forEach(function (el) {
    el.addEventListener('click', function () {
      if (!isOpen()) return; // desktop: links behave normally
      if (el.tagName === 'A') {
        menu.classList.remove('is-open');
        openBtn.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      } else {
        close();
      }
    });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && isOpen()) close();
  });

  // If the window is resized past the mobile breakpoint while open, reset state
  var desktop = window.matchMedia('(min-width: 861px)');
  desktop.addEventListener('change', function (e) {
    if (e.matches && isOpen()) {
      menu.classList.remove('is-open');
      openBtn.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    }
  });
})();
