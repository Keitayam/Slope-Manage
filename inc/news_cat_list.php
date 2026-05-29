<div class="tag__list__box flex">
    <div class="item all <?php if (!is_category()) echo 'is-item-active'; ?>">
        <a href="<?php echo esc_url(home_url('/news-archive')) ?>" class="text">#ALL CATEGORY</a>
    </div>
    <ul class="tag__list flex">
        <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ));
        foreach ($categories as $cat) :
        ?>
            <li class="item <?php if (is_category($cat->slug)) echo 'is-item-active'; ?>">
                <a href="<?php echo get_category_link($cat->term_id); ?>" class="text">
                    <?php echo $cat->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>