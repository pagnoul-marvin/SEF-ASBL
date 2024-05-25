<?php
/** @var string $field_name */
/** @var string $page */
?>


<h2 class="section_second_title"><?= get_field($field_name . '_title') ?></h2>

<img class="filter" src="<?= get_field($field_name . '_image')['url'] ?>"
     alt="<?= get_field($field_name . '_image')['alt'] ?>"
     width="<?= get_field($field_name . '_image')['width'] ?>"
     height="<?= get_field($field_name . '_image')['height'] ?>">

<div class="center">

    <p class="text"><?= get_field($field_name . '_text') ?></p>

</div>

<?php if ($field_name !== 'phone_contact') { ?>

    <a class="section_link" title="Aller vers la page &laquo;<?= $page ?>&raquo;"
       href="<?= esc_url(get_field($field_name . '_link')['url']); ?>"><?= esc_html(get_field($field_name . '_link')['title']); ?></a>

    <p class="section_link_hover"><?= esc_html(get_field($field_name . '_link')['title']); ?></p>

<?php } else { ?>

    <a class="section_link" title="Appeler le numéro &laquo;<?= get_field($field_name.'_link') ?>&raquo;"
       href="<?= get_field($field_name . '_link') ?>"><?= get_field($field_name . '_link'); ?></a>

    <p class="section_link_hover"><?= esc_html(get_field($field_name . '_link')); ?></p>

<?php } ?>




