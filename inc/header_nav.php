<div class="nav__flex">
    <div class="flex pc">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'container_class' => 'header__nav',
            'menu_class' => 'lists',
            'li_class' => 'item',
        ));
        ?>
        <a class="btn" href="<?php echo esc_url(home_url('/contact')) ?>">
            <p class="btn__text">Contact</p>
        </a>
        </a>
    </div>
    <!-- <div class="sp">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'sp-header-menu',
            'container' => 'nav',
            'container_class' => 'sp__header__nav',
            'menu_class' => 'lists',
            'li_class' => 'item',
        ));
        ?>
    </div> -->
    <div class="header__toggle">
        <span></span>
        <span></span>
    </div>

</div>
<!-- /.pc -->