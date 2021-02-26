<?php get_header(); ?>
<main class="l-main">
    <div class="p-archive">
        <div class="p-archive__inner">
            <div class="p-archive-post">
                <div class="archive-header">
                    <h1 class="archive-header__title"><?php single_cat_title(); ?></h1>
                </div>

                <?php if (have_posts()) : ?>
                    <div class="p-archive-post__wrap">
                        <?php

                        while (have_posts()) :
                            the_post();
                        ?>
                            <a id="post-<?php the_ID(); ?>" href="<?php the_permalink(); ?>" class="p-archive-post__item">
                                <div class="p-archive-post__img">
                                    <?php
                                    if (has_post_thumbnail()) {

                                        the_post_thumbnail('large');
                                    } else {
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.png" alt="TSサービス株式会社">';
                                    }
                                    ?>
                                </div>

                                <div class="p-archive-post__content">
                                    <div class="p-archive-post__meta p-archiveegory-news">
                                        <time class="published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    </div>
                                    <h2 class="p-archive-post__title"><?php the_title(); ?></h2>
                                    <div class="p-archive-post__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php the_category(); ?>
                            </a>
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
    </div>
</main>
<?php get_footer(); ?>