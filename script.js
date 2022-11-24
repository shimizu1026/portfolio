'use strict';

//ハンバーガーボタンの設定
document.getElementById('menu-btn').onclick = function(e) {
  e.preventDefault();
  //クラス名の付け外し
  document.getElementById('gnav').classList.toggle('open');

  //クリックイベントが設定されているところに.closeをつけたり外したりする
  this.classList.toggle('close');
};


//トップに戻るボタンの設定
//スクロールイベント
window.onscroll = function() {
  //現在位置（スクロール値）の取得
  const scrollPosition = window.pageYOffset;

  console.log(scrollPosition);

      //scrollPositionの値が300以上の時は#page-topに.openを追加
      
  if (scrollPosition >= 400) {
      document.getElementById('page-top').classList.add('open');
  }
      //それ以外の時は#page-topから.openを削除
  else {
      document.getElementById('page-top').classList.remove('open');
  }
};

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
    
    
    }//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定
    
    // 画面をスクロールをしたら動かしたい場合の記述
      $(window).scroll(function (){
        fadeAnime();/* アニメーション用の関数を呼ぶ*/
      });// ここまで画面をスクロールをしたら動かしたい場合の記述

      //スクロール固定
      <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>