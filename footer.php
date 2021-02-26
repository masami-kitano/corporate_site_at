<footer class="l-footer">
    <div id="page-top" class="c-top-btn">
        <img src="<?php echo get_template_directory_uri(); ?>/public/images/return-top.png" alt="トップへ戻る">
    </div>
    <div class="l-footer-contact pt pb">
        <div class="l-footer-contact__inner">
            <div class="l-footer-contact__txt">ご質問・製品カスタマイズ・お見積もりなどお気軽にお問い合わせください。</div>
            <div class="c-link-btn c-link-btn--contact">
                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/contact-btn.png" alt="お問い合わせフォーム">
                </a>
            </div>
        </div>
    </div>
    <div class="l-footer-menu pt pb">
        <div class="l-footer-menu__inner">
            <div class="l-footer-menu__mark">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-menu-logo-pc.png" alt="MENU" class="pc">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-menu-logo-sp.png" alt="MENU" class="sp">
            </div>
            <div class="l-footer-menu__wrapper">
                <ul class="l-footer-menu__list l-footer-menu__list--top">
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-footer-menu__link">ホーム</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('company')); ?>" class="l-footer-menu__link">会社案内</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('strength')); ?>" class="l-footer-menu__link">当社の強み</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('product')); ?>" class="l-footer-menu__link">製品紹介</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('global')); ?>" class="l-footer-menu__link">海外連携</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('category/news')); ?>" class="l-footer-menu__link">新着情報</a></li>
                </ul>
                <ul class="l-footer-menu__list l-footer-menu__list--bottom">
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="l-footer-menu__link">お問い合わせ</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('form')); ?>" class="l-footer-menu__link">見積もり専用フォーム</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('sitemap')); ?>" class="l-footer-menu__link">サイトマップ</a></li>
                    <li class="l-footer-menu__item"><a href="<?php echo esc_url(home_url('policy')); ?>" class="l-footer-menu__link">プライバシーポリシー</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="l-footer-mark mt">
        <div class="l-footer-mark__inner">
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark1.png" alt="ISO 9001"></div>
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark2.png" alt="栃木県 フロンティア企業認証"></div>
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark3.png" alt="商工会経営品質認証企業"></div>
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark4.png" alt="ベンチャーモデル企業認定"></div>
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark5.png" alt="中小企業創造活動促進法認定"></div>
            <div class="l-footer-mark__item"><img src="<?php echo get_template_directory_uri(); ?>/public/images/footer-mark6.png" alt="経営革新計画承認企業"></div>
        </div>
    </div>
    <div class="l-footer-info mt-half mb-half">
        <div class="l-footer-info__company">
            <div class="l-footer-info__name">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/ark-logo.png" alt="アークテック株式会社">
                <span>アークテック株式会社</span>
            </div>
            <div class="l-footer-info__twitter">
                <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/twitter-link.png" alt="アークテック株式会社のTwitter">
                </a>
            </div>
        </div>
        <div class="l-footer-info__address">〒321-0202 栃木県下都賀郡壬おもちゃのまち4-11-16</div>
        <div class="l-footer-info__tel">
            <div class="num">TEL.0282-86-0276</div>
            <div class="fax-num">FAX.0282-86-0365</div>
        </div>
    </div>
    <div class="l-footer-info-copy pt-half pb-half">
        ©Arktech Co.,Ltd All Rights Reserved
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>