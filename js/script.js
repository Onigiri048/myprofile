// PCの場合

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
  top:2455,
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
  top: 3405,
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
  top: 4350,
  left: 0,
  behavior: 'smooth'
});
});
});

// iPhone 6/7/8 Plus
if((window.matchMedia('(max-width: 414px)').matches)){
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
  top: 300,
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
  top: 2410,
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
  top: 3550,
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
  top: 4200,
  left: 0,
  behavior: 'smooth'
});
});
});

}


// iPhone 6/7/8/X
if((window.matchMedia('(max-width: 375px)').matches)){
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
  top: 250,
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
  top: 2765,
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
  top: 4070,
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
  top: 4800,
  left: 0,
  behavior: 'smooth'
});
});
});

}
// iPhone 5/SE

if((window.matchMedia('(max-width: 320px)').matches)){
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
  top: 200,
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
  top: 2820,
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
  top: 4200,
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
  top: 4850,
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
