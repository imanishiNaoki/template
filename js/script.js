//megamenu1階層目
(() => {
  //
  const trigger = document.querySelectorAll('.hamburger');
  const target = document.querySelectorAll('.navi');
  const overlay = document.querySelectorAll('.navi-overlay');

  trigger[0].addEventListener('click', () => {
    target[0].classList.toggle('is_active');
  });

  overlay[0].addEventListener('click', () => {
    target[0].classList.toggle('is_active');
  });
})();
