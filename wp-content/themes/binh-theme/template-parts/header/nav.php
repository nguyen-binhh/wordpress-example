<?php

/**
 * Header Navigation template.
 * 
 * @package Binh
 */
// create a object of class Menus from name space Binh_theme\Inc
$menu_class = \Binh_Theme\Inc\Menus::get_instance();
// get ID from menu with name 'binh-header-menu'
$header_menu_id = $menu_class->get_menu_id('binh-header-menu');

// Retrieve the list of menu items for the menu with the ID $header_menu_id. 
$header_menus = wp_get_nav_menu_items($header_menu_id);
// echo '<pre>';
// print_r($header_menus);
// wp_die();
?>
<div class="header">
    <div class="header-left">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" class="img-fluid rounded-top" alt="">
    </div>

    <div class="header-right">
        <div class="header-right-hotline">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon-phone.png" class="img-fluid rounded-top" alt="">
            <span class="hotline">Hotline: <strong>(028) 3838 2155</strong></span>
        </div>

        <div class="line">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/line.png" class="img-fluid rounded-top" alt="">
        </div>

        <div class="header-right-guide">
            Hướng dẫn khách hàng
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/chevdown-icon.svg" class="img-fluid rounded-top" alt="">
        </div>

        <div class="line">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/line.png" class="img-fluid rounded-top" alt="">
        </div>

        <div class="header-right-booking">
            <button class="header-right-btn">
                Đặt lịch
            </button>
        </div>

        <div class="line">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/line.png" class="img-fluid rounded-top" alt="">
        </div>
        <div class="header-right-search">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/icon-search.png" class="img-fluid rounded-top search-icon" alt="">
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FFF !important;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        if (!empty($header_menus) && is_array($header_menus)) {
        ?>
            <ul class="navbar-nav mr-auto nav-list">
                <?php
                foreach ($header_menus as $menu_item) {
                    if (!$menu_item->menu_item_parent) {
                        $child_menu_items = $menu_class->get_child_menu_items($header_menus, $menu_item->ID);
                        $has_children = !empty($child_menu_items) && is_array($child_menu_items);
                        if (!$has_children) {
                ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo esc_url($menu_item->url) ?>"><?php echo esc_html($menu_item->title) ?></a>
                            </li>
                        <?php
                        } else {
                        ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo esc_url($menu_item->url) ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo esc_html($menu_item->title) ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php
                                    foreach ($child_menu_items as $child_menu_item) {
                                    ?>
                                        <a href="<?php echo esc_url($child_menu_item->url) ?>" class="dropdown-item">
                                            <?php echo esc_html($child_menu_item->title) ?></a>
                                    <?php
                                    }
                                    ?>
                            </li>
                        <?php
                        }
                        ?>


                <?php
                    }
                }
                ?>
            </ul>
        <?php
        }
        ?>
    </div>
</nav>