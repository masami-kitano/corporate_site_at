<?php get_header(); ?>
<main class="l-main">
    <aside>
        <?php get_sidebar(); ?>
    </aside>
    <article>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </section>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>ページが見つかりません。</h2>
        <?php endif; ?>
    </article>
</main>
<?php get_footer();
