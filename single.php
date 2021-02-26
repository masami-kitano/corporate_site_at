<?php get_header(); ?>
<div id="content">
    <article class="p-single">
        <div class="p-single__container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <section <?php post_class(); ?>>
                        <div class="p-single__inner">
                            <div class="p-single__date">
                                <?php the_time('Y.m.d'); ?>
                            </div>
                            <h1 class="p-single__title"><?php the_title(); ?></h1>
                            <div class="p-single__category"><?php the_category(','); ?></div>
                            <div class="p-single__wrap">
                                <div class="p-single__header">
                                    <div class="p-single__body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="r-l-arrow clearfix">
                        <div class="leftcol"><?php previous_post_link('%link', '&laquo; 前のニュースへ'); ?></div>
                        <div class="rightcol"><?php next_post_link('%link', '次のニュースへ &raquo;'); ?></div>
                    </section>
                <?php endwhile; ?>
            <?php else : ?>
                <h2>投稿がみつかりません。</h2>
                <p><a href="<?php echo esc_url(home_url('/')); ?>">トップページに戻る</a></p>
            <?php endif; ?>
        </div>
    </article>
</div>
<?php get_footer();
