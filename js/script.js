// // グローバル変数
// var syncerTimeout = null ;

// // 一連の処理
// $( function()
// {
// 	// スクロールイベントの設定
// 	$( window ).scroll( function()
// 	{
// 		// 1秒ごとに処理
// 		if( syncerTimeout == null )
// 		{
// 			// セットタイムアウトを設定
// 			syncerTimeout = setTimeout( function(){

// 				// 対象のエレメント
// 				var element = $( '#page-top' ) ;

// 				// 現在、表示されているか？
// 				var visible = element.is( ':visible' ) ;

// 				// 最上部から現在位置までの距離を取得して、変数[now]に格納
// 				var now = $( window ).scrollTop() ;

// 				// 最下部から現在位置までの距離を計算して、変数[under]に格納
// 				var under = $( 'body' ).height() - ( now + $(window).height() ) ;

// 				// 最上部から現在位置までの距離(now)が1500以上かつ
// 				// 最下部から現在位置までの距離(under)が200px以上かつ…
// 				if( now > 1500 && 200 < under )
// 				{
// 					// 非表示状態だったら
// 					if( !visible )
// 					{
// 						// [#page-top]をゆっくりフェードインする
// 						element.fadeIn( 'slow' ) ;
// 					}
// 				}

// 				// 1500px以下かつ
// 				// 表示状態だったら
// 				else if( visible )
// 				{
// 					// [#page-top]をゆっくりフェードアウトする
// 					element.fadeOut( 'slow' ) ;
// 				}

// 				// フラグを削除
// 				syncerTimeout = null ;
// 			} , 1000 ) ;
// 		}
// 	} ) ;

// 	// クリックイベントを設定する
// 	$( '#move-page-top' ).click(
// 		function()
// 		{
// 			// スムーズにスクロールする
// 			$( 'html,body' ).animate( {scrollTop:0} , 'slow' ) ;
// 		}
// 	) ;
// } ) ;


// var element = document.getElementById('target'); // 移動させたい位置の要素を取得
//     var rect = element.getBoundingClientRect();
//     var position = rect.top;    // 一番上からの位置を取得

// function scrollToTop() {
//   scrollTo(0, position);
// }

// function scrollToTop() {
//   scrollTo(0, position);
// }

// function scr_about() {
// window.scroll(0,2500);
// }


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