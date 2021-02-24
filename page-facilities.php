<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="l-main__bg-container">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-3.png">
        </div>
        <div class="l-main__page-ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/facilities-title.png" alt="設備紹介">
        </div>
    </div>
    <div class="p-fac-about mt">
        <div class="u-ttl">
            <h2>工場内設備について</h2>
        </div>
        <div class="l-main-wl u-title-txt mt-half u-txt-left u-fz-p">
            <p>社内ネットワークにより加工データを加工機に転送、パンチ・レーザーマシン等の加工が開始されます。材料自動倉庫、搬出入装置、金型ＡＴＣ、タレットパンチプレスを装備したＦＭＣの自動運転で、無人省力化が可能になりました。
                <br>また、自社開発の生産管理システムにより受注から在庫管理、進捗管理、出荷管理までがコントロールされています。
                <br>精密板金加工用ファイバーレーザー加工機を導入いたしました。(リニア駆動)
                <br>銅、黄銅、アルミ、チタンなど幅広い材質の加工が可能。
            </p>
        </div>
        <div class="l-main-wl p-fac-img p-fac-img--two mt u-fz-p">
            <div class="p-fac-img__item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/facilities-about1.png" alt="ファイバーレーザー加工機">
                <p>ファイバーレーザー加工機</p>
            </div>
            <div class="p-fac-img__item">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/facilities-about2.png" alt="ファイバーレーザー溶接機">
                <p>ファイバーレーザー溶接機</p>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
