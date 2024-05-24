<?php
/** @var string $field_name */
?>

<h2><?= get_field($field_name . '_title') ?></h2>

<div id="slideshow">

    <ul id="slideshow_content"><!--
			--><li>

            <img class="black_and_white" src="<?= get_field($field_name . '_first_image')['url'] ?>"
                 alt="<?= get_field($field_name . '_first_image')['alt'] ?>"
                 width="<?= get_field($field_name . '_first_image')['width'] ?>"
                 height="<?= get_field($field_name . '_first_image')['height'] ?>">

        </li><!--
			--><li>

            <img class="black_and_white" src="<?= get_field($field_name . '_second_image')['url'] ?>"
                 alt="<?= get_field($field_name . '_second_image')['alt'] ?>"
                 width="<?= get_field($field_name . '_second_image')['width'] ?>"
                 height="<?= get_field($field_name . '_second_image')['height'] ?>">

        </li><!--
			--><li>

            <img class="black_and_white" src="<?= get_field($field_name . '_third_image')['url'] ?>"
                 alt="<?= get_field($field_name . '_third_image')['alt'] ?>"
                 width="<?= get_field($field_name . '_third_image')['width'] ?>"
                 height="<?= get_field($field_name . '_third_image')['height'] ?>">

        </li><!--
			--><li>

            <img class="black_and_white" src="<?= get_field($field_name . '_fourth_image')['url'] ?>"
                 alt="<?= get_field($field_name . '_fourth_image')['alt'] ?>"
                 width="<?= get_field($field_name . '_fourth_image')['width'] ?>"
                 height="<?= get_field($field_name . '_fourth_image')['height'] ?>">

        </li><!--
			--><li>

            <img class="black_and_white" src="<?= get_field($field_name . '_fifth_image')['url'] ?>"
                 alt="<?= get_field($field_name . '_fifth_image')['alt'] ?>"
                 width="<?= get_field($field_name . '_fifth_image')['width'] ?>"
                 height="<?= get_field($field_name . '_fifth_image')['height'] ?>">

        </li>

    </ul>

</div>

<div class="flex_container">

    <button id="before" class="link_hover" title="Afficher la photo précédente">Photo pr&eacute;c&eacute;dente</button>
    <button id="after" class="link_hover" title="Afficher la photo suivante">Photo suivante</button>

</div>
