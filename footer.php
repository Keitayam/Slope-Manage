<?php

$theme_path = get_stylesheet_directory_uri();

?>


<footer class="footer">
    <div class="wrap__s">
        <div class="footer__logo__box">
            <a class="link" href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo $theme_path; ?>/assets/img/white_logo.svg" alt="Slope Manage">
            </a>
            <p class="text">一人では辿り着けない未来へ導くプライベートバンカー</p>
        </div>
        <div class="footer__nav__box">
            <?php get_template_part('inc/footer_nav'); ?>
        </div>
        <div class="footer__bottom">
            <div class="footer__social__link">
                <p class="text pc">Follow us</p>
                <div class="flex">
                    <a href="https://lin.ee/VogCy3A" class="link" target="_blank">
                        <figure class="img">
                            <img src="<?php echo $theme_path; ?>/assets/img/line_icon.webp" alt="">
                        </figure>
                    </a>
                </div>
            </div>
            <div class="footer__copy">
                <div class="flex">
                    <a class="link" href="<?php echo esc_url(home_url('/privacy')); ?>">Privacy policy</a>
                    <a class="link" href="<?php echo esc_url(home_url('/basic-policy')); ?>">反社会的勢力排除に関する基本方針</a>
                    <h1 class="copy eb">&copy;Slope Manage</h1>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // MW WP Formがグローバル変数として読み込まれてるか確認して再初期化
    if (typeof MWForm !== 'undefined' && typeof MWForm.init === 'function') {
      MWForm.init();
      console.log('MW WP Form re-initialized');
    }
  });
</script>
</body>

</html>