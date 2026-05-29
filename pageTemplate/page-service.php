<?php
/*
Template Name: Service
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>

<main class="pages service__page">
    <div class="bg__wrap">

        <section class="common__page__heading page__service__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb"><?php echo get_the_title(); ?></h2>
                    <p class="page__section__sub__title sh">サービス内容</p>
                </div>
                <div class="wrap__s">
                    <div class="box flex">
                        <div class="text__box">
                            <p class="title sh">プライベートバンカーとして<br>お客様とそのご家族の資産を総合的に管理</p>
                            <p class="text">
                                激動の時代にあっても、お客様とそのご家族の資産をお守りできるよう、当社ではウェルスマネジメントに関する幅広いサービスを提供しています。ウェルスマネジメントとは富裕層の方々を対象にした総合的な資産管理で、サービス内容は金融資産や不動産などの管理、さらには相続や事業承継のサポートなど多岐にわたります。そのため、当社では金融や法律、税務会計、不動産などのプロフェッショナルたちとのネットワークを構築するとともに、「AI SLOPE」という金融特化型AIツールを活用することで、質の高いウェルスマネジメントを実現しています。
                            </p>
                        </div>
                        <figure class="img">
                            <img src="<?php echo $theme_path; ?>/assets/img/service_heading.webp" alt="" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </section>

        <div class="common__index__box sp">
            <ul class="lists">
                <a class="item" href="#service__ifa">

                    <div class="anchor flex">
                        <span class="eb">01</span>
                        <p class="title eb">IFA</p>
                        <p class="text sh">お客様の理想を叶えるIFAをご紹介</p>
                    </div>
                </a>
                <a class="item" href="#service__agency">
                    <div class="anchor flex">
                        <span class="eb">02</span>
                        <p class="title eb">AGENCY</p>
                        <p class="text sh">メットライフ生命の代理店事業</p>
                    </div>
                </a>
                <a class="item" href="#service__real-estate">
                    <div class="anchor flex">
                        <span class="eb">03</span>
                        <p class="title eb">REAL ESTATE</p>
                        <p class="text sh">不動産売却のお手伝い</p>
                    </div>
                </a>
            </ul>
        </div>


        <figure class="service__img">
            <img src="<?php echo $theme_path; ?>/assets/img/service_img1.webp" alt="サービス内容イメージ" loading="lazy">
        </figure>

        <section class="section section__first">
            <div id="service__ifa" class="content ifa">
                <div class="flex content__flex">
                    <div class="title__box">
                        <div class="content__title__wrap">
                            <p class="content__title eb">01 IFA</p>
                        </div>
                        <h2 class="content__jp-title sh">IFA紹介サービス</h2>
                        <p class="text">
                            ⽇本証券アナリスト協会認定アナリストや宅地建物取引⼠など、多様なスキルとノウハウを有する人材を専任担当者としてご紹介します。また、専任担当者の専門外のご相談についても、当社が構築したプロフェッショナルネットワークを生かし、臨機応変に対応させていただきます。
                        </p>
                    </div>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/service_ifa.webp" alt="IFA" loading="lazy">
                    </figure>
                </div>
                <div class="label">
                    <p class="label__text sh">・Slope Manageだからできること</p>
                    <div class="ai-scope">
                        <p class="ai-scope__title sh">金融特化型AIツール<br class="sp">「AI SLOPE」</p>
                        <p class="ai-scope__text">当社が独自開発した「AI SLOPE」は、お客様の資産情報を取り込み、スピーディに運用状況を分析するツールで、海外の最新レポートやマーケットの分析にも対応しています。当社のプロフェッショナルたちはそこから得られた情報を精査した上で、お客様のポートフォリオを管理します。そうすることで、Face to Faceのコミュニケーションに注力し、相続や事業承継といった高度なご相談にも万全の体制で対応しています。</p>
                    </div>
                    <ul class="lists">
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/ifa_item1.webp" alt="IFAポイント" loading="lazy">
                            </figure>
                            <p class="text">お客様のお悩みや希望にマッチした専任担当者が長期にわたり、マンツーマンで対応。</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/ifa_item2.webp" alt="IFAポイント" loading="lazy">
                            </figure>
                            <p class="text">経験豊富なプロフェッショナル×AIの力で、お客様の資産を豊かにするお手伝い。</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/ifa_item3.webp" alt="IFAポイント" loading="lazy">
                            </figure>
                            <p class="text">金融資産だけでなく、不動産や相続のご相談も弊社パートナーに相談可能。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <figure class="service__img">
            <img src="<?php echo $theme_path; ?>/assets/img/service_img2.webp" alt="サービス内容イメージ" loading="lazy">
        </figure>

        <section class="section section__second">
            <div id="service__agency" class="content agency">
                <div class="flex content__flex">
                    <div class="title__box">
                        <div class="content__title__wrap">
                            <p class="content__title eb">02 AGENCY</p>
                        </div>
                        <h2 class="content__jp-title sh">メットライフ生命の代理店事業</h2>
                        <p class="text">
                            金融商品のラインアップの一つとして、当社ではメットライフ生命の保険商品を取り扱っています。必要に応じて、同社の多用な保険商品の中から適切なものを提案するほか、生命保険などの見直しについても、お客様の目線で検討し、家族の状況やライフステージに合わせた商品をお勧めします。
                        </p>
                    </div>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/service_agency.webp" alt="AGENCY" loading="lazy">
                    </figure>
                </div>
                <div class="label">
                    <p class="label__text sh">・Slope Manageだからできること</p>
                    <ul class="lists">
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/agency_item1.webp" alt="AGENCYポイント" loading="lazy">
                            </figure>
                            <p class="text">生命保険は、予期せぬ出来事に備えて家族や大切な人を守るためのものです。この重要なポイントを理解し、ご提案しております。</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/agency_item2.webp" alt="AGENCYポイント" loading="lazy">
                            </figure>
                            <p class="text">お客様だけでなくご家族を含めてベストな商品をご提案いたします。</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/agency_item3.webp" alt="AGENCYポイント" loading="lazy">
                            </figure>
                            <p class="text">経営者の「もしも」に備える法人保険についても専任担当者がご相談承ります。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>


        <figure class="service__img">
            <img src="<?php echo $theme_path; ?>/assets/img/service_img3.webp" alt="サービス内容イメージ" loading="lazy">
        </figure>

        <section class="section section__third">
            <div id="service__real-estate" class="content real-estate">
                <div class="flex content__flex">
                    <div class="title__box">
                        <div class="content__title__wrap">
                            <p class="content__title eb">03 REAL ESTATE</p>
                        </div>
                        <h2 class="content__jp-title sh">不動産売却のお手伝い</h2>
                        <p class="text">
                            不動産会社などとのネットワークを活用し、 宅地建物取引士の資格を持った専任担当者がお客様の状況に応じた不動産売買をサポートします。また、単に不動産を売買するだけでなく、不動産運用や税金対策など、プロフェッショナルとしての知見を最大限に生かしたアドバイスを行います。
                        </p>
                    </div>
                    <figure class="img">
                        <img src="<?php echo $theme_path; ?>/assets/img/service_real-estate.webp" alt="REAL ESTATE" loading="lazy">
                    </figure>
                </div>
                <div class="label">
                    <p class="label__text sh">・Slope Manageだからできること</p>
                    <ul class="lists">
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/real-estate_item1.webp" alt="REAL ESTATEポイント" loading="lazy">
                            </figure>
                            <p class="text">宅地建物取引士の資格を持った担当者がお客様の立場になってスムーズなお取引をサポート</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/real-estate_item2.webp" alt="REAL ESTATEポイント" loading="lazy">
                            </figure>
                            <p class="text">お客様のプライベートな要望や家族や秘書の方にはお願いできないようなこともおまかせ</p>
                        </li>
                        <li class="item">
                            <figure class="item__img">
                                <img src="<?php echo $theme_path; ?>/assets/img/real-estate_item3.webp" alt="REAL ESTATEポイント" loading="lazy">
                            </figure>
                            <p class="text">弁護士や公認会計士などの各種専門家と連携しながら相続・事業承継のニーズにも対応</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="service__flow" class="consultation-flow">
            <div class="wrap__s">
                <div class="title__box">
                    <p class="text sh">ご相談の流れ</p>
                    <h3 class="title eb">Flow of Consultation</h3>
                </div>
                <div class="flow__steps">

                    <div class="step flex">
                        <div class="num__box">
                            <p class="num eb">01</p>
                            <h3 class="title sh sp">お申し込み・ご予約</h3>
                        </div>
                        <div class="content">
                            <figure class="icon">
                                <img src="<?php echo $theme_path; ?>/assets/img/calendar_icon.webp" alt="カレンダーアイコン">
                            </figure>
                            <div class="text__box">
                                <h3 class="title sh pc">お申し込み•ご予約</h3>
                                <p class="text">お申し込みフォームに必要事項をご入力の上、送信してください。<br>
                                    フォーム送信後、自動返信メールに初回相談の予約のURLが添付されておりますので、そちらよりご希望の日時を選択し、ご予約ください。</p>
                                <a class="btn more" href="<?php echo esc_url(home_url('/contact')) ?>">
                                    <p class="btn__text">Contact</p>
                                    <div class="more__bg">
                                        <figure class="more__img">
                                            <img src="<?php echo $theme_path; ?>/assets/img/arrow_blue.webp" alt="">
                                        </figure>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="step flex">
                        <div class="num__box">
                            <p class="num eb">02</p>
                            <h3 class="title sh sp">担当者からの連絡</h3>
                        </div>
                        <div class="content">
                            <figure class="icon">
                                <img src="<?php echo $theme_path; ?>/assets/img/contact_icon.webp" alt="連絡アイコン">
                            </figure>
                            <div class="text__box">
                                <h3 class="title sh pc">担当者からの連絡</h3>
                                <p class="text">ご希望の日時を確認し、担当者より折り返しのご連絡をさせていただきます。<br>
                                    自動返信メールが届かない場合や、２営業日を過ぎても弊社から連絡がない場合は、一度迷惑メールのフォルダを確認ください。<br>
                                    それでも不明な場合は <a href="mailto:info@slope-manage.com">info@slope-manage.com</a>までご連絡ください。</p>
                            </div>
                        </div>
                    </div>

                    <div class="step flex">
                        <div class="num__box">
                            <p class="num eb">03</p>
                            <h3 class="title sh sp">初回面談（ヒアリング）</h3>
                        </div>
                        <div class="content">
                            <figure class="icon">
                                <img src="<?php echo $theme_path; ?>/assets/img/hearing_icon.webp" alt="ヒアリングアイコン">
                            </figure>
                            <div class="text__box">
                                <h3 class="title sh pc">初回面談（ヒアリング）</h3>
                                <p class="text">対面でのご相談はもちろん WEBでのご相談も承ります。(初回無料)<br>
                                    現在気になっていることを伺いながら、 資産の現状などを確認させていただきます。</p>
                            </div>
                        </div>
                    </div>

                    <div class="step flex">
                        <div class="num__box">
                            <p class="num eb">04</p>
                            <h3 class="title sh sp">現状分析・ご提案</h3>
                        </div>
                        <div class="content">
                            <figure class="icon">
                                <img src="<?php echo $theme_path; ?>/assets/img/research_icon.webp" alt="分析アイコン">
                            </figure>
                            <div class="text__box">
                                <h3 class="title sh pc">現状分析・ご提案</h3>
                                <p class="text">初回面談後の資産状況分析の内容を基に、お客様の現状をコンサルタントがご説明します。<br>
                                    また、現状の課題やその解決策もご提案いたします。</p>
                            </div>
                        </div>
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
