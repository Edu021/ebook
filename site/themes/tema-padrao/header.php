<?php

/**
 * Header (Cabeçalho do site)
 */

if (!defined('WPINC')) {
    header('Location: /');
    exit;
}

$tm = new Controller_Scripts();

?>
<!DOCTYPE html>

<html class="no-js" lang="pt-br" dir="ltr">
<?php inc('partials/head'); ?>
</head>
<?php

$page = basename($_SERVER['REQUEST_URI']);
$class = '';

if ($page === 'single-treatments.php') {
    $class = 'single-page';
} else if ($page === 'single.php') {
    $class = 'single';
}

?>

<body class="<?php echo $class; ?> overflow-hidden">

    <?php if (($_SERVER['SERVER_NAME'] != 'localhost') && ($_SERVER['SERVER_NAME'] != 'projetos.hangardigital.com.br')) : ?>

    <?php endif; ?>

    <?php //$tm->add_tag_manager_in_body() 
    ?>

    <div class="bg_load"></div>

    <header class='header'>
        <?php inc('partials/header/main-header'); ?>
    </header>