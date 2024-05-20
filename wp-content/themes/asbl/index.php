<?php
get_header();

?>

<main>

    <section class="odd spacing">

        <h2 class="section_second_title"><?= get_field('who_are_we_title') ?></h2>

        <img class="filter" src="<?= get_field('who_are_we_image')['url'] ?>"
             alt="<?= get_field('who_are_we_image')['alt'] ?>">

        <div class="center">

            <p class="text"><?= get_field('who_are_we_text') ?></p>

        </div>

            <a class="section_link" title="Aller vers la page Qui sommes-nous ?" href="<?= esc_url(get_field('who_are_we_link')['url']); ?>"><?= esc_html(get_field('who_are_we_link')['title']); ?></a>

            <p class="section_link_hover"><?= esc_html(get_field('who_are_we_link')['title']); ?></p>

    </section>

</main>

<?php get_footer(); ?>
