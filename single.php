<?php get_header(); ?>

<section class="all-posts">

    <div class="all-posts__container">

        <div class="article-container">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                <div class="page-post">
                    <h2 class="page-post__title"><?php the_title(); ?></h2>
                    <div class="hr-divider"></div>
                    <div class="page-post__data">
                        <div class="page-post__author">
                            
                            <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ))); ?>" class="page-post_author-link"><?php the_author(); ?></a>
                        </div>
                        <div class="page-post__date"><?php the_time('Y-m-d H:i:s'); ?></div>
                    </div>
                    <?php if(has_post_thumbnail()) : ?>
                    <div class="page-post__thumbnail">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                    </div>
                    <?php endif; ?>
                    <ul class="page-post__tags">
                        <?php $categories = get_the_category(); ?>
                        <?php foreach($categories as $cat) : ?>
                        <li><a href="<?php echo esc_url(get_category_link( $cat->term_id )) ?>"><?php echo $cat->name ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="hr-divider"></div>
                    <div class="page-post__content">
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

            <?php endwhile; ?>

            <?php endif; ?> 
    
        </div>

        <aside class="main-sidebar">

        <?php get_sidebar(); ?>
                    
        </aside>

    </div>

</section>

<?php get_footer(); ?>
