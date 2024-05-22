<?php
/** @var $field_name */
/** @var $input_id */
/** @var $label_class */
?>

<label class="<?= $label_class ?>" for="<?= $input_id ?>"><?= get_field($field_name . '_mail_label') ?></label>
<input placeholder="<?= get_field($field_name. '_mail_placeholder') ?>" type="email" id="<?= $input_id ?>" name="<?= $input_id ?>" required="required">