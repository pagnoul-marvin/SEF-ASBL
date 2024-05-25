<?php
/*
Template Name: Contact us
*/

require BASE_PATH . '../../../vendor/autoload.php';

use Core\Database;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $errors = $db->getErrors();
} catch (PDOException) {
    echo 'fail';
}

get_header();

?>

<main>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'phone_contact',
            'page' => ''
        ]); ?>

    </section>

    <section class="even_unlinked_section spacing">

        <?php component('unlinked_section.section', [
            'field_name' => 'mail_contact'
        ]); ?>

        <?php component('forms.contact_form', [
            'form_action' => get_site_url() . $_SERVER['REQUEST_URI'],
            'form_id' => 'contact_form',
            'first_legend' => 'Vos coordonnées',
            'second_legend' => 'Votre message',
            'first_field_name' => 'mail_contact',
            'second_field_name' => 'firstname',
            'third_field_name' => 'lastname',
        ]) ?>

    </section>

    <section class="odd spacing">

        <?php component('linked_section.section', [
            'field_name' => 'support_section',
            'page' => 'Nous soutenir',
        ]); ?>

    </section>

</main>

<?php get_footer() ?>
