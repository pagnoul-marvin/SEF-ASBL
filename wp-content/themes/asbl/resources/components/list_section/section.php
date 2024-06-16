<?php
/** @var string $field_name */
/** @var string $second_field_name */
/** @var string $third_field_name */
/** @var string $fourth_field_name */
/** @var string $article_class */
/** @var string $image_class */
?>


<h2 class="section_second_title"><?= get_field($field_name . '_title') ?></h2>

<img class="filter" src="<?= get_field($field_name . '_image')['url'] ?>"
     alt="<?= get_field($field_name . '_image')['alt'] ?>"
     width="<?= get_field($field_name . '_image')['width'] ?>"
     height="<?= get_field($field_name . '_image')['height'] ?>">

<?php if ($field_name === 'houses') { ?>
    <div class="center">

        <p class="text"><?= get_field($field_name . '_first_text') ?></p>

        <p class="text"><?= get_field($field_name . '_second_text') ?></p>

    </div>
<?php } ?>

<article class="<?= $article_class ?>">

    <h3 class="<?php echo ($field_name !== 'shops') ? 'hidden' : ''; ?>"><?= get_field($field_name . '_' . $second_field_name . '_title') ?></h3>

    <img class="<?= $article_class ?>_image <?= $image_class ?>"
         src="<?= get_field($field_name . '_' . $second_field_name . '_image')['url'] ?>"
         alt="<?= get_field($field_name . '_' . $second_field_name . '_image')['alt'] ?>"
         width="<?= get_field($field_name . '_' . $second_field_name . '_image')['width'] ?>"
         height="<?= get_field($field_name . '_' . $second_field_name . '_image')['height'] ?>">

    <?php if ($field_name === 'shops') { ?>

        <div class="<?= $article_class ?>_positioning">

            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $second_field_name . '_address_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_address_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_address_second_list_element') ?></li>

                </ul>

            </div>

            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $second_field_name . '_schedule_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_schedule_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_schedule_second_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_schedule_third_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_schedule_fourth_list_element') ?></li>

                </ul>

            </div>

        </div>


    <?php } else { ?>

        <ul class="<?= $article_class ?>_list">

            <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_first_list_element') ?></li>
            <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $second_field_name . '_second_list_element') ?></li>

        </ul>

    <?php } ?>

</article>

<article class="<?= $article_class ?>">

    <h3 class="<?php echo ($field_name !== 'shops') ? 'hidden' : ''; ?>"><?= get_field($field_name . '_' . $third_field_name . '_title') ?></h3>

    <img class="<?= $article_class ?>_image <?= $image_class ?>"
         src="<?= get_field($field_name . '_' . $third_field_name . '_image')['url'] ?>"
         alt="<?= get_field($field_name . '_' . $third_field_name . '_image')['alt'] ?>"
         width="<?= get_field($field_name . '_' . $third_field_name . '_image')['width'] ?>"
         height="<?= get_field($field_name . '_' . $third_field_name . '_image')['height'] ?>">

    <?php if ($field_name === 'shops') { ?>

        <div class="<?= $article_class ?>_positioning">

            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $third_field_name . '_address_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_address_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_address_second_list_element') ?></li>

                </ul>

            </div>

            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $third_field_name . '_schedule_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_schedule_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_schedule_second_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_schedule_third_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_schedule_fourth_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_schedule_fifth_list_element') ?></li>

                </ul>

            </div>

        </div>


    <?php } else { ?>

        <ul class="<?= $article_class ?>_list">

            <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_first_list_element') ?></li>
            <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_second_list_element') ?></li>
            <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $third_field_name . '_third_list_element') ?></li>

        </ul>

    <?php } ?>


</article>

<?php if (isset($fourth_field_name)) { ?>

    <article class="<?= $article_class ?>">

        <h3 class="<?php echo ($field_name !== 'shops') ? 'hidden' : ''; ?>"><?= get_field($field_name . '_' . $fourth_field_name . '_title') ?></h3>

        <img class="<?= $article_class ?>_image <?= $image_class ?>"
             src="<?= get_field($field_name . '_' . $fourth_field_name . '_image')['url'] ?>"
             alt="<?= get_field($field_name . '_' . $fourth_field_name . '_image')['alt'] ?>"
             width="<?= get_field($field_name . '_' . $fourth_field_name . '_image')['width'] ?>"
             height="<?= get_field($field_name . '_' . $fourth_field_name . '_image')['height'] ?>">

        <div class="<?= $article_class ?>_positioning">

            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $fourth_field_name . '_address_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_address_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_address_second_list_element') ?></li>

                </ul>

            </div>


            <div>

                <h4 class="<?= $article_class ?>_list_title"><?= get_field($field_name . '_' . $fourth_field_name . '_schedule_title_list') ?></h4>

                <ul class="<?= $article_class ?>_list">

                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_schedule_first_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_schedule_second_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_schedule_third_list_element') ?></li>
                    <li class="<?= $article_class ?>_list_element text"><?= get_field($field_name . '_' . $fourth_field_name . '_schedule_fourth_list_element') ?></li>

                </ul>

            </div>

        </div>

    </article>

<?php } ?>

