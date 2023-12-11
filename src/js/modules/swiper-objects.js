export default function swiperService() {

  var swiper1 = new Swiper(".swiper", {
    effect: "slide",
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: "3",
    spaceBetween: 0,
    loop: true,
    autoplay: {
      delay: 3000,
    },
    spaceBetween: 17,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  
}
