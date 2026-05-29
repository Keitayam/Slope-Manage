<?php

if (!session_id() && !is_admin()) {
    session_start();
}

function disable_cache_on_all_pages() {
    if (!is_admin()) {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Expires: 0");
    }
}
add_action('send_headers', 'disable_cache_on_all_pages');




function add_my_files()
{
    wp_enqueue_style('original-style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_script('header-script', get_stylesheet_directory_uri() . '/js/header.js');

    // GSAP 本体
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), null, true);
    wp_enqueue_script('gsap-scroll-trigger', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap'), null, true);
    wp_enqueue_script('gsap-script', get_stylesheet_directory_uri() . '/js/gsap.js', array('gsap', 'gsap-scroll-trigger'), null, true);
}

add_action('wp_enqueue_scripts', 'add_my_files');

function load_custom_scripts()
{
    if (is_front_page()) {
        wp_enqueue_script('slider-script', get_stylesheet_directory_uri() . '/js/slider.js');
        wp_enqueue_script('text-animation-script', get_stylesheet_directory_uri() . '/js/text-animation.js');
    }

    if (is_page('achievements')) {
        wp_enqueue_script('accordion-script', get_stylesheet_directory_uri() . '/js/accordion.js');
    }

    if (is_page('news')) {
        wp_enqueue_script('tab-script', get_stylesheet_directory_uri() . '/js/tab.js');
    }
    
    // お問い合わせ
    if (is_page('contact')) {
        $contact_js  = get_stylesheet_directory() . '/js/contact.js';
        $contact_css = get_stylesheet_directory() . '/css/contact.css';

        wp_enqueue_script(
            'contact-script',
            get_stylesheet_directory_uri() . '/js/contact.js',
            array(),
            filemtime($contact_js),
            true
        );
        wp_enqueue_style(
            'contact-style',
            get_stylesheet_directory_uri() . '/css/contact.css',
            array(),
            filemtime($contact_css)
        );
    }
}
add_action('wp_enqueue_scripts', 'load_custom_scripts');

//nav登録
function my_theme_setup()
{

    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'header-modal-menu' => 'Header Modal Menu',
        'sp-header-menu' => 'SP Header Menu',
    ));
}
add_action('after_setup_theme', 'my_theme_setup');

//nav　li　class付与
function add_class_on_li($classes, $item, $args)
{
    if (isset($args->li_class)) {
        $classes[] = $args->li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_on_li', 1, 3);


function setup_theme()
{
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');


function my_custom_nav_menu_items($items, $args)
{
    $home_url = home_url('/');
    $items = str_replace('<a href="/">', '<a href="' . $home_url . '">', $items);
    return $items;
}

// 確認ページでキャッシュを無効化
function disable_cache_on_confirm_page() {
    if (is_page('confirm')) {
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    }
}
add_action('send_headers', 'disable_cache_on_confirm_page');

function custom_autoreply_by_inquiry_type($contact_form)
{
    $submission = WPCF7_Submission::get_instance();

    if (!$submission) return;

    $posted_data = $submission->get_posted_data();

    // セレクトボックスの値を取得（name="select-370"）
    $inquiry_type = isset($posted_data['select-370']) ? (is_array($posted_data['select-370']) ? implode(', ', $posted_data['select-370']) : $posted_data['select-370']) : '';

    // メール2（= mail_2）を取得
    $mail_2 = $contact_form->prop('mail_2');

    // 自動返信メールの本文を出し分け
    if ($inquiry_type === '面談のご予約・ご相談') {
        $mail_2['body'] =
            "面談のご予約・ご相談ありがとうございます。\n\n" .
            "下記URLから面談のお申し込みをお願いします。\n" .
            "https://timerex.net/s/slopemanage_f411/836a723e/\n\n" .
            "------------------\n" .
            "※このメールは自動返信です。\n";
    } else {
        $mail_2['body'] =
            "お問い合わせありがとうございました。下記内容にて受け付けました。\n\n" .
            "--- お問い合わせ内容 ---\n\n" .
            "お問い合わせカテゴリー：" . $inquiry_type . "\n" .
            "名前：" . htmlspecialchars($posted_data['your-name'], ENT_QUOTES, 'UTF-8') . "\n" .
            "メールアドレス：" . htmlspecialchars($posted_data['your-email'], ENT_QUOTES, 'UTF-8') . "\n" .
            "電話番号：" . htmlspecialchars($posted_data['tel'], ENT_QUOTES, 'UTF-8') . "\n" .
            "お問合せ内容：" . htmlspecialchars($posted_data['content'], ENT_QUOTES, 'UTF-8') . "\n\n" .
            "------------------\n" .
            "※このメールは自動返信です。\n";
    }

    // メール2を更新
    $contact_form->set_properties(['mail_2' => $mail_2]);
}
add_action('wpcf7_before_send_mail', 'custom_autoreply_by_inquiry_type');

// サンクスページ
add_action( 'wp_footer', function() {
    ?>
    <script>
    document.addEventListener('wpcf7mailsent', function(event) {
        window.location.href = '/thanks/';
    }, false);
    </script>
    <?php
});

