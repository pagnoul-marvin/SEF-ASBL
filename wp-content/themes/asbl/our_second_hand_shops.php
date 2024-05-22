<?php
/*
Template Name: Our second-hand shops
*/
get_header()
?>

    <main>

        <section class="odd_unlinked_section spacing">

            <?php component('list_section.section', [

                'field_name' => 'shops',
                'second_field_name' => 'first_shop',
                'third_field_name' => 'second_shop',
                'fourth_field_name' => 'third_shop',
                'article_class' => 'shops',
                'image_class' => 'filter',

            ]); ?>

        </section>

        <section class="even_unlinked_section spacing">

            <?php component('unlinked_section.section', [
                    'field_name' => 'map',
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