//megamenu1階層目
(() => {
  //
  const trigger = document.querySelectorAll('.hamburger');
  const target = document.querySelectorAll('.navi');
  const overlay = document.querySelectorAll('.navi-overlay');
  const container = document.querySelectorAll('.header div.container');

  container[0].addEventListener('click', (event) => {
    console.log(event);
    event.stopPropagation();
  });
  trigger[0].addEventListener('click', (event) => {
    target[0].classList.toggle('is_active');
    event.stopPropagation();
  });

  overlay[0].addEventListener('click', (event) => {
    target[0].classList.toggle('is_active');
    event.stopPropagation();
  });
})();
