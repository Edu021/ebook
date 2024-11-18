<?php

/**
 * Head - Tudo dentro da tag <head>
 */

if (!defined('WPINC')) {
    header('Location: /');
    exit;
}

?>

<!-- Charset -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>tema-padrao tema-padraos</title>
<meta name="description" content="tema-padrao tema-padraos">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--Favicon IE 9 -->
<link rel="icon" type="image/x-icon" href="<?= theme_url('public/images/favicon.png') ?>" />

<!-- Favicon Outros Navegadores -->
<link rel="shortcut icon" type="image/png" href="<?= theme_url('public/images/favicon.png') ?>" />

<!-- Favicon iPhone -->
<link rel="apple-touch-icon" href="<?= theme_url('public/images/favicon.png') ?>" />

<!-- Chrome, Firefox OS and Opera - Cor primaria -->
<meta name="theme-color" content="#50f4e8" />

<!-- Safari - Cor primaria -->
<meta name="apple-mobile-web-app-status-bar-style" content="#50f4e8" />

<?php if ($_SERVER['SERVER_NAME'] != 'localhost') : ?>

<?php endif; ?>

<style type="text/css">
    .overflow-hidden {
        overflow: hidden;
    }

    .bg_load {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 999999;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        /* height:280em; */
        margin: 0;
        padding: 0;
    }

</style>

<style type="text/css">

</style>

<?php wp_head() ?>