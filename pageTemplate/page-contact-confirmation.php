<?php
/*
Template Name: Contact-confirmation
*/

// テスト出力（あとで消してOK）
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo '<pre>';
    var_dump($_POST);
    echo '</pre>';
}

if (!session_id()) {
    session_start(); // セッションを開始しないと $_SESSION は使えない
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
$theme_path = get_stylesheet_directory_uri();
get_header();

?>
<main class="pages confirmation__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__contact__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb">Contact</h2>
                    <p class="page__section__sub__title sh">お問い合わせ</p>
                </div>
            </div>
        </section>

        <section class="contact confirmation page">
            <div class="wrap__s">
                <div class="content">
                    <div class="contact__title__box">
                        <p class="sub-title sh">お問い合わせ内容確認</p>
                        <p class="title eb">Confirmation</p>
                        <p class="text">お問い合わせ内容をご確認ください。<br>
                            入力内容お間違いがなければ、送信ボタンを押して送信してください。</p>
                    </div>
                    <?php the_content(); ?>

                </div>
            </div>
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
