<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail( 'large' ); // 'large' is a default WP size ?>
                        </a>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

    <?php else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<aside>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php get_footer(); ?>