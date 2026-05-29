<?php

$theme_path = get_stylesheet_directory_uri();

?>
<nav>
    <ul class="lists">
        <li class="item">
            <a class="page__link" href="<?php echo esc_url(home_url('/about')) ?>">
                <p class="text eb">About</p>
                <p class="sub-text pc">Slope Manageのこと</p>
            </a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/about/#about__guidelines')) ?>">行動方針</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/about/#about__company-name')) ?>">社名の由来</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/about/#about__logo-concept')) ?>">ロゴに込められた思い</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/about/#about__our-strengths')) ?>">SlopeManageの強み</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/about/#about__partner__link__box')) ?>">パートナー紹介</a>
        </li>
        <li class="item">
            <a class="page__link" href="<?php echo esc_url(home_url('/service')) ?>">
                <p class="text eb">Service</p>
                <p class="sub-text pc">サービス内容</p>
            </a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/service#service__ifa')) ?>">IFA紹介サービス</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/service#service__agency')) ?>">メットライフ生命の代理店事業</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/service#service__real-estate')) ?>">不動産売却のお手伝い</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/service#service__flow')) ?>">ご相談の流れ</a>
        </li>
        <li class="item">
            <a class="page__link" href="<?php echo esc_url(home_url('/achievements')) ?>">
                <p class="text eb">Achievements</p>
                <p class="sub-text pc">紹介先での事例紹介</p>
            </a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/achievements#case1')) ?>">対応事例１</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/achievements#case2')) ?>">対応事例2</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/achievements#case3')) ?>">対応事例3</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/achievements#case4')) ?>">対応事例4</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/achievements#faq')) ?>">よくある質問</a>
        </li>
        <li class="item">
            <a class="page__link" href="<?php echo esc_url(home_url('/company')) ?>">
                <p class="text eb">Company</p>
                <p class="sub-text pc">会社概要</p>
            </a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/company#greeting')) ?>">代表挨拶</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/company#background')) ?>">経歴</a>
            <a class="page__anchor" href="<?php echo esc_url(home_url('/company#information')) ?>">会社情報</a>
        </li>
        <li class="item">
            <ul class="sub-list">
                <li class="sub-item">
                    <a class="page__link" href="<?php echo esc_url(home_url('/news-archive')) ?>">
                        <p class="text eb">News</p>
                        <p class="sub-text pc">新着情報</p>
                    </a>
                </li>
                <li class="sub-item">
                    <a class="page__link" href="<?php echo esc_url(home_url('/journal')) ?>">
                        <p class="text eb">Journal</p>
                        <p class="sub-text pc">ジャーナル</p>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>