<?php
//Template Name:Top
$theme_path = get_stylesheet_directory_uri();

get_header(); ?>

<?php get_template_part('inc/loading') ?>

<section id="fv" class="fv">
    <div class="wrap">
        <div class="fv__title__box">
            <h2 class="title sh">一人では辿り着けない未来へ導く<br>プライベートバンカー
            </h2>
            <p class="text eb">Your private banker, <br>
            guiding you to a future beyond reach on your own.</p>
        </div>
    </div>
    <div class="latest__news">

        <h4 class="title eb">News</h4>
        <div class="slider_wrap">
            <div class="splide splide1" aria-label="News">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'paged' => $paged,
                        );
                        $the_query = new WP_Query($args); ?>
                        <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <li class="splide__slide">
                                    <a class="latest__news__box" href="<?php the_permalink(); ?>">
                                        <time class="time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                                        <p class="category">
                                            <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                echo esc_html($categories[0]->name);
                                            }
                                            ?></p>
                                        <h4 class="post_title sh">
                                            <?php
                                            $title = get_the_title();
                                            if (wp_is_mobile()) {
                                                $max_length = 10;
                                            } else {
                                                $max_length = 20;
                                            }
                                            if (mb_strlen($title) > $max_length) {
                                                echo mb_substr($title, 0, $max_length) . '...';
                                            } else {
                                                echo $title;
                                            }
                                            ?>
                                        </h4>
                                    </a>
                                </li>
                            <?php endwhile;
                        else : ?>
                            <p>まだ記事がありません</p>
                        <?php endif ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/latest_news_arrow.webp" alt="不動産売却">
                    </figure>
                </div>
            </div>
        </div>

    </div>

    <div class="scroll pc">
        <p class="text eb">Scroll</p>
    </div>
</section>



<section class="top__about">
    <div class="wrap">
        <div class="top__title__box">
            <p class="sec__sub-title sh">Slope Manageのこと</p>
            <h3 class="sec__title eb js-splitText">About us</h3>
        </div>
        <div class="wrap__s">
            <div class="text__box">
                <p class="text">
                    私たちはウェルスマネジメントを通じて、お客様の資産を守り、育て、次世代につなぎ、日本経済の発展に貢献することをミッションに掲げています。お客様一人ひとりに寄り添ったウェルスマネジメントを追求し、お客様とそのご家族がより充実した未来を描けるよう、顧客第一主義の経営を心掛けております。
                </p>
                <a class="btn more" href="<?php echo esc_url(home_url('/about')) ?>">
                    <p class="btn__text">View more</p>
                    <div class="more__bg">
                        <figure class="more__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="矢印">
                        </figure>
                    </div>
                </a>
            </div>
            <figure class="top__about__img">
                <img src="<?php echo $theme_path; ?>/assets/img/top_about1.webp" alt="一人では辿り着けない未来へ" loading="lazy">
            </figure>
            <figure class="top__about__img">
<img src="<?php echo $theme_path; ?>/assets/img/top_about2.webp" alt="資産運用" loading="lazy">
            </figure>
        </div>
    </div>
</section>
<!-- /.top_about -->

<section class="top__service">
    <div class="wrap">
        <div class="top__title__box">
            <p class="sec__sub-title sh">サービス内容</p>
            <h3 class="sec__title eb js-splitText">Our service</h3>
        </div>
        <div class="wrap__s">
            <div class="box flex">
                <div class="text__box">
                    <p class="text">
                        激動の時代にあっても、お客様とそのご家族の資産をお守りできるよう、当社ではウェルスマネジメントに関する幅広いサービスを提供しています。多様なスキルとノウハウを有する専任担当者のご紹介はもちろん、専任担当者の専門外のご相談についても、当社が構築したプロフェッショナルネットワークを生かし、臨機応変に対応いたします。ウェルスマネジメントに関することは当社にお任せください。
                    </p>
                    <a class="btn more" href="<?php echo esc_url(home_url('/service')) ?>">
                        <p class="btn__text">View all</p>
                        <div class="more__bg">
                            <figure class="more__img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="矢印">
                                        </figure>
                        </div>
                    </a>
                </div>
                <div class="common__index__box">
                    <ul class="lists">
                        <a class="item" href="#top__ifa">
                            <div class="anchor flex">
                                <span class="eb">01</span>
                                <p class="title eb">IFA</p>
                                <p class="text sh">お客様の理想を叶えるIFAをご紹介</p>
                            </div>
                        </a>
                        <a class="item" href="#top__agency">
                            <div class="anchor flex">
                                <span class="eb">02</span>
                                <p class="title eb">AGENCY</p>
                                <p class="text sh">メットライフ生命の代理店事業</p>
                            </div>
                        </a>
                        <a class="item" href="#top__real-estate">
                            <div class="anchor flex">
                                <span class="eb">03</span>
                                <p class="title eb">REAL ESTATE</p>
                                <p class="text sh">不動産売却のお手伝い</p>
                            </div>
                        </a>
                    </ul>
                </div>

            </div>

            <div class="detail__box">
                <ul class="lists">
                    <li id="top__ifa" class="item">
                        <div class="heading flex">
                            <p class="num eb">01</p>
                            <p class="eb">IFA</p>
                            <span></span>
                        </div>
                        <div class="unit">
                            <figure class="img">
                                <img src="<?php echo $theme_path; ?>/assets/img/ifa-img.webp" alt="IFA" loading="lazy">
                            </figure>
                            <div class="info">
                                <p class="title sh">お客様の大切な資産を守る<br>優秀なIFAを選定・ご紹介</p>
                                <p class="text">⽇本証券アナリスト協会認定アナリストや宅地建物取引⼠など、多様なスキルとノウハウを有する人材を専任担当者としてご紹介します。また、当社が独自開発した金融特化型AIツール「AI SLOPE」を使い、お客様のポートフォリオを管理します。</p>
                                <a class="btn more" href="<?php echo esc_url(home_url('//service#service__ifa')) ?>">
                                    <p class="btn__text">View more</p>
                                    <div class="more__bg">
                                        <figure class="more__img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li id="top__agency" class="item">
                        <div class="heading flex">
                            <p class="num eb">02</p>
                            <p class="eb">AGENCY</p>
                            <span></span>

                        </div>
                        <div class="unit">
                            <figure class="img">
                                <img src="<?php echo $theme_path; ?>/assets/img/agency-img.webp" alt="メットライフ生命" loading="lazy">
                            </figure>
                            <div class="info">
                                <p class="title sh">豊富なラインナップが魅力の<br>メットライフ生命と提携</p>
                                <p class="text">金融商品のラインアップの一つとして、当社ではメットライフ生命の保険商品を取り扱っています。生命保険などの見直しについても、お客様の目線で検討し、家族の状況やライフステージに合わせた商品をお勧めします。</p>
                                <a class="btn more" href="<?php echo esc_url(home_url('/service#service__agency')) ?>">
                                    <p class="btn__text">View more</p>
                                    <div class="more__bg">
                                       <figure class="more__img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="矢印">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                    <li id="top__real-estate" class="item">
                        <div class="heading flex">
                            <p class="num eb">03</p>
                            <p class="eb">REAL ESTATE</p>
                            <span></span>
                        </div>
                        <div class="unit">
                            <figure class="img">
                                <img src="<?php echo $theme_path; ?>/assets/img/real-estate-img.webp" alt="不動産売却" loading="lazy">
                            </figure>
                            <div class="info">
                                <p class="title sh">不動産売却に関するご希望<br>お悩みを丁寧にサポート</p>
                                <p class="text">不動産会社などとのネットワークを活用し、 宅地建物取引士の資格を持った専任担当者がお客様の状況に応じた不動産売買をサポートします。また、単に不動産を売買するだけでなく、不動産運用や税金対策など、プロフェッショナルとしての知見を最大限に生かしたアドバイスを行います。</p>
                                <a class="btn more" href="<?php echo esc_url(home_url('/service#service__real-estate')) ?>">
                                    <p class="btn__text">View more</p>
                                    <div class="more__bg">
                                        <figure class="more__img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="矢印">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</section>
<!-- /.top_service-->

<section class="top__achievements">
    <div class="wrap">
        <div class="flex title__flex">
            <div class="top__title__box">
                <p class="sec__sub-title sh">紹介先での事例紹介</p>
                <h3 class="sec__title eb js-splitText">Achievements</h3>
            </div>
            <a class="btn white" href="<?php echo esc_url(home_url('/achievements')) ?>">
                <p class="btn__text">View all</p>
                <div class="white__bg">
                    <figure class="white__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
                    </figure>
                </div>
            </a>
        </div>
        <div class="slider__wrap">
            <div class="splide slider splide2" aria-label="実績">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide item">
                            <a class="link" href="<?php echo esc_url(home_url('/achievements#case1')) ?>">
                                <div class="heading">
                                    <p class="num eb">01</p>
                                    <div class="info">
                                        <p class="text">50代 社長の場合</p>
                                        <ul class="tags">
                                            <li class="tag">M&A売却資金の運用</li>
                                            <li class="tag">証券</li>
                                            <li class="tag">保険</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text__box">
                                    <p class="text sh">M&A売却資金の運用で、一族全員が安心して生活するための基盤を整備</p>
                                </div>
                                <div class="arrow__bg pc">
                                    <figure class="arrow__img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_black.webp" alt="矢印">
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide item">
                            <a class="link" href="<?php echo esc_url(home_url('/achievements#case2')) ?>">
                                <div class="heading">
                                    <p class="num eb">02</p>
                                    <div class="info">
                                        <p class="text">70代 会長の場合</p>
                                        <ul class="tags">
                                            <li class="tag">債券投資への切り替え</li>
                                            <li class="tag">セカンドオピニオン</li>
                                            <li class="tag">事業譲渡</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text__box">
                                    <p class="text sh">株式中心から債券投資への切り替えで、年間1,400万円程度のキャッシュフローを獲得</p>
                                </div>
                                <div class="arrow__bg pc">
                                    <figure class="arrow__img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_black.webp" alt="矢印">
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide item">
                            <a class="link" href="<?php echo esc_url(home_url('/achievements#case3')) ?>">
                                <div class="heading">
                                    <p class="num eb">03</p>
                                    <div class="info">
                                        <p class="text">40代 社長の場合</p>
                                        <ul class="tags">
                                            <li class="tag">余剰資金の活用</li>
                                            <li class="tag">退職金準備</li>
                                            <li class="tag">積立</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text__box">
                                    <p class="text sh">余剰資金を運用して、安定的な利息収入の獲得と経営者の退職金の準備も可能に</p>
                                </div>
                                <div class="arrow__bg pc">
                                    <figure class="arrow__img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_black.webp" alt="矢印">
                                    </figure>
                                </div>
                            </a>
                        </li>
                        <li class="splide__slide item">
                            <a class="link" href="<?php echo esc_url(home_url('/achievements#case4')) ?>">
                                <div class="heading">
                                    <p class="num eb">04</p>
                                    <div class="info">
                                        <p class="text">50代 医師の場合</p>
                                        <ul class="tags">
                                            <li class="tag">専任担当者制度</li>
                                            <li class="tag">オンライン面談</li>
                                            <li class="tag">定期レビュー</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text__box">
                                    <p class="text sh">ドル建て外債ポートフォリオを組み、年間200万円程度のキャッシュフローを獲得</p>
                                </div>
                                <div class="arrow__bg pc">
                                    <figure class="arrow__img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_black.webp" alt="矢印">
                                    </figure>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top__journal">
    <div class="wrap">
        <div class="top__title__box">
            <p class="sec__sub-title">ジャーナル</p>
            <h3 class="sec__title eb js-splitText">Journal</h3>
        </div>
        <div class="wrap__s">
            <ul class="lists">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'journal',
                    'posts_per_page' => 3,
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li class="item">
                            <a class="link" href="<?php the_permalink(); ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="img">
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                    </figure>
                                <?php else : ?>
                                    <figure class="img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/sample.webp" alt="sample">
                                    </figure>
                                <?php endif; ?>
                                <time class="time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                                <h4 class="title sh">
                                    <?php
                                    $title = get_the_title();
                                    echo mb_strlen($title) > 50 ? mb_substr($title, 0, 50) . '…' : $title;
                                    ?>
                                </h4>
                            </a>
                        </li>
                    <?php endwhile;
                else : ?>
                    <p>まだ記事がありません</p>
                <?php endif ?>
                <?php wp_reset_postdata(); ?>
            </ul>
            <div class="slider__wrap sp">
                <div class="splide slider splide3" aria-label="実績">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type' => 'journal',
                                'posts_per_page' => 3,
                                'paged' => $paged,
                            );
                            $the_query = new WP_Query($args); ?>
                            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <li class="splide__slide item">
                                        <a class="link" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <figure class="img">
                                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>">
                                                </figure>
                                            <?php else : ?>
                                                <figure class="img">
                                                    <img src="<?php echo $theme_path; ?>/assets/img/sample.webp" alt="sample">
                                                </figure>
                                            <?php endif; ?>
                                            <time class="time" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d') ?></time>
                                            <h4 class="title sh">
                                                <?php
                                                $title = get_the_title();
                                                echo mb_strlen($title) > 50 ? mb_substr($title, 0, 50) . '…' : $title;
                                                ?>
                                            </h4>
                                        </a>
                                    </li>
                                <?php endwhile;
                            else : ?>
                                <p>まだ記事がありません</p>
                            <?php endif ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
            <a class="btn more" href="<?php echo esc_url(home_url('/journal')) ?>">
                <p class="btn__text">View all</p>
                <div class="more__bg">
                    <figure class="more__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="矢印">
                    </figure>
                </div>
            </a>
        </div>

    </div>
</section>

<div class="common__btn__boxes">
    <a class="btn__box service__box" href="<?php echo esc_url(home_url('/service')) ?>">
        <div class="text__box">
            <p class="en-text eb">Our service</p>
            <p class="text sh">サービス内容</p>
        </div>
        <div class="btn white">
            <p class="btn__text">View more</p>
            <div class="arrow__bg pc">
                <figure class="arrow__img">
                    <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
                </figure>
            </div>
        </div>
    </a>
    <a class="btn__box company__box" href="<?php echo esc_url(home_url('/company')) ?>">
        <div class="text__box">
            <p class="en-text eb">Company</p>
            <p class="text sh">会社概要</p>
        </div>
        <div class="btn white">
            <p class="btn__text">View all</p>
            <div class="arrow__bg pc">
                <figure class="arrow__img">
                    <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
                </figure>
            </div>
        </div>
    </a>
</div>

<?php get_template_part('inc/contact'); ?>

<?php
get_footer();
?>