<?php
/*
Template Name: Legal notices
*/
get_header()
?>

<main>

    <p id="last_modification"><?= get_field('legal_notice_last_modificated_date') ?></p>

    <section class="ln_even_unlinked_section spacing">

        <?php component('unlinked_section.legal_notice_section', [
                'field_name' => 'legal_notice_owner',
        ]); ?>

    </section>

    <section class="ln_odd_unlinked_section spacing">

        <?php component('unlinked_section.legal_notice_section', [
            'field_name' => 'first_legal_notice',
        ]); ?>

    </section>

    <section class="ln_even_unlinked_section spacing">


        <?php component('unlinked_section.legal_notice_section', [
            'field_name' => 'second_legal_notice',
        ]); ?>


    </section>

    <section class="ln_odd_unlinked_section spacing">

        <?php component('unlinked_section.legal_notice_section', [
            'field_name' => 'third_legal_notice',
        ]); ?>

    </section>

    <section class="ln_even_unlinked_section spacing">

        <?php component('unlinked_section.legal_notice_section', [
            'field_name' => 'fourth_legal_notice',
        ]); ?>

    </section>

    <section class="ln_odd_unlinked_section spacing">

        <?php component('unlinked_section.legal_notice_section', [
            'field_name' => 'fifth_legal_notice',
        ]); ?>

    </section>

</main>

<?php get_footer() ?>
