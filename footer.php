    </main>
    <footer class="footer">
        <div class="footer__body">
            <div class="footer__logo">
                <?php if(function_exists('the_custom_logo')) { the_custom_logo(); } ?>
            </div>
            <div class="footer__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequatur earum animi quas adipisci atque!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consequatur earum animi quas adipisci atque!
            </div>
            <div class="footer__tags">
                <h3 class="footer__tags-header">Tags</h3>
                <ul class="footer__tags-list">
                    <?php $tags = get_tags(); ?>
                    <?php $i = 0; foreach($tags as $tag) : ?>
                    <?php if(++$i > 20) break; ?>
                    <li><a href="<?php echo get_tag_link( $tag->term_id )?>"><?php echo $tag->name ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="footer__data">
            <div class="footer__copy">&copy; <?php _e('Copyright 2020 Sandrose | All Rights Reserved | <a href="#" class="author-link">Ivan Canic</a>', 'sandrose_v') ?></div>
            <ul class="footer__social">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>

    </footer>
    <?php wp_footer(); ?>
</body>