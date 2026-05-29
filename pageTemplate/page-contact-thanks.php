<?php
/*
Template Name: Thanks
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
unset($_SESSION['form_data']);

?>
<main class="pages thanks__page">
    <div class="bg__wrap">


        <section class="common__page__heading page__contact__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb">Contact</h2>
                    <p class="page__section__sub__title sh">お問い合わせ</p>
                </div>
            </div>
        </section>

        <section class="contact thanks page">
            <div class="wrap__s">
                <div class="content">
                    <div class="contact__title__box">
                        <p class="sub-title sh">ありがとうございました</p>
                        <p class="title eb">Thank you</p>
                    </div>

                    <p class="text">
                        お問い合わせありがとうございました。折り返し担当者よりご連絡をいたします。<br>
                        初回面談をご希望のお客様は、送信後に届く自動返信メールに記載の予約用URLからご希望の日時を選択してご予約ください。<br><br>

                        自動返信メールが届かない場合や、２営業日を過ぎても弊社から連絡がない場合は、一度迷惑メールのフォルダを確認ください。<br>
                        それでも不明な場合はお手数おかけしますが<a class="link" href="mailto:info@slope-manage.com">こちら</a>まで直接ご連絡ください。<br>
                        LINEをお使いの方は<a class="link" href="https://lin.ee/VogCy3A" target="_blank">こちら</a>からもお問い合わせを受け付けております。
                    </p>

                    <a class="btn back__btn" href="<?php echo esc_url(home_url('/')) ?>">
                        <p class="btn__text">TOPへ戻る</p>
                        <div class="back__btn__bg">
                            <figure class="back__btn__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="">
                            </figure>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /.wrap -->
        </section>
    </div>
</main>


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
