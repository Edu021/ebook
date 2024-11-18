<?php

/**
 * Header - Main Header
 */

if (!defined('WPINC')) {
    header('Location: /');
    exit;
}

global $configSite;

?>
<div class="main-header">
    <div class="container">
        <div class="main-logo">
            
            <a href="<?= get_site_url(); ?>" class="logo-desktop">
                <img src="<?= theme_url('public/images/logo-hangar-digital.png')?>" alt="">
            </a>
           
        </div>
        <div class="main-header__menu">
            <div class="main-menu">
                <div class="btn-header">
                    <?php //$menu = wp_get_nav_menu_items('menu-principal'); ?>
                    <?php //foreach ($menu as $item) : ?>

                        <!-- <a href="<?//= get_site_url();?>">nomedobotao</a> -->

                    <?php //endforeach; ?>

                    <h1 style="font-size: 30px; color: black; text-align: center;">HEADER</h1>
                    
                </div>
            </div>
            <div class="ham">
                <div class="ham__item"></div>
                <div class="ham__item"></div>
                <div class="ham__item"></div>
            </div>
        </div>
    </div>
</div>
<div class="<?php if (!is_page('home')) {
                echo 'breadcrumb';
            } else {
                echo 'breadcrumb-none';
            }
            echo " ";
            ?>">
    <div class="container">
        <a href="<?= site_url(); ?>" title="home">
            <svg>
                <use xlink:href="<?= theme_url('public/sprite/sprite.svg#icon_home'); ?>" />
            </svg>
        </a>
        <svg>
            <use xlink:href="<?= theme_url('public/sprite/sprite.svg#icon_arrow_right_white'); ?>" />
        </svg>
        
    </div>
</div>