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
?>

<form id="<?= $form_id ?>" action="<?= $form_action ?>" method="POST">

    <fieldset class="flex_container">

        <legend><?= $first_legend ?></legend>

        <div>

            <?php component('forms.labels_and_input.text_type', [
                'field_name' => $first_field_name,
                'second_field_name' => $second_field_name,
                'input_id' => 'lastname',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

        </div>

        <div>

            <?php component('forms.labels_and_input.text_type', [
                'field_name' => $first_field_name,
                'second_field_name' => $third_field_name,
                'input_id' => 'firstname',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

        </div>

        <div>

            <?php component('forms.labels_and_input.email_type', [
                'field_name' => $first_field_name,
                'input_id' => 'email',
                'required' => true,
                'label_class' => 'label_positioning'
            ]) ?>

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

        </div>

    </fieldset>

    <p class="note text"><?= get_field($first_field_name.'_note') ?></p>

    <?php component('forms.labels_and_input.submit_type') ?>

</form>
