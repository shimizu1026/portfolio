// Toppan Bunkyu Midashi Gothic
  (function(d) {
    var config = {
      kitId: 'kqo4ltc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);


//   Poppins

  (function(d) {
    var config = {
      kitId: 'kqo4ltc',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);

  //   Swiper
  const swiper = new Swiper(".swiper", {
    // Optional parameters
    loop: true,
    spaceBetween: 27,
    slidesPerView: 1,
    centeredSlides: true,
    breakpoints: {
      //980px以上の場合
      980: {
        spaceBetween: 80,
        slidesPerView: 1.5
      },
  },

    pagination: {
      el: ".swiper-pagination",
      clickable: true, // クリック有効化
    },

    // Navigation arrows
    navigation: {
      nextEl: ".swiper-button-next__origin",
      prevEl: ".swiper-button-prev__origin",
    },
  
  });
