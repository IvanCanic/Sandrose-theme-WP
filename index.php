<?php get_header(); ?>

        <section class="latest-posts" id="latest-posts"
        style="background-image: linear-gradient(to right, rgba($secondary-color-light, 0.8), rgba($secondary-color, 0.8), rgba($secondary-color-dark, 0.8)), url('<?php echo get_template_directory_uri() . './assets/images/voda.jpeg'?>');"
        >

            <h2 class="heading-primary"><?php _e('Most popular posts', 'sandrose_v'); ?></h2>

            <div class="article-container">

                <?php $wp_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'ignore_sticky_posts' => 1,
                    'comment_count' => array(
                        'value' => 3,
                        'compare' => '>=',
                    )
                )); ?>

                <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post()  ?>

                    <?php get_template_part('template-parts/article', 'body'); ?>

                <?php endwhile; ?>

                <?php else: ?>

                <?php _e('Posts no found', 'sandrose_v'); ?>

                <?php endif; ?>

                <?php wp_reset_postdata(); ?>

            </div>

        </section>

<?php get_footer(); ?>