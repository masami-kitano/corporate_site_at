<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="l-main__bg-container">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-sitemap-bg.png">
        </div>
        <div class="l-main__page-ttl">
        <h2><span class="bb">サイトマップ</span><span class="sub">Site Map</span></h2>
        </div>
    </div>
    <div class="l-main-wxl p-sitemap mt">
        <ul class="p-sitemap__list u-msp-g">
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('')); ?>" class="p-sitemap__link"><span class="bb">ホーム</span><span class="sub">Home</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('company')); ?>" class="p-sitemap__link"><span class="bb">会社案内</span><span class="sub">Company</span></a>
                <div class="p-sitemap__sub-item">
                    <a href="<?php echo esc_url(home_url('recruit')); ?>" class="p-sitemap__link--sub"><span class="bb">＞採用情報</span><span class="sub">Recruit</span></a>
                </div>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('strength')); ?>" class="p-sitemap__link"><span class="bb">当社の強み</span><span class="sub">Strength</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('product')); ?>" class="p-sitemap__link"><span class="bb">製品</span><span class="sub">Product</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('facility')); ?>" class="p-sitemap__link"><span class="bb">設備紹介</span><span class="sub">Facility</span></a>
            </li>
            <li class="p-sitemap__item">
                <a class="p-sitemap__link"><span class="bb">海外連携</span><span class="sub">Globalization</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('category/news')); ?>" class="p-sitemap__link"><span class="bb">新着情報</span><span class="sub">New's</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="p-sitemap__link"><span class="bb">お問い合わせ</span><span class="sub">Contact</span></a>
            </li>
            <li class="p-sitemap__item">
                <a href="<?php echo esc_url(home_url('policy')); ?>" class="p-sitemap__link"><span class="bb">プライバシポリシー</span><span class="sub">Privacy Policy</span></a>
            </li>
            <li class="p-sitemap__item">
                <a class="p-sitemap__link"><span class="bb">製品見積もり</span><span class="sub">Product quote</span></a>
            </li>
            <li class="p-sitemap__item">
                <a class="p-sitemap__link"><span class="bb">英語版サイト</span><span class="sub">English edition</span></a>
            </li>
        </ul>
    </div>
</main>

<?php get_footer();
