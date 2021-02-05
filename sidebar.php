<div class="main-sidebar__item">
    <h3 class="main-sidebar__header"><?php _e('Categories', 'sandrose_v'); ?></h3>
    <ul class="main-sidebar__lists">
        <?php $allCategories = get_categories(array(
            'orderBy' => 'name',
            'hide_empty' => 0,
            'parent' => 0
        )); ?>
        <?php foreach($allCategories as $allCat) : ?>
        <li><a href="<?php echo get_category_link($allCat->term_id) ?>"><?php echo $allCat->name; ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
                    
<div class="main-sidebar__item">
    <h3 class="main-sidebar__header"><?php _e('Latest posts', 'sandrose_v'); ?></h3>
    <ul class="main-sidebar__posts">

            <?php $wp_query = new WP_Query(array(
                'post_type' => 'post',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'ignore_sticky_posts' => 1,
                'date_query' => array(
                    'after' => '-30 days',
                    'column' => 'post_date'
                )
            )); ?>

            <?php if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <div class="main-sidebar__post">
                <?php if(has_post_thumbnail()) : ?>
                <div class="main-sidebar__post-thumbnail">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                </div>
                <?php endif; ?>
                <div class="main-sidebar__post-title">
                <p><?php the_time('Y-m-d H:i:s'); ?></p>
                <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                </div>
            </div>

            <?php endwhile; ?>

            <?php endif; ?>

    </ul>
</div>

<?php if(is_active_sidebar( 'custom-sidebar-s' )) : ?>

<?php dynamic_sidebar( 'custom-sidebar-s' ); ?>

<?php endif; ?>