
"use strict";

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