var swiper = new Swiper('.swiper-container', {
    speed: 600,
    autoplay: 2000,
    parallax: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });