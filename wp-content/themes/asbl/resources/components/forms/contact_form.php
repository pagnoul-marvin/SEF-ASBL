<?php
/** @var $form_action */
/** @var $form_id */
/** @var $first_legend */
/** @var $second_legend */
/** @var $amount_legend */
/** @var $first_field_name */
/** @var $second_field_name */
/** @var $third_field_name */
/** @var $amount_field_name */
require BASE_PATH . '../../../vendor/autoload.php';

use App\Models\ContactFormEntries;
use Core\Database;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $form = new ContactFormEntries($db);
    $form->save();
    $errors = $form->getErrors();
} catch (PDOException $e) {
    echo 'fail';
}
?>

<form id="<?= $form_id ?>" action="<?= $form_action ?>" method="POST">

    <fieldset class="flex_container">

        <legend><?= $first_legend ?></legend>

        <div>

            <?php component('forms.labels_and_input.text_type', [
                'field_name' => $first_field_name,
                'second_field_name' => $second_field_name,
                'input_id' => 'firstname',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

            <?php if (isset($errors['firstname'])) { ?>
                <p class="validation_errors"><?= $errors['firstname'] ?></p>
            <?php } ?>

        </div>

        <div>

            <?php component('forms.labels_and_input.text_type', [
                'field_name' => $first_field_name,
                'second_field_name' => $third_field_name,
                'input_id' => 'lastname',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

            <?php if (isset($errors['lastname'])) { ?>
                <p class="validation_errors"><?= $errors['lastname'] ?></p>
            <?php } ?>

        </div>

        <div>

            <?php component('forms.labels_and_input.email_type', [
                'field_name' => $first_field_name,
                'input_id' => 'email',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

            <?php if (isset($errors['email'])) { ?>
                <p class="validation_errors"><?= $errors['email'] ?></p>
            <?php } ?>

        </div>

    </fieldset>

    <?php if ($first_field_name === 'support_contact') { ?>

        <fieldset class="flex_container">

            <legend><?= $amount_legend ?></legend>

            <div>

                <?php component('forms.labels_and_input.number_type', [
                    'field_name' => $first_field_name,
                    'second_field_name' => $amount_field_name,
                    'input_id' => 'amount',
                    'required' => true,
                    'label_class' => 'label_positioning'
                ]) ?>

            </div>

        </fieldset>

    <?php } ?>

    <fieldset class="flex_container">

        <legend><?= $second_legend ?></legend>

        <div>

            <?php component('forms.labels_and_input.textarea', [
                'field_name' => $first_field_name,
                'input_id' => 'message',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

            <?php if (isset($errors['message'])) { ?>
                <p class="validation_errors"><?= $errors['message'] ?></p>
            <?php } ?>

        </div>

    </fieldset>

    <p class="note text"><?= get_field($first_field_name . '_note') ?></p>

    <?php component('forms.labels_and_input.submit_type') ?>

</form>

<?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)) { ?>
    <div id="validate">
        <p>Votre mail a bien &eacute;t&eacute; envoy&eacute;&nbsp;! Nous vous recontacterons dans le plus bref
            d&eacute;lais.</p>
    </div>
<?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors)) { ?>
    <div id="not_validate">
        <p>Votre mail n&rsquo;a pas &eacute;t&eacute; envoy&eacute;&nbsp;! Un ou plusieurs champ(s) ne
            respecte(nt) pas les r&egrave;gles.</p>
    </div>
<?php } ?>
