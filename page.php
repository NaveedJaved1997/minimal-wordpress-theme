<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                
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