<?php
/*
Template Name: 404
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>

<section class="page__error">
    <div class="wrap">
        <div class="box">
            <h2>404</h2>
            <p>お探しのページは見つかりませんでした。</p>
            <div class="top__btn">
                <a href="<?PHP echo esc_url(home_url('/')); ?>">TOPへ戻る</a>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
?>