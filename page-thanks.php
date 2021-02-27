<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="l-main__bg-container">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-contact-bg.png">
        </div>
        <div class="l-main__page-ttl">
            <h2><span class="bb">お問い合わせ</span><span class="sub">Contact</span></h2>
        </div>
    </div>
    <div class="l-main-wl p-form-top mt">
        <div class="p-form-top__txt u-fz-sub-head">
            アークテックは皆様からのお声を大切にし、よりよい製品開発やサービス提供に努めております。ご意見、ご感想、ご要望など、お気軽にお寄せください。後ほど担当者より折り返し返答させていただきます。またお問い合わせの内容により、返信させていただくまでにお時間を頂戴する場合もございます。あらかじめご了承ください。
        </div>
        <div class="p-form-top__tel">
            <div class="p-form-top__tel-inner">
                <div class="p-form-top__tel-mark">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/form-tel-mark.png">
                </div>
                <div class="p-form-top__tel-txt">
                    <p>お問い合わせはお電話でも受付ております。</p>
                    <p>ＴＥＬ．０２８２-８６-０２７</p>
                    <p>【受付時間】 8：00～17：00（土日祝・夏期休暇・年末年始・会社休業日を除く）</p>
                </div>
            </div>
        </div>
    </div>
    <div class="p-form-container-wrapper">
        <div class="l-main-wl mt p-form-step-wrapper">
            <div class="p-form-step">
                <ul class="p-form-step__list">
                    <li class="p-form-step__item p-form-step__item1">
                        <p class="p-form-step__item-inner gray"><span class="small">1</span><span class="txt">情報の入力</span></p>
                    </li>
                    <li class="p-form-step__item p-form-step__item2">
                        <p class="p-form-step__item-inner gray"><span class="small">2</span><span class="txt">入力内容の確認</span></p>
                    </li>
                    <li class="p-form-step__item p-form-step__item3 now">
                        <p class="p-form-step__item-inner navy"><span class="small">3</span><span class="txt">受付完了</span></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="p-form-contents-wrapper mb">
            <?php echo do_shortcode('[mwform_formkey key="29"]'); ?>
        </div>
</main>

<?php get_footer();
