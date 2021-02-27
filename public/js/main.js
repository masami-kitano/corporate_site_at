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
    const pageTop = () => {
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

    const ankerScroll = () => {
        $('a[href^="#"]').click(function() {
            const speed = 300;
            const href = $(this).attr("href");

            if ($(href).parent().css('display') == 'none') {
                $(href).parent().css('display', 'block');
            }

            const target = $(href == "#" || href == "" ? 'html' : href);
            const position = target.offset().top;
            $("html, body").animate({ scrollTop: position }, speed, "swing");
            return false;
        });
    }
    ankerScroll();
});

jQuery('#your-zip').keyup(function() {
    AjaxZip3.zip2addr(this, '', 'your-prefecture', 'your-address');
});