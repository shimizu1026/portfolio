'use strict';

$('.slider').slick({
  fade:true,//切り替えをフェードで行う。初期値はfalse。
  autoplay: true,//自動的に動き出すか。初期値はfalse。
  autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
  speed:1000,//スライドの動きのスピード。初期値は300。
  infinite: true,//スライドをループさせるかどうか。初期値はtrue。
  slidesToShow: 1,//スライドを画面に3枚見せる
  slidesToScroll: 1,//1回のスクロールで3枚の写真を移動して見せる
  arrows: true,//左右の矢印あり
  prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
  nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
  dots: true,//下部ドットナビゲーションの表示
      pauseOnFocus: false,//フォーカスで一時停止を無効
      pauseOnHover: false,//マウスホバーで一時停止を無効
      pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.slider').on('touchmove', function(event, slick, currentSlide, nextSlide){
  $('.slider').slick('slickPlay');
});

// 動きのきっかけの起点となるアニメーションの名前を定義
function blurAnime(){

  // じわっ
  
  $('.blurTrigger').each(function(){ //blurTriggerというクラス名が
    var elemPos = $(this).offset().top-50;//要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('blur');// 画面内に入ったらblurというクラス名を追記
    }else{
    $(this).removeClass('blur');// 画面外に出たらblurというクラス名を外す
    }
    });

}
    // 画面をスクロールをしたら動かしたい場合の記述
    $(window).scroll(function (){
        blurAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面をスクロールをしたら動かしたい場合の記述

  
// 動きのきっかけとなるアニメーションの名前を定義
function fadeAnime(){
    //ふわっと動くきっかけのクラス名と動きのクラス名の設定
    $('.fadeUpTrigger').each(function(){ //fadeInUpTriggerというクラス名が
    var elemPos = $(this).offset().top-50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeUp');
    // 画面内に入ったらfadeInというクラス名を追記
    }else{
    $(this).removeClass('fadeUp');
    // 画面外に出たらfadeInというクラス名を外す
    }
    });
    
    //関数でまとめることでこの後に違う動きを追加することが出来ます
    $('.fadeDownTrigger').each(function(){ //fadeInDownTriggerというクラス名が
    var elemPos = $(this).offset().top-50; //要素より、50px上の
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight){
    $(this).addClass('fadeDown');
    // 画面内に入ったらfadeDownというクラス名を追記
    }else{
    $(this).removeClass('fadeDown');
    // 画面外に出たらfadeDownというクラス名を外す
    }
    });
    
    
    }
    //ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定

    // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function (){
    fadeAnime();/* アニメーション用の関数を呼ぶ*/
  });// ここまで画面をスクロールをしたら動かしたい場合の記述


  //トップに戻るボタンの設定
//スクロールイベント
window.onscroll = function() {
  //現在位置（スクロール値）の取得
  const scrollPosition = window.pageYOffset;

  console.log(scrollPosition);

      //scrollPositionの値が600以上の時は#page-topに.openを追加
      
  if (scrollPosition >= 600) {
      document.getElementById('page-top').classList.add('open');
  }
      //それ以外の時は#page-topから.openを削除
  else {
      document.getElementById('page-top').classList.remove('open');
  }
};


