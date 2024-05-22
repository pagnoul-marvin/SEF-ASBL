<?php
/** @var string $field_name */
?>


<h2 class="section_second_title"><?= get_field($field_name . '_title') ?></h2>


<img class="filter" src="<?= get_field($field_name . '_image')['url'] ?>"
     alt="<?= get_field($field_name . '_image')['alt'] ?>"
     width="<?= get_field($field_name . '_image')['width'] ?>"
     height="<?= get_field($field_name . '_image')['height'] ?>">

<div class="center">

    <?php if ($field_name === 'map' || $field_name === 'mail_contact') { ?>

        <p class="text"><?= get_field($field_name . '_first_text') ?></p>


    <?php } else { ?>

        <p class="text"><?= get_field($field_name . '_first_text') ?></p>

        <p class="text"><?= get_field($field_name . '_second_text') ?></p>

    <?php } ?>

</div>