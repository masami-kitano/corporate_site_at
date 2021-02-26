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
                    <li class="p-form-step__item p-form-step__item1 now">
                        <p><span class="small">1</span><span class="txt">情報の入力</span></p>
                    </li>
                    <li class="p-form-step__item p-form-step__item2">
                        <p><span class="small">2</span><span class="txt">入力内容の確認</span></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/form-step-ar-navy.png" class="step-ar step-ar-now pc">
                    </li>
                    <li class="p-form-step__item p-form-step__item3">
                        <p><span class="small">3</span><span class="txt">受付完了</span></p>
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/form-step-ar-gray.png" class="step-ar pc">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/form-step-ar-gray-last.jpg" class="step-ar-last pc">
                    </li>
                </ul>
            </div>
        </div>
        <!--** Contents *********************************************-->
        <div class="p-form-contents-wrapper">
            <div class="p-form-contents-area">
                <form role="form" action="" method="post" enctype="multipart/form-data">
                    <div class="outline-area txt-only-box">
                        <div class="outline-inner">
                            <div class="txt-area"><span class="main-error">必須</span>項目は入力必須となりますので、必ずご記入をお願いします。</div>
                        </div>
                    </div>
            </div>

            <!--== お問い合わせ項目 =====================-->
            <div class="p-form-box p-form-box--first p-form-radio">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">お問い合わせ項目</span>
                    </div>
                    <div class="p-form-box__item-input p-form-box__item-radio">
                        <p>
                            <input type="radio" name="inquiryItem" value="アークテックについて">アークテックについて<br />
                            <input type="radio" name="inquiryItem" value="製品について">製品について<br />
                            <input type="radio" name="inquiryItem" value="具体的な見積り・提案が欲しい">具体的な見積り・提案が欲しい<br />
                            <input type="radio" name="inquiryItem" value="採用について">採用について<br />
                            <input type="radio" name="inquiryItem" value="その他">その他
                        </p>
                    </div>
                </div>
            </div>
            <!--== //お問い合わせ項目 =====================-->

            <!--== お名前 =====================-->
            <div class="p-form-box p-form-name-box01">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">お名前</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt" type="text" autocorrect="off" autocapitalize="off" name="col__523__9__0__0" value="" placeholder="山田　太郎">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //お名前 =====================-->

            <!--== フリガナ =====================-->
            <div class="p-form-box p-form-name-box01">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">フリガナ</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt" type="text" autocorrect="off" autocapitalize="off" name="col__523__9__0__0" value="" placeholder="ヤマダ　タロウ">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //フリガナ =====================-->

            <!--== 会社名 =====================-->
            <div class="p-form-box item-textbox-single">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="any">会社名</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt input-size-m" type="text" autocorrect="off" autocapitalize="off" name="col__524__1__0__0" value="" placeholder="会社に所属されている方はご記入ください">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //会社名 =====================-->

            <!--== 郵便番号 =====================-->
            <div class="p-form-box item-textbox-single">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">郵便番号</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p class="zipcode">
                            <input class="input-txt width01" type="text" autocorrect="off" autocapitalize="off" value="" name="col__525__13__0__0">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //郵便番号 =====================-->

            <!--== ご住所 =====================-->
            <div class="p-form-box item-address-box01">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">ご住所</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <div class="address-input">
                            <div class="col2-box-wrap">
                                <div class="col2-box">
                                    <div class="sub-item-title"><span>都道府県</span></div>
                                    <div class="sub-item-input">
                                        <p>
                                            <input class="input-txt width01" type="text" autocorrect="off" autocapitalize="off" value="" name="col__525__13__1__0">
                                        </p>
                                    </div>
                                </div>
                                <div class="col2-box">
                                    <div class="sub-item-title"><span>市区町村番地</span></div>
                                    <div class="sub-item-input">
                                        <p>
                                            <input class="input-txt width02" type="text" autocorrect="off" autocapitalize="off" value="" name="col__525__13__2__0">
                                        </p>
                                    </div>
                                </div>
                                <div class="col2-box">
                                    <div class="sub-item-title"><span>マンション/ビル名</span></div>
                                    <div class="sub-item-input">
                                        <p>
                                            <input class="input-txt width03" type="text" autocorrect="off" autocapitalize="off" value="" name="col__525__13__3__0">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== //住所 END =====================-->

            <!--== 電話番号 =====================-->
            <div class="p-form-box item-tel-box01-single">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">電話番号</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt" type="text" autocorrect="off" autocapitalize="off" name="col__526__11__0__0" value="" placeholder="０１２３-４５-６７８９">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //電話番号 =====================-->

            <!--== FAX番号 =====================-->
            <div class="p-form-box item-tel-box01-single">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="any">FAX番号</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt" type="text" autocorrect="off" autocapitalize="off" name="col__526__11__0__0" value="" placeholder="０１２３-４５-６７８９">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //FAX番号 =====================-->

            <!--== メールアドレス =====================-->
            <div class="p-form-box item-mail-box02">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">メールアドレス<br>(半角英数字記号)</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <input class="input-txt width01" type="text" autocorrect="off" autocapitalize="off" name="col__527__10__0__0" placeholder="abc@arktech.co.jp">
                        </p>
                    </div>
                </div>
            </div>
            <!--== //メールアドレス =====================-->

            <!--== お問い合わせ内容 =====================-->
            <div class="p-form-box item-textarea">
                <div class="p-form-box__table">
                    <div class="p-form-box__item-ttl">
                        <span class="error">お問い合わせ内容</span>
                    </div>
                    <div class="p-form-box__item-input">
                        <p>
                            <textarea class="input-txt" rows="5" name="col__521__2__0__0" autocorrect="off" autocapitalize="off" placeholder="お問い合わせの内容をご記入ください"></textarea>
                        </p>
                    </div>
                </div>
            </div>
            <!--== //お問い合わせ内容 =====================-->

            <!--== bottom btn =====================-->
            <div class="p-bottom-btn-wrapper mb">
                <div class="p-bottom-btn-area">
                    <p class="step01-btn">
                        <input name="submit" type="submit" value="＞入力内容の確認画面へ" />
                    </p>
                </div>
            </div>
            <!--//bottom-btn-wrapper-->
            <!--== //bottom btn =====================-->
            </form>
        </div>
        <!--//contents-area-->
    </div>
    <!--//contents-wrapper-->
    </div>
</main>





<?php get_footer();
