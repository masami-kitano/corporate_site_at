<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-1.JPG"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-2.JPG"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-3.JPG"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-4.JPG"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-5.JPG"></div>
                <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/public/images/main-bg-6.JPG"></div>
            </div>
        </div>
        <div class="l-main__copy">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-txt-top.png" alt="Spirit of Monozukuri Pride of Professional World Trading">
        </div>
    </div>
    <div class="p-top">
        <div class="p-top-news pt pb">
            <div class="p-top-news__inner pt pb">
                <div class="u-ttl">
                    <h2><span>新着情報</span></h2>
                    <div class="u-ttl--sub">News</div>
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
                        <div class="no-news u-txt-center">新しい記事はありません</div>
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
            <div class="u-ttl">
                <h2><span>製品紹介</span></h2>
                <div class="u-ttl--sub">Product</div>
            </div>
            <div class="u-title-txt mt">お客様のご要望を最新の設計・加工設備、高度な製造システムが実現します。</div>
            <div class="p-top-product__list mt">
                <?php $args = array(
                    'numberposts' => 6,
                    'post_type' => 'product'
                );
                $posts = get_posts($args);
                if ($posts) : foreach ($posts as $post) : setup_postdata($post); ?>
                        <a href="<?php the_permalink(); ?>" class="p-top-product__card">
                            <div class="vid-area__content">
                                <div class="p-top-product__img">
                                    <div class="p-top-product__name"><?php the_title(); ?></div>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('large');
                                    }
                                    ?>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else : ?>
                    <div class="article-not-found">
                        <p>製品はまだありません。</p>
                    </div>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
            <div class="c-link-btn c-link-btn--detail pt-half pb">
                <a href="<?php echo esc_url(home_url('product')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-navy.png" alt="詳しく見る">
                </a>
            </div>
        </div>
        <div class="p-top-strength pt">
            <div class="u-ttl u-ttl--white">
                <h2><span>アークテックが持つ強み</span></h2>
                <div class="u-ttl--sub">Our Strengths</div>
            </div>
            <div class="u-title-txt u-title-txt--white mt">精密板金業界では初の「ISO09001」の認証を取得した実績と、<br>品質を安定させるための人材育成に取組み、常に最新の技術を提供できる体制を整えています。
            </div>
            <div class="p-top-strength__list mt">
                <div class="p-top-strength__item  p-top-strength__item--first">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>人工技能</span></div>
                        <div class="p-top-strength__txt">高品質の製品を安定して供給するためには、精度の高い生産設備と品質管理体制が必要です。私たちは高度な業務を行う優秀な技術者の育成に取り組んでいます。</div>
                    </div>
                </div>
                <div class="p-top-strength__item p-top-strength__item--second">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>品質システム</span></div>
                        <div class="p-top-strength__txt">精密板金業界で国内初の「ISO9001」の認証を取得。社内外での品質保証体制への高い意識を持ち続け、高品質管理の標準化を実現しています。</div>
                    </div>
                </div>
                <div class="p-top-strength__item p-top-strength__item--third">
                    <div class="p-top-strength__item-inner">
                        <div class="p-top-strength__ttl"><span>WEEE 対応</span></div>
                        <div class="p-top-strength__txt">電気・電子機器廃棄物(WEEE)に関する欧州での流通上の指令にも準拠対応しています。廃棄物回収とリサイクルシステムに適合し環境保全に取り組んでいます。</div>
                    </div>
                </div>
                <div class="c-link-btn c-link-btn--detail pt-half pb">
                    <a href="<?php echo esc_url(home_url('/strength')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-white.png" alt="詳しく見る">
                    </a>
                </div>
            </div>
        </div>
        <div class="p-top-global mt">
            <div class="u-ttl">
                <h2><span>海外連携</span></h2>
                <div class="u-ttl--sub">global cooperation</div>
            </div>
            <div class="p-top-global__visual mt">
                <img src="<?php echo get_template_directory_uri(); ?>/public/images/global-main.png" alt="アークテックが実現する低リスクでの海外生産拠点化">
            </div>
            <div class="c-link-btn c-link-btn--detail pb">
                <a href="<?php echo esc_url(home_url('global')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/public/images/detail-btn-navy.png" alt="詳しく見る">
                </a>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
