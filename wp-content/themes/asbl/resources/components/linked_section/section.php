<?php
/** @var string $field_name */
/** @var string $page */
?>


<h2 class="section_second_title"><?= get_field($field_name.'_title') ?></h2>

<img class="filter" src="<?= get_field($field_name.'_image')['url'] ?>"
     alt="<?= get_field($field_name.'_image')['alt'] ?>"
     width="<?= get_field($field_name.'_image')['width'] ?>"
     height="<?= get_field($field_name.'_image')['height'] ?>">

<div class="center">

    <p class="text"><?= get_field($field_name.'_text') ?></p>

</div>

<a class="section_link" title="Aller vers la page &laquo;<?= $page ?>&raquo;"
   href="<?= esc_url(get_field($field_name.'_link')['url']); ?>"><?= esc_html(get_field($field_name.'_link')['title']); ?></a>

<p class="section_link_hover"><?= esc_html(get_field($field_name.'_link')['title']); ?></p>