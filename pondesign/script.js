'use strict';

//fonts
(function(d) {
  var config = {
    kitId: 'ksb8sbq',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

//hiragino
(function(d) {
  var config = {
    kitId: 'uwt3vxc',
    scriptTimeout: 3000,
    async: true
  },
  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
})(document);

//スクロールイベント

window.addEventListener("scroll", function () {
  // ヘッダーを変数の中に格納する
  const header = document.querySelector(".Header");
  // ○○px以上スクロールしたらヘッダーに「scroll-nav」クラスをつける
  header.classList.toggle("scroll-nav", window.scrollY > 200);
});


//ハンバーガーメニュー
const menu = document.querySelector(".Nav");
      const button = document.querySelector(".Button");
      const overlay = document.querySelector(".Overlay");
      const body = document.body

      const toggleMenu = () => {
        menu.classList.toggle("NavIsOpen");
        overlay.classList.toggle("OverlayIsOpen");
        button.classList.toggle("ButtonIsOpen");
        body.classList.toggle("IsScrollAllowed");
      }

      button.addEventListener("click", () => {
        toggleMenu()
      });

      overlay.addEventListener("click", () => {
        toggleMenu()
      });



//トップへ戻る
const pageTop = document.querySelector('.Top-Btn');
console.log(pageTop);
window.addEventListener('scroll', () => {


  if (window.scrollY > 300) {
    pageTop.style.opacity = "1";
  } else {
    pageTop.style.opacity = "0";
  }

});
function scrollTop() {
  console.log('no');
  window.scroll({
    top:0,
    behavior: "smooth",
  });
}
pageTop.addEventListener("click", scrollTop);


//慣性スクロール
const lenis = new Lenis()

lenis.on('scroll', (e) => {
  console.log(e)
})

function raf(time) {
  lenis.raf(time)
  requestAnimationFrame(raf)
}

requestAnimationFrame(raf)
