<?php get_header(); ?>
<main class="l-main-wl mt-x mt mb">
    <div class="p-product-type">
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
    </div>

    <?php if (paginate_links()) : ?>
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
</main>
<?php get_footer(); ?>