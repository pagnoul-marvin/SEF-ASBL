<?php get_header(); ?>

<main>

    <section class="odd spacing">

        <?php component('home.section', [
            'field_name' => 'who_are_we',
            'page' => 'Qui sommes-nous ?'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('home.section', [
            'field_name' => 'projects',
            'page' => 'Nos derniers projets'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('home.section', [
            'field_name' => 'shop',
            'page' => 'Nos magasins'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('home.section', [
            'field_name' => 'contact',
            'page' => 'Nous contacter'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('home.section', [
            'field_name' => 'gallery',
            'page' => 'Galerie photos'
        ]); ?>

    </section>

    <section class="even spacing">

        <?php component('home.section', [
            'field_name' => 'support',
            'page' => 'Nous soutenir'
        ]); ?>

    </section>

    <section class="odd spacing">

        <?php component('home.section', [
            'field_name' => 'faq',
            'page' => 'F.A.Q.'
        ]); ?>

    </section>

</main>

<?php get_footer(); ?>
