<div class="tag__list__box flex">
    <div class="item all <?php if (!is_category()) echo 'is-item-active'; ?>">
        <a href="<?php echo esc_url(home_url('/journal')) ?>" class="text">#ALL CATEGORY</a>
    </div>
    <ul class="tag__list flex">
        <?php
        $terms = get_terms(array(
            'taxonomy' => 'journal-category',
            'orderby' => 'name',
            'order'   => 'ASC',
            'hide_empty' => false, // ← 投稿がなくても出す
        ));
        foreach ($terms as $term) :
        ?>
            <li class="item <?php if (is_tax('journal-category', $term->slug)) echo 'is-item-active'; ?>">
                <a href="<?php echo get_term_link($term); ?>" class="text">
                    <?php echo $term->name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</div>