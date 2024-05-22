<?php
/** @var $first_legend */
/** @var $second_legend */
/** @var $first_field_name */
/** @var $second_field_name */
/** @var $third_field_name */
?>

<form action="" method="POST">

    <fieldset class="flex_container">

        <legend><?= $first_legend ?></legend>

        <?php component('forms.labels_and_input.text_type', [
            'field_name' => $first_field_name,
            'second_field_name' => $second_field_name,
            'input_id' => 'lastname',
            'required' => true,
            'label_class' => 'label_positioning'
        ]) ?>

        <?php component('forms.labels_and_input.text_type', [
            'field_name' => $first_field_name,
            'second_field_name' => $third_field_name,
            'input_id' => 'firstname',
            'required' => true,
            'label_class' => 'label_positioning'
        ]) ?>

        <?php component('forms.labels_and_input.email_type', [
            'field_name' => $first_field_name,
            'input_id' => 'email',
            'required' => true,
            'label_class' => 'label_positioning'
        ]) ?>

    </fieldset>

    <fieldset class="flex_container">

        <legend><?= $second_legend ?></legend>

        <?php component('forms.labels_and_input.textarea', [
            'field_name' => $first_field_name,
            'input_id' => 'message',
            'required' => true,
            'label_class' => 'label_positioning'
        ]) ?>

    </fieldset>

    <?php component('forms.labels_and_input.submit_type') ?>

</form>
