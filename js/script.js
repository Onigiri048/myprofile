

// 使用するデバイスがスマホではない時

// トップへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_top").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
});

// aboutへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_about").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 707,
  left: 0,
  behavior: 'smooth'
  });
});
});


// skillへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_skill").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 1647,
  left: 0,
  behavior: 'smooth'
  });
});
});

// worksへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_works").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 2439,
  left: 0,
  behavior: 'smooth'
  });
});
});

// お問い合わせへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_contact").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 3274,
  left: 0,
  behavior: 'smooth'
});
});
});

// iPhone 6/7/8
if(navigator.userAgent.match("(max-width: 320px)")){
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_top").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
});

// aboutへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_about").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 209,
  left: 0,
  behavior: 'smooth'
  });
});
});


// skillへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_skill").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 1441,
  left: 0,
  behavior: 'smooth'
  });
});
});

// worksへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_works").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 2472,
  left: 0,
  behavior: 'smooth'
  });
});
});

// お問い合わせへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_contact").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 3040,
  left: 0,
  behavior: 'smooth'
});
});
});

}


// iPhone X
if(navigator.userAgent.match("(max-width: 375px)")){
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_top").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
});

// aboutへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_about").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 209,
  left: 0,
  behavior: 'smooth'
  });
});
});


// skillへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_skill").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 1441,
  left: 0,
  behavior: 'smooth'
  });
});
});

// worksへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_works").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 2472,
  left: 0,
  behavior: 'smooth'
  });
});
});

// お問い合わせへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_contact").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 3040,
  left: 0,
  behavior: 'smooth'
});
});
});

}
// iPhone SE
if(navigator.userAgent.match("(max-width: 320px)")){
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_top").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
});

// aboutへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_about").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 209,
  left: 0,
  behavior: 'smooth'
  });
});
});


// skillへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_skill").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 1441,
  left: 0,
  behavior: 'smooth'
  });
});
});

// worksへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_works").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 2472,
  left: 0,
  behavior: 'smooth'
  });
});
});

// お問い合わせへジャンプ
document.addEventListener("DOMContentLoaded", function() {
document.getElementById("jump_contact").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 3040,
  left: 0,
  behavior: 'smooth'
});
});
});

}

// スクロールで出現
const pageTopBtn = document.getElementById('js-scroll-top');
window.addEventListener("scroll", () => {
  const currentY = window.pageYOffset;
  if ( currentY > 100){
    setTimeout(function(){
      pageTopBtn.style.opacity = 1;
    }, 1);
  } else {
    setTimeout(function(){
      pageTopBtn.style.opacity = 0;
    }, 1);
  }
});

// スクロールトップボタン
scrollTop('js-scroll-top', 150); // 遅すぎるとガクガクになるので注意

function scrollTop(el, duration) {
  const target = document.getElementById(el);
  target.addEventListener('click', function() {
    let currentY = window.pageYOffset; // 現在のスクロール位置を取得
    let step = duration/currentY > 1 ? 10 : 100; // 三項演算子
    let timeStep = duration/currentY * step; // スクロール時間
    let intervalId = setInterval(scrollUp, timeStep);
    // timeStepの間隔でscrollUpを繰り返す。
    // clearItervalのために返り値intervalIdを定義する。

    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalId); // ページ最上部に来たら終了
      } else {
          scrollBy( 0, -step ); // step分上へスクロール
      }
    }
  });
}