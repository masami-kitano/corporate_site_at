<?php get_header(); ?>

<main class="l-main">
    <div class="l-main__bg relative">
        <div class="l-main__bg-container">
            <img src="<?php echo get_template_directory_uri(); ?>/public/images/main-product-bg.png">
        </div>
        <div class="l-main__page-ttl">
            <h2><span class="bb">製品紹介</span><span class="sub">Product</span></h2>
        </div>
    </div>
    <div class="l-main-wl mt">
        <div class="u-ttl u-a-otf">
            <h2><span>製品製造について</span></h2>
        </div>
        <div class="u-title-txt mt-half u-txt-left u-fz-p u-kozuka">
            <p>お客様のご要望に合わせてカスタム設計が可能です。最新の設計・加工設備、高度な製造システムで実用的な製品加工をいたします。設計・試作～量産まで計画的にご提案いたします。</p>
        </div>
        <div class="p-product-cat mt mb">
            <div class="p-product-cat__ttl p-product__ttl u-a-otf">
                <a href="<?php echo esc_url(home_url('product')); ?>" class="p-product-cat__all-link u-fz-p">>> ALL</a>
                製品カテゴリー
            </div>
            <div class="p-product-cat__list">
                <ul class="p-product-cat__list-inner u-kozuka">
                    <?php $terms = get_terms('product_cat');
                    foreach ($terms as $term) : ?>
                        <li class="p-product-cat__item u-fz-p"><a href="<?php echo get_term_link($term) ?>">>> <?php echo $term->name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="p-product-type mt mb">
            <?php if (have_posts()) : ?>
                <div class="p-product-type__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="p-product-type__item">
                            <a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" class="p-product-type__link">
                                <h2 class="p-product-type__ttl u-a-otf"><?php the_title(); ?></h2>
                                <div class="p-product-type__content">
                                    <div class="p-product-type__img">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('large');
                                        }
                                        ?>
                                    </div>
                                    <div class="p-product-type__expert u-kozuka">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php if (paginate_links()) :
            ?>
                <div class="pagenation">
                    <?php
                    echo
                    paginate_links(
                        array(
                            'end_size' => 0,
                            'mid_size' => 1,
                            'prev_next' => true,
                            'prev_text' => '<i class="fas fa-angle-left"></i>',
                            'next_text' => '<i class="fas fa-angle-right"></i>',
                        )
                    );
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer();
