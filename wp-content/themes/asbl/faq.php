<?php
/*
Template Name: F.A.Q
*/
get_header()
?>

    <main>

        <section class="odd_faq spacing">

            <?php component('linked_section.faq_section', [
                'field_name' => 'first_question',
                'first_page' => 'la page Nous contacter',
            ]); ?>

        </section>


        <section class="even_faq spacing">

            <?php component('linked_section.faq_section', [
                'field_name' => 'second_question',
                'first_page' => 'le site des Îles de Paix',
                'second_page' => 'le site de Université de Paix',
                'third_page' => 'le site de Aide aux Personnes Déplacées',
                'fourth_page' => 'le site de Action Développement Parrainages Mondiaux',
            ]); ?>

        </section>


        <section class="odd_faq spacing">

            <?php component('linked_section.faq_section', [
                'field_name' => 'third_question',
                'first_page' => 'la page Nous soutenir',
            ]); ?>

        </section>

    </main>

<?php get_footer() ?><?php
