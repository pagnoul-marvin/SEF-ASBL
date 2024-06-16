<?php
/*
Template Name: Support us
*/

require BASE_PATH . '../../../vendor/autoload.php';

use App\Models\ContactFormEntries;
use Core\Database;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $form = new ContactFormEntries($db);
    $form->save();
} catch (PDOException $e) {
    echo 'fail';
}

get_header()
?>

<main>

    <section class="odd_unlinked_section spacing" id="financial">

        <h2 class="section_second_title"><?= get_field('support_contact_title_financial') ?></h2>


        <img class="filter" src="<?= get_field('support_contact_image_financial')['url'] ?>"
             alt="<?= get_field('support_contact_image_financial')['alt'] ?>"
             width="<?= get_field('support_contact_image_financial')['width'] ?>"
             height="<?= get_field('support_contact_image_financial')['height'] ?>">

        <div>
            <p><?= get_field('support_contact_first_text_financial') ?></p>

            <ul>
                <li><?= get_field('support_contact_first_account_financial') ?></li>
                <li><?= get_field('support_contact_second_account_financial') ?></li>
            </ul>

            <p><?= get_field('support_contact_second_text_financial') ?></p>
            <p><?= get_field('support_contact_third_text_financial') ?></p>
        </div>

    </section>

    <section class="even_unlinked_section spacing">

        <?php component('unlinked_section.section', [
            'field_name' => 'support_contact'
        ]); ?>

        <?php component('forms.support_form', [
            'form_action' => get_site_url() . $_SERVER['REQUEST_URI'],
            'form_id' => 'support_form',
            'first_legend' => 'Vos coordonnées',
            'second_legend' => 'Votre message',
            'object_legend' => 'Votre/vos object(s)',
            'first_field_name' => 'support_contact',
            'second_field_name' => 'lastname',
            'third_field_name' => 'firstname',
            'object_field_name' => 'object',
        ]); ?>

    </section>

</main>

<?php get_footer() ?>
