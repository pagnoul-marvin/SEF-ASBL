<?php
/** @var string $nav_title */
/** @var string $logo */
/** @var string $location */
?>

<nav>
    <h2><?= $nav_title ?></h2>
    <ul>
        <?php if (isset($logo)){ ?>
            <a href="http://site_sef/<?= $logo ?>" hreflang="fr" title="Aller vers la page d'accueil">Aller vers l&rsquo;<?= $logo ?></a>
        <?php } ?>
        <?php foreach (dw_get_navigation_links($location) as $link): ?>
            <li class="main_nav_container_item">
                <a class="link_hover" href="<?= $link->url ?>" title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
