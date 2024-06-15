<?php
/** @var $field_name */
/** @var $second_field_name */
/** @var $input_id */
/** @var $required */
/** @var $label_class */
?>

<label class="<?= $label_class ?>"
       for="<?= $input_id ?>"><?= get_field($field_name . '_' . $second_field_name . '_label') ?> <small
            class="small"><?php if ($input_id === 'firstname') {
            echo 'Le prénom doit au minimum contenir 3 caractères, au plus
                            255 et ne peut pas contenir de chiffres.';
        } elseif ($input_id === 'lastname') {
            echo 'Le nom doit au minimum contenir 3 caractères, au plus
                            255 et ne peut pas contenir de chiffres.';
        } ?></small></label>
<input placeholder="<?= get_field($field_name . '_' . $second_field_name . '_placeholder') ?>" type="text"
       id="<?= $input_id ?>" name="<?= $input_id ?>" <?php if (isset($required)) { ?>
    required="required"
<?php } ?>>