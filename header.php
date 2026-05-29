<?php

$theme_path = get_stylesheet_directory_uri();
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head prefix="og: https://ogp.me/ns#">
    <script>
        if (typeof window.ytag !== 'function') {
            window.ytag = function() {
                console.warn('ytag called before library loaded', arguments);
            };
        }
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-THC45TVS');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="l7ZmHcZxN63XN16mwf70UwYZ3FTGdHKTYPtknguj0zc" />
    <link href="<?php echo $theme_path; ?>/css/reset.css" rel="stylesheet" />
    <link rel="icon" type="image/ico" href="<?php echo $theme_path; ?>/assets/img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" />
    <link rel="stylesheet" href="https://use.typekit.net/lwx7mxz.css">
	<meta http-equiv="Cache-Control" content="no-store" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

    <?php if (has_post_thumbnail()) : ?>
        <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>" />
    <?php else: ?>
        <meta property="og:image" content="<?php echo $theme_path; ?>/assets/img/ogp.jpg" />
    <?php endif; ?>
    <?php wp_head(); ?>


</head>

<?php get_template_part('inc/logo') ?>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THC45TVS"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="header">
        <div class="header__wrap">
            <a class="header__logo" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $theme_path; ?>/assets/img/header_logo.svg" alt="Slope Manage" loading="lazy">
            </a>
            <?php get_template_part('inc/header_nav'); ?>
        </div>

        <div id="header__modal" class="header__modal">

            <div class="header__bg js__header__close"></div>
            <div class="box">
                <a class="header__modal__logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo $theme_path; ?>/assets/img/white_logo.svg" alt="Slope Manage">
                </a>
                <nav class="header__modal__nav">
                    <ul class="lists">
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/about')) ?>">
                                <p class="text eb">About</p>
                                <p class="sub-text">- Slope Manageのこと</p>
                            </a>
                        </li>
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/service')) ?>">
                                <p class="text eb">Service</p>
                                <p class="sub-text">- サービス内容</p>
                            </a>
                        </li>
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/achievements')) ?>">
                                <p class="text eb">Achievements</p>
                                <p class="sub-text">- 紹介先での事例紹介</p>
                            </a>
                        </li>
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/company')) ?>">
                                <p class="text eb">Company</p>
                                <p class="sub-text">- 会社概要</p>
                            </a>
                        </li>
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/news-archive')) ?>">
                                <p class="text eb">News</p>
                                <p class="sub-text">- 新着情報</p>
                            </a>
                        </li>
                        <li class="item">
                            <a class="page__link" href="<?php echo esc_url(home_url('/journal')) ?>">
                                <p class="text eb">Journal</p>
                                <p class="sub-text">- ジャーナル</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a class="header__social__link" href="https://lin.ee/VogCy3A" target="_blank">
                    <figure class="img">
                                               <img src="<?php echo $theme_path; ?>/assets/img/line_icon.webp" alt="Slope Manage公式LINE">
                    </figure>
                </a>

                <div class="header__title__box pc">
                    <h2 class="title sh">一人では辿り着けない未来へ導く<br>プライベートバンカー
                    </h2>
                    <p class="text eb">Your private banker, <br>
                        guiding you to a future beyond reach on your own.</p>
                </div>

                <div class="header__others sp">
                    <div class="flex">
                        <a class="other__link" href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy policy</a>
                        <a class="other__link" href="<?php echo esc_url(home_url('/basic-policy')); ?>">反社会的勢力排除に関する基本方針</a>
                    </div>
                </div>

                <a class="btn sp" href="<?php echo esc_url(home_url('/contact')); ?>">
                    <p class="btn_text">お問い合わせフォーム</p>
                    <div class="arrow__bg">
                        <figure class="arrow__img">
                                                       <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
                        </figure>
                    </div>
                </a>

            </div>
            <!-- /.header -->

            <?php wp_head(); ?>
    </header>