<?php
/*
Template Name: Pictures gallery
*/
get_header()
?>

    <main>

        <section id="slider" class="odd_unlinked_section spacing">

            <?php component('sliders.slider', [
                    'field_name' => 'gallery'
            ]) ?>

        </section>

    </main>

<?php get_footer() ?><?php
