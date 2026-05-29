<?php
/*
Template Name: Partner
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>
<main class="pages partner__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__partner__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb">Partner</h2>
                    <p class="page__section__sub__title sh">パートナー紹介</p>
                </div>
                <div class="wrap__s">
                    <div class="box flex">
                        <div class="text__box">
                            <p class="title sh">個人・組織双方のニーズに<br>柔軟かつ的確に対応できるネットワーク</p>
                            <p class="text">
                                弁護士や公認会計士、税理士、不動産会社といったプロフェッショナルたちとのネットワークを生かし、資産運用だけでなく、相続からM&Aを活⽤した事業承継など、幅広いサービスを提供します。個人・組織の双方のお悩みにワンストップで対応できる体制を整えていますので、まずは気軽にご相談ください。
                            </p>
                        </div>
                        <figure class="img">
                            <img src="<?php echo $theme_path; ?>/assets/img/partner_heading.webp" alt="パートナー紹介" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <div class="wrap__s">
            <div class="partner__anchor__list">
                <a href="#partner-lawyer" class="item">
                    <p class="text sh">弁護士</p>
                </a>
                <a href="#partner-ifa" class="item">
                    <p class="text sh">IFA</p>
                </a>
                <a href="#partner-cpa" class="item">
                    <p class="text sh">公認会計士</p>
                </a>
                <a href="#partner-realtor" class="item">
                    <p class="text sh">宅地建物取引士</p>
                </a>
                <a href="#partner-company" class="item">
                    <p class="text sh">協力企業</p>
                </a>

            </div>
        </div>


        <section>
            <div class="wrap__s">
                <div class="partner__list">
                    <div id="partner-lawyer" class="partner__card flex">
                        <figure class="partner__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/kumagai.webp" alt="熊谷考人" loading="lazy">
                        </figure>
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Takato Kumagai</span>
                                <p class="name sh">熊谷考人</p>
                            </div>
                            <div class="role__box">
                                <p class="role">中日綜合法律事務所 弁護士 / Lawyer</p>
                                <ul class="tag__list">
                                    <li class="item">相続</li>
                                    <li class="item">遺言</li>
                                    <li class="item">財産管理</li>
                                    <li class="item">企業法務</li>
                                </ul>
                            </div>
                            <div class="bio__box">
                                <p class="bio">2008年3月 新司法試験合格<br>
                                    2009年12月 最高裁判所司法研修所修了（新６２期）・弁護士登録（愛知県弁護士会）<br>
                                    永井・江坂法律事務所（（現）中日綜合法律事務所）入所（アソシエイト）<br>
                                    2015年1月 永井・江坂法律事務所（（現）中日綜合法律事務所）パートナー就任</p>
                                <a class="home" href="https://www.chunichi-law.jp/" target="_blank">
                                    <p class="text sh">中日綜合法律事務所</p>
                                    <figure class="img">
                                        <img src="<?php echo $theme_path; ?>/assets/img/partner_home_icon.webp" alt="家アイコン" loading="lazy">
                                    </figure>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div id="partner-ifa" class="partner__card flex">
                        <figure class="partner__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/matsushita.webp" alt="松下洋祐" loading="lazy">
                        </figure>
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Yosuke Matsushita</span>
                                <p class="name sh">松下洋祐</p>
                            </div>
                            <div class="role__box">
                                <p class="role">独立系ファイナンシャルアドバイザー / IFA</p>
                                <ul class="tag__list">
                                    <li class="item">資産運用</li>
                                    <li class="item">M&A</li>
                                    <li class="item">事業承継</li>
                                </ul>
                            </div>
                            <div class="bio__box">
                                <p class="bio">2006年、野村證券入社、2014年に三菱UFJモルガン・スタンレーPB証券を経て、2019年、クレディスイス証券のプライベートバンク部門で資産運用、事業承継、M&A等を行う。現在は企業経営者や医師などの富裕層、事業法人などの資産運用を行っている。</p>
                            </div>
                        </div>
                    </div>

                    <div class="partner__card flex">
                        <figure class="partner__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/hagiuda.webp" alt="萩生田和宏" loading="lazy">
                        </figure>
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Kazuhiro Hagiuda</span>
                                <p class="name sh">萩生田和宏</p>
                            </div>
                            <div class="role__box">
                                <p class="role">独立系ファイナンシャルアドバイザー / IFA</p>
                                <ul class="tag__list">
                                    <li class="item">資産運用</li>
                                    <li class="item">保険</li>
                                    <li class="item">相続</li>
                                    <li class="item">不動産</li>
                                </ul>
                            </div>
                            <div class="bio__box">
                                <p class="bio">2003年、大和証券に入社。個人富裕層、未上場法人、上場法人を多数担当し、資産コンサルティング業務を経験。2015年より三菱UFJモルガン・スタンレーPB証券に出向し、富裕層、超富裕層のお客様に対するプライベートウェルスマネジメント業務を経験。プロファイリングに基づいた資産管理、運用提案、コンサルティング業務を行う。2024年より独立系ファイナンシャルアドバイザー(IFA)として活動を開始。資産管理だけでなく、保険、不動産、相続などお客様のニーズに沿った幅広いサービスをワンストップで提供している。</p>
                            </div>
                        </div>
                    </div>

                    <div class="partner__card flex">
                        <figure class="partner__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/oishi.webp" alt="大石純平" loading="lazy">
                        </figure>
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Junpei Oishi</span>
                                <p class="name sh">大石純平</p>
                            </div>
                            <div class="role__box">
                                <p class="role">独立系ファイナンシャルアドバイザー / IFA</p>
                                <ul class="tag__list">
                                    <li class="item">M＆A</li>
                                    <li class="item">事業承継</li>
                                    <li class="item">資産管理</li>
                                    <li class="item">相続</li>
                                </ul>
                            </div>
                            <div class="bio__box">
                                <p class="bio">2006年 野村證券株式会社入社。横浜・広島で法人及び個人富裕層を担当。
                                    2013年 三菱UFJメリルリンチPB証券株式会社入社。金融資産1億円以上の富裕層に対し、プライベートバンカーとして100世帯、150億円の資産管理に従事。
                                    引き継がれるファミリーのご資産を中長期的かつ総合的に見守る資産管理の専門家の必要性を感じ、2020年8月に独立、FOJを設立。
                                    ４児の父、趣味は美食活動、ゴルフ、サウナ、アウトドア。</p>
                            </div>
                        </div>
                    </div>

                    <div id="partner-cpa" class="partner__card flex">
                        <figure class="partner__img">
                            <img src="<?php echo $theme_path; ?>/assets/img/hibi.webp" alt="日比大介" loading="lazy">
                        </figure>
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Daisuke Hibi</span>
                                <p class="name sh">日比大介</p>
                            </div>
                            <div class="role__box">
                                <p class="role">公認会計士 税理士 / 税理士法人日比会計 代表社員 /<br>
                                    Certified Public Accountant, Tax accountant</p>
                                <ul class="tag__list sp">
                                    <li class="item">税務</li>
                                    <li class="item">会計</li>
                                    <li class="item">監査</li>
                                </ul>
                            </div>
                            <div class="bio__box">
                                <p class="bio">2004年 監査法人トーマツ（現 有限責任監査法人トーマツ）東京事務所 入社<br>
                                    2007年 税理士法人トーマツ（現 デロイトトーマツ税理士法人）名古屋事務所 入社<br>
                                    2009年 日比会計事務所 入社<br>
                                    2015年 日比会計事務所 代表 着任<br>
                                    2022 年 税理士法人日比会計 代表社員 着任<br>
                                    全国各地の取締役・監査役にも就任。</p>
                            </div>
                        </div>
                    </div>

                    <div id="partner-realtor" class="partner__card partner__card__s flex">
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Kensuke Yamamoto</span>
                                <p class="name sh">山本健祐</p>
                            </div>
                            <div class="role__box">
                                <p class="role">株式会社サンユー 代表取締役 /<br>
                                    Representative Director and President</p>
                                <ul class="tag__list">
                                    <li class="item">不動産</li>
                                    <li class="item">遺言</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bio__box">
                            <p class="bio">2012年　不動産関連の会社にて独立に向けて名古屋市内にて個人・法人のお客様に土地・建物・収益物件の販売を経験。<br>
                                2018年　株式会社サンユー設立し、全国各地の不動産の買取・販売を中心に活動。</p>
                            <ul class="tag__list pc">
								<li class="item">不動産</li>
                                <li class="item">相続</li>
                            </ul>
                            <a class="home" href="https://sanyu-realestate.com/company/" target="_blank">
                                <p class="text sh">株式会社サンユー</p>
                                <figure class="img">
                                    <img src="<?php echo $theme_path; ?>/assets/img/partner_home_icon.webp" alt="家アイコン" loading="lazy">
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div id="partner-company" class="partner__card partner__card__s flex">
                        <div class="info">
                            <div class="name__box">
                                <span class="en-name eb">Tigre Group</span>
                                <p class="name sh">ティグレグループ</p>
                            </div>
                            <div class="role__box">
                                <p class="role">協力企業 / Cooperating companies</p>
                                <ul class="tag__list">
                                    <li class="item">税務会計</li>
                                    <li class="item">経営改善</li>
                                    <li class="item">事業承継</li>
                                </ul>
                            </div>
                        </div>
                        <div class="bio__box">
                            <p class="bio">税務会計を中心に経営改善や事業承継など様々なコンサルティングサービスを提供することで、事業の継続や成長発展を総合的にサポートしている。</p>
                            <ul class="tag__list pc">
                                <li class="item">税務会計</li>
                                <li class="item">経営改善</li>
                                <li class="item">事業承継</li>
                            </ul>
                            <a class="home" href="https://www.tigrenet.ne.jp/" target="_blank">
                                <p class="text sh">ティグレグループ</p>
                                <figure class="img">
                                    <img src="<?php echo $theme_path; ?>/assets/img/partner_home_icon.webp" alt="家アイコン" loading="lazy">
                                </figure>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</main>


<?php get_template_part('inc/breadcrumb'); ?>


<div class="common__btn__boxes">
    <a class="btn__box company__box" href="<?php echo esc_url(home_url('/company')) ?>">
        <div class="text__box">
            <p class="en-text eb">Company</p>
            <p class="text sh">会社概要</p>
        </div>
        <div class="btn white">
            <p class="btn__text">View all</p>
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
