<?php
?>

<?php
/** @var $field_name */
/** @var $second_field_name */
/** @var $input_id */
/** @var $required */
/** @var $label_class */
?>

<label class="<?= $label_class ?>"
       for="<?= $input_id ?>"><?= get_field($field_name . '_' . $second_field_name . '_label') ?></label>
<input placeholder="<?= get_field($field_name . '_' . $second_field_name . '_placeholder') ?>" type="number"
       id="<?= $input_id ?>" name="<?= $input_id ?>" <?php if (isset($required)) { ?>
    required="required"
<?php } ?>>
