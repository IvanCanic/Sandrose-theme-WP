<?php get_header(); ?>

    <section class="all-posts">

        <h2 class="heading-primary"><?php _e('Page not found!', 'sandrose_v'); ?></h2>

        <div class="all-posts__container">

            <div class="article-container">

                <div class="page-post">
                    <div class="page-post__thumbnail-404">
                        <img src="<?php echo get_template_directory_uri() . './assets/images/404proba.png' ?>" alt="<?php _e('Page not found', 'sandrose_v'); ?>">
                    </div>
                </div>
    
            </div>

            <aside class="main-sidebar">
                <?php get_sidebar(); ?>
            </aside>

        </div>

    </section>

<?php get_footer(); ?>