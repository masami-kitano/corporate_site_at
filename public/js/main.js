/*-------------------------
 swiper.jsのアニメーション
---------------------------*/
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

jQuery(function($) {
    /*-------------------------
     return top
    ---------------------------*/
    function pageTop() {
        const topBtn = $('#page-top');
        topBtn.hide();
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                topBtn.fadeIn();
            } else {
                topBtn.fadeOut();
            }
        });
        topBtn.click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    }
    pageTop();
});