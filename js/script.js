//megamenu1階層目
(() => {
  let trigger = document.querySelectorAll('a[name="js-megamenu1"]');
  let target = document.querySelectorAll('.megamenu1-list');

  for (let c = 0; c < trigger.length; c++) {
    trigger[c].addEventListener('mouseover', () => {
      target[c].classList.add('is_active');
    });
    trigger[c].addEventListener('mouseleave', () => {
      target[c].classList.remove('is_active');
    });

    target[c].addEventListener('mouseover', () => {
      target[c].classList.add('is_active');
    });
    target[c].addEventListener('mouseleave', () => {
      target[c].classList.remove('is_active');
    });
  }
})();

//megamenu2階層目
(() => {
  let trigger = document.querySelectorAll('a[name="js-megamenu2"]');
  let target = document.querySelectorAll('.megamenu2-list');

  for (let c = 0; c < trigger.length; c++) {
    trigger[c].addEventListener('mouseover', () => {
      target[c].classList.add('is_active');
    });
    trigger[c].addEventListener('mouseleave', () => {
      target[c].classList.remove('is_active');
    });

    target[c].addEventListener('mouseover', () => {
      target[c].classList.add('is_active');
    });
    target[c].addEventListener('mouseleave', () => {
      target[c].classList.remove('is_active');
    });
  }
})();
