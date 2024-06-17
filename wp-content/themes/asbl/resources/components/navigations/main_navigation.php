<?php
/** @var string $nav_title */
/** @var string $nav_title_class */
/** @var string $logo */
/** @var string $location */
?>

<nav class="<?= $location ?>_nav flex_container">
    <h2 class="<?= $nav_title_class ?>"><?= $nav_title ?></h2>
    <?php if (isset($logo)) { ?>
        <a class="<?= $location ?>_nav_logo link_hover" href="http://site_sef.test/" hreflang="fr"
           title="Aller vers la page d'accueil">Aller vers l&rsquo;<?= $logo ?></a>
    <?php } ?>
    <?php if (isset($burger_menu)) { ?>
        <?php component('burger_menu.label_input') ?>
    <?php } ?>
    <?php if ($location === 'main') { ?>
        <div>
            <ul class="flex_container">
                <?php foreach (dw_get_navigation_links($location) as $link): ?>
                    <li class="<?= $location ?>_nav_item">
                        <a class="link_hover" href="<?= $link->url ?>"
                           title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php } else { ?>
        <ul class="flex_container">
            <?php if ($location === 'contact') {
                foreach (dw_get_navigation_links($location) as $link): ?>
                    <li class="<?= $location ?>_nav_item">
                        <p><?= $link->label ?></p>
                    </li>
                <?php endforeach;
            } else {
                foreach (dw_get_navigation_links($location) as $link): ?>
                    <?php if ($location === 'partners'): ?>
                        <li class="<?= $location ?>_nav_item" itemscope itemtype="https://schema.org/Organization">
                            <a itemprop="url" class="link_hover" href="<?= $link->url ?>"
                               title="Aller vers la page <?= $link->label ?>"><span
                                        itemprop="name"><?= $link->label ?></span></a>
                        </li>
                    <?php elseif ($location === 'socials'): ?>
                        <li class="<?= $location ?>_nav_item" itemscope itemtype="https://schema.org/Organization">
                            <a itemprop="sameAs" class="link_hover" href="<?= $link->url ?>"
                               title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                        </li>

                    <?php else: ?>
                        <li class="<?= $location ?>_nav_item">
                            <a class="link_hover" href="<?= $link->url ?>"
                               title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                        </li>

                    <?php endif; ?>
                <?php endforeach;
            } ?>

        </ul>
    <?php } ?>
</nav>
