<?php
/*
Template Name: Who are we ?
*/
get_header()
?>

<main>

    <section class="spacing odd_unlinked_section">

        <?php component('unlinked_section.section', [
                'field_name' => 'goal'
        ]); ?>

    </section>

    <section class="spacing even_unlinked_section">

        <?php component('list_section.section', [
                'field_name' => 'houses',
                'second_field_name' => 'first_house',
                'third_field_name' => 'second_house',
                'article_class' => 'houses',
        ]); ?>

    </section>

    <section class="odd spacing">
        <?php component('linked_section.section', [
                'field_name' => 'support_section',
                'page' => 'Nous soutenir'
        ]) ?>
    </section>


</main>

<?php get_footer() ?>
