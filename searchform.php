<form action="<?php echo esc_url(home_url('/'))?>" method="GET" class="search-form">
    <div class="search-form__group">
        <input 
        type="text" 
        class="search-form__input" 
        id="search" 
        placeholder="Search" 
        name="s" 
        value="<?php esc_attr(the_search_query()) ?>"
        autocomplete="off"
        >
        <button type="submit" class="search-form__btn"><?php _e('Search', 'sandrose_v'); ?></button>
    </div>
</form>