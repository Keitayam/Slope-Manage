<?php
/*
Template Name: Company
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>
<main class="pages company__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__company__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb"><?php echo get_the_title(); ?></h2>
                    <p class="page__section__sub__title sh">会社概要</p>
                </div>
                <div class="wrap__s">
                    <div id="greeting" class="box flex">
                        <div class="text__box">
                            <p class="title sh">真の顧客第一主義に基づいた<br>ウェルスマネジメントを追求します</p>
                            <p class="text">
                                複数の大手金融機関でウェルスマネジメントを担当するなかで、私は常に「組織の論理に縛られていては、真の意味でお客様のためになる提案ができない」ということを感じていました。組織が売りたい商品を優先せざるを得なくなったり、人事異動の兼ね合いでお客様にコミットし続けられない事情が生じるたびに、そのことを痛感してきました。<br>
                                そこで、私は真の顧客第一主義を実現すべく(株)Slope Manageを立ち上げました。創業以来、私が意識し続けているのはクライアントフォーカスという言葉です。これは「お客様が成功することで私たちも成功する」ということです。成功へ導くパートナーとして信頼していただけるために、私たちも現状に満足することなく日々成長し続けていきます。<br>
                                昨今の日本経済は、円安・インフレの真っ只中にありますが、過去の為替や相場の動きを考慮するかぎり、この傾向は当面、継続すると見てよいでしょう。まさに今こそ資産保全のための運用を考えるタイミングであり、政府もNISA（少額投資非課税制度）などで積極的に「貯蓄から投資へ」という流れを後押ししています。<br>
                                しかし、一方で多くの富裕層の皆様が依然として「損をするのが怖い」「運用を考えるのが面倒」と考え、二の足を踏んでいるのも事実です。当社ではプロフェッショナル×AIの力を結集し、これからも真のウェルスマネジメントのあり方を追求し続けていきますので、ぜひともご愛顧のほどよろしくお願いいたします。
                            </p>
                            <div class="sp sign__box">
                                <p class="text sh">代表取締役</p>
                                <figure class="sign">
                                    <img src="<?php echo $theme_path; ?>/assets/img/company_sign.svg" alt="坂本善治" loading="lazy">
                                </figure>
                            </div>
                        </div>
                        <div class="image__box">
                            <figure class="img">
                                <img src="<?php echo $theme_path; ?>/assets/img/company_heading.webp" alt="坂本善治" loading="lazy">
                            </figure>
                            <div class="pc image__box__text flex">
                                <p class="text sh">代表取締役</p>
                                <figure class="sign">
                                    <img src="<?php echo $theme_path; ?>/assets/img/company_sign.svg" alt="坂本善治のサイン" loading="lazy">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="background" class="professional-background">
            <div class="wrap__s">
                <div class="content">
                    <div class="title__box">
                        <p class="content__title sh">経歴</p>
                        <h2 class="content__en-title eb">Professional Background</h2>
                    </div>
                    <div class="list">
                        <div class="item flex">
                            <div class="year__box">
                                <p class="year sh">2003年</p>
                                <h3 class="year-jp">平成15年</h3>
                            </div>
                            <div class="text__box">
                                <p class="text">日興コーディアル証券に入社。個人向け金融商品の販売や資産運用のコンサルティングを行う。<br>
                                    日本証券アナリスト協会認定アナリストの資格を取得。</p>
                            </div>
                        </div>
                        <div class="item flex">
                            <div class="year__box">
                                <p class="year sh">2013年</p>
                                <h3 class="year-jp">平成25年</h3>
                            </div>
                            <div class="text__box">
                                <p class="text">三菱UFJ銀行に転職。三菱UFJモルガン・スタンレーPB証券に出向し、富裕層のお客様に対する総合的なウェルスマネジメントサービスを提供。お客様の資産状況やライフスタイルに合わせたオーダーメイドのプランを作成し、金融・投資・不動産の各分野のスペシャリストと連携して、最適なソリューションを提案。</p>
                            </div>
                        </div>
                        <div class="item flex">
                            <div class="year__box">
                                <p class="year sh">2020年</p>
                                <h3 class="year-jp">令和2年</h3>
                            </div>
                            <div class="text__box">
                                <p class="text">三井住友信託銀行に転職。UBSとの合弁会社であるUBS SuMi TRUSTの立ち上げに参画し、同社の成長に貢献。お客様の資産の税金や相続の問題を解決するために、信託やファミリーオフィスのサービスを提供。宅地建物取引士の資格を取得し、不動産も含めた資産運用に強みを持つようになる。</p>
                            </div>
                        </div>
                        <div class="item flex">
                            <div class="year__box">
                                <p class="year sh">2024年</p>
                                <h3 class="year-jp">令和6年</h3>
                            </div>
                            <div class="text__box">
                                <p class="text">株式会社Slope Manage代表取締役就任。現在に至る。</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <figure class="company__img">
            <img src="<?php echo $theme_path; ?>/assets/img/company_img.webp" alt="名古屋の街並み" loading="lazy">
        </figure>

        <section id="information" class="company-information">
            <div class="wrap__s">
                <div class="content">
                    <div class="title__box">
                        <p class="content__title sh">会社情報</p>
                        <h2 class="content__en-title eb">Company information</h2>
                    </div>
                    <div class="company_profile">
                        <div class="list">
                            <dl>
                                <dt>社名</dt>
                                <dd>株式会社Slope Manage</dd>
                            </dl>
                            <dl>
                                <dt>代表取締役</dt>
                                <dd>坂本義治</dd>
                            </dl>
                            <dl>
                                <dt>所在地</dt>
                                <dd>〒460-0008　愛知県名古屋市中区栄3-15-33 栄ガスビル13階</dd>
                            </dl>
                            <dl>
                                <dt>設立</dt>
                                <dd>2022年7月7日</dd>
                            </dl>
                            <dl>
                                <dt>事業内容</dt>
                                <dd>富裕層とIFAのマッチング事業・生命保険の募集に関する事業</dd>
                            </dl>
                            <dl>
                                <dt>営業時間</dt>
                                <dd>09:00ー17:00</dd>
                            </dl>
                            <dl>
                                <dt>定休日</dt>
                                <dd>土日祝</dd>
                            </dl>
                            <dl>
                                <dt>メールアドレス</dt>
                                <dd>info@slope-manage.com</dd>
                            </dl>
                        </div>
                        <figure class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.615607895626!2d136.90498977566986!3d35.16620615809407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370d21e5441c7%3A0xdd670993529e0c6!2z44CSNDYwLTAwMDgg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy65qCE77yT5LiB55uu77yR77yV4oiS77yT77yTIOaghOOCrOOCueODk-ODqyAxM-majg!5e0!3m2!1sja!2sjp!4v1744172532161!5m2!1sja!2sjp" width="600" height="366" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </figure>
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
                                       <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
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
                    <img src="<?php echo $theme_path; ?>/assets/img/arrow_white.webp" alt="矢印">
                </figure>
            </div>
        </div>
    </a>
</div>

<?php get_template_part('inc/contact'); ?>

<?php
get_footer();
