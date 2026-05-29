<?php
$theme_path = get_stylesheet_directory_uri();
get_header(); ?>

<main class="pages news__single__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__news__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb">News</h2>
                    <p class="page__section__sub__title sh">お知らせ</p>
                </div>
            </div>
        </section>

        <section class="news__single">
            <div class="wrap__xs">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <article class="single__article">
                            <div class="article__header flex">
                                <div class="info">
                                    <time class="time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.n.j'); ?></time>
                                    <h2 class="article__title sh"><?php the_title(); ?></h2>
                                    <p class="article__category">
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                            echo esc_html($categories[0]->name);
                                        }
                                        ?></p>

                                </div>
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="img">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                    </figure>
                                <?php else : ?>
                                    <figure class="img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/sample.webp" alt="sample">
                                    </figure>
                                <?php endif; ?>
                            </div>

                            <div class="article__content">
                                <?php the_content(); ?>
                                <?php get_template_part('inc/article_bottom_link'); ?>
                                <div class="post__nav">
                                    <?php
                                    $prev_post = get_previous_post();
                                    $next_post = get_next_post();

                                    function trim_title($title, $pc_length = 25, $sp_length = 15)
                                    {
                                        $user_agent = $_SERVER['HTTP_USER_AGENT'];
                                        $is_mobile = preg_match('/iPhone|iPod|Android.*Mobile|Windows Phone/', $user_agent);
                                        $length = $is_mobile ? $sp_length : $pc_length;

                                        return mb_strlen($title) > $length ? mb_substr($title, 0, $length) . '…' : $title;
                                    }
                                    ?>
                                    <?php if ($prev_post): ?>
                                        <a class="post__nav__link post__nav__link__prev eb" href="<?php echo get_permalink($prev_post->ID); ?>">
                                            ＜ <?php echo esc_html(trim_title(get_the_title($prev_post->ID))); ?>
                                        </a>
                                    <?php endif; ?>

                                    <?php if ($next_post): ?>
                                        <a class="post__nav__link post__nav__link__next eb" href="<?php echo get_permalink($next_post->ID); ?>">
                                            <?php echo esc_html(trim_title(get_the_title($next_post->ID))); ?> ＞
                                        </a>
                                    <?php endif; ?>
                                </div>


                            </div>


                        </article>

                        <?php get_template_part('inc/news_cat_list'); ?>

                        <!-- // --------------------------
                    // Related Articles
                    // -------------------------- -->

                        <section class="related__posts">
                            <p class="related__sub-title sh">おすすめ記事</p>
                            <h3 class="related__title eb">Recommend</h3>
                            <div class="list flex">
                                <?php
                                $related_args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'post__not_in' => array(get_the_ID()),
                                    'category__in' => wp_list_pluck(get_the_category(), 'term_id')
                                );
                                $related_query = new WP_Query($related_args);
                                if ($related_query->have_posts()) :
                                ?>
                                    <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                        <a href="<?php the_permalink(); ?>" class="item">
                                            <div class="thumb">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <figure class="img">
                                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                    </figure>
                                                <?php else : ?>
                                                    <figure class="img">
                                                        <img src="<?php echo $theme_path; ?>/assets/img/sample.webp" alt="sample">
                                                    </figure>
                                                <?php endif; ?>
                                            </div>
                                            <div class="info flex">
                                                <time class="time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                                                <?php
                                                $terms = get_the_terms(get_the_ID(), 'category');

                                                if (!empty($terms) && !is_wp_error($terms)) :
                                                    $term = $terms[0]; // 最初のタームを使う
                                                    $term_link = get_term_link($term); // ← カスタムタクソノミー用のリンク取得
                                                    if (!is_wp_error($term_link)) :
                                                ?>
                                                        <p class="article__category">
                                                            <?php echo esc_html($term->name); ?>
                                                        </p>
                                                <?php
                                                    endif;
                                                endif;
                                                ?>
                                            </div>
                                            <p class="title sh"><?php
                                                                $title = get_the_title();
                                                                echo mb_strlen($title) > 50 ? mb_substr($title, 0, 50) . '…' : $title;
                                                                ?></p>
                                        </a>
                                    <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <p class="no-post">まだ記事はありません。</p>
                        </section>
                    <?php endif;
                                wp_reset_postdata();
                    ?>

            <?php endwhile;
                endif; ?>
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
    <a class="btn__box achievements__box" href="<?php echo esc_url(home_url('/achievements')) ?>">
        <div class="text__box">
            <p class="en-text eb">Achievements</p>
            <p class="text sh">紹介先での事例紹介</p>
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
</div>

<?php get_template_part('inc/contact'); ?>

<?php get_footer(); ?>