<footer class="spacing">

    <div class="flex_container">
        <?php component('navigations.main_navigation', [
            'nav_title' => 'Navigation',
            'nav_title_class' => '',
            'location' => 'footer'
        ]) ?>

        <?php component('navigations.main_navigation', [
            'nav_title' => 'Nous contacter',
            'nav_title_class' => '',
            'location' => 'contact'
        ]) ?>

        <?php component('navigations.main_navigation', [
            'nav_title' => 'Nos réseaux sociaux',
            'nav_title_class' => '',
            'location' => 'socials'
        ]) ?>

        <?php component('navigations.main_navigation', [
            'nav_title' => 'Nos ASBL sœurs',
            'nav_title_class' => '',
            'location' => 'partners'
        ]) ?>

    </div>

    <section id="legal_notices" class="flex_container" itemscope itemtype="https://schema.org/Person">
        <h2 class="hidden">Mentions l&eacute;gales</h2>
        <p>&copy; 2024 ASBL SEF. Tous droits r&eacute;serv&eacute;s.</p>
        <p>Cr&eacute;&eacute; par <a class="link_hover" title="Aller vers le site du portfolio de Marvin Pagnoul"
                                     hreflang="fr" href="https://portfolio.marvinpagnoul.be"><span itemprop="name">Marvin Pagnoul</span></a></p>
        <a class="link_hover" href="http://site_sef.test/mentions-legales" hreflang="fr"
           title="Aller vers la page des mentions légales">Mentions l&eacute;gales</a>
    </section>

</footer>

<div id="progress_bar"></div>

</body>

</html>
