<?php
/** @var string $field_name */
?>

<h2><?= get_field($field_name . '_title') ?></h2>

<div class="center">

    <?php if ($field_name === 'legal_notice_owner') { ?>

        <p class="text"><?= get_field($field_name . '_first_text') ?></p>
        <p class="text"><?= get_field($field_name . '_second_text') ?></p>
        <p class="text"><?= get_field($field_name . '_third_text') ?></p>
        <p class="text"><?= get_field($field_name . '_fourth_text') ?></p>

    <?php } else { ?>

        <p class="text"><?= get_field($field_name . '_text') ?></p>

    <?php } ?>

</div>