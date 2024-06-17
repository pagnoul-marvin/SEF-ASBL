<?php
/** @var string $field_name */
?>

<?php if ($field_name === 'first_project') { ?>

    <div itemscope itemtype="https://schema.org/Project">

        <h2 class="section_second_title"><span itemprop="name"><?= get_field($field_name . '_title') ?></span></h2>


        <img class="filter" src="<?= get_field($field_name . '_image')['url'] ?>"
             alt="<?= get_field($field_name . '_image')['alt'] ?>"
             width="<?= get_field($field_name . '_image')['width'] ?>"
             height="<?= get_field($field_name . '_image')['height'] ?>">

        <div class="center">

            <p class="text"><span itemprop="description"><?= get_field($field_name . '_first_text') ?></span></p>

        </div>
    </div>

<?php } else { ?>

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

<?php } ?>


