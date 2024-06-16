<?php
/*
Template Name: Our second-hand shops
*/
get_header()
?>

    <main>

        <section class="odd_unlinked_section spacing">

            <?php component('list_section.section', [

                'field_name' => 'shops',
                'second_field_name' => 'first_shop',
                'third_field_name' => 'second_shop',
                'fourth_field_name' => 'third_shop',
                'article_class' => 'shops',
                'image_class' => 'filter',

            ]); ?>

        </section>

        <section class="even_unlinked_section spacing" id="map">

            <?php component('unlinked_section.section', [
                'field_name' => 'map',
            ]); ?>

            <ul>
                <li>
                    <div>
                        <img src="<?= get_field('map_first_map')['url'] ?>"
                             alt="<?= get_field('map_first_map')['alt'] ?>"
                             width="<?= get_field('map_first_map')['width'] ?>"
                             height="<?= get_field('map_first_map')['height'] ?>">
                        <div>
                            <h3><?= get_field('map_first_map_title') ?></h3>
                            <a class="link_hover" href="<?= get_field('map_first_map_link')['url'] ?>"
                               title="<?= get_field('map_first_map_link')['title'] ?>"><?= get_field('map_first_map_link')['title'] ?></a>
                        </div>
                    </div>
                </li>

                <li>
                    <div>
                        <img src="<?= get_field('map_second_map')['url'] ?>"
                             alt="<?= get_field('map_second_map')['alt'] ?>"
                             width="<?= get_field('map_second_map')['width'] ?>"
                             height="<?= get_field('map_second_map')['height'] ?>">
                        <div>
                            <h3><?= get_field('map_second_map_title') ?></h3>
                            <a class="link_hover" href="<?= get_field('map_second_map_link')['url'] ?>"
                               title="<?= get_field('map_second_map_link')['title'] ?>"><?= get_field('map_second_map_link')['title'] ?></a>
                        </div>
                    </div>
                </li>

                <li>
                    <div>
                        <img src="<?= get_field('map_third_map')['url'] ?>"
                             alt="<?= get_field('map_third_map')['alt'] ?>"
                             width="<?= get_field('map_third_map')['width'] ?>"
                             height="<?= get_field('map_third_map')['height'] ?>">
                        <div>
                            <h3><?= get_field('map_third_map_title') ?></h3>
                            <a class="link_hover" href="<?= get_field('map_third_map_link')['url'] ?>"
                               title="<?= get_field('map_third_map_link')['title'] ?>"><?= get_field('map_third_map_link')['title'] ?></a>
                        </div>
                    </div>
                </li>
            </ul>

        </section>

        <section class="odd spacing">

            <?php component('linked_section.section', [
                'field_name' => 'support_section',
                'page' => 'Nous soutenir',
            ]) ?>

        </section>

    </main>

<?php get_footer() ?>