<article <?php post_class('article'); ?>>
    <div class="article__front">
        <div class="article__head" 
            <?php if(has_post_thumbnail()) : ?>
            style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"
            <?php endif; ?>
            >
            <p class="article__title"><?php the_title(); ?></p>
        </div>
        <div class="article__foot">
            <ul class="article__category">

                <?php $categories = get_the_category(); ?>
                <?php foreach( $categories as $category) : ?>
                    <li class="article__category-item">
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="article__category-link"><?php echo $category->name ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
    
            <div class="article__meta">
                <div class="article__author"><?php the_author(); ?></div>
                <div class="article__date"> <?php the_time('Y-m-d H:i:s'); ?> </div>
            </div>
        </div>
    </div>
                    
    <div class="article__back">
        <div class="article__body">
            <p class="article__text"><?php echo get_the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn--read-more"><?php _e('Read more','sandrose_v'); ?> &rarr;</a>
            <ul class="article__category">
                <?php $categories = get_the_category(); ?>

                <?php foreach( $categories as $category) : ?>
                    <li class="article__category-item">
                        <a href="<?php echo get_category_link($category->term_id); ?>" class="article__category-link"><?php echo $category->name ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</article>