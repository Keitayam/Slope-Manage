<?php
//Template Name: journal
$theme_path = get_stylesheet_directory_uri();
get_header(); ?>

<main class="pages journal__page">
<div class="bg__wrap">

    <section class="common__page__heading page__journal__heading">
        <div class="wrap">
            <div class="common__page__heading__box">
                <h2 class="page__section__title eb">Journal</h2>
                <p class="page__section__sub__title sh">ジャーナル</p>
            </div>
        </div>
    </section>

    <section id="journal" class="journal">
        <div class="wrap__s">
            <div class="content">
                <?php get_template_part('inc/journal_cat_list'); ?>

                <div class="post__lists__box journal__lists__box is-box-active <?php echo $active_tab === 0 ? 'is-box-active' : ''; ?>">
                    <?php
                    if (wp_is_mobile()) {
                        $num = 9;
                    } else {
                        $num = 12;
                    }
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'journal',
                        'posts_per_page' => $num,
                        'paged' => $paged,
                    );
                    $the_query = new WP_Query($args); ?>
                    <div class="list">
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <a class="item" href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <figure class="img">
                                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                        </figure>
                                    <?php else : ?>
                                        <figure class="img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/sample.webp" alt="sample">
                                        </figure>
                                    <?php endif; ?>
                                    <div class="info flex">
                                        <time class="time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'journal-category');

                                        if (!empty($terms) && !is_wp_error($terms)) :
                                            $term = $terms[0]; // 最初のタームを使う
                                            $term_link = get_term_link($term); // ← カスタムタクソノミー用のリンク取得
                                            if (!is_wp_error($term_link)) : ?>
                                                <p class="category">
                                                    <?php echo esc_html($term->name); ?>
                                                </p>
                                        <?php
                                            endif;
                                        endif;
                                        ?>
                                    </div>
                                    <h4 class="title sh">
                                        <?php
                                        $title = get_the_title();
                                        echo mb_strlen($title) > 50 ? mb_substr($title, 0, 50) . '…' : $title;
                                        ?>
                                    </h4>
                                </a>

                            <?php endwhile;
                        else : ?>
                            <p>まだ記事がありません</p>
                        <?php endif ?>

                    </div>
                    <div class="pagination">
                        <?php
                        $paged = max(get_query_var('paged', 1), 1);
                        if ($the_query->max_num_pages > 1) {
                            $pages = paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%/',
                                'current' => $paged,
                                'end_size' => 1,
                                'mid_size' => 2,
                                'prev_next' => true,
                                'prev_text' => '<img src="' . get_template_directory_uri() . '/assets/img/pagination_arrow.webp" alt="前へ">',
                                'next_text' => '<img src="' . get_template_directory_uri() . '/assets/img/pagination_arrow.webp" alt="次へ">',
                                'total' => $the_query->max_num_pages,
                                'type' => 'array'
                            ));

                            if (is_array($pages)) {
                                echo '<ul class="pagination__list">';
                                foreach ($pages as $page) {
                                    echo '<li class="sh">' . $page . '</li>';
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>

                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
</main>
<?php get_template_part('inc/breadcrumb'); ?>

<div class="common__btn__boxes">
    <a class="btn__box about__box" href="<?php echo esc_url(home_url('/about')) ?>">
        <div class="text__box">
            <p class="en-text eb">About</p>
            <p class="text sh">Slope Manageのこと</p>
        </div>
        <div class="btn white">
            <p class="btn__text">View more</p>
            <div class="arrow__bg">
                <figure class="arrow__img">
                    <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="">
                </figure>
            </div>
        </div>
    </a>
    <a class="btn__box service__box" href="<?php echo esc_url(home_url('/service')) ?>">
        <div class="text__box">
            <p class="en-text eb">Our service</p>
            <p class="text sh">サービス内容</p>
        </div>
        <div class="btn white">
            <p class="btn__text">View all</p>
            <div class="arrow__bg">
                <figure class="arrow__img">
                    <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="">
                </figure>
            </div>
        </div>
    </a>
</div>

<?php get_template_part('inc/contact'); ?>


<?php get_footer(); ?>