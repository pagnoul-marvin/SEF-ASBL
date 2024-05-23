<?php
/** @var string $field_name */
/** @var string $first_page */
/** @var string $second_page */
/** @var string $third_page */
/** @var string $fourth_page */
?>


<h2><?= get_field($field_name . '_title') ?></h2>

<div class="center">

    <p class="text"><?= get_field($field_name . '_answer') ?></p>

</div>

<div class="faq_links">

    <p class="faq_links_text">Vous pouvez vous rediriger vers&nbsp;:</p>

    <ul class="faq_links_list">
        <li class="faq_links_list_element">
            <a class="link_hover" title="Aller vers &laquo;<?= $first_page ?>&raquo;"
               href="<?= esc_url(get_field($field_name . '_first_link')['url']); ?>"><?= esc_html(get_field($field_name . '_first_link')['title']); ?></a>
        </li>


        <?php if ($field_name === 'second_question') { ?>

            <li class="faq_links_list_element">
                <a class="link_hover" title="Aller vers <?= $second_page ?>"
                   href="<?= esc_url(get_field($field_name . '_second_link')['url']); ?>"><?= esc_html(get_field($field_name . '_second_link')['title']); ?></a>
            </li>

            <li class="faq_links_list_element">
                <a class="link_hover" title="Aller vers <?= $third_page ?>"
                   href="<?= esc_url(get_field($field_name . '_third_link')['url']); ?>"><?= esc_html(get_field($field_name . '_third_link')['title']); ?></a>
            </li class="faq_links_list_element">

            <li class="faq_links_list_element">
                <a class="link_hover" title="Aller vers <?= $fourth_page ?>"
                   href="<?= esc_url(get_field($field_name . '_fourth_link')['url']); ?>"><?= esc_html(get_field($field_name . '_fourth_link')['title']); ?></a>
            </li>


        <?php } ?>

    </ul>

</div>







