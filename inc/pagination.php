<div class="pagination">
    <?php
    $big = 999999999;
    $paged = max(get_query_var('paged', 1), 1);
    if ($the_query->max_num_pages > 1) {
        $pages = paginate_links(array(
            'base' =>  str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => 'page/%#%/',
            'current' => $paged,
            'end_size' => 1,
            'mid_size' => 2,
            'prev_next' => true,
            'prev_text' => 'BACK',
            'next_text' => 'NEXT',
            'total' => $the_query->max_num_pages,
            'type' => 'array'
        ));

        if (is_array($pages)) {
            echo '<ul class="pagination__list">';
            foreach ($pages as $page) {
                $page = str_replace('page-numbers', 'page-numbers', $page);
                if (strpos($page, 'current') !== false) {
                    $page_num = strip_tags($page);
                    echo '<li>' . str_replace($page_num, sprintf('%02d', $page_num), $page) . '</li>';
                } elseif (strpos($page, 'prev') !== false || strpos($page, 'next') !== false) {
                    echo '<li>' . $page . '</li>';
                } elseif (strpos($page, 'dots') === false) { // この行を追加
                    $page_num = strip_tags($page);
                    echo '<li>' . str_replace($page_num, sprintf('%02d', $page_num), $page) . '</li>';
                } // dots を含むページをスキップ
            }
            echo '</ul>';
        }
    }
    ?>
</div>