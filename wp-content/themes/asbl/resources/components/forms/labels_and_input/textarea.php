<?php
/** @var $field_name */
/** @var $input_id */
/** @var $required */
/** @var $label_class */
?>

<label class="<?= $label_class ?>" for="<?= $input_id ?>"><?= get_field($field_name . '_textarea') ?></label>
<textarea placeholder="<?= get_field($field_name. '_textarea_placeholder') ?>" id="<?= $input_id ?>" name="<?= $input_id ?>" rows="10" <?php if (isset($required)) { ?>
    required="required"
<?php } ?>></textarea>
