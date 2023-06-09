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

  //fadeIn
  class FadeIn {
    constructor(fadeTarget, fadeTime, fadeTriggerHeight) {
      this.fadeTarget = fadeTarget;
      this.fadeTime = fadeTime;
      this.fadeTriggerHeight = fadeTriggerHeight;
    }
    documentHeight() {
      let documentHeight = document.documentElement.scrollHeight;
      return documentHeight;
    }
    targetFadeSetting() {
      let transition;
      if (this.fadeTime) {
        transition = `transition:all ease-in-out ${this.fadeTime}s; 0s`;
      } else {
        transition = '';
      }
      return transition;
    }
    targetFadeTriggerHeight() {
      let height = Math.round(this.fadeTriggerHeight);
      return height;
    }
    main() {
      let fadeTagetPosithion = [];
      for (let c = 0; c < this.fadeTarget.length; c++) {
        fadeTagetPosithion.push(Math.round(this.fadeTarget[c].getBoundingClientRect().y + window.pageYOffset));
      }
      window.addEventListener('scroll', () => {
        let scrollPosition;
        scrollPosition = Math.round(window.pageYOffset) + Math.round(window.innerHeight);
        fadeTagetPosithion.map((element, index) => {
          if (element < scrollPosition - this.targetFadeTriggerHeight()) {
            this.fadeTarget[index].style.cssText = `opacity:1; transform:none; ${this.targetFadeSetting()}`;
          } else if (this.documentHeight() - this.targetFadeTriggerHeight() < scrollPosition) {
            this.fadeTarget[index].style.cssText = `opacity:1; transform:none; ${this.targetFadeSetting()}`;
          }
        });
      });
    }
  }

  //fadeIn
  class FadeInDefault {
    constructor(fadeTarget, fadeTime, fadeTriggerHeight) {
      this.fadeTarget = fadeTarget;
      this.fadeTime = fadeTime;
      this.fadeTriggerHeight = fadeTriggerHeight;
    }
    targetFadeSetting() {
      let transition;
      if (this.fadeTime) {
        transition = `transition:all ease-in-out ${this.fadeTime}s; 0s`;
      } else {
        transition = '';
      }
      return transition;
    }
    main() {
      window.addEventListener('load', () => {
        for (let c = 0; c < this.fadeTarget.length; c++) {
          this.fadeTarget[c].style.cssText = `opacity:1; transform:none; ${this.targetFadeSetting()}`;
        }
      });
    }
  }
  let fadeTarget = document.querySelectorAll('.js-fadeIn');
  let fadeTarget3 = document.querySelectorAll('.js-fadeIn2');
  let fadeTarget1 = document.querySelectorAll('.js-fadeInDefault');
  let fadeTarget2 = document.querySelectorAll('.js-fadeInDefault2');
  /*
    new fadeIn(fadeTarget,fadeTime,fadeDirection,fadeDistance,fadeTriggerHeight);
    fadeTarget domオブジェクト
    fadeTime フェードする時間
    fadeTriggerHeight　フェード対象の検知座標ほ補正

*/
  let hoge = new FadeIn(fadeTarget, 1, '60');
  let hoge3 = new FadeIn(fadeTarget3, 1, '60');
  let hoge1 = new FadeInDefault(fadeTarget1, 1.5, '60');
  let hoge2 = new FadeInDefault(fadeTarget2, 1.5, '20');
  hoge.main();
  hoge1.main();
  hoge2.main();
  hoge3.main();

  //form処理 validation.php
  const tableError = document.querySelectorAll('.single-table-error td');
  const form = document.querySelector('#single-form');
  if (form !== null) {
    form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(form);
      const response = await fetch('/validation.php', {
        method: 'POST',
        body: formData,
      });

      const data = await response.json();
      let flag = 0;
      for (let i = 0; i < Object.keys(data).length; i++) {
        if (Object.values(data)[i] != 1) {
          if (!Object.values(data)[i]) {
            tableError[i].innerHTML = '入力内容に不備があります';
            flag++;
          } else {
            tableError[i].innerHTML = '&nbsp;';
          }
        }
      }

      if (!flag) {
        const formData = new FormData(form);
        const response = await fetch('/post.php', {
          method: 'POST',
          body: formData,
        });
        location.href = '/thanks';
      }
      flag = 0;
    });
  }
  if (location.href.indexOf('/thanks') > 0) {
    setTimeout(() => {
      location.href = '/';
    }, 5000);
  }
})();
