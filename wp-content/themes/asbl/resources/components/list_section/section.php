<?php
/** @var string $field_name */
/** @var string $second_field_name */
/** @var string $third_field_name */
/** @var string $article_class */
?>


<h2 class="section_second_title"><?= get_field($field_name . '_title') ?></h2>

<img class="filter" src="<?= get_field($field_name . '_image')['url'] ?>"
     alt="<?= get_field($field_name . '_image')['alt'] ?>"
     width="<?= get_field($field_name . '_image')['width'] ?>"
     height="<?= get_field($field_name . '_image')['height'] ?>">

<div class="center">

    <p class="text"><?= get_field($field_name . '_first_text') ?></p>

    <p class="text"><?= get_field($field_name . '_second_text') ?></p>

</div>

<article class="<?= $article_class ?>">

    <h3 class="hidden"><?= get_field($field_name . '_' . $second_field_name . '_title') ?></h3>

    <img class="<?= $article_class ?>_image" src="<?= get_field($field_name . '_' . $second_field_name . '_image')['url'] ?>"
         alt="<?= get_field($field_name . '_' . $second_field_name . '_image')['alt'] ?>"
         width="<?= get_field($field_name . '_' . $second_field_name . '_image')['width'] ?>"
         height="<?= get_field($field_name . '_' . $second_field_name . '_image')['height'] ?>">

    <ul class="<?= $article_class ?>_list">

        <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_first_list_element') ?></li>
        <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_second_list_element') ?></li>

    </ul>

</article>

<article class="<?= $article_class ?>">

    <h3 class="hidden"><?= get_field($field_name . '_' . $third_field_name . '_title') ?></h3>

    <img class="<?= $article_class ?>_image" src="<?= get_field($field_name . '_' . $third_field_name . '_image')['url'] ?>"
         alt="<?= get_field($field_name . '_' . $third_field_name . '_image')['alt'] ?>"
         width="<?= get_field($field_name . '_' . $third_field_name . '_image')['width'] ?>"
         height="<?= get_field($field_name . '_' . $third_field_name . '_image')['height'] ?>">

    <ul class="<?= $article_class ?>_list">

        <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_first_list_element') ?></li>
        <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_second_list_element') ?></li>
        <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_third_list_element') ?></li>

    </ul>

</article>

