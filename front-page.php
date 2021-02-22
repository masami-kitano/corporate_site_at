<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-1.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-2.png"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-3.png"></div>
            </div>
        </div>
        <div class="l-main__copy absolute-center">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-txt-top.png" alt="Spirit of Monozukuri Pride of Professional World Trading">
        </div>
    </div>
    <div class="p-top">
        <div class="p-top-news pt pb">
            <div class="p-top-news__inner pt pb">
                <div class="c-ttl">
                    <h2>新着情報</h2>
                    <div class="c-ttl--sub">News</div>
                </div>
                <div class="p-top-news__list">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5
                    );
                    $query = new WP_Query($args);
                    ?>
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <a href="<?php the_permalink(); ?>" class="p-top-news__item">
                                <div class="day"><?php the_time('Y/m/d'); ?></div>
                                <div class="title"><?php the_title(); ?></div>
                            </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="no-news">新しい記事はありません</div>
                    <?php endif; ?>
                </div>
                <div class="c-link-btn c-link-btn--news pt-half">
                    <a href="<?php echo esc_url(home_url('/category/news')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/new-btn.png" alt="新着情報一覧を見る">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-top-product mt">
            <div class="c-ttl">
                <h2>製品紹介</h2>
                <div class="c-ttl--sub">Product</div>
            </div>
            <div class="c-title-txt mt">お客様のご要望を最新の設計・加工設備、高度な製造システムが実現します。</div>
            <div class="p-top-product__list mt">
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product1.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product2.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product3.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product4.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product5.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product5.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product3.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
                <div class="p-top-product__card">
                    <div class="p-top-product__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/product4.png">
                    </div>
                    <div class="p-top-product__name">製品名</div>
                </div>
            </div>
            <div class="c-link-btn c-link-btn--detail pt-half pb">
                <a href="<?php echo esc_url(home_url('/category/news')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-navy.png" alt="詳しく見る">
                </a>
            </div>
        </div>
        <div class="p-top-strength pt">
            <div class="c-ttl c-ttl--white">
                <h2>アークテックが持つ強み</h2>
                <div class="c-ttl--sub">Our Strengths</div>
            </div>
            <div class="c-title-txt c-title-txt--white mt">精密板金業界では初の「ISO09001」の認証を取得した実績と、<br>品質を安定させるための人材育成に取組み、常に最新の技術を提供できる体制を整えています。
            </div>
            <div class="p-top-strength__list mt">
                <div class="p-top-strength__item  p-top-strength__item--first">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>人工技能</span></div>
                        <div class="p-top-strength__txt">テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。</div>
                    </div>
                </div>
                <div class="p-top-strength__item p-top-strength__item--second">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>品質システム</span></div>
                        <div class="p-top-strength__txt">テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。</div>
                    </div>
                </div>
                <div class="p-top-strength__item p-top-strength__item--third">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>WEEE 対応</span></div>
                        <div class="p-top-strength__txt">テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。テキストを入力します。</div>
                    </div>
                </div>
                <div class="c-link-btn c-link-btn--detail pt-half pb">
                    <a href="<?php echo esc_url(home_url('/category/news')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-white.png" alt="詳しく見る">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-top-global mt">
            <div class="c-ttl">
                <h2>海外連携</h2>
                <div class="c-ttl--sub">global cooperation</div>
            </div>
            <div class="p-top-global__visual mt">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/global-main.png" alt="アークテックが実現する低リスクでの海外生産拠点化">
            </div>
            <div class="c-link-btn c-link-btn--detail pb">
                <a href="<?php echo esc_url(home_url('/category/news')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-navy.png" alt="詳しく見る">
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
