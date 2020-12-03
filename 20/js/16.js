jQuery(document).ready(function($) {
  var swiper = new Swiper(".swiper-container", {
    loop: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
});
