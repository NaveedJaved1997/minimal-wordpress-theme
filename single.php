<?php get_header(); ?>

<main>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h1><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    <span>By <?php the_author(); ?></span> | 
                    <span><?php the_date(); ?></span> |
                    <span><?php the_category(', '); ?></span>
                </div>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-navigation">
                    <p><?php previous_post_link( '&laquo; %link' ); ?> &nbsp;|&nbsp; <?php next_post_link( '%link &raquo;' ); ?></p>
                </div>

            </article>

            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    <?php endif; ?>
</main>

<aside>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>

<?php get_footer(); ?>