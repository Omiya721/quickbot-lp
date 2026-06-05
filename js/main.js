
"use strict";

//タイトル下の線、インビュー
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-active');
            observer.unobserve(entry.target);
        }
    });
}, {
    rootMargin: '0px 0px -10% 0px' 
});

//タイトル下の線
document.querySelectorAll('.c-section-title').forEach(title => {
    observer.observe(title);
});

//インビュー
document.querySelectorAll('.features__item').forEach(item => {
    observer.observe(item);
});

//ご利用の流れ
document.querySelectorAll('.steps__list').forEach(list => {
    observer.observe(list);
});


//アコーディオン
document.querySelectorAll('.js-faq').forEach(el => {
  const summary = el.querySelector('.faq__head');
  const body = el.querySelector('.faq__body');
  let animation = null;

  summary.addEventListener('click', (e) => {
    // ブラウザ標準のパカッという一瞬の動きをキャンセル
    e.preventDefault();

    // すでに動いていたら止める
    if (animation) animation.cancel();

    if (!el.open) {
      // 【開く処理】先にopen属性をつけてから、高さを0→実寸へアニメーション
      el.open = true;
      animation = body.animate([
        { height: 0, opacity: 0 },
        { height: body.scrollHeight + 'px', opacity: 1 }
      ], { duration: 300, easing: 'ease-out' });
    } else {
      // 【閉じる処理】高さを実寸→0へアニメーションし、終わったらopen属性を消す
      animation = body.animate([
        { height: body.scrollHeight + 'px', opacity: 1 },
        { height: 0, opacity: 0 }
      ], { duration: 300, easing: 'ease-out' });

      animation.onfinish = () => el.open = false;
    }
  });
});