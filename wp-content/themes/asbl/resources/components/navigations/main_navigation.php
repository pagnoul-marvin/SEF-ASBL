<?php
/** @var string $nav_title */
/** @var string $logo */
/** @var string $location */

?>

<nav class="<?= $location ?>_nav flex_container">
    <h2 class="hidden"><?= $nav_title ?></h2>
    <?php if (isset($logo)) { ?>
        <a class="<?= $location ?>_nav_logo link_hover" href="http://site_sef/<?= $logo ?>" hreflang="fr"
           title="Aller vers la page d'accueil">Aller vers l&rsquo;<?= $logo ?></a>
    <?php } ?>
    <?php if (isset($burger_menu)) { ?>
        <?php component('burger_menu.label_input') ?>
    <?php } ?>
    <ul class="flex_container">
        <?php foreach (dw_get_navigation_links($location) as $link): ?>
            <li class="<?= $location ?>_nav_item">
                <a class="link_hover" href="<?= $link->url ?>"
                   title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
