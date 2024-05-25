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

    <section id="no_js_banner" class="spacing">

        <h2>Votre javascript semble ne pas &ecirc;tre activ&eacute;</h2>

        <p class="text">Afin de pleinement profiter de toutes les fonctionnalit&eacute; du site, vous devriez activer Javascript. Pour activer Javascript sur votre navigateur veuillez suivre cette aide de Google&nbsp;:
            <a class="link_hover" href="https://support.google.com/adsense/answer/12654?hl=fr" hreflang="fr" title="Aller vers la page d'aide de Google">activer Javascript</a>.</p>

    </section>