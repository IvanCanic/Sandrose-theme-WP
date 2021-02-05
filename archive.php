<?php get_header(); ?>

<section class="all-posts">

            <h2 class="heading-primary"><?php wp_title(); ?></h2>

            <div class="all-posts__container">

                <div class="article-container">

                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/article', 'body'); ?>
        
                    <?php endwhile; ?>

                    <?php get_template_part('template-parts/article', 'pagination'); ?>

                    <?php else: ?>

                    <div class="article__text"><?php _e('No posts found', 'sandrose_v'); ?></div>

                    <?php endif; ?>
    
                </div>

                <aside class="main-sidebar">

                    <?php get_sidebar(); ?>
                    
                </aside>

            </div>

</section>

<?php get_footer(); ?>