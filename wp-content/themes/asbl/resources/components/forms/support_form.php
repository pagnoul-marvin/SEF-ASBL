<?php
/** @var $form_action */
/** @var $form_id */
/** @var $first_legend */
/** @var $second_legend */
/** @var $object_legend */
/** @var $first_field_name */
/** @var $second_field_name */
/** @var $third_field_name */
/** @var $object_field_name */
require BASE_PATH . '../../../vendor/autoload.php';

use App\Models\SupportFormEntries;
use Core\Database;
use Core\Response;

try {
    $db = new Database(BASE_PATH . '.env.local.ini');
    $form = new SupportFormEntries($db);
    $form->save();
    $errors = $form->getErrors();
} catch (PDOException $e) {
    Response::redirect();
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

    <fieldset class="flex_container">

        <legend><?= $object_legend ?></legend>

        <div>

            <?php component('forms.labels_and_input.textarea', [
                'field_name' => $first_field_name,
                'second_field_name' => $object_field_name,
                'input_id' => 'object',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

        </div>

        <?php if (isset($errors['object'])) { ?>
            <p class="validation_errors"><?= $errors['object'] ?></p>
        <?php } ?>

    </fieldset>


    <fieldset class="flex_container">

        <legend><?= $second_legend ?></legend>

        <div>

            <?php component('forms.labels_and_input.textarea', [
                'field_name' => $first_field_name,
                'second_field_name' => null,
                'input_id' => 'message',
                'required' => null,
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
        <p>Le formulaire a bien &eacute;t&eacute; soumis. Pour d&eacute;poser votre don, rendez&ndash;vous &agrave; notre d&eacute;p&ocirc;t de meubles. Pour v&eacute;rifier les horaires et les jours d&rsquo;ouvertures, <a id="check_disponibility" href="<?= home_url() . '/nos-magasins/' ?>"
                                                             title="Se rediriger vers la page des magasins de seconde main">Voir les heures et jours du d&eacute;p&ocirc;t de meubles.</a></p>
    </div>
<?php } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errors)) { ?>
    <div id="not_validate">
        <p>Le formulaire n&rsquo;a pas &eacute;t&eacute; soumis&nbsp;! Un ou plusieurs champ(s) ne
            respecte(nt) pas les r&egrave;gles.</p>
    </div>
<?php } ?>



