<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Marvin Pagnoul">
    <meta name="description" content="<?= get_page_description(); ?>">
    <meta name="keywords" content="SEF, sef, ASBL, asbl, Service d'entraide familiale, maisons, précarité">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css') ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/index.css') ?>">
    <script type="module" src="<?= dw_asset('js/main.js'); ?>"></script>
    <title>ASBL SEF &ndash; <?= get_the_title() ?></title>
</head>
<body>
<h1><?= get_the_title() ?></h1>
    <header>
        <?php component('navigations.main_navigation', [
            'burger_menu' => true,
            'nav_title' => 'Navigation principale',
            'nav_title_class' => 'hidden',
            'logo' => 'accueil',
            'location' => 'main'
        ]) ?>

    </header>