<?php
$theme_path = get_stylesheet_directory_uri();
?>


<div id="contact" class="common__contact">
    <div class="wrap__s">
        <div class="title__box flex">
            <h3 class="sec__title eb js-splitText">Contact us</h3>
            <p class="sec__sub-title sh">お問合せ・ご相談</p>
        </div>
        <p class="text">ご質問やご相談がございましたら、いつでもお気軽にお問い合わせください。</p>
        <div class="btn__box flex">
            <a class="btn white" href="<?php echo esc_url(home_url('/contact')) ?>">
                <p class="btn__text">お問い合わせフォーム</p>
                <div class="arrow__bg">
                    <figure class="arrow__img">
                        <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="">
                    </figure>
                </div>
            </a>
            <a class="btn white" href="https://lin.ee/VogCy3A" target="_blank">
                <p class="btn__text">LINEからのお問い合わせ</p>
                <figure class="link__img">
                    <img src="<?php echo $theme_path; ?>/assets/img/cta_icon.webp" alt="">
                </figure>
            </a>
        </div>
    </div>

</div>