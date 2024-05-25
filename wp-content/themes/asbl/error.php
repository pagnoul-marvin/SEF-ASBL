<?php
/*
Template Name: Error
*/
get_header()
?>

    <main>

        <section id="error" class="spacing odd">

            <h2><?= get_field('error_title')?></h2>
            <p class="text"><?= get_field('error_text')?></p>
            <a class="section_link_hover" href="<?= get_field('error_link')?>" title="Appeler le +32 85 21 57 52" ><?= get_field('error_link')?></a>

        </section>

    </main>

<?php get_footer() ?>