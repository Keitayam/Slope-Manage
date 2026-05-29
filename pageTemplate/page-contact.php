<?php
/*
Template Name: Contact
*/
$theme_path = get_stylesheet_directory_uri();
get_header();


?>
<main class="pages contact__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__contact__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb"><?php echo get_the_title(); ?></h2>
                    <p class="page__section__sub__title sh">お問い合わせ</p>
                </div>
                <div class="wrap__s">
                    <div class="box flex">
                        <div class="text__box">
                            <p class="title sh">ウェルスマネジメントに関することなら<br class="pc">些細なことでもお気軽にご連絡ください</p>
                            <p class="text">
                                フォームに必要事項をご入力の上、送信してください。折り返し担当者よりご連絡をいたします。<br>
                                ２営業日を過ぎても弊社から連絡がない場合は、一度迷惑メールのフォルダを確認ください。それでも不明な場合はお手数おかけしますが<a class="link" href="mailto:info@slope-manage.com">こちら</a>まで直接ご連絡ください。<br>
                                LINEをお使いの方は<a class="link" href="https://lin.ee/VogCy3A" target="_blank">こちら</a>からもお問い合わせを受け付けております。
                            </p>
                        </div>
                        <figure class="img">
                            <img src="<?php echo $theme_path; ?>/assets/img/contact_heading.webp" alt="お問い合わせ" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact page">
            <div class="wrap__s">
                <div class="content">
                    <div class="contact__title__box">
                        <p class="sub-title sh">お問い合わせフォーム</p>
                        <p class="title eb">Contact form</p>
                    </div>
                    <?php the_content(); ?>

                </div>
            </div>
            <!-- /.wrap -->
        </section>
        <!-- /.contact -->
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

<?php
get_footer();
