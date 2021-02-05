<?php get_header(); ?>

    <section class="all-posts">

        <h2 class="heading-primary"><?php the_title(); ?></h2>

        <div class="all-posts__container">

            <div class="article-container">

                <div class="page-post">
                    <?php if(has_post_thumbnail()) : ?>
                    <div class="page-post__thumbnail">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <?php endif; ?>
                    <div class="page-post__content page-layout-2">
                        <?php the_content(); ?>    
                    </div>
                    <?php 
                	wp_link_pages(
                        array(
                            'before'      => '<div class="page-links">' . __( 'Pages:', 'sandrose_v' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        )
                    );
                    ?>
                </div>
    
            </div>

            <aside class="main-sidebar">
                <?php get_sidebar(); ?>
            </aside>

        </div>

    </section>

<?php get_footer(); ?>