<?php
/*
Template Name: About us
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>

<main class="pages about__page">
    <div class="bg__wrap">
        <section class="common__page__heading page__about__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb"><?php echo get_the_title(); ?></h2>
                    <p class="page__section__sub__title sh">Slope Manageのこと</p>
                </div>
                <div class="wrap__s">
                    <div class="box flex">
                        <div class="text__box">
                            <p class="title sh">お客さまの大切な資産を<br>守り、育て、次世代につなぐ</p>
                            <p class="text">
                                VUCAの時代といわれ、先行きが見通しづらい昨今、経営者や富裕層の皆様にとって、個人や組織の資産をいかに守り、育て、次世代につなぐかが、これまで以上に重要な課題になっています。<br>
                                そこで、当社ではプロフェッショナル×AIの力を結集し、お客様一人ひとりに寄り添ったウェルスマネジメントを追求。お客さまとご家族の持続的な発展に貢献します。
                            </p>
                        </div>
                        <figure class="img">
                            <img src="<?php echo $theme_path; ?>/assets/img/about_heading.webp" alt="大切な資産を守り、育て、次世代につなぐ" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section__first">

            <div id="about__company-name" class="content company-name">
                <div class="flex content__flex">
                    <div class="title__box">
                        <p class="content__title sh">社名の由来</p>
                        <h2 class="content__en-title eb">Company name</h2>
                        <p class="text">
                            激動の時代にあっても、お客様の人生が「Slope（上り坂）」のように右肩上がりとなるよう、常にお客様に寄り添いながら資産を「manage（管理・運営）」し、伴走し続けることをイメージし、「Slope Manage」という社名にしました。
                        </p>
                    </div>
                    <figure class="img"><img src="<?php echo $theme_path; ?>/assets/img/company_name_img.webp" alt="ダイヤモンド・フジ" loading="lazy"></figure>
                </div>
            </div>

            <div id="about__guidelines" class="content guidelines">
                <div class="title__box">
                    <p class="content__title sh">行動方針</p>
                    <h2 class="content__en-title eb">Guidelines for action</h2>
                </div>
                <div class="flex content__flex">
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/guidelines_img.webp" alt="行動方針の図" loading="lazy">
                    </figure>
                    <ul class="lists">
                        <li class="item">
                            <p class="title eb"><span class="head">M</span>ISSION<span class="jp">(ミッション)</span></p>
                            <p class="text">お客様の資産を守り、育て、次世代につなぎ、<br>
                                日本経済の発展に貢献する。</p>
                        </li>
                        <li class="item">
                            <p class="title eb"><span class="head">V</span>ISION<span class="jp">(ビジョン)</span></p>
                            <p class="text">プロフェッショナル×AIの力を結集し、<br>
                                真のウェルスマネジメントを追求する。</p>
                        </li>
                        <li class="item">
                            <p class="title eb"><span class="head">V</span>ALUE<span class="jp">(バリュー)</span></p>
                            <p class="text">常にお客様一人ひとりに寄り添い、<br>
                                真の顧客第一主義を貫く。</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div id="about__logo-concept" class="content logo-concept">
                <div class="flex logo-concept__flex">
                    <div class="text__box">
                        <p class="title eb">Logo Concept<span class="slash">/</span><span class="jp sh">ロゴデザインについて</span></p>
                        <p class="text">お客様の人生がより明るいものに発展していく様子を「山の奥から昇る太陽」のイメージで表現しました。また、円形と背景のグラデーションはお客様とそのご家族がSlope Mangeとシームレスにつながり、より充実した未来を追求していく様子を表現しました。</p>
                    </div>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/logo_concept.webp" alt="ロゴデザイン" loading="lazy">
                    </figure>
                </div>
            </div>

        </section>

        <section class="section section__second">
            <div id="about__our-strengths" class="content our-strengths">
                <div class="flex content__flex">
                    <div class="title__box">
                        <p class="content__title sh">SlopeManageの強み</p>
                        <h2 class="content__en-title eb">Our strengths</h2>
                        <p class="text">
                            大手金融機関のウェルスマネジメントでは、時としてお客様のニーズにマッチしていない金融商品を勧められることがあります。また、担当者が数年に一度代わるため、お客様との間にコミュニケーションエラーが生じたり、大切なことが引き継ぎされていない場合があります。<br>
                            そこで、当社では真の顧客第一主義を実現するために、プロフェッショナル×AIの力を結集し、中長期的な複利投資を推奨。お客様のリスク許容度に合わせたキャッシュフロー重視のポートフォリオを構築し、「長期・分散・積立」という投資の鉄則を遵守しながら、お客様の資産をワンストップで守り、育て、次世代につないでいきます。
                        </p>
                    </div>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/strength.webp" alt="SlopeManageの強み" loading="lazy">
                    </figure>
                </div>
            </div>
        </section>

        <section id="about__partner__link__box" class="partner__link__box">
            <div class="wrap">
                <div class="partner__link">
                    <div class="box">
                        <div class="title__box">
                            <p class="content__title sh">パートナー紹介</p>
                            <h2 class="content__en-title eb">Our partner</h2>
                        </div>
                        <p class="text">個人・組織双方のニーズに柔軟かつ的確にワンストップで対応できるよう<br>
                            弁護士や公認会計士、税理士、不動産会社といったプロフェッショナルたちとの連携体制を整えています。</p>
                        <a class="btn white" href="<?php echo esc_url(home_url('/partner')) ?>">
                            <p class="btn__text">View more</p>
                            <div class="white__bg"><figure class="white__img"><img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="プロフェッショナル・ネットワーク"></figure>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>

<?php get_template_part('inc/breadcrumb'); ?>


<div class="common__btn__boxes">
    <a class="btn__box service__box" href="<?php echo esc_url(home_url('/service')) ?>">
        <div class="text__box">
            <p class="en-text eb">Our service</p>
            <p class="text sh">サービス内容</p>
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

<?php
get_footer();
