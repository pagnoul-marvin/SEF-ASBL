<?php
/*
Template Name: Who are we ?
*/
get_header()
?>

<main>

    <section class="odd spacing">
        <?php component('linked_section.section', [
                'field_name' => 'support_section',
                'page' => 'Nous soutenir'
        ]) ?>
    </section>


</main>

<?php get_footer() ?>
