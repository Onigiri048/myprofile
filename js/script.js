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
  top: 680,
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
  top: 3250,
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
  top: 4150,
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
  top: 5050,
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
  top: 3250,
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
  top: 4400,
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
  top: 5050,
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
  top: 3780,
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
  top: 5090,
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
  top: 5800,
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
  top: 3815,
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
  top: 5200,
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
  top: 5850,
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


  document.addEventListener("DOMContentLoaded", function() {
document.getElementById("js-scroll-top").addEventListener("click", function(event) {
  event.preventDefault();
window.scrollTo({
  top: 0,
  left: 0,
  behavior: 'smooth'
  });
});
});
function scrollTop(el, duration) {
    function scrollUp(){
      currentY = window.pageYOffset;
      if(currentY === 0) {
          clearInterval(intervalId); // ページ最上部に来たら終了
      } else {
          scrollBy( 0, -step ); // step分上へスクロール
      }
    }
  }
