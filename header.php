<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="l-header">
        <div class="l-header__top flex">
            <div class="l-header__msg u-biz-udp">精密板金"企業として 日本初のISO9001登録 <br class="br-only">アークテック株式会社</div>
            <div class="l-header__link flex">
                <div class="l-header__link-item l-header__lang flex pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/language-mark.png">
                    <a href="http://www.arktech.co.jp/english/" class="lang">English &dtrif;</a>
                </div>
                <div class="l-header__link-item l-header__info flex pc">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/tell-mark.png">
                    <div class="l-header__tel">
                        <div class="txt">お電話でのお問い合わせ</div>
                        <div class="num">
                            <a href="tel:0282860276">0282-86-0276<a>
                        </div>
                    </div>
                    <div class="l-header__page-link">
                        <a href="<?php echo esc_url(home_url('policy')); ?>" class="policy">&rtrif; プライバシーポリシー</a>
                        <a href="<?php echo esc_url(home_url('sitemap')); ?>" class="sitemap">&rtrif; サイトマップ</a>
                    </div>
                </div>
                <div class="l-header__sp-lang">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/language-mark.png">
                    <a href="http://www.arktech.co.jp/english/" class="lang">EN</a>
                </div>
            </div>
        </div>
        <div class="l-header__bottom flex">
            <h1 class="l-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/ark-logo.png" alt="アークテック株式会社">
                </a>
            </h1>
            <div class="l-header__menu">
                <input type="checkbox" id="menu-btn-check" class="menu-btn-check">
                <label for="menu-btn-check" class="l-header__menu-toggle sp">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav class="l-header__nav">
                    <ul class="l-header__nav-list u-msp-g font-bold">
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('')); ?>" class="l-header__nav-link">ホーム</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('company')); ?>" class="l-header__nav-link">会社案内</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('strength')); ?>" class="l-header__nav-link">当社の強み</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('product')); ?>" class="l-header__nav-link">製品紹介</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('facility')); ?>" class="l-header__nav-link">設備紹介</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('global')); ?>" class="l-header__nav-link">海外連携</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('category/news')); ?>" class="l-header__nav-link">新着情報</a></li>
                        <li class="l-header__nav-item"><a href="<?php echo esc_url(home_url('contact')); ?>" class="l-header__nav-link">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
            <div class="l-header__since u-msp-g font-bold">Since 1963</div>
        </div>
    </header>