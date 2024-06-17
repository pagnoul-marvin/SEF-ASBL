<?php
/** @var string $field_name */
?>

<h2><?= get_field($field_name . '_title') ?></h2>

<div class="center">

    <?php if ($field_name === 'legal_notice_owner') { ?>

        <p class="text"><span itemprop="name"><?= get_field($field_name . '_first_text') ?></span></p>
        <p class="text"><span itemprop="address" itemscope itemtype="https://schema.org/PostalAddress"><?= get_field($field_name . '_second_text') ?></span></p>
        <p class="text"><span itemprop="email"><?= get_field($field_name . '_third_text') ?></span></p>
        <p class="text"><span itemprop="telephone"><?= get_field($field_name . '_fourth_text') ?></span></p>

    <?php } else { ?>

        <p class="text"><?= get_field($field_name . '_text') ?></p>

    <?php } ?>

</div>