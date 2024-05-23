<?php
/*
Template Name: Support us
*/
get_header()
?>

<main>

    <section class="odd_unlinked_section spacing">

        <?php component('unlinked_section.section', [
            'field_name' => 'support_contact'
        ]); ?>

        <?php component('forms.contact_form', [
                'form_action' => get_site_url().$_SERVER['REQUEST_URI'],
                'form_id' => 'support_form',
                'first_legend' => 'Vos coordonnées',
                'second_legend' => 'Votre message',
                'amount_legend' => 'Votre montant',
                'first_field_name' => 'support_contact',
                'second_field_name' => 'lastname',
                'third_field_name' => 'firstname',
                'amount_field_name' => 'amount',
        ]); ?>

    </section>

</main>

<?php get_footer() ?>
