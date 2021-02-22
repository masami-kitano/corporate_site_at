//swiper.jsのアニメーション
const swiperAnimation = () => {
    let mySwiper = new Swiper('.swiper-container', {
        autoplay: { 
            delay: 3000,
          },
        slidesPerView: 1,
        loop: true,
    });
}
swiperAnimation();