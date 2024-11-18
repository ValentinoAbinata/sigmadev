const scroll = new SmoothScroll('a[href="#banner"]', {
    speed: 1,
    speedAsDuration: true,
    offset: 0 
  });
  
  
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
  },
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 300,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  