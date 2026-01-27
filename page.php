<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); // 'large' is a default WP size ?>
                        </a>
                    </div>
                    <?php endif; ?>
                
                <h1><?php the_title(); ?></h1>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<aside>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php get_footer(); ?>