export default function swiperService() {
  // Swiper 1
  // var swiper1 = new Swiper(".swiper-one", {
  //   effect: "slide",
  //   grabCursor: true,
  //   centeredSlides: false,
  //   slidesPerView: 3,
  //   spaceBetween: 17,
  //   lazyLoading: true,
  //   loop: true,
  //   autoplay: {
  //     delay: 3000,
  //   },
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   breakpoints: {
  //     // when window width is >= 320px
  //     768: {
  //       slidesPerView: 3,
  //       spaceBetween: 20,
  //     },
  //     // when window width is >= 320px (typical mobile)
  //     320: {
  //       slidesPerView: 1.5,
  //       spaceBetween: 20,
  //     },
     
  //   },
  // });

  // // Swiper 2
  // var swiper2 = new Swiper(".swiper-two", {
  //   effect: "slide",
  //   grabCursor: true,
  //   centeredSlides: false,
  //   slidesPerView: 3,
  //   spaceBetween: 17,
  //   lazyLoading: true,
  //   loop: true,
  //   navigation: {
  //     nextEl: '.modal-swiper-button-next',
  //     prevEl: '.modal-swiper-button-prev',
  //   },
  //   breakpoints: {
  //     // when window width is >= 320px
  //     768: {
  //       slidesPerView: 3,
  //       spaceBetween: 20,
  //     },
  //     // when window width is >= 320px (typical mobile)
  //     320: {
  //       slidesPerView: 1.5,
  //       spaceBetween: 20,
  //     },
     
  //   },
  // });


  document.querySelectorAll(".swiper").forEach(function (s) {
    let next = s.querySelector(".swiper-button-next ");
    let prev = s.querySelector(".swiper-button-prev");
  
    new Swiper(s, {
          effect: "slide",
    grabCursor: true,
    centeredSlides: false,
    slidesPerView: 1,
    spaceBetween: 17,
    lazyLoading: true,
    loop: true,
      navigation: {
        nextEl: next,
        prevEl: prev
      },
          breakpoints: {
      // when window width is >= 320px
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      // when window width is >= 320px (typical mobile)
      320: {
        slidesPerView: 1.5,
        spaceBetween: 20,
      },
     
    },
      
    });
  });
}
