<?php
/*
Template Name: privacy
*/
$theme_path = get_stylesheet_directory_uri();
get_header();
?>

<main class="pages privacy__page">


        <section class="common__page__heading page__privacy__heading">
            <div class="wrap">
                <div class="common__page__heading__box">
                    <h2 class="page__section__title eb"><?php echo get_the_title(); ?></h2>
                    <p class="page__section__sub__title sh">プライバシーポリシー</p>
                </div>
            </div>
        </section>


        <section class="privacy page">
            <div class="wrap__s">
                <div class="text__boxes">
                    <p class="heading sh">お問い合わせフォームにおける個人情報の取り扱いについて</p>
                    <p class="sub-heading">当社は、個人情報保護の重要性を深く認識するとともに、「個人情報保護方針」に従い、下記に記載のとおり個人情報を適切に取り扱います。</p>
                    <div class="text__box">
                        <h3 class="title sh">1（事業者名）</h3>
                        <span></span>
                        <p class="text">
                            株式会社Slope Manage
                        </p>
                    </div>

                    <div class="text__box">
                        <h3 class="title sh">2（個人情報保護管理者）</h3>
                        <span></span>
                        <p class="text">
                            株式会社Slope Manage（担当者：坂本 義治）<br>
                            〒460-0008 愛知県名古屋市中区栄3-15-33 栄ガスビル13階<br>
                            TEL：052-717-5084（受付時間　平日09:00～17:00）
                        </p>
                    </div>

                    <div class="text__box">
                        <h3 class="title sh">3（個人情報の利用目的）</h3>
                        <span></span>
                        <p class="text">
                            お問い合わせフォームでお客様にご入力いただいた氏名、連絡先、お問い合わせ内容等の個人情報は、当社へのお問い合わせの回答およびそのご連絡のためにのみ利用させていただきます。
                        </p>
                    </div>

                    <div class="text__box">
                        <h3 class="title sh">４（第三者への提供について）</h3>
                        <span></span>
                        <p class="text">
                            当社は法令に基づく場合を除いて、お客様の個人情報を当該本人の同意を得ず第三者に提供することはありません。
                        </p>
                    </div>

                    <div class="text__box">
                        <h3 class="title sh">5（個人情報の取扱業務の委託）</h3>
                        <span></span>
                        <p class="text">
                            お問い合わせに関しての業務委託はありません。
                        </p>
                    </div>

                    <div class="text__box">
                        <h3 class="title sh">6（お客様が当社に個人情報を与えることの任意性）</h3>
                        <span></span>
                        <p class="text">
                            お客様が当社に個人情報を与えることは任意です。ただし、お客様が当社に個人情報を与えない場合には、当社からの返信やサービスの提供ができない場合がありますので、あらかじめご了承ください
                        </p>
                    </div>
                    <div class="text__box">
                        <h3 class="title sh">7（お預かりする保有個人データに関する権利）</h3>
                        <span></span>
                        <p class="text">
                            お客様には、ご自身の個人情報の利用目的の通知、個人情報の開示、訂正、追加、削除の要求、利用または提供の拒否をする権利があります。当社は、保有個人データに該当しないが、お客様から求められる利用目的の通知、開示、内容の訂正、追加または削除、利用の停止、消去および第三者への提供の停止の請求などの全てに応じることができる権限を有する個人情報についても、保有個人データと同様に取り扱います。必要な場合には、上記個人情報保護管理者までご連絡ください。
                        </p>
                    </div>
                    <div class="text__box">
                        <h3 class="title sh">8（当社WebサイトにおけるIPアドレスやCookie（クッキー）の使用について）</h3>
                        <span></span>
                        <p class="text">
                            当社では、標準的なウェブサーバログシステム（Google Analytics）を利用し、アクセス元のIPアドレス、Cookie等のログファイルを取得しています。当社は必要に応じ、セキュリティに関する問題の原因分析等の目的でこれらのログファイルを利用することがありますが、それによってユーザ－個人を特定する情報を収集することはありません。
                            お使いのブラウザによっては、その設定を変更して、Cookieの機能を無効にすることができます。なお、Cookieを無効にした場合は、ウェブサイトの利用時に不都合が生じる可能性があります。<br>
                            Google Analyticsの利用規約とプライバシーポリシーの詳細につきましては下記のURLにてご確認ください。</p>
                        <a class="link" href="https://policies.google.com/privacy?hl=ja">https://policies.google.com/privacy?hl=ja</a>
                    </div>
                </div>

            </div>

        </section>
</main>
<?php get_template_part('inc/contact'); ?>


<?php
get_footer();
